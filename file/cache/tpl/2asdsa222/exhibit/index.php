<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<div id="topshow" class="full">
<div class="wrap">
<table cellpadding="4" cellspacing="1" width="100%" bgcolor="#bfbfbf">
 
<tr bgcolor="#fafafa" align="center">
 
<?php for($i=1;$i<13;$i++){ $j = $i<10 ? '0'.$i : $i;?>
 
<td <?php if($j==date('m')) { ?>bgcolor="#e0e0e0"<?php } ?>
><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?month='.$i);?>" target="_blank"><?php echo $j;?>月</a></td>
 
<?php } ?>
 
</tr>
 
</table>
    <div class="left fl">
        <div class="box01 mt-10">
            <div class="header">
                <h3>展会预告</h3>
            </div>
          <div class="special">
                <div class="top"> <a target="_blank" rel="nofollow" href="/"> <img src="<?php echo DT_SKIN;?>ad/zh/yb1.jpg" alt=""></a></div>
                <?php echo tag("moduleid=$moduleid&length=36&condition=status=3&pagesize=5&order=addtime desc&target=_blank");?> 
 </div>
            <p class="sup-more"> <a href="/exhibition/search.php" target="_blank">了解更多>></a></p>
        </div>
        <div class="box01 mt-15">
            <div class="header">
                <h3> 展会专题</h3>
            </div>
            <div class="special">
                <div class="top"> <a target="_blank" rel="nofollow" href="/"> <img src="<?php echo DT_SKIN;?>ad/zh/yb1.jpg" alt=""></a></div>
                <?php echo tag("moduleid=21&length=38&condition=status=3 and level>0&areaid=$cityid&pagesize=5&order=addtime desc&target=_blank");?> 
            </div>
        </div>
    </div>
    <!--轮播图-->
    <div class="center fl  mt-10">
        <div id="iSlider" class="focus">
            <div class="bd">
               <?php echo ad(14);?>
        </div> </div>
        <div class="box02 mt-15">
            <div class="header"> <a class="more" href="/" target="_blank">更多>></a>
                <h3>展会资讯</h3>
            </div>
            <div class="news-list cldl"> 
                <?php $tags=tag("moduleid=21&length=38&condition=status=3 and level=1&areaid=$cityid&pagesize=1&order=addtime desc&template=null");?> 
                <?php if(is_array($tags)) { foreach($tags as $t) { ?>
                <dl class="top">
                    <dt><img alt="" src="<?php echo $t['thumb'];?>"></dt>
                    <dd> <strong class="te"><a title="<?php echo $t['alt'];?>" href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo $t['title'];?></a></strong><?php echo $t['introduce'];?><a href="<?php echo $t['linkurl'];?>">[查看详细]</a></dd>
                </dl>
                <?php } } ?> 
                <?php echo tag("moduleid=21&length=38&condition=status=3 &areaid=$cityid&pagesize=6&order=addtime desc&target=_blank");?> 
            </div>
        </div>
    </div>
    <!--推荐展会-->
    <div class="right fr  mt-10">
        <div class="operation f-14">
 <?php if($_userid) { ?>
    <a href="<?php echo userurl($_username);?>" target="_blank" class="login-btn1 fl">HI!  <span class="f_b f_green" title="<?php echo $MG['groupname'];?>"><?php echo $_truename;?></span></a>
                <a href="<?php echo $MODULE['2']['linkurl'];?>" target="_blank" class="regist-btn fl">我的办公室</a>
               <?php } else { ?>
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>" rel="nofollow" class="login-btn fl" title="登录"><i></i>登录</a>
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" rel="nofollow" class="regist-btn fl" title="注册"><i></i>免费注册</a>
<?php } ?>
        </div>
        <div class="box01 mt-15">
            <div class="header">
                <h3>推荐展会</h3>
            </div>
            <div class="recomment"> 
               <?php echo tag("moduleid=$moduleid&length=36&condition=status=3&pagesize=8&order=addtime desc&target=_blank&template=_blank");?> 
            </div>
        </div>
        <div class="box01 mt-1">
            <div class="header">
                <h3> 展会查询</h3>
            </div>
            <div class="ex-search cldl">
            <form action="<?php echo $MOD['linkurl'];?>search.php">
                <dl>
                    <dt>展会名称：</dt>
                    <dd>
                        <input type="text" class="ex-input" value="" autocomplete="off" name="kw">
                    </dd>
                </dl>
                <dl>
                    <dt>所属行业：</dt>
                    <dd id="search_cid" class="pr">
                        <input type="hidden" name="catid" value="" id="searchcid"/>
                        <span class="select-txt"> <a href="javascript:;" >请选择行业</a></span>
                        <div class="option" style="display:none;">  
                        <?php if(is_array($maincat)) { foreach($maincat as $v) { ?>
                            <a href="javascript:;" selectid="<?php echo $v['catid'];?>" ><?php echo $v['catname'];?></a> <?php } } ?> </div>
                    </dd>
                </dl>
                <script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/calendar.js"></script>
                <dl>
                    <dt>开始时间：</dt>
                    <dd>
                        <input type="text" name="fromdate" id="fromdate" value="" class="ex-input" size="10" onfocus="ca_show('fromdate', this, '');" readonly ondblclick="this.value='';" src="<?php echo DT_STATIC;?>file/image/calendar.gif" align="absmiddle" onclick="ca_show('fromdate', this, '');" style="cursor:pointer;">
                    </dd>
                </dl>
                <dl>
                    <dt>结束时间：</dt>
                    <dd>
                        <input type="text" name="todate" id="todate" value="" class="ex-input" size="10" onfocus="ca_show('todate', this, '');" readonly ondblclick="this.value='';" src="<?php echo DT_STATIC;?>file/image/calendar.gif" align="absmiddle" onclick="ca_show('todate', this, '');" style="cursor:pointer;">
                    </dd>
                </dl>
                <dl>
                    <dt></dt>
                    <dd>
                        <button type="submit" class="f-14 orange-btn"  id="btn_seach">搜索</button>
                    </dd>
                </dl>
                </form>
            </div>
        </div>
    </div>
</div>
<!--广告位-->
    <div class="wrapper">
        <p class="mt15">
            <a href="/" target="_blank">
                <img src="<?php echo DT_SKIN;?>ad/zh/c1.jpg" alt=""></a>
        </p>
    </div>
    <div class="clear">
    </div>
    <!--重点展会-->
    <div class="wrapper">
        <div class="focus-exhibition mt15">
            <p class="ftit f14">
                重点展会</p>
            <ul>
                <?php $tags=tag("moduleid=$moduleid&areaid=$cityid&condition=status=3 and thumb!=''&order=hits desc&pagesize=16&template=null");?>
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
                <li>
                    <dl>
                        <dt><a href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo $t['thumb'];?>" width="210" height="90" alt="<?php echo $t['alt'];?>"/></a></dt>
                        <dd>
                            <a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo $t['title'];?></a></dd>
                    </dl>
                </li>
                <?php } } ?>
            </ul>
        </div>
        <!--优质展会AD招商-->
        <div class="rightbar mt15">
            <p class="comment-tit f14">
                优质展会</p>
            <p class="mt10 ml10">
                <a target="_blank" href="/">
                    <img src="<?php echo DT_SKIN;?>ad/zh/yz1.jpg" width="220" height="85" alt=""></a></p>
            <p class="mt10 ml10">
                <a target="_blank" href="/">
                    <img src="<?php echo DT_SKIN;?>ad/zh/yz3.jpg" alt=""></a></p>
            <p class="mt10 ml10" style="padding-bottom:10px;">
                <a target="_blank" href="/">
                    <img src="<?php echo DT_SKIN;?>ad/zh/yz2.gif" width="220" height="85" alt=""></a></p>
        </div>
    </div>
    <div class="clear">
    </div>
    <!--国内展会-->
    <div class="wrapper">
        <div class="leftbar mt15">
<table cellpadding="0" cellspacing="0" width="100%">
<?php $child = get_maincat(0, $mid, 1);?>
<?php if(is_array($maincat)) { foreach($maincat as $i => $c) { ?>
<?php if(in_array($c['catid'], array(399, 400))) { ?>
<?php if($i%2==0) { ?><tr><?php } ?>
<td valign="top" width="460">
<div class="exhi">
                <p class="etit">
                    <b class="fl f141"><?php echo $c['catname'];?></b> <span class="fr mr10"><a href="<?php echo $MOD['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank">
                        更多>></a></span>
                </p>
       <?php $tags=tag("moduleid=$moduleid&areaid=$cityid&catid=".$c['catid']."&condition=status=3 and thumb!=''&order=rand() desc&pagesize=1&template=null");?>
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>        
        <dl>
            <dt><a href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo $t['thumb'];?>" width="134" height="79" alt="<?php echo $t['alt'];?>"/></a></dt>
            <dd class="orange f14">
                <a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo $t['title'];?></a></dd>
            <dd class="mt5 black">
                <span class="orange"><?php echo dsubstr($t['introduce'], 80, '...');?><a target="_blank" href="<?php echo $t['linkurl'];?>">
                                    [详细]</a></span></dd>
        </dl>
      <?php } } ?>
 
 <?php $tags=tag("moduleid=$moduleid&areaid=$cityid&catid=".$c['catid']."&condition=status=3&order=addtime desc&pagesize=5&template=null");?>
<ul>
    
   <?php if(is_array($tags)) { foreach($tags as $t) { ?>          
    <li><span class="fr gray">[<?php echo date('Y-m-d', $t['addtime']);?>]</span><a href="<?php echo $t['linkurl'];?>"  target="_blank"  title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></li>
        
<?php } } ?>
</ul>
            </div>
</td>
<?php if($i%2==1) { ?></tr><?php } ?>
<?php } ?>
<?php } } ?>
</table>
        </div>
        <div class="rightbar mt15">
            <div class="trade">
                <p class="comment-tit f14">
                    <b class="comment-ico">展会行业分类</b></p>
                <ul>
<?php if(is_array($maincat)) { foreach($maincat as $k => $v) { ?>
   <li><a href="<?php echo $MOD['linkurl'];?><?php echo $v['linkurl'];?>"><?php echo set_style($v['catname'],$v['style']);?><?php if(!$cityid) { ?> <span class="f_r blue">(<?php echo $v['item'];?>)</span><?php } ?>
</a></li>
   <?php } } ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear">
    </div>
    <!--广告位 AD招商长2-->
    <div class="wrapper">
        <p class="mt15">
 <a href="#" target="_blank">
                <img src="<?php echo DT_SKIN;?>ad/zh/c2.jpg" alt=""></a>
        </p>
    </div>
    <!--会展服务-->
    <div class="wrapper">
        <div class="exhibition-service mt15">
            <p class="comment-tit f14">
                <b class="comment-ico">会展服务</b></p>
            <table cellpadding="0" cellspacing="0" width="100%">
<?php $child = get_maincat(0, $mid, 1);?>
<?php if(is_array($maincat)) { foreach($maincat as $i => $c) { ?>
<?php if(in_array($c['catid'], array(5687,5700,6159,6474,6562,6749,10070))) { ?>
<?php if($i%2==0) { ?><tr><?php } ?>
<td valign="top" width="460">
<div class="part mt10">
                <p class="stit">
                    <span class="fr"><a href="<?php echo $MOD['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank">更多>></a></span><b class="fl f14 blue"><?php echo $c['catname'];?></b></p>
<?php $tags=tag("moduleid=$moduleid&areaid=$cityid&catid=".$c['catid']."&length=34&condition=status=3 and thumb!=''&order=rand() desc&pagesize=1&template=null");?>
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>        
        <dl>
            <dt><a href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo $t['thumb'];?>" width="150" height="90" alt="<?php echo $t['alt'];?>"/></a></dt>
            <dd class="orange f14">
                <a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo $t['title'];?></a></dd>
            <dd class="mt5">
                <span class="orange"><?php echo dsubstr($t['introduce'], 80, '...');?><a target="_blank" href="<?php echo $t['linkurl'];?>">
                                    [详细]</a></span></dd>
        </dl>
      <?php } } ?>
   
  <?php $tags=tag("moduleid=$moduleid&areaid=$cityid&catid=".$c['catid']."&length=34&condition=status=3&order=addtime desc&pagesize=4&template=null");?>
         <ul>
 <?php if(is_array($tags)) { foreach($tags as $t) { ?>          
    <li><span class="fr gray">[<?php echo date('Y-m-d', $t['addtime']);?>]</span><a href="<?php echo $t['linkurl'];?>"  target="_blank"  title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></li>
        
<?php } } ?>
                </ul>
            </div>
</td>
<?php if($i%2==1) { ?></tr><?php } ?>
<?php } ?>
<?php } } ?>
</table>
        </div>
 <!--合作伙伴 AD招商-->
        <div class="rightbar mt15">
            <p class="comment-tit f14">
                <b class="comment-ico">合作伙伴</b></p>
            <ul class="cooperation">
                <li><a target="_blank" href="#">
                    <img src="<?php echo DT_SKIN;?>ad/zh/hz1.jpg" alt=""></a></li>
                <li><a target="_blank" href="#">
                    <img src="<?php echo DT_SKIN;?>ad/zh/hz2.jpg" alt=""></a></li>
                <li><a target="_blank" href="#">
                    <img src="<?php echo DT_SKIN;?>ad/zh/hz5.jpg" alt=""></a></li>
                <li><a target="_blank" href="#">
                    <img src="<?php echo DT_SKIN;?>ad/zh/hz3.jpg" alt=""></a></li>
                <li><a target="_blank" href="#">
                    <img src="<?php echo DT_SKIN;?>ad/zh/hz4.jpg" alt=""></a></li>
            </ul>
        </div>
    </div>
    <div class="clear">
    </div>
    <!--展馆博览 AD招商-->
    <div class="wrapper">
        <div class="exhpar mt15">
            <p class="comment-tit">
                <span class="fr mr10"><a href="#">更多>></a></span><b class="comment-ico f14">展馆博览</b></p>
            <ul>
                <li><a href="#" target="_blank">
                    <img src="<?php echo DT_SKIN;?>ad/zh/zg1.jpg" alt=""></a>
                    <p>
                        <a href="">广东顺德展览中心</a></p>
                </li>
                <li><a href="#" target="_blank">
                    <img src="<?php echo DT_SKIN;?>ad/zh/zg2.jpg" alt=""></a>
                    <p>
                        <a href="#">大连世界博览广场</a></p>
                </li>
                <li><a href="#" target="_blank">
                    <img src="<?php echo DT_SKIN;?>ad/zh/zg3.jpg" alt=""></a>
                    <p>
                        <a href="">大连星海会展中心</a></p>
                </li>
                <li><a href="#" target="_blank">
                    <img src="<?php echo DT_SKIN;?>ad/zh/zg4.jpg" alt=""></a>
                    <p>
                        <a href="">陕西国际展览中心</a></p>
                </li>
                <li><a href="#" target="_blank">
                    <img src="<?php echo DT_SKIN;?>ad/zh/zg5.jpg" alt=""></a>
                    <p>
                        <a href="">香港会展中心</a></p>
                </li>
            </ul>
        </div>
    </div>
    <div class="clear">
    </div>
 <!--广告位AD招商长3-->
    <div class="wrapper">
        <p class="mt15">
             <a href="#" target="_blank">
                <img src="<?php echo DT_SKIN;?>ad/zh/c3.gif" alt=""></a>
           </p>
    </div>
 <div class="ibox full">
    <div class="wrap">
        <div class="header">
            <h3>友情链接</h3>
        </div>
        <div class="friendlink">
<?php if($DT['page_text']) { ?>
<?php echo tag("table=link&condition=status=3 and level>0 and thumb='' and username=''&areaid=$cityid&pagesize=".$DT['page_text']."&order=listorder desc,itemid desc&template=list-link&cols=9");?>
<?php } ?>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/laydate.js"></script>
<script> 
var start={elem:'#txt_fromtime',format:'YYYY-MM-DD',min:laydate.now(),max:'2099-06-16',istoday:false,choose:function(datas){end.min=datas;end.start=datas}};var end={elem:'#txt_totime',format:'YYYY-MM-DD',min:laydate.now(),max:'2099-06-16 23:59:59',istoday:false,choose:function(datas){start.max=datas}};laydate(start);laydate(end);
$(function(){$("#iSlider").slide({titCell:".hd ul",mainCell:".bd ul",effect:"fold", autoPlay:true,autoPage:true, delayTime:600, trigger:"click"});});
</script>
<?php include template('120');?>