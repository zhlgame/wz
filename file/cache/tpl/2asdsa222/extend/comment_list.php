<?php defined('IN_DESTOON') or exit('Access Denied');?><?php $CSS = array('comment');?>
<?php include template('header');?>
<div id="destoon_space" style="display:none;"></div>
<div class="m">
<div class="nav"><span class="f_r"><a href="<?php echo $linkurl;?>" class="b">返回原文&raquo;</a></span>当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $MODULE[$mid]['linkurl'];?>"><?php echo $MODULE[$mid]['name'];?></a> &raquo; <a href="<?php echo $linkurl;?>"><?php echo $title;?></a> &raquo; 评论列表</div>
<div id="destoon_comment">
<h1 class="title"><a href="<?php echo $linkurl;?>"><strong><?php echo $title;?>评论列表</strong></a></h1>
<div class="stat">
<table cellpadding="6" cellspacing="1" width="100%">
<tr align="center">
<td width="100">好评 <img src="<?php echo DT_STATIC;?>file/image/star3.gif" width="36" height="12" alt="" align="absmiddle"/> </td>
<td><div class="stat_p"><div style="width:<?php echo $stat['pc3'];?>;"></div></div></td>
<td class="stat_c" width="100"><?php echo $stat['pc3'];?></td>
<td class="stat_t" width="80" bgcolor="#E1F0FB"><?php echo $stat['star3'];?></td>
</tr>
<tr align="center">
<td>中评 <img src="<?php echo DT_STATIC;?>file/image/star2.gif" width="36" height="12" alt="" align="absmiddle"/></td>
<td><div class="stat_p"><div style="width:<?php echo $stat['pc2'];?>;"></div></div></td>
<td><?php echo $stat['pc2'];?></td>
<td bgcolor="#F2F8FD"><?php echo $stat['star2'];?></td>
</tr>
<tr align="center">
<td>差评 <img src="<?php echo DT_STATIC;?>file/image/star1.gif" width="36" height="12" alt="" align="absmiddle"/></td>
<td><div class="stat_p"><div style="width:<?php echo $stat['pc1'];?>;"></div></div></td>
<td><?php echo $stat['pc1'];?></td>
<td bgcolor="#F9FCFE"><?php echo $stat['star1'];?></td>
</tr>
</table>
</div>
<?php if(is_array($lists)) { foreach($lists as $k => $v) { ?>
<div class="comment<?php if($k%2==0) { ?> comment_sp<?php } ?>
">
<table>
<tr>
<td class="comment_l" valign="top">
<div>
<?php if($v['uname']) { ?><a href="<?php echo userurl($v['uname']);?>" target="_blank"><?php } ?>
<img src="<?php echo useravatar($v['uname']);?>" width="48" height="48" alt="" align="absmiddle"/><?php if($v['uname']) { ?></a><?php } ?>
</div>
</td>
<td valign="top">
<div class="comment_title">
<span class="comment_floor">第 <strong><?php echo $v['floor'];?></strong> 楼</span>
<span id="i_<?php echo $v['itemid'];?>"><?php echo $v['name'];?> 于 <span class="comment_time"><?php echo $v['addtime'];?></span> 评论道：</span>
</div>
<div class="comment_content" id="c_<?php echo $v['itemid'];?>"><?php if($v['quotation']) { ?><?php echo $v['quotation'];?><?php } else { ?><?php echo $v['content'];?><?php } ?>
</div>
<?php if($v['reply']) { ?>
<div class="comment_reply">
<?php if($v['editor']) { ?><span style="color:red;">管理员</span><?php } else { ?><span style="color:blue;"><?php echo $v['replyer'];?></span><?php } ?>
 <span style="font-size:11px;"><?php echo $v['replytime'];?></span> 回复： <?php echo nl2br($v['reply']);?>
</div>
<?php } ?>
<div class="comment_info">
<span class="comment_vote">
<?php if($could_del) { ?>
<a href="index.php?mid=<?php echo $mid;?>&itemid=<?php echo $itemid;?>&page=<?php echo $page;?>&action=delete&cid=<?php echo $v['itemid'];?>" target="send" onclick="return confirm('确定要删除此评论吗？')">删除</a>&nbsp; | &nbsp;
<?php } ?>
<?php if($MOD['comment_vote']) { ?>
<a href="javascript:" onclick="R(<?php echo $v['itemid'];?>);">举报</a>&nbsp; | &nbsp;
<a href="javascript:" onclick="V(<?php echo $v['itemid'];?>, 1, <?php echo $v['agree'];?>);">支持</a>(<span id="v_<?php echo $v['itemid'];?>_1"><?php echo $v['agree'];?></span>)&nbsp; | &nbsp;
<a href="javascript:" onclick="V(<?php echo $v['itemid'];?>, 0, <?php echo $v['against'];?>);">反对</a>(<span id="v_<?php echo $v['itemid'];?>_0"><?php echo $v['against'];?></span>)&nbsp; | &nbsp;
<?php } ?>
<a href="javascript:" onclick="Q(<?php echo $v['itemid'];?>);">引用</a>(<?php echo $v['quote'];?>)
</span>
<img src="<?php echo DT_STATIC;?>file/image/star<?php echo $v['star'];?>.gif" width="36" height="12" alt="" align="absmiddle"/>
</div>
</td>
</tr>
</table>
</div>
<?php } } ?>
<a name="last"></a>
<?php if($pages) { ?><div class="pages"><?php echo $pages;?></div><?php } ?>
<iframe src="" name="send" id="send" style="display:none;" scrolling="no" frameborder="0"></iframe>
<div class="comment_form">
<form method="post" action="index.php" target="send" onsubmit="return C();">
<input type="hidden" name="mid" value="<?php echo $mid;?>"/>
<input type="hidden" name="itemid" value="<?php echo $itemid;?>"/>
<input type="hidden" name="items" value="<?php echo $items;?>"/>
<input type="hidden" name="page" value="<?php echo $page;?>"/>
<input type="hidden" name="qid" value="0" id="qid"/>
<input type="hidden" name="submit" value="1"/>
<table cellpadding="10" cellspacing="1" width="100%">
<tr>
<td id="qbox" style="display:none;" bgcolor="#F9FCFE"></td>
</tr>
<tr>
<td>
<input type="radio" name="star" value="3" id="star_3" checked/><label for="star_3"> 好评 <img src="<?php echo DT_STATIC;?>file/image/star3.gif" width="36" height="12" alt="" align="absmiddle"/></label>
<input type="radio" name="star" value="2" id="star_2"/><label for="star_2"> 中评 <img src="<?php echo DT_STATIC;?>file/image/star2.gif" width="36" height="12" alt="" align="absmiddle"/></label>
<input type="radio" name="star" value="1" id="star_1"/><label for="star_1"> 差评 <img src="<?php echo DT_STATIC;?>file/image/star1.gif" width="36" height="12" alt="" align="absmiddle"/></label>
</td>
</tr>
<tr>
<td><textarea class="comment_area" onfocus="F();" onkeyup="S();" name="content" id="content"></textarea></td>
</tr>
<?php if($need_captcha) { ?>
<tr id="tr_captcha" style="display:none;">
<td>
<div class="comment_input">
<table cellpadding="0" cellspacing="0">
<tr>
<td>&nbsp;<span>*</span> 验证码：</td>
<td>&nbsp;<?php include template('captcha', 'chip');?></td>
</tr>
</table>
</div>
</td>
</tr>
<?php } ?>
<tr>
<td>
&nbsp;<input type="image" src="<?php echo DT_SKIN;?>image/btn_comment.gif" align="absmiddle"/>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="hidden" value="1"/> 匿名发表
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#666666;">(内容限<?php echo $MOD['comment_min'];?>至<?php echo $MOD['comment_max'];?>字)
&nbsp;&nbsp;&nbsp;&nbsp;当前已经输入 <span style="color:red;" id="chars">0</span> 字
</span>
</td>
</tr>
</table>
</form>
</div>
</div>
</div>
<script style="text/javascript">
function R(id) {
SendReport('评论举报，评论ID:'+id+'\n评论内容:\n'+Dd('c_'+id).innerHTML);
}
<?php if($MOD['comment_vote']) { ?>
var v_id = 0;
var v_op = 1;
var v_nm = 0;
function V(id, op, nm) {
v_id = id;
v_op = op;
v_nm = nm;
if(get_cookie('comment_vote_<?php echo $mid;?>_<?php echo $itemid;?>_'+id)) {
confirm('您已经对此评论表过态了');
return;
}
makeRequest('action=vote&mid=<?php echo $mid;?>&itemid=<?php echo $itemid;?>&cid='+id+'&op='+op, 'index.php', '_V');
}
function _V() {
if(xmlHttp.readyState==4 && xmlHttp.status==200) {
if(xmlHttp.responseText == -2) {
confirm('抱歉，您没有投票权限');
} else if (xmlHttp.responseText == -1) {
confirm('您已经对此评论表过态了');
} else if (xmlHttp.responseText == 0) {
alert('参数错误，如有疑问请联系管理员');
} else if (xmlHttp.responseText == 1) {
if(v_op == 1) {
Inner('v_'+v_id+'_1', ++v_nm);
} else {
Inner('v_'+v_id+'_0', ++v_nm);
}
}
}
}
<?php } ?>
function Q(qid){
  Dd('qid').value = qid;
  Ds('qbox');
  Dd('qbox').innerHTML = '&nbsp;<strong>引用:</strong><div class="comment_title">'+Dd('i_'+qid).innerHTML+'</div><div class="comment_content">'+Dd('c_'+qid).innerHTML+'</div>';
  Dd('content').focus();
}
function S() {
Inner('chars', Dd('content').value.length);
}
function C() {
var user_status = <?php echo $user_status;?>;
if(user_status == 1) {
alert('您的会员组没有评论权限');
return false;
}
if(user_status == 2) {
if(confirm('您还没有登录,是否现在登录?')) {
top.location = '<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>?forward=<?php echo urlencode($linkurl);?>';
}
return false;
}
if(Dd('content').value.length < <?php echo $MOD['comment_min'];?>) {
confirm('内容最少需要<?php echo $MOD['comment_min'];?>字');
Dd('content').focus();
return false;
}
if(Dd('content').value.length > <?php echo $MOD['comment_max'];?>) {
confirm('内容最多<?php echo $MOD['comment_max'];?>字');
Dd('content').focus();
return false;
}
<?php if($need_captcha) { ?>
if(!is_captcha(Dd('captcha').value)) {
confirm('请填写验证码');
Ds('tr_captcha');
H();
Dd('captcha').focus();
return false;
}
<?php } ?>
return true;
}
function F() {
<?php if($need_captcha) { ?>
Ds('tr_captcha');
<?php } ?>
}
</script>
<?php include template('footer');?>