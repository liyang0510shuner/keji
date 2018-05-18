<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"H:\phpStudy\WWW\month12\tp5\public/../application/index\view\ticket\index.html";i:1526476175;s:66:"H:\phpStudy\WWW\month12\tp5\application\index\view\common\tou.html";i:1526455482;s:66:"H:\phpStudy\WWW\month12\tp5\application\index\view\common\top.html";i:1525943202;}*/ ?>

<!DOCTYPE html>
<html lang="en">
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?0791a2f9676aee83f8e9a84788e1bb74";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<head>
    <!--<meta http-equiv=”X-UA-Compatible” content=”IE=edge,chrome=1″ />-->
    <!--<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8"/>-->
    <meta charset="UTF-8">
    <META HTTP-EQUIV="pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Cache-Control" CONTENT="no-cache,must-revalidate">
    <META HTTP-EQUIV="expires" CONTENT="0">
    <meta name="Description" content="古北水镇预订网是古北水镇景区旗下官方预订网站，提供景区内各类套餐、自由行产品等预订服务，让您省钱更省心。">
    <title>
        票务预订 - 古北水镇官方预订网站
    </title>
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="/static/css/base.css" rel="stylesheet">

    <link href="/static/css/verticalslide.css" rel="stylesheet"/>
    <link href="/static/css/ticket.css" rel="stylesheet">
    <style>
        .createMask {
            z-index: 9998;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000;
            opacity: 0.4;
            filter: alpha(opacity=40);
            display: none;
            cursor: pointer;
        }

        .alertBox {
            text-align: center;
            box-shadow: 0 0 0 #fff;
            border: 0;
            border-radius: 0;
            z-index: 9999;
            position: fixed;
            top: 60%;
            left: 50%;
            width: 460px;
            margin: -220px 0 0 -230px;
            background-color: #fff;
            display: block;
            padding: 20px 20px;
        }

        .alertBox h3 {
            font-size: 18px;
            font-weight: bold;
        }

        .alertBox p {
            font-size: 14px;
            margin: 10px 0;
            text-align: left !important;
            padding: 0 30px;
        }

        .alertBox button {
            margin: 0 auto;
            width: 120px;
            height: 35px;
            line-height: 30px;
            text-align: center;
            background-color: #e76451;
            font-size: 14px;
            color: #fff;
            outline: none;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .displayNone {
            display: none;
        }

        .reading {
            display: inline-block;
            width: 120px;
            height: 35px;
            line-height: 35px;
            text-align: center;
            background-color: #e76451;
            font-size: 14px;
            color: #fff;
            outline: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .modelBoxb {
            padding: 0 10px 10px 20px;
            border: 1px solid #eee;
            position: absolute;
            z-index: 99999;
            top: 30%;
            left: 30%;
            width: 30%;
            display: block;
            border-radius: 5px;
            background: white;

        }

        .modelBoxbSon {
            width: 100%;
            height: 80%;
            padding: 10px;
            box-sizing: border-box;
        }
        .btnBtn {
            width: 100%;
            text-align: center;
            margin-bottom: 10px;
        }

        .policyContent {
            width: 100%;
            text-indent: 2em;
        }
        .policyTitle{
            text-align: center;
            font-size: 1.5em;
        }
        .modelBoxbSon{
            border-bottom: 1px solid #ddd;
            margin: 10px auto;
        }
        .policyContent{
            border-top: 1px solid #ddd;
        }

		 #myOverlay{
            width: 100%;
            height:100%;
            background: #000000;
            position: absolute;
            top:0;z-index: 10000;
            opacity: 0.4;
        }
    </style>
           <!--tou部-->
     <head>
    <!--<meta http-equiv=”X-UA-Compatible” content=”IE=edge,chrome=1″ />-->
    <!--<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8"/>-->
    <meta charset="UTF-8">
    <META HTTP-EQUIV="pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Cache-Control" CONTENT="no-cache,must-revalidate">
    <META HTTP-EQUIV="expires" CONTENT="0">
    <meta name="Description" content="古北水镇预订网是古北水镇景区旗下官方预订网站，提供景区内各类套餐、自由行产品等预订服务，让您省钱更省心。">
    <title>
        支付信息 - 古北水镇官方预订网站
    </title>
    <link href="/Public/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="/static/css/base.css" rel="stylesheet">

    <link href="/static/css/showOrder.css" rel="stylesheet">

<meta name="random" content="03159c19cd020f59e317d7fe222641e6_bd8cd5e3d032b2f0b2dfb0a123f2c8bd" /></head>
<body>
<div class="top clearfix">
    <div class="top-left clearfix">
        <ul class="topmenu-left">
            <li>欢迎来到古北水镇</li>
            <li><a href="<?php echo url('index/index'); ?>" target="_blank">古北水镇官网</a></li>
            <li>
                <span class="phone">
                    <img src="/Public/Reservation/images/phone.png">
                </span>
                <span class="phone-line">&nbsp;|&nbsp;</span>
                <!-- <span class="phone-size">521-520-1314 &nbsp;</span> -->
            </li>
            <li>
                <iframe name="weather_inc" src="http://i.tianqi.com/index.php?c=code&id=99" width="160" height="36" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
            </li>
        </ul>
        <ul class="topmenu-right">
            <li>
                <a href="/index.php/Reservation/Account/baseInfo.html">15810037426</a>
                    <span style="float: left">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                    <a href="javascript:if(confirm('确定要退出吗？'))quit()">退出</a>
                                </li>
            <li><a href="/index.php/Reservation/Order/orderManage.html">我的订单</a></li>
            <li><a href="/index.php/Reservation/Order/orderManage.html?ostatus=0">购物车</a></li>
        </ul>
    </div>
</div>
     <!--  <tou部>-->

<!-- 背景透明导航栏-->




        <div class="tickettop">
            <div class="ticketform clearfix">
                <div class="ticketform-pic">
                    <div class="foucebox">
                        <div class="bd">
                            <ul id="divimginfog_imgPlayer">
                                <li><img src="/uploads/<?=$arr['scenic_photo']?>"></li><li><img src="/uploads/<?=$arr['scenic_photo']?>"></li><li><img src="/uploads/<?=$arr['scenic_photo']?>"></li><li><img src="/uploads/<?=$arr['scenic_photo']?>"></li>                            </ul>
                        </div>
                        <div class="hd">
                            <div class="hoverBg">
                            </div>
                            <ul id="divpageinfog_imgPlayer">
                                <li><img src="/uploads/<?=$arr['scenic_photo']?>"></li><li><img src="/uploads/<?=$arr['scenic_photo']?>"></li><li><img src="/uploads/<?=$arr['scenic_photo']?>"></li><li><img src="/uploads/<?=$arr['scenic_photo']?>"></li>                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ticketform-text">
                    <form id="ticket-form" method="post" action="<?php echo url('ticket/order'); ?>">
                        <input type="hidden" name="scenic_code">
                        <input type="hidden" name="t_id" id="t_id" value="<?=$arr['t_id']?>">
                        <input type="hidden" name="o_price" id="o_price" value="<?=$arr['t_price']?>">
                        <ul class="ticket-form">
                            <li>
                                <div class="ticket-left">票型名称</div>
                                <div class="ticket-right">
                                    <input name="t_name" type="text" id="ticketSelect" value="<?=$arr['t_name']?>" disabled>
                                </div>
                            </li>
                            <li>
                                <div class="ticket-left">温馨提示</div>
                                <div class="ticket-right">
                                    <span id="remark">住宿客人勿拍，若当天预订需21点前购票</span>
                                </div>
                            </li>
                            <li>
                                <div class="ticket-left">单　　价</div>
                                <div class="ticket-right">￥
                                     <input id="pice" type="text" name="o_price" value="<?=$arr['t_price']?>" disabled>
                                </div>
                            </li>
                            <li>
                                <div class="ticket-left">到达日期</div>
                                <div class="ticket-right">
                                    <input type="text" id="dateBox1" name="reserve_time">
                                </div>
                            </li>
                            <li>
                                <div class="ticket-left">姓　　名</div>
                                <div class="ticket-right">
                                    <input type="text" name="o_name" value="" onkeyup="value=value.replace(/[^\a-zA-Z\u4E00-\u9FA5]/g,'')">
                                </div>
                            </li>
                            <li>
                                <div class="ticket-left">手机号码</div>
                                <div class="ticket-right">
                                    <input id="mobile" type="text" name="o_phone" value="">（二维码门票发送到此号码）
                                </div>
                            </li>
                            <li>
                                <div class="ticket-left">数　　量</div>
                                <div class="ticket-right">
                                    <div class="spinner">
                                        <a href="javascript:;" onclick="reduce_num()">－</a>
                                        <input type="text" name="num" value="1" readonly>
                                        <a href="javascript:;" onclick="add_num()">＋</a>
                                    </div>
                                </div>
                            </li>

                            <div style="margin-bottom: 0" class="ticket-right">
                                <span style="color:#e76451;">请您在预订前仔细阅读预订须知及温馨提示等信息</span>
                            </div>
                            <li>
                                <div class="ticket-rightlast">
                                    <input class="redBtn" type="submit" value="确认订单">
                                                                        </div>
                            </li>
                        </ul></form>
                </div>
            </div>
            <div class="ticketdetail packTab" id="mpxq">
                <ul class="menuTop">
                    <li class="on"><a href="#mpxq">门票详情</a></li>
                    <li><a href="#ydxz">预订须知</a></li>
                    <li><a href="#wxts">温馨提示</a></li>
                    <li><a href="#ykpj">游客评价</a></li>
                    <li><a href="#cjjl">成交记录</a></li>
                </ul>
                <div class="ticketdetail-head">
                    门票详情
                </div>
                <div class="ticketdetail-instruction" id="instruction">
                    <span style="white-space:normal;font-family:'Microsoft YaHei', sans-serif;font-size:14px;line-height:normal;background-color:#FFFFFF;">
<p class="MsoNormal" style="white-space:normal;">
	<span style="line-height:1.5;">【费用包含】：古北水镇景区内游览+御大温泉体验（<span style="font-family:'Microsoft YaHei', sans-serif;font-size:14px;line-height:21px;white-space:normal;background-color:#FFFFFF;">当日一次有效&nbsp;</span>）<br />
<br />
【水镇景区开放时间】：9:00 - 22:30<br />
<br />
【御大温泉检票时间】：10:00 - 23:30<br />
<br />
【停车场收费标准】：7座以下（含7座）——10元/次，7座以上——20元/次&nbsp;<br />
<br />
</span>
</p>
</span>                </div>
            </div>
        </div>
        <div style="width:100%; height:25px;" id="ydxz" class="packTab"></div>
        <div class="tickettop">
            <div class="pubdiv">
                <div class="pubheader">
                    预订须知
                </div>
                <div id="tips">
                    <p class="MsoNormal">
	<span style="line-height:1.5;">在购买前请仔细阅读下面的内容，有疑问请及时咨询客服或拨打电话</span><span style="line-height:1.5;">010-81009999</span>
</p>
<p class="MsoNormal">
	【预订须知】：
</p>
<p class="MsoNormal">
	1、<span>下单时请写明：姓名</span>+<span>手机号码；</span>
</p>
<p class="MsoNormal">
	2、入园凭证：游玩当天凭预订成功短信中的二维码直接检票入园；
</p>
<p class="MsoNormal">
	3<span>、退改规则：该票种不支持部分退票，如需退票，请在游玩当天24点之前申请退款</span><span>, </span><span>逾期不接受退票；</span>
</p>
<p class="MsoNormal">
	<span><span style="white-space:normal;">4</span><span style="white-space:normal;">、住宿客人可享受优惠门票</span><span style="white-space:normal;">80</span><span style="white-space:normal;">元，需至游客中心大前台购买。</span><br />
</span>
</p>
<p class="MsoNormal">
	<span>5、使用日期：门票仅限您预订时选择的使用日期当日有效<br />
6、住宿客人及其他符合优惠条件的请至售票窗口购买&nbsp;<br />
</span>
</p>
<p class="MsoNormal">
	<br />
</p>
<p class="MsoNormal">
	&nbsp;
</p>
<p class="MsoNormal">
	【电子票使用须知】：
</p>
<p class="MsoNormal">
	1<span>、游览当天请打开手机内二维码短信，至景区游客服务中心检票口扫描进入景区；</span>
</p>
<p class="MsoNormal">
	2<span>、若游览当天无法打开二维码短信，请凭短信内容、订票人姓名及手机号等至景区游客服务中心综合窗口换取纸质门票后检票进入景区；</span>
</p>
<p class="MsoNormal">
	3<span>、景区门票</span>当日一次进入有效，刷码注销。（住宿景区旗下酒店的客人在住宿期间，仅需购买一次门票，凭本人身份证、房卡至景区游客服务中心检票口内办理临时出入证，即住宿期间可凭指纹免费进出景区，无需多次购票。）
</p>
<p class="MsoNormal">
	<br />
</p>
<p class="MsoNormal">
	<br />
</p>
<p class="MsoNormal" style="white-space:normal;">
	【门票优惠政策】
</p>
<table class="MsoNormalTable" style="width:489.1pt;">
	<tbody>
		<tr>
			<td width="56" valign="top" style="border:1pt solid windowtext;">
				<p class="MsoNormal" align="center" style="margin-left:0pt;text-align:center;">
					<b><span style="font-family:微软雅黑;font-size:14px;">优惠</span></b>
				</p>
				<p class="MsoNormal" align="center" style="margin-left:0pt;text-align:center;">
					<b><span style="font-family:微软雅黑;font-size:14px;">类别</span></b><b><span style="font-family:微软雅黑;font-size:12pt;"></span></b>
				</p>
			</td>
			<td width="284" valign="top" style="border:1pt solid windowtext;">
				<p class="MsoNormal" align="center" style="margin-left:0pt;text-align:center;">
					<b><span style="font-family:微软雅黑;font-size:14px;">司马台长城（政府定价）</span></b><b><span style="font-family:微软雅黑;font-size:12pt;"></span></b>
				</p>
			</td>
			<td width="311" valign="top" style="border:1pt solid windowtext;">
				<p class="MsoNormal" align="center" style="margin-left:0pt;text-align:center;">
					<b><span style="font-family:微软雅黑;font-size:14px;">古北水镇（市场调节价）</span></b><b><span style="font-family:微软雅黑;font-size:12pt;"></span></b>
				</p>
			</td>
		</tr>
		<tr>
			<td width="56" valign="center" style="border:1pt solid windowtext;">
				<p class="MsoNormal" align="center" style="margin-left:0pt;text-align:center;">
					<b><span style="font-family:微软雅黑;font-size:14px;">免票</span></b><b><span style="font-family:微软雅黑;font-size:12pt;"></span></b>
				</p>
			</td>
			<td width="284" valign="top" style="border:1pt solid windowtext;">
				<p class="MsoNormal" style="margin-left:0pt;">
					<b><span style="font-family:微软雅黑;font-size:14px;">6周岁（含）以下或</span></b><span style="font-family:微软雅黑;font-size:14px;">身高1.2米（含）以下儿童；</span><span style="font-family:微软雅黑;font-size:12pt;"></span>
				</p>
				<p class="MsoNormal" style="margin-left:0pt;">
					<b><span style="font-family:微软雅黑;font-size:14px;">老年人持北京通—养老助残卡；</span></b><b><span style="font-family:微软雅黑;color:#0000FF;font-size:12pt;"></span></b>
				</p>
				<p class="MsoNormal" style="margin-left:0pt;">
					<span style="font-family:微软雅黑;font-size:14px;">离休人员凭</span><span class="15" style="font-family:微软雅黑;font-size:14px;">国务院、中央军委制发的</span><span style="font-family:微软雅黑;font-size:14px;">离休干部荣誉证；</span><span style="font-family:微软雅黑;font-size:12pt;"></span>
				</p>
				<p class="MsoNormal" style="margin-left:0pt;">
					<span style="font-family:微软雅黑;font-size:14px;">残疾人凭中国残联制发《残疾人证》、</span><span style="font-family:微软雅黑;font-size:12pt;"></span>
				</p>
				<p class="MsoNormal" style="margin-left:0pt;">
					<span style="font-family:微软雅黑;font-size:14px;">残疾军人凭民政部制发《残疾军人证》；</span><span style="font-family:微软雅黑;font-size:12pt;"></span>
				</p>
				<p class="MsoNormal" style="margin-left:0pt;">
					<span style="font-family:微软雅黑;font-size:14px;">记者凭新闻出版总署颁发的记者证；</span><span style="font-family:微软雅黑;font-size:12pt;"></span>
				</p>
			</td>
			<td width="311" valign="top" style="border:1pt solid windowtext;">
				<p class="MsoNormal" style="margin-left:0pt;">
					<span style="font-family:微软雅黑;font-size:14px;">身高1.2米（含）以下儿童；</span><span style="font-family:微软雅黑;font-size:12pt;"></span>
				</p>
				<p class="MsoNormal" style="margin-left:0pt;">
					<span style="font-family:微软雅黑;font-size:14px;">离休人员凭</span><span class="15" style="font-family:微软雅黑;font-size:14px;">国务院、中央军委制发的</span><span style="font-family:微软雅黑;font-size:14px;">离休干部荣誉证；</span><span style="font-family:微软雅黑;font-size:12pt;"></span>
				</p>
				<p class="MsoNormal" style="margin-left:0pt;">
					<span style="font-family:微软雅黑;font-size:14px;">残疾人凭中国残联制发《残疾人证》、</span><span style="font-family:微软雅黑;font-size:12pt;"></span>
				</p>
				<p class="MsoNormal" style="margin-left:0pt;">
					<span style="font-family:微软雅黑;font-size:14px;">残疾军人凭民政部制发《残疾军人证》；</span><span style="font-family:微软雅黑;font-size:12pt;"></span>
				</p>
				<p class="MsoNormal" style="margin-left:0pt;">
					<span style="font-family:微软雅黑;font-size:14px;">记者凭新闻出版总署颁发的记者证；</span><span style="font-family:微软雅黑;font-size:12pt;"></span>
				</p>
				<p class="MsoNormal" style="margin-left:0pt;">
					<span style="font-family:微软雅黑;font-size:14px;">中华人民共和国伤残人民警察证</span><span style="font-family:微软雅黑;font-size:12pt;"></span>
				</p>
				<p class="MsoNormal" style="margin-left:0pt;">
					<span style="font-family:微软雅黑;font-size:14px;">中华人民共和国伤残国家机关工作人员证</span><span style="font-family:微软雅黑;font-size:12pt;"></span>
				</p>
				<p class="MsoNormal" style="margin-left:0pt;">
					<span style="font-family:微软雅黑;font-size:14px;">中华人民共和国伤残民兵证</span><span style="font-family:微软雅黑;font-size:12pt;"></span>
				</p>
			</td>
		</tr>
		<tr>
			<td width="56" valign="center" style="border:1pt solid windowtext;">
				<p class="MsoNormal" align="center" style="margin-left:0pt;text-align:center;">
					<b><span style="font-family:微软雅黑;font-size:14px;">优惠票</span></b><b><span style="font-family:微软雅黑;font-size:12pt;"></span></b>
				</p>
			</td>
			<td width="284" valign="top" style="border:1pt solid windowtext;">
				<p class="MsoNormal" style="margin-left:0pt;">
					<span style="font-family:微软雅黑;font-size:14px;">身高1.2米—1.5米的儿童；</span><span style="font-family:微软雅黑;font-size:12pt;"></span>
				</p>
				<p class="MsoNormal" style="margin-left:0pt;">
					<span style="font-family:微软雅黑;font-size:14px;">全日制大、中、小学生凭学生证（不含成人教育及研究生）；</span><span style="font-family:微软雅黑;font-size:12pt;"></span>
				</p>
				<p class="MsoNormal" style="margin-left:0pt;">
					<span style="font-family:微软雅黑;font-size:14px;">60周岁以上老年人凭</span><b><span style="font-family:微软雅黑;font-size:14px;">有效身份证件；</span></b><span style="font-family:微软雅黑;font-size:12pt;"></span>
				</p>
				<p class="MsoNormal" style="margin-left:0pt;">
					<span style="font-family:微软雅黑;font-size:14px;">现役军人凭有效证件；</span><span style="font-family:微软雅黑;font-size:12pt;"></span>
				</p>
				<p class="MsoNormal" style="margin-left:0pt;">
					<span style="font-family:微软雅黑;font-size:14px;">持有社会保障金领取证的人员。</span><span style="font-family:微软雅黑;font-size:12pt;"></span>
				</p>
			</td>
			<td width="311" valign="top" style="border:1pt solid windowtext;">
				<p class="MsoNormal" style="margin-left:0pt;">
					<span style="font-family:微软雅黑;font-size:14px;">身高1.2米—1.5米的儿童；</span><span style="font-family:微软雅黑;font-size:12pt;"></span>
				</p>
				<p class="MsoNormal" style="margin-left:0pt;">
					<span style="font-family:微软雅黑;font-size:14px;">中、小学生凭学生证；</span><span style="font-family:微软雅黑;font-size:12pt;"></span>
				</p>
				<p class="MsoNormal" style="margin-left:0pt;">
					<span style="font-family:微软雅黑;font-size:14px;">60周岁以上老年人凭</span><b><span style="font-family:微软雅黑;font-size:14px;">有效身份证件；</span></b><span style="font-family:微软雅黑;color:#0000FF;font-size:12pt;"></span>
				</p>
				<p class="MsoNormal" style="margin-left:0pt;">
					<span style="font-family:微软雅黑;font-size:14px;">现役军人凭有效证件。</span><span style="font-family:微软雅黑;font-size:12pt;"></span>
				</p>
				<p class="MsoNormal" align="center" style="margin-left:0pt;text-align:center;">
					<span style="font-family:微软雅黑;font-size:12pt;">&nbsp;</span>
				</p>
			</td>
		</tr>
	</tbody>
</table>
<p class="MsoNormal" style="margin-left:0pt;white-space:normal;">
	注:
</p>
<p class="MsoNormal" style="margin-left:0pt;white-space:normal;text-indent:24pt;">
	1、以上优惠均需特定对象出示本人真实合法有效证件,票证同用,不得转让。
</p>
<p class="MsoNormal" style="margin-left:0pt;white-space:normal;text-indent:24pt;">
	2、持有旅行社经理资格证（国家旅游局颁发）、导游证（IC卡）、领队证、随团司机驾驶A1证的，仅限旅行社随团工作人员免票（凭本人有效证件及景区团购单随团进入景区）。
</p>
<p class="MsoNormal" style="margin-left:0pt;white-space:normal;text-indent:24pt;">
	3、外宾中满60周岁老年人出示以下证件同样可享受景区门票优惠，中小学生出示本人学生证或其他证件证明年龄未满16周岁可享受水镇门票优惠，大学生可享受长城门票优惠。
</p>
<p class="MsoNormal" style="margin-left:0pt;white-space:normal;text-indent:24pt;">
	①港澳居民来往内地通行证（香港，澳门）；
</p>
<p class="MsoNormal" style="margin-left:0pt;white-space:normal;text-indent:24pt;">
	②护照（其他国家的人，包括加入其他国籍的中国华人）；
</p>
<p class="MsoNormal" style="margin-left:0pt;white-space:normal;text-indent:24pt;">
	③签证（访问签证F，旅游签证L，居住许可R）；
</p>
<p class="MsoNormal" style="margin-left:0pt;white-space:normal;text-indent:24pt;">
	④台湾居民来往大陆通行证（台湾）；
</p>
<p class="MsoNormal" style="margin-left:0pt;white-space:normal;text-indent:24pt;">
	⑤外宾本国身份证；
</p>
<p class="MsoNormal" style="margin-left:0pt;white-space:normal;text-indent:24pt;">
	⑥外国学生证；
</p>
<br style="white-space:normal;" />
<p>
	<br />
</p>                </div>
            </div>
        </div>
        <div style="width:100%; height:25px;" id="wxts" class="packTab"></div>
        <div class="tickettop">
            <div class="pubdiv">
                <div class="pubheader">
                    温馨提示
                </div>
                <div id="ticketdetail">
                    <p class="MsoNormal">
	<span style="line-height:1.5;"></span>
</p>
<p class="MsoNormal" style="white-space:normal;">
	<span style="line-height:1.5;">【温馨提示】：</span>
</p>
<p class="MsoNormal">
	1<span>）如换票、检票、参观等场所客流繁忙时，请按序排队进入或参观；</span>
</p>
<p class="MsoNormal">
	2<span>）景区内河道密布，水深危险，请注意安全，未成年人必须有成人监护并保持随时照顾； </span>
</p>
<p class="MsoNormal">
	3<span>）请尊重景区内住户及其他宾客，请勿使用不雅语言，或未经同意进入私宅及作其他无礼行为；</span>
</p>
<p class="MsoNormal">
	4<span>）</span>景区内建筑多为砖木结构，请注意防火；
</p>
<p class="MsoNormal">
	5<span>）所有废弃物请分类丢弃在垃圾箱或指定地点。</span>
</p>
<p class="MsoNormal">
	6<span>）以下物品不可携带进入景区： &nbsp;</span>
</p>
<p class="MsoNormal">
	●各类易燃、易爆物和任何有害公众安全之危险物品； &nbsp;
</p>
<p class="MsoNormal">
	●口香糖； &nbsp;
</p>
<p class="MsoNormal">
	●各类导游用喇叭和扩音设备；
</p>
<p class="MsoNormal">
	●手推车或任何装有轮辘之运送用具（行李箱、婴儿推车及轮椅除外）； &nbsp;
</p>
<p class="MsoNormal">
	●宠物。
</p>
<p class="MsoNormal">
	7<span>）禁止以下活动： &nbsp;</span>
</p>
<p class="MsoNormal">
	●售卖任何未经许可的物品或服务、展示； &nbsp;
</p>
<p class="MsoNormal">
	●在景<span>区内所有河道游泳、未被允许的水上活动或公众水域垂钓；</span> &nbsp;
</p>
<p class="MsoNormal">
	●未经许可之游行或演说、公众集会； &nbsp;
</p>
<p class="MsoNormal">
	●张贴派发印刷品或其他宣传品； &nbsp;
</p>
<p class="MsoNormal">
	●未经许可展示任何旗帜、横幅或徽号； &nbsp;
</p>
<p class="MsoNormal">
	●未经授权批准作商业用途的摄影、摄像或任何形式之记录、广播或传送； &nbsp;
</p>
<p class="MsoNormal">
	●在桥面、街道狭窄处用三脚架进行拍摄； &nbsp;
</p>
<p class="MsoNormal">
	●在禁烟场所吸烟； &nbsp;
</p>
<p class="MsoNormal">
	●攀折树木、采摘花果，各种形式的狩猎，捕捉、打捞水生动物及植物； &nbsp;
</p>
<p class="MsoNormal">
	●破坏生态、污染环境、危害文物之行为；
</p>
<p class="MsoNormal">
	●在未经核准的民居或区域私自留宿；
</p>
<p class="MsoNormal">
	●其它任何有害景区保护或其相关设施运作之行为。
</p>
<p class="MsoNormal">
	&nbsp;
</p>
<p class="MsoNormal">
	申明：
</p>
<p class="MsoNormal">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>基于公众场合的秩序掌控及各位游客的安全，我们可能在</span>景区公共区域内拍摄、<span>录制或复制任何进入人士之影像或声音而不予通知。</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</p>
<p class="MsoNormal">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>对于任何不遵守</span>景<span>区管理规则或有违法、危险或无礼行为之人士，我们有权拒绝该等人士进入或要求该等人士离开。</span>
</p>
<p class="MsoNormal">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>我们可基于以下原因不时更改本景区或景点设施的开放时间、暂停开放或控制入内人数、暂停或取消任何游览观赏设施或项目而不事先通知：景区容纳量、恶劣天气或特别事件；或为保障安全、治安或秩序；或修缮、保养及我们认为其它情况所需。</span>
</p>
<p>
	<br />
</p>                </div>
            </div>
        </div>
        <div style="width:100%; height:25px;" id="ykpj" class="packTab"></div>
        <div class="tickettop">
            <div class="pubdiv">
                <div class="pubheader">
                    游客评价
                </div>
                <div id="comment">
                                            <ul>
                            <li>
                                    <table>
                                        <tr>
                                            <td style="width: 100px;text-align: center;">13****24</td>
                                            <td>
                                                <div class="commenttext">帮别人够买的，入园很方便</div>
                                                <div class="commentdate">08.10</div>
                                                <div class="replay">
                                                                                                    </div>
                                            </td>
                                        </tr>
                                    </table>
                                </li><li>
                                    <table>
                                        <tr>
                                            <td style="width: 100px;text-align: center;">15****66</td>
                                            <td>
                                                <div class="commenttext">很方便！</div>
                                                <div class="commentdate">08.09</div>
                                                <div class="replay">
                                                                                                    </div>
                                            </td>
                                        </tr>
                                    </table>
                                </li><li>
                                    <table>
                                        <tr>
                                            <td style="width: 100px;text-align: center;">15****70</td>
                                            <td>
                                                <div class="commenttext">景区很漂亮，下次再来</div>
                                                <div class="commentdate">12.12</div>
                                                <div class="replay">
                                                                                                            回复：尊敬的宾客，您好！感谢您的评价，您的满意是对我们工作最大的肯定和褒奖。我们会努力做的更好。期待您再来古北水镇！                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </li>                        </ul>                </div>
            </div>
        </div>
        <div style="width:100%; height:25px;" id="cjjl" class="packTab"></div>
        <div class="tickettop">
            <div class="successdiv">
                <div class="successheader">
                    成交记录
                </div>
                <div id="successdata">
                    <ul class="clearfix">
                        <li class="pubsuccess clearfix">
                            <dl class="clearfix">
                                <dd>买家</dd>
                                <dd>类型</dd>
                                <dd>数量</dd>
                                <dd>成交时间</dd>
                            </dl>
                        </li>
                        <li class="successdiv clearfix">
                                <dl class="clearfix">
                                    <dd>15****09</dd>
                                    <dd>古北水镇长城联票</dd>
                                    <dd>1</dd>
                                    <dd>2018-05-15 09:44:41</dd>
                                </dl>
                            </li><li class="successdiv clearfix">
                                <dl class="clearfix">
                                    <dd>18****31</dd>
                                    <dd>长城与单程索道票联票</dd>
                                    <dd>2</dd>
                                    <dd>2018-05-14 12:02:53</dd>
                                </dl>
                            </li><li class="successdiv clearfix">
                                <dl class="clearfix">
                                    <dd>13****15</dd>
                                    <dd>古北水镇门票</dd>
                                    <dd>8</dd>
                                    <dd>2018-05-14 09:15:04</dd>
                                </dl>
                            </li><li class="successdiv clearfix">
                                <dl class="clearfix">
                                    <dd>18****32</dd>
                                    <dd>水镇长城双索道联票</dd>
                                    <dd>3</dd>
                                    <dd>2018-05-14 08:10:20</dd>
                                </dl>
                            </li><li class="successdiv clearfix">
                                <dl class="clearfix">
                                    <dd>13****39</dd>
                                    <dd>古北水镇长城联票</dd>
                                    <dd>1</dd>
                                    <dd>2018-05-14 07:59:32</dd>
                                </dl>
                            </li>                    </ul>
                </div>
            </div>
        </div>
        <div class="blank"></div>
    </div>
    <div style="display: none" id="reservetips">
        <div class="createMask" style="display: block;"></div>
        <div class="alertBox">
            <h3>温馨提示</h3>

            <p>购买多张水镇+长城等涉及长城游览的套票</p>

            <p>所有游玩人员需同时检票进入，同时检票离开，请注意游玩时间</p>

            <button type="button" onclick="closebox()">确定</button>
        </div>
    </div>
    <!--特殊情况禁止购票提醒-->
    <div id="myOverlay" class="displayNone"></div>
    <div id="modelBoxb" class="displayNone">
        <div class="modelBoxb" >
            <div class="modelBoxbSon" style="">
                <div class="policyTitle">温馨提示：</div>
                <p class="policyContent" ></p>
                <p id="mytpis" style="margin-top: 20px;"></p>
            </div>
            <div class="btnBtn">
                <button type="button" onclick="displaynone()" class="reading">确认</button>
            </div>
        </div>
    </div>

<div class="bottom-footer" id="bottom_footer">
             <!--底部-->
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

     <!--  <底部>-->

   </div>



<!--右侧广告图片-->
<div class="adBox">
        <a href="http://www.wtown.com.cn/index.php/Reservation/Package/index.html?combo_type=8" target="_blank" title="长城踏青季"><img src="/Upload/Reservation/05acea6f32a649.jpg" alt="" class="adimg"></a>
    </div><div class="online-div">
    <!--客服-->
    <div class="service">
        <a href="https://chat32.live800.com/live800/chatClient/chatbox.jsp?companyID=747330&configID=104795&jid=8140345408&s=1"
           target="_blank">
            <img src="/Public/Reservation/images/在线客服.png">
        </a>
    </div>
    <div class="qrcode">
        <img src="/Public/Reservation/images/qrcode.png">
    </div>
    <div style="display: none" id="weixin">
        <img src="/Public/Reservation/images/weixinqrcode.png">
    </div>
    <div class="myorder">
        <a href="/index.php/Reservation/Order/orderManage.html?ostatus=0" title="购物车">
            <img src="/Public/Reservation/images/cart.png">
        </a>
    </div>
</div>

<script src="/static/js/jquery-1.8.0.js"></script>

<!-- Live800默认功能代码: 开始-->
<script language="javascript"
        src="https://chat32.live800.com/live800/chatClient/monitor.js?jid=8140345408&companyID=747330&configID=104794&codeType=custom&ss=1"></script>
<!-- Live800默认功能代码: 结束-->

<!-- Live800默认数据分析代码: 开始-->
<div style='display:none;'><a href='http://www.live800.com'>客服软件</a></div>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-86803662-8']);
    _gaq.push(['_trackPageview']);
    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
<div style='display:none;'><a href='http://en.live800.com'>live chat</a></div>
<!-- Live800默认数据分析代码: 结束-->

<script src="/static/js/common.js"></script>
<script src="/static/js/jquery.scrollUp.min.js"></script>
<script>
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?2308ee10dc67607f33445c1c0a899681";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<!--轮播js-->
<!--<script type="text/javascript">-->
<!--jQuery(".slideBox").slide({mainCell: ".bd ul", effect: "leftLoop", autoPlay: true});//左循环-->
<!--</script>-->
<script>
    //  回顶部
    jQuery.scrollUp({animation: 'fade', scrollDistance: 50, scrollText: '<span></span>', scrollTitle: '回顶部'});
    $(".footer-text li:first-child").css({"font-size": "16px", "margin-bottom": "6px"});
    //将页面内所有指定id的图片按比例缩放
    function RsizeAllImageByClass(id, W, H) {
        var imgs = document.getElementsByTagName("img");
        for (var i = 0; i < imgs.length; i++) {
            if ($(imgs[i]).attr('class') == id) {
                ResizeImage(imgs[i], W, H);
            }
        }
    }
    //将图片的大小按比例缩放,适合显示在宽W和高H的区域内
    function ResizeImage(imageDest, W, H) {
        var image = new Image();
        image.src = imageDest.src;
        if (image.width > 0 && image.height > 0) {
            if (image.width / image.height >= W / H) {
                if (image.width > W) {
                    imageDest.width = W;
                    imageDest.height = (image.height * W) / image.width;
                }
                else {
                    imageDest.width = image.width;
                    imageDest.height = image.height;
                }
            }
            else {
                if (image.height > H) {
                    imageDest.height = H;
                    imageDest.width = (image.width * H) / image.height;
                }
                else {
                    imageDest.width = image.width;
                    imageDest.height = image.height;
                }
            }
        }
    }
    $(document).ready(function () {
        // 显示微信二维码
        $(".qrcode").hover(function () {
            $("#weixin").css("display", "block");
        }, function () {
            $("#weixin").css("display", "none");
        });

//        $("#nav ul li").click(function () {
//            $(this).addClass('current').siblings().removeClass('current');
//        });
        // 浏览器可视高度
        var screenHeight = document.documentElement.clientHeight;
        //底部高度
        var foot_height = document.getElementById("bottom_footer").offsetHeight;
        var height = screenHeight - foot_height;
        $(".wrap").css("min-height", height - 120);

    });
</script>

    <script src="/static/js/WdatePicker.js"></script>
    <script src="/static/js/SuperSlide.js"></script>
    <script type="text/javascript" src="/static/js/tabLocation.js"></script>
    <script>

       $("#ticket-form").submit(function () {
            var $name = $("input[name='t_name']");
            var usedate = $("input[name='usedate']").val();

            //特殊情况票暂停售卖判断
            if('Array'){
                var codeArr = eval('["C03","027","028","030","031"]');
                var dateArr = eval('["2018-04-30"]');
                var incode = $.inArray('029',codeArr);
                var indate = $.inArray(usedate,dateArr);
                if(incode>=0 && indate>=0){
                    $("#myOverlay").removeClass('displayNone');
                    $("#mytpis").html("鉴于当日长城日游即将关闭，此票种不再销售，尽情谅解！");
                    $("#modelBoxb").removeClass('displayNone');
                    return false;
                }
            }
           //票型的售卖时间限制判断
            if("Array"){
                //先判断是不是需要提前预定
                if("0" == 0){
                    if(usedate == "2018-05-15"){
                        if(getTime() > "23:30:00" || getTime() < "00:00:00"){
                            $("#myOverlay").removeClass('displayNone');
                            $("#mytpis").html("该票当天23:30点后停止售票，请选择其他游玩日期。");
                            $("#modelBoxb").removeClass('displayNone');
                            return false;
                        }
                    }
                }else {
                    if(usedate < "2018-05-15"){
                        $("#myOverlay").removeClass('displayNone');
                        $("#mytpis").html("该票当天23:30点后停止售票，请选择其他游玩日期。");
                        $("#modelBoxb").removeClass('displayNone');
                        return false;
                    }
                }
            }
            if (!$name.val()) {
                alert("请输入姓名！");
                $name.focus();
                return false;
            }

            if (check_mobile()) {
               return true;
            } else {
                return false;
            }
        });

        //前填充0
        function fillZero(v){
           if(v < 10 ){
               v = "0" + v;
           }
            return v;
         }
        //获得当前时间---16:23:30
        function getTime(){
           var myDate = new Date();
           return fillZero(myDate.getHours()) +":" + fillZero(myDate.getMinutes()) +":"+ fillZero(myDate.getSeconds());
        }

        function displaynone(){
            $("#modelBoxb").addClass('displayNone');
            $("#myOverlay").addClass('displayNone');
        }

        $(".grayBtn").click(function () {
            alert("您选择的日期已订满，请重新选择日期！");
            return false;
        });


        function change_date() {

            var num = Number($("input[name='num']").val());
            $.post("/index.php/Reservation/Ticket/getPrice.html", {
                usedate: $("input[name='usedate']").val(),
                num: num,
                ticket_code: '029',
                scenic_code: 'GBHOTEL'
            }, function (data) {

                    if (data.available == 1) {

                        $(".ticket-rightlast").html('<input class="redBtn" type="submit" value="确认订单">');

                    } else {
                        alert("您所选的日期预订已满");
                        $(".ticket-rightlast").html('<input class="grayBtn" type="button" value="订满">');
                    }

            });
        }
        function reduce_num() {
            var temp_num = Number($("input[name='num']").val()) - 1;
            if (temp_num < 1) {
                alert("数量至少为1");
            }
            else {
                $.post("/index.php/Reservation/Ticket/getPrice.html", {
                    usedate: $("input[name='reserve_time']").val(),
                    num: temp_num,
                    ticket_code: '029',
                    scenic_code: 'GBHOTEL'
                }, function (data) {
                    if (data.available == 1) {
                        $("input[name='num']").val(temp_num);
                        $(".ticket-rightlast").html('<input class="redBtn" type="submit" value="确认订单">');
                    } else {
                        alert("您所选的日期预订已满");
                        $("input[name='num']").val(temp_num);
                        $(".ticket-rightlast").html('<input class="grayBtn" type="button" value="订满">');
                    }
                });
            }
        }

        function add_num() {
            var temp_num = Number($("input[name='num']").val()) + 1;
            // alert(temp_num)

            if (('029' == "C03" || '029' == "027" || '029' == "031" || '029' == "028" || '029' == "030") && temp_num == 2) {
                $("#reservetips").show();
                $(".createMask").fadeIn(100);
                $(".alertBox").fadeIn(200);
            }
            $.post("<?php echo url('ticket/num'); ?>", {
                reserve_time: $("input[name='reserve_time']").val(),
                num: temp_num,
                t_id: $("input[name='t_id']").val(),
                // scenic_code: 'GBHOTEL'
            },  function (data) {
                // var arr = JSON.parse(data)
                console.log(data);
                if (data.available == 1) {
                    // alert(temp_num)
                    $("input[name='num']").val(temp_num);
                } else {
                    alert('您所选的日期预订已满！');
                }
            });
        }
        function closebox() {
            $(".createMask").fadeOut(100);
            $(".alertBox").slideUp(200);
        }

    </script>
<script src="/DateBox/required.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
  requirejs(['/DateBox/DateBox.js'],function(DateBox){

    new DateBox('dateBox1');

  });
</script>

</body>
</html>