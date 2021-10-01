<?
    // 색깔 animate
    Effect => Color Correction => Hue/Saturation

    // 팡! animate
    Use Shape Layer; => Trim Paths start, and => Add => Repeater => Rotation 360/Copies

    // Text animate (Up)
    TEXT => Add => Position => Range Selector => Offset 
    option : Advenced => Shape => Square:기본값 하나하나, Ramp Up:겹쳐서
                        Ease Low : 부드럽게

    // line effect
    Trim Path Animate or Path key frame

    // Particle 화염효과?
    Effects&Presets => CC Particle World
    

    ct+at+Y : 조정레이어
    
    // Glow 광선

    //익스프레션
    //1) 크기
    A=thisComp.layer("Text Layer")
    B=A.sourceRectAtTime().width;

    [B+100,60]

    //2) 따라가기 ?
    C=thisComp.layer("Shape Layer")
    D=C.sourceRectAtTime();

    C.toComp([D.left,D.top-30])

    // 1개의 텍스트 여러개로 보이게
    Effects&Presets => Set Channels;
    
    // Text 윤곽선만 남게하기
    Effects&Presets => Find Edges;

    // Text 자간 애니메이션
    Anmation => Tracking => Tracking Amount 

    // Text 뽈록
    Effects&Presets => Emboss;

    // Text 배경과 글자색
    Tint;

    // 블러.? 색상 눈아프게조정 옛날처럼 
    CC Radial Blur; Fast Bot Blur;

    // Text 글자 쪼개기
    Transform, Compositing Options.......
    
    // 배경 그라디언트
    gradiant ramp

    // 광선, 스트로크 효과 sabar

    // brush stroke

    // 화면 진동효과
    wiggle

    // wiggle로 인한 화면 메꾸기
    Motion tile

    프리미어프로 전환효과
    Pan Top left => 왼쪽으로
    Rotate - CW => 화면돌리기
    Zoom out => 줌 아웃효과
    Digital Glitch => 약간 디지털방식으로 전환
    Light Leak => 빛을 이용한 전환
    Shake & Distort => 흔들리고 확대 ?
    Effects/video transition/slide/slide효과패널/비디오전환/밀기/밀기 => 미는효과push사용해도됨
    잔상남기기
    new item/adjustment layer/새항목/조정레이어 만들고
    directional Blur effect적용 

    animation composer
    ignite express
    saber 광선 / 네온효과
    duik 애니메이션 리깅 플러그인 (관절)
    color vibrance 하나의 컬러로 풍부한 컬러 지정가능
    vc reflect 반사효과 
    sure target2 카메라 제어
    fx console 단축키 입력 지정
    decompose text 텍스트를 손쉽게 분해 시켜줌
    long shadow 
?>