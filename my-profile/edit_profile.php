<?php 
  include('../header.php');
//   session_start();
    if(!isset($_SESSION['customer_session'])){
        header('location:../login.php');
     }
  ?>

<style>
.header-area.header-sticky {
            min-height: 80px;
            background: #212741;
        }
        
        .login-conytent {
            margin: 130px 0 0;
            
        }
        a.nav-link.active {
            background: #212741 !important;
            border-radius: inherit;
        }
        li.nav-item.menu-open p {
            color: #fff;
        }
        li.nav-item.menu-open {
            padding: 13.5px 0px 10px 30px
}
        .login-dash {
            margin: 0px 0 0;
            background: #212741;
            padding: 50px 30px;
        }
form#register {
    margin: 50px auto 0px;
    width: 700px;
}
.header-area.header-sticky {
    min-height: 80px;
    background: #212741;
}
.background-header {
    position: inherit !important;
}
.header-area {
    position: inherit !important;
}
button.btn.btn-primary.dropdown-toggle {
    color: #fff;
    display: inline-block;
    margin: 0 0 0 12px;
    padding: 0;
}
i.nav-icon.fas.fa-tachometer-alt.nav-link {
    color: #fff;
}
a.nav-link.active {
            background: #212741 !important;
            border-radius: inherit;
        }
        .conatiner {
    width: 1140px;
    margin: 0 auto;
}
</style>

<?php
 $login_result_show = $_SESSION['customer_session'];
 $change = implode(" ",$login_result_show);
 
 $welcome_sql = "SELECT * FROM mexant_table WHERE id ='$change'";
 $welcome_result = mysqli_query($conn,$welcome_sql);
 $welcome_show = mysqli_fetch_assoc($welcome_result);

$checkbox =  $welcome_show['gender'];
//$checkbox1  = explode(',',$checkbox);?>
<div class="conatiner">
          <div class="row">
            <div class="col-md-4">
                <div class="login-dash">
                <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                  <li class="nav-item menu-open">
                    <a href="<?php echo SITE_URL?>" class="nav-link active">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Dashboard
                      </p>
                    </a>
                  </li>
                  <li class="nav-item menu-open">
                  <i class="nav-icon fas fa-tachometer-alt nav-link "></i>
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                    My profile
                    </button>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo WEBSITE_URL?>my-profile/profile.php">My profile</a></li>
                    <li><a class="dropdown-item" href="<?php echo WEBSITE_URL?>my-profile/edit_profile.php">Edit profile</a></li>
                    </ul>
                </div>
                
                  </li>
                  <li class="nav-item menu-open">
                    <a href="<?php echo SITE_URL?>" class="nav-link active">
                      <i class="fa fa-wrench" aria-hidden="true"></i>
                      <p>
                     create order
                       
                      </p>
                      
                    </a>
                    
                  </li>
                  <li class="nav-item menu-open">
                    <a href="<?php echo SITE_URL?>" class="nav-link active">
                      <i class="fa fa-wrench" aria-hidden="true"></i>
                      <p>
                       My Order
                       
                      </p>
                      
                    </a>
                    
                  </li>
                  <li class="nav-item menu-open">
                    <a href="<?php echo WEBSITE_URL?>logout.php" class="nav-link active">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                       logout
                      </p>
                    </a>
                  </li>
                </div>
</div>
    <!------form---->
       <div class="col-md-8">
       <div class="col-lg-10 offset-lg-1">
          <form id="register" class="net" action="edit_update.php" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                <input type="hidden" name="first_name" id="first_name" placeholder="Enter Your firstname" value="<?php echo $welcome_show['id'];?>" autocomplete="on" >
                  <input type="text" name="first_name" id="first_name" placeholder="Enter Your firstname" value="<?php echo $welcome_show['first_name'];?>" autocomplete="on" >
                </fieldset>
              </div>
			  <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="last_name" id="last_name" placeholder="Enter Your lastname"  value="<?php echo $welcome_show['last_name'];?>" autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="email" id="email" placeholder="Enter Your Email"  value="<?php echo $welcome_show['email'];?>" autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="phone" id="phone" placeholder="Enter Your phone" value="<?php echo $welcome_show['phone'];?>" autocomplete="on" >
                </fieldset>
              </div>
			<div class="col-lg-6">
                <fieldset>  
              Gender:
              <input type="radio" name="gender" id="gender" value="male" <?php echo ($welcome_show['gender']=='male')?'checked':'' ?>>Male
              <input type="radio" name="gender" id="gender" value="female" <?php echo ($welcome_show['gender']=='female')?'checked':'' ?>>female
              <input type="radio" name="gender" id="gender" value="others" <?php echo ($welcome_show['gender']=='others')?'checked':'' ?>>others
	</fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>  
                <input type="file" name="fileToUpload" id="fileToUpload">
              </div>
			  
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" name="submit" id="form-submit" class="button-register">submit</button>
                </fieldset>
              </div>
			   <div class="responce-loader-1 text-center mb-3" style="display:none; width: 100px;
    height: 100px;">
					<img src="<?php echo WEBSITE_URL; ?>assets/images/loading-buffering.gif" class="img-responce-loader"> 
				</div>
				<div class="order_submit_responce1 text-center"></div>
            </div>
          </form>
        </div>
		
       </div>
   </div>
</div>
<?php include('../footer.php');?>