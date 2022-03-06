<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{

   public function Upload(){
        return view('upload');
    }

    public function UploadFile(Request $req){
        $req->file->store('images');
        return 'File Has Been Upload Successfully';
    }

}