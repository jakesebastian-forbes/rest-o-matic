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
    <div class="col-lg-2 col-md-3 col-sm-6 col-9 m-1 mb-1 15vw" style="">
      <div class="card h-100 ">

        <?php echo '<img class="card-img-top img img-responsive" src = "data:image/jpeg;base64,'.base64_encode($rows['img']) .'" style ="width : 100%; height:200px; object-fit: cover;"/>';?>


        <div class="card-body">
          <h5 class="card-title">
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