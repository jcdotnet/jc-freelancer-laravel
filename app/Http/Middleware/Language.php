<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Session;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {					
		if ($request->segment(1) !== "admin")
		{
			$locale = "es";
			
			if(Session::has('locale')){			
				$locale = Session::get('locale');
				App::setlocale($locale);
				Session::forget('locale');

				$segments = $request->segments();
				$query = $request->query();
				$url = $request->path(); //  $request->url();
				foreach ($segments as $segment)
				{
					if (FALSE === strpos(__("routes.$segment"), "routes")) 
					{
						$url = str_replace($segment, __("routes.$segment") ,$request->url());
					}
				}		
				if (count($query)) {
					return redirect(str_replace_first($request->segment(1), $locale ,$url). '?' . http_build_query($query));
				}
				else {
					return redirect(str_replace_first($request->segment(1), $locale ,$url));
				}						 
			}			
			else if ($request->lang == NULL || $request->lang == "es")  
			{
				$locale = "es";
			}			
			else if ($request->lang == "en")
				$locale = "en";		
			else 
			{
				 return abort(404);
			}		
			App::setlocale($locale);
		}
		return $next($request);
    }
	
	function str_replace_first($search, $replace, $subject) {
		$pos = strpos($subject, $search);
		if ($pos !== false) {
			return substr_replace($subject, $replace, $pos, strlen($search));
		}
		return $subject;
	}
}
