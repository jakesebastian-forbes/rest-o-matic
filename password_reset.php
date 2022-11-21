<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset | Rest-o-Matic</title>
  <link rel="icon" type="image/x-icon" href="images/icon/web_icon.png" />
  <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/general.css" />
</head>
<body>

<div class="container-fluid">

<div class="row">
    <div class="card border">
        <form action="">
            <h5>Please provide the following information for reset</h5>
            <div class="text-center">
            <label for="username">Username</label>
            <input type="text" name = "username" placeholder = "e.g. username" required>
            <br>

            <label for="email">E-mail</label>
            <input type="text" name = "email" placeholder = "Please enter your xyz@gmail.com" 
            style = "width:max-content;"
            required>
            <br>
            
            <label for="birthdate">Birthdate</label>
            <input type="text" name = "birthdate" placeholder = "Please enter your yyyy-mm-dd" required>
            <br>
            <!-- <label for=""></label>
            <input type="text" name = ""> -->
            <button type="submit">Submit</button>
            </div>



        </form>
    </div>

</div>

</div>
    
</body>
</html>