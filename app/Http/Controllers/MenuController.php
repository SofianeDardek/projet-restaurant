<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\SiteInfo;

class MenuController extends Controller
{
    public function index(){

        $categories = Categorie::all();
        $info = SiteInfo::find(1);


        return view('menu', [
            'categories' => $categories,
            'info' => $info
        ]);

    }   
}
