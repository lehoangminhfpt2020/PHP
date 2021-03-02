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
//
//// giới thiệu về controller
//use App\Http\Controllers\C4Controller;
//Route::get('/',[C4Controller::class,'ok']);





////ủy quyền trong Route
//Route::get('/where', function (){
//    return Redirect::route('directions');
//});
//use App\Http\Controllers\HomeController;
//Route::get('where',[HomeController::class,'showWelcome']);



////Học về Route
//Route::get('/', function () {
//    return view('okem');
//});


//Route::get('/','App\Http\Controllers\HomeController@showWelcome');

Route::get('about',function ()
{
    return 'about Content';
});

Route::get('about/directions',function ()
{
    return 'about directions content';
});

Route::any('submit-form',function (){
    return 'Procces ok';
});

Route::get('about/{thesubject}',function ($thesubject){
    return $thesubject. '<br> ok content of sub';
});



//Bài tập thử thách
Route::get('about/class/{price}/{art}', function ($Price,$art){
    return "content $Price  <br> and $art ";
});


//Chương 5 tạo hẳn 1 trang web mới
use App\Http\Controllers\ShowProfile;
Route::get('Profile/{name}',[ShowProfile::class, 'show']);

// tạo web mới
Route::get('/', function () {
    return view('index.blade.php');
});


//Chuong 7
//them du lieu vao DB
Route::get('/insert',function (){
    DB::insert('insert into post(title,body) value (?,?)',['PHP with Laravel','Laravel is the best framework']);
    return 'done';
});
//truy van du lieu
Route::get('/read',function (){
    $result = DB::select('select * from post where id > ?',[1]);
    foreach ($result as $post){
        return $post -> body;
    }
});

//cap nhat du lieu
Route::get('update',function (){
   $update = DB::update('update post set title = "new title hihi" where id> ?',[2]);
});

//xoa du lieu
Route::get('/delete',function (){
   $deleted = DB::delete('delete from post where id = ?',[1]);
   return $deleted;
});


