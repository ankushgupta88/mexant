<?php 
    
  include('head.php');
   session_start();
//     if(isset($_SESSION['customer_session'])){
//         header('location:login.php');
//      }
//print_r($_SESSION['customer_session']);exit;

?>
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="<?php echo WEBSITE_URL?>index.php" class="logo">
                          <img src="<?php echo WEBSITE_URL; ?>assets/images/logo.png" alt="">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="<?php echo WEBSITE_URL?>" class="active">Home</a></li>
                          <li class="scroll-to-section"><a href="#services">Services</a></li>
                          <li class="scroll-to-section"><a href="#about">About</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Pages</a>
                              <ul class="sub-menu">
                                  <li><a href="<?php echo WEBSITE_URL?>aboutus.php">About Us</a></li>
                                  <li><a href="<?php echo WEBSITE_URL?>ourservice.php">Our Services</a></li>
                                  <li><a href="<?php echo WEBSITE_URL?>contact.php">Contact Us</a></li>
                              </ul>
                          </li>
						    <li class="scroll-to-section"><a href="#testimonials">Testimonials</a></li>				  
					<?php if(isset($_SESSION['customer_session'])){?>
						  <li><a href="<?php echo WEBSITE_URL?>logout.php">Logout</a></li> 
					<?php }else{ ?>
						 <li><a href="<?php echo WEBSITE_URL?>login.php">Login</a></li>  
					<?php } ?>
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  
 