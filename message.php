<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>客户留言</title>
	<link rel="stylesheet" href="styles/base.css" />
	<link rel="stylesheet" href="styles/index.css" />
	<!--[if IE 6]>
	<style type="text/css">
	#mainRight #show .produce{ width:170px; float:left; border:1px solid #dadada; margin:40px 0px 0px 26px; display: inline-block;}
	</style>
	<![endif]-->
</head>

<body>
	<div id="banner">
		<div id="banMid">
			<h1>company name</h1>
			<p>company intro</p>
			<span>company contact</span>
		</div>
	</div>
	<div id="mainNav">
		<ul id="navMid">
			<li><a href="index.php">首页</a></li>
			<li><a href="about.html">关于我们</a></li>
			<li><a href="list.php">展示</a></li>
			<li><a href="message.php" style="background-color: #c6063a; color:#FFF;" href="message.html">客户留言</a></li>
			<li><a href="contact.html">联系我们</a></li>
		</ul>
	</div>
	<div id="container"  style="height: 970px;">
		<div id="KinSlideshow">
  			<a href="#"><img src="images/0.jpg" alt="" width="980" height="300" /></a>
			<a href="#"><img src="images/1.jpg" alt="" width="980" height="300" /></a>
			<a href="#"><img src="images/2.jpg" alt="" width="980" height="300" /></a>
			<a href="#"><img src="images/3.jpg" alt="" width="980" height="300" /></a>
		</div>
		<div id="main">
			<div id="mainLeft">
				<div id="category">
					<span class="blockTitle">客户留言<i>Message</i></span>
					<div class="clear"></div>
					<ul>
						<li><a href="message.php"><img src="images/icon.jpg" />&nbsp;客户留言</a></li>
						<li><a href="reply.php"><img src="images/icon.jpg" />&nbsp;查看留言</a></li>
					</ul>
				</div>
				<div id="contactUs">
		<span class="blockTitle">联系我们<i>contact us</i></span>
		<div class="clear"></div>
		<img src="images/contactUs.jpg" />
		<ul>
			<li>bla~bla~bla~bla~bla~~~~~~bla~</li>
			<li>bla~bla~bla~bla~bla~~~~~~bla~</li>
			<li>bla~bla~bla~bla~bla~~~~~~bla~</li>
			<li>bla~bla~bla~bla~bla~~~~~~bla~</li>
			<li>bla~bla~bla~bla~bla~~~~~~bla~</li>
			<li>bla~bla~bla~bla~bla~~~~~~bla~</li>
			<li>bla~bla~bla~bla~bla~~~~~~bla~</li>
			<li>bla~bla~bla~bla~bla~~~~~~bla~</li>
		</ul>
	</div>
			</div>
			<div id="mainRight">
				<div id="show" style="height: 600px;">
					<span class="blockTitle2">客户留言<i>About us</i></span>
					<div class="clear"></div>
					<form action="messageProcess.php" method="post">
					<table>
						<tr>
							<td width="130">主题：</td>
							<td width="490"><input id="theme" name="title" type="text" />&nbsp;*</td>
						</tr>
						<tr>
							<td>内容：</td>
							<td><textarea id="content" name="content" style="width:300px; height: 130px;"></textarea></td>
						</tr>
						<tr>
							<td>公司名称：</td>
							<td><input id="companyName" name="company_name" type="text" />&nbsp;*</td>
						</tr>
						<tr>
							<td>公司地址：</td>
							<td><input id="conpanyAddress" name="address" type="text" /></td>
						</tr>
						<tr>
							<td>邮编：</td>
							<td><input id="postcode" name="postcode" type="text" /></td>
						</tr>
						<tr>
							<td>联系人：</td>
							<td><input id="contactor" name="linkman" type="text" />&nbsp;*</td>
						</tr>
						<tr>
							<td>联系电话：</td>
							<td><input id="telephone" name="telephone" type="text" />&nbsp;*</td>
						</tr>
						<tr>
							<td>手机：</td>
							<td><input id="mobilephone" name="mobilephone" type="text" /></td>
						</tr>
						<tr>
							<td>联系传真：</td>
							<td><input id="fax" name="fax" tyle="text" /></td>
						</tr>
						<tr>
							<td>邮箱Email：</td>
							<td><input id="email" name="email" tyle="text" /></td>
						</tr>
						<tr>
							<td><input type="hidden" name="type" value="addMessage" />&nbsp;</td>
							<td>
								<input id="submitBtn" class="pointer transition" type="submit" value="提交" />
								<input id="resetBtn" class="pointer transition" type="reset" value="重置" />
							</td>
						</tr>
					</table>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div id="footerMid">
			<h1>demo company name</h1>
			<p>回头看自己的代码，发现真的太烂了，姑且先换上新版本Smarty，整理一下模板嵌套</p>
			<ul id="contact">
				<li>开发：孙敏纯</li>
				<li>职位：php</li>
				<li>时间：20160924</li>
			</ul>
		</div>
	</div>
	<script type="text/javascript" src="scripts/base.js"></script>
	<script type="text/javascript" src="scripts/index.js"></script>
	<script src="scripts/jquery-1.4a2.min.js" type="text/javascript"></script>
	<script src="scripts/jquery.KinSlideshow-1.1.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(function(){
        $("#KinSlideshow").KinSlideshow({
            moveStyle:"right",
            titleBar:{titleBar_height:30,titleBar_bgColor:"#CC0000",titleBar_alpha:0.5},
            titleFont:{TitleFont_size:12,TitleFont_color:"#FFFFFF",TitleFont_weight:"normal"},
            btn:{btn_bgColor:"#FFFFFF",btn_bgHoverColor:"#CC0000",btn_fontColor:"#000000",
                 btn_fontHoverColor:"#FFFFFF",btn_borderColor:"#cccccc",
                 btn_borderHoverColor:"#1188c0",btn_borderWidth:1}
        });
	})
	function placeholder(InputId, preText) {
		var inputObj = document.getElementById(InputId);
		inputObj.style.color = '#969696';
		inputObj.style.verticalAlign = 'middle';
		//获得焦点
		inputObj.onfocus = function() {
			if (inputObj.value == preText) {
				inputObj.value = '';
				inputObj.style.color = '#494949';
			}
		}
		//失去焦点
		inputObj.onblur = function() {
			if (inputObj.value == '' || inputObj.value == preText) {
				this.value = preText;
				inputObj.style.color = '#969696';
			}
		}
	}
	window.onload=function(){
		placeholder("searchInput", "请输入关键字");
	}
	</script>
