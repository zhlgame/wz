<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', 'member');?>
<script type="text/javascript">c(3);</script>
<div class="menu">
<table cellpadding="0" cellspacing="0">
<tr>
<td class="tab" id="add"><a href="?action=add"><span>添加链接</span></a></td>
<td class="tab" id="s3"><a href="?action=index"><span>已发布<span class="px10">(<?php echo $nums['3'];?>)</span></span></a></td>
<td class="tab" id="s2"><a href="?status=2"><span>审核中<span class="px10">(<?php echo $nums['2'];?>)</span></span></a></td>
</tr>
</table>
</div>
<?php if($action=='add' || $action=='edit') { ?>
<form method="post" action="?" id="dform" onsubmit="return check();">
<input type="hidden" name="action" value="<?php echo $action;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" name="forward" value="<?php echo $forward;?>"/>
<table cellpadding="6" cellspacing="1" class="tb">
<tr>
<td class="tl"><span class="f_red">*</span> 网站名称</td>
<td class="tr"><input name="post[title]" type="text" id="title" size="40" value="<?php echo $title;?>"/>  <?php echo dstyle('post[style]', $style);?> <span id="dtitle" class="f_red"></span></td>
</tr>
<tr>
<td class="tl"><span class="f_red">*</span> 链接地址</td>
<td class="tr"><input type="text" size="40" name="post[linkurl]" id="linkurl" value="<?php echo $linkurl;?>"/> <span id="dlinkurl" class="f_red"></span></td>
</tr>
<tr>
<td class="tl">显示顺序</td>
<td class="tr"><input name="post[listorder]" type="text" id="listorder" size="5" value="<?php echo $listorder;?>"/>  <span id="dlistorder" class="f_red"></span> 填写数字,数字越大越靠前</td>
</tr>
<tr>
<td class="tl">&nbsp;</td>
<td class="tr" height="50"><input type="submit" name="submit" value=" 提 交 " class="btn_g"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value=" 取 消 " class="btn" onclick="history.back(-1);"/></td>
</tr>
</table>
</form>
<script type="text/javascript">s('link');m(<?php if($action=='add') { ?>'add'<?php } else { ?>'s<?php echo $status;?>'<?php } ?>
);</script>
<?php } else { ?>
<form action="?">
<input type="hidden" name="status" value="<?php echo $status;?>"/>
<div class="tt">
&nbsp;<input type="text" size="60" name="kw" value="<?php echo $kw;?>" title="关键词"/> &nbsp;
<input type="submit" value=" 搜 索 " class="btn"/>&nbsp;
<input type="button" value=" 重 置 " class="btn" onclick="Go('?status=<?php echo $status;?>');"/>
</div>
</form>
<form method="post">
<div class="ls">
<table cellspacing="0" cellpadding="0" class="tb">
<tr>
<th width="20"><input type="checkbox" onclick="checkall(this.form);"/></th>
<th>链接名称</th>
<th>网站地址</th>
<th>添加时间</th>
<th width="40">修改</th>
<th width="40">删除</th>
</tr>
<?php if(is_array($lists)) { foreach($lists as $k => $v) { ?>
<tr onmouseover="this.className='on';" onmouseout="this.className='';" align="center">
<td><input type="checkbox" name="itemid[]" value="<?php echo $v['itemid'];?>"/></td>
<td><a href="<?php echo $v['linkurl'];?>" target="_blank"><?php echo $v['title'];?></a></td>
<td><a href="<?php echo $v['linkurl'];?>" target="_blank"><?php echo $v['linkurl'];?></a></td>
<td class="f_gray"><?php echo $v['adddate'];?></td>
<td><a href="?action=edit&itemid=<?php echo $v['itemid'];?>"><img width="16" height="16" src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/edit.png" title="修改" alt=""/></a></td>
<td><a href="?action=delete&itemid=<?php echo $v['itemid'];?>" onclick="if(!confirm('确定要删除吗？此操作将不可撤销')) return false;"><img width="16" height="16" src="<?php echo DT_STATIC;?><?php echo $MODULE['2']['moduledir'];?>/image/delete.png" title="删除" alt=""/></a></td>
</tr>
<?php } } ?>
</table>
</div>
<div class="btns">
<input type="submit" value=" 删除选中 " class="btn" onclick="if(confirm('确定要删除选中链接吗？')){this.form.action='?action=delete'}else{return false;}"/>
</div>
</form>
<?php if($MG['link_limit']) { ?>
<div class="limit">总共可发 <span class="f_b f_red"><?php echo $MG['link_limit'];?></span> 条&nbsp;&nbsp;&nbsp;当前已发 <span class="f_b"><?php echo $limit_used;?></span> 条&nbsp;&nbsp;&nbsp;还可以发 <span class="f_b f_blue"><?php echo $limit_free;?></span> 条</div>
<?php } ?>
<div class="pages"><?php echo $pages;?></div>
<script type="text/javascript">s('link');m('s<?php echo $status;?>');</script>
<?php } ?>
<?php if($action=='add' || $action=='edit') { ?>
<script type="text/javascript">
function check() {
if(Dd('title').value == '') {
Dmsg('请填写网站名称', 'title');
return false;
}
if(Dd('linkurl').value.length < 15) {
Dmsg('请填写网站地址', 'linkurl');
return false;
}
return true;
}
</script>
<?php } ?>
<?php include template('footer', 'member');?>