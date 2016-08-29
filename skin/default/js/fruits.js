//首页焦点图效果
$(function(){
	var obj = $('.menu-c-banner');
	var objPic = obj.find('.bd-sell');
	var objBtn = obj.find('.hd');
	var picNumber = objPic.find('li').length;
	var btnHtml = '';
	for(var i = 1; i<=picNumber; i++){//初始化banner图片和按钮隐藏
		i == 1?btnHtml += '<li class="on"></li>':btnHtml += '<li></li>';
		//objPic.find('li').eq(i-1).css('z-index',picNumber+1-i);
		objPic.find('li').hide();
		objBtn.find('li').hide();
	}
	objBtn.find('ul').html(btnHtml);
	var cur = 1; //初始化第一次显示的图片
	var pre = 1; //定义上次显示的图片
	var next; 
	var speed = 500; //运行速度
	var times = 3000; //自动切换间隔时间
	var timer;
	var isPlay = 0; //是否在运行中
	init(cur);
	function init(c){
		if(isPlay == 0){
			isPlay = 1;
			clearTimeout(timer);
			objBtn.find('li').show();
			objBtn.find('li').removeClass('on');
			objBtn.find('li').eq(c-1).addClass('on');
			objPic.find('li').eq(pre-1).fadeOut(speed);
			objPic.find('li').eq(c-1).fadeIn(speed,function(){
				pre = c;
				isPlay = 0;
				next = c + 1;
				if(next > picNumber){next = 1;}
				timer = setTimeout(_init(next),times); 
				function _init(c){return function(){init(c);}}  
			});	
		}
	}
	objBtn.find('li').on('click',function(){
		var indexs = objBtn.find('li').index(this);
		init(indexs+1);
	})
	
})

/*首页右侧焦点图*/
jQuery(".slideBox").slide({mainCell:".bd-sell ul",autoPlay:true});




/*当季热销tabs切换效果*/
/*$(function(){
	$(".hot-top li").click(function(){
		$(".hot-top li").removeClass("cur");
		$(this).addClass("cur");
		var indexs = $('.hot-top li').index(this);
		$('.hotbox').hide();
		$('.hotbox').eq(indexs).show();
	});
})*/

/*特色推荐tabs切换效果*/
$(function(){
	$(".feature-top li").click(function(){
		$(".feature-top li").removeClass("cur");
		$(this).addClass("cur");
		var indexs = $('.feature-top li').index(this);
		$('.featurebox').hide();
		$('.featurebox').eq(indexs).show();
	});
})



