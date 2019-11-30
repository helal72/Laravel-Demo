<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('data' , function(){

	
	return view("frontend.layouts.footer")->with(["socialLink" => $data]);
});
Route::get('/companies' , 'companyController@getAllCompanies')->name('company.get');
Route::get('/companies/{id}' , 'companyController@showEditForm')->name('company.show');
Route::PATCH('/companies/{id}' , 'companyController@submitFormData')->name('company.submit');
Route::get('/company' , 'companyController@showCompanyForm')->name('company.add');
Route::post('/addcompany' , 'companyController@addCompany')->name('company.store');
Route::post('/companies/{id}' , 'companyController@delete')->name('company.delete');

Route::get('/newsletter' , 'NewsletterController@show')->name('newsletter');
Route::post('/newsletter' , 'NewsletterController@store');