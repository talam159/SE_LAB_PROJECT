<?php
$con = mysqli_connect("localhost","root","","hire");
$response = array();
if($con){
    $sql = "select * from booking";

    $result = mysqli_query($con,$sql);
    if($result){
        header("content-Type: JSON");
        $i = 0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['office_name'] = $row ['office_name'];
            $response[$i]['start_date'] = $row ['start_date'];
            $response[$i]['place'] = $row ['place'];
            $response[$i]['email'] = $row ['email'];
            $response[$i]['number'] = $row ['number'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }

}
else{
    echo "connection failed";
}
?>