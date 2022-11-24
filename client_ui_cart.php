<?php
session_start();
// print_r($_SESSION);
include 'db_connection.php';

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
    <script>
    //     function wcqib_refresh_quantity_increments() {
    // jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
    //     var c = jQuery(b);
    //     c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
    //     })
    //     }
    //     String.prototype.getDecimals || (String.prototype.getDecimals = function() {
    //         var a = this,
    //             b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
    //         return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
    //     }), jQuery(document).ready(function() {
    //         wcqib_refresh_quantity_increments()
    //     }), jQuery(document).on("updated_wc_div", function() {
    //         wcqib_refresh_quantity_increments()
    //     }), jQuery(document).on("click", ".plus, .minus", function() {
    //         var a = jQuery(this).closest(".quantity").find(".qty"),
    //             b = parseFloat(a.val()),
    //             c = parseFloat(a.attr("max")),
    //             d = parseFloat(a.attr("min")),
    //             e = a.attr("step");
    //         b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
    //     });
    </script>



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
    <div class="panel" style="margin:0px; width:100%">
        <div class="navbar cartNavbar d-flex flex-row-reverse mt-1">
            <!-- <h2><i class="fa-solid fa-cart-shopping"> </i> CART </h2> -->
            <ul>
              <li>
                <button class="btn"><i class="fa-solid fa-trash" style="color:white ; font-size: 24px;"></i></button>
              </li>
              <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#place_orders"
style="width: 250px; background-color:#FFA500; border:0px;">
PLACE ORDER
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
                           <h5 style="margin-top: 20px;" ><?php echo $rows['item_price']?></h5>
                        </div>
                        <div class="col-sm-2">
                            
                            <div class="quantity quantity_btn" style="display: flex; margin-top: 20px;">       
                            <input type="button" value="-" class="minus" name = <?php echo  $rows['menu_id']?> 
                            onclick = "less(this.name)">
                            
                            <input type="number" step="1" min="1" max="" name="quantity" value="<?php echo $rows['qnt']?>"
                                 title="Qty" class="input-text qty text" size="40" pattern="" inputmode="" style="width: 40px;"
                                id = "qnty_counter_<?php echo  $rows['menu_id']?>"
                                 >       
                                 <input type="button" value="+" class="plus" 
                                 name = <?php echo  $rows['menu_id']?>
                                 onclick = "more(this.name)">
                            
                                </div>
                            
                        </div>
                        <div class="col-sm-2">
                            <h5 style="margin-top: 20px;"><?php echo $rows['item_price'] * $rows['qnt']?></h5>    
                        </div>
                    </div>
                   
                    <br>
                    
                    
                </ul>
                <?php 
                        }
                        } else{
                            echo "YOUR CART IS EMPTY";
                        }
                    }
                            ?>
                
            </div>
            
        </div>
      

    </div>
    
  </div>
  


</div>


<!-- Modal -->
<div class="modal fade" id="place_orders" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class = "row overflow-auto"
style = "background-color:#c1bdbd; 
              border:1px solid gray;
              min-width:320px;
              max-width:700px;
              width:700px;
              height:97px;
              position:fixed;
              bottom:0px;
              right:0px;">

<div id = "total_preview">

</div>

<div id = "total_price">

</div>

</div>


<script>
var active = document.getElementById('nav_cart');
active.setAttribute('class','nav-link my-nav-link my-active',);
var my_total_price = 0;

function ischecked(item_name,id){
//    var id = '#' + id;
var chk = $("#"+id).is(":checked");

   if($('#' + id).is(":checked")) {

        console.log(chk + " :"+ item_name + "name" +"sess" + <?php echo $_SESSION['client_id']?>);

        $("ul").filter("#cart_id_"+id).css("color", "yellow");

        // $("#total_preview").append("<h6 class = cart_"+menu_id+">"+menu_id +"asda"+"</h6>");

        $.post("select_items.php",
    {
        item_name: item_name,
        client_id: <?php echo $_SESSION['client_id']?>
    },
    function(data, status){
        myArr = data.split("--");
        // alert("Data: " + data + "\nStatus: " + status);
        var cart_id = "cart_id_" +id;
        $("#total_preview").append("<div class = 'row' id ="+cart_id+ ">"+
           "<h6 class = 'col mx-auto'>" + myArr[0]+ "</h6>" +
           "<h6 class = 'col'>" + myArr[1]+ "</h6>" +
           "<h6 class = 'col'>" + myArr[2]+ "</h6>" +
           "<h6 class = 'col' id = total_"+id+">" + myArr[3]+ "</h6>" 
        +"</div>");

        // console.log($('h6').html);
        // console.log(typeof(data));
        my_total_price += parseFloat($("#total_" + id).text());

        $("#total_price").text(my_total_price);
        // console.log(typeof(myArr));
        // console.log(myArr[2]);

    });

   }else{
    // console.log("Not checked");
    console.log(chk+ " :"+ item_name);
    
    // $("div").remove("#cart_id_"+id);
    
    my_total_price -= parseFloat($("#total_" + id).text());

$("#total_price").text(my_total_price);
    $("#cart_id_" + id).remove();
    $("ul").filter("#cart_id_"+id).css("color", "black");

   }

}


function more(id){
    // console.log(id);
    var qnty = parseInt($("#qnty_counter_"+id).val());
    // console.log("q" + qnty);
    $("#qnty_counter_"+id).val(qnty+1);
// console.log($("#qnty_counter_"+id).val(qnty+1));

}

function less(id){

    var qnty = parseInt($("#qnty_counter_"+id).val());
    // console.log("q" + qnty);
    if(qnty <= 0){

    }else{
        $("#qnty_counter_"+id).val(qnty-1);
    }
    // $("#qnty_counter_"+id).val(qnty-1);
}

$(document).ready(function(){
 
});

</script>
</body>
</html>