<?php 

$emp_id = $_POST['emp_id_upd'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="../bootstrap-5.2.2/css/bootstrap.min.css"/>
    <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- <script src="../bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> -->

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
.card .card-img-top {
  width: 250px;
  height: 250px;
  border-radius: 50%;
  object-fit: cover;
  margin-top: 29px;
  margin-left: 130px;
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
      <?php
       $page_title = "MANAGEMENT | EMPLOYEE | Restomatic";

       require "admin_sidebar.php";
      ?>
       
          <div class="panel">
            <nav>
              <div class="navbar accNavbar">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <h2><b>Employee Management</b></h2>
                      <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addEmployee"><i class="material-icons" data-toggle="tooltip" title="Add">person_add</i> <span>Add New Employee</span></a>
                      <a href="#" class="btn btn-secondary"><i class="material-icons">file_download</i> <span>Export to Excel</span></a>
                  </div>
              </div>
            </nav>
            <?php
                            $conn = new mysqli('localhost','root','','restomatic_db');

                            if($conn->connect_error){
                              die('Connection failed : ' . $conn->connect_error);
                            }else{

                            $query = "SELECT * FROM `employee`";
                          
                            $result = mysqli_query($conn,$query);

                            while($rows = $result->fetch_assoc())
                                {
                                  
                            ?> 
            <div class="card" style="width: inherit">
              <div class="row g-0">
                <div class="col-md-4">
                <?php echo '<img src = "data:image/jpeg;base64,'.base64_encode($rows['emp_image']) .'" class="card-img-top" alt="...">' ?>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="row" style="margin-left:2px ;" >
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Name</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6><?php echo $rows['emp_name'] ?></h6>
                          </div>
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Status</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6><?php echo $rows['emp_status'] ?></h6>
                          </div>
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Email</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6><?php echo $rows['emp_email'] ?></h6>
                          </div> 
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Address</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6><?php echo $rows['emp_address'] ?></h6>
                          </div>
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Age</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6><?php echo $rows['emp_age'] ?></h6>
                          </div> 
                      </div>
                      <div class="row" style="margin-left:2px ;">
                        <div class="col-md-6 col-sm-3">
                            <h5><b>Contact Number</b></h5>
                        </div>
                        <div class="col-md-6 col-sm-3 text-secondary">
                            <h6><?php echo $rows['emp_contact_num'] ?></h6>
                        </div>
                    </div>
                    <div class="row" style="margin-left:2px ;">
                        <div class="col-md-6 col-sm-3">
                            <h5><b>Position</b></h5>
                        </div>
                        <div class="col-md-6 col-sm-3 text-secondary">
                            <h6><?php echo $rows['emp_position'] ?></h6>
                        </div> 
                    </div>
                  </div>
                  </div>
                  <div class = "card-footer">
                    <!-- <form action = "func_update_employee.php"> -->
                    <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editEmployee"><i class="bi-pencil-square" data-toggle="tooltip" title="Edit" style="color: #2196F3;"></i> <span>Edit Employee</span></a>
                    <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteEmployee"><i class="bi-trash3-fill" data-toggle="tooltip" title="Delete" style="color: #F44336;"></i> <span>Delete Employee</span></a>
                      <!-- <button type = "button" class = "btn btn-secondary" name = 'updateBtn' data-bs-toggle = "modal" data-bs-target = "#editEmployee " id = "update_btn">
                      <i class = "bi-pencil-square" data-toggle = "tooltip" title = "Edit" style = "color: #2196F3;"></i>
                      <span> Edit Employee </span></button> -->
                    <!-- </form>
                    <form action = ""> -->
                      <!-- <button type = "button" class = "btn btn-secondary" name = 'deleteBtn' data-bs-toggle = "modal" data-bs-target = "#deleteEmployee" id = "delete_btn">
                      <i class = "bi-trash3-fill" data-toggle = "tooltip" title = "Delete" style = "color: #2196F3;"></i>
                      <span> Delete Employee </span></button> -->
                    <!-- </form> -->
                    <!-- <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editEmployee"><i class="bi-pencil-square" data-toggle="tooltip" title="Edit" style="color: #2196F3;"></i> <span>Edit Employee</span></a>
                    <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteEmployee"><i class="bi-trash3-fill" data-toggle="tooltip" title="Delete" style="color: #F44336;"></i> <span>Delete Employee</span></a>	 -->
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
    <div class="modal fade " id="addEmployee" tabindex="-1" aria-labelledby="modal-add-emp" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modal-title"><b>ADD NEW EMPLOYEE</b></h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body p-4">
                    <div class="text-center">
                    <form action = "func_insert_employee.php" method="post" >  
                      <div class="row mb-2">
                          <div class="col">
                            <input type="text" class="form-control" id="modal-name" placeholder="Employee Name" name="emp_name" />
                          </div>
                          <div class="col">
                            <!-- <input type="text" class="form-control" id="modal-status" placeholder="Employee Status" name="emp_status" /> -->
                         
                            <!-- <form action="func_insert_employee.php" method="POST"> -->
                              
                              <select name="emp_status_post" id="selected_status" onChange="myFunction()">
                            <?php
                            $conn = new mysqli('localhost','root','','restomatic_db');

                            if($conn->connect_error){
                              die('Connection failed : ' . $conn->connect_error);
                            }else{

                            $query = "SELECT * FROM `status`";
                          
                            $result = mysqli_query($conn,$query);

                            while($rows = mysqli_fetch_assoc($result))
                                {
                                  echo $rows['id'];
                                  echo $rows['description'];
                                    // echo "<option value = $rows['description'] > $rows['description'] </option>";
                                    // <input type="text" value="<?php $rows['status_id']; ?>" name="stats_id" hidden />
                            ?> 
                            
                            <option value = <?php echo  $rows['description']; ?>><?php echo  $rows['description']; ?></option>
                            
                            <?php
                                }
                              }
                            ?>
                                
                                </select>
                            <!-- </form> -->
                         
                          </div>
                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                      <div class="col">
                            <input type="text" class="form-control" id="modal-email" placeholder="Email" name="emp_email" />
                        </div>
                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                      <div class="col">
                            <input type="text" class="form-control" id="modal-address" placeholder="Address" name="emp_address" />
                        </div>
                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="number" class="form-control" id="modal-age" placeholder="Age" name="emp_age" />
                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="tel" class="form-control" id="modal-contact_num" placeholder="Contact Number" name="emp_contact_num" />
                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                      <select name="emp_position_post" id="selected_position" onChange="myFunction()">
                            <?php
                            $conn = new mysqli('localhost','root','','restomatic_db');

                            if($conn->connect_error){
                              die('Connection failed : ' . $conn->connect_error);
                            }else{

                            $query = "SELECT * FROM `position`";
                          
                            $result = mysqli_query($conn,$query);

                            while($rows = mysqli_fetch_assoc($result))
                                {
                                 echo  $rows['description'];
                                    
                            ?> 
                            <option value = <?php echo  $rows['description']; ?>><?php echo  $rows['description']; ?></option>

                            <?php
                                }
                              }
                            ?>
                                
                                </select>
                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input placeholder="Image" type="file" class="file-upload-input" id="modal-image" 
                          name="emp_image" onchange="readURL(this) accept = image/*"/>
                      </div>
                      <!-- </div>
                        </div> -->
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary rounded" name = "add_btn" method="post" title="Add Employee"> Add Employee</button>    
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

              <!-- update -->


              <div class="modal fade " id="editEmployee" tabindex="-1" aria-labelledby="modal-edit-emp" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modal-title"><b>EDIT EMPLOYEE</b></h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body p-4">
                    <div class="text-center">

                    <?php 
                    
                     
                    $conn = new mysqli('localhost','root','','restomatic_db');

                    if($conn->connect_error){
                        die('Connection failed : ' . $conn->connect_error);
                    }else{
                      
                        $query = "SELECT * FROM `employee` WHERE `emp_id` = $emp_id";
                    
                        $result = mysqli_query($conn,$query);
            
                        while($rows = mysqli_fetch_assoc($result)) {
                  
                  ?>

                    <form action = "func_update_employee.php" method="post" >  
                      <div class="row mb-2">
                          <div class="col">
                            <input type="text" value="<?php echo $rows['emp_name']?>" class="form-control" id="modal-name" />
                          </div>
                          <div class="col">
                            <select value="<?php echo $rows['emp_status_post']?>" id="selected-status" onChange="myFunction()">
                            <?php 
                              $conn = new mysqli('localhost','root','','restomatic_db');
                              if($conn->connect_error){
                                  die('Connection failed : ' . $conn->connect_error);
                              }else{
                                
                                  $query = "SELECT * FROM `status`";
                              
                                  $result = mysqli_query($conn,$query);
                      
                                  while($rows = mysqli_fetch_assoc($result)) {
                                    echo "<option value='". $rows['id'] ."' name='id' hidden>" . $rows['id'] ."</option>" ;
                                    echo "<option value= '".  $rows['description'] ."'>" . $rows['description']." </option>" ;
                                    
                            ?>
                                
                            <?php 
                                  }
                                }
                            ?>
                            
                            </div>
                          </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                      <div class="col">
                            <input type="text" value="<?php echo $rows['emp_email']?>" class="form-control" id="modal-email" />
                        </div>
                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                      <div class="col">
                            <input type="text" value="<?php echo $rows['emp_address']?>" class="form-control" id="modal-address" />
                        </div>
                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="number" value="<?php echo $rows['emp_age']?>" class="form-control" id="modal-age" />
                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="tel" value="<?php echo $rows['emp_contact_num']?>" class="form-control" id="modal-contact_num" />
                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                        <select value="<?php echo $rows['emp_position_post']?>" id="selected_position" onChange="myFunction()">
                        <?php 
                              $conn = new mysqli('localhost','root','','restomatic_db');
                              if($conn->connect_error){
                                  die('Connection failed : ' . $conn->connect_error);
                              }else{
                                
                                  $query = "SELECT * FROM `position`";
                              
                                  $result = mysqli_query($conn,$query);
                      
                                  while($rows = mysqli_fetch_assoc($result)) {
                                    echo "<option value='". $rows['id'] ."' name='id' hidden>" . $rows['id'] ."</option>" ;
                                    echo "<option value= '".  $rows['description'] ."'>" . $rows['description']." </option>" ;
                                    
                            ?>
                                
                            <?php 
                                  }
                                }
                            ?>
                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="file" value="<?php echo $rows['emp_image']?>" class="file-upload-input" id="modal-image" 
                          name="emp_image" onchange="readURL(this) accept = image/*"/>
                      </div>
                      </div>
                        </div>
                    <div class="modal-footer">
                      <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
                      <input type="submit" class="btn btn-info" value="Save">   
                    </div>
                    </form>
                    <?php 
                          }
                        }
                      ?>  
                  </div>
                </div>
              </div>
           </div>
         </div>
            

          <!-- delete -->

    <div id="deleteEmployee" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
        <?php
         if(isset($_POST['delete'])) {

            $conn = new mysqli('localhost','root','','restomatic_db');
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
				
            $emp_id = $_POST['emp_id'];
            
            $sql = "DELETE FROM `employee` WHERE `emp_id` = $emp_id" ;
            mysql_select_db('test_db');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not delete data: ' . mysql_error());
            }
            
            echo "Deleted data successfully\n";
            
            mysql_close($conn);
         }else {
            ?>
          <form action="func_del_employee.php" method="post">
            <div class="modal-header">						
              <h4 class="modal-delete-emp">Delete Employee</h4>
              <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
          <?php
         }
      ?>
        </div>
      </div>
    </div>

    <script>
      function myFunction(){
        var result = document.getElementById("selected_status").value;
        console.log(result);
      }
    </script>
</body>
</html>