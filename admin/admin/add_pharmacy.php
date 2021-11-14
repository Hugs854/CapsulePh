<?php
session_start();
include("../../db.php");


if(isset($_POST['add_phar']))
{

$pharmaname=$_POST['brand_title'];
$pharmaid=$_POST['brand_id'];


		
mysqli_query($con,"insert into brands (brand_id, brand_title) values ('$pharmaid','$pharmaname')") or die ("query incorrect");

header("location: pharsuccess.php?pharsuccess=1");


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
                <h5 class="title">Add Pharmacy</h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
                   
                  <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Pharmacy ID</label>
                        <input type="text" id="brand_id" name="brand_id" required class="form-control">
                      </div>
                    </div>

                  <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Pharmacy Name</label>
                        <input type="text" id="brand_title" name="brand_title" required class="form-control">
                      </div>
                    </div>
                     
                  </div>
                
              </div>
              <div class="card-footer">
                  <button type="submit" id="add_phar" name="add_phar" required class="btn btn-fill btn-primary" >Update Pharmacies</button>
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