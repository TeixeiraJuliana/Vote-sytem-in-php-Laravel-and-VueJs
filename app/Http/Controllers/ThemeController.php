<?php

namespace App\Http\Controllers;
use App\Models\Theme;
use Redirect;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index(){
        $themes = Theme::get();
        return view('theme.themes', ['themes' => $themes]);
    }
    public function newThema(){
        return view('theme.formTheme');
    }
    public function add(Request $request){
        $addTheme = new Theme;
        $addTheme = $addTheme->create($request->all());
        return Redirect::to('/temas');
    }

}

/*

    public function edit($id){
        $addTheme = Theme::findOrFail($id);
        return view('theme.formTheme', ['themes' => $addTheme]);
    }
    public function update($id, Request $request){
        $addTheme = Theme::findOrFail($id);
        $addTheme->update($request->all());
        return Redirect::to('/temas');
    }
    public function delete(){
        return view('theme.formTheme');
    }

    */
