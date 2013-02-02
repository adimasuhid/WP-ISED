	$(window).load(function() {
		$('#slider').nivoSlider({
			pauseTime: 5000,
			directionNav:false,
			controlNav: false,
		});
	});
	
	jQuery(document).ready(function(){
		var menuTopPosition = jQuery('.navbar').offset().top;
		
		// When #scroll is clicked
		jQuery('#message .button').click(function(){
			// Scroll down to 'catTopPosition'
			jQuery('html, body').animate({scrollTop:menuTopPosition}, 'slow');
			// Stop the link from acting like a normal anchor link
			return false;
		});

    var ace = 2;
    setInterval(function(){
      if (ace  ==  $("#events-calendar").children().length)
        { ace_next = 2;}
      else { ace_next = ace + 1; }
      $("#events-calendar").children(".event-articles:nth-child("+ace+")").slideToggle();//hide
      $("#events-calendar").children(".event-articles:nth-child("+ace_next+")").slideToggle();//show
      ace = ace+1;
      if (ace > $("#events-calendar").children().length) {ace = 2;}
    }, 5000);
	
	});
