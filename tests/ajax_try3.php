<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>The XMLHttpRequest Object</h1>

<form action=""> 
<select name="customers" onchange="showCustomer(this.value)">
<option value="">Select a customer:</option>
<option value="1">Alfreds Futterkiste</option>
<option value="2 ">North/South</option>
<option value="3">Wolski Zajazd</option>
</select>
</form>
<br>
<div id="txtHint">Customer info will be listed here...</div>





    <script>

function showCustomer(str) {
  var xhttp;
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_db_q.php?q="+str, true);
  xhttp.send();
}
    </script>


</body>
</html>