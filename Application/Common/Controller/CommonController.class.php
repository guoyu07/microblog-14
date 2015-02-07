<?php
namespace Common\Controller;

use Think\Controller;

class CommonController extends Controller
{
    function __construct()
    {
        parent::__construct();

        if (MODULE_NAME == "Home") {
            $this->check_user_login();
        }
    }

    function check_user_login()
    {
        if (CONTROLLER_NAME == "Login" and (ACTION_NAME == "login" or ACTION_NAME == "do_login")) {
            return true;
        }
        if (isset($_SESSION["is_user_login"]) and $_SESSION["is_user_login"] == 1) {
            $this->assign("user_info",session("user"));
            return true;
        }
        $this->error("请登陆后再访问!", U('Home/login/login'));
    }
}