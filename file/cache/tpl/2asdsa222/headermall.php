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
<meta http-equiv="mobile-agent" content="format=xhtml; url=<?php echo $head_mobile;?>"> 
<meta http-equiv="mobile-agent" content="format=html5; url=<?php echo $head_mobile;?>">
<?php } ?>
<meta name="generator" content="DESTOON B2B - www.destoon.com"/>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo DT_STATIC;?>favicon.ico"/>
<link rel="bookmark" type="image/x-icon" href="<?php echo DT_STATIC;?>favicon.ico"/>
<?php if($head_canonical) { ?>
<link rel="canonical" href="<?php echo $head_canonical;?>"/>
<?php } ?>
<?php if($EXT['archiver_enable']) { ?>
<link rel="archives" title="<?php echo $DT['sitename'];?>" href="<?php echo $EXT['archiver_url'];?>"/>
<?php } ?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>css/common.css"/>
<?php if($moduleid>4) { ?><link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>css/<?php echo $module;?>.css"/><?php } ?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>style.css"/>
<?php if($CSS) { ?>
<?php if(is_array($CSS)) { foreach($CSS as $css) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>css/<?php echo $css;?>.css"/>
<?php } } ?>
<?php } ?>
<?php if($CSS) { ?>
<?php if(is_array($CSS)) { foreach($CSS as $css) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?><?php echo $css;?>.css"/>
<?php } } ?>
<?php } ?>
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>ie6.css"/>
<![endif]-->
<?php if(!DT_DEBUG) { ?><script type="text/javascript">window.onerror=function(){return true;}</script><?php } ?>
<script type="text/javascript" src="<?php echo DT_STATIC;?>lang/<?php echo DT_LANG;?>/lang.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/config.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/jquery.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/tab.js"></script>
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/plugins.js"></script>
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/common.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/page.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/jquery.lazyload.js"></script>
<script src="<?php echo DT_SKIN;?>js/tab.js" type="text/javascript"></script>
<?php if($lazy) { ?><script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/jquery.lazyload.js"></script><?php } ?>
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
<?php include template('top-mini');?>
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
                        <a href="http://hznx.net/member/login.php" rel="nofollow" target="_blank">免费发布优质产品信息</a>
                    </div>
                </div>
            </div>
            <!--搜索漂浮结束-->
        </div><div class="year">
<div class="yearBox">
<div id="header" class="full">
    <div class="wrap">
        <div class="logo f-hide fl"><img src="http://hznx.net/skin/default/images/logo5.gif" width="400" height="120"></a></div>
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
        <dl class="fl navAll"<?php if(!$navAll) { ?> id="navAll"<?php } ?>
>
            <dt class="hd f-15"><i class="ico"></i>所有分类</dt>
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