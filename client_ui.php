<?php
session_start();

if ($_SESSION["privilage"] == 'guest'){
  // echo "GUESTTTTTTTTTTT";
  echo "add button for login or back to index";
 
}else{
  require "func_check_sess.php";

}

require "func_client_priv.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script>  

    <?php
        $title = "Orders | Client | Restomatic";
        require 'must_haves.php';
    ?>
</head>
<body>
  <div class="container-fluid" style="background-color: white; height:100vh; width:100%; padding:0px;">
<!-- ASDASDA -->

<?php

echo "Session Array:";
print_r($_SESSION);
echo "\n";
echo "Sess_ID ";
echo SESSION_ID();
echo "asdadss";
?>
  <?php 
  $title_sidebar = "MENU";
  require('client_sidebar.php');?>


    <h1 id="classics">CLASSICS</h1>
  <?php
  $category = "classics";
  include('func_menu_content.php');
  ?>

  <h1 id="wholeMozza">Whole Mozzarella</h1>
  <?php
  $category = "Whole Mozzarella";
  include('func_menu_content.php');
  ?>

  <h1 id="halfMozza_halfSausge">Half Mozza Plus Half Sausage</h1>
  <?php
  $category = "Half Mozza Plus Half Sausage";
  include('func_menu_content.php');
  ?>

  <h1 id="specials">Specials</h1>
  <?php
  $category = "Specials";
  include('func_menu_content.php');
  ?>



</div>
</div>
</div>


</div>


  

<div class="modal fade " id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">GO TO LOGIN</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body p-4">
                    <div class="text-center">

                  
                      <div class="row mb-2">
                          <div >
                            <h4>
                              You don't have an account, please login first!
                            </h4>
                          </div>

                    <div class="modal-footer">

                    <a href="login.php"> <!-- <a href="login.php"></a><a href='login.php?hello=true'>Submit</a> -->
                    <button class="btn btn-primary" name = "">Go to login</button> 
                    </a>
                    </div>

                  
                    </div>
                  </div>
                </div>
              </div>
        </div>





  <?php
  
  if ($_SESSION["privilage"] != 'client'){
    // echo "GUESTTTTTTTTTTT";
    echo"<script>
  
  
    document.getElementById('sidebar-btn').setAttribute('hidden','true'); 
   
  </script>";
  }
  ?>

<script>
    function add_to_cart(value){
    var user = parseInt(<?php echo $_SESSION['client_id']; ?>) ; 
    var menu_id = value;
    console.log('user ' +user);
    // console.log('ordered '+menu_id);
  //  alert('added to cart!');
  $.ajax({
		url: "func_add_cart.php",
		type: "POST",
		data: {
			"client_id": user,
			"menu_id": menu_id
		},
		cache: false,
		success: function(dataResult){
      console.log("1" + dataResult);
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
        alert("Added to Cart!" + user + menu_id);
        console.log(dataResult);

				// $("#butsave").removeAttr("disabled");
				// $('#fupForm').find('input:text').val('');
				// $("#success").show();
				// $('#success').html('Data added successfully !'); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occurred !");
			}
			
		}
	});
}
    
  </script>


 <script>
        function switches(x){
        var element = document.getElementById("with_fries_sw" + x);
        var price = document.getElementById("item_price" + x);
    
        if (event.target.checked) {
          console.log("ON");
          console.log(parseInt(price.innerHTML) + 10 );

    
        } else {
            console.log("OFF");
        
        }
        console.log(x);

  };



      </script>

<script>

var active = document.getElementById('nav_home');
active.setAttribute('class','nav-link my-nav-link my-active',);

var bookmark = document.getElementById('bookmark');
bookmark.removeAttribute('hidden');
</script>

</body>

</html>