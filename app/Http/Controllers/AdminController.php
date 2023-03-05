<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Proizvod;
use App\Models\Narudzba;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function proizvod()
    {   
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
        return view('admin.proizvod');
        }
        else
        {
            return redirect('/onama');
        }
    }


    

    public function uploadproizvoda(Request $request)
    {
        $data=new proizvod;
        $slika=$request->file;
        $slikaime=time().'.'.$slika->getClientOriginalExtension();
        $request->file->move('productimage',$slikaime);
        $data->slika=$slikaime;
        $data->naziv=$request->naziv;
        $data->cijena=$request->cijena;
        $data->opis=$request->opis;
        $data->kolicina=$request->kolicina;
        $data->save();
        return redirect()->back()->with('message','Proizvod je uspješno dodan.');
    }

    public function prikaziproizvod()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='1'){
        $data=proizvod::all();
        return view('admin.prikaziproizvod', compact('data'));}
        else
        {
            return redirect('/onama');
        }
    }

    public function obrisiproizvod($id)
    {
        $data=proizvod::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function osvjeziproizvod($id)
    {
        $data=proizvod::find($id);
        return view('admin.osvjezipogled', compact('data'));
    }

    public function osvjeziproizvod2(Request $request ,$id)
    {
        $data=proizvod::find($id);

        $slika=$request->file;

        if($slika)
        {
        $slikaime=time().'.'.$slika->getClientOriginalExtension();
        $request->file->move('productimage',$slikaime);
        $data->slika=$slikaime;
        }
        $data->naziv=$request->naziv;
        $data->cijena=$request->cijena;
        $data->opis=$request->opis;
        $data->kolicina=$request->kolicina;
        $data->save();
        return redirect()->back()->with('message','Proizvod je uspješno osvježen.');
    }

    public function prikazinarudzbu()
    {
        $narudzba=narudzba::all();
        $usertype=Auth::user()->usertype;
        if($usertype=='1'){
        return view('admin.prikazinarudzbu',compact('narudzba'));}
        else {
            return redirect('/onama');
        }
    }

    public function updatestatus($id)
    {
        $narudzba=narudzba::find($id);
        $narudzba->status='dostavljeno';
        $narudzba->save();
        return redirect()->back();
    }
}
