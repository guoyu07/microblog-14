
$(function(){
    //$(".list-groups1 a").click(function(){
    //    $(this).addClass("active").siblings().removeClass("active");
    //})
    //基本信息
    $(".header_nav li").click(function(){
        $(this).addClass("active").siblings().removeClass("active");
        //var index=$(".header_nav>li.active").index();
        //$(".body_left>div").eq(index).show().siblings().hide();
    });

    //管理日志选项卡
    $(".article_manage .nav li").click(function(){
        $(this).addClass("active").siblings().removeClass("active");
        var index = $(".article.active").index();
        $(".article_box .article_list").eq(index).show().siblings().hide();
        //alert(index);

    });

    $(".upload_btn input").click(function(){
        $(".add_image img").show();
    })
})