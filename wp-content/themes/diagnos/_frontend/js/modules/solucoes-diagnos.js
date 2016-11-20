module.exports = function(){

	var links = $("#links"), desc = $("#descriptions"), images = $("#images"), selected, imgsToLoad, imgsToLoadCount = 0;

	links.find('li').map(function(idx, itm){
		var item = $(itm), title = item.find('h2').text(), text = item.find('p').html(), img = item.find('img').attr('src');
		item.html('<a href="#">'+title+'</a>');
		desc.append('<li><p>'+text+'</p></li>');
		images.append('<li><img onload="loadImgAssetDiagnos(this)" src="'+img+'"></li>');
		item.find('a').bind('click', clickHandler);
	});

	imgsToLoad = images.find('img').length;

	$(window).resize(resizeHandler);

	function clickHandler(){
		var target = $(this);
		if(selected) selected.parent().removeClass('selected');
		selected = target;
		target.parent().addClass('selected');
		showContent(target.parent().index());
		return false;
	}

	function resizeHandler(){
		var imgs = images.find('img'), h = 0, texts = desc.find('p');
		imgs.map(function(idx, itm){
			var itemH = $(itm).height();
			h = (h < itemH) ? itemH : h;
			console.log('>>', $(itm).height())
		})

		images.height(h);
		
		h = 0;
		texts.map(function(idx, itm){
			var itemH = $(itm).height();
			//console.log(itemH)
			h = (h < itemH) ? itemH : h;	
		});
		desc.height(h);


	}

	function showContent(index){
		$('#images li.selected, #descriptions li.selected').removeClass('selected');
		$('#images li:eq('+index+'), #descriptions li:eq('+index+')').addClass('selected');
		setTimeout(function(){
			images.height($('#images li:eq('+index+') img').height());
		}, 600);
	}

	window.loadImgAssetDiagnos = function(img){
		imgsToLoadCount++;
		if(imgsToLoadCount == imgsToLoad){
			window.loadImgAssetDiagnos = null;
			links.find('li:eq(0) a').trigger('click');
			setTimeout(resizeHandler, 600);
			$('main').css('visibility', 'visible');
		}
	}

	//imgsToLoad

	//$('#descriptions').append(texts);
}