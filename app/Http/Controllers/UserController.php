<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $categories = User::all();
        return $categories;
    }
    public function show($id){
        $categories = User::find($id);
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
    public function delete($id){
        //ข้างในนี้ไม่มีอะไร
    }
}
