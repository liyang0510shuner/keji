<?php
namespace app\index\controller;
use think\Controller;
class People extends Controller
{

       //个人中心
    public function index()
    {
    	return view('index');
    }
    //个人资料
    public function my_info()
    {
    	return view('my_info');
    }
    //上传头像
    public function make_head()
    {
    	return view('make_head');
    }
    //身份证审核
    public function identity_prove()
    {
    	return view('identity_prove');
    }
    //修改密码
    public function make_password()
    {
    	return view('make_password');
    }
    //我的账户
    public function my_account()
    {
    	return view('my_account');
    }
    //申请退款
    public function apply_refund()
    {
    	return view('apply_refund');
    }
    //等级说明
    public function grade_integration()
    {
    	return view('grade_integration');
    }
    //等级记录说明
    public function integration_record()
    {
    	return view('integration_record');
    }
    //积分规则
    public function integration_rule()
    {
    	return view('integration_rule');
    }
    //收件箱
    public function inbox()
    {
    	return view('inbox');
    }
    //系统消息
    public function xitong()
    {
    	return view('xitong');
    }
    //上传景区图片提示页
    public function pp()
    {
    	return view('pp');
    }
   }