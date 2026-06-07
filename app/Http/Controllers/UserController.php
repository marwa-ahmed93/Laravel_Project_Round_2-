<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
 public function index(){
    // echo "hi";
    return view('welcome');
 }

 public function create(){
    return view('user.create');
 }

public function store(Request $request){
//    echo "success";
    $validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required'
    ]);
 
    User::insert([
      'name'=>$validated['name'] ,
      'email'=>$validated['email'] ,
      'password'=>$validated['password'] 
    ]);
    // The blog post is valid...
 
    return redirect('/user');
} 

}
