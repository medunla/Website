$(document).ready(function(){

	

	$(".st-title").hide();

/*------------------------------------------------*/
	$(".st-press").click(function(){
		$(".st-press,.te-press,.line").fadeOut();
		$(".sc-std-base").toggleClass('toleft');
		$(".st-title").fadeIn(2000);

		$(".st-title a").one("click",function(){
			$(".sc-std-base").toggleClass('toleft');
			$(".st-press,.te-press,.line").fadeIn(1000);

		});

	});
/*------------------------------------------------*/
	$(".te-press").click(function(){
		$(".st-press,.te-press,.line").fadeOut();
		$(".sc-teh-base").toggleClass('toright');
		$(".te-title").fadeIn(2000);

		$(".te-title a").one("click",function(){
			$(".sc-teh-base").toggleClass('toright');
			$(".st-press,.te-press,.line").fadeIn(1000);

		});

	});

	
});