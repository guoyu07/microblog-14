<?php
namespace Home\Controller;

use Common\Controller\CommonController;

class IndexController extends CommonController
{
    function __construct()
    {
        parent::__construct();
        $this->article = M("article");
        $this->user = M("user");
    }

    public function index()
    {
        $article = $this->article->order('id desc')->select();
        //dump ($article);

        $this->assign("article", $article);
        $this->display();
    }

    function do_add_article()
    {
        if (IS_POST) {
            $time = time();
            $this->article->create();
            $this->article->time = $time;
            $this->article->add();

            $data['status'] = 1;
            $data['time'] = date("Y-m-d H:i:s", $time);
            $this->ajaxReturn($data);
        }
    }


    function good()
    {
        if (IS_AJAX) {
            $id = I("post.id");
            $this->article->where("id=$id")->setInc('good');
            $this->success("1");
        }
    }
}