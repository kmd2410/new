<script>
    const obj = {
        a: "1",
        b: "2",
        c: "3"
    }
</script>
<? 

    // $obj = "<script>document.write(obj)</script>";
    
    // get key 배열
    // $obj = "<script>document.write(Object.keys(obj))</script>";
    
    // get value 배열
    // $obj = "<script>document.write(Object.values(obj))</script>";

    // get all 배열 
    $obj = "<script>document.write(Object.entries(obj))</script>";
    
    // get all
    // $obj = "<script>for(prop in obj){document.write(prop +':' + obj[prop] + '<br>');}</script>";
    // array($obj);
    
    echo $obj;
?>