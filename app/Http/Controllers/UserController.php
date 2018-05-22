<?php

namespace Tutorialspoint\Http\Controllers;

use Illuminate\Http\Request;

use Tutorialspoint\Http\Requests;
use Tutorialspoint\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function __construct(){
    	$this->middleware('auth');
    }
    public function showProfile(){
    	echo "<br>This is show profile page.";
    }
}
