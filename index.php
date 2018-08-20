<?php

// https://www.facebook.com/Property-100-GreenstoneBedfordview-166232024213536/

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





foreach($data as $property) {

$states[] =  $property['suburb']; // Grabing their state from their profile page

}

$states = array_unique($states);



foreach($data as $property) {

  if($property['title']!= "")

  {

    $propertyType[] =  $property['title'];

  }

  // Grabing their state from their profile page

  }

  $propertyType = array_unique($propertyType);



foreach ($data as $property) {

    // for each property in the API response, see if there is a corresponding listing in the local DB

	//echo $property->images["title"];

	//echo $property["images"][0]["download_url"];

  $city = $property['city'];



	//echo $property["images"][0]["download_url"];

  $myimages = $property["images"][0]["download_url"];

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



  <title>Property-100 | Home</title>



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




  









  <style>



  .img-fluid {

    max-width: 70%;

    height: auto;

   

}



.newLetter

{

    font-size: 30px !important;;

    color: #fff !important;

    text-align: RIGHT !important;

    display: inline-block !important;

  

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

    cursor: point;
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

@media (max-width: 1443px) {

  .newLetter

{

    font-size: 26px !important;

    color: #fff !important;

    text-align: RIGHT !important;

    display: inline-block !important;

  

}

}



    @media (max-width: 992px) {

    .navbar-expand-lg .navbar-collapse

     {

        background-color:  #84888f;

      }

      

        .cprofile

    {

         font-size: 10px !important;

         width: 300px;

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

          width: 80% !important;

          margin-top: -30px !important;

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

    

    .cprofile

    {

         font-size: 10px !important;

         width: 100%;

    }



.priceperM {

    margin-top: -56px;

    color: #034ea1;

    font-size: 0px;

    text-transform: uppercase;

    margin-right: -5px !important;

}



.priceperM b {

    margin-top: 8px;

    color: #034ea1;

    font-size: 15px;

}



#parallelogram {

    width: 50%;

    height: 88px;

    margin: 0px 0 0 -40px;

    -webkit-transform: skew(-30deg);

    -moz-transform: skew(-30deg);

    -o-transform: skew(-0deg);

    background: #034ea1;

    overflow: hidden;

    position: sticky;

    z-index: -300px;

}





.unskew {

    -webkit-transform: skew(43deg);

    -moz-transform: skew(43deg);

    -o-transform: skew(0deg);

    margin-left: 30px;

    margin-top: 10px;

    font-size: 16px;

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

            <a class="nav-link js-scroll-trigger active" style="color:#8cd509;" href="index.php"><span>Home</span></a>

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



  <header class=" text-center text-white d-flex">

  <div id="wowslider-container1">

	<div class="ws_images"><ul>

		<li><img src="img/MainHeader.png" alt="Header banner 3" title="" id="wows1_0"/></li>
	   </ul></div>



	</div>	





  </header>



  


<div id="about" ></div>

  <section style="padding: 2.2rem 0rem 0.3rem; background-color: #212121!important;" class="bg-primary" >

    <div class="container" >

          <div class="row">

            <div class=" col-md-12 col-lg-6 ">
        
              <p class="mb-4" style="color:#ffffff;font-size:40px;font-weight: 100">Discover your dream
                <span style="color: #8cd509; font-weight: 700"><b>Home</b></span>
              </p>

            </div>

            <div class="col-md-12 col-lg-3 text-center ">
              <a  class="btn btnbg btn-3  btn-lg js-scroll-trigger" style="
                        border: solid !important;

                        border-color: #8cd509 !important;

                         width:80%; font-weight: 700;

                    " href="agents.php">Our Agents</a>

                    <br />

            </div>


            <div class="col-md-12 col-lg-3 text-center ">
              <a class="btn btntransparent  btn-3 btn-lg js-scroll-trigger" style="

                        background-color: #034ea1 !important;

                        border: solid !important;

                        border-color: #034ea1 !important;

                        color: #fff; width:80%; font-weight: 700;

                    " href="contactUs.php">Contact Us</a>

            </div>

          </div>



        </div>

  </section>



 

  <section id="services mx-auto" style="padding: 2rem; background-color: #dddddd;">

    <div class="container">

    <form action="propertySearch.php">

      <div class="row">

        <div class="col-md-12 col-lg-4">

          <br />

          <select required name="Location" class="custom-select js-scroll-trigger" style="height: 70%;" >

          <option value="null">Location</option>

         <?php

          foreach($states as $state)

          //$city = $property['city'];

            {

            ?>

            <option value = "<?php echo $state?>" >

                <?php

                   echo $state;

                ?>

            </option>

            <?php

            }               

        ?>
     </select>

        </div>

        <div class="col-md-12 col-lg-4 mx-auto">

          <br />

          <select required  name="PropertyType" class="custom-select js-scroll-trigger " style="height: 70%;">

            <option value ="null" selected>Property Type</option>

              <?php

                foreach($propertyType as $type)
                  {

                  ?>

                  <option value = "<?php echo $type?>" >

                      <?php

                        echo $type;

                      ?>

                  </option>

                  <?php

                  }               

              ?>

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

                " href="ForRent.php">RENTAL</a>

        </div>

        <div class="col-md-6">

        

        <br /> 

          <a class="btn btntransparent  btn-3 btn-lg" style="

                    background-color: #034ea1 !important;

                    border: solid !important;

                    border-color: #034ea1 !important;

                    color: #fff; width:100%;font-weight: 700;

                " href="ForSale.php">SALES</a>

        </div>

        </div>

        </div>

        <br />

        <div class="col-md-12 col-lg-4 mx-auto">

          <br />

          <select required name="Bedrooms"  class="custom-select js-scroll-trigger" style="height: 70%;">

            <option value="0" selected>Bedrooms</option>

            <option value="1">1 Bedrooms</option>

            <option value="2">2 Bedrooms</option>

            <option value="3">3 Bedrooms</option>

            <option value="4">4 Bedrooms</option>

            <option value="5">5+ Bedrooms</option>

          </select>

        </div>



        <div class="col-md-12 col-lg-4">

          <br />

          <select required  name="Bathrooms"  class="custom-select js-scroll-trigger" style="height: 70%;">

            <option value="0" selected>Bathrooms</option>

            <option value="1">1 Bathrooms</option>

            <option value="2">2 Bathrooms</option>

            <option value="3">3 Bathrooms</option>

            <option value="4">4 Bathrooms</option>

            <option value="5">5+ Bathrooms</option>

          </select>

        </div>

        <div class="col-md-12 col-lg-4">

          <br />

          <input id="example_id" class="btn btntransparent  btn-3 btn-lg" style="
              background-color: #8cd509 !important;
              border: solid !important;
              border-color: #8cd509 !important;
              color: #fff; width:100%; font-weight: 700;
                "type="Submit" value="SEARCH">

        </div>


        <div class="col-md-12 col-lg-4 mx-auto">

          <br />

          <br />

          <span class ="topRange" Style ="position:absolute;margin-top:-30px;margin-left:9px">Area</span>

          <div class="row js-scroll-trigger">

            <div class="col-sm-12 ">

              <div id="slider-range1"></div>

            </div>

          </div>

         

          <div class="row slider-labels">

            <div class="col-xs-6 col-lg-6 caption">

              <strong>Min:</strong>

              <span  name ="priceMin" id="slider-range-value11"></span>

            </div>

            <div class="col-xs-6 col-md-6 text-right caption">

              <strong>Max:</strong>

              <span name ="priceMax" id="slider-range-value21"></span>

            </div>

          </div>



          <div class="row">

            <div class="col-sm-12 ">

                <input type="hidden" id="minArea" name="min-value">

                <input type="hidden" id="maxArea" name="max-value">

            </div>

          </div>



        </div>



        <div class="col-md-12  col-lg-4 mx-auto">

          <br />

          <br />

          <span class ="topRange" Style ="position:absolute;margin-top:-30px;margin-left:9px">Price</span>

          <div class="row">

            <div class="col-sm-12">

              <div name ="sliderRange" id="slider-range"></div>

            </div>

          </div>

          <div name="slidermin"  class="row slider-labels">

            <div class="col-xs-6 col-lg-6 caption">

              <strong>Min:</strong>

              <span name="min-value" id="slider-range-value1"></span>

            </div>

            <div name="slidermax" class="col-xs-6 col-lg-6  text-right caption">

              <strong>Max:</strong>

              <span name="max-value" id="slider-range-value2"></span>

            </div>

          </div>



          <div class="row">

            <div class="col-sm-12">

                <input type="hidden" id="minP" name="min-value1">

                <input type="hidden" id="maxP" name="max-value1">

            </div>

          </div>

        </div>

         <div class="col-md-12 col-lg-4">

<p></p><p></p>

 <input onclick="myFunction()" class="btn btntransparent  btn-3 btn-lg js-scroll-trigger" style="

           background-color: transparent !important;

           border: solid !important;
           outline: none;

           border-color: transparent !important;
           text-align:right;
           color: #323a45; width:100%; font-weight: 700;

       " type="reset" value="X Clear filter">

</div>


      </div>

      </form>

    </div>

  </section>


  <section class="sectionPaddingTop"  id="popularCat" style="background-color:whitesmoke;">

<div class="container">

  <div class="row">

    <div class="col-lg-12 text-center">

        <a class="js-scroll-trigger" href="#page-top"> <i class="fa fa-4x fa-angle-up text-primary mb-3 sr-icons"></i></a>

      <h1 class="section-heading">EXPLORE OUR PROPERTIES</h1>

      <p>FIND YOUR HOUSE IN YOUR CITY</p>

  </div>



  </div>

  



<div class="tz-gallery">



<div class="row">





<div class="col-sm-6 col-md-6 col-lg-3">

<a class="lightbox" href="PropertyType.php?id=1">

    <p id="textImage">HOUSE | CLUSTER</p>

    <p id="SubtextImage"> </p>

        <img src="img/portfolio/Properties/PropertiesCategory/Image1.png" alt="Tunnel">
    </a>

</div>

<div class="col-sm-6 col-md-6 col-lg-3">

    <a class="lightbox" href="PropertyType.php?id=2">

    <p id="textImage">APARTMENT | SIMPLEX | <br />DUPLEXS</p>

    <p id="SubtextImage"> </p>

    

        <img src="img/portfolio/Properties/PropertiesCategory/Image2.png" alt="Tunnel">

       

    </a>

</div>

<div class="col-sm-6 col-md-6 col-lg-3">

<a class="lightbox" href="PropertyType.php?id=3">

    <p id="textImage">RENTALS</p>

    <p id="SubtextImage"> </p>

    

        <img src="img/portfolio/Properties/PropertiesCategory/Image3.png" alt="Tunnel">

       

    </a>

</div>

<div class="col-sm-6 col-md-6 col-lg-3">

<a class="lightbox" href="PropertyType.php?id=4">

    <p id="textImage">VACANT LAND</p>

    <p id="SubtextImage"> </p>

    

        <img src="img/portfolio/Properties/PropertiesCategory/Image4.png" alt="Tunnel">

       

    </a>

</div>

<div class="col-sm-12 col-md-12 col-lg-6">

    <a class="lightbox" href="ForCommercial.php">

    <p id="textImage">COMMERCIAL | INDUSTRIAL</p>

    <p id="SubtextImage"> </p>

        <img src="img/portfolio/Properties/PropertiesCategory/Image5.png" alt="Bridge">

    </a>

</div>

<div class="col-sm-6 col-md-12 col-lg-6">

    <a class="lightbox" href="ForCommercial.php">

    <p id="textImage">AGRICALTURAL | FARMS</p>

    

        <img src="img/portfolio/Properties/PropertiesCategory/Image6.png" alt="Rails">

    </a>

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

                  <i class="fa fa-4x fa-angle-up text-primary mb-3 textleft"></i>

                  <h2 class="text-left section-heading" style="padding-bottom: 0em;">ABOUT THE COMPANY</h2>

                  <span class="text-left">OUR COMPANY PROFILE</span>

                   <br />

                </div>

               

              </div>

              <div class="container">

                  <div class="row">

                      <br /><br />

                        <p style= "font-size: 20px;">We applaud you for choosing one of South Africa’s premier property companies, the first to provide you with an integrated business model comprising of Sales, Legal, Financial and Value-added services at every one of our branches. We are passionate about providing all existing and future clients with a World-Class standard of differentiated residential and commercial property service and delivery, whilst upholding our reputation for honesty, integrity and professionalism. With our humble beginnings in the Pretoria area, the Property-100 Group is rapidly expanding our national footprint. </p>

                      </div>

                            <div class="Spacer"></div>

    

                              <div class="row text-center">

                                  <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">

                                    <a href="./files/Property 100_Company Profile.pdf" download>

                                      <input href="./files/Property" class="cprofile btn btntransparent  btn-3 btn-lg" style=" background-color: #034ea1 !important;border: solid !important;border-color: #034ea1 !important;color: #fff;max-width: 350px;font-weight: 700;" type="Submit" value="DOWNLOAD COMPANY PROFILE">

                                    </a>  

                                  </div>

                             </div>

                          <div style="clear:both;"><br /></div>

                        </div>

               </div>

          </form>

          </div>

    

</section>



























  <!-- <section class="blueImage" id="buyHome" style="background-image: url(img/HomepageAssets/Banner1.png);" >

    <div class="container">

      <div class="row">

      

      <div class="col-lg-12 text-center">

            <a class="js-scroll-trigger" href="#Home"> <i class="fa fa-4x fa-chevron-up text-primary mb-3 sr-icons"></i></a>

          <h1 style="color:#fff">WHY CHOOSE PROPERTY-100?</h1>

          <p style="color:#fff">OUR COMMITMENT TO YOU</p>

      </div>

      </div>

    </div>

    <div class="container">

      <div class="row">

        <div class="col-lg-4 col-md-6 text-center">

          <div class="service-box mt-5 mx-auto">

            <div class="row">

              <div class="col-lg-4 col-md-4 col-4 text-center">

                 <img src="img/HomepageAssets/icon1.png" alt="Bridge">

              </div>

              <div class="col-lg-8 col-md-8 col-8 text-center">

                <h3 class="mb-3 whiteP">Sturdy Templates</h3>

                <p class="text-muted mb-0 whiteP whitePSize">Our templates are updated regularly so they don't break. Our templates are updated regularly so they don't

                  break.</p>

              </div>

            </div>

          </div>

        </div>

        <div class="col-lg-4 col-md-6 text-center">

          <div class="service-box mt-5 mx-auto">

            <div class="row">

              <div class="col-lg-4 col-md-4 col-4 text-center">

              <img src="img/HomepageAssets/icon2.png" alt="Bridge">

              </div>

              <div class="col-lg-8 col-md-8 col-8 text-center">

                <h3 class="mb-3 whiteP">Heading</h3>

                <p class="text-muted mb-0 whiteP whitePSize">Our templates are updated regularly so they don't break. Our templates are updated regularly so they don't

                  break.</p>

              </div>

            </div>

          </div>

        </div>

        <div class="col-lg-4 col-md-6 text-center">

          <div class="service-box mt-5 mx-auto">

            <div class="row">

              <div class="col-lg-4 col-md-4 col-4 text-center">

              <img src="img/HomepageAssets/icon3.png" alt="Bridge">

              </div>

              <div class="col-lg-8 col-md-8 col-6 text-center">

                <h3 class="mb-3 whiteP">Heading</h3>

                <p class="text-muted mb-0 whiteP whitePSize ">Our templates are updated regularly so they don't break.Our templates are updated regularly so they don't

                  break.</p>

              </div>

            </div>

          </div>

        </div>

        <div class="col-lg-4 col-md-6 text-center">

          <div class="service-box mt-5 mx-auto">

            <div class="row">

              <div class="col-lg-4 col-md-4 col-4 text-center">

              <img src="img/HomepageAssets/icon4.png" alt="Bridge">

              </div>

              <div class="col-lg-8 col-md-8 col-8 text-center">

                <h3 class="mb-3 whiteP">Sturdy Templates</h3>

                <p class="text-muted mb-0 whiteP whitePSize">Our templates are updated regularly so they don't break. Our templates are updated regularly so they don't

                  break.</p>

              </div>

            </div>

          </div>

        </div>

        <div class="col-lg-4 col-md-6 text-center">

          <div class="service-box mt-5 mx-auto">

            <div class="row">

              <div class="col-lg-4 col-md-4 col-4 text-center">

                <div class="border-radius">

                <img src="img/HomepageAssets/icon5.png" alt="Bridge">

                </div>



              </div>

              <div class="col-lg-8 col-md-8 col-8 text-center">

                <h3 class="mb-3 whiteP">Sturdy Templates</h3>

                <p class="text-muted mb-0 whiteP whitePSize">Our templates are updated regularly so they don't breakOur templates are updated regularly so they don't

                  break..</p>

              </div>

            </div>

          </div>

        </div>

        <div class="col-lg-4 col-md-6 text-center">

          <div class="service-box mt-5 mx-auto">

            <div class="row">

              <div class="col-lg-4 col-md-4  col-4 text-center">

              <img src="img/HomepageAssets/icon6.png" alt="Bridge">

              </div>

              <div class="col-lg-8 col-md-8 col-8 text-center">

                <h3 class="mb-3 whiteP" style="color: #fff">Sturdy Templates</h3>

                <p class="text-muted mb-0 whiteP whitePSize">Our templates are updated regularly so they don't break.Our templates are updated regularly so they don't

                  break.</p>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section> -->



  <section class="sectionPaddingTop" id="services">

    <div class="container">

      <div class="row">

        <div class="col-lg-12 text-leftr">

        <div class="row">

        <div class="col-lg-12 text-center">

            <a class="js-scroll-trigger" href="#page-top"> <i class="fa fa-4x fa-angle-up text-primary mb-3 sr-icons"></i></a>

          <h1 class="section-heading">FEATURE PROPERTIES</h1>

          <p>FIND YOUR HOME IN YOUR CITY</p>

      </div>



      </div>





        </div>

      </div>

    </div>





    <div class="container">



      <div style="clear:both;"></div>





      <div id="portfolio">

          <div class="container">

              <h2></h2>

                <div class="row">

                  <div class="col-md-12 heroSlider-fixed">

                    <div class="overlay">

                  </div>

                     <!-- Slider -->

                    <div class="slider responsive">

                      <?php

                      $i = 0;





                      



                      rsort($data);

                      foreach ($data as $property) {

							//for each property in the API response, see if there is a corresponding listing in the local DB

							//echo $property->images["title"];

							//echo $property["images"][0]["download_url"];



                        if (++$i > 9) break;

                        //echo $property["images"][0]["download_url"];

                        $myimages = $property["images"][0]["download_url"];

                        $price = $property['price'];

                        $title = $property['title'];

                        

                        if($title==null)

                          {

                            $title ="N/A";

                          }

                        

                        setlocale(LC_MONETARY, 'en_US');

                         $money = number_format($price,2);

                        $property_type = $property['property_type'];

                        $property_city = $property['city'];

                        $description = $property['description'];

                        $id = $property['id'];

                        $sale_type = $property['sale_type'];



                        print($mypanel = "<div ><div class='col-sm-12 col-md-12'>

                                <div class='card'>

                                    <img class='card-img' src='$myimages' alt='header' />

                                    <div class='card-info'>

                                      <br/>

                                      <div class='card-icon propertyTitle '>$property_type</div>
                                      <div class='row'>
                                      <div class = 'col-md-6'>
                                      <p class='myTitle card-title text-left'>$title</p>
                                      <div class='row'>
                                      <div class='col-lg-1  col-1 col-md-1 text-center'>
                                          <i class='fa fa-1x fa-map-marker text-primary mb-3 sr-icons'></i>
                                        </div>
                                      <p class='card-author text-left'>$property_city</p>

                                      </div>

                                      </div>
                                      
                                      <div class = 'col-md-6'>
                                      <a id='$id' onClick='reply_click(this.id)' class='btn btntransparent  btn-3 btn-md' style='border-radius:15px;  background-color: #034ea1 !important;border: solid !important;border-color: #034ea1 !important;color: #fff; width:100%; font-weight: 100;'>View Listing</a>
                                      </div>
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

                                </div> ");


                      }



						       // Print(array_search(40489, array_column($data, 'Gauteng')));



                      ?>

                    

                     <!-- control arrows -->

                   

                    

                  </div>

                </div>

              </div>

          </div>

  

         

        </div>



        <div style="clear:both;"></div>



      </div>



    </div>

  </section>


  <section class="bg-dark text-white" style="padding: 4rem 0; background-image: url(img/HomepageAssets/Banner2.png);">

      <div class="container text-center">

                  <div class="row">

                  <div class="col-lg-12 col-md-12 text-center">

                        <h1 class="mb-3 whiteHeading"><b>DO YOU WANT TO JOIN OUR PROFESSIONAL TEAM?</b></h1>

                    </div><br /><br />

                                  <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">

                                    <a href="join.php" class="btn btntransparent btn-3 btn-lg mx-auto" style="background-color: #8cd509 !important;border: solid !important;border-color: #8cd509 !important;color: #034ea1; font-weight: 700; min-width: 15%;">JOIN US</a>

                                  </div>

                   

                  </div>

                



            </div>

      </div>

    </section>

 





    <!-- New Stories Section-->



        <section class="sectionPaddingTop" id="services">

      <div class="container">

          <div class="row">

            <div class="col-lg-12 text-left">

              <div class="row">

                <div class="col-lg-12">

                  <i class="fa fa-4x fa-angle-up text-primary mb-3 textleft"></i>

                  <h2 class="text-left section-heading" style="padding-bottom: 0em; padding-right: -1em;">OUR AGENTS</h2>

                  <p class="text-left" style="padding-left: 5px;">MEET OUR PROFESSIONAL TEAM</p>

                   <br />

                </div>

               

              </div>

              <div class="container">

                  <div class="row">

                      <div class="col-lg-3 col-sm-6 text-center mb-4">

                      <img class="rounded-circle img-fluid d-block mx-auto" src="img/portfolio/agents/Ilse.png" alt="">

                        <h3>Ilse Haward

                         

                        </h3>

                      </h5>TEAM LEADER</h5>
                      <p></p>
                      <a href="contactagent.php?id=9" class='btn btntransparent  btn-3 btn-md' style='border-radius:15px;  background-color: #034ea1 !important;border: solid !important;border-color: #034ea1 !important;color: #fff; width:50%; font-weight: 100;' href='ForRent.php'>View Agent</a>


                      </div>


                      <div class="col-lg-3 col-sm-6 text-center mb-4">

                       <img class="rounded-circle img-fluid d-block mx-auto" src="img/portfolio/agents/Adri.png" alt="">

                          <h3>Adri Scheepers

                          </h3>

                        </h5>TEAM LEADER</h5>
                        <p></p>
                          <a href="contactagent.php?id=2" class='btn btntransparent  btn-3 btn-md' style='border-radius:15px;  background-color: #034ea1 !important;border: solid !important;border-color: #034ea1 !important;color: #fff; width:50%; font-weight: 100;' href='ForRent.php'>View Agent</a>

                        
                        </div>

                        <div class="col-lg-3 col-sm-6 text-center mb-4">

                        <img class="rounded-circle img-fluid d-block mx-auto" src="img/portfolio/agents/Andrevanden.png" alt="">

                            <h3>Andre van den Heever

                             

                            </h3>

                          </h5>ATTORNEY / DIRECTOR</h5>
                          <p></p>
                          <a href="contactagent.php?id=4" class='btn btntransparent   btn-3 btn-md' style='border-radius:15px;  background-color: #034ea1 !important;border: solid !important;border-color: #034ea1 !important;color: #fff; width:50%; font-weight: 100;' href='ForRent.php'>View Agent</a>

                          </div>

                          <div class="col-lg-3 col-sm-6 text-center mb-4">

                           <img class="rounded-circle img-fluid d-block mx-auto" src="img/portfolio/agents/Isabel.png" alt="">

                              <h3>Isabel Davies

                               

                              </h3>

                            </h5>ADMINISTRATOR</h5>
                            <p></p>
                            <a href="contactagent.php?id=10" class='btn btntransparent   btn-3 btn-md' style='border-radius:15px;  background-color: #034ea1 !important;border: solid !important;border-color: #034ea1 !important;color: #fff; width:50%; font-weight: 100;' href='ForRent.php'>View Agent</a>
                            </div>

                        </div>

                        

                        <div class="mycontainer">

                            <div class="row">

                              <div class="col-lg-12 text-center">

                                <div class=" project-category text-center">

                                </div>

                                <div class="row">

                                  <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">

                                    <a href="agents.php" class="btn btntransparent text-center btn-3 btn-lg mx-auto" style="

                                                background-color: #8cd509 !important;

                                                border: solid !important;

                                                border-color: #8cd509 !important;

                                                min-width: 200px;

                                                color: #fff; font-weight: 700;

                                            ">View All Agents</a>

                                  </div>

                                 

                                  

                                </div>

                              </div>

                            

                            </div>

                            <div style="clear:both;"><br /></div>

                          </div>

    

            </div>

          

          </div>

        </div>



</section>



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

    <a href="#top" class="text-muted text-left sitemap sitemap whiteText footerFont" ><b style="color:#8cd509;">HOME</b> </a>

    </div>
    <div class="col-md-6 col-6 text-left">  

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

<script type="text/javascript">

 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.min.js"></script>

 

 <script type="text/javascript" src="engine1/wowslider.js"></script>

 <script type="text/javascript" src="engine1/script.js"></script>



 



<script>



function reply_click(clicked_id)

{

    window.location = "singlePropertie.php?id="+ clicked_id;

    $("body").css("cursor", "Wait");

    

}

$(document).ready(function(){
  
      
        $("#Home").fadeIn("slow");
      
});


function myFunction() {

  



  document.getElementById('slider-range1').noUiSlider.set([0, 100])

  document.getElementById('slider-range').noUiSlider.set([0, 100000000])



}



</script>







</body>



</html>