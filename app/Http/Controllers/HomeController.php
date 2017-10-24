<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //練習八: 在HomeController內加入indexc函數
    public function index()
    {
        return view('welcome');
    }
}
