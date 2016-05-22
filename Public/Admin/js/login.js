/**
 * Created by LYJ on 2016/5/22.
 */
$().ready(function(){
    $("form button").click(function(){
        len=$("form input").length;
        for(var i=0;i<len;i++){
            if($("form input").eq(i).val()==""){
                $(".tips").css("display","block");
                $(".tips").html("请填写完整信息");
                return false;
            }
        }
        var username=$("form input").eq(0).val();
        var pwd=$("form input").eq(1).val();
        var vcode=$("form input").eq(2).val();
        $.post(CONTROLLER+'/login', {
            username:username,
            pwd:pwd,
            vcode:vcode,
        },function(data){
            if(data['state']){
                //登录成功跳转到后台首页
                location.href=MODULE+"/Index/index";
            }else{
                $(".tips").css("display","block");
                $(".tips").html(data['error']);
                //模拟验证码点击事件
                $("form img").trigger("click");
            }
        });
        //禁止form表单提交会刷新的事件
        return false;
    });
});