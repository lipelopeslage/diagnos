module.exports = function(){
	var menu = $('header menu'), menuHolder = menu.find('.menu-holder .links'), menuToggleBtn = menu.find('.menu_icon'), lines = menu.find('.menu_icon .line');

	menuToggleBtn.click(toggleMenu);

	function toggleMenu(){
		var h = 0;

		$('.row.links>div').map(function(idx, itm){
			h += $(itm).height();
		})
		console.log('>>',h)
		if(parseInt(menu.height()) < 10){
			//open
			TweenMax.to(lines[0], .3, {css:{rotationZ: -50, width:10, marginLeft: 1, marginTop: 6}, ease: Cubic.easeOut, delay: .2});
			TweenMax.to(lines[1], .3, {css:{rotationZ: 50, width:10, marginTop: 1, marginLeft: 7}, ease: Cubic.easeOut, delay: .2});
			TweenMax.to(lines[2], .2, {css:{rotationY: 90, marginLeft: 7}, ease: Cubic.easeOut});
			menu.height(h);
			menuHolder.height(h);
		}else{
			//close
			TweenMax.to(lines[0], .3, {css:{rotationZ: 0, width:20, marginLeft: 0, marginTop: 0}, ease: Cubic.easeOut});
			TweenMax.to(lines[1], .3, {css:{rotationZ: 0, width:20, marginTop: 0, marginLeft: 0}, ease: Cubic.easeOut});
			TweenMax.to(lines[2], .2, {css:{rotationY: 0, marginLeft: 0}, ease: Cubic.easeOut, delay: .2});
			menu.height(5);
			menuHolder.height(5);
		}
	}

}