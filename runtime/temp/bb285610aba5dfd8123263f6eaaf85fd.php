<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"H:\phpStudy\WWW\month12\tp5\public/../application/index\view\people\index.html";i:1526625787;s:66:"H:\phpStudy\WWW\month12\tp5\application\index\view\common\top.html";i:1525943202;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="revised" content="Ningxia Seasons, 2015/8/13/" />
<!-- 定义页面的最新版本 -->
<meta name="description" content="网站简介" />
<!-- 网站简介 -->
<meta name="keywords" content="搜索关键字，以半角英文逗号隔开" />
<!-- 搜索关键字 -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>古北水镇- 个人中心</title>


<!-- CSS公共部分 开始 -->
<link href="/static/css/bootstrap.min.css" rel="stylesheet">
<!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href="/static/css/style.css" rel="stylesheet">
<!-- CSS公共部分 结束 -->

<link href="/static/css/crowdfunding.css" rel="stylesheet">

</head>
<body>
<!-- top + banner 开始 -->


<!-- top + banner 结束 -->
<!-- 核心 开始 -->
<div class="container border1 nopadding margin10">
  <div id="vertical_navigation" class="col-lg-3 background831312 nopadding">
    <div class="dead_pic"><img src="/static/images/nopic.jpg.png"><br>
      <span class="username">用户名</span></div>
    <div class="usertype">用户类型： 跟投人<br>
      会员等级：<img style="margin-right:0px;" src="/static/images/star.png"></img> <img style="margin-right:0px;" src="/static/images/xx2.png"></img> <img style="margin-right:0px;" src="/static/images/xx2.png"></img> <img style="margin-right:0px;" src="/static/images/xx2.png"></img> <img style="margin-right:0px;" src="/static/images/xx2.png"></img> </div>
    <div class="menu">
      <div class="menu_title"> 我的信息 </div>
      <div class="menu_list">
        <ul class="list-unstyled">
          <li id="listClick1" class="menu_list_on" onClick="listClick(1,'/index.php/index/people/my_info')"><img src="/static/images/left_icon_1.png"> 基本信息</li>
          <li id="listClick2" class="" onClick="listClick(2,'/index.php/index/people/make_head')"> <img src="/static/images/left_icon_2.png"> 修改头像</li>
          <li id="listClick3" class="" onClick="listClick(3,'/index.php/index/people/identity_prove')"> <img src="/static/images/left_icon_2.png"> 身份认证</li>
          <li id="listClick4" class="" onClick="listClick(4,'/index.php/index/people/make_password')"> <img src="/static/images/left_icon_3.png"> 修改密码</li>
        </ul>
      </div>
    </div>

    <div class="menu">
      <div class="menu_title"> 我的资金管理 </div>
      <div class="menu_list">
        <ul class="list-unstyled">
          <li id="listClick8" class="" onClick="listClick(8,'/index.php/index/people/my_account')"><img src="/static/images/left_icon_8.png"> 我的账户</li>
          <li id="listClick10" class="" onClick="listClick(10,'/index.php/index/people/apply_refund')"> <img src="/static/images/left_icon_10.png"> 申请退款</li>
        </ul>
      </div>
    </div>
    <div class="menu">
      <div class="menu_title"> 我的星级和积分 </div>
      <div class="menu_list">
        <ul class="list-unstyled">
          <li id="listClick11" class="" onClick="listClick(11,'/index.php/index/people/grade_integration')"><img src="/static/images/left_icon_9.png"> 星级和积分介绍</li>
          <li id="listClick12" class="" onClick="listClick(12,'/index.php/index/people/integration_record')"> <img src="/static/images/left_icon_12.png"> 积分纪录</li>
          <li id="listClick13" class="" onClick="listClick(13,'/index.php/index/people/integration_rule')"> <img src="/static/images/left_icon_13.png"> 积分规则</li>
        </ul>
      </div>
    </div>
    <div class="menu">
      <div class="menu_title"> 我的消息 </div>
      <div class="menu_list">
        <ul class="list-unstyled">
          <li id="listClick15" class="" onClick="listClick(15,'/index.php/index/people/inbox')"> <img src="/static/images/left_icon_15.png"> 收件箱</li>
          <li id="listClick15" class="" onClick="listClick(15,'/index.php/index/people/xitong')"> <img src="/static/images/left_icon_15.png"> 系统消息</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-lg-9">
  	<iframe name="left" id="crowdfunding_iframe" src="<?php echo url('people/my_info'); ?>" frameborder="false" scrolling="no" style="border:none;" width="100%" height="1045" allowtransparency="true"></iframe>
  </div>
</div>
<!-- 核心 结束 -->

<!-- 版权 开始 -->
     <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		 <footer>
            <div class="container text-center">
                <p>
                    Gubeishuizhen &copy; 2018-2022 最牛逼有限公司 版权所有
                </p>
                <div class="powered_by_metinfo">
                    ICP备XXXXXXXX号
                </div>
            </div>
        </footer>
          <button type="button" class="btn btn-icon btn-primary btn-squared met-scroll-top hide">
            <i class="icon wb-chevron-up" aria-hidden="true">
            </i>
        </button>
        <script src="/static/js/email-decode.min.js">
        </script>
        <script src="/static/js/index.js">
        </script>
	</body>
</html>

<!-- JS公共部分 开始 -->
<script src="/static/js/jquery-2.1.1.min.js"></script>
<script src="/static/js/bootstrap.min.js"></script>
<script src="/static/js/basics.js"></script>
<!-- JS公共部分 结束 -->
<script src="/static/js/crowdfunding.js"></script>
</body>
</html>