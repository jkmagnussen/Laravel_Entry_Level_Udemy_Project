<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {

    //Route Model Binding - access the user model by injecting it directly into the function as an argument 
    public function show(User $user) {
        return view('admin.users.profile', ['user' => $user]);
    }
}