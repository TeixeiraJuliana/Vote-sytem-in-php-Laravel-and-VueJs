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
        $theme = new Theme;
        $theme =$theme->create($request->all());
        return Redirect::to('/temas');
    }
    public function edit($id){
        $theme = Theme::findOrFail($id);
        return view('theme.formTheme', ['addTheme' =>  $theme]);
    }

    public function destruir( $id ){
        Theme::findOrFail($id)->delete();
    }


}

/*
    public function destruir( $id ){
        $theme = Theme::findOrFail($id);
        var_dump($theme); exit;
        $theme->delete();
        return Redirect::to('/temas');
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
