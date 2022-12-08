<?php
require "../func/func_session.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
    <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script>  
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <?php
        $title = "Orders | Client | Restomatic";
        require('../func/func_must_haves.php');
    ?>
</head>

    


    <style>
        .dropdown {
            display: inline-block; 
           
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: black;
            min-width: 100px;
            padding: 12px 16px;
            color: white;
            
        
        }

        .dropdown-content ul{
            display: flex;
            
            list-style: none;
        
        }

        .dropdown:hover .dropdown-content {
        display: block;
        }

        .orderNavbar{
        background-color: #FFA500;
        margin-top: 10px;
        justify-content: space-between;
        
        }

        .nav-item a{
            margin: 5px;
            color: black;
        }

        .my-nav-item :hover{
            
            background-color: white;
            color: black;
            border-radius: 10PX;
        }

        .cardbody{
            color: black;
        }

        .cardFooter{
            justify-content: left;
            color: black;
        }

        .panelFooter{
            background-color: #EEEDE7;
           
            display: flex;
            align-content: center;
            justify-content: center;
            width: 100%;
        }

        .socialmedia{
            display: flex;
            font-size: 20px;
            align-content: center;
            justify-content: space-between;
           
        }

        .socialmedia a{
            color: black;
        }

        .footerline {
            width: 100%;
            height: 1px;
            background-color: black;
        }

        .checked{
            color: orange;
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
        .footerline {
            width: 100%;
            height: 1px;
            background-color:white;
        }

        @media only screen and ((max-width: 992px)) {

  #pills-tab{
    display: block;
  }
  .nav-link{
    display:inline-block;
  }
  .nav-item{
    width:max-content;

  }
}


    </style>



<body>
    <div class="container-fluid p-0">
            
<?php
    $title_sidebar = "MY ORDERS";
    require('client_sidebar.php');
?>

      
<div class="panel" style="margin-top:2px;">
            <!-- <nav class="navbar nav-pills  d-inline-flex  navbar-expand-lg align-content:vertical "style=" background-color: #FFA500; border-radius:10px;width: 100vw; border-radius:10px;"> -->
            <nav class="navbar nav-pills navbar-expand-lg mt-1 "  style="background-color:#FFA500; border-radius: 10px 10px 0px 0px;" >
                <!-- <a class="navbar-brand" href="#"></a> -->
                <button class="navbar-toggler" type="button"  data-bs-toggle="collapse" data-bs-target="#demo"  aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" style="margin-right: 10px;">
                    <i class="fa-solid fa-bars"></i>
                </button>
           

            <div id="demo" class="collapse navbar-collapse">
                  <div class="panel-body" style="width: 80vw; margin-left: auto; margin-right: auto;">
        
                    <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist" style="align-items: center;">
                        
                      <li class="nav-item my-auto  pl-3 " role="presentation" >
                        <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true"
                        style="color:white"><span>
                        </span>ALL</button>
                      </li>
                      <li class="nav-item my-auto  pl-3" role="presentation" >
                        <button class="nav-link" id="pills-pending-tab" data-bs-toggle="pill" data-bs-target="#pills-pending" type="button" role="tab" aria-controls="pills-pending" aria-selected="true"
                        style="color:white"><span>
                        </span>PENDING</button>
                      </li>
                      <li class="nav-item my-auto  pl-3" role="presentation">
                        <button class="nav-link" id="pills-receive-tab" data-bs-toggle="pill" data-bs-target="#pills-receive" type="button" role="tab" aria-controls="pills-receive" aria-selected="false"
                        style="color:white"><span>
                        </span>APPROVED</button>
                      </li>
                      <li class="nav-item my-auto  pl-3" role="presentation">
                        <button class="nav-link" id="pills-completed-tab" data-bs-toggle="pill" data-bs-target="#pills-completed" type="button" role="tab" aria-controls="pills-completed" aria-selected="false"
                        style="color:white"><span>
                        </span>COMPLETED</button>
                      </li>
                      <li class="nav-item my-auto   pl-3" role="presentation">
                        <button class="nav-link" id="pills-cancelled-tab" data-bs-toggle="pill" data-bs-target="#pills-cancelled" type="button" role="tab" aria-controls="pills-cancelled" aria-selected="false"
                        style="color:white"><span>
                        </span>CANCELLED</button>
                      </li>
                      <li class="nav-item my-auto   pl-3" role="presentation">
                        <button class="nav-link" id="pills-return-tab" data-bs-toggle="pill" data-bs-target="#pills-return" type="button" role="tab" aria-controls="pills-return" aria-selected="false"
                        style="color:white"><span>
                        </span>RETURN/REFUND</button>
                      </li>
                    </ul> 
                  </div>
        </div> 
      </nav>
    </div>



    </div>
    
    
<?php
$client_id = $_SESSION['client_id'] ;
?>

    <div class="tab-content" id="pills-tabContent">
        <!-- ALL -->
  <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-home-tab">

<?php
//all
    $cat = "all";
    $qry_statement = "SELECT * FROM `client_order` WHERE `client_id` = $client_id";
    include "../func/func_pill_content.php";
?>
  
  </div>
<!-- PENDING -->
  <div class="tab-pane fade" id="pills-pending" role="tabpanel" aria-labelledby="pills-profile-tab">
  
<?php
$cat = "pending";
$qry_statement = "SELECT * FROM `client_order` WHERE `client_id` = $client_id AND `status` = 'pending';";
include "../func/func_pill_content.php";

?>
  </div>
  <!-- TO RECEIVE -->
  <div class="tab-pane fade" id="pills-receive" role="tabpanel" aria-labelledby="pills-contact-tab">
  
  <?php
$cat = "approved";
$qry_statement = "SELECT * FROM `client_order` WHERE `client_id` = $client_id AND `status` = 'approved';";
include "../func/func_pill_content.php";

?>
  
  </div>
  <!-- DELIVERED -->
  <div class="tab-pane fade" id="pills-completed" role="tabpanel" aria-labelledby="pills-contact-tab">
    
    <?php
      $cat = "delivered";
      $qry_statement = "SELECT * FROM `client_order` WHERE `client_id` = $client_id AND `status` = 'delivered';";
      include "../func/func_pill_content.php";
  
  ?>
    
    </div>
<!-- CANCELLED -->
    <div class="tab-pane fade" id="pills-cancelled" role="tabpanel" aria-labelledby="pills-contact-tab">
    
    <?php
      $cat = "cancelled";
      $qry_statement = "SELECT * FROM `client_order` WHERE `client_id` = $client_id AND `status` = 'cancelled';";
      include "../func/func_pill_content.php";
  
  ?>
    
    </div>

    <!-- RETURN/REFUND -->
    <div class="tab-pane fade" id="pills-return" role="tabpanel" aria-labelledby="pills-contact-tab">
    
    <?php
      $cat = "returned";
      $qry_statement = "SELECT * FROM `client_order` WHERE `client_id` = $client_id AND `status` = 'returned';";
      include "../func/func_pill_content.php";
  
  ?>
    
    </div>

    <footer>
<?php
require('../func/func_footer.php')
?>
</footer>

    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade m-0" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cancel Order?</h1>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body" id ="cancel-body">
        Are you sure to you want to cancel this order?
        <div id = "cancel_append" style = "font-weight:bold;"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="clear_modal()" > Cancel</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" 
        data-bs-target="#order_cancelled" onclick="cancel_final()">Yes</button>
      </div>
    </div>
  </div>
</div>
  
<div class="modal fade m-0" id="order_cancelled" tabindex="-1" aria-labelledby="order_cancelled" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Success</h1>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body" id ="cancel-body">
        Order Cancelled Successfully!
        <div id = "cancel_success" style = "font-weight:bold;"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Close</button>
        <!-- <button type="button" class="btn btn-primary" onclick="cancel_final()">Yes</button> -->
      </div>
    </div>
  </div>
</div>
  

</div>

    
<script>
$("#page_footer").css("bottom","");

var active = document.getElementById('nav_orders');
active.setAttribute('class','nav-link my-nav-link my-active',);



function cancel_order(id){
  console.log("cancel",id);

  id = id.replace("cancel_","");
  
  $("#cancel_append").append("Order ID : ",id);


}


$('#exampleModal').on('hidden.bs.modal', function () {
  // window.alert('hidden event fired!');
  $("#cancel_append").empty();


});

function sleep (time) {
  return new Promise((resolve) => setTimeout(resolve, time));
}

$('#order_cancelled').on('hidden.bs.modal', function () {
  // window.alert('hidden event fired!');
  sleep(500).then(() => {

window.location.reload(true);
});


});

function clear_modal(){

  $("#cancel_append").empty();


}

function cancel_final(){

  console.log($("#cancel_append")[0].innerHTML);

  var cancelling = $("#cancel_append")[0].innerHTML;

  cancelling = cancelling.replace("Order ID : ","");

  console.log(cancelling);


  
  $.ajax({
		url: "Admin_UI/func_update_order_status.php",
		type: "POST",
		data: {
			"order_id": cancelling,
      "new_stat": "cancelled"
		},
		cache: false,
        async : false,
		success: function(dataResult){

            // var status = JSON.parse(dataResult.split(" ")[1]);

			if(status.statusCode==200){

            console.log(dataResult);
            // order_id = JSON.parse(dataResult.split(" ")[0]);
						
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

