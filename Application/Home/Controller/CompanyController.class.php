<?php
namespace Home\Controller;
use Think\Controller;
class CompanyController extends Controller{
    public function index(){
        $id = intval($_GET['id']);
        if(!$id||$id<0){
            return $this->error('ID不合法');
        }
        $dataContent = D("Introduce")->getNewsContentFromId($id);
        if($dataContent){
            $news['content'] = htmlspecialchars_decode($dataContent['content']);
            $news['update_time'] = $dataContent['update_time'];
            $news['create_time'] = $dataContent['create_time'];
        }
        $this->assign("news",$news);
        $this->display("Company/index");
    }
    
    public function view(){
        if(!getLoginUsername()){
            $this->error("您没有权限访问该页面");
        }
        $this->index();
    }
    public function error($message = ''){
        $message = $message?$message:'系统发生错误';
        $this->assign('message',$message);
        $this->display("Index/error");
    }
}