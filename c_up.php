<?  
    // $check = array();
    $check = $_POST['chk'];

    $val = implode(",",$check);
    print_r($val);
    // $ser = serialize($check);
    // json_encode($check);
    // print_r($check);



    $connect = new mysqli("localhost","kmd2410","a135790!","kmd2410");
    $query = "INSERT INTO 20211004_checkbox (test_val) VALUES ('$val')";
    $result = mysqli_query($connect,$query);
?>