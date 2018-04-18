<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

     protected $guarded = []; //Allow  mass assignment

    public function created_by()

	{

		return $this->belongsTo(Course_manager::class);

	}


	public function last_updated_by()

	{

		return $this->belongsTo(Course_manager::class);

	}


	/*public function accreditations()

	{


		return $this->belongsToMany(Accreditation::class);

	}*/

	public function accreditation()

	{

		return $this->belongsTo(Accreditation::class);
	
	}


	/*
	public function subscriptions()

	{


		return $this->belongsToMany(Subscriptions::class);

	}*/


	public function subscriptions()

	{

		return $this->hasMany(Subscription::class);

	}


}
