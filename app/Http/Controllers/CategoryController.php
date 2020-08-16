<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return $categories;
    }
    public function show($id){
        $categories = Category::find($id);
        return $categories;
    }
    public function create(){
        //ข้างในนี้ไม่มีอะไร
    }
    public function store(){
        //ข้างในนี้ไม่มีอะไร
    }
    public function edit($id){
        //ข้างในนี้ไม่มีอะไร
    }
    public function update($id){
        //ข้างในนี้ไม่มีอะไร
    }
}
