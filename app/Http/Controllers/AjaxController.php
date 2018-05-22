<?php

namespace Tutorialspoint\Http\Controllers;

use Illuminate\Http\Request;

use Tutorialspoint\Http\Requests;
use Tutorialspoint\Http\Controllers\Controller;

class AjaxController extends Controller
{
    public function index(Request $request){
    	$msg = "This is a simple message.";
    	return response()->json(array('msg'=>$msg, 'token'=>$request->_token, 'age'=>$request->age), 200);
    }
}
