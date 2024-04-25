$(function(){

	//슬라이드 메뉴//
$(".toggle").click(function() {
		$("#sidebar,.page_cover,html").addClass("open");
		window.location.hash = "#open";
});
window.onhashchange = function() {
	if (location.hash != "#open") {
		$("#sidebar,.page_cover,html").removeClass("open");
	}
};

/*
 $("label").on('click', function(){
     if ($(this).attr("for") != "") {
         $(this).siblings('input').removeClass('checked')
            .end().addClass('checked');
         $("#" + $(this).attr("for")).trigger('click');
      }
   });
*/

	$(".tab_content").hide();
    $(".tab_content:first").show();
    $("ul.tabs li").click(function () {
        $("ul.tabs li").removeClass("active")//.css("color", "#333");
        //$(this).addClass("active").css({"color": "darkred","font-weight": "bold"});
        $(this).addClass("active")//.css("color", "darkred");
        $(".tab_content").hide()
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).fadeIn()
    });


$("[class^='menu'] li").mouseover(function(){
        $(".navi_wrap").css("display", "block");
    });
$("[class^='menu'] li").mouseout(function(){
        $(".navi_wrap").css("display", "none");
});


$(".tablet").click(function(){
		if($(".sub_menu").hasClass("on")){
			$(".sub_menu").removeClass("on");
		
		}else{
			$(".sub_menu").addClass("on");
			
		}
	});

	
	$(".more_box").hide();
	$(".more_list").click(function(){
		 var activeTab = $(this).attr("rel");
		 $("#" + activeTab).slideToggle()
	});



});