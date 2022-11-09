<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css"/>
    <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script> 
    <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        function wcqib_refresh_quantity_increments() {
    jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
        var c = jQuery(b);
        c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
        })
        }
        String.prototype.getDecimals || (String.prototype.getDecimals = function() {
            var a = this,
                b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
            return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
        }), jQuery(document).ready(function() {
            wcqib_refresh_quantity_increments()
        }), jQuery(document).on("updated_wc_div", function() {
            wcqib_refresh_quantity_increments()
        }), jQuery(document).on("click", ".plus, .minus", function() {
            var a = jQuery(this).closest(".quantity").find(".qty"),
                b = parseFloat(a.val()),
                c = parseFloat(a.attr("max")),
                d = parseFloat(a.attr("min")),
                e = a.attr("step");
            b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
        });
    </script>


    <title>CART2</title>
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
   <div class="container-fluid">
    <div class="row">
        <nav class="navbar mynavbar" style="width: 100vw; min-width: fit-content; max-height: 86px; background-color: black;">
            <div class="d-flex justify-content-start">
              <img src="images/icon/web_icon.png" class="px-3" alt="web_icon.png" style="max-height: 70px">
              <h1 class="myheading1" style="padding-top: 7px; color: white;">REST-O-MATIC</h1>
             
           <!-- <div class="dropdown">
            <button class="dropbtn" style="background-color: black;"><i class="fa-solid fa-bars" style="color:white ; font-size:32px; float: right;"></i>
              <div class="dropdown-content">
                <ul>
                  <li> <a href="#">ACCOUNT</a></li>
                  <li><a href="#">ORDERS</a></li>
                  <li><a href="#">RESERVATION</a></li>
                  <li><a href="#">REVIEWS</a></li>
                  <li><a href="#">CART</a></li>
                  <li> <a href="#">GOTO</a></li>
                </ul> 
              </div>
            </button>
           </div> -->

          </div>   
        </nav>
  </div>
  <div class="container">
    <div class="panel" style="margin-bottom: 50px;">
        <div class="navbar cartNavbar">
            <h2><i class="fa-solid fa-cart-shopping"> </i> CART </h2>
            <ul>
              <li>
                <button class="btn"><i class="fa-solid fa-trash" style="color:white ; font-size: 24px;"></i></button>
              </li>
              <li><button class="btn" style="width: 250px; background-color:#FFA500;">PLACE ORDER</button></li>
            </ul> 
        </div>

        <div class="panel-body" style="background-color:#EEEDE7 ;padding-bottom:10px" >
            <!-- <div class="row" style="background-color:#FFA500; align-content: center;">
                
                    <div class="col-6">
                        <p>ITEM</p>
                    </div>
                    <div class="col-2">
                        <p>PRICE</p>
                    </div>
                    <div class="col-2">
                        <p>QUANTITY</p>
                    </div>
                    <div class="col-2">
                        <p>TOTAL PRICE</p>
                    </div>
            
                    
                
                
            </div> -->

            <div class="row-sm" style="margin-bottom:10px ;">
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
                <ul class="itemRow">
                    <div class="row">
                        <div class="col-sm-3" style="align-content:center">
                            <input type="checkbox" id="item1" name="item1" value="item1" style="width:20px ; height:20px; margin-right: 10px;">
                            <img src="/images/2dogs.jpg" alt="corndog" width="100" height="100"> 
                           
                        </div>
                        <div class="col-sm-3">
                            <h5 style="float: left; margin-top: 20px;">CORNDOG</h5>
                        </div>
                        <div class="col-sm-2">
                           <h5 style="margin-top: 20px;"> 100</h5>
                        </div>
                        <div class="col-sm-2">
                            <div class="quantity quantity_btn" style="display: flex; margin-top: 20px;">
                                
                                <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="40" pattern="" inputmode="" style="width: 40px; ">
                                
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <h5 style="margin-top: 20px;">300</h5>
                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3" style="align-content:center">
                            <input type="checkbox" id="item1" name="item1" value="item1" style="width:20px ; height:20px; margin-right: 10px;">
                            <img src="/images/2dogs.jpg" alt="corndog" width="100" height="100">
                           
                        </div>
                        <div class="col-sm-3">
                            <h5 style="float: left; margin-top: 20px;">CORNDOG</h5>
                        </div>
                        <div class="col-sm-2">
                           <h5 style="margin-top: 20px;"> 100</h5>
                        </div>
                        <div class="col-sm-2">
                            <div class="quantity quantity_btn" style="display: flex; margin-top: 20px;">
                                
                                <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="40"  style="width: 40px; ">
                                
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <h5 style="margin-top: 20px;">300</h5>
                            
                        </div>
                    </div>
                   
                </ul>
            </div>
        </div>

    </div>
    
  </div>
  


</div>
<footer>
    <div class="footer container-fluid" style="background-color:black ;margin-top: 20px; color: white; padding-bottom: 10px ; ">
        <div class="row" style="padding-top:5% ;">
            <div class="col-6" >
                <div class="row">
                    <h2>ABOUT US</h2>
                </div>
                <div class="row">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, atque? <br> Libero odit illum dolor odio cumque at harum eius debitis aliquam aliquid. <br> Odit porro veritatis molestias quo libero labore dolore?</p>
                </div>
                
            </div>
            <div class="col-2">
                <div class="row">
                    <center>
                        <h4>FOLLOW US</h4>
                    </center>
                    
                </div>
                <div class="row"  >
                    <div class="col">
                        <center>
                            <div class="socialmedia" >
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </center>
                       
                    </div> 
                </div>
            </div>
            
            <div class="col-4">
                <center>
                    <h5>CALL US</h5>
                    <p>09123456789</p>
                </center>
            </div>
            
            
        </div>
        <div class="footerline"></div>
        <div class="row">
            <div class="col-8">
                <small>@2021 cornpups kenan's korean Corndog, Nasugbu Batangas, All Rights Reserved</small>
            </div>

            <div class="col-2">
                <small style="float:right;">PRIVACY POLICY</small>
                
            </div>
            <div class="col-2">
               
                <small style="float: left">TERMS OF USE</small>
            </div>
           
           
            
        </div>
    </div>
    
</footer>
</body>
</html>