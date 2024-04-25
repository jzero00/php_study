
	function imgchn(vl,id){
	if(vl==0){
		document.getElementById("chk"+id).value="○";
		document.getElementById("chk_img_b"+id).style.display="none";
		document.getElementById("chk_img_o"+id).style.display="block";
	}else if(vl==1){
		document.getElementById("chk"+id).value="△";
		document.getElementById("chk_img_o"+id).style.display="none";
		document.getElementById("chk_img_t"+id).style.display="block";
	}else if(vl==2){
		document.getElementById("chk"+id).value="Ⅹ";
		document.getElementById("chk_img_t"+id).style.display="none";
		document.getElementById("chk_img_x"+id).style.display="block";
	}
	else if(vl==3){
		document.getElementById("chk"+id).value="o";
		document.getElementById("chk_img_x"+id).style.display="none";
		document.getElementById("chk_img_o"+id).style.display="block";
	}
}
