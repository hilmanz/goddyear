/*
$(window).scroll(function(){
	console.log($(window).scrollTop());
	if($(window).scrollTop()<=250){
		$('.header').removeClass('fixheader');
	}else{
		$('.header').addClass('fixheader');
	}
});*/


//RESPONSIVE NAV
  var navigation = responsiveNav(".nav-collapse", {
	animate: true,                    // Boolean: Use CSS3 transitions, true or false
	transition: 284,                  // Integer: Speed of the transition, in milliseconds
	label: "Menu",                    // String: Label for the navigation toggle
	insert: "after",                  // String: Insert the toggle before or after the navigation
	customToggle: "",                 // Selector: Specify the ID of a custom toggle
	closeOnNavClick: false,           // Boolean: Close the navigation when one of the links are clicked
	openPos: "relative",              // String: Position of the opened nav, relative or static
	navClass: "nav-collapse",         // String: Default CSS class. If changed, you need to edit the CSS too!
	navActiveClass: "js-nav-active",  // String: Class that is added to <html> element when nav is active
	jsClass: "js",                    // String: 'JS enabled' class which is added to <html> element
	init: function(){},               // Function: Init callback
	open: function(){},               // Function: Open callback
	close: function(){}               // Function: Close callback
  });
$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide"
	  });
	$( function() {
	  $('.postlist').isotope({
		itemSelector: '.item',
		masonry: {
		  columnWidth: 10
		}
	  });
	});
});

$(document).ready(function() {
	$(window).stellar();
	$('.showPopup').magnificPopup({
	  type: 'inline',

	  fixedContentPos: false,
	  fixedBgPos: true,

	  overflowY: 'auto',

	  closeBtnInside: true,
	  preloader: false,
	  
	  midClick: true,
	  removalDelay: 300,
	  mainClass: 'my-mfp-zoom-in'
	});
	  var owl = $(".owl-carousel");
	  owl.owlCarousel({
		 
		  itemsCustom : [
			[0, 1],
			[450, 2],
			[600, 4],
			[700, 4],
			[1000, 5],
			[1200, 5],
			[1400, 5],
			[1600, 5]
		  ],
		  navigation : true,
		  navigationText : false
	 
	  });
	//wow
	  wow = new WOW(
		{
		  boxClass:     'wow',      // default
		  animateClass: 'animated', // default
		  offset:       0,          // default
		  mobile:       true,       // default
		  live:         true        // default
		}
	  )
	  wow.init();
});
