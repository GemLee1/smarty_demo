<?php
	require_once 'FenyePage.class.php';

	class SqlHelper{
		private $conn;

		public function __construct(){
			$this->conn=new MYSQLi("localhost","root","160731","smarty_demo");
			if(!$this->conn){
				die("连接失败".$this->conn->connect_error);
			}
			$this->conn->query("set names utf8");
		}

		//执行select语句
		public function execute_dql($sql){
			return $this->conn->query($sql);
		}

		//执行select语句，但是返回的是一个数组
		public function execute_dql2($sql){
			$arr=array();
			$res=$this->conn->query($sql);
			//把$row=>$arr
			while($row=mysqli_fetch_array($res)){
				$arr[]=$row;
			}
			//这里就可以马上把$res关闭
			mysqli_free_result($res);
			return $arr;
		}

		//分页方法封装
		//$sql1="select * from 表名 where limit 0,6 ";
		//$sql2="select count(id) form 表名";
		public function execute_dql_paging($sql1,$sql2,$fenyePage){
			//这里我们查询了要分页显示的数据
			$res=$this->conn->query($sql1);;
			//$res转移到$arr
			$arr=array();
			if (!empty($res)) {
				while ($row=mysqli_fetch_assoc($res)){
					$arr[]=$row;
				}
			}

			mysqli_free_result($res);

			$res2=$this->conn->query($sql2);

			if($row=mysqli_fetch_row($res2)){
				$fenyePage->pageCount=ceil($row[0]/$fenyePage->pageSize);
				$fenyePage->rowCount=$row[0];
				if ($fenyePage->pageCount<$fenyePage->pageNow){
					$fenyePage->pageNow = 1;
				}
			}

			mysqli_free_result($res2);

			//把导航信息也封装到fenyePage对象中去
			//显示上一页和下一页
			$navigator="";
			if($fenyePage->pageNow>1){
				$prePage=$fenyePage->pageNow-1;
				$navigator="<a href='{$fenyePage->gotoUrl}pageNow=$prePage' class='pagingNums pagingNext'>上一页</a>"."&nbsp;&nbsp;";
			}
			if($fenyePage->pageNow<$fenyePage->pageCount){
				$nextPage=$fenyePage->pageNow+1;
				$navigator.="<a href='{$fenyePage->gotoUrl}pageNow=$nextPage' class='pagingNums pagingNext'>下一页</a>"."&nbsp;&nbsp;";
			}

			//可以使用for打印出共有多少个超链接
			$page_whole=5;
			$start=floor(($fenyePage->pageNow-1)/$page_whole)*$page_whole+1;

			$index=$start;
			//整体每5页向前翻
			//如果当前pageNow在1-6之间，就没有向前翻动的超链接
			if($fenyePage->pageNow>5){
				$navigator.="&nbsp;&nbsp;<a class='pagingNums NumUnselect' href='{$fenyePage->gotoUrl}pageNow=".($start-1)."'>&nbsp;&nbsp;<<&nbsp;&nbsp;</a>";
			}

			//整体每5页向后翻
			//如果当前pageNow已经处于最后5页，就没有向后翻动的超链接
			if ($index+$page_whole<$fenyePage->pageCount){
				for(;$start<$index+$page_whole;$start++){
					$navigator.="<a href='{$fenyePage->gotoUrl}pageNow=$start' class='pagingNums NumUnselect'>[$start]</a>"."&nbsp;&nbsp;";
				}
				$navigator.="<a href='{$fenyePage->gotoUrl}pageNow=$start' class='pagingNums NumUnselect'>&nbsp;&nbsp;>>&nbsp;&nbsp;</a>";
			}else{
				for(;$start<=$fenyePage->pageCount;$start++){
					$navigator.="<a href='{$fenyePage->gotoUrl}pageNow=$start' class='pagingNums NumUnselect'>[$start]</a>"."&nbsp;&nbsp;";
				}
			}

			//显示当前页和共有多少页
			$navigator.="<a class='pagingNums pagingAll'>当前第{$fenyePage->pageNow}页</a><a class='pagingNums pagingAll'>/共{$fenyePage->pageCount}页</a>";



			//把$arr赋给$fenyePage
			$fenyePage->res_array=$arr;
			$fenyePage->navigator=$navigator;
		}


		//执行insert,update,delete语句
		public function execute_dml($sql){
			$this->conn->query("set names utf8");
			$res=$this->conn->query($sql);

			if(!$res){
				return 0;//表示操作失败
			}else{
				if($this->conn->affected_rows>0){
					return 1;//表示操作成功
				}else{
					return 2;//表示没有行受影响
				}
			}

		}

		//关闭连接及释放资源
		public function close_connect(){

			if(!empty($this->conn)){
				$this->conn->close();
			}
		}

	}

?>
