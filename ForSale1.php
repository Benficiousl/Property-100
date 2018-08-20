<?php

$api_url = 'https://go.revolutioncrm.com/api/v1/properties/active/?format=json';

$client_id = 'prop100@revolutioncrm.com';
$client_secret = '58;Jd(NL?FR54^2,';

$context = stream_context_create(array(
  'http' => array(
    'header' => "Authorization: Basic " . base64_encode("$client_id:$client_secret"),
  ),
));

$result = file_get_contents($api_url, false, $context);

$data = json_decode($result, true) or die(json_last_error());

//foreach ($data as $property) {
//    // for each property in the API response, see if there is a corresponding listing in the local DB
//	print_r ($property = ["image_order"]);
//	//cho $property['image_order']."<br />";
//	
//}

foreach ($data as $property) {
    // for each property in the API response, see if there is a corresponding listing in the local DB
	//echo $property->images["title"];
	//echo $property["images"][0]["download_url"];


	//echo $property["images"][0]["download_url"];
  $myimages = $property["images"][1]["download_url"];
  $p = $property['title'];
  $description = $property['description'];
  $id = $property['id'];

  $mypanel = " <div id='$id' onClick='reply_click(this.id)' class='col-lg-3 col-md-4 col-sm-6 portfolio-item'>
          <div class='card h-100'>
            <a href='#'><img class='card-img-top' src='$myimages' alt=''></a>
            <div class='card-body'>
              <h4 class='card-title'>
                <a href='#'>$p</a>
              </h4>
              <p class='card-text'>$description</p>
            </div>
          </div>
        ";



        //echo $mypanel;
		
	//	echo "R ". $property['price']."<br />";
		//echo "Title: ". $property['title']."<br />";
	//	echo "Province: ". $property['province']."<br />";
		//echo "City: ".$property['city']."<br />";
	//	echo "Bedrooms: ".$property['bedrooms']."<br />";
	//	echo "Sale Type: ". $property['sale_type']."<br />";
		//echo "Description: ". $property['description']."<br />";


}

//$dump = var_dump($data);
//Print $dump["id"];
//$decoded = json_decode($result);
//print ($result) or die(json_last_error());
//echo $data->id;

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Property-100| For Sale</title>

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
    

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">


  <link href="css/fluid-gallery.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/creative.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="engine1/style.css" />
  <script type="text/javascript" src="engine1/jquery.js"></script>

  




  <style>

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




 @media(max-width: 768px) {
      article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {
      display: block !important;
    }


 .logo img {
        width: 50% !important;
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
    width :50% !important;
    -webkit-transition: width 0.5s;
    padding-top: -15px !important;
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


.card img {
    margin: 0 auto;
    border-radius: 5px;
    height: 290px !important;
}

  </style>

</head>
<body id="Home">

  <!-- Navigation -->
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
          <!-- <div class="drop">
          <li class=" nav-item dropdown ">
           <a  class="nav-link js-scroll-trigger"style="font-size: .9rem !important;font-weight: 700 !important;text-transform: uppercase !important;color: #ffffffcc;">For Sale </a>
            <div class="dropdown-content">
              <p class="nav-item dropdow" href="#">Hello World!</p>
              <p  class="nav-item dropdow" href="#">Hello World!</p>
            </div>
            
          </li>
          </div> -->

          <!-- <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#"><span>For Sale</span></a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="ForRent.php"><span>For Rent</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="ForSale.php"><span>For Sale</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="About_Us.php"><span>About Us</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="agents.php"><span>Agent</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contactUs.php"><span>Contact Us</span></a>
          </li>
        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#"><i class="fa fa-twitter color-twitter"></i></a></li> -->
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="https://www.facebook.com/Property-100-GreenstoneBedfordview-166232024213536"><i class="fa fa-facebook color-facebook"></i></a></li>
        <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#"><i class="fa fa-linkedin color-linkedin"></i></a></li> -->
              <!-- <li class="nav-item dropdown">
              <a href="#" class="nav-link js-scroll-trigger dropdown-toggle" data-toggle="dropdown">Dropdown<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Benfici</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
              </ul>
            </li> -->

        </ul>
      </div>
    </div>
  </nav>



  
  
 <header class="masthead1 text-center text-white d-flex">
    <div class="container my-auto">
    
    </div>
  </header>
<div id="about" ></div>
  <section style="padding: 3rem 0; background-color: #212121!important;" class="bg-primary" >
    <div class="container" >
          <div class="row">
      
            <div class=" col-md-12 col-lg-6 ">
              <h1 class="mb-4" style="color:#ffffff;">Discover your dream
                <span style="color: #8cd509"><b>Home</b></span>
              </h1>
             
            </div>

            <div class="col-md-12 col-lg-3 text-center ">
            
              <a class="btn btnbg btn-3  btn-lg js-scroll-trigger" style="
                       
                        border: solid !important;
                        border-color: #8cd509 !important;
                         width:80%; font-weight: 700;
                    " href="#about">Our Agents</a>
                    <br />
            </div>

            <div class="col-md-12 col-lg-3 text-center ">
             
              <a class="btn btntransparent  btn-3 btn-lg js-scroll-trigger" style="
                        background-color: #034ea1 !important;
                        border: solid !important;
                        border-color: #034ea1 !important;
                        color: #fff; width:80%; font-weight: 700;
                    " href="#about">Contact Us</a>
            </div>
          </div>

        </div>
     
  </section>

 
  <section id="services mx-auto" style="padding: 2rem; background-color: whitesmoke;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-4">
          <br />
          <select class="custom-select js-scroll-trigger" style="height: 70%;" >
            <option selected>Location</option>
            <option value="1">JHB Easter Suburbs</option>
            <option value="2">Pretoria </option>
            <option value="3">Centurion </option>
          </select>
        </div>
        <div class="col-md-12 col-lg-4 mx-auto">
          <br />
          <select class="custom-select js-scroll-trigger " style="height: 70%;">
            <option selected>Property Type </option>
            <option value="1">House</option>
            <option value="2">Apartment</option>
            <option value="3">Cluster</option>
            <option value="1">Duplex</option>
            <option value="2">Simplex</option>
            <option value="3">Town House</option>
            <option value="1">Flat</option>
            <option value="2">Bachelor Flat </option>
            <option value="3">Garden Cottage </option>
            <option value="1">Vacant Land/ Plott</option>
            <option value="2">Commercial Property </option>
            <option value="3">Industrial Property</option>
            
          </select>
        </div>
      
        <br/>

        <div class="col-md-12 col-lg-4">
        <div class="row">
          <div class="col-md-6">
          <br />
          <a class="btn btntransparent  btn-3 btn-lg" style="
                    background-color: #034ea1 !important;
                    border: solid !important;
                    border-color: #034ea1 !important;
                    color: #fff; width:100%; font-weight: 700;
                " href="#about">RENTAL</a>
        </div>
        <div class="col-md-6">
        
        <br /> 
          <a class="btn btntransparent  btn-3 btn-lg" style="
                    background-color: #034ea1 !important;
                    border: solid !important;
                    border-color: #034ea1 !important;
                    color: #fff; width:100%;font-weight: 700;
                " href="#about">CONTACT</a>
        </div>
        </div>
        </div>
        <br />
        <div class="col-md-12 col-lg-4 mx-auto">
          <br />
          <select class="custom-select js-scroll-trigger" style="height: 70%;">
            <option selected>Bedrooms</option>
            <option value="1">1 Bedrooms</option>
            <option value="2">2 Bedrooms</option>
            <option value="3">3 Bedrooms</option>
            <option value="4">4 Bedrooms</option>
            <option value="5">5+ Bedrooms</option>
          </select>
        </div>

        <div class="col-md-12 col-lg-4">
          <br />
          <select class="custom-select js-scroll-trigger" style="height: 70%;">
            <option selected>Bathrooms</option>
            <option value="1">1 Bathrooms</option>
            <option value="2">2 Bathrooms</option>
            <option value="3">3 Bathrooms</option>
            <option value="4">4 Bathrooms</option>
            <option value="5">5+ Bathrooms</option>
          </select>
        </div>
        <div class="col-md-12 col-lg-4">
          <br />
          <a class="btn btntransparent  btn-3 btn-lg" style="
                    background-color: #034ea1 !important;
                    border: solid !important;
                    border-color: #034ea1 !important;
                    color: #fff; width:100%;font-weight: 700;
                " href="#about">Search Property</a>
        </div>

        <div class="col-md-12 col-lg-4">
          <br />
          <a class="btn btntransparent  btn-3 btn-lg js-scroll-trigger" style="
                    background-color: #8cd509 !important;
                    border: solid !important;
                    border-color: #8cd509 !important;
                    color: #fff; width:100%; font-weight: 700;
                " href="#about">Clear fields</a>
        </div>

        <div class="col-md-12 col-lg-4 mx-auto">
          <br />
          <br />
          <span class ="topRange" Style ="position:absolute;margin-top:-30px;margin-left:9px">Price</span>
          <div class="row js-scroll-trigger">
            <div class="col-sm-12 ">
              <div id="slider-range1"></div>
            </div>
          </div>
         
          <div class="row slider-labels">
            <div class="col-xs-6 col-lg-6  caption">
              <strong>Min:</strong>
              <span id="slider-range-value11"></span>
            </div>
            <div class="col-xs-6 col-md-6 col-lg-6  text-right caption">
              <strong>Max:</strong>
              <span id="slider-range-value21"></span>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12 ">
              <form>
                <input type="hidden" name="min-value" value="">
                <input type="hidden" name="max-value" value="">
              </form>
            </div>
          </div>

        </div>

        <div class="col-md-12  col-lg-4 mx-auto">
          <br />
          <br />
          <span class ="topRange" Style ="position:absolute;margin-top:-30px;margin-left:9px">Area</span>
          <div class="row">
            <div class="col-sm-12">
              <div id="slider-range"></div>
            </div>
          </div>
          <div class="row slider-labels">
            <div class="col-xs-6 col-lg-6  caption">
              <strong>Min:</strong>
              <span id="slider-range-value1"></span>
            </div>
            <div class="col-xs-6  col-lg-6  text-right caption">
              <strong>Max:</strong>
              <span id="slider-range-value2"></span>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <form>
                <input type="hidden" name="min-value" value="">
                <input type="hidden" name="max-value" value="">
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section class="sectionPaddingTop" id="services">
      <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <div class="row">
                <div class="col-lg-12">
                  <i class="fa fa-4x fa-angle-up text-primary mb-3 text-center"></i>
                  <h2 class="text-center section-heading" style="padding-bottom: 0em;">ABOUT THE COMPANY</h2>
                  <span class="text-center">OUR COMPANY PROFILE</span>
                   <div class="spaceSmall">
                </div>
              </div>
              <div class="container">
                  <div class="row">
            <?php
                $i = 0;
                rsort($data);



                foreach ($data as $name => $info ) {
                  if ($info['sale_type'] != "Sale") {
                      
                     
                       unset($data[$name]);
                     
                      
                  }
              }
          
          
         



                foreach ($data as $property) {
                  if (++$i > 9) break;
                  //echo $property["images"][0]["download_url"];
                  $myimages = $property["images"][1]["download_url"];
                  $price = $property['price'];
                  $title = $property['title'];
                  setlocale(LC_MONETARY, 'en_US');
                  $money = number_format($price,2);
                  

                $date_modified = $property['date_created'];

                  $property_type = $property['property_type'];
                  $property_city = $property['city'];
                  $description = $property['description'];
                  $id = $property['id'];
                  $sale_type = $property['sale_type'];
                  if($title==null)
                  {
                    $title ="N/A";
                  }

                  print($mypanel = "<div class='col-sm-12 col-md-4' id='$id' onClick='reply_click(this.id)'>
                          <div class='card'>
                              <img class='card-img' src='$myimages' alt='header' />
                              <div class='card-info'>
                                <br/>
                                <div class='card-icon propertyTitle '>$property_type</div>
                                  <h4 class='card-title text-left'>$title</h4>
                                  <div class='row'>
                                      <div class='col-lg-1 col-md-1 text-center'>
                                          <i class='fa fa-1x fa-map-marker text-primary mb-3 sr-icons'></i>
                                        </div>
                                      <p class='card-author text-left'>$property_city</p>
                                    
                                  </div>
                              
                                  </div>
                              <div class='card-small'>
                                  <div class='container'>
                                      <div id='parallelogram'>
                                        <div class='image'><p class='unskew'>For $sale_type</p></div>
                                        
                                      </div>
                                      <p class='card-author text-right priceperM'>Price  <span><b> R $money </b></span> </p>
                                    </div>
                              </div>
                          </div>
                          </div>
                      
                        
              ");


                }

            // Print(array_search(40489, array_column($data, 'Gauteng')));

                ?>
              
              <!-- control arrows -->

          </div>

          </div>
          </div>
    
</section>

  <section class="sectionPaddingTop"  id="popularCat" style="background-color:whitesmoke;">
    <div class="container">
    </div>




</div>
</div>




    
  
<!-- <div class="service-box mt-5 mx-auto">
            <div class="row no-gutters">
              <div class="col-lg-2 col-md-2  text-center">
                <i class="fa fa-4x fa-envelope text-primary mb-3 textleft"></i>
              </div>
              <div class=" col-lg-10 col-md-10 col-10  col-xs-offset-9  text-center">
                <p></p>
                <h2 class="whiteonly">OUR NEWSLETTER</h2>
              </div>
            </div>
            </div> -->


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

  




  <section class="bg-dark text-white">
      <div class="container text-center">
      
          <div class="row">
              <div class="col-lg-2 col-md-2 col-xs-2 col-6 text-center">
                  <a class="footerLogo js-scroll-trigger" href="#page-top">
                      <img style=" width: 200px !important;" src="img/logo/Logo.png">
                 </a>
              </div>

              <div class="col-lg-2 col-md-2 col-xs-2  col-2 text-center">
                  <div class="col-lg-2">
                  <div class="spaceSmall"></div>
                  <a href="#facebook"><img style="width:50px;" src="img/single_pageAssets/facebook icon.png" alt="Bridge"></a>
                 
                  
                  </div>
                  <!-- <div class="spaceVSmall"></div>
                  <div class="col-lg-2">
                  <a href="#facebook"><img style="width:50px;" src="img/single_pageAssets/twitter icon.png  " alt="Bridge"></a>
                    </div>
                    <div class="spaceVSmall"></div>
                    <div class="col-lg-2">
                   
                    <a href="#facebook"> <img style="width:50px;" src="img/single_pageAssets/instagram icon.png" alt="Bridge"></a>
      
                 </div> -->
              </div>
                <div class="col-lg-5 col-md-6 text-center">
                    <h3 class="mb-3 whiteP">GET IN TOUCH</h3>                    
                    <div class="row">
                        <div class="spaceVSmall"></div>
                        <div class="col-lg-1 col-2" style="height: 50px;">
                        <img style="width:35px;" src="img/single_pageAssets/call icon.png" alt="Bridge">
                        </div>
                      
                        <div class="col-lg-5 col-10">
                        <p class="text-muted whiteText footerFont">CENTURION<br />087 652 7970 <br />adri@property-100.co.za</p>
                        </div>
                       

                         <div class="col-lg-1 col-2 " style="height: 50px;">
                        
                        <img style="width:35px;" src="img/single_pageAssets/call icon.png" alt="Bridge">
                        </div>
                        <div class="col-lg-5 col-10">  
                        <p class="text-muted whiteText footerFont">JHB NORTHERN SUBURBS<br />065 206 8040<br />@property-100.co.za </p>
                        </div>
                        <div class="col-lg-1 col-2" style="height: 50px;">
                        
                        <img style="width:35px;" src="img/single_pageAssets/call icon.png" alt="Bridge">
                        </div>
                        <div class="col-lg-5 col-10">
                        <p class="text-muted whiteText footerFont">JHB EASTERN SUBURBS<br />087 652 7970<br>ilse@property-100.co.za  </p>
                        </div>

                        <div class="col-lg-1 col-2" style="height: 50px;">
                        
                        <img style="width:35px;" src="img/single_pageAssets/call icon.png" alt="Bridge">
                        </div>
                        <div class="col-lg-5 col-10">
                        <p class="text-muted whiteText footerFont">JHB EASTERN SUBURBS<br />087 652 7970<br>ilse@property-100.co.za  </p>
                        </div>
                    </div>
                   
                    
                   </div>
                
                  <div class="col-lg-3 col-md-12 text-center">
                      <h3 class="mb-3 whiteP">PROPERTIES CITIES</h3>
                      <div class="row">
                        <div class="col-lg-1 col-2" style="height:50px;">
                            <i style ="font-size: 13px;" class="fa fa-2x fa-circle text-primary mb-3"></i>
                        </div>
                        <div class="col-lg-10 col-10">
                        <p class="text-muted whiteText footerFont">PRETORIA</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-2">
                            <i style ="font-size: 13px;" class="fa fa-2x fa-circle text-primary mb-3"></i>
                        </div>
                        <div class="col-lg-10 col-10">
                        <p class="text-muted whiteText footerFont">CENTURION</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-2" style="height: 50px;">
                            <i style ="font-size: 13px;" class="fa fa-2x fa-circle text-primary mb-3"></i>
                        </div>
                        <div class="col-lg-10 col-10" >
                        <p class="text-muted whiteText footerFont">JHB NORTHERN SUBURBS</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-2" style="height:50px;">
                            <i style ="font-size: 13px;" class="fa fa-2x fa-circle text-primary mb-3"></i>
                        </div>
                        <div class="col-lg-10 col-10">
                        <p class="text-muted whiteText footerFont">JHB EASTERN SUBURBS</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-2" style="height:50px;">
                            <i style ="font-size: 13px;" class="fa fa-2x fa-circle text-primary mb-3"></i>
                        </div>
                        <div class="col-lg-10 col-10">
                        <p class="text-muted whiteText footerFont">HARTBEESPOORT</p>
                        </div>
                    </div>
                  </div>
                 
                   
              
            </div>
      </div>



  </section>
  <footer class="footer">
    <br />
      <div class="row text-center">
           <div class="col-md-4">
              <p style="color: #fff">&copy; 2017 PROPERTY-100 BY <a  style="color: #fff" href="http://www.bluepixelstudio.co.za" target="blank">BLUE PIXEL STUDIO</a> 
          </div>
          <div class="col-md-4 whiteTxt">
              <a  style="color: #fff" href="http://www.property-100.co.za/" target="blank"></a>  
          </div>
          <div class="col-md-4">
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
<script type="text/javascript">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.min.js"></script>
 
 <script type="text/javascript" src="engine1/wowslider.js"></script>
 <script type="text/javascript" src="engine1/script.js"></script>
 

<script>
function reply_click(clicked_id)
{
  //alert("Id " + clicked_id);
    window.location = "singlePropertie.php?id="+ clicked_id;
    $(".slick-slide img").css("cursor", "Wait");
    
}



</script>


</body>

</html>