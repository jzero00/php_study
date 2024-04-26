<li>
	<a href="javascript:search_list_go(1);">이전</a>
</li>
<li >
	<a href="javascript:search_list_go('${pageMaker.prev ? pageMaker.startPage-1 : 1}');"><i class="fas fa-angle-left"></i></a>
</li>
<c:forEach begin="${pageMaker.startPage }" end="${pageMaker.endPage }" var="pageNum">						
	<li class="page-item <c:out value="${pageMaker.cri.page == pageNum?'active':''}"/>">
		a href="javascript:search_list_go(${pageNum});" >${pageNum }</a>
	</li>
</c:forEach>
<li>
	<a href="javascript:search_list_go(${pageMaker.next ? pageMaker.endPage+1 : pageMaker.cri.page});"><i class="fas fa-angle-right" ></i></a>
</li>
<li>
    <a href="javascript:search_list_go(${pageMaker.realEndPage});">다음</a>
</li>