<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    public function index(){

        $news = News::orderBy('id', 'DESC')->take(3)->get();

        return view('index', [
            'news' => $news
        ]);
    }
}
