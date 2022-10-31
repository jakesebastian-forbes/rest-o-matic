<?php
session_start();
echo "Session Array:";
print_r($_SESSION);
echo "<br>";
echo "Sess_ID ";
echo SESSION_ID();

require "check_sess.php";
require "admin_priv.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Admin | Rest-o-Matic</title>

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
                <nav class="navbar mynavbar" style = "">   
                    <div class="d-flex flex-row mx-5"> 
                        <img src="images/icon/web_icon.png" alt="web_icon.png" style="max-height: 70px;">  
           
                    </div>

                  
                  <div class="d-flex justify-content-end mx-5 px-5" style=" max-height: 65px;">    
                    <a href="admin_management.php" class = "nav-link active"><img src="images/icon/team-management.png" class="mx-3" alt="home"  style=" max-height: 70px;"></a>     
                    
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
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"
            style="color:white"><span>
              <img src="images/icon/files.png" alt="logs" height="75px" style ="filter: invert();">
            </span> LOGS</button>
          </li>
          <li class="nav-item my-auto myheading1" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"
            style="color:white"><span>
              <img src="images/icon/analytics.png" alt="dashboard" style="height: 75px; filter: saturate(0);" >
            </span> DASHBOARD</button>
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
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Transaction Type</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Okay</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>Okay2</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="">Larry the Bird</td>
                    <td>Burger</td>
                    <td>@twitter</td>
                    <td>Okay3</td>
                  </tr>
                </tbody>
              </table>
              
              
              </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
              <!-- <img src="/images/icon/web_icon.png" alt="" style ="height: 400px;"> -->
              
              <div class="container">
                <div class="row my-3">
                    <div class="col">
                        <h4>Bootstrap 5 Chart.js</h4>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-6 py-1">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="chLine"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="chBar"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-4 py-1">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="chDonut1"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 py-1">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="chDonut2"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 py-1">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="chDonut3"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
            <!-- <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...3</div>
            <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...4</div> -->
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