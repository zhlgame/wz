<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if($DT_TOUCH) { ?>
<?php include template('headerwap', $module);?>
<div id="head-bar"><div class="head-bar"><div class="head-bar-title">手机版会员中心</div></div></div>
<div class="blank-20"></div>
<div class="blank-20"></div>
<div class="blank-20"></div>
<div class="user-info">
<?php if($_userid) { ?>
<a href="<?php echo $MURL;?>avatar.php" rel="external"><img src="<?php echo useravatar($_username, 'large');?>" width="64" height="64"/></a>
<div><a href="<?php echo $EXT['mobile_url'];?>my.php?action=member"><strong><?php echo $_truename;?></strong><br/>
帐号：<?php echo $_username;?></a></div>
<?php } else { ?>
<a href="<?php echo $EXT['mobile_url'];?>login.php?forward=my.php" data-transition="slideup"><img src="<?php echo useravatar($_username, 'large');?>" width="64" height="64"/></a>
<div><a href="<?php echo $EXT['mobile_url'];?>login.php?forward=my.php" data-transition="slideup"><strong>未登录</strong><br/>
按此登录或注册</a></div>
<?php } ?>
</div>
<?php if($_userid) { ?>
<div class="blank-20"></div>
<div class="list-set list-set-img">
<ul>
<li><div style="border:none;"><?php if($_message) { ?><em><?php echo $_message;?></em><?php } ?>
<img src="<?php echo $EXT['mobile_url'];?>static/img/my-message.png" width="24" height="24"/><a href="<?php echo $EXT['mobile_url'];?>message.php">站内信件</a></div></li>
<?php if($DT['im_web']) { ?>
<li><div><?php if($_chat) { ?><em><?php echo $_chat;?></em><?php } ?>
<img src="<?php echo $EXT['mobile_url'];?>static/img/my-chat.png" width="24" height="24"/><a href="<?php echo $EXT['mobile_url'];?>chat.php">站内交谈</a></div></li>
<?php } ?>
<?php if(isset($MODULE['16'])) { ?>
<li><div><?php if($_cart) { ?><em><?php echo $_cart;?></em><?php } ?>
<img src="<?php echo $EXT['mobile_url'];?>static/img/my-cart.png" width="24" height="24"/><a href="<?php echo $EXT['mobile_url'];?>cart.php">购物车</a></div></li>
<?php } ?>
</ul>
</div>
<?php } ?>
<div class="blank-20"></div>
<div class="list-set list-set-img">
<ul>
<li><div style="border:none;"><img src="<?php echo $EXT['mobile_url'];?>static/img/my-member.png" width="24" height="24"/><a href="<?php echo $EXT['mobile_url'];?>my.php?action=member">我的账户</a></div></li>
<li><div><img src="<?php echo $EXT['mobile_url'];?>static/img/my-info.png" width="24" height="24"/><a href="<?php echo $EXT['mobile_url'];?>my.php?action=info">信息管理</a></div></li>
<li><div><img src="<?php echo $EXT['mobile_url'];?>static/img/my-trade.png" width="24" height="24"/><a href="<?php echo $EXT['mobile_url'];?>my.php?action=trade">交易管理</a></div></li>
<?php if($MG['homepage'] || !$_userid) { ?>
<li><div><img src="<?php echo $EXT['mobile_url'];?>static/img/my-home.png" width="24" height="24"/><a href="<?php echo $EXT['mobile_url'];?>my.php?action=home">商铺设置</a></div></li>
<?php } ?>
</ul>
</div>
<?php include template('footerwap', $module);?>
<?php } else { ?>
<?php include template('header', $module);?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/index.css"/>
<div id="warn">
<?php if($_groupid > 5 && !$_edittime) { ?>
<div class="warn">贵公司尚未完善详细资料！完善的商业信息有助于获得别人的信任，结交潜在的商业伙伴，获取商业机会  <a href="edit.php?tab=2" class="t">现在就去完善»</a><span onClick="removeElement('warn')" style="float:right;margin:1px;width: 40px;height: 26px;line-height:26px;text-align: center;background:#FF9900;color:#fff;">关闭</span></div>
<?php } ?>
<?php if($vip && $havedays < 30 && $havedays > 0) { ?>
<div class="warn">尊敬的<?php echo $MG['groupname'];?>，您的<?php echo VIP;?>服务将在 <strong class="f_red"><?php echo $havedays;?></strong> 天后到期，为了不影响您的正常使用，请您尽快续费  <a href="vip.php?action=renew" class="t">立即续费»</a><span onClick="removeElement('warn')" style="float:right;margin:1px;width: 40px;height: 26px;line-height:26px;text-align: center;background:#FF9900;color:#fff;">关闭</span></div>
<?php } ?>
</div>
<div class="fl" style="height:848px;">
<div class="layout_purchase-content-main-top">
<div class="wkw-work_column">
<div class="wkw-work_column-info">
<span class="common-member">免费领取998元购买会员券</span>
</div>
<div class="wkw-work_company_info-buyer_protection">
<a href=""><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/index02.png" /></a>
</div>
<div class="work_company-renew">
<span class="common-member"><strong class="f_red"><?php echo $MG['groupname'];?></strong> </span>
<a href="<?php echo $MODULE['2']['linkurl'];?>grade.php?groupid=7#up" target="_blank" class="status-link"><?php if($_groupid == 6) { ?>[会员升级]<?php } else if($groupid == 8) { ?>[会员升级]<?php } else { ?>[点击续费]<?php } ?>
</a>
</div>
<div class="work_company-renew">
<a href="<?php echo $MODULE['2']['linkurl'];?>grade.php?groupid=7#up" target="_blank" class="status-link">加入<?php echo VIP;?>会员，</a>
</div>
<div class="work_company-renew">
<a href="<?php echo $MODULE['2']['linkurl'];?>grade.php?groupid=7#up" target="_blank" class="status-link">加入我们高级会员，我们让您轻松赚大钱</a>
</div>
<div class="wkw-work_column-reg_shili" <?php if($_groupid < 7) { ?><?php } else { ?>style="display: none;"<?php } ?>
>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/2385920_790723559.png">
<a href="<?php echo $MODULE['2']['linkurl'];?>grade.php?groupid=7#up" target="_blank" class="wk_link">开通实力商家（让生意更好做）</a>
</div>
</div>
</div>
<div class="layout_home-main">
<div class="trade_state">
<div class="bjgn">
<p>便捷</p><p>功能</p>
</div>
<div class="fr mt15">
<!--应用列表-->
<div class="wkw-work_header_app_panel-myapp-wrapper-info-list-block">
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=5&action=add"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/index09.png"><br>产品发布</a></div>                       
<div class="wkw-work_header_app_panel-myapp-wrapper-info-list-block">
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=6&action=add"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/index08.png"><br>求购发布</a></div>                     
<div class="wkw-work_header_app_panel-myapp-wrapper-info-list-block">
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=16&job=group&action=add" target="_blank"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/index10.png"><br>商城发布</a></div>      
<div class="wkw-work_header_app_panel-myapp-wrapper-info-list-block">
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=22&job=group&action=add" target="_blank"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/index14.png"><br>招商发布</a></div>       
<div class="wkw-work_header_app_panel-myapp-wrapper-info-list-block">
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=13&job=group&action=add" target="_blank"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/index15.png"><br>品牌发布</a></div>  
<div class="wkw-work_header_app_panel-myapp-wrapper-info-list-block">
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=8&job=group&action=add" target="_blank"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/index16.png"><br>展会发布</a></div>  
<div class="wkw-work_header_app_panel-myapp-wrapper-info-list-block">
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=18&job=group&action=add"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/index13.png"><br>圈子创建</a></div>                       
<!--应用列表-->
</div>
</div>
<div class="mkindex">
<div class="mkcon block">
<h1 class="h1_top"><span style="font-size:16px; font-weight:bold;">购物车</span><font class="size12 color_9 size12 nobold">（可以购买你想要的产品）</font></h1>
<div class="daka">
<div class="dakacon">
<p>可以去结算你购买的商品</p>
<h2 class="red"><script type="text/javascript">document.write(get_cart());</script></h2>
<p style="font-size:14px;">购买更靠谱的选择</p>
</div>
</div>
<div class="button_1">
<a href="<?php echo $MODULE['16']['linkurl'];?>cart.php">结算</a>
</div>
</div>
<div class="mkcon block">
<h1 class="h1_top"><span style="font-size:16px; font-weight:bold;">余额</span><font class="size12 color_9 size12 nobold">（可以查看商机，厂家采购）</font></h1>
<div class="daka">
<div class="dakacon">
<p class="color"><i class="daka1"></i><a>未充值成功率20%</a><i class="daka1"></i></p>
<h2 class="red"><?php echo $DT['money_sign'];?> <?php echo $my_money;?> <?php echo $DT['money_unit'];?></h2>
<p class="color"><i class="daka2"></i><a>充值后成功率80%</a><i class="daka2"></i></p>
</div>
</div>
<div class="button_1">
<a href="charge.php?action=pay">充值</a>
</div>
</div>
<div class="mkcon block last">
<h1 class="h1_top"><span style="font-size:16px; font-weight:bold;">积分兑换</span><font class="size12 color_9 size12 nobold">（可以兑换更多产品）</font></h1>
<div class="daka">
<div class="dakacon">
<p>积分可以兑换广告位，兑换抵劵</p>
<h2 class="red"><?php echo $_credit;?></h2>
<p style="font-size:14px;">轻松赚积分，免费做推广</p>
</div>
</div>
<div class="button_1">
<a href="credit.php?action=thgg">兑换</a>
</div>
</div>
</div>
<div class="dianpu block">
<h1 class="dianpuhead"><span>店铺</span><a class="dianpu-add" href="<?php echo userurl($_username);?>" target="_blank">发布店铺</a></h1>
<div class="dianpu_main">
<div class="dianpu_t fl">
<div class="fl">
旺铺编号：<?php echo $_userid;?>      更新时间：<?php echo timetodate($logintime, 5);?>     共累计登陆：<?php echo $logintimes;?> 次     旺铺流量统计： <span class="js_post_pv"><?php echo $hits;?> </span>
</div>
<p class="dianpu_t_a"><a href="home.php">店铺管理</a> | <a href="<?php echo userurl($_username);?>" target="_blank">预览</a></p>
</div>
<div class="dianpu_m fl">
<div class="fl dianpu_m_xx">
<span class="dianpu_m_xx_pic fl"><a href="" target="_blank"><img src="<?php echo $thumb;?>" width="100" height="75"></a></span>
<div class="dianpu_m_xx_r fl">
<h2 class="h2_top fl">
<font class="fl">
<a href="<?php echo userurl($_username);?>" target="_blank"><?php echo $company;?></a>
</font>        
</h2>
<p class="p_1 fl">主要经营范围:<?php echo $business;?></p>
<p class="p_1 fl"><font class="fl">店铺完整度：</font><em class="fl"><i class="i_30 fl"></i></em><s class="fl arial">88%</s>
<a href="edit.php">去完善>></a></p>
</div>
</div>
<div class="dianpu_m_zt fl">
<p>信息排名太低，建议每一天进行刷新，让你的信息排名更靠前 <a href="<?php echo $DT['file_my'];?>?mid=5&action=add" target="_blank">刷新</a></p>
</div>
<div class="dianpu_m_cz fl">
<a href="spread.php" target="_blank">购买</a></div>
</div>
<?php if($MOD['vmember']) { ?>
<div class="dianpu_bd fl">
<ul>
<li><a href="validate.php?action=truename"><?php if($vtruename) { ?><i class="i01cur"></i><p>已绑定身份证</p><?php } else { ?><i class="i01"></i><p>未绑定身份证</p><?php } ?>
</a></li>
<li><a href="validate.php?action=company"><?php if($vcompany) { ?><i class="i02cur"></i><p>已认证营业执照</p><?php } else { ?><i class="i02"></i><p>未认证营业执照</p><?php } ?>
</a></li>
<li><a href="validate.php?action=company"><?php if($vcompany) { ?><i class="i03cur"></i><p>已认证资格证书</p><?php } else { ?><i class="i03"></i><p>未认证资格证书</p><?php } ?>
</a></li>
<li><a href="validato.php"><?php if($vdeposit) { ?><i class="i10cur"></i><p>已投交易保障金</p><?php } else { ?><i class="i10"></i><p>未投交易保障金</p><?php } ?>
</a></li>
<li><a href="ask.php"><?php if($validated) { ?><i class="i09cur"></i><p>已通过诚信认证</p><?php } else { ?><i class="i09"></i><p>未通过诚信认证</p><?php } ?>
</a></li>
<li><a href="trade.php?action=bind"><?php if($vtrade) { ?><i class="i04cur"></i><p>已绑定支付宝</p><?php } else { ?><i class="i04"></i><p>未绑定支付宝</p><?php } ?>
</a></li>
<li><a href="validate.php?action=bank"><?php if($vbank) { ?><i class="i08cur"></i><p>已绑定银行认证</p><?php } else { ?><i class="i08"></i><p>未绑定银行认证</p><?php } ?>
</a></li>
<li><a href="validate.php?action=email" target="_blank"><?php if($vemail) { ?><i class="i05cur"></i><p>已绑定邮箱账号</p><?php } else { ?><i class="i05"></i><p>未绑定邮箱账号</p><?php } ?>
</a></li>
<li><a href="validate.php?action=mobile"><?php if($vmobile) { ?><i class="i06cur"></i><p>已绑定手机号码</p><?php } else { ?><i class="i06"></i><p>未绑定手机号码</p><?php } ?>
</a></li>
<li><a href="oauth.php"><?php if($qq) { ?><i class="i12cur"></i><p>已绑定QQ账号</p><?php } else { ?><i class="i12"></i><p>未绑定QQ账号</p><?php } ?>
</a></li>
</ul>
</div>
<?php } ?>
</div>
</div>
</div>
<div class="layout_home-slide">
<div class="chongzhiindex">
<div class="header">
<div class="header-title">在线充值（支持以下）</div>
</div>
<div class="chongzhi block">
<div class="fl">
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/zhifu1.png" height="40"/>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/zhifu2.png" height="40"/>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/zhifu3.png" height="50"/>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/zhifu4.png" height="50"/>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/zhifu5.png" height="50"/>
</div>
</div>
</div>
<div class="layout_home-slide-notice">
<div class="g_block_header"><div class="g_block_header-title">系统消息</div><div class="g_block_header-op"><span class="work_notice-date">
2016-<script language="javascript"> 
d=new Date();
date=d.getDate();
month=d.getMonth()+1;
year=d.getYear();
document.write(month);
</script>-<script language="javascript"> 
d=new Date();
date=d.getDate();
month=d.getMonth()+1;
year=d.getYear();
document.write(date);
</script>
 <script language="javascript"> 
d=new Date();
date=d.getDate();
month=d.getMonth()+1;
year=d.getYear();
if(d.getDay()==5) document.write("周五")
if(d.getDay()==6) document.write("周六")
if(d.getDay()==0) document.write("周天")
if(d.getDay()==1) document.write("周一")
if(d.getDay()==2) document.write("周二")
if(d.getDay()==3) document.write("周三")
if(d.getDay()==4) document.write("周四")
</script></span></div></div>
<div class="work_notice block">
<ul class="work_notice-list">
<?php if($sys) { ?>
<?php if(is_array($sys)) { foreach($sys as $v) { ?>
<a class="work_notice-list-item" href="message.php?action=show&itemid=<?php echo $v['itemid'];?>" title="<?php echo $v['title'];?>" target="_blank"><?php echo $v['title'];?></a>
<?php } } ?>
<?php } else { ?>
<a class="work_notice-list-item" href="" target="_blank"><font color="red"> 暂无消息</font></a>
<?php } ?>
</ul>
</div>
</div>
<div class="layout_home-slide-newbie">
<div class="snow_newbie block">
<div class="fui-t">
<ul class="fui-tab-ul">
<li class="bg01" id="gy11" onmousemove="bian(1,'gy1','gycon','bg01','bg02')"><a href="javascript:void(0);">买家入门</a></li>
<li class="bg02" id="gy12" onmousemove="bian(2,'gy1','gycon','bg01','bg02')"><a href="javascript:void(0);">卖家入门</a></li>
<li class="fui-tab-more"><a href="<?php echo $MODULE['27']['linkurl'];?>" target="_blank" class="a-more">更多 <span style="font-family:simson">></span></a></li>            
</ul>
</div>
<div class="fui-d">                       
<div class="fui-tab-b" style="display: block;" id="gycon1">
<?php $tags=tag("table=announce&condition=typeid=12&length=30&datetype=2&target=_blank&order=listorder desc,addtime desc&pagesize=7&template=null")?>
<ul>
<?php if(is_array($tags)) { foreach($tags as $t) { ?>
<li><a href="<?php echo $t['linkurl'];?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
 title="<?php echo $t['alt'];?>"><?php if($cname) { ?><span>【<?php echo $cname;?>】</span><?php } ?>
<?php echo $t['title'];?></a></li>
<?php } } ?>
</ul>
</div>
<div class="fui-tab-b" style="display: none;" id="gycon2">
<?php $tags=tag("table=announce&condition=typeid=11&length=30&datetype=2&target=_blank&order=listorder desc,addtime desc&pagesize=7&template=null")?>
<ul>
<?php if(is_array($tags)) { foreach($tags as $t) { ?>
<li><a href="<?php echo $t['linkurl'];?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
 title="<?php echo $t['alt'];?>"><?php if($cname) { ?><span>【<?php echo $cname;?>】</span><?php } ?>
<?php echo $t['title'];?></a></li>
<?php } } ?>
</ul>
</div>
</div>
</div>
</div>
<div class="layout_home-slide-suggestion block">
<div class="g_block_header"><div class="g_block_header-title">为您推荐</div><div class="g_block_header-op"><a target="_blank" href="<?php echo $MODULE['5']['linkurl'];?>">更多</a></div></div>
<div id="register" class="work_suggestion-wrapper" style="width:238px; overflow:hidden;">
<?php $tags=tag("moduleid=5&length=20&condition=status=3 and thumb<>''&areaid=$cityid&pagesize=8&order=edittime desc&template=null");?>
 <?php if(is_array($tags)) { foreach($tags as $k => $v) { ?> 
<div class="work_suggestion-wrapper-box">
<div class="work_suggestion-wrapper-box-img">
<a class="irecom_watch" target="_blank" href="<?php echo $v['linkurl'];?>"><img src="<?php echo $v['thumb'];?>" /></a>
</div>
<div class="work_suggestion-wrapper-box-info">
<div class="work_suggestion-wrapper-box-info-title"><?php echo $v['title'];?></div>
<div class="work_suggestion-wrapper-box-info-price">价格：<?php echo $t['price'];?></div>
<div class="work_suggestion-wrapper-box-info-sale">地区：<?php echo area_pos($t['areaid'], '/', 1);?></div>
</div>
</div>
<?php } } ?>
</div>
<script type="text/javascript" src="<?php echo $MODULE['2']['linkurl'];?>js/picmarquee.js"></script>
        <script type="text/javascript">
            playMarquee();
            function playMarquee()
            {
                //触发图片滚动
                var scrollPic_01 = new ScrollPic();
                scrollPic_01.scrollContId   = "register"; //内容容器ID
                scrollPic_01.arrLeftId      = "promarleftbtn";//左箭头ID
                scrollPic_01.arrRightId     = "promarrightbtn"; //右箭头ID
                scrollPic_01.frameWidth     = 240;//显示框宽度
                scrollPic_01.pageWidth      = 240; //翻页宽度
                scrollPic_01.speed          = 30; //移动速度(单位毫秒，越小越快)
                scrollPic_01.space          = 30; //每次移动像素(单位px，越大越快)
                scrollPic_01.autoPlay       = true; //自动播放
                scrollPic_01.autoPlayTime   = 3; //自动播放间隔时间(秒)
                scrollPic_01.initialize(); //初始化
            }
        </script>
</div>
</div>
</div>
<div class="fl">
<div class="indexlist">
<div class="ts block">
<h3>提示：</h3>
<p>您尚未发布过有关行业产品的产品信息，请单击旁边立即发布信息。<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=5&action=add" class="red">【点击立即发布】</a></p>
<p><a href="<?php echo $MODULE['27']['linkurl'];?>" target="_blank" class="red">【技巧】</a>经常刷新供求信息有利于提高产品竞争力，提高信息的排名。会员每隔10分钟可刷新一次，普通会员每天可刷新一次！</p>
<p>没有生意？买家关注少？现在加入<?php echo VIP;?>即可享受无商机不付费服务。</p>
</div>
<div class="layout_home-slide-newbie">
<div class="snow_newbie block">
<div class="fui-t">
<ul class="fui-tab-ul">
<li class="bg01" id="list11" onmousemove="bian(1,'list1','listcon','bg01','bg02')"><a href="javascript:void(0);">我的产品(<?php echo $db->count($DT_PRE.'sell_5', 'status=3 and username="'.$_username.'"', 1800);?>)</a></li>
<li class="bg02" id="list12" onmousemove="bian(2,'list1','listcon','bg01','bg02')"><a href="javascript:void(0);">我的求购（<?php echo $db->count($DT_PRE.'buy_6', 'status=3 and username="'.$_username.'"', 1800);?>）</a></li>
<li class="bg03" id="list13" onmousemove="bian(3,'list1','listcon','bg01','bg02')"><a href="javascript:void(0);">出售宝贝（<?php echo $db->count($DT_PRE.'mall', 'status=3 and username="'.$_username.'"', 1800);?>）</a></li>
<li class="bg04" id="list14" onmousemove="bian(4,'list1','listcon','bg01','bg02')"><a href="javascript:void(0);">我的贴子（<?php echo $db->count($DT_PRE.'club', 'status=3 and username="'.$_username.'"', 1800);?>）</a></li>     
</ul>
</div>
<div class="fui-d">                       
<div class="fui-tab-b" id="listcon1">
<div class="sealist">
<form action="<?php echo $MODULE['5']['linkurl'];?>search.php" target="_blank">
<input type="hidden" name="spread" value="0" id="destoon_spread"/>
<input type="hidden" name="moduleid" value="5" id="destoon_moduleid"/>
<input class="ipt-text-buyer" type="text" size="30" name="kw" value="<?php echo $kw;?>" placeholder="请输入要找的产品关键词"/> 
<input type="submit" value=" 全站搜索 " class="sealistbtn"/>
</form>
</div>
<div class="indexlistmain">
<div class="top">
<table cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td width="17%">图片</td>
<td width="20%">标题</td>
<td width="15%">发布时间</td>
<td width="15%">更新时间</td>
<td width="13%">浏览</td>
<td width="20%">管理</td>
</tr>
</tbody></table>
</div>
<div class="main">
 <?php $tags=tag("moduleid=5&length=20&condition=status=3 and username='".$username."'&areaid=$cityid&pagesize=4&order=edittime desc&template=null");?>
 <?php if(is_array($tags)) { foreach($tags as $k => $v) { ?> 
<table cellpadding="0" cellspacing="0" width="100%" class="xx01">
<tr class="pro">
<td width="3%"></td>
<td width="14%"><a href="javascript:_preview('<?php echo $v['thumb'];?>');"><img src="<?php if($v['thumb']) { ?><?php echo $v['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic50.gif<?php } ?>
" width="120" class="thumb"/></a></td>
<td width="24%">
<div class="name">
<p><?php if($v['status']==3) { ?><a href="<?php echo $v['linkurl'];?>" target="_blank"  class="blue"><?php } else { ?><a href="<?php echo $DT['file_my'];?>?mid=<?php echo $mid;?>&action=edit&itemid=<?php echo $v['itemid'];?>"  class="blue"><?php } ?>
<span>【供应】</span><?php echo $v['title'];?></a></p>
</div>
<p style="text-align:left;width:240px"> 信息状态： <?php if($v['level']==1) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_home.gif" title="网站首页推广"/> <?php } ?>
<?php if($v['elite']) { ?><span class="f_red" title="公司主页推荐">[橱窗推广]</span> <?php } ?>
 <?php if($v['status']==1 && $v['note']) { ?> <a href="javascript:" onclick="alert('<?php echo $v['note'];?>');"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/why.gif" title="未通过原因"/></a><?php } ?>
</p>
<p style="text-align:left;">  产品编号：<?php echo $v['itemid'];?></p>
</td>
<td width="13%"><p title="发布时间 <?php echo timetodate($v['addtime'], 5);?>"><?php echo timetodate($v['edittime'], 5);?></p></td>
<td width="13%"><p title="更新时间 <?php echo timetodate($v['edittime'], 5);?>"><?php echo timetodate($v['addtime'], 5);?></p></td>
<td colspan="2">
<div class="cz1">
<p style="width:125px;"><?php echo $v['hits'];?></p>
<p style="width:190px;">
<a href="<?php echo $DT['file_my'];?>?mid=5&action=edit&itemid=<?php echo $v['itemid'];?>">修改</a>
<?php if($MG['delete']) { ?><a href="<?php echo $DT['file_my'];?>?mid=5&action=delete&itemid=<?php echo $v['itemid'];?>" onclick="return confirm('确定要删除吗？此操作将不可撤销');">删除</a><?php } ?>
<?php if($MG['copy']) { ?> <a href="<?php echo $DT['file_my'];?>?mid=5&action=add&itemid=<?php echo $v['itemid'];?>&catid=<?php echo $v['catid'];?>" title="复制信息">复制信息</a><?php } ?>
<a href="<?php echo $v['linkurl'];?>" class="last0">详情</a>
</p>
<div class="cz2 fl">
<a href="ask.php?action=add">黄金展位</a>
<a href="ask.php?action=add">搜索推广</a>
<a href="ask.php?action=add">首页推广</a>
<a href="ask.php?action=add">百度推广</a>
<a href="ask.php?action=add" class="last0">分站推广</a>
</div>
</div>
</td>
</tr>
<tr class="jian">
<td colspan="2"></td>
<td colspan="5">
<div class="resume">
<div class="jian1">
<p>提高产品曝光度，助您更快成交</p>
<a class="dianji"></a>
</div>
<div class="showbox_more">
<div class="typediv">
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="td_w1"><span class="icon_zhineng_b"></span></td>
<td class="td_w2"><span class="td_title">搜索排名</span><span class="ff-arial">72=0%</span><span class="fc-70">同行使用</span></td>
<td class="td_w3"><span class="fc-70">每天最低3元起即可享用</span></td>
<td class="td_w4"><span class="price_nb">30</span><span class="fc-70">积分=3元/点击起</span>
<span class="icon_zhekou active_bottom">
<span class="zkbg_l js-mouse-zhe">最低价</span><span class="zkbg_r"></span>
</span>
</td>
<td class="td_w5"><a class="btnorg_79x31" href="ask.php?action=add">立即推广</a></td>
</tr>
</tbody>
</table>
</div>
<div class="typediv">
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="td_w1"><span class="icon_jingjia_b"></span></td>
<td class="td_w2"><span class="td_title">黄金展位</span><span class="ff-arial">90%</span><span class="fc-70">同行使用</span></td>
<td class="td_w3"><span class="fc-70">效果付费点击一次0.1元/起</span></td>
<td class="td_w4"><span class="price_nb">1</span><span class="fc-70">积分=0.1元/点击起</span>
<span class="icon_zhekou active_bottom">
<span class="zkbg_l js-mouse-zhe">热销低价</span><span class="zkbg_r"></span>
</span>
</td>
<td class="td_w5"><a class="btnorg_79x31" href="ask.php?action=add">立即推广</a></td>
</tr>
</tbody>
</table>
</div>
<div class="typediv">
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="td_w1"><span class="icon_shuaxin_b"></span></td>
<td class="td_w2"><span class="td_title">首页排名</span><span class="ff-arial">88%</span><span class="fc-70">同行使用</span></td>
<td class="td_w3"><span class="fc-70">超级效果点击一次0.5元/起</span></td>
<td class="td_w4"><span class="price_nb">5</span><span class="fc-70">积分=0.5元/点击起</span>
<span class="icon_zhekou active_bottom">
<span class="zkbg_l js-mouse-zhe">疯狂低价</span><span class="zkbg_r"></span>
</span>
</td>
<td class="td_w5"><a class="btnorg_79x31" href="ask.php?action=add">立即推广</a></td>
</tr>
</tbody>
</table>
</div>
<div class="typediv">
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="td_w1"><span class="icon_jianli_b"></span></td>
<td class="td_w2"><span class="td_title">分站首页排名</span><span class="ff-arial">62%</span><span class="fc-70">同行使用</span></td>
<td class="td_w3"><span class="fc-70">超级效果点击一次0.3元/起</span></td>
<td class="td_w4"><span class="price_nb">3</span><span class="fc-70">积分=0.3元/点击起</span>
<span class="icon_zhekou active_bottom">
<span class="zkbg_l js-mouse-zhe">效果价格</span><span class="zkbg_r"></span>
</span>
</td>
<td class="td_w5"><a class="btnorg_79x31" href="ask.php?action=add">立即推广</a></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</td>
</tr>
</table>
<?php } } ?>
<div class="pages00"><span class="nolink"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=5">我的更多上架产品</a></span></div>
</div>
</div>
</div>
<div class="fui-tab-b" id="listcon2" style="display:none;">
<div class="sealist">
<form action="<?php echo $MODULE['6']['linkurl'];?>search.php" target="_blank">
<input type="hidden" name="spread" value="0" id="destoon_spread"/>
<input type="hidden" name="moduleid" value="5" id="destoon_moduleid"/>
<input class="ipt-text-buyer" type="text" size="30" name="kw" value="<?php echo $kw;?>" placeholder="请输入要采购商品关键词"/> 
<input type="submit" value=" 全站搜索 " class="sealistbtn"/>
</form>
</div>
<!--2轮显示-->
<div class="indexlistmain">
<div class="top">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td width="17%">图片</td>
<td width="20%">标题</td>
<td width="15%">发布时间</td>
<td width="15%">更新时间</td>
<td width="13%">浏览</td>
<td width="20%">管理</td>
</tr>
</table>
</div>
<div class="main">
<?php $tags=tag("moduleid=6&length=20&condition=status=3 and username='".$username."'&areaid=$cityid&pagesize=4&order=edittime desc&template=null");?>
 <?php if(is_array($tags)) { foreach($tags as $k => $v) { ?> 
<table cellpadding="0" cellspacing="0" width="100%" class="xx01">
<tr class="pro">
<td width="3%"></td>
<td width="14%"><a href="javascript:_preview('<?php echo $v['thumb'];?>');"><img src="<?php if($v['thumb']) { ?><?php echo $v['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic50.gif<?php } ?>
" width="120" class="thumb"/></a></td>
<td width="24%">
<div class="name">
<p><?php if($v['status']==3) { ?><a href="<?php echo $v['linkurl'];?>" target="_blank"  class="blue"><?php } else { ?><a href="<?php echo $DT['file_my'];?>?mid=6&action=edit&itemid=<?php echo $v['itemid'];?>"  class="blue"><?php } ?>
<span>【采购】</span><?php echo $v['title'];?></a></p>
</div>
<p style="text-align:left;width:240px"> 信息状态： <?php if($v['status']==1 && $v['note']) { ?> <a href="javascript:" onclick="alert('<?php echo $v['note'];?>');"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/why.gif" title="未通过原因"/></a><?php } ?>
</p>
<p style="text-align:left;">  产品编号：<?php echo $v['itemid'];?></p>
</td>
<td width="13%"><p title="发布时间 <?php echo timetodate($v['addtime'], 5);?>"><?php echo timetodate($v['edittime'], 5);?></p></td>
<td width="13%"><p title="更新时间 <?php echo timetodate($v['edittime'], 5);?>"><?php echo timetodate($v['addtime'], 5);?></p></td>
<td colspan="2">
<div class="cz1">
<p style="width:125px;"><?php echo $v['hits'];?></p>
<p style="width:190px;">
<a href="<?php echo $DT['file_my'];?>?mid=6&action=edit&itemid=<?php echo $v['itemid'];?>">修改</a>
<?php if($MG['delete']) { ?><a href="<?php echo $DT['file_my'];?>?mid=6&action=delete&itemid=<?php echo $v['itemid'];?>" onclick="return confirm('确定要删除吗？此操作将不可撤销');">删除</a><?php } ?>
<?php if($MG['copy']) { ?> <a href="<?php echo $DT['file_my'];?>?mid=6&action=add&itemid=<?php echo $v['itemid'];?>&catid=<?php echo $v['catid'];?>" title="复制信息">复制信息</a><?php } ?>
<a href="<?php echo $v['linkurl'];?>" class="last0">详情</a>
</p>
<div class="cz2 fl">
<a href="ask.php?action=add">黄金展位</a>
<a href="ask.php?action=add">搜索推广</a>
<a href="ask.php?action=add">首页推广</a>
<a href="ask.php?action=add">百度推广</a>
<a href="ask.php?action=add" class="last0">分站推广</a>
</div>
</div>
</td>
</tr>
<tr class="jian">
<td colspan="2"></td>
<td colspan="5">
<div class="resume">
<div class="jian1">
<p>提高帖子曝光，助您更快成交</p>
<a class="dianji"></a>
</div>
<div class="showbox_more">
<div class="typediv">
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="td_w1"><span class="icon_zhineng_b"></span></td>
<td class="td_w2"><span class="td_title">搜索排名</span><span class="ff-arial">72%</span><span class="fc-70">同行使用</span></td>
<td class="td_w3"><span class="fc-70">每天最低3元起即可享用</span></td>
<td class="td_w4"><span class="price_nb">30</span><span class="fc-70">积分=3元/点击起</span>
<span class="icon_zhekou active_bottom">
<span class="zkbg_l js-mouse-zhe">最低价</span><span class="zkbg_r"></span>
</span>
</td>
<td class="td_w5"><a class="btnorg_79x31" href="ask.php?action=add">立即推广</a></td>
</tr>
</tbody>
</table>
</div>
<div class="typediv">
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="td_w1"><span class="icon_jingjia_b"></span></td>
<td class="td_w2"><span class="td_title">黄金展位</span><span class="ff-arial">72%</span><span class="fc-70">同行使用</span></td>
<td class="td_w3"><span class="fc-70">效果付费点击一次0.1元/起</span></td>
<td class="td_w4"><span class="price_nb">1</span><span class="fc-70">积分=0.1元/点击起</span>
<span class="icon_zhekou active_bottom">
<span class="zkbg_l js-mouse-zhe">热销低价</span><span class="zkbg_r"></span>
</span>
</td>
<td class="td_w5"><a class="btnorg_79x31" href="ask.php?action=add">立即推广</a></td>
</tr>
</tbody>
</table>
</div>
<div class="typediv">
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="td_w1"><span class="icon_shuaxin_b"></span></td>
<td class="td_w2"><span class="td_title">首页排名</span><span class="ff-arial">72%</span><span class="fc-70">同行使用</span></td>
<td class="td_w3"><span class="fc-70">超级效果点击一次0.5元/起</span></td>
<td class="td_w4"><span class="price_nb">5</span><span class="fc-70">积分=0.5元/点击起</span>
<span class="icon_zhekou active_bottom">
<span class="zkbg_l js-mouse-zhe">疯狂低价</span><span class="zkbg_r"></span>
</span>
</td>
<td class="td_w5"><a class="btnorg_79x31" href="ask.php?action=add">立即推广</a></td>
</tr>
</tbody>
</table>
</div>
<div class="typediv">
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="td_w1"><span class="icon_jianli_b"></span></td>
<td class="td_w2"><span class="td_title">分站首页排名</span><span class="ff-arial">72%</span><span class="fc-70">同行使用</span></td>
<td class="td_w3"><span class="fc-70">超级效果点击一次0.3元/起</span></td>
<td class="td_w4"><span class="price_nb">3</span><span class="fc-70">积分=0.3元/点击起</span>
<span class="icon_zhekou active_bottom">
<span class="zkbg_l js-mouse-zhe">效果价格</span><span class="zkbg_r"></span>
</span>
</td>
<td class="td_w5"><a class="btnorg_79x31" href="ask.php?action=add">立即推广</a></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</td>
</tr>
</table>
<?php } } ?>
<div class="pages00"><span class="nolink"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=6">我的更多采购</a></span></div>
</div>
</div>
</div>
<div class="fui-tab-b" id="listcon3" style="display:none;">
<div class="sealist">
<form action="<?php echo $MODULE['16']['linkurl'];?>search.php" target="_blank">
<input type="hidden" name="spread" value="0" id="destoon_spread"/>
<input type="hidden" name="moduleid" value="5" id="destoon_moduleid"/>
<input class="ipt-text-buyer" type="text" size="30" name="kw" value="<?php echo $kw;?>" placeholder="请输入要淘的宝贝关键词"/> 
<input type="submit" value=" 全站搜索 " class="sealistbtn"/>
</form>
</div>
<!--3轮显示-->
<div class="indexlistmain">
<div class="top">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td width="17%">图片</td>
<td width="20%">标题</td>
<td width="15%">发布时间</td>
<td width="15%">更新时间</td>
<td width="13%">浏览</td>
<td width="20%">管理</td>
</tr>
</table>
</div>
<div class="main">
<?php $tags=tag("moduleid=16&length=20&condition=status=3 and username='".$username."'&areaid=$cityid&pagesize=4&order=edittime desc&template=null");?>
 <?php if(is_array($tags)) { foreach($tags as $k => $v) { ?> 
<table cellpadding="0" cellspacing="0" width="100%" class="xx01">
<tr class="pro">
<td width="3%"></td>
<td width="14%"><a href="javascript:_preview('<?php echo $v['thumb'];?>');"><img src="<?php if($v['thumb']) { ?><?php echo $v['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic50.gif<?php } ?>
" width="120" class="thumb"/></a></td>
<td width="24%">
<div class="name">
<p><?php if($v['status']==3) { ?><a href="<?php echo $v['linkurl'];?>" target="_blank"  class="blue"><?php } else { ?><a href="<?php echo $DT['file_my'];?>?mid=16&action=edit&itemid=<?php echo $v['itemid'];?>"  class="blue"><?php } ?>
<span>【商城】</span><?php echo $v['title'];?></a></p>
</div>
<p style="text-align:left;width:240px"> 信息状态： <?php if($v['level']==1) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_home.gif" title="网站首页推广"/> <?php } ?>
<?php if($v['elite']) { ?><span class="f_red" title="公司主页推荐">[橱窗推广]</span> <?php } ?>
 <?php if($v['status']==1 && $v['note']) { ?> <a href="javascript:" onclick="alert('<?php echo $v['note'];?>');"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/why.gif" title="未通过原因"/></a><?php } ?>
</p>
<p style="text-align:left;">  产品编号：<?php echo $v['itemid'];?></p>
</td>
<td width="13%"><p title="发布时间 <?php echo timetodate($v['addtime'], 5);?>"><?php echo timetodate($v['edittime'], 5);?></p></td>
<td width="13%"><p title="更新时间 <?php echo timetodate($v['edittime'], 5);?>"><?php echo timetodate($v['addtime'], 5);?></p></td>
<td colspan="2">
<div class="cz1">
<p style="width:125px;"><?php echo $v['hits'];?></p>
<p style="width:190px;">
<a href="<?php echo $DT['file_my'];?>?mid=16&action=edit&itemid=<?php echo $v['itemid'];?>">修改</a>
<?php if($MG['delete']) { ?><a href="<?php echo $DT['file_my'];?>?mid=16&action=delete&itemid=<?php echo $v['itemid'];?>" onclick="return confirm('确定要删除吗？此操作将不可撤销');">删除</a><?php } ?>
<?php if($MG['copy']) { ?> <a href="<?php echo $DT['file_my'];?>?mid=16&action=add&itemid=<?php echo $v['itemid'];?>&catid=<?php echo $v['catid'];?>" title="复制信息">复制信息</a><?php } ?>
<a href="<?php echo $v['linkurl'];?>" class="last0">详情</a>
</p>
<div class="cz2 fl">
<a href="ask.php?action=add">黄金展位</a>
<a href="ask.php?action=add">搜索推广</a>
<a href="ask.php?action=add">首页推广</a>
<a href="ask.php?action=add">百度推广</a>
<a href="ask.php?action=add" class="last0">分站推广</a>
</div>
</div>
</td>
</tr>
<tr class="jian">
<td colspan="2"></td>
<td colspan="5">
<div class="resume">
<div class="jian1">
<p>提高帖子曝光，助您更快成交</p>
<a class="dianji"></a>
</div>
<div class="showbox_more">
<div class="typediv">
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="td_w1"><span class="icon_zhineng_b"></span></td>
<td class="td_w2"><span class="td_title">搜索排名</span><span class="ff-arial">72%</span><span class="fc-70">同行使用</span></td>
<td class="td_w3"><span class="fc-70">每天最低3元起即可享用</span></td>
<td class="td_w4"><span class="price_nb">30</span><span class="fc-70">积分=3元/点击起</span>
<span class="icon_zhekou active_bottom">
<span class="zkbg_l js-mouse-zhe">最低价</span><span class="zkbg_r"></span>
</span>
</td>
<td class="td_w5"><a class="btnorg_79x31" href="ask.php?action=add">立即推广</a></td>
</tr>
</tbody>
</table>
</div>
<div class="typediv">
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="td_w1"><span class="icon_jingjia_b"></span></td>
<td class="td_w2"><span class="td_title">黄金展位</span><span class="ff-arial">72%</span><span class="fc-70">同行使用</span></td>
<td class="td_w3"><span class="fc-70">效果付费点击一次0.1元/起</span></td>
<td class="td_w4"><span class="price_nb">1</span><span class="fc-70">积分=0.1元/点击起</span>
<span class="icon_zhekou active_bottom">
<span class="zkbg_l js-mouse-zhe">热销低价</span><span class="zkbg_r"></span>
</span>
</td>
<td class="td_w5"><a class="btnorg_79x31" href="ask.php?action=add">立即推广</a></td>
</tr>
</tbody>
</table>
</div>
<div class="typediv">
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="td_w1"><span class="icon_shuaxin_b"></span></td>
<td class="td_w2"><span class="td_title">首页排名</span><span class="ff-arial">72%</span><span class="fc-70">同行使用</span></td>
<td class="td_w3"><span class="fc-70">超级效果点击一次0.5元/起</span></td>
<td class="td_w4"><span class="price_nb">5</span><span class="fc-70">积分=0.5元/点击起</span>
<span class="icon_zhekou active_bottom">
<span class="zkbg_l js-mouse-zhe">疯狂低价</span><span class="zkbg_r"></span>
</span>
</td>
<td class="td_w5"><a class="btnorg_79x31" href="ask.php?action=add">立即推广</a></td>
</tr>
</tbody>
</table>
</div>
<div class="typediv">
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="td_w1"><span class="icon_jianli_b"></span></td>
<td class="td_w2"><span class="td_title">分站首页排名</span><span class="ff-arial">72%</span><span class="fc-70">同行使用</span></td>
<td class="td_w3"><span class="fc-70">超级效果点击一次0.3元/起</span></td>
<td class="td_w4"><span class="price_nb">3</span><span class="fc-70">积分=0.3元/点击起</span>
<span class="icon_zhekou active_bottom">
<span class="zkbg_l js-mouse-zhe">效果价格</span><span class="zkbg_r"></span>
</span>
</td>
<td class="td_w5"><a class="btnorg_79x31" href="ask.php?action=add">立即推广</a></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</td>
</tr>
</table>
<?php } } ?>
<div class="pages00"><span class="nolink"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=16">我的更多上架宝贝</a></span></div>
</div>
</div>
</div>
<div class="fui-tab-b" id="listcon4" style="display:none;">
<div class="sealist">
<form action="<?php echo $MODULE['18']['linkurl'];?>search.php" target="_blank">
<input type="hidden" name="spread" value="0" id="destoon_spread"/>
<input type="hidden" name="moduleid" value="5" id="destoon_moduleid"/>
<input class="ipt-text-buyer" type="text" size="30" name="kw" value="<?php echo $kw;?>" placeholder="请输入要看的圈友贴关键词"/> 
<input type="submit" value=" 全站搜索 " class="sealistbtn"/>
</form>
</div>
<!--4轮显示-->
<div class="indexlistmain">
<div class="top">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td width="17%">图片</td>
<td width="20%">标题</td>
<td width="15%">发布时间</td>
<td width="15%">更新时间</td>
<td width="13%">浏览</td>
<td width="20%">管理</td>
</tr>
</table>
</div>
<div class="main">
<?php $tags=tag("moduleid=18&table=club&length=20&condition=status=3 and username='".$username."'&areaid=$cityid&pagesize=4&order=edittime desc&template=null");?>
 <?php if(is_array($tags)) { foreach($tags as $k => $v) { ?> 
<table cellpadding="0" cellspacing="0" width="100%" class="xx01">
<tr class="pro">
<td width="3%"></td>
<td width="14%"><a href="javascript:_preview('<?php echo $v['thumb'];?>');"><img src="<?php if($v['thumb']) { ?><?php echo $v['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic50.gif<?php } ?>
" width="120" class="thumb"/></a></td>
<td width="24%">
<div class="name">
<p><?php if($v['status']==3) { ?><a href="<?php echo $v['linkurl'];?>" target="_blank"  class="blue"><?php } else { ?><a href="<?php echo $DT['file_my'];?>?mid=18&action=edit&itemid=<?php echo $v['itemid'];?>" class="blue"><?php } ?>
<span>【社区】</span><?php echo $v['title'];?></a></p>
</div>
<p style="text-align:left;width:240px"> 帖子摘要：  <?php echo dsubstr($v['introduce'], 60, '..');?></p>
<p style="text-align:left;">  产品编号：<?php echo $v['itemid'];?></p>
</td>
<td width="13%"><p title="发布时间 <?php echo timetodate($v['addtime'], 5);?>"><?php echo timetodate($v['edittime'], 5);?></p></td>
<td width="13%"><p title="更新时间 <?php echo timetodate($v['edittime'], 5);?>"><?php echo timetodate($v['addtime'], 5);?></p></td>
<td colspan="2">
<div class="cz1">
<p style="width:125px;"><?php echo $v['hits'];?></p>
<p style="width:190px;">
<a href="<?php echo $DT['file_my'];?>?mid=18&action=edit&itemid=<?php echo $v['itemid'];?>">修改</a>
<?php if($MG['delete']) { ?><a href="<?php echo $DT['file_my'];?>?mid=18&action=delete&itemid=<?php echo $v['itemid'];?>" onclick="return confirm('确定要删除吗？此操作将不可撤销');">删除</a><?php } ?>
<?php if($MG['copy']) { ?> <a href="<?php echo $DT['file_my'];?>?mid=18&action=add&itemid=<?php echo $v['itemid'];?>&catid=<?php echo $v['catid'];?>" title="复制信息">复制信息</a><?php } ?>
<a href="<?php echo $v['linkurl'];?>" class="last0">详情</a>
</p>
<div class="cz2 fl">
<a href="ask.php?action=add">黄金展位</a>
<a href="ask.php?action=add">搜索推广</a>
<a href="ask.php?action=add">首页推广</a>
<a href="ask.php?action=add">百度推广</a>
<a href="ask.php?action=add" class="last0">分站推广</a>
</div>
</div>
</td>
</tr>
<tr class="jian">
<td colspan="2"></td>
<td colspan="5">
<div class="resume">
<div class="jian1">
<p>提高帖子曝光，助您更快成为万众举目的焦点</p>
<a class="dianji"></a>
</div>
<div class="showbox_more">
<div class="typediv">
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="td_w1"><span class="icon_zhineng_b"></span></td>
<td class="td_w2"><span class="td_title">搜索排名</span><span class="ff-arial">72%</span><span class="fc-70">同行使用</span></td>
<td class="td_w3"><span class="fc-70">每天最低3元起即可享用</span></td>
<td class="td_w4"><span class="price_nb">30</span><span class="fc-70">积分=3元/点击起</span>
<span class="icon_zhekou active_bottom">
<span class="zkbg_l js-mouse-zhe">最低价</span><span class="zkbg_r"></span>
</span>
</td>
<td class="td_w5"><a class="btnorg_79x31" href="ask.php?action=add">立即推广</a></td>
</tr>
</tbody>
</table>
</div>
<div class="typediv">
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="td_w1"><span class="icon_jingjia_b"></span></td>
<td class="td_w2"><span class="td_title">黄金展位</span><span class="ff-arial">72%</span><span class="fc-70">同行使用</span></td>
<td class="td_w3"><span class="fc-70">效果付费点击一次0.1元/起</span></td>
<td class="td_w4"><span class="price_nb">1</span><span class="fc-70">积分=0.1元/点击起</span>
<span class="icon_zhekou active_bottom">
<span class="zkbg_l js-mouse-zhe">热销低价</span><span class="zkbg_r"></span>
</span>
</td>
<td class="td_w5"><a class="btnorg_79x31" href="ask.php?action=add">立即推广</a></td>
</tr>
</tbody>
</table>
</div>
<div class="typediv">
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="td_w1"><span class="icon_shuaxin_b"></span></td>
<td class="td_w2"><span class="td_title">首页排名</span><span class="ff-arial">72%</span><span class="fc-70">同行使用</span></td>
<td class="td_w3"><span class="fc-70">超级效果点击一次0.5元/起</span></td>
<td class="td_w4"><span class="price_nb">5</span><span class="fc-70">积分=0.5元/点击起</span>
<span class="icon_zhekou active_bottom">
<span class="zkbg_l js-mouse-zhe">疯狂低价</span><span class="zkbg_r"></span>
</span>
</td>
<td class="td_w5"><a class="btnorg_79x31" href="ask.php?action=add">立即推广</a></td>
</tr>
</tbody>
</table>
</div>
<div class="typediv">
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td class="td_w1"><span class="icon_jianli_b"></span></td>
<td class="td_w2"><span class="td_title">分站首页排名</span><span class="ff-arial">72%</span><span class="fc-70">同行使用</span></td>
<td class="td_w3"><span class="fc-70">超级效果点击一次0.3元/起</span></td>
<td class="td_w4"><span class="price_nb">3</span><span class="fc-70">积分=0.3元/点击起</span>
<span class="icon_zhekou active_bottom">
<span class="zkbg_l js-mouse-zhe">效果价格</span><span class="zkbg_r"></span>
</span>
</td>
<td class="td_w5"><a class="btnorg_79x31" href="ask.php?action=add">立即推广</a></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</td>
</tr>
</table>
<?php } } ?>
<div class="pages00"><span class="nolink"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=18">我的更多帖子</a></span></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include template('footer', $module);?>
<?php } ?>
