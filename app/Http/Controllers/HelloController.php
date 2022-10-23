<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
       //新規追加のメソッド
       public function index()
       {
        //return "hello, world";
        //変更箇所
            $message = "Hello Laravel 3";
            return view('hello', ['message' => $message]);
        }
       
}
