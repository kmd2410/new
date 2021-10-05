<script src="./jquery-3.1.1.min.js"></script>
<html>
    <body>
        <form action="" id="data" name="data">
            <input type="hidden" id="1" value="test1" name="1">
            <input type="hidden" id="2" value="test2" name="2">
            <input type="hidden" id="3" value="test3" name="3">
            <input type="hidden" id="4" value="test4" name="4">

            <input type="submit" id="submit">
        </form>
    </body>

    <script>
        $("#submit").click(function(){
                // $.ajax({
                // type: "",
                // url: "serialize_update.php",
                // type: "POST",
                // data: $("#data").serialize(),
                // dataType: "json",
                // success : function(data){
                //     alert("success","./serialize_update.php");
                // },
                // error: function (e) {  
		        //     console.log("ERROR : ", e);     
		        //     $("#submit").prop("disabled", false);    
		        //     alert("실패");      
		        //     location.reload(true); 
		        // }  
            // });

            // $.ajax({
            //     url: "./serialize_update.php",
            //     type: "POST",
            //     contentType: "application/json; charset=utf-8",
            //     data: $("#data").serialize();
            //     // data: $("#data").serialize(),
            //     // contentType: "appllication/x-www-form-urlencoded; charset=UTF-8",
            //     // dataType: "html",
            //     dataType:"json",
            //     success: function (data){
            //         // alert("success", "./serialize_update.php");
            //         alert("성공");
            //     },
            //     error: function(e){
            //         alert("false");
            //         location.reload(true);
            //     }
            // });
            // let form = $("#data")[0];
            // let data = new FormData(form.serialize());
            let data = $("#data").serialize();
            
            $.ajax({             
		        type: "POST",          
		        enctype: 'multipart/form-data',
		        url: 'serialize_update.php',
		        data: data,         
		        processData: false,    
		        contentType: false,      
		        cache: false,           
		        timeout: 600000,  
			
		        beforeSend : function() {  
		                
		            },
				
		        success: function (data) { 
					// $('body').html(data);           
		            $("#submit").prop("disabled", false); 
                    alert("성공", "./serialize_update.php");
		            // location.reload(true); 
		        },          
		        error: function (e) {  
		            console.log("ERROR : ", e);     
		            $("#submit").prop("disabled", false);    
		            alert("실패");      
		            location.reload(true); 
		         }   
		    })
        });
        
    </script>        
</html>