<?php
require "../func/func_session.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $title = "Home | Client";
    require('../func/func_must_haves.php');
  ?>
   <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

</head>

<style>
   .accNavbar{
    margin-top: 10px;
    background-color: black;
   }

   .accNavbar h2{
    float: left; color:white;
    padding-top: 5px; 
    margin-left:10px;
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

    .footer{
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: black;
      color: white;
      text-align: center;
    }
    .socialmedia{
            
            display: flex;
            align-content: center;
           justify-content: space-evenly;
           margin: 5px;
    }
    .socialmedia i{
            color: white;
            font-size: 20px;
    }

    .orderTable th,td{
        text-align: center;
    }

    td{
    word-wrap: break-word;
    }

    .success{
      background-color: #beffa85e;

    }


</style>

<body>
    <div class="container-fluid p-0">
      <?php 
      $title_sidebar = "MY PROFILE";
      include('client_sidebar.php');?>

        <!-- <div class="container"> -->
          <div>
          <?php
                $full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                // echo $full_url;
                if(strpos($full_url,"update=success") == true ){
                   echo "<p class = 'success'>
                   
                   Account update successful!.</p>";

                }else if(strpos($full_url,"update=failed") == true ){
                  echo "<p class = 'error'>
                  <span> <img src='images/icon/error.png' alt='error_icon' class = 'icon_img'></span>
                  Account update failed!</p>";
                }
              ?>
          </div>
                   <div class="row m-0" >
                        
                    <div class="col m-auto">
                      <div class= ""
                      style = "
                      display:block;
                      margin-left:auto;margin-right:auto;
                      ">
                        <?php
                        $client = $_SESSION['client_id'];
                          $conn = new mysqli('localhost','root','','restomatic_db');

                          if($conn->connect_error){
                            die('Connection failed : ' . $conn->connect_error);
                           }else{
                          $query = "SELECT * FROM `client_account` WHERE client_id =  $client;";
                        
                          $result = mysqli_query($conn,$query);

                          if($rows = mysqli_fetch_assoc($result))
                              {
                             
                         
                  echo '<img class="card-img-top img img-responsive" src = "data:image/jpeg;base64,'.base64_encode($rows['profile_picture']) .'" 
                  style ="object-fit: cover;
                  aspect-ratio: 4/3;
                  border-radius: 10px;
                  "/>';
    
                      
                      
                              }
                            }
                      ?>
                        </div>

                    </div>

                   <div class="col-6 m-3">
                        <div class="panel border p-4 py-2"
                              style = "background-color:whitesmoke;
                                        border-radius:8px;">
                            <div class="panel-heading">
                              <!-- <form action="client_acc_setting.php" method="POST"> -->
                                <!-- <input type="text" value = "<?php //echo $client_id?>" hidden> -->
                                
                                  <a href="client_acc_settings_ui.php" style = "float:right; margin-right:15px;">
                                        <span><img src="../images/icon/pencil_icon.png" alt="edit" 
                                        class ="icon_img" style= "display:inline"></span>
                                       <h6 style= "display:inline">Edit</h6>
                                  </a>
                              <!-- </form> -->
                            </div>
                            <div class="panel-body">

                            <table class="table table-responsive table-borderless" 
                            style =" table-layout: fixed;">
                              

                                 <tr>
                                    <td class = "text-start">Username</td>
                                    <td class = "text-start"><?php echo  $_SESSION['username'];?></td>
                                 </tr>
                                 <tr>
                                    <td class = "text-start">Fullname</td>
                                    <td class = "text-start"><?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] ;?></td>
                                 </tr>
                                 <tr>
                                    <td class = "text-start">Birthdate</td>
                                    <td class = "text-start"><?php echo $_SESSION['birthdate'];?></td>
                                 </tr>
                                 <tr>
                                    <td class = "text-start">Mobile Number</td>
                                    <td class = "text-start"><?php echo $_SESSION['mobile_number'];?></td>
                                 </tr>
                                 <tr>
                                    <td class = "text-start">E-mail</td>
                                    <td class = "text-start"><?php echo $_SESSION['email'];?></td>
                                 </tr>
                                 <tr>
                                    <td class = "text-start">Address</td>
                                    <td class = "text-start"><?php echo $_SESSION['address'];?></td>
                                 </tr>


                            </table>

                            </div>

                        </div>

                   </div>
             
                   <div class="col m-auto">

                   <div class = "m-auto">
                        
                        <?php
                        $client = $_SESSION['client_id'];
                          $conn = new mysqli('localhost','root','','restomatic_db');

                          if($conn->connect_error){
                            die('Connection failed : ' . $conn->connect_error);
                           }else{
                          $query = "SELECT * FROM `order_count` WHERE client_id =  $client;";
                        
                          $result = mysqli_query($conn,$query);

                          if($rows = mysqli_fetch_assoc($result))
                              {
                             
                          ?>
                          <a href="client_ui_order.php"  style = "text-decoration:none;color:black;">
                        <div class = "text-center my-lg-banner">
                            <h3 class = ""><?php echo $rows['count']?></h3>
                            <h6>Orders</h6>
                        </div>
                        </a>
                        <br>
                        <!-- <a href="client_ui_reservation.php" style = "text-decoration:none;color:black;"> -->
                        <div class = "text-center my-lg-banner">
                            <h4>Coming Soon!</h4>
                            <h6>Reservations</h6>

                        </div>
                        <!-- </a> -->
                        <?php 
                         } 
                          }
                        ?>

                   </div>


                   </div>
                        
                </div>
                
                     
                <div class="row row2 m-0">
                
                  <div class="col">
                    <div class="panel" style="margin: 50PX;background-color:white ;">
                        <div class="panel-body">            
                            <table class="table orderTable">
                                <thead>
                                  <tr>
                                    <th>ORDER NUMBER</th>
                                    <th>PLACED ON</th>
                                    <th>ITEM</th>
                                    <th>TOTAL</th>
                                  </tr>
                                </thead>
                                <?php
                                  $count = 0;
                                  $client = $_SESSION['client_id'];
                                    $conn = new mysqli('localhost','root','','restomatic_db');

                                    if($conn->connect_error){
                                      die('Connection failed : ' . $conn->connect_error);
                                    }else{
                                    $query = "SELECT * FROM `orders_content` WHERE client_id =  $client;";
                                  
                                    $result = mysqli_query($conn,$query);

                                    while($rows = mysqli_fetch_assoc($result))
                                        {
                                      
                                    ?>
                                <tbody>
                                  <tr name = "tbl_row" id="row_<?php echo $count ?>">
                                    <td scope=""><?php echo $rows['order_id']; ?></td>
                                    <td hidden><?php echo $rows['client_id']; ?></td>
                                    <td><?php echo $rows['timestamp']; ?></td>
                                    <td><?php echo $rows['item_name']; ?></td>
                                    <td><?php echo $rows['sub_total']; ?></td>
                                    
                                  </tr>
                                </tbody>
                                <?php 
                                      $count = $count + 1;
                                      // echo "console.log('$count');";
                                        }
                                        
                                     }
              
                                       ?>
                              </table>
                              <button class = "btn btn-warning" onclick="show_all_orders()" id = "show">SHOW ALL ORDERS</button>
                              <button class = "btn btn-warning" onclick="minimize_orders()" id = "hide" hidden>MINIMIZE ORDERS</button>
                              
                              
                        </div>
                    </div>
                     
                    
                  </div>
                 
              </div>
        
             
            

          <footer>
              <?php
                require('../func/func_footer.php')
              ?>
          </footer>

<script>

var active = document.getElementById('nav_account');
active.setAttribute('class','nav-link my-nav-link my-active',);
// $("#page_footer").css("position","")


var table_row = $('[name="tbl_row"]');
function minimize_orders(){
for(var i = 0 ; i < table_row.length ; i++){
  console.log(table_row[i].id);
    if(i < 5){
      // console.log("if");

    }else{
      // console.log("else");
        $("#"+table_row[i].id).attr("hidden","");

    }


}
$("#page_footer").css("position","absolute");
$("#show").removeAttr("hidden","");
  $("#hide").attr("hidden","");
}

minimize_orders();

function show_all_orders(){


for(var i = 0 ; i < table_row.length ; i++){
  console.log(table_row[i].id);
    if(i < 5){
      // console.log("if");

    }else{
      // console.log("else");
        $("#"+table_row[i].id).removeAttr("hidden","");

    }
  
  }
  $("#page_footer").css("position","");
  $("#hide").removeAttr("hidden","");
  $("#show").attr("hidden","");
}


</script>




</body>
</html>