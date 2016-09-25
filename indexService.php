<?php
	require_once 'SqlHelper.class.php';
	header("Content-Type: text/html; charset=utf-8");
	//该类是一个业务逻辑处理类，主要完成对admin表的操作

	class indexService{

		//通过关键字搜索
		public function searchListByKw($searchKeyWord,$fenyePage){
			$sql1="select pdt_id,title,src from product where title like '%".$searchKeyWord."%' limit ".($fenyePage->pageNow-1)*$fenyePage->pageSize.",".$fenyePage->pageSize;
		    $sql2="select count(0) from product where title like '%".$searchKeyWord."%'";
			$sqlHelper = new SqlHelper();
			$sqlHelper->execute_dql_paging($sql1, $sql2, $fenyePage);
			$sqlHelper->close_connect();
		}

		//查询列表
		public function getList(){
			$sql = "select pdt_id,title,src from product limit 12";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			$sqlHelper->close_connect();
			return $res;
		}

		//查询类别列表
		public function getCategory(){
			$sql = "select cat_id,cat_name from category";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			$sqlHelper->close_connect();
			return $res;
		}

		//通过id查询详情
		public function getDetailById($pdt_id){
			$sql = "select title,cat_name,createdate,views,content from product,category where pdt_id=$pdt_id and product.cat_id=category.cat_id";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			if (empty($res)) {
				$sql ="select title,cat_name,createdate,views,content,pdt_id from product,category where  product.cat_id=category.cat_id limit 1";
				$res = $sqlHelper->execute_dql2($sql);
				$pdt_id = $res[0][5];
			}
				$sql2 = "update product set views = views+1 where pdt_id=$pdt_id";
				$sqlHelper->execute_dml($sql2);
				$sqlHelper->close_connect();
				return $res;
		}

		//通过类别id查询列表
		public function getListByCatId($cat_id,$fenyePage){
			$sql1 = "select pdt_id,title,src from product where cat_id=$cat_id limit ".($fenyePage->pageNow-1)*$fenyePage->pageSize.",".$fenyePage->pageSize;
			$sql2 = "select count(*) from product where cat_id=$cat_id";
			$sqlHelper = new SqlHelper();
			$sqlHelper->execute_dql_paging($sql1, $sql2, $fenyePage);
			$sqlHelper->close_connect();
		}

		//通过类别id查询类别名
		public function getCatNameByCatId($cat_id){
			$sql = "select cat_name from category where cat_id=$cat_id";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			$sqlHelper->close_connect();
			if (empty($res[0][0])) {
				$res[0][0] = "找不到这个分类";
			}
			return $res;
		}

		//获取分页信息
		public function getProductFenye($fenyePage){
			$sqlHelper = new SqlHelper();
			$sql1="select pdt_id,title,src from product limit ".($fenyePage->pageNow-1)*$fenyePage->pageSize.",".$fenyePage->pageSize;
		    $sql2="select count(0) from product";
			$sqlHelper->execute_dql_paging($sql1, $sql2, $fenyePage);
			$sqlHelper->close_connect();
		}
	}

?>
