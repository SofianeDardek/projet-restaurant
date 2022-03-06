<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $news = News::all();

        return view('admin.article.articles', [
            'news' => $news,
        ]);
    }

    public function create()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

}
