<?php

use Illuminate\Support\Facades\Route;

use App\Models\Post;

// use App\Http\Controllers\PostController; //

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return "Hi about page";
// });

// Route::get('/contact', function () {
//     return "Hi i am contact";
// });

// Route::get('/post/{id}/{name}', function ($id, $name) {
//     return "This is post number ". $id . " " . $name;
// });

// Route::get('admin/posts/example', array('as'=>'admin.home', function () {
//     $url =route('admin.home');

//     return "this url is ". $url;
// }));


// Route::get('/post', 'App\Http\Controllers\PostController@index');

// Route::get('/contact','App\Http\Controllers\PostController@contact');

// Route::get('post/{id}/{name}/{password}', 'App\Http\Controllers\PostController@show_post');

Route::get('/insert', function(){
    DB::insert('insert into posts(title, body) values(?, ?)', ['PHP with Laravel', 'Laravel example php ']);
});

Route::get('/read', function(){
    $results = DB::select('select * from posts where id = ?', [1]);

    foreach($results as $post){
        return $post->title;
    }
});

Route::get('/update', function(){
    $updated = DB::update('update posts set title = "updated title" where id = ?', [1]);

    return $updated;
});

Route::get('/delete', function(){

    DB::delete('delete from posts where id = ?', [1]);

});
/*
|--------------------------------------------------------------------------
| Application routes
|--------------------------------------------------------------------------
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
*/

Route::group(['middleware' => ['web']], function (){

});


/*
|--------------------------------------------------------------------------
| ELOQUENT - ORM (Object Relational Model)
|--------------------------------------------------------------------------

*/

Route::get('/find', function(){
   
    // $posts = Post::all();

    $post = Post::find(4);

    // foreach($posts as $post){
    //     return $post->title;
    // }

    return $post->title;
    
});