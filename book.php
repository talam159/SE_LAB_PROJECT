<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="book.css">
    <title>Document</title>
</head>

<style>
    .style_add{
        margin-left: 80px;
        margin-right: 80px;
    }
    .colord{
        color: white;
    }
    .submit_button{
        padding: 10px 20px;
    }
    .field{
        width:100%;
        height: 20px;
    }
    .middle_align{
        text-align:center;
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
                    </div>
                    <div class="style_add">
                    <form method=get action=booking.php>
                        <label for="event"><span class="colord">Event Name :</span></label>  <br> 
                        <input  class="field" type=text name=event placeholder= "event"> <br>
                        <br> 
                        <span class="colord">Event Date :</span> <br> <input class="field" type=date name=date> <br>
                        <br> 
                        <span class="colord"> Event Place :</span> <br> <input class="field" type=text name=place> <br>
                        <br> 
                        <span class="colord"> Your Email :</span> <br> <input class="field" type=text name=email> <br>
                        <br> 
                        <span class="colord"> Your Number :</span> <br> <input class="field" type=text name=number> <br>
                        <br><br>
                        <div class="middle_align">
                            <input class="submit_button" type=submit value=Submit >
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>