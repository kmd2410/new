<?
    로딩 개선 방법

    1. 가속화 코드
    // http://developer.android.com/guide/topics/graphics/hardware-accel.html
    AndroidManifest.xml
    => android:hardwareAccelerated="true";

    해당 웹뷰가있는 activity_list
    if(Build.VERSION.SDK_INT >= 19){
        mWebView.setLayerType(View.LAYER_TYPE_HARDWARE, null);
    } else {
        mWebView.setLayerType(WebView.LAYER_TYPE_SOFTWARE, null);
    }
    getWindow().setFlags(
        WindowManager.LayoutParams.FLAG_HARDWARE_ACCELERATED,
        WindowManager.LayoutParams.FLAG_HARDWARE_ACCELERATED
    );

    단점=> 배터리 광탈

    *
    if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.KitKat) {
        // chromium, enable hardware acceleration
        webView.setLayerType(View.LAYER_TYPE_HARDWARE, null);
    } else {
        // older Android version, disable hardware acceleration
        webView.setLayerType(View.LAYER_TYPE_SOFTWARE, null);
    }




    *
    WebView mWebView = new WebView(this);
    WebSettings settings = mWebView.getSettings();
    settings.setJavaScriptEnabled(true);
    settings.setLoadWithOverviewMode(true);
    settings.setUseWideViewPort(true);
    settings.setSupportZoom(true);
    settings.setBuiltInZoomControls(false);
    settings.setLayoutAlgorithm(WebSettings.LayoutAlgorithm.SINGLE_COLUMN);
    settings.setCacheMode(WebSettings.LOAD_NO_CACHE);
    settings.setDomStorageEnabled(true);
    mWebView.setScrollBarStyle(WebView.SCROLLBARS_OUTSIDE_OVERLAY);
    mWebView.setScrollbarFadingEnabled(true);

    if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.KITKAT) {
    mWebView.setLayerType(View.LAYER_TYPE_HARDWARE, null);
    } else {
    mWebView.setLayerType(View.LAYER_TYPE_SOFTWARE, null);
    }

    // 콘텐츠에 문제가 있을경우
    webview.getSettings().setCacheMode(WebSettings.LOAD_NO_CACHE);

    2. 웹뷰의 RenderPriority 수정
    webview.getSettings().setRenderPriority(RenderPriority.HIGH);
    // http://developer.android.com/reference/android/webkit/WebSettings.RenderPriority.html

    3. 리플 로우수, 사용된 메모리 및 DOM크기를 최소화하도록 javascript 및 css를 최적화
    // http://www.html5rocks.com/en/mobile/mobifying.html#toc-optimizations

    속도 측정
    // https://developers.google.com/speed/pagespeed/insights/

    style seet = head태그에 javascript 파일은 body바로위에 놓는것이 best

    4. 로딩시마다 로딩페이지 넣어주기
    <body onload="loading()"> //로드가 완료된후 실행할 함수
    <div class="loading"></div>
    <script>
        //함수 만들어서 body에 넣는방법
        function loading(){
            $(".loading").hide();
        }
        //스크립트에서 직접 넣는방법
        $(window).on("load",function(){
            $(".loading").hide();
        }); 

        //스크립트에 직접 넣는방법 2
        $(document).ready(function(){
            $(".loading").hide();
        })


    </script>

    <style>
        // .loader { position: absolute; left: 50%; top: 50%; z-index: 1; width: 150px; height: 150px; margin: -75px 0 0 -75px; border: 16px solid #f3f3f3; border-radius: 50%; border-top: 16px solid #3498db; width: 120px; height: 120px; -webkit-animation: spin 2s linear infinite; animation: spin 2s linear infinite; } @-webkit-keyframes spin { 0% { -webkit-transform: rotate(0deg); } 100% { -webkit-transform: rotate(360deg); } } @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
        //원돌아가는 css
    </style>
    
    공부하기
    // https://kkamikoon.tistory.com/168

    로딩이미지
    // http://preloaders.net/  
    로딩이미지만들기
    // http://www.ajaxload.info/

    https://kkamikoon.tistory.com/168

 

참조하세요 최상위 head에 넣으시면 모든 페이지에 나옵니다
?>