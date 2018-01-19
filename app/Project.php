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
	
	public function getDescriptionExcerpt($words_count)
    {
	    $text =  strip_tags($this->description);
        if (str_word_count($text, 0) > $words_count) {
            $words = str_word_count($text, 2);
            $pos = array_keys($words);
            $text = substr($text, 0, $pos[$words_count]) . '...';
        }
        return $text;
    }
}