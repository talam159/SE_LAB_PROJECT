<?php
                  include('db.php'); 
                  $results = mysqli_query( $con, "SELECT * FROM profiles" )
		or die("Can not execute query");
                                 
              ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->


    <link rel="stylesheet" href="./profile.css">

</head>

<body>
    <div class="container mt-5">
        <div class="d-flex container-card shadow rounded-3 p-5">
            <div class="row sidebar">
                <div class="shadow rounded-3 p-1 col-12" style="max-height: 100px;">
                    <div class="row align-items-center px-2">
                        <div class="col-5">
                            <!--fetch image-->
                            <img src="img/<?php echo $img?>" alt="" style="width: 50px;height: 50px; border: 1px solid black;border-radius: 50%;margin-left: 13px;" />
                        </div>
                        <div class="col-7 mt-1">
                            <!--<h6> Tanveer Alam</h6>-->
                            <?php
                                    include('db.php'); 
                                    $results = mysqli_query( $con, "SELECT * FROM profiles where m_id=1" )
                            or die("Can not execute query");
                            while( $rows = mysqli_fetch_array( $results ) ) {
                                extract( $rows );
                                echo "<h6> $Name </h6>";
                                echo "<p> $Genre </p>";
                                
        }
                                 
              ?>
                            
                            <!--<p class="m-0 p-0">Title: Graphics Designer</p>-->
                        </div>
                    </div>
                </div>
                <div class="shadow rounded-3 p-1 h-75 mt-3 col-12">
                    <div class="d-flex flex-column h-100 justify-content-around align-items-center">
                        <a>My Profile</a>
                        <a>Portfolio</a>
                        <a>Address</a>
                        <a>Reviews</a>
                        <a>History</a>
                        <!-- <a class=""></a> -->
                        <button class="btn btn-danger">Logout</button>
                    </div>
                </div>
            </div>
            <div class="profile-card shadow rounded-3 p-4 mx-4 row">
                <div class="col-12">
                    <h4 class="pb-2" style="border-bottom: 1px solid blue;">My profile</h4>
                </div>
                <div class="col-12">
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="row mb-5">
                                <div class="col-6">Full Name</div>
                                <div class="col-6">Tanveer Alam</div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-6">Email</div>
                                <div class="col-6">abcd@gmail.com</div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-6">Address</div>
                                <div class="col-6">Dhaka, Bangladesh</div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-6">Birthday</div>
                                <div class="col-6">9, April</div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-12">
                                    <button class="btn btn-warning text-white px-4 py-3">Change Password</button>
                                </div>

                            </div>
                        </div>
                        <div class="col-6 rounded-3 p-5 shadow">
                            <div>
                            <h6 style="color:rgb(133, 133, 133);">Prlfile picture</h6>
                            <div>
                                <img style="height: 180px;width: 180px;border: 1px solid red;"/>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-outline-warning">Change Picture</button>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 mt-4">
                    <div class="row">
                        <div class="col-6"> Registered - 17 Aug 2020</div>
                        <div class="col-6">
                            <button class="btn btn-primary px-4 w-50 ">Edit Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>