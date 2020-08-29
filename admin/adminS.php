<?php include ('ServerAdmin.php');?>





  <?php 
//   $user=$_SESSION['username'];
//   if(!isset($_SESSION['username'])){
//     header ('location:login.php');
//   }


  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit_state = true;
      
      $rec = mysqli_query($db,"SELECT * FROM school where  id=$id");
      $record = mysqli_fetch_array($rec);
     $id=$record['id'];
      $nameS = $record['name'];
     
      $descriptionS = $record['des'];
     
      
      $adressS = $record['address'];
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

    <!-- CSS here -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../css/nice-select.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/gijgo.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/slicknav.css">
    <link rel="stylesheet" href="../css/style.css">
  <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
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
                                                <li><a href="#"> <i class="fa fa-envelope"></i> info@docmed.com</a></li>
                                                <li><a href="#"> <i class="fa fa-phone"></i> 1601-609 6780</a></li>
                                                <li><a href="adminM.php">Admin</a></li>
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
                                            <li><a  href="../index.php">home</a></li>
                                            <li><a href="../Property.php">Property</a></li>
                                            <li><a href="../school.php">School</a></li>
                                            <li><a href="../addproperty.php">add property</a></li>
                                            <li><a href="../about.php">about</a></li>
                                        
                                            <li><a href="../contact.php">Contact</a></li>
                                            
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
                                    <h3> Manage school</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ bradcam_area  -->
        

 <div class="limiter">
        <div style= "background:#e0e0e0;;" class="container-table100">
      
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Name</th>
								<th style="text-align: center;" class="column2"> description</th>
								<th style="text-align: center;" class="column3">Address</th>
                                <th style="text-align: center;" colspan="2" class="column3">Action</th>
							</tr>
						</thead>
						<tbody> 
                             <?php 
                              $resultsS = mysqli_query($db, "SELECT * FROM school ");
                             
                             
                             
                             
                             
                             
                             
                             
                             
                             while ($rowS = mysqli_fetch_array($resultsS)) { ?>
								<tr>
									<td class="column1"><?php echo $rowS['name']; ?></td>
									<td style="text-align: center;" class="column2"><?php echo $rowS['des']; ?></td>
									<td style="text-align: center;" class="column3"><?php echo $rowS['address']; ?></td>
                                    <td style="text-align: center;" class="column4"> <a href="adminS.php?edit=<?php echo $rowS['id']; ?>" class="genric-btn info">edit</a> </td>
                                    <td style="text-align: center;" class="column4">	<a href="adminS.php?del=<?php echo $rowS['id']; ?>"class="genric-btn danger">Delete</a></td>
								</tr>
                                <?php } ?>
								
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
    <!-- ================ contact section start ================= -->
    <div class="section-top-border">
            <div class="container">
               
    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Add your House</h2>
                    </div>
            
  <div class="col-lg-8">
                        <form  method="POST" action="ServerAdmin.php"  class="form-contact contact_form"  id="contactForm" >
                            <div class="row">
                                 <input type="hidden" name="id" value="<?php echo $id; ?>">
                               <div class="col-6">
                               <div class="mt-10">
                                        <input class="single-input" name="nameS" id="subject"  value="<?php echo $nameS; ?>" type="text"  placeholder="Enter name School">
                                    </div>
                                </div> 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="single-input" name="adressS" id="name"  value="<?php echo $adressS; ?>" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your address'" placeholder="Enter your address">
                                    </div>
                                </div>
                               
                                
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="single-textarea" type="textarea" name="descriptionS" value="<?php echo $descriptionS; ?>" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter description'" placeholder=" description">
                                    </div>
                                </div>
                            </div>
                            
                                        <input type="hidden" class="single-textarea" type='text' name="user" value="<?php echo $_SESSION['username']; ?>">
                                       
                                  
                          
                            <div class="form-group mt-3">
                            <?php if ($edit_state == false): ?>
			<button class="button button-contactForm boxed-btn"  type="submit" name="add_school" >Save</button>
		
<?php else: ?>
<button  class="button button-contactForm boxed-btn" type="submit" name="updateS" >update</button>
<?php endif ?>
                                
                            </div>
                        </form>
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
        <script src="../js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="../js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
        <script src="../js/isotope.pkgd.min.js"></script>
        <script src="../js/ajax-form.js"></script>
        <script src="../js/waypoints.min.js"></script>
        <script src="../js/jquery.counterup.min.js"></script>
        <script src="../js/imagesloaded.pkgd.min.js"></script>
        <script src="../js/scrollIt.js"></script>
        <script src="../js/jquery.scrollUp.min.js"></script>
        <script src="../js/wow.min.js"></script>
        <script src="../js/nice-select.min.js"></script>
        <script src="../js/jquery.slicknav.min.js"></script>
        <script src="../js/jquery.magnific-popup.min.js"></script>
        <script src="../js/plugins.js"></script>
        <script src="../js/gijgo.min.js"></script>
    
        <!--contact js-->
        <script src="../js/contact.js"></script>
        <script src="../js/jquery.ajaxchimp.min.js"></script>
        <script src="../js/jquery.form.js"></script>
        <!-- <script src="js/jquery.validate.min.js"></script> -->
        <script src="../js/mail-script.js"></script>
    
        <script src="../js/main.js"></script>
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