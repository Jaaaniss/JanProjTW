<?php

namespace App\Http\Controllers;

use App\Models\Adidas;
use App\Models\NewBalance;
use App\Models\Nike;
use App\Models\User;
use App\Models\Vans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DestroyController extends Controller
{
    public function destroyAnything($id, $company)
    {
        $item = null;
        switch ($company) {
            case 'Vans':
                $item = Vans::find($id);
                break;
            case 'Adidas':
                $item = Adidas::find($id);
                break;
            case 'Nike':
                $item = Nike::find($id);
                break;
            case 'NewBalance':
                $item = NewBalance::find($id);
                break;
        }

        $item->delete();

        return redirect("manage_tables/manage_$company")
                ->with('status', 'Size Deleted Successfully');
    }


    public function destroy_user($id)
    {
        $userr = User::find($id);
        $userr->delete();

        return redirect('manage_tables/manage_Users')
                ->with('status','User Deleted Successfully');
    }

    public function destroy_user_from_profile()
    {
        $user = User::find(Auth::id());
        $user->delete();

        return redirect('auth/user/self-delete-success')
                ->with('status','Congratulations, You have deleted yourself.');
    }
}
