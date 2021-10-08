<?
    *강제* 뒤로가기 막기

    function noBack(){window.history.forward();}
    onload="noBack();"
    onpageshow="if(event.persisted) noBack();"
    onunload="";

    onclick="history.go()"

    window.history.forward(); 앞으로가기

    history.go(-1); 뒤로가기
    history.go(1); 앞으로가기

    뒤로가기 버튼 클릭시 함수실행
    $(window).bind("pageshow", function(event){
        if(event.originalEvent.persisted){
            //뒤로가기 페이지 로드시
        }else {
            //새로운 페이지 로드시
        }
    })

    //리로드
    <a href="javascript:location.reload();"></a>

    //뒤로가기 방지 ?
    history.pushState(null, null, location.href);
  window.onpopstate = function (event) {
      history.go(1);
  };



    뒤로가기시 폼안의 데이터를 유지
    // https://sir.kr/qa/390721?stx=%EB%92%A4%EB%A1%9C%EA%B0%80%EA%B8%B0&sst=wr_num&unanswered=0&s_tag=

    //페이지 로드될때 새로고침
    $(document).on("pageload",function(){
        window.location.reload(true);
    });

    window.onhashchange
?>