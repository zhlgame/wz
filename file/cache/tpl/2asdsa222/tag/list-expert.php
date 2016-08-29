<?php defined('IN_DESTOON') or exit('Access Denied');?><table cellpadding="6" cellspacing="1" width="100%" bgcolor="#DDDDDD">
<tr bgcolor="#EEEEEE" align="center">
<td width="60"><strong>头像</strong></td>
<td><strong>姓名</strong></td>
<td><strong>擅长领域</strong></td>
<td width="70"><strong>人气</strong></td>
<td width="70"><strong>被提问</strong></td>
<td width="70"><strong>回答</strong></td>
<td width="70"><strong>被采纳</strong></td>
<?php if($DT['im_web']) { ?><td width="40"><strong>交谈</strong></td><?php } ?>
<td width="80"><strong>向TA提问</strong></td>
</tr>
<?php if(is_array($tags)) { foreach($tags as $t) { ?>
<tr bgcolor="#FFFFFF" align="center">
<td><a href="<?php echo $MODULE['10']['linkurl'];?><?php echo rewrite('expert.php?itemid='.$t['itemid']);?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
><img src="<?php echo useravatar($t['username']);?>" width="48" height="48"/></a></td>
<td><a href="<?php echo $MODULE['10']['linkurl'];?><?php echo rewrite('expert.php?itemid='.$t['itemid']);?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
 class="b"><strong><?php echo $t['title'];?></strong></a></td>
<td><?php echo $t['major'];?></td>
<td><?php echo $t['hits'];?></td>
<td><?php echo $t['ask'];?></td>
<td><?php echo $t['answer'];?></td>
<td><?php echo $t['best'];?></td>
<?php if($DT['im_web']) { ?><td><?php echo im_web($t['username']);?></td><?php } ?>
<td><a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>?mid=10&action=add&askto=<?php echo $t['username'];?>" target="_blank" class="b">向TA提问</a></td>
</tr>
<?php } } ?>
</table>