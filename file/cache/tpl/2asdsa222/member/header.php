<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if($DT_TOUCH) { ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="<?php echo DT_CHARSET;?>"/>
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width"/>
<title><?php echo $head_title;?></title>
<?php } else { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo DT_CHARSET;?>"/>
<meta name="robots" content="nofollow"/>
<meta name="generator" content="小云网络 xinhuagou.taobao.com"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title><?php if($head_title) { ?><?php echo $head_title;?><?php echo $DT['seo_delimiter'];?><?php } ?>
商务中心<?php echo $DT['seo_delimiter'];?><?php if($city_sitename) { ?><?php echo $city_sitename;?><?php } else { ?><?php echo $DT['sitename'];?><?php } ?>
<?php echo $DT['seo_delimiter'];?></title>
<?php } ?>
<link rel="shortcut icon" href="<?php echo DT_STATIC;?>favicon.ico"/>
<link rel="bookmark" href="<?php echo DT_STATIC;?>favicon.ico"/>
<link rel="stylesheet" type="text/css" href="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/style.css"/>
<link href="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/css/htindex.css" rel="stylesheet" type="text/css">
<link href="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/css/a.css" rel="stylesheet" type="text/css">
<link href="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/css/user.css" rel="stylesheet" type="text/css">
<?php if($DT_TOUCH) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo $EXT['mobile_url'];?>static/member.css"/>
<script type="text/javascript">var Dbrowser = '<?php echo $DT_MOB['browser'];?>';</script>
<?php } else { ?>
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>ie6.css"/>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/ie6png.js"></script>
<script type="text/javascript">DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--[if IE]>
<style type="text/css">
.head_user em {margin:-4px 0 0 -4px;}
#mini_profile {margin:20px 0 0 -140px;}
</style>
<![endif]-->
<?php } ?>
<?php if(!DT_DEBUG) { ?><script type="text/javascript">window.onerror= function(){return true;}</script><?php } ?>
<script type="text/javascript" src="<?php echo DT_STATIC;?>lang/<?php echo DT_LANG;?>/lang.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/config.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/jquery.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/common.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/admin.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/member.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/page.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/js/top.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/js/htindex.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/js/www_common.js"></script>
<script type=text/javascript><!--//--><![CDATA[//><!--
function menuFix() {
var sfEls = document.getElementById("menu").getElementsByTagName("li");
for (var i=0; i<sfEls.length; i++) {
sfEls[i].onmouseover=function() {
this.className+=(this.className.length>0? " ": "") + "sfhover";
}
sfEls[i].onMouseDown=function() {
this.className+=(this.className.length>0? " ": "") + "sfhover";
}
sfEls[i].onMouseUp=function() {
this.className+=(this.className.length>0? " ": "") + "sfhover";
}
sfEls[i].onmouseout=function() {
this.className=this.className.replace(new RegExp("( ?|^)sfhover\\b"), 
"");
}
}
}
window.onload=menuFix;
//--><!]]></script>
<script type="text/javascript"> 
$(document).ready(function(){
//$("#firstpane .wkw-work_nav-list-nav-menu:eq(0)").show();
$("#firstpane ul.wkw-work_nav-list-nav-main").click(function(){
$(this).addClass("current").next("ul.wkw-work_nav-list-nav-menu").slideToggle(300).siblings("ul.wkw-work_nav-list-nav-menu").slideUp("slow");
$(this).siblings().removeClass("current");
});
});
</script>
<script type="text/javascript"> 
$(document).ready(function() {
var resume = $('.resume > .jian1 > div');//获取menu下的父层的DIV
var showbox_more = $('.showbox_more');
$('.resume > .jian1 > .dianji').each(function(i) {//获取列表的大标题并遍历
$(this).click(function(){
if($(showbox_more[i]).css('display') == 'none'){
$(showbox_more[i]).slideDown(0);
}
else{
$(showbox_more[i]).slideUp(0);
}
});
});
});
</script>
<script language="JavaScript" type="text/JavaScript"> 
function selectAll(chk)
{
var chk = document.form1.chkAll.checked;
for (i=0;i<document.all.length;i++) {
if (document.all[i].name=="id[]") {
document.all[i].checked=chk;
chkRow(document.all[i]);
}}}
function chkRow(obj){
var r = obj.parentElement.parentElement;
}
//带缓存的关闭按钮JS
function closeDiv(){ 
            document.getElementById('myDiv').style.display = "none"; 
            document.cookie = "isClose"; 
        } 
        window.onload = function(){ 
            var arrStr = document.cookie; 
            if(arrStr.indexOf("isClose") > -1){ 
                closeDiv(); 
            } 
        } 
//不带缓存的关闭按钮JS
function closeclick2(){
document.getElementById('myDiv02').style.display='none';
cookiesave('closeclick2','closeclick2','','','');
}
function clickclose2(){
if(cookieget('closeclick2')=='closeclick2'){
document.getElementById('myDiv02').style.display='none';
}else{
document.getElementById('myDiv02').style.display='block';
}
}
</script>
<!--
        <script language="JavaScript" type="text/javascript"> 
//带缓存的关闭按钮JS
            function closeDiv(id){ 
            document.getElementById(id).style.display="none"; 
            document.cookie = "isClose"; 
        } 
        window.onload = function(){ 
            var arrStr = document.cookie; 
            if(arrStr.indexOf("isClose") > -1){ 
                closeDiv(id); 
            } 
        } 
        </script> -->
<?php if($DT_TOUCH) { ?><script type="text/javascript" src="<?php echo $EXT['mobile_url'];?>static/js/fix.js"></script><?php } ?>
</head>
<body>
<div id="msgbox" style="display:none;"></div>
<?php echo dmsg();?>
<?php if($DT_TOUCH) { ?>
<div id="head-bar">
<div class="head-bar">
<div class="head-bar-right"><a href="<?php echo $EXT['mobile_url'];?>my.php?action=back"><span>我的</span></a></div>
<div class="head-bar-back"><a href="javascript:window.history.back();"><img src="<?php echo $EXT['mobile_url'];?>static/img/icon-back.png"/><span>返回</span></a></div>
<div class="head-bar-title"><?php if($head_title) { ?><?php echo $head_title;?><?php } else { ?>会员中心<?php } ?>
</div>
</div>
<div class="head-bar-fix"></div>
</div>
<?php } else { ?>
<!--顶部导航-->
<div class="topfloat">
<div class="topbar">
<div class="daohan_01">
  <div class="daohan_a"> 
  <span class="mobile01"><a href="<?php echo $EXT['mobile_url'];?>mobile.php" style="cursor: pointer;" target="_blank">手机版</a></span>
  <div class="denlf w640" id="indexloginout" <?php if($_userid) { ?>style="display: none;"<?php } else { ?><?php } ?>
><span class="come">您好，欢迎来到会员中心</span>
  <span class="come" id="IndexLogin"><a href="<?php echo $DT['file_login'];?>" target="_blank">请登录</a> </span><span class="come" id="IndexReg"> <a href="<?php echo $DT['file_register'];?>" target="_blank">免费注册</a></span> <span></span></div>
  <div class="denlf w640" id="indexlogined" <?php if($_userid) { ?><?php } else { ?>style="display: none;"<?php } ?>
> <span class="wz">您好，<a href=""><font id="loginAccount" color="#ff3300"><?php echo $_truename;?></font></a>！欢迎来到<?php echo $DT['sitename'];?>会员商务中心</span>  <a href="logout.php?forward=">[退出]</a><?php if($admin_user) { ?>    <span class="f_red f_b"><a href="index.php?action=logout" style="color:red;">注销授权</a></span><?php } ?>
</div></div>
 <div style="float:right;height: 32px;"> 
 <div id="DivCityFrame">
    <div style="width:50px;"> <span style="color: #666;"><a href="<?php echo DT_PATH;?>" target="_blank">平台首页</a></span></div>
  </div>
   <?php if(isset($MODULE['31'])) { ?> <div id="DivCityFrame"> <div style="width:80px;"> <span class="f_red f_b"><a href="<?php echo $MODULE['31']['linkurl'];?>" target="_blank" style="color:red;">2016拜年主页</a></span></div>  </div><?php } ?>
 <div id="DivCityFrame">
    <div onMouseOver="ShowDivCity();" onMouseOut="HiddenDivCity();" style="float:left; width:65px;"> <span style="color: #666;">我的贸易</span><s id="xl1" style="display: block;"></s><s id="xl2" style="display: none;"></s></div>
    <div id="DivCity" onMouseOver="ShowDivCity();" onMouseOut="HiddenDivCity();" style="display: none;">
      <ul>
       <li><a rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?>trade.php?action=order" target="_blank" title="发出的订单">发出的订单</a></li>
        <li><a rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=6&action=add" target="_blank" title="发布询价单">发布询价单</a></li>
       <li><a rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=6" target="_blank" title="管理询价单">管理询价单</a></li>
       <li><a rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?>trade.php" target="_blank" title="已卖出货品">已卖出货品</a></li>
       <li><a rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=5&action=add" target="_blank" title="发布供应产品">发布供应产品</a></li>
       <li><a rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=5" target="_blank" title="管理供应产品">管理供应产品</a></li>
        <li><a rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?>home.php" target="_blank" title="管理旺铺">管理旺铺</a></li>
         <li><a rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?>favorite.php"  target="_blank"title="商机收藏">商机收藏</a></li>
          <li><a href="<?php echo $MODULE['2']['linkurl'];?>message.php" target="_blank" rel="nofollow">站内信件</a></li>
      </ul>
    </div>
  </div>
  <div id="DivCityFrame">
    <div style="float:left; width:65px;"><a href="<?php echo DT_PATH;?>myt/" target="_blank"> <span style="color: #666;"><?php echo VIP;?>服务</span></a></div>
  </div>
    <div id="DivCityFrame">
    <div style="float:left; width:50px;"><a href="<?php echo $MODULE['27']['linkurl'];?>" target="_blank"> <span style="color: #666;">帮助中心</span></a></div>
  </div>
  <div id="DivCityFrame">
  <div onMouseOver="ShowDivServer();" onMouseOut="HiddenDivServer();" style="float:left; width:65px;"> <span style="color: #666;">旗下网站</span><s id="xl3"></s><s id="xl4"></s></div>
    <div id="DivServer" onMouseOver="ShowDivServer();" onMouseOut="HiddenDivServer();">
      <ul>
<li> <a href="#" target="_blank">等待添加</a></li>
      </ul>
    </div>
  </div>
  <div id="DivCityFrame">
    <div onMouseOver="ShowDivWeb();" onMouseOut="HiddenDivWeb();" style="float:left; width:65px;"> <span style="color: #666;">网站导航</span><s id="xl5"></s><s id="xl6"></s></div>
    <div id="DivWeb" onMouseOver="ShowDivWeb();" onMouseOut="HiddenDivWeb();">
      <ul>
        <li><a href="<?php echo DT_PATH;?>" rel="nofollow">首页</a></li>
       <?php if(is_array($MODULE)) { foreach($MODULE as $m) { ?><?php if($m['ismenu']) { ?> <li><a href="<?php echo $m['linkurl'];?>"<?php if($m['isblank']) { ?> target="_blank"<?php } ?>
><?php echo $m['name'];?></a></li><?php } ?>
<?php } } ?>
      </ul>
    </div>
  </div>
</div>
</div>
</div>
</div>
<!--顶部导航结束-->
<div class="wk-module_header">
<div class="wk-module_header-wrapper">
<ul class="wk-module_header-wrapper-logo"><a href="<?php echo $MODULE['2']['linkurl'];?>"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/htindex_logo.png" height="48"></a></ul>
<ul class="wk-module_header-wrapper-menu">
<div class="wk-module_header-wrapper-menu-item active"><a href="<?php echo $MODULE['2']['linkurl'];?>">首页</a></div>
<div class="wk-module_header-wrapper-menu-item"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=5&action=add">发布产品</a></div>
<div class="wk-module_header-wrapper-menu-item"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=6&action=add">发布采购</a></div>
<div class="wk-module_header-wrapper-menu-item"><a href="home.php">旺铺装修</a></div>
<li class="wk-module_header-wrapper-menu-item" onMouseOver="this.className='wk-module_header-wrapper-menu-item app'" onMouseOut="this.className='wk-module_header-wrapper-menu-item'">
<a href="">服务<i></i></a>
<div class="wk-module_header_app-applist">
<span class="view">
<div class="wkw-work_header_app_panel">
<div class="wkw-work_header_app_panel-myapp">
<div class="wkw-work_header_app_panel-myapp-wrapper">
<div class="wkw-work_header_app_panel-myapp-wrapper-label">我<br>的<br>服<br>务</div>
<div class="wkw-work_header_app_panel-myapp-wrapper-info">
<ul class="wkw-work_header_app_panel-myapp-wrapper-info-operation">
</ul>
<!-- 轮播组件-->
<ul class="wkw-work_header_app_panel-myapp-wrapper-info-list fui-tab-effect-leftright fui-tab-l">
<div class="wkw-work_header_app_panel-myapp-wrapper-info-list-container">
<div class="wkw-work_header_app_panel-myapp-wrapper-info-list-container-content fd-clr" style="width: 1190px;">
<div class="wkw-work_header_app_panel-myapp-wrapper-info-list-container-content-panel active">
<!--应用列表-->
<?php include template('yingyong', 'member');?>
<!--应用列表-->
</div>                     
</div>
</div>
</ul>
</div>
</div>
</div>
</div></span></div>
</li>
<?php if($_userid) { ?><div class="wk-module_header-wrapper-menu-item"><a href="<?php echo userurl($_username);?>" target="_blank">浏览旺铺</a></div> <?php } ?>
</ul>
<form id="destoon_search" method="GET" action="<?php echo $MODULE[$searchid]['linkurl'];?>search.php" target="_blank" onSubmit="return common.checkSearchKeyword($('#keyword').val());">
<input type="hidden" name="moduleid" value="<?php echo $searchid;?>" id="destoon_moduleid"/>
<input type="hidden" name="spread" value="0" id="destoon_spread"/>
    <?php $searchid = ($moduleid > 3 && $MODULE[$moduleid]['ismenu'] && !$MODULE[$moduleid]['islink']) ? $moduleid : 5;?>
    <?php $searchids = array(5,6,4,21);?>
<?php if(!in_array($searchid, $searchids)) { ?>
<?php $searchids[] = $searchid;?>
<?php } ?>
<script type="text/javascript">var searchid = <?php echo $searchid;?>;</script>
<div class="search">
<div style="display: none;" id="search_module" class="stdiv" onMouseOut="Dh('search_module');" onMouseOver="Ds('search_module');">
<ul>
<li onClick="setModule('5','产品');showAndHide('stdiv','hide');">产品</li>
<li onClick="setModule('6','求购');showAndHide('stdiv','hide');">求购</li>
<li onClick="setModule('4','公司');showAndHide('stdiv','hide');">公司</li>
<li onClick="setModule('21','资讯');showAndHide('stdiv','hide');">资讯</li>
</ul> 
  </div>
 <div class="search_panel clearfloat">
  <input id="destoon_select" class="search_tab" type="text" value="产品" readonly onFocus="this.blur();" onClick="$('#search_module').fadeIn('fast');">
  <input type="text" id="destoon_kw" class="search_text" name="kw" value=""  placeholder="请输入需要搜素的内容"/">
<div class="alisearch-action"><button class="market" type="submit">搜索</button></div>
</div>
    </div>
 </form> 
</div>
</div>
<?php } ?>
<div class="tong">
<div class="tip-bar" id="myDiv" style="display:none">你好，这是<?php echo $DT['sitename'];?>新版后台，2016年01月19日-2月30日调试中，如果有任何使用和发布问题，请联系我们下方的客服QQ，或者致电<?php echo $DT['telephone'];?>，给您带来不便，希望您谅解！<span onClick="closeDiv()">关闭</span></div>
<div id="myDiv02" style="">
    <?php if($_groupid == 4) { ?>
        <div class="warn">尊敬的会员，您的帐号<span class="f_red f_b">正在审核中..</span>，本站部分功能和服务可能受到一定的使用限制，<?php if($MOD['checkuser']==2) { ?><a href="send.php?action=check" class="l">请点这里验证您的邮箱</a>，系统将自动审核<?php } else { ?>请稍候，等待网站审核。如需快审请联系客服QQ：（需支付10元认证费）<a target="blank" href="tencent://message/?uin=2309873509&Site=点击这里给我发消息&Menu=no"><img border="0" src="http://wpa.qq.com/pa?p=2:12345678:41" alt="点击这里给我发消息" title="点击这里给我发消息"></a><br/>完善的商业信息有助于获得别人的信任，结交潜在的商业伙伴，获取商业机会，增加系统审核通过的概率  <a href="edit.php?tab=2" class="t f_b">现在就去完善</a><?php } ?>
 
    <span style="float:right;margin:1px;width: 40px;height: 26px;line-height:26px;text-align: center;background:#FF9900;color:#fff;" onClick="closeclick2()">关闭</span></div>
    <?php } ?>
    <?php if($_groupid > 5 && !$_edittime) { ?>
        <div class="warn">贵公司尚未完善详细资料！完善即可免费获得专属您的【二级域名营销型店铺】，获取商业机会，  <a href="edit.php?tab=2" class="t f_b">现在就去完善</a>
        <span style="float:right;margin:1px;width: 40px;height: 26px;line-height:26px;text-align: center;background:#FF9900;color:#fff;" onClick="closeclick2()">关闭</span></div>
    <?php } ?>
   <?php if($_groupid < 6 || $_groupid == '8') { ?>
<div class="warn" style="display:none"><span class="f_red f_b"><?php echo $DT['sitename'];?></span>让天下没有难做的生意。<span class="f_red f_b">建立</span>会员<span class="f_red f_b">网站</span>最快<span class="f_red f_b">1天</span>，通常7-10个有效工作日，<span class="f_red f_b">地区关键词百度首页</span>排名最快<span class="f_red f_b">3天</span>，一般10-15个有效工作日（免费会员永久性免费试用，效果不确定，服务不确定;收费会员根据级别不同，效果不一样！收费会员的效果由平台以及百度等第三方绝对保证，详情访问:<a href="/" target="_blank">详情>>>></a>）<span style="float:right;margin:1px;width: 40px;height: 26px;line-height:26px;text-align: center;background:#FF9900;color:#fff;" onClick="closeclick2()">关闭</span></div>
 <?php } ?>
</div>
</div>
<?php include template('left', 'member');?>
<div class="layout_purchase-content">
<style type="text/css"> 
td{padding-top: 5px;}
</style>
