<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function categorySave()
    {
        return view('admin.category');
    }
}
