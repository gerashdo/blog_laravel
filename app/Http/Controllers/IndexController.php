<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $nombre="Gerardo";
        $materias = [
            'frameworks',
            'Arquitectura',
            'Bases de datos',
            'Algoritmos'
        ];
        // var_dump(compact('nombre','materias'));
        // die();
        // dd(compact('nombre','materias'));
        return view('index',compact('nombre','materias'));
    }

    public function acerca(){
        return view('acerca');
    }
}
