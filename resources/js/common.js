/**
 * view page 이동
 * @param {번호 이름} name 
 * @param {등록번호} value 
 * @param {view page url} url 
 */
function moveUrl(name, value, url){
	let form = document.createElement('form');
	
	let obj;
	obj = document.createElement('input');
	obj.setAttribute('type','hidden');
	obj.setAttribute('name',name);
	obj.setAttribute('value',value);
	
	form.appendChild(obj);
	form.setAttribute('method','post');
	form.setAttribute('action',url);
	document.body.appendChild(form);
	form.submit();
}

/**
 * 검사결과 이미지 변경 script
 * @param i
 * @param j
 * @returns
 */
function imgchn_abc(i,j){
	if(i == 0){
		document.querySelector('img[id=cabc_p1]').style.display='none';
		document.querySelector('img[id=cabc_a1]').style.display='block';
		document.querySelector('input[name=chck_result]').value = 1;
	} else if(i == 1){
		document.querySelector('img[id=cabc_a1]').style.display='none';
		document.querySelector('img[id=cabc_b1]').style.display='block';
		document.querySelector('input[name=chck_result]').value = 2;
	} else if(i == 2){
		document.querySelector('img[id=cabc_b1]').style.display='none';
		document.querySelector('img[id=cabc_c1]').style.display='block';
		document.querySelector('input[name=chck_result]').value = 3;
	} else if(i == 3){
		document.querySelector('img[id=cabc_c1]').style.display='none';
		document.querySelector('img[id=cabc_a1]').style.display='block';
		document.querySelector('input[name=chck_result]').value = 1;
	}
}

/**
 * 페이징 처리 페이지 번호로 이동
 * @param pageNo
 * @returns
 */
function search_list_go(pageNo){
	let searhForm = document.querySelector("#searchForm");
	let page = searhForm.querySelector("input[name='page']");
	page.value = pageNo;
	let sch_table = document.querySelector('table.sch_table');
	
	if(sch_table != null){
		let checkbox = sch_table.querySelectorAll('input[type=checkbox]:checked');
		if(checkbox != null && checkbox.length > 0){
			let filter = [];
			checkbox.forEach(function(el,index){
				filter.push(el.value);
			});
			searchForm.querySelector('input[name=filterArray]').value = filter;		
		}
	}
	
	document.querySelector("form#searchForm").submit();			
}

/**
 * List에 삭제를 위해 checkbox있을때 tr에 걸려있는 onclick 이벤트와 겹치기 않게 하기 위해
 * event bubbling 방지
 * @returns
 */
function preventBubbling(){
	let checkbox = document.querySelectorAll("input[type=checkbox]");
	checkbox.forEach((e) => {
		e.addEventListener('click', function (event){
			event.stopPropagation();
		})
		e.parentNode.addEventListener('click', function (event){
			event.stopPropagation();
		})
	});	
}

/**
 * list 화면에서 checkbox 전체 선택 혹은 해제하는 function
 * @returns
 */
function addOptionCheckAll(){	
	let table = document.querySelector('table.table_list');
	let checkBox = table.querySelector('input[type=checkbox]');
	checkBox.addEventListener('click',function(){
		let checkBoxs = table.querySelectorAll('input[type=checkbox]');
		if(this.checked == false){
			checkBoxs.forEach(function(e){
				e.checked = false;
			});
		} else {
			checkBoxs.forEach(function(e){
				e.checked = true;
			});
		}
	});
}

/**
 * 카테고리 클릭시 검색
 * @returns
 */
function searchByCategory(el){
	console.log(el);
	let category_id = el.id;
	let form = document.querySelector('form[id=searchForm]');
	form.querySelector('input[name=category_id]').value = category_id;
	form.submit();
}

/**
 * @param totalCount	: 목록 전체 건수
 * @param pageNo		: 페이지 번호
 * @param totalPage		: 전체 페이지 수
 * @param childNo		: 숫자 위치 번호(왼쪽 시작 번호 : 1)
 * @returns				: 목록 출력시 번호 매겨주는 함수 (table class 는 table_list 일때만 사용 가능)
 */
function numbering(totalCount,pageNo,totalPage,childNo,startRow){
	var tr = new Array();	// tr 담을 배열 처음은 th부분 포함
	var startNo = (totalPage - pageNo) * 10 + (totalCount % 10);	// table No 시작번호
	if(totalCount == 10) startNo = 10;

	tr = document.querySelector('table.table_list').getElementsByTagName("tr");
	
	for(i = startRow; i < tr.length; i++){
		if(totalCount - (totalPage * 10) <= 0){
			tr[i].querySelector('td:nth-child('+childNo+')').innerHTML = startNo;
			startNo--;
		} else{
			
		}
	}
}