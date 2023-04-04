<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\NewBalance;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class NBController extends Controller {

    public function index($size)
    {
        $time = DB::table("newbalance")
            ->where("cm",$size);
        return response()->json(array('data' => $time->get()));
    }
}
