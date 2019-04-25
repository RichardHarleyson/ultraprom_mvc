$(document).ready(function(){
				 //-- Click on detail
				 $("ul.menu-items > li").on("click",function(){
						 $("ul.menu-items > li").removeClass("active");
						 $(this).addClass("active");
				 })

				 $(".attr,.attr2").on("click",function(){
						 var clase = $(this).attr("class");

						 $("." + clase).removeClass("active");
						 $(this).addClass("active");
				 })

				 //-- Click on QUANTITY
				 $(".btn-minus").on("click",function(){
						 var now = $(".section > div > input").val();
						 if ($.isNumeric(now)){
								 if (parseInt(now) -1 > 0){ now--;}
								 $(".section > div > input").val(now);
						 }else{
								 $(".section > div > input").val("1");
						 }
				 })
				 $(".btn-plus").on("click",function(){
						 var now = $(".section > div > input").val();
						 if ($.isNumeric(now)){
								 $(".section > div > input").val(parseInt(now)+1);
						 }else{
								 $(".section > div > input").val("1");
						 }
				 })

				 // =======================================================

				 $('#11').hover(function() {
				 	$('.to_hide').hide();
				 	$('.menu_items_11').show();
				 });

				 $('#12').hover(function() {
				 	$('.to_hide').hide();
				 	$('.menu_items_12').show();
				 });

				 $('#13').hover(function() {
				 	$('.to_hide').hide();
				 	$('.menu_items_13').show();
				 });

				 $('#21').hover(function() {
				 	$('.to_hide').hide();
				 	$('.menu_items_21').show();
				 });

				 $('#22').hover(function() {
				 	$('.to_hide').hide();
				 	$('.menu_items_22').show();
				 });

				 $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
				  if (!$(this).next().hasClass('show')) {
				    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
				  }
				  var $subMenu = $(this).next(".dropdown-menu");
				  $subMenu.toggleClass('show');


				  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
				    $('.dropdown-submenu .show').removeClass("show");
				  });


				  return false;
				});

		 })
