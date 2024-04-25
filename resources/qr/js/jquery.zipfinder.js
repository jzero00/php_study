//zipfinder


var target_zip = null;
var target_addr = null;

var src_zipfinder = "";
src_zipfinder += "<div style='text-align:center;overflow:hidden;'><form id='zipform' onsubmit='return doZipfinder()' style='margin:0'><input type='text' style='border:1px solid #CCCCCC' name='keyword' id='keyword' /> <button class='ui-state-default ui-corner-all' type='button' style='height:18px' onclick='doZipfinder()'>우편번호검색</button></form></div>";
src_zipfinder += "<div><select id='ziplist' style='border:1px solid #ccc;background:#fff;margin:5px;float:left;width:420px;' size='9'>";
src_zipfinder += "</select></div>";



function zipfinderOpen(code,addr){

	$('#div-zipfinder').dialog({
			width:460,
			height:305,
			title:'우편번호 찾기',
			modal:true,
			buttons: {
				"닫기": function() { 
					$(this).dialog("close"); 
				}, 
				"우편번호 선택": function() { 
					if( syncZip() ){
						$(this).dialog("close"); 
					}
				} 
			},
			open:function(){
				$('#div-zipfinder').show();
					target_zip = code;
					target_addr = addr;
					$('#keyword').focus();

				$('.selectbox').css("visibility","hidden");
			},
			close:function(){
				$('#div-zipfinder').dialog("destroy");
				$('.selectbox').css("visibility","visible");
			}
		});

}

function doZipfinder(){

	var obj = document.getElementById('ziplist');
	for( var i = obj.length-1; i >= 0 ; i-- ){
		obj.options[i] = null;
	}
	

	$.ajax({
		url:'/zipfinder/search',
		type:'POST',
		data:$('#zipform').serialize(),
		dataType:"json",
		success: function(json){

		  if( json ){
			var obj = document.getElementById('ziplist');
			for( i = 0 ; i < json.length; i++ ){
					obj.options[i] = new Option("[" + json[i].code + "] " + json[i].addr2,json[i].code + ":" + json[i].addr);
			}
		  }
		}//end of onSuccess
	  });

	 return false;

}

function syncZip(){
	var obj = document.getElementById('ziplist');

	if( obj.selectedIndex == -1 ){
		alert("우편번호를 선택하십시오");
		return false;
	}

	var zip = obj.options[obj.selectedIndex].value.split(":");

	$('#'+target_zip).val(zip[0]);
	$('#'+target_addr).val(zip[1]);
	$('.selectbox').css("visibility","visible");
	return true;

}

//load zipfinder
$(function(){

	$('body').append($("<div id='div-zipfinder' style='display:none;overfow:hidden;'>").html(src_zipfinder));

	$('.zipfinder').each(function(){
		var _this = $(this);
		_this.css('cursor','pointer');

		_this.click(function(){
			_zip = _this.attr('options').split(',')[0];
			_addr = _this.attr('options').split(',')[1];

			zipfinderOpen(_zip,_addr);
	
		});
	});
});