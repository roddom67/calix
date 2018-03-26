/*CSS Browser Selector v0.4.0 (Nov 02, 2010)*/
function css_browser_selector(u){var ua=u.toLowerCase(),is=function(t){return ua.indexOf(t)>-1},g='gecko',w='webkit',s='safari',o='opera',m='mobile',h=document.documentElement,b=[(!(/opera|webtv/i.test(ua))&&/msie\s(\d)/.test(ua))?('ie ie'+RegExp.$1):is('firefox/2')?g+' ff2':is('firefox/3.5')?g+' ff3 ff3_5':is('firefox/3.6')?g+' ff3 ff3_6':is('firefox/3')?g+' ff3':is('firefox/4')?g+' ff4':is('firefox/5')?g+' ff5':is('firefox/6')?g+' ff6':is('firefox/7')?g+' ff7':is('firefox/8')?g+' ff8':is('firefox/9')?g+' ff9':is('firefox/10')?g+' ff10':is('firefox/11')?g+' ff11':is('firefox/12')?g+' ff12':is('firefox/13')?g+' ff13':is('firefox/14')?g+' ff14':is('gecko/')?g:is('opera')?o+(/version\/(\d+)/.test(ua)?' '+o+RegExp.$1:(/opera(\s|\/)(\d+)/.test(ua)?' '+o+RegExp.$2:'')):is('konqueror')?'konqueror':is('blackberry')?m+' blackberry':is('android')?m+' android':is('chrome')?w+' chrome':is('iron')?w+' iron':is('applewebkit/')?w+' '+s+(/version\/(\d+)/.test(ua)?' '+s+RegExp.$1:''):is('mozilla/')?g:'',is('j2me')?m+' j2me':is('iphone')?m+' iphone':is('ipod')?m+' ipod':is('ipad')?m+' ipad':is('mac')?'mac':is('darwin')?'mac':is('webtv')?'webtv':is('win')?'win'+(is('windows nt 6.0')?' vista':''):is('freebsd')?'freebsd':(is('x11')||is('linux'))?'linux':'','js']; c = b.join(' '); h.className += ' '+c; return c;}; css_browser_selector(navigator.userAgent);
/****************/

$(function(){

	/* Menu toggle */
	
	navToogle = {
		
		init: function(){
			var self = this;
			
			
			if($(window).width() > 768 ){
				var pad = parseInt($('.container-fluid').css('padding-right'));
				var ancho = -($(window).width() * .4 - pad);
			} else{
				var ancho = -($(window).width());
			}
			
			$('.navbar-toggler').on('click',function(e){
				e.preventDefault();

				var divColapse = $('#navbarSupportedContent');
				
				if(divColapse.parent().hasClass('colapseOn')){
					$(this).removeClass('toggled');
					divColapse
						.stop()
						.animate({
							right: ancho
						} , 800 , function(){
							$(this)
								.css('display','none')
								.parent()
								.removeClass('colapseOn');
							$('html').removeClass('overflow');
						});

				}else{

					$(this).addClass('toggled');
					$('html').addClass('overflow');
					divColapse
						.stop()
						.css('display','block')
						.animate({
							right:0
						} , 1000 , function(){
							$(this).parent().addClass('colapseOn');
							
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
					pager: false
				});
			}
		}
	}
	
	sliderGaleria.init();
	
	goDown = {
		init: function(){
			
			$('.headerImage').append('<a href="" title="" class="goDown">goDown</a>');
			this.onClickGoDown(); 
		},
		onClickGoDown: function(){
			$('.goDown').on('click',function(e){
				var sectionH = $('.headerImage').height();
				e.preventDefault();
				$('html, body').animate({scrollTop:sectionH},800);
			});
		}
	}
	
	goDown.init();
	
	acordion = {
		init: function(){
			if($('section').find('.accordion')){
				$('.accordion').accordion({
					active: false,
					collapsible: true
				});
			}
		}
	}
	acordion.init();
	
	articleHeight = {
		init: function(){
			var self = this;
			if( $('html').hasClass('mobile')){
				if($('section').hasClass('textImageArea')){
					this.alturas($('.textImageArea'));
				}
				if($('section').hasClass('textMapArea')){
					this.alturas($('.textMapArea'));
				}
			}
		},
		alturas: function(e){
			var e = e;
			var alt = 0;
			e.find('article').each(function(e){
				if( alt < $(this).outerHeight()){
					alt = $(this).outerHeight();
				}
			});
			e.find('article').each(function(e){
				$(this).css('height', alt);
			});
			
		}
	}
	articleHeight.init();
	
	formulario = {
		init: function(){
			var frmvalidator  = new Validator("contactoForm");
			frmvalidator.EnableOnPageErrorDisplay();
			frmvalidator.EnableMsgsTogether();
			
			frmvalidator.addValidation("name","req","Ingrese su nombre, gracias");
			frmvalidator.addValidation("name","minlen=4","El nombre tiene que tener más de 4 letras, gracias"); 
			frmvalidator.addValidation("surname","req","Ingrese su apellido, gracias");
			frmvalidator.addValidation("surname","minlen=4","El nombre tiene que tener más de 4 letras, gracias"); 
			frmvalidator.addValidation("email","req","Ingrese un email, gracias"); 
			frmvalidator.addValidation("email","email","Ingrese un email válido, gracias");
			frmvalidator.addValidation("phone","req","Ingrese su teléfono de contacto, gracias");
			frmvalidator.addValidation("phone","numeric","El telefono tiene que tener números, gracias");
			frmvalidator.addValidation("depto","dontselect=''","Seleccione un departamento, gracias");
			frmvalidator.addValidation("price","dontselect=''","Seleccione un rango de precios, gracias");
			frmvalidator.addValidation("message","minlen=10","Ingrese un mensaje mayor a 10 letras, gracias"); 
				
		}
	}
	if($('body').hasClass('contacto')){
		formulario.init();
	}
	
	showVideos = {
		init:function(){
			$('.showVideo').on('click',function(e){
				e.preventDefault();
				var openContent = $(this).attr('href');
				$(openContent).dialog();
			})
			
		}
	}
	
	showVideos.init();
	

})

