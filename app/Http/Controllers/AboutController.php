<?php


namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        //cara pertama
        // return view("about", ["name" => request('name')]);

        //cara kedua
        $data["name"] = request("name");
        return view("about", $data);
    }
}
