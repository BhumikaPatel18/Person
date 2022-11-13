<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PersonController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function index()
    {
        // $posts = Post::all();
        $post = Post::all();
        return view('index') -> with('post', $post);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function create()
    {
        return view('create');
    }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//
    public function store(Request $request)
     {

        $request->validate([
            'name' => '',
            'DOB' => '',
            'age' => '',
            'phone_no' => '',
            'emai' => '',
            'gender' => '',
            'hobby' => '',
            'description' => '',
        ]);

        $posts = new Post;
        $posts->name= $request->name;
        $posts->DOB= $request->DOB;
        $posts->age= $request->age;
        $posts->phone_no= $request->phone_no;
        $posts->email= $request->email;
        $posts->gender= $request->gender;
        $posts->hobby= $request->hobby;
        $posts->description= $request->description;

        $querty = $posts->save();
        return redirect()->route('posts.index');


     }

     public function show($id)
     {
        $tshow=Post::find($id);

        return view('show', compact('tshow'));
     }


     public function edit($id)
     {
    $post = Post::findOrFail($id);

    return view('edit', compact('post'));
     }


     public function update(Request $request, $id)
     {
        $validatedData = $request->validate([
            'name' => '',
            'DOB' => '',
            'age' => '',
            'phone_no' => '',
            'emai' => '',
            'gender' => '',
            'hobby' => '',
            'description' => '',
        ]);
        Post::whereId($id)->update($validatedData);

        return redirect('/posts')->with('success', ' Data is successfully updated');
     }


     public function destroy($id)
     {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/posts')->with('success', ' Data is successfully deleted');
     }
}
