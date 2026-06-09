<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function addImage($id)
    {
        $post = Post::find($id);
   if($post){
  $post->image()->create([
            'url' => 'post1.jpg'
        ]);
  }
      

        return "Image added";
    }
}
