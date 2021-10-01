<?  
	$check = $_POST['chk'];
    $connect = new mysqli("localhost","kmd2410","a135790!","kmd2410");
    // $query = "INSERT INTO 20211001_checkbox (test_val) VALUES ($check)";

    $query = "SELECT * FROM 20211001_to_php";


    $result = mysqli_query($connect,$query);

    $num = mysqli_num_rows($result); 
    echo $num."<br>";
    
    echo "<style>td {border:1px solid #ccc; padding:5px;}</style>";
    echo "<table><tbody>";
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>test1:".$row["data1"]."</td><td>test2:".$row["data2"]."</td>
            <td>test3:".$row["data3"]."</td><td>test4:".$row["data4"]."</td>";
            echo "<tr>";
        }
    } else {
        echo "no data";
    }
?>