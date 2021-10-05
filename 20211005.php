<?  
    $usdt_url = "https://api.probit.kr/api/exchange/v1/ticker?market_ids=USDT-KRW";
    $curl_balance = curl_init();

    curl_setopt($curl_balance, CURLOPT_HEADER, 0);
    curl_setopt($curl_balance, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl_balance, CURLOPT_HTTPHEADER, array('Content-Type: application/json', $api_key)); //,'x-api-token: '.$api_key
    curl_setopt($curl_balance, CURLOPT_URL, $usdt_url);
    curl_setopt($curl_balance, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($curl_balance, CURLOPT_POSTFIELDS, $post_field_string);      // POST DATA
    curl_setopt($curl_balance, CURLOPT_POST, true);                          // POST 전송 여부

    $result_balance = curl_exec($curl_balance);
    print_r($result_balance);
    echo "<br>"."curl_exec"."<br>";
    $bptc_data_balance = json_decode($result_balance,false); // true면 array false면 객체
    echo "★";
    print_r($bptc_data_balance);    
    echo "<br>"."json_decode"."<br>";
    $encode = json_encode($result_balance,true);
    // print_r($encode);
    // echo "<br>"."json_encode"."<br>";
    //var_dump($data_balance);
    curl_close($curl_balance);

    foreach ($bptc_data_balance as $value){
        print_r($value);
        $arr1 = array($value);
        print_r($arr1);
        foreach ($value as $val){
            $arr2 = array(
                "last" => $val->last,
                "low" => $val->low,
                "high" => $val->high,
                "market_id" => $val->merket_id,
                "time" => $val->time  
            );
        }
    }
    echo "<br><br>";
    print_r($arr2);
    echo "<br>";
    print_r($arr2["last"]);
    print_r($arr2[0]);


    // foreach ($bptc_data_balance as $value){
    //     $arr1 = ($value);
    //     foreach ($value as $key){

    //       $arr2 = array('last'    => $key->last, 
    //                 'low'         => $key->low,
    //                 'high'            => $key->high, 
    //                 'market_id'       => $key->market_id, 
    //                 'time'          => $key->time 
    //       );
    //     }
    //   }
?>