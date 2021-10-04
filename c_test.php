<??>
<script src="./jquery-3.1.1.min.js"></script>
<form class="form_data">
    <div>
        <div class="input_wrap">
            <input type="checkbox" value="test1" name="chk[]" class="chk" onclick="oneCheck(this)">
            <span>test1</span>
        </div>
    </div>
    <div>
        <div class="input_wrap">
            <input type="checkbox" value="test2" name="chk[]" class="chk" onclick="oneCheck(this)">
            <span>test2</span>
        </div>
    </div>
    <div>
        <div class="input_wrap">
            <input type="checkbox" value="test3" name="chk[]" class="chk" onclick="oneCheck(this)">
            <span>test3</span>
        </div>
    </div>
    <div>
        <div class="input_wrap">
            <input type="checkbox" value="test4" name="chk[]" class="chk" onclick="oneCheck(this)">
            <span>test4</span>
        </div>
    </div>

    <button type="submit" name="submit" id="submit">확인</button>
</form>

<script>
	// let check = $('input:checkbox[name="chk"]:checked').val();

    // $(".chk").click(function(){
    //     $(".chk").attr("checked", false);
    //     $(this).attr("checked", true);
    // });

    // $(function(){
    //     $("input[type='checkbox']").bind("click", function(){
    //         $("input[type='checkbox']").not(this).prop("checked", flase);
    //     });
    // });
    


    // just one click
    // function oneCheck(a){
    //     let obj = $(".chk");
    //     for(let i=0; i<obj.length; i++){
    //         if (obj[i] != a){
    //             obj[i].checked = false;
    //         }
    //     }
    // } 

    // just one click 2
    // $('input[type="checkbox"][name="cash_val"]').click(function(){
    //     if($(this).prop('checked')){

    //         $('input[type="checkbox"][name="cash_val"]').prop('checked',false);

    //         $(this).prop('checked',true);
    //     }
    // });

    //체크 되있도록
    // input에 checked=”checked”
    // 필수 입력하도록
    // input에 required

    // 체크박스 여러개 보내기
    // name="cash_val[]"


    // $('input[type="checkbox"][name="cash_val"]').click(function(){
	// 					if($(this).prop('checked')){

	// 						$('input[type="checkbox"][name="cash_val"]').prop('checked',false);

	// 						$(this).prop('checked',true);
	// 					}
	// 				});




    $("#submit").click(function(){
        if($(".chk").is(":checked") == false){
			alert('체크 입력 완료 해주세요.')
			}
            else {
            
		    // Get form         
		    let form = $('.form_data')[0];       
		    // Create an FormData object          
		    let data = new FormData(form);         
		    // disabled the submit_go button         
		    $("#submit").prop("disabled", true);   
		    
		    $.ajax({             
		        type: "POST",          
		        enctype: 'multipart/form-data',  
		        url: 'c_up.php',
		        data: data,          
		        processData: false,    
		        contentType: false,      
		        cache: false,           
		        timeout: 600000,  
			
		        beforeSend : function() {  
		                
		            },
				
		        success: function (data) { 
					$('body').html(data);           
		            $("#submit").prop("disabled", false); 
                    alert("성공", "./c_up.php");
		            // location.reload(true); 
		        },          
		        error: function (e) {  
		            console.log("ERROR : ", e);     
		            $("#submit").prop("disabled", false);    
		            alert("실패");      
		            location.reload(true); 
		         }   
		    })
        }; 
    });
     
</script>
