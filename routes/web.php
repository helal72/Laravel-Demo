<?php

//Admin Routing
Route::namespace('Admin')->group(function () {
    Route::get('backend', 'homeController@index')->name('admin.home');
    Route::resource('backend/category' , 'categoryController');
    Route::resource('backend/post' , 'postController');

    Route::get('backend/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('backend/login', 'Auth\LoginController@login');
    Route::post('backend/logout', 'Auth\LoginController@logout')->name('admin.logout');

});

// Route::get('backend/login', function(){
// 	return view('backend/login');
// 	});


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
//yf7d865rd
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
