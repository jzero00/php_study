<?php
	$limit = 10;
	$endPage = $cnt / $limit;
	$endPage = (int) $endPage + 1;
	$startPage = 1;
	$realEndPage = $endPage;
	

?>
<li>
	<a href="javascript:search_list_go(1);">이전</a>
</li>
<!-- <li >
	<a href="javascript:search_list_go('${pageMaker.prev ? pageMaker.startPage-1 : 1}');"><i class="fas fa-angle-left"></i></a>
</li> -->
<!--<c:forEach begin="${pageMaker.startPage }" end="${pageMaker.endPage }" var="pageNum">						
	<li class="page-item <c:out value="${pageMaker.cri.page == pageNum?'active':''}"/>
		<a href="javascript:search_list_go(${pageNum});" >${pageNum }</a>
	</li>
</c:forEach>-->
<?php
$button = "";
for ($i = $startPage; $i == $endPage; $i++){
	$button = "<li class='page-item' value='{$i}'>";
	$button = $button."<a href='javascript:search_list_go({$i})';>".$i."</a>";
	$button = $button."</li>";
}
echo $button;
?>
<!-- <li>
	<a href="javascript:search_list_go(${pageMaker.next ? pageMaker.endPage+1 : pageMaker.cri.page});"><i class="fas fa-angle-right" ></i></a>
</li> -->
<li>
    <a href="javascript:search_list_go(<?php print($realEndPage) ?>);">다음</a>
</li>