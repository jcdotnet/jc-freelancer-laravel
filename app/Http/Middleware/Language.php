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
		$segments = $request->segments();
		$query = $request->query();
				
		if ($request->segment(1) !== "admin") 
		{
			$locale = "es";
				
			if(Session::has('locale')){		
				$locale = Session::get('locale');
				App::setlocale($locale);	
				
				if (substr($request->segment(1), 0, 3) ===  "art")
					return $next($request);
				
				$localized_segments = $this->localize_segments($segments);
				
				if (count($segments) && strtoupper($locale) == "ES" && count($query)) {
					return $this->redirect_ES($request, $localized_segments, $query);
				}
				else if (count($segments) && strtoupper($locale) == "ES") 
				{
					return $this->redirect_ES($request, $localized_segments, 0);
				}
				else if (count($segments) && count($query)) {
					return $this->redirect_locale($request, $localized_segments, $locale, $query);
				}
				else if (count($segments)) {
					return $this->redirect_locale($request, $localized_segments, $locale, $query);
				}			
				else if ($locale !== "es")
				{
					return redirect('/'.$locale);
				}
			}
			else if ($request->lang == NULL || $request->lang == "es")  
			{
				$locale = "es";
				App::setlocale($locale);	
			}			
			else if ($request->lang == "en")
			{
				$locale = "en";
				App::setlocale($locale);	
			}
			else  
			{
				 return abort(404);
			}										
		}
		return $next($request);
    }
	
	function localize_segments($segments) {
		$localized_segments = array();
		foreach ($segments as $segment)
		{			
			if (FALSE === strpos(__("routes.$segment"), "routes")) 
			{
				array_push($localized_segments, __("routes.$segment"));
			}
			else {
				array_push($localized_segments, $segment);
			}
		}
		return implode($localized_segments, '/');
	}
	
	function redirect_ES($request, $localized_segments, $query_args) {
		if (count($request->segments())>2) {
			return redirect("/es".str_replace_first($request->segment(1), '' ,$localized_segments). ($query_args ? '?' . http_build_query($query_args) : ""));
		}
		else if (strtoupper($request->segment(1)) == "EN" || strtoupper($request->segment(1)) == "ES") {
			return redirect(str_replace_first($request->segment(1), '' ,$localized_segments). ($query_args ? '?' . http_build_query($query_args) : ""));
		}
		else { 
			return redirect($localized_segments. ($query_args ? '?' . http_build_query($query_args) : "" ));
		}
	}
	
	function redirect_locale($request, $localized_segments, $locale, $query_args) {
		if (strtoupper($request->segment(1)) === "ES") {
			return redirect("/$locale".str_replace_first($request->segment(1), '' ,$localized_segments). ($query_args ? '?' . http_build_query($query_args) : ""));
		}
		else if (strtoupper($request->segment(1)) !== strtoupper($locale)) {
			return redirect(("/$locale"."/"."$localized_segments") . ($query_args ? '?' . http_build_query($query_args) : "" ));
		}
		else { 
			return redirect($localized_segments. ($query_args ? '?' . http_build_query($query_args) : "" ));
		}
	}
}