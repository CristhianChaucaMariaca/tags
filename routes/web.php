<?php

use Illuminate\Support\Facades\Route;

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
// use App\Post;
// use Conner\Tagging\Model\Tag;
// Route::get('/', function () {
    // Buscamos el POST con id 1
    // $post = Post::find(1);

    // Elimina la etiqueta con el nombre php del Post
    // $post->untag(['php']);

    // Elimina todas las etiquetas si no envias ningun valor
    // $post->untag();

    // Creamos Etiquetas para el Post
    // $post->tag(['php','Laravel','html','VueJs']);

    /*
    |   1. Buscamos la etiqueta con ID 3.
    |   2. Asignamos al campo de la etiqueta SUGGEST el valor de TRUE.
    |   3. Guardamos el registro de la etiqueta.
    |   3. Retornamos el valor de la etiqueta con dd
    */
    /* $tag = Tag::find(3);
    $tag->suggest = true;
    $tag->save(); */

    /*
    |   Buscamos todas las etiquetas que estan destacadas
     */
    /* $tags = Tag::suggested()->get();
    dd($tags); */

    /*
    |   ASIGNANDO ETIQUETAS A GRUPOS
    |   1. Buscamos el Tag PHP que tiene el ID.
    |   2. Asignamos el grupos Backen a la etiqueta que buscamos.
    |   3. Mostramos el resultado.
    */
    /* $tag1 = Tag::find(3);
    $tag2 = Tag::find(4);

    $tag1->setGroup('Frontend');
    $tag2->setGroup('Frontend'); */

// });


Route::get('/','PostController@index')->name('posts.index');

Route::post('guardar-post','PostController@store')->name('posts.store');
