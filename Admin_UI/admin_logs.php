<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../bootstrap-5.2.2/css/bootstrap.min.css"/>
    <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <title>LOGS | REPORTS</title>
</head>

<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 13px;
}
.accNavbar{
    margin-top: 10px;
    padding: 16px 30px;
    background-color: #e49329;
    border-radius: 3px 3px 0 0;
}
.accNavbar h2{
    float: left; color:white;
    padding-top: 5px; 
    margin-left:10px;
    margin: 5px 0 0;
    font-size: 24px;
}
.accNavbar ul{
    color: white;
    display: flex;
    list-style-type: none;
    padding: 0%;
    padding-top: 1%;
    justify-content: end;
}
.accNavbar li{
    text-decoration: none;
    color: white;
    margin: 0% 14px;
    cursor: pointer;
}
.accNavbar .btn {
    font-size: small;
    font-weight: bold;
    color: #FFCC01;
    background-color: #FFFCEE;
    border-radius: 10px;
    color: #566787;
    float: right;
    margin-left: 10px; 
}
.accNavbar .btn:hover, .accNavbar .btn:focus {
    color: #566787;
    background: #f2f2f2;
}
.accNavbar .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
}
.accNavbar .btn span {
    float: left;
    margin-top: 2px;
}
</style>

<body>
    <div class="container-fluid">
    <?php
$page_title = "LOGS";

require "admin_sidebar.php";
?>

          <div class="panel">
            <nav>
              <div class="navbar accNavbar">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <h2><b>Logs</b></h2>
                      <a href="#" class="btn btn-secondary" style="margin-right: 15px"><i class="material-icons">file_download</i> <span>Export to Excel</span></a>
                  </div>
              </div>
            </nav>
          </div>
          <center>
          <table class="table table-secondary table-striped">
            <thead>
           
              <tr>
                <th scope="col"><h5>Order ID</h5></th>
                <th scope="col"><h5>Username</h5></th>
                <th scope="col"><h5>Mobile Number</h5></th>
                <th scope="col"><h5>Address</h5></th>
                <th scope="col"><h5>Date and Time</h5></th>
              </tr>
            </thead>
            <tbody>
            <?php 
               $conn = new mysqli('localhost','root','','restomatic_db');

               if($conn->connect_error){
                 die('Connection failed : ' . $conn->connect_error);
                }else{
               $query = "SELECT `order_id`,`username`,`mobile_number`,`address`,`timestamp` FROM `orders_content` GROUP BY order_id; ";
             
               $result = mysqli_query($conn,$query);

               while($rows = mysqli_fetch_assoc($result))
                   {
                   
               ?>
              <tr>
                <td scope="row"><?php echo $rows['order_id']; ?></td>
                <td><?php echo $rows['username']; ?></td>
                <td><?php echo $rows['mobile_number']; ?></td>
                <td><?php echo $rows['address']; ?></td>
                <td><?php echo $rows['timestamp']; ?></td>
              </tr>
              <?php 
                   }
                  }
              ?>
            </tbody>
          </table>
        </center>
        </div>
</body>
</html>
