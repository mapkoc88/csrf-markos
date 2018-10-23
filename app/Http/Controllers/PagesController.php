<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index(){
        return view('pages.index');
    }
    function about(){
        return view('pages.about');
    }
    function contact(){
        return view('pages.contact');
    }
    function store(Request $request){

        $name = $request->name;

        //return redirect()->route('thankyou',['name' => $name]);
    }
    function thanks($name){

        return view('pages.thankyou')->with(compact('name'));
    }
}
