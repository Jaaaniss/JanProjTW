<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Output\ConsoleOutput;

class SizeController extends Controller
{
        public function insert(Request $request){
            
            $size = $request->foot_size_cm;
            $data=array('foot_size_cm'=>$size);
            DB::table('users')->where("id",Auth::user()->id)->update($data);
            return back();
    }
}

