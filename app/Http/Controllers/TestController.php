<?php

namespace Tutorialspoint\Http\Controllers;

use Illuminate\Http\Request;

use Tutorialspoint\Http\Requests;
use Tutorialspoint\Http\Controllers\Controller;

use Illuminate\Support\Facades\Crypt;

class TestController extends Controller
{
    //
    public function index(){
	    $enc1 = Crypt::encrypt('aa');
	    echo "<br/>";
	    echo $enc1;
	    $dec1 = Crypt::decrypt($enc1);
	    echo "<br/>";
	    echo $dec1;
	    $enc2 = Crypt::encrypt('aa');
	    echo "<br/>";
	    echo $enc2;
	    $dec2 = Crypt::decrypt($enc2);
	    echo "<br/>";
	    echo $dec2;
    	echo "<br>Test Controller.";
    }
}
