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
                <label for="filter_status">Status</label>

                <select name="filter_status" id="" onchange="filter_status(this.value)" style= "width:70%">
                <option value="all">All</option>
                <option value="pending">Pending</option>
                <option value="approved">Approved</option>
                <option value="confirmed">Confirmed</option>
                <option value="on delivery">On delivery</option>
                <option value="delivered">Delivered</option>
                <option value="cancelled">Cancelled</option>
                </select>

        </div>
        <div class="col">
            <label for="date">Date</label>
       
            <select name="date" id="date" onchange="date_filter(this.value,this.id)" style= "width:70%">
            <option value="" id = "all_time">All</option>
            <option value="" id = "date_today">Today</option>
            <option value="" id = "date_yesterday">Yesterday</option>
            <option value="Search">Search</option>
            <!-- <option value="">Last week</option>
            <option value="audi">Last month</option> -->
            </select>

            <script>

            var new_date = new Date();

            var date,y_date;


            if(new_date.getDate() < 10){
  
                date = "0" + new_date.getDate();
                y_date  = "0" + parseInt(new_date.getDate()-1);
            }

            var curr_date = new_date.getFullYear() + "-" + parseInt(new_date.getMonth()+1) + "-"+ date;
            var yesterday = new_date.getFullYear() + "-" + parseInt(new_date.getMonth()+1) + "-"+ y_date;

            $("#date_today").val(curr_date);
            $("#date_yesterday").val(yesterday);
            

            </script>

       
    </div>

    <div class="col" id = "div_date_search" hidden>

    <input type="date" id = "date_search" placeholder="yyyy-mm-dd" onchange="date_search(this.value)"  style= "width:70%">

    </div>

    <div class="col" id = ""  >
             <input type="text" placeholder="Search order" onchange="order_search(this)"  style= "width:80%">
    </div>
</div>
    </div>











    <div class="panel m-3">
    <div class="accordion" id="accordionPanelsStayOpenExample" style = "border-radius:10px;">

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

        <div class="accordion-item border" id ="acc-item-<?php echo $rows['order_id']?>" >
          <h2 class="accordion-header" id="#row<?php echo $row_count?>">

        
            <button class="accordion-button <?php echo $highlight;?>" type="button" data-bs-toggle="collapse" data-bs-target="#row<?php echo $row_count?>" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
              <div class="row" style = "width:100%">
               
                <div class="d-flex justify-content-evenly text-center">
                    
                      <?php 
                      $order_id = $rows['order_id'];
                      ?>
                    <div class="col">
                      <div> Order No. </div> 
                      <h5 id = "order_no<?php echo $rows['order_id'];?>"name = "order_no" value = "<?php echo $rows['order_id'];?>"><?php echo $rows['order_id'];?></h5>
                      
                    
                    </div>
                    <div class="col"><?php echo $rows['firstname'] . ' ' . $rows['lastname'];?></div>
                    <div class="col"><?php echo $rows['mobile_number'];?></div>
                    <div class="col"><?php echo $rows['address'];?></div>
                    <div class="col text-center">
                      
                    <div id = "time<?php echo $rows['order_id'];?>"></div>
                    <h6 id = "date1<?php echo $rows['order_id'];?>" 
                    name = "order_date"class="text-muted" style="font-size: smaller;"></h6>
                    

                    <script>
                      var date = "<?php echo $rows['timestamp'];?>";
                      date = date.split(" ");

                      var time = date[1];
                      date = date[0];
                      document.getElementById("time<?php echo $rows['order_id'];?>").innerHTML = time;
                      document.getElementById("date1<?php echo $rows['order_id'];?>").innerHTML = date;

                      var date_id = $("#date1<?php echo $rows['order_id'];?>");
                      date_id.val(date);
                      // console.log(bruhh.val());
           


                    </script>
                  
                    </div>
                    <div class="col">
                        
                    <div>Status : <b id = "status<?php echo $order_id?>" name = "status_real" value = "<?php echo $rows['status']?>"><?php echo $rows['status']?></b></div>
                  <script>
                    var order_status_edit = '<hr><label for="status">Status</label><select name="status" id="status_edit<?php echo $order_id?>"'+ 
                   ' onchange="updateStatus(this.value,this.id,this)">'+
                        '<option value="Pending">Pending</option>'+
                        '<option value="Approved">Approved</option>'+
                        '<option value="On Delivery">On delivery</option>' +
                        '<option value="Delivered">Delivered</option>' +
                        // '<option value="Cancelled">Cancelled</option>' +
                   ' </select>'
                  

                    </script>
                        
                    
                    </div>
                  
                  
                </div>
              </div>

            </button>
         
          </h2>


          <div id="row<?php echo $row_count?>" class="accordion-collapse collapse <?php echo $content;?>" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body panel-body m-2 pt-2 mt-0">
        
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
                    <p class="m-0 my-fit-content"> P <?php $subtotal =  $subtotal + 30.00; echo 30.00;?></p>
                </div>
                <div class="row ">
                    <p class="m-0 text-muted my-fit-content">DISCOUNT : </p> 
                    <p class="m-0 my-fit-content"> P <?php 
                    $discount = 0;
                    $subtotal = $subtotal - $discount;
                    echo $discount;?></p>
                </div>
                <div class="row">
                    <p class="m-0 text-muted my-fit-content"><b>TOTAL : </b> </p> 
                    <p class="m-0 my-fit-content"> P <?php $total = $subtotal;
                    echo $total;?></p>
                </div>
            </div>
                  
                  <div id = "stat_edit<?php echo $order_id?>">
                  </div>
                  <script>
                     <?php 

$stats = $rows['status'];

?>  
                    var status = "<?php echo $stats?>";
                    if(status.toLowerCase() == "cancelled" || status.toLowerCase() == "delivered" ){

                        console.log("wahh");
                    }
                    else{

                    var anothera = $("#stat_edit<?php echo $order_id?>");
                    anothera.append(order_status_edit); 
                    document.getElementById('status<?php echo $order_id?>').value = '<?php echo $stats?>' ;
                    console.log("<?php echo $order_id.":".$stats?>");
                    $("#status_edit<?php echo $order_id?>").val("<?php echo $stats?>");

                    }
                    
                    // $("#status_edit139").val("Delivered");
                    

                   
                    </script>
                  

            
            </div>
          </div>
        </div>

        <?php 

        $stats = $rows['status'];

        // echo "<script> 
        // console.log('$stats');
        
        // document.getElementById('status$order_id').value = '$stats';
        
        
        // </script>"; 
        $row_count+= 1;
      }
    }
                 
                  ?>

        <div class="row text-center text-muted">
          <h4>This is the end of the list.</h4>

        </div>
        <!-- <div class="accordion-item">
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
        </div> -->
    </div>

 
    </div>
  
  </div>
  <footer>
    <?php
require('../func/func_footer.php')
?>
</footer>
  
    <!-- <script src="../bootstrap-5.2.2/js/bootstrap.min.js"></script> -->


    <script>

$("#page_footer").css("bottom","");
$("#page_footer").css("margin","0px");

    function updateStatus(value,id){
        console.log("updateStatus  " + value +":" +id);

        var order_id = id.replace("status_edit","");
        // var new_stat = value;
        // console.log(order_id);

        $.ajax({
        url: "../func/func_update_order_status.php",
        type: "POST",
        data: {
          "order_id": order_id,
          "new_stat": value
        },
        cache: false,
        async : true,
        success: function(dataResult){

          
          // console.log(dataResult);
          // console.log(order_id);
          // console.log($("#status"+order_id)[0].innerHTML);
         
          $("#status"+order_id)[0].innerHTML = value; 

                
          if(status.statusCode==200){

                console.log(dataResult);
                console.log(order_id);
                $("#status"+order_id).innerHTML = value; 
                
          
                
          }
          else if(status.statusCode==201){
            alert("Error occurred !");
          }
          
        }
      });
    }

 

    var accordion_items = $('[name="status_real"]'); //get all accordion item
    
   function show_items(){
    var hidden_accordion = $("div").find(`[hidden = 'hidden']`); //get hidden accordion items
      //unhide all elements
      for(var j = 0; j < hidden_accordion.length ; j++){
                      var ids = hidden_accordion[j].id;
                      $("#"+ids).removeAttr("hidden");
                      
                  }

   }

   function hide_items(loop,if_item){

    for (var i = 0 ;i<loop.length; i++){ //loop over the items
          if(loop[i].value.toLowerCase() != if_item.toLowerCase()){
   
           b = loop[i].parentElement.parentElement.parentElement.parentElement.parentElement.parentElement;
          //  console.log(b.id);

           $('#' + b.id).attr("hidden","");

        }
      }
    
   }

    function filter_status(value){
 
        if(value == "all"){
     
          show_items();
       
        }
        else {
    
          show_items();
          hide_items(accordion_items,value);

    }
  }
    
      var order_dates = $('[name="order_date"]');

        function date_filter(value,id,sel){
        var selected = $("#"+id +" option:selected").text();

        var date2 = new Date();
        

        if(selected == "All"){
            show_items();

        }else if(selected == "Today"){
            show_items();
            hide_items(order_dates,value);

        }else if(selected == "Yesterday"){

          show_items();
          hide_items(order_dates,value);
        }
        
        else if(selected == "Search"){
            $("#div_date_search").removeAttr("hidden");

        }


    }



  function date_search(value){
    // console.log(value);
    show_items();
    hide_items(order_dates,value);

  }


  var order_nos = $('[name="order_no"]'); //get all 

  function order_search(x){

    console.log(x.value);

    if(x.value == ""){

    show_items();
    }else{
    show_items();
 
    for (var i = 0 ;i<order_nos.length; i++){ //loop over the items
          console.log(order_nos.innerHTML);
          if(order_nos[i].innerHTML != x.value){
   
           b = order_nos[i].parentElement.parentElement.parentElement.parentElement.parentElement.parentElement;
           console.log(b.id);

           $('#' + b.id).attr("hidden","");
  
  
          
        }
      }
    }


  }


    </script>
  <footer>

</body>
</html>