<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

// use App\Http\Controllers\PostController; 

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

/*
|--------------------------------------------------------------------------
| DATABASE RAW SQL QUERIES
|--------------------------------------------------------------------------
*/

Route::get('/insert', function(){
    DB::insert('INSERT INTO posts(title, body) VALUES(?, ?)', ['PHP with Laravel', 'Laravel example php ']);
});

Route::get('/read', function(){
    $results = DB::select('SELECT * FROM posts WHERE id = ?', [1]);

    return $results[0]->title;
});

Route::get('/update', function(){
    $updated = DB::update('UPDATE posts SET title = "new update" WHERE id = ?', [1]);

    return $updated;
});

Route::get('/delete', function(){
    $deleted = DB::delete('DELETE FROM posts WHERE id = ?', [1]);

    return $deleted;
});


/*
|--------------------------------------------------------------------------
| Application routess
|--------------------------------------------------------------------------
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more
*/

Route::group(['middleware' => ['web']], function (){

});

 

/*
|--------------------------------------------------------------------------
| ELOQUENT -- ORM (Object Relational Model)
|--------------------------------------------------------------------------
*/

Route::get('/read', function(){

    $posts = Post::all();

    foreach ($posts as $post){
        return $post->title;
    }
});

Route::get('/find', function(){

    $post = Post::find(3);

    return $post->title;
 
});

Route::get('/findwhere', function(){

    $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();

    return $posts;

});

Route::get('findmore', function(){

    $posts = Post::findOrFail(2);

    return $posts;
});


Route::get('/basicinsert', function(){

    $post = Post::find(5);

    $post->title = 'changes';
    $post->body = 'chnages';

    $post->save();

});