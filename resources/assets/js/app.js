/**
 * CUSTOM JavaScript / jQuery
 */

$(function() {

    $('#navbar-items')
        .on('shown.bs.collapse', function() {
			$('.navbar-expand-md').css("opacity", "1");
			$('#navbar-flags').css("display", "inline-block");
	        $('.jc-toggler').addClass("tapped");
        })
        .on('hidden.bs.collapse', function() {  
			$('.navbar-expand-md').css("opacity", "0.9");
			$('#navbar-flags').css("display", "none");
			$('.jc-toggler').removeClass("tapped");
        });
    	
	if ($('.hero').length) {
		addNavbarHeroClass();
	}
	
	$('.dropdown').hover(function() { 
	    $(this).addClass('show'); 
	    $(this).find('.dropdown-menu').addClass('show');
    }, 
    function() {
	    $(this).removeClass('show'); $(this).find('.dropdown-menu').removeClass('show');
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
	if (baseUrl === $(location).attr('href') || baseUrl === $(location).attr('href') + "es")
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
	if ( $(this).scrollTop() < $(".hero").height())
	{
		addNavbarHeroClass();
	}
	else if ($('.navbar-expand-md').hasClass('navbar-hero'))
	{
		$('.navbar-expand-md').removeClass("navbar-hero");
	}
	
    if ($(this).scrollTop() > 39){
		$('.navbar-expand-md.fixed-top').css("top", "0");
		$('.navbar-expand-md').css("transition", "all 0.2s linear");
    }
    else{		
		$('.navbar-expand-md.fixed-top').css("top", window.matchMedia('(min-width: 768px)').matches ? "40px" : "0px");
		$('.navbar-expand-md').css("transition", "all 0.2s linear");
    } 
}

function addNavbarHeroClass() {
	if (!$('.navbar-expand-md').hasClass('navbar-hero')) $('.navbar-expand-md').addClass("navbar-hero");
}