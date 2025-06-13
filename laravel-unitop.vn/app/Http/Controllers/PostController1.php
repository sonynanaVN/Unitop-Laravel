<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController1 extends Controller
{
    //
    function add()
    {
        DB::table('post')->insert([
            'title' => 'Bài viết 1',
            'content' => 'Nội dung bài viết 1',
            'user_id' => 1,  
            'created_at' => now(), 
        ]);
    }
}
