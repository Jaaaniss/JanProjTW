<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Adidas;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AdidasController extends Controller {

    public function index($size)
    {
        $time = DB::table("adidas")
        ->where("cm",$size);
        return response()->json(array('data' => $time->get()));
    }

}
