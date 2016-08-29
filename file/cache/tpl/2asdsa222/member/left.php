<?php defined('IN_DESTOON') or exit('Access Denied');?><div class="wk-layout_stage-body">
<div class="wk-layout_stage-body-content">
<div class="layout_purchase">
<div class="layout_purchase-nav">
<div class="wkw-work_nav">
<div class="work_user ">
<div class="work_user-info">
<div class="work_user-avatar"><a href="avatar.php"><img src="<?php echo useravatar($_username, 'large');?>" /></a></div>
<div class="work_user-username"><?php echo $_truename;?><br>
<div class="work_user-username-info">
<a target="_blank" class="work_user-username-info-label" href="edit.php">账户信息 <span class="work_user-arrow">></span></a>
<div class="work_user-username-info-panel">
<ul class="work_user-username-info-panel-group">
<li class="work_user-username-info-panel-group-label">资金账户</li>
<li class="work_user-username-info-panel-group-info first-item">
<ul class="item">
<li class="item-text">支付宝账户：<a href="trade.php?action=bind"><?php if($trade) { ?><?php echo $_trade;?><?php } else { ?>未绑定<?php } ?>
</a></li>
<li class="item-opeartion"><a href="trade.php?action=bind" target="_blank">更换 <span style="font-family:simson">></span></a></li>
</ul>
<ul class="item">
<li class="item-text">账户余额： <a href="cash.php"> <span class="red"><strong><?php echo $DT['money_sign'];?> <?php echo $_money;?> <?php echo $DT['money_unit'];?> </strong></span></a><?php if($locking) { ?><span class="f_gray">(<?php echo $locking;?><?php echo $DT['money_unit'];?>锁定)</span><?php } ?>
</li>
<li class="item-opeartion"><a href="cash.php" class="t">提现</a><span class="f_gray"> | </span><a href="charge.php?action=pay" target="_blank">充值 <span style="font-family:simson">></span></a></li>
</ul>
</li>
</ul>
<ul class="work_user-username-info-panel-group">
<li class="work_user-username-info-panel-group-label">我的信用</li>
<li class="work_user-username-info-panel-group-info">
<ul class="item">
<li class="item-text">我的认证： 
<?php if($MOD['vmember']) { ?>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($validated) { ?>v<?php } else { ?>u<?php } ?>
_member.gif" width="16" height="16" title="<?php if($validated) { ?>已通过<?php echo $validator;?>认证<?php } else { ?>未通过认证<?php } ?>
" align="absmiddle"/> 认证
<?php if($MOD['vemail']) { ?>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($vemail) { ?>v<?php } else { ?>u<?php } ?>
_email.gif" width="16" height="16" title="<?php if($vemail) { ?>已通过<?php } else { ?>未通过<?php } ?>
邮件认证" align="absmiddle"/> <a href="validate.php?action=email" class="l">邮件</a>  
<?php } ?>
<?php if($MOD['vmobile']) { ?>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($vmobile) { ?>v<?php } else { ?>u<?php } ?>
_mobile.gif" width="16" height="16" title="<?php if($vmobile) { ?>已通过<?php } else { ?>未通过<?php } ?>
手机认证" align="absmiddle"/> <a href="validate.php?action=mobile" class="l">手机</a>  
<?php } ?>
<?php if($MOD['vbank']) { ?>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($vbank) { ?>v<?php } else { ?>u<?php } ?>
_bank.gif" width="16" height="16" title="<?php if($vbank) { ?>已通过<?php } else { ?>未通过<?php } ?>
银行帐号认证" align="absmiddle"/> <a href="validate.php?action=bank" class="l">银行</a>  <br>
<?php } ?>
<?php if($MOD['vtruename']) { ?>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($vtruename) { ?>v<?php } else { ?>u<?php } ?>
_truename.gif" width="16" height="16" title="<?php if($vtruename) { ?>已通过<?php } else { ?>未通过<?php } ?>
真实姓名认证" align="absmiddle"/> <a href="validate.php?action=truename" class="l">实名</a>  
<?php } ?>
<?php if($MOD['vcompany'] && $groupid > 5) { ?>
<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/<?php if($vcompany) { ?>v<?php } else { ?>u<?php } ?>
_company.gif" width="16" height="16" title="<?php if($vcompany) { ?>已通过<?php } else { ?>未通过<?php } ?>
公司资料认证" align="absmiddle"/> <a href="validate.php?action=company" class="l">公司</a>
<?php } ?>
<?php } ?>
</li>
</ul>
<ul class="item">
<li class="item-text">消费保证金：<a target="_blank" href="deposit.php" class="buyer-credit">：<?php if($deposit<1) { ?>暂未签署消保协议<?php } else { ?><img src="<?php echo $MODULE['2']['linkurl'];?>image/baoz1.png" width="16" height="12" align="absmiddle" title="该店铺已签署消费者保障协议"/>已缴纳 <span class="red"><strong><?php echo $deposit;?></strong> <?php echo $money_unit;?></span> 保证金<?php } ?>
</a></li>
</ul>
<ul class="item">
<li class="item-text">诚信档案： <a href="validate.php?action=company" target="_blank"><?php if($vcompany) { ?>已建立<?php } else { ?>未建立<?php } ?>
</a><br></li>
</ul>
</li>
</ul>
<ul class="work_user-username-info-panel-group">
<li class="work_user-username-info-panel-group-label">卖家荣誉</li>
<li class="work_user-username-info-panel-group-info first-item">
<ul class="item">
<li class="item-text">卖家等级：<strong class="f_red"> <?php if($sales < 10) { ?>新店开张
  <?php } else if($sales < 100) { ?>星级卖家
  <?php } else if($sales < 200) { ?>蓝钻卖家
  <?php } else if($sales < 300) { ?>黄钻卖家
  <?php } else if($sales < 400) { ?>蓝冠卖家
  <?php } else if($sales < 500) { ?>金皇冠卖家
  <?php } else if($sales < 1000000) { ?>金皇冠卖家
  <?php } ?>
</strong></li>
<li class="item-opeartion"></li>
</ul>
<ul class="item">
<li class="item-text">店铺信誉：<?php if($sales < 10) { ?>暂无评级
  <?php } else if($sales < 20) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/b_red_1.gif" align="absmiddle"/>
  <?php } else if($sales < 40) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/b_red_2.gif" align="absmiddle"/>
  <?php } else if($sales < 60) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/b_red_3.gif" align="absmiddle"/>
  <?php } else if($sales < 80) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/b_red_4.gif" align="absmiddle"/>
  <?php } else if($sales < 100) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/b_red_5.gif" align="absmiddle"/>
  <?php } else if($sales < 120) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/s_blue_1.gif" align="absmiddle"/>
  <?php } else if($sales < 140) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/s_blue_2.gif" align="absmiddle"/>
  <?php } else if($sales < 160) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/s_blue_3.gif" align="absmiddle"/>
  <?php } else if($sales < 180) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/s_blue_4.gif" align="absmiddle"/>
  <?php } else if($sales < 200) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/s_blue_5.gif" align="absmiddle"/>
  <?php } else if($sales < 220) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/b_blue_1.gif" align="absmiddle"/>
  <?php } else if($sales < 240) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/b_blue_2.gif" align="absmiddle"/>
  <?php } else if($sales < 260) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/b_blue_3.gif" align="absmiddle"/>
  <?php } else if($sales < 280) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/b_blue_4.gif" align="absmiddle"/>
  <?php } else if($sales < 300) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/b_blue_5.gif" align="absmiddle"/>
  <?php } else if($sales < 320) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/vip-1.gif" align="absmiddle"/>
  <?php } else if($sales < 340) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/vip-2.gif" align="absmiddle"/>
  <?php } else if($sales < 360) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/vip-3.gif" align="absmiddle"/>
  <?php } else if($sales < 380) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/vip-4.gif" align="absmiddle"/>
  <?php } else if($sales < 400) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/vip-5.gif" align="absmiddle"/>
  <?php } else if($sales < 420) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/vip-6.gif" align="absmiddle"/>
  <?php } else if($sales < 440) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/vip-7.gif" align="absmiddle"/>
  <?php } else if($sales < 460) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/vip-8.gif" align="absmiddle"/>
  <?php } else if($sales < 480) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/vip-9.gif" align="absmiddle"/>
  <?php } else if($sales < 500) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/vip-10.gif" align="absmiddle"/>
  <?php } else if($sales < 100000) { ?><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/vip-10.gif" align="absmiddle"/>
  <?php } ?>
</li>
<li class="item-opeartion"></li>
</ul>
</li>
</ul>
<ul class="work_user-username-info-panel-group">
<li class="work_user-username-info-panel-group-label">我的资料</li>
<li class="work_user-username-info-panel-group-info first-item">
<?php if($support) { ?><ul class="item">
<li class="item-text">客服专员：<img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/support.gif" align="absmiddle"/><a href="support.php" class="l">点击联系</a></li>
</ul>
<?php } ?>
<ul class="item">
<li class="item-text">登录时间：<?php echo timetodate($logintime, 5);?> <?php if($DT['login_log']==2) { ?>  <a href="record.php?action=login" class="l">登录记录</a><?php } ?>
</li>
</ul>
<ul class="item">
<li class="item-text">注册时间：<?php echo timetodate($regtime, 5);?></li>
</ul>
<?php if($vip) { ?>
<ul class="item">
<li class="item-text">VIP服务期：<?php echo timetodate($fromtime, 3);?> 至 <?php echo timetodate($totime, 3);?></li>
<li class="item-text">剩余时间：<strong><?php echo $havedays;?></strong> 天  <a href="vip.php?action=renew" class="l">续费</a></li>
</ul>
<?php } else if($groupid>4) { ?>
<ul class="item">
<li class="item-text">会员升级：您当前为普通会员，想更好的体验我们的服务请  <a href="grade.php"><span class="f_red">立即升级</span></a></li>
</ul>
<?php } ?>
</li>
</ul>
</div>
</div>
</div>
<div class="work_user-lv">
<p class="work_user-lv-list">
<script language="javaScript"> 
now = new Date(),hour = now.getHours() 
if(hour < 6){document.write("凌晨好！")} 
else if (hour < 9){document.write("早上好！")} 
else if (hour < 12){document.write("上午好！")} 
else if (hour < 14){document.write("中午好！")} 
else if (hour < 17){document.write("下午好！")} 
else if (hour < 19){document.write("傍晚好！")} 
else if (hour < 23){document.write("晚上好！")} 
else  {document.write("夜里好！")} 
</script><?php echo $_username;?>   <a class="" href="logout.php?forward=">退出</a>
</p>
<p class="work_user-lv-list">
(<a href="line.php" title="<?php if($_online) { ?>点击隐身<?php } else { ?>点击上线<?php } ?>
"><?php if($_online) { ?><span class="f_green">在线</span><?php } else { ?><span class="f_gray">隐身</span><?php } ?>
</a>)  <?php echo $MG['groupname'];?><a href="<?php echo $MODULE['2']['linkurl'];?>grade.php?groupid=7#up">（<?php if($_groupid == 6) { ?>[会员升级]<?php } else if($groupid == 8) { ?>[会员升级]<?php } else { ?>[点击续费]<?php } ?>
）</a>
</p>
<p class="work_user-lv-list red">
升级<?php echo VIP;?><a href="<?php echo $MODULE['2']['linkurl'];?>grade.php?groupid=7#up" class="red">（无效果，不收费）</a>
</p>
</div>      
</div>
<div class="work_user-count">
<ul class="work_user-count-column">
<li class="work_user-count-column-count"><a href="message.php"><?php echo $_message;?></a></li><li>我的信件</li>
</ul>
<ul class="work_user-count-column">
<li class="work_user-count-column-count"><a href="<?php echo $DT['file_my'];?>?mid=5"><?php echo $db->count($DT_PRE.'sell_5', 'status=3 and username="'.$_username.'"', 1800);?></a></li><li>上架产品</li>
</ul>
<ul class="work_user-count-column last0">
<li class="work_user-count-column-count"><a href="<?php echo $DT['file_my'];?>?mid=16"><?php echo $db->count($DT_PRE.'mall', 'status=3 and username="'.$_username.'"', 1800);?></a></li><li>商城宝贝</li>
</ul>
</div>
<a href="credit.php?action=qiandao"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/qiandao.png" width="194" height="60" title="签到送好礼，积分奖不停" align="absmiddle"/></a> 
<?php if(isset($MODULE['31'])) { ?> 
<a href="<?php echo $DT['file_my'];?>?mid=31&action=add"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/bainian.png" width="194" height="50" title="2016向全国人民送上属于您公司的祝福" align="absmiddle"/></a>    <?php } ?>
    
</div>
<div class="layout_home-nav-usually">
<div class="wkw-work_nav-label active">
<div class="wkw-work_nav-label-icon"></div><a href="<?php echo $MODULE['2']['linkurl'];?>">我的服务</a></div>
<div class="wkw-work_nav-list" id="firstpane">
<div class="wkw-work_nav-list-nav">
<?php if($MYMODS || $show_menu) { ?>
<ul class="wkw-work_nav-list-nav-main"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/1.png" height="20" /><span>发布商机</span><i></i></ul>
<ul class="wkw-work_nav-list-nav-menu" style="display:none">
<?php if(is_array($MENUMODS)) { foreach($MENUMODS as $k => $v) { ?>
<?php if($v==9) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="mid_job"><span class="f_r"><a href="<?php echo $DT['file_my'];?>?mid=9&action=add" class="m">发布</a></span><a href="<?php echo $DT['file_my'];?>?mid=9" class="<?php if(in_array($v, $MYMODS)) { ?>n<?php } else { ?>f<?php } ?>
">招聘管理</a></li>
<?php } else if($v==-9) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="mid_resume"><span class="f_r"><a href="<?php echo $DT['file_my'];?>?mid=9&action=add&resume=1" class="m">创建</a></span><a href="<?php echo $DT['file_my'];?>?mid=9&resume=1" class="<?php if(in_array($v, $MYMODS)) { ?>n<?php } else { ?>f<?php } ?>
">简历管理</a></li>
<?php } else if($v==18) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);"  id="mid_<?php echo $v;?>"><span class="f_r"><a href="<?php echo $DT['file_my'];?>?mid=<?php echo $v;?>&job=group&action=add" class="m">创建</a></span><a href="<?php echo $DT['file_my'];?>?mid=<?php echo $v;?>" class="<?php if(in_array($v, $MYMODS)) { ?>n<?php } else { ?>f<?php } ?>
"><?php echo $MODULE[$v]['name'];?>管理</a></li>
<?php } else { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);"  id="mid_<?php echo $v;?>"><span class="f_r"><a href="<?php echo $DT['file_my'];?>?mid=<?php echo $v;?>&action=add" class="m">发布</a></span><a href="<?php echo $DT['file_my'];?>?mid=<?php echo $v;?>" class="<?php if(in_array($v, $MYMODS)) { ?>n<?php } else { ?>f<?php } ?>
"><?php echo $MODULE[$v]['name'];?>管理</a></li>
<?php } ?>
<?php } } ?>
</ul>
<?php } ?>
<?php if($_userid || $show_menu) { ?>
<ul class="wkw-work_nav-list-nav-main" onclick="c(0);"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/2.png" height="20" /><span>会员服务</span></ul>
<ul class="wkw-work_nav-list-nav-menu" style="display:none">
<?php if($MG['inbox_limit']>-1 || $show_menu) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="message"><span class="f_r"><a href="message.php?action=send" class="m">发信</a></span><a href="message.php" class="<?php if($MG['inbox_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">站内信件</a><?php if($_message) { ?><em><?php echo $_message;?></em><?php } ?>
</li>
<?php } ?>
<?php if($MG['chat'] || $show_menu) { ?>
<?php if($DT['im_web']) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="chats"><span class="f_r"><a href="chat.php?action=add" class="m">查看</a></span><a href="chat.php" class="<?php if($MG['inbox_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">站内交谈</a><?php if($_chat) { ?><em><?php echo $_chat;?></em><?php } ?>
</li>
<?php } ?>
<?php } ?>
<?php if($MG['friend_limit']>-1 || $show_menu) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="friend"><span class="f_r"><a href="friend.php?action=add" class="m">添加</a></span><a href="friend.php" class="<?php if($MG['friend_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">我的商友</a></li>
<?php } ?>
<?php if($MG['favorite_limit']>-1 || $show_menu) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="favorite"><span class="f_r"><a href="favorite.php?action=add" class="m">添加</a></span><a href="favorite.php" class="<?php if($MG['favorite_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">商机收藏</a></li>
<?php } ?>
<?php if($MG['alert_limit']>-1 || $show_menu) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="alert"><span class="f_r"><a href="alert.php?action=add" class="m">添加</a></span><a href="alert.php" class="<?php if($MG['alert_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">贸易提醒</a></li>
<?php } ?>
<?php if($MG['sms'] || $show_menu) { ?>
<?php if($DT['sms']) { ?><li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="sms"><span class="f_r"><a href="sms.php?action=add" class="m">发送</a></span><a href="sms.php" class="<?php if($MG['sms']) { ?>n<?php } else { ?>f<?php } ?>
">手机短信</a></li><?php } ?>
<?php } ?>
<?php if($MG['mail'] || $show_menu) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="mail"><span class="f_r"><a href="sendmail.php" class="m">电邮</a></span><a href="mail.php" class="<?php if($MG['mail']) { ?>n<?php } else { ?>f<?php } ?>
">邮件订阅</a></li>
<?php } ?>
<?php if($MG['spread'] || $show_menu) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="spread"><span class="f_r"><a href="spread.php?action=add" class="m">购买</a></span><a href="spread.php" class="<?php if($MG['spread']) { ?>n<?php } else { ?>f<?php } ?>
">排名推广</a></li>
<?php } ?>
<?php if($MG['ad'] || $show_menu) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="ad"><span class="f_r"><a href="ad.php?action=add" class="m">购买</a></span><a href="ad.php" class="<?php if($MG['ad']) { ?>n<?php } else { ?>f<?php } ?>
">广告预定</a></li>
<?php } ?>
<?php if($show_oauth) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="oauth"><span class="f_r"><a href="oauth.php" class="m">绑定</a></span><a href="oauth.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">一键登录</a></li>
<?php } ?>
<?php if($EXT['weixin']) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="weixin"><span class="f_r"><a href="weixin.php" class="m">绑定</a></span><a href="weixin.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">微信关注</a></li>
<?php } ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="edit"><span class="f_r"><a href="avatar.php" class="m">头像</a></span><a href="edit.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">修改资料</a></li>
<?php if($MG['ask'] || $show_menu) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="ask"><span class="f_r"><a href="ask.php?action=add" class="m">提问</a></span><a href="ask.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">客服中心</a></li>
<?php } ?>
</ul>
<?php } ?>
 
 
 
 
 
<?php if($_userid || $show_menu) { ?>
<ul class="wkw-work_nav-list-nav-main"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/3.png" height="20" /><span>交易管理</span></ul>
<ul class="wkw-work_nav-list-nav-menu" style="display:none">
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="trade"><span class="f_r"><a href="trade.php?action=order" class="m">买家</a></span><a href="trade.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">我的订单</a></li>
<?php if(isset($MODULE['17'])) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="group"><span class="f_r"><a href="group.php?action=order" class="m">买家</a></span><a href="group.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">团购订单</a></li>
<?php } ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="record"><span class="f_r"><a href="record.php?action=pay" class="m">站内</a></span><a href="record.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
"><?php echo $DT['money_name'];?>流水</a></li>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="charge"><span class="f_r"><a href="charge.php?action=pay" class="m">充值</a></span><a href="charge.php?action=record" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">充值记录</a></li>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="deposit"><span class="f_r"><a href="deposit.php?action=add" class="m">增资</a></span><a href="deposit.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">保 证 金</a></li>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="cash"><span class="f_r"><a href="cash.php" class="m">提现</a></span><a href="cash.php?action=record" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
"><?php echo $DT['money_name'];?>提现</a></li>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="credit"><span class="f_r"><a href="credit.php?action=buy" class="m">购买</a></span><a href="credit.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
"><?php echo $DT['credit_name'];?>管理</a></li>
<?php if($MG['address_limit']>-1 || $show_menu) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="addr"><span class="f_r"><a href="address.php?action=add" class="m">添加</a></span><a href="address.php" class="<?php if($MG['address_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">收货地址</a></li>
<?php } ?>
</ul>
<?php } ?>
<ul class="wkw-work_nav-list-nav-main"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/6.png" height="20" /><span>消息管理</span></ul>
<ul class="wkw-work_nav-list-nav-menu" style="display:none">
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="message"><span class="f_r"><a href="message.php" class="m"><strong class="f_red"><?php echo $_message;?></strong> 封</a></span><a href="message.php" class="<?php if($MG['address_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">未读站内信</a></li>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="message"><span class="f_r"><a href="message.php?typeid=1" class="m">管理</a></span><a href="message.php?typeid=1" class="<?php if($MG['address_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">我的询价</a></li>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="message"><span class="f_r"><a href="message.php?typeid=2" class="m">管理</a></span><a href="message.php?typeid=2" class="<?php if($MG['address_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">我的报价</a></li>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="message"><span class="f_r"><a href="message.php?typeid=3" class="m">管理</a></span><a href="message.php?typeid=3" class="<?php if($MG['address_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">我的留言</a></li>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="message"><span class="f_r"><a href="message.php?typeid=4" class="m">管理</a></span><a href="message.php?typeid=4" class="<?php if($MG['address_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">我的信使</a></li>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="message"><span class="f_r"><a href="message.php?action=send" class="m">发信</a></span><a href="message.php?action=send" class="<?php if($MG['address_limit']>-1) { ?>n<?php } else { ?>f<?php } ?>
">我要发信</a></li>
</ul>
<?php if($MG['homepage'] || $show_menu) { ?>
<ul class="wkw-work_nav-list-nav-main"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/4.png" height="20" /><span>商铺管理</span></ul>
<ul class="wkw-work_nav-list-nav-menu" style="display:none">
<?php if($MG['homepage'] || $show_menu) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="homepage"><span class="f_r"><a href="<?php echo DT_PATH;?>index.php?homepage=<?php echo $_username;?>&update=1" class="m" target="_blank">预览</a></span><a href="home.php" class="<?php if($MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">商铺设置</a></li>
<?php } ?>
<?php if($MG['homepage'] || $show_menu) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="style"><span class="f_r"><a href="style.php?action=view" class="m">查看</a></span><a href="style.php" class="<?php if($MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">模板设置</a></li>
<?php } ?>
<?php if(($MG['news_limit']>-1 && $MG['homepage']) || $show_menu) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="news"><span class="f_r"><a href="news.php?action=add" class="m">发布</a></span><a href="news.php" class="<?php if($MG['news_limit']>-1 && $MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">公司新闻</a></li>
<?php } ?>
<?php if(($MG['page_limit']>-1 && $MG['homepage']) || $show_menu) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="page"><span class="f_r"><a href="page.php?action=add" class="m">添加</a></span><a href="page.php" class="<?php if($MG['page_limit']>-1 && $MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">公司单页</a></li>
<?php } ?>
            <li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="edit"><span class="f_r"><a href="edit.php" class="m">完善</a></span><a href="edit.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">公司信息</a></li>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);"><span class="f_r"><a href="home.php" class="m">修改</a></span><a href="home.php" class="<?php if($MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">旺铺导航</a></li>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);"><span class="f_r"><a href="home.php" class="m">修改</a></span><a href="home.php" class="<?php if($MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">首页设置</a></li>
<?php if(($MG['second_nav'] && $MG['homepage']) || $show_menu) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="second_nav"><span class="f_r"><a href="second_nav.php" class="m">修改</a></span><a href="second_nav.php" class="<?php if($MG['second_nav'] && $MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">二级导航</a></li>
            <?php } ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);"><span class="f_r"><a href="home.php" class="m">绑定</a></span><a href="home.php" class="<?php if($MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">域名绑定</a></li>
           <?php if(($MG['honor_limit']>-1 && $MG['homepage']) || $show_menu) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="honor"><span class="f_r"><a href="honor.php?action=add" class="m">添加</a></span><a href="honor.php" class="<?php if($MG['honor_limit']>-1 && $MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">荣誉资质</a></li>
<?php } ?>
<?php if(($MG['link_limit']>-1 && $MG['homepage']) || $show_menu) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="link"><span class="f_r"><a href="link.php?action=add" class="m">添加</a></span><a href="link.php" class="<?php if($MG['link_limit']>-1 && $MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">友情链接</a></li>
<?php } ?>
<?php if(($MG['case_limit']>-1 && $MG['homepage']) || $show_menu) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="case"><span class="f_r"><a href="case.php?action=add" class="m">添加</a></span><a href="case.php" class="<?php if($MG['case_limit']>-1 && $MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">案例</a></li>
<?php } ?>
<?php if(($MG['questions_limit']>-1 && $MG['homepage']) || $show_menu) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="questions"><span class="f_r"><a href="questions.php?action=add" class="m">添加</a></span><a href="questions.php" class="<?php if($MG['questions_limit']>-1 && $MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">常见问题</a></li>
<?php } ?>
<?php if(($MG['yxad_limit']>-1 && $MG['homepage']) || $show_menu) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="yxad"><span class="f_r"><a href="yxad.php?action=add" class="m">添加</a></span><a href="yxad.php" class="<?php if($MG['yxad_limit']>-1 && $MG['homepage']) { ?>n<?php } else { ?>f<?php } ?>
">公司广告</a></li>
<?php } ?>
            <li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);"><span class="f_r"><a href="edit.php?tab=1" class="m">修改</a></span><a href="edit.php?tab=1" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">账号密码</a></li>     
</ul>
<?php } ?>
<?php if($MG['homepage'] || $show_menu) { ?>
<ul class="wkw-work_nav-list-nav-main"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/5.png" height="20" /><span>商家认证</span></ul>
<ul class="wkw-work_nav-list-nav-menu" style="display:none">
<li><a  href="validate.php?action=email" id="validate"><font class="f_l">邮箱认证</font><span class="mr10 fr">绑定</span></a></li>
<li><a  href="validate.php?action=bank" id="validate"><font class="f_l">银行认证</font><span class="mr10 fr">绑定</span></a></li>
                        <li><a  href="trade.php?action=bind" id="trade"><font class="f_l">支付宝认证</font><span class="mr10 fr">绑定</span></a></li>
<li><a  href="validate.php?action=mobile" id="validate"><font class="f_l">手机认证</font><span class="mr10 fr">绑定</span></a></li>
<li><a  href="validate.php?action=truename" id="validate"><font class="f_l">实名认证</font><span class="mr10 fr">绑定</span></a></li>
<li><a  href="validate.php?action=company" id="validate"><font class="f_l">公司认证</font><span class="mr10 fr">绑定</span></a></li>
</ul>
<?php } ?>
<ul class="wkw-work_nav-list-nav-main"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/6.png" height="20" /><span>财富管理</span></ul>
<ul class="wkw-work_nav-list-nav-menu" style="display:none">
<li><a href="credit.php?action=ylbrw" class="<?php if($action=='qiandao') { ?>current<?php } else { ?><?php } ?>
"><font class="f_l"><?php echo $DT['credit_name'];?>任务</font><i class="news"></i></a></li>
<li><a href="credit.php?action=thgg" class="<?php if($action=='thgg') { ?>current<?php } else { ?><?php } ?>
"><font class="f_l">兑换广告位</font></a></li>
<?php if($MG['ad'] || $show_menu) { ?>
                        <li><a href="ad.php" id="ad">广告位管理</a></li>
                        <?php } ?>
<li><a href="credit.php" id="credit"><?php echo $DT['credit_name'];?>管理</a></li>
<li><a href="credit.php?action=jfgz" <?php if($action=='jfgz') { ?>class="current"<?php } ?>
><font class="f_l">获取规则</font></a></li>
<li><a href="credit.php?action=invite" class="<?php if($action=='invite') { ?>current<?php } else { ?><?php } ?>
">推广<?php echo $DT['credit_name'];?></a></li>
<li><a href="credit.php?action=buy" class="<?php if($action=='buy') { ?>current<?php } else { ?><?php } ?>
">购买<?php echo $DT['credit_name'];?></a></li>
<li><a  data-scode="37"  href="/gift/"><?php echo $DT['credit_name'];?>换礼</a></li>
</ul>
<?php if($_userid || $show_menu) { ?>
<ul class="wkw-work_nav-list-nav-main"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/images/7.png" height="20" /><span>账号管理</span></ul>
<ul class="wkw-work_nav-list-nav-menu" style="display:none">
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="validate"><a  href="validate.php?action=bank" class="n">银行绑定</a><span class="fr"><a href="validate.php?action=bank" class="m">绑定</a></span></li>
    <li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="trade"><a  href="trade.php?action=bind"  class="n">支付宝绑定</a><span class="fr"><a href="trade.php?action=bind"  class="m">绑定</a></span></li>
  <li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="charge"><span class="f_r"><a href="charge.php?action=pay" class="m">充值</a></span><a href="charge.php?action=record" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">充值记录</a></li>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="deposit"><span class="f_r"><a href="deposit.php?action=add" class="m">增资</a></span><a href="deposit.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
">保 证 金</a></li>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="cash"><span class="f_r"><a href="cash.php" class="m">提现</a></span><a href="cash.php?action=record" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
"><?php echo $DT['money_name'];?>提现</a></li>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="credit"><span class="f_r"><a href="credit.php?action=buy" class="m">购买</a></span><a href="credit.php" class="<?php if($_userid) { ?>n<?php } else { ?>f<?php } ?>
"><?php echo $DT['credit_name'];?>管理</a></li>
<?php if($MG['address_limit']>-1 || $show_menu) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="addr"><a href="address.php"  class="n">收货地址</a><span class="fr"><a href="address.php" class="m">管理</a></span></li><?php } ?>
<?php if($show_oauth) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="oauth"><a href="oauth.php"  class="n">一键登录</a><span class="f_r"><a href="oauth.php" class="m">绑定</a></span></li>
<?php } ?>
<?php if($EXT['weixin']) { ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="weixin"><a href="weixin.php"  class="n">微信关注</a><span class="f_r"><a href="weixin.php" class="m">绑定</a></span></li>
<?php } ?>
<li class="side_a" onMouseOver="v(this.id);" onMouseOut="t(this.id);" id="edit"><a href="edit.php"  class="n">修改资料</a><span class="f_r"><a href="avatar.php" class="m">头像</a></span></li>
</ul>
<?php } ?>
</div>
</div>
      <div class="wkw-work_nav-list-nav-main"><img src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/ico_edit.gif" height="20"/><span>商务便签</span></div>
            <div class="form">
 <form method="post" action="index.php" onsubmit="return check();">
<table cellspacing="2" cellpadding="2" width="100%">
<tr>
<td colspan="2"><textarea name="note" id="note"><?php echo $note;?></textarea></td>
</tr>
<tr>
<td width="80"><input type="submit" name="submit" value=" 更 新 " class="btn_g"/></td>
<td class="f_gray">[可记录一些文字备忘，限5000字]</td>
</tr>
</table>
</form>
            </div>
<div class="wkw-work_nav-setup">更多我的服务<span class="work_user-more">></span></div>
<div class="wkw-work_nav-extend">
<a href="grade.php?groupid=7#up" style="color: #027cff;display: block;margin: 10px 20px;line-height:23px;">加入<?php echo VIP;?>会员,从此生意好做啦！</a></div>
</div>
</div>
</div>
