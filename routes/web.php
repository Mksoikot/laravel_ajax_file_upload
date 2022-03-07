<?php

use App\Http\Controllers\HomeController;
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
    return view('Home');
});

// Route::post('/fileUp','UploadController@onFileUp');


Route::get('/upload','UploadController@Upload');

Route::post('/upload','UploadController@UploadFile')->name('Uploadfile');

// HomeController

// Route::get('/','HomeController@uploadForm');
Route::post('/fileup','HomeController@onFileUp');


// DownloadController
Route::get('/fileDownload/{Folderpath}/{name}','DownloadController@onDownload');

Route::get('/fileList','DownloadController@onSelectFileList');


Route::get('/filedelete','DeleteController@onDelete');