<?
    // 매칭
    // 추천인에 이름 적힌 사람 id, 
    $mine_r = ; // 나를 추천인으로 쓴사람 무조건 price 0.5%
    $mine_r_r = ; // 나를 추천인으로 쓴사람을 추천인으로 쓴사람 price 0.3%
    $mine_r_r_r = ; // 나를 추천인으로 쓴사람에 추천인으로 쓴사람을 추천인으로 쓴사람 price 0.1%
    $mine_r_r_r_r = ; // 나를 추천인으로 쓴사람에 추천인으로 쓴사람에 추천인으로 쓴사람을 추천인으로 쓴사람 price 0.1%
    $mine_r_r_r_r_r = ; // 나를 추천인으로 쓴사람에 추천인으로 쓴사람에 추천인으로 쓴사람에 추천인으로 쓴사람을 추천인으로 쓴사람 price 0.1%

    // 이렇게만 가져오면 매칭끝

    // 추천
    // get new person price, new person friend id, friend up id, friend up up id 4개필요 
    // 가입시 가입한사람이 추천인으로 쓴사람에게 자기 price의 0.05 한번지급
    // 추천인으로 쓴사람의 상위 사람한테 0.03
    // 추천인으로 쓴사람의 상위의 상위사람한테 0.02



    // php에서 @ 역할 => 에러무시
    // 재귀쿼리
    WITH RECURIVE CTE AS (
        SELECT +colum+, +colum+ WHERE +colum+ = "ex" UNION ALL SELECT a.+col+, a.+col+ FROM +tablename+ a INNERE JOIN CTE b ON a.+col+ = b. +col+
    ) SELECT +col+,+col+ FROM CTE;

    // WITH => 가상 테이블(임시) 생성
    // RECURSIVE => 재귀구현
    // WITH RECURSIVE => 가상 테이블이 자신을 참조하여 값을 결정
    // WITH RECURSIVE 규칙! => 
        // 서브 쿼리 내에서 UNION(ALL)이 사용 되어야 한다
        // 한개 이상의 Non-Recurisve 문장이 포함 되어야함(첫번째 루프에서만 실행, anchor역할 이것 미만의 계층구조로 연결되어 있는것들 다 나옴)
                            

?>