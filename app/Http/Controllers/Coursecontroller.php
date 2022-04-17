<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class Coursecontroller extends Controller
{
    public function course()
    {
        $data['course'] = Course::all();
        return view ("course",$data);
    }
}
