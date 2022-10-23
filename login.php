<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | Rest-o-Matic</title>
  <link rel="icon" type="image/x-icon" href="images/icon/web_icon.png" />
  <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/general.css" />
</head>

<body>
  <div class="container-fluid" style="
        background-color: #8ecdda;
        height: 100vh;
        width: 100vw;
        min-width: fit-content;
      ">
    <div class="row">
      <nav class="navbar mynavbar" style="width: 100vw; min-width: fit-content; max-height: 86px">
        <div class="d-flex justify-content-start">
          <img src="images/icon/web_icon.png" class="px-3" alt="web_icon.png" style="max-height: 70px" />
          <!-- <span class="navbar-brand mb-0 myheading1"></span> -->
          <h1 class="myheading1" style="padding-bottom: 0">LOGIN</h1>
          <!-- <a type ="button" class ="mybtn1">ABOUT US</a> -->
        </div>
        <div class="d-flex justify-content-end">
          <a type="button" class="mybtn1 mx-4" data-bs-toggle="modal" data-bs-target="#reg-modal" id="mybtn" style="
                padding-bottom: 10px;
                background-color: #7ed957;
                color: black;
              ">SIGN UP</a>
        </div>
      </nav>
    </div>
    <div>
      <h1 class="mytitle1" style="font-size: 10vh; padding: 30px 0px 0px 40px">
        RES-O-MATIC!
      </h1>

      <div class="row px-5 py-1 g-0" style="margin-left: 2%;">
        <div class="col-3 g-0">
          <img src="images/2dogs.jpg" class="img img-fluid myimg" alt="2dogs" />
          <img src="images/2dogs.jpg" class="img img-fluid myimg" alt="2dogs" />
        </div>
        <div class="col-3 g-0">
          <img src="images/2dogs.jpg" class="img img-fluid myimg" alt="2dogs" />
          <img src="images/2dogs.jpg" class="img img-fluid myimg" alt="2dogs" />
        </div>

        <div class="col"></div>

        <div class="col-4">
          <div class="panel panel-basic border rounded" style="background-color: white; height: 100%">
            <div class="row">
              <img src="images/yeji.jpg" class="img img-responsive rounded-circle mx-auto d-block" alt="avatar_logo"
                style="
                    max-height: 180px;
                    max-width: 200px;
                    margin-top: -15%;
                    object-fit: cover;
                  " />
            </div>
            <div class="row">
              <form>
                <div class="mb-2">
                  <!-- <label for="exampleInputEmail1" class="form-label">Email address</label> -->
                  <input type="email" class="form-control text-muted hotdog1" placeholder="Username" id=""
                    aria-describedby="emailHelp" />
                  <hr class="stick" />
                  <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-2">
                  <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                  <input type="password" class="form-control text-muted hotdog1" placeholder="Password" id="" />
                  <hr class="stick" />
                </div>
                <!-- <div class="mb-3 form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div> -->
                <div class="text-center">
                  <a href="" style="color: black">
                    <h5>forgot password?</h5>
                  </a>
                  <button type="submit" class="btn btn-primary" style="
                        margin-top: 20px;
                        width: 80%;
                        background-color: #ff5757;
                      ">
                    Login
                  </button>
                </div>
              </form>
            </div>

            <!-- modal -->

            <div class="modal fade " id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">SIGNUP</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body p-4">
                    <div class="text-center">
                      <div class="row mb-2">

                        <div class="col">
                          <input type="email" class="form-control" id="modal-email" placeholder="First name" name="" />
                        </div>

                        <div class="col">
                          <input type="email" class="form-control" id="modal-email" placeholder="Last name" name="" />
                        </div>

                      </div>


                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="email" class="form-control" id="modal-email" placeholder="Mobile number"
                          name="" />
                      </div>

                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="email" class="form-control" id="modal-email" placeholder="E-mail"
                          name="" />
                      </div>

                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="password" class="form-control" id="modal-email" placeholder="New password"
                          name="" />
                      </div>
                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="password" class="form-control" id="modal-email" placeholder="Confirm password"
                          name="" />
                      </div>

                      <div class="row mb-2 my-0 py-0 gx-0">
                        <input type="text" class="form-control" id="modal-email" placeholder="Address"
                          name="" />
                      </div>

                      <!-- birthday -->
                      <div class="row mb-2">
                        <div class="col my-2">
                          <h6>
                            Must be at least 16 years old!
                          </h6>
                        </div>
                        <div class="col">
                          <input type="date" class="form-control" id="modal-email" placeholder="date" name="" />
                        </div>

                      </div>

                      <!-- gender -->

                      <!-- policy agreement -->
                      <div>



                      </div>


                    </div>

                    <div class="modal-footer">
                      <button class="btn btn-primary">Signup</button>
                    </div>




                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>