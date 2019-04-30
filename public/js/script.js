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

				 // Menu hover buttons
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

				 $('#31').hover(function() {
					$('.to_hide').hide();
					$('.menu_items_31').show();
				 });

				 $('#32').hover(function() {
					$('.to_hide').hide();
					$('.menu_items_32').show();
				 });

				 $('#41').hover(function() {
					$('.to_hide').hide();
					$('.menu_items_41').show();
				 });

				 $('#42').hover(function() {
					$('.to_hide').hide();
					$('.menu_items_42').show();
				 });

				 $('#51').hover(function() {
					$('.to_hide').hide();
					$('.menu_items_51').show();
				 });

				 $('#52').hover(function() {
					$('.to_hide').hide();
					$('.menu_items_52').show();
				 });

				 $('#61').hover(function() {
					$('.to_hide').hide();
					$('.menu_items_61').show();
				 });

				 $('#62').hover(function() {
					$('.to_hide').hide();
					$('.menu_items_62').show();
				 });
				// ====================================================
				// Mobile menu dropdowns
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
					// ==================================================


				});

		 });
// =============================================================
// Main page product carousel slider startup
$(document).ready(function(){
	// Product carousel
	$('#product_carousel div:first-child').addClass('active');
});


// ===============================================================
// Catalog page range widget

// =================================================================
// Rating
window.onload = function() {
    function addRating(){
        var rating = document.querySelectorAll(".rating");

        for (var i = 0; i < rating.length; i++){
            var attribute = +rating[i].getAttribute("rating");
            var difference = 5 - attribute;

            for (var j = 0; j < attribute; j++){
                var starGold = document.createElement("div");
                starGold.className = "gold";
                rating[i].appendChild(starGold);
            }

            for (var k = 0; k < difference; k++){
                var starGrey = document.createElement("div");
                starGrey.className = "grey";
                rating[i].appendChild(starGrey);
            }
        }
    }
    function addRating2(){
        var rating = document.querySelectorAll(".rating");

        for (var i = 0; i < rating.length; i++){
            var attribute = +rating[i].getAttribute("rating");

            for (var j = 5; j > 0; j--){
                if (attribute > 0){
                    var starGold = document.createElement("div");
                    starGold.className = "fas fa-star";
                    rating[i].appendChild(starGold);
                } else {
                    var starGrey = document.createElement("div");
                    starGrey.className = "far fa-star";
                    rating[i].appendChild(starGrey);
                }
                attribute--;
            }
        }
    }
    // addRating();
    addRating2();
 }

// Add to cart
$(function () {
  $('[data-toggle="popover"]').popover()
})


// =================================================================
// CART
// Add cart item
// $(document).ready(function(){
// 	$(".add_item_form11").submit(function(event){
// 		alert($(this).attr('data-title'));
// 		event.preventDefault();
// 		$.ajax({
// 			type: $(this).attr('method'),
// 			url: $(this).attr('action'),
// 			data: new FormData(this),
// 			contentType: false,
// 			cache: false,
// 			processData: false,
// 			success: function(result){
// 				alert(result);
// 			},
// 		});
// 	});
// });

function add_item(element){
	event.preventDefault();
	$.ajax({
		type: "POST",
		url: '/ultraprom_mvc/cart/add_item',
		data: {id: $(element).data('id'), title: $(element).data('title'), price: $(element).data('price')},
		success:function(res){
			if(res==true){
				setTimeout(function () {
						$(element).popover('hide');
				}, 2500);
				$(element).removeClass('btn-danger');
				$(element).addClass('btn-success');
				$(element).attr('onclick','');
				$(element).attr('data-toggle','');
				$(element).empty();
				$(element).html('<i class="fas fa-check"></i>');
				// $(element).replaceWith( '<button class="btn btn-success"  data-toggle="popover" data-trigger="focus" data-placement="bottom" data-content="Добавлено в Корзину"><i class="fas fa-check"></i></button>' );
				// alert('Добавлено в корзину');
			};
		}
	});
}

function delete_item(element){
	event.preventDefault();
	$.ajax({
		type: "POST",
		url: '/ultraprom_mvc/cart/delete_item',
		data: {index: $(element).data('index')},
		success:function(res){
			var id = $(element).data('index');
			$('[data-index='+id+']').parents('tr').remove();
			count_total();
		}
	});
}

function delete_all(){
	event.preventDefault();
	$.ajax({
		type: "POST",
		url: '/ultraprom_mvc/cart/empty_cart',
		success:function(res){
			if(res==true){
				location.href='/ultraprom_mvc/';
			}else{
				alert('Что то пошло не так');
			}
		}
	});
}

function count_total(){
	var total = 0;
	$('.cart_quantity').each(function(){
		total = total + ($(this).val() * $(this).data('price'));
	});
	$('.total_price').empty();
	$('.total_price').html('<h4>Общая стоимость: '+total+' грн</h4>');
}

$(".cart_quantity").change(function(){
	count_total();
});

// ===============================================================
