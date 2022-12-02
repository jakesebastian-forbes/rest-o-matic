<?php

$qry_statement;

?>

<div class="panel-body" style="background-color: #EEEDE7;border-radius:10px;">
                
                        <?php

  if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
   }else{

  $query = $qry_statement; //GET ORDERS

  $result_orderID = mysqli_query($conn,$query);

  while($rows_orderID = mysqli_fetch_assoc($result_orderID))
      {
       $order_id =  $rows_orderID['order_id'];
       $client_id = $rows_orderID['client_id'];

       if($conn->connect_error){
        die('Connection failed : ' . $conn->connect_error);
       }else{
    
      $query = "SELECT * FROM `client_account` WHERE client_id = $client_id"; //GET ORDER CLIENT
    
      $result_client = mysqli_query($conn,$query);

       }
       while($rows_client = mysqli_fetch_assoc($result_client))
      {
        echo $rows_client['username'];
      }
    
        ?>
        <div class="row">
    <!-- <h1>adasd</h1> -->
        <h6><?php //echo $rows_client['username']; ?> </h6>
        <h6><?php //echo $rows_client['firstname'] . ' '. $rows_client['lastname']; ?> </h6>
        <h6><?php //echo $rows_client['address']; ?> </h6>

</div>



  


  
  
  <div class="row mt-2 m-0">
  <div class="row">
      <center>
                            <div class="card" style="width:inherit; margin:2%;">
                                <div class="card-header" id = "order">
                         
                                    <h6 style="color: black ; float:left;">Order ID : </h6>
                                    <h6 id = "order_id" style="color: black ;  float:left;"><?php echo $rows_orderID['order_id']?> </h6>
                                    <h5 style="color: black ; float: right;"><?php echo $rows_orderID['status']?></h5>
                        
                                </div>
                                <div class="card-body cardbody">
                                    
                                    

                                   
                                    <?php

                                        
                                        if($conn->connect_error){
                                            die('Connection failed : ' . $conn->connect_error);
                                        }else{
                                            // echo " uyyy". $category;
                                        $query = "SELECT * FROM `orders_content` WHERE  `order_id` = $order_id;";

                                        $result = mysqli_query($conn,$query);

                                        while($rows = mysqli_fetch_assoc($result))
                                            {
                                            
                                        ?>
                                          <div class="row">
                                        <?php
                                        echo $rows_orderID['client_id'];
                                        ?>
                                        </div>
                                        <div class="row mb-2">
                                      
                                        <div class="col">
                                        <?php echo '<img class="card-img-top img img-responsive" src = "data:image/jpeg;base64,'.base64_encode($rows['img']) .'" 
                                        style ="width : 50px; height:50px; object-fit: cover;"/>';?>
                                     </div>
                                     <div class="col">
                                                <h6 id = "order_menu_item"><?php echo $rows['item_name']?></h6>
                                                </div>
                                                <div class="col">
                                                <h6 id = "item_qnt">QNT: <?php echo $rows['quantity']?></h6>
                                       
                                                </div>
                                     
                                            <div class="col">
                                            <h5 style="float:right ;"
                                            id = "order_menu_price"> PRICE: <?php echo $rows['item_price']?></h5>
                                            </div>
                                        </div>
                                    
                                    <?php
                              }
                            }
                                ?>

                                        </div>
                              
                                <div class="card-footer cardFooter">
                                    <div class="row">
                                        <div class="col-6">
                            
                                        </div>
                                        <div class="col-6">
                                            <div class="row" style="float: right;">
                                                <div class="col">
                                                <?php

                                                                                        
                                                    if($conn->connect_error){
                                                    die('Connection failed : ' . $conn->connect_error);
                                                    }else{
                                                    // echo " uyyy". $category;
                                                    $query = "SELECT * FROM `order_total` WHERE `order_id` = $order_id ";

                                                    // echo $order_id;
                                                    $result_total = mysqli_query($conn,$query);
                                                    $rows = mysqli_fetch_assoc($result_total);

                                                    ?>
                                                    <h6 id = "order_total">TOTAL: <?php 
                                                    if($rows == NULL){
                                                        echo "0.00";

                                                    }else{
                                                        echo $rows['total'];
                                                    }

                                                    
                                                    ?></h6>



                                                    <?php
                                                    
                                                    }
                                                        ?>
                                                </div>
                                   
                                            </div> 
                                            <br> 
                                            <div class="row" style="justify-content: right; margin: 5px;">
                                                <!-- <div class="col-sm-3"> 
                                                    <button class="btn" style="width:100px ;background-color:#FFA500 ; font-size:small">BUY AGAIN</button>
                                                    
                                                </div>
                                                
                                                <div class="col-sm-3">
                                                    <button class="btn" style="width:100px ;background-color:#FFA500 ; font-size:small">CONTACT</button>
                                                </div> -->
                                                 </div>
                                        </div>
                                    </div>
                                </div>
                                </div>



                            </div>
                            <?php
                              }
                            }
                                ?>
                        </center>
                        
                    </div>
                </div>
                
            </div>