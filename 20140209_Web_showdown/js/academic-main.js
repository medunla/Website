$(document).ready(function(){
/*//////////////////////////////////////////////////////////////////< DESIGN >/////*/
	var back = "<a href='#page2'><img src='img/back.png'></a>";
	$("#web-sec,#game-sec,#anim-sec").hide();

	var w = $('#CL1').width();
	var z = $('#CL1').width()/5;

	$(".subtitle").hide();
	/*-------------------------------------*/
	$("#web").click(function(){

		$(".subtitle").html(back+" <p class='text_header'>WEB AND INTERACTIVE</p>");
		$(".title-academic").toggle();
		$(".subtitle,#mainline").toggle();
		
		$(".subtitle").one("click",function(){
			$(".subtitle,#mainline").toggle();
			$(".title-academic").toggle();
			$("#CL1").toggleClass('columnfull',0);
			$("#CL2,#CL3").fadeToggle();
			$("#web-sec").fadeToggle(function(){
				$("#game,#anim,#busn,#spanhide,#web,.nopic1").fadeToggle();
			});
		});
		/*///////////////////////////////////////////////////*/
		$("#CL1").toggleClass('columnfull',0);
			if(w > z){
				$("#CL2,#CL3").fadeToggle();
				$("#web-sec").delay(500).fadeToggle();	
				$("#game,#anim,#busn,#spanhide,#web,.nopic1").fadeToggle();
			}
	});
	/*-------------------------------------*/
	$("#game").click(function(){	

		$(".subtitle").html(back+"<p class='text_header'> GAME DESIGN</p>");
		$(".title-academic").toggle();
		$(".subtitle,#mainline").toggle();

		$(".subtitle").one("click",function(){
			$(".title-academic").toggle();
			$(".subtitle,#mainline").toggle();

			$("#CL1").toggleClass('columnfull',0);
			$("#CL2,#CL3").fadeToggle();
			$("#game-sec").fadeToggle(function(){
				$("#web,#anim,#busn,#spanhide,#game,.nopic1").fadeToggle();
			});
		});
		/*///////////////////////////////////////////////////*/
		$("#CL1").toggleClass('columnfull',0);
			if(w > z){
				$("#CL2,#CL3").fadeToggle();
				$("#game-sec").delay(500).fadeToggle();
				$("#web,#anim,#busn,#spanhide,#game,.nopic1").fadeToggle();
			}
	});
	/*-------------------------------------*/
	$("#anim").click(function(){

		$(".subtitle").html(back+"<p class='text_header'>ANIMATION DESIGN</p>");
		$(".title-academic").toggle();
		$(".subtitle,#mainline").toggle();

		$(".subtitle").one("click",function(){
			$(".title-academic").toggle();
			$(".subtitle,#mainline").toggle();

			$("#CL1").toggleClass('columnfull',0);
			$("#CL2,#CL3").fadeToggle();
			$("#anim-sec").fadeToggle(function(){
				$("#web,#anim,#busn,#spanhide,#game,#anim,.nopic1").fadeToggle();
			});
		});
		/*///////////////////////////////////////////////////*/
		$("#CL1").toggleClass('columnfull',0);
			//
			if(w > z){
				$("#CL2,#CL3").fadeToggle();
				$("#anim-sec").delay(500).fadeToggle();	
				$("#web,#game,#busn,#spanhide,#anim,.nopic1").fadeToggle();		
			}
	});
	/*-------------------------------------*/
/*//////////////////////////////////////////////////////////////////< BUSINESS >/////*/
	$("#busn-sec").hide();

	$("#busn").click(function(){

		$(".subtitle").html(back+"<p class='text_header'> BUSINESS</p>");
		$(".title-academic").toggle();
		$(".subtitle,#mainline").toggle();

		$(".subtitle").one("click",function(){
			$(".title-academic").toggle();
			$(".subtitle,#mainline").toggle();

			$("#CL2").toggleClass('columnfull',0);
			$("#CL1,#CL3").fadeToggle();
			$("#busn-sec").fadeToggle(function(){
				$("#web,#anim,#busn,#spanhide,#game,.nopic2").fadeToggle();
			});
		});
		/*///////////////////////////////////////////////////*/
		$("#CL2").toggleClass('columnfull',0);
			var w = $('#CL2').width();
			var z = $('#CL2').width()/5;
			if(w > z){
				$("#CL1,#CL3").fadeToggle();
				$("#busn-sec").delay(500).fadeToggle();
				$("#game,#anim,#web,#spanhide,#busn,.nopic2").fadeToggle();		
			}
	});
/*//////////////////////////////////////////////////////////////////< COM-ART >/////*/
	$("#film-sec,#tv-sec,#crm-sec,#jr-sec,#ad-sec").hide();
	

	var w = $('#CL3').width();
	var z = $('#CL3').width()/5;

	$("#comFM").click(function(){

		$(".subtitle").html(back+"<p class='text_header'> FILM</p>");
		$(".title-academic").toggle();
		$(".subtitle,#mainline").toggle();

		$(".subtitle").one("click",function(){
			$(".title-academic").toggle();
			$(".subtitle,#mainline").toggle();

			$("#CL3").toggleClass('columnfull',0);
			$("#CL1,#CL2").fadeToggle();
			$("#film-sec").fadeToggle(function(){
				$("#game,#anim,#web,#busn,.nopic3").fadeToggle();
				$("#spanhide").fadeToggle();
			});
		});
		/*///////////////////////////////////////////////////*/
		$("#CL3").toggleClass('columnfull',0);
				if(w > z){
					$("#CL1,#CL2").fadeToggle();
					$("#film-sec").delay(500).fadeToggle();		
					$("#game,#anim,#web,#busn,.nopic3").fadeToggle();
					$("#spanhide").fadeToggle();	
				}
	});
	/*-------------------------------------*/


	$("#comTV").click(function(){

		$(".subtitle").html(back+" <p class='text_header'>TV</p>");
		$(".title-academic").toggle();
		$(".subtitle,#mainline").toggle();

		$(".subtitle").one("click",function(){
			$(".title-academic").toggle();
			$(".subtitle,#mainline").toggle();

			$("#CL3").toggleClass('columnfull',0);
			$("#CL1,#CL2").fadeToggle();
			$("#tv-sec").fadeToggle(function(){
				$("#game,#anim,#web,#busn,.nopic3").fadeToggle();
				$("#spanhide").fadeToggle();
			});
		});
		/*///////////////////////////////////////////////////*/
		$("#CL3").toggleClass('columnfull',0);
			//	
				if(w > z){
					$("#CL1,#CL2").fadeToggle();
					$("#tv-sec").delay(500).fadeToggle();	
					$("#game,#anim,#web,#busn,.nopic3").fadeToggle();
					$("#spanhide").fadeToggle();		
				}
	});
	/*-------------------------------------*/

	$("#comCRM").click(function(){

		$(".subtitle").html(back+"<p class='text_header'> CRM</p>");
		$(".title-academic").toggle();
		$(".subtitle,#mainline").toggle();

		$(".subtitle").one("click",function(){
			$(".title-academic").toggle();
			$(".subtitle,#mainline").toggle();

			$("#CL3").toggleClass('columnfull',0);
			$("#CL1,#CL2").fadeToggle();
			$("#crm-sec").fadeToggle(function(){
				$("#game,#anim,#web,#busn,.nopic3").fadeToggle();
				$("#spanhide").fadeToggle();
			});
		});
		/*///////////////////////////////////////////////////*/
	$("#CL3").toggleClass('columnfull',0);
		//
			if(w > z){
				$("#CL1,#CL2").fadeToggle();
				$("#crm-sec").delay(500).fadeToggle();
				$("#game,#anim,#web,#busn,.nopic3").fadeToggle();
				$("#spanhide").fadeToggle();	
			}
	});
	/*-------------------------------------*/

	$("#comJR").click(function(){

		$(".subtitle").html(back+"<p class='text_header'> JR</p>");
		$(".title-academic").toggle();
		$(".subtitle,#mainline").toggle();

		$(".subtitle").one("click",function(){
			$(".title-academic").toggle();
			$(".subtitle,#mainline").toggle();

			$("#CL3").toggleClass('columnfull',0);
			$("#CL1,#CL2").fadeToggle();
			$("#jr-sec").fadeToggle(function(){
				$("#game,#anim,#web,#busn,.nopic3").fadeToggle();
				$("#spanhide").fadeToggle();
			});
		});
		/*///////////////////////////////////////////////////*/
	$("#CL3").toggleClass('columnfull',0);
		//
			if(w > z){
				$("#CL1,#CL2").fadeToggle();
				$("#jr-sec").delay(500).fadeToggle();	
				$("#game,#anim,#web,#busn,.nopic3").fadeToggle();
				$("#spanhide").fadeToggle();
			}
	});
	/*-------------------------------------*/

	$("#comAD").click(function(){

		$(".subtitle").html(back+" <p class='text_header'>AD</p>");
		$(".title-academic").toggle();
		$(".subtitle,#mainline").toggle();

		$(".subtitle").one("click",function(){
			$(".title-academic").toggle();
			$(".subtitle,#mainline").toggle();

			$("#CL3").toggleClass('columnfull',0);
			$("#CL1,#CL2").fadeToggle();
			$("#ad-sec").fadeToggle(function(){
				$("#game,#anim,#web,#busn,.nopic3").fadeToggle();
				$("#spanhide").fadeToggle();
			});
		});
		/*///////////////////////////////////////////////////*/
	$("#CL3").toggleClass('columnfull',0);
		//	
			if(w > z){
				$("#CL1,#CL2").fadeToggle();
				$("#ad-sec").delay(500).fadeToggle();	
				$("#game,#anim,#web,#busn,.nopic3").fadeToggle();
				$("#spanhide").fadeToggle();
			}
	});
/*-----------------------------------------------------*/
	
	
});