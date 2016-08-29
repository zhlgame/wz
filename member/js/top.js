//顶部搜索下拉菜单js
function showAndHide(obj,types){
var Layer=window.document.getElementById(obj);
switch(types){
case "show":
Layer.style.display="block";
break;
case "hide":
Layer.style.display="none";
}
}
function getValue(obj, str, strtype) {
    window.document.getElementById("sT").value = strtype;
var input=window.document.getElementById(obj);
window.document.getElementById("txtKeyWord").value = "请输入"+str+"关键字";
input.value=str;
}

function kwonfocus(vobj)
{
    if(vobj.value=='请输入资产关键字' || vobj.value=='请输入供应关键字' || vobj.value=='请输入求购关键字' || vobj.value=='请输入拍卖关键字' || vobj.value=='请输入报价关键字' || vobj.value=='请输入资讯关键字' || vobj.value=='请输入市场关键字' )
    {
        vobj.value='';
    }
}
function kwonblur(vobj)
{
    if(vobj.value=='')
    {
        var strtype=document.getElementById("mtype").value;
        vobj.value="请输入"+strtype+"关键字";
    }
}
//查看已保存搜索条件
function player(id){
var id=document.getElementById(id)
id.style.display="block";
}
function clocer(id){
var id=document.getElementById(id)
id.style.display="none";
}


//底部提交留言弹窗
$(document).ready(function(){
	$('#close-btn').click(function(){
		$('#tc_1').fadeOut();
		return false;
	});
	
//	$('#tj_1').click(function(){
//		var h = $(document).height();
//		$('#tc_1').center();
//		$('#tc_1').fadeIn();
//		return false;
//	});
	
});

jQuery.fn.center = function(loaded) {
	var obj = this;
	body_width = parseInt($(window).width());
	body_height = parseInt($(window).height());
	block_width = parseInt(obj.width());
	block_height = parseInt(obj.height());
	
	left_position = parseInt((body_width/2) - (block_width/2)  + $(window).scrollLeft());
	if (body_width<block_width) { left_position = 0 + $(window).scrollLeft(); };
	
	top_position = parseInt((body_height/2) - (block_height/2) + $(window).scrollTop());
	if (body_height<block_height) { top_position = 0 + $(window).scrollTop(); };
	
	if(!loaded) {
		
		obj.css({'position': 'absolute'});
		obj.css({ 'top': top_position, 'left': left_position });
		$(window).bind('resize', function() { 
			obj.center(!loaded);
		});
		$(window).bind('scroll', function() { 
			obj.center(!loaded);
		});
		
	} else {
		obj.stop();
		obj.css({'position': 'absolute'});
		obj.animate({ 'top': top_position }, 200, 'linear');
	}
}



//详情页点击查看联系方式js


function ShowPop() {

    document.getElementById('divPop').style.display = 'block';
    document.getElementById('searn').style.display = 'block';
//    var h = $(document).height();
//    $('#screen').css({ 'height': h });	
//    $('#screen').show();
//    $('#popbox').center();
//    $('#popbox').fadeIn();
//    return false;
}
function ClosePop() {
    document.getElementById('divPop').style.display = 'none';
    document.getElementById('searn').style.display = 'none';
//	$('#popbox').fadeOut(function(){ $('#screen').hide(); });
//		return false;
}



	function setTab(name,cursel,n){
	for(i=1;i<=n;i++){
	var menu=document.getElementById(name+i);
	var con=document.getElementById("con_"+name+"_"+i);
	menu.className=i==cursel?"hover":"";
	con.style.display=i==cursel?"block":"none";
	}
	}
	