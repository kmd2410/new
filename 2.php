<?  
    
    // INSERT PAGE
    
    $id = $_POST["id"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $check = $_POST["check"];

    // $val = implode(",",$check);

    // echo $id.$password.$email.$phone;

    $connect = new mysqli("localhost","kmd2410","a135790!","kmd2410");
    if($connect->connect_errno){
        echo 'DB연결실패:'.$connect->connect_error.'';
        exit(); 
    } else {
        echo "DB연결성공<br>";
    }

    $query = "INSERT INTO 20211005_table (id,password,email,phone,check_val) VALUES ('$id','$password','$email','$phone','$check')";
    $result = mysqli_query($connect,$query);

    echo ($result) ? "DB입력성공" : "DB입력실패";
?>
<br>
<!-- <button type="button" onclick="click()">입력확인</ㅠ> -->
<a href="http://kmd2410.dothome.co.kr/myadmin" target="_blank">입력확인</a>
<!-- 아이디 kmd2410 비밀번호 a135790! 테이블네임 20211005_table-->
<a href="./3.php">데이터 불러오기</a>
<a href="./4.php">모든전화번호1로수정</a>
<a href="./5.php">index3만번호1004로수정</a>

<script>
    history.pushState(null, document.title, location.href);

window.addEventListener('popstate', function(event) {

    history.pushState(null, document.title, location.href);

    });

</script>

