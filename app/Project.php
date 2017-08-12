<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function skills()
	{
		return $this->belongsToMany('App\Skill', 'projects_skills' );
	}
	
	public function images()
	{
		return $this->belongsToMany('App\Image', 'projects_images');
	}
}