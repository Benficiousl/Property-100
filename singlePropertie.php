<?php

$api_url = 'https://go.revolutioncrm.com/api/v1/properties/active/?format=json';

$client_id = 'prop100@revolutioncrm.com';
$client_secret = '58;Jd(NL?FR54^2,';

$context = stream_context_create(array(
    'http' => array(
        'header' => "Authorization: Basic " . base64_encode("$client_id:$client_secret"),
    ),
));
$chooseBanner = "";

// https://console.developers.google.com/google/maps-apis/apis/maps-backend.googleapis.com/credential

$result = file_get_contents($api_url, false, $context);
$id = $_GET["id"];



$data = json_decode($result,true) or die(json_last_error());

// $data = array_filter($data, function ($item) use (&$data) {
//     echo "Filtering key ", key($data), '<br>', PHP_EOL;
//     next($data);
//     return false;
// });

foreach ($data as $name => $info ) {
    if ($info['id'] != $id) {
        
       
         unset($data[$name]);
       
        
    }
}

foreach ($data as $property) {

$myimages = $property["images"][1]["download_url"];
$p = $property['title'];
$property_type =  $property['property_type'];
$description = $property['description'];
$id = $property['id'];
$sale_type = $property["sale_type"];
$erf_size = $property["erf_size"];
$price = $property["price"];
$bedrooms = $property["bedrooms"];
$bathrooms = $property["bathrooms"];
$garages = $property["garages"];
$street_number = $property["street_number"];
$street_name = $property["street_name"];
$complex_name = $property["complex_name"];
$latitude = $property["latitude"];
$longitude = $property["longitude"];
$suburb = $property["suburb"];
$city = $property["city"];
$province = $property["province"];
setlocale(LC_MONETARY, 'en_US');
$money = number_format($price,2);


$swimming_pool =  $property["swimming_pool"];
$floor_area =  $property["floor_area"];
$security_estate =  $property["security_estate"];
$braai =  $property["braai"];
$levy =  $property["levy"];
$rates_taxes =  $property["rates_taxes"];
$garden_flat =  $property["garden_flat"];
$air_conditioning =  $property["air_conditioning"];
$exterior_finish =  $property["exterior_finish"];
$roof_type =  $property["roof_type"];
$security =  $property["security"];
$living_areas =  $property["living_areas"];
$parking =  $property["parking"];

$latitude = $property["latitude"];
$longitude = $property["longitude"]; 


if($property["agent"]["first_name"] == "Adri") {$agentId = 2;}
if($property["agent"]["first_name"] == "Alice" ) {$agentId = 3;}
if($property["agent"]["first_name"] == "Carrol" ) {$agentId = 5;}
if($property["agent"]["first_name"] == "Zanele" ) {$agentId = 6;}
if($property["agent"]["first_name"] == "Darian" ) {$agentId = 7;}
if($property["agent"]["first_name"] == "Debbie" ) {$agentId = 8; }
if($property["agent"]["first_name"] == "Ilse" ) {$agentId = 9;}
if($property["agent"]["first_name"] == "Monique" ) {$agentId = 12;} 
if($property["agent"]["first_name"] == "Ruan" ) {$agentId = 13;}
if($property["agent"]["first_name"] == "Sall" ) {$agentId = 14;}
if($property["agent"]["first_name"] == "Yasser" ) {$agentId = 15;}

if($property["agent"]["first_name"] == "Chantel" ) {$agentId = 36;}
if($property["agent"]["first_name"] == "Ben" ) {$agentId = 34;}
if($property["agent"]["first_name"] == "Arina" ) {$agentId = 33;}
if($property["agent"]["first_name"] == "Khathu" ) {$agentId = 32;}
if($property["agent"]["first_name"] == "Kobus" ) {$agentId = 31;}
if($property["agent"]["first_name"] == "Miemie" ) {$agentId = 30;}
if($property["agent"]["first_name"] == "Riaan" ) {$agentId = 29;}

if($property["agent"]["first_name"] == "Trudene" ) {$agentId = 28;}
if($property["agent"]["first_name"] == "Helen" ) {$agentId = 27;}
if($property["agent"]["first_name"] == "Ulogi" ) {$agentId = 26;}
if($property["agent"]["first_name"] == "Suretta" ) {$agentId = 25;}
if($property["agent"]["first_name"] == "Frances" ) {$agentId = 24;}
if($property["agent"]["first_name"] == "Melissa" ) {$agentId = 23;}
if($property["agent"]["first_name"] == "Magda" ) {$agentId = 22;}
if($property["agent"]["first_name"] == "Rene" ) {$agentId = 21;}
if($property["agent"]["first_name"] == "Jan" ) {$agentId = 20;}

if($property["agent"]["first_name"] == "Corne'" ) {$agentId = 19;}
if($property["agent"]["first_name"] == "Lucille" ) {$agentId = 18;}
if($property["agent"]["first_name"] == "Annie" ) {$agentId = 17;}
if($property["agent"]["first_name"] == "Michelle" ) {$agentId = 16;}



 //$con = mysqli_connect('localhost','bpslabco_propert', 'IcanCount123','bpslabco_property100')or die(mysqli_error);
 // $con = mysqli_connect('localhost','prop100', '1Hz6CLaj','prop100_data')or die(mysqli_error);
 $con = mysqli_connect('localhost', 'root', '','property100');
 //retrieve our data from POST
// $username = mysqli_real_escape_string($db,$_POST['username']);
//$id = mysqli_real_escape_string($con,$_POST['id']);
// $id = 4;
if($property["sale_type"] == "Rent")
{
  
  $chooseBanner = "Property-100_To-Let---Header.png";

}
else{$chooseBanner = "Property-100_For-Sale-Header.png";}

if (isset($agentId))
{
  $sqlcon = "SELECT * FROM agentprofile WHERE id ='$agentId'";
  $res_c = mysqli_query($con , $sqlcon);

  if (mysqli_num_rows($res_c) > 0)
      {
         
          if($row = mysqli_fetch_array($res_c))
          {
               
             $logedin = json_encode($row);
             
          }
      }
      $obj = json_decode($logedin, true);
  
    // $property["agent"]["first_name"] == "Yasser" ? $agentId = 15 : $agentId = 15;
     $agentProfile = $obj['agentProfile'];
}

}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Property-100|Property Single Properties</title>

  <!-- Bootstrap core CSS -->
  <link href="https://pennypixels.pennymacusa.com/css/1_4_1/pp.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,600" rel="stylesheet">

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
    rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
    rel='stylesheet' type='text/css'>


    <link href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css'
    rel='stylesheet' type='text/css'>
     <link rel="shortcut icon" href="img/logo/Favicon.ico" type="image/x-icon" />
    

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">


  <link href="css/fluid-gallery.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/creative.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="engine1/style.css" />
  <script type="text/javascript" src="engine1/jquery.js"></script>

  



 <style>

    /* map start here */




    

  .img-fluid {
    max-width: 70%;
    height: auto;
}


.dropdown {
    position: absolute;
    display: inline-block;
}



.dropdown-content {
     display: none; 
    position: relative;
    background-color: #f9f9f9;
    min-width: 160px;
    padding: 0px 26px;
    color: blue;
    cursor: pointer;
    z-index: 999999999999999999999999999999;
}

.drop
{
 width:90px;
 height:50px;
  
}

.dropdown:hover .dropdown-content {
    display: block !important;
}


 .navbar-shrink  .dropdown:hover .dropdown-content {
    display: block !important;
    z-index: 999999999999999999999999999999;
}

    .tz-gallery .lightbox :after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    background-color: rgba(0, 0, 0, 0.4)!important;
    transition: 0.4s;
}


    a {
    color: #8cd509;
    -webkit-transition: all .2s;
    -moz-transition: all .2s;
    transition: all .2s;
}

    .logo img {
      width: 100% !important;
        margin-top: 0px !important;
    }

    .custom-select {
      border-radius: 100px;
      height: 80%;
    }

    .navbar-collapse {
      background: #495056;
    }

    .portfolio-box .portfolio-box-caption {
      position: absolute;
      bottom: 0;
      display: block;
      width: 100%;
      height: 100%;
      text-align: center;
      opacity: 1;
      color: #fff;
      background: rgba(1, 1, 1, .6);
      -webkit-transition: all .2s;
      -moz-transition: all .2s;
      transition: all .2s;
    }
    .fa-envelope-open:before {
    content: "\f2b6";
    font-size: 0.8em;
}
    .hr-xl {
      max-width: 30%;
      border-width: 1px;
      border-color: #8cd509;
    }

  .lightbox #textImage {
    z-index: 100;
    position: absolute;
    color: white;
    font-size: 16px;
    font-weight: bold;
    left:10px;
    top: 10px;
  }

    .lightbox #SubtextImage {
    z-index: 100;
    position: absolute;
    color: white;
    font-size: 12px;
   
    left:10px;
    top: 28px;
  }

.btnbg
{
  background-color: #8cd509 !important;
  color: #fff;
}


#mainNav.navbar-shrink .navbar-nav>li.nav-item>a.nav-link, #mainNav.navbar-shrink .navbar-nav>li.nav-item>a.nav-link:focus {
   
    text-decoration: none;
}

#mainNav.navbar-shrink li.nav-item>a.nav-link:Hover {
    color: #212529;
    text-decoration: UnderLine;
}

.btnbg:hover
{
  background-color: #8cd509 !important;
  color: #fff;
  column-fill: balance;
}
    .portfolio-box .portfolio-box-caption .portfolio-box-caption-content {
      position: absolute;
      top: 37PX;
      width: 100%;
      transform: translateY(-50%);
      text-align: LEFT;
    }
    
    .yBg {
      background-color: #8cd509 !important;
      padding-top: 0rem;
    }

    .blueImage
    {
      background-image:url(../img/HomepageAssets/Banner1.png);background-position:center center;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;
      position:relative;
    }

    .sectionPaddingTop {
      padding-top: 0rem;
      padding-bottom: 2rem;
    }

#mainNav .navbar-brand {
  font-weight: 700;
  text-transform: uppercase;
  width: 320px !important;
  color: #8cd509;
  font-family: 'Open Sans','Helvetica Neue',Arial,sans-serif;
}


    @media (max-width: 992px) {
    .navbar-expand-lg .navbar-collapse
     {
        background-color:  #84888f;
      }

   .navbar-toggler:not(:disabled):not(.disabled) 
   {
     cursor: pointer;
      margin-top: -40px; 
    }
       article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section 
       {
        display: block !important;
       }
     

  #mainNav .navbar-nav>li.nav-item>a.nav-link, #mainNav .navbar-nav>li.nav-item>a.nav-link:focus {
    font-size: .9rem;
    font-weight: 700;
    text-transform: uppercase;
  
    height: 40PX;
    Text-decoration:underline;
}
.navbar-nav
{
  margin-bottom: 20px;

}

       .logo img
       {
          width: 50% !important;
          margin-top: -35px !important;
      }

      #mainNav.navbar-shrink .logo img {
      width :50% !important;
      margin-bottom: 0px !important;
}
}

.blueHeader
  {
    color: #034ea1;
    font-size: 20px;
    font-weight: bold;
  }


 @media(max-width: 768px)  {
      article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {
      display: block !important;
    }

#parallelogramhead {
    width: 49%;
    height: 100px;
    margin: -48px 0 0 -50px;
    -webkit-transform: skew(-30deg);
    -moz-transform: skew(-30deg);
    -o-transform: skew(-0deg);
    background: #8cd509;
    overflow: hidden;
    position: sticky;
    z-index: -300px;
}

.priceperMHeader {
    margin-top: -59px;
    color: #ffffff;
    font-size: 0px;
    text-transform: uppercase;
    margin-right: -1px !important;
}


.unskewHeader {
    -webkit-transform: skew(43deg);
    -moz-transform: skew(43deg);
    -o-transform: skew(0deg);
    margin-left: 71px;
    margin-top: 18px;
    font-size: 25px;
    font-weight: bold;
    text-transform: uppercase;
    color: #fff;
}
.unskew {
    -webkit-transform: skew(43deg);
    -moz-transform: skew(43deg);
    -o-transform: skew(0deg);
    margin-left: 46px;
    margin-top: 6px;
    font-size: 20px;
    text-transform: uppercase;
    color: #fff;
}

#mainNav .navbar-brand {
    font-weight: 700;
    text-transform: uppercase;
    width: 230px !important;
    color: #8cd509;
    font-family: 'Open Sans','Helvetica Neue',Arial,sans-serif;
}

 .logo img {
        width: 80% !important;
        margin-top: 0px !important;
}
.navbar-expand-lg .navbar-collapse {
    background-color:  #84888f !important;
  }

  a.logo{
    width:15px !important;
    margin-top: -15px;
  }


.navbar-toggler:not(:disabled):not(.disabled) {
    cursor: pointer;
    margin-top: -9px;
}

#mainNav .navbar-nav>li.nav-item>a.nav-link, #mainNav .navbar-nav>li.nav-item>a.nav-link:focus {
    font-size: .9rem;
    font-weight: 700;
    text-transform: uppercase;
    height: 40PX;
}

.navbar-nav {
    margin-top: 0em;
}
  

    #mainNav.navbar-shrink .logo img {
    width :80% !important;
    -webkit-transition: width 0.5s;
    padding-top: 8px !important;
  }

 #CustomLink
  {
    font-size: .9rem !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    color: #212529;
  }

  .topRange
{
  color: #000;
  position: absolute;
}
}



/* Modal */

#gallery {
  padding-top: 40px;
}
@media screen and (min-width: 991px) {
  #gallery {
    padding: 60px 30px 0 30px;
  }
}
.img-wrapper {
  position: relative;
  margin-top: 0px;
}
.img-wrapper img {
  width: 100%;
  height: 220px;
  object-fit: cover;
}
.img-overlay {
  background: rgba(0, 0, 0, 0.7);
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 0;
}
.img-overlay i {
  color: #fff;
  font-size: 3em;
}
#overlay {
  background: rgba(0, 0, 0, 0.7);
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 999;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
#overlay img {
  margin: 0;
  width: 100%;
  height: auto;
  object-fit: contain;
  padding: 5%;
}
@media screen and (min-width: 768px) {
  #overlay img {
    width: 60%;
  }
}
@media screen and (min-width: 1200px) {
  #overlay img {
    width: 60%;
  }
}
#nextButton {
  color: #fff;
  font-size: 2em;
  transition: opacity 0.0s;
  display:none;
}
#nextButton:hover {
  opacity: 0.7;
}
@media screen and (min-width: 768px) {
  #nextButton {
    font-size: 3em;
  }
}
#prevButton {
  color: #fff;
  font-size: 2em;
  transition: opacity 0.0s;
  display:none;
}
#prevButton:hover {
  opacity: 0.7;
}
@media screen and (min-width: 768px) {
  #prevButton {
    font-size: 3em;
  }
}
#exitButton {
  color: #fff;
  font-size: 2em;
  transition: opacity 0.8s;
  position: absolute;
  top: 15px;
  right: 15px;
}
#exitButton:hover {
  opacity: 0.7;
}
@media screen and (min-width: 768px) {
  #exitButton {
    font-size: 3em;
  }
}

.tz-gallery1 {
    padding: 2px !important;
}
</style>

</head>
<body id="Home">
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">

<div class="container">

<div class="row">

  <a class="logo navbar-brand js-scroll-triggency.net/property100r" href="#Home">



    <img src="img/logo/Header logo.png">

    

  </a>

</div>

  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"

    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

  </button>

  <div class="collapse navbar-collapse" id="navbarResponsive">

    <ul class="navbar-nav ml-auto">

      <li class="nav-item">

        <a class="nav-link js-scroll-trigger" href="index.php"><span>Home</span></a>

      </li>

      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="ForSale.php"><span>For Sale</span></a>
      </li>

      <li class="nav-item">

        <a class="nav-link js-scroll-trigger" href="ForRent.php"><span>TO LET</span></a>

      </li>

      <li class="nav-item">

        <a class="nav-link js-scroll-trigger" href="About_Us.php"><span>About Us</span></a>

      </li>
      <li class="nav-item">

        <a class="nav-link js-scroll-trigger" href="agents.php"><span>Agents</span></a>

      </li>

      <li class="nav-item">

        <a class="nav-link js-scroll-trigger" href="contactUs.php"><span>Contact Us</span></a>

      </li>

      <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#"><i class="fa fa-instagram color-instagram"></i></a></li>

      <li class="nav-item"><a class="nav-link js-scroll-trigger" href="https://linkedin.com/company/myproperty-100/"><i class="fa fa-linkedin color-linkedin"></i></a></li> 

      <li class="nav-item"><a class="nav-link js-scroll-trigger" href="https://www.facebook.com/Property-100-GreenstoneBedfordview-166232024213536"><i class="fa fa-facebook color-facebook"></i></a></li>

    </ul>

  </div>

</div>

</nav>



  
  
  <header class=" text-center text-white d-flex">

<div id="wowslider-container1">

<div class="ws_images"><ul>

  <li><img src='<?php echo "img/".$chooseBanner?>' alt="Header banner 3" title="" id="wows1_0"/></li>
   </ul></div>

</div>	

</header>


  <section style="padding: 3rem 0;" class="card-smallHead" >
  <div class='container-fluid'>
      <div id='parallelogramhead'>
        <div class='image'><p class='unskewHeader'>FOR <?php echo $sale_type?></p></div>
        
      </div>
      <p class='card-author text-right priceperMHeader'>Price<span style ="font-size: 25px;"><b> R <?php echo $money?> </b></span><span style ="font-size: 12px;">EXCL VAT</span> </p>
    </div>

</div>
     
  </section>

  <section class="sectionPaddingTop" id="services">
  <div class ="spaceSmall"></div>
      <div class="container">
          <div class="row">
            <div class="col-lg-4 text-left">
              <div class="row">
                <div class="col-lg-12">
                  <h3 class="text-left section-heading" style="padding-bottom: 0em;">PROPERTY INFORMATION</h3>
                  <span class="text-left" style="font-size:16px; color:#000"><i style="font-size:16px; color:#8cd509"class="fa fa-map-marker"></i><b><?php echo " ". $complex_name?></b></span><br />
                  <span class="text-left" style="font-size:16px; color:#000; padding-left:12px;"><?php echo $suburb .", ". $city.", ". $province?></span>
              </div>
              </div>
              </div>
               <div class="col-lg-2">
                  <div class="row">
                    <div class="col-lg-5 col-md-5 col-5 text-center">
                    <img style="width:80px;" src="img/single_pageAssets/icon1.png" alt="Bridge">
                    </div>
                    <div class="col-lg-7 col-md-7 col-7 text-center">
                      <h3 class="mb-3 blackP"><b>Property_Size</b></h3>
                      <p class="text-muted mb-0 blackPSize"><?php echo "+-". $erf_size." sqm"?> </p>
                    </div>
               </div>
               </div>

               <div class="col-lg-2">
                  <div class="row">
                    <div class="col-lg-5 col-md-5 col-5 text-center">
                    <img style="width:80px;" src="img/single_pageAssets/icon3.png" alt="Bridge">
                    </div>
                    <div class="col-lg-7 col-md-7 col-7 text-center">
                      <h3 class="mb-3 blackP"><b>Bedrooms</b></h3>
                      <p class="text-muted mb-0  blackPSize"><?php echo $bedrooms?> </p>
                    </div>
               </div>
               </div>

               <div class="col-lg-2">
                  <div class="row">
                    <div class="col-lg-5 col-md-5 col-5 text-center">
                    <img style="width:80px;" src="img/single_pageAssets/icon2.png" alt="Bridge">
                    </div>
                    <div class="col-lg-7 col-md-7 col-7 text-center">
                      <h3 class="mb-3 blackP"><b>Bathrooms</b></h3>
                      <p class="text-muted mb-0 blackPSize"><?php echo $bathrooms?> </p>
                    </div>
               </div>
               </div>
                  
              

               <div class="col-lg-2">
                  <div class="row">
                    <div class="col-lg-5 col-md-5 col-5 text-center">
                    <img style="width:80px;" src="img/single_pageAssets/icon4.png" alt="Bridge">
                    </div>
                    <div class="col-lg-7 col-md-7 col-7 text-center">
                      <h3 class="mb-3 blackP"><b>Garages</b></h3>
                      <p class="text-muted mb-0 blackPSize"><?php echo $garages?> </p>
                    </div>
               </div>
    
               </div>
              </div>
  <hr style="color:#8cd509; width:100% !important;"></hr>  
</div>
</div>

          
    
</section>


 <section class="sectionPaddingTop" id="services">
      <div class="container">
          <div class="row">
            <div class="col-lg-6 text-left">
            <div class="tz-gallery1">
          <div class="row">
          <?php

$i = 0;









rsort($data);

foreach ($data as $property) {




  if (++$i > 9) break;

  //echo $property["images"][0]["download_url"];

  $myimages = $property["images"][0]["download_url"];

  $price = $property['price'];

  $title = $property['title'];
  

  setlocale(LC_MONETARY, 'en_US');

   $money = number_format($price,2);

  $property_type = $property['property_type'];

  $property_city = $property['city'];

  $description = $property['description'];

  $id = $property['id'];

  $sale_type = $property['sale_type'];

  print($mypanel = "
  
  
  ");
  } ?>
            
      <div class="col-sm-6 col-md-6 col-lg-4">
      <div class="img-wrapper">
              <a href=<?php if (isset($property["images"][0]["download_url"])){echo $property["images"][0]["download_url"];}?>> <img src= <?php  if (isset($property["images"][0]["download_url"])){echo $property["images"][0]["download_url"];} ?> class="img-responsive"></a>
                <div class="img-overlay">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                </div>
          </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-4">
      <div class="img-wrapper">
              <a href=<?php if (isset($property["images"][1]["download_url"])){echo $property["images"][1]["download_url"];}?>> <img src= <?php  if (isset($property["images"][1]["download_url"])){echo $property["images"][1]["download_url"];} ?> class="img-responsive"></a>
                <div class="img-overlay">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                </div>
          </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-4">
      <div class="img-wrapper">
              <a href=<?php if (isset($property["images"][2]["download_url"])){echo $property["images"][2]["download_url"];}?>> <img src= <?php  if (isset($property["images"][2]["download_url"])){echo $property["images"][2]["download_url"];} ?> class="img-responsive"></a>
                <div class="img-overlay">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                </div>
          </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-4">
      <div class="img-wrapper">
              <a href=<?php if (isset($property["images"][3]["download_url"])){echo $property["images"][3]["download_url"];}?>> <img src= <?php  if (isset($property["images"][3]["download_url"])){echo $property["images"][3]["download_url"];} ?> class="img-responsive"></a>
                <div class="img-overlay">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                </div>
          </div>
      </div>
       <div class="col-sm-6 col-md-6 col-lg-4">
      <div class="img-wrapper">
              <a href=<?php if (isset($property["images"][4]["download_url"])){echo $property["images"][4]["download_url"];}?>> <img src= <?php  if (isset($property["images"][4]["download_url"])){echo $property["images"][4]["download_url"];} ?> class="img-responsive"></a>
                <div class="img-overlay">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                </div>
          </div>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-4">
      <div class="img-wrapper">
              <a href=<?php if (isset($property["images"][5]["download_url"])){echo $property["images"][5]["download_url"];} ?>> <img src= <?php if (isset($property["images"][5]["download_url"])){echo $property["images"][5]["download_url"];} ?> class="img-responsive"></a>
                <div class="img-overlay">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                </div>
          </div>
      </div>

          </div>
          </div>

          </div>
          <div class="col-lg-6 text-left">
          <div class="tz-gallery1">
          <div id="map" style="width:100%;height:445px;"></div></div>
          </div>
          </div>
          </div>
    
</section>

 <section class="sectionPaddingTop" id="services">
      <div class="container">
          <div class="row">
            <div class="col-lg-12 text-left">
              <div class="row">
                <div class="col-lg-12">
                  <span class="text-left blueHeader">Property Description </span>
                </div>
               
              </div>
              <div class="container">
                  <div class="row">
                      <br />
                        <p style= "font-size: 20px;"> <?php echo $description?> </p>
                        
                      </div>
                      
                      
          </div>
          </div>
    </section>

<section class="sectionPaddingTop" id="services">
      <div class="container">
          <div class="row">
            <div class="col-lg-12 text-left">
              <div class="row">
                <div class="col-lg-12">
                  <span class="text-left blueHeader">Property Description 1</span>
                  <hr style="color:#8cd509; width:100% !important;"></hr>  
                </div>
               
               </div>
              <div class="container " id="gallery">
                  <div class="row">
                    <div class="col-lg-4 col-md-12 text-center">
                      <!-- <h3 class="mb-3 whiteP">PROPERTIIES CITIES</h3> -->
                      <div class="row" id="image-gallery">
                        <div class="col-lg-1 col-2">
                            <i style ="font-size: 13px;" class="fa fa-2x fa-circle text-primary mb-3"></i>
                        </div>
                        <div class="col-lg-10 col-10" >
                        <p class="text-muted text-left"><?php echo "Swimming_pool: ". $swimming_pool?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-2">
                            <i style ="font-size: 13px;" class="fa fa-2x fa-circle text-primary mb-3"></i>
                        </div>
                        <div class="col-lg-10 col-10" >
                        <p class="text-muted text-left"><?php echo "Floor_area: ". $floor_area?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-2">
                            <i style ="font-size: 13px;" class="fa fa-2x fa-circle text-primary mb-3"></i>
                        </div>
                        <div class="col-lg-10 col-10" >
                        <p class="text-muted text-left"><?php echo "Security_estate: ". $security_estate?></p>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-12 text-center">
                      <!-- <h3 class="mb-3 whiteP">PROPERTIIES CITIES</h3> -->
                      <div class="row">
                        <div class="col-lg-1 col-2">
                            <i style ="font-size: 13px;" class="fa fa-2x fa-circle text-primary mb-3"></i>
                        </div>
                        <div class="col-lg-10 col-10" >
                        <p class="text-muted text-left"><?php echo "Braai: ". $braai?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-2">
                            <i style ="font-size: 13px;" class="fa fa-2x fa-circle text-primary mb-3"></i>
                        </div>
                        <div class="col-lg-10 col-10" >
                        <p class="text-muted text-left"><?php echo "Levy: ". $levy?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-2">
                            <i style ="font-size: 13px;" class="fa fa-2x fa-circle text-primary mb-3"></i>
                        </div>
                        <div class="col-lg-10 col-10" >
                        <p class="text-muted text-left"><?php echo "Rates_taxes: ". $rates_taxes?></p>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-12 text-center">
                      <!-- <h3 class="mb-3 whiteP">PROPERTIIES CITIES</h3> -->
                      <div class="row">
                        <div class="col-lg-1 col-2">
                            <i style ="font-size: 13px;" class="fa fa-2x fa-circle text-primary mb-3"></i>
                        </div>
                        <div class="col-lg-10 col-10" >
                        <p class="text-muted text-left"><?php echo "Garden_flat: ". $garden_flat?></p>
                        </div>
                    </div>
                    </div>



                  </div>
                      
                      
          </div>
    
</section>
<section class="sectionPaddingTop" id="services">
      <div class="container">
          <div class="row">
            <div class="col-lg-12 text-left">
              <div class="row">
                <div class="col-lg-12">
                  <span class="text-left blueHeader">Property Description 2</span>
                  <hr style="color:#8cd509; width:100% !important;"></hr>  
                </div>
               
               </div>
              <div class="container">
                  <div class="row">
                    <div class="col-lg-4 col-md-12 text-center">
                      <!-- <h3 class="mb-3 whiteP">PROPERTIIES CITIES</h3> -->
                      <div class="row">
                        <div class="col-lg-1 col-2">
                            <i style ="font-size: 13px;" class="fa fa-2x fa-circle text-primary mb-3"></i>
                        </div>
                        <div class="col-lg-10 col-10" >
                        <p class="text-muted text-left"><?php echo "Air Conditioning: ". $air_conditioning?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-2">
                            <i style ="font-size: 13px;" class="fa fa-2x fa-circle text-primary mb-3"></i>
                        </div>
                        <div class="col-lg-10 col-10" >
                        <p class="text-muted text-left"><?php echo "Exterior Finish: ". $exterior_finish?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-2">
                            <i style ="font-size: 13px;" class="fa fa-2x fa-circle text-primary mb-3"></i>
                        </div>
                        <div class="col-lg-10 col-10" >
                        <p class="text-muted text-left"><?php echo "Roof type: ". $roof_type?></p>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-12 text-center">
                      <!-- <h3 class="mb-3 whiteP">PROPERTIIES CITIES</h3> -->
                      <div class="row">
                        <div class="col-lg-1 col-2">
                            <i style ="font-size: 13px;" class="fa fa-2x fa-circle text-primary mb-3"></i>
                        </div>
                        <div class="col-lg-10 col-10" >
                        <p class="text-muted text-left"><?php echo "Security: ". $security?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-2">
                            <i style ="font-size: 13px;" class="fa fa-2x fa-circle text-primary mb-3"></i>
                        </div>
                        <div class="col-lg-10 col-10" >
                        <p class="text-muted text-left"><?php echo "Living_areas: ". $living_areas?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-2">
                            <i style ="font-size: 13px;" class="fa fa-2x fa-circle text-primary mb-3"></i>
                        </div>
                        <div class="col-lg-10 col-10" >
                        <p class="text-muted text-left"><?php echo "Parking: ". $parking?></p>
                        </div>
                    </div>
                  </div>
                        <div class="mycontainer">
                          
                          <br /><br />
                              <div class="Spacer"></div>
    
                              </div>
                          <div style="clear:both;"><br /></div>
                        </div>
  
          </div>
          </div>
    
</section>

<section class="sectionPaddingTop" id="services">
      <div class="container">
          <div class="row">
            <div class="col-lg-12 text-left">
              <div class="row">
                <div class="col-lg-12">
                  <span class="text-left blueHeader">Property Description</span>
                  <hr style="color:#8cd509; width:100% !important;"></hr>  
                </div>
               
               </div>
              <div class="container">
                  <div class="row">
                    <div class="col-lg-4 col-md-12 text-center">
                      <!-- <h3 class="mb-3 whiteP">PROPERTIIES CITIES</h3> -->
                      <div class="row">
                        <div class="col-lg-6 col-6">
                        <img style="width:180px;" src="img/portfolio/agents/<?php 
                        if (isset($agentId))
                        {echo $property["agent"]["first_name"];}else{echo"Default_Icon";}?>.png" alt=<?php echo $property["agent"]["first_name"]?>>
                        </div>
                        <div class="col-lg-6 col-6" >
                          <br />
                        <p class="text-muted text-left bluetext"><?php echo  $property["agent"]["full_name"]?> </p>
                        <p class="text-muted text-left"> <?php echo  $property["agent"]["email"]?> </p>
                        <p class="text-muted text-left"><?php echo  $property["agent"]["contact_number"]?></p>
                        <a href= "contactagent.php?id=<?php echo $agentId?>" class="btn btntransparent  btn-3 btn-lg" style=" margin-left: -59px;
                                        background-color: #034ea1 !important;
                                        border: solid !important;
                                        border-color: #034ea1 !important;
                                        font-size:16px;
                                        color: #fff; width:80%;font-weight: 100;
                                    " href="#about">See my Profile</a>            
                       

                        </div>
                    </div>
                
                  </div>

                
                  <div class="col-lg-8 col-md-12 text-center">
                      <!-- <h3 class="mb-3 whiteP">PROPERTIIES CITIES</h3> -->
                      <br />
                      <div class="row">
                        <div class="col-lg-12 col-12" >
                        <p class="text-muted text-left"><?php if (isset($agentId)){echo  $agentProfile;} ?></p>
                        </div>
                    </div>

          </div>
          </div>
    
</section>




<section class="yBg paddingAdja " style="padding: 0em 0em 1.3em!important;">

<div class="container">

<form>

<div class="spaceSmall"></div>

<div class="row">

<div class="col-sm-3 ">



<p class="newLetter"><i class="fa fa-envelope"></i> OUR NEWSLETTER</p>

</div>

<div class="col-sm-6 ">

 <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" style="border-radius: 38px; height: 50px;" required>

</div>

<div class="col-sm-3 ournews">

<input id="example_id" class="btn btntransparent  btn-3 btn-lg" style="

                 background-color: #034ea1 !important;

                 border: solid !important;

                 border-color: #034ea1 !important;

                 color: #fff; width:100%;font-weight: 700;

                  border-radius: 120px;

             " type="Submit" value="Submit">           

</div>

</div>

</form>

</div>

</section>

  



  <section class="bg-dark paddingAdjafooter text-white">

<div class="container text-center">


    <div class="row">

         <div class="col-sm-4">
         <div class="row">
         <div class="col-lg-6 col-md-6 col-xs-6 col-6 text-center">

            <div class="footerLogo js-scroll-trigger">

                <img style=" width: 150px !important;" src="img/logo/Logo.png">
           </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-6  col-6 text-center">
            <div class="col-lg-6">
            <!-- <div class="spaceSmall"></div> -->
            <a target ="blank" href="https://www.facebook.com/Property-100-GreenstoneBedfordview-166232024213536"><img style="width:50px;" src="img/single_pageAssets/facebook icon.png" alt="Bridge"></a><p></p>
            <a target ="blank" href="https://linkedin.com/company/myproperty-100/"><img style="width:50px;" src="img/single_pageAssets/Linkedin.png" alt="Bridge"></a><p></p>
            <a target ="blank" href="https://www.facebook.com/Property-100-GreenstoneBedfordview-166232024213536"><img style="width:50px;" src="img/single_pageAssets/instagram icon.png" alt="Bridge"></a><p></p>

            </div>
        </div>
        </div>

         </div>
<div class="col-sm-3" >
         
<h3 class="mb-3 whiteP"><b>SITE MAP</b></h3>                    

<div class="row">

<div class="spaceVSmall"></div>

<div class="col-md-6 text-left">

<a href="index.php" class="text-muted text-left sitemap sitemap whiteText footerFont" ><b style="color:#8cd509;">HOME</b> </a>

</div>
<div   class="col-md-6 col-6 text-left">  

<a  href="ForRent.php" class="text-muted  sitemap whiteText footerFont"><b>TO LET</b></a>

</div>
<div  class="col-md-6 col-6 text-left">

<a  href="ForSale.php" class="text-muted whiteText sitemap text-left footerFont"><b>FOR SALE</b> </a>

</div>
<div class="col-md-6 col-6 text-left">  

<a  href="About_Us.php" class="text-muted text-left sitemap whiteText footerFont"><b>ABOUT US</b></a>

</div>
<div class="col-md-6 col-6 text-left">

<a  href="agents.php" class="text-muted text-left sitemap whiteText footerFont"><b>AGENTS</b> </a>

</div>
<div class="col-md-6 col-6 text-left">  

<a href="contactUs.php" class="text-muted text-left sitemap whiteText footerFont"><b>CONTACT US</b></a>

</div>







</div>
</div>
<div class="col-sm-5">
<h3 class="mb-3 whiteP">GET IN TOUCH</h3>                    

<div class="row">

<div class="spaceVSmall"></div>

<div class="col-lg-1 col-2" style="height: 50px;">

<img style="width:35px;" src="img/single_pageAssets/call icon.png" alt="Bridge">

</div>



<div class="col-lg-5 col-10">

<p class="text-muted whiteText footerFont">PRETORIA - CENTURION<br />083 497 3359 <br />michelle@property-100.co.za</p>

</div>



<div class="col-lg-1 col-2 " style="height: 50px;">



<img style="width:35px;" src="img/single_pageAssets/call icon.png" alt="Bridge">

</div>

<div class="col-lg-5 col-10">  

<p class="text-muted whiteText footerFont">HARTBEESPOORT<br />083 453 6266<br />isabel@property-100.co.za </p>

</div>

<div class="col-lg-1 col-2" style="height: 50px;">



<img style="width:35px;" src="img/single_pageAssets/call icon.png" alt="Bridge">

</div>

<div class="col-lg-5 col-10">

<p class="text-muted whiteText footerFont">JHB EASTERN SUBURBS<br />083 236 4743<br>adri@property-100.co.za</p>

</div>



<div class="col-lg-1 col-2" style="height: 50px;">



<img style="width:35px;" src="img/single_pageAssets/call icon.png" alt="Bridge">

</div>

<div class="col-lg-5 col-10">

<p class="text-muted whiteText footerFont">JHB NORTHERN SUBURBS<br />079 236 9184<br>ilse@property-100.co.za </p>

</div>







</div>





</div>
<!-- ///////////////////////////////////////////////////////////////////// -->

</div>
            
        
      </div>

</div>

</section>
<footer class="footer">

<br />

  <div class="row text-center">

       <div class="col-md-6" style="color: #fff">
         <strong>© </strong><a href="http://www.aolc.co.za"><strong>AOLC On-line (Pty) Ltd</strong></a> @ 2018 | Designed by <strong><a href="http://www.bluepixelstudio.co.za">Blue Pixel Studio</a></strong> a division of AOLC
          <!-- <p style="color: #fff">&copy; 2017 PROPERTY-100 BY <a  style="color: #fff" href="http://www.bluepixelstudio.co.za" target="blank">BLUE PIXEL STUDIO</a>  -->
      </div>

      <div class="col-md-2 whiteTxt">

          <a  style="color: #fff" href="http://www.property-100.co.za/" target="blank"></a>  

      </div>

      <div class="col-md-3">

          <div class="row">

          <div class="col-md-4 col-2 text-right">

              <i class="fa fa-1x fa-arrow-up text-primary mb-3 sr-icons"></i>

          </div>

              <div class="col-md-4 col-4 text-left">

                  <a class="js-scroll-trigger" href="#Home">

                  <p style="color: #fff">BACK TO TOP </p> 

                  </a>

              </div>

          </div>

      </div>

  </div>

</footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js"></script>

  

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/scrollreveal/scrollreveal.min.js"></script>

  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/dist/bootstrap-slider.js"></script>
  <script src="js/dist/bootstrap-slider.min.js"></script>




  <script src="js/creative.min.js"></script>
  <script src="js/silder.js"></script> 

 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script type="text/javascript"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.min.js"></script>
 
 <script type="text/javascript" src="engine1/wowslider.js"></script>
 <script type="text/javascript" src="engine1/script.js"></script>

 <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script> -->
 <script>
$( ".img-wrapper" ).hover(
  function() {
    $(this).find(".img-overlay").animate({opacity: 1}, 600);
  }, function() {
    $(this).find(".img-overlay").animate({opacity: 0}, 600);
  }
);

// Lightbox
var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $prevButton = $('<div id="prevButton"><i class="fa fa-chevron-left"></i></div>');
var $nextButton = $('<div id="nextButton"><i class="fa fa-chevron-right"></i></div>');
var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');

// Add overlay
$overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
$("#gallery").append($overlay);

// Hide overlay on default
$overlay.hide();

// When an image is clicked
$(".img-overlay").click(function(event) {
  // Prevents default behavior
  event.preventDefault();
  // Adds href attribute to variable
  var imageLocation = $(this).prev().attr("href");
  // Add the image src to $image
  $image.attr("src", imageLocation);
  // Fade in the overlay
  $overlay.fadeIn("slow");
});

// When the overlay is clicked
$overlay.click(function() {
  // Fade out the overlay
  $(this).fadeOut("slow");
});

// When next button is clicked
$nextButton.click(function(event) {
  // Hide the current image
  $("#overlay img").hide();
  // Overlay image location
  var $currentImgSrc = $("#overlay img").attr("src");
  // Image with matching location of the overlay image
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  // Finds the next image
  var $nextImg = $($currentImg.closest(".image").next().find("img"));
  // All of the images in the gallery
  var $images = $("#image-gallery img");
  // If there is a next image
  if ($nextImg.length > 0) { 
    // Fade in the next image
    $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  } else {
    // Otherwise fade in the first image
    $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
  }
  // Prevents overlay from being hidden
  event.stopPropagation();
});

// When previous button is clicked
$prevButton.click(function(event) {
  // Hide the current image
  $("#overlay img").hide();
  // Overlay image location
  var $currentImgSrc = $("#overlay img").attr("src");
  // Image with matching location of the overlay image
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  // Finds the next image
  var $nextImg = $($currentImg.closest(".image").prev().find("img"));
  // Fade in the next image
  $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  // Prevents overlay from being hidden
  event.stopPropagation();
});

// When the exit button is clicked
$exitButton.click(function() {
  // Fade out the overlay
  $("#overlay").fadeOut("slow");
});
</script>

<script>
        function myMap() {
        var myCenter = new google.maps.LatLng(<?php echo $latitude?>,<?php echo $longitude?>);
        var mapCanvas = document.getElementById("map");
        var mapOptions = {center: myCenter, zoom: 15};
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({position:myCenter});
        marker.setMap(map);
        }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJjC3rKtbh7N5r1Pe75qxKeSquxNS709M&callback=myMap"></script>




</body>

</html>