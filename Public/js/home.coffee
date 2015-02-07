$ ->
  $(".new_blog").click ->
    $(".edit_new_blog").show()
    $(".edit_new_blog textarea").focus()
    $(this).hide()
    false

  $("body").click (e)->
    id = (e.target.id)
    array = ["new_content", "camera", "no_position", "send_wei"]
    if id in array
      return true

    if $(".edit_new_blog").is(":visible")
      $(".new_blog").show()
      $(".edit_new_blog").hide()

  #发表新微博
  $(".operate_edit_new_blog_btn").click ->
    content = $(".main_content").val()
    $.post "/index.php/home/index/do_add_article", {content: content}, (data) ->
      if data.status is 1
        html = "<div class='blog_content col-md-12' style='display: none'>
                <div class='col-md-2 blog_content_left'>
                  <img src='/Public/images/user_pic.jpeg' alt=''/>
                </div>
                <div class='col-md-10 blog_content_right'>
                    <div class='blog_content_header'>
                        <a href=''><strong>哥不灵</strong></a>
                        <a href=''><span>@TTTTTT -</span></a>
                        <span> #{data.time}</span>
                </div>
                <div class=''>
                    <span>#{content}</span>
                </div>
                <div class='blog_med'>
                  <img src='/Public/images/blog_pic.png' alt=''/>
                </div>
                <div class='blog_operate '>
                  <a href='' class='col-md-2'>
                      <span class='glyphicon glyphicon-share-alt'></span>
                  </a>
                  <a href='' class='col-md-2'>
                    <span class='glyphicon glyphicon-random'></span>
                    <span>112</span>
                  </a>
                  <a href='' class='col-md-2'>
                    <span class='glyphicon glyphicon-star-empty'></span>
                    <span>251</span>
                  </a>
                </div>
              </div>
            </div>"

        $(html).prependTo(".main").fadeIn "800"
        $(".edit_new_blog textarea").val("")


  #工具提示
  $('[data-toggle="tooltip"]').tooltip()


#点赞
  $(".do_good").click ->
    do_good = $(this).children("span").eq 1
    do_good_val = parseInt do_good.text()
    id = $(".blog_operate").attr "data-id"
    #console.log id
    $.post '/index.php/Home/Index/good', {id: id},
    (data) ->
      console.log data
      new_val = do_good_val + 1
      do_good.text new_val
    false





