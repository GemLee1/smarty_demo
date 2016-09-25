<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><{$title}></title>
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
			<li><a href="index.php"
			<{if $flag==1}> style="background-color: #c6063a; color:#FFF;" <{/if}> >首页</a></li>
			<li><a href="about.html"
			<{if $flag==2}> style="background-color: #c6063a; color:#FFF;" <{/if}> >关于我们</a></li>
			<li><a href="list.php"
			<{if $flag==3}> style="background-color: #c6063a; color:#FFF;" <{/if}> >展示</a></li>
			<li><a href="message.php"
			<{if $flag==4}> style="background-color: #c6063a; color:#FFF;" <{/if}> >客户留言</a></li>
			<li><a href="contact.html"
			<{if $flag==5}> style="background-color: #c6063a; color:#FFF;" <{/if}> >联系我们</a></li>
		</ul>
	</div>
	<div id="container" style="height: 1550px;">
		<div id="KinSlideshow">
  			<a href="#"><img src="images/0.jpg" alt="" width="980" height="300" /></a>
			<a href="#"><img src="images/1.jpg" alt="" width="980" height="300" /></a>
			<a href="#"><img src="images/2.jpg" alt="" width="980" height="300" /></a>
			<a href="#"><img src="images/3.jpg" alt="" width="980" height="300" /></a>
		</div>
