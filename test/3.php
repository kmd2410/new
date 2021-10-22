<?  
    //데이터불러오기
    include_once $_SERVER["DOCUMENT_ROOT"]."/common.php"; 

    include("./2.php");
    // $result = sql_query("SELECT * FROM 20211022_table");

    $result = sql_query("SELECT sw_memer a LEFT JOIN sms5_book b ON a.mb_id = b.mb_id");
    $data = sql_fetch($result);
    print_r($data);
    echo ($result) ? "불러오기성공" : "불러오기실패";

    // 테이블 컬럼 내부 진입
    // $result02 = sql_fetch("SELECT a.num FROM 20211022_table a WHERE id = 'test03'");
    // print_r($result02);

    // 인썰트 포문 테스트
    // batch update, 트리거, bulk insert , procedure

    // sql_query("
    //     DROP PROCEDURE if EXISTS
    //     CREATE PROCEDURE test_loop()
    //     BEGIN
    //         DECLARE o INT
    // ")

    // sql_query("
    // DELIMITER $$
    // DROP PROCEDURE IF EXISTS loopinsert$$
    
    // CREATE PROCEDURE loopinsert()
    // BEGIN
    //     DECLARE o INT DEFAULT 3;

    //     WHILE o < 10 DO
    //         INSERT INTO 20211022_table VALUES (concat('test0',o), concat('test0',o), concat('test0',o),('01012345678'));
    //         SET o = o +1;
    //     END WHILE;
    // END$$
    // DELIMITER $$

    // CALL loopinsert;
    // ");
    
    



    

    // 로그인 한 사람 보기 $member 사용 약간 이걸로 인덱스찾는느낌
    // echo $member["mb_id"];

    // $num = mysqli_num_rows($result); 

    ?>
    <table>
        <th>번호</th>
        <th>아이디</th>
        <th>비번</th>
        <th>이메일</th>
        <th>폰번</th>
    <?
    for ($i=0; $data = sql_fetch_array($result); $i++){?>
        <tr>
            <td><?echo $data["num"];?></td>
            <td><?echo $data["id"];?></td>
            <td><?echo $data["password"];?></td>
            <td><?echo $data["email"];?></td>
            <td><?echo $data["phone"];?></td>
        </tr>
        <?
    }
?>
</table>