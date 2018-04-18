<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course_manager extends Model
{
    //

	protected $table ='users';

	public function created_cpd_providers()
	
	{

		return $this->hasMany(Cpd_provider::class,'created_by_id'); //manually overiding the foreign key

	}


	public function last_updated_cpd_providers()
	
	{

		return $this->hasMany(Cpd_provider::class,'last_updated_by_id'); //manually overiding the foreign key

	}


	public function created_accreditations()
	
	{

		return $this->hasMany(Accreditation::class,'created_by_id'); //manually overiding the foreign key

	}


	public function last_updated_accreditations()
	
	{

		return $this->hasMany(Accreditation::class,'last_updated_by_id'); //manually overiding the foreign key

	}


	public function created_professionals()
	
	{

		return $this->hasMany(Professional::class,'created_by_id'); //manually overiding the foreign key

	}


	public function last_updated_professionals()
	
	{

		return $this->hasMany(Professional::class,'last_updated_by_id'); //manually overiding the foreign key

	}

	public function created_courses()
	
	{

		return $this->hasMany(Professional::class,'created_by_id'); //manually overiding the foreign key

	}


	public function last_updated_courses()
	
	{

		return $this->hasMany(Professional::class,'last_updated_by_id'); //manually overiding the foreign key

	}

}
