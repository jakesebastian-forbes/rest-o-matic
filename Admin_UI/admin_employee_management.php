<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css"/>
    <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <title>EMPLOYEE | MANAGEMENT</title>
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
.card-img-top {
  width: 15vw;
  height: 15vw;
  border-radius: 50%;
  object-fit: cover;
  margin-top: 60px;
  margin-left: 105px;
}
.card-footer{
  position: static;
}
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
        <div class="row">
            <nav class="navbar mynavbar" style="width: 100vw; min-width: fit-content; max-height: 86pfix                                  ; background-color: black;">
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
                              <a class="nav-link"  href="#">DASHBOARD</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">ORDERS</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">RESERVATION</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">REPORTS</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="admin_logs.html">LOGS</a></li>
                              </ul>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">MANAGEMENT</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">EMPLOYEE</a></li>
                                <li><a class="dropdown-item" href="admin_menu.html">MENU</a></li>
                              </ul>
                              <li class="nav-item">
                                <a class="nav-link" href="#">ACCOUNTS</a>
                              </li>
                              <li class="nav-item">
                                <button type="button" class="btn btn-danger btn-lg text-black" style="border-radius: 24px;"> LOGOUT </button>
                            </li>
                            </li>
                          </ul>
                        </div>
                      </div>
                  </div>
                </nav>
            </nav>
          </div>
          <div class="panel">
            <nav>
              <div class="navbar accNavbar">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <h2><b>Employee Management</b></h2>
                      <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addNewEmployee"><i class="material-icons" data-toggle="tooltip" title="Add">person_add</i> <span>Add New Employee</span></a>
                      <a href="#" class="btn btn-secondary"><i class="material-icons">file_download</i> <span>Export to Excel</span></a>
                  </div>
              </div>
            </nav>
            <div class="card" style="width: inherit">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="images/yeji.jpg" class="card-img-top" alt="...">
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
                              <h5><b>Status</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6><span class="status text-success">•</span> Active</h6>
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
                    <div class="row" style="margin-left:2px ;">
                        <div class="col-md-6 col-sm-3">
                            <h5><b>Position</b></h5>
                        </div>
                        <div class="col-md-6 col-sm-3 text-secondary">
                            <h6>Manager</h6>
                        </div> 
                    </div>
                  </div>
                  </div>
                  <div class="card-footer">
                    <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editEmployee"><i class="bi-pencil-square" data-toggle="tooltip" title="Edit" style="color: #2196F3;"></i> <span>Edit Employee</span></a>
                    <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteEmployee"><i class="bi-trash3-fill" data-toggle="tooltip" title="Delete" style="color: #F44336;"></i> <span>Delete Employee</span></a>	
                  </div>
                </div>
              </div>
            </div>
            <div class="card" style="width: inherit">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="images/yeji.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="row" style="margin-left:2px ;" >
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Name</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6>Paula Wilson</h6>
                          </div>
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Status</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6><span class="status text-success">•</span> Active</h6>
                          </div>
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Email</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6>paula@gmail.com</h6>
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
                              <h6>38</h6>
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
                    <div class="row" style="margin-left:2px ;">
                        <div class="col-md-6 col-sm-3">
                            <h5><b>Position</b></h5>
                        </div>
                        <div class="col-md-6 col-sm-3 text-secondary">
                            <h6>Cook</h6>
                        </div> 
                    </div>
                  </div>
                  </div>
                  <div class="card-footer">
                    <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editEmployee"><i class="bi-pencil-square" data-toggle="tooltip" title="Edit" style="color: #2196F3;"></i> <span>Edit Employee</span></a>
                    <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteEmployee"><i class="bi-trash3-fill" data-toggle="tooltip" title="Delete" style="color: #F44336;"></i> <span>Delete Employee</span></a>	
                  </div>
                </div>
              </div>
            </div>
            <div class="card" style="width: inherit">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="images/yeji.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="row" style="margin-left:2px ;" >
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Name</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6>Antonio Moreno</h6>
                          </div>
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Status</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6><span class="status text-danger">•</span> Suspended</h6>
                          </div>
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Email</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6>anton@gmail.com</h6>
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
                              <h6>28</h6>
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
                    <div class="row" style="margin-left:2px ;">
                        <div class="col-md-6 col-sm-3">
                            <h5><b>Position</b></h5>
                        </div>
                        <div class="col-md-6 col-sm-3 text-secondary">
                            <h6>Cashier</h6>
                        </div> 
                    </div>
                  </div>
                  </div>
                  <div class="card-footer">
                    <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editEmployee"><i class="bi-pencil-square" data-toggle="tooltip" title="Edit" style="color: #2196F3;"></i> <span>Edit Employee</span></a>
                    <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteEmployee"><i class="bi-trash3-fill" data-toggle="tooltip" title="Delete" style="color: #F44336;"></i> <span>Delete Employee</span></a>	
                  </div>
                </div>
              </div>
            </div>
            <div class="card" style="width: inherit">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="images/yeji.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="row" style="margin-left:2px ;" >
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Name</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6>Mary Saveley</h6>
                          </div>
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Status</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6><span class="status text-success">•</span> Active</h6>
                          </div>
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Email</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6>mary@gmail.com</h6>
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
                              <h6>25</h6>
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
                    <div class="row" style="margin-left:2px ;">
                        <div class="col-md-6 col-sm-3">
                            <h5><b>Position</b></h5>
                        </div>
                        <div class="col-md-6 col-sm-3 text-secondary">
                            <h6>Cashier</h6>
                        </div> 
                    </div>
                  </div>
                  </div>
                  <div class="card-footer">
                    <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editEmployee"><i class="bi-pencil-square" data-toggle="tooltip" title="Edit" style="color: #2196F3;"></i> <span>Edit Employee</span></a>
                    <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteEmployee"><i class="bi-trash3-fill" data-toggle="tooltip" title="Delete" style="color: #F44336;"></i> <span>Delete Employee</span></a>	
                  </div>
                </div>
              </div>
            </div>
            <div class="card" style="width: inherit">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="images/yeji.jpg" class="card-img-top" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="row" style="margin-left:2px ;" >
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Name</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6>Martin Sommer</h6>
                          </div>
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Status</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6><span class="status text-warning">•</span> Inactive</h6>
                          </div>
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Email</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6>martin@gmail.com</h6>
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
                              <h6>30</h6>
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
                    <div class="row" style="margin-left:2px ;">
                        <div class="col-md-6 col-sm-3">
                            <h5><b>Position</b></h5>
                        </div>
                        <div class="col-md-6 col-sm-3 text-secondary">
                            <h6>Cook</h6>
                        </div> 
                    </div>
                  </div>
                  </div>
                  <div class="card-footer">
                    <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editEmployee"><i class="bi-pencil-square" data-toggle="tooltip" title="Edit" style="color: #2196F3;"></i> <span>Edit Employee</span></a>
                    <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteEmployee"><i class="bi-trash3-fill" data-toggle="tooltip" title="Delete" style="color: #F44336;"></i> <span>Delete Employee</span></a>	
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div id="addNewEmployee" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">						
              <h4 class="modal-title">Add New Employee</h4>
              <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">					
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Address</label>
                <input type="address" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Age</label>
                <textarea class="form-control" required></textarea>
              </div>
              <div class="form-group">
                <label>Contact Number</label>
                <input type="tel" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Position</label>
                <input type="text" class="form-control" required>
              </div>					
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
              <input type="submit" class="btn btn-info" value="Save">
            </div>
          </form>
        </div>
      </div>
    </div>
    <div id="editEmployee" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">						
              <h4 class="modal-title">Edit Employee</h4>
              <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">					
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Address</label>
                <input type="address" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Age</label>
                <textarea class="form-control" required></textarea>
              </div>
              <div class="form-group">
                <label>Contact Number</label>
                <input type="tel" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Position</label>
                <input type="text" class="form-control" required>
              </div>					
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
              <input type="submit" class="btn btn-info" value="Save">
            </div>
          </form>
        </div>
      </div>
    </div>
    <div id="deleteEmployee" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">						
              <h4 class="modal-title">Delete Employee</h4>
              <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">					
              <p>Are you sure you want to delete these Record?</p>
              <p class="text-danger"><medium>This action cannot be undone.</medium></p>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
              <input type="submit" class="btn btn-danger" value="Delete">
            </div>
          </form>
        </div>
      </div>
    </div>
</body>
</html>
