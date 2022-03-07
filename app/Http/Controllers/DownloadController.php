<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class DownloadController extends Controller
{
    function onDownload($Folderpath,$name){
       $result= storage::download($Folderpath."/".$name);
       return $result;
    }
    function onSelectFileList(){
        $result= DB::table('myfile')->get();
        return $result;
        }
}