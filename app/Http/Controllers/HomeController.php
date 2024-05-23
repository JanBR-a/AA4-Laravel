<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Phone;

class HomeController extends Controller{
    public function index(){
        $phones = Phone::all();
        return view('home', ['phones' => $phones]);
    }
    public function delete($id){
        $phone = Phone::findOrFail($id);
        $phone->delete();
        return redirect()->route('home')->with('success', 'El producto se ha eliminado correctamente');
    }
    public function update($id){
        $phone = Phone::findOrFail($id);
        $phone->update();
        return redirect()->route('home')->with('success', 'El producto se ha actualizado correctamente');

    }
}

