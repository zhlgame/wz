<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<div class="m">
<div class="nav">当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &raquo; <a href="<?php echo $MOD['linkurl'];?>search.php">搜索</a></div>
</div>
<div class="m">
<div class="left_box" style="border-top:none;">
<div class="type">
<a href="<?php echo $MOD['linkurl'];?>search.php?action=job&kw=<?php echo urlencode($kw);?>" class="<?php if($action=='resume') { ?>type_2<?php } else { ?>type_1<?php } ?>
">职位搜索</a>
<a href="<?php echo $MOD['linkurl'];?>search.php?action=resume&kw=<?php echo urlencode($kw);?>" class="<?php if($action=='resume') { ?>type_1<?php } else { ?>type_2<?php } ?>
">人才搜索</a>
</div>
<div class="b10">&nbsp;</div>
<?php if($action == 'resume') { ?>
<form action="<?php echo $MOD['linkurl'];?>search.php">
<input type="hidden" name="action" id="action" value="<?php if($action=='job') { ?>job<?php } else { ?>resume<?php } ?>
"/>
<div style="padding:10px 0 10px 10px;border-bottom:#DDDDDD 1px solid;">
<table cellpadding="3" cellspacing="3">
<tr>
<td width="80" align="right">关 键 词：</td>
<td colspan="3">
<input type="text" size="80" name="kw" value="<?php echo $kw;?>" style="padding:3px 0 3px 1px;"/>
</td>
</tr>
<tr>
<td align="right">期望薪资：</td>
<td colspan="3">
<input type="text" size="10" name="minsalary" value="<?php echo $minsalary;?>"/> ~ <input type="text" size="10" name="maxsalary" value="<?php echo $maxsalary;?>"/>
&nbsp;&nbsp;
<select name="type">
<?php if(is_array($TYPE)) { foreach($TYPE as $k => $v) { ?>
<option value="<?php echo $k;?>"<?php if($type==$k) { ?> selected<?php } ?>
><?php echo $v;?></option>
<?php } } ?>
</select>
&nbsp;&nbsp;
<select name="gender">
<?php if(is_array($GENDER)) { foreach($GENDER as $k => $v) { ?>
<option value="<?php echo $k;?>"<?php if($gender==$k) { ?> selected<?php } ?>
><?php echo $v;?></option>
<?php } } ?>
</select>
&nbsp;&nbsp;
<select name="marriage">
<?php if(is_array($MARRIAGE)) { foreach($MARRIAGE as $k => $v) { ?>
<option value="<?php echo $k;?>"<?php if($marriage==$k) { ?> selected<?php } ?>
><?php echo $v;?></option>
<?php } } ?>
</select>
&nbsp;&nbsp;
<select name="education">
<?php if(is_array($EDUCATION)) { foreach($EDUCATION as $k => $v) { ?>
<option value="<?php echo $k;?>"<?php if($education==$k) { ?> selected<?php } ?>
><?php echo $v;?></option>
<?php } } ?>
</select>
&nbsp;&nbsp;
<select name="experience">
<option value="0"<?php if($experience==0) { ?> selected<?php } ?>
>工作经验</option>
<script type="text/javascript">
for(i=1;i<21;i++) {
document.write('<option value="'+i+'"'+(i==<?php echo $experience;?> ? ' selected' : '')+'>'+i+'年以上</option>');
}
</script>
</select>
</td>
</tr>
<tr>
<td align="right">更新日期：</td>
<td><?php echo dcalendar('fromdate', $fromdate, '');?> 至 <?php echo dcalendar('todate', $todate, '');?></td>
<td align="right">&nbsp;&nbsp;行业/职位：</td>
<td><?php echo $category_select;?></td>
</tr>
<tr>
<td align="right">信息类型：</td>
<td>
<input type="checkbox" name="level" id="level" value="1"<?php if($level) { ?> checked<?php } ?>
/> 推荐
<input type="checkbox" name="thumb" id="thumb" value="1"<?php if($thumb) { ?> checked<?php } ?>
/> 有照片
</td>
<td align="right">&nbsp;&nbsp;所在地区：</td>
<td><?php echo $area_select;?></td>
</tr>
<tr>
<td align="right"> </td>
<td colspan="3">
<input type="image" src="<?php echo DT_SKIN;?>image/resume_search.gif"/>
<a href="<?php echo $MOD['linkurl'];?>search.php?action=resume"><img src="<?php echo DT_SKIN;?>image/btn_reset_search.gif"/></a>
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?action=add&mid=<?php echo $moduleid;?>&resume=1" id="add_link"><img src="<?php echo DT_SKIN;?>image/add_resume.gif" style="margin-left:150px;" id="add_img"/></a>
</td>
</tr>
</table>
</div>
</form>
<?php if($tags) { ?>
<table cellpadding="5" cellspacing="5" width="100%">
<?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<tr align="center">
<td align="left">&nbsp;&nbsp;<a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['truename'];?>"><?php echo $t['truename'];?>(<?php if($t['gender']==1) { ?>男<?php } else { ?>女<?php } ?>
)</a></td>
<td><?php echo $CATEGORY[$t['parentid']]['catname'];?></td>
<td><?php echo $CATEGORY[$t['catid']]['catname'];?></td>
<td><?php echo $EDUCATION[$t['education']];?></td>
<td><?php echo $t['age'];?>岁</td>
<td><?php if($t['marriage']==2) { ?>已婚<?php } else { ?>未婚<?php } ?>
</td>
<td><?php if($t['experience']) { ?><?php echo $t['experience'];?>年经验<?php } else { ?>无工作经验<?php } ?>
</td>
<td>
<?php if($t['minsalary'] && $t['maxsalary']) { ?>
<?php echo $t['minsalary'];?>-<?php echo $t['maxsalary'];?><?php echo $DT['money_unit'];?>/月
<?php } else if($t['minsalary']) { ?>
<?php echo $t['minsalary'];?><?php echo $DT['money_unit'];?>/月以上
<?php } else if($t['maxsalary']) { ?>
<?php echo $t['maxsalary'];?><?php echo $DT['money_unit'];?>/月以内
<?php } else { ?>
面议
<?php } ?>
</td>
<td><?php echo area_pos($t['areaid'], '');?></td>
<td width="150" class="px11"><?php echo timetodate($t['edittime'], 5);?></td>
</tr>
<?php } } ?>
</table>
<?php if($pages) { ?><div class="pages"><?php echo $pages;?></div><?php } ?>
<?php } else { ?>
<?php include template('noresult', 'message');?>
<?php } ?>
<?php } else { ?>
<form action="<?php echo $MOD['linkurl'];?>search.php">
<input type="hidden" name="action" id="action" value="<?php if($action=='job') { ?>job<?php } else { ?>resume<?php } ?>
"/>
<div style="padding:10px 0 10px 10px;border-bottom:#DDDDDD 1px solid;">
<table cellpadding="3" cellspacing="3">
<tr>
<td width="80" align="right">关 键 词：</td>
<td colspan="3">
<input type="text" size="80" name="kw" value="<?php echo $kw;?>" style="padding:3px 0 3px 1px;"/>
</td>
</tr>
<tr>
<td align="right">待遇水平：</td>
<td colspan="3">
<input type="text" size="10" name="minsalary" value="<?php echo $minsalary;?>"/> ~ <input type="text" size="10" name="maxsalary" value="<?php echo $maxsalary;?>"/>
&nbsp;&nbsp;
<select name="type">
<?php if(is_array($TYPE)) { foreach($TYPE as $k => $v) { ?>
<option value="<?php echo $k;?>"<?php if($type==$k) { ?> selected<?php } ?>
><?php echo $v;?></option>
<?php } } ?>
</select>
&nbsp;&nbsp;
<select name="gender">
<?php if(is_array($GENDER)) { foreach($GENDER as $k => $v) { ?>
<option value="<?php echo $k;?>"<?php if($gender==$k) { ?> selected<?php } ?>
><?php echo $v;?></option>
<?php } } ?>
</select>
&nbsp;&nbsp;
<select name="marriage">
<?php if(is_array($MARRIAGE)) { foreach($MARRIAGE as $k => $v) { ?>
<option value="<?php echo $k;?>"<?php if($marriage==$k) { ?> selected<?php } ?>
><?php echo $v;?></option>
<?php } } ?>
</select>
&nbsp;&nbsp;
<select name="education">
<?php if(is_array($EDUCATION)) { foreach($EDUCATION as $k => $v) { ?>
<option value="<?php echo $k;?>"<?php if($education==$k) { ?> selected<?php } ?>
><?php echo $v;?></option>
<?php } } ?>
</select>
&nbsp;&nbsp;
<select name="experience">
<option value="0"<?php if($experience==0) { ?> selected<?php } ?>
>工作经验</option>
<script type="text/javascript">
for(i=1;i<21;i++) {
document.write('<option value="'+i+'"'+(i==<?php echo $experience;?> ? ' selected' : '')+'>'+i+'年以上</option>');
}
</script>
</select>
</td>
</tr>
<tr>
<td align="right">更新日期：</td>
<td><?php echo dcalendar('fromdate', $fromdate, '');?> 至 <?php echo dcalendar('todate', $todate, '');?></td>
<td align="right">&nbsp;&nbsp;行业/职位：</td>
<td><?php echo $category_select;?></td>
</tr>
<tr>
<td align="right">信息类型：</td>
<td>
<input type="checkbox" name="level" id="level" value="1"<?php if($level) { ?> checked<?php } ?>
/> 推荐
<input type="checkbox" name="vip" id="vip" value="1"<?php if($vip) { ?> checked<?php } ?>
/> <?php echo VIP;?>
</td>
<td align="right">&nbsp;&nbsp;所在地区：</td>
<td><?php echo $area_select;?></td>
</tr>
<tr>
<td align="right"> </td>
<td colspan="3">
<input type="image" src="<?php echo DT_SKIN;?>image/job_search.gif"/>
<a href="<?php echo $MOD['linkurl'];?>search.php?action=job" rel="nofollow"><img src="<?php echo DT_SKIN;?>image/btn_reset_search.gif"/></a>
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?action=add&mid=<?php echo $moduleid;?>" id="add_link" rel="nofollow"><img src="<?php echo DT_SKIN;?>image/add_job.gif" style="margin-left:150px;" id="add_img"/></a>
</td>
</tr>
</table>
</div>
<?php if($CP) { ?>
<?php if(is_array($PPT)) { foreach($PPT as $p) { ?>
<div class="ppt">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td class="ppt_l" valign="top">按<?php echo $p['name'];?></td>
<td class="ppt_r" valign="top">
<input type="hidden" name="ppt_<?php echo $p['oid'];?>" id="ppt_<?php echo $p['oid'];?>" value="<?php echo $p['select'];?>"/>
<a href="###" onclick="Dd('ppt_<?php echo $p['oid'];?>').value='';Dd('fsearch').submit();"><?php if($p['select']=='') { ?><span>全部</span><?php } else { ?>全部<?php } ?>
</a>
<?php if(is_array($p['options'])) { foreach($p['options'] as $o) { ?>
&nbsp;|&nbsp;<a href="###" onclick="Dd('ppt_<?php echo $p['oid'];?>').value='<?php echo $o;?>';Dd('fsearch').submit();"><?php if($p['select']==$o) { ?><span><?php echo $o;?></span><?php } else { ?><?php echo $o;?><?php } ?>
</a>
<?php } } ?>
</td>
</tr>
</table>
</div>
<?php } } ?>
<?php } ?>
</form>
<?php if($page==1 && $kw) { ?>
<?php echo ad($moduleid,$catid,$kw,6);?>
<?php echo load('m'.$moduleid.'_k'.urlencode($kw).'.htm');?>
<?php } ?>
<?php if($tags) { ?>
<?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<div class="list">
<table>
<tr align="center">
<td width="10"> </td>
<td align="left"><h3><span class="f_r"><?php if($t['vip']) { ?><img src="<?php echo DT_SKIN;?>image/vip_<?php echo $t['vip'];?>.gif" alt="<?php echo VIP;?>" title="<?php echo VIP;?>:<?php echo $t['vip'];?>级"/><?php } ?>
</span><a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></h3><a href="<?php echo userurl($t['username']);?>" target="_blank"><?php echo $t['company'];?></a></td>
<td width="150"><?php echo $CATEGORY[$t['parentid']]['catname'];?></td>
<td width="150" class="f_orange">
<?php if($t['minsalary'] && $t['maxsalary']) { ?>
<?php echo $t['minsalary'];?>-<?php echo $t['maxsalary'];?><?php echo $DT['money_unit'];?>/月
<?php } else if($t['minsalary']) { ?>
<?php echo $t['minsalary'];?><?php echo $DT['money_unit'];?>/月以上
<?php } else if($t['maxsalary']) { ?>
<?php echo $t['maxsalary'];?><?php echo $DT['money_unit'];?>/月以内
<?php } else { ?>
面议
<?php } ?>
</td>
<td width="120"><?php echo area_pos($t['areaid'], '');?></td>
<td width="100">
<?php if($t['minage'] && $t['maxage']) { ?>
<?php echo $t['minage'];?>-<?php echo $t['maxage'];?>岁
<?php } else if($t['minage']) { ?>
<?php echo $t['minage'];?>岁以上
<?php } else if($t['maxage']) { ?>
<?php echo $t['maxage'];?>岁以内
<?php } else { ?>
不限年龄
<?php } ?>
</td>
<td width="50"><?php if($t['total']) { ?><?php echo $t['total'];?>人<?php } else { ?>若干<?php } ?>
</td>
<td width="150" class="f_gray px11"><?php echo timetodate($t['edittime'], 5);?></td>
</tr>
</table>
</div>
<?php } } ?>
<?php if($pages) { ?><div class="pages"><?php echo $pages;?></div><?php } ?>
<?php } else { ?>
<?php include template('noresult', 'message');?>
<?php } ?>
<?php } ?>
<br/>
</div>
</div>
<?php include template('footer');?>