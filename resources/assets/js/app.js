/**
 * CUSTOM JavaScript / jQuery
 */

$(function() {

    $('#navbar-items')
        .on('shown.bs.collapse', function() {
			$('#navbar-flags').css("display", "inline-block");
        })
        .on('hidden.bs.collapse', function() {  	
			$('#navbar-flags').css("display", "none");
        });
    
	getRandomService();
    setInterval(setNavbar, 100);	
	setInterval(getRandomService, 3000); 
	
	$('.language').click(function(){
		if (window.matchMedia('(max-width: 768px)').matches)
			$('#navbar-flags').css("display", "none" );
	});
	
	$(window).resize(function() {
		$('.hero').height($(window).height());
		if (window.matchMedia('(max-width: 768px)').matches) 
			$('#navbar-flags').css("display", $('#navbar-items').hasClass('show')? "inline-block": "none");
		else 		
			$('#navbar-flags').css("display", "none");
			
	}).resize();
	
	$('#cookie-consent').css("display", getCookie('complianceCookie') === "1" ?  "none": "block");	
});

function aceptarCookies(event) {
        event.preventDefault();
        setCookie("complianceCookie", "1", 365);   
        $("#cookie-consent").css("display", "none");
    }

function getCookie(name)
{
	var cookieArray = document.cookie.split(';');
    var cookieName = name + "=";    
	var cookie;
	
	for (var i=0; i < cookieArray.length; i++)
	{
		cookie = cookieArray[i].replace(/^\s+/g, "");
		if (cookie.indexOf(cookieName) === 0) {
            return cookie.substring(cookieName.length, cookie.length);
        }
	}
	return "";
}

function getRandomService(){
	if (baseUrl === $(location).attr('href'))
	{
		$.ajax({
		  url: baseUrl + "/home",
		  type: "post",
		  data: {'_token': token },
		  success: function( response ) {
			  $('#random-service-text').html(response.servicio);
		  }
		});
	}
}

function setCookie(name, value, days) {
    var d = new Date();
    d.setTime(d.getTime() + days * 24 * 60 * 60 *1000);
    var expires = "expires=" + d.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

function setNavbar()
{
    if ($('.navbar-toggleable-sm').is(':hover'))
    {
        $('.navbar-toggleable-sm').first().css("background", "#121212");   
    }
    else if ($(".hero.hero-top").length && window.matchMedia('(min-width: 768px)').matches && $(this).scrollTop() > 50)
    {
        $('.navbar-toggleable-sm').first().css("background", "#121212");       
    }
    else if ($(".hero.hero-top").length && window.matchMedia('(max-width: 768px)').matches && $(this).scrollTop() > 10)
    {
        $('.navbar-toggleable-sm').first().css("background", "#121212");        
    }
    else if ($(".hero.hero-top").length)
    {
        $('.navbar-toggleable-sm').first().css("background", "transparent");  
    }
    else
    {
        $('.navbar-toggleable-sm').first().css("background", "#121212");
    }
	
    if ($(this).scrollTop() > 1){
		$('.navbar-toggleable-sm').css("margin-top", "0");
		
    }
    else{
		$('.navbar-toggleable-sm').css("margin-top", window.matchMedia('(min-width: 768px)').matches ? "40px" : "0px");
    }  
}