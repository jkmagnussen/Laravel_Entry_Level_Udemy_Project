<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller {


    public function index() {
        // echo "testing";
        return view('admin.roles.index');
    }

    public function store() {

        dd(request('name'));
    }

    // used command -  $user->roles()->attach($admin) to create a role_user link 
}
