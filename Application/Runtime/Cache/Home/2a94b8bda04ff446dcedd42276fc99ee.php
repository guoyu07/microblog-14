<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <title>Think-ping</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="/Public/css/index.css">
    <style>
        .navbar {
            min-height: 44px;

        }

        .navbar-form {
            margin: 0;
        }

        .navbar-nav.header_nav_edit > li > a {
            padding: 0 10px;
        }

        .header_nav {
            font-size: 16px;
        }

        .header_navbar {
            background-color: #eaf3f7;
        }

        .header_nav_list li {
            height: 46px;
            overflow: hidden;

        }

        @media (max-width: 992px) {
            .header_nav_list {
                height: auto;
            }

            .header_nav_list a {
            }

        }

        .header_nav_list li {
            border-bottom: 4px solid #eaf3f7;
        }

        .header_nav_list a {
            border-bottom: 4px solid #0084b4;
        }

        .navbar-default .navbar-nav > li > a {
            color: #66757f;
        }

        .header_nav_list li {
        }

        .header_nav_list li a {

            height: 46px;;
            transition: all .15s ease-in-out

        }

        .header_nav_list li a.tc {
            height: 42px;
        }

        .header_nav_list li a:hover {
            height: 42px
        }

        .navbar-default .navbar-nav > li > a:hover {
            color: #0084b4;

        }

        .header_nav_input {
            margin-top: 8px;
        }

        .header_nav_edit_first {
            margin-top: 10px;
        }

        .header_nav_edit_second {
            margin-top: 4px;
        }

        .body {
            padding-left: 0;
            padding-right: 0;
            padding-top: 70px;
            background-image: url("/Public/images/body_bg.jpg");
            height: 768px;

        }

        /*.content_left_top{*/
        /*padding-top: 20px;*/
        /*background-color: #ffffff;*/
        /*height: 260px;*/
        /*}*/
        .content_left_top_color {
            background-color: #2b7bb9;
            height: 120px;
            border-radius: 8px 8px 0 0;
            box-shadow: 4px 4px 6px #666;
        }

        .content_left_top_user {
            background-color: #ffffff;
            height: 120px;
            border-radius: 0 0 8px 8px;
            box-shadow: 4px 4px 6px #666;
        }

        .content_left_bottom {
            margin-top: 20px;
            background-color: #ffffff;
            height: 300px;
            border-radius: 8px;
            box-shadow: 4px 4px 6px #666;
        }

        .content_left_bottom ul {
            list-style: none;
        }

        .camera {
            position: absolute;
            top: 90px;
            left: 25px;
            border: 4px solid #ffffff;
            border-radius: 8px;
        }

        .camera span {
            padding: 10px 10px;
        }

        .camera input {
            width: 244px;
        }

        .content_user {
            padding-left: 100px;
        }

        .user_info {
            margin-top: 20px;
            padding-bottom: 8px;
            border-bottom: 0;
        }

        .user_info a {
            text-decoration: none;
        }

        .user_info dl dt a {
            color: #8c9ca9;
        }

        .user_info a:hover {
            color: #0084B4;
        }

        .edit_blog {
            background-color: #e5f2f7;
            border-color: #BFE0EC !important
        }

        .edit_blog img {
            border-radius: 8px;
            width: 32px;
            height: 32px;
        }

        .new_blog {
            width: 530px;
            float: right;
            background-color: #ffffff;
            padding: 6px 0;
            border-color: #BFE0EC !important;
            margin-bottom: 0;
        }

        .edit_new_blog {
            width: 580px;
            padding-left: 50px;
            display: none;
        }

        .operate_edit_new_blog > button {
            color: #0084B4;
            background-color: #e5f2f7;
            padding: 8px;
        }

        .operate_edit_new_blog > button:hover {
            color: #0084B4;
            border: 1px solid #0084B4;
        }

        .operate_edit_new_blog {
            padding-top: 5px;
        }

        .operate_edit_new_blog > span {
            float: right;
            padding-top: 10px;
            padding-right: 6px;
        }

        .operate_edit_new_blog_btn {
            float: right;
            font-size: 10px;
        }

        .blog_content {
            background-color: #eaf1f5;
        }

        .blog_content_left {
            padding-left: 0;
            padding-right: 0;
        }

        .blog_content_right {
            padding-left: 0;
            padding-right: 0;
        }

        .blog_content_right img {
            max-width: 486px;
        }

        .blog_operate {
            padding-top: 10px;
        }

        .recommend_operate {
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .blog_attention {
            padding-top: 8px;
        }

        .content_right_top {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 4px 4px 6px #666;
        }

        .content_mid {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 4px 4px 6px #666;
        }

        .content_right_copyright {
            background-color: #ffffff;
            height: 300px;
            border-radius: 8px;
            box-shadow: 4px 4px 6px #666;
        }

        .content_right_copyright ul {
            padding-left: 0;
        }

        .content_right_copyright ul li {
            float: left;
            list-style: none;
            padding: 4px 6px;
        }

        .content_right_copyright ul li a {
            font-size: 10px;
            color: #8899a6;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-default header_navbar navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse header_nav_content" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav header_nav_list">
                <li><a href="#" class="tc"><span class="glyphicon glyphicon-home"></span> 首页<span class="sr-only">(current)</span></a>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-bell"></span> 通知</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> 私信</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-eye-open"></span> 发现</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right header_nav_edit">
                <li class="header_nav_edit_first">
                    <a href="#" class="dropdown-toggle"data-toggle="dropdown" role="button" aria-expanded="false">
                        <button type="button" class="btn btn-info btn-lg edit_user_info" data-toggle="tooltip" data-placement="bottom" title="个人资料与账号">
                            <span class="glyphicon glyphicon-asterisk" aria-hidden="true">  </span>
                        </button>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
                <li class="header_nav_edit_second">
                    <a href="#">
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                                data-target="#myModal">
                            <span class="glyphicon glyphicon-tree-deciduous"></span> 发威
                        </button>
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">撰写新微博</h4>
                                    </div>
                                    <div class="modal-body ">
                                        <textarea class="form-control " rows="6"></textarea>
                                    </div>
                                    <div class="modal-footer ">
                                        <button type="button" class="btn btn-default" ><span
                                                class="glyphicon glyphicon-camera"></span> 添加照片
                                        </button>
                                        <button type="button" class="btn btn-default"><span
                                                class="glyphicon glyphicon-map-marker"></span> 禁用位置
                                        </button>
                                        <button type="button" class="btn btn-primary btn-lg ">
                                            <span class="glyphicon glyphicon-tree-deciduous" ></span> 发威
                                        </button>
                                        <span>140</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <form class="navbar-form navbar-right header_nav_search" role="search">
                <div class="form-group header_nav_input">
                    <input type="text" class="form-control" placeholder="搜索">
                </div>
            </form>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="container-fluid">
    <div class="row">

        <div class="body col-md-12">
            <div class="content col-md-12">
                
                <div class="content_left col-md-3">
                    <div class="content_left_top">
                        <div class="content_left_top_color"></div>
                        <div class="content_left_top_user">
                            <div class="content_user">
                                <div class="content_username"><a href=""><?php echo ($user_info["username"]); ?></a></div>
                                <span><a href="">@s422714992</a></span>
                            </div>
                            <div class="user_info col-md-12">
                                <dl class="col-md-4">
                                    <dt><a href="">微文</a></dt>
                                    <dd><a href="">51</a></dd>
                                </dl>
                                <dl class="col-md-4">
                                    <dt><a href="">关注中</a></dt>
                                    <dd><a href="">112</a></dd>
                                </dl>
                                <dl class="col-md-4">
                                    <dt><a href="">关注者</a></dt>
                                    <dd><a href="">531</a></dd>
                                </dl>
                            </div>
                        </div>
                        <div class="camera">
                            <button type="button" class="btn btn-primary btn-lg" data-container="body"
                                    data-toggle="popover">
                                <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                    <div class="content_left_bottom ">
                        <div class="col-md-12">
                            <b>趋势</b>
                            <span> - </span>
                            <a href="">更改</a>
                        </div>
                        <div>
                            <ul class="col-md-12">
                                <li><a href="">今天好冷啊</a></li>
                                <li><a href="">今天好冷啊</a></li>
                                <li><a href="">今天好冷啊</a></li>
                                <li><a href="">今天好冷啊</a></li>
                                <li><a href="">今天好冷啊</a></li>
                                <li><a href="">今天好冷啊</a></li>
                                <li><a href="">今天好冷啊</a></li>
                                <li><a href="">今天好冷啊</a></li>
                                <li><a href="">今天好冷啊</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content_mid col-md-6 well">
                    <div class="edit_blog col-md-12 well">
                        <div class="col-md-1">
                            <img class="edit_blog_pic" src="/Public/images/edit_pic.png" alt=""/>
                        </div>
                        <div class="">
                            <div class="new_blog well" id="new_blog">有什么新鲜事?</div>
                            <div class="edit_new_blog">
                                <textarea class="form-control main_content" rows="6" id="new_content"></textarea>

                                <div class="operate_edit_new_blog">

                                    <button type="button" class="btn btn-default" id="camera"><span
                                            class="glyphicon glyphicon-camera"></span> 添加照片
                                    </button>
                                    <button type="button" class="btn btn-default" id="no_position"><span
                                            class="glyphicon glyphicon-map-marker"></span> 禁用位置
                                    </button>
                                    <button type="button" class="btn btn-primary btn-lg operate_edit_new_blog_btn"
                                            id="">
                                        <span class="glyphicon glyphicon-tree-deciduous" id="send_wei"></span> 发威
                                    </button>
                                    <span>140</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main">
                        <?php if(is_array($article)): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="blog_content col-md-12">
                                <div class="col-md-2 blog_content_left">
                                    <img src="/Public/images/user_pic.jpeg" alt=""/>
                                </div>
                                <div class="col-md-10 blog_content_right">
                                    <div class="blog_content_header">
                                        <a href=""><strong><?php echo ($user_info["nickname"]); ?></strong></a>
                                        <a href=""><span>@TTTTTT -</span></a>
                                        <span> <?php echo (date("Y-m-d H:i:s",$v["time"])); ?></span>
                                    </div>
                                    <div class="">
                                        <span><?php echo ($v["content"]); ?></span>
                                    </div>
                                    <div class="blog_med">
                                        <img src="/Public/images/blog_pic.png" alt=""/>
                                    </div>
                                    <div class="blog_operate " data-id="<?php echo ($v["id"]); ?>">
                                        <a href="javascript: void 0" class="col-md-2">
                                            <span class="glyphicon glyphicon-share-alt"></span>
                                        </a>
                                        <a href="javascript: void 0" class="col-md-2">
                                            <span class="glyphicon glyphicon-random"></span>
                                            <span>112</span>
                                        </a>
                                        <a href="javascript:void 0" class="col-md-2 do_good">
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <span><?php echo ($v["good"]); ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <div class="content_right col-md-3 ">
                    <div class="content_right_top col-md-12 well">
                        <div class="">
                            <span><strong>推荐关注</strong> - </span>
                            <a href=""><span> 刷新 -</span></a>
                            <a href=""><span> 查看全部</span></a>
                        </div>
                        <div class="attention_box">
                            <div class="">
                                <div class="col-md-3">
                                    <a href="">
                                        <img src="/Public/images/content_right_pic.jpeg" alt=""/>
                                    </a>
                                </div>
                                <div class="col-md-9">
                                    <div class="recommend_operate">
                                        <a href="" class="">
                                            <a href=""><strong>DDDDDDD</strong></a>
                                            <a href="">@aaaaaaa</a>
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </a>
                                    </div>
                                    <span>被 <a href="">张学友等人</a> 关注</span>

                                    <div class="blog_attention">
                                        <button type="button" class="btn btn-danger ">
                                            <span class="glyphicon glyphicon-eye-open"></span> 关注
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <div class="">
                                <div class="col-md-3">
                                    <a href="">
                                        <img src="/Public/images/content_right_pic.jpeg" alt=""/>
                                    </a>
                                </div>
                                <div class="col-md-9">
                                    <div class="recommend_operate">
                                        <a href="" class="">
                                            <a href=""><strong>DDDDDDD</strong></a>
                                            <a href="">@aaaaaaa</a>
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </a>
                                    </div>
                                    <span>被 <a href="">张学友等人</a> 关注</span>

                                    <div class="blog_attention">
                                        <button type="button" class="btn btn-danger ">
                                            <span class="glyphicon glyphicon-eye-open"></span> 关注
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <div class="">
                                <div class="col-md-3">
                                    <a href="">
                                        <img src="/Public/images/content_right_pic.jpeg" alt=""/>
                                    </a>
                                </div>
                                <div class="col-md-9">
                                    <div class="recommend_operate">
                                        <a href="" class="">
                                            <a href=""><strong>DDDDDDD</strong></a>
                                            <a href="">@aaaaaaa</a>
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </a>
                                    </div>
                                    <span>被 <a href="">张学友等人</a> 关注</span>

                                    <div class="blog_attention">
                                        <button type="button" class="btn btn-danger ">
                                            <span class="glyphicon glyphicon-eye-open"></span> 关注
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href=""><span>热门账号</span></a>
                                <span> - </span>
                                <a href=""><span>查找好友</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="content_right_copyright col-md-12 well">
                        <ul class="col-md-12">
                            <li><a href="">©2015Twitter</a></li>
                            <li><a href="">关于</a></li>
                            <li><a href="">帮助</a></li>
                            <li><a href="">条款</a></li>
                            <li><a href="">隐私</a></li>
                            <li><a href="">Cookies</a></li>
                            <li><a href="">广告信息</a></li>
                            <li><a href="">商标</a></li>
                            <li><a href="">博客</a></li>
                            <li><a href="">状态</a></li>
                            <li><a href="">应用</a></li>
                            <li><a href="">工作机会</a></li>
                            <li><a href="">广告</a></li>
                            <li><a href="">企业</a></li>
                            <li><a href="">媒体</a></li>
                            <li><a href="">开发者</a></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="/Public/js/home.js"></script>
<script>
    $(function () {

    })
</script>
</body>
</html>