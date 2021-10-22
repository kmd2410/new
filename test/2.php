<?  
    include_once $_SERVER["DOCUMENT_ROOT"]."/common.php"; 
    
    // INSERT PAGE
    
    $id = $_POST["id"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // $val = implode(",",$check);

    // echo $id.$password.$email.$phone;

    if ($id == "" || $password == "" || $email == "" || $phone == ""){
    } else {
        $result = sql_query("INSERT INTO 20211022_table (id,password,email,phone) VALUES ('$id','$password','$email', '$phone')");
    }

    echo ($result) ? "DB입력성공" : "DB입력실패";

?>
<br>
<a href="http://swmake.dothome.co.kr/myadmin" target="_blank">입력확인</a>
<a href="./3.php">데이터 불러오기</a>
<a href="./4.php">모든전화번호1로수정</a>
<a href="./5.php">index3만번호1004로수정</a>

<script>
    history.pushState(null, document.title, location.href);

window.addEventListener('popstate', function(event) {

    history.pushState(null, document.title, location.href);

    });

</script>

