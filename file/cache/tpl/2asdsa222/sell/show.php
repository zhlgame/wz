<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header');?> 
<script type="text/javascript">var module_id= <?php echo $moduleid;?>,item_id=<?php echo $itemid;?>,content_id='content',img_max_width=<?php echo $MOD['max_width'];?>;</script>
<div id="main" class="full">
    <div class="wrap">
        <div class="crumbs">当前位置: <a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> » <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> » <?php echo cat_pos($CAT, ' » ');?></div>
        <div class="container fl">
            <div class="proshow clearfix mt-15">
                <div class="proImg fl">
                    <div id="mid_pos"></div>
                    <div id="mid_div" onmouseover="SAlbum();" onmouseout="HAlbum();" onclick="PAlbum(Dd('mid_pic'));"> <img src="<?php echo $albums['0'];?>" width="240" height="180" id="mid_pic"/><span id="zoomer"></span> </div>
                    <ul class="pro clearfix mt-15">
                        <?php if(is_array($thumbs)) { foreach($thumbs as $k => $v) { ?>
                        <li><img src="<?php echo $v;?>" width="64" height="64" onmouseover="if(this.src.indexOf('nopic60.gif')==-1)Album(<?php echo $k;?>, '<?php echo $albums[$k];?>');" class="<?php if($k) { ?>ab_im<?php } else { ?>ab_on<?php } ?>
" id="t_<?php echo $k;?>"/></li>
                      <?php } } ?>
                      
                    </ul>
                    <div class="clear">
    </div>
                </div>
                <div class="proInfo cldl pr fr"> 
 <div class="shouc shangji"><a href="javascript:SendFav();" target="_blank">加入收藏</a></div>
                      <div class="jubao maijia"><a target="_blank" href="javascript:SendReport();">举报卖家</a></div>
                    <div id="big_div" style="display:none;"><img src="" id="big_pic"/></div>
                    <h1 class="title" id="title"><?php echo dsubstr($title,40,…);?></h1>
                    <dl>
                        <dt>产品价格：</dt>
                        <dd class="f_b orange"><?php if($price>0) { ?><?php echo $price;?><?php echo $DT['money_unit'];?>/<?php echo $unit;?><?php } else { ?>面议<?php } ?>
</dd>
                        <dt>所属行业：</dt>
                        <dd><?php echo $CAT['catname'];?></dd>
                        <dt>关 键 词：</dt>
                        <dd><?php echo $head_keywords;?></dd>
                        <dt>浏览次数：</dt>
                        <dd><span id="hits"><?php echo $hits;?></span>次</dd>
                        <dt>最后更新：</dt>
                        <dd><?php echo $editdate;?></dd>
                    </dl>
                    <?php if($username && !$expired) { ?>
                    <ul class="clearfix mt-15">
<?php if(SELL_ORDER && $price>0 && $minamount>0 && $amount>0 && $unit) { ?>
 <li class="btn-go"> <a onclick="Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('buy.php?itemid='.$itemid);?>');" href="###"><b>加入购物车</b></a></li>
  <?php } else { ?>
<li class="btn-msg"> <a onclick="Go('<?php echo $MOD['linkurl'];?><?php echo rewrite('inquiry.php?itemid='.$itemid);?>');" href="###"><b>在线询盘</b></a></li>
  <?php } ?>
<li class="btn-qq"> <a href="<?php echo $MODULE['2']['linkurl'];?>chat.php?touser=<?php echo $item['username'];?>&mid=<?php echo $moduleid;?>&itemid=<?php echo $itemid;?>" target="_blank"><b>在线洽谈</b></a></li>
                        <li class="btn-tel"> <a target="_blank" href="<?php echo $member['linkurl'];?>"><b>联系我们</b></a></li>
                    </ul>
                    <div class="attribute">
                        <ul>
                            <li><span>公司名称：</span><a href="<?php echo $member['linkurl'];?>" target="_blank"><?php echo $member['company'];?></a></li>
                            <li><span>联 系 人：</span><?php echo $member['truename'];?>(<?php echo gender($member['gender']);?>)  <?php echo $member['career'];?></li>
                            <?php if($member['mobile']) { ?>
                            <li><span>联系手机：</span><?php echo $member['mobile'];?></li>
                            <?php } ?>
                            <?php if($member['telephone']) { ?>
                            <li><span>联系固话：</span><?php echo $member['telephone'];?></li>
                            <?php } ?>
                            <?php if($member['address']) { ?>
                            <li><span>联系地址：</span><?php echo $member['address'];?></li>
                            <?php } ?>
<li><span>商铺网址：</span><a href="<?php echo $member['linkurl'];?>" target="_blank"><?php echo $member['linkurl'];?></a></li>
                            <li><span>官方网址：</span><?php if($member['homepage']) { ?><a href="<?php echo $member['homepage'];?>" target="_blank"><?php echo $member['homepage'];?></a><?php } else { ?><a href="<?php echo $member['linkurl'];?>" target="_blank"><?php echo $member['linkurl'];?></a><?php } ?>
</li>
                        </ul>
                    </div>
                    <?php } ?>
 </div>
                <div class="state mt-15"> 
询盘时请说明在【<?php echo $DT['sitename'];?>】看到的该产品信息！<br>
 负责声明：所展示的信息由供货商提供，内容的真实性、准确性和合法性由发布会员负责。【<?php echo $DT['sitename'];?>】不承担任何责任。<br>
                 友情提醒：为了您的交易安全，请尽量使用货到付款方式！如需要投诉，可进入"<span class="red"><a href="<?php echo $MODULE['24']['linkurl'];?>" target="_blank">消费者防骗指南</a></span>"了解投诉及处理流程，我们将竭诚为您服务！</div>
            </div>
            <div class=" box01 mt-15">
                <div class="header">
                    <h3>产品详细说明</h3>
                </div>
                <div class="prodetail">
                    <ul class="clearfix infoList">
                        <?php if($brand) { ?>
                        <li><span>品牌：</span> <?php echo $brand;?></li>
                        <?php } ?>
                        <?php if($n1 && $v1) { ?>
                        <li><span><?php echo $n1;?>：</span> <?php echo $v1;?></li>
                        <?php } ?>
                        <?php if($n2 && $v2) { ?>
                        <li><span><?php echo $n2;?>：</span> <?php echo $v2;?></li>
                        <?php } ?>
                        <?php if($n3 && $v3) { ?>
                        <li><span><?php echo $n3;?>：</span> <?php echo $v3;?></li>
                        <?php } ?>
                        <li><span>起订：</span><?php if($minamount) { ?><?php echo $minamount;?> <?php echo $unit;?><?php } ?>
</li>
                        <li><span>供货总量：</span><?php if($amount) { ?><?php echo $amount;?> <?php echo $unit;?><?php } ?>
</li>
                        <li><span>发货期限：</span> 自买家付款之日起 <span class="f_b f_orange"><?php if($days) { ?><?php echo $days;?><?php } ?>
</span> 天内发货</li>
                        <li><span>所在地：</span> <?php echo area_pos($areaid, ' ');?></li>
                        <li><span>有效期至：</span> <?php if($todate) { ?><?php echo $todate;?><?php } else { ?>长期有效<?php } ?>
<?php if($expired) { ?> <span class="f_red">[已过期]</span><?php } ?>
</li>
                    </ul>
                    <div class="box_body1" style="padding:0;"> <?php if($CP) { ?><?php include template('property', 'chip');?><?php } ?>
                        <div class="content c_b" id="content"><?php echo $content;?></div>
                    </div>
 </div>
 <div class="mt15"> <?php include template('comment', 'chip');?></div>
               
            </div>
            <div class="box01 top-reconmmend">
                <div class="header"> <a class="more" target="_blank" href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>"> 我也要出现在这里</a>
                    <h3>热门推荐</h3>
                </div>
                <?php echo tag("moduleid=$moduleid&length=20&condition=status=3 and thumb<>'' and username='$username'&pagesize=5&order=edittime desc&width=160&height=160&cols=8&template=pro_hot");?> 
            </div>
        </div>
        <div class="sideBar fr">
            <div class="box01 honor mt-15">
                <div class="header">
                    <h3>诚信档案</h3>
                </div>
                 <?php if($user_status == 3) { ?>
               <?php if($member) { ?>
<ul class="company-name">
    <li class="f14 red">
        <a href="<?php echo $member['linkurl'];?>" title="<?php echo $member['company'];?>
<?php echo $member['mode'];?>" alt="<?php echo $member['company'];?>" target="_blank">
            <?php echo $member['company'];?></a></li>
    <li class="year"> <?php if($groupid == 7) { ?><i class="mytvip"></i><span class="fl">贸易通会员</span><?php } else if($groupid == 8) { ?><i class="spvip"></i><span class="fl">商铺会员</span><?php } else if($groupid == 6) { ?><i class="vip"></i><span class="fl">免费企业</span><?php } else if($groupid == 5) { ?><i class="vip"></i><span class="fl">个人</span><?php } else if($groupid == 1) { ?><i class="vip"></i><span class="fl">个人</span><?php } ?>
 第 <?php echo vip_year($member['fromtime']);?> 年</li>
     <li class="mt-5"><span class="blue"><a target="_blank" href="<?php echo $member['linkurl'];?>">进入店铺</a></span><span class="ml-10">|</span><span class="blue ml-10"><a target="_blank" href="<?php echo $MODULE['2']['linkurl'];?>message.php?action=send&touser=<?php echo $member['username'];?>">给商家留言</a></span> </li>
</ul>
<?php } ?>
<ul class="company-honor">
   <?php if($member) { ?><li class="mt15">会员级别：<span class="red"><b><?php if($groupid == 7) { ?>贸易通会员<?php } else if($groupid == 8) { ?>商铺会员<?php } else if($groupid == 6) { ?>免费企业<?php } else if($groupid == 5) { ?>个人<?php } else if($groupid == 1) { ?>个人<?php } ?>
</b></span> [第<?php echo vip_year($member['fromtime']);?>年]  指数:  <?php echo $member['vip'];?> 级</li><?php } ?>
    <?php if($member) { ?><li>店铺等级：<img src="<?php echo DT_SKIN;?>image/vip-<?php echo $member['vip'];?>.gif" align="absmiddle"/></li><?php } ?>
  <?php if($member) { ?><li>旺铺店长：<?php echo $username;?></li><?php } ?>
<?php if($member['deposit']) { ?><li>服务保障：<?php if(($member['deposit'])<1) { ?><span class="f_green"><strong>暂未签署消保协议</strong></span><?php } else { ?><img src="<?php echo DT_SKIN;?>image/baoz1.png" width="16" height="12" align="absmiddle" title="该店铺已签署消费者保障协议"/>已缴纳 <span class="red"><strong><?php echo $member['deposit'];?></strong> <?php echo $DT['money_unit'];?></span> 保证金<?php } ?>
</li><?php } ?>
<li>（<span class="red"><a href="#"  target="_blank">什么是消费者保障协议</a></span>）</li>
    <li>认证类型：<span class="red"><?php if($member['vcompany']) { ?> <img src="<?php echo $MODULE['2']['linkurl'];?>image/v_company.gif" width="16" height="16" align="absmiddle" title="通过工商认证"/><?php } ?>
<?php if($member['vtruename']) { ?> <img src="<?php echo $MODULE['2']['linkurl'];?>image/v_truename.gif" width="16" height="16" align="absmiddle" title="通过实名认证"/><?php } ?>
<?php if($member['vbank']) { ?> <img src="<?php echo $MODULE['2']['linkurl'];?>image/v_bank.gif" width="16" height="16" align="absmiddle" title="通过银行帐号认证"/><?php } ?>
<?php if($member['vmobile']) { ?> <img src="<?php echo $MODULE['2']['linkurl'];?>image/v_mobile.gif" width="16" height="16" align="absmiddle" title="通过手机认证"/><?php } ?>
<?php if($member['vemail']) { ?> <img src="<?php echo $MODULE['2']['linkurl'];?>image/v_email.gif" width="16" height="16" align="absmiddle" title="通过邮件认证"/><?php } ?>
</span></li>
    <li>身份认证：<span class="green"><?php if($member['validated']) { ?> <img src="<?php echo DT_SKIN;?>image/check_right.gif" align="absmiddle"/> 通过<?php echo $member['validator'];?>认证<?php } ?>
 <a href="<?php echo userurl($member['username'], 'file=credit');?>">[诚信档案]</a></span></li>
    <li>状态：[<?php if(online($member['userid'])==1) { ?><font class="f_red">在线</font><?php } else { ?><font class="f_gray">离线</font><?php } ?>
]  <a href="<?php echo $MODULE['2']['linkurl'];?>friend.php?action=add&username=<?php echo $member['username'];?>" rel="nofollow">[加为商友]</a>   <a href="<?php echo $MODULE['2']['linkurl'];?>message.php?action=send&touser=<?php echo $member['username'];?>" rel="nofollow">[发送信件]</a> </li>
<?php if(!$username) { ?><li><strong class="f_red">注意</strong>:发布人未在本站注册，建议优先选择<a href="<?php echo $MODULE['2']['linkurl'];?>grade.php"><strong><?php echo VIP;?>会员</strong></a></li><?php } ?>
    <li class="company-code">
<script type="text/javascript">var _qrContent='',_qrLogo='',_qrWidth=100,_qrHeight=100,_qrType = 'auto';if(!_qrContent) var _qrContent =escape(document.location.href);document.write(unescape("%3Cscript src='http://qrcode.leipi.org/js.html?qw="+_qrWidth+"&qh="+_qrHeight+"&qt="+_qrType+"&qc="+escape(_qrContent)+"&ql="+escape(_qrLogo)+"' type='text/javascript'%3E%3C/script%3E"));</script>
        <p class="gray">扫一扫用手机访问本产品</p>
    </li>
</ul>
<?php } ?>
            </div>
 
            <div class="mt-15"> </div>
            <div class="recommend box01 mt-15">
                <div class="header">
                    <h3>相关热词推荐</h3>
                </div>
<?php echo tag("moduleid=$searchid&table=keyword&condition=moduleid=$searchid and status=3&pagesize=10&order=total_search desc&template=hot_kw");?> 
            </div>
            <div class="news-pro fl mt15" style="overflow:hidden; ">
                <p class="com-tit f15">最新产品</p>
<?php echo tag("moduleid=$moduleid&length=20&condition=status=3 and thumb<>''&pagesize=8&order=edittime desc&template=cp");?>
                      
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/album.js"></script> 
<?php if($content) { ?><script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/content.js"></script><?php } ?>
<?php include template('footer');?>
