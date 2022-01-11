<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mprofile.css?v=<?php echo time();?>">
 
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">  -->

  <title>Musiconnect</title>
  
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero"><h1><span>MUSI</span>CON<span>N</span>ECT</h1></a>
        </div>
        <div class="nav-list">
          <!-- <div class="hamburger"><div class="bar"></div></div> -->
          <ul>
            <li><a href="mhome.php" data-after="Home">HOME</a></li>
            <li><a href="musicianprofileedit.php" data-after="Service">EDIT PROFILE</a></li>
            <!-- <li><a href="#" data-after="Projects">REGISTRATION</a></li> -->
            <li><a href="#" data-after="Contact">Log Out</a></li>
            
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

  <!-- Hero Section  -->
  <section id="hero">
          
               <?php
                  session_start();
                  include('db.php');
                  $str=$_SESSION['id'];
                  
                  $sql="select * from musician where m_id = $str";
                  $res=mysqli_query($con,$sql);
                  if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){
                        $img=$row['image'];
          
                        }
                    }
                    
              ?>
          
              <img  src="img/<?php echo $img?>" alt="" height="100">

  <div class="herocontainer">
        
       <!-- <div> -->
          <!-- <div class="details"> -->
          <?php
                
                include('db.php');
                $str=$_SESSION['id'];
                $sql="select * from musician where m_id = $str";
                $res=mysqli_query($con,$sql);
                if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_assoc($res)){
                $name = $row['Name'];
                echo  '<h1>'.$row['Name'].'</h1>';
                echo "<br/>";
                echo '<h1>'.'Genre: '.$row['Genre'].'</h1>';


                echo "<div class='dropdown'>";
                echo "<button type='button' class='cta2'>Follower</button>";
                echo "<div class='dropdown-content'>";
                        $receiver_id=$row['m_id'];
                        $s1='select * from follow where receiver_id= '.$receiver_id.'';
                        $res2=mysqli_query($con,$s1);
                        if(mysqli_num_rows($res2)>0){
                          while($row2=mysqli_fetch_assoc($res2)){  
                              echo "<a href='#'>".$row2['sender_name']."</a>";
                          }
                        }
                        else{
                          echo "<a href='#'>'No Follower'</a>";
                        }      
                  echo "</div>";
                echo "</div>";
                    
                    
                    
                  echo "<div class='dropdown2'>";
                  echo "<button type='button' class='cta2'>Following</button>";
                    echo "<div class='dropdown-content2'>";
                          $receiver_id=$row['m_id'];
                          $s1='select * from follow where sender_id= '.$receiver_id.'';
                          $res2=mysqli_query($con,$s1);
                          if(mysqli_num_rows($res2)>0){
                            while($row2=mysqli_fetch_assoc($res2)){  
                                echo "<a href='#'>".$row2['receiver_name']."</a>";
                            }
                          }
                          else{
                            echo "<a href='#'>'No Following'</a>";
                          }      
                    echo "</div>";
              
                  echo "</div>";


                  }
                  }  
                          
      echo "</div>";
      ?>
            

 </div>
</section>

<section id="menubar">
          <div class="menubutton">
            
            <a href="popup.php"><button class="button" type="button">Set price</button></a> 
            </div>
</section>


 

  
</body>
</html>