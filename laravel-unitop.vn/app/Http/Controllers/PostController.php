<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return "Hiển thị danh sách bài viết";
        return view('post');
    }
    function add()
    {
        DB::table('post')->insert([
            'title' => 'Bài viết 1',
            'content' => 'Nội dung bài viết 1',
            'user_id' => 1,  
            'created_at' => now(), 
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Hiển thị bài viết có id: $id";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return view('post.update', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return view('post.delete', ['id' => $id]);
    }
}
