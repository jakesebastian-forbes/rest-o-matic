<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TEST6 MENU | Client</title>

  <link rel="icon" type="image/x-icon" href="images/icon/web_icon.png" />
  <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css" />
  <script src="bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/general.css" />
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

</head>

<body>
<!-- <form> -->
<div class="row d-flex justify-content-start mx-auto">
    <?php
                          $conn = new mysqli('localhost','root','','restomatic_db');

                          if($conn->connect_error){
                            die('Connection failed : ' . $conn->connect_error);
                           }else{
                            // echo " uyyy". $category;
                          $query = "SELECT * FROM `menu` WHERE item_category = '$category' ;";
                        
                          $result = mysqli_query($conn,$query);

                          while($rows = mysqli_fetch_assoc($result))
                              {
                               
                          ?>
                          <!-- m-1 mb-1 15vw -->
                 
    <div class="col-lg-2 col-md-3 col-sm-5 col-11 m-1 mb-1 15vw" style="">
      <div class="card h-100">
        
        <div class="img_overlay">
        <?php echo '<img class="card-img-top img img-responsive" src = "data:image/jpeg;base64,'.base64_encode($rows['img']) .'" 
        style ="width : 100%; height:200px; object-fit: cover;"/>';?>
        <div class="img_title" style="color: white; text-align: center;">ADD TO CART 
      
          <div class="" style="margin-left: auto; margin-top: 47px;"> 
          <?php $menu_id = $rows['menu_id']?>
              <!-- <button class="mybtn1 my-auto" style = "margin-left: 15px;" action= "func_add_cart.php">ADD ITEM TO CART</button>  -->
              <!-- <button type="submit" class="mybtn1 my-auto" name="insert" value="<?php //echo $menu_id?>">Submit</button> -->
              <button type="submit" class="mybtn1 my-auto" name="insert" 
              id = "add_cart">Submit</button>
            <!-- for maybe buy now -->
              <button type="submit" formaction="/action_page2.php">Submit to another page</button>
           
            </div>
          </div>
        </div>
        

        <div class="card-body">
          <h5 class="card-title">
            <?php $rows['menu_id']?>
            <?php echo $rows['item_name'] ?>
          </h5>
          <p class="card-text">
            <?php echo $rows['item_desc'] ?>
          </p>
        </div>


        <div class="card-footer">
          <small class="text-muted">₱<?php echo $rows['item_price']?>.00</small>
      
        </div>
     
      </div>
    </div>

    <?php

        }
      }
      ?>
  </div>
  <!-- </form> -->



  <br>
  
    </body>
  </html>