<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class Blogcontroller extends Controller
{
    public function blog()
    {

        $data['blog'] = Blog::all();
        return view ("blog",$data);
    }
    
}
