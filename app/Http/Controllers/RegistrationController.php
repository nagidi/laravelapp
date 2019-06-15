<?php

namespace register_form\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
//use Illuminate\Support\Facades\Validator;
use register_form\Http\Requests;
use register_form\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    //
	function register(){
	return view('create');
	//Session::flash('message','');
	}
function validators(Request $request)
    {
		//Session::flash('message','');
		//print_r($request->all());
		
		//DB::insert('insert into register (firstname) values(?)','srinivas');
	//	$add = DB::insert('insert into register (title) values ("test")');
    	$this->validate(request(), [
			'inputTitle' => 'required',
			'inputFirstName' => 'required',
			'inputLastName' => 'required',
			'inputGender' => 'required',
			'inputdobBirth' => 'required',
			'inputBirth' => 'required',
			'inputCCountry' => 'required',
			'inputCountry' => 'required',
			'inputAddress1' => 'required',
			'inputAddress2' => 'required',
			'inputPostalCode' => 'required',
			'inputCity' => 'required',
			'inputProvince' => 'required',
			'inputOtherName' => '',
			'inputCode' => '',
			'inputcPhone' => '',
			'inputCell' => '',
			'inputPhone' => '',
        ]);

		$inputTitle = $request->input('inputTitle');
		$inputFirstName = $request->input('inputFirstName');
		$inputLastName = $request->input('inputLastName');
		$inputOtherName = $request->input('inputOtherName');
		$inputGender = $request->input('inputGender');
		$inputBirth = $request->input('inputBirth');
		$inputdobBirth = $request->input('inputdobBirth');
		$inputCCountry = $request->input('inputCCountry');
		$inputAddress1 = $request->input('inputAddress1');
		$inputAddress2 = $request->input('inputAddress2');
		$inputCity  = $request->input('inputCity');
		$inputPostalCode = $request->input('inputPostalCode');
		$inputProvince = $request->input('inputProvince');
		$inputCountry = $request->input('inputCountry');
		$inputEmail = $request->input('inputEmail');

		$inputCode = $request->input('inputCode');
		$inputcPhone = $request->input('inputcPhone');
		$inputCell = $request->input('inputCell');
		$inputPhone = $request->input('inputPhone');


		
		
		$data=array(
			'title'=>$inputTitle,"firstname"=>$inputFirstName,
			"lastname"=>$inputLastName,
			'officalname' => $inputOtherName,
			'gender' => $inputGender,
			'dob' => $inputdobBirth,
			'countrycitizen' => $inputCCountry,
			'countrybirth'  => $inputBirth,
			'address1'  => $inputAddress1,
			'address2'  => $inputAddress2,
			'city'  =>  $inputCity,
			'postelcode' => $inputPostalCode,
			'country' => $inputCountry,
			'provience' => $inputProvince,
			'emailaddress'  => $inputEmail,
			'phone' => $inputCell+ $inputPhone,
			'cell'  =>$inputCode+$inputcPhone
		);
		$rec_staus =DB::table('register')->insert($data);
		if($rec_staus){
			Session::flash('message','Insert successfully.');
			return redirect('register');
		  }


		
	//	$add = DB::insert('insert into register (title) values ("test2")');
 
    }

}
