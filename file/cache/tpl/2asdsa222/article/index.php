<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/koala.js"></script>
<!--新闻推荐-->
    <div class="wrapper">
        <div class="new_turns">
            <!-- 代码 开始 -->
            <div id="fsD1" class="focus">
                
                <div id="D1pic1" class="fPic">
                    <div class="fcon" style="display: none;"> <a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/news/09521728b14eca06b4.jpg" style="opacity: 1;"></a> <span class="shadow"><a target="_blank" href="/">广告1</a></span> </div>
        <div class="fcon" style="display: none;"> <a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/news/1002089a89a921a0aa.jpg" style="opacity: 1;"></a> <span class="shadow"><a target="_blank" href="/">广告2</a></span> </div>
        <div class="fcon" style="display: block;"> <a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/news/1028057284e8915649.jpg" style="opacity: 1;"></a> <span class="shadow"><a target="_blank" href="/">广告3</a></span> </div>
        <div class="fcon" style="display: none;"> <a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/news/114528fe91b55767ce.jpg" style="opacity: 1;"></a> <span class="shadow"><a target="_blank" href="/">广告4</a></span> </div>
                </div>
                <div class="fbg">
                    <div class="D1fBt" id="D1fBt">
                        <a href="javascript.:void(0)" hidefocus="true" target="_self" class="current"><i>01</i></a>
                        <a href="javascript.:void(0)" hidefocus="true" target="_self" class=""><i>02</i></a>
                        <a href="javascript.:void(0)" hidefocus="true" target="_self" class=""><i>03</i></a>
                        <a href="javascript.:void(0)" hidefocus="true" target="_self" class=""><i>04</i></a>
                    </div>
                </div>
                <span class="prev"></span><span class="next1"></span>
            </div>
            <!-- 代码 结束 -->
        </div>
        <div class="recommend">      
 
             <?php $tags=tag("moduleid=21&length=34&condition=status=3 and level=5&areaid=$cityid&pagesize=2&target=_blank&order=addtime desc&template=null");?>
                    <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
             <h1 class="<?php if($i<1) { ?>mt30<?php } else { ?>mt15<?php } ?>
 orange"><a href="<?php echo $t['linkurl'];?>"  target="_blank"  title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></h1>
    <div class="arctile"><?php echo dsubstr($t['introduce'], 160, '...');?> <span class="orange"><a href="<?php echo $t['linkurl'];?>"  target="_blank">[查看详情]</a></span> </div>
<?php } } ?>
            <ul class="recommend_new">  
           <?php $tags=tag("moduleid=21&length=34&condition=status=3&areaid=$cityid&pagesize=10&order=addtime desc&template=null");?>
                    <?php if(is_array($tags)) { foreach($tags as $t) { ?>
<li><a href="<?php echo $t['linkurl'];?>"  target="_blank"  title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></li>
<?php } } ?>
            </ul>
        </div>
        <div class="clear">
        </div>
        <div class="market_box">
            <!--地区行情-->
            <div class="price">
                <div class="title">
                    地区行情</div>
                <ul>
                     <li><a href="<?php echo $MODULE['21']['linkurl'];?>search.php?areaid=1" target="_blank">北京</a></li>
                    <li><a href="<?php echo $MODULE['21']['linkurl'];?>search.php?areaid=3" target="_blank">天津</a></li>
                    <li><a href="<?php echo $MODULE['21']['linkurl'];?>search.php?areaid=5" target="_blank">河北</a></li>
                    <li><a href="<?php echo $MODULE['21']['linkurl'];?>search.php?areaid=6" target="_blank">山西</a></li>
                    <li><a href="<?php echo $MODULE['21']['linkurl'];?>search.php?areaid=16" target="_blank">山东</a></li>
                    <li><a href="<?php echo $MODULE['21']['linkurl'];?>search.php?areaid=2" target="_blank">上海</a></li>
                    <li><a href="<?php echo $MODULE['21']['linkurl'];?>search.php?areaid=11" target="_blank">江苏</a></li>
                    <li><a href="<?php echo $MODULE['21']['linkurl'];?>search.php?areaid=13" target="_blank">安徽</a></li>
                    <li><a href="<?php echo $MODULE['21']['linkurl'];?>search.php?areaid=12" target="_blank">浙江</a></li>
                    <li><a href="<?php echo $MODULE['21']['linkurl'];?>search.php?areaid=21" target="_blank">广西</a></li>
                    <li><a href="<?php echo $MODULE['21']['linkurl'];?>search.php?areaid=20" target="_blank">广东</a></li>
                    <li><a href="<?php echo $MODULE['21']['linkurl'];?>search.php?areaid=14" target="_blank">福建</a></li>
                    <li><a href="<?php echo $MODULE['21']['linkurl'];?>search.php?areaid=22" target="_blank">海南</a></li>
                    <li><a href="<?php echo $MODULE['21']['linkurl'];?>search.php?areaid=17" target="_blank">河南</a></li>
                    <li><a href="<?php echo $MODULE['21']['linkurl'];?>search.php?areaid=18" target="_blank">湖北</a></li>
                    <li><a href="<?php echo $MODULE['21']['linkurl'];?>search.php?areaid=19" target="_blank">湖南</a></li>
                    <li><a href="<?php echo $MODULE['21']['linkurl'];?>search.php?areaid=15" target="_blank">江西</a></li>
                    <li><a href="<?php echo $MODULE['21']['linkurl'];?>search.php?areaid=31" target="_blank">新疆</a></li>
                    <li><a href="<?php echo $MODULE['21']['linkurl'];?>search.php?areaid=29" target="_blank">青海</a></li>
                    <li><a href="<?php echo $MODULE['21']['linkurl'];?>search.php?areaid=28" target="_blank">甘肃</a></li>
 
                </ul>
            </div>
            <!--排行榜-->
            <div class="seniority">
                <div class="tab_nav">
                    <p class="title">
                        排行榜</p>
                    <ul>
                        <li class="selected">热门</li>
                        <li>最新</li>
                        <div class="clear">
                        </div>
                    </ul>
                    <div class="clear">
                    </div>
                </div>
                <div class="tab_box">
                    <ul class="tab1">
                        
              <?php $tags=tag("moduleid=21&length=40&condition=status=3&areaid=$cityid&pagesize=6&order=hits desc&template=null");?>
                  <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
 
<?php if($i<3) { ?>
<li class="on"><span>0<?php echo $i+1;?></span><a href="<?php echo $t['linkurl'];?>"  target="_blank"  title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></li>
<?php } else { ?>
<li ><span>0<?php echo $i+1;?></span><a href="<?php echo $t['linkurl'];?>"  target="_blank"  title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></li>
</li>
<?php } ?>
 
<?php } } ?>

                    </ul>
                    <ul class="tab2" style="display: none">
                        
                                <?php $tags=tag("moduleid=21&length=40&condition=status=3&areaid=$cityid&pagesize=6&order=addtime desc&template=null");?>
                    <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
 
<?php if($i<3) { ?>
<li class="on"><span>0<?php echo $i+1;?></span><a href="<?php echo $t['linkurl'];?>"  target="_blank"  title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></li>
<?php } else { ?>
<li ><span>0<?php echo $i+1;?></span><a href="<?php echo $t['linkurl'];?>"  target="_blank"  title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></li>
</li>
<?php } ?>
 
<?php } } ?>
                            
                    </ul>
                </div>
            </div>
        </div>
        <!--专题活动-->
        <div class="special">
            <div class="title left w150">
                图文推荐</div>
            <div class="right">
                <a target="_blank" href="">更多></a></div>
            <div class="clear">
            </div>
            
            <ul class="special_img">
 
<?php $tags=tag("moduleid=21&length=34&condition=status=3&areaid=".$c['cityid']."&pagesize=2&lazy=".$c['lazy']."&order=hits desc&target=_blank&template=null");?>
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
       <li><a href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo $t['thumb'];?>" width="259" height="119" alt="<?php echo $t['alt'];?>"/>
             <p><?php echo $t['title'];?></p></a></li>
      
                <?php } } ?>
 
    </ul>
    <ul class="special_txt">
           <?php $tags=tag("moduleid=21&length=34&condition=status=3&areaid=$cityid&pagesize=2&target=_blank&lazy=$lazy&order=addtime desc&template=null");?>
                    <?php if(is_array($tags)) { foreach($tags as $t) { ?>
<li><a href="<?php echo $t['linkurl'];?>"  target="_blank"  title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></li>
<?php } } ?>
    </ul>
        </div>
    </div>
    <div class="clear">
    </div>
    <!--banner1-->
    <div class="wrapper mt15">
        
        <img src="<?php echo DT_SKIN;?>ad/news/055627eba45a3b901c.jpg">
    </div>
    <!--中间3个列表-->
   
</div>
    </div>
    <div class="clear">
    </div>
 
    <!--中间列表-->
    <div class="wrapper">
       
 
  <?php if($MOD['page_icat']) { ?>
<table cellpadding="0" cellspacing="0" width="100%">
<?php $child = get_maincat(0, $mid, 2);?>
<?php if(is_array($childcat)) { foreach($childcat as $i => $c) { ?>
<?php if($i%2==0) { ?><tr><?php } ?>
<td valign="top" width="330">


        <div class="agro mt15 fl">
            <div class="title">
                <div class="left">
                    <a href="<?php echo $MOD['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank" hidefocus=""><?php echo $c['catname'];?></a></div>
                <div class="right">
                    <span><a href="<?php echo $MOD['linkurl'];?><?php echo $c['linkurl'];?>">更多</a></span>
                </div>
                <div class="clear">
                </div>
            </div>
            
<div class="agro_box">
 
 <?php $tags=tag("moduleid=21&condition=status=3 and thumb<>''&length=24&catid=".$c['catid']."&areaid=".$c['cityid']."&pagesize=1&lazy=".$c['lazy']."&order=addtime desc&template=null");?>
 
            <?php if(is_array($tags)) { foreach($tags as $t) { ?>
    
            <div class="agro_img">
                <a href="<?php echo $t['linkurl'];?>" target="_blank">
                <img src="<?php echo $t['thumb'];?>" width="200" height="220" alt="<?php echo $t['alt'];?>"/>
                </a>
                <p class="white">
                    <a href="<?php echo $t['linkurl'];?>" target="_blank">
                        <?php echo $t['title'];?></a></p>
            </div>
        
    <div class="agro_right">
        
                <div class="agro_art">
                    <h1>
                        <a href="<?php echo $t['linkurl'];?>">
                            <?php echo $t['title'];?></a></h1>
                    <p>
                        <a href="<?php echo $t['linkurl'];?>">
                           <?php echo dsubstr($t['introduce'], 80, '...');?></a></p>
                </div>
            <?php } } ?>
                  
 
    <?php $tags=tag("moduleid=$moduleid&catid=".$c['catid']."&condition=status=3&length=34&areaid=$cityid&order=addtime desc&pagesize=7&target=_blank&lazy=$lazy&template=null");?>
     <ul>
                    <?php if(is_array($tags)) { foreach($tags as $t) { ?>
<li><a href="<?php echo $t['linkurl'];?>"  target="_blank"  title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a><em><?php echo date('Y-m-d', $t['addtime']);?></em></li>
<?php } } ?>
                   
                
 
        </ul>
    </div>
</div>
</div>
      
 
</td>
<?php if($i%2==0) { ?><td> </td><?php } ?>
<?php if($i%2==1) { ?></tr><?php } ?>
<?php } } ?>
</table>
<?php } ?>
 
 
 
 
    </div>
 
    <div class="clear">
    </div>
    <!--banner2-->
    <div class="wrapper mt15">
        
        <img src="<?php echo DT_SKIN;?>ad/news/banner2.jpg">
    </div>
    <!--中间3个列表-->
    <div class="wrapper mt15">
<div class="bdtop fl">
       
        </div>
    </div>
 </div>
    <div class="clear">
    </div>
    </form>
 
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
    
    <div class="clear">
    </div>
 
    <!--大图JS-->
    <script type="text/javascript">
        Qfast.add('widgets', { path: "<?php echo DT_SKIN;?>js/terminator.js", type: "js", requires: ['fx'] });
        Qfast(false, 'widgets', function () {
            K.tabs({
                id: 'fsD1',   //焦点图包裹id  
                conId: "D1pic1",  //** 大图域包裹id  
                tabId: "D1fBt",
                tabTn: "a",
                conCn: '.fcon', //** 大图域配置class       
                auto: 1,   //自动播放 1或0
                effect: 'fade',   //效果配置
                eType: 'click', //** 鼠标事件
                pageBt: true, //是否有按钮切换页码
                bns: ['.prev', '.next1'], //** 前后按钮配置class                          
                interval: 3000  //** 停顿时间  
            })
        })  
    </script>
 
 
    <!--版权信息-->
<?php include template('footer');?>
