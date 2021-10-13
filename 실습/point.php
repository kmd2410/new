<?
    $connect = new mysqli("localhost","kmd2410","a135790!","kmd2410");
    if($connect->connect_errno){
        echo 'DB연결실패:'.$connect->connect_error.'';
        exit(); 
    } else {
        echo "DB연결성공<br>";
    }
?>
<form action="./point_list.php"  method="POST">
    <input type="text" placeholder="포인트" name="point">
    <input type="text" placeholder="포인트추가" name="add_point">
    <input type="submit">
</form>

