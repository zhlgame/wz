<?php defined('IN_DESTOON') or exit('Access Denied');?><?php $navAll=1;?>
<?php include template('header');?>
<div id="topshow" class="full">
    <div class="wrap">
        <div class="left fl"> &nbsp;</div>
        <div class="center fl">
        <!--中间大屏广告开始-->
            <div class="focus">
                <div class="bd">
                   <?php echo ad(14);?>
                </div>
            </div>
            <!--中间大屏广告结束-->
            <div class="special">
                <ul class="clearfix">
                     <!-- 广告位置 1 -->
                 <li><a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/sell/050613fc3ba3eabcc8.jpg" alt=""></a></li>
                <li><a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/sell/050613c1143c5dda0b.jpg" alt=""></a></li>
<!-- 广告位置 1 -->
                </ul>
            </div>
        </div>
        <div class="right fr">
            <div class="operation f-14">
            <!--首页登录-->
            <?php if($_userid) { ?>
    <a href="<?php echo userurl($_username);?>" target="_blank" class="login-btn1 fl">HI!  <span class="f_b f_green" title="<?php echo $MG['groupname'];?>"><?php echo $_truename;?></span></a>
                <a href="<?php echo $MODULE['2']['linkurl'];?>" target="_blank" class="regist-btn fl">我的自耕地</a>
               <?php } else { ?>
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>" rel="nofollow" class="login-btn fl" title="登录"><i></i>登录</a>
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" rel="nofollow" class="regist-btn fl" title="注册"><i></i>免费注册</a>
<?php } ?>
<!--首页登录-->
            </div>
            <dl class="pro-news">
                <dt>产品头条</dt>
                <?php $tags=tag("moduleid=$moduleid&condition=status=3&areaid=$cityid&pagesize=6&order=".$MOD['order']."&showcat=1&template=null");?> 
                <?php if(is_array($tags)) { foreach($tags as $t) { ?>
                <dd> <span class="orange"><a href="<?php echo $t['caturl'];?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
<?php if($class) { ?> class="catname"<?php } ?>
>[<?php echo $t['catname'];?>]</a></span><a href="<?php echo $t['linkurl'];?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
 title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></dd>
                <?php } } ?>
            </dl>
            <dl class="area">
                <dt class="f14">按地区查找</dt>
                <?php $mainarea = get_mainarea(0)?>
<?php if(is_array($mainarea)) { foreach($mainarea as $k => $v) { ?>
  <?php if($k < 12) { ?>
                <dd><a href="<?php echo $MOD['linkurl'];?>search.php?areaid=<?php echo $v['areaid'];?>" rel="nofollow"><?php echo $v['areaname'];?></a></dd>
              <?php } ?>
<?php } } ?>
            </dl>
            <div class="tnum"> 今日商品总数：<span class="red f-14"><?php echo $db->count($DT_PRE.'sell_5', 'status=3', 1800);?></span> </div>
        </div>
    </div>
</div>
 
 
<?php $mid=5?>
<?php $child = get_maincat(0, 5, 1);?>
<?php if(is_array($child)) { foreach($child as $i => $c) { ?>
<?php $kk=$i+1?>
<?php if(in_array($c['catid'], array(1,18,34,71,82,329,409,438,455,466))) { ?>
<?php $catid=$c['catid'];
$quoteid = 39145+$catid; 
$companyid = 2408+$catid;
$buyid = 15658+$catid; 
$fenlei_newsid = 54803+$catid;      //资讯news ID
?>
<div class="layout <?php if($kk==1) { ?>org-br<?php } else if($kk==2) { ?>green-br<?php } else if($kk==3) { ?>blue-br<?php } else if($kk==4) { ?>yellow-br
<?php } else if($kk==5) { ?>red-br<?php } else if($kk==6) { ?>purple-br<?php } else if($kk==7) { ?>purple-br<?php } else if($kk==8) { ?>green1-br<?php } else if($kk==9) { ?>green-br<?php } else if($kk==10) { ?>blue-br<?php } ?>
">
    <div class="wrap">
        <div class="leftbox fl">
            <div class="header">
                <h3><em><?php echo $i+1;?>F</em>&nbsp;<a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank" name="gylp"><?php echo $c['catname'];?></a></h3>
                <dl class="fl">
                    <dt>推荐：</dt>
                    <dd> 
<?php $sub = get_maincat($c['catid'], $mid, 1);?>
<?php if(is_array($sub)) { foreach($sub as $j => $s) { ?>
<?php if($j<5) { ?>
<a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>" class="g"><?php echo set_style($s['catname'], $s['style']);?></a>|
 
<?php } ?>
<?php } } ?> </dd>
                </dl>
                <dl class="fr">
                    <dt>热门地区：</dt>
                    <dd><a href="<?php echo $MODULE['5']['linkurl'];?>search.php?list=0&kw=&fields=0&fromdate=&todate=&catid=<?php echo $c['catid'];?>&typeid=&areaid=12" target="_blank">浙江</a> | <a href="<?php echo $MODULE['5']['linkurl'];?>search.php?list=0&kw=&fields=0&fromdate=&todate=&catid=<?php echo $c['catid'];?>&typeid=&areaid=11" target="_blank">江苏</a> | <a href="<?php echo $MODULE['5']['linkurl'];?>search.php?list=0&kw=&fields=0&fromdate=&todate=&catid=<?php echo $c['catid'];?>&typeid=&areaid=1" target="_blank">北京</a> </dd>
                </dl>
            </div>
            <div class="content mt-15">
                <div class="key-word fl">
                    <div class="hot-seach">
                        <form action="<?php echo $MOD['linkurl'];?>search.php">
                            <input type="hidden" name="catid" value=""/>
                            <input type="text" name="kw" placeholder="请输入关键词" class="input1 fl" autocomplete="off"/>
                            <button type="button" class="search fl"></button>
                        </form>
                    </div>
                    <dl class="hot-word">
                        <dt>热门分类：</dt>
                        <dd>
<?php $sub = get_maincat($c['catid'], $mid, 1);?>
<?php if(is_array($sub)) { foreach($sub as $j => $s) { ?>
<?php if($j<12) { ?>
<a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>" class="g"><?php echo set_style($s['catname'], $s['style']);?></a>
<?php } ?>
<?php } } ?> 
  </dd>
                    </dl>
                    <!-- 广告位置 2 -->
                    <div class="mt-15"> 
<a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank"><img src="<?php echo DT_SKIN;?>ad/sell/sell_<?php echo $i+1;?>f.jpg"/></a>
 </div>
 <!-- 广告位置 2 -->
                </div>
                <div class="picshow fl">
                    <div class="product"> 
                        <?php echo tag("moduleid=$moduleid&catid=".$c['catid']."&condition=status=3 and thumb<>''&pagesize=4&order=".$MOD['order']."&width=160&height=160&target=_blank&template=xiaohei-sell02");?> 
                    </div>
                    <div class="pronews"> 
                        <?php echo tag("moduleid=$moduleid&catid=".$c['catid']."&condition=status=3&pagesize=12&order=".$MOD['order']."&target=_blank&showcat=1&template=xiaohei-sell01");?> 
                    </div>
                </div>
            </div>
        </div>
        <div class="rightbox fr">
            <div class="header orange">
                <h3>优质供应商</h3>
            </div>
            <div class="rcompany"> 
               <?php echo tag("moduleid=4&catid=$companyid&pagesize=6&order=fromtime desc&template=xiaohei-sell03");?> 
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php } } ?>
 
<div class="ibox full">
    <div class="wrap">
        <div class="header">
            <h3>友情链接</h3>
        </div>
        <div class="friendlink">
<?php if($DT['page_text']) { ?>
<?php echo tag("table=link&condition=status=3 and level>0 and thumb='' and username=''&areaid=$cityid&pagesize=".$DT['page_text']."&order=listorder desc,itemid desc&template=list-link&cols=9");?>
<?php } ?>
        </div>
    </div>
</div>
<script type="text/javascript">
$(function(){var wtop=$(window).height();$(window).scroll(function(){var sltop=$(this).scrollTop();if(sltop>wtop){$(".floatnav").show()}else{$(".floatnav").hide()}});$(".floatnav ul li a").mouseenter(function(){$(this).children(".txt").show()});$(".floatnav ul li a").mouseleave(function(){$(this).children(".txt").hide()})});$(function(){$("#iSlider").slide({titCell:".hd ul",mainCell:".bd ul",effect:"fold", autoPlay:true,autoPage:true, delayTime:600, trigger:"click"});$('.floatnav').find('.nav').find('li').each(function(i){$(this).click(function(e){e.preventDefault();$('body,html').animate({scrollTop:($('.layout').eq(i).offset().top-15)},500)})});$('.floatnav .top').click(function(e){e.preventDefault();$("html, body").animate({scrollTop:0}, 200);});$(".rcompany").each(function(){$(this).slide({titCell:"dt", targetCell:"dd.img",defaultIndex:1,effect:"slideDown",delayTime:300});});$(".hot-seach button").each(function(){$(this).click(function(){var a=$(this),b=a.parents('form'),c=b.find(".input1"),d=c.val();if($.trim(d).length<2){c.css("backgroundColor","#ffffa6");setTimeout(function(){c.css("backgroundColor","")},100);setTimeout(function(){c.css("backgroundColor","#ffffa6")},200);setTimeout(function(){c.css("backgroundColor","")},300);c.focus();}else{b.submit()}})});});$(function(){$("img").lazyload();});</script>
 
<?php include template('footer');?>
