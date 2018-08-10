

$(function(){
	/* 隐藏数据搜索功能 */
	$('#DataTables_Table_0_filter').hide();
	
	/* 取消按钮事件 */
	$('.btn-default').click(function() {
		window.parent.location.reload();
	});
	
	$('button').click(function() {
		$('button').eq(1).css({"background-color":"#AD1212","border-color":"#AD1212"});
	});
});



/*用户审核-删除*/
function article_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '',
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}

/*用户审核-审核*/
function article_shenhe(title,url,id,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

