<?php
namespace Home\Controller;

use Common\Controller\CommonController;

class LoginController extends CommonController
{
    function __construct()
    {
        parent::__construct();
        $this->user = M("user");
    }

    function login()
    {
        $this->display();
    }

    //登陆检查
    function do_login()
    {
        if (IS_POST) {
            $username = I('post.username');
            $password = md5(I('post.password'));
            //dump($password);
            $user = $this->user->where("username='$username' and password='$password'")->find();
            //echo $this->user->getLastSql();//打印最后一条SQL语句(getLastSql()为驼峰法命名)
            if (!$user) {
                $this->error("用户不存在!","login",1);
            } else {
                //注册SESSION 保存用户信息
                $_SESSION["user"] = $user;
                //其它页面判断是否登陆成功
                $_SESSION["is_user_login"] = 1;

                $this->success('恭喜您登陆成功', U('Home/Index/index'));
            }
            // console.log ($this->user->create());

        }
    }

}