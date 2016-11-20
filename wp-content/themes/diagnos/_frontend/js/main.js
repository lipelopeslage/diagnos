window.$ = jQuery;
require('./../stylus/style.styl');
require('./ui/menu.js')();

if($('body').hasClass('solucoes-diagnos'))
	require('./modules/solucoes-diagnos.js')();

if($('body').hasClass('home'))
	require('./ui/home.js')();




$(window).resize(function(){
	$('.vatxt').map(function(idx, itm){
		var item = $(itm), parentH = item.parent().height(), itemH = item.height();
		item.css('top', ( (parentH-itemH)*.5 )+'px')
	});	
}).trigger('resize');
