<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Notif</title>

    <link rel="icon" type="image/x-icon" href="images/icon/web_icon.png"/> 
    <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/general.css"/>
</head>

<style>

    .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #af2e89;
        border-radius: 90px;
    }
  
  </style>
  
<body>

    <div class = "container-fluid" style ="background-color: white;">  
       
        <div class = "row"> 
            <nav class="navbar mynavbar" style = "width:100vw;min-width: fit-content;max-height: 86px;">   
                <div class="d-flex flex-row mx-5" style="color:white">
                <h1>MANAGEMENT</h1>  
       
                </div>

              
              <div class="d-flex justify-content-end mx-5 px-5" style=" max-height: 65px;">    
                <a href="" class = "nav-link active"><img src="images/icon/team-management.png" class="mx-3" alt="home"  style=" max-height: 70px;"></a>
                           
                <a href=""><img src="images/icon/notification.png" class="mx-3" alt="home"  style=" max-height: 70px;"></a>   

                <a href=""><img src="images/icon/home2.png"  class="mx-3" alt="home"  style=" max-height: 70px;"></a>   
                
              </div>

              
            </nav>      
        </div> 
        
        <div class="row m-5">
            <div class="panel-body border" style="width: 80vw; margin-left: auto; margin-right: auto;background-color: rgb(13, 13, 13);">
              
              <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
      
                <!-- <li class="nav-brand ">
      
                  <img src="/images/icon/web_icon.png" alt="" style = "height: 75px; margin-right:150px" class="">
                </li> -->

                <li class="nav-item my-auto myheading1" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"
                  style="color:white"><span>
                    <img src="images/icon/box2.png" alt="dashboard" style="height: 75px; filter: saturate(0);" >
                  </span> INVENTORY </button>
                </li>
                <!-- <li class="nav-item my-auto" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                </li>
                <li class="nav-item my-auto" role="presentation">
                  <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>Disabled</button>
                </li> -->
              </ul>
      
            </div>

            <div class="panel-body border" style="width: 80vw; height:70vh;margin-left: auto; margin-right: auto;background-color: rgb(255, 255, 255);">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0" style="">
                      <!-- <img src="/images/yeji.jpg" alt="" style ="object-fit:contain; height: 400px;" class =""> -->
        
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ITEM</th>
                            <th scope="col">ITEM TYPE</th>
                            <th scope="col">QUANTITY</th>
                            <th scope="col">TOTAL PRICE</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $conn = new mysqli('localhost','root','','restomatic_db');

                          if($conn->connect_error){
                            die('Connection failed : ' . $conn->connect_error);
                           }else{

                          $query = "SELECT `item_id`, `item_name`, `item_type`, `item_quantity`,`item_price`, `short_desc`, `item_img` FROM `inventory` ";
                        
                          $result = mysqli_query($conn,$query);

                          while($rows = mysqli_fetch_assoc($result))
                              {
                                
                          ?>  
                          <tr>
                            <th scope="row"><?php echo $rows['item_name'] ?></th>
                            <td><?php echo $rows['item_type'] ?></td>
                            <td><?php echo $rows['item_quantity'] ?></td>
                            <td><?php echo $rows['item_price'] ?></td>
                          </tr>

                          <?php
                                
                              }
                            }
                          ?>  
                        </tbody>
                      </table>
                      
                      
                      </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                      <!-- <img src="/images/icon/web_icon.png" alt="" style ="height: 400px;"> -->
                      
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">FOR</th>
                            <th scope="col">ADDRESS</th>
                            <th scope="col">ORDERS</th>
                            <th scope="col">QUANTITY</th>
                            <th scope="col">TOTAL</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">123</th>
                            <td>PANGALAN</td>
                            <td>DATE</td>
                            <td>ITEM 1</td>
                            <td>3</td>
                            <td>TOTAL</td>
                          </tr>
                        </tbody>
                      </table>
        
                    </div>
                    <!-- <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...3</div>
                    <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...4</div> -->
                </div>
              </div>
        
            </div>
        
        
        
            <a type="button" class="mybtn1 mx-4 myfixedbtn" data-bs-toggle="modal" data-bs-target="#reg-modal" id="mybtn" style="
                padding-bottom: 10px;
                background-color: #7ed957;
                color: black;
              ">Add item</a>
            <!-- <a type = "button" class ="mybtn1 myfixedbtn " style="background-color:rgb(215, 46, 46) ;">ADD ITEM</a>    -->
        
            </div>

           <!-- modal -->

           <div class="modal fade " id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">ADD ITEM</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body p-4">
                    <div class="text-center">

                    <form method="post" action = "insert_item.php">  
                      <div class="row mb-2">
                          <div class="col">
                            <input type="text" class="form-control" id="modal-firstname" placeholder="Item Name" name="item_name" />
                          </div>

                          <div class="col">
                            <input type="text" class="form-control" id="modal-lastname" placeholder="Item Type" name="item_type" />
                          </div>

                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="number" class="form-control" id="modal-username" placeholder="Quantity"
                          name="item_quantity" />
                      </div>

                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="number" class="form-control" id="modal-mobile_number" placeholder="Price"
                          name="item_price" />
                      </div>

                      <div class="row mb-2 my-0 py-0 gx-0">
                      <textarea placeholder="Description" class="form-control" id="modal-email" 
                      name="short_desc" ></textarea>
                      
                        <!-- <input type="Long Text" class="form-control" id="modal-email" placeholder="Description"
                          name="email" /> -->
                      </div>

                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input placeholder="Image" type="file" class="file-upload-input" id="modal-password" 
                          name="item_img" onchange="readURL(this) accept = image/*"/>
                      </div>
          
        
                      </div>

                        </div>

                    <div class="modal-footer">
                    
                      <!-- <a href="login.php"></a><a href='login.php?hello=true'>Submit</a> -->
                    <button class="btn btn-primary" name = "signup_btn" method="post">Add Item</button> 
                    
                    </div>
                    </form>
                  
                  </div>
                </div>
              </div>
            </div>

            
        
        <link rel="script" href="/bootstrap-5.2.2/js/bootstrap.min.js">
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        
        <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
        <script src="@@path/vendor/chartist/dist/chartist.min.js"></script>
        <script src="@@path/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
        
        <link rel="stylesheet" href="/js/admin_home_dashboard.js">
        
    
</body>
</html>