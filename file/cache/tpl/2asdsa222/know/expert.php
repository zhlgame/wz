<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<div class="m">
<div class="nav">当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &raquo; <a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('expert.php?page=1');?>">专家</a><?php if($itemid) { ?> &raquo; <?php echo $title;?><?php } ?>
</div>
</div>
<div class="m">
<?php if($itemid) { ?>
<table cellpadding="5" cellspacing="1" width="100%" bgcolor="#DDDDDD">
<tr bgcolor="#FFFFFF">
<td rowspan="4" align="center">
<img src="<?php echo useravatar($username, 'large');?>" width="100" height="100" alt=""/>
<?php if($DT['im_web']) { ?><div style="padding:8px 0 5px 0;"><?php echo im_web($username, 1);?></div><?php } ?>

</td>
<td align="center" width="120">姓 名</td>
<td width="280"><?php echo $title;?></td>
<td align="center" width="120">昵 称</td>
<td width="280"><?php echo $passport;?></td>
</tr>
<tr bgcolor="#FFFFFF">
<td align="center">被提问</td>
<td><?php echo $ask;?></td>
<td align="center">回 答</td>
<td><?php echo $answer;?></td>
</tr>
<tr bgcolor="#FFFFFF">
<td align="center">被采纳</td>
<td><?php echo $best;?></td>
<td align="center">采纳率</td>
<td><?php echo $rate;?></td>
</tr>
<tr bgcolor="#FFFFFF">
<td align="center">人 气</td>
<td><?php echo $hits;?></td>
<td align="center">求 助</td>
<td><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=10&action=add&askto=<?php echo $username;?>" target="_blank" class="b">向TA提问</a></td>
</tr>
<tr>
<td colspan="5" bgcolor="#EEEEEE">&nbsp;&nbsp;<strong>擅长领域</strong></td>
</tr>
<tr>
<td colspan="5" bgcolor="#FFFFFF"><div class="pd10 lh18 px14"><?php echo $major;?></div></td>
</tr>
<tr>
<td colspan="5" bgcolor="#EEEEEE">&nbsp;&nbsp;<strong>专家介绍</strong></td>
</tr>
<tr>
<td colspan="5" bgcolor="#FFFFFF"><div class="pd10 lh18 px14"><?php echo $content;?></div></td>
</tr>
<tr>
<td colspan="5" bgcolor="#EEEEEE">&nbsp;&nbsp;<strong>TA的回答</strong></td>
</tr>
<tr>
<td colspan="5" bgcolor="#FFFFFF"><?php echo tag("moduleid=$moduleid&condition=status=3 and process=3 and expert='$username'&order=updatetime desc&areaid=$cityid&pagesize=".$MOD['page_iresolve']."&datetype=4&template=list-know");?></td>
</tr>
</table>
<?php } else { ?>
<?php echo tag("table=know_expert&condition=1&pagesize=".$MOD['pagesize']."&page=$page&showpage=1&order=addtime desc&template=list-expert&cols=5");?>
<?php } ?>
</div>
<?php include template('footer');?>