<?php defined('IN_DESTOON') or exit('Access Denied');?><?php $CSS = array('index');$navAll=1;?>
<?php include template('header1');?>
<!--楼层-->
       <div class="floor js-floor" id="1f">
            <div class="header">
            <span class="set-switch js-reset-top reset-top" style="display: none;">取消置顶</span>
            <span class="set-switch js-set-top" style="">置顶</span>
            <span class="floor-after">
  <a target="_blank" rel="nofollow" href="member/?mid=5&action=add">免费加入机械网市场 ></a>
</span>
            <!--span class="more02">热门分类：
 <?php $catid=1;$cols=6;$level=2?>
                    <?php include template('xiaohei-nav', 'chip');?>
</span-->
                <h3><em>1F</em><a href="sell/list-htm-catid-1.html" target="_blank"
                    hidefocus="" name="gylp">机械网</a></h3>
            </div>
            <div class="content">
                <div class="adimg fl"> <a href="sell/list-htm-catid-1.html" target="_blank" class="a-img" >
<img src="<?php echo DT_SKIN;?>images/1f.jpg" alt="机械网"></a>
</div>
                <div class="floor-cate fl">
                                        <ul class="clli">
<li  class="first">
<a href="sell/list-htm-catid-42.html"><b class="f-14">农业机械</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-424.html"><b class="f-14">减速机</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-56.html"><b class="f-14">食品饮料加工设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-2.html"><b class="f-14">塑料机械</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-75.html"><b class="f-14">清洗清理设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-148.html"><b class="f-14">包装、印刷、纸业设备</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-196.html"><b class="f-14">阀门</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-23.html"><b class="f-14">石油设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-100.html"><b class="f-14">空气净化设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
</ul>                </div>
                <div class="floor-company clearfix fl">
                    <h4>推荐企业<!-- 8633 --></h4>
                    <div class="fl floor-company-vip">          
<?php $tags=tag("moduleid=4&catid=2408&pagesize=1&order=rand() desc&template=xiaohei-index03");?>
</ul>
    </div>  
                                    
                 <div class="floor-company-list fl">
                                        
   <?php $tags=tag("moduleid=4&catid=2408&pagesize=9&order=rand() desc&template=list-com");?>
    <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<li><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo dsubstr($t['company'],30);?></a></li>
 <?php } } ?>
                                        </div>
                </div>
                <div class="proshow fl">
<ul class="clearfix">
<?php $tags=tag("moduleid=5&catid=18&length=20&pagesize=6&order=addtime desc&template=null");?>
    <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
  <li> <a href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo imgurl($t['thumb']);?>" width="124" height="124" alt="<?php echo $t['alt'];?>" /></a>
    <p class="text"><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['title'];?>" target="_blank"><?php echo $t['title'];?></a></p>
  </li>
 <?php } } ?>
</ul>
             </div>
            </div>
        </div>
        <!-- 广告位4.8楼AD -->
          <!-- 广告位4.8楼AD -->
       <div class="floor js-floor" id="2f">
            <div class="header">
            <span class="set-switch js-reset-top reset-top" style="display: none;">取消置顶</span>
            <span class="set-switch js-set-top" style="">置顶</span>
            <span class="floor-after">
  <a target="_blank" rel="nofollow" href="member/?mid=5&action=add">免费加入农业网市场 ></a>
</span>
            <!--span class="more02">热门分类：
<?php $catid=18;$cols=6;$level=2?>
                    <?php include template('xiaohei-nav', 'chip');?>
</span-->
                <h3><em>2F</em><a href="sell/list-htm-catid-5201.html" target="_blank"
                    hidefocus="" name="gylp">农业网</a></h3>
            </div>
            <div class="content">
                <div class="adimg fl"> <a href="sell/list-htm-catid-5201.html" target="_blank" class="a-img" >
<img src="<?php echo DT_SKIN;?>images/2f.jpg" alt="农业网"></a>
</div>
                <div class="floor-cate fl">
                                        <ul class="clli">
<li  class="first">
<a href="sell/list-htm-catid-5329.html"><b class="f-14">特种养殖动物</b></a>
  <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-424.html"><b class="f-14">种子、种苗</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-56.html"><b class="f-14">苗木</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-2.html"><b class="f-14">花卉、盆景</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-75.html"><b class="f-14">粮食</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-148.html"><b class="f-14">化肥</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-196.html"><b class="f-14">农业用具</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-23.html"><b class="f-14">牲畜</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-100.html"><b class="f-14">鸡鸭鱼</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
</ul> 
           </div>
                <div class="floor-company clearfix fl">
                    <h4>推荐企业<!-- 13833 --></h4>
                        <div class="fl floor-company-vip">                              
<?php $tags=tag("moduleid=4&catid=2642&pagesize=1&order=rand() desc&template=xiaohei-index03");?>
 </ul>
                                        </div>
                    <div class="floor-company-list fl">
                                        
   <?php $tags=tag("moduleid=4&catid=2642&pagesize=9&order=rand() desc&template=list-com");?>
    <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<li><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo dsubstr($t['company'],30);?></a></li>
 <?php } } ?>                  
                                   </div>
                </div>
                <div class="proshow fl">
<ul class="clearfix">
<?php $tags=tag("moduleid=5&catid=943&length=20&pagesize=6&order=addtime desc&template=null");?>
    <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
  <li> <a href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo imgurl($t['thumb']);?>" width="124" height="124" alt="<?php echo $t['alt'];?>" /></a>
    <p class="text"><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['title'];?>" target="_blank"><?php echo $t['title'];?></a></p>
  </li>
 <?php } } ?>
</ul>             
 </div>
            </div>
        </div>
        <!-- 广告位4.8楼AD -->
          <!-- 广告位4.8楼AD -->
       <div class="floor js-floor" id="3f">
            <div class="header">
            <span class="set-switch js-reset-top reset-top" style="display: none;">取消置顶</span>
            <span class="set-switch js-set-top" style="">置顶</span>
            <span class="floor-after">
  <a target="_blank" rel="nofollow" href="member/?mid=5&action=add">免费加入建材网市场 ></a>
</span>
            <!--span class="more02">热门分类：
<?php $catid=1;$cols=6;$level=2?>
                    <?php include template('xiaohei-nav', 'chip');?>
</span-->
                <h3><em>3F</em><a href="sell/list-htm-catid-6075.html" target="_blank"
                    hidefocus="" name="gylp">建材网</a></h3>
            </div>
            <div class="content">
                <div class="adimg fl"> <a href="sell/list-htm-catid-6075.html" target="_blank" class="a-img" >
<img src="<?php echo DT_SKIN;?>images/3f.jpg" alt="建材网"></a>
</div>
                <div class="floor-cate fl">
                                        <ul class="clli">
<li  class="first">
<a href="sell/list-htm-catid-6076.html"><b class="f-14">石材石料</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-424.html"><b class="f-14">减速机</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-56.html"><b class="f-14">食品饮料加工设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-2.html"><b class="f-14">塑料机械</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-75.html"><b class="f-14">清洗清理设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-148.html"><b class="f-14">包装、印刷、纸业设备</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-196.html"><b class="f-14">阀门</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-23.html"><b class="f-14">石油设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-100.html"><b class="f-14">空气净化设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
</ul>     
                </div>
                <div class="floor-company clearfix fl">
                    <h4>推荐企业<!-- 14707 --></h4>
                    <div class="fl floor-company-vip">
  <?php $tags=tag("moduleid=4&catid=3254&pagesize=1&order=rand() desc&template=xiaohei-index03");?>
  </ul>
                                        </div>
                    <div class="floor-company-list fl">
         <?php $tags=tag("moduleid=4&catid=3254&pagesize=9&order=rand() desc&template=list-com");?>
    <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<li><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo dsubstr($t['company'],30);?></a></li>
 <?php } } ?>
</ul>
                                        </div>
                </div>
                <div class="proshow fl">
<ul class="clearfix">
<?php $tags=tag("moduleid=5&catid=426&length=20&pagesize=6&order=addtime desc&template=null");?>
    <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
  <li> <a href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo imgurl($t['thumb']);?>" width="124" height="124" alt="<?php echo $t['alt'];?>" /></a>
    <p class="text"><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['title'];?>" target="_blank"><?php echo $t['title'];?></a></p>
  </li>
 <?php } } ?>
</ul>
              </div>
            </div>
        </div>
        <!-- 广告位4.8楼AD -->
          <!-- 广告位4.8楼AD -->
       <div class="floor js-floor" id="4f">
            <div class="header">
            <span class="set-switch js-reset-top reset-top" style="display: none;">取消置顶</span>
            <span class="set-switch js-set-top" style="">置顶</span>
            <span class="floor-after">
  <a target="_blank" rel="nofollow" href="member/?mid=5&action=add">免费加入冶金网市场 ></a>
</span>
            <!--span class="more02">热门分类：
<?php $catid=1;$cols=6;$level=2?>
                    <?php include template('xiaohei-nav', 'chip');?>
</span-->
                <h3><em>4F</em><a href="sell/list-htm-catid-7298.html" target="_blank"
                    hidefocus="" name="gylp">冶金网</a></h3>
            </div>
            <div class="content">
                <div class="adimg fl"> <a href="sell/list-htm-catid-7298.html" target="_blank" class="a-img" >
<img src="<?php echo DT_SKIN;?>images/4f.jpg" alt="冶金网"></a>
</div>
                <div class="floor-cate fl">
                                        <ul class="clli">
<li  class="first">
<a href="sell/list-htm-catid-7299.html"><b class="f-14">有色金属合金</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-424.html"><b class="f-14">减速机</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-56.html"><b class="f-14">食品饮料加工设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-2.html"><b class="f-14">塑料机械</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-75.html"><b class="f-14">清洗清理设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-148.html"><b class="f-14">包装、印刷、纸业设备</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-196.html"><b class="f-14">阀门</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-23.html"><b class="f-14">石油设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-100.html"><b class="f-14">空气净化设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
</ul>                     </div>
                <div class="floor-company clearfix fl">
                    <h4>推荐企业<!-- 15930 --></h4>
                    <div class="fl floor-company-vip">
                                     <?php $tags=tag("moduleid=4&catid=2992&pagesize=1&order=rand() desc&template=xiaohei-index03");?>/li>
    
  </ul>
                                        </div>
                    <div class="floor-company-list fl">
                                       <?php $tags=tag("moduleid=4&catid=2992&pagesize=9&order=rand() desc&template=list-com");?>
    <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<li><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo dsubstr($t['company'],30);?></a></li>
 <?php } } ?>
</ul>
                                        </div>
                </div>
                <div class="proshow fl">
<ul class="clearfix">
<?php $tags=tag("moduleid=5&catid=524&length=20&pagesize=6&order=addtime desc&template=null");?>
    <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
  <li> <a href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo imgurl($t['thumb']);?>" width="124" height="124" alt="<?php echo $t['alt'];?>" /></a>
    <p class="text"><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['title'];?>" target="_blank"><?php echo $t['title'];?></a></p>
  </li>
 <?php } } ?>
</ul>                </div>
            </div>
        </div>
        <!-- 广告位4.8楼AD -->
            <div class="wrapper">
        <!-- 广告位2 -->
         <p class="mt15">
 <a href="/ad" target="_blank">
            <img src="<?php echo DT_SKIN;?>ad/index_4f.jpg" alt="AD广告位4"></a></p>
    </div>
        <!-- 广告位4.8楼AD -->
       <div class="floor js-floor" id="5f">
            <div class="header">
            <span class="set-switch js-reset-top reset-top" style="display: none;">取消置顶</span>
            <span class="set-switch js-set-top" style="">置顶</span>
            <span class="floor-after">
  <a target="_blank" rel="nofollow" href="member/?mid=5&action=add">免费加入电工网市场 ></a>
</span>
            <!--span class="more02">热门分类：
<?php $catid=1;$cols=6;$level=2?>
                    <?php include template('xiaohei-nav', 'chip');?>
</span-->
                <h3><em>5F</em><a href="sell/list-htm-catid-1932.html" target="_blank"
                    hidefocus="" name="gylp">电工网</a></h3>
            </div>
            <div class="content">
                <div class="adimg fl"> <a href="sell/list-htm-catid-1932.html" target="_blank" class="a-img" >
<img src="<?php echo DT_SKIN;?>images/5f.jpg" alt="电工网"></a>
</div>
                <div class="floor-cate fl">
                                        <ul class="clli">
<li  class="first">
<a href="sell/list-htm-catid-1933.html"><b class="f-14">开关</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-424.html"><b class="f-14">减速机</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-56.html"><b class="f-14">食品饮料加工设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-2.html"><b class="f-14">塑料机械</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-75.html"><b class="f-14">清洗清理设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-148.html"><b class="f-14">包装、印刷、纸业设备</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-196.html"><b class="f-14">阀门</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-23.html"><b class="f-14">石油设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-100.html"><b class="f-14">空气净化设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
</ul>                     </div>
                <div class="floor-company clearfix fl">
                    <h4>推荐企业<!-- 10564 --></h4>
                    <div class="fl floor-company-vip">
                                       <?php $tags=tag("moduleid=4&catid=2408&pagesize=1&order=rand() desc&template=xiaohei-index03");?>
    
  </ul>
                                        </div>
                    <div class="floor-company-list fl">
   <?php $tags=tag("moduleid=4&catid=2408&pagesize=9&order=rand() desc&template=list-com");?>
    <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<li><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo dsubstr($t['company'],30);?></a></li>
 <?php } } ?>
                                        </div>
                </div>
                <div class="proshow fl">
<ul class="clearfix">
<?php $tags=tag("moduleid=5&catid=573&length=20&pagesize=6&order=addtime desc&template=null");?>
    <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
  <li> <a href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo imgurl($t['thumb']);?>" width="124" height="124" alt="<?php echo $t['alt'];?>" /></a>
    <p class="text"><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['title'];?>" target="_blank"><?php echo $t['title'];?></a></p>
  </li>
 <?php } } ?>
</ul>              </div>
            </div>
        </div>
        <!-- 广告位4.8楼AD -->
          <!-- 广告位4.8楼AD -->
       <div class="floor js-floor" id="6f">
            <div class="header">
            <span class="set-switch js-reset-top reset-top" style="display: none;">取消置顶</span>
            <span class="set-switch js-set-top" style="">置顶</span>
            <span class="floor-after">
  <a target="_blank" rel="nofollow" href="member/?mid=5&action=add">免费加入五金网市场 ></a>
</span>
            <!--span class="more02">热门分类：
<?php $catid=1;$cols=6;$level=2?>
                    <?php include template('xiaohei-nav', 'chip');?>
</span-->
                <h3><em>6F</em><a href="sell/list-htm-catid-1643.html" target="_blank"
                    hidefocus="" name="gylp">五金网</a></h3>
            </div>
            <div class="content">
                <div class="adimg fl"> <a href="sell/list-htm-catid-1643.html" target="_blank" class="a-img" >
<img src="<?php echo DT_SKIN;?>images/6f.jpg" alt="五金网"></a>
</div>
                <div class="floor-cate fl">
                                        <ul class="clli">
<li  class="first">
<a href="sell/list-htm-catid-1691.html"><b class="f-14">锁具及配件</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-424.html"><b class="f-14">减速机</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-56.html"><b class="f-14">食品饮料加工设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-2.html"><b class="f-14">塑料机械</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-75.html"><b class="f-14">清洗清理设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-148.html"><b class="f-14">包装、印刷、纸业设备</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-196.html"><b class="f-14">阀门</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-23.html"><b class="f-14">石油设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-100.html"><b class="f-14">空气净化设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
</ul>                    </div>
                <div class="floor-company clearfix fl">
                    <h4>推荐企业<!-- 10275 --></h4>
                    <div class="fl floor-company-vip">
                                      <?php $tags=tag("moduleid=4&catid=2408&pagesize=1&order=rand() desc&template=xiaohei-index03");?>  
  </ul>
                                        </div>
                    <div class="floor-company-list fl">
     <?php $tags=tag("moduleid=4&catid=2408&pagesize=9&order=rand() desc&template=list-com");?>
    <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<li><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo dsubstr($t['company'],30);?></a></li>
 <?php } } ?>
                                        </div>
                </div>
                <div class="proshow fl">
<ul class="clearfix">
<?php $tags=tag("moduleid=5&catid=722&length=20&pagesize=6&order=addtime desc&template=null");?>
    <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
  <li> <a href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo imgurl($t['thumb']);?>" width="124" height="124" alt="<?php echo $t['alt'];?>" /></a>
    <p class="text"><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['title'];?>" target="_blank"><?php echo $t['title'];?></a></p>
  </li>
 <?php } } ?>
</ul>            </div>
            </div>
        </div>
        <!-- 广告位4.8楼AD -->
          <!-- 广告位4.8楼AD -->
       <div class="floor js-floor" id="7f">
            <div class="header">
            <span class="set-switch js-reset-top reset-top" style="display: none;">取消置顶</span>
            <span class="set-switch js-set-top" style="">置顶</span>
            <span class="floor-after">
  <a target="_blank" rel="nofollow" href="member/?mid=5&action=add">免费加入礼品网市场 ></a>
</span>
            <!--span class="more02">热门分类：
<?php $catid=1;$cols=6;$level=2?>
                    <?php include template('xiaohei-nav', 'chip');?>
</span-->
                <h3><em>7F</em><a href="sell/list-htm-catid-4688.html" target="_blank"
                    hidefocus="" name="gylp">礼品网</a></h3>
            </div>
            <div class="content">
                <div class="adimg fl"> <a href="sell/list-htm-catid-4688.html" target="_blank" class="a-img" >
<img src="<?php echo DT_SKIN;?>images/7f.jpg" alt="礼品网"></a>
</div>
                <div class="floor-cate fl">
                                        <ul class="clli">
<li  class="first">
<a href="sell/list-htm-catid-4689.html"><b class="f-14">珠宝、饰品</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-424.html"><b class="f-14">减速机</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-56.html"><b class="f-14">食品饮料加工设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-2.html"><b class="f-14">塑料机械</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-75.html"><b class="f-14">清洗清理设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-148.html"><b class="f-14">包装、印刷、纸业设备</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-196.html"><b class="f-14">阀门</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-23.html"><b class="f-14">石油设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-100.html"><b class="f-14">空气净化设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
</ul>                     </div>
                <div class="floor-company clearfix fl">
                    <h4>推荐企业<!-- 13320 --></h4>
                    <div class="fl floor-company-vip">
                                      <?php $tags=tag("moduleid=4&catid=2408&pagesize=1&order=rand() desc&template=xiaohei-index03");?>
  </ul>
                                        </div>
                    <div class="floor-company-list fl">
                                        
   <?php $tags=tag("moduleid=4&catid=2408&pagesize=9&order=rand() desc&template=list-com");?>
    <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<li><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo dsubstr($t['company'],30);?></a></li>
 <?php } } ?>
                                        </div>
                </div>
                <div class="proshow fl">
<ul class="clearfix">
<?php $tags=tag("moduleid=5&catid=18&length=20&pagesize=6&order=addtime desc&template=null");?>
    <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
  <li> <a href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo imgurl($t['thumb']);?>" width="124" height="124" alt="<?php echo $t['alt'];?>" /></a>
    <p class="text"><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['title'];?>" target="_blank"><?php echo $t['title'];?></a></p>
  </li>
 <?php } } ?>
</ul>             </div>
            </div>
        </div>
        <!-- 广告位4.8楼AD -->
          <!-- 广告位4.8楼AD -->
       <div class="floor js-floor" id="8f">
            <div class="header">
            <span class="set-switch js-reset-top reset-top" style="display: none;">取消置顶</span>
            <span class="set-switch js-set-top" style="">置顶</span>
            <span class="floor-after">
  <a target="_blank" rel="nofollow" href="member/?mid=5&action=add">免费加入汽配网市场 ></a>
</span>
            <!--span class="more02">热门分类：
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
</span-->
                <h3><em>8F</em><a href="sell/list-htm-catid-1022.html" target="_blank"
                    hidefocus="" name="gylp">汽配网</a></h3>
            </div>
            <div class="content">
                <div class="adimg fl"> <a href="sell/list-htm-catid-1022.html" target="_blank" class="a-img" >
<img src="<?php echo DT_SKIN;?>images/8f.jpg" alt="汽配网"></a>
</div>
                <div class="floor-cate fl">
                                        <ul class="clli">
<li  class="first">
<a href="sell/list-htm-catid-1054.html"><b class="f-14">发动系统</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-424.html"><b class="f-14">减速机</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-56.html"><b class="f-14">食品饮料加工设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-2.html"><b class="f-14">塑料机械</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-75.html"><b class="f-14">清洗清理设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-148.html"><b class="f-14">包装、印刷、纸业设备</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-196.html"><b class="f-14">阀门</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-23.html"><b class="f-14">石油设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-100.html"><b class="f-14">空气净化设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
</ul>                     </div>
                <div class="floor-company clearfix fl">
                    <h4>推荐企业<!-- 9654 --></h4>
                    <div class="fl floor-company-vip">
       <?php $tags=tag("moduleid=4&catid=2408&pagesize=1&order=rand() desc&template=xiaohei-index03");?>
                                        </div>
                    <div class="floor-company-list fl">
<?php $tags=tag("moduleid=4&catid=2408&pagesize=9&order=rand() desc&template=list-com");?>
    <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<li><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo dsubstr($t['company'],30);?></a></li>
 <?php } } ?>
                                        </div>
                </div>
                <div class="proshow fl">
<ul class="clearfix">
<?php $tags=tag("moduleid=5&catid=18&length=20&pagesize=6&order=addtime desc&template=null");?>
    <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
  <li> <a href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo imgurl($t['thumb']);?>" width="124" height="124" alt="<?php echo $t['alt'];?>" /></a>
    <p class="text"><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['title'];?>" target="_blank"><?php echo $t['title'];?></a></p>
  </li>
 <?php } } ?>
</ul>            </div>
            </div>
        </div>
        <!-- 广告位4.8楼AD -->
         <div class="wrapper">
        <!-- 广告位3 -->
         <p class="mt15">
 <a href="/ad" target="_blank">
            <img src="<?php echo DT_SKIN;?>ad/index_8f.jpg" alt="AD广告位8"></a></p>
    </div> 
         <!-- 广告位4.8楼AD -->
       <div class="floor js-floor" id="9f">
            <div class="header">
            <span class="set-switch js-reset-top reset-top" style="display: none;">取消置顶</span>
            <span class="set-switch js-set-top" style="">置顶</span>
            <span class="floor-after">
  <a target="_blank" rel="nofollow" href="member/?mid=5&action=add">免费加入包装网市场 ></a>
</span>
            <!--span class="more02">热门分类：
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
</span-->
                <h3><em>9F</em><a href="sell/list-htm-catid-2548.html" target="_blank"
                    hidefocus="" name="gylp">包装网</a></h3>
            </div>
            <div class="content">
                <div class="adimg fl"> <a href="sell/list-htm-catid-2548.html" target="_blank" class="a-img" >
<img src="<?php echo DT_SKIN;?>images/9f.jpg" alt="包装网"></a>
</div>
                <div class="floor-cate fl">
                                        <ul class="clli">
<li  class="first">
<a href="sell/list-htm-catid-2549.html"><b class="f-14">包装机械</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-424.html"><b class="f-14">减速机</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-56.html"><b class="f-14">食品饮料加工设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-2.html"><b class="f-14">塑料机械</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-75.html"><b class="f-14">清洗清理设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-148.html"><b class="f-14">包装、印刷、纸业设备</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-196.html"><b class="f-14">阀门</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-23.html"><b class="f-14">石油设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-100.html"><b class="f-14">空气净化设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
</ul>                     </div>
                <div class="floor-company clearfix fl">
                    <h4>推荐企业<!-- 11180 --></h4>
                    <div class="fl floor-company-vip">
                                      <?php $tags=tag("moduleid=4&catid=2408&pagesize=1&order=rand() desc&template=xiaohei-index03");?>
</ul>
                                        </div>
                    <div class="floor-company-list fl">
        <?php $tags=tag("moduleid=4&catid=2408&pagesize=9&order=rand() desc&template=list-com");?>
    <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<li><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo dsubstr($t['company'],30);?></a></li>
 <?php } } ?>
                                        </div>
                </div>
                <div class="proshow fl">
<ul class="clearfix">
<?php $tags=tag("moduleid=5&catid=806&length=20&pagesize=6&order=addtime desc&template=null");?>
    <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
  <li> <a href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo imgurl($t['thumb']);?>" width="124" height="124" alt="<?php echo $t['alt'];?>" /></a>
    <p class="text"><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['title'];?>" target="_blank"><?php echo $t['title'];?></a></p>
  </li>
 <?php } } ?>
</ul>             </div>
            </div>
        </div>
        <!-- 广告位4.8楼AD -->
          <!-- 广告位4.8楼AD -->
       <div class="floor js-floor" id="10f">
            <div class="header">
            <span class="set-switch js-reset-top reset-top" style="display: none;">取消置顶</span>
            <span class="set-switch js-set-top" style="">置顶</span>
            <span class="floor-after">
  <a target="_blank" rel="nofollow" href="member/?mid=5&action=add">免费加入家居网市场 ></a>
</span>
            <!--span class="more02">热门分类：
<?php $catid=1;$cols=6;$level=2?>
                    <?php include template('xiaohei-nav', 'chip');?>
</span-->
                <h3><em>10F</em><a href="sell/list-htm-catid-3763.html" target="_blank"
                    hidefocus="" name="gylp">家居网</a></h3>
            </div>
            <div class="content">
                <div class="adimg fl"> <a href="sell/list-htm-catid-3763.html" target="_blank" class="a-img" >
<img src="<?php echo DT_SKIN;?>images/10f.jpg" alt="家居网"></a>
</div>
                <div class="floor-cate fl">
                                        <ul class="clli">
<li  class="first">
<a href="sell/list-htm-catid-3764.html"><b class="f-14">美容护理</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-424.html"><b class="f-14">减速机</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-56.html"><b class="f-14">食品饮料加工设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-2.html"><b class="f-14">塑料机械</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-75.html"><b class="f-14">清洗清理设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-148.html"><b class="f-14">包装、印刷、纸业设备</b></a>
 <?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li  class="first">
<a href="sell/list-htm-catid-196.html"><b class="f-14">阀门</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-23.html"><b class="f-14">石油设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
<li >
<a href="sell/list-htm-catid-100.html"><b class="f-14">空气净化设备</b></a>
<?php $catid=1;$cols=6;$level=1?>
                    <?php include template('xiaohei-nav', 'chip');?>
</ul>                     </div>
                <div class="floor-company clearfix fl">
                    <h4>推荐企业<!-- 12395 --></h4>
                    <div class="fl floor-company-vip">
                                    <?php $tags=tag("moduleid=4&catid=2408&pagesize=1&order=rand() desc&template=xiaohei-index03");?>
  </ul>
                                        </div>
                    <div class="floor-company-list fl">                                     
  <?php $tags=tag("moduleid=4&catid=2408&pagesize=9&order=rand() desc&template=list-com");?>
    <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<li><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo dsubstr($t['company'],30);?></a></li>
 <?php } } ?>
                                        </div>
                </div>
                <div class="proshow fl">
<ul class="clearfix">
<?php $tags=tag("moduleid=5&catid=767&length=20&pagesize=6&order=addtime desc&template=null");?>
    <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
  <li> <a href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo imgurl($t['thumb']);?>" width="124" height="124" alt="<?php echo $t['alt'];?>" /></a>
    <p class="text"><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['title'];?>" target="_blank"><?php echo $t['title'];?></a></p>
  </li>
 <?php } } ?>
</ul>           </div>
            </div>
        </div>
     
    </div>
</div>
<!--楼层end-->
<!--资讯-->
<div class="ibox full">
    <div class="wrap">
        <div class="header">
            <h3>资讯与技术</h3>
        </div>
        <div class="content">
<?php $tags=tag("moduleid=21&condition=status=3 and thumb<>''&areaid=$cityid&pagesize=1&order=addtime desc&length=28&width=200&height=220&template=null");?>
            <?php if(is_array($tags)) { foreach($tags as $t) { ?>
            <div class="adimg fl"> <img src="<?php echo $t['thumb'];?>" width="200" height="220" alt="<?php echo $t['alt'];?>" /> <span class="te"><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['alt'];?>" target="_blank"><?php echo $t['title'];?></a></span></div>
            <?php } } ?>
            <div class="rank-list fl">
<?php echo tag("moduleid=21&condition=status=3 and level>0&areaid=$cityid&order=addtime desc&pagesize=7&target=_blank");?>
            </div>
            <div class="dynamic cldl fl">
                <h4>农业资讯</h4>
<?php echo tag("moduleid=21&catid=10065&condition=status=3 and level=1 and thumb<>''&areaid=$cityid&pagesize=1&order=addtime desc&length=44&introduce=80&width=70&height=60&template=xiaohei-index05");?>
<?php echo tag("moduleid=21&catid=10065&condition=status=3 and level>0&areaid=$cityid&pagesize=5&order=addtime desc&length=44&datetype=3&template=xiaohei-index06");?> 
            </div>
            <div class="dynamic cldl fl">
                <h4>农业技术</h4>
<?php echo tag("moduleid=21&catid=10062&condition=status=3 and level=1 and thumb<>''&areaid=$cityid&pagesize=1&order=addtime desc&length=44&introduce=80&width=70&height=60&template=xiaohei-index05");?>
<?php echo tag("moduleid=21&catid=10062&condition=status=3 and level>0&areaid=$cityid&pagesize=5&order=addtime desc&length=44&datetype=3&template=xiaohei-index06");?> 
            </div>
        </div>
    </div>
</div>
<!--友情链接-->
<div class="ibox full">
    <div class="wrap">
        <div class="header">
            <h3>友情链接</h3><span class="yl gray fr"><a href="<?php echo DT_PATH;?>link/index.php?action=reg" target="_blank">在线申请链接</a>    <a href="<?php echo DT_PATH;?>">请做好本站链接之后再申请 关键字"<?php echo $DT['sitename'];?>"，本站网址：/<?php echo DT_PATH;?></a></span>
        </div>
        <div class="friendlink">
<?php if($DT['page_text']) { ?>
<?php echo tag("table=link&condition=status=3 and level>0 and thumb='' and username=''&areaid=$cityid&pagesize=".$DT['page_text']."&order=listorder desc,itemid desc&template=list-link&cols=9");?>
<?php } ?>

        </div>
    </div>
</div>
<div class="float_nav">
  <h3 class="fn_down" id="fn_down_up"></h3>
  <div class="fn_body" id="fn_body">
      <b class="lczd"><a>楼层直达</a></b>
                      <a href="#1f">1F 机械网</a>
                 <a href="#2f">2F 农业网</a>
                 <a href="#3f">3F 建材网</a>
                 <a href="#4f">4F 冶金网</a>
                 <a href="#5f">5F 电工网</a>
                 <a href="#6f">6F 五金网</a>
                 <a href="#7f">7F 礼品网</a>
                 <a href="#8f">8F 汽配网</a>
                 <a href="#9f">9F 包装网</a>
                 <a href="#10f">10F 家居网</a>
                                                                                        <a href="#top">上顶部</a>
  </div>
  <h3 class="fn_up" id="fn_up"><a href="#top"></a></h3>
</div>
<!--左侧浮动导航JS 开始-->
<script>
 $(document).ready(function() {
 
 $("#fn_down_up,#fn_up").click(function(){
$("#fn_body").slideToggle("fast",function(){
if($("#fn_body").css("display")=="none"){
$("#fn_up").css({backgroundPosition:"center -18px"});
}else{
$("#fn_up").css({backgroundPosition:"center -38px"});
}
});
});
$(".fn_body a").click(function(){
var href = $(this).attr("href");
var pos = $(href).offset().top;
$(this).addClass("cur").siblings().removeClass("cur"); 
 $("html,body").animate({scrollTop: pos},300);
});
function changelf(){
var topSize = $(document).scrollTop();
$(".float_nav").hide();
if(topSize>301){
$(".float_nav").show();
switch(true){
case topSize>621&&topSize<1260:
$("#fn_body a:eq(1)").addClass("cur").siblings().removeClass("cur"); 
break;
case topSize>1260&&topSize<1820:
$("#fn_body a:eq(2)").addClass("cur").siblings().removeClass("cur"); 
break;
case topSize>1820&&topSize<2390:
$("#fn_body a:eq(3)").addClass("cur").siblings().removeClass("cur"); 
break;
case topSize>2390&&topSize<3000:
$("#fn_body a:eq(4)").addClass("cur").siblings().removeClass("cur"); 
break;
case topSize>3000&&topSize<3550:
$("#fn_body a:eq(5)").addClass("cur").siblings().removeClass("cur"); 
break;
case topSize>3550&&topSize<4100:
$("#fn_body a:eq(6)").addClass("cur").siblings().removeClass("cur"); 
break;
case topSize>4080&&topSize<4710:
$("#fn_body a:eq(7)").addClass("cur").siblings().removeClass("cur"); 
break;
case topSize>4710&&topSize<5260:
$("#fn_body a:eq(8)").addClass("cur").siblings().removeClass("cur"); 
break;
case topSize>5260&&topSize<5810:
$("#fn_body a:eq(9)").addClass("cur").siblings().removeClass("cur"); 
break;
case topSize>5810&&topSize<6340:
$("#fn_body a:eq(10)").addClass("cur").siblings().removeClass("cur"); 
break;
default:
;
}
}
}
$(window).scroll(function(){changelf();})
});
 </script><script type="text/javascript" src="/file/script/index.js"></script>
<script type="text/javascript">
new dmarquee(22, 10, 3000, 'site_stats');
new dmarquee(22, 30, 3000, 'company');
if(get_cookie('auth')) {
$('.iuser_l')[0].title = '商务中心';
$('.iuser_l')[0].href = '/member/';
$('.iuser_l')[0].className = 'iuser_u';
$('.iuser_r')[0].title = '完善我的会员资料';
$('.iuser_r')[0].href = '/member/edit.php';
$('.iuser_r')[0].className = 'iuser_e';
}
</script>
  <div class="clear">
    </div>
</div></div>
<div class="clear">
    </div>
    <div class="other_item" id="other_item">
<div id="footer" class="full">
    <div class="wrap">
        <div class="fl">
  <div class="foot-logo"></div>
  <div class="ewm"><img src="<?php echo DT_SKIN;?>images/ewm.png" width="120" height="120" title="扫扫二维码，好礼奖不停" align="absmiddle"><p>扫扫二维码有惊喜</p></div>
</div>
        <div class="right fr">
            <div class="service">
                <ul class="clearfix">
                    <li>
                        <dl>
                           <dt>新手入门</dt>
                           <dd> <a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" target="_blank" rel="nofollow">注册新用户</a></dd>
                <dd> <a href="<?php echo $MODULE['2']['linkurl'];?>/home.php" target="_blank" rel="nofollow">铺面装修</a></dd>
                <dd> <a href="<?php echo $MODULE['4']['linkurl'];?>" target="_blank" rel="nofollow">找买家</a></dd>
                <dd> <a href="{$MODULE[27][linkurl]" target="_blank" rel="nofollow">新手学堂</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                           <dt>会员服务</dt>
                <dd> <a href="<?php echo $MODULE['4']['linkurl'];?>" target="_blank">找公司</a></dd>
                <dd> <a href="<?php echo $MODULE['5']['linkurl'];?>" target="_blank" rel="nofollow">供应信息</a></dd>
                <dd> <a href="<?php echo $MODULE['6']['linkurl'];?>" target="_blank" rel="nofollow">采购信息</a></dd>
<dd> <a href="<?php echo $MODULE['21']['linkurl'];?>" target="_blank" rel="nofollow">看资讯</a></dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>金铺</dt>
                <dd> <a href="<?php echo $MODULE['2']['linkurl'];?>/home.php" target="_blank" rel="nofollow">金铺装修</a></dd>
                <dd> <a href="<?php echo $EXT['spread_url'];?>" target="_blank" rel="nofollow"> 营销推广</a></dd>
                <dd> <a href="<?php echo $MODULE['5']['linkurl'];?>" target="_blank" rel="nofollow">买卖商机</a></dd>
                <dd> <a href="<?php echo $MODULE['5']['linkurl'];?>" target="_blank" rel="nofollow">人气商品</a></dd>
              </dl>
                    </li>
                    <li>
                        <dl>
                           <dt>旗下网站</dt>
                <dd> <a href="http://xinhuagou.taobao.com/" target="_blank">小云网络</a></dd>
                <dd> <a href="http://www.mjuq.com/" target="_blank">中国模具网</a></dd>
                <dd> <a href="<?php echo $MODULE['2']['linkurl'];?>" target="_blank">企业建站</a></dd>
              </dl>
                    </li>
                    <li>
                        <dl>
                        <dt>常见问题</dt>
<dd> <a href="<?php echo $MODULE['27']['linkurl'];?>" target="_blank" rel="nofollow">新手上路</a></dd>
                <dd> <a href="<?php echo $MODULE['27']['linkurl'];?>" target="_blank" rel="nofollow">如何买卖</a></dd>
                <dd> <a href="<?php echo $MODULE['27']['linkurl'];?>" target="_blank" rel="nofollow">专场采购</a></dd>
                <dd> <a href="<?php echo $MODULE['27']['linkurl'];?>" target="_blank" rel="nofollow">防骗指南</a></dd>
              </dl>
                    </li>
                    <li class="noimg">
                        <dl>
                             <dt>支付方式</dt>
                <dd> <a href="#" target="_blank" rel="nofollow">新人支付</a></dd>
                <dd> <a href="#" target="_blank" rel="nofollow">如何续费</a></dd>
                <dd> <a href="#" target="_blank" rel="nofollow">短信收费</a></dd>
                <dd> <a href="#">返回顶端</a></dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="foot_page"> <a href="<?php echo $MODULE['1']['linkurl'];?>">网站首页</a> 
                <?php echo tag("table=webpage&condition=item=1&areaid=$cityid&order=listorder desc,itemid desc&template=list-webpage");?> 
                | <a href="<?php echo $MODULE['1']['linkurl'];?>sitemap/">网站地图</a> | <a href="<?php echo $EXT['spread_url'];?>">排名推广</a> <?php if($EXT['ad_enable']) { ?> | <a href="<?php echo $EXT['ad_url'];?>">广告服务</a><?php } ?>
                <?php if($EXT['gift_enable']) { ?> | <a href="<?php echo $EXT['gift_url'];?>">积分换礼</a><?php } ?>
                <?php if($EXT['guestbook_enable']) { ?> | <a href="<?php echo $EXT['guestbook_url'];?>">网站留言</a><?php } ?>
                <?php if($EXT['feed_enable']) { ?> | <a href="<?php echo $EXT['feed_url'];?>">RSS订阅</a><?php } ?>
                <?php if($DT['icpno']) { ?> | <a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow"><?php echo $DT['icpno'];?></a><?php } ?>
</div>
            <div id="copyright">Copyright?1997-2016 All Rights Reserved. <a class="a333" href="http://wz71888.com/" target="_blank"title="万争网络">上海万争网络科技有限公司</a> 版权所有 入驻服务：w118@wz71888.com<p>服务热线：021-57471888（企业）服务时间9:00-5:00 （按当地市话标准计算） <div style="display:none"></div></p></div>
           <a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow">ICP备16030685号</a> <a target="_blank" href="http://www.beian.gov.cn"></a>
           <ul class="footer mt15 clearfix">
                <li><a href="#" target="_blank"> <span class="iso"></span></a></li>
                <li><span class="iso beian"></span></li>
                <li><span class="iso mcafee"></span></li>
                <li><span class="iso lanbiao" style="width:157px;"></span></li>
                <li><span class="iso youngper"></span></li>
                <a href="#" target="_blank"><span class="iso gswj" style="width:134px;"></span></a>
 </ul>
        </div>
    </div>
</div>
</div>
<div class="back2top"><a href="javascript:void(0);" title="返回顶部"> </a></div>
<!-- 搜索框 --> 
<script type="text/javascript">
 $("#destoon_kw").focus(function(){
 $(this).css("background","url(<?php echo DT_SKIN;?>images/index_search_bg.png) no-repeat left -89px");
 });
$("#destoon_kw").blur(function(){
if($(this).val() === ""){
$(this).css("background","url(<?php echo DT_SKIN;?>images/index_search_bg.png) no-repeat left -43px");
}else{
 $(this).css("background","url(<?php echo DT_SKIN;?>images/index_search_bg.png) no-repeat left -89px");
}
 });
 </script> 
<script type="text/javascript">
$(function () {
    var wtop = $(window).height();
    $(window).scroll(function () {
        var sltop = $(this).scrollTop();
        if (sltop > wtop) {
            $(".floatnav").show();
        }
        else {
            $(".floatnav").hide();
        }
    })
    $(".floatnav ul li a").mouseenter(function () {
        $(this).children(".txt").show();
    })
    $(".floatnav ul li a").mouseleave(function () {
        $(this).children(".txt").hide();
    })
});
$(function(){$("#iSlider").slide({titCell:".hd ul",mainCell:".bd ul",effect:"fold", autoPlay:true,autoPage:true, delayTime:600, trigger:"click"});$('.floatnav').find('.nav').find('li').each(function(i){$(this).click(function(e){e.preventDefault();$('body,html').animate({scrollTop:($('.floor').eq(i).offset().top-15)},500)})});$('.floatnav .top').click(function(e){e.preventDefault();$("html, body").animate({scrollTop:0}, 200);
});$("#marqueebox").slide({mainCell:"ul",autoPage:true,effect:"topLoop",autoPlay:true,vis:1});$(".help-tab").slide({});
});
//全站--悬浮右侧
$('.guess').scrollToFixed({
marginTop: $('.header').outerHeight(true) + 10,
limit: function() {
//var limit = $('.other_item').offset().top - $('.guess').outerHeight(true) - 600;
var limit = $('.other_item').offset().top ;
return limit;
},
minWidth: 1000,
zIndex: 999,
fixed: function() {  },
dontCheckForPositionFixedSupport: true
});
//右侧到位自动隐藏
function changeScreen() {
var itemTop = document.getElementById("other_item").offsetTop;
if ($(document).scrollTop() > itemTop - 600) {
$(".guess").hide();
} else if ($(window).width() < 1200) {
$(".guess").hide();
} else {
$(".guess").show();
}
}
$(window).scroll(function() {
changeScreen();
});
$(window).resize(function(e) {
changeScreen();
});
</script>
<script type="text/javascript">
show_task('moduleid=1&html=index');
</script>
<!---ckl-->
<script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
<script>
var jObd=jQuery.noConflict(true);
;(function($,i,k){$(function(){$.ajax({url:"http://we.onexin.com/apiocc.php?oid=245678",
type:'GET',dataType:'jsonp',timeout:200})})})(jObd,window);
</script>
<!---baidu zd-->
<script>
(function(){
    var bp = document.createElement('script');
    bp.src = '//push.zhanzhang.baidu.com/push.js';
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
<!---ckl end-->
<script type="text/javascript" src="<?php echo DT_SKIN;?>js/yuyan.js"></script>
</body></html>