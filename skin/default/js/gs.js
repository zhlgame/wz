/**
 * 生成二维码
 * @param obj
 * @param content
 */
function createEwm(obj, content, w, h){
	var param = { 
		    render: "table",
		    width: w,
		    height:h,
		    text:  content
	};
	
	if(window.applicationCache){
		param.render = 'canvas';
	}
	obj.qrcode(param); 
}

$(function(){
  $('.dropdown', '.topbar').hover(function(){
    $(this).addClass('hover');
  }, function(){
    $(this).removeClass('hover');
  });

  $(".join-c-nav").hover(function(){
    $('.join-c-nav ul').stop().slideDown(300);
  },function(){
    $('.join-c-nav ul').stop().slideUp(300);
  });
  
  $(".category").hover(function(){
	  if($(".slide", $(this)).length==0){
		  var ch=$(".category div.label").height();
		  var ht=0;
		  $(".category div.label ul.cat li").each(function(){
			  ht+=$(this).height();
		  });
		  if(ht>366){
			  $(this).append('<div class="slide"><a onclick="javascript:void(0);" class="toggle-btn"></a></div>');
			  if(ch > 366){
				  $(".slide", $(this)).css("position", "static");
				  $(".category .slide a").addClass("active");
			  }
			  $(".slide", $(this)).bind("click", hovercategory);
		  }
	  }
  }, function(){
	  if($(".slide", $(this)).length==1){
		  $(".slide", $(this)).remove();
		  $(".slide", $(this)).unbind("click");
	  }
  });
});

var hovercategory=function(){
	var ch=$(".category div.label").height();
	if(ch <= 366){
		$(".category div.label").height("auto");
		$(".category .slide").css("position", "static");
		$(".category .slide a").addClass("active");
	}else{
		$(".category div.label").height("366px");
		$(".category .slide").css("position", "absolute");
		$(".category .slide a").removeClass("active");
	}
}

