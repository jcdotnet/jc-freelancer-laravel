<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function projects()
	{
		return $this->belongsToMany('App\Project', 'projects_skills' );
	}
}
