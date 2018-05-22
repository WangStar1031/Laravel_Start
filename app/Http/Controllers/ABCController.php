<?php

namespace Tutorialspoint\Http\Controllers;

use Illuminate\Http\Request;

use Tutorialspoint\Http\Requests;
use Tutorialspoint\Http\Controllers\Controller;

class ABCController extends Controller
{
    public function index(){
    	echo "<br>ABC Controller.";
    }
}
