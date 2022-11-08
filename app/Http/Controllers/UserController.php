<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DateTime;

class UserController extends Controller
{
	public function __construct()
	{
		$this->middleware(['verified']);
	}
    //
	 public function userDashboard(){
		$date = new DateTime;
		$date->modify('-5 minutes');
		$formatted_date = $date->format('Y-m-d H:i:s');
		$lastUsers=User::with('getCountry')->get();
		return view('Home.UserList',['users'=>$lastUsers]);
	 }
}
