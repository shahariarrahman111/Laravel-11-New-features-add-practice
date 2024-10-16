<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userRegistration(Request $request)  {
  
       try {

        User::create($request->input());
        return response()->json(['status'=>'success', 'message'=>'User Registration Success']);

       } catch (Exception $exception) {

            return response()->json(['status'=>'faild', 'message'=> $exception->getMessage()]);

       }   

    } 
}
