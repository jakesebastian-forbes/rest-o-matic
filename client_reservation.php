<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESERVATION</title>

    <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css"/>
    <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script> 

</head>
    <style>

        .orderNavbar{
            margin-top: 1%;
            background-color: black;
            color: white;
        }
        table{
            /* margin-top: 10px; */
            width: 100%;
        }

        th{
            background-color:#FFB52E;
        }
        table, th, td{
        
            border: 1px solid;
            text-align: center;

        }

    </style>



<body>

    <div class="container-fluid">
        <div class="row">
            <nav class="navbar mynavbar" style="width: 100vw; min-width: fit-content; max-height: 86px; background-color: black;">
                <div class="d-flex justify-content-start">
                  <img src="images/icon/web_icon.png" class="px-3" alt="web_icon.png" style="max-height: 70px">
                  <h1 class="myheading1" style="padding-top: 7px; color: white;">REST-O-MATIC</h1>
                </nav>
        </div> 
        <div class="container">
            <div class="panel">
                <nav>
                    <div class="navbar orderNavbar">
                        <h2 style="margin-left:10px ;"><i class="fa-solid fa-calendar-days"></i> RESERVATION</h2>
                    </div>
                </nav> 
                <div class="panel-body border">
                    
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>DATE</th>
                                <th>TIME</th>
                                <th>ITEM</th>
                                <th>QUANTITY</th>
                                <th>TOTAL</th>
                            </tr>
                            <tr>
                                <td>27645</td>
                                <td>Date</td>
                                <td>Time</td>
                                <td>Item 4</td>
                                <td>4</td>
                                <td>250</td>
                            </tr>
                            <tr>
                                <td>34565</td>
                                <td>Date</td>
                                <td>Time</td>
                                <td>Item 3</td>
                                <td>2</td>
                                <td>200</td>
                            </tr>
                            <tr>
                                <td>33456</td>
                                <td>Date</td>
                                <td>Time</td>
                                <td>Item 1</td>
                                <td>5</td>
                                <td>450</td>
                            </tr>
                            <tr>
                                <td>33456</td>
                                <td>Date</td>
                                <td>Time</td>
                                <td>Item 3</td>
                                <td>3</td>
                                <td>280</td>
                            </tr>
                        </table>
                    
                </div>
        </div>
    </div>
    
</body>
</html> 