<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $books=[
            '1','2'
        ];
        return view('welcome',[
            'books'=>$books
        ]);
    }
}
