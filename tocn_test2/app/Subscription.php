<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    //

	protected $guarded = []; //Allow  mass assignment

	public function professional()
	
	{


		return $this->belongsTo(Professional::class);

	}


	/*
	public function courses()

	{


		return $this->belongsToMany(Course::class);

	}*/

	public function course()

	{

		return $this->belongsTo(Course::class);

	}

}
