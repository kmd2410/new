<?
    $connect = new mysqli("localhost","kmd2410","a135790!","kmd2410");
    if($connect->connect_errno){
        echo 'DB연결실패:'.$connect->connect_error.'';
        exit(); 
    } else {
        echo "DB연결성공<br>";
    }

    // $point = $_POST["point"];
    $add_point = $_POST["add_point"];

    // if(isset($add_point)){
        
    // }
    // $query = "INSERT INTO 20211013_point (point) VALUES ($point) WHERE idx=1";

    // $query = "UPDATE 20211013_point SET point = REPLACE(point,23323,'')";
    
    // $query = "SELECT * FROM 20211013_point";
    // $result = mysqli_query($connect,$query);
    // $row = mysqli_fetch_assoc($result);
    // $data = $row["point"];
    $query = "UPDATE 20211013_point SET point = point + 100 WHERE idx = 1";
    $query = "UPDATE member SET mb_point = mb_point + 100 WHERE mb_id = 'master'";
    $result = mysqli_query($connect,$query);

    // $num = mysqli_num_rows($result); 
    // echo $num."<br>";
    
    // if (mysqli_num_rows($result) > 0 ) {
        
    //     while($row = mysqli_fetch_assoc($result)){
    //         $list = $row["userid"]."<br>";
    //         // echo substr_replace($list,1,2);
    //         echo $row["point"];
    //     } }else{
    //         echo "데이터x";
    //     }

    



    if($result){
        echo "완료";
    } else {
        echo "실패";
    }


?>