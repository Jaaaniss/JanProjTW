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

        $list = Vans::where('cm',$size)->get();
        $closest = null;
        $using_closest = false;

        if (!count($list)) {
            $list = Vans::pluck('cm');
            foreach ($list as $item) {
                if ($closest === null || abs($size - $closest) > abs($item - $size)) {
                    $closest = $item;
                }
            }
            $list = Vans::where('cm',$closest)->get();
        }

        return response()->json([
            'data' => $list,
            'closest' => $closest,
        ]);
    }

    public function vans2(){

        $vans = vans::all();
        $nike = nike::all();
        $adidas = adidas::all();
        $newbalance = newbalance::all();

        if (Auth::user()->foot_size_cm == null) {
            return view('enter_size',['vans'=>$vans,'nike'=>$nike,'adidas'=>$adidas, 'newbalance'=>$newbalance]);
        } else {
           return redirect("/check-size");
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
        return view('manage_tables/manage_Vans',['vans'=>$vans]);
    }


    public function nike3()
    {
        $nike = nike::all();
        return view('manage_tables/manage_Nike',['nike'=>$nike]);
    }


    public function adidas3()
    {
        $adidas = adidas::all();
        return view('manage_tables/manage_Adidas',['adidas'=>$adidas]);
    }


    public function newbalance3()
    {
        $newbalance = NewBalance::all();
        return view('manage_tables/manage_NewBalance',['newbalance'=>$newbalance]);
    }


    public function users3()
    {
        $userr = User::all();
        return view('manage_tables/manage_Users',['userr'=>$userr]);
    }

}
