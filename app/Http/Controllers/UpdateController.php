<?php

namespace App\Http\Controllers;

use App\Models\Adidas;
use App\Models\Comment;
use App\Models\NewBalance;
use App\Models\Nike;
use App\Models\User;
use App\Models\Vans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateController extends Controller {

    public function updateAnything( $id,$company,Request $request)
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

        $item->cm = $request->input('CM');
        $item->eu = $request->input('EU');
        $item->uk = $request->input('UK');
        $item->usm = $request->input('US_M');
        $item->usw = $request->input('US_W');
        $item->update();

        return redirect("manage_tables/manage_$company")
                ->with('status','Sizes Updated Successfully');
    }


    public function update_user(Request $request, $id)
    {
        $userr = User::find($id);
        $userr->name = $request->input('name');
        $userr->foot_size_cm = $request->input('foot_size_cm');
        $userr->update();

        return redirect('manage_tables/manage_Users')
                ->with('status','User Updated Successfully');
    }

    public function update_profile(Request $request)
    {
        $profile = User::find(Auth::id());
        $profile->name = $request->input('name');
        $profile->email = $request->input('email');
        $profile->foot_size_cm = $request->input('foot_size_cm');
        $profile->update();

        return redirect('auth/user/user_profile')
                ->with('status','Profile Updated Successfully');
    }


    public function update(Request $request, $id)
    {
        $comments = Comment::find($id);
        $comments->content = $request->input('content');
        $comments->update();

        return redirect()->back()->with('success', 'Comment updated successfully.');
    }
}
