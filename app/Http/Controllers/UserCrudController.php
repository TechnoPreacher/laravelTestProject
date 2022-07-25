<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserCrudController extends Controller
{
    public function userRegistration()
    {
        return view('users.create');
    }

    public function userStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'pass' => 'required|string|min:3',
        ]);
        $user = new User();
        $user->name = $request->input('name');
        $user->pass = $request->input('pass');
        $user->save();
        return redirect()->back();
    }

    public function userDeletion()
    {
        return "user's delete method";
    }

    public function userShowing()
    {
        $user = User::query()->latest()->first();
        return view('users.show', ['user' => $user]);
    }


    public function userUpdate(Request $request)
    {

        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'pass' => 'required|string|min:3',
        ]);

        User::query()->
        where('id', '=', $request->input('id'))->
        update(['name' => $request->input('name'),
            'pass' => $request->input('pass')
        ]);

        return redirect()->back();
    }


    public function userAuthentication()
    {
        return "user's authentication method";
    }


}
