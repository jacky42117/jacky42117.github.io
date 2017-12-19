/*navigation menu hide and show */
$(document).ready(function(){
	$(".menuItem").on("click", function(){
		$(this).toggleClass("close");
		$(".sideNav").toggleClass("active");
	})
})


/* progress bar */

$(document).ready(function(){
	$(window).scroll(function() {
		var scrollbar = $(this).scrollTop();
		if (scrollbar > 1100){
			$(".htmlProgress").addClass("htmlProgressWidth")
			$(".cssProgress").addClass("cssProgressWidth")
			$(".javascriptProgress").addClass("javascriptProgressWidth")
			$(".jQueryProgress").addClass("jQueryProgressWidth")
			$(".phpProgress").addClass("phpProgressWidth")
		} else {
			$(".htmlProgress").removeClass("htmlProgressWidth")
			$(".cssProgress").removeClass("cssProgressWidth")
			$(".javascriptProgress").removeClass("javascriptProgressWidth")
			$(".jQueryProgress").removeClass("jQueryProgressWidth")
			$(".phpProgress").removeClass("phpProgressWidth")
		}
	})
});


/* progress bar counter */

$({counter:1}).animate({counter:90},{
	duration:1000,
	step: function()
	{
		$(".htmlNumber").text(Math.ceil(this.counter)+" %");
	}
})

$({counter:1}).animate({counter:80},{
	duration:1000,
	step: function()
	{
		$(".cssNumber").text(Math.ceil(this.counter)+" %");
	}
})

$({counter:1}).animate({counter:50},{
	duration:1000,
	step: function()
	{
		$(".javascriptNumber").text(Math.ceil(this.counter)+" %");
	}
})

$({counter:1}).animate({counter:20},{
	duration:1000,
	step: function()
	{
		$(".jQueryNumber").text(Math.ceil(this.counter)+" %");
	}
})

$({counter:1}).animate({counter:30},{
	duration:1000,
	step: function()
	{
		$(".phpNumber").text(Math.ceil(this.counter)+" %");
	}
})


/* circle progress bar */
<script>
(function($) {
	'use strict';
	jQuery(document).ready(function($){
		$(".circle-1").circleProgress({
			value:0.75,
			size:90,
			fill: {
				gradient:["red","orange"]
			}
		}).on("circle-animation-progress", function (event, progress) {
			$(this).find(".circle-inner").html(Math.round(75*progress)+"<i>%</i>");
		});
	});
	jQuery(window).load(function){
});

}(jQuery);
</script>