<?  
    //column 일괄변경
    include_once $_SERVER["DOCUMENT_ROOT"]."/common.php"; 
    include("./2.php");
    $result = sql_query("UPDATE 20211022_table SET phone = 1");

    echo ($result) ? "일괄변경완료" : "일괄변경실패";
    

?>