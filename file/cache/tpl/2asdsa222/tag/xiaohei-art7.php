<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?> 
<li><span><a href="<?php echo $t['caturl'];?>">[<?php echo $t['catname'];?>]</a></span> 
<a href="<?php echo $t['linkurl'];?>"> <?php echo dsubstr($t['title'], 26);?></a>
                            </li>
 
<?php } } ?>
