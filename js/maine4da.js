$( function() {
	$( 'input[name="promo"]' ).hide();
	$( 'p[name="promo-show"]' ).click(function() {
		$( 'input[name="promo"]' ).show('slow');
		$( 'p[name="promo-show"]' ).hide('slow');
	});
});
$(function(){

	$('body').on('click', '[data-modal="item-model"]', function(e){
		e.preventDefault();

		var that = $(this);

		var item = that.closest('.item-id');

		var modal = $('.modal[data-id="item-model"]');

		modal.find('form').trigger("reset");

		var p = item.attr('data-positions');

		var pos = modal.find('#positions');

		var items = pos.find('.item-positions');

		pos.addClass('hidden').removeClass('active-form');
		pos.next().removeClass('hidden').addClass('active-form');

		items.html("");

		if (p != "null") {
				var js = JSON.parse(p);

				modal.find(".active-form").css('opacity', '');
				modal.find(".active-form").addClass('hidden');
				modal.find(".active-form").removeClass("active-form");

				pos.removeClass('hidden');
				pos.addClass('active-form');
				pos.css('opacity', '');

				for (i1 in js) {
						var i = js[i1];
						var it = $('<div class="item-position" position-id="'+i1+'"><div class="item-position-header"><h4>' + i.name + '</h4></div><div class="item-position-body"></div><div class="item-position-footer"><p>Стоимость:</p><div class="t-price">'+ (i.discount ? '<p class="discount">' + i.discount + ' ' + i.currency + '</p>' : '') + '<h2>' + i.price.toLocaleString() + ' ' + i.currency + '</h2></div><button type="button" class="btn block item-select">Выбрать</button></div>').appendTo(items);

						if (i.sale)
								it.prepend('<div class="sale-badge">-' + i.sale + '%</div>');

						for (s of i.description) {
								it.find('.item-position-body').append('<div class="item-card">'+s+'</div>')
						}
				}
		}

		modal.find('input[name="d-id"]').val(item.attr('data-id'));
        modal.find('input[name="price"]').val(item.attr('price'));
        modal.find('input[name="donate"]').val(item.attr('donate'));

		modal.find('.modal-header').html(item.find('.item-title').html());
	}).on('click', '.slide-to-shop', function(e){

		e.preventDefault();



		$('html, body').animate({

			scrollTop: $("#shop").offset().top

		}, 1000, 'easeOutQuint');

	}).on("click", ".item-position>.item-position-footer>.item-select", function () {
	        $(".item-position").removeClass("selected");
	        $(".item-select[disabled]").removeAttr('disabled');
	        var it = $(this).closest('.item-position');

	        $(this).attr('disabled', 1);
	        it.addClass("selected");
	        $('#position').val(it.attr('position-id'));
	}).on("click", ".list-methods-aval>.item", function () {
        $(".list-methods-aval>.item").removeClass("active");
        $(this).addClass("active");
        $('#plat').val($(this).attr('id'));
        $(this).submit();
	});

});
