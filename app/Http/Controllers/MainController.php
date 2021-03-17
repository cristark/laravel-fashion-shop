<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class MainController extends Controller
{
    public function index(){
        $data = [
            'titolo' => 'Questa è la Homepage'
        ];
        return view('home', $data);
    }

    public function prodotti(){

        $tab_prodotti = Dress::all();

        $data = [
            'abiti' => $tab_prodotti
        ];

        // dd($tab_prodotti);
        return view('products', $data);
    }

    public function contatti(){
        return view('contacts');
    }
}
