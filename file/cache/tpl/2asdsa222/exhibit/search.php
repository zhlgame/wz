<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
<script type="text/javascript">var sh = '<?php echo $MOD['linkurl'];?>search.php?catid=<?php echo $catid;?>';</script>
    <!--面包屑-->
    <div class="wrapper">
        <div class="crumbs mt-10">
            <span class="fr mr-10">共找到 <b class="red">
                <?php echo $items;?></b> 条信息</span> 您所在的位置：<a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> » <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> » <?php echo cat_pos($CAT, ' » ');?> <span class="orange">
                <?php echo $title;?></span>
        </div>
    </div>
    <!--展会列表-->
    <div class="wrapper">
        <div class="list-left mt-10">
            <div class="list">
 
                <p class="comment-tit f-14">
                    <span class="comment-ico">展会列表</span></p>
                
                        <?php if($page == 1) { ?><?php echo ad($moduleid,$catid,$kw,6);?><?php } ?>
<?php if($tags) { ?><?php include template('xiaohei-fairlist', 'tag');?><?php } else { ?>
<?php include template('noresult', 'message');?><?php } ?>
                    
                <div class="clear">
                </div>
                
<?php if($showpage && $pages) { ?><div class="pages"><?php echo $pages;?></div><?php } ?>
 
 
            </div>
        </div>
        <div class="list-right">
            <div class="ad mt-10">
                <p>
            </div>
            <!--优质展会-->
            <div class="rightbar mt-15">
                <p class="comment-tit f-14">
                    优质展会</p>
                
                <p class="mt-15 ml10">
                    <a target="_blank" rel="nofollow" href="#">
                    </p>
<p class="mt-15 ml10">
                    <a target="_blank" rel="nofollow" href="#">
             </p>
<ul class="high-quality" style="height: auto;">
    
<?php echo tag("moduleid=$moduleid&length=36&condition=status=3&pagesize=8&order=addtime desc&target=_blank&template=mls-list");?> 
        
</ul>
 
            </div>
            <!--推荐展会-->
            <div class="rightbar mt-15">
                <p class="comment-tit f-14">
                    推荐展会</p>
                
<ul class="high-quality" style="height: auto;">
    
        <?php echo tag("moduleid=$moduleid&length=36&condition=status=3&pagesize=8&order=addtime desc&target=_blank&template=mls-list");?> 
        
</ul>
 
            </div>
        </div>
    </div>
    <div class="clear">
    </div>
 
<?php include template('footer');?>
