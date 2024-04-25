
		function calc_1a(){
			var txt1a = document.getElementById("txt_1a").value;
			var txt1c = document.getElementById("txt_1c").value;
			document.getElementById("txt_1b").value= (parseFloat(txt1a)*1.2).toFixed(2);
			var txt1b = document.getElementById("txt_1b").value;
			if(txt1c!=""){
				if(parseFloat(txt1c) > parseFloat(txt1b)){
					document.getElementById("td_rst1").innerHTML = '<b class="o_txt">통과</b>';
				}else{
					document.getElementById("td_rst1").innerHTML = '<b class="n_txt">불가</b>';
				}
			}
		}
		function calc_1b(){
			var txt1a = document.getElementById("txt_1a").value;
			var txt1b = document.getElementById("txt_1b").value;
			var txt1c = document.getElementById("txt_1c").value;
			if(txt1a!=""){
				if(parseFloat(txt1c) > parseFloat(txt1b)){
					document.getElementById("td_rst1").innerHTML = '<b class="o_txt">통과</b>';
				}else{
					document.getElementById("td_rst1").innerHTML = '<b class="n_txt">불가</b>';
				}
			}
		}
		function calc_2a(){
			var txt2a = document.getElementById("txt_2a").value;
			var txt2c = document.getElementById("txt_2c").value;	
			var txt2e = document.getElementById("txt_2e").value;
			var txt2g = document.getElementById("txt_2g").value;
			if(txt2a!="" && txt2c!=""){
				document.getElementById("txt_2d").value=((parseFloat(txt2a)*10*0.25)+(parseFloat(txt2c)*10*0.7)).toFixed(2);
				var txt2d = document.getElementById("txt_2d").value;
				if(txt2e!=""){
					document.getElementById("txt_2f").value= (parseFloat(txt2d)/ parseFloat(txt2e)).toFixed(2);
					var txt2f = document.getElementById("txt_2f").value;
					if(txt2g!=""){
						if(parseFloat(txt2f) < parseFloat(txt2g)){
							document.getElementById("td_rst2").innerHTML = '<b class="o_txt">통과</b>';
						}else{
							document.getElementById("td_rst2").innerHTML = '<b class="n_txt">불가</b>';
						}
					}
				}
			}
		}
		function calc_2b(){
			var txt2a = document.getElementById("txt_2a").value;
			var txt2b = document.getElementById("txt_2b").value;
			var txt2e = document.getElementById("txt_2e").value;
			var txt2g = document.getElementById("txt_2g").value;
			if(txt2b!=""){
				document.getElementById("txt_2c").value= (parseFloat(txt2b)*1.2).toFixed(2);
				var txt2c = document.getElementById("txt_2c").value;
				if(txt2a!=""){
					document.getElementById("txt_2d").value=((parseFloat(txt2a)*10*0.25)+(parseFloat(txt2c)*10*0.7)).toFixed(2);
					var txt2d = document.getElementById("txt_2d").value;
					if(txt2e!=""){
						document.getElementById("txt_2f").value= (parseFloat(txt2d)/ parseFloat(txt2e)).toFixed(2);
						var txt2f = document.getElementById("txt_2f").value;
						if(txt2g!=""){
							if(parseFloat(txt2f) < parseFloat(txt2g)){
								document.getElementById("td_rst2").innerHTML = '<b class="o_txt">통과</b>';
							}else{
								document.getElementById("td_rst2").innerHTML = '<b class="n_txt">불가</b>';
							}
						}
					}
				}
			}
		}
		function calc_2c(){
			var txt2d = document.getElementById("txt_2d").value;
			var txt2e = document.getElementById("txt_2e").value;
			var txt2g = document.getElementById("txt_2g").value;
			if(txt2d!="" && txt2e!=""){
				document.getElementById("txt_2f").value= (parseFloat(txt2d)/ parseFloat(txt2e)).toFixed(2);
				var txt2f = document.getElementById("txt_2f").value;
				if(txt2g!=""){
					if(parseFloat(txt2f) < parseFloat(txt2g)){
						document.getElementById("td_rst2").innerHTML = '<b class="o_txt">통과</b>';
					}else{
						document.getElementById("td_rst2").innerHTML = '<b class="n_txt">불가</b>';
					}
				}
			}
		}
		function calc_2d(){
			var txt2f = document.getElementById("txt_2f").value;
			var txt2g = document.getElementById("txt_2g").value;
			if(txt2f!="" && txt2g!=""){
				if(parseFloat(txt2f) < parseFloat(txt2g)){
					document.getElementById("td_rst2").innerHTML = '<b class="o_txt">통과</b>';
				}else{
					document.getElementById("td_rst2").innerHTML = '<b class="n_txt">불가</b>';
				}
			}
		}
		function calc_3(){
			var txt3a = document.getElementById("txt_3a").value;
			var txt3b = document.getElementById("txt_3b").value;
			var txt3c = document.getElementById("txt_3c").value;
			var txt3d = document.getElementById("txt_3d").value;
			var txt3e = document.getElementById("txt_3e").value;
			if(txt3a!="" && txt3b!="" && txt3c!="" && txt3d!="" && txt3e!=""){
				var calc_rst = ((parseFloat(txt3a)*parseFloat(txt3b)*0.01*parseFloat(txt3c))/(parseFloat(txt3d)*parseFloat(txt3e))).toFixed(2);
				document.getElementById("txt_3f").value = calc_rst;
				if(calc_rst >= 5){
					document.getElementById("td_rst3").innerHTML = '<b class="o_txt">통과</b>';
				}else{
					document.getElementById("td_rst3").innerHTML = '<b class="n_txt">불가</b>';
				}
			}
		}
		function calc_4(){
			var txt4a = document.getElementById("txt_4a").value;
			var txt4b = document.getElementById("txt_4b").value;
			var txt4c = document.getElementById("txt_4c").value;
			var txt4d = document.getElementById("txt_4d").value;
			if(txt4a!="" && txt4b!="" && txt4c!="" && txt4d!=""){
				var calc_rst = ((parseFloat(txt4a)*parseFloat(txt4b)*parseFloat(txt4c))/(parseFloat(txt4d))).toFixed(2);
				document.getElementById("txt_4e").value = calc_rst;
				if(calc_rst >= 5){
					document.getElementById("td_rst4").innerHTML = '<b class="o_txt">통과</b>';
				}else{
					document.getElementById("td_rst4").innerHTML = '<b class="n_txt">불가</b>';
				}
			}
		}
		function calc_5(){
			var txt5a = document.getElementById("txt_5a").value;
			var txt5b = document.getElementById("txt_5b").value;
			var txt5c = document.getElementById("txt_5c").value;
			var txt5d = document.getElementById("txt_5d").value;
			if(txt5a!="" && txt5b!="" && txt5c!="" && txt5d!=""){
				var calc_rst = ((parseFloat(txt5a)*parseFloat(txt5b)*0.01*parseFloat(txt5c))/(parseFloat(txt5d))).toFixed(2);
				document.getElementById("txt_5e").value = calc_rst;
				if(calc_rst >= 5){
					document.getElementById("td_rst5").innerHTML = '<b class="o_txt">통과</b>';
				}else{
					document.getElementById("td_rst5").innerHTML = '<b class="n_txt">불가</b>';
				}
			}
		}