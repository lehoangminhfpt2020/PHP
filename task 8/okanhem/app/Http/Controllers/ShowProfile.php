<?php


namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class ShowProfile extends BaseController
{
    public function show($name){
        return view('Profile')->with('name',$name);
    }
}
