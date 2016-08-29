<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?>
 
<script type="text/javascript">var sh = '<?php echo $MOD['linkurl'];?>search.php?catid=<?php echo $catid;?>';</script>
    <form method="post" action="p2?menuName=agriculture&amp;menuProperty=zfj&amp;page=2&amp;keywords=" id="form1">
 
 
    <div class="clear">
    </div>
    <!--面包屑-->
    <div class="wrapper">
        <div class="crumbs mt-10">
            <span class="fr mr-10">共找到 <b class="red">
                <?php echo $items;?></b> 条信息</span> 
 
您所在的位置：<a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &raquo; <?php echo cat_pos($CAT, ' &raquo; ');?></div>
    </div>
    <div class="clear">
    </div>
    <div class="wrapper mt-15" style="margin-top: 15px;">
        <!--左侧列表-->
        <div class="inf_htm_left">
            <div class="title">
                <b class="title-ico">
                <span class="iblue">您正在搜索关于 <span class="f_red"><?php echo $kw;?></span> 的信息</span></b> <span class="fr mr-10">共找到 <b class="red">
                <?php echo $items;?></b> 条信息</span></div>
            <ul>
                 <?php if($page == 1) { ?><?php echo ad($moduleid,$catid,$kw,6);?><?php } ?>
            <?php if($tags) { ?><?php include template('xiaohei-artlist', 'tag');?><?php } else { ?><?php include template('noresult', 'message');?><?php } ?>
                       
                        
                    
            </ul>
            <!--分页-->
            <div>
                
 
 
 
            </div>
        </div>
        <!--右侧列表-->
        <div class="inf_htm_right">
            <!--排行榜-->
            <div class="seniority">
                <div class="tab_nav">
                    <div class="title">
                        排行榜</div>
                   
                    <div class="clear">
                    </div>
                </div>
                <div class="tab_box">
                    <ul class="tab1">
 
                     <?php echo tag("moduleid=$moduleid&length=36&condition=status=3&pagesize=10&order=hits desc&template=xiaohei-art4");?> 
 
                    </ul>
                    
                </div>
            </div>
            <div class="clear">
            </div>
            <!--热点聚焦-->
            <div class="hot mt-15">
                <div class="title">
                    热点聚焦</div>
                <ul>
<?php echo tag("moduleid=$moduleid&length=36&condition=status=3&pagesize=10&showcat=1&order=addtime desc&template=xiaohei-art7");?> 
  
                </ul>
            </div>
            <!--图片新闻-->
            <div class="inf_img mt-15">
                <div class="title">
                    图片新闻</div>
                <ul>
                  <?php echo tag("moduleid=$moduleid&length=36&condition=status=3 and thumb<>''&pagesize=8&order=addtime desc&target=_blank&template=xiaohei-art8");?> 
 
                </ul>
                <div class="clear">
                </div>
            </div>
        </div>
    </div>
    <div class="clear">
    </div>
    </form><?php include template('footer');?>
