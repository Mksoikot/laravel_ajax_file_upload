<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
     $path = $req->file('Filekey')->store('public');
       $result= DB::table('myfile')->insert(['file_path'=>$path]);
       if($result==true){
           return 1;
       }else{
           return 0;
       }


    }
}