<?php
namespace app\index\controller;
use think\Controller;
use think\request;
use think\Db;
use think\Cookie;
use think\cache\driver\Redis;
class Poto extends Controller
{
    public function index()
    {
    	 $data=input('post.');     
    	 $file = request()->file('p_path');     	    
          if (empty($file)) { 
           //return alert('您好，请上传照片！','http://www.xiaosan.com/tp5/public/index.php/index/backstage/index',6,3);
         } 
    //移动到框架应用根目录/public/uploads/ 目录下 
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads'); 
        if ($info) {
        //获取当前保存路径
        $url = $info->getSaveName();
        //接收当前表单数据
        $data = $_POST;       
        $data['p_path'] = $url;
        $data['p_time']=time();
        $res=Db('scenic_photo')->insert($data);
        if($res){
        
          return $this->success('111','people/pp');
        }else{
             return '11111';
       
        }


       } else { 
      //上传失败获取错误信息 
        $this->error($file->getError()); 
      }  
    }
  
  
  
  }