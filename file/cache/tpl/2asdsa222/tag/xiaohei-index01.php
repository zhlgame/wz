<?php defined('IN_DESTOON') or exit('Access Denied');?> <ul style="margin-top: -41px;" class="clearfix fl" id="marqueebox">
<li> 
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<span class="fl te"><a href="<?php echo $t['linkurl'];?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
 title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></span>
<?php if($i<($pagesize-1) && $i%3==2) { ?></li><li><?php } ?>
<?php } } ?>
</li>
                      </ul>
