<?php
namespace Admin\Controller;
use Common\Controller\CommonController;
class IndexController extends CommonController {
    public function index(){
            $this->display();
    }

    function article_manage(){
        $this->display();
    }
    function send_message(){
        $this->display();
    }
    function clear_session(){
        $this->display();
    }
    function set_session(){
        $this->display();
    }
}