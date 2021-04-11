<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserData;
use Validator;
use Response;

class UserDataController extends Controller
{
	public function GetUserData()
	{
		$UserData = UserData::orderby('id','desc')->get();
		return view('user.list',compact('UserData'));
	}
	public function UserDataShow()
	{
		return view('user.save');
	}
	public function SaveUserData(Request $request){
		
		$userdata = new UserData();
		$userdata->first_name = $request->first_name;
		$userdata->last_name = $request->last_name;
		$userdata->education = $request->education;
		$userdata->dob = $request->dob;
		$userdata->gmail_id = $request->email;
		$userdata->address = $request->address;
		$userdata->status = $request->status;
		$userdata->save();
		return redirect()->back()->withSuccess('Successfully Added!');
	}

	public function ViewUserData($id){
        $userdata = UserData::where('id',$id)->first();
        return view('user.view',compact('userdata'));
    }

	public function EditUserData($id){
        $userdata = UserData::where('id',$id)->first();
        return view('user.edit',compact('userdata'));
    }

    public function UpdateUserData(Request $request)
    {
        $userdata = UserData::where('id',$request->id)->
        update(['first_name'=> $request->first_name,
        		'last_name'=> $request->last_name,
        		'education'=> $request->education,
        		'dob'=> $request->dob,
        		'gmail_id'=> $request->gmail_id,
        		'address'=> $request->address,
        		'status'=> $request->status]);
        $userdata = UserData::where('id',$request->id)->first();
        return redirect()->back()->withSuccess('Successfully Updated!');
    }

    public function UserDataDelete(Request $request)
    {
        UserData::where('id', $request->id)->delete(); 
        echo json_encode($request->id);
    }
	
}
