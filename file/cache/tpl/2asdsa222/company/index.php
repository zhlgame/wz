<?php defined('IN_DESTOON') or exit('Access Denied');?><?php $CSS = array('company');$navAll=1;?>
<?php include template('header-gs');?>
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/tabgs.js"></script>
<div id="topshow" class="full">
    <div class="wrap">
        <div class="left fl"> </div>
        <div class="center fl">
            <div id="iSlider" class="focus">
                <div class="bd">
                    <?php echo ad(14);?>
            </div> </div>
            <div class="new-company">
                <div class="header">
                    <span class="fr">累计入驻<b class="red"><?php echo $db->count($DT_PRE.'company', '1', 1800);?></b>家企业</span>
                    <dl class="fl">
                        <dt class="orange fl">最新入驻：</dt>
                        <dd class="fl" style="height: 25px; overflow: hidden;">
<?php echo tag("moduleid=4&pagesize=15&order=fromtime desc&template=xiaohei-com");?>
                        </dd>
                        </dl>
                </div>
                <div class="content">
                <ul class="clearfix">
                   <li><a href="" hidefocus="" target="_blank">
                  <img src="<?php echo DT_SKIN;?>ad/gs/10521847c7804486c8.jpg"></a></li>
                    <li><a href="" hidefocus="" target="_blank">
                        <img src="<?php echo DT_SKIN;?>ad/gs/1052258a11df49b8ef.jpg"></a></li>
                    <li><a href="" hidefocus="" target="_blank">
                        <img src="<?php echo DT_SKIN;?>ad/gs/10522672b52004d527.jpg"></a></li>
                    <li><a href="" hidefocus="" target="_blank">
                        <img src="<?php echo DT_SKIN;?>ad/gs/105226bf00acc4ea36.jpg"></a></li>
                </ul>
                </div>
            </div>
        </div>
        <div class="right fr">
            <div class="operation f-14">
            <?php if($_userid) { ?>
    <a href="<?php echo userurl($_username);?>" target="_blank" class="login-btn1 fl">HI!  <span class="f_b f_green" title="<?php echo $MG['groupname'];?>"><?php echo $_truename;?></span></a>
                <a href="<?php echo $MODULE['2']['linkurl'];?>" target="_blank" class="regist-btn fl">我的办公室</a>
               <?php } else { ?>
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>" rel="nofollow" class="login-btn fl" title="登录"><i></i>登录</a>
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" rel="nofollow" class="regist-btn fl" title="注册"><i></i>免费注册</a>
<?php } ?>
            </div>
            <dl class="pro-news">
                <dt>产品头条</dt>
                <?php $tags=tag("moduleid=5&condition=status=3&pagesize=6&order=addtime desc&showcat=1&template=null");?> 
                <?php if(is_array($tags)) { foreach($tags as $t) { ?>
                <dd> <span class="orange"><a href="<?php echo $t['caturl'];?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
<?php if($class) { ?> class="catname"<?php } ?>
>[<?php echo $t['catname'];?>]</a></span><a href="<?php echo $t['linkurl'];?>"<?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
 title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></dd>
                <?php } } ?>
            </dl>
            <dl class="area">
                <dt class="f14">按地区查找</dt>
                
                
<dd><a href="/company/search.php?areaid=12" rel="nofollow">浙江</a></dd>
<dd><a href="/company/search.php?areaid=13" rel="nofollow">安徽</a></dd>
<dd><a href="/company/search.php?areaid=14" rel="nofollow">福建</a></dd>
<dd><a href="/company/search.php?areaid=15" rel="nofollow">江西</a></dd>
<dd><a href="/company/search.php?areaid=16" rel="nofollow">山东</a></dd>
<dd><a href="/company/search.php?areaid=17" rel="nofollow">河南</a></dd>
<dd><a href="/company/search.php?areaid=18" rel="nofollow">湖北</a></dd>
<dd><a href="/company/search.php?areaid=19" rel="nofollow">湖南</a></dd>
<dd><a href="/company/search.php?areaid=20" rel="nofollow">广东</a></dd>
<dd><a href="/company/search.php?areaid=5" rel="nofollow">河北</a></dd>
<dd><a href="/company/search.php?areaid=6" rel="nofollow">山西</a></dd>
<dd><a href="/company/search.php?areaid=8" rel="nofollow">辽宁</a></dd>
 
            </dl>
            <div class="tnum"> 今日商品总数：<span class="red f-14"><?php echo $db->count($DT_PRE.'sell_5', 'status=3', 1800);?></span> </div>
        </div>
    </div>
</div>
<div class="full mt-15"><div class="wrap">  
<a href="/" hidefocus="" target="_blank"><img src="<?php echo DT_SKIN;?>ad/gs/02445526037c70862d.jpg"></a>
    </div></div>

<?php $mid=4?>
<?php $child = get_maincat(0, 4, 1);?>
<?php if(is_array($child)) { foreach($child as $i => $c) { ?>
<?php $kk=$i+1?>
<?php if(in_array($c['catid'], array(2408,2642,3254,2596,2992,2516,2474,2625,2421,2653))) { ?>
    <?php include template('520', 'chip');?>
 
<div class="layout">
    <div class="wrap">
    
        <div class="leftbar fl">
            <div class="header">
            <span class="fr">推荐分类：
<?php $sub = get_maincat($c['catid'], $mid, 1);?>
<?php if(is_array($sub)) { foreach($sub as $j => $s) { ?>
<?php if($j<6) { ?>
<a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>" class="g"><?php echo set_style($s['catname'], $s['style']);?></a>|
<?php } ?>
<?php } } ?>
 
                            
                        </span>
            <h3><em><?php echo $i+1;?>F</em> <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank"><?php echo $c['catname'];?></a></h3>
            </div>
            <dl class="comad fl">
             <?php $tags=tag("moduleid=4&catid=".$c['catid']."&condition=level=0 and thumb<>''&areaid=$cityid&pagesize=1&order=".$MOD['order']."&template=null");?>
             <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
                <dt><a class="a-img" href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo imgurl($t['thumb']);?>" width="216" height="131"></a></dt>
                <dd>
                    <h5><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo dsubstr($t['company'], 22, '...');?></a></h5>
                    <p class="">主营项目：<?php echo dsubstr($t['business'], 44, '...');?></p>
                    <p class="explain"> <a target="_blank" href="<?php echo $t['linkurl'];?>">进入店铺</a>  <a target="_blank" href="<?php echo $t['linkurl'];?>">联系方式</a>
                                    </p>
                </dd>
                <?php } } ?>
            </dl>
            <div class="comshow fl">
                <h4>优选企业</h4>
<?php echo tag("moduleid=4&catid=$catid&condition=level=0 and thumb<>''&pagesize=4&order=userid desc&template=xiaohei-company");?>
            </div>
        </div>
        <div class="rightbar fr">
            <div class="header"><a class="more" target="_blank" href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>">更多>></a>
                <h3>最新加入企业</h3>
            </div>    
<?php echo tag("moduleid=4&catid=$catid&pagesize=8&order=userid desc&template=xiaohei-com");?>
        </div>
    </div>
</div>
<?php } ?>
<?php } } ?>
 
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
<script type="text/javascript">
        $(document).ready(function(){
     $("#scrollDiv").Scroll({line:1,speed:1000,timert:3000,up:"btn1",down:"btn2"});
    
        }); 
    </script>
 
<?php include template('footer');?>
