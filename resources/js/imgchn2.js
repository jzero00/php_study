function imgchg(vl,id){
	if(vl==0){
		document.getElementById("chk"+id).value="";
		document.getElementById("chk_img_p"+id).style.display="none";
		document.getElementById("chk_img_a"+id).style.display="block";
	}else if(vl==1){
		document.getElementById("chk"+id).value="";
		document.getElementById("chk_img_a"+id).style.display="none";
		document.getElementById("chk_img_b"+id).style.display="block";
	}else if(vl==2){
		document.getElementById("chk"+id).value="";
		document.getElementById("chk_img_b"+id).style.display="none";
		document.getElementById("chk_img_c"+id).style.display="block";
	}
	else if(vl==3){
		document.getElementById("chk"+id).value="";
		document.getElementById("chk_img_c"+id).style.display="none";
		document.getElementById("chk_img_d"+id).style.display="block";
	}
	else if(vl==4){
		document.getElementById("chk"+id).value="";
		document.getElementById("chk_img_d"+id).style.display="none";
		document.getElementById("chk_img_a"+id).style.display="block";
	}
}

function imgchg2(vl,id){
	if(vl==0){
		document.getElementById("chk"+id).value="";
		document.getElementById("chk_img_p"+id).style.display="none";
		document.getElementById("chk_img_a"+id).style.display="block";
	}else if(vl==1){
		document.getElementById("chk"+id).value="";
		document.getElementById("chk_img_a"+id).style.display="none";
		document.getElementById("chk_img_b"+id).style.display="block";
	}else if(vl==2){
		document.getElementById("chk"+id).value="";
		document.getElementById("chk_img_b"+id).style.display="none";
		document.getElementById("chk_img_c"+id).style.display="block";
	}
	else if(vl==3){
		document.getElementById("chk"+id).value="";
		document.getElementById("chk_img_c"+id).style.display="none";
		document.getElementById("chk_img_d"+id).style.display="block";
	}
	else if(vl==4){
		document.getElementById("chk"+id).value="";
		document.getElementById("chk_img_d"+id).style.display="none";
		document.getElementById("chk_img_u"+id).style.display="block";
	}
	else if(vl==5){
		document.getElementById("chk"+id).value="";
		document.getElementById("chk_img_u"+id).style.display="none";
		document.getElementById("chk_img_a"+id).style.display="block";
	}
}


function imgchn(vl,id){
	if(vl==0){
		document.getElementById("chk"+id).value="";
		document.getElementById("chk_img_b"+id).style.display="none";
		document.getElementById("chk_img_o"+id).style.display="block";
	}else if(vl==1){
		document.getElementById("chk"+id).value="";
		document.getElementById("chk_img_o"+id).style.display="none";
		document.getElementById("chk_img_x"+id).style.display="block";
	}else if(vl==2){
		document.getElementById("chk"+id).value="";
		document.getElementById("chk_img_x"+id).style.display="none";
		document.getElementById("chk_img_o"+id).style.display="block";
	}
}

