<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('posts.create');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */

    public function store(Request $request){
        Post::create($request->all());
 
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id){
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resourcee
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storagee
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storagee
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function contact(){
        $people = ['Joe', 'Loz', 'Babu', 'Mario'];
        return view('contact', compact('people'));
    }

    public function show_post($id, $name, $password){
        // ->with() method is great for small bits of data to be passed. 
        // return view('post')->with('id', $id);
        // Use compact() for multidata 
        return view('post', compact('id', 'name', 'password'));
    }

    public function findPost(){
        // View::insertData.blade.php

        return view('insertData', ["people"=>["james", "joe", "dan"]]);
    }

    public function insertPost(Request $request){
        $newPost = new Post();

        $newPost->title = "hello 123";
        $newPost->body = $request->post()['nameInsert'];

        $newPost->save();
        

    }
}