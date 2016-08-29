<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if($action != 'ajax') { ?>
<?php include template('header', 'mobile');?>
<div id="head-bar">
<div class="head-bar">
<div class="head-bar-back">
<?php if($itemid || $catid || $areaid || $kw) { ?>
<a href="<?php echo $back_link;?>" data-direction="reverse"><img src="static/img/icon-back.png" width="24" height="24"/><span>返回</span></a>
<?php } else { ?>
<a href="channel.php" data-direction="reverse"><img src="static/img/icon-back.png" width="24" height="24"/><span>频道</span></a>
<?php } ?>
</div>
<div class="head-bar-title"><?php echo $head_name;?></div>
<div class="head-bar-right">
<a href="javascript:<?php if($itemid) { ?>Dsheet('<?php if($could_sign) { ?><a href=&#34;exhibit.php?itemid=<?php echo $itemid;?>&#34;><span>在线报名</span></a>|<?php } ?>
<a href=&#34;<?php if($DT_MOB['browser']=='weixin'||$DT_MOB['browser']=='qq') { ?>javascript:share_tips();<?php } else { ?>share.php?moduleid=<?php echo $moduleid;?>&itemid=<?php echo $itemid;?><?php } ?>
&#34;  data-transition=&#34;slideup&#34;><span>分享好友</span></a>|<a href=&#34;<?php echo mobileurl($moduleid);?>&#34; data-direction=&#34;reverse&#34;><span><?php echo $MOD['name'];?>首页</span></a>|<a href=&#34;channel.php&#34; data-direction=&#34;reverse&#34;><span>频道列表</span></a>', '取消');<?php } else { ?>Dsheet('<a href=&#34;search.php?action=mod<?php echo $moduleid;?>&catid=<?php echo $catid;?>&areaid=<?php echo $areaid;?>&#34;><span><?php echo $MOD['name'];?>搜索</span></a>|<a href=&#34;category.php?moduleid=<?php echo $moduleid;?>&#34;><span>按分类浏览</span></a>|<a href=&#34;area.php?moduleid=<?php echo $moduleid;?>&#34;><span>按地区浏览</span></a>', '取消');<?php } ?>
"><img src="static/img/icon-action.png" width="24" height="24"/></a>
</div>
</div>
<div class="head-bar-fix"></div>
</div>
<?php } ?>
<?php if($itemid) { ?>
<div class="main">
<div class="title"><strong><?php echo $title;?></strong></div>
<div class="info"><?php echo $editdate;?>&nbsp;&nbsp;点击:<?php echo $hits;?></div>
<div class="content">
日期:<?php echo $fromdate;?>~<?php echo $todate;?><br/>
城市:<?php echo $city;?><br/>
地址:<a href="map.php?auth=<?php echo encrypt($address, DT_KEY.'MAP');?>" rel="external"><?php echo $address;?></a><br/>
展馆:<?php echo $hallname;?><br/>
主办:<?php echo $sponsor;?><br/>
<?php if($user_status == 3) { ?>
<?php if($could_sign) { ?>
<a href="sign.php?itemid=<?php echo $itemid;?>"><div class="btn-blue" style="margin:10px 0;">在线报名</div></a>
<?php } ?>
</div>
<?php if($content) { ?><div class="content"><?php echo $content;?></div><?php } ?>
<div class="head bd-b"><strong>联系方式</strong></div>
<div class="contact">
姓名:<?php echo $truename;?><br/>
<?php if($telephone) { ?>电话:<a href="tel:<?php echo $telephone;?>"><?php echo $telephone;?></a><br/><?php } ?>
<?php if($mobile) { ?>手机:<a href="tel:<?php echo $mobile;?>"><?php echo $mobile;?></a><br/><?php } ?>
<?php if($fax) { ?>传真:<?php echo $fax;?><br/><?php } ?>
<?php if($email) { ?>邮件:<a href="mailto:<?php echo $email;?>"><?php echo $email;?></a><br/><?php } ?>
<?php if($qq) { ?>QQ:<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $qq;?>&site=qq&menu=yes" target="_blank" rel="external"><?php echo $qq;?></a><br/><?php } ?>
<?php if($msn) { ?>MSN:<?php echo $msn;?><br/><?php } ?>
<?php if($addr) { ?>地址:<a href="map.php?auth=<?php echo encrypt($addr, DT_KEY.'MAP');?>" rel="external"><?php echo $addr;?></a><br/><?php } ?>
</div>
<?php } else { ?>
<?php include template('chip-content', 'mobile');?>
<?php } ?>
</div>
</div>
<?php if($DT_MOB['browser'] == 'weixin' ||  $DT_MOB['browser'] == 'qq') { ?><?php include template('chip-share', 'mobile');?><?php } ?>
<?php include template('chip-comment', 'mobile');?>
<?php } else { ?>
<?php if($lists) { ?>
<?php if(is_array($lists)) { foreach($lists as $v) { ?>
<div class="list-img">
<ul>
<li><a href="<?php echo $v['linkurl'];?>"><strong><?php echo $v['title'];?></strong></a></li>
<li><em><?php if($v['city']) { ?>[<?php echo $v['city'];?>] <?php } ?>
<?php echo timetodate($v['fromtime'], 3);?> - <?php echo timetodate($v['totime'], 3);?></em></li>
<li><span>主办：<?php echo $v['sponsor'];?></span></li>
</ul>
</div>
<?php } } ?>
<?php } else { ?>
<?php include template('chip-empty', 'mobile');?>
<?php } ?>
<?php } ?>
<?php if($action != 'ajax') { ?>
<?php if($pages) { ?><div class="pages"><?php echo $pages;?></div><?php } ?>
<?php include template('footer', 'mobile');?>
<?php } ?>
