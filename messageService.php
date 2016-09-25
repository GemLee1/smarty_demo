<?php
	require_once 'SqlHelper.class.php';
	header("Content-Type: text/html; charset=utf-8");
	//该类是一个业务逻辑处理类，主要完成对admin表的操作

	class messageService{
		
		//添加留言
		public function addMessage($arguments){
				
			$sql="insert into message values(null,now(),$arguments,default)";
			$sqlHelper=new SqlHelper();
			$res=$sqlHelper->execute_dml($sql);
			$sqlHelper->close_connect();
			return $res;
		}
		
		//留言列表显示
		public function showMessageList(){
			$sql = "select message.linkman,message.title,msg_date,message.content,reply.content from message,reply limit 6";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			$sqlHelper->close_connect();
			return $res;
		}
		
		//获得分页列表
		public function getMsgFenye($fenyePage){
			
			$sqlHelper = new SqlHelper();
			$sql1="select message.linkman,message.title,msg_date,message.content,reply.content from message,reply where ischeck=1 limit ".($fenyePage->pageNow-1)*$fenyePage->pageSize.",".$fenyePage->pageSize;
		    $sql2="select count(msg_id) from message";
			$sqlHelper->execute_dql_paging($sql1, $sql2, $fenyePage);
			$sqlHelper->close_connect();
		}
		
		//获得管理员页面的留言列表消失
		public function showAdminMsgList(){
			$sql = "select msg_id,linkman,content,telephone,ischeck from message limit 6";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql($sql);
			$sqlHelper->close_connect();
			return $res;
		}
		
		//获得管理员分页列表
		public function getAdminMsgFenye($fenyePage){
				
			$sqlHelper = new SqlHelper();
			$sql1="select msg_id,linkman,content,telephone,ischeck from message limit ".($fenyePage->pageNow-1)*$fenyePage->pageSize.",".$fenyePage->pageSize;
			$sql2="select count(msg_id) from message";
			$sqlHelper->execute_dql_paging($sql1, $sql2, $fenyePage);
			$sqlHelper->close_connect();
		}
		
		//管理员确认审核
		public function checkOpera($msg_id){
			
			$sql="update message set ischeck=1 where msg_id=$msg_id";
			$sqlHelper=new SqlHelper();
			$res=$sqlHelper->execute_dml($sql);
			$sqlHelper->close_connect();
			return $res;
		}
		
		//管理员删除操作
		public function delOpera($msg_id){
			
			$sql="delete from message where msg_id=$msg_id";
			$sqlHelper=new SqlHelper();
			$res=$sqlHelper->execute_dml($sql);
			$sqlHelper->close_connect();
			return $res;
		}
		
		//管理员回复留言
		public function replyOpera($msg_id,$replyContent){
			
			$sql="replace into reply values(null,'$replyContent',now(),$msg_id)";
			$sqlHelper=new SqlHelper();
			$res=$sqlHelper->execute_dml($sql);
			$sqlHelper->close_connect();
			return $res;
		}
		
	}

?>