	<div id="search">
		<span class="blockTitle">搜索<i>Search</i></span>
		<div class="clear"></div>
		<form action="list.php" method="get">
			<input id="searchInput" name="keyword" value="请输入关键字" />
			<input id="submitBtn" type="submit" class="pointer" value="搜索" />
		</form>
	</div>
	<div id="produceSlide">
		<span class="blockTitle">简介<i>Introduce</i></span>
		<div class="clear"></div>
		<div class="play" id="play">
		    <ol>
		    	<li class="active">1</li>
		        <li>2</li>
		        <li>3</li>
		        <li>4</li>
		        <li>5</li>
		    </ol>
			<ul>
				<li><a href="#"><img src="images/scrollImg1.jpg" alt="广告一" /></a></li>
				<li><a href="#"><img src="images/scrollImg2.jpg" alt="广告二" /></a></li>
				<li><a href="#"><img src="images/scrollImg3.jpg" alt="广告三" /></a></li>
				<li><a href="#"><img src="images/scrollImg4.jpg" alt="广告四" /></a></li>
				<li><a href="#"><img src="images/scrollImg5.jpg" alt="广告五" /></a></li>
			</ul>
		</div>
	</div>
	<div id="category">
		<span class="blockTitle">分类<i>Category</i></span>
		<div class="clear"></div>
		<ul>
			<{foreach from=$categorys item=temp key=k}>
			<li><a href="list.php?cat_id=<{$temp[0]}>"><img src="images/icon.jpg" />&nbsp;<{$temp[1]}></a></li>
			<{/foreach}>
		</ul>
	</div>
	<div id="contactUs">
		<span class="blockTitle">联系我们<i>contact us</i></span>
		<div class="clear"></div>
		<img src="images/contactUs.jpg" />
		<ul>
			<li>bla~bla~bla~bla~bla~~~~~~bla~</li>
			<li>bla~bla~bla~bla~bla~~~~~~bla~</li>
			<li>bla~bla~bla~bla~bla~~~~~~bla~</li>
			<li>bla~bla~bla~bla~bla~~~~~~bla~</li>
			<li>bla~bla~bla~bla~bla~~~~~~bla~</li>
			<li>bla~bla~bla~bla~bla~~~~~~bla~</li>
			<li>bla~bla~bla~bla~bla~~~~~~bla~</li>
			<li>bla~bla~bla~bla~bla~~~~~~bla~</li>
		</ul>
	</div>
