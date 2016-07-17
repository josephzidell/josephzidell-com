var winHeight;
$(document).ready( function() {
	$('a').filter(function() {
		return this.hostname && this.hostname !== location.hostname;
	}).attr('target','_blank');
	$('#navigation').singlePageNav({
		offset: 50,
		currentClass: 'active',
		updateHash: true,
		filter: ':not(.other_page)'
	});
	winHeight = $(window).height()
	manageNavbar();
	resizeTop();
	$(window).resize(function() {
		winHeight = $(window).height()
		resizeTop();
	});

	$.localScroll({
		target: 'body', // could be a selector or a jQuery object too.
		queue:true,
		duration:1000,
		hash:true,
		onBefore:function( e, anchor, $target ){
			// The 'this' is the settings object, can be modified
			if ( $(anchor).attr("class") == "carousel slide" ) {
				return false;
			}
		},
		onAfter:function( anchor, settings ){
			// The 'this' contains the scrolled element (#content)
		}
	});

	// $("#contactForm").validate();
});

function resizeTop() {
	$(".top").css({height: winHeight})
	$(".scroll-down").css({left: ($(".scroll-down").parent().width() - 120)/2+15}) // add parent padding
}

function manageNavbar() {
	speed = 400;
	easing = 'easeOutElastic';
	// $("nav.navbar").hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() < winHeight - 300) {
			// $("nav.navbar").hide();
			$("#scroll-to-top").hide();
		} else {
			// $("nav.navbar").show();
			$("#scroll-to-top").show();
		}
	});

	// this hides the mobile dropdown, when a link is clicked within it
	var navMain = $("#bs-example-navbar-collapse-1");
	navMain.on("click", "a", null, function () {
		if ($(".navbar-toggle").is(":visible")) { // only run when toggle is visible, otherwise displays moving scroll bar (!)
			navMain.collapse('hide');
		}
	});
}
