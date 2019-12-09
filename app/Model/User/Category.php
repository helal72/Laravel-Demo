<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $guarded = [];
	public function Posts(){
			return $this->hasMany(posts::class);
	}
}
