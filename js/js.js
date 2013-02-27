$(document).ready(function() {

	$('nav ul li').hover(function() {
	
		$('a', this).stop().animate({
			marginLeft: '1em'
		});
	
	},function() {
	
		$('a', this).stop().animate({
			marginLeft: '0'
		});		
	
	});

            var $body = $('body'); //Cache this for performance

            var setBodyScale = function() {
                var scaleFactor = 0.55,
                    scaleSource = $(window).height(),
                    maxScale = 600,
                    minScale = 10;

                var fontSize = scaleSource * scaleFactor; //Multiply the width of the body by the scaling factor:

                if (fontSize > maxScale) fontSize = maxScale;
                if (fontSize < minScale) fontSize = minScale; //Enforce the minimum and maximums

                $('div.quote h3').css('font-size', fontSize + '%');
            }

            $(window).resize(function(){
                setBodyScale();
            });

            //Fire it when the page first loads:
            setBodyScale();

});