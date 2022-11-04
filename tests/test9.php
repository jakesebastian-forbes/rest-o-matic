<?php
session_start();
echo "Session Array:";
print_r($_SESSION);
echo "<br>";
echo "Sess_ID ";
echo SESSION_ID();

// require "check_sess.php";
// require "admin_priv.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Admin | Rest-o-Matic</title>

    <link rel="icon" type="../image/x-icon" href="../images/icon/web_icon.png"/> 
    <link rel="stylesheet" href="../bootstrap-5.2.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/general.css"/>
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
                        <img src="../images/icon/web_icon.png" alt="web_icon.png" style="max-height: 70px;">  
           
                    </div>

                  
                  <div class="d-flex justify-content-end mx-5 px-5" style=" max-height: 65px;">    
                    <a href="admin_management.php" class = "nav-link active"><img src="../images/icon/team-management.png" class="mx-3" alt="home"  style=" max-height: 70px;"></a>     
                    
                    <a href=""><img src="../images/icon/notification.png" class="mx-3" alt="home"  style=" max-height: 70px;"></a>   

                    <a href=""><img src="../images/icon/home2.png"  class="mx-3" alt="home"  style=" max-height: 70px;"></a>   
                    
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
              <!-- canvas -->
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
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <script src = "../bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script>
  
<!-- for tabs -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>  -->

 <script>

    anychart.onDocumentReady(function () {
      // variable to help us define screen proportions
      var screenRatio;

      // data for the charts
      var drinksData = anychart.data.set([
        ['Cosmopolitan', 51, 45, 6, 10, 100],
        ['Martini', 67, 39, 28, 9, 55],
        ['Mojito', 19, 11, 8, 8, 250],
        ['Margarita', 47, 33, 14, 9, 110],
        ['Mai Tai', 32, 20, 12, 10, 210],
        ['Beer', 70, 20, 50, 5, 300]
      ]);

      var previousYearsData = anychart.data.set([
        ['2010', 60, 176, 35, 25],
        ['2011', 51, 136, 25, 26],
        ['2012', 73, 196, 35, 38],
        ['2013', 84, 315, 43, 41],
        ['2014', 79, 203, 36, 33],
        ['2015', 89, 286, 41, 48]
      ]);

      // set default using the theme
      var dashboardTheme = {
        chart: {
          margin: 0,
          padding: [15, 30, 15, 15],
          title: {
            enabled: true,
            fontColor: '#212121',
            fontSize: 13,
            padding: [0, 0, 10, 0]
          },
          defaultXAxisSettings: {
            title: {
              enabled: false,
              fontSize: 12,
              margin: 0,
              padding: [3, 0, 0, 0]
            },
            labels: { fontSize: 11, padding: [0, 0, 0, 0] }
          },
          defaultYAxisSettings: {
            title: {
              enabled: true,
              fontSize: 12,
              margin: 0,
              padding: [0, 0, 3, 0]
            },
            labels: { fontSize: 11, padding: [0, 0, 0, 0] }
          }
        }
      };
      // apply the theme
      anychart.theme(dashboardTheme);

      // create stage for all charts
      var stage = acgraph.create('container');

      var title = anychart.standalones.title();
      title.text('New Year Parties at ACME corp.');
      title.container(stage).draw();

      var pieChart = anychart.pie(drinksData);
      pieChart.title('Drinks');
      pieChart.legend().enabled(false);
      pieChart.labels().position('outside').fontSize(10).format('{%x}');
      pieChart.tooltip().format('{%Value} orders');
      pieChart.container(stage).draw();

      var barChart = anychart.bar();
      barChart.title('Drinks by Gender');
      barChart.bar(drinksData.mapAs({ value: 3, x: 0 })).name('Male');
      barChart.bar(drinksData.mapAs({ value: 2, x: 0 })).name('Female');
      barChart.yAxis().title('Drinks ordered');
      barChart.container(stage).draw();

      var scatterChart = anychart.bubble();
      scatterChart.title('Drinks Volumne/Price Ratio');
      scatterChart.bubble(
        drinksData.mapAs({
          value: 4,
          x: 5,
          size: 1,
          name: 0
        })
      );
      scatterChart.tooltip().titleFormat('{%Name}');
      scatterChart
        .tooltip()
        .format('Price: ${%value}\nVolume: {%x} ml.\nOrders: {%size}');
      scatterChart.yScale().minimum(0).maximum(15);
      scatterChart.yAxis().title('Volume (ml)');
      scatterChart.xAxis().title('Price, $');
      scatterChart.container(stage).draw();

      var lineChart = anychart.line(
        previousYearsData.mapAs({ value: 1, x: 0 })
      );
      lineChart.title('Number of drinks by year');
      lineChart.tooltip().format('{%value} drinks');
      lineChart.yAxis().title('Drinks ordered');
      lineChart.container(stage).draw();

      var areaChart = anychart.area(
        previousYearsData.mapAs({ value: 2, x: 0 })
      );
      areaChart.title('Parties Turnout');
      areaChart.tooltip().format('{%value} patrons');
      areaChart.yAxis().title('Turnout');
      areaChart.container(stage).draw();

      var columnChart = anychart.column();
      columnChart.title('Turnout by Gender');
      columnChart.yAxis().title('Turnout');
      columnChart
        .column(previousYearsData.mapAs({ value: 3, x: 0 }))
        .name('Male');
      columnChart
        .column(previousYearsData.mapAs({ value: 4, x: 0 }))
        .name('Female');
      columnChart.yAxis().title('Turnout');
      columnChart.container(stage).draw();

      // chart placement
      function configureChartsSize() {
        if (window.innerWidth > 768) {
          screenRatio = 'wide';
          pieChart.bounds(0, 30, '33.3%', '47%');
          barChart.bounds('33.3%', 30, '33.3%', '47%');
          scatterChart.bounds('66.6%', 30, '33.3%', '47%');
          lineChart.bounds(0, '52%', '33.3%', '47%');
          areaChart.bounds('33.3%', '52%', '33.3%', '47%');
          columnChart.bounds('66.6%', '52%', '33.3%', '47%');
        } else {
          screenRatio = 'slim';
          pieChart.bounds(0, 30, '50%', '33.3%');
          barChart.bounds('50%', 30, '50%', '33.3%');
          scatterChart.bounds(0, '33.3%', '50%', '33.3%');
          lineChart.bounds('50%', '33.3%', '50%', '33.3%');
          areaChart.bounds(0, '66.6%', '50%', '33.3%');
          columnChart.bounds('50%', '66.6%', '50%', '33.3%');
        }
      }

      configureChartsSize();

      // On resize change layout to mobile version or otherwise
      window.onresize = function () {
        if (screenRatio === 'slim' && window.innerWidth > 767) {
          configureChartsSize('wide');
        } else if (window.innerWidth <= 767) {
          configureChartsSize('slim');
        }
        title.parentBounds(0, 0, stage.width(), 130).draw();
      };
    });
  
</script>

</body>
</html>