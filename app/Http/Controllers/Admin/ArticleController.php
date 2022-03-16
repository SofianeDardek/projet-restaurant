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

    public function delete(News $article)
    {
        $article->delete();


        return redirect()->route('articles')->with('success', 'Article supprimé avec succès');

    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'image' => ['required']
        ]);

        // $article = News::find(1);
        $article = new News();

        $article->title = $request->title;
        $article->description = $request->description;
        // $article->path = $request->image;
        $article->save();
        $lastArticle = News::latest()->first();

        $image = new Image();
        $image->path = $request->image;

        $lastArticle->image()->save($image);
        
        return back()->with('success', 'L\'actualié a été enregistré avec succès');
    }
    
    public function edit(News $article)
    {
        $image = new Image();
        $articleImage = $article->image->path;
        $articleTitle = $article->title;
        // $articleImage = $image->path[$article->id];
        $articleDesc = $article->description;

        return view('admin.article.edit', [
            'articleTitle' => $articleTitle,
            'articleImage' => $articleImage,
            'articleDesc' => $articleDesc

        ]);
    }
}
