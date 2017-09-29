// JavaScript Document

// ページトップへ戻る
$(function() {
    var showFlag = false;
    var topBtn = $('.gotop');    
    topBtn.css('bottom', '-100px');
    var showFlag = false;
    //スクロールが100に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            if (showFlag == false) {
                showFlag = true;
                topBtn.stop().animate({'bottom' : '20px'}, 200); 
            }
        } else {
            if (showFlag) {
                showFlag = false;
                topBtn.stop().animate({'bottom' : '-100px'}, 200); 
            }
        }
    });
    //スクロールしてトップ
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});


// ページ内リンク

//header
$(function() {
var marginTop = $(".mod_header").height();
  $(window).on("scroll", function() {
    if ($(this).scrollTop() > 0) {
      $(".mod_header").addClass("fixed");
      $("body").css("margin-top",marginTop+"px");
    } else {
      $(".mod_header").removeClass("fixed");
      $("body").css("margin-top","0px");
    }
  });
});
 
 
//#pagelink
$(function(){
    function pagelink(heightnum){
    var headerHight = heightnum; 
    $("a.anchorlink").click(function(){
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? "body" : href);
        var position = target.offset().top-headerHight; 
        $("html, body").animate({scrollTop:position}, 500, "swing");
        //return false;
    });
    /* outpagelink */     
    var url = $(location).attr("href");
    if (url.indexOf("?id=") == -1) {
     
    }else{
        var url_sp = url.split("?id=");
        var hash     = "#" + url_sp[url_sp.length - 1];
        var target2        = $(hash);
        var position2        = target2.offset().top-headerHight;
        $("html, body").animate({scrollTop:position2}, 500, "swing");
    }
    }
    //条件が変わるようならココへ。    
    //          if($("body").hasClass("spn")){
    //              pagelink(50);
    //          }else{
    //              pagelink(72);
    //          }
    pagelink(200);//ヘッダーの高さを入れる
});

//#toolchip
$(document).ready( function(){
  $('.toolchip').smallipop({
  theme: 'black',
  popupDistance: 0,
  popupYOffset: -14,
  popupAnimationSpeed: 100
});
});

// 開閉式
$(function(){
        $(".accordion dt").on("click", function() {
            $(this).next().slideToggle();
            $(this).toggleClass("active");//追加部分
        });
    });
	
// 特定タブへの遷移
$(document).ready(function() {
    var hashTabName = document.location.hash;
    if (hashTabName) {
        // #(ハッシュ)指定されたタブを表示する
        $('.nav-tabs a[href=' + hashTabName + ']').tab('show');
    }
});

	
