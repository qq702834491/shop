$().ready(function(){
	$("form button").click(function (){
		var adminName=$("#adminName").val();
		if(adminName==""){
			$(".tips").css("display","block");
			$(".tips").html("不能为空");
			return false;
		}else{
			$.post();
		}		
	});

});