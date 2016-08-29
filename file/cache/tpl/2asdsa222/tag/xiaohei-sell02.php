<?php defined('IN_DESTOON') or exit('Access Denied');?><ul class="clearfix">
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
    <li><dl>
        <dt class="vertical-img"><a class="box-img" href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo str_replace('thumb', 'middle', $t['thumb']);?>" width="<?php echo $width;?>" height="<?php echo $height;?>" alt="<?php echo $t['alt'];?>"/></a></dt>
        <dd class="mt-10 f-14"><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo $t['title'];?></a></dd>
        <dd class="mt-10">
        <?php if($t['price']>0) { ?>
<span class="orange f-14"><?php echo $DT['money_sign'];?><?php echo $t['price'];?><?php echo $DT['money_unit'];?>/<?php echo $t['unit'];?></span>
<?php } else { ?>
<span class="gray">面议</span>
<?php } ?>
 
        </dd>
        <dd class="gray">关键词:<?php echo $t['tag'];?></dd>
        <dd class="text"><a href="<?php echo userurl($t['username']);?>" target="_blank"><?php echo $t['company'];?></a></dd>
    </dl></li>
<?php } } ?>
</ul>
