<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
    public function all_post(){
        $category = Category::all();
        foreach ($category as $cat){
            return $cat->posts();
        }
        // return $category;
    }
}
