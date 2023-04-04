<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Vans;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Nike;
use App\Models\Adidas;
use App\Models\NewBalance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VansController extends Controller {

    public function index($size)
    {
        $time = DB::table("vans")
            ->where('cm',$size);
        return response()->json(array('data' => $time->get()));
    }

    public function vans2(){

        $vans = vans::all();
        $nike = nike::all();
        $adidas = adidas::all();
        $newbalance = newbalance::all();

        if (Auth::user()->foot_size_cm == null) {
            return view('enter_size',['vans'=>$vans,'nike'=>$nike,'adidas'=>$adidas, 'newbalance'=>$newbalance]);
        } else {
           return redirect("/search_size");
        }
    }


    public function vans()
    {
        $vans = vans::all();
        $nike = nike::all();
        $adidas = adidas::all();
        $newbalance = newbalance::all();
        return view('start_pages/size_converter',['vans'=>$vans,'nike'=>$nike,'adidas'=>$adidas, 'newbalance'=>$newbalance]);
    }


    public function vans3()
    {
        $vans = vans::all();
        return view('manage_tables/manage_vans',['vans'=>$vans]);
    }


    public function nike3()
    {
        $nike = nike::all();
        return view('manage_tables/manage_nike',['nike'=>$nike]);
    }


    public function adidas3()
    {
        $adidas = adidas::all();
        return view('manage_tables/manage_adidas',['adidas'=>$adidas]);
    }


    public function newbalance3()
    {
        $newbalance = NewBalance::all();
        return view('manage_tables/manage_nb',['newbalance'=>$newbalance]);
    }


    public function users3()
    {
        $userr = User::all();
        return view('manage_tables/manage_users',['userr'=>$userr]);
    }

}
