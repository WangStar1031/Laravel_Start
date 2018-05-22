<?php

namespace Tutorialspoint\Http\Controllers;

use Illuminate\Http\Request;

use Tutorialspoint\Http\Requests;
use Tutorialspoint\Http\Controllers\Controller;

class RedirectController extends Controller
{
    public function index(){
    	echo "Redirecting to controller's action.";
    }
}
