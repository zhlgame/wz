<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<div class="m">
<div class="m_l_1 f_l">
<div class="left_box">
<div class="pos">当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> » <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> » <a href="<?php echo $MOD['linkurl'];?>search.php">搜索</a></div>
<div class="fsearch">
<form action="<?php echo $MOD['linkurl'];?>search.php" id="fsearch">
<table cellpadding="5" cellspacing="3">
<tr>
<td width="80" align="right">关 键 词：</td>
<td>
<input type="text" size="60" name="kw" value="<?php echo $kw;?>" class="pd3"/>
</td>
</tr>
<tr>
<td></td>
<td>
<?php if(is_array($sfields)) { foreach($sfields as $k => $v) { ?>
<input type="radio" name="fields" value="<?php echo $k;?>" id="fd_<?php echo $k;?>"<?php if($fields==$k) { ?> checked<?php } ?>
/><label for="fd_<?php echo $k;?>"> <?php echo $v;?></label> 
<?php } } ?>
</td>
</tr>
<tr>
<td align="right">所属分类：</td>
<td>
<?php echo $category_select;?>  
所在地区：<?php echo $area_select;?>
</td>
</tr>
<tr>
<td align="right">更新日期：</td>
<td>
<?php echo dcalendar('fromdate', $fromdate, '');?> 至 <?php echo dcalendar('todate', $todate, '');?>
</td>
</tr>
<tr>
<td align="right">排序方式：</td>
<td>
<?php echo $order_select;?>
</td>
</tr>
<tr>
<td></td>
<td>
<input type="image" src="<?php echo DT_SKIN;?>image/btn_search.gif"/>  
<a href="<?php echo $MOD['linkurl'];?>search.php"><img src="<?php echo DT_SKIN;?>image/btn_reset_search.gif"/></a>
</td>
</tr>
</table>
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
 | <a href="###" onclick="Dd('ppt_<?php echo $p['oid'];?>').value='<?php echo $o;?>';Dd('fsearch').submit();"><?php if($p['select']==$o) { ?><span><?php echo $o;?></span><?php } else { ?><?php echo $o;?><?php } ?>
</a>
<?php } } ?>
</td>
</tr>
</table>
</div>
<?php } } ?>
<?php } ?>
</form>
</div>
<?php if($page==1 && $kw) { ?>
<?php echo ad($moduleid,$catid,$kw,6);?>
<?php echo load('m'.$moduleid.'_k'.urlencode($kw).'.htm');?>
<?php } ?>
<?php if($tags) { ?>
<?php include template('list-'.$module, 'tag');?>
<?php } else { ?>
<?php include template('noresult', 'message');?>
<?php } ?>
</div>
</div>
<div class="m_n f_l"> </div>
<div class="m_r_1 f_l">
<?php if($kw) { ?>
<div class="box_head"><div><strong>相关搜索</strong></div></div>
<div class="box_body">
<div class="sch_site">
<ul>
<?php if(is_array($MODULE)) { foreach($MODULE as $mod) { ?><?php if($mod['moduleid']>3 && $mod['moduleid']!=$moduleid && !$mod['islink']) { ?><li><a href="<?php echo $mod['linkurl'];?>search.php?kw=<?php echo urlencode($kw);?>">在 <span class="f_red"><?php echo $mod['name'];?></span> 找 <?php echo $kw;?></a></li><?php } ?>
<?php } } ?>
</ul>
</div>
<?php echo tag("moduleid=$moduleid&table=keyword&condition=moduleid=$moduleid and status=3 and word<>'$kw' and keyword like '%$keyword%'&pagesize=10&order=total_search desc&template=list-search_relate", -2);?>
</div>
<div class="b10"> </div>
<?php } ?>
<div class="sponsor"><?php echo ad($moduleid,$catid,$kw,7);?></div>
<div class="box_head"><div><strong>今日搜索排行</strong></div></div>
<div class="box_body">
<div class="rank_list">
<?php echo tag("moduleid=$moduleid&table=keyword&condition=moduleid=$moduleid and status=3 and updatetime>$today_endtime-86400&pagesize=10&order=today_search desc&key=today_search&template=list-search_rank");?>
</div>
</div>
<div class="b10"> </div>
<div class="box_head"><div><strong>本周搜索排行</strong></div></div>
<div class="box_body">
<div class="rank_list">
<?php echo tag("moduleid=$moduleid&table=keyword&condition=moduleid=$moduleid and status=3 and updatetime>$today_endtime-86400*7&pagesize=10&order=week_search desc&key=week_search&template=list-search_rank");?>
</div>
</div>
<div class="b10"> </div>
<div class="box_head"><div><strong>本月搜索排行</strong></div></div>
<div class="box_body">
<div class="rank_list">
<?php echo tag("moduleid=$moduleid&table=keyword&condition=moduleid=$moduleid and status=3 and updatetime>$today_endtime-86400*30&pagesize=10&order=month_search desc&key=month_search&template=list-search_rank");?>
</div>
</div>
</div>
</div>
<?php include template('footer1');?>