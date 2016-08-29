<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?> 
 
<li><a href="<?php echo $t['linkurl'];?>">
                                <img src="<?php echo $t['thumb'];?>" style="height:100px;width:100px;">
                                <p>
                                 <?php echo dsubstr($t['title'], 16);?></p>
                            </a></li>
 
<?php } } ?>
