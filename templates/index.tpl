	<{include file="header.tpl" title="首页" flag="1"}>
		<div id="main">
			<div id="mainLeft">
				<{include file="left.tpl" }>
			</div>
			<div id="mainRight">
				<div id="company">
					<span class="blockTitle2">介绍<i>Company</i></span>
					<div class="clear"></div>
					<p>这是一个demo网站。根据大一时一个电商外包改版而成，根据这个学会了smarty模板引擎。人生第一个外包，姑且作为demo保留下来。到时学习一下爬虫做展示时也许可以套用。</p>
					<img src="images/company.jpg" />
				</div>
				<div id="show" style="height:975px;">
					<span class="blockTitle2">展示<i>Show</i></span>
					<div class="clear"></div>
					<p style="margin:15px 0px 0px 25px; float:left;">所属类别：<span>最新类别</span></p>
					<div class="clear"></div>

					<{foreach from=$products item=temp key=k}>
					<ul class="produce">
						<li><a href="detail.php?pdt_id=<{$temp.pdt_id}>" target="_blank"><img src="<{$temp.src}>" width="170px" height="130px" /></a></li>
						<li><{$temp.title}></li>
					</ul>
					<{/foreach}>

					<div class="clear"></div>
					<div id="pagingPart">
						<div id="pagingMiddle">
							<h4>分页导航:</h4>
							<{$navigator}>
							<!--
							<a href="#" class="pagingNums NumSelect">1</a>
							<a href="#" class="pagingNums NumUnselect">2</a>
							<a href="#" class="pagingNums NumUnselect">3</a>
							<a href="#" class="pagingNums NumUnselect">4</a>
							<a href="#" class="pagingNums NumUnselect">5</a>
							<a href="#" class="pagingNums pagingNext">下一页</a>
							<a href="#" class="pagingNums pagingLast">末页</a>
							<a class="pagingNums pagingAll">(共5页)</a>
							-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<{include file="footer.tpl"}>
	<script type="text/javascript">
		window.onload = function () {
	        placeholder("searchInput", "请输入关键字");

	        var oDiv=document.getElementById('play');
			var aBtn=oDiv.getElementsByTagName('ol')[0].getElementsByTagName('li');
			var oUl=oDiv.getElementsByTagName('ul')[0];

			var now=0;

			for(var i=0;i<aBtn.length;i++)
			{
				aBtn[i].index=i;
				aBtn[i].onclick=function ()
				{
					now=this.index;

					tab();
				};
			}

			function tab()
			{
				for(var i=0;i<aBtn.length;i++)
				{
					aBtn[i].className='';
				}
				aBtn[now].className='active';
				startMove(oUl, {top: -235*now});
			}

			function next()
			{
				now++;
				if(now==aBtn.length)
				{
					now=0;
				}

				tab();
			}

			var timer=setInterval(next, 2000);

			oDiv.onmouseover=function ()
			{
				clearInterval(timer);
			};

			oDiv.onmouseout=function ()
			{
				timer=setInterval(next, 2000);
			};
	    }

	    function getStyle(obj, name)
		{
			if(obj.currentStyle)
			{
				return obj.currentStyle[name];
			}
			else
			{
				return getComputedStyle(obj, false)[name];
			}
		}

		function startMove(obj, json, fnEnd)
		{
			clearInterval(obj.timer);
			obj.timer=setInterval(function (){
				var bStop=true;		//假设：所有值都已经到了

				for(var attr in json)
				{
					var cur=0;

					if(attr=='opacity')
					{
						cur=Math.round(parseFloat(getStyle(obj, attr))*100);
					}
					else
					{
						cur=parseInt(getStyle(obj, attr));
					}

					var speed=(json[attr]-cur)/6;
					speed=speed>0?Math.ceil(speed):Math.floor(speed);

					if(cur!=json[attr])
						bStop=false;

					if(attr=='opacity')
					{
						obj.style.filter='alpha(opacity:'+(cur+speed)+')';
						obj.style.opacity=(cur+speed)/100;
					}
					else
					{
						obj.style[attr]=cur+speed+'px';
					}
				}

				if(bStop)
				{
					clearInterval(obj.timer);

					if(fnEnd)fnEnd();
				}
			}, 30);
		}
	</script>
</body>
</html>
