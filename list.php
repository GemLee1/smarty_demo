<?php
/**
 *  先检查是否为搜索，再检查是否为分类，最后查询所有
 *  分别对应的方法是 searchListByKw（加分页），getListByCatId（加分页），getProductFenye（合并pagenow部分）
 *  mc
 */

	require_once 'indexService.php';
	require_once './libs/Smarty.class.php';
	require_once 'FenyePage.class.php';

	$smarty=new Smarty;
//	$smarty->debugging = true;
	$smarty->left_delimiter="<{";
	$smarty->right_delimiter="}>";

	$indexService=new indexService();
	$fenyePage=new FenyePage();
	$fenyePage->gotoUrl="list.php";
	$fenyePage->pageSize=1;


	@$keyword=$_GET['keyword'];
	@$cat_id=$_GET['cat_id'];

	if (isset($_GET['pageNow'])&&intval($_GET['pageNow'])>0) {
		$fenyePage->pageNow=$_GET['pageNow'];
	}else{
		$fenyePage->pageNow=1;
	}

	if($keyword){
		$indexService->searchListByKw($keyword,$fenyePage);
		$catName[0][0]="搜索";
		$fenyePage->gotoUrl.='?keyword='.$keyword.'&';
	}elseif($cat_id){
		$fenyePage->gotoUrl.='?cat_id='.$cat_id.'&';
		$indexService->getListByCatId($cat_id,$fenyePage);
		$catName=$indexService->getCatNameByCatId($cat_id);
	}else{
		$indexService->getProductFenye($fenyePage);
		$catName[0][0]="全部";
	}

	$categorys=$indexService->getCategory();
	/*echo "<pre>";
	var_dump($fenyePage);
	echo "</pre>";
	exit;*/
	$smarty->assign("navigator",$fenyePage->navigator);
	$smarty->assign("products",$fenyePage->res_array);
	$smarty->assign("categorys",$categorys);
	$smarty->assign("catName",$catName);

	$smarty->display("list.tpl");
?>
