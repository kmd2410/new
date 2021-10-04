<?  
    $data = array(1,2,3,4,5,6,7,8,9,"red","green","test");
    echo $data;
    echo "<br>";

    $serialize = serialize($data);
    $serialize = addslashes($serialize); // 값이 많으면 해당 함수 써야함
    echo $serialize;
    echo "<br>";

    $unbox = unserialize($serialize);
    echo print_r($unbox,true);
    echo "<br>";
    echo print_r($data);

    echo "<br>";

    foreach($data as $key => $val){
        echo $key.":".$val."<br>";
    }
?>