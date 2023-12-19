var CRSF;
$(function() {
    CRSF = $("meta[name='crsf-token']").attr("content");

    $('body').on('submit', 'form', function(e) {
        e.preventDefault();

        var th = $(this);
    		var data = th.serializeArray();
    		var id = th.attr('id');
    		var active = $(document.activeElement);
            var next = active.attr('data-next');
    		if(next) {
    			var type = $(next);
    			if(type) {
    				switchToAnother(th, type);
    				return;
    			}
    		}
    		if(id) {
                data[data.length] = { name: 'form', value: th.attr('id') };
    		}

        $.ajax({
                method: "POST",
        				url: th.attr('action'), //Change
        				processData: false,
                        data: $.param(data),
            			beforeSend: (function(xhr) {
            				xhr.setRequestHeader('X-CRSF-Token', CRSF);
                            th.closest('[data-loading]').loading({
                              message: 'Загрузка...',
                              stoppable: true
                            });
            			}),
            			success: (function(f) {
                            var res = handleResponse(th, f, false);
            				if(res.message)
            					notifySuccess(res.message);
            			}),
            			error: (function(f) {
                            var err = handleResponse(th, f, true);
            				if(err.message)
            					notifyError(err.message);
            			}),
                complete: (function(f) {
                    th.closest('[data-loading]').loading('stop');
                })
		}).done(function() {
			th.closest('[data-loading]').loading('stop');
		});

        return false;
    });

    $("form[fetch-onload]").submit();

    setInterval(() => checkSurcharge(), 100);

    //updateOnline();

    //setInterval(() => updateOnline(), 60000);
});

var _v = { t: [] };

function checkSurcharge() {
	var th = $('.active-form');

	var $u = th.closest('form').serialize();

	if (_v.t === $u || !CRSF)
		return;

	var $b = th.find('.order-submit');

	$b.attr('disabled', 1);

	if (!_v.d)
		_v.d = Date.now();

	if ((Date.now() - _v.d) < 3000)
		return;

	var data = th.closest('form').serializeArray();

	_v.t = $u;
	_v.d = Date.now();

    $.ajax({
                method: "POST",
				url: '',
                data: $.param(data),
				beforeSend: (function (xhr) {
    				xhr.setRequestHeader('X-CRSF-Token', CRSF);
    			}),
    			success: (function(f) {
                    var res = handleResponse(th, f, false);
    				if(res.message)
    					notifySuccess(res.message);
    			}),
	}).always(function () {
		$b.removeAttr('disabled');
	});
}

function handleResponse(th, res, error) {
	if(error) {
		res = JSON.parse(res.responseText);
	}

	if(!res) {
		notifyError('Произошла непредвиденная ошибка сервера!');
        return;
	}

	if(res.values.redirect) {
        $(location).prop('href', res.values.redirect);
	}

    if(res.values.switch_next) {
		switchToAnother(th, $(res.values.switch_next));
	}

	if (res.values.replace) {
		for(replace in res.values.replace)
			$(replace).text(res.values.replace[replace]);
	}

	if (res.values.reveal) {
		for (reveal of res.values.reveal) {
			$(reveal).slideDown(300);
    		$('[data-reveal="'+ reveal +'"]').slideUp(300).delay(300);
		}
	}

	return res;
}

function switchToAnother(form, o) {
	current = form.find('.active-form');

	if(current.is(o))
		return;

	let animation = o.attr('animation');

	if(animation)
		current.addClass(animation);

	current.css('opacity', 1).animate({ opacity: 0 }, 500, 'linear', function() {
		current.removeClass('active-form');

		if (animation)
			current.removeClass(animation);

		current.addClass('hidden');

		o.removeClass('hidden').addClass('active-form');

		if (animation)
			o.addClass(animation + '-off');

		o.css('opacity', 0).animate({ opacity: 1 }, 500, 'linear', function () {
			if (animation)
				o.removeClass(animation + '-off');

			if(o.attr("task")) {
				if(o.attr("task-interval"))
					timer = setInterval(o.attr("task"), o.attr("task-interval"));
				else if(o.attr("task-timeout"))
					timer = setTimeout(o.attr("task"), o.attr("task-timeout"));
				else timer = setTimeout(o.attr("task"), 1000);
			}

			if (o.attr('modal-mode'))
				o.closest('.modal-container').removeClass(['max-modal', 'big-modal']).addClass(o.attr('modal-mode'));
		});
	});
}

function notifyError(error) {
    $.notify(error, { className: "error", globalPosition: 'top right' });
}

function notifySuccess(success) {
    $.notify(success, { className: "success", globalPosition: 'top right' });
}
