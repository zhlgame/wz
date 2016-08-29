<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<dl>
<dt><a target="_blank" href="<?php echo $t['linkurl'];?>"><img src="<?php echo $t['thumb'];?>"></a></dt>
<dd><a target="_blank" href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?></a></dd>
<dd>价格：<b class="orange"><?php if($t['unit'] && $t['price']>0) { ?><?php echo $t['price'];?>/<?php echo $t['unit'];?><?php } else { ?>面议<?php } ?>
</b></dd>
<dd class="gray1"><?php echo $t['company'];?></dd>
</dl>
 <?php } } ?>                  
