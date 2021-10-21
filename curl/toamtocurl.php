<?
    $bptc_url = "https://api.probit.com/api/exchange/v1/ticker?market_ids=BPTC-USDT";
    $curl_balances = curl_init();

    $api_key = "uscIxN7ssrdc7fkjZU3ucqyLz2GowrtvhLrEcgQQ";

    curl_setopt($curl_balances, CURLOPT_HEADER, 0);
    curl_setopt($curl_balances, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl_balances, CURLOPT_HTTPHEADER, array('Content-Type: application/json',$api_key)); //,'x-api-token: '.$api_key
    curl_setopt($curl_balances, CURLOPT_URL, $bptc_url);
    curl_setopt($curl_balances, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($curl_balances, CURLOPT_POSTFIELDS, $post_field_string);      // POST DATA
    curl_setopt($curl_balances, CURLOPT_POST, true);                          // POST 전송 여부

    curl_setopt($curl_balances, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl_balances, CURLOPT_CONNECTTIMEOUT, 10);

    $result_balances = curl_exec($curl_balances);
    $bptc_data_balance = json_decode($result_balances,false);


    if(curl_exec($curl_balances) === false){
        echo "Curl error:".curl_error($curl_balances);
    }else {
        echo "랄라";
    }
    print_r($result_balances);
    echo $bptc_data_balance;


    
    

    // foreach ($bptc_data_balance as $value){
    //   $arr2 = ($value);
    //     foreach ($value as $bptc_key){

    //     $arr3 = array('last'    => $bptc_key->last, 
    //               'low'         => $bptc_key->low,
    //               'high'            => $bptc_key->high, 
    //               'market_id'       => $bptc_key->market_id, 
    //               'time'          => $bptc_key->time 
    //     );
    //   }
    // }
   

 

    $post = array($bptc_data_balance,5,false,0); 

    // print_r($usdt_data_balance);
    // print_r($bptc_data_balance);

   

    $usdt_last_coast = $arr1['last']; // 마지막 체결가 
    $usdt_low_coast = $arr1['low']; //24시간 최저체결가
    $usdt_high_coast = $arr1['high']; //24시간 최고체결가
    $usdt_market_id = $arr1['market_id']; //마켓 ID
    $usdt_coast_time =$arr1['time'];// 마지막 거래시간

    $bptc_last_coast = $arr3['last'];
    $bptc_low_coast = $arr3['low'];
    $bptc_high_coast = $arr3['high'];
    $bptc_market_id = $arr3['market_id'];
    $bptc_coast_time = $arr3['time'];

    curl_close($curl_balances);


?>