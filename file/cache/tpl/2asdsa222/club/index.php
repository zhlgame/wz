<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<div class="m">
<div class="m_l f_l">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<?php if($MOD['page_islide']) { ?>
<td valign="top" width="330">
<?php echo tag("moduleid=$moduleid&condition=status=3 and level=2 and thumb!=''&areaid=$cityid&order=addtime DESC&pagesize=".$MOD['page_islide']."&width=330&height=250&target=_blank&template=slide");?>
</td>
<td width="10"></td>
<?php } ?>
<td valign="top">
<div class="headline">
<?php echo tag("moduleid=$moduleid&condition=status=3 and level=3&areaid=$cityid&order=addtime DESC&pagesize=1&target=_blank&template=list-hl");?>
</div>
<div class="b5"></div>
<div class="subline">
<?php echo tag("moduleid=$moduleid&condition=status=3 and level=1&areaid=$cityid&order=addtime DESC&pagesize=8&datetype=2&target=_blank");?>
</div>
</td>
</tr>
</table>
<div class="c_b"></div>
</div>
<div class="m_n f_l">&nbsp;</div>
<div class="m_r f_l">
<!--
<div class="box_head"><div><strong>圈子搜索</strong></div></div>
<div class="box_body">
<div class="club_sch">
<form action="<?php echo $MOD['linkurl'];?>search.php" onsubmit="return club_sch_check();">
<input type="hidden" name="action" value="" id="club_action"/>
<input type="text" name="kw" id="club_kw" value="请输入关键词" class="club_sch_inp" onfocus="if(this.value=='请输入关键词')this.value='';"/>
<div class="club_sch_btn">
<input type="submit" value="搜圈子" onclick="Dd('club_action').value='group';"/>
<input type="submit" value="搜主题" onclick="Dd('club_action').value='post';"/>
<input type="submit" value="搜回复" onclick="Dd('club_action').value='reply';"/>
</div>
</form>
<script type="text/javascript">
function club_sch_check() {
if(Dd('club_kw').value == '请输入关键词' || Dd('club_kw').value.length < 1) {
alert('请输入关键词');
Dd('club_kw').focus();
return false;
}
return true;
}
</script>
<div class="club_sch_item">
商圈：<?php echo $db->count($table.'_group', 'status=3', 1800);?>&nbsp;&nbsp;&nbsp;
帖子：<?php echo $db->count($table, 'status=3', 1800);?>&nbsp;&nbsp;&nbsp;
今日：<?php echo $db->count($table, 'status=3 and addtime>'.($today_endtime-86400), 1800);?>
</div>
</div>
</div>
-->
<div class="box_head"><div><strong>本周热点</strong></div></div>
<div class="box_body">
<div class="rank_list"><?php echo tag("moduleid=$moduleid&condition=status=3 and addtime>$today_endtime-3000*86400&areaid=$cityid&order=hits desc&pagesize=7&target=_blank");?></div>
</div>
<div class="b10 c_b">&nbsp;</div>
<div class="club_my">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td width="33%"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=<?php echo $moduleid;?>&job=join">我的商圈</a></td>
<td><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=<?php echo $moduleid;?>">我的主题</a></td>
<td width="33%"><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=<?php echo $moduleid;?>&job=group&action=add">创建商圈</a></td>
</tr>
</table>
</div>
</div>
</div>
<?php if(is_array($childcat)) { foreach($childcat as $i => $c) { ?>
<div class="m">
<div class="b10"></div>
<div class="box_head"><span class="f_r"><a href="<?php echo $MOD['linkurl'];?><?php echo $c['linkurl'];?>">更多&raquo;</a></span><strong><?php echo $c['catname'];?></strong></div>
<div class="group_cat">
<div class="box_body">
<?php $tags=tag("moduleid=$moduleid&table=club_group&condition=status=3&catid=".$c['catid']."&areaid=$cityid&order=addtime desc&pagesize=".$MOD['page_icat']."&template=null");?>
<table width="100%">
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<?php if($i%8==0) { ?><tr align="center"><?php } ?>
<td width="10%" valign="top" title="主题：<?php echo $t['post'];?> 粉丝：<?php echo $t['fans'];?>"><a href="<?php echo $t['linkurl'];?>"><img src="<?php echo $t['thumb'];?>" width="80" height="80" alt="<?php echo $t['alt'];?>"/></a>
<ul><li><a href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?><?php echo $MOD['seo_name'];?></a></li></ul></td>
<?php if($i%8==7) { ?></tr><?php } ?>
<?php } } ?>
</table>
</div>
</div>
</div>
<?php } } ?>
<?php include template('footer');?>