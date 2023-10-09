<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;

class PositionController extends Controller
{
    //
    public function register_position(Request $req){
        $status = $req -> status;
        $type = $req -> type;


        #createmodelsavedatabase
        $new_position = new Position([
            'status' => $status,
            'type' => $type
        ]);

        $new_position -> save();
        return response()->json($new_position);
        dd($new_position);

    }
     public function get_position (Request $req){
        $position = Position::all();
        return response() -> json(['new_position' => $position], 200);
        dd($position);
     }

}
