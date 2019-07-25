// возвращает cookie с именем name, если есть, если нет, то undefined

// Preloader
// document.addEventListener("DOMContentLoaded", function(event) {
// // document.body.onload = function(){
// 	setTimeout(function(){
// 	// document.getElementById('preloader').css('opacity', '0');
// 	document.getElementById('preloader').classList.add('done');
// 	},1000);
// })

function getCookie(name) {
  var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}

// Carousels
$(document).ready(function(){
	$('#same_products_carousel').slick({
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		// prevArrow: '<a class="position-absolute" style="top: 50%; left: -50px;"><i class="fas fa-chevron-left fa-2x text-d"></i></a>',
		// nextArrow: '<a class="position-absolute" style="top: 50%; right: -50px;"><i class="fas fa-chevron-right fa-2x text-d"></i></a>',
		prevArrow: '#btn_prev',
		nextArrow: '#btn_next',
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
				dots: false
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	]
	});
	$('#pop_products_carousel').slick({
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		// prevArrow: '<a class="position-absolute" style="top: 50%; left: -50px;"><i class="fas fa-chevron-left fa-2x text-d"></i></a>',
		// nextArrow: '<a class="position-absolute" style="top: 50%; right: -50px;"><i class="fas fa-chevron-right fa-2x text-d"></i></a>',
		prevArrow: '#pop_btn_prev',
		nextArrow: '#pop_btn_next',
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
				dots: false
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	]
	});
	$('#onsale_products_carousel').slick({
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		// prevArrow: '<a class="position-absolute" style="top: 50%; left: -50px;"><i class="fas fa-chevron-left fa-2x text-d"></i></a>',
		// nextArrow: '<a class="position-absolute" style="top: 50%; right: -50px;"><i class="fas fa-chevron-right fa-2x text-d"></i></a>',
		prevArrow: '#onsale_btn_prev',
		nextArrow: '#onsale_btn_next',
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
				dots: false
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	]
	});
});
//====================================================================

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

// Review
// Форма отзывов
$(document).ready(function(){
	if($('#PageType').is(".PageType_ProductPage")){
		var Оценка = -1;

		var Строка_звёздочек = document.getElementById("Оценки");
		for (let сч = 0; сч < 5; сч++) {
			let звёздочка = document.createElement('span');
			звёздочка.onclick = function () { Выбрать_звёздочку(сч, true); };
			звёздочка.onmouseover = function () { Выбрать_звёздочку(сч); };
			звёздочка.innerHTML = "★";
			Строка_звёздочек.appendChild(звёздочка);
		}

		function Выбрать_звёздочку(зв, уст = false) {
			if (уст) Оценка = зв; else if (зв < 0) зв = Оценка;
			Array.from(document.querySelectorAll("#Оценки span")).forEach(function (зн, сч) {
				зн.style.color = сч > зв ? "#000" : "#ffc107";
				зн.classList.add = сч > зв ? "schecked" : "";
			});
		};
	};
})

function star_test(){
	event.preventDefault();
	// var stars = $('#Оценки span[style="color: rgb(255, 193, 7)"]');
	var stars = $('#Оценки span').filter(function(){
		return $(this).css('color') == 'rgb(255, 193, 7)';
	})
	return stars.length;
}

$(document).ready(function(){
	$('#reviewform').submit(function(){
		event.preventDefault();
		var data = $(this).serialize();
		var stars = star_test();
		data += '&rating='+stars+'&product_id='+$(this).data('product_id');
		$.ajax({
			type: 'POST',
			url: '/product/new_review',
			data: data,
			success: function(res){
				console.log(res);
				$('#review_form_status').html('<h5>Спасибо за Ваш отзыв!</h5>');
			}
		})
	})
})
// ==========================================================


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
		data: {id: $(element).data('id'), title: $(element).data('title'), price_uah: $(element).data('price')},
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
	$("input[name='total_price']").attr('data-total_price', total);
	// $("input[name='total_price']").val(total);
	$('.total_price').html('<h4>Итого: '+new Intl.NumberFormat('ru-RU').format(total)+' грн</h4>');
}

function count_item_total(index){
	var total = 0;
	// Считываем текущий quantity
	total = total + $('input[data-index="'+index+'"]').val() * $('input[data-index="'+index+'"]').data('price');
	$('div[data-index="'+index+'"]').empty();
	$('div[data-index="'+index+'"]').html(new Intl.NumberFormat('ru-RU').format(total)+' грн');
}

$(".cart_quantity").change(function(){
	count_total();
	count_item_total(($(this).data('index')));
});

function cart_order(){
	event.preventDefault();
	var data = $('#cart_order_form').serialize();
	data +='&total_price='+$("input[name='total_price']").data('total_price');
	$.ajax({
		type: "POST",
		url: '/cart/cart_order',
		data: data,
		success(res){
			$('#cart_order_status').html('Заказ отправлен в обработку');
			setTimeout(function(){$('#cart_order').modal('hide');}, 2000);
		}
	});
}

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
		data: $('#admin_login_form').serialize(),
		success:function(res){
			if(res == 1){
				$('.login_status').html('<h4 class="text-success">Все верно</h4>');
				window.location.href = "/admin/panel";
			}else{
				$('.login_status').html('<h4 class="text-danger">Неверный логин или пароль</h4>');
			}
		}
	});
	event.preventDefault();
}

$(document).ready(function(){
	$('select[name="list_category"]').change(function(){
		var list_items = document.querySelectorAll('.list_item');
		$('.list_item').hide();
		$('tr[data-product_type="'+$(this).val()+'"]').show();
	})
})

function product_upd(elem){

	var omg_parent = $(elem).parent().parent().parent();
	var item_title = omg_parent.find('td input[name="item_title"]').val();
	var item_price = omg_parent.find('td input[name="item_price"]').val();
	var item_currency =  omg_parent.find('td select[name="item_currency"]').val();
	var item_description = omg_parent.find('td textarea[name="item_description"]').val();
	var item_onsale = omg_parent.find('td input[name="item_onsale"]').is(':checked');
	var item_available = omg_parent.find('td input[name="item_available"]').is(':checked');

	var data = '&item_id='+$(elem).data('product_id')+'&item_title='+item_title+'&item_price='+item_price+'&item_currency='+item_currency+'&item_description='+item_description+'&item_onsale='+item_onsale+'&item_available='+item_available+'&del=false';
	// console.log(data);
	$.ajax({
		type: 'POST',
		url: '/admin/product_update',
		data: data,
		success: function(res){
			// console.log(res);
			omg_parent.css('background', 'green');
			setTimeout(function(){ omg_parent.css('background', 'white') }, 2000);
		}
	})
}

function setback(elem){
	elem.css('background', 'white');
}

function product_del(elem){
	if(!confirm('Вы Уверены?')){
		return 0;
	}
	var data = '&item_id='+$(elem).data('product_id')+'&del=true';
	var omg_parent = $(elem).parent().parent().parent();
	$.ajax({
		type: 'POST',
		url: '/admin/product_update',
		data: data,
		success: function(res){
			omg_parent.css('background', 'red');
			setTimeout(function(){ omg_parent.css('background', 'white') }, 2000);
		}
	})
}

$(document).ready(function(){
	// Вырубили все
	$("#filter_info div[class='input-group']").hide();
	$("#filter_info div[class='input-group'] input").prop("disabled", true);
	$("#filter_info div[class='input-group'] select").prop("disabled", true);
})

$("select[name='category']").change(function(){
	// Вырубили все
	$("#filter_info div[class='input-group']").hide();
	$("#filter_info div[class='input-group'] input").prop("disabled", true);
	$("#filter_info div[class='input-group'] select").prop("disabled", true);
	//
	$('#filter_manufacturer').show();
	$('#filter_manufacturer input').prop('disabled', false);
	$('#filter_country').show();
	$('#filter_country input').prop('disabled', false);
	if($(this).val() == '1'){
		//Настенные Газовые Котлы:
		// Бренд, Камера Сгорания, Теплообменник, Страна Прозводитель, Контур, Мощность
		// Вырубили все
		// Включаем только нужные
		$('#filter_burn_cam').show();
		$('#filter_burn_cam select').prop('disabled', false);
		$('#filter_teploobmen').show();
		$('#filter_teploobmen select').prop('disabled', false);
		$('#filter_contur').show();
		$('#filter_contur select').prop('disabled', false);
		$('#filter_power').show();
		$('#filter_power input').prop('disabled', false);
	}else if ($(this).val() == '2') {
		//Напольные Газовые Котлы:
		// Бренд, Страна производитель, мощность, контур, теплообменник, тип розжига, способ отвода газов
		// Вырубили все
		// Включаем только нужные
		$('#filter_power').show();
		$('#filter_power input').prop('disabled', false);
		$('#filter_contur').show();
		$('#filter_contur select').prop('disabled', false);
		$('#filter_teploobmen').show();
		$('#filter_teploobmen select').prop('disabled', false);
		$('#filter_rozjig').show();
		$('#filter_rozjig select').prop('disabled', false);
		$('#filter_otvod').show();
		$('#filter_otvod select').prop('disabled', false);
	}else if ($(this).val() == '3') {
		// Конденсационные Газовые Котлы:
		// Производитель, Страна производитель, мощность, кол-во контуров.
		// Вырубили все
		// Включаем только нужные
		$('#filter_power').show();
		$('#filter_power input').prop('disabled', false);
		$('#filter_contur').show();
		$('#filter_contur select').prop('disabled', false);
	}else if ($(this).val() == '4') {
		// Электрические Котлы:
		// Бренд, Страна Производитель, Наличие Насоса, /Напряжение/, управление, Мощность
		// Вырубили все
		// Включаем только нужные
		$('#filter_power').show();
		$('#filter_power input').prop('disabled', false);
		$('#filter_contur').show();
		$('#filter_contur select').prop('disabled', false);
		// $('#filter_napryajenie').show();
		// $('#filter_napryajenie input').prop('disabled', false);
		$('#filter_nasos').show();
		$('#filter_nasos select').prop('disabled', false);
		$('#filter_controller').show();
		$('#filter_controller select').prop('disabled', false);
	}else if($(this).val() == '5'){
		// Стальные радиаторы:
		// Бренд, Страна Производитель, тип, высота, длина, подключение
		$('#filter_rad_type').show();
		$('#filter_rad_type select').prop('disabled',false);
		$('#filter_rad_height').show();
		$('#filter_rad_height select').prop('disabled', false);
		$('#filter_rad_length').show();
		$('#filter_rad_length select').prop('disabled', false);
		$('#filter_rad_conn').show();
		$('#filter_rad_conn select').prop('disabled', false);
	}
	else if($(this).val() == '6'){
		// Алюминиевые радиаторы:
		// Бренд, Страна Производитель, межосевое расстояние
		// Вырубили все
		// Включаем только нужные
		$('#filter_apex').show();
		$('#filter_apex select').prop('disabled', false);
	}
	else if($(this).val() == '7'){
		// Биметаллические радиаторы:
		// Бренд, Страна Производитель, межосевое расстояние
		// Вырубили все
		// Включаем только нужные
		$('#filter_apex').show();
		$('#filter_apex select').prop('disabled', false);
	}
	else if($(this).val() == '8'){
		// Чугунные радиаторы:
		// Бренд, Страна Производитель, межосевое расстояние
		// Вырубили все
		// Включаем только нужные
		$('#filter_apex').show();
		$('#filter_apex select').prop('disabled', false);
	}
	else if($(this).val() == '9'){
		// Электрические радиаторы:
		// Бренд, мощность, секции
		// Вырубили все
		//
		$('#filter_power').show();
		$('#filter_power input').prop('disabled', false);
		$('#filter_rad_sec').show();
		$('#filter_rad_sec select').prop('disabled', false);
	}
	else if($(this).val() == '10'){
		// Дизайнерские радиаторы:
		// Бренд, мощность, страна
		// Вырубили все
		//
		$('#filter_power').show();
		$('#filter_power input').prop('disabled', false);
	}
	else if($(this).val() == '11'){
		// Комплектующие для радиаторов:
		// Бренд, страна производитель, тип комплектации, тип радиатора, диаметр подключения,
		// Вырубили все
		//
		$('#filter_rad_elem_comp').show();
		$('#filter_rad_elem_comp select').prop('disabled', false);
		$('#filter_rad_kind').show();
		$('#filter_rad_kind select').prop('disabled', false);
		$('#filter_rad_eradius').show();
		$('#filter_rad_eradius select').prop('disabled', false);
	}
	else if($(this).val() == '12'){
		// Электрический теплый пол:
		// Бренд, страна, тип, монтаж, тип кабель, диаметр кабеля
		// Вырубили все
		//
		$('#filter_flour_type').show();
		$('#filter_flour_type select').prop('disabled', false);
		$('#filter_flour_montaj').show();
		$('#filter_flour_montaj select').prop('disabled', false);
		$('#filter_flour_cabtype').show();
		$('#filter_flour_cabtype select').prop('disabled', false);
		$('#filter_flour_cabrad').show();
		$('#filter_flour_cabrad select').prop('disabled', false);

	}
	else if($(this).val() == '13'){
		// Трубы для теплого пола:
		// Бренд, мощность
		// Вырубили все
		//
	}
	else if($(this).val() == '14'){
		// Инфракрасный теплый пол:
		// Бренд, страна, площадь
		// Вырубили все
		//
		$('#filter_flour_isqr').show();
		$('#filter_flour_isqr select').prop('disabled', false);
	}
	else if($(this).val() == '15'){
		// Водяной теплый пол
		// Бренд, мощность
		// Вырубили все
		//
	}
	else if($(this).val() == '16'){
		// Коллекторные шкафы
		// Бренд, мощность
		// Вырубили все
		//
	}
	else if($(this).val() == '17'){
		// Твердотопливные котлы
		// Бренд, мощность
		// Вырубили все
		//
		$('#filter_power').show();
		$('#filter_power input').prop('disabled', false);
		$('#filter_tteploobmen').show();
		$('#filter_tteploobmen select').prop('disabled', false);
	}
	else if($(this).val() == '18'){
		// Комплектующие для котлов
		// Бренд, страна
		// Вырубили все
		//
	}
	else if($(this).val() == '21'){
		// ППР трубы и фитинги
		// Бренд, страна
		// Вырубили все
		//
	}
	else if($(this).val() == '22'){
		// Обжимные фитинги
		// Бренд, страна
		// Вырубили все
		//
	}
	else if($(this).val() == '23'){
		// Изоляция для труб
		// Бренд, страна
		// Вырубили все
		//
	}
	else if($(this).val() == '24'){
		// Металлопластиковые трубы
		// Бренд, страна
		// Вырубили все
		//
	}
	else if($(this).val() == '25'){
		// Внутренняя канализация
		// Бренд, страна
		// Вырубили все
		//
	}
	else if($(this).val() == '26'){
		// Наружная канализация
		// Бренд, страна
		// Вырубили все
		//
	}
	else if($(this).val() == '27'){
		// Бесшумная канализация
		// Бренд, страна
		// Вырубили все
		//
	}
	else if($(this).val() == '28'){
		// Кондиционеры настенного типа
		// Бренд, страна
		// Вырубили все
		//
	}
	else if($(this).val() == '29'){
		// Мобильные кондиционеры
		// Бренд, страна
		// Вырубили все
		//
	}
	else if($(this).val() == '30'){
		// Циркуляционные насосы
		// Бренд, страна
		// Вырубили все
		//
	}
	else if($(this).val() == '31'){
		// Бойлеры электрические
		// Бренд, страна
		// Вырубили все
		//
	}
	else if($(this).val() == '32'){
		// Проточные электрические водонагреватели
		// Бренд, страна
		// Вырубили все
		//
	}
	else if($(this).val() == '33'){
		// Газовые колонки
		// Бренд, страна
		// Вырубили все
		//
	}
});

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
				alert('Товар Добавлен');
			}
		});
	});
});

$(document).ready(function(){
	if($('#PageType').is(".PageType_Currency")){
		$('#set_curr_auto').on('click',function(){
			var curr_data = { usd_buy: $('#USD_buy').data('buy'), usd_sale: $('#USD_sale').data('sale'), eur_buy: $('#EUR_buy').data('buy'), eur_sale: $('#EUR_sale').data('sale'), };
			$.ajax({
				type: 'POST',
				url: '/admin/currency_auto_update',
				data: curr_data,
				success:function(res){
					if( res == 1){
						$('#auto_status').html('<h4>Курс Установлен</h4>');
					}
				}
			});
		});
	}
});

// ====================================================================
// CATALOG
function filter_headers(filter_headers){
	var product_list = document.querySelectorAll(".product_item");
	var checkboxes_state = [];
	var current_request = {};
	var checkboxes_on = {};
	// Минимальная и максимальная цена товаров для полей воода цены
	var min_price = Number($('#price_start').val());
	var max_price = Number($('#price_end').val());

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
		for(let i = 0; i < product_list.length; i++){
			if(!(product_list[i].getAttribute("data-product_price") >= min_price && product_list[i].getAttribute("data-product_price") <= max_price)){
				product_list[i].style.display = "none";
				continue;
			}
		}
		how_many(filter_headers)
		return true;
	}
	//Перебираем товары их свойство по текущему заголовку
	for(let i = 0; i < product_list.length; i++){
		if(!(product_list[i].getAttribute("data-product_price") >= min_price && product_list[i].getAttribute("data-product_price") <= max_price)){
			product_list[i].style.display = "none";
			continue;
		}
		for(key in filter_headers){
			if(!(filter_headers[key] in current_request) ){
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
	// Пересчитываем кол-во доступных товаров по текущей настройке фильтра
	how_many(filter_headers);
}

function isEmpty(obj) {
		for (var key in obj) {
		return false;
		}
		return true;
}

// Подсчет колва товаров на каждое свойство фильтра
function how_many(filter_headers){
	var product_list = document.querySelectorAll(".product_item");
	var labels = [];

	for( key in filter_headers){
		//Собираем состояние всех чекбоксов по всем заголовкам
		labels[key] = document.querySelectorAll("[data-filter_key="+filter_headers[key]+"] label");

		for(let i = 0; i < labels[key].length; i++){
			var attr_counter = 0;
			// Получаем заголовок текущего свойства
			var curr_attr = labels[key][i].getAttribute("data-info");
			// Прогоняемся по списку товаров для подсчета
			for(let j = 0; j < product_list.length; j++){
				if(product_list[j].getAttribute("data-"+filter_headers[key]) == curr_attr && !( product_list[j].style.display == 'none')){
					attr_counter++;
				}
			}
			// Устанавливаем кол-во элементов доступных при данных настройках фильтра
			labels[key][i].innerHTML = curr_attr + ' ('+attr_counter+')';
		}
	}
}

function get_min_max(){
	var product_list = document.querySelectorAll(".product_item");
		// Минимальная и максимальная цена товаров для полей воода цены
	var min_price = product_list[0].getAttribute("data-product_price");
	var max_price = product_list[0].getAttribute("data-product_price");
	// Считаем максимальный и минимальный ценник
	for(let j = 0; j < product_list.length; j++){
		if(!( product_list[j].style.display == 'none')){
			// Вычисляем минмиальный ценник
			if(Number(product_list[j].getAttribute("data-product_price")) <= min_price){
				min_price = product_list[j].getAttribute("data-product_price");
			}
			if(Number(product_list[j].getAttribute("data-product_price")) >= max_price){
				max_price = product_list[j].getAttribute("data-product_price");
			}
		}
	}
	// Устанавливаем минимальный и максимальный ценники
	$('#price_start').val(min_price);
	$('#price_end').val(max_price);
}

$(document).ready(function(){
	if($('#PageType').is(".PageType_Catalog")){
		get_min_max();
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
	}
});



// =======================================================================
