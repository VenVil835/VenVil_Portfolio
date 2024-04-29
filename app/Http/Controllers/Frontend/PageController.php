<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $home = Home::first();
        return view('frontend.index', compact('home'));
    }
}
?>