// Slide User Account
function slideAccount($account, distance) {
  $account.parent().css({'overflow': 'hidden'})
  $account.css({'transform': distance});
  $account.on('mouseenter', function () {
    $account.css({'transition': "transform 0.5s",'transform': 'translate(0)'});
  });
  $account.on('mouseleave', function () {
    $account.css({'transition': "transform 0.5s",'transform': distance});
  })
}
$(document).ready(function() {
  // Back to top
  $(window).scroll(function() {
    if ($('body').scrollTop() > 50 || $(document.documentElement).scrollTop() > 50) {
      $('.footer__to-top').css('display', 'block');
    } else {
      $('.footer__to-top').css('display', 'none');
    }
    $('.footer__to-top').click(function() {
      $('body, html').stop(true, false).animate({scrollTop: 0}, 400);
    });
  })

  // Fixed bottom
  window.onresize = function () {
    if ($(document).height() <= $(window).height()){
      $('footer').css({
        'position': 'fixed',
        'bottom': 0
      });
    } else {
      $('footer').css('position', '');
    }
  }
})