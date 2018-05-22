<?php

namespace Tutorialspoint\Http\Controllers;

use Illuminate\Http\Request;

use Tutorialspoint\Http\Requests;
use Tutorialspoint\Http\Controllers\Controller;

class LocalizationController extends Controller
{
    public function index(Request $request, $locale){
    	app()->setLocale($locale);
    	echo trans('lang.msg');
    }
}
