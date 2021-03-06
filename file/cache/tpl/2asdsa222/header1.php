<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo DT_CHARSET;?>"/>
<title><?php if($seo_title) { ?><?php echo $seo_title;?><?php } else { ?><?php if($head_title) { ?><?php echo $head_title;?><?php echo $DT['seo_delimiter'];?><?php } ?>
<?php if($city_sitename) { ?><?php echo $city_sitename;?><?php } else { ?><?php echo $DT['sitename'];?><?php } ?>
<?php } ?>
</title>
<?php if($head_keywords) { ?>
<meta name="keywords" content="<?php echo $head_keywords;?>"/>
<?php } ?>
<?php if($head_description) { ?>
<meta name="description" content="<?php echo $head_description;?>"/>
<?php } ?>
<?php if($head_mobile) { ?>
<meta http-equiv="mobile-agent" content="format=html5;url=<?php echo $head_mobile;?>">
<?php } ?>
<meta name="generator" content="xinhuagou.taobao.com"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo DT_STATIC;?>favicon.ico"/>
<link rel="bookmark" type="image/x-icon" href="<?php echo DT_STATIC;?>favicon.ico"/>
<link rel="archives" title="网上贸易" href="<?php echo DT_STATIC;?>archiver/"/>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>css/common.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>css/top.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>css/index.css"/>
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>ie6.css"/>
<![endif]-->
<script type="text/javascript">window.onerror=function(){return true;}</script><script type="text/javascript" src="<?php echo DT_STATIC;?>lang/zh-cn/lang.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/config.js"></script>
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/common.js"></script>
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/plugins.js"></script>
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/tab.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/page.js"></script>
<script src="<?php echo DT_STATIC;?>api/baidu/baidu.php" language="javascript"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/jquery.lazyload.js"></script>
<?php if($JS) { ?>
<?php if(is_array($JS)) { foreach($JS as $js) { ?>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/<?php echo $js;?>.js"></script>
<?php } } ?>
<?php } ?>
<?php $searchid = ($moduleid > 3 && $MODULE[$moduleid]['ismenu'] && !$MODULE[$moduleid]['islink']) ? $moduleid : 5;?>
<?php $searchids = array(5,16,6,4,21,22);?>
<?php if(!in_array($searchid, $searchids)) { ?>
<?php $searchids[] = $searchid;?>
<?php } ?>
<script type="text/javascript"> 
<?php if($head_mobile && $EXT['mobile_goto']) { ?>
GoMobile('<?php echo $head_mobile;?>');
<?php } ?>
var searchid = <?php echo $searchid;?>;
<?php if($itemid && $DT['anticopy']) { ?>
document.oncontextmenu=function(e){return false;};
document.onselectstart=function(e){return false;};
<?php } ?>
</script>
<script type="text/javascript"> 
function removeElement(id)
{
document.getElementById(id).style.display="none";
}
</script>
</head>
<body>
<div class="topbar">
       <div class="toptab">
        <ul class="greet hy">
            <li id="destoon_member"></li>
        </ul>
        <div class="site-nav nounder">
            <ul class="quick-menu">
                            <li class="myqihui menu-item">
                    <div class="menu">
                        <a class="menu-hd" href="javascript:void(0);" target="_top" rel="nofollow">我的企业网<b></b></a>
                        <div class="menu-bd">
                            <div class="menu-bd-panel">
                               <dl>
                                <dt>采购</dt>
                                <dd><a rel="nofollow" href="<?php echo DT_STATIC;?>member/trade.php?action=order" target="_blank" title="发出的订单">发出的订单</a></dd>
                                <dd><a rel="nofollow" href="<?php echo DT_STATIC;?>member/fbxx160420.php?mid=6&action=add" target="_blank" title="发布询价单">发布询价单</a></dd>
                                <dd><a rel="nofollow" href="<?php echo DT_STATIC;?>member/fbxx160420.php?mid=6" target="_blank" title="管理询价单">管理询价单</a></dd>
                            </dl>
                            <dl>
                                <dt>销售</dt>
                                <dd><a rel="nofollow" href="<?php echo DT_STATIC;?>member/trade.php" target="_blank" title="已卖出货品">已卖出货品</a></dd>
                                <dd><a rel="nofollow" href="<?php echo DT_STATIC;?>member/fbxx160420.php?mid=5&action=add" target="_blank" title="发布供应产品">发布供应产品</a></dd>
                                <dd><a rel="nofollow" href="<?php echo DT_STATIC;?>member/fbxx160420.php?mid=5" target="_blank" title="管理供应产品">管理供应产品</a></dd>
                            </dl>
                            <dl>
                                <dt>工具</dt>
                                <dd><a rel="nofollow" href="<?php echo DT_STATIC;?>member/home.php" target="_blank" title="管理旺铺">管理旺铺</a></dd>
                                <dd><a rel="nofollow" href="<?php echo DT_STATIC;?>member/favorite.php"  target="_blank"title="商机收藏">商机收藏</a></dd>
                                <dd><a href="<?php echo DT_STATIC;?>member/message.php" target="_blank" rel="nofollow">站内信件</a></dd>
                            </dl>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="services menu-item">
                    <div class="menu">
                        <a class="menu-hd" href="javascript:void(0);" target="_top" rel="nofollow">五星服务<b></b></a>
                        <div class="menu-bd">
                            <div class="menu-bd-panel">
                                <dl>
<dd><a  href="<?php echo DT_STATIC;?>myt/"title="会员" target="_blank">会员服务</a></dd>
<dd><a href="<?php echo DT_STATIC;?>member/grade.php" title="在线升级VIP" target="_blank">在线升级VIP</a></dd>
<dd><a href="<?php echo DT_STATIC;?>spread/" title="排名推广" target="_blank">排名推广</a></dd>
<dd><a href="<?php echo DT_STATIC;?>member/ad.php" target="_blank" rel="nofollow">广告预定</a></dd>
<dd><a href="<?php echo DT_STATIC;?>myt/jbtm.html" title="金榜题名" target="_blank">金榜题名</a></dd>
<dd><a href="<?php echo DT_STATIC;?>myt/jfhgg.html" title="积分兑换" target="_blank">积分兑换</a></dd>
<dd><a href="<?php echo DT_STATIC;?>goldweb/goldweb-1.html" title="精美旺铺征集" target="_blank">精美旺铺征集</a></dd>
<dd><a href="<?php echo DT_STATIC;?>ad/" title="广告宣传推广" target="_blank">广告宣传推广</a></dd>
<dd><a href="<?php echo DT_STATIC;?>guestbook/"title="立即留言我们" target="_blank">立即留言我们</a></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="webmenu menu-item">
                    <div class="menu">
                        <a class="menu-hd" href="javascript:void(0);" target="_top" rel="nofollow">网站导航<b></b></a>
                        <div class="menu-bd">
                            <div class="menu-bd-panel">
                                <div>
              <a href="<?php echo DT_STATIC;?>" rel="nofollow">首页</a><a href="/sell" target="_blank">产品</a><a href="/buy" target="_blank">采购</a><a href="/company" target="_blank">公司</a><a href="/exhibit" target="_blank">展会</a><a href="/invest">招商</a><a href="<?php echo DT_STATIC;?>brand/" target="_blank">品牌</a><a href="/news/" target="_blank">资讯</a><a href="<?php echo DT_STATIC;?>club/">商圈</a><a href="<?php echo DT_STATIC;?>mall/">商城</a>                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <li class="swhome"><a href="/help/" target="_blank">帮助中心</a></li>           <li class="h_wap"><a href="/mobile.php" target="_blank">手机版</a> </li>           <li class="h_qrcode"><a href="javascript:Dqrcode();">二维码</a> </li>           <li class="swhome"><a href="<?php echo DT_STATIC;?>mall/cart.php" rel="nofollow">购物车</a><span class="head_t gouwu" id="destoon_cart">0</span></li>          <li class="swhome"> <a href="javascript:StranBody()" id="StranLink" title="切換到簡體中文版本" rel="nofollow">简繁中文</a></li>
           <li class="services menu-item">
                    <div class="menu">
                        <a class="menu-hd" href="javascript:void(0);" target="_top" rel="nofollow">旗下网站<b></b></a>
                        <div class="menu-bd">
                            <div class="menu-bd-panel">
                                <dl>
                 <dd> <a href="http://www.mjuq.com/" target="_blank">中国模具网</a></dd>
                <dd> <a href="http://www.erqt.com/" target="_blank">中华企业网</a></dd>
                <dd> <a href="http://xinhuagou.taobao.com/" target="_blank">企业建站</a></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="clear">
</div>
<div class="Top_float clearfix" id="J_Search" style="position: fixed;"> 
  
  <!--搜索漂浮-->
           <div class="screen-hd" style="display: none;">
                <div class="screen-hd-wrap">
                    <div class="s-logo">
                        <a href="/" target="_self" title="企业网">
                            <img src="<?php echo DT_SKIN;?>images/s_logo.png" width="300" height="38"></a>
                    </div>
                    <div class="searchcont">
                        <div class="search">
    <form action="/sell/search.php">
    <input name="kw" class="txt" placeholder="请输入搜索产品信息的关键字!" x-webkit-speech="" speech="" type="text"> 
    <input value="招一下" class="btn" type="submit">
  
                              </form>
                        </div>
                    </div>
                    <div class="T-publish">
                        <a href="/member/login.php" rel="nofollow" target="_blank">免费发布优质产品信息</a>
                    </div>
                </div>
            </div>
            <!--搜索漂浮结束-->
        </div><div class="year">
<div class="yearBox">
<div id="header" class="full">
    <div class="wrap">
       <div class="logo f-hide fl"><img src="<?php echo DT_SKIN;?>images/logo5.gif" width="400" height="120"></a></div>
        <div class="searchBar fl">
            <div id="searchMod">
                <ul class="clearfix fl">
                <?php if(is_array($searchids)) { foreach($searchids as $s) { ?>
                <?php if(isset($MODULE[$s])) { ?>
                <li selectid="<?php echo $s;?>" <?php if($searchid == $s) { ?> class="active"<?php } ?>
><?php echo $MODULE[$s]['name'];?></li>
                <?php } ?>
                <?php } } ?>
                </ul>
                <span class="fr mt-5">客服电话：<b class="green"><?php echo $DT['telephone'];?></b></span>
            </div>
            <div class="searstyle clearfix">
                <form id="xiaohei-search" action="<?php echo $MODULE[$searchid]['linkurl'];?>search.php" onsubmit="return Dsearch(1);">
                <input type="hidden" name="spread" value="0" id="xiaohei-spread"/>
                <input type="hidden" name="moduleid" value="<?php echo $searchid;?>" id="xiaohei-moduleid"/>
                <span class="searchBox fl"><input name="kw" id="xiaohei_kw" type="text" class="input1 fl" value="" placeholder="请输入关键词" <?php if($DT['search_tips']) { ?> onkeyup="STip(this.value);" autocomplete="off"<?php } ?>
 x-webkit-speech speech/></span><span class="sbtn fl"><button type="submit"> 搜索 </button></span>
                </form>
            </div>
            <div id="xiaohei_word"><?php echo tag("moduleid=$searchid&table=keyword&condition=moduleid=$searchid and status=3&pagesize=8&order=total_search desc&template=kw123");?></div>
        </div>
        <div class="xiaohei-code fr"> 扫一扫有惊喜 <i class="codeimg"></i> </div>
  </div>
</div>
<div id="destoon_qrcode" style="display:none;"></div>
<div id="destoon_space"></div>
<div class="wrap">
  <div id="search_tips" style="display:none;"></div>
</div>
<div class="navBar full">
  <div class="wrap">
    <dl class="fl navAll">
      <dt class="hd f-15"><i class="ico"></i>产品分类</dt>
            <dd class="bd">
            <ul id="menu" class="mt-5">
        <li class="mod_cate">
            <span class="icon icon1"><a href="<?php echo cat_url(1580);?>" >蔬菜杂粮</a></span>
                <div class="mod_subcate clearfix">
                    <div class="mod_subcate_main fl">
                    <?php $catid=1580;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
                    </div>
                    <div class="mod_subcate_side fl">
                        <div class="mod_subcate_side_hd">热门品牌</div>
                        <ul class="clearfix">
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/11.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/12.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/13.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/14.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/15.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/16.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/17.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/18.jpg"></a></li>
</ul>
                    </div>
                    <a href="#" class="mod_subcate_ad" target="_blank"><img src="<?php echo DT_SKIN;?>ad/f01.jpg" width="180" height="200"></a>
                </div>
            </li>
            <li class="mod_cate">
            <span class="icon icon2"><a href="<?php echo cat_url(1581);?>" >新鲜水果</a></span>
            <div class="mod_subcate clearfix">
                    <div class="mod_subcate_main fl">
                        <?php $catid=1581;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
                    </div>
                    <div class="mod_subcate_side fl">
                        <div class="mod_subcate_side_hd">热门品牌</div>
                        <ul class="clearfix">
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/11.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/12.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/13.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/14.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/15.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/16.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/17.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/18.jpg"></a></li>
</ul>
                    </div>
                    <a href="#" class="mod_subcate_ad" target="_blank"><img src="<?php echo DT_SKIN;?>ad/f02.jpg" width="180" height="200"></a>
                </div>
            </li>
            <li class="mod_cate">
            <span class="icon icon3"><a href="<?php echo cat_url(1582);?>" >种植、培育</a></span>
                <div class="mod_subcate clearfix">
                    <div class="mod_subcate_main fl">
                        <?php $catid=1582;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
                    </div>
                    <div class="mod_subcate_side fl">
                        <div class="mod_subcate_side_hd">热门品牌</div>
                        <ul class="clearfix">
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/11.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/12.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/13.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/14.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/15.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/16.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/17.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/18.jpg"></a></li>
</ul>
                    </div>
                    <a href="#" class="mod_subcate_ad" target="_blank"><img src="<?php echo DT_SKIN;?>ad/f03.jpg" width="180" height="200"></a>
                </div>
            </li>
            <li class="mod_cate">
            <span class="icon icon4"><a href="<?php echo cat_url(1583);?>" >畜牧养殖</a></span>
                <div class="mod_subcate clearfix">
                    <div class="mod_subcate_main fl">
                        <?php $catid=1583;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
                    </div>
                    <div class="mod_subcate_side fl">
                        <div class="mod_subcate_side_hd">热门品牌</div>
                        <ul class="clearfix">
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/11.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/12.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/13.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/14.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/15.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/16.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/17.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/18.jpg"></a></li>
</ul>
                    </div>
                    <a href="#" class="mod_subcate_ad" target="_blank"><img src="<?php echo DT_SKIN;?>ad/f04.jpg" width="180" height="200"></a>
                </div>
            </li>
            <li class="mod_cate">
            <span class="icon icon5"><a href="<?php echo cat_url(1584);?>" >渔业水产</a></span>
                <div class="mod_subcate clearfix">
                    <div class="mod_subcate_main fl">
                        <?php $catid=1584;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
                    </div>
                    <div class="mod_subcate_side fl">
                        <div class="mod_subcate_side_hd">热门品牌</div>
                        <ul class="clearfix">
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/11.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/12.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/13.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/14.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/15.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/16.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/17.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/18.jpg"></a></li>
</ul>
                    </div>
                    <a href="#" class="mod_subcate_ad" target="_blank"><img src="<?php echo DT_SKIN;?>ad/f05.jpg" width="180" height="200"></a>
                </div>
            </li>
            <li class="mod_cate">
            <span class="icon icon6"><a href="<?php echo cat_url(1585);?>" >山珍药材</a></span>
                <div class="mod_subcate clearfix">
                    <div class="mod_subcate_main fl">
                        <?php $catid=1585;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
                    </div>
                    <div class="mod_subcate_side fl">
                        <div class="mod_subcate_side_hd">热门品牌</div>
                        <ul class="clearfix">
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/11.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/12.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/13.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/14.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/15.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/16.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/17.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/18.jpg"></a></li>
</ul>
                    </div>
                    <a href="#" class="mod_subcate_ad" target="_blank"><img src="<?php echo DT_SKIN;?>ad/f06.jpg" width="180" height="200"></a>
                </div>
            </li>
            <li class="mod_cate">
            <span class="icon icon7"><a href="<?php echo cat_url(1586);?>" >苗草花木</a></span>
                <div class="mod_subcate clearfix">
                    <div class="mod_subcate_main fl">
                        <?php $catid=1586;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
                    </div>
                    <div class="mod_subcate_side fl">
                        <div class="mod_subcate_side_hd">热门品牌</div>
                        <ul class="clearfix">
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/11.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/12.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/13.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/14.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/15.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/16.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/17.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/18.jpg"></a></li>
</ul>
                    </div>
                    <a href="#" class="mod_subcate_ad" target="_blank"><img src="<?php echo DT_SKIN;?>ad/f07.jpg" width="180" height="200"></a>
                </div>
            </li>
<li class="mod_cate">
            <span class="icon icon8"><a href="<?php echo cat_url(1587);?>" >农机耕具</a></span>
                <div class="mod_subcate clearfix">
                    <div class="mod_subcate_main fl">
                        <?php $catid=1587;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
                    </div>
                    <div class="mod_subcate_side fl">
                        <div class="mod_subcate_side_hd">热门品牌</div>
                        <ul class="clearfix">
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/11.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/12.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/13.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/14.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/15.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/16.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/17.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/18.jpg"></a></li>
</ul>
                    </div>
                    <a href="#" class="mod_subcate_ad" target="_blank"><img src="<?php echo DT_SKIN;?>ad/f08.jpg" width="180" height="200"></a>
                </div>
            </li>
            <li class="mod_cate">
            <span class="icon icon9"><a href="<?php echo cat_url(1588);?>" >农资、化肥</a></span>
                <div class="mod_subcate clearfix">
                    <div class="mod_subcate_main fl">
                        <?php $catid=1588;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
                    </div>
                    <div class="mod_subcate_side fl">
                        <div class="mod_subcate_side_hd">热门品牌</div>
                        <ul class="clearfix">
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/11.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/12.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/13.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/14.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/15.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/16.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/17.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/18.jpg"></a></li>
</ul>
                    </div>
                    <a href="#" class="mod_subcate_ad" target="_blank"><img src="<?php echo DT_SKIN;?>ad/f09.jpg" width="180" height="200"></a>
                </div>
            </li>
            <li class="mod_cate">
            <span class="icon icon10"><a href="<?php echo cat_url(1589);?>" >资源、食品</a></span>
                <div class="mod_subcate clearfix">
                    <div class="mod_subcate_main fl">
                        <?php $catid=1589;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
                    </div>
                    <div class="mod_subcate_side fl">
                        <div class="mod_subcate_side_hd">热门品牌</div>
                        <ul class="clearfix">
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/11.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/12.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/13.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/14.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/15.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/16.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/17.jpg"></a></li>
<li><a href="" target="_blank"><img src="<?php echo DT_SKIN;?>bd/18.jpg"></a></li>
</ul>
                    </div>
                    <a href="#" class="mod_subcate_ad" target="_blank"><img src="<?php echo DT_SKIN;?>ad/f010.jpg" width="180" height="200"></a>
                </div>
            </li>
        </ul>
            </dd>
        </dl>
        <div id="nav" class="fl">
            <ul id="mainNav" class="clearfix f-15 fl">
                <li<?php if($moduleid<4) { ?> class="active"<?php } ?>
><a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a></li>
                <?php if(is_array($MODULE)) { foreach($MODULE as $m) { ?><?php if($m['ismenu']) { ?>
                <li <?php if($m['moduleid']==$moduleid) { ?>class="active"<?php } ?>
><a href="<?php echo $m['linkurl'];?>"<?php if($m['isblank']) { ?> target="_blank"<?php } ?>
><?php echo $m['name'];?></a></li>
                <?php } ?>
<?php } } ?>
            </ul>
            <ul id="subNav" class="clearfix fl">
                <li><a href="<?php echo $MODULE['1']['linkurl'];?>spread/" target="_blank" >竞价排名</a></li>
                <li><a href="/ad" target="_blank" >广告预定</a></li>
            </ul>
        </div>
    </div>
</div>
  <div class="clear">
    </div>
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/tab.js"></script>
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/home-lou.js"></script>
<div id="topshow" class="full">
    <div class="wrap">
        <div class="left fl">  </div>
        <div class="center fl">
            <div id="iSlider" class="focus">
           <!--首页广告738*285-->
                <div class="bd"><?php echo ad(14);?></div>
                <!--首页广告-->
            </div>
            <dl class="supply clearfix" >
                <dt class="supply-title fl">最新产品</dt>
 <dd  style="height: 34px; overflow: hidden;">
                    <?php echo tag("moduleid=5&length=36&condition=status=3&pagesize=15&order=edittime desc&target=_blank&template=xiaohei-index01");?>
                </dd>
            </dl>
            <div class="comtab mt-10">
                <div class="header"> <a class="more" href="http://wp2.qihuiwang.com/Pay/Index.aspx"
                            target="_blank">我要加入</a>
                    <h3>推荐企业</h3>
                </div>
<?php echo tag("moduleid=4&condition=vip>0 and catids<>''&areaid=$cityid&pagesize=6&order=fromtime desc&template=xiaohei-comsy");?>
            </div>
        </div>
        <div class="right fr">
            <div class="operation f-14">
            <!--首页登录-->
            <?php if($_userid) { ?>
    <a href="<?php echo userurl($_username);?>" target="_blank" class="login-btn1 fl">HI!  <span class="f_b f_green" title="<?php echo $MG['groupname'];?>"><?php echo $_truename;?></span></a>
                <a href="<?php echo $MODULE['2']['linkurl'];?>" target="_blank" class="regist-btn fl">我的办公室</a>
               <?php } else { ?>
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>" rel="nofollow" class="login-btn fl" title="登录"><i></i>登录</a>
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" rel="nofollow" class="regist-btn fl" title="注册"><i></i>免费注册</a>
<?php } ?>
<!--首页登录-->
</div>
            <div class="help-tab">
                <div class="hd">
                    <ul class="clearfix">
                        <li class="on">公告</li>
                        <li>规则</li>
                        <li>我是卖家</li>
                        <li>我是买家</li>
                    </ul>
                </div>
                <div class="bd">
<?php echo tag("table=announce&condition=totime=0 or totime>$today_endtime-86400&areaid=$cityid&pagesize=2&class=dot&order=listorder desc,addtime desc&class=dot02&target=_blank&length=20&cname=公告&template=xiaohei-index02");?>
<?php echo tag("moduleid=21&length=20&cname=规则&condition=status=3&areaid=$cityid&pagesize=2&order=addtime desc&target=_blank&class=dot02&template=xiaohei-index02");?>
<?php echo tag("moduleid=21&length=20&cname=我是卖家&condition=status=3&areaid=$cityid&pagesize=2&order=addtime desc&target=_blank&class=dot02&template=xiaohei-index02");?>
<?php echo tag("moduleid=21&length=20&cname=我是买家&condition=status=3&areaid=$cityid&pagesize=2&order=addtime desc&target=_blank&class=dot02&template=xiaohei-index02");?>
                </div>
            </div>
            <div class="new-num pr">
                <span class="bgimg"></span>
                <ul class="content">
                    <li><strong><?php echo $db->count($DT_PRE.'sell_5', 'status=3', 1800);?> 条</strong><span>今日新增商品数</span> </li>
                    <li><strong><?php echo $db->count($DT_PRE.'buy_6', 'status=3', 1800);?> 条</strong><span>今日新增采购数</span></li>
                </ul>
            </div>
            <div class="price mt-15">
                <h3 class="ptit"> 热门地区</h3>
<ul class="clearfix">
 <li><a href="<?php echo $MODULE['1']['linkurl'];?>sell/search-htm-areaid-24-typeid-.html" target="_blank">贵州</a></li>
                                       <li><a href="<?php echo $MODULE['1']['linkurl'];?>sell/search-htm-areaid-1-typeid-.html" target="_blank">北京</a></li>
                                       <li><a href="<?php echo $MODULE['1']['linkurl'];?>sell/search-htm-areaid-3-typeid-.html" target="_blank">天津</a></li>
                                       <li class="pnobor"><a href="<?php echo $MODULE['1']['linkurl'];?>sell/search-htm-areaid-5-typeid-.html" target="_blank">河北</a></li>
                                       <li><a href="<?php echo $MODULE['1']['linkurl'];?>sell/search-htm-areaid-6-typeid-.html" target="_blank">山西</a></li>
                                        <li><a href="<?php echo $MODULE['1']['linkurl'];?>sell/search-htm-areaid-8-typeid-.html" target="_blank">辽宁</a></li>
                                       <li><a href="<?php echo $MODULE['1']['linkurl'];?>sell/search-htm-areaid-9-typeid-.html" target="_blank">吉林</a></li>
                                      <li class="pnobor"><a href="<?php echo $MODULE['1']['linkurl'];?>sell/search-htm-areaid-2-typeid-.html" target="_blank">上海</a></li>
                                       <li><a href="<?php echo $MODULE['1']['linkurl'];?>sell/search-htm-areaid-11-typeid-.html" target="_blank">江苏</a></li>
                                       <li><a href="<?php echo $MODULE['1']['linkurl'];?>sell/search-htm-areaid-12-typeid-.html" target="_blank">浙江</a></li>
                                       <li><a href="<?php echo $MODULE['1']['linkurl'];?>sell/search-htm-areaid-13-typeid-.html" target="_blank">安徽</a></li>
                                 <li class="pnobor"><a href="<?php echo $MODULE['1']['linkurl'];?>sell/search-htm-areaid-20-typeid-.html" target="_blank">广东</a></li>
</ul>
            </div>
        </div>
    </div>
</div>
<div id="floor" class="full">
    <div class="wrap">
        <div class="banner mt-15">
<?php echo ad(42);?>
</div>