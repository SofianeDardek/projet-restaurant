<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class MenuController extends Controller
{
    public function index(){

        $categorie1 = Categorie::find(1);
        $categorie2 = Categorie::find(2);

        return view('menu', [
            'categorie1' => $categorie1,
            'categorie2' => $categorie2
        ]);
    }
}
