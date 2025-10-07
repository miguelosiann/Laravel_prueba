<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //aqui se enlista todos los posts
    public function index()
    {
        //$posts = Post::all();
        $posts = Post::orderBy('id', 'desc')->paginate(6);
        //compact es una funcion que se encarga de compactar los datos y enviarlos a la vista
        return view('posts.index', compact('posts'));
    }

    //aqui se crea un nuevo post o se renderiza el formulario de creacion
    public function create()
    {
        return view('posts.create');
    }

    //aqui se guarda un nuevo post que se envio desde el formulario de creacion
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->is_active = true;
        $post->published_at = now();
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post creado exitosamente');
    }

    //aqui se muestra un post en particular
    public function show($post)
    {
        $post = Post::find($post);
       

        return view('posts.show', compact('post'));
    }

    //aqui se edita un post en particular
    public function edit($post)
    {
        $post = Post::find($post);
        return view('posts.edit', compact('post'));
    }

    //aqui se actualiza un post en particular
    public function update(Request $request, $post)
    {
        $post = Post::find($post);
        $post->update($request->all());
        return redirect()->route('posts.index')->with('success', 'Post actualizado exitosamente');
    }

    //aqui se elimina un post en particular
    public function destroy($post)
    {
        $post = Post::find($post);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post eliminado exitosamente');
    }
}
