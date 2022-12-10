<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css"/>
    <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"> -->
    <!-- <script src="bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> -->

    <title>MANAGEMENT | MENU | Restomatic</title>
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
.card .card-img-top {
  width: 200px;
  height: 200px;
  border-radius: 50%;
  object-fit: cover;
  margin-top: 7px;
  margin-left: 300px;
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
        $page_title = "MANAGEMENT | MENU";

        require "admin_sidebar.php";
        
        ?>
          <div class="panel">
            <nav>
              <div class="navbar accNavbar">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <h2><b>Menu Management</b></h2>
                      <a href="#" class="btn btn-secondary"><i class="material-icons">file_download</i> <span>Export to Excel</span></a><a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#add-item"><i class="fa-sharp fa-solid fa-circle-plus" data-toggle="tooltip" title="Add"></i> <span>Add New Item</span></a>
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
              <div class="row g-0 mb-1">
                <div class="col-md-4">
                  <?php echo '<img src = "data:image/jpeg;base64,'.base64_encode($rows['img']) .'" class="card-img-top m-auto" alt="..." id="image_'.$rows['menu_id'].'">' ?> 
                </div>
                <div class="col-md-8">
                  <div class="card-body"> 
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="row" style="margin-left:2px ;" >
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Category</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                            <h6 id="id_<?php echo $rows['menu_id']?>" hidden><?php echo $rows['menu_id'] ?></h6>
                              <h6 id="category_<?php echo $rows['menu_id']?>"><?php echo $rows['item_category'] ?></h6>
                          </div>
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Item Name</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6 id="itemName_<?php echo $rows['menu_id']?>"><?php echo $rows['item_name'] ?></h6>
                          </div>
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Description</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6 id="description_<?php echo $rows['menu_id']?>"><?php echo $rows['item_desc'] ?></h6>
                          </div> 
                      </div>
                      <div class="row" style="margin-left:2px ;">
                          <div class="col-md-6 col-sm-3">
                              <h5><b>Price</b></h5>
                          </div>
                          <div class="col-md-6 col-sm-3 text-secondary">
                              <h6 id="price_<?php echo $rows['menu_id']?>"><?php echo $rows['item_price'] . '.00'; ?></h6>
                          </div>
                      </div>
                  </div>
                  </div>
                  
                  <div class="card-footer">
                        <div style= "display: inline; width: fit-content;">
                          <form action="" method="get">
                          <input type="text" value="<?php echo $rows['menu_id']?>" hidden>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-item"
                          onclick="update_menu(this.value)" value = "<?php echo $rows['menu_id']?>">
                          <i class="bi-pencil-square" data-toggle="tooltip" title="Edit" style="color: #2196F3;">
                          </i> <span>Edit Menu</span>
                          </button>
                        
                           </form>  
                          </div>

                      <div style= "display: inline; width: fit-content;">
                          <form action="" method="get">
                          <input type="text" value="<?php echo $rows['menu_id']?>" hidden>
                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteEmployee">
                          <i class="bi-trash3-fill" data-toggle="tooltip" title="Delete" style="color: #F44336;">
                          </i> <span>Delete Menu</span>
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
    <!-- ADD ITEM MODAL -->
      <div class="modal fade " id="add-item" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
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
                              <input type="text" class="form-control" id="modal-item"  placeholder="Item Name" name="item_name" 
                              value=""/>
                              </div>
                        </div>
                          <div class="row mb-2 my-0 py-0 gx-0">
                            <input type="text" class="form-control" id="modal-description" placeholder="Description"
                              name="short_desc" value=""/>
                          </div>
                          <!-- <div class="row mb-2 my-0 py-0 gx-0">
                            <input type="number" class="form-control" id="modal-w_fries" placeholder="with_fries"
                              name="with_fries" value=""/>
                          </div> -->
                          <div class="row mb-2 my-0 py-0 gx-0">
                            <input type="number" class="form-control" id="modal-price" placeholder="Price" name="item_price"  
                            value="">
                            <!-- <textarea 
                            ></textarea> -->
                          </div>

                          <div class="row mb-2 my-0 py-0 gx-0">
                          <div class="col" style ="float:left;">
                          <p>Profile Image Menu</p>
                          </div>
                          <div class="col" style ="float:right;">
                          <input type="file" id="profile_pic" onchange="readURL(this)" name="profile1">
                          </div>
                                
                            
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
            </div>
    <!-- UPDATE ITEM MODAL -->


    <div class="modal fade " id="edit-item" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modal-title"><b>EDIT ITEM</b></h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body p-4">
                    <div class="text-center">
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "restomatic_db";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM `staff_account` WHERE `menu_id` = ' '";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {

                      }
                    }

                    mysqli_close($conn);
                    ?>
                    <form method="post" action = "../func/func_insert_item.php" id="add_form" enctype="multipart/form-data">  
                    <div class="row mb-2">
                          <div class="col">
                              <input name="menu_id" value = "" id="update_id"hidden> 
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
                              <input type="text" class="form-control" id="modal-item" placeholder="Item Name" name="item_name" 
                              value=""/>
                              </div>
                        </div>
                          <div class="row mb-2 my-0 py-0 gx-0">
                            <input type="text" class="form-control" id="modal-description" placeholder="Description"
                              name="short_desc" value=""/>
                          </div>
                          <!-- <div class="row mb-2 my-0 py-0 gx-0">
                            <input type="number" class="form-control" id="modal-w_fries" placeholder="with_fries"
                              name="with_fries" value=""/>
                          </div> -->
                          <div class="row mb-2 my-0 py-0 gx-0">
                            <input type="number" class="form-control" id="modal-price" placeholder="Price" name="item_price"  
                            value="">
                            <!-- <textarea 
                            ></textarea> -->
                          </div>

                          <div class="row mb-2 my-0 py-0 gx-0">
                          <div class="col" style ="float:left;">
                          <p>Profile Image Menu</p>
                          </div>
                          <div class="col" style ="float:right;">
                          <input type="file" id="profile_pic" onchange="readURL(this)" name="profile1">
                          </div>
                                
                            
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
// console.log('value');
function update_menu(value){

// console.log(value);
          var menu_id = $("#id_"+value)[0].innerHTML;
          var category = $("#category_"+value)[0].innerHTML;
          var item_name = $("#itemName_"+value)[0].innerHTML;
          var description = $("#description_"+value)[0].innerHTML;
          var price = $("#price_"+value)[0].innerHTML;
          var image = $("#image_"+value)[0].innerHTML;
         

          console.log(id);
          console.log(category);
          console.log(item_name);
          console.log(description);
          console.log(price);
          console.log(image);
         

          $("#menu_id").val(id);
          $("#selected_category").val(category);
          $("#modal-name").val(item_name);
          $("#modal-description").val(description);
          $("#modal_price").val(price);
          $("#profile_pic").val(image);
        


}







function myFunction() { 
    var result = document.getElementById("selected_category").value; 
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

        $("#link_management").addClass("active");
    </script>







</body>
</html>
