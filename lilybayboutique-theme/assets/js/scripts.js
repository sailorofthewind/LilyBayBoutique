// PARALLAX EFFECT

$(function() {
	// Cache the window object
	var $window = $(window);

	// PARALLAX BACKGROUND EFFECT
	$('section[data-type="background"]').each(function() {

		var $bgobj = $(this); // assign the object

		$window.scroll(function() {

			// scroll the background at var speed
			// the yPos is a negative value because we are scrolling it UP!

			var yPos = -($window.scrollTop() / $bgobj.data('speed'));

			// put together our final background position
			var coords = 'center ' + yPos + 'px';

			// Move the background
			$bgobj.css({ backgroundPosition: coords })

		}); // end window scroll

	});
});



// Scroll To Top Button

            
jQuery(document).ready(function() {
  var offset = 50;
  var duration = 900;
  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > offset) {
      jQuery('.scroll-to-top').fadeIn(duration);
    } else {
      jQuery('.scroll-to-top').fadeOut(duration);
    }
  });
  
  jQuery('.scroll-to-top').click(function(event) {
    event.preventDefault();
    jQuery('html, body').animate({scrollTop: 0}, duration);
    return false;
  })
});



// ACCORDION

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  }
}


// Arrow Down scroll to #featured-products

$("#arr-down").click(function(e) {

    e.preventDefault();

    $('html, body').animate({
        scrollTop: $("#featured-products").offset().top - 160    // Scrolls to #featured-products - 120px (navbar height + 20px)
    }, 1000);
});
