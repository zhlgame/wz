<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<div class="m">
<div class="left_box">
<div class="pos">当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a>
&raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a>
<?php if($catid) { ?>&raquo; <?php echo cat_pos($CAT, ' &raquo; ');?><?php } ?>
</div>
<div class="category">
<p><img src="<?php echo DT_SKIN;?>image/arrow.gif" width="17" height="12" alt=""/> <strong>按分类浏览</strong></p>
<div>
<table width="100%" cellpadding="3">
<?php if(is_array($maincat)) { foreach($maincat as $k => $v) { ?>
<?php if($k%$MOD['page_subcat']==0) { ?><tr><?php } ?>
<td><a href="<?php echo $MOD['linkurl'];?><?php echo $v['linkurl'];?>"><?php echo set_style($v['catname'],$v['style']);?></a><?php if(!$cityid) { ?> <span class="f_gray px10">(<?php echo $v['item'];?>)</span><?php } ?>
</td>
<?php if($k%$MOD['page_subcat']==($MOD['page_subcat']-1)) { ?></tr><?php } ?>
<?php } } ?>
</table>
</div>
</div><?php echo tag("moduleid=$moduleid&condition=status=3&catid=$catid&areaid=$cityid&pagesize=".$MOD['pagesize']."&page=$page&showpage=1&width=250&height=180&cols=3&datetype=5&order=".$MOD['order']."&fields=".$MOD['fields']."&target=_blank&lazy=$lazy&template=list-group");?>
</div>
</div>
<?php include template('footer');?>