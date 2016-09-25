<?php
	require_once 'messageService.php';
	header("Content-Type: text/html; charset=utf-8");
	//告诉浏览器不要缓存数据
	header("Cache-Control: no-cache");
	
	//实例化一个messageService对象
	$messageService=new messageService();
	
	@$type=$_POST['type'];
	if($type=="addMessage"){
		
		@$title="'".$_POST['title']."'";
		@$content="'".$_POST['content']."'";
		@$company_name="'".$_POST['company_name']."'";
		@$address="'".$_POST['address']."'";
		@$postcode="'".$_POST['postcode']."'";
		@$linkman="'".$_POST['linkman']."'";
		@$telephone="'".$_POST['telephone']."'";
		@$mobilephone="'".$_POST['mobilephone']."'";
		@$fax="'".$_POST['fax']."'";
		@$email="'".$_POST['email']."'";
		
		$lists=array($title,$content,$company_name,$address,$postcode,$linkman,$telephone,$mobilephone,$fax,$email);
		$arguments="";
		$arguments=implode(',',$lists);
		$res=$messageService->addMessage($arguments);
		
		if($res==1){
			echo "留言成功！";
			header("Location:reply.php");
		}else{
			echo "失败！";
		}
	}else if($type=="checkOpera"){
		@$msg_id=$_POST['msg_id'];
		$res=$messageService->checkOpera($msg_id);
		if($res==1){
			echo "审核通过！";
		}else{
			echo "审核失败！";
		}
	}else if($type=="delOpera"){
		@$msg_id=$_POST['msg_id'];
		$res=$messageService->delOpera($msg_id);
		if($res==1){
			echo "删除成功！";
		}else{
			echo "删除失败！";
		}
	}
	else if($type=="replyOpera"){
		@$msg_id=$_POST['msg_id'];
		@$replyContent=$_POST['replyContent'];
		$res=$messageService->replyOpera($msg_id,$replyContent);
		if($res==1){
			echo "留言回复成功！";
			header("Location:admin/message_mng.php");
		}else{
			echo "留言回复失败！";
		}
	}
	

?>