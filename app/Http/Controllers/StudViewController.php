<?php

namespace Tutorialspoint\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Tutorialspoint\Http\Requests;
use Tutorialspoint\Http\Controllers\Controller;

class StudViewController extends Controller
{
    public function index(){
    	$users = DB::select('select * from student');
    	return view('stud_view', ['users'=>$users]);
    }
}
