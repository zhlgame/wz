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
    startmarquee(25, 15, 1000);
}

