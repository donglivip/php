

/* 两次密码是否一样标记 */
var pwdTwoFlag = false;

/* 跳转密码找回 */
function password_back(title,url,w,h){
	layer_show(title,url,w,h);
}
/* 判断新密码是否输入 */
$('#maPassword').blur(function() {
	var maPassword = $('#maPassword').val();
	if (maPassword == "") {
		layer.msg('请输入新密码!',{icon:2,time:2000});
	}
});
/* 判断两次输入的密码是否一样 */
$('#maPasswordTwo').blur(function() {
	var maPassword = $('#maPassword').val();
	if(maPassword == "") {
		layer.msg('请输入新密码!',{icon:2,time:2000});
		return;
	}
	var maPasswordTwo = $('#maPasswordTwo').val();
	if (maPassword != maPasswordTwo) {
		layer.msg('两次输入的密码不一致,请检查!',{icon:2,time:2000});
	} else {
		pwdTwoFlag = true;
	}
});

/* 提交修改后的密码 */
$('#submit').click(function() {
	if (!pwdTwoFlag) {
		layer.msg('两次输入的密码不一致,请检查!',{icon:2,time:2000});
		return;
	}
	
	$(this).ajaxSubmit({
		type: 'POST',
		url: '',
		success: function(res) {
			if (res.status == 200) {
				$('.layd').hide();
				alert('操作成功!');
				window.location.href = '/acceptReasonNo';
			} else {
				alert(res.msg);
			}
		},
		error: function(res) {
			console.log(res);
		}
	});
});