<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>로그인 페이지</title>
<script src="./sha/core.min.js"></script>
<script src="./sha/sha256.min.js"></script>
<?php	include $_SERVER["DOCUMENT_ROOT"]."/inc/head.inc"; ?>
</head>
<body>
<!-- top menu s -->
<!-- <%@ include file="..$_SERVER["DOCUMENT_ROOT"]."/inc/lude/header.jsp" %> -->
<!-- top menu e -->
<div id="wrap" style="min-width:500px;">
		<div id="login_box">
			<form method="POST" id="frm" name="frm" action="loginProcess.php" onsubmit="return false">
			<h1 id="log_logo">
				<!--<img src="./images/logo.png" alt="">-->
				<span>시스템</span>
			</h1>
			<div class="log_wrap">
				<input class="log_id" type="text" name="usid" id="usid" placeholder="ID">
				<input class="log_pw" type="password" AUTOCOMPLETE="off" id="password" placeholder="PASSWORD">
				<button class="log_btn" style='cursor:pointer' id="loginBtn" onclick="login()">LOGIN</button>
				<input type="hidden"  name="password" id="postPassword">
				<input type="hidden"  name="prevUrl" id="prevUrl">
			</div>
			</form>
		</div>
	</div>
</body>
<script>
function login(){
	if(document.getElementById("usid").value==""){
		alert("아이디를 입력해주십시오.");
	}else if(document.getElementById("password").value==""){
		alert("비밀번호를 입력해주십시오.");
	}else{
		prevUrl = window.location.href;
		document.getElementById("prevUrl").value = prevUrl;
		var shaPw = CryptoJS.SHA256(document.getElementById("password").value).toString(); 
		document.getElementById("postPassword").value = shaPw;
		//form 보내기
		document.frm.submit();
	}
}
</script>
</html>