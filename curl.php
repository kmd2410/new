<?
// 토큰 잔액 소스
// 받아올 변수 이름 contract_address address balance
$z = "https://api.blocksdk.com/v2/eth/erc20-tokens";
$a = "0x05237E2bd2dfAb39a135d254cABAE94b183C8baD"; //조회할 토큰 주소
$b = $mb_eth_hash; //조회할 지갑 주소 // 0xC6959853Bd3b49734c138835934B5475bEd762d6
//$b = "0xf70260361bd1c8d02720bb196c6f49ace1b80297";
$x = "balance";

    
$url = "https://api.blocksdk.com/v2/eth/erc20-tokens/0x05237E2bd2dfAb39a135d254cABAE94b183C8baD/".$mb_eth_hash."/balance";

$urls = "https://api.blocksdk.com/v2/eth/erc20-tokens/0x9bca7daf4da9d6e4b67259c20d901edcce651364/0x6fffb577de7e65eb7803b098cb14a32defa5d5e1/balance";

 ?>


<?php 

  $curl_balance = curl_init();

  curl_setopt($curl_balance, CURLOPT_HEADER, 0);
  curl_setopt($curl_balance, CURLOPT_RETURNTRANSFER, true);                                                                      
  curl_setopt($curl_balance, CURLOPT_HTTPHEADER, array('Content-Type: application/json','x-api-token: '.$api_key));
  curl_setopt($curl_balance, CURLOPT_URL, $url);
  curl_setopt($curl_balance, CURLOPT_CUSTOMREQUEST, "GET");
  curl_setopt($curl_balance, CURLOPT_POSTFIELDS, $post_field_string);      // POST DATA
  curl_setopt($curl_balance, CURLOPT_POST, true);                          // POST 전송 여부

  $result_balance = curl_exec($curl_balance);
  $data_balance = json_decode($result_balance,false);

  curl_close($curl_balance);



 $arr1 = array();


  foreach ($data_balance as $key => $datas){

    $arr1 = array('contract_address' => $datas->contract_address, 
                  'address'          => $datas->address,
                  'balance'          => $datas->balance);

    $arr3 = $arr1;

    $bptc_arr_blance = $arr3;

   // echo $bptc_arr_blance['balance'];

   break;
   ?>

 
  
 
   <?php } ?>