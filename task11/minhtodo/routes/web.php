<?php

use Illuminate\Support\Facades\Route;
use App\Models\task;
use Illuminate\Support\Facades\Request;

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
    $task = task::orderBy('creat_at','desc')->get();
    return view('task',['task'=>$task]);
});


// post
Route::post('/task',function (\Illuminate\Http\Request $request){
    $validator = Validator::make($request->all(),[
        'name'=>'required|max:255',
    ]);
    if($validator->fails()){
         return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
         $task = new task();
         $task->name = $request['name'];
         $task->save();

         return redirect('/');

});

//delete task
Route::delete('/task/{task}',function (){

});
