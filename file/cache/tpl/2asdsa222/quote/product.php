<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<div class="m">
<div class="nav">
<div class="product_search">
<form action="<?php echo $MOD['linkurl'];?>product.php">
<input type="text" size="40" name="kw" value="<?php echo $kw;?>"/>
<?php echo ajax_category_select('catid', '所属分类', $catid, $moduleid);?>
<input type="submit" value="立即搜索"/>
<input type="button" value="重新搜索" onclick="Go('<?php echo $MOD['linkurl'];?>product.php');"/>
</form>
</div>
当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> » <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> » <a href="<?php echo $MOD['linkurl'];?>product.php">产品报价</a>
</div>
<div class="b10"> </div>
</div>
<div class="m">
<?php if($tags) { ?>
<div class="tb">
<table>
<tr>
<th>品名</th>
<th>属性参数</th>
<th width="120">最新报价</th>
<th width="40">单位</th>
<th width="100">报价数</th>
<th width="120">报价时间</th>
</tr>
<?php if(is_array($tags)) { foreach($tags as $t) { ?>
<tr>
<td>  <a href="<?php echo $t['linkurl'];?>" target="_blank" class="b"><?php echo $t['title'];?></a></td>
<td class="f_gray">
<?php if($t['v1']) { ?>  <?php echo $t['n1'];?>:<?php echo $t['v1'];?><?php } ?>
<?php if($t['v2']) { ?>  <?php echo $t['n2'];?>:<?php echo $t['v2'];?><?php } ?>
<?php if($t['v3']) { ?>  <?php echo $t['n1'];?>:<?php echo $t['v3'];?><?php } ?>
</td>
<td class="t_c f_red"><?php echo $DT['money_sign'];?><?php echo $t['price'];?></td>
<td class="t_c"><?php echo $t['unit'];?></td>
<td class="px11 t_c"><?php echo $t['item'];?></td>
<td class="px11 t_c"><?php echo timetodate($t['edittime'], 5);?></td>
</tr>
<?php } } ?>
</table>
</div>
<?php if($pages) { ?><div class="pages"><?php echo $pages;?></div><?php } ?>
<?php } else { ?>
<br/><br/><br/><center class="f_gray">未找到相关产品</center><br/><br/><br/>
<?php } ?>
</div>
<?php include template('footer1');?>