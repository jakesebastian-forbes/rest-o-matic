<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us | Rest-o-Matic!</title>

    <link rel="icon" type="image/x-icon" href="images/icon/web_icon.png"/> 
    <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/general.css">


    <style>
        /* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
        .flip-card {
          background-color: transparent;
          width: 80wh;
          height: 60vh;
          /* border: 1px solid #f1f1f1; */
          perspective: 1000px;
          /* Remove this if you don't want the 3D effect */
        }
    
        /* This container is needed to position the front and back side */
        .flip-card-inner {
          position: relative;
          width: 100%;
          height: 100%;
          text-align: center;
          transition: transform 0.8s;
          transform-style: preserve-3d;
        }
    
        /* Do an horizontal flip when you move the mouse over the flip box container */
        .flip-card:hover .flip-card-inner {
          transform: rotateY(180deg);
        }
    
        /* Position the front and back side */
        .flip-card-front,
        .flip-card-back {
          position: absolute;
          width: 100%;
          height: 100%;
          -webkit-backface-visibility: hidden;
          /* Safari */
          backface-visibility: hidden;
        }
    
        /* Style the front side (fallback if image is missing) */
        .flip-card-front {
          background-color: #F1EBE5;
          color: black;
        }
    
        /* Style the back side */
        .flip-card-back {
          background-color: dodgerblue;
          color: white;
          transform: rotateY(180deg);
        }
      </style>


</head>
<body>

    <div class="container-fluid" style="
        background-color: white;
        height: 100vh;
        width: 100vw;
        min-width: fit-content;
        overflow: hidden;
      ">
    <div class="row">
        <nav class="navbar mynavbar" style="width: 100vw; min-width: fit-content; max-height: 86px">
          <div class="d-flex justify-content-start">
           <a href="index.php"><img src="images/icon/web_icon.png" class="px-3" alt="web_icon.png" style="max-height: 70px" /></a> 
            <!-- <span class="navbar-brand mb-0 myheading1"></span> -->
            <h1 class="myheading1" style="padding-bottom: 0">ABOUT US</h1>
            <!-- <a type ="button" class ="mybtn1">ABOUT US</a> -->
          </div>
          <!-- <div class="d-flex justify-content-end">
            <a type="button" class="mybtn1 mx-4" href="index.php" style="
                  padding-bottom: 10px;
                  background-color: #7ed957;
                  color: black;">HOME</a>
          </div> -->
        </nav>
      </div>


      <div class="text-center" style="margin:7%; margin-bottom: 2px;"> 
        <div class="flip-card" style=""> 
          <div class="flip-card-inner">
            <div class="flip-card-front py-5 text-center " style="font-family: 'Courier New', monospace;contain:; font-size: large">
                <div class = "text-responsive my-auto" style ="">
                  <h2 class="p-1" style="font-size: vw; margin-top: 3%;">Rest-o-Matic</h2>
                  <h1 class="p-1" style="font-size: vw;font-weight:bold">09-XXX-XXX-XXX</h1>
                  <h4 class="p-1" style="font-size: vw;">CONTACT NUMBER</h4>
                  <h1 class="p-1" style="font-size: vw;font-weight:bold">BRGY. SAMPLE, NASUGBU</h1>
                  <h4 class="p-1" style="font-size: vw;"><a onclick="" href="" 
                      style="text-decoration: none; color:inherit">ADDRESS</a> </h4>
                </div>
    
            </div>
            <div class="flip-card-back">
    
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d967.5875798701267!2d120.63969!3d14.056479!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x29f6cee62947d4f5!2sWaltermart%20Nasugbu!5e0!3m2!1sen!2sph!4v1666085008834!5m2!1sen!2sph"
                width="100%" height="100%" style="border:0;" allowfullscreen="true" loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"></iframe>  
    
            </div>
          </div>
        </div>
      </div>
    
      
    

    </div>
</body>
</html>