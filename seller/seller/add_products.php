<?php
session_start();
include("../../db.php");
include("connection.php");
$con = connection();
$email = $_SESSION['email'];
$sql = "Select * from seller_info where seller_email = '$email' ";
                        $result = mysqli_query($con, $sql);
                        $row = $result->fetch_assoc();
                        $idseller = $row ['seller_id'];


if(isset($_POST['btn_save']))
{
$product_name=$_POST['product_name'];
$details=$_POST['details'];
$price=$_POST['price'];
$c_price=$_POST['c_price'];
$product_type=$_POST['product_type'];
$brand=$_POST['brand'];
$qty=$_POST['qty'];
$tags=$_POST['tags'];

//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
	if($picture_size<=50000000)
	
		$pic_name=$picture_name;
		move_uploaded_file($picture_tmp_name,"../product_images/".$pic_name);
		
mysqli_query($con,"insert into products (product_cat, product_brand, qty,product_title, product_price, product_desc, product_image,product_keywords) values ('$product_type','$brand', '$qty', '$product_name','$price','$details','$pic_name','$tags')") or die ("query incorrect");

 header("location: sumit_form.php?success=1");
}

mysqli_close($con);
}
include "sidenav.php";
include "topheader.php";

?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <form action="" method="post" type="form" name="form" enctype="multipart/form-data">
          <div class="row">
          
                
         <div class="col-md-7">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Add Product</h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Title</label>
                        <input type="text" id="product_name" required name="product_name" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="">
                        <label for="">Add Image</label>
                        <input type="file" name="picture" required class="btn btn-fill btn-success" id="picture" >
                      </div>
                    </div>
                     <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" cols="80" id="details" required name="details" class="form-control"></textarea>
                      </div>
                    </div>
                  
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Pricing</label>
                        <input type="text" id="price" name="price" required class="form-control" step=".01">
                      </div>
                    </div>
                  </div>
                 
                  
                
              </div>
              
            </div>
          </div>
          <div class="col-md-5">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Specifications</h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
                    
                  <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Product Brand</label>
                        
                        <input type="text" id="brand" name="brand" required class="form-control" value="<?php echo $idseller; ?>" >
                       
                        
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Category</label>
                        <input type="number" id="product_type" name="product_type" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Product Quantity</label>
                        <input type="number" id="qty" name="qty" required class="form-control" value="" >
                      </div>
                    </div>
                 
                  
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Keywords</label>
                        <input type="text" id="tags" name="tags" required class="form-control" >
                      </div>
                    </div>
                  </div>
                
              </div>
              <div class="card-footer">
                  <button type="submit" id="btn_save" name="btn_save" required class="btn btn-fill btn-primary">Update Product</button>
              </div>
            </div>
          </div>
          
        </div>
         </form>
         <div class="row">
            <div class="col-md-6">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> Categories List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                        <tr><th>ID</th><th>Categories</th>
                    </tr></thead>
                    <tbody>
                      <?php 
                        $result=mysqli_query($con,"select * from categories")or die ("query 1 incorrect.....");
                        $i=1;
                        while(list($cat_id,$cat_title)=mysqli_fetch_array($result))
                        {	
                            $sql = "SELECT COUNT(*) AS count_items FROM products WHERE product_cat=$i";
                            $query = mysqli_query($con,$sql);
                            $row = mysqli_fetch_array($query);
                            $count=$row["count_items"];
                            $i++;
                        echo "<tr><td>$cat_id</td><td>$cat_title</td>

                        </tr>";
                        }
                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <?php
include "footer.php";
?>