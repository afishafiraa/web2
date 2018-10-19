<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contoh extends Controller{
    
	public function index(){
		return view ('welcome');
	}
	
	function create(){
		return view('index');
	}
	
	function tambah(){
		return view('halamandua');
	}
}
