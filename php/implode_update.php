<?  
    // $check = array();
    $check = $_POST['chk'];

    $ch = $_POST['ch'];
    print_r($ch);
    // $sum_ch = array_sum($_POST['ch']);
    // print_r($sum_ch);

    $val = implode(",",$check);
    print_r($val);
    // $ser = serialize($check);
    // json_encode($check);
    // print_r($check);


    // $a =  array("0"=>"test0", "1"=>"test1","2"=>"test2");
    // print_r($a);
    // $b = serialize($a);
    // print_r($b);
    // $c = addslashes($b);
    // print_r($c);


    $connect = new mysqli("localhost","kmd2410","a135790!","kmd2410");
    $query = "INSERT INTO 20211004_checkbox (test_val) VALUES ('$val')";
    $result = mysqli_query($connect,$query);
?>