<?php defined('IN_DESTOON') or exit('Access Denied');?>  <div class="clear">
    </div>
<div id="footer" class="full">
    <div class="wrap">
   <div class="fl">
        <div class="foot-logo"></div>
 <div class="ewm">
 <img src="<?php echo DT_SKIN;?>bd/ewm.png" title="扫扫二维码，好礼奖不停" align="absmiddle" width="120" height="120"><p>扫扫二维码有惊喜</p></div>
</div>
        <div class="right fr">
            <div class="service">
                <ul class="clearfix">
                    <li>
                        <dl>
                            <dt>新手入门</dt>
                           <dd> <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" target="_blank" rel="nofollow">注册新用户</a></dd>
                <dd> <a href="<?php echo $MODULE['2']['linkurl'];?>/home.php" target="_blank" rel="nofollow">铺面装修</a></dd>
                <dd> <a href="<?php echo $MODULE['4']['linkurl'];?>" target="_blank" rel="nofollow">找买家</a></dd>
                <dd> <a href="{$MODULE[27][linkurl]" target="_blank" rel="nofollow">新手学堂</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                           <dt>会员服务</dt>
                <dd> <a href="<?php echo $MODULE['4']['linkurl'];?>" target="_blank">找公司</a></dd>
                <dd> <a href="<?php echo $MODULE['5']['linkurl'];?>" target="_blank" rel="nofollow">供应信息</a></dd>
                <dd> <a href="<?php echo $MODULE['6']['linkurl'];?>" target="_blank" rel="nofollow">采购信息</a></dd>
<dd> <a href="<?php echo $MODULE['21']['linkurl'];?>" target="_blank" rel="nofollow">看资讯</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>金铺</dt>
                <dd> <a href="<?php echo $MODULE['2']['linkurl'];?>/home.php" target="_blank" rel="nofollow">金铺装修</a></dd>
                <dd> <a href="<?php echo $EXT['spread_url'];?>" target="_blank" rel="nofollow"> 营销推广</a></dd>
                <dd> <a href="<?php echo $MODULE['5']['linkurl'];?>" target="_blank" rel="nofollow">买卖商机</a></dd>
                <dd> <a href="<?php echo $MODULE['5']['linkurl'];?>" target="_blank" rel="nofollow">人气商品</a></dd>
              </dl>
                    </li>
                    <li>
                        <dl>
                           <dt>旗下网站</dt>
                <dd> <a href="#" target="_blank">减速机网</a></dd>
                <dd> <a href="#" target="_blank">抛丸机网</a></dd>
                <dd> <a href="<?php echo $MODULE['2']['linkurl'];?>" target="_blank">企业建站</a></dd>
              </dl>
                    </li>
                    <li>
                        <dl>
                        <dt>常见问题</dt>
<dd> <a href="<?php echo $MODULE['27']['linkurl'];?>" target="_blank" rel="nofollow">新手上路</a></dd>
                <dd> <a href="<?php echo $MODULE['27']['linkurl'];?>" target="_blank" rel="nofollow">如何买卖</a></dd>
                <dd> <a href="<?php echo $MODULE['27']['linkurl'];?>" target="_blank" rel="nofollow">专场采购</a></dd>
                <dd> <a href="<?php echo $MODULE['27']['linkurl'];?>" target="_blank" rel="nofollow">防骗指南</a></dd>
              </dl>
                    </li>
                    <li class="noimg">
                        <dl>
                             <dt>支付方式</dt>
                <dd> <a href="#" target="_blank" rel="nofollow">新人支付</a></dd>
                <dd> <a href="#" target="_blank" rel="nofollow">如何续费</a></dd>
                <dd> <a href="#" target="_blank" rel="nofollow">短信收费</a></dd>
                <dd> <a href="#">返回顶端</a></dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="foot_page"> <a href="<?php echo $MODULE['1']['linkurl'];?>">网站首页</a> 
                <?php echo tag("table=webpage&condition=item=1&areaid=$cityid&order=listorder desc,itemid desc&template=list-webpage");?> 
                | <a href="<?php echo $MODULE['1']['linkurl'];?>sitemap/">网站地图</a> | <a href="<?php echo $EXT['spread_url'];?>">排名推广</a> <?php if($EXT['ad_enable']) { ?> | <a href="<?php echo $EXT['ad_url'];?>">广告服务</a><?php } ?>
                <?php if($EXT['gift_enable']) { ?> | <a href="<?php echo $EXT['gift_url'];?>">积分换礼</a><?php } ?>
                <?php if($EXT['guestbook_enable']) { ?> | <a href="<?php echo $EXT['guestbook_url'];?>">网站留言</a><?php } ?>
                <?php if($EXT['feed_enable']) { ?> | <a href="<?php echo $EXT['feed_url'];?>">RSS订阅</a><?php } ?>
                <?php if($DT['icpno']) { ?> | <a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow"><?php echo $DT['icpno'];?></a><?php } ?>
 </div>
            <div id="copyright"><?php echo $DT['copyright'];?></div>
            <div class="ft-ico">
                <ul class="clearfix mt15">
                    <a href="/" target="_blank"> <span class="iso"></span></a>
                <span class="iso beian"></span>
                <span class="iso mcafee"></span>
                <span class="iso lanbiao" style="width:157px;"></span>
                <span class="iso youngper"></span>
                <a href="/" target="_blank"><span class="iso gswj" style="width:134px;"></span></a>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="back2top"><a href="javascript:void(0);" title="返回顶部">&nbsp;</a></div>
<script type="text/javascript"> 
$(function () {
    var wtop = $(window).height();
    $(window).scroll(function () {
        var sltop = $(this).scrollTop();
        if (sltop > wtop) {
            $(".floatnav").show();
        }
        else {
            $(".floatnav").hide();
        }
    })
    $(".floatnav ul li a").mouseenter(function () {
        $(this).children(".txt").show();
    })
    $(".floatnav ul li a").mouseleave(function () {
        $(this).children(".txt").hide();
    })
});
 
$(function(){$("#iSlider").slide({titCell:".hd ul",mainCell:".bd ul",effect:"fold", autoPlay:true,autoPage:true, delayTime:600, trigger:"click"});$('.floatnav').find('.nav').find('li').each(function(i){$(this).click(function(e){e.preventDefault();$('body,html').animate({scrollTop:($('.floor').eq(i).offset().top-15)},500)})});$('.floatnav .top').click(function(e){e.preventDefault();$("html, body").animate({scrollTop:0}, 200);
});$("#marqueebox").slide({mainCell:"ul",autoPage:true,effect:"topLoop",autoPlay:true,vis:1});$(".help-tab").slide({});
});
<?php if($lazy) { ?>$(function(){$("img").lazyload();});<?php } ?>
</script>
 
<script type="text/javascript"> 
<?php if($destoon_task) { ?>
show_task('<?php echo $destoon_task;?>');
<?php } else { ?>
<?php include DT_ROOT.'/api/task.inc.php';?>
<?php } ?>
<?php if($lazy) { ?>$(function(){$("img").lazyload();});<?php } ?>
</script>
</body></html>
