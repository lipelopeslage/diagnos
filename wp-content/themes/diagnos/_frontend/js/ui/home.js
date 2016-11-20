module.exports = function(){

	var pos = [
		{left: '50%', top: '75%', marginLeft: -.5, marginTop: -.5, opacity: 1, selected: true},
		{left: '0%', top: '25%', marginLeft: 0, marginTop: 0, opacity: .25, selected: false}, 
		{left: '50%', top: '0%', marginLeft: -.5, marginTop: 0, opacity: .25, selected: false},
		{left: '100%', top: '25%', marginLeft: -1, marginTop: 0, opacity: .25, selected: false}
	], nums = [0,1,2,3],links = $('menu>ul>li'), imgsToLoad = links.find('img').length, imgsToLoadCount = 0, imgMaxH = 0, counter = 0;


	function arrangePositions(inc){
		resizeHandler();
		links.map(function(idx, itm){
			var item = $(itm), index = idx;

			index = nums[idx] + inc;

			index = (index < 0) ? 3 : index;
			index = (index > 3) ? 0 : index;

			nums[idx] = index;

			item.css({
				left: pos[index].left, 
				top: pos[index].top, 
				'margin-left':item.width()*pos[index].marginLeft,
				'margin-top':item.height()*pos[index].marginTop,
				'opacity': pos[index].opacity
			}).attr('data-idx', index);

			if(pos[index].selected == true){
				item.addClass('selected');
				toggle(item.index(), true);
			}
			else{
				item.removeClass('selected');
				toggle(item.index(), false);
			}
		});
	}

	function toggle(index, bool){
		if(bool)
			$("#descriptions p:eq("+index+"), #sublinks ul[data-idx="+index+"]").addClass('selected');
		else
			$("#descriptions p:eq("+index+"), #sublinks ul[data-idx="+index+"]").removeClass('selected');
	}

	function resizeHandler(){
		var textH = 0, desc = $("#descriptions"), links = $("menu>ul"), sublinks = $("#sublinks"), linksH = 0;
		links.find('img').map(function(idx, itm){
			var imgH = $(itm).height();
			imgMaxH = (imgH > imgMaxH) ? imgH : imgMaxH;
		});
		desc.find('p').map(function(idx, itm){
			var h = $(itm).height();
			textH = (textH < h) ? h : textH;
		});
		sublinks.find('ul').map(function(idx, itm){
			var h = $(itm).height();
			linksH = (linksH < h) ? h : linksH;
		});

		desc.height(textH);
		sublinks.height(linksH);

		$('menu').height(imgMaxH*2.5);
	}

	function configImgs(){
		var descriptions = '', submenus = '';
		links.map(function(idx, itm){
			var item = $(itm), img = item.find('img'), desc = item.find('span'), submenu = item.find('.sub');
			desc.children('bdi').remove();
			descriptions += '<p><span>'+desc.text()+'</span></p>';
			desc.remove();
			submenus += (submenu.length > 0) ? '<ul data-idx="'+idx+'">'+submenu.html()+'</ul>' : '';
			submenu.remove();
			img.attr('onload', 'imgMenuLoadedDiagnos(this)')
			.attr('src', img.data('src'));
		});
		
		$("#descriptions").html(descriptions);
		$("#sublinks").html(submenus);

		bind();
	}

	function bind(){
		$('.arrow-nav').click(function(){
			var isPrev = $(this).hasClass('prev');
			arrangePositions(isPrev ? -1 : 1);
		});
		$('menu>ul>li>a').click(function(){
			if(!$(this).parent().hasClass('selected')) return false;
		})
	}

	window.imgMenuLoadedDiagnos = function(img){
		imgsToLoadCount++;		
		if(imgsToLoadCount == imgsToLoad){
			window.imgMenuLoadedDiagnos = null;
			arrangePositions(0);
			setTimeout(function(){
				$('main').css('visibility','visible');				
			}, 200);
			setTimeout(function(){
				$('menu').addClass('motion');
			}, 300);
		}
	}

	$(window).resize(resizeHandler);
	configImgs();
}