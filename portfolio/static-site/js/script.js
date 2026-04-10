$(function () {

  //ページ内スクロール
  var navHeight = $(".header").outerHeight();

  $('a[href^="#"]').on("click", function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top - navHeight;
    $("html, body").animate({ scrollTop: position, }, 300, "swing");
    return false;
  });

  //ページトップ
  $("#js-page-top").on("click", function () {
    $("body,html").animate({ scrollTop: 0, }, 300);
    return false;
  });

  // ハンバーガーメニュー開閉
  $("#menu-btn").on("click", function () {
    $("#nav-sp").fadeIn();
  });
  // 閉じる（IDが「close」であることに注意！）
  $("#close, #nav-sp a").on("click", function () {
    $("#nav-sp").fadeOut();
  });

  onclick="document.getElementById('nav-sp').style.display = 'none'"


});
