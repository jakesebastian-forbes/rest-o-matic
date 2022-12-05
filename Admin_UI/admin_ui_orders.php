<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="../bootstrap-5.2.2/css/bootstrap.min.css">
    <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

   
    
</head>

<style>

    .my-text-small{
        font-size: small;

    }

    .my-fit-content{
        width: fit-content;

    }

    .my-img{

    min-width: 60px;
    min-height: 60px;
    max-width: 80px;
    max-height: 62px;
    border-radius: 10px;
    border: outset;
    object-fit: cover;
    }
</style>

<body class = "">
  <div class="container-fluid">
    
  <?php
    $page_title = "Orders";
    require "admin_sidebar.php";
  ?>

    <div class="row ">
        <h2>Orders</h2>
        <div class="d-flex justify-content-start">
        
        <div class="col">
                <label for="status">Status</label>

                <select name="status" id="status" >
                <option value="all">All</option>
                <option value="pending">Pending</option>
                <option value="confirmed">Confirmed</option>
                <option value="on delivery">On delivery</option>
                <option value="delivered">Delivered</option>
                <option value="cancelled">Cancelled</option>
                </select>

        </div>
        <div class="col">
            <label for="date">Date</label>

            <select name="date" id="date">
            <option value="">Today</option>
            <option value="saab">Yesterday</option>
            <option value="mercedes">Last week</option>
            <option value="audi">Last month</option>
            </select>

       
    </div>

    <div class="col">
             <input type="text" placeholder="Search">
    </div>
</div>
    </div>











    <div class="panel m-3">
    <div class="accordion" id="accordionPanelsStayOpenExample">

    <?php
      $row_count = 0;
                          $conn = new mysqli('localhost','root','','restomatic_db');

                          if($conn->connect_error){
                            die('Connection failed : ' . $conn->connect_error);
                           }else{
                          $query = "SELECT DISTINCT(`order_id`),firstname,lastname,mobile_number,address,timestamp,status FROM `orders_content` ";
                        
                          $result = mysqli_query($conn,$query);

                          while($rows = mysqli_fetch_assoc($result))
                              {
                              
                          ?>

<?php 
                    $content = "";
                    $highlight ="";
                    if($row_count == 0){
                        $content = "show";
                        

                    }
                    else{
                      $content = "hidden";
                      $highlight = "collapsed";
                    }
                    ?>

        <div class="accordion-item">
          <h2 class="accordion-header" id="#row<?php echo $row_count?>">

        
            <button class="accordion-button <?php echo $highlight;?>" type="button" data-bs-toggle="collapse" data-bs-target="#row<?php echo $row_count?>" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
              <div class="row" style = "width:100%">
               
                <div class="d-flex justify-content-evenly">
                    
                      <?php echo $row_count;
                      $order_id = $rows['order_id'];
                      ?>
                    <div class="col">Order ID  <?php echo $rows['order_id'];?></div>
                    <div class="col">Client Name <?php echo $rows['firstname'] . ' ' . $rows['lastname'];?></div>
                    <div class="col">Contact <?php echo $rows['mobile_number'];?></div>
                    <div class="col">Address <?php echo $rows['address'];?></div>
                    <div class="col">Date <?php echo $rows['timestamp'];?></div>
                    <div class="col">
                        
                  
                        <label for="status">Status</label>

                        <select name="status" id="status<?php echo $order_id?>" onchange="updateStatus(this.value,this.id)">
                            <option value="Pending">Pending</option>
                            <option value="Approved">Approved</option>
                            <option value="On Delivery">On delivery</option>
                            <option value="Delivered">Delivered</option>
                            <option value="Cancelled">Cancelled</option>
                        </select>
                    
                    </div>
                  
                  
                </div>
              </div>

            </button>
         
          </h2>


          <div id="row<?php echo $row_count?>" class="accordion-collapse collapse <?php echo $content;?>" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body panel-body m-2 pt-2 mt-0">
              <!-- <strong>This is the first item's accordion body.</strong>
               It is shown by default, until the collapse plugin adds the appropriate
                classes that we use to style each element. These classes control the overall 
                appearance, as well as the showing and hiding via CSS transitions. You can modify
                 any of this with custom CSS or overriding our default variables. It's also 
                 worth noting that just about any HTML can go within the <code>.accordion-body</code>, 
                 though the transition does limit overflow. -->
               <div class="row text-muted mt-0" style = "font-size: medium;"> <!--LABEL -->
                <div class="col">IMG</div>
                <div class="col">Item name</div>
                <div class="col">Item qnty</div>
                <div class="col">Item Price</div>
                <div class="col">Item Total (price*qnty)</div>

                 </div>
               
                 <hr>
               
                 <?php
                          $conn1 = new mysqli('localhost','root','','restomatic_db');

                          if($conn1->connect_error){
                            die('Connection failed : ' . $conn1->connect_error);
                           }else{
                          $query1 = "SELECT * FROM `orders_content` WHERE order_id = '$order_id';";
                        
                          $result1 = mysqli_query($conn1,$query1);

                          while($rows1 = mysqli_fetch_assoc($result1))
                              {
                               
                          ?>
               
                <div class="row text-center">   <!-- content -->
                <div class = "col">
                <?php echo '<img class="card-img-top img img-responsive my-img" src = "data:image/jpeg;base64,'.base64_encode($rows1['img']) .'"> ';?>
                </div>
                    <!-- <div class="col"><img src = "../images/yeji.jpg" class = "my-img"></div> -->
                    <div class="col"><?php echo $rows1['item_name']; ?> </div>
                    <div class="col"><?php echo $rows1['quantity']; ?></div>
                    <div class="col"><?php echo $rows1['item_price']; ?></div>
                    <div class="col"><?php echo $rows1['sub_total']; ?></div>
                    </div>
                    <?php
                              }
                            }
                    ?>
                
                <hr>
                <div class="d-flex align-items-end flex-column mb-3 my-text-small m-0 mb-0 p-0" >
                <div class="row ">
                <?php
                          $conn2 = new mysqli('localhost','root','','restomatic_db');

                          if($conn2->connect_error){
                            die('Connection failed : ' . $conn2->connect_error);
                           }else{
                          $query2 = "SELECT * FROM `order_total` WHERE order_id = '$order_id';";
                        
                          $result2 = mysqli_query($conn2,$query2);

                          while($rows2 = mysqli_fetch_assoc($result2))
                              {
                               
                          ?>
                    <p class="m-0 text-muted my-fit-content">SUB TOTAL : </p>
                    <p class="m-0 my-fit-content">P <?php 
                    $subtotal = $rows2['total'];
                    echo $rows2['total']?></p>

                    <?php
                              }
                            }
                    ?>
                </div>
                <div class="row ">
                    <p class="m-0 text-muted my-fit-content">SHIPPING : </p> 
                    <p class="m-0 my-fit-content"> P <?php $subtotal =  $subtotal + 30.00; echo $subtotal;?></p>
                </div>
                <div class="row ">
                    <p class="m-0 text-muted my-fit-content">DISCOUNT : </p> 
                    <p class="m-0 my-fit-content"> P <?php 
                    $discount = 0;
                    $subtotal = $subtotal - $discount;
                    echo $discount;?></p>
                </div>
                <div class="row">
                    <p class="m-0 text-muted my-fit-content">TOTAL : </p> 
                    <p class="m-0 my-fit-content"> P <?php $total = $subtotal;
                    echo $total;?></p>
                </div>
            </div>
            
            </div>
          </div>
        </div>

        <?php 
        //  echo $row_count;
        //  $row_count =+1;
        //  echo $row_count;
       
              

        $stats = $rows['status'];
        echo "<script> 
        
        document.getElementById('status$order_id').value = '$stats';
        
        
        </script>"; 
        $row_count+= 1;
      }
    }
                 
                  ?>
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
              Accordion Item #2
            </button>
          </h2>
          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
    </div>


    </div>
    <!-- <script src="../bootstrap-5.2.2/js/bootstrap.min.js"></script> -->

    <script>

    function updateStatus(value,id){
        console.log("updateStatus  " + value +":" +id);

        var order_id = id.replace("status","");
        // var new_stat = value;
        console.log(order_id);

        $.ajax({
        url: "func_update_order_status.php",
        type: "POST",
        data: {
          "order_id": order_id,
          "new_stat": value
        },
        cache: false,
        async : true,
        success: function(dataResult){

 
          console.log(dataResult);
          if(status.statusCode==200){

                console.log(dataResult);
          
                
          }
          else if(status.statusCode==201){
            alert("Error occurred !");
          }
          
        }
      });



    }

    </script>

</body>
</html>