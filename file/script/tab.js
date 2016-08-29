/*搜索滑动*/
$(function(){
	$('.screen-hd').hide();
	$(window).scroll(function () {
		if ($(window).scrollTop() > 100) {
		   
			$('.screen-hd').fadeIn(400);//当滑动栏向下滑动时，按钮渐现的时间
		} else {
		
			$('.screen-hd').fadeOut(0);//当页面回到顶部第一屏时，按钮渐隐的时间
		}
	});
});