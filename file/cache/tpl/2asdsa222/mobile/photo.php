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
<a href="javascript:<?php if($itemid) { ?>Dsheet('<a href=&#34;<?php if($DT_MOB['browser']=='weixin'||$DT_MOB['browser']=='qq') { ?>javascript:share_tips();<?php } else { ?>share.php?moduleid=<?php echo $moduleid;?>&itemid=<?php echo $itemid;?><?php } ?>
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
<?php if($pass) { ?>
<?php if($user_status == 3) { ?>
<div class="album" style="margin:0;">
<div id="album" style="margin:0;"><img src="<?php echo $P['big'];?>" id="photo" style="width:100%;"/></div><div style="line-height:30px;font-size:18px;"><span id="photo_page"><?php echo $page;?></span> / <?php echo $items;?></div>
</div>
<div style="display:none;">
<?php if(is_array($T)) { foreach($T as $i => $p) { ?>
<div id="image_<?php echo $i;?>"><?php echo $p['big'];?></div>
<div id="intro_<?php echo $i;?>"><?php echo $p['introduce'];?></div>
<?php } } ?>
</div>
<script type="text/javascript">
var cur = <?php echo $page;?>;
var max = <?php echo $items;?>;
$(document).on('pageinit', function(event) {
$('#album').on('swipeleft click',function(){
photo_next();
});
$('#album').on('swiperight',function(){
photo_prev();
});
});
</script>
<script type="text/javascript" src="static/js/photo.js"></script>
<div id="photo_intro" class="content"><?php echo $P['introduce'];?></div>
<?php } else { ?>
<?php include template('chip-content', 'mobile');?>
<?php } ?>
<?php if($content) { ?><div class="content"><?php echo $content;?></div><?php } ?>
<?php } else { ?>
<div class="content">
此<?php echo $MOD['name'];?>需要验证，<?php if($open == 2) { ?>请输入访问密码<?php } else if($open == 1) { ?>请回答<?php echo $question;?><?php } ?>
<form id="photo-form">
<input type="hidden" name="moduleid" value="<?php echo $moduleid;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" name="action" value="verify"/>
<div style="border:#D8D8D8 1px solid;margin:10px 0;padding:2px 6px;border-radius:4px;"><input type="text" name="key" id="key" style="width:100%;height:28px;line-height:28px;border:none;font-size:14px;padding:0;" onblur="window.scrollTo(0,0);"/></div>
<div class="btn-green" onclick="Dphoto();">立即验证</div>
</form>
</div>
<script type="text/javascript">
function Dphoto() {
if($('#key').val().length < 1) {
Dtoast('请填写验证信息');
return false;
}
$.post('index.php', $('#photo-form').serialize(), function(data) {
if(data == 'ok') {
Dtoast('验证成功');
setTimeout(function() {
window.location.reload();
}, 1000);
} else {
Dtoast('验证失败，请重试');
}
});
}
</script>
<?php } ?>
</div>
<?php if($DT_MOB['browser'] == 'weixin' ||  $DT_MOB['browser'] == 'qq') { ?><?php include template('chip-share', 'mobile');?><?php } ?>
<?php include template('chip-comment', 'mobile');?>
<?php } else { ?>
<?php if($lists) { ?>
<?php if(is_array($lists)) { foreach($lists as $v) { ?>
<div class="list-img">
<a href="<?php echo $v['linkurl'];?>"><img src="<?php if($v['thumb']) { ?><?php echo $v['thumb'];?><?php } else { ?>image/nopic-80.png<?php } ?>
" width="80" height="60" alt="" onerror="this.src='static/img/nopic-60.png';"/></a>
<ul>
<li><a href="<?php echo $v['linkurl'];?>"><strong><?php echo $v['title'];?></strong></a></li>
<li><span><?php echo $v['items'];?> 张图片</span></li>
<li><em><?php echo $v['date'];?></em></li>
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
