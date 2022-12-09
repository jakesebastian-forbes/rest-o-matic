<?php

$qry_statement;
$cat;

?>

<div class="panel-body" style="background-color: #f7dd4424;">
                <div class="row m-0">
                    <div class="col">
                        <center>
                        <?php

  if($conn->connect_error){
    die('Connection failed : ' . $conn->connect_error);
   }else{
    // echo " uyyy". $category;
  $query = $qry_statement;

  $result_orderID = mysqli_query($conn,$query);

  $result1 = mysqli_query($conn,$query);
                                      
  if($rows1 = mysqli_fetch_assoc($result1)){
      
    //   echo "<div class = 'row text-cente'> MAY LAMAN </div>";

  }
  else{
    echo "<div class = 'row text-center p-2' style = 'display:block; float:center;'>--EMPTY--</div>";

  }
 

  while($rows_orderID = mysqli_fetch_assoc($result_orderID))
      {
       $order_id =  $rows_orderID['order_id']
  ?>
                            <div class="card" style="width:inherit; margin:2%;">
                                <div class="card-header" id = "order">
                         
                                    <h6 style="color: black ; float:left;">Order ID : </h6>
                                    <h6 id = "order_id" style="color: black ;  float:left;"><?php echo $rows_orderID['order_id']?> </h6>
                                    <h5 style="color: black ; float: right;"><?php 
                                    
                                    $status =  $rows_orderID['status'];
                                    echo $status;
                                    ?></h5>
                        
                                </div>
                                <div class="card-body cardbody">
                                    
                                    <?php

                                        
                                        if($conn->connect_error){
                                            die('Connection failed : ' . $conn->connect_error);
                                        }else{
                                            // echo " uyyy". $category;
                                        $query = "SELECT * FROM `orders_content` WHERE `client_id` = $client_id AND `order_id` = $order_id;";

                                        $result = mysqli_query($conn,$query);
                                      
                                        while($rows = mysqli_fetch_assoc($result))
                                            {
                                            
                                        ?>
                                        <div class="row">
                                        <div class="col-sm-3">
                                        <?php echo '<img class="card-img-top img img-responsive" src = "data:image/jpeg;base64,'.base64_encode($rows['img']) .'" 
        style ="width : 50px; height:50px; object-fit: cover;"/>';?>
                                            <div class="row">
                                                <h6 id = "order_menu_item"><?php echo $rows['item_name']?></h6>
                                            </div>
                                            <div class="row">
                                                <h6 id = "item_qnt">QNT: <?php echo $rows['quantity']?></h6>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-9">

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
                                            <!-- <h5>RATING</h5>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span> -->
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
                                                    <h6 id = "order_total">ORDER TOTAL: <?php 
                                                    if($rows == NULL){
                                                        echo "0.00";

                                                    }else{
                                                        $total = $rows['total'];
                                                        echo $total;
                                                        echo "<h6> SHIPPING FEE : 50.00 </h6> ";
                                                        echo "<h6> DISCOUNT: 0.00</h6> ";
                                                        echo "<h6> TOTAL : " . $total + 50.00 ."</h6> ";
                                                    }

                                                    
                                                    ?></h6>



                                                    <?php
                                                    
                                                    }
                                                        ?>
                                                </div>
                                   
                                            </div> 
                                            <!-- <hr>  -->
                                            <div class="row" style="justify-content: right; margin-right:-2px;">
                                            <?php
                                            // echo "console.log('$status')";
                                            if(strtolower($status) == 'pending' || strtolower($status) == 'approved' ){
                                                
                                                echo '   <div class="col-sm-3"> 
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                 id ="cancel_'.$order_id.' " onclick ="cancel_order(this.id)" style="
                                                 display: block;
                                                 float: right;
                                             ">CANCEL</button>
                                                
                                            </div>';
                                           

                                            }elseif($status.CASE_LOWER == 'delivered'){
                                            //     echo '   <div class="col-sm-3"> 
                                            //     <button class="btn" style="width:100px ;background-color:#FFA500 ; 
                                            //     font-size:small" id ="review_'.$order_id.' ">CANCEL</button>
                                                
                                            // </div>';

                                            }

                                              
                                            
                                            ?>
                                         
<!--                                                 
                                                <div class="col-sm-3">
                                                    <button class="btn" style="width:100px ;background-color:#FFA500 ; font-size:small">CONTACT</button>
                                                </div> -->
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