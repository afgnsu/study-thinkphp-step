<?php
namespace Home\Controller;
use Think\Controller;

class BlogController extends Controller{
    public function index($name){
        dump($name);
        $navigation = M('Navigation')->select();
        foreach($navigation as $key => $value){
            $where['pid'] = $value['id'];
            $res = M('Type')->where($where)->select();
            $navigation[$key]['children'] = $res;
        }
        $this->assign('navigation',$navigation);
        $this->display();
    }
    public function list($name){
        dump($name);exit;
    }

    public function read($id){
        dump($id);exit;
    }


}