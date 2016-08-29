<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>comlist.css"/>
<script type="text/javascript">var sh = '<?php echo $MOD['linkurl'];?>search.php?catid=<?php echo $catid;?>';</script>
<div id="main" class="full">
    <div class="wrap">
        <div class="crumbs"> <span class="fr mr-10">共找到 <b class="red"><?php echo $items;?></b> 条<strong class="red"> <?php echo $CAT['catname'];?> </strong> 产品信息</span> 当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> » <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> » <?php echo cat_pos($CAT, ' » ');?></div>
        <!--分类-->
        <div class="category cldl mt-10">
            <dl>
                <dt>类 目</dt>
                <dd>
                  <ul id="mainCat" class="clearfix">
            <?php if(is_array($maincat)) { foreach($maincat as $k => $v) { ?>
            <li><a <?php if($v['catid']==$catid) { ?>class="cur"<?php } ?>
 href="<?php echo $MOD['linkurl'];?><?php echo $v['linkurl'];?>"><?php echo $v['catname'];?></a></li>
            <?php } } ?>
            </ul>
            <?php if($k > $MOD['page_subcat']) { ?><a href="JavaScript:" class="category-showmorebtn"></a><?php } ?>
  
                </dd>
            </dl>
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
                <div class="sort-inner clearfix">
                    <div class="styles fr">
                    </div>
                   <div class="select">
                        <ul class="fl">
                             <li>
    <select class="fl mt5" onchange="Go(sh+'&day='+this.value)">
<option value="0">更新时间</option>
<option value="1">1天内</option>
<option value="3">3天内</option>
<option value="7">7天内</option>
<option value="15">15天内</option>
<option value="30">30天内</option>
</select>
                </li>
 
                <li>
                <form action="<?php echo $MODULE['4']['linkurl'];?>search.php" id="fsearch">
                <span class="fl mt5">企业名称：</span> <span class="fl">
                    <input name="kw" type="text" id="fsearch" class="txt fl" value="">
                   <a id="btnSearch" class="select-btn" onclick="Dd('fsearch').submit();">筛选</a> </span>
                </form>
                </li>
                        </ul>
                    </div>
                   
                </div>
        </div>
        <div class="container fl">
            <div class="leftbox mt-10">
            <?php if($page == 1) { ?><?php echo ad($moduleid,$catid,$kw,6);?><?php } ?>
            <?php if($tags) { ?><?php include template('comlist', 'tag');?><?php } ?>
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
            <div class="mt-15">
                <a href="#" target="_blank">
                    <img src="http://www.qihuiwang.com/images/Public/testimg/adimg2.jpg"></a></div>
        </div>
    </div>
</div>
 
<?php include template('footer');?>