<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cpd_provider extends Model
{
    //
	protected $guarded = []; //Allow  mass assignment
	
	public function accreditations()

	{

		return $this->hasMany(Accreditation::class);

	}


	public function created_by()

	{

		return $this->belongsTo(Course_manager::class);

	}


	public function last_updated_by()

	{

		return $this->belongsTo(Course_manager::class);

	}


}
