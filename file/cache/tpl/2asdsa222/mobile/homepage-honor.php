<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', 'mobile');?>
<div id="head-bar">
<div class="head-bar">
<div class="head-bar-back">
<a href="<?php echo $back_link;?>" data-direction="reverse"><img src="static/img/icon-back.png" width="24" height="24"/><span>返回</span></a>
</div>
<div class="head-bar-title"><?php echo $head_name;?></div>
</div>
<div class="head-bar-fix"></div>
</div>
<?php if($itemid) { ?>
<div class="main">
<div class="title"><strong><?php echo $title;?></strong></div>
<div class="info"><?php echo $date;?>&nbsp;&nbsp;点击:<?php echo $hits;?></div>
<div class="content">
<img src="<?php echo $image;?>" alt="<?php echo $title;?>"/><br/>
发证机构：<?php echo $authority;?><br/>
发证时间 ：<?php echo timetodate($fromtime, 3);?><br/>
有效期至 ：<?php if($totime) { ?><?php echo timetodate($totime, 3);?><?php } else { ?>永久<?php } ?>
<br/>
<?php echo $content;?>
</div>
</div>
<?php } else { ?>
<?php if($lists) { ?>
<ul class="list-txt">
<?php if(is_array($lists)) { foreach($lists as $v) { ?>
<li><a href="<?php echo $HURL;?>&action=<?php echo $action;?>&itemid=<?php echo $v['itemid'];?>"><?php echo $v['title'];?></a></li>
<?php } } ?>
</ul>
<?php } else { ?>
<?php include template('chip-empty', 'mobile');?>
<?php } ?>
<?php } ?>
<?php if($pages) { ?><div class="pages"><?php echo $pages;?></div><?php } ?>
<?php include template('footer', 'mobile');?>