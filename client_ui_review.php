<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css"/>
    <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script> 
    <script src="bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script> 

    <title>Review | Client</title>
</head>

<style>
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

.footer{
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: center;
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

.rate{
  border-bottom-right-radius: 12px;
  border-bottom-left-radius: 12px;
}

.rating {
  display: flex;
  flex-direction: row-reverse;
  justify-content: center
}

.rating>input {
  display: none
}

.rating>label {
  position: relative;
  width: 1em;
  font-size: 30px;
  font-weight: 300;
  color: #FFD600;
  cursor: pointer
}

.rating>label::before {
  content: "\2605";
  position: absolute;
  opacity: 0
}

.rating>label:hover:before,
.rating>label:hover~label:before {
  opacity: 1 !important
}

.rating>input:checked~label:before {
  opacity: 1
}

.rating:hover>input:checked~label:before {
  opacity: 0.4
}

</style>

<body>

    <div class="container-fluid">
        <div class="row">
            <nav class="navbar mynavbar" style="width: 100vw; min-width: fit-content; max-height: 86px; background-color: black;">
                <div class="d-flex justify-content-start">
                  <img src="images/icon/web_icon.png" class="px-3" alt="web_icon.png" style="max-height: 70px">
                  <h1 class="myheading1" style="padding-top: 7px; color: white;">REST-O-MATIC</h1>
                </div>
                  <nav class="navbar bg-dark">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#"></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">USERNAME</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="#">ACCOUNT</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">ORDERS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">RESERVATION</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">REVIEWS</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">CART</a>
                              </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                GO TO
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">CATEGORY 1</a></li>
                                <li><a class="dropdown-item" href="#">CATEGORY 2</a></li>
                              </ul>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="btn btn-danger btn-lg text-black" style="border-radius: 24px;"> LOGOUT </button>
                            </li>
                          </ul>
                        </div>
                    </div>
                    </div>
                </nav>   
            </nav>
      </div>
        <div class="panel">
            <div class="navbar revNavbar">
                <h2><i class="fa-solid fa-star"></i> REVIEWS</h2>
                <li class="nav-item my-auto myheading1" role="presentation">
                  <button type="button" class="btn btn-warning btn-lg text-white" style="border-radius: 24px;" data-bs-toggle="modal" data-bs-target="#myModal" > Add Review </button>
                </li>
            </div>
            <div class="panel-body" style="background-color: #EEEDE7;">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="padding: 2%;">
                        <div class="row">
                            <div class="col">
                                <div class="card" style="padding: 2%;">
                                    <h5><i class="fa-solid fa-user" style="font-size:20px ;"></i> USER1</h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <center>
                                                <textarea name="comment" id="comment" cols="50" rows="5" placeholder="Comment here." disabled style="width: inherit;"></textarea>
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
                                    <h5><i class="fa-solid fa-user" style="font-size:20px ;"></i> USER2</h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <center>
                                                <textarea name="comment" id="comment" cols="50" rows="5" placeholder="Comment here." disabled style="width: inherit;"></textarea>
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
                    </div>
                    </div>
                    <div class="modal" id="myModal">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="col" style="padding: 2%;">
                            <div class="form-group">
                                <label for="title"><h4>Title</h4></label>
                                <input type="Title" class="form-control" id="title" placeholder="Enter title here..." name="title"></input>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="rate"><h4>Rate</h4></label>
                                <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="review"><h4>Review</h4></label><br>
                                <center>
                                    <textarea name="comment" id="comment" cols="60" rows="10" placeholder="Write your comment here..."></textarea>
                                </center>
                            </div>
                            <div class="btns" style="float:right; padding: 10px ;">
                                <button type="button" class="btn btn-warning" style="border-radius: 24px;" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-warning" style="border-radius: 24px;">Submit</button>
                            </div>
                        </div>
                      </div>
                    </div>
                    
                </div>
            <!-- </div> -->
            <footer>
              <div class="footer container-fluid" style="background-color:black ;margin-top: 20px; color: white;">
                <div class="row" style="padding-top:1%;">
                    <div class="col-lg-6 col-md-6 col-sm-6" >
                        <div class="row">
                            <h2>ABOUT US</h2>
                        </div>
                        <div class="row">
                            <p>HOT DOG DIGIDIDOG HOT DOG DIGIDIDOG<br>HOT DOG DIGIDIDOG HOT DOG DIGIDIDOG<br>HOT DOG DIGIDIDOG HOT DOG DIGIDIDOG<br>HOT DOG DIGIDIDOG HOT DOG DIGIDIDOG</p>
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
                                    <div class="socialmedia" >
                                        <a href="https://www.facebook.com/kcorndognasugbu/"><i class="fa-brands fa-facebook"></i></a>
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
                            <p>(+63) 916 987 4623</p>
                        </center>
                    </div>
                </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <small>@2021 cornpups kenan's korean Corndog, Nasugbu Batangas, All Rights Reserved</small>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6" style="display: flex; justify-content:space-evenly;">
                    <div class="col-4">
                        <small style="float:right;">PRIVACY POLICY</small>
                    </div>
                    <div class="col-4">
                        <small style="float: left">TERMS OF USE</small>
                    </div>    
                </div>
            </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    
</body>
</html>