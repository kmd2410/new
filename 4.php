<?
    include("./2.php");
    $query = "UPDATE 20211005_table SET phone = 1";
    $result = mysqli_query($connect,$query);

    $update = ($result) ? "변경완료" : "변경실패";
    echo $update;

?>