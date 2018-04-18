<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    //

    protected $guarded = []; //Allow  mass assignment
    

	public function subscriptions()

	{


		return $this->hasMany(Subscription::class);

	}



    public function created_by()

	{

		return $this->belongsTo(Course_manager::class);

	}



	public function last_updated_by()

	{

		return $this->belongsTo(Course_manager::class);

	}


	public function subscription_views()
	{

		return $this->hasMany(View_subscription::class);

	}


}
