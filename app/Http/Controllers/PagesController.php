<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title='Hospitals24';
        return view('pages.index',compact('title'));
    }
}
