<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<div class="m">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td valign="top" class="left_menu">
<ul>
<li class="left_menu_li"><a href="<?php echo $MODULE['1']['linkurl'];?>">网站首页</a></li>
<li class="left_menu_on" id="type_guestbook"><a href="<?php echo $EXT['guestbook_url'];?>">网站留言</a></li>
</ul>
</td>
<td valign="top">
<div class="left_box">
<div class="pos">当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $EXT['guestbook_url'];?>">网站留言</a></div>
<div class="pd20">
<form action="<?php echo $EXT['guestbook_url'];?>index.php" method="post" onsubmit="return check();">
<table width="100%" cellpadding="8" cellspacing="1" bgcolor="#E3EEF5">
<tr>
<td bgcolor="#F1F7FC" width="90" align="right">留言类型&nbsp;&nbsp;</td>
<td bgcolor="#FFFFFF">
<select name="post[type]" id="type">
<option value="">请选择</option>
<?php if(is_array($TYPE)) { foreach($TYPE as $k => $v) { ?>
<option value="<?php echo $v;?>"><?php echo $v;?></option>
<?php } } ?>
</select>
</td>
</tr>
<tr>
<td bgcolor="#F1F7FC" align="right"><span class="f_red">*</span> 留言内容&nbsp;&nbsp;</td>
<td bgcolor="#FFFFFF" title="留言内容不支持任何语法，仅限文字"><textarea name="post[content]" rows="5" cols="70" id="content"><?php echo $content;?></textarea><br/>
<span id="dcontent" class="f_red"></span>
</td>
</tr>
<tr>
<td bgcolor="#F1F7FC" width="90" align="right">与您联系&nbsp;&nbsp;</td>
<td bgcolor="#FFFFFF">
<input type="radio" name="my" value="1" id="my_1" onclick="Ds('gb_contact');"/> <label for="my_1">需要</label>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="my" value="0" id="my_0" checked onclick="Dh('gb_contact');"/> <label for="my_0">不需要</label>
</td>
</tr>
<tbody id="gb_contact" style="display:none;">
<tr>
<td bgcolor="#F1F7FC" align="right">联系人&nbsp;&nbsp;</td>
<td bgcolor="#FFFFFF">
<input type="text" name="post[truename]" size="10" id="truename" value="<?php echo $truename;?>"/>&nbsp;
<input type="checkbox" name="post[hidden]" value="1" id="hidden" checked/><label for="hidden" title="选择匿名后,联系人姓名仅网站工作人员可见"> 匿名留言</label>
<span id="dtruename" class="f_red"></span>
</td>
</tr>
<tr>
<td bgcolor="#F1F7FC" align="right">联系电话&nbsp;&nbsp;</td>
<td bgcolor="#FFFFFF">
<input type="text" name="post[telephone]" size="30" id="telephone" value="<?php echo $telephone;?>"/>
<span id="dtelephone" class="f_red"></span>
</td>
</tr>
<tr>
<td bgcolor="#F1F7FC" align="right">电子邮件&nbsp;&nbsp;</td>
<td bgcolor="#FFFFFF">
<input type="text" name="post[email]" size="30" id="email" value="<?php echo $email;?>"/>
<span id="demail" class="f_red"></span>
</td>
</tr>
<?php if($DT['im_qq']) { ?>
<tr>
<td bgcolor="#F1F7FC" align="right">QQ&nbsp;&nbsp;</td>
<td bgcolor="#FFFFFF"><input type="text" size="20" name="post[qq]" id="qq" value="<?php echo $qq;?>"/></td>
</tr>
<?php } ?>
<?php if($DT['im_ali']) { ?>
<tr>
<td bgcolor="#F1F7FC" align="right">阿里旺旺&nbsp;&nbsp;</td>
<td bgcolor="#FFFFFF"><input type="text" size="20" name="post[ali]" id="ali" value="<?php echo $ali;?>"/></td>
</tr>
<?php } ?>
<?php if($DT['im_msn']) { ?>
<tr>
<td bgcolor="#F1F7FC" align="right">MSN&nbsp;&nbsp;</td>
<td bgcolor="#FFFFFF"><input type="text" size="30" name="post[msn]" id="msn" value="<?php echo $msn;?>"/></td>
</tr>
<?php } ?>
<?php if($DT['im_skype']) { ?>
<tr>
<td bgcolor="#F1F7FC" align="right">Skype&nbsp;&nbsp;</td>
<td bgcolor="#FFFFFF"><input type="text" size="20" name="post[skype]" id="skype" value="<?php echo $skype;?>"/></td>
</tr>
<?php } ?>
</tbody>
<?php if($MOD['guestbook_captcha']) { ?>
<tr>
<td bgcolor="#F1F7FC" align="right"><span class="f_red">*</span> 验证码&nbsp;&nbsp;</td>
<td bgcolor="#FFFFFF">
<?php include template('captcha', 'chip');?>
<span id="dcaptcha" class="f_red"></span>
</td>
</tr>
<?php } ?>
<tr>
<td bgcolor="#F1F7FC"> </td>
<td bgcolor="#FFFFFF">
<input type="submit" name="submit" value=" 提交 "/>&nbsp;
<input type="reset" value=" 重写 "/>
</td>
</tr>
</table>
</form>
<?php if($lists) { ?>
<div class="b10">&nbsp;</div><div class="b10">&nbsp;</div>
<div class="fsearch">
<form action="<?php echo $EXT['guestbook_url'];?>index.php">
<strong>关键词：</strong>
<input type="text" size="50" name="kw" value="<?php echo $kw;?>"/> 
<input type="submit" value="搜索"/>
<input type="button" value="重置" onclick="Go('<?php echo $EXT['guestbook_url'];?>');"/>
</form>
</div>
<?php if(is_array($lists)) { foreach($lists as $k => $v) { ?>
<div class="b10">&nbsp;</div><div class="b10">&nbsp;</div>
<table width="100%" cellpadding="8" cellspacing="1" bgcolor="#E3EEF5">
<tr>
<td align="right" bgcolor="#F1F7FC" width="200"><?php if($v['hidden']) { ?>匿名<?php } else { ?><?php echo $v['truename'];?><?php } ?>
 <span class="px11"><?php echo $v['adddate'];?></span> 提问：&nbsp;&nbsp;</td>
<td bgcolor="#FFFFFF" class="lh18"><?php echo $v['content'];?></td>
</tr>
<?php if($v['reply']) { ?>
<tr>
<td align="right" bgcolor="#F1F7FC">网站 <span class="px11"><?php echo $v['editdate'];?></span> 回复：&nbsp;&nbsp;</td>
<td bgcolor="#FFFFFF" style="color:#D9251D;"><?php echo $v['reply'];?></td>
</tr>
<?php } ?>
</table>
<?php } } ?>
<?php if($pages) { ?><div class="pages"><?php echo $pages;?></div><?php } ?>
<?php } ?>

</div>
</div>
</td>
</tr>
</table>
</div>
<?php echo load('guest.js');?>
<script type="text/javascript">
function check() {
var l;
var f;
f = 'content';
l = Dd(f).value.length;
if(l < 5 || l > 1000) {
Dmsg('内容应为5-1000字，当前已输入'+l+'字', f);
return false;
}
<?php if($MOD['guestbook_captcha']) { ?>
f = 'captcha';
l = Dd(f).value;
if(!is_captcha(l)) {
Dmsg('请填写验证码', f);
return false;
}
<?php } ?>
return true;
}
<?php if($action == 'report') { ?>
$('#type').val('不良信息');
Dd('content').value = Dd('content').value+"\n-------------------------------\n举报理由：\n";
<?php } ?>
</script>
<?php include template('footer');?>