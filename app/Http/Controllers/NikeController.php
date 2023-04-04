<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Nike;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class NikeController extends Controller {

    public function index($size)
    {
        $time = DB::table("nike")
            ->where("cm",$size);
        return response()->json(array('data' => $time->get()));
    }
}
