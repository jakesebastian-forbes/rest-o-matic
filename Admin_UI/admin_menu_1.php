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

    <title>MENU | MANAGEMENT</title>
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
.card-img-top {
  width: 15vw;
  height: 15vw;
  /* border-radius: 50%; */
  object-fit: cover;
  margin-top: 15px;
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
                                <li><a class="dropdown-item" href="admin_employee_management.html">EMPLOYEE</a></li>
                                <li><a class="dropdown-item" href="#">MENU</a></li>
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
                      <h2><b>Menu Management</b></h2>
                      <a href="#" class="btn btn-secondary"><i class="material-icons">file_download</i> <span>Export to Excel</span></a>
                  </div>
              </div>
            </nav>
            <?php
                            $conn = new mysqli('localhost','root','','restomatic_db');

                            if($conn->connect_error){
                              die('Connection failed : ' . $conn->connect_error);
                            }else{

                            $query = "SELECT * FROM `menu`";
                          
                            $result = mysqli_query($conn,$query);

                            while($rows = mysqli_fetch_assoc($result))
                                {
                                  
                            ?> 
            <div class="card" style="width: inherit">
              <div class="row g-0">
                <div class="col-md-4">
                  <?php echo '<img src = "data:image/jpeg;base64,'.base64_encode($rows['img']) .'" class="card-img-top" alt="...">' ?> 
                </div>
                <div class="col-md-8">
                  <div class="card-body"> 
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="row" style="margin-left:2px ;" >
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Category</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6><?php echo $rows['item_category'] ?></h6>
                          </div>
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Item Name</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6><?php echo $rows['item_name'] ?></h6>
                          </div>
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Description</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6><?php echo $rows['item_desc'] ?></h6>
                          </div> 
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Price</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6><?php echo $rows['item_price'] . '.00'; ?></h6>
                          </div>
                      </div>
                  </div>
                  </div>
                  
                  <div class="card-footer">
                  <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#reg-modal"><i class="fa-sharp fa-solid fa-circle-plus" data-toggle="tooltip" title="Add"></i> <span>Add New Item</span></a>
                    <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editItem"><i class="bi-pencil-square" data-toggle="tooltip" title="Edit" style="color: #2196F3;"></i> <span>Edit Item</span></a>
                    <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteItem"><i class="bi-trash3-fill" data-toggle="tooltip" title="Delete" style="color: #F44336;"></i> <span>Delete Item</span></a>	
                  </div>
                </div>
              </div>
            </div>
            <?php 
                                }
                              }
                            
                      ?>
          </div>
    </div>
    <!-- ADD ITEM MODAL -->
      <div class="modal fade " id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modal-title"><b>ADD ITEM</b></h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body p-4">
                    <div class="text-center">
                    <form method="post" action = "func_insert_item.php" id="add_form">  
                    <div class="row mb-2">
                          <div class="col">
                              <input name="menu_id" value = "" hidden> 
                              <!-- <input type="text" class="form-control" placeholder="Category" name="category" 
                              value="" /> -->
                                <select name="category" id="selected_category" onchange="myFunction()" class="width: 100%; m-1 py-2">
                                  <option value="Classic">Classic</option>
                                  <option value="Whole Mozarella">Whole Mozarella</option>
                                  <option value="Half Mozza Plus Half Sausage">Half Mozza Plus Half Sausage</option>
                                  <option value="Specials">Specials</option>
                                </select>


                          </div>
                              <div class="col">
                              <input type="text" class="form-control" id="modal-lastname" placeholder="Item Name" name="item_name" 
                              value=""/>
                              </div>
                        </div>
                          <div class="row mb-2 my-0 py-0 gx-0">
                            <input type="text" class="form-control" id="modal-price" placeholder="Description"
                              name="short_desc" value=""/>
                          </div>
                          <div class="row mb-2 my-0 py-0 gx-0">
                            <input type="number" class="form-control" id="modal-w_fries" placeholder="with_fries"
                              name="with_fries" value=""/>
                          </div>
                          <div class="row mb-2 my-0 py-0 gx-0">
                            <input type="number" class="form-control" id="modal-desc" placeholder="Price" name="item_price"  
                            value="">
                            <!-- <textarea 
                            ></textarea> -->
                          </div>

                          <div class="row mb-2 my-0 py-0 gx-0">
                                <input placeholder="Image" type="file" class="file-upload-input" id="modal-img" 
                                  name="item_img" onchange="readURL(this) accept = image/*" />
                                
                                  <!-- <?php echo '<img src = "data:image/jpeg;base64,'.base64_encode($rows['img']) .'" class="card-img-top" alt="...">' ?> -->
                  
                            
                          </div>
                         
                            <div class="modal-footer">
                                <button class="btn btn-primary rounded" name = "add_btn" method="post">
                                  ADD Item</button>    
                            </div>   
                    </form>
                  </div>
                </div>
              </div>
            </div>
    
    <!-- UPDATE ITEM MODAL -->


    <div id="editItem" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">						
              <h4 class="modal-title"><b>EDIT MENU</b></h4>
              <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">					
              <div class="form-group">
                <label>Category</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Item Name</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" required>
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

    <!-- DELETE ITEM MODAL -->


    <div id="deleteItem" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">						
              <h4 class="modal-title">Delete Item</h4>
              <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">					
              <p>Are you sure you want to delete these Item?</p>
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

    <script>
      function myFunction() { 
            var result = document.getElementById("selected_category").value; 
            console.log(result);
        } 
    </script>







</body>
</html>
