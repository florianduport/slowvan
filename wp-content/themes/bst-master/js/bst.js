(function ($) {

	"use strict";

	$(document).ready(function() {

		// Comments
		$(".commentlist li").addClass("panel panel-default");
		$(".comment-reply-link").addClass("btn btn-default");

		// Forms
		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');

		// You can put your own code in here

		$(".moreInfoItem span img").hover(function(){
			if(!$(this).hasClass("animated"))
			$(this).addClass("tada animated");
		});

		$(window).scroll(function() {
			$(".carousel .item h1").each(function(){
				var el = $(this);
		    var top_of_element = $(el).offset().top;
		    var bottom_of_element = $(el).offset().top + $(el).outerHeight();
		    var bottom_of_screen = $(window).scrollTop() + $(window).height();
		    var top_of_screen = $(window).scrollTop();

		    if((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)){
		        // The element is visible, do something
					if(!$(this).hasClass("animated"))
					$(this).addClass("fadeInDown animated");
		    }
		    else {
		        // The element is not visible, do something else
		    }
			});
		});



	});

}(jQuery));
