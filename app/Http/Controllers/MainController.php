<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $data = [
            'titolo' => 'Questa è la Homepage'
        ];
        return view('home', $data);
    }

    public function prodotti(){
        return view('products');
    }

    public function contatti(){
        return view('contacts');
    }
}
