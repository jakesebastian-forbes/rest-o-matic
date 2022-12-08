<?php

if(isset($_SESSION['privilage'])){
  if($_SESSION['privilage'] == 'guest'){
    // $is_guest = 1;
    echo"<script>
 

    var el = document.querySelectorAll('#add_cart');

    for (var i = 0; i < el.length; i++) {
        var currentEl = el[i];                          
        currentEl.setAttribute('data-bs-toggle','modal');
        currentEl.setAttribute('data-bs-target','#reg-modal');
        currentEl.removeAttribute('onclick'); 
    }
    </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

</head>

<body>
<div class="row d-flex justify-content-start mx-auto">

    <?php
                          $conn = new mysqli('localhost','root','','restomatic_db');

                          if($conn->connect_error){
                            die('Connection failed : ' . $conn->connect_error);
                           }else{
                          $query = "SELECT * FROM `menu` WHERE item_category = '$category';";
                        
                          $result = mysqli_query($conn,$query);

                          while($rows = mysqli_fetch_assoc($result))
                              {
                               
                          ?>
                   
    <?php $menu_id = $rows['menu_id']?>
    <div class="col-lg-2 col-md-3 col-sm-5 col-11 m-1 mb-1 15vw" >
      <div class="card h-100" id = "<?php echo $menu_id; ?>">
        
        <div class="img_overlay">
        <?php echo '<img class="card-img-top img img-responsive" src = "data:image/jpeg;base64,'.base64_encode($rows['img']) .'" 
        style ="width : 100%; height:200px; object-fit: cover;"/>';?>
        
        <div class="img_title" style="color: white; text-align: center;">
        <!-- ADD TO CART  -->
      
          <div class="" style="margin-left: auto; margin-top: 47px;"> 
         
              <!-- <button class="mybtn1 my-auto" style = "margin-left: 15px;" action= "func_a dd_cart.php">ADD ITEM TO CART</button>  -->
              <!-- <button type="submit" class="mybtn1 my-auto" name="insert" value="<?php //echo $menu_id?>">Submit</button> -->
              <button type="submit" class="mybtn1 my-auto" name="insert" 
              id = "add_cart" onclick=add_to_cart(this.value)
               value="<?php echo $menu_id?>"  >Add To Cart</button>
            <!-- for maybe buy now -->
              <button type="submit" formaction="/action_page2.php" class="mybtn1 my-auto p-auto">Buy Item</button>
           
            </div>

          </div>
          
        </div>
        

        <div class="card-body">
          <h5 class="card-title">
            <?php $rows['menu_id']?>
            <?php echo $rows['item_name'] ?>
          </h5>
          <p class="card-text">
            <?php echo $rows['item_desc'] ?>
          </p>
        </div>


        <div class="card-footer">
          <?php
           $item_price = $rows['item_price']
          ?>
          <small class="text-muted" id = "item_price<?php echo $menu_id?>" value = "<?php echo $item_price?>" 
          style = "float:right;"> 
          <?php echo '₱'.$item_price.'.00' ?></small> <br>

          <!-- <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="with_fries_sw<?php //echo $menu_id?>" value = <?php //echo $menu_id?> onclick = "switches(this.value)">
        <label class="form-check-label" for="flexSwitchCheckDefault" name = "with_fries" id ="with_fries_label" >With Fries</label>
      </div> -->

          <!-- <div>
            <label for="with_fries_lbl2"></label>
          </div> -->
          

       
          <?php //include('func_addons.php');?>
        </div> 
     
      </div>
    </div>

    
    <?php

        }
      }
      ?>


  
  </div>
  <!-- </form> -->
  <br>


  


<script>
   // selecting all checkboxes
// of group language using querySelectorAll()
function selectAddons(){
  var checkboxes = document.querySelector('input[name="addons"]');
  var values = [];
  // looping through all checkboxes
  // if checked property is true then push
  for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked == true) {
      values.push(checkboxes[i].value);
  }
}
alert(values);
}

function switch_it(){
var switchStatus = false;
$(this).on('change', function() {
    if ($(this).is(':checked')) {
        switchStatus = $(this).is(':checked');
        alert(switchStatus);// To verify
    }
    else {
       switchStatus = $(this).is(':checked');
       alert("esle " + switchStatus);// To verify
    }
});
}


  </script>


    </body>
  </html>

  