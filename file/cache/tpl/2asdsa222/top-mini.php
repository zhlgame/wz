<?php defined('IN_DESTOON') or exit('Access Denied');?><div class="topbar">
       <div class="toptab">
        
        <ul class="greet">
            <li id="destoon_member"></li>
        </ul>
        <div class="site-nav nounder">
            <ul class="quick-menu">
                <li class="myqihui menu-item">
                    <div class="menu">
                        <a class="menu-hd" href="javascript:void(0);" target="_top" rel="nofollow">我的贸易<b></b></a>
                        <div class="menu-bd">
                            <div class="menu-bd-panel">
                               <dl>
                                <dt>采购</dt>
                                <dd><a rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?>trade.php?action=order" target="_blank" title="发出的订单">发出的订单</a></dd>
                                <dd><a rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=6&action=add" target="_blank" title="发布询价单">发布询价单</a></dd>
                                <dd><a rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=6" target="_blank" title="管理询价单">管理询价单</a></dd>
                            </dl>
                            <dl>
                                <dt>销售</dt>
                                <dd><a rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?>trade.php" target="_blank" title="已卖出货品">已卖出货品</a></dd>
                                <dd><a rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=5&action=add" target="_blank" title="发布供应产品">发布供应产品</a></dd>
                                <dd><a rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=5" target="_blank" title="管理供应产品">管理供应产品</a></dd>
                            </dl>
                            <dl>
                                <dt>工具</dt>
                                <dd><a rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?>home.php" target="_blank" title="管理旺铺">管理旺铺</a></dd>
                                <dd><a rel="nofollow" href="<?php echo $MODULE['2']['linkurl'];?>favorite.php"  target="_blank"title="商机收藏">商机收藏</a></dd>
                                <dd><a href="<?php echo $MODULE['2']['linkurl'];?>message.php" target="_blank" rel="nofollow">站内信件</a></dd>
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
<dd><a  href="<?php echo $MODULE['1']['linkurl'];?>myt/"title="贸易通服务" target="_blank">贸易通服务</a></dd>
<dd><a href="<?php echo $MODULE['2']['linkurl'];?>grade.php" title="在线升级VIP" target="_blank">在线升级VIP</a></dd>
<dd><a href="<?php echo $MODULE['1']['linkurl'];?>spread/" title="排名推广" target="_blank">排名推广</a></dd>
<dd><a href="<?php echo $MODULE['2']['linkurl'];?>ad.php" target="_blank" rel="nofollow">广告预定</a></dd>
<dd><a href="<?php echo $MODULE['1']['linkurl'];?>myt/jbtm.html" title="金榜题名" target="_blank">金榜题名</a></dd>
<dd><a href="<?php echo $MODULE['1']['linkurl'];?>myt/jfhgg.html" title="积分兑换" target="_blank">积分兑换</a></dd>
<dd><a href="<?php echo $MODULE['1']['linkurl'];?>goldweb/goldweb-1.html" title="精美旺铺征集" target="_blank">精美旺铺征集</a></dd>
<dd><a href="<?php echo $MODULE['1']['linkurl'];?>ad/" title="广告宣传推广" target="_blank">广告宣传推广</a></dd>
<dd><a href="<?php echo $EXT['guestbook_url'];?>"title="立即留言我们" target="_blank">立即留言我们</a></dd>
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
              <a href="<?php echo DT_PATH;?>" rel="nofollow">首页</a><?php if(is_array($MODULE)) { foreach($MODULE as $m) { ?><?php if($m['ismenu']) { ?><a href="<?php echo $m['linkurl'];?>"<?php if($m['isblank']) { ?> target="_blank"<?php } ?>
><?php echo $m['name'];?></a><?php } ?>
<?php } } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
           <?php if(isset($MODULE['24'])) { ?> <li class="swhome"><a href="<?php echo $MODULE['24']['linkurl'];?>" target="_blank">帮助中心</a></li><?php } ?>
           <?php if($EXT['mobile_enable']) { ?><li class="h_wap"><a href="<?php echo $EXT['mobile_url'];?>mobile.php" target="_blank">手机版</a> </li><?php } ?>
        <?php if($head_mobile) { ?><li class="h_qrcode"><a href="javascript:Dqrcode();">二维码</a>&nbsp;</li><?php } ?>
           <?php if(isset($MODULE['16'])) { ?><li class="swhome"><a href="<?php echo $MODULE['16']['linkurl'];?>cart.php" rel="nofollow">购物车</a><span class="head_t gouwu" id="destoon_cart">0</span></li><?php } ?>
            </ul>
        </div>
    </div>
</div>
<div class="clear">
</div>
