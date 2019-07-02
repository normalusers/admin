<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>用户调查主页</title>
		<link rel="stylesheet" type="text/css" href="css/css.css" />
	<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
	</head>

	<body>
		<div class="wrapper">
			<div class="header">
				<img src="images/logo.png" />
			</div>
			<div class="survey_box">
				<h3>赛诺菲文献查询满意度调查</h3>
				<div class="welcome">
					<p>您好！</p>
					<p class="thanks">感谢您使用赛诺菲文献检索服务。希望您对我们的服务进行评价，以便我们准确了解您的需求并提供更好的服务。</p>
				</div>
				<div class="survey_body">
					<div class="email">
						<label>您的邮箱是</label>
						<input type="text" name="userEmail" class="userEmail"/>
						<label class="erromessage" id="emailerr">邮箱名不能为空</label>
					</div>
					<div class="ques_one">
						<p>问题1: 您对文献检索的结果是否满意？</p>
						<p>
							<input type="radio" id="satisfied" name="satisfied" class="checkbox"/><span>满意</span>
							<input type="radio" id="unsatisfied" name="satisfied" class="checkbox"/><span>不满意</span>
						</p>
					</div>
					<div class="ques_two" style="display: none;">
						<p>问题2: 若不满意，请问我们应该在哪些方面改进?</p>
						<p>
							<input type="checkbox" id="q21" name="checkbox"  class="checkbox" value="0"/>检索结果不够精准
						</p>
						<p>
							<input type="checkbox" id="q22" name="checkbox"  class="checkbox" value="0"/>检索结果不全面
						</p>
						<p>
							<input type="checkbox" id="q23" name="checkbox"  class="checkbox" value="0"/>反馈时间超出规定天数
						</p>
						<p>
							<input type="checkbox" id="q24"  name="checkbox" class="checkbox" value="0" />流程繁琐
						</p>
						<p>
							<input type="checkbox" id="q25" name="checkbox"  class="checkbox" value="0"/>服务态度不佳
						</p>
					</div>
				</div>
				<div class="submit_btn">
					<input type="button" class="btnsubmit" value="提交" />
				</div>
			</div>
		</div>
		<script>
			var searchEmail,//传递的email值
				wramp = bool =false,//ajax回调判定
			    qs = [];
			var  q1listener = (function(){
				$("#unsatisfied").on("click",function(){ $(".ques_two").show(); })
				$("#satisfied").on("click",function(){	$(".ques_two").hide(); })
			})();
			q1listener;//调用问题2模块

			$(".btnsubmit").on("click",function(){ //提交按钮响应事件

				var q = (function(){
					var checks = document.querySelectorAll(".checkbox");
					for(let i = 0; i<checks.length;i++){
						if(checks[i].checked){
							checks[i].value = 1;
						}else{
							checks[i].value = 0;
						}
					}
					for(let i = 0;i<checks.length;i++){
						qs.push(checks[i].value);
					}
					console.log(qs);
				})();
				q;//
				var emaillistener =(function(){    //email判断
					var userEmail = document.querySelector(".userEmail").value,
						emailelabel = document.querySelector("#emailerr"),
						reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;

					if(userEmail != "" && userEmail != null){
						if(reg.test(userEmail)){
							searchEmail = userEmail;
							bool = true;
						}else{
							emailelabel.innerHTML = "邮箱格式错误";
							emailelabel.className = "changeerror";
						}
					}
					else{
						emailelabel.innerHTML = "邮箱不能为空";
						emailelabel.className = "changeerror";
					}
			})();
				emaillistener;//邮箱格式验证
				var searchData = function searchData(){ //ajax回调
					if(qs.indexOf("1") >= 0){
						wramp = true;
					}else{
						qs = [];
					}
						if(wramp && bool){//如果邮箱格式正确并且数组中有一个1 才可以传递
							var searchUrl = "/index";
							$.ajax({
								data:{ "searchEmail":searchEmail,"qs": qs},
								type:"post",
								url: searchUrl,
								success : function(data){
									if(data){
										alert(data);
									}
								},
								error:function(data){

								}
							});
							}else{
								alert("跳转失败!");
								if(!wramp){
									alert("至少回答一个问题!");
								}
							}
						}();
				searchData;
		})
		</script>

	</body>

</html>