<?php
namespace Admin\Controller;

use Common\Controller\CommonController;

class SystemController extends CommonController
{
    function __construct()
    {
        parent::__construct();
        $this->assign("c", CONTROLLER_NAME);
    }

    public function system()
    {
        $this->display();
    }

    public function nav()
    {
        $this->display();
    }

    function register()
    {
        $this->display();
    }
    function invite()
    {
        $this->display();
    }

    function microblog()
    {
        $this->display();
    }
    function email()
    {
        $this->display();
    }
    function attachment()
    {
        $this->display();
    }
    function visiter()
    {
        $this->display();
    }
}