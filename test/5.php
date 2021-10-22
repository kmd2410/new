<?  
    //select index update val
    include_once $_SERVER["DOCUMENT_ROOT"]."/common.php"; 
    include("./2.php");
    $result = sql_query("UPDATE 20211022_table SET phone = 1004 WHERE num = 3");

    echo ($result) ? "변경완료" : "변경실패";

?>