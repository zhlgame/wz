<?php defined('IN_DESTOON') or exit('Access Denied');?><ul class="clearfix">
    <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
    <?php if($i==0) { ?>
    <li class="top">
        <dl>   
             <dt class="f-14 te"><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo $t['company'];?></a>
 <?php if($t['vip']) { ?>
            <span style="margin:5px 0"><img src="<?php echo DT_SKIN;?>image/vip_<?php echo $t['vip'];?>.gif" alt="<?php echo VIP;?>" title="<?php echo VIP;?>:<?php echo $t['vip'];?>级" align="absmiddle"/></span>
            <?php } ?>
</dt>
            <dd class="ddvip" style="margin:5px 0">店铺等级：<span style="margin:5px 0"><img src="<?php echo DT_SKIN;?>image/vip-<?php echo $t['vip'];?>.gif" align="absmiddle"/></span>
<a href="<?php echo $t['linkurl'];?>" target="_blank" class="fr red"> 进入店铺</a>
</dd>
            <dd class="te">在线联系：<?php if($t['username'] && $DT['im_web']) { ?><?php echo im_web($t['username'].'&mid='.$moduleid.'&itemid='.$t['itemid']);?> <?php } ?>
<?php if($t['qq'] && $DT['im_qq']) { ?><?php echo im_qq($t['qq']);?> <?php } ?>
<?php if($t['ali'] && $DT['im_ali']) { ?><?php echo im_ali($t['ali']);?> <?php } ?>
<?php if($t['msn'] && $DT['im_msn']) { ?><?php echo im_msn($t['msn']);?> <?php } ?>
<?php if($t['skype'] && $DT['im_skype']) { ?><?php echo im_skype($t['skype']);?> <?php } ?>
  </dd>
            <dd class="te">经营范围：<?php echo $t['business'];?></dd>
            <dd class="te">联系电话：<?php echo $t['telephone'];?></dd>
            <dd class="te">通讯地址：<?php echo $t['address'];?></dd>
        </dl>    <li><a href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo imgurl($t['thumb']);?>" width="220" height="86" alt=""/></a></li>
    </li>
    <?php } else { ?>
    <?php } ?>
    <?php } } ?>
</ul>