<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mhome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Musiconnect</title>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero"><h1><span>MUSI</span>CON<span>N</span>ect</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="#" data-after="Home">HOME</a></li>
            <li><a href="#" data-after="Service">Profile</a></li>
            <li><a href="#" data-after="Projects">Booking Status</a></li>
            <li><a href="#" data-after="Contact">Log Out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Plan The Perfect Event with Talented Musicians</h1>
        <form class="search" method="post">
            <input type="text" name="str" placeholder="Musician,Genre" require/>
            <button type="submit" name="submit"><i class="fa fa-search"></i></button>
            <!--<input type="submit" name="submit" value="Search"/>-->
        </form>
        

        <?php
        session_start();
        include('db.php');
        if(isset($_POST['submit'])){
            $str=mysqli_real_escape_string($con,$_POST['str']);
            $sql="select * from musician where Name like '$str' or Genre like '$str'";
            $res=mysqli_query($con,$sql);
            if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_assoc($res)){
                    echo "<h1>" ."<a href='profile.php?id=".$row['Name']."'>".$row['Name']."</a>"."</h1>";
                    echo "<br/>";
            
                }
            }
            else{
                echo"<h1> Sorry,No search found!!</h1>";
            }
        }
        ?>
      </div>
    </div>
  </section>
  <br>
  <!-- End Hero Section  -->
 
</body>
</html>

