$(document).ready(function(){
	$('.images').hide();
	$('.images').fadeIn(3500);
	$('#menu').hide();
	$('#menu').fadeIn(2500);
	$('#logo').hide();
	$('#logo').fadeIn(2500);

	$('#freeshipping').mouseenter(function(){
			$('#freeshipping').text("Free Shipping is USA only");

	});
	$('#freeshipping').mouseleave(function(){
		$('#freeshipping').text("Free Shipping in USA For Orders Over $100");
	})

	$('#phoneNumberTop').mouseenter(function(){
		$('#phoneNumberTop').prepend("Email: 1234Gmail.com   ")

	});

	$('#home').mouseenter(function(){
		$('#home').css({"background-color": "#d3c6c4", "color": "white"});

	});
	$('#home').mouseleave(function(){
		$('#home').css({"background-color": "white", "color": "#d3c6c4"});

		});
	$('#product').mouseenter(function(){
		$('#product').css({"background-color": "#d3c6c4", "color": "white"});

	});
	$('#product').mouseleave(function(){
		$('#product').css({"background-color": "white", "color": "#d3c6c4"});

		});
	$('#order').mouseenter(function(){
		$('#order').css({"background-color": "#d3c6c4", "color": "white"});

	});
	$('#order').mouseleave(function(){
		$('#order').css({"background-color": "white", "color": "#d3c6c4"});

		});

});


