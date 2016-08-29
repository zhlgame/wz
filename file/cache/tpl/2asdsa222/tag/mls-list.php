<?php defined('IN_DESTOON') or exit('Access Denied');?><ul class="clearfix">
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<li><?php if($datetype) { ?><span class="date">&nbsp;<?php echo timetodate($t['addtime'], $datetype);?></span><?php } ?>
<?php if($class) { ?><i class="<?php echo $class;?>"></i><?php } ?>
<?php if($showcat) { ?><span class="catname"><a href="<?php echo $t['caturl'];?>" <?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
><?php echo $t['catname'];?></a><em>|</em></span><?php } ?>
<a href="<?php echo $t['linkurl'];?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
 title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></li>
<?php } } ?>
</ul>
<?php if($showpage && $pages) { ?><div class="pages"><?php echo $pages;?></div><?php } ?>
