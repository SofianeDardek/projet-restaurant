<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Image;
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
        return view('admin.article.create');
    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'image' => ['required']
        ]);

        $articles = new News();

        $articles->title = $request->title;
        $articles->description = $request->description;
        // $articles->path = $request->image;

        $image = new Image();
        $image->path = $request->image;
        $image->new_id = 6;
        dd($articles->id);

        $image->save();

        $articles->save();
        
    }

}
