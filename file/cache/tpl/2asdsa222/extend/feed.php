<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<div class="m">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td valign="top" class="left_menu">
<ul>
<li class="left_menu_li"><a href="<?php echo $MODULE['1']['linkurl'];?>">网站首页</a></li>
<li class="left_menu_on"><a href="./">RSS订阅</a></li>
</ul>
</td>
<td valign="top">
<div class="left_box">
<div class="pos">当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="./">RSS订阅</a></div>
<?php if($MOD['feed_enable']) { ?>
<?php if($MOD['feed_enable']==2) { ?>
<div class="b15">&nbsp;</div>
<table cellpadding="6" cellspacing="1" width="96%" align="center" bgcolor="#E3EEF5">
<tr bgcolor="#F1F7FC">
<th align="left">&nbsp;自定义订阅</th>
</tr>
<tr bgcolor="#FFFFFF">
<td>
<form action="index.php">
&nbsp;
<select name="mid">
<option value="0">模块</option>
<?php if(is_array($FD)) { foreach($FD as $k => $v) { ?>
<option value="<?php echo $v['moduleid'];?>"<?php if($mid==$v['moduleid']) { ?> selected<?php } ?>
><?php echo $v['name'];?></option>
<?php } } ?>
</select>&nbsp;
<input type="text" name="kw" size="20" value="<?php if($kw) { ?><?php echo $kw;?><?php } else { ?>关键词<?php } ?>
" onfocus="if(this.value=='关键词')this.value='';"/>&nbsp;
<?php if($category_select) { ?><?php echo $category_select;?>&nbsp;<?php } ?>
<?php if($area_select) { ?><?php echo $area_select;?>&nbsp;<?php } ?>
<input type="submit" value=" 提交 "/>
<input type="button" value=" 重设 " onclick="Go('./');"/>
</form>
</td>
</tr>
</table>
<?php if($feed_code) { ?>
<div class="b15">&nbsp;</div>
<table cellpadding="6" cellspacing="1" width="96%" align="center" bgcolor="#E3EEF5">
<tr bgcolor="#F1F7FC">
<th width="80">频 道</th>
<th>订阅地址</th>
<th width="60">订 阅</th>
<th width="100">订阅到QQ邮箱</th>
</tr>
<tr align="center" bgcolor="#FFFFFF">
<td class="f_red">自定义</td>
<td><input type="text" style="width:96%;" value="<?php echo $feed_code;?>" onmouseover="this.select();"/></td>
<td><a href="<?php echo $feed_code;?>" target="_blank"><img src="<?php echo DT_STATIC;?>file/image/xml.gif" alt="订阅"/></a></td>
<td><a href="http://mail.qq.com/cgi-bin/feed?u=<?php echo $feed_code;?>" target="_blank"><img src="<?php echo DT_STATIC;?>file/image/rss_qq.gif" alt="订阅到QQ邮箱"/></a></td>
</tr>
</table>
<?php } ?>
<?php } ?>
<div class="b15">&nbsp;</div>
<table cellpadding="6" cellspacing="1" width="96%" align="center" bgcolor="#E3EEF5">
<tr bgcolor="#F1F7FC">
<th width="80">频 道</th>
<th>订阅地址</th>
<th width="60">订 阅</th>
<th width="100">订阅到QQ邮箱</th>
</tr>
<?php if(is_array($FD)) { foreach($FD as $k => $v) { ?>
<tr align="center" bgcolor="#FFFFFF">
<td><a href="<?php echo $v['linkurl'];?>" target="_blank"><?php echo $v['name'];?></a></td>
<td><input type="text" style="width:96%;" value="<?php echo $v['rssurl'];?>" onmouseover="this.select();"/></td>
<td><a href="<?php echo $v['rssurl'];?>" target="_blank"><img src="<?php echo DT_STATIC;?>file/image/xml.gif" alt="订阅"/></a></td>
<td><a href="http://mail.qq.com/cgi-bin/feed?u=<?php echo $v['rssurl'];?>" target="_blank"><img src="<?php echo DT_STATIC;?>file/image/rss_qq.gif" alt="订阅到QQ邮箱"/></a></td>
</tr>
<?php } } ?>
</table>
<div class="b15">&nbsp;</div>
<?php } else { ?>
<br/><br/><br/><br/><br/>
<center class="px14 f_b">系统未开启RSS订阅</center>
<br/><br/><br/><br/><br/>
<?php } ?>
</div>
</td>
</tr>
</table>
</div>
<?php include template('footer');?>