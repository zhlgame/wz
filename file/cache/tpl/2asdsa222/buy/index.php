<?php defined('IN_DESTOON') or exit('Access Denied');?><?php $navAll=1;?>
<?php include template('header-buy');?>
<div id="topshow" class="full">
    <div class="wrap">
        <div class="left fl">
            <h3 class="purtit">最新采购</h3>
            <div class="purshow">
<?php $tags=tag("moduleid=$moduleid&condition=status=3&pagesize=2&order=".$MOD['order']."&template=null");?>
<?php if(is_array($tags)) { foreach($tags as $t) { ?>
        <dl>
            <dt class="te"><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo $t['title'];?></a></dt>
            <dd>
                <span class="purtime fl"></span>采购截止时间：<?php if($todate) { ?><?php echo $t['todate'];?><?php } else { ?>长期有效<?php } ?>
</span><?php if($expired) { ?> <span class="f_red">[已过期]</span><?php } ?>
</dd>
            <dd class="gray">
                采购数量：<?php echo $t['amount'];?></dd>
        </dl>
<?php } } ?>
 <?php echo tag("moduleid=$moduleid&length=28&condition=status=3&pagesize=8&target=_blank&order=".$MOD['order']);?>   
                
            </div>
        </div>
        <div class="center fl">
            <div id="iSlider" class="focus">
                <div class="bd">
                   <?php echo ad(14);?>
                </div>
               
            </div>
            <dl class="special clearfix">
                <dt class="fl">精选<span class="red">优品</span></dt>
                <dd class="fl">
<?php echo tag("moduleid=$moduleid&length=24&condition=status=3&pagesize=4&order=".$MOD['order']."&width=100&height=100&template=buy01");?>
                </dd>
            </dl>
        </div>
        <div class="right fr">
            <div class="operation f-14">
                        <?php if($_userid) { ?>
    <a href="<?php echo userurl($_username);?>" target="_blank" class="login-btn1 fl">HI!  <span class="f_b f_green" title="<?php echo $MG['groupname'];?>"><?php echo $_truename;?></span></a>
                <a href="<?php echo $MODULE['2']['linkurl'];?>" target="_blank" class="regist-btn fl">我的自耕地</a>
               <?php } else { ?>
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>" rel="nofollow" class="login-btn fl" title="登录"><i></i>登录</a>
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" rel="nofollow" class="regist-btn fl" title="注册"><i></i>免费注册</a>
<?php } ?>
            </div>
            <div class="purarea">
                <h3>按照地区查找采购</h3>
                <ul>
                    
                                            <li><span class="purname">华北</span>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=1&typeid=99" target="_blank">北京</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=3&typeid=99" target="_blank">天津</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=5&typeid=99" target="_blank">河北</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=7&typeid=99" target="_blank">内蒙古</a>
<a href="/buy/b0/at110204/" target="_blank">山西</a></li>
                        <li><span class="purname">华东</span>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=16&typeid=99" target="_blank">山东</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=2&typeid=99" target="_blank">上海</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=11&typeid=99" target="_blank">江苏</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=13&typeid=99" target="_blank">安徽</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=12&typeid=99" target="_blank">浙江</a></li>
                        <li><span class="purname">华南</span>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=21&typeid=99" target="_blank">广西</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=20&typeid=99" target="_blank">广东</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=14&typeid=99" target="_blank">福建</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=22&typeid=99" target="_blank">海南</a></li>
                        <li><span class="purname">华中</span>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=17&typeid=99" target="_blank">河南</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=18&typeid=99" target="_blank">湖北</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=19&typeid=99" target="_blank">湖南</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=15&typeid=99" target="_blank">江西</a></li>
                        <li><span class="purname">西北</span>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=31&typeid=99" target="_blank">新疆</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=29&typeid=99" target="_blank">青海</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=28&typeid=99" target="_blank">甘肃</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=30&typeid=99" target="_blank">宁夏</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=27&typeid=99" target="_blank">陕西</a></li>
                        <li><span class="purname">东北</span>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=10&typeid=99" target="_blank">黑龙江</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=9&typeid=99" target="_blank">吉林</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=8&typeid=99" target="_blank">辽宁</a></li>
                        <li><span class="purname">西南</span>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=26&typeid=99" target="_blank">西藏</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=4&typeid=99" target="_blank">重庆</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=23&typeid=99" target="_blank">四川</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=25&typeid=99" target="_blank">云南</a>
<a href="<?php echo $MODULE['6']['linkurl'];?>search.php?areaid=24&typeid=99" target="_blank">贵州</a></li>
                </ul>
            </div>
            <div class="purgent">
                <h3 class="purgetit">紧急求购</h3>
                <?php echo tag("moduleid=$moduleid&length=28&condition=status=3&pagesize=5&target=_blank&order=".$MOD['order']);?>
            </div>
        </div>
    </div>
</div>
<div class="layout"><div class="wrap"><a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/buy/02314696590f6ef61c.jpg" alt="" /></a>
    </div></div>

<?php $mid=6?>
<?php $child = get_maincat(0, 6, 1);?>
<?php if(is_array($child)) { foreach($child as $i => $c) { ?>
<?php if(in_array($c['catid'], array(1315,1328,1344,1381,1392,1423,1503,1532,1549))) { ?>
<?php $kk=$i+1?> 
<div id="floor" class="layout">
    <div class="floor wrap">
        <div class="header"><a class="more" href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>">查看更多>></a><h3><b><?php echo $i+1;?>F</b><i><?php echo $c['catname'];?></i></h3></div>
        <div class="content">
        <div class="listleft fl">
            <dl class="listtop">
                <dt>
                    热门分类</dt>
                    <dd>
                    <?php $catid=$c['catid'];$level=1;?>
                <?php include template('buynav', 'chip');?>
                </dd>
            </dl>
            <div class="listbottom mt-10">
                 <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank"><img src="<?php echo DT_SKIN;?>ad/buy/<?php if($kk==1) { ?>1<?php } else if($kk==2) { ?>2<?php } else if($kk==3) { ?>3<?php } else if($kk==4) { ?>4<?php } else if($kk==5) { ?>5}<?php } else if($kk==6) { ?>6<?php } else if($kk==7) { ?>7<?php } else if($kk==8) { ?>8<?php } else if($kk==9) { ?>9<?php } else if($kk==10) { ?>10<?php } ?>
.jpg"/> </a>
            </div>
        </div>
        <div class="listmid cldl fl">        
<?php echo tag("moduleid=6&catid=$catid&condition=status=3 and thumb<>''&length=28&pagesize=6&order=".$MOD['order']."&width=100&height=100&template=buy02");?>
        </div>
        <div class="listright fr">
            <h4>采购排行</h4>
            <?php echo tag("moduleid=$moduleid&catid=$catid&length=28&condition=status=3&pagesize=8&showcat=1&target=_blank&order=".$MOD['order']);?>
            <p class="ml-10 mt-10"> <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank"><img src="<?php echo DT_SKIN;?>ad/buy/<?php if($kk==1) { ?>1<?php } else if($kk==2) { ?>2<?php } else if($kk==3) { ?>3<?php } else if($kk==4) { ?>4<?php } else if($kk==5) { ?>5}<?php } else if($kk==6) { ?>6<?php } else if($kk==7) { ?>7<?php } else if($kk==8) { ?>8<?php } else if($kk==9) { ?>9<?php } else if($kk==10) { ?>10<?php } ?>
f.jpg"/> </a></p>
        </div>
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
<?php include template('footer');?>
