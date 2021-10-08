<?
    echo "Function Style"."<br>";
    $data = array('a','b','c');
    array_push($data, "d");
    foreach($data as $key => $val){
        // echo $key.":".$val."<br>";
        print_r($val[0]."<br>");
    }
    var_dump(count($data));
    echo "<br>";

    echo "Object style";
    $data2 = new ArrayObject(array("a","b","c"));
    $data2->append("d");
    foreach($data2 as $val){
        echo $val."<br>";
    }
    var_dump($data2->count());


    //문제점 : 인덱스[0]을 출력 못하는이유 ?


    //배열의 함수
    array_key_exists : 특정 키에 지정된 원소가 있는지 확인
    ex) array_key_exists("key","val");

    in_array : 배열 원소 중 특정 값이 있는지 확인 return true or false
    ex) in_array("",) 

    array_search : 배열 원소중 특정 값이 있는지 확인 return 원소의 key
    array_search("",)

    unset() : 원소 제거

    implode() : 배열의 원소 모두 출력

    explode() : 문자열을 조각내어 배열로 만듬

    sort() : 배열을 정렬 key가 바뀜
    asort() : 배열을 정렬 key가 안바뀜
    ksort() : 키/값을 유지하면서 순서변경 
?>