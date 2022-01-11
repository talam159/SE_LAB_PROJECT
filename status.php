<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
    <style>
        .heading1{
            margin-top: 50px;
            text-align:center;
            color: green;
        }
        .heading2{
            margin-top:50px;
            color: #bf9904;
            text-align:center;
            text-transform : uppercase;
        }
        .Event{
            color: green;
        }
        .table_of_req{
            margin-top: 50px
        }
        .td_style{
            padding: 40px;
        }
        .table_of_req{
            text-align:center;
        }
    </style>
  <body>
    <div class="container">
        <div class="heading1">
            <h3>Dear musician, Accept the <span class="Event">Event</span> <br> if You are available on that Event day.</h3>
        </div>
        <div class="heading2">
            <h3>List of requsts</h3>
        </div>

        <div class="table_of_req">
            <table>
                <tr class= "tabledata">
                    <th class= "td_style">Customer name</th>
                    <th class= "td_style">Customer Email</th>
                    <th class= "td_style"> Customer Number </th>
                    <th class= "td_style">Event Type</th>
                    <th class= "td_style">Place</th>
                    <th class= "td_style">Date</th>
                    <th class= "td_style">Operation</th>
                    
                </tr>
                <?php
                    require_once('db_connect.php');
                    $connect = mysqli_connect( HOST, USER, PASS, DB )
                        or die("Can not connect");
                   
                    $results = mysqli_query( $connect, "SELECT * FROM booking" )
                        or die("Can not execute query");
                    
                    while( $rows = mysqli_fetch_array( $results ) ) {
                        extract( $rows );
                        echo "<tr>";
                        echo "<td> fetch from username </td>";
                        echo "<td> $email </td>";
                        echo "<td> $number </td>";
                        echo "<td> $event </td>";
                        echo "<td> $place </td>";
                        echo "<td> $date </td>";
                        echo "<td> <a href = 'update_input.php?id=$id&f0=$f0&f1=$f1'> Accept </a> </td>";
                        echo "<td> <a href = 'delete.php?id=$id'> Delete </a> </td>";
 
                        echo "</tr> \n";
                    }
                
                    echo "</table> \n";

                    
                    // echo "<table border> \n";
                    // echo "<th>events</th>
                    //      <th>date</th> 
                    //      <th>place</th> 
                    //      <th>email</th> 
                    //      <th>number</th> \n";
                
                //     echo "<table border> \n";
                //     echo " \n";
                // echo "</table> \n";
                ?>
            </table>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>
