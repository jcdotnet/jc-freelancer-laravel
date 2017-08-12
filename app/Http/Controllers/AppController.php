<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use Mail;
use App\Mail\Contact;


class AppController extends Controller {
	
	public function getContact()
	{
		$asuntos = array(__("Consulta"), __("Presupuesto"), __("Sugerencia"), __("Otros"));
		return view('contact', ['asuntos' => $asuntos]);
	}
	
	public function postContact(Request $request)
	{		
		$this->validate($request, [
			'nombre' => 'required',
			'email' => 'required|email',
			'cuerpo' => 'required|min:20',
			'politica-privacidad' => 'required'
		]);
		
		$data = array (
			'nombre' => $request->nombre,
			'email' => $request->email,
			'asunto' => $request->asunto,
			'cuerpo' => $request->cuerpo
		);
		Mail::to('info@josecarlosroman.com', 'JC')->send(new Contact($data));
		
		return redirect()->back() -> with(['success' => __('¡Correo enviado! Me pondré en contacto contigo lo antes posible.')]);
	}
	
	public function postHome () 
	{
		$servicios = array(__("Rediseño de páginas Web"), __("Conversión de HTML a WordPress"),  
            __("Adaptación a dispositivos móviles"),  __("Páginas Web corporativas"),   
            __("Solución de errores y/o advertencias"), __("Aplicaciones nativas para Android"), 
			__("Servicios de programación"), __("Actualización de páginas Web"),  
            __("Aplicaciones de escritorio"), __("Páginas Web en WordPress"),   
            __("Tiendas online en PrestaShop"), __("Tiendas online con WooCommerce"),   
            __("Implementación de ideas y proyectos"), __("Aplicaciones multilenguaje"),   
            __("Aplicaciones híbridas"), __("Desarrollo en Ionic"),    
            __("Aplicaciones para móviles"), __("Páginas Web personales"),   
            __("Optimización Web (WPO)"), __("Traducciones de temas WordPress"),  
            __("Páginas Web listas para usar"), __("Desarrollo en JavaScript"),  
            __("Desarrollo en Angular"), __("Desarrollo en PHP"),  
            __("Desarrollo en Laravel"),  __("Desarrollo en frameworks MVC"),  
            __("Desarrollo en .NET"), __("Desarrollo en WPF"),  
            __("Desarrollo de servicios Web"));
		
		return Response::json(['servicio'=> $servicios[rand(0, count($servicios)-1)]], 200);				
	}
	
	public function postChangeLanguage (Request $request)
	{
		if ($request->ajax()) {
			$request->session()->put('locale', $request->locale);
		}
	}
	
	
}