<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function showUser() {
    	$users = DB::table('tbl_studentList')->select('id', 'student_id', 'fname')->get();
    	return view('users')->with('users', $users);
    }

    public function homepage() {
    	return view('homepage');
    }
}
