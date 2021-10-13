<?
    // include_once(G5_URL.'/common.php');
    // include_once(G5_URL.'/head.sub.php');
    include_once $_SERVER["DOCUMENT_ROOT"]."/common.php";
    include_once $_SERVER["DOCUMENT_ROOT"]."/head.sub.php";


    $query = "UPDATE sm_member SET mb_point = mb_point + 100 WHERE mb_id = 'kmd2410'";
    $result = mysqli_query($connect_db,$query);
    // $result = mysqli_query(G5_MYSQL_DB,$query);
    // $result = mysqli_query($connect,$query);

    if ($result){
        echo "Sucess Add 100 Point";
    } else {
        echo "Update Failure";
    }
    
?>