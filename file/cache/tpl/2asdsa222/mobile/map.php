<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('header', 'mobile');?>
<div id="head-bar">
<div class="head-bar">
<div class="head-bar-back">
<a href="javascript:Dback('index.php');" data-direction="reverse"><img src="static/img/icon-back.png" width="24" height="24"/><span>返回</span></a>
</div>
<div class="head-bar-title">地图</div>
<div class="head-bar-right">
<a href="channel.php" data-transition="slideup"><span>频道</span></a>
</div>
</div>
<div class="head-bar-fix"></div>
</div>
<div id="bmap" style="width:100%;height:300px;"></div>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=<?php echo $map_key;?>"></script>
<script type="text/javascript">
$(document).on('pageinit', function(event) {
$('#bmap').height($(window).height() - <?php if($DT_MOB['browser']=='b2b') { ?>64<?php } else { ?>44<?php } ?>
);
// 百度地图API功能
var map = new BMap.Map("bmap");
var point = new BMap.Point(116.331398,39.897445);
map.centerAndZoom(point,12);
// 创建地址解析器实例
var myGeo = new BMap.Geocoder();
// 将地址解析结果显示在地图上,并调整地图视野
myGeo.getPoint("<?php echo $addr;?>", function(point){
if (point) {
map.centerAndZoom(point, 16);
var marker = new BMap.Marker(point);
map.addOverlay(marker);
var label = new BMap.Label("<?php echo $addr;?>",{offset:new BMap.Size(20,-10)});
marker.setLabel(label);
}else{
Dtoast("您选择地址没有解析到结果");
}
}, "中国");
});
</script>
<?php include template('footer', 'mobile');?>