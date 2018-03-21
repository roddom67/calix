/*CSS Browser Selector v0.4.0 (Nov 02, 2010)*/
function css_browser_selector(u){var ua=u.toLowerCase(),is=function(t){return ua.indexOf(t)>-1},g='gecko',w='webkit',s='safari',o='opera',m='mobile',h=document.documentElement,b=[(!(/opera|webtv/i.test(ua))&&/msie\s(\d)/.test(ua))?('ie ie'+RegExp.$1):is('firefox/2')?g+' ff2':is('firefox/3.5')?g+' ff3 ff3_5':is('firefox/3.6')?g+' ff3 ff3_6':is('firefox/3')?g+' ff3':is('firefox/4')?g+' ff4':is('firefox/5')?g+' ff5':is('firefox/6')?g+' ff6':is('firefox/7')?g+' ff7':is('firefox/8')?g+' ff8':is('firefox/9')?g+' ff9':is('firefox/10')?g+' ff10':is('firefox/11')?g+' ff11':is('firefox/12')?g+' ff12':is('firefox/13')?g+' ff13':is('firefox/14')?g+' ff14':is('gecko/')?g:is('opera')?o+(/version\/(\d+)/.test(ua)?' '+o+RegExp.$1:(/opera(\s|\/)(\d+)/.test(ua)?' '+o+RegExp.$2:'')):is('konqueror')?'konqueror':is('blackberry')?m+' blackberry':is('android')?m+' android':is('chrome')?w+' chrome':is('iron')?w+' iron':is('applewebkit/')?w+' '+s+(/version\/(\d+)/.test(ua)?' '+s+RegExp.$1:''):is('mozilla/')?g:'',is('j2me')?m+' j2me':is('iphone')?m+' iphone':is('ipod')?m+' ipod':is('ipad')?m+' ipad':is('mac')?'mac':is('darwin')?'mac':is('webtv')?'webtv':is('win')?'win'+(is('windows nt 6.0')?' vista':''):is('freebsd')?'freebsd':(is('x11')||is('linux'))?'linux':'','js']; c = b.join(' '); h.className += ' '+c; return c;}; css_browser_selector(navigator.userAgent);
/****************/

$(function(){

	/* Menu toggle */
	
	navToogle = {
		
		init: function(){
			var self = this;
			
			var ancho = -($(window).width());
			
			$('.navbar-toggler').on('click',function(e){
				e.preventDefault();

				var divColapse = $('#navbarSupportedContent');
				
				if(divColapse.parent().hasClass('colapseOn')){
					$(this).removeClass('toggled');
					divColapse
						.stop()
						.animate({
							left: ancho
						} , 800 , function(){
							$(this)
								.css('display','none')
								.parent()
								.removeClass('colapseOn')
						});

				}else{

					$(this).addClass('toggled');
					divColapse
						.stop()
						.css('display','block')
						.animate({
							left:0
						} , 1000 , function(){
							$(this).parent().addClass('colapseOn')
						});
				}
				
			})
		}
	}
	
	navToogle.init();
	
	
	sliderGaleria = {
		init: function(){
			if($('article').hasClass('slider')){
				$('.sliderArea').bxSlider({
					autoControls: true,
				});
			}
		}
	}
	
	sliderGaleria.init();
	
	

})

