<?
    $connect = new mysqli("localhost","kmd2410","a135790!","kmd2410");
    
    // $query = "INSERT INTO 20211001_to_php (data1,data2,data3,data4) VALUES ('b','b','b','b')";
    // $result = mysqli_query($connect,$query);

    $num = mysqli_num_rows($result);
    
    if (mysqli_num_rows($result) > 0 ) {
        while ($row = mysqli_fetch_assoc($result)){
            echo "data1".$row["data1"]."data2".$row["data2"]."data3".$row["data3"]."data4".$row["data4"]
        }
    } else {
        echo "데이터없어요";
    }

?>