<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
  <link rel="icon" type="image/x-icon" href="images/icon/web_icon.png" />
  <link rel="stylesheet" href="../bootstrap-5.2.2/css/bootstrap.min.css" />
  <script src="../bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../css/general.css" />
 

</head>
<body>
    

    
    <!-- <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="with_fries_sw" value = "OFF" onchange = 'switch_it(this.value)'>
        <label class="form-check-label" for="flexSwitchCheckDefault" name = "with_fries" id ="with_fries_label" >With Fries</label>
      </div>
     -->

      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="with_fries_sw1" value = "1" onclick = "switches(this.value)">
        <label class="form-check-label" for="flexSwitchCheckDefault" name = "with_fries" id ="with_fries_label" >With Fries</label>
      </div>

      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="with_fries_sw2"  value = "2" onclick = "switches(this.value)">
        <label class="form-check-label" for="flexSwitchCheckDefault" name = "with_fries" id ="with_fries_label" >With Fries</label>
      </div>
      <script>
        function switches(x){
        var element = document.getElementById("with_fries_sw" + x);
        element.addEventListener("change", function (event) {
        if (event.target.checked) {
            console.log("ON");
        } else {
            console.log("OFF");
        }
        console.log(x);
    });
  }
      </script>
    


      <script>
        function switch_it(x){
            console.log(x); 

            // if(x.toUpperCase() == "OFF"){
            //         x = "ON";
            //         console.log("1"+x);
            //         return x;
                    
            //     }else if(x == "ON"){
            //         x = "OFF";
            //         console.log("2"+x);
            //         return x;
            //     }
               

        }
    
      </script>
    
</body>
</html>