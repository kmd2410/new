<?php

  $ch = curl_init(); // 리소스 초기화

  $url = "https://api.probit.com/api/exchange/v1/ticker?market_ids=BPTC-USDT";

      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); //,'x-api-token: '.$api_key
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post_field_string);      // POST DATA
      curl_setopt($ch, CURLOPT_POST, true);                          // POST 전송 여부

      $result_balance = curl_exec($ch);
      
      echo $result_balance; // 값 그대로
      echo "<br>";

      $bptc_data_balance = json_decode($result_balance,false);

      print_r($bptc_data_balance); //배열형태 ?
      //var_dump($data_balance);

      foreach ($bptc_data_balance as $key => $value) {
        // print_r($value['data']);
        echo "<br>";
        print_r($key); //data

        echo "<br>";
        print_r($value); // array
        
        echo "<br>";
        
        
        // foreach ($value as $k => $v){
        //   print_r($k['last']);
        //   print $k['last'];
        //   echo $k['last'];
        //   echo $k->last;
        // }
      }

      foreach ($bptc_data_balance->data as $mydata){
        print_r($mydata);
        echo "<br>";
        echo $mydata->last;
      }
      
      echo "<br>";
      foreach ($bptc_data_balance as $values){
        echo $values;
        echo $values->last;
        print $values->last;
        print_r ($values->last);
      }

      echo "<br>";
      echo "<br>";
      $arr1 = array();
      $arr2 = array();

      foreach ($bptc_data_balance as $value){
        echo $value;
        $arr1 = ($value);
        foreach ($value as $key){
          $arr2 = array('last'    => $key->last, 
                    'low'         => $key->low,
                    'high'            => $key->high, 
                    'market_id'       => $key->market_id, 
                    'time'          => $key->time 
          );
        }
      }




      curl_close($ch);

?>