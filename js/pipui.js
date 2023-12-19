/* PipUI v1.2.1 © Qexy | Site: https://pipui.ru | License: MIT */


/***** base.js *****/
var pipui = {
	array_unique: function(array){
		var result = [];

		for(var i = 0; i < array.length; i++){
			if(result.indexOf(array[i]) === -1){
				result.push(array[i]);
			}
		}

		return result;
	},

	top_space: function(e){
		return e.offset().top - window.pageYOffset;
	},

	bottom_space: function(e){
		return window.innerHeight - e.offset().top - e.outerHeight() + window.pageYOffset;
	},

	left_space: function(e){
		return e.offset().left - window.pageXOffset;
	},

	right_space: function(e){
		return window.innerWidth - e.offset().left - e.outerWidth() + window.pageXOffset;
	}
};

$(function(){
	$('body').on('click', '.preventDefault', function(e){
		e.preventDefault();
	});
});




/***** navbar.js *****/
$(function(){
	$('html').on('click', 'body', function(e){

		var target = $(e.target);

		var trigger = target.closest('.nav-sub');

		var li = trigger.closest('.nav-li');

		if(!trigger.length && !target.closest('.nav-submenu').length){
			$('.navbar .nav-submenu.active, .navbar .nav-sub.active').removeClass('active left-pos right-pos');
		}else{
			var navbar = target.closest('.navbar');

			$('.navbar').not(navbar).find('.nav-sub.active, .nav-submenu.active').removeClass('active left-pos right-pos');

			li.siblings('.nav-li').not(li).find('.nav-sub.active, .nav-submenu.active').removeClass('active left-pos right-pos');
		}
	});

	$('body').on('click', '.navbar .nav-sub', function(e){
		e.preventDefault();

		var that = $(this);

		var submenu = that.closest('.nav-li').children('.nav-submenu');

		var navbar = that.closest('.navbar');

		var left = e.pageX-navbar.offset().left;

		var right = navbar.outerWidth() - left;

		if(!that.hasClass('active') || !submenu.hasClass('active')){
			if(left>right){
				submenu.addClass('right-pos');
			}else{
				submenu.addClass('left-pos');
			}

			that.addClass('active');
			submenu.addClass('active');
		}else{
			that.removeClass('active');
			submenu.removeClass('active left-pos right-pos');
			submenu.find('.nav-submenu.active, .nav-sub.active').removeClass('active');
		}

	}).on('click', '.navbar .navbar-wrapper .nav-mobile', function(e){
		e.preventDefault();

		$(this).closest('.navbar').toggleClass('open');
	});
});




/***** modal.js *****/
pipui.modal = {
	open: function(e){
		if(e==''){ return false; }

		e = $('.modal[data-id="'+e+'"]');
		if(!e.length){ return false; }

		e.fadeIn('fast', function(){
			$(this).addClass('active');
		});				var body = $('body');				body.css('height', '100vh');		body.css('overflowY', 'hidden');
		return true;
	},

	close: function(e){
		if(e==''){ return false; }

		e = $('.modal[data-id="'+e+'"]');				e.find('.active-form').removeClass('.active-form').addClass('hidden');
		if(!e.length){ return false; }

		e.fadeOut('fast', function(){
			$(this).removeClass('active');			
		});		var body = $('body');				body.css('height', '');		body.css('overflowY', '');

		return true;
	},

	toggle: function(e){
		if(e==''){ return false; }

		e = $('.modal[data-id="'+e+'"]');
		if(!e.length){ return false; }

		e.fadeToggle('fast', function(){
			$(this).toggleClass('active');
		});

		return true;
	}
};

$(function(){
	$('body').on('click', '[data-modal]', function(e){
		if(e.target.tagName != 'INPUT'){
			e.preventDefault();
		}

		var that = $(this);

		var modal = that.attr('data-modal');

		if(!modal){ modal = that.attr('href'); }

		if(modal){ pipui.modal.open(modal); }
	}).on('click', '.modal [data-modal-close]', function(e){
		e.preventDefault();	
		pipui.modal.close($(this).closest('.modal').attr('data-id'));
	}).on('click', '.modal', function(e){
		var target = $(e.target);
		if(!target.closest('.modal-content').length){
			pipui.modal.close(target.closest('.modal').attr('data-id'));
		}
	});
});



/***** tabs.js *****/
pipui.tabs = {
	active: function(id){
		if(typeof id != 'string'){
			return false;
		}

		var link = $('.tabs > .tab-links .tab-link[data-id="'+id+'"]');

		var tab = $('.tabs > .tab-list > .tab-id'+id);

		if(link.hasClass('active') && tab.hasClass('active')){
			return false;
		}

		var tabs = link.closest('.tabs');

		tabs.children('.tab-links').find('.tab-link.active').removeClass('active');
		link.addClass('active');

		tabs.children('.tab-list').children('.tab-id.active').fadeOut('fast', function(){
			$(this).removeClass('active');
			tab.fadeIn('fast', function(){
				$(this).addClass('active');
			});
		});

		return true;
	}
};

$(function(){
	$('body').on('click', '.tabs > .tab-links .tab-link', function(e){
		e.preventDefault();

		pipui.tabs.active($(this).attr('data-id'));
	});
});




/***** navmenu.js *****/
pipui.navmenu = {
	toggle: function(that){

		var item = that.closest('.nav-menu-item');

		var sub = item.children('.nav-sub-menu');

		if(!sub.length){ return false; }

		if(sub.is(':visible')){
			that.removeClass('active');
		}else{
			that.addClass('active');
		}

		sub.slideToggle('fast', function(){
			var self = $(this);

			if(self.is(':hidden')){
				item.removeClass('active');
			}else{
				item.addClass('active');
			}
		});
	}
};

$(function(){
	$('body').on('click', '.nav-menu .nav-menu-link.nav-menu-toggle', function(e){
		e.preventDefault();

		pipui.navmenu.toggle($(this));
	});
});