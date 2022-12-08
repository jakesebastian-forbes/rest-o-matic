<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
    <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script> 

    <?php
    $title = "Review | Client | Restomatic";
      require('../func/func_must_haves.php');
    ?>
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

    <div class="container-fluid p-0">
        <?php
        $title_sidebar = "REVIEW";
          require('client_sidebar.php');
        ?>    


        <div class="panel">
            <div class="navbar revNavbar">
                <h2><i class="fa-solid fa-star"></i> REVIEWS</h2>
                <li class="nav-item my-auto myheading1" role="presentation">
                  <button type="button" class="btn btn-warning btn-lg text-white" style="border-radius: 24px;" data-bs-toggle="modal" data-bs-target="#myModal" > Add Review </button>
                </li>
            </div>
            <div class="panel-body" style="background-color: #EEEDE7;">
                <div class="row m-0 p-0">
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
              <?php
                require('../func/func_footer.php')
              ?>
          </footer>
        </div>
      </div>
    </div>
    
<Script>


var active = document.getElementById('nav_review');
active.setAttribute('class','nav-link my-nav-link my-active',);


</Script>

</body>
</html>