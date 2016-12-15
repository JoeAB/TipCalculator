			function customPercent(){
				var percent = $$('input:checked[type="radio"][name="percent"]').pluck('value')
				if(percent==0){
					$("customPercent").value = 12;
				}
				else{
					$("customPercent").value = ""
				}
			
			}
		
			function calculate(){
				var subtotal = $("subtotal").value;
				var percent = $$('input:checked[type="radio"][name="percent"]').pluck('value')
				if(percent == 0){
				   percent = $("customPercent").value;
				}
				var split = $("split").value;

				new Ajax.Request( "process_bill.php", 
				{ 
					method: "post", 
					parameters: { "subtotal": subtotal, "percent" : percent, "split" : split  },
					onSuccess: print
				} 
				);
			}
			function print(ajax){
				$("results").innerHTML = ajax.responseText;
				}
