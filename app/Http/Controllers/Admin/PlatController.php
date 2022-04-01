<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Categorie;
use App\Models\Log;
use Illuminate\Http\Request;

class PlatController extends Controller
{
    public function index(Item $plat)
    {
        $plats = $plat->all();

        return view('admin.plat.plats', [
            'plats' => $plats,
        ]);
    }

    public function create(Categorie $cate)
    {
        $categories = $cate->all();
        

        return view('admin.plat.create', [
            'categories' => $categories
        ]);
    }

    public function delete(Item $plat, Log $log)
    {
        $plat->delete();

        // Ajouts des logs dans la db
        if(auth()->check()){
            $userId = auth()->user()->id;
        }
        $log->user_id =  $userId;
        $log->action = "Supression du plat {$plat->title}";
        $log->save();


        return back()->with('success', "Le plat {$plat->title} a été supprimé avec succès");
    }


    public function store(Request $request, Item $item)
    {
        $validate = $request->validate([
            'title' => ['required', 'min:5'],
            'cate' => ['required'],
            'image' => ['required'],
            'price' => ['required','integer']
        ]);


        $item->title = $request->title;
        $item->categorie_id = $request->cate;
        $item->path = $request->image;
        $item->price = $request->price;

        $item->save();
        
        
        return back()->with('success', "Le plat a été enregistré avec succès");
    }

    public function edit(Item $plat, Categorie $cate)
    {
        $categories = $cate->all();

        return view('admin.plat.edit', [
            'plat' => $plat,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, Item $plat, Log $log)
    {
        $request->validate([
            'title' => ['required', 'min:5'],
            'cate' => ['required'],
            'image' => ['required'],
            'price' => ['required','integer']
        ]);

        $plat->title = $request->title;
        $plat->categorie_id = $request->cate;
        $plat->path = $request->image;
        $plat->price = $request->price;

        $plat->save();

        if(auth()->check()){
            $user = auth()->user()->user;
        }

        // Ajouts des logs dans la db
        if(auth()->check()){
            $userId = auth()->user()->id;
        }
        $log->user_id = $userId;
        $log->action = "Modification du plat {$plat->title}";
        $log->save();
        

        return back()->with('success', 'Actualité modifié avec succès');
    }
}
