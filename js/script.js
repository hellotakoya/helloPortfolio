$(function(){
    // 三本線押下時
    $('#bars').on('click', function(){
        $('#menu').slideToggle(300);
    });

    // TOPボタン
    $('#totop').on('click', function(){
        $('html,body').animate({scrollTop:0},500);
    });

    // スライダー
    $('#slider').slick({
        autoplay: true,
        autoplaySpeed: 50,
    });

});

$(function () {
    $('a[href^="#"]').click(function () {
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
  　　 var speed = 500;
      $("html, body").animate({
        scrollTop: position
      }, speed, "swing");
      return false;
    });
  });