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

Route::get('/', function () {
    return view('welcome');
});

//chuong 8 Eloquent ORM
use App\Models\Post;
Route::get('realall',function (){
   $posts = \App\Models\Post::all();
   foreach ($posts as $p){
       echo $p->title. " " . $p->body;
       echo "<br>";
   }
});

Route::get('findid',function (){
   $posts = Post::where('id',2)
   ->orderBy('id','desc')->take(1)->get();
    foreach ($posts as $p){
        echo $p->title. " " . $p->body;
        echo "<br>";
    }
});

// tìm kiếm theo id
Route::get('findid1',function (){
    $posts = Post::where('id','>=',2)
        ->orderBy('id','desc')->take(10)->get();
    foreach ($posts as $p){
        echo $p->title. " " . $p->body;
        echo "<br>";
    }
});

// tìm kiếm nâng cao
Route::get('findid2',function (){
    $posts = Post::where('id','>=1',1)
        ->where('title','ijoiu')
        ->where('body','like','%oko%')
        ->orderBy('id','desc')
        ->take(10)
        ->get();
    foreach ($posts as $p){
        echo $p->title;
        echo "<br>";
    }
});


//insert qua model

Route::get('insert',function (){
   $p = new Post;
   $p->title = 'insert ORM';
   $p->body = 'done';
   $p->name = 1;
   $p->save();
});


// update orm
Route::get('update',function (){
    $p = Post::where('id',3)->first();
    $p->title = 'update';
    $p->body ='ahihi';
    $p->save();
});

// xoas giu lieu
Route::get('delete',function (){
   Post::where('id','>=',6)
   ->delete();
});

Route::get('destroy',function (){
   Post::destroy([4,2]);
});
