<?php
$con = mysqli_connect("localhost","root","","music");
$response = array();
if($con){
    $sql = "select * from booking";

    $result = mysqli_query($con,$sql);
    if($result){
        header("content-Type: JSON");
        $i = 0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['id'] = $row ['id'];
            $response[$i]['event'] = $row ['event'];
            $response[$i]['date'] = $row ['date'];
            $response[$i]['place'] = $row ['place'];
            $response[$i]['email'] = $row ['email'];
            $response[$i]['number'] = $row ['number'];
            $response[$i]['status'] = $row ['status'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }

}
else{
    echo "connection failed";
}
?>

