<?  
    //select index update val

    include("./2.php");
    $query = "UPDATE 20211005_table SET phone = 1004 WHERE index_num = 3";
    $result = mysqli_query($connect,$query);

    $update = ($result) ? "변경완료" : "변경실패";
    echo $update;

?>