<?php
include('db.php');
    
    session_start();


    
    $sender_id=$_SESSION['id'];
     $s='select * from follow where sender_id = '.$sender_id.' && receiver_id= '.$row['m_id'].'';
                    
    $res1=mysqli_query($con,$s);
    $num1 = mysqli_num_rows($res1);
    if ($result = $con->query($s)){
	    $row1 = $result->fetch_assoc();
    }
    header('Content-type: application/json');
    echo json_encode($num1);

?>