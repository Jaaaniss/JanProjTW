<?php

namespace App\Http\Controllers;

use App\Models\Adidas;
use App\Models\NewBalance;
use App\Models\Nike;
use App\Models\User;
use App\Models\Vans;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function destroyAnything($id, $company)
    {
        $item = null;
        switch ($company) {
            case 'vans':
                $item = Vans::find($id);
                break;
            case 'adidas':
                $item = Adidas::find($id);
                break;
            case 'nike':
                $item = Nike::find($id);
                break;
            case 'nb':
                $item = NewBalance::find($id);
                break;
        }

        $item->delete();
        return redirect("manage_tables/manage_$company")->with('status', 'Size Deleted Successfully');
    }


    public function destroy_user($id)
    {
        $userr = User::find($id);
        $userr->delete();
        return redirect('manage_tables/manage_users')->with('status','User Deleted Successfully');
    }
}
