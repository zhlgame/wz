<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<div class="m">
<div class="m_l f_l">
<?php if($MOD['page_irec']) { ?>
<div class="box_head"><strong class="px13">» 推荐<?php echo $MOD['name'];?></strong></div>
<div class="box_body">
<div class="thumb">
<?php echo tag("moduleid=$moduleid&length=20&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&pagesize=".$MOD['page_irec']."&order=".$MOD['order']."&width=100&height=100&cols=4&template=thumb-table&target=_blank");?>
</div>
</div>
<?php } ?>
<?php if($MOD['page_icat']) { ?>
<table cellpadding="0" cellspacing="0" width="100%">
<?php if(is_array($maincat)) { foreach($maincat as $i => $c) { ?>
<?php if($i%2==0) { ?><tr><?php } ?>
<td valign="top" width="330">
<div class="b10"></div>
<div class="box_head"><span class="f_r"><a href="<?php echo $MOD['linkurl'];?><?php echo $c['linkurl'];?>">更多»</a></span><strong><?php echo $c['catname'];?></strong></div>
<div class="box_body li_dot f_gray"><?php echo tag("moduleid=$moduleid&condition=status=3&areaid=$cityid&catid=".$c['catid']."&order=".$MOD['order']."&pagesize=".$MOD['page_icat']."&datetype=2&target=_blank");?></div>
</td>
<?php if($i%2==0) { ?><td> </td><?php } ?>
<?php if($i%2==1) { ?></tr><?php } ?>
<?php } } ?>
</table>
<?php } ?>
</div>
<div class="m_n f_l"> </div>
<div class="m_r f_l">
<?php if($MOD['show_icat']) { ?>
<div class="box_head"><div><strong>按分类浏览</strong></div></div>
<div class="box_body">
<table width="100%" cellpadding="3">
<?php if(is_array($maincat)) { foreach($maincat as $k => $v) { ?>
<?php if($k%2==0) { ?><tr><?php } ?>
<td><a href="<?php echo $MOD['linkurl'];?><?php echo $v['linkurl'];?>"><?php echo set_style($v['catname'],$v['style']);?></a><?php if(!$cityid) { ?> <span class="f_gray px10">(<?php echo $v['item'];?>)</span><?php } ?>
</td>
<?php if($k%2==1) { ?></tr><?php } ?>
<?php } } ?>
</table>
</div>
<div class="b10"> </div>
<?php } ?>
<?php if($MOD['show_iarea']) { ?>
<div class="box_head"><div><strong>按地区浏览</strong></div></div>
<div class="box_body">
<?php $mainarea = get_mainarea(0)?>
<table width="100%" cellpadding="3">
<?php if(is_array($mainarea)) { foreach($mainarea as $k => $v) { ?>
<?php if($k%4==0) { ?><tr><?php } ?>
<td><a href="<?php echo $MOD['linkurl'];?>search.php?areaid=<?php echo $v['areaid'];?>" rel="nofollow"><?php echo $v['areaname'];?></a></td>
<?php if($k%4==3) { ?></tr><?php } ?>
<?php } } ?>
</table>
</div>
<div class="b10"> </div>
<?php } ?>
<?php if($MOD['page_ihits']) { ?>
<div class="box_head"><div><strong>最热<?php echo $MOD['name'];?></strong></div></div>
<div class="box_body">
<div class="rank_list"><?php echo tag("moduleid=$moduleid&condition=status=3 and addtime>$today_endtime-180*86400&areaid=$cityid&order=hits desc&pagesize=".$MOD['page_ihits']);?></div>
</div>
<?php } ?>
</div>
</div>
<?php include template('footer1');?>