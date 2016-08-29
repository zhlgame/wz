<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<ul class="list mt10">
                        <li class="inform">
                            <ul>
                                <li>
                                    <h2 class="f14 blue">
                                        <a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo $t['company'];?></a><?php if($t['vip']) { ?>&nbsp;&nbsp;<img src="<?php echo DT_SKIN;?>image/vip_<?php echo $t['vip'];?>.gif" alt="<?php echo VIP;?>" title="<?php echo VIP;?>:<?php echo $t['vip'];?>级" align="absmiddle"/><?php } ?>
                                    </h2>
                                    <p class="mt10">
                                        <b>公司介绍：</b><?php echo dsubstr($t['introduce'],100,'...');?></p>
                                    <p class="round">
                                        <b>主营项目：</b><span><a href="<?php echo $t['linkurl'];?>" target="_blank"><?php echo dsubstr($t['business'],40,'...');?></a></span></p>
                                        <p>
                                        <b>公司认证：</b><?php if($t['validated']) { ?>该企业<span class="f_green">[已通过企业认证核实]</span><?php } else { ?>该企业[<span class="red">未通过企业认证核实</span>]<?php } ?>
</p>
                                    <p>
                                        <b>所在地：</b><?php echo $t['address'];?></p>
                                    <p>
                                        <span class="red"><a href="<?php echo $t['linkurl'];?>" target="_blank">查看该企业发布的产品信息</a></span></p>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="pro">
                    
                       <ul class="proshow">
                        <?php $tags=tag("moduleid=5&length=20&condition=status=3 and thumb<>''and username='".$t['username']."'&areaid=$cityid&pagesize=4&order=edittime desc&template=null");?>
                            
                        <?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>        
                        <li>
                        <dl>
                            <dt><a href="<?php echo $t['linkurl'];?>" target="_blank"><img src="<?php echo $t['thumb'];?>" alt="<?php echo $t['alt'];?>" width="95" /></a></dt>
                            <dd><a href="<?php echo $t['linkurl'];?>" title="<?php echo $t['alt'];?>" target="_blank"><?php echo $t['title'];?></a></dd>
                        </dl>
                        </li>
                        
<?php } } ?>
 
                    </ul>
                           
                    </li>
                    </ul>
                    
<?php } } ?>

 
 
<?php if($showpage && $pages) { ?><div class="pages"><?php echo $pages;?></div><?php } ?>
