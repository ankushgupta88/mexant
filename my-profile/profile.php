<?php
        include('../header.php'); 
    //     session_start();
     if(!isset($_SESSION['customer_session'])){
         header('location:../login.php');
      }
      


        ?>
        <style>.header-area.header-sticky {
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
        li.nav-item.menu-open a {
            padding: 13.5px 0px 10px 30px;
        }
        .login-dash {
            margin: 80px 0 0;
            background: #212741;
            padding: 50px 30px;
        }
        .login-conytent img {
            width: 50px;
            object-fit: cover;
            height: 40px;
            border-radius: 50%;
        }
        .show-profile {
    margin: 150px 0 0;
}

.show-profile img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

.show-profile h2, h3, h4, h5 {
    margin: 10px 0 10px;
}
button.btn.btn-primary.dropdown-toggle {
    color: #fff;
    display: inline-block;
    margin: 0 0 0 20px;
}
.conatiner {
    width: 1140px;
    margin: 0 auto;
}
i.nav-icon.fas.fa-tachometer-alt.nav-link {
    color: #fff;
    margin: 0 0 0 13px;
}
button.btn.btn-primary.dropdown-toggle {
    color: #fff;
    display: inline-block;
    margin: 0 0 0 30px;
    padding: 0;
}
        </style>
        <?php 
        $login_result_show = $_SESSION['customer_session'];
        $change = implode(" ",$login_result_show);
        
        $welcome_sql = "SELECT * FROM mexant_table WHERE id ='$change'";
        $welcome_result = mysqli_query($conn,$welcome_sql);
        $welcome_show = mysqli_fetch_assoc($welcome_result);
        
        ?>
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
            
           <div class="col-md-8"> 
             <div class="show-profile">
                <h2>Name: <?php echo $welcome_show['first_name']." ".$welcome_show['last_name'];?></h2>
                <h3>Email: <?php echo $welcome_show['email'];?></h3>
                <h4>Profile: <?php echo "<img src = '../upload/register/".$welcome_show['image']."'>";?></h4>
                <h5>Phone: <?php echo $welcome_show['phone'];?></h5>
                <h6>Gender: <?php echo $welcome_show['gender'];?></h5>
            </div>
          </div>
           </div>
        </div>





</style>
        

    <?php 
        include('../footer.php'); 
    ?>