<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeleteController extends Controller
{
   function onDelete(){
    storage::delete(['images/F0mEb7vyrGdmknkmraJUkOAb6MxN9YCKkhxwvRpp.pptx','images/ihQ5cfiSTrMybErREpM4MkHTCN7AKzdFP6sHY6IZ.pptx']);
   }
}