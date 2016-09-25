<?php
/* Smarty version 3.1.30, created on 2016-09-25 15:35:16
  from "E:\code\smarty-demo\templates\left.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e77e34369278_87220981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e9038063965d344aaec89e48ab9ff3b423c09f0' => 
    array (
      0 => 'E:\\code\\smarty-demo\\templates\\left.tpl',
      1 => 1474720821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e77e34369278_87220981 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<div id="search">
		<span class="blockTitle">搜索<i>Search</i></span>
		<div class="clear"></div>
		<form action="list.php" method="get">
			<input id="searchInput" name="keyword" value="请输入关键字" />
			<input id="submitBtn" type="submit" class="pointer" value="搜索" />
		</form>
	</div>
	<div id="produceSlide">
		<span class="blockTitle">简介<i>Introduce</i></span>
		<div class="clear"></div>
		<div class="play" id="play">
		    <ol>
		    	<li class="active">1</li>
		        <li>2</li>
		        <li>3</li>
		        <li>4</li>
		        <li>5</li>
		    </ol>
			<ul>
				<li><a href="#"><img src="images/scrollImg1.jpg" alt="广告一" /></a></li>
				<li><a href="#"><img src="images/scrollImg2.jpg" alt="广告二" /></a></li>
				<li><a href="#"><img src="images/scrollImg3.jpg" alt="广告三" /></a></li>
				<li><a href="#"><img src="images/scrollImg4.jpg" alt="广告四" /></a></li>
				<li><a href="#"><img src="images/scrollImg5.jpg" alt="广告五" /></a></li>
			</ul>
		</div>
	</div>
	<div id="category">
		<span class="blockTitle">分类<i>Category</i></span>
		<div class="clear"></div>
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorys']->value, 'temp', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['temp']->value) {
?>
			<li><a href="list.php?cat_id=<?php echo $_smarty_tpl->tpl_vars['temp']->value[0];?>
"><img src="images/icon.jpg" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['temp']->value[1];?>
</a></li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
<?php }
}
