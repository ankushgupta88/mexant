<?php include('header.php');?>

<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Our Services</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Main Banner Area End ***** -->
 <?php //get service category
		  $our_service = "SELECT* FROM service WHERE cat_id ='2'";
			 $our_service_show = mysqli_query($conn,$our_service);
			 //$num_rows = mysqli_num_rows($our_service_show);
		  
		?>	
  <section class="main-services">
    <div class="container">
      <div class="row">
	   <?php 
	   $count_service = 0;
	   while($row = mysqli_fetch_assoc($our_service_show)){ ?>
        <div class="col-lg-12">
          <div class="service-item">
            <div class="row">
			
			<?php if($count_service % 2 == 0){ ?>
              <div class="col-lg-6">
                <div class="left-image">
                   <?php echo "<img src ='upload/services/".$row['service_image']."'>";?>
				</div>
				
				</div>
				
              <div class="col-lg-6 align-self-center">
                <div class="right-text-content">
                  <i class="fas fa-archive"></i>
                  <h4><?php echo $row['service_name'];?></h4>
                  <p><?php echo $row['service_desc'];?></p>
                </div>
              </div>
			<?php } else { ?>
				 <div class="col-lg-6 align-self-center">
					<div class="left-text-content">
					  <i class="fas fa-archive"></i>
					  <h4><?php echo $row['service_name'];?></h4>
                  <p><?php echo $row['service_desc'];?></p>
					</div>
				  </div>
				  <div class="col-lg-6">
					<div class="right-image">
					  <?php echo "<img src ='upload/services/".$row['service_image']."'>";?>
					</div>
				  </div>
			  <?php } ?>
            </div>
          </div>
        </div>
		 <?php $count_service++; }?>
		<!---start---
        <div class="col-lg-12">
          <div class="service-item">
            <div class="row">
              <div class="col-lg-6 align-self-center">
                <div class="left-text-content">
                  <i class="fas fa-archive"></i>
                  <h4>Financial Solutions</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et ex massa. In ac laoreet urna. Curabitur eu enim nibh. Phasellus sodales nisi vel leo aliquam, ut tempus augue hendrerit. Pellentesque eu risus tincidunt, condimentum eros in, auctor augue. Vivamus et urna blandit, varius sapien sed.</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="right-image">
                  <img src="<?php echo WEBSITE_URL; ?>assets/images/service-image-02.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="service-item last-service">
            <div class="row">
              <div class="col-lg-6">
                <div class="left-image">
                  <img src="<?php echo WEBSITE_URL; ?>assets/images/service-image-03.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="right-text-content">
                  <i class="fas fa-archive"></i>
                  <h4>Cryptocurrency Exchanges</h4>
                  <p>Mauris id efficitur ante, vitae ultrices metus. Donec et nunc massa. Nullam non felis dignissim, dapibus turpis semper, vulputate lorem. Nam volutpat posuere tellus, in porttitor justo interdum nec. Aenean in dapibus risus, in euismod ligula. Aliquam vel scelerisque elit.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
		
      </div>
    </div>
	</div>
	<!----end---->
	</div>
	</div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Business <em>Solutions</em> and <strong>Crypto</strong> Investments</h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="green-button">
              <a href="#">Discover More</a>
            </div>
            <div class="orange-button">
              <a href="#">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="service-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>Investment in Details</h6>
            <h4>Upgrade your knowledge</h4>
          </div>
        </div>
        <div class="col-lg-10 offset-lg-1">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="active gradient-border"><span>Crypto Investments</span></div>
                    <div class="gradient-border"><span>Cryptocurrency Market</span></div>
                    <div class="gradient-border"><span>Financial Planning</span></div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="left-image">
                          <img src="<?php echo WEBSITE_URL; ?>assets/images/service-details-01.jpg" alt="">
                        </div>
                        <div class="right-content">
                          <h4>Learn more about cryptocurrency investments</h4>
                          <p>Etiam id ligula risus. Fusce fringilla nisl nunc, nec rutrum lectus cursus nec. In blandit nibh dolor, at rutrum leo accumsan porta. Nullam pulvinar eros porttitor risus condimentum tempus.</p>
                          <span>- Top Crypto prices and charts</span>
                          <span>- Is Cryptocurrency a good investment?</span>
                          <span class="last-span">- Crypto Market Insiders and News</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="<?php echo WEBSITE_URL; ?>assets/images/service-details-02.jpg" alt="">
                        </div>
                        <div class="right-content">
                          <h4>Read more on Cryptocurrency Market</h4>
                          <p>Fusce fringilla nisl nunc, nec rutrum lectus cursus nec. In blandit nibh dolor, at rutrum leo accumsan porta. Nullam pulvinar eros porttitor risus condimentum tempus.</p>
                          <span>- Digital Currency Exchange</span>
                          <span>- Trading Cryptocurrencies Online</span>
                          <span class="last-span">- Different Categories of Digital Currencies</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="<?php echo WEBSITE_URL; ?>assets/images/service-details-03.jpg" alt="">
                        </div>
                        <div class="right-content">
                          <h4>How to carefully plan on your online financials</h4>
                          <p>Pellentesque ipsum elit, congue a sapien laoreet, pellentesque ultricies risus. Nulla facilisi. Mauris vitae lacinia magna. Nam euismod sapien sit amet elementum blandit. Nulla non placerat neque.</p>
                          <span>- Financial Planning and Investments</span>
                          <span>- Business Networking</span>
                          <span class="last-span">- Managing Digital Assets</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="partners">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="<?php echo WEBSITE_URL; ?>assets/images/client-01.png" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="<?php echo WEBSITE_URL; ?>assets/images/client-01.png" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="<?php echo WEBSITE_URL; ?>assets/images/client-01.png" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="<?php echo WEBSITE_URL; ?>assets/images/client-01.png" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="<?php echo WEBSITE_URL; ?>assets/images/client-01.png" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="<?php echo WEBSITE_URL; ?>assets/images/client-01.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
   <?php include('footer.php');?>