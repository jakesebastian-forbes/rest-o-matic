<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

<div id="demo">

<h1>The XMLHttpRequest Object</h1>

<button type="button"
onclick="loadDoc('ajax_info2.txt', myFunction)">Change Content
</button>
</div>

<script>
function loadDoc(url, cFunction) { //callback fucnction
  var xhttp;
  xhttp=new XMLHttpRequest();
  xhttp.open("GET", url, true);
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      cFunction(this);
    }
  };
 
  xhttp.send();
}

function myFunction(xhttp) { 
  document.getElementById("demo").innerHTML =
  xhttp.responseText;
}
</script>
    
</body>
</html>