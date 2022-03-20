<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteInfo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $info = SiteInfo::find(1);
        
        /* Test
        if(auth()->check()){
            $email = auth()->user()->email;
        } */
        


        return view('admin.home', [
            'info' => $info,
       
            
        ]);
    }

    public function update(Request $request, SiteInfo $info)
    {
        $request->validate([
            "email" => ['required'],
            "adress" => ['required'],
            "phone" => ['required']
        ]);

        // $info->update([
        //    "email" => $request->email,
        //    "adress" => $request->adress,
        //    "phone" => $request->phone_number
        // ]);

        $info = SiteInfo::find(1);

        $info->email = $request->email;
        $info->adress = $request->adress;
        $info->phone_number = $request->phone;

        $info->save();

        return back()->with('success', 'Modification enregistrée avec succès');
    }
}
 