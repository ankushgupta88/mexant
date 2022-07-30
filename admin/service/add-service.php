<?php include('../header.php');?>
 
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
              <form method="POST" action="<?php echo SITE_URL?>submit/service-submit.php "enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Add service</label>
                    <input type="text" class="form-control" name="service" placeholder="Add name">
                  </div>
                  <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1"> descreption:</label>
                  <textarea name="desc" value=""></textarea>
                  </div>

                  <div class="form-group">
		  <label for="sel1">Category</label>
		  <select name="category" class="form-control" id="category">
		  <option value="">Select Category</option>
		    <?php
        $select_cat = "SELECT * FROM service_category WHERE status='0'";
        $category_result1 = mysqli_query($conn,$select_cat);
			while($row = mysqli_fetch_assoc($category_result1)) {
			?>
				<option value="<?php echo $row["cat_id"];?>"><?php echo $row["cat_name"];?></option>
			<?php
			}
			?>
			
		  </select>
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