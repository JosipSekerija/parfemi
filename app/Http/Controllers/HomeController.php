<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Proizvod;
use App\Models\Kosarica;
use App\Models\Narudzba;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.proizvod');
        }

        else{
            $data = proizvod::paginate(3);
            $user=auth()->user();
            $count=kosarica::where('mobitel',$user->phone)->count();
            return view('User.home',compact('data','count'));
        }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('redirect');
        }
        else
        {
            $data = proizvod::paginate(3);
            return view('User.home',compact('data'));
        }
        
    }

    public function search(Request $request)
    {
        $search=$request->search;
        if($search=='')
        {
            return view('User.proizvodi', compact('data'));
        }
        $data=proizvod::where('naziv', 'Like', '%'.$search.'%')->get();
        return view('User.proizvodi', compact('data'));
    }

    public function dodaj(Request $request ,$id)
    {
        if(Auth::id())
        {
            $user=auth()->user();
            $proizvod=proizvod::find($id);
            $kosarica=new kosarica;
            $kosarica->naziv=$user->name;
            $kosarica->mobitel=$user->phone;
            $kosarica->adresa=$user->address;
            $kosarica->naziv_proizvoda=$proizvod->naziv;
            $kosarica->cijena=$proizvod->cijena;
            $kosarica->kolicina=$request->kolicina;
            $kosarica->save();
            return redirect()->back()->with('message','Proizvod dodan u košaricu');
        }
        else
        {
            return redirect('login');
        }
    }

    public function prikazikosaricu()
    {
        $user=auth()->user();
        $kosarica=kosarica::where('mobitel',$user->phone)->get();
        $count=kosarica::where('mobitel',$user->phone)->count();
        return view('User.prikazikosaricu',compact('count','kosarica'));
    }

    public function obrisikosaricu($id)
    {
        $data=kosarica::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function potvrdinarudzbu(Request $request)
    {
        $user=auth()->user();
        $naziv=$user->name;
        $mobitel=$user->phone;
        $adresa=$user->address;

        foreach($request->nazivproizvoda as $key=>$nazivproizvoda)
        {
            $narudzba=new narudzba;
            $narudzba->naziv_proizvoda=$request->nazivproizvoda[$key];
            $narudzba->cijena=$request->cijena[$key];
            $narudzba->kolicina=$request->kolicina[$key];
            $narudzba->naziv=$user->name;
            $narudzba->mobitel=$user->phone;
            $narudzba->adresa=$user->address;
            $narudzba->status='Nije dostavljeno';
            $narudzba->save();
        }
        DB::table('kosaricas')->where('mobitel',$mobitel)->delete();
        return redirect()->back();
    }

}
