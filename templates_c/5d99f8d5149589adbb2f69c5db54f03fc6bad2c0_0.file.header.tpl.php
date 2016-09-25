<?php
/* Smarty version 3.1.30, created on 2016-09-25 15:35:16
  from "E:\code\smarty-demo\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e77e3435d6f8_21018567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d99f8d5149589adbb2f69c5db54f03fc6bad2c0' => 
    array (
      0 => 'E:\\code\\smarty-demo\\templates\\header.tpl',
      1 => 1474788228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e77e3435d6f8_21018567 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
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
			<?php if ($_smarty_tpl->tpl_vars['flag']->value == 1) {?> style="background-color: #c6063a; color:#FFF;" <?php }?> >首页</a></li>
			<li><a href="about.html"
			<?php if ($_smarty_tpl->tpl_vars['flag']->value == 2) {?> style="background-color: #c6063a; color:#FFF;" <?php }?> >关于我们</a></li>
			<li><a href="list.php"
			<?php if ($_smarty_tpl->tpl_vars['flag']->value == 3) {?> style="background-color: #c6063a; color:#FFF;" <?php }?> >展示</a></li>
			<li><a href="message.php"
			<?php if ($_smarty_tpl->tpl_vars['flag']->value == 4) {?> style="background-color: #c6063a; color:#FFF;" <?php }?> >客户留言</a></li>
			<li><a href="contact.html"
			<?php if ($_smarty_tpl->tpl_vars['flag']->value == 5) {?> style="background-color: #c6063a; color:#FFF;" <?php }?> >联系我们</a></li>
		</ul>
	</div>
	<div id="container" style="height: 1550px;">
		<div id="KinSlideshow">
  			<a href="#"><img src="images/0.jpg" alt="" width="980" height="300" /></a>
			<a href="#"><img src="images/1.jpg" alt="" width="980" height="300" /></a>
			<a href="#"><img src="images/2.jpg" alt="" width="980" height="300" /></a>
			<a href="#"><img src="images/3.jpg" alt="" width="980" height="300" /></a>
		</div>
<?php }
}
