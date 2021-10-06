<!-- Front Page -->
<script src="./jquery-3.1.1.min.js"></script>
<html>
    <form action="./2.php" method="POST">
        <fieldset>
            <input type="text" placeholder="아이디" name="id"><br>
            <input type="password" placeholder="비밀번호" name="password"><br>
            <input type="text" placeholder="이메일" name="email"><br>
            <input type="number" id="phoneNum" placeholder="전화번호" name="phone" maxlength="11"><br>
            
            <input type="checkbox" name="check" value="c1" class="chk" checked="checked"><span>chk1</span><br>
            <input type="checkbox" name="check" value="c2" class="chk"><span>chk2</span><br>
            <input type="submit">
        </fieldset>
    </form>
</html>

<script>
    $('input[type="checkbox"][name="check"]').click(function(){
        if($(this).prop('checked')){

            $('input[type="checkbox"][name="check"]').prop('checked',false);

            $(this).prop('checked',true);
        }
    });

    // var autoHypenPhone = function(str){
    //     str = str.replace(/[^0-9]/g, '');
    //     var tmp = '';
    //     if( str.length < 4){
    //         return str;
    //     }else if(str.length < 7){
    //         tmp += str.substr(0, 3);
    //         tmp += '-';
    //         tmp += str.substr(3);
    //         return tmp;
    //     }else if(str.length < 11){
    //         tmp += str.substr(0, 3);
    //         tmp += '-';
    //         tmp += str.substr(3, 3);
    //         tmp += '-';
    //         tmp += str.substr(6);
    //         return tmp;
    //     }else{              
    //         tmp += str.substr(0, 3);
    //         tmp += '-';
    //         tmp += str.substr(3, 4);
    //         tmp += '-';
    //         tmp += str.substr(7);
    //         return tmp;
    //     }
    
    //     return str;
    // }


    // var phoneNum = document.getElementById('phoneNum');

    // phoneNum.onkeyup = function(){
    // console.log(this.value);
    // this.value = autoHypenPhone( this.value ) ;  
    // }

    
</script>
