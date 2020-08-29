
<?php include ('serverH.php');


?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Real state</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-md-5 ">
                            <div class="header_left">
                                <p>Welcome to Conbusi consulting service</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-md-7">
                            <div class="header_right d-flex">
                                    <div class="short_contact_list">
                                            <ul>
                                                <li><a href="#"> <i class="fa fa-envelope"></i> ibrahimhajiri10@gmail.com</a></li>
                                                <li><a href="#"> <i class="fa fa-phone"></i> +212 643726631</a></li>
                                                <li><a href="admin/adminM.php">Admin</a></li>
                                                
                                            </ul>
                                        </div>
                                        <div class="social_media_links">
                                            <a href="https://fr-fr.facebook.com/mesutoezil/">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                            <a href="https://fr-fr.facebook.com/mesutoezil/">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="https://fr-fr.facebook.com/mesutoezil/">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.php">home</a></li>
                                            <li><a href="Property.php">Property</a></li>
                                            <li><a href="school.php">School</a></li>
                                            <li><a href="addproperty.php">add property</a></li>
                                            <li><a href="about.php">about</a></li>
                                            <!-- <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                        <li><a href="about.php">about</a></li>
                                                        <li><a href="property_details.php">property details</a></li>
                                                        <li><a href="elements.php">elements</a></li>
                                                        <li><a href="roomate.php">Roomate</a></li>
                                                        <li><a href="addproperty.php">add property</a></li>
                                                </ul>
                                            </li> -->
                                         
                                            <!-- <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.php">blog</a></li>
                                                    <li><a href="single-blog.php">single-blog</a></li>
                                                </ul>
                                            </li> -->
                                            <li><a href="contact.php">Contact</a></li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="search_btn">
                                    <a href="#">
												<i class="ti-search"></i>
											</a>
                                    </div>
                                    <div class="book_btn d-none d-lg-block">
                                        <?php  
            
          

             
              if (isset($_SESSION['username'])):
                  echo' <a href ="login.php?logout=1">'.$_SESSION['username'] .'&nbsp&nbsp;<i class="fa fa-sign-out" aria-hidden="true"></i> </a>';
                  
            
                  elseif (isset($_SESSION['Adminname'])):
                    
                    echo' <a href ="login.php?logout=1">'.$_SESSION['Adminname'] .'&nbsp&nbsp;<i class="fa fa-sign-out" aria-hidden="true"></i> </a>';
                  
              else:
                  echo '<a href="login.php">Login</a>';
              endif;
              

            
            ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
            <div class="single_slider  d-flex align-items-center slider_bg_1">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 offset-xl-1">
                                <div class="slider_text text-center justify-content-center">
                                    <h3>Find your best Property</h3>
                                    <p>Esteem spirit temper too say adieus who direct esteem.</p>
                                </div>
                                <!-- <div class="property_form">
                                    <form action="#"  method="POST" action="serverH.php">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="form_wrap d-flex">
                                                        <div class="single-field max_width ">
                                                                <label for="#">Location</label>
                                                                <select class="wide" >
                                                                        <option data-display="NewYork">NewYork</option>
                                                                        <option value="1">Bangladesh</option>
                                                                        <option value="2">India</option>
                                                                </select>
                                                            </div>
                                                        <div class="single-field max_width ">
                                                                <label for="#">Property type</label>
                                                                <select class="wide" >
                                                                        <option data-display="Apartment">Apartment</option>
                                                                        <option value="1">Apartment</option>
                                                                        <option value="2">Apartment</option>
                                                                </select>
                                                            </div>
                                                            <div class="single_field range_slider">
                                                                    <label for="#">Price ($)</label>
                                                                <div id="slider"></div>
                                                            </div>
                                                        <div class="single-field min_width ">
                                                                <label for="#">Bed Room</label>
                                                                <select name="bedroom" class="wide" >
                                                                        <option data-display="01">01</option>
                                                                        <option value="1">02</option>
                                                                        <option value="2">03</option>
                                                                </select>
                                                            </div>
                                                        <div class="single-field min_width ">
                                                                <label for="#">Bath Room</label>
                                                                <select class="wide" >
                                                                        <option data-display="01">01</option>
                                                                        <option value="1">02</option>
                                                                        <option value="2">03</option>
                                                                </select>
                                                            </div>
                                                            <div class="serach_icon">
                                                                    <a href="#">
                                                                            <i class="ti-search"></i>

                                                                    </a>
                                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <!-- slider_area_end -->

    <!-- popular_property  -->
    <div class="popular_property">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-40 text-center">
                        <h3>Popular Properties</h3>
                    </div>
                </div>
            </div>
            <?php
 
         $resultsN = mysqli_query($db,"SELECT * FROM add_house  WHERE Nschool= 'khawarizmi' ");
         
        echo '<div class="row">';
        
        while ($rowN = mysqli_fetch_array($resultsN)) { 
           
            echo   '       <div class="col-xl-4 col-md-6 col-lg-4">
            <div class="single_property">
                <div class="property_thumb">
                    <div class="property_tag red">
                            For Rent
                    </div>
                    <img src="'.$rowN['img'].'" alt="">
                </div>
                <div class="property_content">
                    <div class="main_pro">
                            <h3><a href="property_details.php?idF='.$rowN['id'].'">'.$rowN['name'].'</a></h3>
                            <div class="mark_pro">
                                <img src="img/svg_icon/location.svg" alt="">
                                <span>Popular Properties</span>
                            </div>
                            <span class="amount">'.$rowN['prix'].'</span>
                    </div>
                </div>
                <div class="footer_pro">
                        <ul>
                            <li>
                                <div class="single_info_doc">
                                    <img src="img/svg_icon/square.svg" alt="">
                                    <span>1200 Sqft</span>
                                </div>
                            </li>
                            <li>
                                <div class="single_info_doc">
                                    <img src="img/svg_icon/bed.svg" alt="">
                                    <span> '.$rowN['Bed'].'</span>
                                </div>
                            </li>
                            <li>
                                <div class="single_info_doc">
                                    <img src="img/svg_icon/bath.svg" alt="">
                                    <span>'.$rowN['bath'].'</span>
                                </div>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>';
   
       
      } echo '</div>';
      
   
   
   ?>
            <div class="row">
                <div class="col-xl-12">
                    <div class="more_property_btn text-center">
                        <a href="Property.php" class="boxed-btn3-line">More Properties</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /popular_property  -->
    
    <!-- home_details  -->
    <div class="home_details">
        <div class="container">
            <div class="row">   
                <div class="col-xl-12">
                    <div class="home_details_active owl-carousel">
                      <?php  while   ($rowZ = mysqli_fetch_array($resultsZ)) { ?>

                        <div class="single_details">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                        <div class="modern_home_info">
                                                <div class="modern_home_info_inner">
                                                    <span class="for_sale">
                                                        For Rent
                                                    </span>
                                                    <div class="info_header">
                                                            <h3> <?php echo $rowZ['name']; ?></h3>
                                                            <div class="popular_pro d-flex">
                                                                <img src="img/svg_icon/location.svg" alt="">
                                                                <span><?php echo $rowZ['address']; ?></span>
                                                            </div>
                                                    </div>
                                                    <div class="info_content">
                                                        <ul>
                                                            <li> <img src="img/svg_icon/square.svg" alt=""> <span>1200 Sqft</span>  </li>
                                                            <li> <img src="img/svg_icon/bed.svg" alt=""> <span><?php echo $rowZ['Bed']; ?></span> </li>
                                                            <li> <img src="img/svg_icon/bath.svg" alt=""> <span><?php echo $rowZ['bath']; ?></span> </li>
                                                        </ul>
                                                        <p><?php echo $rowZ['description']; ?></p>
                                                        <div class="prise_view_details d-flex justify-content-between align-items-center">
                                                            <span><?php echo $rowZ['prix']; ?></span>
                                                            <a class="boxed-btn3-line" href="property_details.php?idF=<?php echo $rowZ['id']; ?>">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /home_details  -->

    <!-- accordion  -->
    <div class="accordion_area">
            <div class="container">
                <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                                <div class="faq_ask">
                                    <h3>Frequently ask</h3>
                                        <div id="accordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingTwo">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            About us
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style="">
                                                        <div class="card-body">Our site is designed to make the off-campus experience simple for everyone. As college students, we felt that moving off-campus was much harder than it needed to be. That’s why we created our site, an easy-to-use website where you can find safe, hand-picked student rental properties around your campus.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                            
                                                          The reason for creating the site
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                                        <div class="card-body">As Rutgers Students we found it hard to find safe, affordable, and convenient off campus housing. Big name real estate companies seemed to control all of the online listings and it was tedious to find what was relevant to us as students. We knew there had to be an easier way.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingThree">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            our mission                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                                                        <div class="card-body">That's why we made it our mission to solve these problems for you by finding the most convenient, safest, and affordable listings for every school we partner with. our site puts students before everyone else because we know first hand just how hard it is to find that perfect place.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="accordion_thumb">
                            <img src="img/banner/accordion.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- accordion  -->

    <!-- counter_area  -->
    <div class="counter_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter">
                        <h3> <span  class="counter" >200</span> <span>+</span> </h3>
                        <p>Properties for rent</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter">
                        <h3> <span class="counter" >300</span> <span>+</span></h3>
                        <p>number of accounts </p>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- /counter_area  -->

    <!-- testimonial_area  -->
    <div class="testimonial_area overlay ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="img/svg_icon/quote.svg" alt="">
                                        </div>
                                        <p>Sara is a natural-born salesman and has a background in real estate. He is very passionate about everything he does and is never afraid 
                                            to go full throttle on anything he works on. Furthermore, he is also an expert when it comes to networking. 
                                            Always on the go and ready to meet new people. </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="img/case/testmonial.png" alt="">
                                            </div>
                                            <h3>Sara Hajiri</h3>
                                            <span>Founder</span>
                                        </div>
                                    </div>
                        </div>
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="img/svg_icon/quote.svg" alt="">
                                        </div>
                                        <p>Mark is a business development expert with a background in marketing and product development. He has <br>a passion for
                                             strategic planning and coming up with innovative solutions for complex problems.<br>
                                             In his free time Mark enjoys traveling and pursuing any and all outdoor activities in his home state of Montana </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="img/case/MM.png" alt="">
                                            </div>
                                            <h3>Mark Chesler</h3>
                                            <span> Founder</span>
                                        </div>
                                    </div>
                        </div>
                        <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                        <div class="quote">
                                            <img src="img/svg_icon/quote.svg" alt="">
                                        </div>
                                        <p>Mark is a business development expert with a background in marketing and product development. He has a passion for strategic planning and coming up with innovative solutions for complex problems. In his free time Mark enjoys traveling and pursuing any and all outdoor activities in his home state of Montana. </p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                    <img src="img/case/ps.png" alt="">
                                            </div>
                                            <h3>Ethan Gardner</h3>
                                            <span> Founder</span>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->

    <!-- team_area  -->
    <div class="team_area">
            <div class="container">
                    <div class="row">
                            <div class="col-xl-12">
                                <div class="section_title mb-40 text-center">
                                    <h3>
                                            Our Agents
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="single_team">
                                    <div class="team_thumb">
                                        <img src="img/team/1.png" alt="">
                                        <div class="social_link">
                                                <ul>
                                                    <li><a href="#">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                    <div class="team_info text-center">
                                        <h3>Milani Mou</h3>
                                        <p>Business Agent</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="single_team">
                                    <div class="team_thumb">
                                        <img src="img/team/2.png" alt="">
                                        <div class="social_link">
                                                <ul>
                                                    <li><a href="#">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                    <div class="team_info text-center">
                                        <h3>Halim Yoka</h3>
                                        <p>Business Agent</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="single_team">
                                    <div class="team_thumb">
                                        <img src="img/team/3.png" alt="">
                                        <div class="social_link">
                                                <ul>
                                                    <li><a href="#">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                    <div class="team_info text-center">
                                        <h3>Dalim Karma</h3>
                                        <p>Business Agent</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="single_team">
                                    <div class="team_thumb">
                                        <img src="img/team/4.png" alt="">
                                        <div class="social_link">
                                                <ul>
                                                    <li><a href="#">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                    </div>
                                    <div class="team_info text-center">
                                        <h3>Micky</h3>
                                        <p>Business Agent</p>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    <!-- /team_area  -->

    <!-- contact_action_area  -->
    <div class="contact_action_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="action_heading">
                        <h3>Add your property for sale</h3>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="call_add_action">
                        <span>+ 212 643 726 631</span>
                        <a href="addproperty.php" class="boxed-btn3-line">Add Property</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /contact_action_area  -->

    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p>
                                    <a href="#">ibrahimhajiri10@gmail.com</a> <br>
                                    +212 643726631 <br>
                                    3600/D, QU JERRIFATE ,SAFI
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="https://fr-fr.facebook.com/mesutoezil/">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/ibrahim_hajiri">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/ibrahim_hajiri/?hl=fr">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                            Latest Listings
                            </h3>
                            <ul>
                                <li><a href="https://afito.com/off-campus-housing/middle-tennessee-state-university/220-indian-park-drive-murfreesboro-tennessee-5656">Hawthorne Park </a></li>
                                <li><a href="https://afito.com/off-campus-housing/middle-tennessee-state-university/805-bradyville-pike-murfreesboro-tennessee-5655"> Chelsea Place</a></li>
                                <li><a href="https://afito.com/off-campus-housing/middle-tennessee-state-university/1211-hazelwood-street-murfreesboro-tennessee-5653">Ashwood Cove </a></li>
                                <li><a href="https://afito.com/off-campus-housing/middle-tennessee-state-university/2945-elam-rd-murfreesboro-tennessee-5657">The Village </a></li>
                                <li><a href="https://afito.com/off-campus-housing/middle-tennessee-state-university/805-bradyville-pike-murfreesboro-tennessee-5655"> Chelsea Place 
                            </a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                  Pages
                            </h3>
                            <ul>
                            <li><a  href="index.php">home</a></li>
                             <li><a class="active"href="Property.php">Property</a></li>
                             <li><a href="school.php">School</a></li>
                             <li><a href="addproperty.php">add property</a></li>
                             <li><a href="about.php">about</a></li>
                             <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget">
                                    <h3 class="footer_title">
                                    Subscribe
                                    </h3>
                                    <form action="#" class="newsletter_form">
                                        <input type="text" placeholder="Enter your mail">
                                        <button type="submit">Subscribe</button>
                                    </form>
                                    
                                </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                        Copyright &copy; 2020
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- link that opens popup -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- <script src="js/vendor/jquery-1.12.4.min.js"></script> -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="js/slick.min.js"></script>
   

    
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
    <script>
        function collision($div1, $div2) {
            var x1 = $div1.offset().left;
            var w1 = 40;
            var r1 = x1 + w1;
            var x2 = $div2.offset().left;
            var w2 = 40;
            var r2 = x2 + w2;

            if (r1 < x2 || x1 > r2)
                return false;
            return true;
        }
        // Fetch Url value 
        var getQueryString = function (parameter) {
            var href = window.location.href;
            var reg = new RegExp('[?&]' + parameter + '=([^&#]*)', 'i');
            var string = reg.exec(href);
            return string ? string[1] : null;
        };
        // End url 
        // // slider call
        $('#slider').slider({
            range: true,
            min: 20,
            max: 200,
            step: 1,
            values: [getQueryString('minval') ? getQueryString('minval') : 20, getQueryString('maxval') ?
                getQueryString('maxval') :200
            ],

            slide: function (event, ui) {

                $('.ui-slider-handle:eq(0) .price-range-min').html( ui.values[0] + 'K');
                $('.ui-slider-handle:eq(1) .price-range-max').html( ui.values[1] + 'K');
                $('.price-range-both').html('<i>K' + ui.values[0] + ' - </i>K' + ui.values[1]);

                // get values of min and max
                $("#minval").val(ui.values[0]);
                $("#maxval").val(ui.values[1]);

                if (ui.values[0] == ui.values[1]) {
                    $('.price-range-both i').css('display', 'none');
                } else {
                    $('.price-range-both i').css('display', 'inline');
                }

                if (collision($('.price-range-min'), $('.price-range-max')) == true) {
                    $('.price-range-min, .price-range-max').css('opacity', '0');
                    $('.price-range-both').css('display', 'block');
                } else {
                    $('.price-range-min, .price-range-max').css('opacity', '1');
                    $('.price-range-both').css('display', 'none');
                }

            }
        });

        $('.ui-slider-range').append('<span class="price-range-both value"><i>' + $('#slider').slider('values', 0) +
            ' - </i>' + $('#slider').slider('values', 1) + '</span>');

        $('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">' + $('#slider').slider('values', 0) +
            'k</span>');

        $('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">' + $('#slider').slider('values', 1) +
            'k</span>');
    </script>
</body>

</html>