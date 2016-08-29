//slider
(function($){
    function mainSlider() {
        $('#J-main-slider').anythingSlider({
            toggleArrows:       true,
            autoPlay:           true,
            hashTags:           false,
            buildStartStop:     false
        });
    }
    function initView(){
        mainSlider();
    }

    initView();
}(jQuery));
//category
$(document).ready(function(){
    $(".toggle-btn").click(function(){//
        $(".cate-panel").slideToggle("slow");
        $(this).toggleClass("active"); return false;//
    });
});