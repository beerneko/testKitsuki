<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Step into the hidden Japan';
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title = 'About Kitsuki';
        return view('pages.about')->with('title',$title);
    }
    public function youcanlist(){
        $data = array(
            'title' => 'Things you can do at Kitsuki',
            'youcanlists' => ['Kimono','Stroll Samurai Town', 'Yummy', 'Swim','Lean','Bike','Live at Kitsuki']
        );
        return view('pages.youcanlist')->with($data);
    }
    public function askme(){
        $title = 'Ask Me';
        return view('pages.askme')->with('title',$title);;
    }
}
