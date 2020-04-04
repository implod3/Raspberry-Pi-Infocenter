window.addEventListener('scroll', function(event) {
	
	if (typeof is_style === "undefined") {
		
		var is_style = true;
		
	}
	
	if (window.pageYOffset > 1) {
		
		if (is_style) {
			
			document.getElementsByClassName('form_text')[0].style.padding = "10px 0 10px 0";
			document.getElementsByClassName('on_top')[0].style.opacity = "1";
			
		} else {
			
			document.getElementsByClassName('form_text')[0].style.padding = "10px 200px 10px 200px";
			document.getElementsByClassName('on_top')[0].style.opacity = "0";
			
		}
		
	} else {
		
		if (is_style) {
			
			document.getElementsByClassName('form_text')[0].style.padding = "10px 200px 10px 200px";
			document.getElementsByClassName('on_top')[0].style.opacity = "0";
			
		} else {
			
			document.getElementsByClassName('form_text')[0].style.padding = "10px 0 10px 0";
			document.getElementsByClassName('on_top')[0].style.opacity = "1";
			
		}
		
	}
	
});

function scroll_to_top() {
	
	document.getElementsByTagName('body')[0].scrollIntoView({behavior: 'smooth'});
	
}