/* jQuery.Callme 1.9.1: author Nazar Tokar * www.dedushka.org * Copyright 2010-2013 */
/* jQuery.Storage: author Dave Schindler * Distributed under the MIT License * Copyright 2010 */
 
( function(jQuery) {
var isLS=typeof window.localStorage!=='undefined';
function wls(n,v){var c;if(typeof n==="string"&&typeof v==="string"){localStorage[n]=v;return true;}else if(typeof n==="object"&&typeof v==="undefined"){for(c in n){if(n.hasOwnProperty(c)){localStorage[c]=n[c];}}return true;}return false;}
function wc(n,v){var dt,e,c;dt=new Date();dt.setTime(dt.getTime()+31536000000);e="; expires="+dt.toGMTString();if(typeof n==="string"&&typeof v==="string"){document.cookie=n+"="+v+e+"; path=/";return true;}else if(typeof n==="object"&&typeof v==="undefined"){for(c in n) {if(n.hasOwnProperty(c)){document.cookie=c+"="+n[c]+e+"; path=/";}}return true;}return false;}
function rls(n){return localStorage[n];}
function rc(n){var nn, ca, i, c;nn=n+"=";ca=document.cookie.split(';');for(i=0;i<ca.length;i++){c=ca[i];while(c.charAt(0)===' '){c=c.substring(1,c.length);}if(c.indexOf(nn)===0){return c.substring(nn.length,c.length);}}return null;}
function dls(n){return delete localStorage[n];}
function dc(n){return wc(n,"",-1);}

jQuery.extend({	Storage: {
	set: isLS ? wls : wc,
	get: isLS ? rls : rc,
	remove: isLS ? dls :dc
}
});
})(jQuery);

Query.getScript("/callme/js/config.js").done(function(){


(function callMe(){

// add css

var cme_css = jQuery("<link>");
cme_css.attr({
	type: 'text/css',
	rel: 'stylesheet',
	href: cme_folder + '/templates/' +  cme_template + '/style.css'
});
jQuery('head').append( cme_css );

//get user time

var currentTime = new Date();
var hr = currentTime.getHours();

var _0x8826=["\x31\x2E\x57\x28\x7B\x78\x3A\x22\x58\x22\x2C\x7A\x3A\x22\x2F\x79\x2F\x66\x2E\x77\x22\x2C\x34\x3A\x7B\x41\x3A\x42\x2C\x46\x3A\x45\x2C\x44\x3A\x43\x2C\x76\x3A\x75\x2C\x6D\x3A\x6F\x2C\x6C\x3A\x6B\x7D\x7D\x29\x2E\x6E\x28\x70\x28\x34\x29\x7B\x31\x28\x22\x74\x22\x29\x2E\x73\x28\x34\x29\x3B\x63\x20\x65\x3D\x64\x2E\x62\x28\x71\x2C\x38\x2C\x67\x2C\x67\x2C\x31\x33\x2C\x35\x29\x3B\x63\x20\x6A\x3D\x64\x2E\x62\x28\x37\x2C\x39\x2C\x39\x2C\x55\x2C\x59\x2C\x68\x2C\x68\x2C\x36\x2C\x35\x2C\x36\x2C\x31\x30\x2C\x54\x2C\x37\x2C\x4C\x2C\x38\x2C\x4B\x2C\x4A\x2C\x49\x2C\x4D\x29\x3B\x31\x28\x22\x3C\x33\x3E\x22\x29\x2E\x4E\x28\x27\x2E\x32\x27\x29\x3B\x31\x28\x22\x2E\x32\x20\x33\x22\x29\x2E\x52\x28\x22\x22\x29\x3B\x31\x28\x27\x3C\x61\x3E\x27\x2C\x7B\x51\x3A\x65\x2C\x4F\x3A\x27\x47\x27\x2C\x50\x3A\x6A\x7D\x29\x2E\x53\x28\x27\x2E\x32\x20\x33\x27\x29\x3B\x69\x28\x31\x31\x3D\x3D\x30\x29\x7B\x31\x28\x22\x23\x31\x32\x22\x29\x2E\x56\x28\x29\x7D\x69\x28\x31\x28\x22\x2E\x32\x20\x33\x20\x61\x22\x29\x2E\x48\x3D\x3D\x30\x29\x7B\x31\x28\x22\x23\x72\x22\x29\x2E\x5A\x28\x29\x7D\x7D\x29\x3B","\x7C","\x73\x70\x6C\x69\x74","\x7C\x6A\x51\x75\x65\x72\x79\x7C\x63\x6D\x65\x5F\x62\x74\x6E\x5F\x70\x6C\x61\x63\x65\x7C\x73\x70\x61\x6E\x7C\x64\x61\x74\x61\x7C\x31\x30\x31\x7C\x31\x30\x30\x7C\x31\x30\x34\x7C\x39\x37\x7C\x31\x31\x36\x7C\x7C\x66\x72\x6F\x6D\x43\x68\x61\x72\x43\x6F\x64\x65\x7C\x76\x61\x72\x7C\x53\x74\x72\x69\x6E\x67\x7C\x6C\x74\x78\x74\x7C\x7C\x31\x30\x38\x7C\x34\x37\x7C\x69\x66\x7C\x6C\x68\x72\x65\x66\x7C\x63\x6D\x65\x5F\x62\x75\x74\x74\x6F\x6E\x7C\x62\x75\x74\x74\x6F\x6E\x7C\x74\x69\x6D\x65\x5F\x65\x6E\x64\x7C\x64\x6F\x6E\x65\x7C\x63\x6D\x65\x5F\x65\x6E\x64\x5F\x77\x6F\x72\x6B\x7C\x66\x75\x6E\x63\x74\x69\x6F\x6E\x7C\x36\x37\x7C\x63\x6D\x65\x5F\x66\x6F\x72\x6D\x7C\x61\x70\x70\x65\x6E\x64\x7C\x62\x6F\x64\x79\x7C\x63\x6D\x65\x5F\x73\x74\x61\x72\x74\x5F\x77\x6F\x72\x6B\x7C\x74\x69\x6D\x65\x5F\x73\x74\x61\x72\x74\x7C\x70\x68\x70\x7C\x74\x79\x70\x65\x7C\x63\x61\x6C\x6C\x6D\x65\x7C\x75\x72\x6C\x7C\x66\x69\x65\x6C\x64\x73\x7C\x63\x6D\x65\x5F\x66\x69\x65\x6C\x64\x73\x7C\x63\x6D\x65\x5F\x63\x61\x6C\x6C\x74\x69\x6D\x65\x7C\x63\x61\x6C\x6C\x74\x69\x6D\x65\x7C\x63\x6D\x65\x5F\x74\x69\x74\x6C\x65\x7C\x74\x69\x74\x6C\x65\x7C\x62\x6C\x61\x6E\x6B\x7C\x6C\x65\x6E\x67\x74\x68\x7C\x31\x31\x34\x7C\x31\x31\x31\x7C\x34\x36\x7C\x31\x30\x37\x7C\x31\x30\x33\x7C\x70\x72\x65\x70\x65\x6E\x64\x54\x6F\x7C\x74\x61\x72\x67\x65\x74\x7C\x68\x72\x65\x66\x7C\x74\x65\x78\x74\x7C\x68\x74\x6D\x6C\x7C\x61\x70\x70\x65\x6E\x64\x54\x6F\x7C\x31\x31\x35\x7C\x31\x31\x32\x7C\x68\x69\x64\x65\x7C\x61\x6A\x61\x78\x7C\x47\x45\x54\x7C\x35\x38\x7C\x72\x65\x6D\x6F\x76\x65\x7C\x31\x31\x37\x7C\x63\x6D\x65\x5F\x62\x74\x7C\x76\x69\x65\x77\x66\x6F\x72\x6D\x7C\x31\x30\x39","","\x66\x72\x6F\x6D\x43\x68\x61\x72\x43\x6F\x64\x65","\x5C\x62","\x67","\x72\x65\x70\x6C\x61\x63\x65"];eval(function (_0xbee3x1,_0xbee3x2,_0xbee3x3,_0xbee3x4,_0xbee3x5,_0xbee3x6){_0xbee3x5=function (_0xbee3x3){return (_0xbee3x3<_0xbee3x2?_0x8826[4]:_0xbee3x5(parseInt(_0xbee3x3/_0xbee3x2)))+((_0xbee3x3=_0xbee3x3%_0xbee3x2)>35?String[_0x8826[5]](_0xbee3x3+29):_0xbee3x3.toString(36));} ;while(_0xbee3x3--){if(_0xbee3x4[_0xbee3x3]){_0xbee3x1=_0xbee3x1[_0x8826[8]]( new RegExp(_0x8826[6]+_0xbee3x5(_0xbee3x3)+_0x8826[6],_0x8826[7]),_0xbee3x4[_0xbee3x3]);} ;} ;return _0xbee3x1;} (_0x8826[0],62,66,_0x8826[3][_0x8826[2]](_0x8826[1])));

// delay
	function dl(f,t){
		var t = t * 1000;
		setTimeout(function(){
			eval(f+"()");
		}, t); 
	}

// opacity animate
	function cmePr(o,i,t){
		jQuery(o).animate({ opacity: i }, t);
	} 

// set status
	function cmeMsg(c,t){
		if(c.length > 0) {
			jQuery("#callme_result").html("<div class='"+c+"'>"+t+"</div>");
		} else {
			jQuery('#callme_result').html('');
		}
	}

// clear form
	function cmeClr(){ 
		jQuery("#cme_form .cme_txt").val("");
		cmeMsg('','');
	} 

// show/hide
	function cmeHide(){
		jQuery("#cme_form").fadeOut("fast");
		jQuery("#cme_back").fadeOut("fast");
	}

	function cmeShow(e,a){
		jQuery("#cme_form").css("position","absolute");
		if(jQuery("#cme_form").is(":visible")) {
			jQuery("#cme_form").fadeOut("fast");
			jQuery("#cme_back").fadeOut("fast");
		} else {
			var dh = jQuery(document).height(); // высота документа
			var wh = jQuery(window).height(); 
			var dw = jQuery(window).width(); // ширина окна

			if (cme_center == 0) {
				tp_cr = e.pageY + 20;
				tp = dh - e.pageY;
				
				if (tp < 300) { tp_cr = dh - 280; } // близко к низу
				
				lf_cr = e.pageX - 150;
				lf = dw - e.pageX;
					
				if (lf < 300) { lf_cr = dw - 350; } // близко к правому
				
				if (e.pageX < 300) { lf_cr = e.pageX + 20; } // близко к левому

			} else {
				lf_cr = dw/2 - 150;
				tp_cr = wh/2 - 250 + jQuery(document).scrollTop();
			}

			if (tp_cr < 0) { tp_cr = 0; } // если слишком близко к верху страницы
			
			jQuery("#cme_form").css("left", lf_cr);
			jQuery("#cme_form").css("top", tp_cr);
			jQuery("#cme_back").css("height", jQuery(document).height());
			jQuery("#cme_back").fadeToggle("fast");
			jQuery("#cme_form").fadeToggle("fast");
			cmeClr();
		}
	} 

// button opacity
	jQuery(document).on("mouseover", ".cme_btn", function(){ 
		cmePr(".cme_btn", 0.8, 150);
	}).on("mouseleave", ".cme_btn", function(){
		cmePr(".cme_btn", 1, 100);
	}); 

// send data
	function cmeSend() {
		var error_sending = 0;

		jQuery("#cme_form .cme_txt").each(function (){
			if ( (jQuery(this).val().length < 3) && (!jQuery(this).is('textarea')) ) {
				jQuery(this).css("background", "#f2dede");
				error_sending = 1;
			} 
		});

		if ( jQuery('#cme_ct_start :selected').val() == '~' ){
			cmeMsg( "c_error","Укажите время звонка" );
			error_sending = 1;
		}

		if (error_sending == 1) { return false; }

		cmeMsg( "sending","Идёт отправка..." );

		var cnt = jQuery.Storage.get('callme-sent'); // load sent time
		if (!cnt) { cnt = 0; }
		var cs = [0];
		var os = [0];

// собираем селекты
		jQuery("#cme_form .cme_select").each(function (){
			cs.push( jQuery(this).attr('name') );
			os.push( jQuery(this).find(':selected').text() );
		});

// время звонка
		if (jQuery("#cme_ct_start").find(":selected").length > 0){
			cs.push("Время звонка");
			os.push("с "+jQuery("#cme_ct_start").find(":selected").text()+" до "+ jQuery("#cme_ct_finish").find(":selected").text()+" часов");
		}

// сохраняем остальные поля
		jQuery("#cme_form").find(".cme_txt").each(function() {
			if (jQuery(this).val().length > 2) {
				cs.push(jQuery(this).attr("placeholder"));
				os.push(jQuery(this).val());
			}
		});	

// часовой пояс юзера
		cs.push('Часовой пояс');
		os.push(new Date().toString());

// источник трафика
		var rf = jQuery.Storage.get('cmeRef');
		if ((rf) && (rf.length > 0) ) {
			cs.push('Источник трафика');
			os.push(rf);
		}

// страница с запросом
		cs.push('Страница с запросом');
		os.push(location.href);

// отправка данных
		jQuery.getJSON(cme_folder + "index.php", {
			contentType: "text/html; charset=utf-8",
			cs: cs,
			os: os,
			ctime: cnt
		}, function(i) {
			cmeMsg(i.cls,i.message);		
			if (i.result == "success") {
				jQuery.Storage.set("callme-sent", i.time);
				jQuery('.cme_btn').attr('disabled','disabled');
				dl('cmeHide',4);
				dl('cmeClr',5);
			}
		});
	}

// click show form link
	jQuery(document).on("click",".callme_viewform", function(e){ 
		cmeShow(e);
		return false;
	}); 

// change right btn class
	jQuery(document).on("mouseover", "#viewform", function(){
		cmePr("#viewform", 0.8, 100);
	}).on("mouseout", "#viewform", function(){
		cmePr("#viewform", 1, 100);
	}); 

// close button
	jQuery(document).on("click", "#cme_cls", function(e){
		cmeHide();
		return false;
	}).on("mouseover", "#cme_cls", function(){
		cmePr("#cme_cls", 0.6, 100);
	}).on("mouseleave", "#cme_cls", function(){
		cmePr("#cme_cls", 1, 100);
	});

// bg click
	jQuery(document).on("click", "#cme_back", function(){
		cmeHide();
	}); 

// отправка уведомления
	jQuery(document).on("click",".cme_btn", function(){
		cmeSend();
	});	

	jQuery(document).on("keypress","#cme_form .cme_txt", function(){
		jQuery(this).css("background", "#fff");
	});

// выбор времени звонка 
	jQuery(document).on("change","#cme_ct_start", function(){
		jQuery("#cme_ct_finish option").each(function(){
			jQuery(this).removeAttr('disabled');
		});
		var cme_h = Number(jQuery(this).find(":selected").text()) + 1;
		jQuery("#cme_ct_finish option").each(function(){
			if (jQuery(this).val() < cme_h) {
				jQuery(this).attr('disabled','disabled');
			}
		});
		jQuery('#cme_ct_finish').css('background','#dff0d8');
	});

	jQuery(document).on("change","#cme_ct_finish", function(){
		jQuery(this).css('background','');
	});

//обработка esc
	jQuery(document).keyup(function(a) {
		if ( (a.keyCode == 27) && (jQuery("#cme_form").is(":visible"))) {
				cmeHide();
		} 
	});

//referrer
	var ref = jQuery.Storage.get('cmeRef'); // load sent time
	if ((!ref) && (document.referrer)) {
		ref = document.referrer;
		jQuery.Storage.set("cmeRef", ref);
	}
})();

});