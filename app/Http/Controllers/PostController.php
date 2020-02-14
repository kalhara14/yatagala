<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //

    public function index(){
        $postlist = DB::select('SELECT * FROM posts ORDER BY id  ');
       

        return view('posts-template', compact ('postlist'));
    
    } 

}
