<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAPPY FOUNDATION</title>
    <link rel="stylesheet" href="../Home/home.css"></link>
    
    <link rel="icon" type="image/x-icon" href="../Assets/Logo/logo4.png"width =60px>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
    <style>
      a:link { text-decoration: none; }
      a:visited { text-decoration: none; color: black;}
      a:hover { text-decoration: none;}
      a:active { text-decoration: none;}
    </style>
    <script>
        $(function($) {
      $('[data-numeric]').payment('restrictNumeric');
      $('.cc-number').payment('formatCardNumber');
      $('.cc-exp').payment('formatCardExpiry');
      $('.cc-cvc').payment('formatCardCVC');
      $.fn.toggleInputError = function(erred) {
        this.parent('.form-group').toggleClass('has-error', erred);
        return this;
      };
      $('form').submit(function(e) {
        e.preventDefault();
        var cardType = $.payment.cardType($('.cc-number').val());
        $('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
        $('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
        $('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
        $('.cc-brand').text(cardType);
        $('.validation').removeClass('text-danger text-success');
        $('.validation').addClass($('.has-error').length ? 'text-danger' : 'text-success');
      });
    });
    </script>
    

</head>
<body>
<nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light shadow-sm">
      <a class="navbar-brand" href="#"><img src="../Assets/Logo/logo4.png" style="width:50px; height: 45px"></img> <strong>HAPPY FOUNDATION</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
        <div class="input-group">
          <span class="border-dark input-group-text bg-dark text-white"><i
              class="fa-solid fa-magnifying-glass"></i></span>
          <input type="text" class="form-control border-warning" style="color:#7a7a7a">
          <button class="btn btn-dark text-white">Search</button>
        </div>
      </div>
      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <div class="ms-auto d-none d-lg-block">
          <div class="input-group">
            <span class="border-warning input-group-text bg-warning text-white"><i
                class="fa-solid fa-magnifying-glass"></i></span>
            <input type="text" class="form-control border-warning" style="color:#7a7a7a">
            <button type="button" class="btn btn-warning text-white">Search</button>
          </div>
        </div> -->

        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="../Home/products.php" style="color:green">PRODUCT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="../Home/blood_donate.php" style="color:green">BLOOD DONATE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="../Home/event.php" style="color:green">EVENT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="../Home/about.php" style="color:green">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="../offer_page/offer.php" style="color:green">CONTACT</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto ">
          <!-- <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase active" href="../Home/sign-up.php" style="color:black"><i class="bi bi-door-open-fill me-1 " ></i>SIGN-UP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase active" href="../Home/sign-in.php" style="color:black"><i class="fa-solid fa-circle-user me-1  "></i>SIGN-IN</a>
          </li> -->
          <button type="button" class=" mx-2 btn btn-outline-warning " ><a href="../Home/sign-up.php">SIGN-UP</a></button>
          <button type="botton" class=" mx-2 btn btn-outline-light " ><a href="../Home/sign-in.php" style="color:blue">SIGN-IN</a></button>
          <button type="button" class=" mx-2 btn btn-outline-success " ><a href="../Home/Donate.php">DONATE</a></button>
         </ul>
      </div>
  
  </nav>

 <div class="padding">
        <div class="row">
            <div class="container-fluid d-flex justify-content-center">
                <div class="col-sm-8 col-md-6">
                    <div class="card">
                        <div class="card-header">

                        <div class="row">
                            <div class="col-md-6">
                                <span>CREDIT/DEBIT CARD PAYMENT</span>
                                
                            </div>

                            <div class="col-md-6 text-right" style="margin-top: -5px;">

                                  <img src="https://img.icons8.com/color/36/000000/visa.png">
                                  <img src="https://img.icons8.com/color/36/000000/mastercard.png">
                                  <img src="https://img.icons8.com/color/36/000000/amex.png">
                                           
                            </div>      

                        </div>    
  
                        </div>
                        <div class="card-body" style="height: 350px">
                            <div class="form-group">
                            <label for="cc-number" class="control-label">CARD NUMBER</label>
                            <input id="cc-number" type="tel" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="&bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull;" required>
                          </div>

                          <div class="row">

                            <div class="col-md-6">
                                 <div class="form-group">
                                    <label for="cc-exp" class="control-label">CARD EXPIRY</label>
                                    <input id="cc-exp" type="tel" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="&bull;&bull; / &bull;&bull;" required>
                                  </div>

                                
                            </div>

                             <div class="col-md-6">
                               <div class="form-group">
                                <label for="cc-cvc" class="control-label">CARD CVC</label>
                                <input id="cc-cvc" type="tel" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="&bull;&bull;&bull;&bull;" required>
                              </div>
                            </div>
                              
                          </div>

      
                          <div class="form-group">
                            <label for="numeric" class="control-label">CARD HOLDER NAME</label>
                            <input  type="text" class="input-lg form-control">
                          </div>

                           <div class="form-group">
                            
                            <input  value="MAKE PAYMENT" type="button" class="btn btn-success btn-lg form-control" style="font-size: .8rem;">
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
<!-- Footer -->
<footer class="site-footer">
<div class="footer-widgets">
<div class="container">
<div class="row">
<div class="col-md-5">
<div class="foot-about">



<h2><a class="foot-logo" href="../Home/home.php"><img src="../Assets/Logo/logo4.png" style="width:300px; height: 250px"class="nav-logo-footer" alt=""></a></h2>


</div>
</div>
<div class="col-md-4">
<h2>Useful Links</h2>
<ul>
<li><a href="../Home/home.php ">Home</a></li>
<li><a href="../Home/product.php ">Product</a></li>
<li><a href="../Home/blood_donate.php ">Blood Donate</a></li>
<li><a href="../Home/event.php">Events</a></li>
<li><a href="../Home/about.php">About Us</a></li>
<li><a href="../Home/contact.php">Contact Us</a></li>


</ul>
</div>
<!-- <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
<div class="foot-latest-news">
<h2>Latest News</h2>
<ul>
<li>
<h3><a href="#">A new cause to help</a></h3>
<div class="posted-date">MArch 12, 2018</div>
</li>
<li>
 <h3><a href="#">We love to help people</a></h3>
<div class="posted-date">MArch 12, 2018</div>
</li>
<li>
<h3><a href="#">The new ideas for helping</a></h3>
<div class="posted-date">MArch 12, 2018</div>
</li>
</ul>
</div>
</div> -->
<div class="col-md-3">
<div class="foot-contact">
<h2>Contact</h2>
<ul>
<li><i class="fa fa-phone"></i><span>+91 9322247452</span></li>
<li><i class="fa fa-envelope"></i><span><a href="mailto:happy_fndyfoundation.info@gmail.com">happy_fndyfoundation.info@gmail.com</a></span></li>
<li><i class="fa fa-map-marker"></i><span>Shop No. G-17, Rock Enclave,Behind S.B.I Bank,
Hindustan Naka, 400067 Kandivali (W)</span></li>
</ul>
</div>
<!-- <div class="subscribe-form">
<form class="d-flex flex-wrap align-items-center">
<input type="email" placeholder="Your email">
<input type="submit" value="send">
</form>
</div> -->
</div>
</div>
</div>
</div>
<div class="footer-bar">
<div class="container">
<div class="row">
<div class="col-12">
<p class="m-0">
Copyright © All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.mindscript.biz/" target="_blank" style="color:#3454ca; text-decoration: none;">MindScript</a>
</p>
</div>
</div>
</div>
</div>


</footer>
<script type="b570dba6a0cc2360fee3abe1-text/javascript" src='js/jquery.js'></script>
<script type="b570dba6a0cc2360fee3abe1-text/javascript" src='js/jquery.collapsible.min.js'></script>
<script type="b570dba6a0cc2360fee3abe1-text/javascript" src='js/swiper.min.js'></script>
<script type="b570dba6a0cc2360fee3abe1-text/javascript" src='js/jquery.countdown.min.js'></script>
<script type="b570dba6a0cc2360fee3abe1-text/javascript" src='js/circle-progress.min.js'></script>
<script type="b570dba6a0cc2360fee3abe1-text/javascript" src='js/jquery.countTo.min.js'></script>
<script type="b570dba6a0cc2360fee3abe1-text/javascript" src='js/jquery.barfiller.js'></script>
<script type="b570dba6a0cc2360fee3abe1-text/javascript" src='js/custom.js'></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="b570dba6a0cc2360fee3abe1-text/javascript"></script>
<script type="b570dba6a0cc2360fee3abe1-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="js/rocket-loader.min.js" data-cf-settings="b570dba6a0cc2360fee3abe1-|49" defer=""></script> 
</body>

</html>