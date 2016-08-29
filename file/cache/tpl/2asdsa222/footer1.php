<?php defined('IN_DESTOON') or exit('Access Denied');?><div id="footer" class="full c_b">
    <div class="wrap">
        <div class="fl">
        <div class="foot-logo fl"></div>
          <div class="ewm"><img src="<?php echo DT_PATH;?>api/qrcode.png.php?auth=<?php echo DT_STATIC;?>" width="120" height="120" title="扫扫二维码，好礼奖不停" align="absmiddle"><p>扫扫二维码有惊喜</p></div>
</div>
        <div class="right fr">
            <div class="service">
                <ul class="clearfix">
                    <li>
                        <dl>
                            <dt>新手入门</dt>
                            <dd> <a href="/about/" target="_blank" rel="nofollow">企业介绍</a></dd>
                            <dd> <a href="/about/" target="_blank" rel="nofollow">商铺管理</a></dd>
                            <dd> <a href="/about/" target="_blank" rel="nofollow">找买家</a></dd>
                            <dd> <a href="/about/" target="_blank" rel="nofollow">注册新会员</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>网站信息</dt>
                            <dd> <a href="/company/" target="_blank">公司信息</a></dd>
                            <dd> <a href="/mall/" target="_blank">商城信息</a></dd>
                            <dd> <a href="/sell" target="_blank" rel="nofollow">供应信息</a></dd>
                            <dd> <a href="/buy/" target="_blank" rel="nofollow">采购信息</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>发布信息</dt>
                            <dd> <a href="/about/30.html" target="_blank" rel="nofollow">商城管理</a></dd>
                            <dd> <a href="/about/27.html" target="_blank" rel="nofollow">发布供应信息</a></dd>
                            <dd> <a href="/about/28.html" target="_blank" rel="nofollow">发布求购信息</a></dd>
                            <dd> <a href="/about/29.html" target="_blank" rel="nofollow">发布展会信息</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>热销行业</dt>
                            <dd> <a href="/sell/search.php?kw=三通" target="_blank">三通</a></dd>
                            <dd> <a href="/sell/search.php?spread=0&kw=起重机" target="_blank">起重机</a></dd>
                            <dd> <a href="/sell/search.php?spread=0&kw=钢材">钢材</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>常见问题</dt>
                            <dd> </dd>
                            <dd> <a href="/about/26.html" target="_blank" rel="nofollow">防骗指南</a></dd>
                            <dd> <a href="/about/25.html" target="_blank" rel="nofollow">禁止发布的产品</a></dd>
                        </dl>
                    </li>
                    <li class="noimg">
                        <dl>
                            <dt>关于网站</dt>
                            <dd> <a href="/about/contact.html" target="_blank" rel="nofollow">技术支持</a></dd>
                            <dd> <a href="/about/contact.html" target="_blank" rel="nofollow">联系方式</a></dd>
                            <dd> <a href="/about/copyright.html" target="_blank" rel="nofollow">版权隐私</a></dd>
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
                <ul class="clearfix">
                    <li><a href="http://dzsws.mofcom.gov.cn/article/zcfb/201305/20130500128059.shtml" target="_blank"> <span class="iso beian"></span></a></li>
                    <li><span class="iso mcafee"></span></li>
                    <li><span class="iso lanbiao" style="width:157px;"></span></li>
                    <li><span class="iso youngper"></span></li>
                    <li><a href="http://wj.haaic.gov.cn/TopICRS/certificateAction.do?id=201404180000009918" target="_blank"><span class="iso gswj" style="width:134px;"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <a title="返回顶部" class="top" href="javascript:;"><span class="pic"></span></a>      
</div>
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
$(function(){$("#iSlider").slide({titCell:".hd ul",mainCell:".bd ul",effect:"fold", autoPlay:true,autoPage:true, delayTime:600, trigger:"click"});$('.floatnav').find('.navs').find('li').each(function(i){$(this).click(function(e){e.preventDefault();$('body,html').animate({scrollTop:($('.floor').eq(i).offset().top-15)},500)})});$('.floatnav .top').click(function(e){e.preventDefault();$("html, body").animate({scrollTop:0}, 200);
});$("#marqueebox").slide({mainCell:"ul",autoPage:true,effect:"topLoop",autoPlay:true,vis:1});$(".help-tab").slide({});
});
</script>
<script type="text/javascript">
$(function(){var wtop=$(window).height();$(window).scroll(function(){var sltop=$(this).scrollTop();if(sltop>wtop){$(".floatnav").show()}else{$(".floatnav").hide()}});$(".floatnav ul li a").mouseenter(function(){$(this).children(".txt").show()});$(".floatnav ul li a").mouseleave(function(){$(this).children(".txt").hide()})});$(function(){$("#iSlider").slide({titCell:".hd ul",mainCell:".bd ul",effect:"fold", autoPlay:true,autoPage:true, delayTime:600, trigger:"click"});$('.floatnav').find('.nav').find('li').each(function(i){$(this).click(function(e){e.preventDefault();$('body,html').animate({scrollTop:($('.layout').eq(i).offset().top-15)},500)})});$('.floatnav .top').click(function(e){e.preventDefault();$("html, body").animate({scrollTop:0}, 200);});$(".new-company .header").slide({mainCell:"ul",autoPage:true,effect:"topLoop",autoPlay:true,vis:1});});
<?php if($destoon_task) { ?>
show_task('<?php echo $destoon_task;?>');
<?php } else { ?>
<?php include DT_ROOT.'/api/task.inc.php';?>
<?php } ?>
<?php if($lazy) { ?>$(function(){$("img").lazyload();});<?php } ?>
</script>
</body>
</html>
