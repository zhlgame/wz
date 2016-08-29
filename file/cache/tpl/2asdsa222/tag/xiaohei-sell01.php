<?php defined('IN_DESTOON') or exit('Access Denied');?><ul>
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<li><?php if($datetype) { ?><span class="time">&nbsp;<?php echo timetodate($t['addtime'], $datetype);?></span><?php } ?>
<?php if($showcat) { ?><a href="<?php echo $t['caturl'];?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
 class="catname">[<?php echo $t['catname'];?>]</a> <?php } ?>
<a href="<?php echo $t['linkurl'];?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
 title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></li>
<?php } } ?>
</ul>
