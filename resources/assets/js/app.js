/**
 * CUSTOM JavaScript / jQuery
 */

$(function() {

    $('#navbar')
        .on('shown.bs.collapse', function() {
            $('#navbar-hamburger').addClass('hidden');
            $('#navbar-close').removeClass('hidden');
			$('#flags').css("display", "inline-block");
		
        })
        .on('hidden.bs.collapse', function() {
            $('#navbar-hamburger').removeClass('hidden');
            $('#navbar-close').addClass('hidden');  
		
			$('#flags').css("display", "none");
        });
    
	getRandomService();
    setInterval(setNavbar, 100);	
	setInterval(getRandomService, 3000); 
	
	$('.language').click(function(){
		if (window.matchMedia('(max-width: 768px)').matches)
			$('#flags').css("display", "none" );
		$.ajax({
			url: baseUrl + "/language",
			type: "post",
			data: {'_token': token, 'locale': $(this).data('locale') },
			success: function() {
				location.reload();
			}
		});    
	});
	$(window).resize(function() {
		$('.hero').height($(window).height());
		if (window.matchMedia('(max-width: 768px)').matches) 
			$('#flags').css("display", $('#navbar-hamburger').hasClass('hidden')? "inline-block": "none");
		else 		
			$('#flags').css("display", "none");
			
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

	if ($(location).attr('href') === baseUrl + '/')
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
    if ($('.navbar-default').is(':hover'))
    {
        $('.navbar-default').first().css("background", "#121212");   
    }
    else if ($(".hero.hero-top").length && window.matchMedia('(min-width: 768px)').matches && $(this).scrollTop() > 50)
    {
        $('.navbar-default').first().css("background", "#121212");       
    }
    else if ($(".hero.hero-top").length && window.matchMedia('(max-width: 768px)').matches && $(this).scrollTop() > 10)
    {
        $('.navbar-default').first().css("background", "#121212");        
    }
    else if ($(".hero.hero-top").length)
    {
        $('.navbar-default').first().css("background", "transparent");  
    }
    else
    {
        $('.navbar-default').first().css("background", "#121212");
    }
	
    if ($(this).scrollTop() > 1){  
        $('#main').css("margin-top", "0px");
        $('#top-bar-container').css({"display": "none", "transition": "all 0.4s ease" });
    }
    else{
        $('#main').css("margin-top", window.matchMedia('(min-width: 768px)').matches ? "30px" : "0px");
        $('#top-bar-container').css({"display": "block", "transition": "all 0.4s ease", "background-color": "white" });
    }  
}