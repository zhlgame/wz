<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<div class="m">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td valign="top" class="left_menu">
<ul>
<li class="left_menu_li"><a href="<?php echo $MODULE['1']['linkurl'];?>">网站首页</a></li>
<li class="left_menu_li" id="type_0"><a href="<?php echo $url;?>">友情链接</a></li>
<?php if(is_array($_TP['0'])) { foreach($_TP['0'] as $v0) { ?>
<li class="left_menu_li" id="type_<?php echo $v0['typeid'];?>"><a href="<?php echo $url;?><?php echo list_url($v0['typeid']);?>"><?php echo $v0['typename'];?></a></li>
<?php if(isset($_TP['1'][$v0['typeid']])) { ?>
<?php if(is_array($_TP['1'][$v0['typeid']])) { foreach($_TP['1'][$v0['typeid']] as $v1) { ?>
<li class="left_menu_li" id="type_<?php echo $v1['typeid'];?>"><a href="<?php echo $url;?><?php echo list_url($v1['typeid']);?>">&nbsp;|- <?php echo $v1['typename'];?></a></li>
<?php } } ?>
<?php } ?>
<?php } } ?>
<li class="left_menu_li" id="type_reg"><a href="<?php echo $url;?>index.php?action=reg">申请链接</a></li>
</ul>
</td>
<td valign="top">
<div class="left_box">
<?php if($action == 'reg') { ?>
<div class="pos">当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $url;?>">友情链接</a> &raquo; <a href="<?php echo $url;?>index.php?action=reg">申请链接</a></div>
<br/>
<form method="post" action="<?php echo $url;?>index.php" id="dform" onsubmit="return check();">
<input type="hidden" name="action" value="reg"/>
<table cellpadding="6" cellspacing="1" width="96%" align="center" bgcolor="#E3EEF5">
<?php if($MOD['link_request']) { ?>
<tr bgcolor="#FFFFFF">
<td bgcolor="#F1F7FC">链接说明</td>
<td><?php echo $MOD['link_request'];?></td>
</tr>
<?php } ?>
<tr bgcolor="#FFFFFF">
<td bgcolor="#F1F7FC" width="100">网站分类 <span class="f_red">*</span></td>
<td><?php echo $type_select;?> <span id="dtypeid" class="f_red"></span></td>
</tr>
<tr bgcolor="#FFFFFF">
<td bgcolor="#F1F7FC">网站名称 <span class="f_red">*</span></td>
<td><input name="post[title]" type="text" id="title" size="40" /> <span id="dtitle" class="f_red"></span></td>
</tr>
<tr bgcolor="#FFFFFF">
<td bgcolor="#F1F7FC">网站地址 <span class="f_red">*</span></td>
<td><input name="post[linkurl]" type="text" id="linkurl" size="40" value="http://"/> <span id="dlinkurl" class="f_red"></span></td>
</tr>
<tr bgcolor="#FFFFFF">
<td bgcolor="#F1F7FC">网站LOGO</td>
<td><input name="post[thumb]" type="text" id="thumb" size="40"/> <span id="dthumb" class="f_red"></span></td>
</tr>
<tr bgcolor="#FFFFFF">
<td bgcolor="#F1F7FC">网站介绍</td>
<td><textarea name="post[introduce]" style="width:300px;height:40px;"></textarea></td>
</tr>
<tr bgcolor="#FFFFFF">
<td bgcolor="#F1F7FC">验证码 <span class="f_red">*</span></td>
<td><?php include template('captcha', 'chip');?> <span id="dcaptcha" class="f_red"></span></td>
</tr>
<tr bgcolor="#FFFFFF">
<td bgcolor="#F1F7FC"> </td>
<td><input type="submit" name="submit" value=" 确定 "/>&nbsp;&nbsp;<input type="reset" name="reset" value=" 重置 "/></td>
</tr>
</table>
</form>
<br/>
<script type="text/javascript">
function check() {
var l;
var f;
f = 'typeid';
l = Dd(f).value;
if(l == 0) {
Dmsg('请选择分类', f);
return false;
}
f = 'title';
l = Dd(f).value.length;
if(l < 2) {
Dmsg('请输入网站名称', f);
return false;
}
f = 'linkurl';
l = Dd(f).value.length;
if(l < 12) {
Dmsg('请输入网站地址', f);
return false;
}
f = 'captcha';
l = Dd(f).value;
if(!is_captcha(l)) {
Dmsg('请填写验证码', f);
return false;
}
}
try{Dd('type_reg').className='left_menu_on';}catch(e){}
</script>
<?php } else { ?>
<div class="pos"><span class="f_r"><a href="<?php echo $url;?>index.php?action=reg" class="b">申请链接</a></span>当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $url;?>">友情链接</a><?php if($typeid) { ?> &raquo; <a href="<?php echo $url;?><?php echo list_url($typeid);?>"><?php echo $TYPE[$typeid]['typename'];?></a><?php } ?>
</div>
<div style="padding:10px;">
<?php if($typeid) { ?>
<?php echo tag("table=link&condition=thumb!='' and status=3 and username='' and typeid IN (".type_child($typeid, $TYPE).")&areaid=$cityid&pagesize=1400&order=listorder desc,itemid desc&template=list-link&cols=7");?>
<div class="b10"></div>
<?php echo tag("table=link&condition=thumb='' and status=3 and username='' and typeid IN (".type_child($typeid, $TYPE).")&areaid=$cityid&pagesize=1400&order=listorder desc,itemid desc&template=list-link&cols=7");?>
<?php } else { ?>
<?php echo tag("table=link&condition=status=3 and thumb!='' and username=''&pagesize=1400&order=listorder desc,itemid desc&areaid=$cityid&template=list-link&cols=7");?>
<div class="b10"></div>
<?php echo tag("table=link&condition=status=3 and thumb='' and username=''&pagesize=1400&order=listorder desc,itemid desc&areaid=$cityid&template=list-link&cols=7");?>
<?php } ?>
</div>
<script type="text/javascript">try{Dd('type_<?php echo $typeid;?>').className='left_menu_on';}catch(e){}</script>
<?php } ?>
</div>
</td>
</tr>
</table>
</div>
<?php include template('footer');?>