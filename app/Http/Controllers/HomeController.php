<?php

namespace Tutorialspoint\Http\Controllers;

use Illuminate\Http\Request;

use Tutorialspoint\Http\Requests;
use Tutorialspoint\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }
    public function index(){
    	return view('home');
    }
}
