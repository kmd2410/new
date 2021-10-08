<?
    $connect = new mysqli("localhost","kmd2410","a135790!","kmd2410");
    
    // $query = "INSERT INTO 20211001_to_php (data1,data2,data3,data4) VALUES ('b','b','b','b')";
    // $result = mysqli_query($connect,$query);

    // $num = mysqli_num_rows($result);
    
    // if (mysqli_num_rows($result) > 0 ) {
    //     while ($row = mysqli_fetch_assoc($result)){
    //         echo "data1".$row["data1"]."data2".$row["data2"]."data3".$row["data3"]."data4".$row["data4"]
    //     }
    // } else {
    //     echo "데이터없어요";
    // }

    // $colors = array("red", "green", "blue", "yellow");

    // foreach($colors as $value){
    //     echo $value."<br>";
    // }

    $query = "SELECT * FROM 20211001_to_php";
    $result = mysqli_query($connect,$query);
    // $rows = mysqli_num_rows($result);
    
    echo $rows; //4
    $data = mysqli_fetch_array($result);
    echo $data; //array
    echo "<br>";
    // foreach($data as $value){
    //     echo $value;
    //     echo $value;
    // }

    if(mysqli_num_rows($result)>0){
        while($rows = mysqli_fetch_array($result)){
            echo "번호:".$rows["num"]."data1:".$rows["data1"]."data2:".$rows["data2"]."data3:".$rows["data3"]."data4:".$rows["data4"]."<br>";
        }
    }

    


?>