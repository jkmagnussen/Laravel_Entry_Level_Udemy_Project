<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create', function(){

    // find the user which the role should be associable to 
    $user = User::find(1);

    // instantiate a new Role with an assoc array 
    $role = new Role(['name'=>'Administrator']);

    // access the roles method throught the user model and place the $instantiated $role variable inside of the roles save method 
    $user->roles()->save($role);
});

Route::get('/read',  function(){

    $user = User::find(1);

    foreach ($user->roles as $role){
        echo $role->name;
    }
});

// 01:25/ 4:43 slide 98 