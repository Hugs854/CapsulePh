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
error_reporting(0);
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$product_id=$_GET['product_id'];
///////picture delete/////////
$result=mysqli_query($con,"select product_image from products where product_id='$product_id'")
or die("query is incorrect...");

list($picture)=mysqli_fetch_array($result);
$path="../product_images/$picture";

if(file_exists($path)==true)
{
  unlink($path);
}
else
{}
/*this is delet query*/
mysqli_query($con,"delete from products where product_id='$product_id'")or die("query is incorrect...");
}

///pagination

$page=$_GET['page'];

if($page=="" || $page=="1")
{
$page1=0;	
}
else
{
$page1=($page*10)-10;	
} 
include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        
        
         <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> Products List</h4>
                
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter " id="page1"> 
                    <thead class=" text-primary">
                      <tr><th>Image</th><th>Name</th><th>Pharmacy</th><th>Quantity</th><th>Price</th><th>
	<a class=" btn btn-primary" href="add_products.php">Add New</a></th></tr></thead>
                    <tbody>
                      <?php 

                        $result=mysqli_query($con,"select product_id,product_image, product_title, product_brand, qty, product_price from products  where  product_brand=$idseller")or die ("query 1 incorrect.....");

                        while(list($product_id,$image,$product_name, $product_brand,$qty, $price)=mysqli_fetch_array($result))
                        {
                        echo "<tr><td><img src='../../product_images/$image' style='width:100px; height:100px;'></td><td>$product_name</td>
                        <td>$product_brand</td>
                        <td>$qty</td>
                        <td>PHP $price</td>
                      
                        <td>
                        <a class= 'btn btn-success' onclick='javascript:confirmationDelete($(this));return false;' href='products_list.php?product_id=$product_id&action=delete'>Delete</a>
                        </td></tr>";
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

      <script>
function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
}
        </script>
      <?php
include "footer.php";
?>