<?php  
namespace App\Http\Validation;

Trait NewsletterValidation{

	public function NewsletterFormValidation($data){

		$data = request()->validate([
			'email'=> 'required|unique:newsletters'
		]);
		return $data;

	}
}