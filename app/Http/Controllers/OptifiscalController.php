<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OptifiscalController extends Controller
{
        public function index(){
            return view('optifiscal.index');
        }


        public function about(){
            return view('optifiscal.about');
        }
}
