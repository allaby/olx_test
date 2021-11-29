(function($){})(jQuery);(function($){$.fn.appear=function(fn,options){var settings=$.extend({data:undefined,one:true,accX:0,accY:0},options);return this.each(function(){var t=$(this);t.appeared=false;if(!fn){t.trigger('appear',settings.data);return};var w=$(window),check=function(){if(!t.is(':visible')){t.appeared=false;return};var a=w.scrollLeft(),b=w.scrollTop(),o=t.offset(),x=o.left,y=o.top,ax=settings.accX,ay=settings.accY,th=t.height(),wh=w.height(),tw=t.width(),ww=w.width();if(y+th+ay>=b&&y<=b+wh+ay&&x+tw+ax>=a&&x<=a+ww+ax){if(!t.appeared)t.trigger('appear',settings.data)}else t.appeared=false},modifiedFn=function(){t.appeared=true;if(settings.one){w.unbind('scroll',check);var i=$.inArray(check,$.fn.appear.checks);if(i>=0)$.fn.appear.checks.splice(i,1)};fn.apply(this,arguments)};if(settings.one){t.one('appear',settings.data,modifiedFn)}else t.bind('appear',settings.data,modifiedFn);w.scroll(check);$.fn.appear.checks.push(check);check()})};$.extend($.fn.appear,{checks:[],timeout:null,checkAll:function(){var length=$.fn.appear.checks.length;if(length>0)while(length--)$.fn.appear.checks[length]()},run:function(){if($.fn.appear.timeout)clearTimeout($.fn.appear.timeout);$.fn.appear.timeout=setTimeout($.fn.appear.checkAll,20)}});$.each(['append','prepend','after','before','attr','removeAttr','addClass','removeClass','toggleClass','remove','css','show','hide'],function(i,n){var old=$.fn[n];if(old)$.fn[n]=function(){var r=old.apply(this,arguments);$.fn.appear.run();return r}})})(jQuery);(function($){$(document).ready(function(){var tabTriggers=$('[data-tab-target]');tabTriggers.bind('click',function(event){var trigger=$(this),targetTabId=trigger.data('tab-target');$('[data-tab-id').removeClass('active');$('[data-tab-target]').removeClass('active');$('[data-tab-button]').addClass('d-none');$('[data-tab-target="'+targetTabId+'"]').addClass('active');$('[data-tab-id="'+targetTabId+'"]').addClass('active');$('[data-tab-button="'+targetTabId+'"]').removeClass('d-none');event.preventDefault()});if(!mobileCheck.all)$('body').addClass('cssAnimate');$('.cssAnimate .animated').appear(function(){console.log('appearing');var $this=$(this);$this.each(function(){if($this.data('time')!==undefined){setTimeout(function(){$this.addClass('activate');$this.addClass($this.data('fx'))},$this.data('time'))}else{$this.addClass('activate');$this.addClass($this.data('fx'))}})},{accX:50,accY:0})})})(jQuery);var mobileCheck={ios:(function(){return navigator.userAgent.match(/iPhone|iPad|iPod/i)})(),android:(function(){return navigator.userAgent.match(/Android/i)})(),blackBerry:(function(){return navigator.userAgent.match(/BB10|Tablet|Mobile/i)})(),windows:(function(){return navigator.userAgent.match(/IEMobile/i)})(),smartphone:(function(){return window.innerWidth<=384&&window.innerHeight<=640})(),tablet:(function(){return(navigator.userAgent.match(/Tablet|iPad|iPod/i)&&window.innerWidth<=1280&&window.innerHeight<=800)})(),all:(function(){return navigator.userAgent.match(/Android|BlackBerry|Tablet|Mobile|iPhone|iPad|iPod|Opera Mini|IEMobile/i)})()};