<?php
session_start();
require("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAPPY FOUNDATION</title>
    <link rel="stylesheet" href="../Home/home.css"></link>
    <link rel="stylesheet" href="../Home/gradient.css"></link>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha512-YK1Mz9UiZmhbFzXgMbl3bO49wZ78Xj3h8TtTBLFHEAEjUBxsEZdXd8Il5RWbhPOyB653bGQDNVGGny2mORZq4A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha512-iqRdf+0KMFmNZgdsA+8bz1MWIIXQBUCavPYVSVI83fcVfH2Y2PnNooLN04bgTNoUiQvIzidiIHJAcIP/uAEV9w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha512-3P8rXCuGJdNZOnUx/03c1jOTnMn3rP63nBip5gOP2qmUh5YAdVAvFZ1E+QLZZbC1rtMrQb+mah3AfYW11RUrWA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

    <style>
      a:link { text-decoration: none; }
      a:visited { text-decoration: none; color: black;}
      a:hover { text-decoration: none;}
      a:active { text-decoration: none;}
    </style>

    <script>
      let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });

    </script>
    

</head>
<body >
<nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light shadow-lg" id="app-navbar">
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
      </div> -->
      <div class=" collapse navbar-collapse" id="navbarNav">
        <!-- <div class="ms-auto d-none d-lg-block">
          <div class="input-group">
            <span class="border-warning input-group-text bg-warning text-white"><i
                class="fa-solid fa-magnifying-glass"></i></span>
            <input type="text" class="form-control border-warning" style="color:#7a7a7a">
            <button type="button" class="btn btn-warning text-white">Search</button>
          </div>
        </div> -->

        <ul class="navbar-nav ms-auto ">
          <li class="nav-item ">
            <a class="nav-link mx-2 text-uppercase" name="home"  href="../Home/home.php" style="color:green">HOME</a>
          </li>
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
            <a class="nav-link mx-2 text-uppercase" href="../Home/contact.php" style="color:green">CONTACT</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto ">
          <!-- <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase active" href="../Home/sign-up.php" style="color:black"><i class="bi bi-door-open-fill me-1 " ></i>SIGN-UP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase active" href="../Home/sign-in.php" style="color:black"><i class="fa-solid fa-circle-user me-1  "></i>SIGN-IN</a>
          </li> -->
          <!-- <button type="button" class=" mx-2 btn btn-outline-warning " ><a href="../Home/sign-up.php">SIGN-UP</a></button>
          <button type="botton" class=" mx-2 btn btn-outline-light " ><a href="../Home/sign-in.php" style="color:blue">SIGN-IN</a></button> -->
          <button type="button" class=" mx-2 btn btn-outline-warning " ><a href="../Home/Donate.php">DONATE</a></button>
         </ul>
      </div>
      <?php
  if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
  {
    echo"
          <div class='dropdown'>
              <button class='btn btn-outline-success' style='box-shadow: 2px 8px 12px rgba(62, 21, 167, 0.307);' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
              <i class='bi bi-person-circle'></i><strong> &nbsp;$_SESSION[uname]</strong> 
              </button>
              <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
                <li><a class='dropdown-item' href='#'>PROFILE</a></li>
                <li><a class='dropdown-item'  href='#' data-bs-toggle='modal' data-bs-target='#exampleModal'>LOGOUT</a></li>
              </ul>
          </div>";

  }
?>
<!-- data-bs-toggle='modal' data-bs-target='#exampleModal' -->
</nav>
 <link rel="stylesheet" href="../Home/home.css"></link>
  <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure want to logout?</h5>
      </div>
      <div class="modal-body">
        <i class="bi bi-exclamation-octagon" style="color: red"></i> Do you really wish to leave and logout? All unsaved changes will be lost!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-block" onclick="window.location.href='../Home/sign-up.php'">Yes, I am sure!</button>
        <button type="button" class="btn btn-outline-success btn-block" data-bs-dismiss="modal">No, I am not sure!</button>
      </div>
    </div>
  </div>
</div>


  
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../Assets/Images/pic7.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2 style="font-weight: bold; color: white; text-shadow: 2px 2px green;">WELCOME TO NGO</h2>
          <p style="font-weight: bold; color: black; background-color:yellow ">A NON-PROFIT ORGANIZATION THAT OPERATES INDEPENDENTLY OF ANY 
GOVERMENT.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../Assets/Images/pic9.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h2 style="font-weight: bold; color: white; text-shadow: 2px 2px green;">WELCOME TO NGO</h2>
          <p style="font-weight: bold; color: black; background-color:yellow ">A NON-PROFIT ORGANIZATION THAT OPERATES INDEPENDENTLY OF ANY 
GOVERMENT.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../Assets/Images/pic10.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h2 style="font-weight: bold; color: white; text-shadow: 2px 2px green;">WELCOME TO NGO</h2>
          <p style="font-weight: bold; color: black; background-color:yellow ">A NON-PROFIT ORGANIZATION THAT OPERATES INDEPENDENTLY OF ANY 
GOVERMENT.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </div>
 
  <!-- <div class="container">

  <h1 style="color:black;">Gallery</h1>
  <h1 style="width: 64px;height: 4px;border-radius: 2px;background: #0033ff"></h1>

</div>
<br><br>
  <div class="container">
	<div class="row">
		<div class="row">
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="../Assets/Images/1.jpg" data-image-id="" data-toggle="modal" data-title=""
                   
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="../Assets/Images/1.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="../Assets/Images/pic4.jpg" data-image-id="" data-toggle="modal" data-title=""
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="../Assets/Images/pic4.jpg"
                         alt="Another alt text">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="../Assets/Images/3.jpg" data-image-id="" data-toggle="modal" data-title=""
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="../Assets/Images/3.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="../Assets/Images/4.jpg" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="../Assets/Images/4.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="../Assets/Images/pic6.jpg" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="../Assets/Images/pic6.jpg"
                         alt="Another alt text">
                </a>
            </div>



            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="../Assets/Images/6.jpg" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="../Assets/Images/6.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="../Assets/Images/7.jpg" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="../Assets/Images/7.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="../Assets/Images/8.jpg" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="../Assets/Images/8.jpg"
                         alt="Another alt text">
                </a>
            </div>



            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="../Assets/Images/9.jpg" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="../Assets/Images/9.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="../Assets/Images/10.jpg" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="../Assets/Images/10.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="../Assets/Images/11.jpg" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="../Assets/Images/11.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="../Assets/Images/12.jpg" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="../Assets/Images/12.jpg"
                         alt="Another alt text">
                </a>
            </div>
        </div>


        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div> -->


<div class="container">

  <h1 style="color:black;">Event Us</h1>
  <h1 style="width: 64px;height: 4px;border-radius: 2px;background: #0033ff"></h1>

</div>



<div class="container">
<div class="row">
  <div class="col-12 col-md-6 col-lg-4">
        <div class="cause-wrap">
        <figure class="m-0">
        <img src="./admin/uploads/eventphoto/IMG_1620494403.jpeg" alt="">
        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
        <!-- <a href="#" class="btn gradient-bg mr-2">Donate Now</a> -->
        </div>
        </figure>
        <div class="cause-content-wrap">
        <header class="entry-header d-flex flex-wrap align-items-center">
        <h3 class="entry-title w-100 m-0"> <img src="../Assets/Images/fitness.jpeg" style="height:300px;width:450px; padding:10px"></img><br>"Fitness and Save Life Camp" on World Health Day</h3>
        </header>
        <div class="entry-content">
        <p class="m-0">Arranging a very successful "Fitness and Save Life Camp" on World Health Day on 7th April 2017 at the Kamla Vihar Joggers park, Kandivli west in association with Datri group and Kavita Nalwa Yobics.</p>
        </div>
        </div>
        </div>
        </div><div class="col-12 col-md-6 col-lg-4">
        <div class="cause-wrap">
        <figure class="m-0">
        <img src="./admin/uploads/eventphoto/IMG_1620493822.jpeg" alt="">
        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
        <!-- <a href="#" class="btn gradient-bg mr-2">Donate Now</a> -->
        </div>
        </figure>
        <div class="cause-content-wrap">
        <header class="entry-header d-flex flex-wrap align-items-center">
        <h3 class="entry-title w-100 m-0"><img src="../Assets/Images/installation.jpeg" style="height:300px;width:450px; padding:10px"></img>Installation of donation boxes</h3>
        </header>
        <div class="entry-content">
        <p class="m-0">Installation of donation boxes at Hotel Sarovar (Kandivli west) and Hotel Daffodils (Borivli west) in the presence of Hon. Secretary of Mumbai Cricket Association , Managing Committee- BCCI and IPL governing concern Dr. P.V. Shetty and Dr. Harish Shetty and Satish Shetty.</p>
        </div>
        </div>
        </div>
        </div><div class="col-12 col-md-6 col-lg-4">
        <div class="cause-wrap">
        <figure class="m-0">
        <img src="./admin/uploads/eventphoto/IMG_1620493624.jpeg" alt="">
        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
        <!-- <a href="#" class="btn gradient-bg mr-2">Donate Now</a> -->
        </div>
        </figure>
        <div class="cause-content-wrap">
        <header class="entry-header d-flex flex-wrap align-items-center">
        <h3 class="entry-title w-100 m-0"><img src ="../Assets/Images/successfully.jpeg" style="height:300px;width:450px; padding:10px"></img>Successfully organised Income Tax awareness programme by HAPPY FOUNDATION Team</h3>
        </header>
        <div class="entry-content">
        <p class="m-0">Successfully organised a programme for Income Tax Awareness with Mr. Neil Phillip (Jt. commissioner of Income Tax)</p>
        </div>
        </div>
        </div>
        </div>

</div>
</div>
<br><br>

<?php
  if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
  {
    

  }
?>



<!-- Footer -->
<footer class="site-footer" style="background-image: url('../Assets/Images/about1.jpg'); background-repeat: no-repeat; background-size: cover;rgb(0,0,0) Hex #000000  opacity:40% ;">
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
<li><a href="../Home/products.php ">Product</a></li>
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
<li><i class="fa fa-phone"></i><span>+91 7016704395</span></li>
<li><i class="fa fa-envelope"></i><span><a href="mailto:happy_fndyfoundation.info@gmail.com">happy_fndyfoundation.info@gmail.com</a></span></li>
<li><i class="fa fa-map-marker"></i><span><a href="https://www.google.com/maps/place/happy_fndy+foundation/@19.210425,72.829867,16z/data=!4m12!1m6!3m5!1s0x0:0xfb49413865d2550f!2shappy_fndy+foundation!8m2!3d19.2104246!4d72.8298668!3m4!1s0x0:0xfb49413865d2550f!8m2!3d19.2104246!4d72.8298668?hl=en">SHOP NO. G-17, ROCK ENCLAVE, BEHIND S.B.I BANK, HINDUSTAN NAKA, KANDIVALI West, Mumbai, Maharashtra 400067, India</a></span></li></ul>
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
<p class="m-0" Style="text-align:center;">
HAPPY FOUNDATION Copyright © All rights reserved </p>
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