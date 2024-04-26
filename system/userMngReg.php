<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php   include $_SERVER["DOCUMENT_ROOT"]."/inc/head.inc"; ?>
</head>
<body>
<div id="content">
	<div class="navi">
		<h2>사용자관리</h2>
		<ul>
			<li><a href="userMngList.php">시스템관리</a></li>
			<li><a href="userMngList.php">사용자관리</a></li>
		</ul>
	</div>
	<div class="board_inner">
		<div class="board_title2">
			<h3>사용자정보 등록</h3>
		</div>
		<form name="frm" id="frm" method="post" action="userMngReg.php">	
<!-- 			<input type="hidden" value="sub00801i.do" name="loc"> -->
<!-- 			<input name="midchk" id="midchk" type="hidden" value="0"> -->
			<table class="table_view">
				<colgroup>
					<col style="width:150px">
					<col style="width:30%">
					<col style="width:150px">
					<col style="width:auto">
				</colgroup>
					<tbody>
						<tr>
							<th>사용자타입</th>
							<td colspan="3">
								<c:forEach items="${authList }" var="auth">
									<c:if test="${auth.authUseyn eq 'Y' }">
										<input type="radio" id="usrAuth" name="authoryNo" value="${auth.authoryNo }"> <label for="group1">${auth.authNm }</label>							
									</c:if>
								</c:forEach>
							</td>
						</tr>
						<tr>
						<th>카테고리</th>
						<td colspan="3">
							<select id="category1" onchange="getCategoryList(2)" class="selectCSS" style="width: 200px; text-align: center;">
							</select>
							<select id="category2" onchange="getCategoryList(3)" class="selectCSS" style="width: 200px; text-align: center;">
							</select>
							<select name="userCtgry" id="category3" class="selectCSS" style="width: 200px; text-align: center;">
							</select>
						</td>
						</tr>
						<tr>
							<th>ID</th>
							<td><input type="text" name="usid" id="usid" style="width:150px"><button class="btn_sch" type="button" onclick="duple()">중복확인</button></td>
							<th>성명</th>
							<td><input type="text" name="userNm" id="userNm" style="width: 200px;"></td>
						</tr>
						<tr>
							<th>직위</th>
							<td><input type="text" style="width:150px" name="userClsf"></td>
							<th>연락처</th>
							<td><input type="text" style="width: 200px;" name="userTelno"></td>
						</tr>
						<tr>
							<th>비밀번호</th>
							<td><input type="password" style="width:150px" id="password1"></td>
							<th>비밀번호확인</th>
							<td><input type="password" style="width: 200px;" id="password2"></td>
						</tr>
				


<%-- 				<tr>
					<th>협력사명</th>
					<td>
						<input type="text" style="width:150px;"><button class="btn_sch">검색</button>		
						<select name="" id="" class="selectCSS">
							
						</select>
						<button class="btn_sel">선택</button>
					<input type="text" name='COOP_NM' style="width:150px"></td>
					<th>협력사구분</th>
					<td> 현장관리 - 협력사관리 에서 불러오기
					
						<select name='COOP_SE' id="" class="selectCSS">
							<option value="1">기구</option>
							<option value="2">전장</option>
							<option value="3">제어</option>
							<option value="4">SW</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>협력사소장</th>
					<td colspan="3">현장관리 - 협력사관리 에서 불러오기 <input type="text" name='COOP_PSSO' style="width:150px"></td>
				</tr>
				<tr>
					<th>협력사 연락처</th>
					<td>현장관리 - 협력사관리 에서 불러오기 <input type="text" name='TELNO' style="width:150px"></td>
					<th>협력사  이메일</th>
					<td>현장관리 - 협력사관리 에서 불러오기 <input type="text" name='EML' style="width:200px"></td>
				</tr>
			</tbody></table>--%>
					</tbody>
				</table>
				<input type="hidden" name="idCheck" id="idCheck" />
				<input type="hidden" name="password" id="postPassword" />
			</form>
			<ul class="dw_bar">
				<li></li>
				<li>
					<a onclick="reg()">저장</a>
					<a onclick="history.back(-1)">취소</a>
				</li>
			</ul>
			
		</div>
	</div>
</body>