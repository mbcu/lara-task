<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CountryList;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class MainController extends Controller
{
	
    //
	 public function MainPage(){
			$countryList=CountryList::all();
		    return view('Home.RegistrationForm',['country'=>$countryList]);

	 }

	 public function registerUser(RegistrationRequest $request){
		$userInfo=User::create([
			'name'=>$request->name,
			'email'=>$request->email,
			'password'=>Hash::make($request->password),
			'birth'=>$request->birth,
			'country_id'=>$request->country_id
		]);
		// dd($userInfo);
		// die();
		// return $userInfo;
		// die();	
		return  redirect('/user')->with(['success','User registration was done successfuly']);
	 }


	 public function userDashboard(){
		return view('Home.UserList');
	 }

	 public function RegisteredUsers(){
		return view('Home.UserList');
	 }
}
