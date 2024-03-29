var deepThoughts = [
  "If I ever opened a trampoline store, I don't think I'd call it Trampo-Land, because you might think it was a store for tramps, which is not the impression we are trying to convey with our store. On the other hand, we would not prohibit tramps from browsing, or testing the trampolines, unless a tramp's gyrations seemed to be getting out of control.",
  "If you're ever stuck in some thick undergrowth in your underwear, don't stop and think of what other words have 'under' in them, because that's probably the first sign of jungle madness.",
  "It makes me mad when people say I turned and ran like a scared rabbit. Maybe it was like an angry rabbit, who was running to go fight in another fight, away from the first fight.",
  "The memories of my family outings are still a source of strength to me. I remember we'd all pile into the car - I forget what kind it was - and drive and drive. I'm not sure where we'd go, but I think there were some trees there. The smell of something was strong in the air as we played whatever sport we played. I remember a bigger, older guy we called 'Dad'. We'd eat some stuff, or not, and then I think we went home. I guess some things never leave you."
];

function debounce(func, wait, immediate) { // from https://davidwalsh.name/javascript-debounce-function
  var timeout;
  return function() {
    var context = this, args = arguments;
    var later = function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
};

function displayRandomDeepThought() {
  var rnd = Math.floor(Math.random() * deepThoughts.length);
  $('#site-tagline p').text(deepThoughts[rnd]);
}

var hideSlideoutMenu = debounce(function() {
  if ($('#menu-toggle').hasClass('open')) {
    $('#menu-toggle').removeClass('open');
    $('#slideout-menu').hide().removeClass('open'); // hide before animation starts
  }
}, 250);

$(function () { // on page load
  setTimeout(function() {
    $('.lazy').Lazy(); // lazy load images after 1/2 seconds
  }, 500);
  
  if (typeof onPageLoad == 'function') { // may be defined on individual pages
    onPageLoad();
  }

  setTimeout(function() {
    // animate the title of the first slide
    $('#slideshow .slide:first-child()').addClass('active-slide');
    
    // fix weird flash of content below slideshow
    $('.display-after-load').removeClass('hidden');
  }, 10);

  $(window).scroll(hideSlideoutMenu);
  $(window).resize(hideSlideoutMenu);
  $(window).one('touchstart', function() {
    console.log('touched');
    $('body').addClass('touch-device');
  });

  $('#menu-toggle').click(function () {
    $(this).toggleClass('open');
    $('#slideout-menu').show();
    setTimeout(function() {
      $('#slideout-menu').toggleClass('open');
    })
  });
});
