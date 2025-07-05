<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class PageController extends Controller
{
    public function home() {
        // dd(PageController::class);
        $posts=[
            ['title'=>'1 title','subtitle'=>'1 subtitle'],
            ['title'=>'2 title','subtitle'=>'2 subtitle'],
            ['title'=>'3 title','subtitle'=>'3 subtitle'],
            ['title'=>'4 title','subtitle'=>'4 subtitle']
    ];
        return view('home',compact('posts'));
    }

    public function about() {
        return view('about');
    }

    public function post() {
        return view('post');
    }
    
    public function contact() {
        return view('contact');
    }
    public function create_contact(Request $request) {
        dd($request->all());
    }

}
