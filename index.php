<?php
	require_once 'indexService.php';
	require_once './libs/Smarty.class.php';
	require_once 'FenyePage.class.php';

	$smarty=new Smarty;
	$smarty->left_delimiter="<{";
	$smarty->right_delimiter="}>";

	$indexService=new indexService();
	$fenyePage=new FenyePage();

	//获取类别列表
	$categorys=$indexService->getCategory();
	//获取列表
	$productsList=$indexService->getList();
	//获取的分页实例
	$fenyeList=$indexService->getProductFenye($fenyePage);

	$fenyePage->gotoUrl="list.php";

	$smarty->assign("TITLE","首页");
	$smarty->assign("navigator",$fenyePage->navigator);
	$smarty->assign("products",$fenyePage->res_array);
	$smarty->assign("categorys",$categorys);

	@$pageNow=$_GET['pageNow'];
	if($pageNow){
		$fenyePage->pageNow=$pageNow;
		$indexService->getProductFenye($fenyePage);
		$smarty->assign("navigator",$fenyePage->navigator);
		$smarty->assign("products",$fenyePage->res_array);
	}


	$smarty->display("index.tpl");


?>
