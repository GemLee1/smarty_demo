	<{include file="header.tpl" title="<{$detail[0][0]}>" flag="1"}>
		<div id="main">
			<div id="mainLeft">
				<{include file="left.tpl" }>
			</div>
			<div id="mainRight">
				<div id="show" style="min-height:735px;">
					<span class="blockTitle2">详情<i>Detail</i></span>
					<div class="clear"></div>
					<h2 id="title" style="text-align:center; margin-top:20px; font-size:20px;">
						<{$detail[0][0]}>
					</h2>
					<div id="time" style="text-align:center; font-size:11px; margin-top:10px;">
						分类：<{$detail[0][1]}> &nbsp;&nbsp; 更新时间：<{$detail[0][2]}>  &nbsp;&nbsp; 浏览次数：<{$detail[0][3]}>
					</div>
            		<div id="content" style="width:600px; min-height: 550px; margin:0 auto; margin-top:20px; padding-top:15px; ">
            			<{$detail[0][4]}>
            		</div>
				</div>
			</div>
		</div>
	</div>
	<{include file="footer.tpl"}>
</body>
</html>
