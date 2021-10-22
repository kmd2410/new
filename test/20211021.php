<? 
include_once $_SERVER["DOCUMENT_ROOT"]."/common.php"; 

    // $sql = "select mb_id from sm_member where mb_recommend = '{$member['mb_id']}'";
    // $query = "select * from sw_member";
    
    // $result = sql_query($query);
    // $fetch_r = sql_fetch($query);
    // $fetch_ra = sql_fetch_array($query);

    // print_r($query_r);

    // echo "<br>";
    // print_r($fetch_r);
    // echo "<br>";
    // print_r($fetch_ra);
    // echo "<br>";
    // print_r($member);

    // for (i=0; $row = sql_fetch_array($query); i++){
    //     print_r($row);
    // }

    // for (i=0; $fetch_r; i++){
    //     print_r($fetch_r);
    // }
    

    // echo "query,mysqlifetch사용";
    // while ($row = mysqli_fetch_assoc($result)){
    //     echo $row["mb_id"];
    // }

    // for (i=0; $row = mysqli_fetch_assoc($result);i++){
    //     echo $row["mb_id"];
    // }
    // echo "<br>";
    // for ($i=0; $row2 = sql_fetch_array($result); $i++){
    //     echo $row2["mb_id"];
    // }




    // 값 하나뽑기 ************************ sql_fetch
    // sql_fetch("query문만?");
    // all 출력
    // $result = sql_fetch("select * from sw_member");
    // echo $result['mb_id'];
    // echo $result;
    // print_r($result);

    // sql_fetch는 값 하나만 가져오는거기때문에 반복문 사용불가
    // while($result = sql_fetch("select * from sw_member")){
    //     echo $result["mb_id"]."<br>";
    // }
    // for($i=0; $result=sql_fetch("select * from sw_member")){
    //     echo $result["mb_id"]."<br>";
    // }




    // 여러개뽑기 ***************************** sql_fetch_array
    // sql_fetch_array(query문+쿼리실행까지? 왜 ?)
    
    // $query = sql_query("select * from sw_member");
    // $result = sql_fetch_array($query);
    // print_r($result); //값한개나옴
    
    // 와일문실행시 이렇게써야함
    // $query = sql_query("select * from sw_member");
    // while($result = sql_fetch_array($query)){
    //     echo $result["mb_id"]."<br>";
    // }

    // 포문실행시 이렇게써야함
    // $query = sql_query("select * from sw_member");
    // for($i=0; $result = sql_fetch_array($query); $i++){
    //     echo $result["mb_id"]."<br>";
    // }


    // 그누보드에서는 sql_query만 쓰면 쿼리문 실행
    // $result = sql_query("select * from sw_member");
    // $num = mysqli_num_rows($result);
    // echo $num;
    

    // 하나의 값 업데이트
    // $play = sql_query("update sw_member set mb_name = '김현성02' where mb_id = 'test'");
    
    // 여러개 값 업데이트
    
    // ****************** 한사람 데이터 컬럼 여러개
    // $play = sql_query("update sw_member set mb_name = '김현성03', mb_email = 'daniel2@naver.com' where mb_id = 'test'");

    // ****************** 여러사람 데이터 바꾸기

    // ****JOIN UNION *강력* just write val in UNION ALL SELECT
    // $play = sql_query(
    //     "UPDATE sw_member a JOIN (
    //     SELECT 'test' as mb_id, '김현성05' as new_name, 'daniel2@nate.com' as new_email 
    //     UNION ALL SELECT 'daniel1522', '김현성02', 'daniel1522@naver.com'
    //     ) vals ON a.mb_id = vals.mb_id 
    //     SET mb_name = new_name, mb_email = new_email"
    //     );

    // $play = sql_query("UPDATE sw_member i SET (mb_name, mb_eamil) = (SELECT mb_name, mb_eamil from )")
    
        // $play = sql_query("UPDATE sw_member SET mb_name = CASE mb_id WHEN 'test' THEN '김현성04' ELSE mb_name END,
        //                                     ")






    // select 와 update 동시에??????
    //https://wakestand.tistory.com/572
    //https://shakddoo.tistory.com/entry/Mysql-Select%EA%B2%B0%EA%B3%BC%EB%A5%BC-Update-%EB%AC%B8%EC%97%90-%EB%B0%98%EC%98%81%ED%95%98%EA%B8%B0

    // $play = sql_query("UPDATE sw_member SET mb_name = (SELECT a.mb_name FROM (SELECT mb_name FROM sw_member WHERE mb_id = 'test') a) WHERE mb_name = '김현성07'");
    

    // 테이블 생성
    // $play = sql_query("CREATE TABLE 20211022_table02 (num int AUTO_INCREMENT primary key, id varchar(255) not null, password varchar(255) not null, nick varchar(255) not null, phone varchar(255) not null)");

    // sql_query("INSERT INTO ")

    // 테이블 삭제
    // $play = sql_query("DROP TABLE 20211022_table");
    // 테이블유지하고 내부 데이터만 삭제
    // $play = sql_query("TRUNCATE TABLE 20211022_table");

    if ($play){
        echo "쿼리실행완료";
    } else {
        echo "쿼리실행실패";
    }






?>
