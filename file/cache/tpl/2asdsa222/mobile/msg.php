<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', 'mobile');?>
<div id="head-bar">
<div class="head-bar">
<div class="head-bar-back">
<a href="javascript:Dback('index.php');" data-direction="reverse"><img src="static/img/icon-back.png" width="24" height="24"/><span>返回</span></a>
</div>
<div class="head-bar-title">提示信息</div>
<div class="head-bar-right">
<a href="index.php"><img src="static/img/icon-index.png" width="24" height="24"/></a>
</div>
</div>
<div class="head-bar-fix"></div>
</div>
<div class="main">
<div class="content-msg"><?php echo $msg;?></div>
</div>
<?php if($forward) { ?><meta http-equiv="refresh" content="3;URL=<?php echo $forward;?>"><?php } ?>
<?php $foot = '';?>
<?php include template('footer', 'mobile');?>