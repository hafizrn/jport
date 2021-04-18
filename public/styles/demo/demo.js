   

$(document).ready(function() {
        // Select all links with hashes
    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 500, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });


    /*-------------------------------------
      Isotope
    -------------------------------------*/

    // // Isotope Filter
    // $('.isotope-item').isotope({
    //     itemSelector: '.item',
    //     layoutMode:'fitRows'
    //     // masonry: {
    //     //     columnWidth: 0
    //     // }
    // });

    var $grid = $('.isotope-item').isotope({
        // options...
        itemSelector: '.item',
        layoutMode:'fitRows'

    });

    $grid.imagesLoaded().progress(function () {
        $grid.isotope('layout');
    });


    $('.nav-item').click(function(){
       $('.nav-item').removeClass('active');
       $(this).addClass('active');
       var selector=$(this).attr('data-filter');
       $('.isotope-item').isotope({
         filter:selector
       });
       return false;
    });




})

