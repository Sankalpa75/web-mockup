<?php
$page = "";
$page = (isset($_GET['id']))?$_GET['id'] : 'home';
if(!in_array($page, array('home','about','service','our_project','test','gallery','contact','contact_send','testimonial','residential','commercial','exterior','interior','submit','contact_send2','message_send','404')))
{
  include("404.php");
  exit;
}
?>


<!DOCTYPE html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="author" content="">
  <link rel="icon" href="favc.png" type="image/x-icon" />

  <title>
      Simply Intreeging.
  </title>

  

  <meta name="description" content="<?php
  switch ($page) {
    default:
    echo "";
    break;
    case 'home':
    echo "blueplanet homes";
    break;
    case 'about':
    echo "blueplanet homes";
    break;
    case 'service':
    echo "blueplanet homes";
    break;
    case 'our_project':
    echo "blueplanet homes";
    break;
    case 'testimonial':
    echo "blueplanet homes";
    break;
    case 'contact':
    echo "blueplanet homes";
    break;



  }
  ?>"/>


  <!-- Style Sheet -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css" />


  <!-- Menu -->
  <link rel="stylesheet" href="css/styles.css">
  <script type="text/javascript" src="js/script.js"></script>
  <!-- Social Share -->
  <link rel="stylesheet" type="text/css" href="css/jquery.floating-social-share.css" />
  <script type="text/javascript" src="js/jquery.floating-social-share.js"></script>

  <!-- Script -->
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
  <!-- <script type="text/javascript" src="js/jquery.floating-social-share.js"></script>-->
  <script src="js/menu.js"></script>

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css">
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.css">
  <link rel="stylesheet" href="css/owl.transitions.css">



  <!-- Gallery -->
  <script type='text/javascript' src='js/unitegallery.min.js'></script>
  <link rel='stylesheet' href='css/unite-gallery.css' type='text/css' />
  <script type='text/javascript' src='js/ug-theme-tilesgrid.js'></script> 


  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


</head>
</script>
<?php
$phone="0406 683 438";
$address="Hampton Park VIC";
$email="info@masterspaintingservices.com.au";
?>
<body>

 <div data-spy="affix" data-offset-top="50">
  <div class="header">
     <img src="images/header.png" class="img-responsive center-block">
    <div class="container">
      
      <div class="row">


        <?php /*?>
        <div class="col-md-4">
          <a href="./home"><img src="images/logo1.png" class="img-responsive center"></a>
        </div>
        <div class="col-md-8 reset">
          <a href="callto:0406683438" style="text-decoration:none;"><h2 class="taptocall center-block visible-xs text-center"><i class="fa fa-phone" aria-hidden="true"></i> Tap To Call</h2></a>
          <div id='cssmenu' class="pull-left">
            <ul>
              <li class="<?php if($page=='home'){echo 'active';} ?>"><a href='./home'>HOME</a></li>

              <li class="<?php if($page=='about'){echo 'active';} ?>"><a href='./about'>ABOUT US</a></li>

              <li class="<?php if($page=='service'){echo 'active';} ?>"><a href='#'>SERVICE </a>
                <ul>
                  <li class='has-sub'><a href='./residential'>Residential Painting Service</a></li>
                  <li class='has-sub'><a href='./commercial'>Commercial Painting Service</a></li>
                  <li class='has-sub'><a href='./exterior'>Exterior Painting Service</a></li>
                  <li class='has-sub'><a href='./interior'>Interior Painting Service</a></li>

                </ul>
              </li>
              <li class="<?php if($page=='testimonial'){echo 'active';} ?>"><a href='./testimonial'>TESTIMONIALS </a></li>
              <li class="<?php if($page=='our_project'){echo 'active';} ?>"><a href='./our_project'>PROJECTS </a></li>
              <li class="<?php if($page=='contact'){echo 'active';} ?>"><a href='./contact'>CONTACT US</a></li>
            </ul>
          </div>
        </div><?php */?>
      </div>
    </div>
  </div>
</div>
  <script type="text/javascript">
    $(document).ready(function() {

      $("#owl-demo1").owlCarousel({
       navigation : true,
       navigationText : ["",""],
      autoPlay: 3000, //Set AutoPlay to 3 seconds
      items : 1,
      itemsDesktop : [1199,1],
      itemsDesktopSmall : [979,1],
      stopOnHover : true,


    });
      $("#owl-demo2").owlCarousel({
       navigation : true,

       navigationText : ["<",">"],
      autoPlay: 3000, //Set AutoPlay to 3 seconds
      items : 2,
      itemsDesktop : [1199,2],
      itemsDesktopSmall : [979,1],
      stopOnHover : true,


    });
      $("#owl-demo3").owlCarousel({
       navigation : true,
       navigationText : ["",""],
      autoPlay: 3000, //Set AutoPlay to 3 seconds
      items : 3,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,2],
      stopOnHover : true,


    });

    });
  </script>
  <script src="js/owl.carousel.min.js"></script>

  <script type="text/javascript">
   $(document).ready(function() {
    $("#owl-demo").owlCarousel({

      navigation : true,
      slideSpeed : 600,
      paginationSpeed : 500,
      singleItem : true,
      autoPlay:true,
      stopOnHover : true,
      navigationText : ["<",">"],
      transitionStyle : "fade",

      /*
      transitionStyle : "fade"
      transitionStyle : "backSlide"
      transitionStyle : "goDown"
      transitionStyle : "fadeUp"
      */

    });
  });


</script>
