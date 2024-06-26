<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php   include $_SERVER["DOCUMENT_ROOT"]."/inc/head.inc"; ?>
</head>
<body>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.inc"; ?>
    <?php include "./userMngListSql.php"; ?>
    <div id="content">
        <article class="category">
            <div class="board_title">
                <h3>카테고리</h3><a class="more" href="">+</a>
        </div>
        <div id="browser" class="filetree treeview">
            <ul>
                <li class="closed expandable" id="1">
                    <div class="hitarea closed-hitarea expandable-hitarea"></div>
                    <span class="folder"><a title="현장" href="index.do?cidx=537" class="">현장</a></span>
                    <ul style="display: none;">
                        <li class="closed" id="111"><span class="folder"><a title="1구역" href="index.do?cidx=698">1구역</a></span></li>
                        <li class="closed" id="112"><span class="folder"><a title="2구역" href="index.do?cidx=699">2구역</a></span></li>
                        <li class="closed" id="113"><span class="folder"><a title="3구역" href="index.do?cidx=700">3구역</a></span></li>
                        <li class="closed" id="114"><span class="folder"><a title="4구역" href="index.do?cidx=701">4구역</a></span></li>
                        <li class="closed last" id="115"><span class="folder"><a title="5구역" href="index.do?cidx=702">5구역</a></span></li>
                    </ul>
                </li>
                <li class="closed expandable" id="110">
                    <div class="hitarea closed-hitarea expandable-hitarea"></div>
                    <span class="folder"><a title="구역" href="index.do?cidx=697" class="">구역</a></span>
                    <ul style="display: none;">
                        <li class="closed" id="111"><span class="folder"><a title="1구역" href="index.do?cidx=698">1구역</a></span></li>
                        <li class="closed" id="112"><span class="folder"><a title="2구역" href="index.do?cidx=699">2구역</a></span></li>
                        <li class="closed" id="113"><span class="folder"><a title="3구역" href="index.do?cidx=700">3구역</a></span></li>
                        <li class="closed" id="114"><span class="folder"><a title="4구역" href="index.do?cidx=701">4구역</a></span></li>
                        <li class="closed last" id="115"><span class="folder"><a title="5구역" href="index.do?cidx=702">5구역</a></span></li>
                    </ul>
                </li>
                
                <li class="closed expandable lastExpandable" id="116">
                    <div class="hitarea closed-hitarea expandable-hitarea lastExpandable-hitarea"></div>
                    <span class="folder"><a title="설비" href="index.do?cidx=703" class="">설비</a></span>
                    <ul style="display: none;">
                        <li class="closed" id="117"><span class="folder"><a title="A동" href="index.do?cidx=704">A동</a></span></li>
                        <li class="closed" id="118"><span class="folder"><a title="B동" href="index.do?cidx=705">B동</a></span></li>
                        <li class="closed" id="119"><span class="folder"><a title="C동" href="index.do?cidx=706">C동</a></span></li>
                        <li class="closed last" id="120"><span class="folder"><a title="D동" href="index.do?cidx=707">D동</a></span></li>
                    </ul>
                </li>
            </ul>
        </div>
    </article>
    <div class="board">
        <div class="navi">
            <h2>사용자관리</h2>
            <ul>
                <li><a href="userMngList.do">시스템관리</a></li>
                <li><a href="userMngList.do">사용자관리</a></li>
            </ul>
        </div>
        <div class="board_inner">
            <table class="sch_table">
                <colgroup>
                <col style="width:140px">
                <col style="width:auto">
                </colgroup>
                <tr>
                    <th>구분</th>
                    <td>
                        <select name="searchType" id="searchType" class="selectCSS">
                            <option value="nm" <?php $_SERVER["REQUEST_METHOD"] == "POST" && $_POST['searchType'] == 'nm' ? print('selected')  : '' ?>>이름</option>
                            <option value="id" <?php $_SERVER["REQUEST_METHOD"] == "POST" && $_POST['searchType'] == 'id' ? print('selected')  : '' ?>>아이디</option>
                            <option value="pn" <?php $_SERVER["REQUEST_METHOD"] == "POST" && $_POST['searchType'] == 'pn' ? print('selected')  : '' ?>>휴대폰번호</option>
                            <option value="ed" <?php $_SERVER["REQUEST_METHOD"] == "POST" && $_POST['searchType'] == 'ed' ? print('selected')  : '' ?>>만료일</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>상태</th>
                <td>
                    <input type="checkbox" id="st1" value="1" class="usrStatus"> <label for="st1">대기중</label>
                    <input type="checkbox" id="st2" value="1" class="usrStatus"> <label for="st2">승인취소</label>
                    <input type="checkbox" id="st3" value="1" class="usrStatus"> <label for="st3">승인완료</label>
                    <input type="checkbox" id="st4" value="1" class="usrStatus"> <label for="st4">승인만료</label>
                </td>
            </tr>
            <tr>
                <th>검색어</th>
                <td>
                    <input name="keyword" id="keyword" type="text" class="inputSearch2" value="<?php $_SERVER["REQUEST_METHOD"] == "POST" ? print($_POST['keyword'])  : '' ?>">
                    <button class="btn_sch" onclick="search()">검색</button>
                    <button class="btn_reset" onclick="reset()">초기화</button>
                </td>
            </tr>
        </table>
        <ul class="dw_bar">
            <li><a onclick="deleteUser()">선택삭제</a></li>
            <li><a href="<?php echo htmlspecialchars('userMngReg.php') ?>">등록</a></li>
        </ul>
        <table class="table_list">
            <colgroup>
            <col style="width:auto">
            <col style="width:auto">
            <col style="width:10%">
            <col style="width:15%">
            <col style="width:10%">
            <col style="width:10%">
            <col style="width:10%">
            <col style="width:15%">
            <col style="width:15%">
            <col style="width:10%">
        </colgroup>
        <tr>
            <th><input type="checkbox"></th>
            <th>No.</th>
            <th>카테고리1</th>
            <th>카테고리2</th>
            <th>권한</th>
            <th>이름</th>
            <th>아이디</th>
            <th>휴대폰번호</th>
            <th>만료일</th>
            <th>승인여부</th>
        </tr>
            <?php echo $list;?>
        </table>
        <form id="searchForm" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
            <input type='hidden' name="page" value="<?php $_SERVER["REQUEST_METHOD"] == "POST" ? print($_POST['page'])  : print(1) ?>" />
            <input type='hidden' name="keyword" value="<?php $_SERVER["REQUEST_METHOD"] == "POST" ? print($_POST['keyword'])  : '' ?>" />
            <input type='hidden' name="searchType" value="<?php $_SERVER["REQUEST_METHOD"] == "POST" ? print($_POST['searchType'])  : '' ?>" />
            <input type='hidden' name="cnSe" value="<?php $_SERVER["REQUEST_METHOD"] == "POST" ? print($_POST['cnSe'])  : '' ?>" />
        </form>
        <!-- 					<ul class="dw_bar"> -->
        <!-- 						<li><a href="sub071.php">목록</a></li> -->
        <!-- 					</ul> -->
            <ul class="page_bar">
                <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/pagination.php"; ?>
            </ul>
        </div>
    </div>
</div>
</body>
<script>
    function search(){
        var searhForm = document.querySelector("#searchForm");
        console.log(searhForm);
        
        var keyword = document.querySelector("input#keyword").value;
        var searchType = document.querySelector("select#searchType").value;
        console.log(keyword);
        console.log(searchType);
        
        var iType = searhForm.querySelector("input[name='searchType']");
        var iKey = searhForm.querySelector("input[name='keyword']");
        var iPage = searhForm.querySelector("input[name='page']");
        
        iType.value = searchType;
        iKey.value = keyword;
        iPage.value = 1;
        
        console.log(iType.value);
        console.log(iKey.value);
        
    // 	console.log(document.querySelector("form#searchForm"));
        document.querySelector("form#searchForm").submit();
    }

    function reset(){
        var searhForm = document.querySelector("#searchForm");
        
        var iType = searhForm.querySelector("input[name='searchType']");
        var iKey = searhForm.querySelector("input[name='keyword']");
        var iPage = searhForm.querySelector("input[name='page']");

        iType.value = '';
        iKey.value = '';
        iPage.value = 1;

        document.querySelector("form#searchForm").submit();
    }
</script>
</html>