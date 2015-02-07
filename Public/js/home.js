(function() {
  var __indexOf = [].indexOf || function(item) { for (var i = 0, l = this.length; i < l; i++) { if (i in this && this[i] === item) return i; } return -1; };

  $(function() {
    $(".new_blog").click(function() {
      $(".edit_new_blog").show();
      $(".edit_new_blog textarea").focus();
      $(this).hide();
      return false;
    });
    $("body").click(function(e) {
      var array, id;
      id = e.target.id;
      array = ["new_content", "camera", "no_position", "send_wei"];
      if (__indexOf.call(array, id) >= 0) {
        return true;
      }
      if ($(".edit_new_blog").is(":visible")) {
        $(".new_blog").show();
        return $(".edit_new_blog").hide();
      }
    });
    $(".operate_edit_new_blog_btn").click(function() {
      var content;
      content = $(".main_content").val();
      return $.post("/index.php/home/index/do_add_article", {
        content: content
      }, function(data) {
        var html;
        if (data.status === 1) {
          html = "<div class='blog_content col-md-12' style='display: none'> <div class='col-md-2 blog_content_left'> <img src='/Public/images/user_pic.jpeg' alt=''/> </div> <div class='col-md-10 blog_content_right'> <div class='blog_content_header'> <a href=''><strong>哥不灵</strong></a> <a href=''><span>@TTTTTT -</span></a> <span> " + data.time + "</span> </div> <div class=''> <span>" + content + "</span> </div> <div class='blog_med'> <img src='/Public/images/blog_pic.png' alt=''/> </div> <div class='blog_operate '> <a href='' class='col-md-2'> <span class='glyphicon glyphicon-share-alt'></span> </a> <a href='' class='col-md-2'> <span class='glyphicon glyphicon-random'></span> <span>112</span> </a> <a href='' class='col-md-2'> <span class='glyphicon glyphicon-star-empty'></span> <span>251</span> </a> </div> </div> </div>";
          $(html).prependTo(".main").fadeIn("800");
          return $(".edit_new_blog textarea").val("");
        }
      });
    });
    $('[data-toggle="tooltip"]').tooltip();
    return $(".do_good").click(function() {
      var do_good, do_good_val, id;
      do_good = $(this).children("span").eq(1);
      do_good_val = parseInt(do_good.text());
      id = $(".blog_operate").attr("data-id");
      $.post('/index.php/Home/Index/good', {
        id: id
      }, function(data) {
        var new_val;
        console.log(data);
        new_val = do_good_val + 1;
        return do_good.text(new_val);
      });
      return false;
    });
  });

}).call(this);
