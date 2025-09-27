<?php
namespace App\Http\Controllers;

use Request;

class ControllerUser extends Controller
{
    public function edit(Request $request){
        $name = $request->input("name");
        $data = ["oper" => "edit", "nombre" => "Damacedi López Gómez"];
        return view("index",  $data);
    }
}