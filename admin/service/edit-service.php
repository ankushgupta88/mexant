
 <?php 
include('../header.php');
//Check if session is exit or not


 $vary_get = $_GET['idt'];
 $query_select = "SELECT * FROM service WHERE id ='$vary_get'";
              $query_result = mysqli_query($conn,$query_select);
              $query_show = mysqli_fetch_assoc($query_result);
			  
			
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>form {
    margin-left: 250px;
}
textarea {
    height: 200px;
    width: 100%;
}</style>
</head>
</body>


          <!-- left column -->
         
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?php echo  SITE_URL?>submit/edit-submit.php" enctype="multipart/form-data">
			  
			


                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Add service</label>
                    <input type="hidden" name="idh" value="<?php echo $query_show['id']?>"><br>
                    <input type="text" class="form-control" name="service" placeholder="Add name" value="<?php echo $query_show['service_name']?>">
                  </div>
                  <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1"> descreption:</label>
                  <textarea name="desc" ><?php echo $query_show['service_desc']?></textarea>
                  </div>

                      <div class="custom-file">
                      <input type="file" name="choosefile" value=""/><br>
                      
                      </div>
                     
                    </div>
                  </div>
                 
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit">Submit</button>
                </div>
              </form>
            </div>
         
            <?php include('../footer.php');?>