var _inx =(function(p){
	var obj = {
			keyword : {},
		    homeUrl : '',
		  staticUrl : '',
		    userUrl : ''
	};
	obj.initParam = function(args){
		   this.keyword['value'] = args[0];
		   this.homeUrl = args[1];
		   this.staticUrl = args[2];
		   this.userUrl = args[3];
	}
	obj.initVal = function(){
		//删除 top 首页
		$("#hn_home_id").remove();
		//日期初始化
		var _d = getHomeDate();
		$(".side-cal .title span").html(_d.ymd);
		$(".side-cal .title em").html(_d.weekday);
		$(".side-cal .inner img").attr("alt",_d.lmonth+""+_d.lday);
		$(".side-cal .inner .month").html(_d.lmonth);
		$(".side-cal .inner .day").html(_d.lday);
	};

		
	
	//初始化参数
    obj.initParam(p);
    obj.initVal();
    obj.initLogonUserPanel();
    //获取供应数据，并设置列表值
  //  obj.getSupplyList();
    
	
})(param);


function turnMyhnPoint(){
	var userWeb=param[3];
	window.open(userWeb+"sellers/userlevel");
}

function turnMyhn(){
	/*
	var userWeb=param[3];
	window.open(userWeb+"buyers/goCertification");
	*/
	return false;
}

function getLoginUserInfo(data){
	initLogonUserInfo(data);
	loginCallback(data);
};



//面板处登录状态
function initLogonUserInfo(data){
	if(data){
		var userId = data.userId;
    	var username = data.username;
		if(userId!=null&&userId!=""){
			$(".side-log .btns").hide();
			$(".side-log .user").show();
			if($.trim($(".side-log .user .name em").text()) == ""){
				$(".side-log .user .name em").text( username || "");
			}
    	}
	}

}
