    $(function(){
        test();
        $(".at-loader").hide();
    });
    
    function test(imageName) {
        // LoadingWithMask('./loding.gif');
        LoadingWithMask();
        setTimeout("closeLoadingWithMask()", 1000000);
    }

    

    function LoadingWithMask(gif) {
        //화면의 높이와 너비를 구합니다.
        var maskHeight = $(document).height();
        var maskWidth  = window.document.body.clientWidth;
        
        //화면에 출력할 마스크를 설정해줍니다.
        var mask       ="<div id='mask' style='position:absolute; z-index:9001; background-color:#000000; display:none; left:0; top:0;'></div>";
        var loadingImg ='<div class="a02"><div class="loading-container"><div class="loading"></div><div id="loading-text">Loading</div></div></div>';
        var loading_style = "<style>.a02 {z-index:9002;width: 100vw; height: 100vh; background: #333333; position: absolute; top:0; left:0;}@keyframes rotate-loading {0%  {transform: rotate(0deg);}100% {transform: rotate(360deg);}}@keyframes rotate-loading {0%  {transform: rotate(0deg);}100% {transform: rotate(360deg);}}@keyframes loading-text-opacity { 0%  {opacity: 0}20% {opacity: 0}50% {opacity: 1}100%{opacity: 0}}.loading-container,.loading {height: 100px;position: relative;width: 100px;border-radius: 100%;}.loading-container { position: absolute;top: 50%; left: 50%; transform: translate(-50%,-50%);}.loading {border: 2px solid transparent;border-color: transparent #fff transparent #fff;animation: rotate-loading 1.5s linear 0s infinite normal;transform-origin: 50% 50%;}.loading-container:hover .loading {border-color: transparent #E45635 transparent #E45635;}.loading-container:hover .loading,.loading-container .loading {transition: all 0.5s ease-in-out;}#loading-text {animation: loading-text-opacity 2s linear 0s infinite normal;color: #fff;font-family: 'Helvetica Neue', 'Helvetica', 'arial';font-size: 10px;font-weight: bold;margin-top: 45px;opacity: 0;position: absolute;text-align: center;text-transform: uppercase;top: 0;width: 100px;}</style>";
        
        // var loadingImg ='';

        // loadingImg += "<div id='loadingImg'>";
        // loadingImg += "<img src='"+ gif +"' style='position: absolute; top:50%; left:50%; display: block; margin: 0px auto;transform: translate(-50%, -50%);'/>";
        // loadingImg += "</div>";


        //화면에 레이어 추가
        $('body').append(mask).append(loadingImg).append(loading_style);

        //마스크의 높이와 너비를 화면 것으로 만들어 전체 화면을 채웁니다.
        $('#mask').css({
                'width' : '100vw',
                'height': '100vh',
                // 'opacity' :'0.3'
        });

        //마스크 표시
        $('#mask').show();

        //로딩중 이미지 표시
        $('#loadingImg').append(loadingImg);
        $('#loadingImg').show();
    }

    function closeLoadingWithMask() {
        $('#mask, #loadingImg, .a02').hide();
        $('#mask, #loadingImg, .a02').empty(); 

    }

    // $(window).on("load", function(){
    //     closeLoadingWithMask();
    // });

    