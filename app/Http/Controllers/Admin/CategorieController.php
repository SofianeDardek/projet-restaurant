<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Log;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index(Categorie $cate)
    {
        $categories = $cate->orderBy('name', 'ASC')->get();

        return view('admin.categorie.categories', [
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        return view('admin.categorie.create');
    }

    public function store(Request $request, Categorie $categorie, Log $log)
    {
        $rules = $this->getRules();
        $validated = $request->validate($rules);

        $categorie->name = $request->name;
        $categorie->save();


        $userId = auth()->user()->id;
      
        $log->user_id =  $userId;
        $log->action = "Ajout de la catégorie {$categorie->name}";
        $log->save();

        return back()->with('success', "La catégorie {$categorie->name} à été créée avec succès");
    }

    public function getRules()
    {
        return [
            'name' => ['required', 'min:3', 'max:25']
        ];
    }

    public function delete(Categorie $categorie, Log $log)
    {
        $categorie->delete();

        // Ajouts des logs dans la db
        $userId = auth()->user()->id;
        $log->user_id =  $userId;
        $log->action = "Supression de la categorie {$categorie->title}";
        $log->save();


        return back()->with('success', "La categorie {$categorie->title} a été supprimé avec succès");
    }
}
