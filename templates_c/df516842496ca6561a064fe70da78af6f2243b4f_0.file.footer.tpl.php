<?php
/* Smarty version 3.1.30, created on 2016-09-25 15:35:16
  from "E:\code\smarty-demo\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57e77e34374e07_13724110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df516842496ca6561a064fe70da78af6f2243b4f' => 
    array (
      0 => 'E:\\code\\smarty-demo\\templates\\footer.tpl',
      1 => 1474723202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57e77e34374e07_13724110 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
	<?php echo '<script'; ?>
 type="text/javascript" src="scripts/base.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="scripts/index.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="scripts/jquery-1.4a2.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="scripts/jquery.KinSlideshow-1.1.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
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
	<?php echo '</script'; ?>
>
<?php }
}
