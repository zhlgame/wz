<?php defined('IN_DESTOON') or exit('Access Denied');?><ul class="clearfix">
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<li><dl><dt class="vertical-img"><a title="<?php echo $t['alt'];?>" class="box-img" href="<?php echo $t['linkurl'];?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
><img src="<?php echo $t['thumb'];?>" width="<?php echo $width;?>" height="<?php echo $height;?>" alt="<?php echo $t['alt'];?>"/></a></dt>
<dd><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['alt'];?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
><?php echo $t['title'];?></a></dd>
</dl>
</li>
<?php } } ?>
</table>
<?php if($showpage && $pages) { ?><div class="pages"><?php echo $pages;?></div><?php } ?>
