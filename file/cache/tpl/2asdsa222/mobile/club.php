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
<a href="javascript:<?php if($itemid) { ?>Dsheet('<a href=&#34;club.php?action=reply&gid=<?php echo $gid;?>&itemid=<?php echo $itemid;?>&page=<?php echo $page;?>&#34; data-transition=&#34;slideup&#34;><span>发表回复</span></a>|<a href=&#34;club.php?action=post&itemid=<?php echo $itemid;?>&gid=<?php echo $gid;?>&#34; data-transition=&#34;slideup&#34;><span>发表帖子</span></a>|<a href=&#34;<?php if($DT_MOB['browser']=='weixin'||$DT_MOB['browser']=='qq') { ?>javascript:share_tips();<?php } else { ?>share.php?moduleid=<?php echo $moduleid;?>&itemid=<?php echo $itemid;?><?php } ?>
&#34;  data-transition=&#34;slideup&#34;><span>分享好友</span></a>|<a href=&#34;index.php?moduleid=<?php echo $moduleid;?>&catid=<?php echo $gid;?>&#34; data-direction=&#34;reverse&#34;><span><?php echo $GRP['title'];?><?php echo $MOD['seo_name'];?></span></a>', '取消');<?php } else if($gid) { ?>Dsheet('<a href=&#34;club.php?action=post&gid=<?php echo $gid;?>&#34;><span>发表帖子</span></a>|<a href=&#34;club.php?action=fans&gid=<?php echo $gid;?>&#34;><span>成员列表</span></a>|<a href=&#34;search.php?action=post<?php echo $catid;?>&catid=<?php echo $catid;?>&areaid=<?php echo $areaid;?>&#34;><span>帖子搜索</span></a>|<a href=&#34;<?php echo mobileurl($moduleid);?>&#34; data-direction=&#34;reverse&#34;><span><?php echo $MOD['name'];?>首页</span></a>|<a href=&#34;channel.php&#34; data-direction=&#34;reverse&#34;><span>频道列表</span></a>', '取消');<?php } else { ?>Dsheet('<a href=&#34;club.php?action=my&#34;><span>我的<?php echo $MOD['name'];?></span></a>|<a href=&#34;search.php?action=mod<?php echo $moduleid;?>&catid=<?php echo $catid;?>&areaid=<?php echo $areaid;?>&#34;><span><?php echo $MOD['name'];?>搜索</span></a>|<a href=&#34;category.php?moduleid=<?php echo $moduleid;?>&#34;><span>按分类浏览</span></a>|<a href=&#34;area.php?moduleid=<?php echo $moduleid;?>&#34;><span>按地区浏览</span></a>', '取消');<?php } ?>
"><img src="static/img/icon-action.png" width="24" height="24"/></a>
</div>
</div>
<div class="head-bar-fix"></div>
</div>
<?php } ?>
<?php if($itemid) { ?>
<style type="text/css">
.club_quote {background:#FAFAFA url('<?php echo DT_SKIN;?>image/club_quote_a.gif') no-repeat 10px 10px;background-size:14px 14px;margin:6px 0 6px 0;font-size:12px;padding:6px 10px;}
.club_quote div {display:inline-block;padding:5px 20px 5px 20px;background:url('<?php echo DT_SKIN;?>image/club_quote_b.gif') no-repeat right bottom;background-size:14px 14px;line-height:20px;}
.club_quote p {margin:0;text-indent:0;}
.club_quote a:link,.club_quote a:visited,.club_quote a:active {color:#555555;text-decoration:none;}
.club_quote a:hover {color:#FF6600;}
.club_break {display:none;}
</style>
<div class="main">
<div class="title"><strong><?php echo $title;?></strong></div>
<div class="info">点击:<?php echo $hits;?>&nbsp;&nbsp;回复:<?php echo $reply;?></div>
<?php if($page == 1) { ?>
<div class="list-user">
<img src="<?php echo useravatar($item['username']);?>" width="32" height="32"/>
<ul>
<li><span>楼主</span><a href="club.php?action=user&username=<?php echo $item['username'];?>&itemid=<?php echo $itemid;?>" class="b"><?php if($item['username']) { ?><?php echo $item['passport'];?><?php } else { ?><?php echo ip2area($item['ip']);?>访客<?php } ?>
</a>&nbsp;<?php if($item['username'] == $GRP['username']) { ?>圈主<?php } else if(in_array($item['passport'], $GRP['managers'])) { ?>版主<?php } ?>
</li>
<li><em><?php echo timetodate($item['addtime'], 5);?></em></li>
</ul>
</div>
<div class="content">
<?php if($user_status == 3) { ?>
<?php echo $content;?>
<?php } else { ?>
<?php include template('chip-content', 'mobile');?>
<?php } ?>
</div>
<?php } ?>
<?php if($replys) { ?>
<?php if(is_array($replys)) { foreach($replys as $k => $v) { ?>
<div class="list-user">
<img src="<?php echo useravatar($v['username']);?>" width="32" height="32"/>
<ul>
<li><span><?php if($v['fname']) { ?><?php echo $v['fname'];?><?php } else { ?><?php echo $v['floor'];?>楼<?php } ?>
</span><a href="club.php?action=user&username=<?php echo $v['username'];?>&itemid=<?php echo $itemid;?>" class="b"><?php if($v['username']) { ?><?php echo $v['passport'];?><?php } else { ?><?php echo ip2area($item['ip']);?>访客<?php } ?>
</a>&nbsp;<?php if($v['username'] == $GRP['username']) { ?>圈主<?php } else if(in_array($v['passport'], $GRP['managers'])) { ?>版主<?php } ?>
</li>
<li><em><?php echo timetodate($v['addtime'], 5);?></em></li>
</ul>
</div>
<div class="content"><?php echo $v['content'];?></div>
<?php } } ?>
<?php } ?>
</div>
<?php if($DT_MOB['browser'] == 'weixin' ||  $DT_MOB['browser'] == 'qq') { ?><?php include template('chip-share', 'mobile');?><?php } ?>
<?php } else { ?>
<?php if($gid) { ?>
<style type="text/css">
.list-post {height:66px;padding:0 16px;}
.list-post p {margin:6px 0 0 0;}
.list-ontop {background:#FFFFFF url('static/img/post-ontop.png') no-repeat right 0;background-size:24px 24px;}
.list-level {background:#FFFFFF url('static/img/post-level.png') no-repeat right 0;background-size:24px 24px;}
.list-thumb {background:#FFFFFF url('static/img/post-thumb.png') no-repeat right 0;background-size:24px 24px;}
</style>
<div class="list-tab bd-b">
<ul>
<li<?php if($typeid==0) { ?> class="on"<?php } ?>
><a href="index.php?moduleid=<?php echo $moduleid;?>&catid=<?php echo $catid;?>&typeid=0" data-transition="flip"><span>最后回复</span></a></li>
<li<?php if($typeid==1) { ?> class="on"<?php } ?>
><a href="index.php?moduleid=<?php echo $moduleid;?>&catid=<?php echo $catid;?>&typeid=1" data-transition="flip"><span>最新主题</span></a></li>
<li<?php if($typeid==2) { ?> class="on"<?php } ?>
><a href="index.php?moduleid=<?php echo $moduleid;?>&catid=<?php echo $catid;?>&typeid=2" data-transition="flip"><span>精华主题</span></a></li>
</ul>
</div>
<?php if($lists) { ?>
<?php if(is_array($lists)) { foreach($lists as $v) { ?>
<div class="list-img list-post<?php if($v['ontop']) { ?> list-ontop<?php } else if($v['level']) { ?> list-level<?php } else if($v['thumb']) { ?> list-thumb<?php } ?>
">
<ul>
<li><a href="<?php echo $v['linkurl'];?>"><strong><?php echo $v['title'];?></strong></a></li>
</ul>
<p><span class="f_r"><?php echo $v['passport'];?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $v['reply'];?>回复</span><span><?php echo $v['date'];?></span></p>
</div>
<?php } } ?>
<?php } else { ?>
<?php include template('chip-empty', 'mobile');?>
<?php } ?>
<?php } else { ?>
<?php if($lists) { ?>
<?php if(is_array($lists)) { foreach($lists as $v) { ?>
<div class="list-img" style="height:60px;">
<a href="index.php?moduleid=<?php echo $moduleid;?>&catid=<?php echo $v['itemid'];?>"><img src="<?php if($v['thumb']) { ?><?php echo $v['thumb'];?><?php } else { ?>image/nopic-60.png<?php } ?>
" width="40" height="40" alt="" onerror="this.src='static/img/nopic-60.png';"/></a>
<ul>
<li><a href="index.php?moduleid=<?php echo $moduleid;?>&catid=<?php echo $v['itemid'];?>"><strong><?php echo $v['title'];?><?php echo $MOD['seo_name'];?></strong></a></li>
<li><span><?php echo $v['post'];?>主题</span>&nbsp;&nbsp;<span><?php echo $v['fans'];?>粉丝</span></li>
</ul>
</div>
<?php } } ?>
<?php } else { ?>
<?php include template('chip-empty', 'mobile');?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php if($action != 'ajax') { ?>
<?php if($pages) { ?><div class="pages"><?php echo $pages;?></div><?php } ?>
<?php include template('footer', 'mobile');?>
<?php } ?>
