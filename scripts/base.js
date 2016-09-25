(function() {
      var $backToTopTxt = "返回顶部", $backToTopEle = $('<div class="backToTop transition"></div>').appendTo($("body"))
          .text($backToTopTxt).attr("title", $backToTopTxt).click(function() {
              $("html, body").animate({ scrollTop: 0 }, 120);
      }), $backToTopFun = function() {
          var st = $(document).scrollTop(), winh = $(window).height();
          (st > 0)? $backToTopEle.show(): $backToTopEle.hide();    
          //IE6下的定位
          if (!window.XMLHttpRequest) {
              $backToTopEle.css("top", st + winh - 166);    
          }
      };
      $(window).bind("scroll", $backToTopFun);
      $(function() { $backToTopFun(); });
})();
(function() {
	//注册自己的命名空间green
	if (!window['green']) {
		window['green'] = {};
	}
	/*-------------------- 1.注册$()函数由id获取object --------------------*/
	function $() {
		var elements = new Array();
		//将传来的参数进行遍历  
		for (var i = 0; i < arguments.length; i++) {
			var element = arguments[i];
			//若参数为字符串类型，则取得该参数的id  
			if (typeof element == 'string') {
				element = document.getElementById(element);
			}
			//若参数长度为1，即只传递进来一个参数，则直接返回  
			if (arguments.length == 1) {
				return element;
			}
			//若有多个参数传递进来，则将处理后的值压入elements数组中  
			elements.push(element);
		}
		//返回处理后的参数  
		return elements;
	};
	//把创建的函数$注册到 'window.green'命名空间中  
	window['green']['$'] = $;
	/*调用:
	  	1. var element = green.$('id');
		2. var elements = green.$('a','b','c','d');
		   for(e in elements){}
	  */
	/*-------------------- loadScript --------------------*/
	function loadScript(url, callback) {
		var script = document.createElement("script");
		script.type = "text/javascript";
		if (script.readyState) { //IE
			script.onreadystatechange = function() {
				if (script.readyState == "loaded" || script.readyState == "complete") {
					script.onreadystatechange = null;
					callback();
				}
			};
		} else { //other
			script.onload = function() {
				callback();
			};
		}
		script.src = url;
		document.getElementsByTagName("head")[0].appendChild(script);
	}
	window['green']['loadScript'] = loadScript;
	/*-------------------- 邮箱与数字验证 --------------------*/
	//邮箱正则验证脚本
	function isEmail(uemail_value) {  
　　　　　　var pattern = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;  
　　　　　　return pattern.test(uemail_value);   
	}  
	window['green']['isEmail'] = isEmail;
	function isDigit(s) {
		var patrn = /^[0-9]{1,20}$/;
		if (!patrn.exec(s)) return false
		return true
	}
	window['green']['isDigit'] = isDigit;
	/*-------------------- placeholder函数封装,参数为input的id和placeholder的text  --------------------*/
	function placeholder(InputId, preText) {
		var inputObj = document.getElementById(InputId);
		inputObj.style.color = '#969696';
		inputObj.style.verticalAlign = 'middle';
		//获得焦点
		inputObj.onfocus = function() {
			if (inputObj.value == preText) {
				inputObj.value = '';
				inputObj.style.color = '#494949';
			}
		}
		//失去焦点
		inputObj.onblur = function() {
			if (inputObj.value == '' || inputObj.value == preText) {
				this.value = preText;
				inputObj.style.color = '#969696';
			}
		}
	}
	window['green']['placeholder'] = placeholder;
	/*-------------------- window.onload扩充，可同时加载多个 --------------------*/
	function addOnload(newFunc){
		var oldOnload = window.onload;
		if(typeof oldOnload == "function"){
			window.onload = function(){
				if(oldOnload){
					oldOnload();
				}
				newFunc();
			}
		}else{
			window.onload = newFunc;
		}
	}
	window['green']['addOnload'] = addOnload;

})();