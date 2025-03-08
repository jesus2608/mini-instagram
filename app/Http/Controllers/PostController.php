<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->texto = $request->texto;
        $path = Storage::disk('public')->putFileAs('', $request->file('urlImagen'), $request->texto.$request->usuario_id.'.jpg');
        $post->urlImagen = $request->texto.$request->usuario_id.'.jpg';
        $post->user_id = $request->usuario_id;
        $post->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $posts = Post::all();
        return view('post.show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // return $request;
        $post = Post::findOrFail($id);
        $post->texto = $request->texto;
        if($request->urlImagen){
        Storage::disk('public')->putFileAs('', $request->file('urlImagen'), $request->texto.$request->usuario_id.'.jpg');
        $post->urlImagen = $request->texto.$request->usuario_id.'.jpg';
    }else
       $post->urlImagen = $request->imagenActual;
       
        $post->user_id = $request->usuario_id;
        $post->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post= Post::findOrFail($id);
        $post->delete();
        return redirect('/');
    }
}
