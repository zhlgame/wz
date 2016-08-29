<?php defined('IN_DESTOON') or exit('Access Denied');?><ul class="clearfix">
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<li><?php if($datetype) { ?><span class="fr">&nbsp;【<?php echo timetodate($t['addtime'], $datetype);?>】</span><?php } ?>
<a href="<?php echo $t['linkurl'];?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
 title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></li>
<?php } } ?>
</ul>
