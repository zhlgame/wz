<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<div class="m">
<div class="m_l f_l">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td valign="top" width="330">
<?php $tags=tag("table=quote_product&condition=1&areaid=$cityid&pagesize=20&order=edittime desc&length=16&template=null");?>
<?php if($tags) { ?>
<table cellpadding="3" cellspacing="1" width="100%" bgcolor="#DDDDDD">
<tr bgcolor="#EEEEEE">
<th>品名</th>
<th width="90">价格</th>
<th width="40">单位</th>
<th width="70">报价数</th>
</tr>
</table>
<div id="quoteup">
<table cellpadding="0" cellspacing="0" width="100%">
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<tr bgcolor="#FFFFFF" align="center">
<td><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('price.php?itemid='.$t['itemid']);?>" target="_blank" title="<?php echo $t['alt'];?>" class="b"><?php echo $t['title'];?></a></td>
<td<?php if($i==0) { ?> width="96"<?php } ?>
><span class="f_red"><?php echo $DT['money_sign'];?><?php echo $t['price'];?></span></td>
<td<?php if($i==0) { ?> width="46"<?php } ?>
><?php echo $t['unit'];?></td>
<td<?php if($i==0) { ?> width="75"<?php } ?>
><?php echo $t['item'];?></td>
</tr>
<?php } } ?>
</table>
</div>
<?php } ?>
<div class="b10"></div>
<center><a href="<?php echo $MOD['linkurl'];?>product.php" title="<?php echo $t['alt'];?>">查看所有产品报价»</a></center>
</td>
<td width="10"></td>
<td valign="top">
<div class="headline">
<?php echo tag("moduleid=$moduleid&condition=status=3 and level=5&areaid=$cityid&order=".$MOD['order']."&pagesize=1&template=list-hl");?>
<?php echo tag("moduleid=$moduleid&condition=status=3 and level=4&areaid=$cityid&pagesize=2&order=".$MOD['order']."&template=list-hlr&cols=2&target=_blank");?>
</div>
<div class="b5"></div>
<div class="subline">
<?php echo tag("moduleid=$moduleid&condition=status=3 and level=1&areaid=$cityid&order=".$MOD['order']."&pagesize=5&datetype=2&target=_blank");?>
</div>
</td>
</tr>
</table>
<div class="c_b"></div>
<?php if($MOD['page_icat']) { ?>
<table cellpadding="0" cellspacing="0" width="100%">
<?php if(is_array($maincat)) { foreach($maincat as $i => $c) { ?>
<?php if($i%2==0) { ?><tr><?php } ?>
<td valign="top" width="330">
<div class="b10"></div>
<div class="box_head"><span class="f_r"><a href="<?php echo $MOD['linkurl'];?><?php echo $c['linkurl'];?>">更多»</a></span><strong><?php echo $c['catname'];?></strong></div>
<div class="box_body li_dot f_gray"><?php echo tag("moduleid=$moduleid&catid=".$c['catid']."&areaid=$cityid&condition=status=3&order=".$MOD['order']."&pagesize=".$MOD['page_icat']."&datetype=2&target=_blank");?></div>
</td>
<?php if($i%2==0) { ?><td> </td><?php } ?>
<?php if($i%2==1) { ?></tr><?php } ?>
<?php } } ?>
</table>
<?php } ?>
</div>
<div class="m_n f_l"> </div>
<div class="m_r f_l">
<div class="box_head"><div><strong>本周关注排行</strong></div></div>
<div class="box_body">
<div class="rank_list">
<?php echo tag("moduleid=$moduleid&table=keyword&condition=moduleid=$moduleid and status=3 and updatetime>$today_endtime-86400*7&pagesize=10&order=week_search desc&key=week_search&template=list-search_rank");?>
</div>
</div>
<div class="b10 c_b"> </div>
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
<div class="b10 c_b"> </div>
<div class="box_head"><div><strong>点击排行</strong></div></div>
<div class="box_body">
<div class="rank_list"><?php echo tag("moduleid=$moduleid&condition=status=3 and addtime>$today_endtime-30*86400&areaid=$cityid&order=hits desc&pagesize=10");?></div>
</div>
</div>
</div>
<?php echo load('marquee.js');?>
<script type="text/javascript">
new dmarquee(22, 20, 1000, 'quoteup');
</script>
<?php include template('footer1');?>