<?  
    //데이터불러오기

    include("./2.php");
    $query = "SELECT * FROM 20211005_table";
    $result = mysqli_query($connect,$query);

    $num = mysqli_num_rows($result); 

    // if (mysqli_num_rows($result) > 0 ) {
        
    //     while($row = mysqli_fetch_array($result)){
    //         echo "아이디".$row["id"]."<br>비밀번호".$row["password"]."<br>이메일".$row["email"]."<br>전화번호".$row["phone"];
    //     } }else{
    //         echo "데이터x";
    //     }

    echo "<style>td {border:1px solid #ccc; padding:5px;}</style>";
    echo "<table><tbody>";
    echo "<th>index</th><th>id</th><th>password</th><th>email</th><th>phone</th><th>check_val</th>";
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            // echo "<td>index:".$row["index_num"]."</td><td>아이디:".$row["id"]."</td><td>비밀번호:".$row["password"]."</td><td>이메일:".$row["email"]."</td><td>전화번호:".$row["phone"]."</td><td>check_val:".$row["check_val"]."</td>";
            echo "<td>".$row["index_num"]."</td><td>".$row["id"]."</td><td>".$row["password"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["check_val"]."</td>";
            echo "<tr>";
        }
    } else {
        echo "no data";
    }

?>