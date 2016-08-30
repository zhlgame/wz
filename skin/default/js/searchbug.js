/*! repair searchbox bug */
$(document).ready(function(){
  $("#5").click(function(){
    $('#xiaohei-search').attr('action', 'http://www.wz71888.com/sell/search.php?spread=0&moduleid=5&kw=' + $("#xiaohei_kw")[0].value);;
  });
  $("#16").click(function(){
    $('#xiaohei-search').attr('action', 'http://www.wz71888.com/mall/search.php?spread=0&moduleid=16&kw=' + $("#xiaohei_kw")[0].value);;
  });
  $("#6").click(function(){
    $('#xiaohei-search').attr('action', 'http://www.wz71888.com/buy/search.php?spread=0&moduleid=6&kw=' + $("#xiaohei_kw")[0].value);;
  });
  $("#4").click(function(){
    $('#xiaohei-search').attr('action', 'http://www.wz71888.com/company/search.php?spread=0&moduleid=4&kw=' + $("#xiaohei_kw")[0].value);;
  });
  $("#21").click(function(){
    $('#xiaohei-search').attr('action', 'http://www.wz71888.com/news/search.php?spread=0&moduleid=21&kw=' + $("#xiaohei_kw")[0].value);;
  });
  $("#22").click(function(){
    $('#xiaohei-search').attr('action', 'http://www.wz71888.com/invest/search.php?spread=0&moduleid=22&kw=' + $("#xiaohei_kw")[0].value);;
  });
});