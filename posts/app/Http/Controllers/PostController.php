<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function show()
    {   
        $data=Post::all();
        return view('list',['key' => $data]);
    }
    function main(){
        $lm= DB::table('posts')
        ->where('active','=',1)
        ->latest()
        
        ->limit(5)
        ->get();
        
        
      return view('limit',['lm'=>$lm]);
    }
}
