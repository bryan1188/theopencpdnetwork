<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accreditation extends Model
{
    //
    protected $guarded = []; //Allow  mass assignment

    public function cpd_provider()
    
    {
    	return $this->belongsTo(Cpd_provider::class);
    }



    public function created_by()

	{

		return $this->belongsTo(Course_manager::class);

	}



	public function last_updated_by()

	{

		return $this->belongsTo(Course_manager::class);

	}



	/*public function courses()

	{


		return $this->belongsToMany(Course::class);

	}*/

	public function courses()
	{

		return $this->hasMany(Course::class);

	}

}
