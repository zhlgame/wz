<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $t) { ?>
<dl>
    <dt class="te">[<?php echo area_pos($t['areaid'], '','1');?>] <a href="<?php echo userurl($t['username']);?>" target="_blank"><b><?php echo $t['company'];?></b></a></dt>
    <dd class="te">主营项目<span class="gray_bg"><?php echo dsubstr($t['business'], 22, '');?></span></dd>
    <dd class="clearfix img"> <?php $product=tag("moduleid=5&length=14&condition=status=3 and username='".$t['username']."' &areaid=$cityid&pagesize=2&order=addtime desc&template=null");?>        
        <?php if(is_array($product)) { foreach($product as $v) { ?> <span class="fl"><a class="box-img" href="<?php echo $v['linkurl'];?>" target="_blank"><img src="<?php echo imgurl($v['thumb']);?>" width="90" height="90" alt="<?php echo $v['alt'];?>"/><b><?php echo $v['title'];?></b></a></span> <?php } } ?> </dd>
</dl>
<?php } } ?> 
