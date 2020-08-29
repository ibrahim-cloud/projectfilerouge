<?php include ('serverH.php');?>





  <?php 
  $user=$_SESSION['username'];
  if(!isset($_SESSION['username'])){
    header ('location:login.php');
  }


  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit_state = true;
      
      $rec = mysqli_query($db,"SELECT * FROM add_house where  id=$id");
      $record = mysqli_fetch_array($rec);
     $id=$record['id'];
      $name = $record['name'];
      $prix = $record['prix'];
      $description = $record['description'];
      $Bed = $record['Bed'];
      $bath = $record['bath'];
      $Nschool=$record['Nschool'];
      $phone=$record['phone'];
      $address = $record['address'];
    }
  
  
  ?>



<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Busicol</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->
     <!-- Icons font CSS-->
     <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="css/main1.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
  <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
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
                                            <a href="#">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#">
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
                                            <li><a  href="index.php">home</a></li>
                                            <li><a href="Property.php">Property</a></li>
                                            <li><a href="school.php">School</a></li>
                                            <li><a class="active"href="addproperty.php">add property</a></li>
                                            <li><a href="about.php">about</a></li>
                                          
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
        <!-- header-end -->
             <!-- bradcam_area  -->
             <div class="bradcam_area bradcam_bg_1">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="bradcam_text text-center">
                                    <h3> Add Property</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ bradcam_area  -->
        

 <div class="limiter">
        <div style= "background:#fff;;" class="container-table100">
      
			<div class="wrap-table100">
				<div class="table100" style="    width: 156%;
    margin-left: -325PX;">   
					<table class="table table-bordered"style="width:156%; " >
    <thead>
      <tr style="background-color: #001D38; color: aliceblue;">
        <th colspan="2">action</th>
        <th >photo</th>
        <th >Name</th>
        <th >Price</th>
        <th >Bed</th>
        <th  >Bath</th>
        <th >Phone</th>
        
        <th >Address</th>
        <th  >Near school</th>
        <th>Description</th>
               
        
      </tr>
    </thead>
    <tbody>
    <?php 
     $resultsF = mysqli_query($db, "SELECT * FROM add_house where landlord='$user'");
     while ($rowF = mysqli_fetch_array($resultsF)) { ?>
      <tr style="background-color: #001D38; color: aliceblue;">
        <td style="text-align: center;" class="column4"> <a href="addproperty.php?edit=<?php echo $rowF['id']; ?>" class="genric-btn info">edit</a> </td>
        <td style="text-align: center;" class="column4">	<a href="addproperty.php?del=<?php echo $rowF['id']; ?>"class="genric-btn danger">Delete</a></td>
  <td><img style=width:70px; class="img-responsive" src="<?php echo $rowF['img']; ?>" alt=""> </td>
        <td> <?php echo $rowF['name']; ?></td>
        <td><?php echo $rowF['prix']; ?></td>
       <td><?php echo $rowF['Bed']; ?></td>
         <td><?php echo $rowF['bath']; ?></td>
          <td><?php echo $rowF['phone']; ?></td>
           <td><?php echo $rowF['address']; ?></td>
            <td><?php echo $rowF['Nschool']; ?></td>
             <td><?php echo $rowF['description']; ?></td>
            
           
        
      </tr>
      
      <?php } ?>
    </tbody>
  </table>
				</div>
			</div>
		</div>
	</div>
    <!-- ================ contact section start ================= -->
<section>
     
  
</div>
     </div>
     </section>

<!-- ================ contact section start ================= -->












<style>


::placeholder {
  color: #001D38 !important;
  opacity: 1; /* Firefox */
}
/* #001D38 */
.single-input {
    display: block;
    width: 100%;
    line-height: 40px;
    border: none;
    outline: none;
    background: #deeffb;
    padding: 0 20px;
}
.single-textarea {
    display: block;
    width: 100%;
    line-height: 40px;
    border: none;
    outline: none;
    background: #deeffb;
    padding: 0 20px;
}
</style>





    <div class="section-top-border">
            <div class="container">
               
    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Add your House</h2>
                    </div>
            
  <div class="col-lg-12">
                        <form  method="POST" action="serverH.php"  class="form-contact contact_form"  id="contactForm" >
                            <div class="row">
                                 <input type="hidden" name="id" value="<?php echo $id; ?>">
                               <div class="col-6">
                               <div class="mt-10">
                                        <input class="single-input" name="namehouse" id="subject"  value="<?php echo $name; ?>" type="text"  placeholder="Enter name house">
                                    </div>
                                </div> 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="single-input" name="adresshouse" id="name"  value="<?php echo $address; ?>" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your address'" placeholder="Enter your address">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="single-input" name="bed" id="email" type="text"  value="<?php echo $Bed; ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter number bed'" placeholder="bed">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="single-input" name="bath" id="email" type="text"  value="<?php echo $bath; ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter number Bath'" placeholder="Bath">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <input class="single-input" type="file" id="email"  name="img" value="<?php echo $img; ?>" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter description'" placeholder=" description">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <input class="single-input" type="number" id="email"  name="phone" value="<?php echo $phone; ?>" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Phone'" placeholder=" Phone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="single-input" name="prix" id="email" type="text"  value="<?php echo $prix; ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter prix'" placeholder="prix">
                                    </div>
                                </div>
                                
                                   <div class="col-6">
                                    <div class="form-group">
                                                                <?php 
    $resultsSZ = mysqli_query($db, "SELECT * FROM school  ");
    ?>
                            <!-- <label for="cars">Choose a School:</label> -->
 <select style="height: 40PX;"  class="single-input" id="cars" name="Nschool">
  <option >Choose a Near School</option>
<?php 
  while ($rowZ = mysqli_fetch_array($resultsSZ)) { ?>

     <option name="Nschool"><?php echo $rowZ['name']; ?></option>
  
<?php } ?>
</select>
                                    </div>
                                </div>
                            </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="single-textarea" type="textarea" name="description" value="<?php echo $description; ?>" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter description'" placeholder=" description">
                                    </div>
                                </div>
                            </div>
  

                  
                            
                                        <input type="hidden" class="single-textarea" type='text' name="user" value="<?php echo $_SESSION['username']; ?>">
                                       
                                  
                          
                            <div class="form-group">
                            <?php if ($edit_state == false): ?>
			<button class="button button-contactForm boxed-btn"  type="submit" name="add_house" >Save</button>
		
<?php else: ?>
<button  class="button button-contactForm boxed-btn" type="submit" name="update" >update</button>
<?php endif ?>
                                
                            </div>
                        </form>
                    </div>
                   
                </div>
            </div>
</div>
        </section>
    <!-- ================ contact section end ================= -->
    
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
    
        <!-- JS here -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
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
        <script src="js/gijgo.min.js"></script>
    
        <!--contact js-->
        <script src="js/contact.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <!-- <script src="js/jquery.validate.min.js"></script> -->
        <script src="js/mail-script.js"></script>
    
        <script src="js/main.js"></script>
         <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
        <script>
            $('#datepicker').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
            });
            $('#datepicker2').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
    
            });
        </script>
    </body>
    
    </html>