<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>    
<li <?php if($i<3) { ?>class="on"<?php } ?>
><span>
                                    <?php echo $i+1 ;?></span> <a href="<?php echo $t['linkurl'];?>">
                                      <?php echo dsubstr($t['title'], 26);?></a> </li>
<?php } } ?>