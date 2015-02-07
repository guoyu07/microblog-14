<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <title>欢迎来到我的微博</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="/Public/css/home.css">

    <style>

    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
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
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">语言</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">简体中文
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="main col-md-12">
            <div class="body_wellcome col-md-5 col-md-offset-1">
                <h1>欢迎使用我的微博</h1>
                <h3>联系你的好友和更多精彩。获取你感兴趣的实时更新。并通过每个视角观看事件实时呈现。</h3>
                <h5><a href="">5:02 PM - 28 Apr 201</a></h5>
            </div>
            <div class="col-md-6 body_right">
                <h2 class="login_register">
                    <a href="" class="login_btn">登陆 </a>|
                    <a href="" class="register_btn"> 注册</a>
                </h2>
                <div class="">
                    <form class="form-horizontal login col-sm-10" role="form" action="<?php echo U('do_login');?>" method="post">
                        <div class="form-group" style="padding-bottom:20px;">
                            <label for="inputEmail31" class="col-sm-3 control-label"
                                   style="font-size:15px;color:#0d701b;">账号:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control username" id="inputEmail31" name="username" placeholder="请输入账号">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword13" class="col-sm-3 control-label"
                                   style="font-size:15px;color:#0d701b;">密码:</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword13" name="password" placeholder="请输入密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class=" col-sm-9">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" > 记住我的选择
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class=" col-sm-10">
                                <button type="submit" class="btn btn-default" style="color:#0d701b;">登陆</button>
                            </div>
                        </div>
                    </form>

                    <form class="form-horizontal  register col-sm-10" role="form" action="<?php echo U('do_login');?>" method="post">
                        <div class="form-group" style="padding-bottom:20px;">
                            <label for="inputEmail3" class="col-sm-3 control-label"
                                   style="font-size:15px;color:#0d701b;">账号:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3" name="username" placeholder="用户名/邮箱/手机号">
                            </div>
                        </div>
                        <div class="form-group" style="padding-bottom:20px;">
                            <label for="inputPassword3" class="col-sm-3 control-label"
                                   style="font-size:15px;color:#0d701b;">密码:</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password" placeholder="请输入密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label"
                                   style="font-size:14px;color:#0d701b;">确认密码:</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3" name="password2" placeholder="请输入密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class=" col-sm-9">
                                <button type="submit" class="btn btn-default" style="color:#0d701b;">注册</button>
                            </div>
                        </div>
                    </form>
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
        $(function(){
            $(".register_btn").mouseenter(function(){
                if(!$(".login").is(":animated") && !$(".register").is(":animated")) {
                    $(".login").fadeOut(600);
                    $(".register").fadeIn(600);
                }
            });



            $(".login_btn").mouseenter(function(){
                if(!$(".register").is(":animated") && !$(".login").is(":animated")) {
                    $(".register ").fadeOut(600);
                    $(".login").fadeIn(600);
                }
            });
        })
    })
</script>
</body>
</html>