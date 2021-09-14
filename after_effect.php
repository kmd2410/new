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

    // 블러.?
    CC Radial Blur; Fast Bot Blur;

    // Text 글자 쪼개기
    Transform, Compositing Options.......
?>