<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css"/>
    <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- <script src="bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> -->

    <title>ACCOUNT</title>
</head>

<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 13px;
}
.accNavbar{
    margin-top: 10px;
    padding: 16px 30px;
    background-color: #e49329;
    border-radius: 3px 3px 0 0;
}
.accNavbar h2{
    float: left; color:white;
    padding-top: 5px; 
    margin-left:10px;
    margin: 5px 0 0;
    font-size: 24px;
}
.accNavbar ul{
    color: white;
    display: flex;
    list-style-type: none;
    padding: 0%;
    padding-top: 1%;
    justify-content: end;
}
.accNavbar li{
    text-decoration: none;
    color: white;
    margin: 0% 14px;
    cursor: pointer;
}
.accNavbar .btn {
    color: #566787;
    float: right;
    font-size: 13px;
    background: #fff;
    border: none;
    min-width: 50px;
    border-radius: 2px;
    border: none;
    outline: none !important;
    margin-left: 10px;
}
.accNavbar .btn:hover, .accNavbar .btn:focus {
    color: #566787;
    background: #f2f2f2;
}
.accNavbar .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
}
.accNavbar .btn span {
    float: left;
    margin-top: 2px;
}
.panel-body h7{
  color: #212529;
}
.status {
    font-size: 30px;
    margin: 2px 2px 0 0;
    display: inline-block;
    vertical-align: middle;
    line-height: 10px;
}
.text-success {
    color: #10c469;
}
.text-info {
    color: #62c9e8;
}
.text-warning {
    color: #FFC107;
}
.text-danger {
    color: #ff5b5b;
}
.card .card-img-top {
  width: 15vw;
  height: 15vw;
  border-radius: 50%;
  object-fit: cover;
  /* margin-top: 30px;
  margin-left: 105px; */
}
/* .card-footer{
  position: static;
} */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	
</style>

<body>
    <div class="container-fluid">
    <?php
       $page_title = "MANAGEMENT | ACCOUNT | Restomatic";

       require "admin_sidebar.php";
      ?>
          <div class="panel">
            <nav>
              <div class="navbar accNavbar">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <h2 style="margin-left:15px;"><b>ADMIN</b></h2>
                      <h2 style="float: right; margin-right: 15px;"><b>ACCOUNT</b></h2>
                  </div>
              </div>
            </nav>
            <div class="card" style="width: inherit;">
              <div class="row g-0">
                <div class="col-md-4">
                  <center>
                  <img src="images/yeji.jpg" class="card-img-top" alt="..."></center>
                  <a href="#" style="margin-top: 5px; margin-bottom: 5px; margin-left: 140px;" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editAccount"><i class="bi-pencil-square" data-toggle="tooltip" title="Edit" style="color: #2196F3;"></i> <span>Edit Account</span></a>
                
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="row" style="margin-left:2px ;" >
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Name</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6>Michael Holz</h6>
                          </div>
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Email</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6>mich@gmail.com</h6>
                          </div> 
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Address</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6>jan lang sa tabi tabi</h6>
                          </div>
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Age</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6>40</h6>
                          </div> 
                      </div>
                      <div class="row" style="margin-left:2px ;">
                        <div class="col-md-6 col-sm-3">
                            <h5><b>Contact Number</b></h5>
                        </div>
                        <div class="col-md-6 col-sm-3 text-secondary">
                            <h6>(+63) 912 3456 789</h6>
                        </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div id="editAccount" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">						
              <h5 class="modal-title">Edit Account</h5>
              <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">					
              <div class="text-center">
                <form method="post">
                  <div class="row mb-2">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="col">
                      <input type="email" class="form-control" placeholder="Email" required>
                    </div>
                  </div>
                  <div class="row mb-2 my-0 py-0 gx-0">
                    <input type="address" class="form-control" placeholder="Address" required>
                  </div>
                  <div class="row mb-2 my-0 py-0 gx-0">
                    <textarea class="form-control" placeholder="Age" required></textarea>
                  </div>
                  <div class="row mb-2 my-0 py-0 gx-0">
                    <input type="tel" class="form-control" placeholder="Contact Number" required>
                  </div>
                  <div class="row mb-2 my-0 py-0 gx-0">
                    <input placeholder="Image" type="file" class="file-upload-input" id="modal-img" 
                    name="item_img" onchange="readURL(this) accept = image/*"/>
                  </div>
                </form>			
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
              <input type="submit" class="btn btn-info" value="Save">
            </div>
          </form>
        </div>
      </div>
    </div>
</body>
</html>
