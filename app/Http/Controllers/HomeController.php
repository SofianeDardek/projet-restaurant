<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteInfo;
use App\Models\News;

class HomeController extends Controller
{
    public function index(){

        $news = News::orderBy('id', 'DESC')->take(3)->get();
        $info = SiteInfo::find(1);

        return view('index', [
            'news' => $news,
            'info' => $info,
        ]);
    }
}
