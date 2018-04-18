<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class View_subscription extends Model
{
    //

	public function professional()

	{

		return $this->belongsTo(Professional::class);

	}


}
