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

function add_item(element){
	event.preventDefault();
	$.ajax({
		type: "POST",
		url: '/cart/add_item',
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
		url: '/cart/delete_item',
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
		url: '/cart/empty_cart',
		success:function(res){
			if(res==true){
				location.href='/';
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
// INPUT MASK
$(function(){
  $(".phone").mask("+38(999) 999-9999");
	$('.phone').focus();
});
// =========================================================
// CALLBACK
$(document).ready(function(){
	$('.callback_form').submit(function(){
		var data = $(this).serialize();
		data += "&product=" + encodeURIComponent($(this).find(':submit').data('product'));
		callback(data);
		$(this).trigger('reset');
		event.preventDefault();
	});
	$('.callback_form_modal').submit(function(){
		var data = $(this).serialize();
		callback(data);
		$(this).trigger('reset');
		event.preventDefault();
	});
});

function callback(data){
	event.preventDefault();
	$.ajax({
		type: "POST",
		url: '/clients/callback',
		data: data,
		success:function(res){
			alert('Сейчас перезвоним');
		}
	});
}
// ===============================================================
// Contacts
$(document).ready(function(){
	$('#contact-form').submit(function(){
		$('.status').html('Отправляем...');
		var data = $(this).serialize();
		$.ajax({
			type: 'POST',
			url: '/top_menu/contacts_send',
			data: data,
			success:function(res){
				$(this).trigger('reset');
				$('.status').html('Отправлено');
			}
		});
		event.preventDefault();
	});
});
// ==================================================================
// ADMIN
function admin_log_in(){
	$.ajax({
		type: 'POST',
		url: '/admin/log_in',
		success:function(res){
			if(res == true){
				alert('Можно Заходить');
			}else{
				alert('Что то не так');
			}
		}
	});
	event.preventDefault();
}

$(document).ready(function(){
	$('#create_product').submit(function(){
		event.preventDefault();
		var data = new FormData($('form')[0]);
		$.ajax({
			type: 'POST',
			url: '/admin/create_product',
			data: data,
			processData: false,
			contentType: false,
			success:function(res){
				alert(res);
			}
		});
	});
});
// ====================================================================
// CATALOG
function filter_headers(filter_headers){
	var product_list = document.querySelectorAll(".product_item");
	var checkboxes_state = [];
	var current_request = {};
	var checkboxes_on = {};

	for( key in filter_headers){
		//Собираем состояние всех чекбоксов по всем заголовкам
		checkboxes_state[key] = document.querySelectorAll("[data-filter_key="+filter_headers[key]+"] input");
		//Выделяем зажатые чекбоксы
		for(let i = 0; i < checkboxes_state[key].length; i++){
			if(checkboxes_state[key][i].checked){
				// console.log('checked');
				checkboxes_on[checkboxes_state[key][i].getAttribute('value')] = 1;
				current_request[filter_headers[key]] = 1;
			}else{
				continue;
			}
		}
	}
	if(isEmpty(checkboxes_on)){
		$('.product_item').show();
		how_many(filter_headers)
		return true;
	}
	//Перебираем товары их свойство по текущему заголовку
	for(let i = 0; i < product_list.length; i++){
		for(key in filter_headers){
			if(!(filter_headers[key] in current_request)){
				continue;
			}
			var curr_attr = product_list[i].getAttribute("data-"+filter_headers[key]);
			if(curr_attr in checkboxes_on){
				product_list[i].style.display = "block";
			}else{
				product_list[i].style.display = "none";
				break;
			}
		}
	}
	how_many(filter_headers);
}

function isEmpty(obj) {
		for (var key in obj) {
		return false;
		}
		return true;
}

function how_many(filter_headers){
	var product_list = document.querySelectorAll(".product_item");
	var labels = [];

	for( key in filter_headers){
		//Собираем состояние всех чекбоксов по всем заголовкам
		labels[key] = document.querySelectorAll("[data-filter_key="+filter_headers[key]+"] label");

		for(let i = 0; i < labels[key].length; i++){
			var attr_counter = 0;
			var curr_attr = labels[key][i].getAttribute("data-info");
			for(let j = 0; j < product_list.length; j++){
				if(product_list[j].getAttribute("data-"+filter_headers[key]) == curr_attr && !( product_list[j].style.display == 'none')){
					attr_counter++;
				}
			}
			labels[key][i].innerHTML = curr_attr + ' ('+attr_counter+')';
		}
	}
}

$(document).ready(function(){
	var filter_headers = $('#filter_collapse').data('filter_headers');
	how_many(filter_headers);
	$("input[type='checkbox']").click(function () {
		how_many(filter_headers);
	});
	var sort_type = $('#sorting').val();
	var url = window.location.pathname.split("/").pop();
	$('option:selected', 'select[name="sorting"]').removeAttr('selected');
	$("select option[value="+url).attr("selected","selected");
	$('select[name="sorting"]').on('change', function() {
  	window.location.href = "/catalog/"+$('#title').data('title')+"/sort/"+this.value;
	});
});



// =======================================================================
