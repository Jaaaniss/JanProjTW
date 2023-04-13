<?php

namespace App\Http\Controllers;

use App\Models\Adidas;
use App\Models\NewBalance;
use App\Models\Nike;
use App\Models\User;
use App\Models\Vans;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function editAnything($id, $company)
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

        return view('manage_tables/edit/edit', compact('item', 'company'));
    }


    public function edit_user($id)
    {
        $userr = User::find($id);
        return view('manage_tables/edit/edit_users', compact('userr'));
    }

}
