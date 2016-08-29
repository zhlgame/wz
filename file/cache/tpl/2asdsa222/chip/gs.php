<?php defined('IN_DESTOON') or exit('Access Denied');?><?php $child = get_maincat($catid, 4, $level);?>
<?php if(is_array($child)) { foreach($child as $i => $c) { ?>
<?php if($i < $cols) { ?>
<dl>
<dt><a href="<?php echo $MODULE['4']['linkurl'];?><?php echo $c['linkurl'];?>"><?php echo $c['catname'];?></a></dt>
    <dd>
<?php if($c['child']) { ?>
<?php $sub = get_maincat($c['catid'], 4);?>
<?php if(is_array($sub)) { foreach($sub as $j => $s) { ?><a href="<?php echo $MODULE['4']['linkurl'];?><?php echo $s['linkurl'];?>"><?php echo set_style($s['catname'], $s['style']);?></a><?php } } ?>
<?php } ?>
    </dd>
</dl>
<?php } ?>
<?php } } ?>