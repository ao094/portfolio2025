$(function () {
	// glonav
	var nav = $('.globalNav');
	nav.clone().appendTo('.sp-nav-list');
	nav.clone().appendTo('.footer_navi');
 
	// slideDown
	$('#header_nav li').hover(function () {
	 $("ul:not(:animated)", this).slideDown();
	}, function () {
	 $("ul.dropdown", this).slideUp();
	});

// rollover
$(function () {
$("img.rollover").mouseover(function () {
 $(this).attr("src", $(this).attr("src").replace(/^(.+)(\.[a-z]+)$/, "$1_on$2"));
}).mouseout(function () {
 $(this).attr("src", $(this).attr("src").replace(/^(.+)_on(\.[a-z]+)$/, "$1$2"));
});
});

// page-top
var topBtn = $('#page-top');
topBtn.hide();
$(window).scroll(function () {
 if ($(this).scrollTop() > 50) {
	topBtn.fadeIn();
 } else {
	topBtn.fadeOut();
 }
});

//  scroll  headerの高さ
$(function () {
 var headerHeight = $('#header_nav').innerHeight();
 var urlHash = location.hash;
 if (urlHash) {
     $('body,html').stop().scrollTop(0);
     setTimeout(function () {
         var target = $(urlHash);
         var position = target.offset().top - headerHeight;
         $('body,html').stop().animate({
             scrollTop: position
         }, 500);
     }, 100);
 }
 $('a[href^="#"]').not('.modaal-ignore').click(function () { // .modaal-ignore を除外
     var href = $(this).attr("href");
     var target = $(href);
     var position = target.offset().top - headerHeight;
     $('body,html').stop().animate({
         scrollTop: position
     }, 500);
 });
});


// active
$('#header_nav a').each(function () {
var $href = $(this).attr('href');
// top
if (location.pathname.match(".php")) {
 $('#header_nav a:eq(0)').removeClass('active');
} else {
 $('#header_nav a:eq(0)').addClass('active');
}
// other
if (location.href.match($href)) {
 $(this).addClass('active');
 $('#header_nav a:eq(0)').removeClass('active');
} else {
 $(this).removeClass('active');
}
});

	// tab
 $('.tab li').click(function () {
	var index = $('.tab li').index(this);
	$('.panel').css('display', 'none');
	$('.panel').eq(index).fadeIn();
	$('.tab li').removeClass('active');
	$(this).addClass('active')
 });
 // direct link
 var hash = location.hash;
 hash = (hash.match(/^#tab\d+$/) || [])[0];
 if ($(hash).length) {
	var tabname = hash.slice(1);
 } else {
	var tabname = "tab1";
 }
 $('.panel').css('display', 'none');
 $('.tab li').removeClass('active');
 var tabno = $('.tab li#' + tabname).index();
 $('.panel').eq(tabno).fadeIn();
 $('.tab li').eq(tabno).addClass('active')

// btn-tab
$('.btn-tab li').click(function () {
	var index = $('.btn-tab li').index(this);
	$('.panel2').css('display', 'none');
	$('.panel2').eq(index).fadeIn();
	$('.btn-tab li').removeClass('active');
	$(this).addClass('active')
 });
 // direct link
 var hash = location.hash;
 hash = (hash.match(/^#btntab\d+$/) || [])[0];
 if ($(hash).length) {
	var tabname = hash.slice(1);
 } else {
	var tabname = "btntab1";
 }
 $('.panel2').css('display', 'none');
 $('.btn-tab li').removeClass('active');
 var tabno = $('.btn-tab li#' + tabname).index();
 $('.panel2').eq(tabno).fadeIn();
 $('.btn-tab li').eq(tabno).addClass('active')

// animation
$(function () {
if ($(window).innerWidth() >= 890) {
 Position = $(window).height() + $(window).scrollTop();
 $(".animation").each(function (i) {
	if (Position > $(this).offset().top) {
	 $(this).delay(60 * i).queue(function () {
		$(this).addClass("on");
	 });
	}
 });
 $(function () {
	var
	 $nav = $('#l-header'),
	 navPosition = $nav.offset().top;

	$(window).on('scroll', function () {
	 if ($(this).scrollTop() > navPosition) {
		$nav.addClass('is-fixed');
	 } else {
		$nav.removeClass('is-fixed');
	 }
	});
 });
};
});

$(function () {
Position = $(window).height() + $(window).scrollTop();
$(".animation").each(function (i) {
 if (Position > $(this).offset().top) {
	$(this).delay(60 * i).queue(function () {
	 $(this).addClass("on");
	});
 }
});
$(function () {
 var
	$nav = $('#nav-toggle'),
	navPosition = $nav.offset().top;

 $(window).on('scroll', function () {
	if ($(this).scrollTop() > navPosition) {
	 $nav.addClass('is-fixed');
	} else {
	 $nav.removeClass('is-fixed');
	}
 });
});
});

$(window).scroll(function () {
// animation
scrollPosition = $(window).height() + $(window).scrollTop();
$(".animation").each(function () {
 if (scrollPosition - 100 > $(this).offset().top) {
	$(this).addClass("on");
 }
});
});

$(window).scroll(function () {
// animation
scrollPosition = $(window).height() + $(window).scrollTop();
$(".animation-round").each(function () {
 if (scrollPosition - 400 > $(this).offset().top) {
	$(this).addClass("start");
 }
});
});

// SP
$('#nav-toggle ').on('click', function () {
$('body').toggleClass('open');
});
$('#sp-nav a').on('click', function () {
$('body').removeClass('open');
});

$(window).on('load', function () {
$('#js-loader').fadeOut(1200);
});

$(function() {
// accordion
$(".blinds").on("click", function() {
		$(this).next().slideToggle();
		$(this).toggleClass("on");
});
});

 $(window).scroll(function() {
	var windowH = $(window).height(),
		scrollY = $(window).scrollTop();
	$('.bgLRextendTrigger').each(function() {
		var elPosition = $(this).offset().top;
		if (scrollY > elPosition - windowH) {
			$(this).addClass("bgLRextend");
		} else {
			$(this).removeClass("bgLRextend");
		}
	});

	$('.blurTrigger').each(function(){
		var elemPos = $(this).offset().top-50;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
		$(this).addClass('blur');
		}else{
		$(this).removeClass('blur');
		}
		});	

		$('.lineTrigger').each(function(){
		var elemPos = $(this).offset().top-50;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
			$(this).addClass('lineanime');
		}else{
			$(this).removeClass('lineanime');
		}
	});

	$('.timeline2 li').each(function(){
		var elemPos = $(this).offset().top;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		var startPoint = 500;
		if (scroll >= elemPos - windowHeight-startPoint){				
			var H = $(this).outerHeight(true)

			var percent = (scroll+startPoint - elemPos) / (H/2) *100;

			if(percent  > 100){
				percent  = 100;
			}
			$(this).children('.b-line').css({
				height: percent + "%",
			});
		} 
	});

});
});

$(window).scroll(function (){
	$(".js-marker, .js-span-text").each(function(){
		var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
		var scroll = $(window).scrollTop(); //スクロールの位置を取得
		var windowHeight = $(window).height(); //ウインドウの高さを取得
		if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
			$(this).addClass('on'); //クラス「on」を与える
		}
	});
});

setTimeout(function() {
	$(".js-eng").addClass('on');
}, 1000);

$(".qa-list dd").hide();
$(".qa-list dl").on("click", function(e) {
$('dd', this).slideToggle('fast');
if ($(this).hasClass('open')) {
	$(this).removeClass('open');
} else {
	$(this).addClass('open');
}
});

$(window).scroll(function() {
var windowH = $(window).height(),
	scrollY = $(window).scrollTop();
$('.bgLRextendTrigger').each(function() {
	var elPosition = $(this).offset().top;
	if (scrollY > elPosition - windowH) {
		$(this).addClass("bgLRextend");
	} else {
		$(this).removeClass("bgLRextend");
	}
});
});

$(window).scroll(function() {
var windowH = $(window).height(),
	scrollY = $(window).scrollTop();
$('.bgappearTrigger').each(function() {
	var elPosition = $(this).offset().top;
	if (scrollY > elPosition - windowH) {
		$(this).addClass("bgappear");
	} else {
		$(this).removeClass("bgappear");
	}
});
});

$(window).scroll(function() {
var windowH = $(window).height(),
	scrollY = $(window).scrollTop();
$('.bgLRextendTrigger').each(function() {
	var elPosition = $(this).offset().top;
	if (scrollY > elPosition - windowH) {
		$(this).addClass("bgLRextend");
	} else {
		$(this).removeClass("bgLRextend");
	}
});
});

$(window).scroll(function() {
var windowH = $(window).height(),
	scrollY = $(window).scrollTop();
$('.flipLeftTrigger').each(function() {
	var elPosition = $(this).offset().top;
	if (scrollY > elPosition - windowH) {
		$(this).addClass("flipLeft");
	} else {
		$(this).removeClass("flipLeft");
	}
});
});

$(window).scroll(function() {
var windowH = $(window).height(),
	scrollY = $(window).scrollTop();
$('.updown-txt').each(function() {
	var elPosition = $(this).offset().top;
	if (scrollY > elPosition - windowH) {
		$(this).addClass("updown-go");
	} else {
		$(this).removeClass("updown-go");
	}
});
});

$(window).scroll(function() {
var windowH = $(window).height(),
	scrollY = $(window).scrollTop();
$('.flower-anime').each(function() {
	var elPosition = $(this).offset().top;
	if (scrollY > elPosition - windowH) {
		$(this).addClass("flower-on");
	} else {
		$(this).removeClass("flower-on");
	}
});
});

$(window).scroll(function() {
var windowH = $(window).height(),
	scrollY = $(window).scrollTop();
$('.bg-anime').each(function() {
	var elPosition = $(this).offset().top;
	if (scrollY > elPosition - windowH) {
		$(this).addClass("bg-on");
	} else {
		$(this).removeClass("bg-on");
	}
});
});

$(window).scroll(function() {
var windowH = $(window).height(),
	scrollY = $(window).scrollTop();
$('.bg-anime-left').each(function() {
	var elPosition = $(this).offset().top;
	if (scrollY > elPosition - windowH) {
		$(this).addClass("bg-on-left");
	} else {
		$(this).removeClass("bg-on-left");
	}
});
});

$(window).scroll(function() {
var windowH = $(window).height(),
	scrollY = $(window).scrollTop();
$('.txt-anime').each(function() {
	var elPosition = $(this).offset().top;
	if (scrollY > elPosition - windowH) {
		$(this).addClass("txt-on");
	} else {
		$(this).removeClass("txt-on");
	}
});
});

$(window).on('load', function() {
//テキストごとにspanタグを生成する
var element = $(".typing");
var thisChild = ""
element.each(function() {
	var text = $(this).html();
	var textbox = "";
	text.split('').forEach(function(target) {
		if (target !== " ") {
			textbox += '<span>' + target + '</span>';
		} else {
			textbox += target;
		}
	});
	$(this).html(textbox);
});

});