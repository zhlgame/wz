<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('headermall');?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>mall.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>mall_new.css"/>
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/jquery.superslide.2.1.1.js"></script>
<!--分类-->
 
<!--广告-->
<div class="home-focus-layout">
  <ul id="fullScreenSlides" class="full-screen-slides">
  <a href="#" target="_blank" title="#"><li style="z-index: 800; display: list-item; background: url(<?php echo DT_SKIN;?>ad/mall/web-1.jpg) 50% 0% no-repeat;"></li></a>
  <a href="#" target="_blank" title="#"><li style="z-index: 900; display: list-item; background: url(<?php echo DT_SKIN;?>ad/mall/web-2.jpg) 50% 0% no-repeat;"></li></a>
  <a href="#" target="_blank" title="#"><li style="z-index: 900; display: list-item; background: url(<?php echo DT_SKIN;?>ad/mall/web-3.jpg) 50% 0% no-repeat;"></li></a>
  <a href="#" target="_blank" title="#"><li style="z-index: 900; display: list-item; background: url(<?php echo DT_SKIN;?>ad/mall/web-4.jpg) 50% 0% no-repeat;"></li></a>                     
  </ul>
  <ul id="SlidesPagination" class="full-screen-slides-pagination" style="margin-left: -396px;">
  <li class=""><a href="javascript:void(0);">1</a></li>
  <li class=""><a href="javascript:void(0);">2</a></li>
  <li class=""><a href="javascript:void(0);">3</a></li>
  <li class=""><a href="javascript:void(0);">4</a></li>
  </ul>
  
<!--新用户-->
  <div class="right-sidebar">
  <div class="proclamation">
      <ul class="tabs-nav">
        <li class="tabs-selected">
          <h3>新用户入住</h3>
        </li>
      </ul>
      <div class="tabs-panel">
        <ul class="mall-news">
        <?php $tags=tag("table=announce&condition=3 and level=1&areaid=$cityid&pagesize=5&length=26&datetype=2&order=listorder desc,addtime desc&target=_blank&template=null");?>
 
<?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<li><i></i><a href="<?php echo $t['linkurl'];?>" target="_blank" class="dot02" title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></li>
<?php } } ?>
</ul>
      </div>
    <div class="tabs-panel tabs-hide">
    <div id="right-code" class="sale-discount">
      <ul>
        <li><div class="code"></div><span class="codetit">APP</span></li>
      </ul>
    </div>
    </div>
    </div>
  
<!--商城公告-->
    <div class="proclamation proc_top">
      <ul class="tabs-nav">
        <li class="tabs-selected">
          <h3>商城公告</h3>
        </li>
      </ul>
      <div class="tabs-panel">
        <ul class="mall-news">
               <?php $tags=tag("table=announce&catid=3475&condition=totime=0 or totime>$today_endtime-86400&areaid=$cityid&pagesize=4&length=26&datetype=2&order=listorder desc,addtime desc&target=_blank&template=null");?>
<?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<li><i></i><a href="<?php echo $t['linkurl'];?>" target="_blank" class="dot02" title="<?php echo $t['alt'];?>"><?php echo $t['title'];?></a></li>
<?php } } ?>
</ul>
 
      </div>
    <div class="tabs-panel tabs-hide">
    <div id="right-code" class="sale-discount">
      <ul>
        <li><div class="code"></div><span class="codetit">APP</span></li>
      </ul>
    </div>
    </div>
    </div>
    
    <div class="policy proc_top">
      <ul>
        <li class="b1">七天包退</li>
        <li class="b2">正品保障</li>
        <li class="b3">闪电发货</li>
        <li class="b4">贴心服务</li>
        <li class="b5">便捷付款</li>
        <li class="b6">省钱到家</li>
      </ul>
    </div>
  </div>
</div>
<script type="text/javascript"> 
$(document).ready(function (m)
{
$(".adver2").hover(function(event)
{
$(this).find(".clock").animate({right:'0px'},"1500");
},function(event)
{
$(this).find(".clock").animate({right:'-115px'},"1500");
});
});
$(document).ready(function (t)
{
$(".wadver li").hover(function(event)
{
$(this).find(".adver3_pic").animate({left:'0px'},"1500");
},function(event)
{
$(this).find(".adver3_pic").animate({left:'10px'},"fast");
});
$(".adver7 li").hover(function(event)
{
$(this).find(".adver7_pic").animate({paddingLeft:'0px'},"1500");
},function(event)
{
$(this).find(".adver7_pic").animate({paddingLeft:'5px'},"fast");
});
$(".adver8 li").hover(function(event)
{
$(this).find(".adver8_pic").animate({paddingLeft:'0px'},"1500");
},function(event)
{
$(this).find(".adver8_pic").animate({paddingLeft:'5px'},"fast");
});
$(".adver9 li").hover(function(event)
{
$(this).find(".adver9_pic").animate({paddingLeft:'0px'},"1500");
},function(event)
{
$(this).find(".adver9_pic").animate({paddingLeft:'5px'},"fast");
});
});
$(document).ready(function (w)
{
$(".hot_cont li").hover(function(event)
{
$(this).find(".tright").animate({
width:'218px',
height:'258px'
},"slow");
},function(event)
{
$(this).find(".tright").animate({
width:'0px',
height:'0px'
},"fast");
});
$(".hot_cont li").hover(function(event)
{
$(this).find(".bleft").animate({
width:'218px',
height:'258px'
},"slow");
},function(event)
{
$(this).find(".bleft").animate({
width:'0px',
height:'0px'
},"fast");
});
});
</script>
</head>
 
<body>
    <div class="wall">
<div class="warp">
    <div class="hot fl swiper-container hot_container">
            <div class="hot_title"><strong class="fl">爆款热卖</strong><a href="javascript:void(0)" class="refresh fr hot-swiper-button-next next">换一批</a></div>
            <div class="hot_cont swiper-wrapper hot_superslide">
                        <ul class="swiper-slide clone">
                                <?php $tags=tag("moduleid=$moduleid&length=34&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&pagesize=4&order=".$MOD['order']."&template=null");?>
                         <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>       
                    <li <?php if($k<1) { ?>class="hot1"<?php } else { ?><?php } ?>
>
                             <a href="<?php echo $t['linkurl'];?>" target="_blank">
                        <div class="tright"></div>
                            <div class="bleft"></div>
                        <dl>
                            <dt><img src="<?php echo $t['thumb'];?>" /></dt>
                                <dd class="prd_name"><?php echo $t['title'];?></dd>
                                <dd class="prd_money"><?php echo $DT['money_sign'];?><?php echo $t['price'];?></dd>   
                            </dl>
                              </a>
                        </li> 
                      
  <?php } } ?>
                                            </ul>
                                     <ul class="swiper-slide">         
                     <?php $tags=tag("moduleid=$moduleid&length=34&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&pagesize=4&order=".$MOD['order']."&template=null");?>
                         <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>       
                    <li <?php if($k<1) { ?>class="hot1"<?php } else { ?><?php } ?>
>
                             <a href="<?php echo $t['linkurl'];?>" target="_blank">
                        <div class="tright"></div>
                            <div class="bleft"></div>
                        <dl>
                            <dt><img src="<?php echo $t['thumb'];?>" /></dt>
                                <dd class="prd_name"><?php echo $t['title'];?></dd>
                                <dd class="prd_money"><?php echo $DT['money_sign'];?><?php echo $t['price'];?></dd>   
                            </dl>
                              </a>
                        </li> 
                      
  <?php } } ?>
                                            </ul>
                                         <ul class="swiper-slide">      
                        <?php $tags=tag("moduleid=$moduleid&length=34&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&pagesize=4&order=".$MOD['order']."&template=null");?>
                         <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>       
                    <li <?php if($k < 1) { ?>class="hot1"<?php } else { ?><?php } ?>
>
                             <a href="<?php echo $t['linkurl'];?>" target="_blank">
                        <div class="tright"></div>
                            <div class="bleft"></div>
                        <dl>
                            <dt><img src="<?php echo $t['thumb'];?>" /></dt>
                                <dd class="prd_name"><?php echo $t['title'];?></dd>
                                <dd class="prd_money"><?php echo $DT['money_sign'];?><?php echo $t['price'];?></dd>   
                            </dl>
                              </a>
                        </li> 
                      
  <?php } } ?>
     </ul>
 
            </div>
        </div>
        <div class="adver1 fr"><a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/mall/01.gif" /></a></div>
    </div>
    <script type="text/javascript">
    $(".hot_container").slide({mainCell:".hot_superslide",autoPage:true,effect:"leftLoop",autoPlay:false,mouseOverStop:true,interTime:3000,easing:"swing",delayTime:"100",trigger:"click"});
    </script>
    <div class="warp">
    <div class="adver2 pink fl">
        <?php $tags=tag("moduleid=$moduleid&length=34&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&pagesize=1&order=".$MOD['order']."&template=null");?>
                         <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?> 
            <a target="_blank" href="<?php echo $t['linkurl'];?>">
        <div class="adver_text">
            <div class="adver_title">今日团购</div>
                <dl class="adver_cont">
                    <dt><?php echo $t['title'];?></dt>
                    <dd><?php echo dsubstr($t['company'], 32, '...');?></dd>
                </dl>
            </div>
        <span class="adver_price"><?php echo $DT['money_sign'];?><?php echo $t['price'];?></span>
            <div class="adver_pic"><img src="<?php echo imgurl($t['thumb']);?>" /></div>
            </a>
            <?php } } ?>
        </div>
        <div class="wadver adver3 fl">
                <ul>
                 <?php $tags=tag("moduleid=$moduleid&length=34&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&pagesize=4&order=".$MOD['order']."&template=null");?>
                         <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>  
                <a target="_blank" href="<?php echo $t['linkurl'];?>">
                <li <?php if($i == 1) { ?>class="b1 b2"<?php } else if($i == 2) { ?>class="b1"<?php } else if($i == 3) { ?>class="b2"<?php } else if($i == 4) { ?><?php } ?>
>
                    <div class="adver3_pic mall"><img src="<?php echo imgurl($t['thumb']);?>" width="119" height="134"/></div>
                    <dl class="adver3_text">
                        <dt class="title_big"><?php echo $t['title'];?></dt>
                        <dd class="title_mid"><?php echo dsubstr($t['company'], 32, '...');?></dd>
                        <dd class="title_small"><?php echo dsubstr($t['business'], 30, '...');?></dd>
                        <dd class="prd_money"><?php echo $DT['money_sign'];?><?php echo $t['price'];?></dd>
                    </dl>
                </li>
            </a>
            <?php } } ?>
            </ul>
        </div>
        <div class="adver2 blue fl">
        <?php $tags=tag("moduleid=$moduleid&length=34&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&pagesize=1&order=".$MOD['order']."&template=null");?>
                         <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?> 
            <a target="_blank" href="<?php echo $t['linkurl'];?>">
                <div class="clock"><div class="clock_pic fl"><img src="<?php echo DT_SKIN;?>images/mall/clock.png" /></div><span class="new-time-remain" count_down="20836753"><em time_id="d"></em><em time_id="h"></em><em time_id="m"></em><em time_id="s"></em></span></div>
        
        <div class="adver_text">
            <div class="adver_title">限时折扣</div>
                <dl class="adver_cont">
                <dt><?php echo $t['title'];?></dt>
                    <dd><?php echo dsubstr($t['company'], 32, '...');?></dd>
                </dl>
            </div>
            <span class="adver_price"><?php echo $DT['money_sign'];?><?php echo $t['price'];?></span>
            <div class="adver_pic"><img src="<?php echo imgurl($t['thumb']);?>" /></div>
            </a>
            <?php } } ?>
        </div>
        <div class="wadver adver4 fl">
        <ul>
                    <?php $tags=tag("moduleid=$moduleid&length=34&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&pagesize=2&order=".$MOD['order']."&template=null");?>
                         <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?> 
                  <a target="_blank" href="<?php echo $t['linkurl'];?>">
                <li <?php if($i == 1) { ?>class="b1"<?php } else if($i == 2) { ?><?php } ?>
>
                <div class="adver3_pic mall"><img src="<?php echo imgurl($t['thumb']);?>" width="119" height="134" /></div>
                    <dl class="adver3_text">
                    <dt class="title_big"><?php echo $t['title'];?></dt>
                        <dd class="title_mid"><?php echo dsubstr($t['company'], 32, '...');?></dd>
                        <dd class="title_small"><?php echo dsubstr($t['business'], 30, '...');?></dd>
                        <dd class="prd_money"><?php echo $DT['money_sign'];?><?php echo $t['price'];?></dd>
                    </dl>
                </li>
            </a>
<?php } } ?>
            </ul>
        </div>
    </div>
    <div class="warp white_bg brand_container">
    <div class="shop_logo swiper-container10" id="scrollPic">
        <ul class="swiper-wrapper brand_superslide">
                            <div  class="swiper-slide">
                <li class="b2"><a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/mall/x1.jpg" /></a></li>
                <li class="b2"><a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/mall/x2.jpg" /></a></li>
                 <li class="b2"><a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/mall/x3.jpg" /></a></li>
                <li class="b2"><a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/mall/x4.jpg" /></a></li>
                 <li class="b2"><a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/mall/x5.jpg" /></a></li>
                <li class="b2"><a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/mall/x6.jpg" /></a></li>
               <li class="b2"><a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/mall/x7.jpg" /></a></li>
                            </div>
                           </ul>
        </div>
         <a href="javascript:void(0)" class="brand-swiper-button-prev prev fl"><img src="<?php echo DT_SKIN;?>images/mall/shop_01.jpg" /></a>
         <a class="brand-swiper-button-next next fl"><img src="<?php echo DT_SKIN;?>images/mall/shop_02.jpg" /></a>
    </div>
    <div class="warp white_bg">
    <div class="classif fl">
        <div class="c_title classif_bg1">
            <div class="square"></div>
            潮·青春            </div>
            <div class="mrap">
            <ul>
                     <a target="_blank" href="/"><li class="m1">精品服装</li></a>
                    <a target="_blank" href="/l"><li class="m2">珠宝首饰</li></a>
                    <a target="_blank" href="/"><li class="m3">鞋类箱包</li></a>
                    <a target="_blank" href="/"><li class="m4">潮流帽子</li></a>
                </ul>
            </div>
            <div class="adver5 first_small_container">
            <a href="javascript:void(0)" class="left_btn btn1 arrow-left  swiper-button-prev0 prev"></a>
                <div class="store_banner swip0" style="height:160px;">
                  <div class="swiper-wrapper first_small_superslide">
                                 <?php $tags=tag("moduleid=$moduleid&length=34&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&pagesize=2&order=".$MOD['order']."&template=null");?>
                         <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?> 
                    <dl>
                        <dt><a target="_blank" href="<?php echo $t['linkurl'];?>"><img src="<?php echo imgurl($t['thumb']);?>" /></a></dt>
                        <dd><a target="_blank" href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?></a></dd>
                    </dl>
                  
<?php } } ?>
 
                                      </div>
                </div>
                <a href="javascript:void(0)" class="left_btn btn2 arrow-right  swiper-button-next0 next"></a>
            </div>
            <div class="title1">
            <ul>
                                        <li><a target="_blank" href="/">戒指</a></li>
                                        <li><a target="_blank" href="/">锁骨项链</a></li>
                                        <li><a target="_blank" href="/">潮流女包</a></li>
                                        <li><a target="_blank" href="/">时尚男包</a></li>
                                        <li><a target="_blank" href="/">个性棒球帽</a></li>
                                        <li><a target="_blank" href="/">精美手链</a></li>
                                    </ul>
            </div>
        </div>
        <div class="adver6 fl superslide_container" id="adver6">
        <a href="javascript:void(0)" class="left_btn1 adver_btn1 arrow-left  swiper-button-prev1 prev" ></a>
            <div class="store_banner swip1  superslide6" style="height:435px;">
              <!--div class="swiper-wrapper"-->
                <!--div class="swiper-slide superslide6"-->
                                         <ul><li><a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/mall/a1.jpg" /></a></li></ul>
                                        <ul><li><a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/mall/a2.jpg" /></a></li></ul>
                                    <!--/div-->
              <!--/div-->
            </div>
            <a href="javascript:void(0)" class="left_btn1 adver_btn2 arrow-right  swiper-button-next1 next"></a>
        </div>
        <div class="adver7">
        <ul>
                <?php $tags=tag("moduleid=$moduleid&length=34&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&pagesize=6&order=".$MOD['order']."&template=null");?>
                         <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?> 
                        <a target="_blank" href="<?php echo $t['linkurl'];?>">
            <li>
                <dl class="adver7_d">
                    <dt class="adver7_pic"><img style="width:196px;height:151px;" src="<?php echo imgurl($t['thumb']);?>" /></dt>
                        <dd class="adver7_name"><?php echo $t['title'];?></dd>
                        <dd class="small_money"><?php echo $DT['money_sign'];?><?php echo $t['price'];?></dd>
                    </dl>
                </li>
            </a>
                          <?php } } ?>
                            </ul>
        </div>
    </div>
    <div class="warp white_bg">
    <div class="classif fl">
        <div class="c_title classif_bg2">
                <div class="square"></div>
              享·美味            </div>
            <div class="title2">
            <ul>
                                     <li><a target="_blank" href="/">若羌红枣</a></li>
                                  <li><a target="_blank" href="/">红枣干</a></li>
                                  <li><a target="_blank" href="/">新疆蜂蜜</a></li>
                                  <li><a target="_blank" href="/">蜂巢蜜</a></li>
                                  <li><a target="_blank" href="/">礼盒装</a></li>
                                 </ul>
            </div>
            <div class="store second_small_container">
            <a href="javascript:void(0)" class="sleft_btn sbtn1 arrow-left  swiper-button-prev2 prev"></a>
                 <div class="store_banner swip2" style="height:86px;">
                  <div class="swiper-wrapper second_small_superslide">
                                       <?php $tags=tag("moduleid=$moduleid&length=34&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&pagesize=2&order=".$MOD['order']."&template=null");?>
                         <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?> 
                    <dl>
                        <dt><a target="_blank" href="<?php echo $t['linkurl'];?>"><img src="<?php echo imgurl($t['thumb']);?>" /></a></dt>
                        <dd><a target="_blank" href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?></a></dd>
                    </dl>
                  
<?php } } ?>
                                      </div>
                </div>
                <a  href="javascript:void(0)" class="sleft_btn sbtn2 arrow-right  swiper-button-next2 next"></a>
            </div>
            
        </div>
        <div class="adver6 fl second_container">
        <a href="javascript:void(0)" class="left_btn2 adver_btn3 arrow-left  swiper-button-prev3 prev"></a>
        <div class="store_banner swip3 second_superslide" style="height:283px;">
              <!--div class="swiper-wrapper"-->
                <!--div class="swiper-slide"-->
                                        <ul><li><a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/mall/b1.jpg" />
                    </a></li></ul>
                                           <ul><li><a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/mall/b2.jpg" />
                    </a></li></ul>
                                       <!--/div-->
              <!--/div-->
            </div>
            <a href="javascript:void(0)" class="left_btn2 adver_btn4 arrow-right  swiper-button-next3 next"></a>
        </div>
        <div class="adver8">
        <ul>
               <?php $tags=tag("moduleid=$moduleid&length=34&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&pagesize=3&order=".$MOD['order']."&template=null");?>
                         <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?> 
                        <a target="_blank" href="<?php echo $t['linkurl'];?>">
                              <li>
                <dl class="adver7_d">
                    <dd class="adver7_name"><?php echo $t['title'];?> </dd>
                        <dd class="small_money"><?php echo $DT['money_sign'];?><?php echo $t['price'];?></dd>
                    <dt class="adver8_pic"><img src="<?php echo imgurl($t['thumb']);?>" /></dt>
                    </dl>
                </li></a>
                       <?php } } ?>                                     
                                                                                                                                                                                                            </ul>
        </div>
        <div class="adver9 fl">
        <ul>
               <?php $tags=tag("moduleid=$moduleid&length=34&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&pagesize=5&order=".$MOD['order']."&template=null");?>
                         <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?> 
                        <a target="_blank" href="<?php echo $t['linkurl'];?>">
                        <li>
                <dl class="adver9_d">
                    <dt class="adver7_name"><?php echo $t['title'];?> </dt>
                        <dd class="small_money"><?php echo $DT['money_sign'];?><?php echo $t['price'];?></dd>
                    </dl>
                <div class="adver9_pic"><img class="mallke" src="<?php echo imgurl($t['thumb']);?>" width="120" height="110" alt="<?php echo $t['alt'];?>" /></div>
                </li></a>
                          <?php } } ?> 
                                            </ul>
        </div>
    </div>
    <div class="warp white_bg">
    <div class="classif fl">
        <div class="c_title classif_bg3">
                <div class="square"></div>
                品·人生            </div>
            <div class="title2">
            <ul>
                                       <li><a target="_blank" href="/">白酒</a></li>
                                      <li><a target="_blank" href="/">红酒</a></li>
                                      <li><a target="_blank" href="/">黄酒</a></li>
                                      <li><a target="_blank" href="/">特供酒</a></li>
                                      <li><a target="_blank" href="/">泸州老窖</a></li>
                                      <li><a target="_blank" href="/">castel</a></li>
                                   </ul>
            </div>
            <div class="store third_small_container">
            <a href="javascript:void(0)" class="sleft_btn sbtn1 arrow-left  swiper-button-prev4 prev"></a>
                 <div class="store_banner swip4" style="height:86px;">
                  <div class="swiper-wrapper third_small_superslide">
                                       <?php $tags=tag("moduleid=$moduleid&length=34&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&pagesize=2&order=".$MOD['order']."&template=null");?>
                         <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?> 
                    <dl>
                        <dt><a target="_blank" href="<?php echo $t['linkurl'];?>"><img src="<?php echo imgurl($t['thumb']);?>" /></a></dt>
                        <dd><a target="_blank" href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?></a></dd>
                    </dl>
                  
<?php } } ?>
                                      </div>
                </div>
                <a href="javascript:void(0)" class="sleft_btn sbtn2 arrow-right  swiper-button-next4 next"></a>
            </div>
            
        </div>
        <div class="adver6 fl third_container">
        <a href="javascript:void(0)" class="left_btn2 adver_btn3 arrow-left  swiper-button-prev5 prev"></a>
        <div class="store_banner swip5 third_superslide" style="height:283px;">
              <!--div class="swiper-wrapper"-->
                                <!--div class="swiper-slide"--><ul><li><a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/mall/c1.jpg" /></a></li></ul><!--/div-->
                                <!--div class="swiper-slide"--><ul><li><a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/mall/c2.jpg" /></a></li></ul><!--/div-->
                              <!--/div-->
            </div>
            <a href="javascript:void(0)" class="left_btn2 adver_btn4 arrow-right  swiper-button-next5 next"></a>
        </div>
        <div class="adver8">
        <ul>
                                <?php $tags=tag("moduleid=$moduleid&length=34&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&pagesize=3&order=".$MOD['order']."&template=null");?>
                         <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?> 
                        <a target="_blank" href="<?php echo $t['linkurl'];?>">
                              <li>
                <dl class="adver7_d">
                    <dd class="adver7_name"><?php echo $t['title'];?> </dd>
                        <dd class="small_money"><?php echo $DT['money_sign'];?><?php echo $t['price'];?></dd>
                    <dt class="adver8_pic"><img src="<?php echo imgurl($t['thumb']);?>" /></dt>
                    </dl>
                </li></a>
                       <?php } } ?>                                     
                                                                                                                                                                                                            </ul>
        </div>
        <div class="adver9 fl">
        <ul>
               <?php $tags=tag("moduleid=$moduleid&length=34&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&pagesize=5&order=".$MOD['order']."&template=null");?>
                         <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?> 
                        <a target="_blank" href="<?php echo $t['linkurl'];?>">
                        <li>
                <dl class="adver9_d">
                    <dt class="adver7_name"><?php echo $t['title'];?> </dt>
                        <dd class="small_money"><?php echo $DT['money_sign'];?><?php echo $t['price'];?></dd>
                    </dl>
                <div class="adver9_pic"><img class="mallke" src="<?php echo imgurl($t['thumb']);?>" width="120" height="110" alt="<?php echo $t['alt'];?>" /></div>
                </li></a>
                          <?php } } ?> 
                                            </ul>
        </div>
    </div>
    <div class="warp white_bg">
    <div class="classif fl">
        <div class="c_title classif_bg4">
                <div class="square"></div>
                智 · 生活            </div>
            <div class="title2">
            <ul>
                                    <li><a target="_blank" href="/">新款车罩</a></li>
                                    <li><a target="_blank" href="/">高级家纺</a></li>
                                    <li><a target="_blank" href="/">便捷水杯</a></li>
                                    <li><a target="_blank" href="/">高档雨伞</a></li>
                                    <li><a target="_blank" href="/">精致毛巾</a></li>
                                    <li><a target="_blank" href="/">经典商务</a></li>
                                    </ul>
            </div>
            <div class="store four_small_container">
            <a href="javascript:void(0)" class="sleft_btn sbtn1 arrow-left swiper-button-prev6 prev"></a>
                 <div class="store_banner swip6" style="height:86px;">
                  <div class="swiper-wrapper four_small_superslide">
                                        <!--dl class="swiper-slide"-->
                   <?php $tags=tag("moduleid=$moduleid&length=34&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&pagesize=2&order=".$MOD['order']."&template=null");?>
                         <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?> 
                    <dl>
                        <dt><a target="_blank" href="<?php echo $t['linkurl'];?>"><img src="<?php echo imgurl($t['thumb']);?>" /></a></dt>
                        <dd><a target="_blank" href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?></a></dd>
                    </dl>
                  
<?php } } ?>
                                      </div>
                </div>
                <a href="javascript:void(0)" class="sleft_btn sbtn2 arrow-right swiper-button-next6 next"></a>
            </div>
            
        </div>
        <div class="adver6 fl four_container">
        <a href="javascript:void(0)" class="left_btn2 adver_btn3 arrow-left  swiper-button-prev7 prev"></a>
        <div class="store_banner swip7 four_superslide" style="height:283px;">
              <!--div class="swiper-wrapper">
                <div class="swiper-slide"-->
                                     <ul><li><a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/mall/d1.jpg" /></a></li></ul>
                                    <ul><li><a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/mall/d2.jpg" /></a></li></ul>
                                    <!--/div>
              </div-->
            </div>
            <a href="javascript:void(0)" class="left_btn2 adver_btn4 arrow-right  swiper-button-next7 next"></a>
        </div>
        <div class="adver8">
        <ul>
                                               <?php $tags=tag("moduleid=$moduleid&length=34&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&pagesize=3&order=".$MOD['order']."&template=null");?>
                         <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?> 
                        <a target="_blank" href="<?php echo $t['linkurl'];?>">
                              <li>
                <dl class="adver7_d">
                    <dd class="adver7_name"><?php echo $t['title'];?> </dd>
                        <dd class="small_money"><?php echo $DT['money_sign'];?><?php echo $t['price'];?></dd>
                    <dt class="adver8_pic"><img src="<?php echo imgurl($t['thumb']);?>" /></dt>
                    </dl>
                </li></a>
                       <?php } } ?>                                     
                                                                                                                                                                                                            </ul>
        </div>
        <div class="adver9 fl">
        <ul>
               <?php $tags=tag("moduleid=$moduleid&length=34&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&pagesize=5&order=".$MOD['order']."&template=null");?>
                         <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?> 
                        <a target="_blank" href="<?php echo $t['linkurl'];?>">
                        <li>
                <dl class="adver9_d">
                    <dt class="adver7_name"><?php echo $t['title'];?> </dt>
                        <dd class="small_money"><?php echo $DT['money_sign'];?><?php echo $t['price'];?></dd>
                    </dl>
                <div class="adver9_pic"><img class="mallke" src="<?php echo imgurl($t['thumb']);?>" width="120" height="110" alt="<?php echo $t['alt'];?>" /></div>
                </li></a>
                          <?php } } ?> 
                                            </ul>
        </div>
    </div>
    <div class="warp white_bg">
    <div class="classif fl">
        <div class="c_title classif_bg5">
                <div class="square"></div>
                童心肆起            </div>
            <div class="title2">
            <ul>
                                   <li><a target="_blank" href="/">毛绒玩具</a></li>
                                  <li><a target="_blank" href="/">儿童游戏垫</a></li>
                                  <li><a target="_blank" href="/">可爱u型枕</a></li>
                                  <li><a target="_blank" href="/">经典玩偶</a></li>
                                  <li><a target="_blank" href="/">营养辅食</a></li>
                                 </ul>
            </div>
            <div class="store five_small_container">
            <a href="javascript:void(0)" class="sleft_btn sbtn1 arrow-left  swiper-button-prev8 prev"></a>
                 <div class="store_banner swip8" style="height:86px;">
                  <div class="swiper-wrapper five_small_superslide">
                                          <!--dl class="swiper-slide"-->
                    <?php $tags=tag("moduleid=$moduleid&length=34&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&pagesize=2&order=".$MOD['order']."&template=null");?>
                         <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?> 
                    <dl>
                        <dt><a target="_blank" href="<?php echo $t['linkurl'];?>"><img src="<?php echo imgurl($t['thumb']);?>" /></a></dt>
                        <dd><a target="_blank" href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?></a></dd>
                    </dl>
                  
<?php } } ?>
                                      </div>
                </div>
                <a href="javascript:void(0)" class="sleft_btn sbtn2 arrow-right  swiper-button-next8 next"></a>
            </div>
            
        </div>
        <div class="adver6 fl five_container">
        <a href="javascript:void(0)" class="left_btn2 adver_btn3 arrow-left  swiper-button-prev9 prev"></a>
        <div class="store_banner swip9 five_superslide" style="height:283px;">
              <!--div class="swiper-wrapper"-->
                                <!--div class="swiper-slide"--><ul><li><a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/mall/e1.jpg" /></a></li></ul><!--/div-->
                                <!--div class="swiper-slide"--><ul><li><a target="_blank" href="/"><img src="<?php echo DT_SKIN;?>ad/mall/e2.jpg" /></a></li></ul><!--/div-->
                              <!--/div-->
            </div>
            <a href="javascript:void(0)" class="left_btn2 adver_btn4 arrow-right  swiper-button-next9 next"></a>
        </div>
        <div class="adver8">
        <ul>
                                            <?php $tags=tag("moduleid=$moduleid&length=34&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&pagesize=3&order=".$MOD['order']."&template=null");?>
                         <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?> 
                        <a target="_blank" href="<?php echo $t['linkurl'];?>">
                              <li>
                <dl class="adver7_d">
                    <dd class="adver7_name"><?php echo $t['title'];?> </dd>
                        <dd class="small_money"><?php echo $DT['money_sign'];?><?php echo $t['price'];?></dd>
                    <dt class="adver8_pic"><img src="<?php echo imgurl($t['thumb']);?>" /></dt>
                    </dl>
                </li></a>
                       <?php } } ?>                                     
                                                                                                                                                                                                            </ul>
        </div>
        <div class="adver9 fl">
        <ul>
               <?php $tags=tag("moduleid=$moduleid&length=34&condition=status=3 and thumb<>'' and level>0&areaid=$cityid&pagesize=5&order=".$MOD['order']."&template=null");?>
                         <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?> 
                        <a target="_blank" href="<?php echo $t['linkurl'];?>">
                        <li>
                <dl class="adver9_d">
                    <dt class="adver7_name"><?php echo $t['title'];?> </dt>
                        <dd class="small_money"><?php echo $DT['money_sign'];?><?php echo $t['price'];?></dd>
                    </dl>
                <div class="adver9_pic"><img class="mallke" src="<?php echo imgurl($t['thumb']);?>" width="120" height="110" alt="<?php echo $t['alt'];?>" /></div>
                </li></a>
                          <?php } } ?> 
                                            </ul>
        </div>
    </div>
    </div>
          <script src="<?php echo DT_SKIN;?>js/home.min.js"></script>
</body>
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/home_index.js" charset="utf-8"></script>
<div class="foot_pic">
<ul class="clearfix">
    <li><img src="<?php echo DT_SKIN;?>images/mall/f01.jpg" /></li>
        <li><img src="<?php echo DT_SKIN;?>images/mall/f02.jpg" /></li>
        <li><img src="<?php echo DT_SKIN;?>images/mall/f03.jpg" /></li>
        <li><img src="<?php echo DT_SKIN;?>images/mall/f04.jpg" /></li>
    </ul>
</div>
 
<div class="m full_module wansyb-wp" id="index_link">
<div class="index_link_box">
    <h2><b>友情链接</b></h2>
        <div class="textlink">
        <?php if($DT['page_text']) { ?>
<?php $tags=tag("table=link&condition=status=3 and level>0 and thumb='' and username=''&areaid=$cityid&pagesize=".$DT['page_text']."&order=listorder desc,itemid desc&cols=11&template=null");?>
    <?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<span><a href="<?php echo $t['linkurl'];?>" target="_blank" title="<?php echo $t['introduce'];?>"><?php echo $t['title'];?></a></span>
<?php } } ?>
<span><a href="<?php echo DT_PATH;?>link/" target="_blank" title="更多>>">更多>></a></span>
   
<?php } ?>
      <div class="clear"></div>
    </div>
    </div>
  </div>
<?php include template('footer');?>
