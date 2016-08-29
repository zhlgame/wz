<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<script type="text/javascript">var sh = '<?php echo $MOD['linkurl'];?>search.php?catid=<?php echo $catid;?>';</script>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>comlist.css"/>
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
                    <div class="wrap">
                   <div class="select mt-10">
            <ul class="fl">
                <li>
<select class="fl" onchange="Go(sh+'&day='+this.value)">
<option value="0">更新时间</option>
<option value="1">1天内</option>
<option value="3">3天内</option>
<option value="7">7天内</option>
<option value="15">15天内</option>
<option value="30">30天内</option>
</select>
<form action="<?php echo $MODULE['4']['linkurl'];?>search.php" id="fsearch">
                </form></li>
                <li><span class="fl mttt">企业名称：</span> <span class="fl">
                    <input name="kw" type="text" id="fsearch" class="txt fl" value="">
                    <a id="btnSearch" class="select-btn" onclick="Dd('fsearch').submit();">筛选</a> </span>
                </li>
            </ul>
        </div>
    </div>
                      
 
        <div class="container fl">
            <div class="leftbox mt-10">
            <?php if($page == 1) { ?><?php echo ad($moduleid,$catid,$kw,6);?><?php } ?>
            <?php if($tags) { ?><?php include template('comlist', 'tag');?><?php } else { ?>
<?php include template('noresult', 'message');?><?php } ?>
            </div>
            <div class="box01 top-reconmmend">
                <div class="header"> <a class="more" target="_blank" href="#"> 我也要出现在这里</a>
                    <h3>你可能感兴趣的产品</h3>
                </div>
<?php echo tag("moduleid=5&length=20&condition=status=3 and thumb<>''&pagesize=5&order=edittime desc&width=160&height=160&cols=8&template=3333");?> 
            </div>
        </div>
        <div class="sideBar fr">
            <!--相关热词推荐-->
            <div class="recommend box01 mt-15">
                <div class="header"><h3>相关热词推荐</h3></div>
                <?php echo tag("moduleid=$searchid&table=keyword&condition=moduleid=$searchid and status=3&pagesize=10&order=total_search desc&template=kw123");?>
            </div>
            <!--本周搜索排行-->
  <div class="recommend box01 mt-15">
                <div class="header"><h3>本日搜索排行</h3></div>
                <ul class="black">
<?php echo tag("moduleid=$moduleid&table=keyword&condition=moduleid=$moduleid and status=3 and updatetime>$today_endtime-86400&pagesize=10&order=today_search desc&key=today_search&template=list-search_rank");?>
                </ul>       
            </div>
            <div class="clear">
            </div>
             <!--本日搜索排行-->
             <!--本周搜索排行-->
  <div class="recommend box01 mt-15">
                <div class="header"><h3>本周搜索排行</h3></div>
                <ul class="black">
<?php echo tag("moduleid=$moduleid&table=keyword&condition=moduleid=$moduleid and status=3 and updatetime>$today_endtime-86400*7&pagesize=10&order=week_search desc&key=week_search&template=list-search_rank-sell");?>
                </ul>       
            </div>
            <div class="clear">
            </div>
             <!--本周搜索排行-->
              <!--本月搜索排行-->
  <div class="recommend box01 mt-15">
                <div class="header"><h3>本月搜索排行</h3></div>
                <ul class="black">
<?php echo tag("moduleid=$moduleid&table=keyword&condition=moduleid=$moduleid and status=3 and updatetime>$today_endtime-86400*30&pagesize=10&order=month_search desc&key=month_search&template=list-search_rank-sell");?>
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
<?php include template('footer');?>
