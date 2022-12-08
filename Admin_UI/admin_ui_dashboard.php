<?php
// session_start();
// print_r($_SESSION);
// include 'db_connection_try.php';
// include 'admin_home_json.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name = "description" content="">
    <title>HOME | ADMIN</title>

  
    <style>
        /* Style the buttons */
/* .btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 18px;
} */

/* Style the active class, and buttons on mouse-over */
.active, .btn:hover {
  background-color: #F58216;
  color: white;
}
    </style>
    
</head>

<body>
    
<div class="container-fluid">

<?php
$page_title = "DASHBOARD";

require "admin_sidebar.php";
?>


<?php 
// $title_sidebar = "Dashboard";
// require 'admin_sidebar.php';
?>  
    <div class="row my-3">
        <!-- <div class="col-9">
            <h4>WELCOME TO DASHBOARD</h4>
        </div> -->
        <div class="text-left">
            <div class="btn-wrapper">
            <a href="#" class="btn btn-otline-dark btn-sm align-items-center pull-right"><i class="material-icons">share</i><span>Share</span></a>
            <a href="#" class="btn btn-otline-dark btn-sm pull-right" onclick="window.print()"><i class="material-icons">print</i><span>Print</span></a>
            </div>
        </div>
    </div>
              
    <div class="row my-2 mx1">
        <div class="col-lg-3 col-6 py-1">
            <div class="card" style="width:100%;max-width:700px; background-color: #F8DC88;">
                <div class="card-body rounded">
                <p class="statistics-title">TODAY SALES</p>
                <h3 class="rate-percentage text-center" id = "today_sales">32.53%</h3>
                </div>
            </div>
            </div>
        <div class="col-lg-3 col-6 py-1">
            <div class="card" style="width:100%;max-width:700px;background-color: #FCC945;">
                <div class="card-body rounded" >
                <p class="statistics-title">PENDING ORDERS</p>
                <h3 class="rate-percentage text-center" id = "pending_total">58.00%</h3>
              
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6 py-1">
            <div class="card" style="width:100%;max-width:700px;background-color: #F39A27;">
                <div class="card-body rounded">
                <p class="statistics-title">DELIVERED TODAY</p>
                <h3 class="rate-percentage text-center" id = "d_today">32.53%</h3>    
             
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6 py-1">
            <div class="card " style="width:100%;max-width:700px;background-color: #FF9D4F;">
                <div class="card-body rounded">
                <p class="statistics-title">TOTAL ACTIVE USERS</p>
                <h3 class="rate-percentage text-center" id="active_user">32.53%</h3>
                
                </div>
            </div>
        </div>
    </div>

   
                  <div class="row py-2">
                    <div class="col-lg-9 py-1 ">
                        <div class="card" style="width:100%;max-width:1500px;min-height: 500px;background-color: #FFB347;">
                            <h4>MARKETING SALES</h4>
                           
                          <div id="myDIV">
                            <button class="btn active" onclick="changeData(0)">This Day</button>
                            <button class="btn" onclick="changeData(1)">This Week</button>
                            <button class="btn" onclick="changeData(2)">This Month</button>
                        </div>
                         
                                  
                            <div class="card-body" >
                                <canvas id="sales_per_item" height="71" width="200"></canvas>
                            </div>
                            
                        </div>
                    </div>
                   
                    <div class="col-md-3 py-1">
                        <div class="card" >
                            <div class="card-body" style="width:100%;max-width:700px;min-height:500px;background-color: #F49C1B;">
                               <p>TOP CUSTOMERS</p>
                                    <div class="row text-center" style ="font-weight:bold;">
                                            <div class="col">Username</div>
                                            <div class="col">Orders</div>
                                            <div class="col">Total</div>
                                    </div>
                                    <div id = "top_customers" class="text-center">
                                        

                                    </div>
                            </div>  
                        </div>
                    </div>
                </div>
                
            
            </div>

    <!-- <script src = "../bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script> -->
    
    <script>

  const context = document.getElementById('sales_per_item').getContext('2d');

 var my_bar_chart = new Chart(context, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Sales',
        data: [12, 190, 3, 500, 20, 10000],
        backgroundColor: [
            "rgba(253, 7, 77, 0.19)", 
            "rgba(253, 7, 225, 0.19)", 
            "rgba(143, 7, 253, 0.19)",
            "rgba(7, 30, 253, 0.19)",
            "rgba(7, 163, 253, 0.19)",
            "rgba(7, 253, 250, 0.19)", 
            "rgba(7, 253, 138, 0.19)",
            "rgba(253, 245, 7, 0.19)",
            "rgba(253, 153, 7, 0.19)",
            "rgba(253, 92, 7, 0.19)"
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  
function get_data(){
    $.ajax({
		url: "../func/func_get_chart_data.php",
		type: "GET",
		// data: {
		// 	"client_id": <?php //echo $_SESSION['client_id']?>
		// },
		cache: false,
        async : true,
		success: function(dataResult){

            // var data_entry = JSON.parse(dataResult.split(":"));
            // console.log(dataResult);
            // console.log(data_entry);

            let item_name = dataResult;
            let item_array = item_name.split('/');
            item_array.pop();


            // console.log(item_array);
            var item = [];
            var quantity = [];

            // item.push();

            for(var i = 0 ; i < item_array.length ; i++){
                item.push(item_array[i].split(':')[0]);
                quantity.push(item_array[i].split(":")[1]);
            }
            
            // quantity =  quantity.sort();
            my_bar_chart.data.labels = item;
            my_bar_chart.data.datasets[0].data = quantity;
            // console.log(item);
            // console.log(quantity);
            my_bar_chart.update();

			if(status.statusCode==200){

            // console.log(dataResult);
            order_id = JSON.parse(dataResult.split(" ")[0]);
						
			}
			else if(status.statusCode==201){
				alert("Error occurred !");
			}
			
		}
	});

  


}

var new_date = new Date();


if(new_date.getDate() < 10){

    date = "0" + new_date.getDate();
    y_date  = "0" + parseInt(new_date.getDate()-1);
}

var curr_date = new_date.getFullYear() + "-" + parseInt(new_date.getMonth()+1) + "-"+ date;



function get_sales(){

$.ajax({
    url: "../func/func_get_total_sales.php",
    type: "POST",
    cache: false,
    async : true,
    data : {"tdate" : curr_date},
    success: function(dataResult){
        // console.log(dataResult);
        if(dataResult == "" || dataResult == "0"){

        var t_sales = document.getElementById("today_sales");
        t_sales.innerHTML = "₱0.00";

        }else{
            var t_sales = document.getElementById("today_sales");
        t_sales.innerHTML = "₱"+ dataResult+".00";

        }
     
        // if(status.statusCode==200){
        //     console.log("asdas",dataResult);
          
         
        // }
        // else if(status.statusCode==201){
        //     alert("Error occurred !");
        // }
        
    }
});
}


function get_pending(){

$.ajax({
    url: "../func/func_get_total_pending.php",
    type: "POST",
    cache: false,
    async : true,
    data : {"tdate" : curr_date},
    success: function(dataResult){
        // console.log("1111",dataResult);
        var p_orders = document.getElementById("pending_total");
        p_orders.innerHTML = dataResult;    
    }
});
}


function get_delivered(){

$.ajax({
    url: "../func/func_get_total_delivered.php",
    type: "POST",
    cache: false,
    async : true,
    data : {"tdate" : curr_date},
    success: function(dataResult){
        // console.log("1111",dataResult);
        var d_today = document.getElementById("d_today");
        d_today.innerHTML = dataResult;    
    }
});
}


function get_users(){

$.ajax({
    url: "../func/func_get_total_users.php",
    type: "POST",
    cache: false,
    async : true,
    data : {"tdate" : curr_date},
    success: function(dataResult){
        // console.log("1111",dataResult);
        var a_users = document.getElementById("active_user");
        a_users.innerHTML = dataResult;    
    }
});
}

function get_top_users(){

$.ajax({
    url: "../func/func_get_top_customers.php",
    type: "POST",
    cache: false,
    async : true,
    data : {"tdate" : curr_date},
    success: function(dataResult){
        // console.log(dataResult);
        var a_users = document.getElementById("top_customers");
        a_users.innerHTML = dataResult; 
    }
});
}





update();
  function update(){

    // console.log('updated');

        get_data();
        get_sales();
        get_pending();
        get_delivered();
        get_users();
        get_top_users();
  }


var intervalId = window.setInterval(function(){ //update every 2 seconds
 
update();

}, 2000);

</script>



</body>
</html>