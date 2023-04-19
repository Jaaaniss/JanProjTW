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
        $list = NewBalance::where('cm',$size)->get();
        $closest = null;
        $using_closest = false;

        if (!count($list)) {
            $list = NewBalance::pluck('cm');
            foreach ($list as $item) {
                if ($closest === null || abs($size - $closest) > abs($item - $size)) {
                    $closest = $item;
                }
            }
            $list = NewBalance::where('cm',$closest)->get();
        }
        return response()->json(array('data' => $list));
    }
}
