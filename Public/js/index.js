$().ready(function(){
  $(".classify li").mouseenter(function(e) {
    $(".classify li").removeClass('leave');
    $(this).addClass('enter');
  });

  $(".classify li").mouseleave(function(e) {
    
  });
});