$(function(){
});
/*个人信息*/
function password_back(title,url,w,h){
	layer_show(title,url,w,h);
}

$(document).ready(function() {
	$("#city").citySelect({
		prov: "北京",
		dist: "朝阳区",
		nodata: "none"
	});
});
