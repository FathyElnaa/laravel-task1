<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form(Request $request)
    {
        $forms = Form::get();
        return view('form', compact('forms'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        Form::create([
            'title' => $request->title,
            'content' => $request->content,
            'is_published' => $request->is_published
        ]);

        return redirect()->route('form');
    }


}
