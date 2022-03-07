<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

     // function onFileUp(Request $request){
    //     $request->file('Filekey')->store('images');
    //     // $request->Filekey->store('images');
    // }

    // public function uploadForm(){
    //     return view('Home');
    // }
     function onFileUp(Request $req){
     $result = $req->file('Filekey')->store('images');
     return $result;

    }
}