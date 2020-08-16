<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id',auth()->user()->id)->get();
        $data = [
            'posts' => $posts
        ];
        return view('post.index', $data);
    }
    public function show($id)
    {
        $category = Post::find($id);
        return $category;
    }
    public function create()
    {
        //ข้างในนี้ไม่มีอะไร
    }
    public function store()
    {
        //ข้างในนี้ไม่มีอะไร
    }
    public function edit($id)
    {
        //ข้างในนี้ไม่มีอะไร
    }
    public function update($id)
    {
        //ข้างในนี้ไม่มีอะไร
    }
}
