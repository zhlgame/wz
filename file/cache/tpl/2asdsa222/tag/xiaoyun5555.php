<?php defined('IN_DESTOON') or exit('Access Denied');?><ul class="clearfix">
<li class="first">
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<span><a href="<?php echo $MODULE[$moduleid]['linkurl'];?>search.php?kw=<?php echo urlencode($t['word']);?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
 class="b" rel="nofollow"><?php echo $t['word'];?></a></span>
<?php if($i>0 && $i%2==1) { ?></li><li><?php } ?>
 
<?php } } ?>
</li></ul>
