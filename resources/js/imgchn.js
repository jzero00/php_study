
function imgchn(vl,id){
	document.getElementById("chk_img_b"+id).style.display="none";
	document.getElementById("chk_img_o"+id).style.display="none";
	document.getElementById("chk_img_t"+id).style.display="none";
	document.getElementById("chk_img_x"+id).style.display="none";
	if(vl==0){
		document.getElementById("chk"+id).value="2";
		document.getElementById("chk_img_o"+id).style.display="block";
	}else if(vl==1){
		document.getElementById("chk"+id).value="1";
		document.getElementById("chk_img_t"+id).style.display="block";
	}else if(vl==2){
		document.getElementById("chk"+id).value="3";
		document.getElementById("chk_img_x"+id).style.display="block";
	}
	else if(vl==3){
		document.getElementById("chk"+id).value="2";
		document.getElementById("chk_img_o"+id).style.display="block";
	}
}
function imgchn2(vl,id){ 
	document.getElementById("chk_img_b"+id).style.display="none";
	document.getElementById("chk_img_o"+id).style.display="none";
	document.getElementById("chk_img_t"+id).style.display="none";
	document.getElementById("chk_img_x"+id).style.display="none";
	if(vl==0){
		document.getElementById("chk"+id).value="2";
		document.getElementById("chk_img_o"+id).style.display="block";
	}else if(vl==1){
		document.getElementById("chk"+id).value="1";
		document.getElementById("chk_img_t"+id).style.display="block";
	}else if(vl==2){
		document.getElementById("chk"+id).value="3";
		document.getElementById("chk_img_x"+id).style.display="block";
		alert("사유입력 및 사진을 첨부해 주세요.");
	}
	else if(vl==3){
		document.getElementById("chk"+id).value="2";
		document.getElementById("chk_img_o"+id).style.display="block";
	}
}

function urlencode(str) {
	str = (str + '').toString();
	return encodeURIComponent(str)
		.replace(/!/g, '%21')
		.replace(/'/g, '%27')
		.replace(/\(/g, '%28')
		.replace(/\)/g, '%29')
		.replace(/\*/g, '%2A')
		.replace(/%20/g, '+');
}

function getTimeStamp() {
 var d = new Date();
 var s = d.getFullYear() + d.getMonth() + d.getDate() + d.getHours() + d.getMinutes() + d.getSeconds();
 return "&time="+s;
}

function file_chng(vl,no){

	var fileList = vl.files ;

	var reader = new FileReader();
	reader.readAsDataURL(fileList [0]);

	reader.onload = function  () {
		document.querySelector('#preview'+no).src = reader.result ;
		document.getElementById("preview"+no).style.display = "block";
	};
}		