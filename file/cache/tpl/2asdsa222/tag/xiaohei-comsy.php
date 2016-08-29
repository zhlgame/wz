<?php defined('IN_DESTOON') or exit('Access Denied');?> <ul>
<?php if(is_array($tags)) { foreach($tags as $t) { ?>
<li><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo $t['company'];?></a></li>
<?php } } ?>
</ul>
