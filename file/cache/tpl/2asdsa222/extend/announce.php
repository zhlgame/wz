<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<div class="m">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<td valign="top" class="left_menu">
<ul>
<li class="left_menu_li"><a href="<?php echo $MODULE['1']['linkurl'];?>">网站首页</a></li>
<li class="left_menu_li" id="type_0"><a href="<?php echo $url;?>">公告中心</a></li>
<?php if(is_array($_TP['0'])) { foreach($_TP['0'] as $v0) { ?>
<li class="left_menu_li" id="type_<?php echo $v0['typeid'];?>"><a href="<?php echo $url;?><?php echo list_url($v0['typeid']);?>"><?php echo $v0['typename'];?></a></li>
<?php if(isset($_TP['1'][$v0['typeid']])) { ?>
<?php if(is_array($_TP['1'][$v0['typeid']])) { foreach($_TP['1'][$v0['typeid']] as $v1) { ?>
<li class="left_menu_li" id="type_<?php echo $v1['typeid'];?>"><a href="<?php echo $url;?><?php echo list_url($v1['typeid']);?>">&nbsp;|- <?php echo $v1['typename'];?></a></li>
<?php } } ?>
<?php } ?>
<?php } } ?>
</ul>
</td>
<td valign="top">
<div class="left_box">
<div class="pos">
<span class="f_r">
<form action="<?php echo $url;?>index.php">
<input type="text" name="kw" size="20" value="<?php if($kw) { ?><?php echo $kw;?><?php } else { ?>关键词<?php } ?>
" onfocus="if(this.value=='关键词')this.value='';" id="an_kw"/>&nbsp;
<input type="submit" value=" 搜索 " onclick="if(Dd('an_kw').value=='关键词' || Dd('an_kw').value.length<2){Dd('an_kw').focus();return false;}"/>
<input type="button" value=" 重搜 " onclick="Go('<?php echo $url;?>');"/>
</form>
</span>
当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $url;?>">公告中心<?php if($typeid) { ?> &raquo; <a href="<?php echo $url;?><?php echo list_url($typeid);?>"><?php echo $TYPE[$typeid]['typename'];?></a><?php } ?>
</a>
</div>
<?php if($itemid) { ?>
<div style="margin:5px 15px 5px 15px;line-height:36px;" class="t_c px14"><strong><?php echo $title;?></strong></div>
<div class="info f_gray"><span class="f_r"><script type="text/javascript">addFav('[收藏]');</script>&nbsp;<span  onclick="Print();">[打印]</span></span>添加时间：<?php echo $adddate;?>&nbsp;&nbsp;&nbsp;有效期：<?php echo $fromdate;?> 至 <?php echo $todate;?>&nbsp;&nbsp;&nbsp;浏览次数：<span id="hits"><?php echo $hits;?></span></div>
<div class="content" id="content"><?php echo $content;?></div>
<?php } else { ?>
<div class="b10">&nbsp;</div>
<table cellpadding="5" cellspacing="5" width="98%" align="center">
<?php if(is_array($lists)) { foreach($lists as $k => $v) { ?>
<tr>
<td>&middot; <?php if(!$typeid) { ?><a href="<?php echo $url;?><?php echo list_url($v['typeid']);?>">[<?php echo $v['typename'];?>]</a>&nbsp;<?php } ?>
<a href="<?php echo $v['linkurl'];?>"<?php if($v['islink']) { ?> target="_blank"<?php } ?>
><?php echo $v['title'];?></a></td>
<td class="f_gray" width="120">浏览:<?php echo $v['hits'];?></td>
<td class="f_gray" width="120" align="center"><?php echo $v['adddate'];?></td>
</tr>
<?php } } ?>
</table>
<div class="pages"><?php echo $pages;?></div>
<?php } ?>
<br/>
</div>
</td>
</tr>
</table>
</div>
<script type="text/javascript">try{Dd('type_<?php echo $typeid;?>').className='left_menu_on';}catch(e){}</script>
<?php include template('footer');?>