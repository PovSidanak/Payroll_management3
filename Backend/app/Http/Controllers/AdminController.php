<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function register_user(Request $req){

         $username = $req -> name;
         $email = $req -> email;
         $password = $req -> password;
         $cfpassword = $req -> confirm_password;

           #createmodelsavedatabase
        // $new_data = new User([
        //     'name' => $username,
        //     'email' => $email,
        //     'password' => $password
        // ]);

        // $new_data -> save();
        // return response() -> json(['data' => $new_data], 200);
        // //dd($new_data);

    }
    public function get_users(){
         $users = User::all();
         return response() -> json(['new_user' => $users], 200);
         //dd($users);

    }

    public function update_user(Request $req){
                              //in somnia
         $new_username = $req -> new_user_name;
         $client_id = $req -> user_id;
         $new_pw = $req -> new_password;

         $update_query = User::where('id', $client_id)
             -> update([
                 'password' => $new_pw,
                 'name' => $new_username
             ]);
         if ($update_query == 0){
             return response() -> json(['message' => 'User not found'], 200);
         }
         return response() -> json(['message' => $req -> all()], 200);
         //dd('hi');
     }

     public function login_user(Request $req){
         $email = $req -> email;
         $password = $req -> password;

         $user = User::where('email', $email) -> first(); //yk mk pi db

         if ($user ==null){
             return response() -> json(['message' => 'user does not exist'], 200);
         }

         if(Hash::check($password, $user -> password) == false){
             return response() -> json(['message' => 'Password incorrect'], 200);
         }
         //generatetoken
         $token = $user -> createToken('Personal Access Token') -> plainTextToken;

         return response() -> json(['accessToken' => $token], 201);
     }

     public function get_me(Request $req){
         $user = auth('sanctum') -> user();

         if($user == null){
             return response() -> json(['user_status' => "user not found"], 203);
         }
         //dd($user);
         return response() -> json(['user_status' => $user], 200);
     }
}
