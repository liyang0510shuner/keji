<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"H:\phpStudy\WWW\month12\tp5\public/../application/index\view\people\integration_record.html";i:1526542424;}*/ ?>

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
<title>某经融公司股权众筹站点</title>

<!-- Bootstrap -->
<link href="/static/css/bootstrap.min.css" rel="stylesheet">
<link href="/static/css/integration_record.css" rel="stylesheet">
<link href="/static/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

<!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- 开始 -->
<div class="my_info_title">积分记录<span>
  <button type="button" class="but">签到</button>
  <p>07月29日<br>
    漏签1天</p>
  </span></div>

<div class="integration_record">
  <div class="integration_record_float"> 收支
    <select>
      <option value ="--全部--">--全部--</option>
      <option value ="增加成长值">增加成长值</option>
      <option value ="减少成长值">减少成长值</option>
    </select>
    &nbsp;&nbsp;&nbsp;&nbsp;
    时间范围：</div>
  <div class="input-append date form_datetime integration_record_float">
    <input class="integration_record_time" type="text" value="" readonly>
    <span class="add-on"><i class="icon-th"></i></span> </div>
  <div class="input-append date form_datetime integration_record_float"> &nbsp;-&nbsp;
    <input class="integration_record_time"  type="text" value="" readonly>
    <span class="add-on"><i class="icon-th"></i></span> </div>
  <div class="integration_record_float"> &nbsp;&nbsp;&nbsp;&nbsp;操作&nbsp;
    <select>
      <option value ="选择操作类型">选择操作类型</option>
      <option value ="增加成长值">投入资金1元</option>
      <option value ="增加成长值">投入资金1元</option>
      <option value ="增加成长值">投入资金1元</option>
      <option value ="增加成长值">投入资金1元</option>
    </select>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" class="but2" value="查询">
  </div>
</div>
<div class="integration_record_jfjl">
  <div class="integration_record_jfjl_title"> 积分记录 <font class="font_size14">总积分为：20</font> </div>
  <div class="integration_record_jfjl_content">
    <table class="table table-bordered text-center">
      <tr class="active">
        <td>操作</td>
        <td>积分变更</td>
        <td>详情</td>
        <td>变更时间</td>
      </tr>
      <tr>
        <td>任务奖励</td>
        <td><font class="colorF00">+20</font></td>
        <td>注册会员签到</td>
        <td>2015-07-28 17:26:15</td>
      </tr>
    </table>
  </div>
  <div class="integration_record_jfjl_page">
    第 1/1 页，共1条记录
  </div>
</div>

<!-- 结束 --> 
<script src="/static/js/jquery-2.1.1.min.js"></script> 
<script src="/static/js/bootstrap.min.js"></script> 
<script src="/static/js/bootstrap-datetimepicker.min.js"></script> 
<script src="/static/js/bootstrap-datetimepicker.zh-CN.js"></script> 
<script src="/static/js/integration_record.js"></script>
<script src="/static/js/my_info.js"></script>
</body>
</html>