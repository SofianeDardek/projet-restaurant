<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Categorie;
use Illuminate\Http\Request;

class PlatController extends Controller
{
    public function index(Item $plat, Categorie $cate)
    {
        $plats = $plat->all();
        $categories = $cate->orderBy('name', 'ASC')->get();

        return view('admin.plat.plats', [
            'plats' => $plats,
            'categories' => $categories
        ]);
    }
}
