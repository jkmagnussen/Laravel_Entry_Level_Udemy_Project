<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {

    public function index() {

        $users = User::paginate(10);
        return view('admin.users.index', ['users' => $users]);
    }

    //Route Model Binding - access the user model by injecting it directly into the function as an argument 
    public function show(User $user) {
        return view('admin.users.profile', ['user' => $user]);
    }



    public function update(User $user) {
        // up to 2:35 in the course 
        $inputs = request()->validate([
            'username' => ['required', 'string', 'max:255', 'alpha_dash'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'avatar' => ['file'],

        ]);


        if (request('avatar')) {
            $inputs['avatar'] = request('avatar')->store('images');
        }

        $user->update($inputs);
        return back();
    }

    // Route model binding 
    public function destroy(User $user) {
        $user->delete();
        session()->flash('user-deleted', 'User has been deleted');
        return back();
    }
}