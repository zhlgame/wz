<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<dl id="item_<?php echo $t['itemid'];?>">
    <dt class="vertical-img"><a class="box-img" href="<?php echo $t['linkurl'];?>" target="_blank">
<img src="<?php if($t['thumb']) { ?><?php echo str_replace('thumb', 'middle', $t['thumb']);?><?php } else { ?><?php echo DT_SKIN;?>image/nopic200.gif<?php } ?>
"  width="220" height="220" alt="<?php echo $t['alt'];?>"/></a></dt>
    <dd class="small">
        <ul class="clearfix">
 
             <li><img src="<?php if($t['thumb']) { ?><?php echo $t['thumb'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" width="32" height="32" /></li>
           <?php if($t['thumb1']) { ?> <li><img src="<?php if($t['thumb1']) { ?><?php echo $t['thumb1'];?><?php } else { ?><?php echo DT_SKIN;?>image/nopic60.gif<?php } ?>
" width="32" height="32" /></li><?php } ?>
 
        </ul>
    </dd>
    <dd class="te"><a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></dd>
    <dd class="price"> <?php if($t['unit'] && $t['price']>0) { ?> <span class="f_red"><strong class="px14"><?php echo $t['price'];?></strong>/<?php echo $t['unit'];?></span><br/>
        <?php } else { ?> <span class="f_gray">面议</span><?php if($t['username'] && $DT['im_web']) { ?><?php echo im_web($t['username'].'&mid='.$moduleid.'&itemid='.$t['itemid']);?> <?php } ?>
        <?php if($t['qq'] && $DT['im_qq']) { ?><?php echo im_qq($t['qq']);?> <?php } ?>
        <?php if($t['ali'] && $DT['im_ali']) { ?><?php echo im_ali($t['ali']);?> <?php } ?>
</span> <?php if($t['vip']) { ?><img src="<?php echo DT_SKIN;?>image/vip_<?php echo $t['vip'];?>.gif" alt="<?php echo VIP;?>" title="<?php echo VIP;?>:<?php echo $t['vip'];?>级" align="absmiddle"/> <?php } ?>
<br/>
        <?php } ?>
 </dd>
    <dd class="te"><a title="<?php echo $t['company'];?>" class="gray" href="<?php echo userurl($t['username']);?>" target="_blank"><?php echo $t['company'];?></a></dd>
    <dd>  </dd>
</dl>
<?php } } ?>
<?php if($showpage && $pages) { ?>
<div class="pages clear"><?php echo $pages;?></div>
<?php } ?>
