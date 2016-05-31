$().ready(function(){
	$("form button").click(function (){
		var adminName=$("#adminName").val().trim();
		if(adminName==""){
			$(".tips").css("display","block");
			$(".tips").html("不能为空");
		}else{
			$.post(CONTROLLER+"/adminAdd",{adminName:adminName},function(data){
				if(data['state']){
					location.href=CONTROLLER+"/admin";
				}else{
					$(".tips").css("display","block");
					$(".tips").html(data['error']);
				}
			});
		}
		//禁止表单提交跳转
		return false;
	});
	//点击事件
	$(".del").click(function(e){
		var id=$(e.target).attr("id").substring(3);
		if(confirm("确定要删除该管理员？")){
			del(id);
		}
	});
	//删除函数
	function del(id){
		$.post(CONTROLLER+"/adminDel",{a_id:id},function(data){
			if(data['state']){
				$(".tr"+id).remove();
			}else{
				alert("删除失败");
			}
		});
	}
});