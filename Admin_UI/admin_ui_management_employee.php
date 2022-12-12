<?php 

// $emp_id = $_POST['emp_id_upd'];

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
    <link rel="stylesheet" href="../css/general.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- <script src="../bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> -->

    <title>MANAGEMENT | EMPLOYEE</title>
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
    font-size: small;
    font-weight: bold;
    color: #FFCC01;
    background-color: #FFFCEE;
    border-radius: 10px;
    color: #566787;
    float: right;
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
.mybtn{
  font-size: large;
  font-weight: bold;
  color: #FFCC01;
  width: 190px;
  background-color: #FFFCEE;
  border-radius: 30px;
  padding: 10px;
  margin: 10px 10px;
  margin-right: 2%;
}
.mybtn:hover{
  color: red;
  margin-top: 10px;
  background-color: #fffae5;
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
       $page_title = "MANAGEMENT | EMPLOYEE ";

       require "admin_sidebar.php";
      ?>
       
       <?php
                $full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                // echo $full_url;
                if(strpos($full_url,"update=success") == true ){
                   echo "<p class = 'success'>
                   <span> <img src='../images/icon/error.png' alt='error_icon' class = 'icon_img'></span>
                   Successfully Updated.</p>";

                }else if(strpos($full_url,"update=error") == true ){
                  echo "<p class = 'error'>
                  <span> <img src='images/icon/error.png' alt='error_icon' class = 'icon_img'></span>
                  Failed to update Record.</p>";
                }elseif(strpos($full_url,"added=success") == true ){
                  echo "<p class = 'success'>
                   <span> <img src='../images/icon/error.png' alt='error_icon' class = 'icon_img'></span>
                   Successfully Added Employee.</p>";
                }elseif(strpos($full_url,"delete=success") == true ){
                  echo "<p class = 'success'>
                   <span> <img src='../images/icon/error.png' alt='error_icon' class = 'icon_img'></span>
                   Successfully Deleted Record.</p>";
                }
              ?>
          <div class="panel">
            <nav>
              <div class="navbar accNavbar">
                    <div class="col-lg-12 col-md-12 col-sm-12 mx-2">
                      <h2><b>Employee Management</b></h2>
                      <a href="#" class="btn btn-secondary" style="margin-right: 15px" data-bs-toggle="modal" data-bs-target="#addEmployee"><i class="material-icons" data-toggle="tooltip" title="Add">person_add</i> <span>Add New Employee</span></a>
                      <a href="#" class="btn btn-secondary" hidden><i class="material-icons">file_download</i> <span>Export to Excel</span></a>
                  </div>
              </div>
            </nav>
            <?php
                            $conn = new mysqli('localhost','root','','restomatic_db');

                            if($conn->connect_error){
                              die('Connection failed : ' . $conn->connect_error);
                            }else{

                            $query = "SELECT * FROM `staff_account`";
                          
                            $result = mysqli_query($conn,$query);

                            while($rows = $result->fetch_assoc())
                                {
                                  
                            ?> 
            <div class="card" style="width: inherit">
              <div class="row g-0">
                <div class="col-md-4">
                <?php echo '<img src = "data:image/jpeg;base64,'.base64_encode($rows['img']) .'" class="card-img-top" alt="..." id="image_'.$rows['staff_id'].'">' ?>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="row" style="margin-left:2px ;" >
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Firstname</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6 id="id_<?php echo $rows['staff_id']?>" hidden><?php echo $rows['staff_id'] ?></h6>
                              <h6 id="fname_<?php echo $rows['staff_id']?>"><?php echo $rows['firstname'] ?></h6>
                          </div>
                      </div>
                      <div class="row" style="margin-left:2px ;" >
                          <div class="col-md-6 col-sm-3">
                              <h5 ><b>Lastname</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6 id="lname_<?php echo $rows['staff_id']?>"><?php echo $rows['lastname'] ?></h6>
                          </div>
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Status</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6 id="status_<?php echo $rows['staff_id']?>"><?php echo $rows['status'] ?></h6>
                          </div>
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Email</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6 id="email_<?php echo $rows['staff_id']?>"><?php echo $rows['email'] ?></h6>
                          </div> 
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Username</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6 id="username_<?php echo $rows['staff_id']?>"><?php echo $rows['username'] ?></h6>
                          </div>
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Contact Number</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6 id="contact_<?php echo $rows['staff_id']?>"><?php echo $rows['contact_number'] ?></h6>
                          </div> 
                      </div>
                      <div class="row" style="margin-left:2px ;">
                        <div class="col-md-6 col-sm-3">
                            <h5><b>privilage</b></h5>
                        </div>
                        <div class="col-md-6 col-sm-3 text-secondary">
                            <h6 id="priv_<?php echo $rows['staff_id']?>"><?php echo $rows['privilage'] ?></h6>
                        </div>
                    </div>
                  </div>
                  </div>
                  <div class = "row mb-2">

                        <div style= "display: inline; width: fit-content;">
                        <form action="" method="get">
                          <input type="text" value="<?php echo $rows['staff_id']?>" hidden>
                          <button type="button" class="mybtn" data-bs-toggle="modal" data-bs-target="#editEmployee"
                          onclick="update_employee(this.value)" value = "<?php echo $rows['staff_id']?>">
                          <i class="bi-pencil-square" data-toggle="tooltip" title="Edit" style="color: #2196F3;">
                          </i> <span>Edit Employee</span>
                          </button>
                        
                      </form>  
                      </div>
                      
                          <div style= "display: inline; width: fit-content;">
                          <form action="../func/func_del_employee.php" method="post" id="emp_delete_id_<?php echo $rows['staff_id']?>">
                          <input type="text" value="<?php echo $rows['staff_id']?>" name="emp_id" hidden>
                          <button type="button" class="mybtn" data-bs-toggle="modal" data-bs-target="#deleteEmployee"
                          onclick="delete_employee(this.value)" value = "<?php echo $rows['staff_id']?>">
                          <i class="bi-trash3-fill" data-toggle="tooltip" title="Delete" style="color: #F44336;">
                          </i> <span>Delete Employee</span>
                          </form> 
                          </div> 
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
    <!-- ADD EMPLOYEE -->
    <div class="modal fade " id="addEmployee" tabindex="-1" aria-labelledby="modal-add-emp" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modal-title"><b>ADD NEW EMPLOYEE</b></h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body p-4">
                    <div class="text-center">
                    <form action = "../func/func_insert_employee.php" method="post"enctype="multipart/form-data" >  
                      <div class="row mb-2">
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Firstname" name="emp_fname" required/>
                          </div>
                          <div class="col">
                            <!-- <input type="text" class="form-control" id="modal-status" placeholder="Employee Status" name="emp_status" /> -->
                         
                            <!-- <form action="func_insert_employee.php" method="POST"> -->
                            <input type="text" class="form-control" placeholder="Lastname" name="emp_lname" required/>
                             
                            <!-- </form> -->
                          </div>
                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                      
                        <select class = "my-auto" name="emp_status_post" id="selected_status" style = "font-size:18px;" >
                          <option value="Active">Active</option>
                          <option value="Inactive">Inactive</option>
                          <option value="Suspended">Suspended</option>
                        </select>
                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                      <div class="col">
                            <input type="text" class="form-control" id="modal-email" placeholder="Email" name="emp_email" required/>
                        </div>
                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                      
                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="text" class="form-control" id="modal-age" placeholder="username" name="emp_username" required/>
                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="tel" class="form-control" id="modal-contact_num" placeholder="Contact Number" name="emp_contact_num" />
                      </div>
                      <div class="row mb-2 my-1 py-0 gx-0">
                        <select class = "my-auto" style = "font-size:18px;" value="<?php //echo $rows['emp_position_post']?>" id="selected_position" name="position">
                        <option value="Admin">Admin</option>
                        <option value="Staff">Staff</option>
                        <option value="Delivery">Delivery</option>
                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="password" class="form-control" id="modal-password" placeholder="Enter Password" name="password" required/>
                      </div>
                    
                      
                      <div class="row mb-2 my-0 py-0 gx-0 mx-auto" >
                        <!-- <input placeholder="Image" type="file" class="file-upload-input" id="modal-image" 
                          name="emp_image" onchange="readURL(this) accept = image/*"/> -->
                          <div class="col" style ="float:left;">
                          <p>Profile picture</p>
                          </div>
                          <div class="col" style ="float:right;">
                          <input type="file" id="profile_pic" onchange="readURL(this)" name="profile1">
                          </div>
                      </div>
                      <!-- </div>
                        </div> -->
                    <div class="" style ="float:right;">
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

                 
                    <form action = "../func/func_edit_employee.php" method="post" enctype="multipart/form-data">  
                      <div class="row mb-2">
                          <div class="col">
                            <input type="text" value="<?php //echo $rows['staff_id']?>" name="id" id="modal-id" hidden>
                            <input type="text" value="<?php //echo $rows['emp_name']?>" class="form-control" id="modal-name" name="fname" required/>
                          </div>
                          <div class="col">
                            <input type="text" value="<?php //echo $rows['emp_name']?>" class="form-control" id="modal-lname" name="lname" required/>
                           
                            </div>
                        </div>
                        <div class="row mb-2 my-0 py-0 gx-0">
                           <select value="<?php //echo $rows['emp_status_post']?>" id="selected-status" name="status">
                              <option value="Active">Active</option>
                              <option value="Inactive">Inactive</option>
                              <option value="Suspended">Suspended</option>
                            </select>
                        </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                      
                            <input type="text" value="<?php //echo $rows['emp_email']?>" class="form-control" id="modal_email" name="email" required/>
                       
                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                      
                            <input type="text" value="<?php //echo $rows['emp_email']?>" class="form-control" id="modal_username" name="username" required/>
                       
                      </div>
                      <!-- <div class="row mb-2 my-0 py-0 gx-0">
                      <div class="col">
                            <input type="text" value="<?php //echo $rows['emp_address']?>" class="form-control" id="modal_address" />
                        </div>
                      </div> -->
                      <!-- <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="number" value="<?php //echo $rows['emp_age']?>" class="form-control" id="modal-age" />
                      </div> -->
                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="tel" value="<?php //echo $rows['emp_contact_num']?>" class="form-control" id="modal_contact_num" name="number"/>
                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                        <select value="<?php //echo $rows['emp_position_post']?>" id="selected_position_update" name="position">
                        <option value="Admin">Admin</option>
                        <option value="Staff">Staff</option>
                        <option value="Delivery">Delivery</option>
                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                      <?php //echo '<img src = "data:image/jpeg;base64,'.base64_encode($rows['img']) .'" class="card-img-top" alt="..." id="image_">' ?>
                      <label for="inputImage" class="form-label">
                        <?php               
                        echo '<img class="card-img-top img img-responsive" src = "data:image/jpeg;base64,'.base64_encode($rows['image']) .'" 
                        style ="height: 200px;
                        object-fit: cover;
                        aspect-ratio: 4/3;
                        border-radius: 10px;"
                        id = "profile_pic"
                        name = "profile1"

                        />';
                        ?>
                      <br>
                      <input type="file" id="modal-image" onchange="readURL(this)" name="profile1">
                      </div>
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
           </div>
         </div>
            

          <!-- delete -->

    <div id="deleteEmployee" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
       
          <form action="../func/func_del_employee.php" method="post">
            <div class="modal-header">						
              <h4 class="modal-delete-emp">Delete Employee</h4>
              <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">	
           
              <div class="row mb-2 my-0 py-0 gx-0">
                <div class="col">
                    <input type="text" value="<?php //echo $rows['staff_id']?>" name="id" id="emp_id_delete" hidden>
                    <input type="text" class="form-control" placeholder="Firstname" name="emp_fname" id="modal_fname_delete"/>
                </div>	
              </div>	
              <div class="row mb-2 my-0 py-0 gx-0">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Lastname" name="emp_lname" id="model_lname_delete"/>
                </div>	
              </div>
              <hr>
              <p>Are you sure you want to delete these Record?</p>
              <p class="text-danger"><medium>This action cannot be undone.</medium></p>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
              <button type="button" class="btn btn-danger" value="Delete" id="delete_confirm_emp" onclick="on_deletes(this.value)">DELETE</button>
            </div>
          </form>
     
        </div>
      </div>
    </div>




    <script>


function update_employee(value){

// console.log(value);
var id = $("#id_"+value)[0].innerHTML;
var fname = $("#fname_"+value)[0].innerHTML;
var lname = $("#lname_"+value)[0].innerHTML;
var status = $("#status_"+value)[0].innerHTML;
var email = $("#email_"+value)[0].innerHTML;
var username = $("#username_"+value)[0].innerHTML;
var contact = $("#contact_"+value)[0].innerHTML;
var privilage = $("#priv_"+value)[0].innerHTML;
var image = $("#image_"+value)[0].innerHTML;

console.log(id);
console.log(fname);
console.log(lname);
console.log(status);
console.log(email);
console.log(username);
console.log(contact);
console.log(privilage);
console.log(image);

$("#modal-id").val(id);
$("#modal-name").val(fname);
$("#modal-lname").val(lname);
$("#selected-status").val(status);
$("#modal_email").val(email);
$("#modal_username").val(username);
// $("#modal-address").val(address);
$("#modal_contact_num").val(contact);
$("#selected_position_update").val(privilage);
$("#modal-image").val(image);



}

function delete_employee(value){

console.log(value);
          var staff_id = $("#id_"+value)[0].innerHTML;
          var firstname = $("#fname_"+value)[0].innerHTML;
          var lastname = $("#lname_"+value)[0].innerHTML;
        
          
         

          console.log(staff_id);
          console.log(firstname);
          console.log(lastname);
 
         

          $("#emp_id_delete").val(staff_id);
          $("#modal_fname_delete").val(firstname);
          $("#model_lname_delete").val(lastname);
          $("#delete_confirm_emp").val(value);
      
         
        


}




function on_deletes(value){
  console.log(this.value);
  document.getElementById("emp_delete_id_"+value).submit();
}





      function myFunction(){
        var result = document.getElementById("selected_status").value;
        console.log(result);
      }

         function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#profile_pic')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#page_footer").css("position","");

        $("#link_management").addClass("active");

  </script>

</body>
</html>