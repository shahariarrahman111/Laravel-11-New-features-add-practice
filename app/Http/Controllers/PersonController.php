<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    
  function getPerson(Request $request , $name=null){
  
    return response("Hello {$name}" ,200);
  }

  function getPersonById(Request $request , $id = null)
  {
    return response("This is my {$id}" ,200);
  }


  function personAccount(Request $request , $name = null , $accountId = null)
  {
    return response("Hello {$name}, this is your accountId {$accountId}");
  }

  function personForm()
  {
    return view("person-form");
  }

  function personData(Request $request)
  {
    $name = $request->input("name");
    $email = $request->input("email");
    $image = $request->input("image");

    // if($image)
    // {
        $imageName = time(). "-". $image->getClientOriginalName();
        $image->move(public_path("images") , $imageName);
    // }else{
    //     $imageName ="Fuck U";
    // }

    return view("person-data", ["name" => $name, "email" => $email, "image" => $imageName]);
  }


  function securitySub(Request $request)
  {
    return "Hi Shahariar, ";
  }

}