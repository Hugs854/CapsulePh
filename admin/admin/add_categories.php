<?php
session_start();
include("../../db.php");


if(isset($_POST['add_cat']))
{

$catname=$_POST['cat_title'];
$cat_id=$_POST['cat_id'];

		
mysqli_query($con,"insert into categories (cat_id, cat_title) values ('$cat_id','$catname')") or die ("query incorrect");

header("location: catsuccess.php?catsuccess=1");


mysqli_close($con);
}
include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <form action="" method="post" type="form" name="form" enctype="multipart/form-data">
          <div class="col-md-5">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Add Category</h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
                    
                  <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Category ID</label>
                        <input type="text" id="cat_id" name="cat_id" required class="form-control">
                      </div>
                    </div>

                  <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Category Name</label>
                        <input type="text" id="cat_title" name="cat_title" required class="form-control">
                      </div>
                    </div>
                     
                  </div>
                
              </div>
              <div class="card-footer">
                  <button type="submit" id="add_cat" name="add_cat" required class="btn btn-fill btn-primary" >Update Categories</button>
              </div>
            </div>
          </div>
          
        </div>
         </form>
          
        </div>
      </div>
      <?php
include "footer.php";
?>