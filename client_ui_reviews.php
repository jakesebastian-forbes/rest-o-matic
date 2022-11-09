<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css"/>
    <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script> 

    <title>Reviews</title>
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
            list-style: none;
            
            }

            .dropdown:hover .dropdown-content {
            display: block;
            }

            .revNavbar{
            background-color: black;
            margin-top: 10px;
            }

            .revNavbar h2{
                float: left; color:white;
                padding-top: 5px; 
                margin-left:10px;
                font-size: 24px;
            }
            .checked{
                color: orange;
            }

            .socialmedia{   
            display: flex;
            align-content: center;
           justify-content: center;
        }
        .socialmedia i{
            color: white;
            font-size: 20px;
            margin: 0px 8px 0px 8px;
            
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
                 
                <div class="dropdown">
                    <button class="dropbtn" style="background-color: black;"><i class="fa-solid fa-bars" style="color:white ; font-size:32px;"></i>
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
                </div>
              </div>   
            </nav>
      </div>

      <div class="container">
        <div class="panel" style="margin-bottom: 50px;">
            <div class="navbar revNavbar">
                <h2><i class="fa-solid fa-star" style="color: orange;"></i> REVIEWS</h2>
            </div>

            <div class="panel-body" style="background-color: #EEEDE7;">
                <div class="row">
                    <div class="col-6" style="padding: 2%;">
                        <div class="row">
                            <div class="col">
                                <div class="card" style="padding: 2%;">
                                    <h5><i class="fa-solid fa-user" style="font-size:20px ;"></i> USER1</h5>

                                    <div class="card-body">
                                        <div class="row">
                                            <center>
                                                <textarea name="comment" id="comment" cols="50" rows="5" placeholder="Write your comment here.">COMMENTXXXXX</textarea>
                                            </center>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <center>
                                                    <h5>RATING</h5>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </center>
                                                
                                            </div>
                                        </div>
                                        
                                         </div>
                                         

                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <div class="card" style="padding: 2%;">
                                    <h5><i class="fa-solid fa-user" style="font-size:20px ;"></i> USER1</h5>

                                    <div class="card-body">
                                        <div class="row">
                                            <center>
                                                <textarea name="comment" id="comment" cols="50" rows="5" placeholder="Write your comment here."> COMMENTXXXXX</textarea>
                                            </center>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <center>
                                                    <h5>RATING</h5>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </center>
                                                
                                            </div>
                                        </div>
                                        
                                         </div>
                                         

                                </div>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-6" style="padding: 2%;">
                            <div class="form-group">
                                <label for="title"><h4>Title</h4></label>
                                <input type="Title" class="form-control" id="title" placeholder="Enter title here..." name="title"></input>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="rate"><h4>Rate</h4></label>
                                <div class="row">
                                    <div class="col-sm">
                                        
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="review"><h4>Review</h4></label><br>
                                <center>
                                    <textarea name="comment" id="comment" cols="60" rows="10" placeholder="Write your comment here."></textarea>
                                </center>
                            </div>
                            <div class="btns" style="float:right; padding: 10px ;">
                                <button type="button" class="btn btn-warning" style="border-radius: 24px;">Cancel</button>
                                <button type="button" class="btn btn-warning" style="border-radius: 24px;">Submit</button>
                            </div>
                           
                        </div>
                    </div>
                    </div>
                </div>
            </div>

        </div>
      </div>

    </div>
    <footer>
        <div class="footer container-fluid" style="background-color:black ;margin-top: 10px; color: white;">
            <div class="row" style="padding-top:2% ;">
                <div class="col-lg-6 col-md-6 col-sm-6" >
                    <div class="row">
                        <h2>ABOUT US</h2>
                    </div>
                    <div class="row">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, atque?
                        <br> Libero odit illum dolor odio cumque at harum eius debitis aliquam aliquid.
                        <br> Odit porro veritatis molestias quo libero labore dolore?</p>
                    </div>
                    
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6" style="display: flex; justify-content: space-evenly">
                    <div class="col-lg-3">
                        <div class="row">
                            <center>
                                <h4>FOLLOW US</h4>
                            </center>
                            
                        </div>
                        <div class="row"  >
                            <div class="col">
                                <center>
                                    <div class="socialmedia"  >
                                        <a href="#"><i class="fa-brands fa-facebook "></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    </div>
                                </center>
                               
                            </div> 
                        </div>
                    </div>
                    
                    <div class="col-lg-3">
                        <center>
                            <h5>CALL US</h5>
                            <p>09123456789</p>
                        </center>
                    </div>
                </div>
             
                
                
            </div>
            <div class="footerline"></div>
            <!-- <hr> -->
            <div class="row">
                <div class="col-lg-6">
                    <small>@2021 cornpups kenan's korean Corndog, Nasugbu Batangas, All Rights Reserved</small>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6" style="display: flex; justify-content:space-evenly;">
                 
                    <div class="col-4" >
                        <a href=""><small style="float:right; color: white;" >PRIVACY POLICY</small></a> 
                         
                     </div>
                     
                     <div class="col-4" >
                        
                        <a href=""><small style="float:left; color: white;">TERMS OF USE</small></a> 
                     </div>
                </div>
               
               
               
                
            </div>
        </div>
        
    </footer>
    
</body>
</html>