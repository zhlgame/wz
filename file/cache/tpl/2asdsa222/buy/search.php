<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<script type="text/javascript">var sh = '<?php echo $MOD['linkurl'];?>search.php?catid=<?php echo $catid;?>';</script>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>css/sell.css"/>
<div id="main" class="full">
    <div class="wrap">
        <div class="crumbs"> <span class="fr mr-10">共找到 <b class="red"><?php echo $items;?></b> 条<strong class="red"> <?php echo $CAT['catname'];?> </strong> 产品信息</span> 当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> » <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> » 搜索</div>
        <!--分类-->
        <div class="category cldl mt-10">
            <dl>
                <dt>地 区</dt>
                <dd>
                  <ul id="mainCat" class="clearfix">
                  <?php $mainarea = get_mainarea(0)?>
<?php if(is_array($mainarea)) { foreach($mainarea as $k => $v) { ?>
<li><a href="<?php echo $MOD['linkurl'];?>search.php?areaid=<?php echo $v['areaid'];?>&catid=<?php echo $catid;?>"><?php echo $v['areaname'];?></a></li>
<?php } } ?>
            </ul>
 
                </dd>
            </dl>
        </div>
        <div class="tool mt-10">
            <form action="<?php echo $MOD['linkurl'];?>search.php" id="fsearch">
                <div class="sort-inner clearfix">
                    <div class="styles fr">
                       
                    </div>
                    <div class="sort fl">
                        <input type="hidden" name="order" value="" id="order">
                        <ul class="clearfix">
                         <li class="first"> <a href="javascript:;" onclick="Dd('order').value='0';Dd('fsearch').submit();" title="综合排序" class="link active">综合排序</a> </li>
                             <?php if(is_array($TYPE)) { foreach($TYPE as $k => $v) { ?>
<li><a href="javascript:Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?typeid='.$k.'&catid='.$catid);?>');" title="<?php echo $v;?>" class="link"><?php echo $v;?></a></li>
<?php } } ?>
                            <li class="droplist hoverSelf"><a class="link" title="价格从低到高">价格<span class="icon"></span> </a>
                                <ul>
                                    <li><a href="javascript:;" onclick="Dd('order').value='3';Dd('fsearch').submit();">价格从低到高</a> </li>
                                    <li><a href="javascript:;" onclick="Dd('order').value='2';Dd('fsearch').submit();">价格从高到低</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="prices hoverSelf fl">
                        <div class="inner">
                            <ul class="clearfix">
                                <li class="item">
                                    <input class="input" type="text" name="minprice" value="" placeholder="¥">
                                </li>
                                <li class="sep">-</li>
                                <li class="item">
                                    <input class="input" type="text" name="maxprice" value="" placeholder="¥">
                                </li>
                                <li class="submit"><span class="btn" onclick="Dd('fsearch').submit();">确定</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="container fl">
            <div class="sellWindow">
            <?php if($page == 1) { ?><?php echo ad($moduleid,$catid,$kw,6);?><?php } ?>
            <?php if($tags) { ?><?php include template('bys', 'tag');?><?php } else { ?>
<?php include template('noresult', 'message');?><?php } ?>
            </div>
            <div class="box01 top-reconmmend">
                <div class="header"> <a class="more" target="_blank" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>"> 我也要出现在这里</a>
                    <h3>热门推荐</h3>
                </div>
<?php echo tag("moduleid=6&length=20&condition=status=3 and thumb<>''&pagesize=5&order=edittime desc&width=160&height=160&cols=8&template=pro_hot");?> 
            </div>
        </div>
        <div class="sideBar fr">
            <!--相关热词推荐-->
            <div class="recommend box01 mt-15">
                <div class="header"><h3>相关热词推荐</h3></div>
                <?php echo tag("moduleid=$searchid&table=keyword&condition=moduleid=$searchid and status=3&pagesize=10&order=total_search desc&template=hot_kw");?>
            </div>
            <!--本周搜索排行-->
  <div class="recommend box01 mt-15">
                <div class="header"><h3>本日搜索排行</h3></div>
                <ul class="black">
<?php echo tag("moduleid=$moduleid&table=keyword&condition=moduleid=$moduleid and status=3 and updatetime>$today_endtime-86400&pagesize=10&order=today_search desc&key=today_search&template=ss");?>
                </ul>       
            </div>
            <div class="clear">
            </div>
             <!--本日搜索排行-->
             <!--本周搜索排行-->
  <div class="recommend box01 mt-15">
                <div class="header"><h3>本周搜索排行</h3></div>
                <ul class="black">
<?php echo tag("moduleid=$moduleid&table=keyword&condition=moduleid=$moduleid and status=3 and updatetime>$today_endtime-86400*7&pagesize=10&order=week_search desc&key=week_search&template=ss");?>
                </ul>       
            </div>
            <div class="clear">
            </div>
             <!--本周搜索排行-->
              <!--本月搜索排行-->
  <div class="recommend box01 mt-15">
                <div class="header"><h3>本月搜索排行</h3></div>
                <ul class="black">
<?php echo tag("moduleid=$moduleid&table=keyword&condition=moduleid=$moduleid and status=3 and updatetime>$today_endtime-86400*30&pagesize=10&order=month_search desc&key=month_search&template=ss");?>
                </ul>       
            </div>
            <div class="clear">
            </div>
             <!--本月搜索排行-->
              <!--广告-->
             <div class="mt15">
                <a target="_blank" href="#">
                    <img src="<?php echo DT_SKIN;?>ad/sell/7ad.jpg"></a></div>
                      <!--广告-->
        </div>
    </div>
</div>
<script> 
$('.sellWindow').find('.small').find('li').each(function(){
$(this).on("mouseenter", function(e) {
var a = $(this),b=a.find('img').attr('src').replace('.thumb.','.middle.'),c=a.parents('dl').find("dt img"),t;
e.preventDefault();

clearTimeout(t);
t = setTimeout(function() {c.attr("src", b)},2e2)
})
})
</script>
<?php include template('footer');?>
