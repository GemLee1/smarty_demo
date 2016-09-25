	<{include file="header.tpl" title="留言" flag="1"}>
		<div id="main">
			<div id="mainLeft">
				<{include file="left.tpl" }>
			</div>
			<div id="mainRight">
				<div id="show" style="height:805px;">
					<span class="blockTitle2">查看留言<i>Reply</i></span>
					<div class="clear"></div>
					<{foreach from=$messageList item=temp key=k}>
						<table>
							<tr>
								<td>
									<b>留言人：</b><{$temp.linkman}>
									<b>主题：</b><{$temp.title}>
								</td>
								<td align="right">
									<b>咨询时间：</b><{$temp.msg_date}>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<b>咨询内容：</b><{$temp.content}>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<b>回复:</b><{$temp.content}>
								</td>
							</tr>
						</table>
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
