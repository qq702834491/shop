/**
 * Created by LYJ on 2016/5/22.
 */
$().ready(function(){
    $(".submit").click(function(){
        var name=$("input[name=name]").val();
        var information=$("input[name=information]").val();
        if(name==""||information==""){
            $(".tips").css("display","block");
            $(".tips").html("请输入完整信息");
        }else{
            $.post(CONTROLLER+'/addKefu',{
                name:name,
                information:information,
            },function(data){
                if(data['state']){
                    location.href=CONTROLLER+"/kefu";
                }else{
                    $(".tips").css("display","block");
                    $(".tips").html("客服名已存在");
                }
            });
        }
    });
    //点击删除按钮
    $(".del").click(function () {
        if(confirm("确定要删除此数据？")){
            var id=$(this).attr("id").substring(3);
            delKefu(id);
        }
    });

    //删除客服操作
    function delKefu(id){
        $.post(CONTROLLER+'/delKefu',{
            k_id:id,
        },function (data) {
            if(data['state']){
                $(".tr"+id).remove();
            }
        });
    }
    //修改功能
    $(".modify").click(function(){
        var id=$(this).attr("id").substring(6);
        var name=$(".tr"+id+" td").eq(0).html();
        var information=$(".tr"+id+" td").eq(1).html();
        $("#name").val(name);
        $("#information").val(information);
    });
    //修改功能 与后台交互
    $(".save").click(function(){
        var newInfo=$("#information").val();
        var name=$("#name").val();
        if(newInfo==""){
            $(".modalTips").css("display","block");
            $(".modalTips").html("请填写联系信息");
        }else{
            $.post(CONTROLLER+'/modifyKefu',{
                name:name,
                information:newInfo
            },function (data) {
                if(data['state']){
                    location.href=CONTROLLER+"/kefu";
                }
            });
        }
    });
});