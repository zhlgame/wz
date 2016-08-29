<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?> 
<script type="text/javascript">var module_id= <?php echo $moduleid;?>,item_id=<?php echo $itemid;?>,content_id='content',img_max_width=<?php echo $MOD['max_width'];?>;</script>
<div id="main" class="full">
    <div class="wrap">
        <div class="crumbs">当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> » <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> » <?php echo cat_pos($CAT, ' » ');?></div>
        <div class="container fl">
            <div class="box01 mt-15">
                <div class="header">
                    <h3>采购详情</h3>
                </div>
                <div class="buyshow clearfix">
                    <div class="buyImg fl">
                        <div id="mid_pos"></div>
                        <div class="fl" id="mid_div" onmouseover="SAlbum();" onmouseout="HAlbum();" onclick="PAlbum(Dd('mid_pic'));"> <img src="<?php echo $albums['0'];?>" width="310" height="310" id="mid_pic"/><span id="zoomer"></span> </div>
                        <div class="thumb-list fl">
                            <ul>
                                <?php if(is_array($thumbs)) { foreach($thumbs as $k => $v) { ?>
                                <li><img src="<?php echo $v;?>" width="60" height="60" onmouseover="if(this.src.indexOf('nopic60.gif')==-1)Album(<?php echo $k;?>, '<?php echo $albums[$k];?>');" class="<?php if($k) { ?>ab_im<?php } else { ?>ab_on<?php } ?>
" id="t_<?php echo $k;?>"/></li>
                                <?php } } ?>
                                 <li onclick="PAlbum(Dd('mid_pic'));">
                            </ul>
                        </div>
                    </div>
                    <div class="buyInfo cldl fr">
                        <div id="big_div" style="display:none;"><img src="" id="big_pic"/></div>
                        <h1 class="title_trade" id="title"><?php echo $title;?></h1>
                        <dl>
                            <dt>价格要求：</dt>
                            <dd><?php if($price) { ?><?php echo $price;?><?php } else { ?>面议<?php } ?>
</dd>
                            <dt>关 键 词：</dt>
                            <dd><span class="red"><?php echo $head_keywords;?></span></dd>
                            <dt>浏览次数：</dt>
                            <dd><span id="hits"><?php echo $hits;?></span></dd>
                            <dt class="mt-15">结束日期：</dt>
                            <dd class="mt-15"><?php if($todate) { ?><?php echo $todate;?><?php } else { ?>长期有效<?php } ?>
<?php if($expired) { ?> <span class="f_red">[已过期]</span><?php } ?>
</dd>
                             <dt>最后更新：</dt>
                            <dd><?php echo $editdate;?></dd>
                            <dt class="mt-15">采购商：</dt>
                            <dd class="mt-15"><?php echo $member['company'];?></dd>
                        </dl>
                        <?php if($username && !$expired) { ?>
                        <ul class="clearfix mt15 ml20 f14">
                            <li class="btn-msg"><a target="_blank" alt="立即报价" onclick="Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('price.php?itemid='.$itemid);?>');"/>立即报价</a></li>
                            <li class="btn-tel ml20"><a href="#lx">联系采购商</a></li>
                        </ul>
                        <?php } ?>
                         </div>
                </div>
                <div class="buydetail">
                <?php if($CP) { ?><?php include template('property', 'chip');?><?php } ?>
                    <h3 class="clearfix"><span class="fl">产品描述</span></h3>
                    <ul class="clearfix infoList">
                        <?php if($n1 && $v1) { ?>
                        <li> <span><?php echo $n1;?>：</span><?php echo $v1;?> </li>
                        <?php } ?>
                        <?php if($n2 && $v2) { ?>
                        <li> <span><?php echo $n2;?>：</span><?php echo $v2;?> </li>
                        <?php } ?>
                        <?php if($n3 && $v3) { ?>
                        <li> <span><?php echo $n3;?>：</span><?php echo $v3;?> </li>
                        <?php } ?>
                        <li> <span>需求数量：</span><?php echo $amount;?> </li>
                        <li> <span>包装要求：</span><?php echo $pack;?> </li>
                        <li> <span>所在地：</span><?php echo area_pos($areaid, '');?> </li>
                    </ul>
                    <?php if($CP) { ?><?php include template('property', 'chip');?><?php } ?>
                    <div id="content"><?php echo $content;?></div>
                    <h3 class="clearfix mt-15" id="lx"><span class="fl">联系采购商</span></h3>
                    <div class="attribute">
                        <ul>
                           <?php include template('contact', 'chip');?>
                           
<?php if(!$username) { ?>
<br/>
 <strong class="f_red">注意</strong>:发布人未在本站注册，建议优先选择<a href="<?php echo $MODULE['2']['linkurl'];?>grade.php"><strong><?php echo VIP;?>会员</strong></a>
<?php } ?>
                        </ul>
                    </div>
                     <?php if(in_array(6, explode(',', $EXT['comment_module']))) { ?>
            <h3 class="clearfix mt-15"><span class="fl">相关评论</span><a class="fr" href="<?php echo $EXT['comment_url'];?><?php echo rewrite('index.php?mid=6&itemid='.$itemid);?>">共<span1 id="comment_count">0</span1>条 [查看全部]</a></h3>
                    <?php include template('comment-buy', 'chip');?>
 
                     <?php } ?>
                </div>
            </div>
            <div class="box01 mt-15">
                <div class="header">
                    <h3>热门推荐</h3>
                </div>
                <div class="rocembar"> 
                    <?php echo tag("moduleid=6&length=60&condition=status=3&areaid=$cityid&pagesize=12&order=edittime desc&target=_blank&datetype=3&template=buy1", -2);?> 
                </div>
            </div>
        </div>
        <div class="sideBar fr">
            <div class="mt-15"> </div>
            <div class="box01 mt-15">
                <div class="header">
                    <h3>最新采购</h3>
                </div>
                <div class="purshow"><?php echo tag("moduleid=6&length=30&condition=status=3&areaid=$cityid&pagesize=8&order=edittime desc&target=_blank&class=orang&showcat=1&template=buy2", -2);?> 
                </div>
            </div>
            <div class="mt-15"></div>
            <div class="box01 mt-15">
                <div class="header">
                    <h3>采购排行</h3>
                </div>
                <div class="purshow"><?php echo tag("moduleid=6&length=30&condition=status=3&areaid=$cityid&pagesize=8&order=hits desc&target=_blank&class=orang&showcat=1&template=buy2", -2);?> 
                </div>
            </div>
            
            <div class="news-pro fl mt15" style="overflow:hidden; ">
                <p class="com-tit f15">最新产品</p>
<?php echo tag("moduleid=5&length=20&condition=status=3 and thumb<>''&pagesize=8&order=edittime desc&template=byu3");?>
                      
            </div>
            
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/album.js"></script> 
<?php if($content) { ?><script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/content.js"></script><?php } ?>
<?php include template('footer');?>
