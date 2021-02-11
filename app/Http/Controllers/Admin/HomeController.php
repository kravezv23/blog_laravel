<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;

class HomeController extends Controller
{
    public function index()
    {
        $posts_count = Posts::all()->count();

        return view('admin.home.index',[
            'posts_count' => $posts_count
        ]);
    }
}
