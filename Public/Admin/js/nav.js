/**
 * Created by LYJ on 2016/5/21.
 */
$().ready(function(){
    //失去焦点时动态提示
    $("input").blur(function(){
        if($.trim($("input").val())==""){
            $("form i").css('display','block');
            $("form i").html("不能为空");
            return false;
        }else{
            $("form i").css('display','none');
            $("form i").html("");
        }
    });
    //点击提交事件
    $("form botton").click(function(){
        var name=$.trim($("input").val());
        if(name==""){
            $("form i").css('display','block');
            $("form i").html("不能为空");
            return false;
        }else{
            $.post(CONTROLLER+'/navAdd',{name:name},function(data){
                if(data['state']){
                    $("input").val('');
                    location.href="http://localhost/shop/index.php/Admin/Index/nav";
                }else{
                    $("form i").css('display','block');
                    $("form i").html(data['error']);
                }
            });
        }
    });
    //确认删除？
    $(".del").click(function(e){
        if(confirm("确认删除？")){
            var id=$(e.target).attr("id").substring(3);
            del(id);
        }else{
            return false;
        }
    });
});

//删除功能的实现
function del(id){
    $.post(CONTROLLER+'/navDel',{n_id:id},function(data){
        if(data['state']){
            $(".tr"+id).remove();
        }
    });
}

//首页显示功能的实现
function showIndex(id){
    $.post(CONTROLLER+'/showIndex',{n_id:id},function(data){
        if(data['state']){
            $("#show"+id).attr("disabled",true);
            $("#hide"+id).attr("disabled",false);
        }
    });
}
//首页隐藏功能的实现
function hideIndex(id){
    $.post(CONTROLLER+'/hideIndex',{n_id:id},function(data){
        if(data['state']){
            $("#hide"+id).attr("disabled",true);
            $("#show"+id).attr("disabled",false);
        }
    });
}