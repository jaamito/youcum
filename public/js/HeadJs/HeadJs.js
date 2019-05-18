$(document).ready(function () {
//Reconocer pantalla
	if ($(window).width() < 1024) {
		$(".YC-head2-list").removeClass("container")
	} else {
		$(".YC-head2-list").addClass("container")
	}

	$(".mySlides").hover(function(){
		var i = 0;
		var thisItem = $(this)
		var href = thisItem.attr("src").substring(0, $(this).attr("src").length-6)
		var interval = setInterval(function() {
			if(i == 10){i=0}
			if(i != 10) {
				i++;
            	thisItem.attr("src", href+i+".jpg");
				//console.log("posicion"+i)
			}
		}, 400);
		$(this).data("interval", interval)

	}, function(){
		$(this).attr("src",$(this).data("src"))
		clearInterval($(this).data("interval"))

		//console.log("cancelo")
	})

	/*$(".mySlides").hover(function(){
		var i = 0;
		var thisItem = $(this)
		var href = thisItem.data("src").substring(0, $(this).attr("src").length-6)
		var interval = setInterval(function() {
			if(i == 10){i=0}
			if(i != 10) {
				i++;
            	thisItem.attr("src", href+i+".jpg");
				//console.log("posicion"+i)
			}
		}, 400);
		$(this).data("interval", interval)

	}, function(){
		$(this).attr("src",$(this).data("srcold"))
		clearInterval($(this).data("interval"))
		//console.log("cancelo")
	})
*/
});