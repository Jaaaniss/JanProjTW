<?php

namespace App\Http\Controllers;

use App\Models\Adidas;
use App\Models\NewBalance;
use App\Models\Nike;
use App\Models\Vans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Node\Inline\Newline;

class AddController extends Controller
{
    public function create()
    {
        return view('manage_tables/add/add');
    }


    public function storeAnything(Request $request)
    {
        $item = null;
        switch ($request->company) {
            case 'vans':
                $item = new Vans;
                break;
            case 'adidas':
                $item = new Adidas;
                break;
            case 'nike':
                $item = new Nike;
                break;
            case 'nb':
                $item = new NewBalance;
                break;
        }

        $item->cm = $request->input('CM');
        $item->eu = $request->input('EU');
        $item->uk = $request->input('UK');
        $item->usm = $request->input('US_M');
        $item->usw = $request->input('US_W');
        $item->save();
        return redirect("manage_tables/manage_$request->company")->with('status','Size Added Successfully');
    }
}
