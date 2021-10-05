<?  
    //column 일괄변경

    include("./2.php");
    $query = "UPDATE 20211005_table SET phone = 1";
    $result = mysqli_query($connect,$query);

    $update = ($result) ? "일괄변경완료" : "일괄변경실패";
    echo $update;

?>