<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Create Hire Post</title>
</head>
<style>
    .colord{
        color: white;
    }
    body {
    background-image: linear-gradient(to right, #441a57, #e9801e)
    }

    .section {
        position: relative;
        height: 100vh;
    }

    .section .section-center {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%)
    } 

    #booking {
        font-family: 'Raleway', sans-serif
    }

    .booking-form {
        position: relative;
        max-width: 642px;
        width: 100%;
        margin: auto;
        padding: 40px;
        overflow: hidden;
        background-image: url('./img/book.jpg');
        background-size: cover;
        border-radius: 7px;
        z-index: 30;
    }

    .booking-form::before {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        background: rgba(0, 0, 0, 0.8);
        z-index: -1
    }

    .booking-form .form-header {
        text-align: center;
        position: relative;
        margin-bottom: 40px;
    }

    .booking-form .form-header h1 {
        font-weight: 700;
        font-size: 42px;
        margin: 0px;
        color: #fff;
    }
    .booking-form .box{
        padding:4px 0px; 
        padding-right:40px;

    }
    .booking-form .box1{
        padding: 3px 0px; 
        padding-right:64px;
    }
    .booking-form .btn{
        background: orange;
        color: white;
        width: 60px;
        padding: 6px;
    }
   
</style>
<body>
<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="form-header">
                        <h1>Confirm Your Date</h1>
                        <hr>
                    </div>
                    <form class=form method=get action=hireing.php>
                        
                       <span class="colord">Office Name :</span>  <br><input class=box type=text name=office_name placeholder= "Office Name"> <br>
                        <p>
                        <span class="colord">Start Date :</span> <br><input class=box1 type=date name=start_date> <br>
                        <p>
                        <span class="colord">Place :</span> <br><input class=box type=text name=place> <br>
                        <p>
                        <span class="colord">Email :</span> <br><input class=box type=text name=email> <br>
                        <p>
                        <span class="colord">Salary :</span> <br><input class=box type=text name=salary> <br>
                        <p>
                        <input type=submit class="btn" value=Insert>
                    </form>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>