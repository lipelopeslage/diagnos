!function(e){function i(n){if(t[n])return t[n].exports;var a=t[n]={exports:{},id:n,loaded:!1};return e[n].call(a.exports,a,a.exports,i),a.loaded=!0,a.exports}var t={};return i.m=e,i.c=t,i.p="",i(0)}([function(e,i,t){window.$=jQuery,t(1),t(2)(),$("body").hasClass("solucoes-diagnos")&&t(3)(),$("body").hasClass("home")&&t(4)(),$(window).resize(function(){$(".vatxt").map(function(e,i){var t=$(i),n=t.parent().height(),a=t.height();t.css("top",.5*(n-a)+"px")})}).trigger("resize")},function(e,i){},function(e,i){e.exports=function(){function e(){var e=0;$(".row.links>div").map(function(i,t){e+=$(t).height()}),console.log(">>",e),parseInt(i.height())<10?(TweenMax.to(a[0],.3,{css:{rotationZ:-50,width:10,marginLeft:1,marginTop:6},ease:Cubic.easeOut,delay:.2}),TweenMax.to(a[1],.3,{css:{rotationZ:50,width:10,marginTop:1,marginLeft:7},ease:Cubic.easeOut,delay:.2}),TweenMax.to(a[2],.2,{css:{rotationY:90,marginLeft:7},ease:Cubic.easeOut}),i.height(e),t.height(e)):(TweenMax.to(a[0],.3,{css:{rotationZ:0,width:20,marginLeft:0,marginTop:0},ease:Cubic.easeOut}),TweenMax.to(a[1],.3,{css:{rotationZ:0,width:20,marginTop:0,marginLeft:0},ease:Cubic.easeOut}),TweenMax.to(a[2],.2,{css:{rotationY:0,marginLeft:0},ease:Cubic.easeOut,delay:.2}),i.height(5),t.height(5))}var i=$("header menu"),t=i.find(".menu-holder .links"),n=i.find(".menu_icon"),a=i.find(".menu_icon .line");n.click(e)}},function(e,i){e.exports=function(){function e(){var e=$(this);return n&&n.parent().removeClass("selected"),n=e,e.parent().addClass("selected"),t(e.parent().index()),!1}function i(){var e=r.find("img"),i=0,t=o.find("p");e.map(function(e,t){var n=$(t).height();i=n>i?n:i,console.log(">>",$(t).height())}),r.height(i),i=0,t.map(function(e,t){var n=$(t).height();i=n>i?n:i}),o.height(i)}function t(e){$("#images li.selected, #descriptions li.selected").removeClass("selected"),$("#images li:eq("+e+"), #descriptions li:eq("+e+")").addClass("selected"),setTimeout(function(){r.height($("#images li:eq("+e+") img").height())},600)}var n,a,s=$("#links"),o=$("#descriptions"),r=$("#images"),d=0;s.find("li").map(function(i,t){var n=$(t),a=n.find("h2").text(),s=n.find("p").html(),d=n.find("img").attr("src");n.html('<a href="#">'+a+"</a>"),o.append("<li><p>"+s+"</p></li>"),r.append('<li><img onload="loadImgAssetDiagnos(this)" src="'+d+'"></li>'),n.find("a").bind("click",e)}),a=r.find("img").length,$(window).resize(i),window.loadImgAssetDiagnos=function(e){d++,d==a&&(window.loadImgAssetDiagnos=null,s.find("li:eq(0) a").trigger("click"),setTimeout(i,600),$("main").css("visibility","visible"))}}},function(e,i){e.exports=function(){function e(e){t(),r.map(function(t,n){var a=$(n),r=t;r=o[t]+e,r=0>r?3:r,r=r>3?0:r,o[t]=r,a.css({left:s[r].left,top:s[r].top,"margin-left":a.width()*s[r].marginLeft,"margin-top":a.height()*s[r].marginTop,opacity:s[r].opacity}).attr("data-idx",r),1==s[r].selected?(a.addClass("selected"),i(a.index(),!0)):(a.removeClass("selected"),i(a.index(),!1))})}function i(e,i){i?$("#descriptions p:eq("+e+"), #sublinks ul[data-idx="+e+"]").addClass("selected"):$("#descriptions p:eq("+e+"), #sublinks ul[data-idx="+e+"]").removeClass("selected")}function t(){var e=0,i=$("#descriptions"),t=$("menu>ul"),n=$("#sublinks"),a=0;t.find("img").map(function(e,i){var t=$(i).height();c=t>c?t:c}),i.find("p").map(function(i,t){var n=$(t).height();e=n>e?n:e}),n.find("ul").map(function(e,i){var t=$(i).height();a=t>a?t:a}),i.height(e),n.height(a),$("menu").height(2.5*c)}function n(){var e="",i="";r.map(function(t,n){var a=$(n),s=a.find("img"),o=a.find("span"),r=a.find(".sub");o.children("bdi").remove(),e+="<p><span>"+o.text()+"</span></p>",o.remove(),i+=r.length>0?'<ul data-idx="'+t+'">'+r.html()+"</ul>":"",r.remove(),s.attr("onload","imgMenuLoadedDiagnos(this)").attr("src",s.data("src"))}),$("#descriptions").html(e),$("#sublinks").html(i),a()}function a(){$(".arrow-nav").click(function(){var i=$(this).hasClass("prev");e(i?-1:1)}),$("menu>ul>li>a").click(function(){return $(this).parent().hasClass("selected")?void 0:!1})}var s=[{left:"50%",top:"75%",marginLeft:-.5,marginTop:-.5,opacity:1,selected:!0},{left:"0%",top:"25%",marginLeft:0,marginTop:0,opacity:.25,selected:!1},{left:"50%",top:"0%",marginLeft:-.5,marginTop:0,opacity:.25,selected:!1},{left:"100%",top:"25%",marginLeft:-1,marginTop:0,opacity:.25,selected:!1}],o=[0,1,2,3],r=$("menu>ul>li"),d=r.find("img").length,l=0,c=0;window.imgMenuLoadedDiagnos=function(i){l++,l==d&&(window.imgMenuLoadedDiagnos=null,e(0),setTimeout(function(){$("main").css("visibility","visible")},200),setTimeout(function(){$("menu").addClass("motion")},300))},$(window).resize(t),n()}}]);