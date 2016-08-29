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
<a href="javascript:<?php if($itemid) { ?>Dsheet('<?php if($could_answer) { ?><a href=&#34;know.php?action=answer&itemid=<?php echo $itemid;?>&page=<?php echo $page;?>&#34; data-transition=&#34;slideup&#34;><span>我来回答</span></a>|<?php } ?>
<a href=&#34;<?php echo $MURL;?><?php echo $DT['file_my'];?>?mid=<?php echo $moduleid;?>&action=add&cid=<?php echo $catid;?>&#34; rel=&#34;external&#34;><span>我要提问</span></a>|<a href=&#34;<?php if($DT_MOB['browser']=='weixin'||$DT_MOB['browser']=='qq') { ?>javascript:share_tips();<?php } else { ?>share.php?moduleid=<?php echo $moduleid;?>&itemid=<?php echo $itemid;?><?php } ?>
&#34;  data-transition=&#34;slideup&#34;><span>分享好友</span></a>|<a href=&#34;<?php echo mobileurl($moduleid);?>&#34; data-direction=&#34;reverse&#34;><span><?php echo $MOD['name'];?>首页</span></a>|<a href=&#34;channel.php&#34; data-direction=&#34;reverse&#34;><span>频道列表</span></a>', '取消');<?php } else { ?>Dsheet('<a href=&#34;<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=<?php echo $moduleid;?>&action=add&cid=<?php echo $catid;?>&#34; rel=&#34;external&#34;><span>我要提问</span></a>|<a href=&#34;search.php?action=mod<?php echo $moduleid;?>&catid=<?php echo $catid;?>&areaid=<?php echo $areaid;?>&#34;><span><?php echo $MOD['name'];?>搜索</span></a>|<a href=&#34;category.php?moduleid=<?php echo $moduleid;?>&#34;><span>按分类浏览</span></a>|<a href=&#34;area.php?moduleid=<?php echo $moduleid;?>&#34;><span>按地区浏览</span></a>', '取消');<?php } ?>
"><img src="static/img/icon-action.png" width="24" height="24"/></a>
</div>
</div>
<div class="head-bar-fix"></div>
</div>
<?php } ?>
<?php if($itemid) { ?>
<div class="main">
<div class="title"><strong><?php echo $title;?></strong></div>
<div class="info">关注:<?php echo $hits;?>&nbsp;&nbsp;答案:<?php echo $answer;?>&nbsp;&nbsp;悬赏:<?php echo $credit;?></div>
<?php if($process == 1 || $process == 2) { ?>
<div class="info" style="padding-top:16px;">离问题结束还有<?php echo secondstodate($totime-$DT_TIME);?></div>
<?php } else if($process == 3) { ?>
<div class="info" style="padding-top:16px;">解决时间 <?php echo timetodate($updatetime, 5);?></div>
<?php } ?>
<?php if($page == 1) { ?>
<div class="list-user">
<img src="<?php echo useravatar($hidden ? '' : $username);?>" width="32" height="32"/>
<ul>
<li><span><?php echo $PROCESS[$process];?></span><?php if($hidden) { ?>匿名<?php } else { ?><a href="know.php?action=user&username=<?php echo $username;?>&itemid=<?php echo $itemid;?>" class="b"><?php echo $passport;?></a><?php } ?>
</li>
<li><em><?php echo $editdate;?></em></li>
</ul>
</div>
<div class="content">
<?php echo $content;?>
<?php if($addition) { ?>
<strong>问题补充：</strong><br/>
<?php echo nl2br($addition);?>
<?php } ?>
</div>
<div class="head bd-b"><strong>最佳答案</strong></div>
<?php if($user_status == 3 && $best) { ?>
<div class="list-user">
<img src="<?php echo useravatar($best['hidden'] ? '' : $best['username']);?>" width="32" height="32"/>
<ul>
<li><span><?php if($expert) { ?>专家<?php } ?>
</span><?php if($best['hidden']) { ?>匿名<?php } else { ?><a href="know.php?action=user&username=<?php echo $best['username'];?>&itemid=<?php echo $itemid;?>" class="b"><?php echo $best['passport'];?></a><?php } ?>
</li>
<li><em><?php echo timetodate($best['addtime'], 5);?></em></li>
</ul>
</div>
<?php } ?>
<div class="content">
<?php if($best) { ?>
<?php if($user_status == 3) { ?>
<?php echo nl2br($best['content']);?>
<?php } else { ?>
<?php include template('chip-content', 'mobile');?>
<?php } ?>
<?php } else { ?>
暂无最佳答案<?php if($could_answer) { ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="know.php?action=answer&itemid=<?php echo $itemid;?>&page=<?php echo $page;?>" data-transition="slideup" class="b">我来回答</a><?php } ?>
<?php } ?>
</div>
<?php } ?>
<?php if($answers) { ?>
<div class="head bd-b"><strong>全部回答</strong></div>
<?php if(is_array($answers)) { foreach($answers as $k => $v) { ?>
<div class="list-user">
<img src="<?php echo useravatar($v['hidden'] ? '' : $v['username']);?>" width="32" height="32"/>
<ul>
<li><span><?php echo $v['floor'];?>楼</span><?php if($v['hidden']) { ?>匿名<?php } else { ?><a href="know.php?action=user&username=<?php echo $v['username'];?>&itemid=<?php echo $itemid;?>" class="b"><?php if($v['username']) { ?><?php echo $v['passport'];?><?php } else { ?><?php echo ip2area($item['ip']);?>访客<?php } ?>
</a><?php } ?>
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
<style type="text/css">
.list-ask {height:66px;padding:0 16px;}
.list-ask p {margin:6px 0 0 0;}
</style>
<div class="list-tab bd-b">
<ul>
<li<?php if($typeid==0) { ?> class="on"<?php } ?>
><a href="index.php?moduleid=<?php echo $moduleid;?>&catid=<?php echo $catid;?>&typeid=0" data-transition="flip"><span>全部问题</span></a></li>
<li<?php if($typeid==1) { ?> class="on"<?php } ?>
><a href="index.php?moduleid=<?php echo $moduleid;?>&catid=<?php echo $catid;?>&typeid=1" data-transition="flip"><span>等待解决</span></a></li>
<li<?php if($typeid==2) { ?> class="on"<?php } ?>
><a href="index.php?moduleid=<?php echo $moduleid;?>&catid=<?php echo $catid;?>&typeid=2" data-transition="flip"><span>已经解决</span></a></li>
</ul>
</div>
<?php if($lists) { ?>
<?php if(is_array($lists)) { foreach($lists as $v) { ?>
<div class="list-img list-ask">
<ul>
<li><a href="<?php echo $v['linkurl'];?>"><strong><?php echo $v['title'];?></strong></a></li>
</ul>
<p><span class="f_r"><?php echo $PROCESS[$v['process']];?></span><span><?php echo $v['date'];?></span></p>
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
