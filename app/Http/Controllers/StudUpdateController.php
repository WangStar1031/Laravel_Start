<?php

namespace Tutorialspoint\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Tutorialspoint\Http\Requests;
use Tutorialspoint\Http\Controllers\Controller;

class StudUpdateController extends Controller
{
    public function index(){
    	$users = DB::select('select * from student');
    	return view('stud_edit_view', ['users'=>$users]);
    }
    public function show($id){
    	$users = DB::select('select * from student where id = ?', [$id]);
    	return view('stud_update', ['users'=>$users]);
    }
    public function edit(Request $request, $id){
    	$name =  $request->input('stud_name');
    	DB::update('update student set name = ? where id = ?', [$name, $id]);
    	echo "Record updated successfully.<br/>";
    	echo '<a href = "/edit-records">Click Here</a> to go to back.';
    }
}
