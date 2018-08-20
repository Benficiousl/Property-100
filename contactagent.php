<?php

 // $con = mysqli_connect('localhost','prop100', '1Hz6CLaj','prop100_data')or die(mysqli_error);

$con = mysqli_connect('localhost', 'root', '','property100');



//retrieve our data from POST

// $username = mysqli_real_escape_string($db,$_POST['username']);

//$id = mysqli_real_escape_string($con,$_POST['id']);

$id = $_GET["id"];

// $id = 4;



//$sqlcon = "SELECT * FROM agentprofile WHERE id ='$id'";

 $sql_c = "SELECT * FROM  agentprofile WHERE id ='$id'";



//$result = mysqli_query($con,$sql_c);

	$res_c = mysqli_query($con , $sql_c);



if (mysqli_num_rows($res_c) > 0)

    {

       

        if($row = mysqli_fetch_array($res_c))

        {

             

           $logedin = json_encode($row);

           

        }

    }

    

    $obj = json_decode($logedin, true);

    $agentname = $obj['agentName'];
    $contacts = $obj['contacts'];
   

    $agentProfile = $obj['agentProfile'];

    

    $agentTitle = $obj['Title'];

    $agentImage= $obj['agentImage'];

    $agentEmail = $obj['agentEmail'];



    

?>

<!DOCTYPE html>

<html lang="en">



<head>



  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">

  <meta name="author" content="">



  <title>Property-100 | Contact Agents</title>



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









 @media(max-width: 768px)  {

      article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {

      display: block !important;

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


input[type=email],input[type=text], select, textarea {

  width: 100%;

    padding: 12px;

    /* box-sizing: border-box; */

    margin-top: 6px;

    border: none;

    border-bottom: groove;

    /* border: none; */

    margin-bottom: 16px;

    resize: vertical;

}



input[type=submit] {

    background-color: #4CAF50;

    color: white;

    padding: 12px 20px;

    border: none;

    border-radius: 4px;

    cursor: pointer;

}



input[type=submit]:hover {

    background-color: #45a049;

}



.dropbtn {

    background-color: #3498DB;

    color: white;

    padding: 16px;

    font-size: 16px;

    border: none;

    cursor: pointer;

}



/* Dropdown button on hover & focus */

.dropbtn:hover, .dropbtn:focus {

    background-color: #2980B9;

}



/* The container <div> - needed to position the dropdown content */

.dropdown {

    position: relative;

    display: inline-block;

}



/* Dropdown Content (Hidden by Default) */

.dropdown-content {

    display: none;

    position: absolute;

    background-color: #f1f1f1;

    min-width: 160px;

    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);

    z-index: 1;

}



/* Links inside the dropdown */

.dropdown-content a {

    color: black;

    padding: 12px 16px;

    text-decoration: none;

    display: block;

}



/* Change color of dropdown links on hover */

.dropdown-content a:hover {background-color: #ddd}



/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */

.show {display:block;}





::-webkit-input-placeholder { /* Chrome */

  color: #034ea1;

}

:-ms-input-placeholder { /* IE 10+ */

  color: #034ea1;

}

::-moz-placeholder { /* Firefox 19+ */

  color: #034ea1;

  opacity: 1;

}

:-moz-placeholder { /* Firefox 4 - 18 */

  color: #034ea1;

  opacity: 1;

}



.my-auto1 {

    margin-top: 230px!important;

}

.text-block {
    position: absolute;
    top: 40px;
    left: 20px;
    color: Black;
    font-size:1.2vw;
    padding-left: 110px;
    padding-right: 40%;

}

</style>



</head>

<body id="contact">



  <!-- Navigation -->

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

  <li><img src="img/portfolio/agentsBanner/<?php echo $agentImage; ?>" alt="Header banner 3" title="" id="wows1_0"/></li>
  <div class="text-block"> 
    <h1><strong><?php echo $agentname; ?></strong></h1>
    <p class="text-left text-lowercase text-capitalize" style ="color: #034ea1;"><?php echo $agentTitle; ?></p>
    <p></p><?php echo  $agentProfile; ?></p>
  </div>

  </ul>
  </div>



</div>	

</header>


<section style="padding: 2.2rem 0rem 0.3rem; background-color: #212121!important;" class="bg-primary" >

<div class="container" >

      <div class="row">

        <div class=" col-md-12 col-lg-8">
    
          <p class="mb-4" style="color:#ffffff;font-size:40px;font-weight: 100">View my
            <span ><b style="color: #8cd509; font-weight: 700">listings</b></span>
          </p>

        </div>

      

        <div class="col-md-12 col-lg-4 text-center ">

          <a class="btn btntransparent  btn-3 btn-lg js-scroll-trigger" style="

                    background-color: #034ea1 !important;

                    border: solid !important;

                    border-color: #034ea1 !important;

                    color: #fff; width:80%; font-weight: 400;

                " href="listing.php?<?php echo "id=".$id?>">View Listings</a>

        </div>

      </div>



    </div>
    </div>
    </section>


 <section class="sectionPaddingTop">
 <div class="row">

<div class="col-lg-12 text-center">

<a class="js-scroll-trigger" href="#page-top"> <i class="fa fa-4x fa-angle-up text-primary mb-3 sr-icons"></i></a>


  <h2 class=" text-center section-heading">Get In Touch</h2>

   <br />

</div>
</div>

 <div class="container ">
    <div class="row justify-content-md-center">
        <div class="col-xs-6 col-lg-6 col-centered" style ="color: #034ea1;"><h3><b><?php echo $agentname; ?></b></h3></div>
        <div class="col-xs-6 col-lg-6 col-centered"><h3><?php echo $contacts; ?><h3></div>
    </div>
</div>
 </section>


<section class="text-white" style="padding: 4rem 0 3rem;background-image: url(img/HomepageAssets/Banner2.png);">
      <div class="container text-center">
       <div class="col-lg-12">
                  <h2 class="text-center section-heading" style="padding-bottom: 0em;">OUR BRANCHES</h2>
                   <div class="spaceSmall">
                </div>
              </div>
      <div class="row">
    <div class="col-md-3">
    <div class="row">
      <div class="col-lg-2 col-2" style="height: 50px;">
      <img style="width:35px;" src="img/single_pageAssets/call icon.png" alt="Bridge">
      </div>
      <div class="col-lg-10 col-10">
      <p class="text-muted whiteText footerFont">JHB NORTHERN SUBURBS<br />079 236 9184<br>ilse@property-100.co.za </p>
      </div>
     </div>
    </div>
    <div class="col-md-3">
    <div class="row">
      <div class="col-lg-2 col-2" style="height: 50px;">
      <img style="width:35px;" src="img/single_pageAssets/call icon.png" alt="Bridge">
      </div>
      <div class="col-lg-10 col-10">
      <p class="text-muted whiteText footerFont">JHB NORTHERN SUBURBS<br />079 236 9184<br>ilse@property-100.co.za </p>
      </div>
     </div>
    </div>
    <div class="col-md-3">
    <div class="row">
      <div class="col-lg-2 col-2" style="height: 50px;">
      <img style="width:35px;" src="img/single_pageAssets/call icon.png" alt="Bridge">
      </div>
      <div class="col-lg-10 col-10">
      <p class="text-muted whiteText footerFont">JHB NORTHERN SUBURBS<br />079 236 9184<br>ilse@property-100.co.za </p>
      </div>
     </div>
    </div>
    <div class="col-md-3">
    <div class="row">
      <div class="col-lg-2 col-2" style="height: 50px;">
      <img style="width:35px;" src="img/single_pageAssets/call icon.png" alt="Bridge">
      </div>
      <div class="col-lg-10 col-10">
      <p class="text-muted whiteText footerFont">JHB NORTHERN SUBURBS<br />079 236 9184<br>ilse@property-100.co.za </p>
      </div>
     </div>
    </div>
  </div>
</section>








        <section id="services" class="sectionPaddingTop">

      <div class="container">

          <div class="row">

                <div class="col-lg-12 text-center">

                <a class="js-scroll-trigger" href="#page-top"> <i class="fa fa-4x fa-angle-up text-primary mb-3 sr-icons"></i></a>


                  <h2 class=" text-center section-heading">Get In Touch</h2>

                   <br />

                </div>

               

              </div>

              <div class="container">

             

              <form action="mailto:<?php echo $agentEmail;?>?subject= Please contact me" method="post" enctype="text/plain">

              <div class="row">

           

               <div class="col-md-6">

                <input type="text" id="fname" name="Name" placeholder="Your name.." required>

              </div>

              <div class="col-md-6">

                <input type="email" id="lname" name="Email" placeholder="Your email.." required>

              </div>

                <div class="col-md-12">

                  <textarea id="subject" name="Message" placeholder="Your Message.." style="height:100px" required></textarea>

                </div>

             </div>

                

                <div class="mycontainer">

                            <div class="row">

                              <div class="col-lg-12 text-center">

                                <div class=" project-category text-center">

                                </div>

                                <div class="row">

                                  <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">

                                 <input class="btn btntransparent text-center btn-3 btn-lg mx-auto" style="

                                                background-color: #034ea1 !important;

                                                border: solid !important;

                                                border-color: #034ea1 !important;

                                                border-radius: 120px;

                                                color: #fff; font-weight: 300;" type="submit" value="Get In touch"></a>

                                </div>

                              </div>

                            

                            </div>

                            <div style="clear:both;"><br /></div>

                           

              </form>

            </div>

                         



            </div>

          

    </section>





  <section class="sectionPaddingTop" >



<div class="col-lg-12 text-center">

           <h2 class="mb-4" style="color:#034ea1;"><b>PROPERTY-100</b><span style="color: #777"> EXPERIENCE OUR REFRESHING APPROACH</span></h2>

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

<a href="index.php" class="text-muted text-left sitemap sitemap whiteText footerFont" ><b >HOME</b> </a>

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
  
 <script type="text/javascript" src="engine1/wowslider.js"></script>

<script type="text/javascript" src="engine1/script.js"></script>

<script type="text/javascript">



function reply_click(clicked_id)

{

  //alert("Id " + clicked_id);

    window.location = "http://localhost/custom/startbootstrap-creative-gh-pages?"+ clicked_id;

    

}

</script>





</body>



</html>