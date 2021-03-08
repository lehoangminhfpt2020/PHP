<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Student;


//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function (){
    $students = Student::orderBy('id', 'asc')->get();

    return view('student',[
        'student'=>$students
    ]);
});

Route::post('/student', function (Request $request){
    $validator = Validator::make($request->all(),[
        'name'=> 'required|max:255',
        'age'=>'required|max:4',
        'address'=>'required|max:200',
        'telephone'=>'required'
    ]);
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    if ($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    $student = new Student;
    $student->name = $request->name;
    $student->age = $request->age;
    $student->address = $request->address;
    $student->telephone = $request->telephone;
    $student->save();
    return redirect('/');
});
