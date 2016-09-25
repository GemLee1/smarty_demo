<?php
	//这是一个用于保存分页信息的类
	class FenyePage{
		public $pageSize=12;
		public $res_array;//sql执行结果，这是现实数据
		public $rowCount; //多少行，这里是从数据库获取
		public $pageNow=1;//当前页，用户指定
		public $pageCount;//多少页，这个是计算得到的
		public $navigator;//分页导航
		public $gotoUrl;//表示把分页请求提交给哪个页面
	}
?>
