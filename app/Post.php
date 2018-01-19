<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function categories()
	{
		return $this->belongsToMany('App\Category', 'post_category' );
	}
	
	public function getContentExcerpt($words_count)
    {
	    $text =  strip_tags($this->content);
        if (str_word_count($text, 0) > $words_count) {
            $words = str_word_count($text, 2);
            $pos = array_keys($words);
            $text = substr($text, 0, $pos[$words_count]) . '...';
        }
        return $text;
    }
	
	function getSlug(){
		return strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($this->title, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));
	}
}
