<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="popup.css">
    <title>Document</title>
</head>
<body>
    <div class="center">
        
        
        <div class="container">
            
            <form action="booking2.php" method="post">
                 <div class="data">
                     <label for="">Amount</label>
                     <input type="text" name="price" required>
                 </div>
                 <div class="data">
                    <label for="" >Advance payment</label>
                    <br>
                    <input type="text" name="advance">
                </div>
                <div class="btn">
                    <div class="inner"></div>
                    <button type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>