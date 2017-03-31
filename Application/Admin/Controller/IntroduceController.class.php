<?php
/**
 * 后台Index相关
 */
namespace Admin\Controller;
use Think\Controller;
class IntroduceController extends CommonController {

    public function index()
    {
        $data = array();
        $page = $_REQUEST['p'] ? $_REQUEST['p'] : 1;
        $pageSize = $_REQUEST['pageSize'] ? $_REQUEST['pageSize'] : 10;
        $positions = D("Position")->getPosition($data, $page, $pageSize);
        $positionCount = D("Position")->getPositionCount($data);
        $res = new \Think\Page($positionCount, $pageSize);
        $pageRes = $res->show();
        $this->assign('pageRes', $pageRes);
        $this->assign('position', $positions);
        $this->display();
    }

    public function add()
    {
        if($_POST){
            if(!isset($_POST['content'])||!$_POST['content']){
                return show(0, '公司简介不能为空');
            }
            if($_POST['introduce_id']){
                return $this->save($_POST);
            }else{
                return show(0,"保存失败");
            }
        }else{
            return show(0,"保存失败");
        }
    }

    public function edit(){
            $menuId = 17;
            $data = D("Introduce")->getNewsContentFromId($menuId);
            $this->assign('data',$data);
            $this->display();
    }
    
    public function save($data){
        unset($data['introduce_id']);
        try{
            $id = D("Introduce")->updateNewsContentById(17,$data);
            if($id ==false){
                return show(0,'更新失败');
            }else{
                return show(1,'更新成功');
            }
        }catch (Exception $e){
            return show(0,$e->getMessage());
        }
    }
    
    public function setStatus(){
        try{
            if($_POST){
                $id = $_POST['id'];
                $status = $_POST['status'];
            }
            $id = D("Menu")->updateStatusById($id,$status);
            if($id == false){
                if($status == -1){
                    return show(0,'删除失败');
                }
                return show(0,'修改失败');
            }else{
                if($status == -1){
                    return show(0,'删除成功');
                }
                return show(1,'修改成功');
            }
        }catch (Exception $e){
            return show(0,$e->getMessage());
        }
        
        return show(0, "没有提交的数据");
    }
}