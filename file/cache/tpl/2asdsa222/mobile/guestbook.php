<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', 'mobile');?>
<div id="head-bar">
<div class="head-bar">
<div class="head-bar-back">
<a href="more.php" data-direction="reverse"><img src="static/img/icon-back.png" width="24" height="24"/><span>返回</span></a>
</div>
<div class="head-bar-title">意见反馈</div>
</div>
<div class="head-bar-fix"></div>
</div>
<div class="main">
<form method="post" id="gbook">
<input type="hidden" name="ok" value="1"/>
<div style="padding-left:16px;">
<div style="padding:10px 0;" class="bd-b"><textarea name="content" id="content" placeholder="请填写反馈内容" onblur="window.scrollTo(0,0);" style="width:100%;height:50px;font-size:16px;border:none;padding:0;" autofocus="autofocus"></textarea></div>
<?php if($need_captcha) { ?>
<div style="width:100%;height:44px;font-size:16px;" class="bd-b"><?php include template('captcha', 'chip');?></div>
<?php } ?>
</div>
</form>
</div>
<div class="main" style="padding:10px;" onclick="Gbook();">
<div class="btn-blue">提 交</div>
</div>
<script type="text/javascript">
function Gbook() {
var len = Dd('content').value.length;
if(len < 5) {
Dtoast('内容最少个5字，已填写'+len+'个字');
return false;
}
if(len > 5000) {
Dtoast('内容最多个5000字，已填写'+len+'个字');
return false;
}
<?php if($need_captcha) { ?>
val = $('#captcha').val();
if(!is_captcha(val)) {
Dtoast('请填写验证码');
return false;
}
<?php } ?>
$.post('guestbook.php', $('#gbook').serialize(), function(data) {
if(data == 'ok') {
Dtoast('提交成功，感谢您的反馈');
setTimeout(function() {
window.location.reload();
}, 1000);
} else if(data == 'captcha') {
Dtoast('验证码错误');
reloadcaptcha();
} else {
Dtoast('提交失败，请重试');
}
});
return;
}
<?php if($need_captcha) { ?>
$(document).on('pageinit', function(event) {
$('#captcha').on('blur', function(){window.scrollTo(0,0);});
$('#captcha').css({'width':'100px','border':'none','padding':'0','font-size':'16px'});
showcaptcha();
});
<?php } ?>
</script>
<?php include template('footer', 'mobile');?>