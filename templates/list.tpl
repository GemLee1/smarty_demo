	<{include file="header.tpl" title="首页" flag="1"}>
		<div id="main">
			<div id="mainLeft">
				<{include file="left.tpl" }>
			</div>
			<div id="mainRight">
				<div id="show" style="height:975px;">
					<span class="blockTitle2">展示<i>Show</i></span>
					<div class="clear"></div>
					<p style="margin:15px 0px 0px 25px; float:left;">所属类别：<span><{$catName[0][0]}></span></p>
					<div class="clear"></div>

					<{foreach from=$products item=temp key=k}>
					<ul class="produce">
						<li><a href="detail.php?pdt_id=<{$temp.pdt_id}>" target="_blank"><img src="<{$temp.src}>" width="170px" height="130px" /></a></li>
						<li><{$temp.title}></li>
					</ul>
					<{foreachelse}>
						<div align="center"> nothing! </div>
					<{/foreach}>

					<div class="clear"></div>
					<div id="pagingPart">

						<div id="pagingMiddle">
							<h4>分页导航:</h4>
							<{$navigator}>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<{include file="footer.tpl"}>
</body>
</html>
