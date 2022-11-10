<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function create(Request $request){
        $user = new User();
        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->rut = $request->input('rut');
        $user->contact = $request->input('contact');
        $user->position = $request->input('position');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return redirect()->intended('/');
    }

    public function index(){
        $users = \DB::table('users')->get();
        return view(('admin/users/index'), compact('users'));   

    }

    public function show($id)
    {
        return view('user.profile', [
            'users' => User::findOrFail($id)
        ]);
    }

}
