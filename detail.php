<?php
	require_once 'indexService.php';
	require_once './libs/Smarty.class.php';

	$website_path = '/smarty-demo';
	$smarty=new Smarty;
	$smarty->left_delimiter="<{";
	$smarty->right_delimiter="}>";

	$indexService=new indexService();

	$pdt_id=$_GET['pdt_id'];

	//通过id查询详情
	$detail=$indexService->getDetailById($pdt_id);
	$detail[0][4] = preg_replace('(<img src="../upload/)','<img src="'.$website_path.'/upload/',$detail[0][4]);
	//获取类别列表
	$categorys=$indexService->getCategory();

	$smarty->assign("detail",$detail);
	$smarty->assign("categorys",$categorys);

	$smarty->display("detail.tpl");


?>
