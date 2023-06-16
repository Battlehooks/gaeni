<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('home.index', [
            'title' => 'Home'
        ]);
    }

    public function about(){
        return view('about.index', [
            'title' => 'About'
        ]);
    }
    public function contact(){
        return view('contact.index', [
            'title' => 'Contact'
        ]);
    }

    // NEW PAGE
    public function lks(){
        return view('events.lks-daring-jabar-2023', [
            'title' => 'LKS Daring Jabar 2023'
        ]);
    }

    public function programs() {
        return view('programs.index', [
            'title' => 'Programs'
        ]);
    }

    public function pjj(){
        return view('events.pjj', [
            'title' => 'PJJ'
        ]);
    }
}
