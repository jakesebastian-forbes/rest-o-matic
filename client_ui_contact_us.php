<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="bootstrap-5.2.2/css/bootstrap.min.css"/>
    <script src="https://kit.fontawesome.com/1c020da525.js" crossorigin="anonymous"></script> 
    
    <title>Contact Us</title>
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box
} 

body,
input,
textarea {
    font-family: "Poppins", sans-serif
}

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #fff;
  opacity: 1; /* Firefox */
}

.container {
    position: relative;
    width: 100%;
    min-height: 100vh;
    padding: 2rem;
    background-color: #fafafa;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center
}

.form {
    width: 100%;
    max-width: 820px;
    background-color: #fff;
    border-radius: 4px;
    box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    overflow: hidden;
    display: grid;
    grid-template-columns: repeat(2, 1fr)
}

.contact-info-form {
    background-color: black;
    position: relative
}

.circle {
    border-radius: 50%;
    background: linear-gradient(135deg, transparent 20%, #a7323254);
    position: absolute
}

.circle.one {
    width: 130px;
    height: 130px;
    top: 130px;
    right: -40px
}

.circle.two {
    width: 80px;
    height: 80px;
    top: 10px;
    right: 30px
}

.contact-info-form:before {
    content: "";
    position: absolute;
    width: 26px;
    height: 26px;
    background-color: black;
    transform: rotate(45deg);
    bottom: 66px;
    left: -13px
}

form {
    padding: 2.3rem 2.2rem;
    z-index: 10;
    overflow: hidden;
    position: relative
}

.title {
    color: #fff;
    font-weight: 500;
    font-size: 1.5rem;
    line-height: 1;
    margin-bottom: 0.7rem
}

.social-input-containers {
    position: relative;
    margin: 1rem 0
}

.input {
    width: 100%;
    outline: none;
    border: 2px solid #fafafa;
    background: none;
    padding: 0.6rem 1.2rem;
    color: #fff;
    font-weight: 500;
    font-size: 0.95rem;
    letter-spacing: 0.5px;
    border-radius: 4px;
    transition: 0.3s
}

textarea.input {
    padding: 0.8rem 1.2rem;
    min-height: 150px;
    border-radius: 4px;
    resize: none;
    overflow-y: auto
}

.social-input-containers label {
    position: absolute;
    top: 50%;
    left: 15px;
    transform: translateY(-50%);
    padding: 0 0.4rem;
    color: #fafafa;
    font-size: 0.9rem;
    font-weight: 400;
    pointer-events: none;
    z-index: 1000;
    transition: 0.5s
}

.social-input-containers.textarea label {
    top: 1rem;
    transform: translateY(0)
}

.btn {
    padding: 0.6rem 1.3rem;
    background-color: #fff;
    border: 2px solid #fafafa;
    font-size: 0.95rem;
    color: #1abc9c;
    line-height: 1;
    border-radius: 4px;
    outline: none;
    cursor: pointer;
    transition: 0.3s;
    margin: 0
}

.btn:hover {
    background-color: transparent;
    color: #fff
}

.social-input-containers span {
    position: absolute;
    top: 0;
    left: 25px;
    transform: translateY(-50%);
    font-size: 0.8rem;
    padding: 0 0.4rem;
    color: transparent;
    pointer-events: none;
    z-index: 500
}

.social-input-containers span:before,
.social-input-containers span:after {
    content: "";
    position: absolute;
    width: 10%;
    opacity: 0;
    transition: 0.3s;
    height: 5px;
    background-color: #FFA500;
    top: 50%;
    transform: translateY(-50%)
}

.social-input-containers span:before {
    left: 50%
}

.social-input-containers span:after {
    right: 50%
}

.social-input-containers.focus label {
    top: 0;
    transform: translateY(-50%);
    left: 25px;
    font-size: 0.8rem
}

.social-input-containers.focus span:before,
.social-input-containers.focus span:after {
    width: 50%;
    opacity: 1
}

.contact-info {
    padding: 2.3rem 2.2rem;
    position: relative
}

.contact-info .title {
    color: black
}

.text {
    color: #333;
    margin: 1.5rem 0 2rem 0
}

.social-information {
    display: flex;
    color: #555;
    margin: 0.7rem 0;
    align-items: center;
    font-size: 0.95rem
}

.icon {
    width: 28px;
    margin-right: 0.7rem
}

.social-media {
    padding: 2rem 0 0 0
}

.social-media p {
    color: #333
}

.social-icons {
    display: flex;
    margin-top: 0.5rem
}

.social-icons a {
    width: 35px;
    height: 35px;
    border-radius: 43px;
    background: linear-gradient(45deg, #FFA500, #FFA500);
    color: #fff;
    text-align: center;
    line-height: 35px;
    margin-right: 0.5rem;
    transition: 0.3s
}

.social-icons a:hover {
    transform: scale(1.05)
}

.contact-info:before {
    content: "";
    position: absolute;
    width: 110px;
    height: 100px;
    border: 22px solid #FFA500;
    border-radius: 50%;
    bottom: -77px;
    right: 50px;
    opacity: 0.3
}

.social-information i {
    font-size: 22px;
    margin-bottom: 23px;
    margin-right: 8px;
    color: #FFA500
}

.big-circle {
    position: absolute;
    width: 500px;
    height: 500px;
    border-radius: 50%;
    background: linear-gradient(to bottom, #d50000, #cb0b0b);
    bottom: 50%;
    right: 50%;
    transform: translate(-40%, 38%)
}

.big-circle:after {
    content: "";
    position: absolute;
    width: 360px;
    height: 360px;
    background-color: #fafafa;
    border-radius: 50%;
    top: calc(50% - 180px);
    left: calc(50% - 180px)
}

.square {
    position: absolute;
    height: 400px;
    top: 50%;
    left: 50%;
    transform: translate(181%, 11%);
    opacity: 0.2
}

@media (max-width: 850px) {
    .form {
        grid-template-columns: 1fr
    }

    .contact-info:before {
        bottom: initial;
        top: -75px;
        right: 65px;
        transform: scale(0.95)
    }

    .contact-info-form:before {
        top: -13px;
        left: initial;
        right: 70px
    }

    .square {
        transform: translate(140%, 43%);
        height: 350px
    }

    .big-circle {
        bottom: 75%;
        transform: scale(0.9) translate(-40%, 30%);
        right: 50%
    }

    .text {
        margin: 1rem 0 1.5rem 0
    }

    .social-media {
        padding: 1.5rem 0 0 0
    }
}

@media (max-width: 480px) {
    .container {
        padding: 1.5rem
    }

    .contact-info:before {
        display: none
    }

    .square,
    .big-circle {
        display: none
    }

    form,
    .contact-info {
        padding: 1.7rem 1.6rem
    }

    .text,
    .social-information,
    .social-media p {
        font-size: 0.8rem
    }

    .title {
        font-size: 1.15rem
    }

    .social-icons a {
        width: 30px;
        height: 30px;
        line-height: 30px
    }

    .icon {
        width: 23px
    }

    .input {
        padding: 0.45rem 1.2rem
    }

    .btn {
        padding: 0.45rem 1.2rem
    }
}
</style>
<body>
  <div class="container-fluid">
    <div class="row">
        <nav class="navbar mynavbar" style="width: 100vw; min-width: fit-content; max-height: 86px; background-color: black;">
            <div class="d-flex justify-content-start">
              <img src="images/icon/web_icon.png" class="px-3" alt="web_icon.png" style="max-height: 70px">
              <h1 class="myheading1" style="padding-top: 7px; color: white;">REST-O-MATIC</h1>
            </div>
        </nav>
    <div class="container">
        <div class="form">
            <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <p class="text"> You may contact us with the following details. </p>
                <div class="info">
                    <div class="social-information"> <i class="fa fa-map-marker"></i>
                        <p>F. Castro St., Brgy.10 Nasugbu, Batangas , Nasugbu, Philippines</p>
                    </div>
                    <div class="social-information"> <i class="fa fa-envelope-o"></i>
                        <p>idk@gmail.com</p>
                    </div>
                    <div class="social-information"> <i class="fa fa-mobile-phone"></i>
                        <p>(+63) 916 987 4623</p>
                    </div>
                </div>
                <div class="social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons"> <a href="#"> <i class="fa fa-facebook-f"></i> </a> <a href="#"> <i class="fa fa-twitter"></i> </a> <a href="#"> <i class="fa fa-instagram"></i> </a> <a href="#"> <i class="fa fa-linkedin"></i> </a> </div>
                </div>
            </div>
            <div class="contact-info-form"> <span class="circle one"></span> <span class="circle two"></span>
                <form action="#" onclick="return false;" autocomplete="off">
                    <h3 class="title">Contact us</h3>
                    <div class="social-input-containers"> <input type="text" name="name" class="input" placeholder="Name" /> </div>
                    <div class="social-input-containers"> <input type="email" name="email" class="input" placeholder="Email" />  </div>
                    <div class="social-input-containers"> <input type="tel" name="phone" class="input" placeholder="Phone" />  </div>
                    <div class="social-input-containers textarea"> <textarea name="message" class="input" placeholder="Message"></textarea> </div> <input type="submit" value="Send" class="btn btn-warning" style="border-radius: 24px;" />
                </form>
            </div>
        </div>
    </div>
  </div>
</body>
</html>