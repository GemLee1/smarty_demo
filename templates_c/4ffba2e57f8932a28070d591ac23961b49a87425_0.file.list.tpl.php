<?php
/* Smarty version 3.1.30, created on 2016-09-25 15:35:16
  from "E:\code\smarty-demo\templates\list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e77e34342171_43951189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ffba2e57f8932a28070d591ac23961b49a87425' => 
    array (
      0 => 'E:\\code\\smarty-demo\\templates\\list.tpl',
      1 => 1474788228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:left.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57e77e34342171_43951189 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"首页",'flag'=>"1"), 0, false);
?>

		<div id="main">
			<div id="mainLeft">
				<?php $_smarty_tpl->_subTemplateRender("file:left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			</div>
			<div id="mainRight">
				<div id="show" style="height:975px;">
					<span class="blockTitle2">展示<i>Show</i></span>
					<div class="clear"></div>
					<p style="margin:15px 0px 0px 25px; float:left;">所属类别：<span><?php echo $_smarty_tpl->tpl_vars['catName']->value[0][0];?>
</span></p>
					<div class="clear"></div>

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'temp', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['temp']->value) {
?>
					<ul class="produce">
						<li><a href="detail.php?pdt_id=<?php echo $_smarty_tpl->tpl_vars['temp']->value['pdt_id'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['temp']->value['src'];?>
" width="170px" height="130px" /></a></li>
						<li><?php echo $_smarty_tpl->tpl_vars['temp']->value['title'];?>
</li>
					</ul>
					<?php
}
} else {
?>

						<div align="center"> nothing! </div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


					<div class="clear"></div>
					<div id="pagingPart">

						<div id="pagingMiddle">
							<h4>分页导航:</h4>
							<?php echo $_smarty_tpl->tpl_vars['navigator']->value;?>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
