/**
 * Created by LYJ on 2016/5/31.
 */
$().ready(function(){
    //清空输入框
    $("#cat_name").val("");
    $(".cat_add").click(function(){
        var cat_name=$("#cat_name").val().trim();
        if(cat_name==""){
            $(".tips").css({"display":"block","color":"red"});
            $(".tips").html("分类名不能为空");
        }else{
            $.post(CONTROLLER+"/categoryAdd",{cat_name:cat_name},function(data){
                if(data['state']){
                    $(".tips").css({"display":"block","color":"green"});
                    $(".tips").html(data['msg']);
                    location.href=CONTROLLER+"/index";
                }else{
                    $(".tips").css({"display":"block","color":"red"});
                    $(".tips").html(data['msg']);
                }
            });
        }
    });
    //点击删除按钮事件
    $(".del").click(function(e){
        var id=$(e.target).attr('id').substring(3);
        if(confirm("是否删除该分类以及其子分类")){
            del(id);
        }
    });
    //删除函数
    function del(id){
        $.post(CONTROLLER+"/categoryDel",{cat_id:id},function(data){
            if(data['state']){
                $(".tr"+id).remove();
            }else{
                alert("删除失败");
            }
        });
    }
    //修改事件
    $(".modify").click(function(e){
        //获取所点击的分类信息
        var id=$(e.target).attr("id").substring(6);
        var cat_name=$(".tr"+id+" td a").html();
        $("#newName").val(cat_name);
        $("#cat_id").val(id);
    });
    //修改功能实现
    $(".save").click(function(){
        var newName=$("#newName").val().trim();
        var id=$("#cat_id").val();
        if(newName==""){
            $(".tips").css({"display":"block","color":"red"});
            $(".tips").html("分类名不能为空");
        }else{
            $.post(CONTROLLER+"/categoryModify",{cat_id:id,cat_name:newName},function(data){
                if(data['state']){
                    location.href=CONTROLLER+"/index";
                }else{
                    $(".tips").css({"display":"block","color":"red"});
                    $(".tips").html(data['msg']);
                }
            });
        }
    });
    //首页显示
    $("input[name='is_index']").click(function(e){
        //获取改组数据的id
        var id=$(e.target).attr("id").substring(8);
        if($(e.target).is(':checked')){ //被选中
            var is_index=1;
        }else{      //未被选中
            var is_index=0;
        }
        $.post(CONTROLLER+"/isIndex",{
            cat_id:id,
            is_index:is_index,
        });
    });
    //添加子类别
    $(".addSub").click(function(e){
        var id=$(e.target).attr("id").substring(6);
        $(".add").click(function(e){
            var cat_name=$("input[name='sub_name']").val().trim();
            if(cat_name==""){
                $(".tips").css({"display":"block","color":"red"});
                $(".tips").html("分类名不能为空");
            }else{
                $.post(CONTROLLER+"/categoryAdd",{
                    cat_name:cat_name,
                    pid:id,
                },function(data){
                    if(data['state']){
                        $(".tips").css({"display":"block","color":"green"});
                        $(".tips").html(data['msg']);
                        location.href=CONTROLLER+"/index";
                    }else{
                        $(".tips").css({"display":"block","color":"red"});
                        $(".tips").html(data['msg']);
                    }
                });
            }
        });
    });
});