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

        $list = Adidas::where('cm',$size)->get();
        $closest = null;
        $using_closest = false;

        if (!count($list)) {
            $list = Adidas::pluck('cm');
            foreach ($list as $item) {
                if ($closest === null || abs($size - $closest) > abs($item - $size)) {
                    $closest = $item;
                }
            }
            $list = Adidas::where('cm',$closest)->get();
        }
        return response()->json(array('data' => $list));
    }

}
