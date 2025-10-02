<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', [HomeController::class, 'index']);


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{producto}', [PostController::class, 'show']);



/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('prueba', function () {

    //crear un nuevo post"


    //  $post = new Post;
    //  $post->title = 'Titulo de pruEba 4';
    //  $post->content = 'Contenido dE prueba 4';
    //  $post->categoria = 'Categoria De prueba 4';
    //  $post->save();



    //buscar un post por id
    $post = Post::find(4);

    //  //buscar un post por titulo y actualizar la categoria
    //  $post = Post::where('title', 'Titulo de prueba')->first();

    //  $post->categoria = 'Categoria web';
    //  $post->save();

    //recuperar todos los posts
    //  $post = Post::all();

    //recuperar todos los posts donde el id sea mayor o igual a 2
    //$post = Post::where('id', '>=', '2')->get();

    //ordenar los posts por id de forma ascendente
    //$post = Post::orderBy('id', 'asc')->get();

    //ordenar los posts por id de forma descendente
    //$post = Post::orderBy('id', 'desc')->get();

    //ordenar los posts por id de forma ascendente y limitar el resultado a 2
    // $post = Post::orderBy('id', 'asc')->limit(2)->get();

    //ordenar los posts por id de forma descendente y limitar el resultado a 2
    //$post = Post::orderBy('id', 'desc')->limit(2)->get();

    //seleccionar solo el id, title y content
   // $post = Post::select('id', 'title', 'content')->get();

   //seleccionar solo el id, title y content y ordenarlos por categoria de forma ascendente y limitar el resultado a 2
    // $post = Post::orderBy('categoria', 'asc')
    //     ->select('id', 'title', 'content')
    //     ->take(2)
    //     ->get();
    
    //eliminar un post por id
    // $post = Post::find(1);
    // $post->delete();
    // return "Post eliminado correctamente";

    // //eliminar todos los posts
    // $post = Post::all();
    // $post->delete();
    // return "Todos los posts eliminados correctamente";




    return $post;
});


require __DIR__ . '/auth.php';
