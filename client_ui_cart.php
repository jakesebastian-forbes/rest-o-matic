<?php
require "func_session.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $title = "Cart | Client | Restomatic";
        require('must_haves.php');
    ?>
    <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script> 
    <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>

    <style>
        
        .cartNavbar h2{
            float: left; color:white;
            padding-top: 5px; 
            margin-left:15px;
            font-size: 24px;
        }

        .cartNavbar{
        background-color: black;
        margin-top: 10px;
        }

        .cartNavbar ul{
            color: white;
            display: flex;
            list-style-type: none;
            padding: 0%;
            padding-top: 1%;
            justify-content: end;
        }
        .cartNavbar li{
            
            text-decoration: none;
            color: white;
            margin: 0% 14px;
            cursor: pointer;
        }

       
        .cartDet{
            background-color: #FFA500;
        }
        
        .cartDet ul{
            display: flex;
            list-style-type: none;
            padding: 0%;
            justify-content: space-between;
            background-color: #FFA500;
        }
        .cartDet li{
            text-decoration: none;
            color: black;
            margin: 0% 14px;
            
        }
        .quantity .input-text.qty {
            width: 35px;
            height: 35px;
            padding: 0 5px;
            text-align: center;
            
        }
        
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        
        input[type=number]{
            -moz-appearance: textfield;
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
        
    </style>
    

<body>
   <div class="container-fluid p-0">
    
<?php
    $title_sidebar = "MY CART";
    require('client_sidebar.php');
?>

  <div class="container-fluid m-0 p-0">
    <div class="panel p-2" style="margin:0px; width:100%;">
        <div class="navbar cartNavbar d-flex flex-row-reverse mt-1" style="border-radius:10px 10px 0px 0px;">
            <!-- <h2><i class="fa-solid fa-cart-shopping"> </i> CART </h2> -->
            <ul>
              <li>
                
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#my_modal_delete"
            id = "delete_btn" style="border: 0;" disabled onclick="delete_order()">
            <i class="fa-solid fa-trash" style="color:white ; font-size: 24px;"></i>
            <!-- DELETE -->
            </button>

                <!-- <button class="btn" > -->
                    <!-- <i class="fa-solid fa-trash" style="color:white ; font-size: 24px;"></i></button> -->
              </li>
              <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#place_orders"
style="width: 250px; background-color:#FFA500; border:0px; margin-right:2%;" onclick="checkout()"
id = "check_out_btn" disabled>
CHECKOUT
</button>

              <!-- <li><button class="btn" style="width: 250px; background-color:#FFA500;">PLACE ORDER</button></li> -->
            </ul> 
        </div>

        <div class="panel-body" style="background-color:#EEEDE7 ;padding-bottom:10px" >  
            <div class="row-sm" style="margin-bottom:10px;">

                <ul class="nav cartDet">
                    <div class="col-sm-6">
                        <li>ITEM</li>
                    </div>
                    <div class="col-sm-2">
                        <li>PRICE</li>
                    </div>
                    <div class="col-sm-2">
                        <li>QUANTITY</li>
                    </div>
                    <div class="col-sm-2">
                        <li>TOTAL PRICE</li>
                    </div>
                </ul>
            </div>

            <div class="row-sm" style="padding-top:10px ;">
            <?php

            $client_id = $_SESSION['client_id'] ;
            if($conn->connect_error){
                die('Connection failed : ' . $conn->connect_error);
            }else{

            $query = "SELECT * FROM `my_cart` WHERE `client_id` = $client_id ORDER BY date_added DESC;";

            $result_orderID = mysqli_query($conn,$query);

            if(mysqli_num_rows($result_orderID) > 0){

            while($rows = mysqli_fetch_assoc($result_orderID))
                {
         
            ?>

            
                <ul class="itemRow" id="<?php echo 'cart_id_'.$rows['cart_id']?>" >
                
                    <div class="row m-0">
                        <div class="col-sm-3" style="align-content:center">
              
                            <input type="checkbox" 
                            class = "my-checkbox"
                            style="width:20px;height:20px; margin-right: 10px;" 
                            id="<?php echo  $rows['menu_id']?>" 
                            name="item1" value="<?php echo $rows['item_name']?>"
                            onclick = "ischecked(this.value,this.id)"
                            >
                         
                         <?php  echo '<img src=" data:image/jpeg;base64,'.base64_encode($rows['image']) .'" 
                         alt="corndog" width="100" height="100">' ?>
                        </div>
                        
                        <div class="col-sm-3 item-name">
                            <h5 style="float: left; margin-top: 20px;" ><?php echo $rows['item_name']?></h5>
                        </div>
                        <div class="col-sm-2">
                           <h5 style="margin-top: 20px;" id = "price_<?php echo  $rows['menu_id']?>">
                           <?php echo $rows['item_price']?></h5>
                        </div>
                        <div class="col-sm-2">
                            
                            <div class="quantity quantity_btn" style="display: flex; margin-top: 20px;">       
                            <button type="button" value="<?php echo $rows['item_name']?>" class="minus" name = <?php echo  $rows['menu_id']?> 
                            onclick = "less(this.name,this.value)">-</button>
                            
                            <input type="number" step="1" min="1" max="" name="quantity" value="<?php echo $rows['qnt']?>"
                                title="Qty" class="input-text qty text" size="40" pattern="" inputmode="" style="width: 40px;"
                            id = "qnty_counter_<?php echo  $rows['menu_id']?>"> 

                            <button type="button" value="<?php echo $rows['item_name']?>" class="plus" 
                            name = <?php echo  $rows['menu_id']?>
                            onclick = "more(this.name,this.value)">+</button>
                            
                                </div>
                            
                        </div>
                        <div class="col-sm-2">
                            <h5 style="margin-top: 20px;" id = "row_total<?php echo  $rows['menu_id']?>">
                            <?php echo $rows['item_price'] * $rows['qnt']?></h5>    
                        </div>
                    </div>
                   
                    <br>
                    
                    
                </ul>

                
                <?php 
                        }
                        } else{
                            echo "<div style = 'padding:2%' class = 'text-center'>YOUR CART IS EMPTY</div>";
                        }
                    }
                            ?>
                
            </div>
            
        </div>
      

    </div>
    
  </div>
  


</div>


<!-- Modal -->
<div name = "modal_checkout">
<div class="modal fade" id="place_orders" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Checkout</h1>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button> -->
      </div>
      <div class="modal-body" id = "modal_list_selected">
        
      </div>
      <div class="modal-footer">
        <h6>note : display username, address, mode of payment, (optional) message</h6>
        <p>also consider transferring this to a new page</p>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="cancel_checkout()">Cancel</button>
        <button type="button" class="btn btn-primary" id = "btn_place_order" onclick="place_order_final()">Place Order</button>
      </div>
    </div>
  </div>
</div>
</div>


<!-- Modal -->
<div name = "modal_delete">
<div class="modal fade" id="my_modal_delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="modal_delete_body">
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="cancel_checkout()">
        Cancel</button>
        <button type="button" class="btn btn-danger" onclick="confirm_delete()" data-bs-dismiss="modal">Confirm</button>
      </div>
    </div>
  </div>
</div>
</div>

<div class = "row overflow-auto"
style = "background-color:#c1bdbd; 
              border:1px solid gray;
              min-width:500px;
              max-width:700px;
              width:100%;
              height:97px;
              position:fixed;
              bottom:0px;
              right:0px;">

<div id = "total_preview">

</div>

<div id = "total_price">

</div>

<!-- <button onclick="if_check()">press me</button> -->
            
</div>


<script>
var active = document.getElementById('nav_cart');
active.setAttribute('class','nav-link my-nav-link my-active',);
var my_total_price = 0;

function ischecked(item_name,id){
//    var id = '#' + id;
// $("#"+id).setAttribute('ischecked','true');
var chk = $("#"+id).is(":checked");
//    console.log('id' + id);
//    if($('#' + id).is(":checked")) 
//    document.getElementById(id).setAttribute('checked','true');
if($('#' + id).is(":checked")) {
   
        // console.log(chk + " :"+ item_name + "name" +"sess" + <?php //echo $_SESSION['client_id']?>);
        // $("#total_preview").append("<h6 class = cart_"+menu_id+">"+menu_id +"asda"+"</h6>");

        $.post("select_items.php",
    {
        item_id: id,
        client_id: <?php echo $_SESSION['client_id']?>
    },
    function(data, status){
        myArr = data.split("--");
        // alert("Data: " + data + "\nStatus: " + status);
        var cart_id = "cart_id_" +id;
        my_total_price =  place_to_card(cart_id);
        if_check();
    });

   }else{
    // console.log("Not checked");
    document.getElementById(id).removeAttribute('checked');
    // $("#"+id).removeAttribute("checked");
    // console.log(chk+ " :"+ item_name);
    
    // $("div").remove("#cart_id_"+id);
    my_total_price = remove_from_card(id,my_total_price);
    
    // $("ul").filter("#cart_id_"+id).css("color", "black");
    if_check();
   }
  

}


function more(id,name){
    // console.log(id);

    // if($('#' + id).is(":checked")){
    //     document.getElementById(id).setAttribute('checked','true');
    //     ischecked(name,id);
    // }else{
        
    // }
    // place_to_card("cart_id_"+id);
    // if_check();
    var qnty = parseInt($("#qnty_counter_"+id).val());
    // console.log("q" + qnty);
    $("#qnty_counter_"+id).val(qnty+1);
    // var elem = document.getElementById(id);
    // elem.setAttribute('checked','');
// console.log($("#qnty_counter_"+id).val(qnty+1));
console.log("id : " + id)

$.post("func_add_cart.php",
    {
        menu_id: id,
        client_id: <?php echo $_SESSION['client_id']?>
    },
    function(data, status){
     
        console.log(data);
        console.log(status);
  
    });

    update_total(id);
    update_card(id);
    if_check();


}

function less(id,name){

    var qnty = parseInt($("#qnty_counter_"+id).val());
    // console.log("q" + qnty);
    if(qnty <= 1){

    }else{
        $("#qnty_counter_"+id).val(qnty-1);

        
$.post("func_less_cart.php",
    {
        menu_id: id,
        client_id: <?php echo $_SESSION['client_id']?>
    },
    function(data, status){
        // myArr = data.split("--");
        console.log(data);
        console.log(status);
      
    });

    }
    // $("#qnty_counter_"+id).val(qnty-1);

    update_total(id);
    update_card(id);
    if_check();
}

function update_total(id){
    var price = parseFloat($('#price_' + id).text());

    var qnt = parseInt($("#qnty_counter_" + id).val());
console.log(id +" :"+ price +" :"+ qnt + ":"+ price*qnt);
$('#row_total'+id).text(price*qnt);
}


function place_to_card(id){

    $("#total_preview").append("<div class = 'row' id ="+id+ ">"+
           "<h6 class = 'col mx-auto m_id' hidden>" + myArr[0]+ "</h6>" +
           "<h6 class = 'col mx-auto m_name'>" + myArr[1]+ "</h6>" +
           "<h6 class = 'col m_price' >" + myArr[2]+ "</h6>" +
           "<h6 class = 'col m_qnt'>" + myArr[3]+ "</h6>" +
           "<h6 class = 'col m_total' id = total_"+id+">" + myArr[4]+ "</h6>" 
        +"</div>");

        my_total_price += parseFloat($("#total_" + id).text());

        $("#total_price").text("Total : " + my_total_price);

        return my_total_price;

}

function remove_from_card(id,my_total_price){
    console.log(parseFloat($("#total_cart_id_" + id).text()));
    my_total_price -= parseFloat($("#total_cart_id_" + id).text());

$("#total_price").text("Total : " + my_total_price);
$("#cart_id_" + id).remove();
return my_total_price;

}

function update_card(id){
        var childs = $("#cart_id_"+id);

        console.log("the childs"+childs.children(".m_name").text());
        console.log($("#qnty_counter_" + id).val());
        console.log($("#row_total" + id).text());
        childs.children(".m_qnt").text($("#qnty_counter_" + id).val() +"x");
        childs.children(".m_total").text($("#row_total" + id).text());
        
}

function if_check(){
    // console.log('if_check');
    
    // var nodeList = document.getElementsByClassName("m_total");
    var nodeList = document.getElementById("total_preview").children;
    var total = 0;
//     console.log("length "+nodeList.length);
// console.log(nodeList);
// console.log("total :" + total);
var i = 0;
    for (i ; i < nodeList.length; i++) {
    // total =+ parseInt(nodeList[i].val());
        // total += parseFloat(nodeList[i].innerHTML);
        // console.log("i:"+i+":"+nodeList[i].innerHTML);
        // console.log(i);
}
// console.log("length "+nodeList.length);
// console.log(nodeList);
// console.log("total :" + total);
// document.getElementById("total_price").innerHTML = "Total : " + total;

if(nodeList.length > 0){
    document.getElementById("check_out_btn").removeAttribute('disabled');
    document.getElementById("delete_btn").removeAttribute('disabled');
    
}else{
    document.getElementById("check_out_btn").setAttribute('disabled','');
    document.getElementById("delete_btn").setAttribute('disabled','');

}


}

function checkout(){

    var final_order = document.getElementById("total_preview").innerHTML;
    console.log(final_order);

    var final_total = document.getElementById("total_price").innerHTML;
    console.log(final_total);
    
    $("#modal_list_selected").append(final_order);
    $("#modal_list_selected").append(final_total);

}

function cancel_checkout(){
    console.log("cancelled");
    $("#modal_list_selected").empty();
    $("#modal_delete_body").empty(); 
}


function delete_order(){
    
    var final_order = document.getElementById("total_preview").innerHTML;
    // console.log(final_order);

    var final_total = document.getElementById("total_price").innerHTML;
    // console.log(final_total);
    
    $("#modal_delete_body").append(final_order);
    $("#modal_delete_body").append(final_total);

}

// sleep time expects milliseconds
function sleep (time) {
  return new Promise((resolve) => setTimeout(resolve, time));
}

function confirm_delete(){
    console.log("confirmed deleting");
   var a = $("#modal_delete_body").children();
 

        for(var i = 0; i < a.length; i++){
           id = a[i].firstChild.innerHTML;
           console.log(id);

           $.post("func_delete_cart.php",
    {
        menu_id: id,
        client_id: <?php echo $_SESSION['client_id']?>
    },
    function(data, status){
        // myArr = data.split("--");
        console.log(data);
        console.log(status);
      
    });

}

//sleep because the page is reloading too fast
    sleep(500).then(() => {

    window.location.reload(true);
});


        }

    
function place_order_final(){
    console.log("place_order_final");
    var order_id;

    $.ajax({
		url: "func_place_order.php",
		type: "POST",
		data: {
			"client_id": <?php echo $_SESSION['client_id']?>
		},
		cache: false,
        async : false,
		success: function(dataResult){

            var status = JSON.parse(dataResult.split(" ")[1]);

			if(status.statusCode==200){

            console.log(dataResult);
            order_id = JSON.parse(dataResult.split(" ")[0]);
						
			}
			else if(status.statusCode==201){
				alert("Error occurred !");
			}
			
		}
	});

    console.log(order_id);

    //putting order details inside the order id
    //we need order_id,menu_id,quantity

    var a = $("#modal_list_selected").children();
    var b = a.children();
    // console.log(b[0]);
    
    var menu_id = [];
    var quantity = [];

    for(i = 0; i < a.length; i++){
        //menu_id
        // console.log(a[i].childNodes[0].innerHTML);
        menu_id.push(a[i].childNodes[0].innerHTML);
        //quantity
        // console.log(a[i].childNodes[3].innerHTML);
        b = a[i].childNodes[3].innerHTML;
        b = b.replace("x","");
        // console.log(b);
        quantity.push(b);

        console.log("inserting order_detail");
        
        $.post("func_insert_order_details.php",
            {
            order_id : order_id,
            menu_id: a[i].childNodes[0].innerHTML,
            qnty: b
            },
            function(data, status){
            // myArr = data.split("--");
            console.log(data);
            console.log(status);

            });

}

console.log(menu_id);
console.log(quantity);

//delete the content
console.log("Deleting content");

var a = $("#modal_list_selected").children();
 

        for(var i = 0; i < a.length; i++){
           id = a[i].firstChild.innerHTML;
           console.log(id);

           $.post("func_delete_cart.php",
    {
        menu_id: id,
        client_id: <?php echo $_SESSION['client_id']?>
    },
    function(data, status){
        // myArr = data.split("--");
        console.log(data);
        console.log(status);
      
    });


}
//sleep because the page is reloading too fast
sleep(500).then(() => {

window.location.reload(true);
});


}


</script>
</body>
</html>