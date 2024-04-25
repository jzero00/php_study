class SearchForm extends HTMLElement{
    connectedCallback(){

        let searchForm = document.createElement('form');
        searchForm.setAttribute('id','searchForm');
        searchForm.setAttribute('method','post');

        let input1 = document.createElement('input');
        input1.setAttribute('type','hidden');
        input1.setAttribute('name','page');
        let input2 = document.createElement('input');
        input2.setAttribute('type','hidden');
        input2.setAttribute('name','keyword');
        let input3 = document.createElement('input');
        input3.setAttribute('type','hidden');
        input3.setAttribute('name','searchType');
        let input4 = document.createElement('input');
        input4.setAttribute('type','hidden');
        input4.setAttribute('name','cn_se');
        let input5 = document.createElement('input');
        input5.setAttribute('type','hidden');
        input5.setAttribute('name','bbs_ty');
        let input6 = document.createElement('input');
        input6.setAttribute('type','hidden');
        input6.setAttribute('name','sdate');
        let input7 = document.createElement('input');
        input7.setAttribute('type','hidden');
        input7.setAttribute('name','edate');
       
        searchForm.appendChild(input1);
        searchForm.appendChild(input2);
        searchForm.appendChild(input3);
        searchForm.appendChild(input4);
        searchForm.appendChild(input5);
        searchForm.appendChild(input6);
        searchForm.appendChild(input7);

        this.appendChild(searchForm);

    }
}
customElements.define('search-form',SearchForm);

class AttendanceList extends HTMLElement {
	connectedCallback(){
		let tbody = document.querySelector('table[id=tb_job] > tbody');
		let cnt = tbody.querySelectorAll('tr').length - 2;
		if(cnt < 10) cnt = "0"+cnt;
		
		let tr = document.createElement('tr');
		
		let td1 = document.createElement('td');
		let input1 = document.createElement('input');
	    input1.setAttribute('type','text');
	    input1.setAttribute('name','['+cnt+']lab_psitn');
	    
	    td1.appendChild(input1);
	    
	   	let td2 = document.createElement('td');
		let input2 = document.createElement('input');
	    input2.setAttribute('type','text');
	    input2.setAttribute('name','['+cnt+']lab_nm');
	    
	    td2.appendChild(input2);
	    
	    let td3 = document.createElement('td');
	    let button1 = document.createElement('button');
	    button1.setAttribute('class','btn_sign');
	    button1.setAttribute('type','button');
	    button1.setAttribute('onclick','popup_sign(this)');
	    button1.innerText = '서명';
	    let textarea1 = document.createElement('textarea');
	    textarea1.style.display = 'none';
	    textarea1.setAttribute('name','['+cnt+']lab_sign');
	    textarea1.setAttribute('id','['+cnt+']lab_sign');
	    let img1 = document.createElement('img')
	    img1.setAttribute('id','['+cnt+']lab_sign');
	    
	    td3.appendChild(button1);
	    td3.appendChild(img1);
	    td3.appendChild(textarea1);
	    
	    let td4 = document.createElement('td');
	    let input4 = document.createElement('input');
	    input4.setAttribute('type','text');
	    input4.setAttribute('name','['+cnt+']usr_psitn');
	    
	    td4.appendChild(input4);
	    
	    let td5 = document.createElement('td');
	    let input5 = document.createElement('input');
	    input5.setAttribute('type','text');
	    input5.setAttribute('name','['+cnt+']usr_nm');
	    
	    td5.appendChild(input5);
	    
	    let td6 = document.createElement('td');
	    let button2 = document.createElement('button');
	    button2.setAttribute('class','btn_sign');
	    button2.setAttribute('type','button');
	    button2.setAttribute('onclick','popup_sign(this)');
	    button2.innerText = '서명';
	    let textarea2 = document.createElement('textarea');
	    textarea2.style.display = 'none';
	    textarea2.setAttribute('name','['+cnt+']usr_sign');
	    textarea2.setAttribute('id','['+cnt+']usr_sign');
	    let img2 = document.createElement('img')
	    img2.setAttribute('id','['+cnt+']usr_sign');
	    
	    td6.appendChild(button2);
	    td6.appendChild(img2);
	    td6.appendChild(textarea2);
	    
	    tr.appendChild(td1);
	    tr.appendChild(td2);
	    tr.appendChild(td3);
	    tr.appendChild(td4);
	    tr.appendChild(td5);
	    tr.appendChild(td6);
	    
	    tbody.appendChild(tr);
	}
}
customElements.define('attendance-list',AttendanceList);

class RiskEvaluation extends HTMLElement {
	connectedCallback(){
		let tbody = document.querySelector('table#tb_rsk > tbody');
		let cnt = tbody.querySelectorAll('tr[id*=tr_]').length + 1;
		if(cnt < 10) cnt = "0"+cnt;
		let tr1 = document.createElement('tr');
		let html = '';
		html +=
    `<td rowspan="4"><textarea name="[`+cnt+`]risk_fctr" style="height:155px"></textarea></td>
    <td>협력</td>
    <td><input name="[`+cnt+`]co_score" type="number" onkeyup="max_point(this)"></td>
    <td rowspan="4"><textarea name="[`+cnt+`]safe_managt" style="height:155px"></textarea></td>
    <td><input type="text" name="[`+cnt+`]co_risk_dcrs_cntrpln"></td>
    <td><input type="text" name="[`+cnt+`]co_entrps_nm"></td>
    <td><input type="text" name="[`+cnt+`]co_compt_de" class="datepicker" readonly></td>
    <td><input type="text" name="[`+cnt+`]co_maner"></td>
    <td><input type="text" name="[`+cnt+`]co_checker"></td>`
	tr1.setAttribute('id','tr_'+cnt);
	tr1.insertAdjacentHTML('beforeend',html);

	let tr2 = document.createElement('tr');
	html = '';
	html +=
	`<td><span style="color:#5f71c0">공사</span></td>
    <td><input name="[`+cnt+`]ce_score" type="number" onkeyup="max_point(this)"></td>
    <td><input type="text" name="[`+cnt+`]ce_risk_dcrs_cntrpln"></td>
    <td><input type="text" name="[`+cnt+`]ce_entrps_nm"></td>
    <td><input type="text" name="[`+cnt+`]ce_compt_de" class="datepicker" readonly></td>
    <td><input type="text" name="[`+cnt+`]ce_maner"></td>
    <td><input type="text" name="[`+cnt+`]ce_checker"></td>`;
	tr2.insertAdjacentHTML('beforeend',html);
	
	let tr3 = document.createElement('tr');
	html = '';
	html +=
	`<td><span style="color:#439843">안전</span></td>
    <td><input name="[`+cnt+`]sa_score" type="number" onkeyup="max_point(this)"></td>
    <td><input type="text" name="[`+cnt+`]sa_risk_dcrs_cntrpln"></td>
    <td><input type="text" name="[`+cnt+`]sa_entrps_nm"></td>
    <td><input type="text" name="[`+cnt+`]sa_compt_de" class="datepicker" readonly></td>
    <td><input type="text" name="[`+cnt+`]sa_maner"></td>
    <td><input type="text" name="[`+cnt+`]sa_checker"></td>`
	tr3.insertAdjacentHTML('beforeend',html);
	
	let tr4 = document.createElement('tr');
	html = '';
	html +=
		`<td><span style="color:#d63f3f">소장</span></td>
    <td><input name="[`+cnt+`]sm_score" type="number" onkeyup="max_point(this)"></td>
    <td><input type="text" name="[`+cnt+`]sm_risk_dcrs_cntrpln"></td>
    <td><input type="text" name="[`+cnt+`]sm_entrps_nm"></td>
    <td><input type="text" name="[`+cnt+`]sm_compt_de" class="datepicker" readonly></td>
    <td><input type="text" name="[`+cnt+`]sm_maner"></td>
    <td><input type="text" name="[`+cnt+`]sm_checker"></td>`
		tr4.insertAdjacentHTML('beforeend',html);

	tbody.appendChild(tr1);
	tbody.appendChild(tr2);
	tbody.appendChild(tr3);
	tbody.appendChild(tr4);
	}
}
customElements.define('risk-evaluation',RiskEvaluation);

class CheckItem extends HTMLElement {
	connectedCallback(){
		let tbody = document.querySelector('table#tb_job > tbody');
		let cnt = tbody.querySelectorAll('tr[id*=tr_]').length + 1;
		
		let tr = document.createElement('tr');
		tr.setAttribute('id','tr_'+cnt)
		
		let td1 = document.createElement('td');
		td1.innerText = cnt;
			
		if(cnt < 10) cnt = "0"+cnt;
		
		let td2 = document.createElement('td');
		let input1 = document.createElement('input');
		input1.setAttribute('type','text');
		input1.setAttribute('name','['+cnt+']item');
		td2.appendChild(input1);
		
		let td3 = document.createElement('td');
		let input2 = document.createElement('input');
		input2.setAttribute('type','text');
		input2.setAttribute('name','['+cnt+']chck_item');
		td3.appendChild(input2);
		
		let td4 = document.createElement('td');
		let input3 = document.createElement('input');
		input3.setAttribute('type','text');
		input3.setAttribute('name','['+cnt+']rm');
		td4.appendChild(input3);
		
		tr.appendChild(td1);
		tr.appendChild(td2);
		tr.appendChild(td3);
		tr.appendChild(td4);

		tbody.appendChild(tr);
	}
}
customElements.define('check-item',CheckItem);