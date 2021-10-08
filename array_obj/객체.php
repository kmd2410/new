<script>
    const obj = {
        a: "1",
        b: "2",
        c: "3"
    }
</script>
<? 

    // $obj = "<script>document.write(obj)</script>";
    
    // get key obj => list
    // $obj = "<script>document.write(Object.keys(obj))</script>";
    
    // get value obj => list
    // $obj = "<script>document.write(Object.values(obj))</script>";

    // get all obj => list
    // $obj = "<script>document.write(Object.entries(obj))</script>";
    
    // get all
    $obj = "<script>for(prop in obj){document.write(prop +':' + obj[prop] + '<br>');}</script>";
    // array($obj);
    
    echo $obj;

    echo "<br>";
    echo "<script>document.write(obj)</script>";
?>