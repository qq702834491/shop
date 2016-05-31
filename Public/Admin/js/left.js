/**
 * Created by LYJ on 2016/5/30.
 */
//修改密码相关的js代码，主要是判空，ajax提交
$().ready(function(){
    $("#changeBtn").click(function(){
        //过滤空格
        var oldPwd=$("#oldPwd").val().trim();
        var newPwd=$("#newPwd").val().trim();
        var confirmPwd=$("#confirmPwd").val().trim();
        if(oldPwd==""||newPwd==""){
            $(".tips").css({"display":"block","color":"red"});
            $(".tips").html("请填写完整信息（不能包含空格）");
        }else if(newPwd!==confirmPwd){
            $(".tips").css({"display":"block","color":"red"});
            $(".tips").html("两次输入密码不一致");
        }else{
            //ajax发送信息给后台处理
            $(".tips").css("display","none");
            $(".tips").html("");
            $.post(MODULE+"/User/changePwd",{
                oldPwd:oldPwd,
                newPwd:newPwd,
            },function(data){
                if(data['state']){
                    $(".tips").css({"display":"block","color":"green"});
                    $(".tips").html(data['success']);
                }else{
                    $(".tips").css({"display":"block","color":"red"});
                    $(".tips").html(data['error']);
                }
            });
        }
    });
});