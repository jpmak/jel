        //lazzy load
          $(function() {
      $("img.lazy").show().lazyload({
          effect: "fadeIn",
          threshold :100
          });
  });
  
//回到顶部.
        $(function() {
            var e = $("#rocket-to-top"),
            t = $(document).scrollTop(),
            n,
            r,
            i = !0;
            $(window).scroll(function() {
                var t = $(document).scrollTop();
                t == 0 ? e.css("background-position") == "0px 0px" ? e.fadeOut("slow") : i && (i = !1, $(".level-2").css("opacity", 1), e.delay(100).animate({
                    marginTop: "-1000px"
                },
                "normal",
                function() {
                    e.css({
                        "margin-top": "-25px",
                        display: "none"
                    }),
                    i = !0
                })) : e.fadeIn("slow")
            }),
            e.hover(function() {
                $(".level-2").stop(!0).animate({
                    opacity: 1
                })
            },
            function() {
                $(".level-2").stop(!0).animate({
                    opacity: 0
                })
            }),
            $(".level-3").click(function() {
                function t() {
                    var t = e.css("background-position");
                    if (e.css("display") == "none" || i == 0) {
                        clearInterval(n),
                        e.css("background-position", "0px 0px");
                        e.css("height", "200px;");
                        return
                    }
                    switch (t){
                    case "0px 0px":
                        e.css("background-position", "-176px 0px");
                        break;
                    case "-176px 0px":
                        e.css("background-position", "-264px 0px");
                        break;
                    case "-264px 0px":
                        e.css("background-position", "-352px 0px");
                        break;
                    case "-352px 0px":
                        e.css("background-position", "-440px 0px");
                        break;
                    case "-440px 0px":
                        e.css("background-position", "-176px 0px");
                    }
                }
                if (!i) return;
                n = setInterval(t, 50),
                $("html,body").animate({scrollTop: 0},"slow");
            });
			
			  $(window).scroll(function(){
         // 获得div的高度

         if($(window).scrollTop()> 200){
            // 滚动到指定位置
            $("#rocket-lit").fadeIn();
        } else {
            $("#rocket-lit").fadeOut();
        }
    });
	
			$('#rocket-lit').click(function(){
    $("html,body").animate({scrollTop:$("body").offset().top},500);
});
        });
		
		

  //main
    $(window).scroll(function(){
         // 获得div的高度

         if($(window).scrollTop()> 0){
            // 滚动到指定位置
            $(".is-loaded").addClass("is-scroll");
        } else {
              $(".is-loaded").removeClass("is-scroll");
        }
    });

	//navbar-toggle  		 
	 $('.navbar-nav li').click(function(){
	 $('.navbar-collapse').removeClass("in");
	 $('.navbar-toggle').addClass("collapsed").attr("aria-expanded","false");
		 });
	  $('.navbar-nav li:eq(0)').click(function(){
   $("html,body").animate({scrollTop:$("#home").offset().top},500);
});
	  $('.navbar-nav li:eq(1)').click(function(){
   $("html,body").animate({scrollTop:$("#about").offset().top},500);
});
  $('.navbar-nav li:eq(2)').click(function(){
   $("html,body").animate({scrollTop:$("#brief_1").offset().top},500);
});
 $('.navbar-nav li:eq(3)').click(function(){
   $("html,body").animate({scrollTop:$("#pricing").offset().top},500);
});
 $('.navbar-nav li:eq(4)').click(function(){
   $("html,body").animate({scrollTop:$("#contact").offset().top},500);
});
$(function(){
	var home_top = $("#home").offset().top-100;
	var about_top = $("#about").offset().top-100;
	var bri_top = $("#brief_1").offset().top-100;
	var pri_top = $("#pricing").offset().top-100;
	var con_top = $("#contact").offset().top-250;
	//alert(tops);
	$(window).scroll(function(){
		var scroH = $(this).scrollTop();
		if(scroH>=con_top){
			set_cur(".con");
		}else if(scroH>=pri_top){
			set_cur(".pri");
		}else if(scroH>=bri_top){
			set_cur(".bri");
		}else if(scroH>=about_top){
			set_cur(".about");
		}else if(scroH>=home_top){
			set_cur(".home");
		}
	});

});
function set_cur(n){
	if($(".nav li").hasClass("active")){
		$(".nav li").removeClass("active");
	}
	$(".nav li"+n).addClass("active");
};
//scrollReveal
   (function($) {

        'use strict';

        window.scrollReveal = new scrollReveal({ reset: true, move: '50px' });
      })();
