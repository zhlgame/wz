<?php defined('IN_DESTOON') or exit('Access Denied');?><ul class="clearfix">
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<li><a class="a-img" href="<?php echo $t['linkurl'];?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
><img src="<?php if($t['thumb']) { ?><?php echo str_replace('thumb', 'middle', $t['thumb']);?><?php } else { ?><?php echo DT_SKIN;?>image/nopic.gif<?php } ?>
" width="<?php echo $width;?>" height="<?php echo $height;?>" alt="<?php echo $t['alt'];?>"/></a>
<?php if($length) { ?><strong class="te"><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['alt'];?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
><?php echo $t['title'];?></a></strong><?php } ?>
</li>
<?php } } ?>
</ul>
