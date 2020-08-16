(function($) {
  "use strict"; // Start of use strict

  // Floating label headings for the contact form
  $("body").on("input propertychange", ".floating-label-form-group", function(e) {
    $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
  }).on("focus", ".floating-label-form-group", function() {
    $(this).addClass("floating-label-form-group-with-focus");
  }).on("blur", ".floating-label-form-group", function() {
    $(this).removeClass("floating-label-form-group-with-focus");
  });

  // Show the navbar when the page is scrolled up
  var MQL = 992;

  //primary navigation slide-in effect
  if ($(window).width() > MQL) {
    var headerHeight = $('#mainNav').height();
    $(window).on('scroll', {
        previousTop: 0
      },
      function() {
        var currentTop = $(window).scrollTop();
        //check if user is scrolling up
        if (currentTop < this.previousTop) {
          //if scrolling up...
          if (currentTop > 0 && $('#mainNav').hasClass('is-fixed')) {
            $('#mainNav').addClass('is-visible');
          } else {
            $('#mainNav').removeClass('is-visible is-fixed');
          }
        } else if (currentTop > this.previousTop) {
          //if scrolling down...
          $('#mainNav').removeClass('is-visible');
          if (currentTop > headerHeight && !$('#mainNav').hasClass('is-fixed')) $('#mainNav').addClass('is-fixed');
        }
        this.previousTop = currentTop;
      });
  }

  $('.tagline').hover( 
    function() { $('.nameFull').removeClass('hidden'); },
    function() { $('.nameFull').addClass('hidden'); }
  );

  $('.tagline').hover( 
    function() { $('.bracket').addClass('hidden'); },
    function() { $('.bracket').removeClass('hidden'); }
  );

  function refactorBrand(w) {
    if (w.matches) {
      $('.navbar-brand').html('<span>Mind Empathy netWorking \\([ E = mc^2 ]\\)</span> <span class="tagline">Empathy = mind creativity²</span>');
    } else {
      $('.navbar-brand').html("<span>Mind Empathy netWorking</span><span class='tagline'><span><span class='bracket'>\\([\\)</span><span class='initial'>E</span><span class='hidden nameFull mpathy'>mpathy</span> <span>=</span> <span class='initial'>m</span><span class='hidden nameFull ind'>ind</span> <span class='initial'>c</span><span class='hidden nameFull reativity'>reativity</span><span>²</span><span class='bracket'>\\(]\\)</span></span></span>");
      $('.tagline').hover( 
        function() { $('.nameFull').removeClass('hidden'); },
        function() { $('.nameFull').addClass('hidden'); }
      );
      $('.tagline').hover( 
        function() { $('.bracket').addClass('hidden'); },
        function() { $('.bracket').removeClass('hidden'); }
      );
    }
    MathJax.typeset();
  };

  var w = window.matchMedia("(max-width: 991px)");
  refactorBrand(w);
  w.addListener(refactorBrand);

  var on = 0;
  $('.start').click(function() {
    if (on) {
      $('.header.masthead').css({'left':'100vw'});
    } else {
      $('.header.masthead').css({'left':'0'});
    }
    on = !on;
  })

})(jQuery); // End of use strict
