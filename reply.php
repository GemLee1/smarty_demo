<?php 
	require_once 'messageService.php';
	require_once './libs/Smarty.class.php';
	require_once 'FenyePage.class.php';

	$smarty=new Smarty;
	$smarty->left_delimiter="<{";
	$smarty->right_delimiter="}>";
	
	$messageService=new messageService();
	$fenyePage=new FenyePage();

	$fenyePage->gotoUrl="reply.php";
	$fenyePage->pageSize=6;
	
	$messageService->getMsgFenye($fenyePage);
	
	
	$smarty->assign("navigator",$fenyePage->navigator);
	$smarty->assign("messageList",$fenyePage->res_array);
	
	@$pageNow=$_GET['pageNow'];
	if($pageNow){
		$fenyePage->pageNow=$pageNow;
		$messageService->getMsgFenye($fenyePage);
/* 		echo "<pre>";
		print_r($fenyePage->res_array);
		echo "</pre>"; */
		$smarty->assign("navigator",$fenyePage->navigator);
		$smarty->assign("messageList",$fenyePage->res_array);
	}
	
	$smarty->display("reply.tpl");


?>