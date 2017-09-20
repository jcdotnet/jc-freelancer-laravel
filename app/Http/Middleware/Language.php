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
		if ($request->segment(1) !== "admin") // && $request->segment(1) !== "api" // coming soon
		{
			$locale = "es";
			
			if(Session::has('locale')){		
				$locale = Session::get('locale');
				App::setlocale($locale);
				
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
				if (count($segments) === 1 && $request->segment(1) !== 'en' && count($query)) {
					
					return redirect('/en/'. (FALSE === strpos(__("routes.$segment"), "routes") ? __("routes.$segments[0]") : $segments[0]) . '?' . http_build_query($query));
				}
				else if (count($segments) === 1 && $request->segment(1) !== 'en') 
				{				
					return redirect('/en/'. (FALSE === strpos(__("routes.$segment"), "routes") ? __("routes.$segments[0]") : $segments[0]));
				}
				else if (count($segments) == 1 && $locale == "es" && count($query)) 
				{
					return redirect(str_replace_first($request->segment(1), '' ,$url). '?' . http_build_query($query) );
				}				
				else if (count($segments) == 1 && $locale == "es") 
				{
					return redirect(str_replace_first($request->segment(1), '' ,$url));
				}				
				else if (count($segments) == 2 && $locale == "es" && count($query)) 
				{
					return redirect(str_replace_first($request->segment(1).'/', '' ,$url). '?' . http_build_query($query));			
				}
				
				else if (count($segments) == 2 && $locale == "es") {
					return redirect(str_replace_first($request->segment(1).'/', '' ,$url));
				}
				else if (count($segments) && count($query)) 
				{
					return redirect(str_replace_first($request->segment(1), $locale ,$url). '?' . http_build_query($query));
				}
				else if (count($segments)) {
						return redirect(str_replace_first($request->segment(1), $locale ,$url));
				}
				else if ($locale !== "es" && count($query))
				{
					return redirect('/'.$locale. '?' . http_build_query($query));
				}
				else if ($locale !== "es")
				{
					return redirect('/'.$locale);
				}
			}
			else if ($request->lang == NULL || $request->lang == "es")  
			{
				$locale = "es";
			}			
			else if ($request->lang == "en")
			{
				$locale = "en";
			}
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