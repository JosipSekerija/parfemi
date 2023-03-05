<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Proizvod;

class ProizvodController extends Controller
{
    public function redirectone()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.home');
        }

        else{
            $data = proizvod::all();
            return view('User.proizvodi',compact('data'));
        }
    }

    public function indexone()
    {
        if(Auth::id())
        {
            $data = proizvod::all();
            return view('User.proizvodi',compact('data'));
        }
        else{
            $data = proizvod::all();
            return view('User.proizvodi',compact('data')); 
        }

        
    }

}
