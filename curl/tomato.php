<?  
    
    $url = "https://api.probit.com/api/exchange/v1/ticker?market_ids=BPTC-USDT";
    
    $ch = curl_init();                                 //curl 초기화
    curl_setopt($ch, CURLOPT_URL, $url);               //URL 지정하기
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    //요청 결과를 문자열로 반환 
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);      //connection timeout 10초 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);   //원격 서버의 인증서가 유효한지 검사 안함
    
    $response = curl_exec($ch);
    curl_close($ch);

    print_r($response);
    print_r($ch);
?>