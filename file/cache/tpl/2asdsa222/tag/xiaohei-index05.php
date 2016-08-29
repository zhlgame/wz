<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<dl><dt><a class="a-img" href="<?php echo $t['linkurl'];?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
><img src="<?php echo $t['thumb'];?>" width="<?php echo $width;?>" height="<?php echo $height;?>" alt="<?php echo $t['alt'];?>"/></a></dt>
<dd><strong class="te"><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['alt'];?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
><?php echo $t['title'];?></a></strong><?php echo $t['introduce'];?></dd>
</dl>
<?php } } ?>
