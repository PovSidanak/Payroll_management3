<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\degree;


class DegreeController extends Controller
{
    //
    public function register_degree(Request $req){
        $degree = $req -> degree;


        #createmodelsavedatabase
        $new_degree = new degree([
            'degree' => $degree,
        ]);

        $new_degree -> save();
        return response()->json($new_degree);
        dd($new_degree);

    }
     public function get_degree (Request $req){
         $degree = degree::all();
        return response() -> json(['new_degree' => $degree], 200);
        dd($degree);
     }
}
