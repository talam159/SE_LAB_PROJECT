<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hire.css">
    <title>Document</title>
</head>
<style>
    .colord{
        color: white;
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
                    <form method=get action=hireing.php>
                        
                       <span class="colord">Office Name :</span>  <br><input type=text name=office_name placeholder= "Office Name"> <br>
                        <p>
                        <span class="colord">Start Date :</span> <br><input type=date name=start_date> <br>
                        <p>
                        <span class="colord">Place :</span> <br><input type=text name=place> <br>
                        <p>
                        <span class="colord">Email :</span> <br><input type=text name=email> <br>
                        <p>
                        <span class="colord">Number :</span> <br><input type=text name=number> <br>
                        <p>
                        <input type=submit value=Insert>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>