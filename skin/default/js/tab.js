//最新供应
window.onload = function () {
    function startmarquee(lh, speed, delay) {
        var p = false;
        var t;
        var o = document.getElementById("marqueebox");
        if (o != null) {
            o.innerHTML += o.innerHTML;
            o.style.marginTop = 0;
            o.onmouseover = function () { p = true; }
            o.onmouseout = function () { p = false; }
            function start() {
                t = setInterval(scrolling, speed);
                if (!p) o.style.marginTop = parseInt(o.style.marginTop) - 1 + "px";
            }
            function scrolling() {
                if (parseInt(o.style.marginTop) % lh != 0) {
                    o.style.marginTop = parseInt(o.style.marginTop) - 1 + "px";
                    if (Math.abs(parseInt(o.style.marginTop)) >= o.scrollHeight / 2) o.style.marginTop = 0;
                } else {
                    clearInterval(t);
                    setTimeout(start, delay);
                }
            }
            setTimeout(start, delay);
        }
    }
    startmarquee(33, 15, 1000);
}


/*tab选项卡*/
$(function () {
    var $tab_nav = $(".tab_nav ul li");
    $tab_nav.mouseenter(function () {
        $(this).addClass("selected").siblings().removeClass("selected");
        var index = $tab_nav.index(this);
        $("div>.tab_box > ul").eq(index).show().siblings().hide();
    })
});


/*20160215搜索滑动*/
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







