<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Image;
use App\Models\Log;
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

    public function update(Request $request, News $article, Log $log)
    {
        $user = auth()->user()->id;
        $request->validate([
            'title' => ['required'],
            'image' => ['required'],
            'description' => ['required']
        ]);

        $article->title = $request->title;
        $article->description = $request->description;
        // $article->path = $request->image;
        $article->save();
        $lastArticle = News::latest()->first();

        $image = new Image();
        $image->path = $request->image;

        $lastArticle->image()->save($image);

    
        $article->image()->save($image);

        // Ajouts des logs dans la db
        // $log->user_id =  $user;
        $log->action = "Modification de l'article {$article->title}";
        $log->save();
        

        return back()->with('success', 'Actualité modifié avec succès');
    }

    public function delete(News $article, Log $log)
    {
        $article->delete();

        // Ajouts des logs dans la db
        if(auth()->check()){
            $user = auth()->user()->user;
        }
        $log->user_id =  $user;
        $log->action = "Supression de l'article {$article->title}";
        $log->save();


        return redirect()->route('admin.articles')->with('success', 'Article supprimé avec succès');

    }

    public function store(Request $request, Log $log)
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
        
        // Ajouts des logs dans la db
        $log->user_id =  auth()->user()->id;
        $log->action = "Création de l'article {$article->title}";
        $log->save();
        
        return back()->with('success', 'L\'actualié a été enregistré avec succès');
    }
    
    public function edit(News $article)
    {
        return view('admin.article.edit', [
            'article' => $article,
        ]);
    }
}
