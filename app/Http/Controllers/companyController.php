<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\company;
use Illuminate\Support\Str;

class companyController extends Controller
{
  public function getAllCompanies(){
  	$company = Company::latest()->paginate(3);
  	return view('frontend.crud.index' , compact('company'));
  }

  public function showEditForm(Request $request , $id){
  	$company =Company::find($id);
  	return view('frontend.crud.upload' , compact('company'));
  }

  public function submitFormData(Request $request , $id){
  	$company = Company::find($id);
  	$company->update([
  		'name' => $request->name,
  		'slug' => Str::slug($request->name),
  		'address' => $request->address
  	]);
  	return redirect()->back();

  }
  public function showCompanyForm(){
  	return view('frontend.crud.create');
  }

  public function addCompany(Request $request){
  	$request->validate([
  		'name' => 'required | unique:companies',
  		'address' => 'required',
  	]);

	$company = new Company;

	$company->name = $request->name;
	$company->slug = Str::slug($request->name);
	$company->address = $request->address;
	$company->save();

	\Session::flash('message','Company Added Successfully');

		return redirect()->back();
  	
  }
  public function delete($id){
  	$company = Company::find($id);
  	\Session::flash('message','Company Deleted Successfully');
  	$company->delete();
  	return redirect()->back();
  }
}
