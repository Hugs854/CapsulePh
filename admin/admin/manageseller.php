
    <?php
session_start();
include("../../db.php");
include($_SERVER['DOCUMENT_ROOT'].'/CAPSTONE/capsule/seller/server/server.php');
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$seller_id=$_GET['seller_id'];
/*this is delet quer*/
mysqli_query($con,"delete from seller_info where seller_id='$seller_id'")or die("query is incorrect...");
}

if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete2')
{
$brand_id=$_GET['brand_id'];
/*this is delet quer*/
mysqli_query($con,"delete from brands where brand_id='$brand_id'")or die("query is incorrect...");
}

include "sidenav.php";
include "topheader.php";
?>

<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: #4CAF50; 
  color: black; 
  border: 2px solid #4CAF50;
 

}

.button1:hover {
  background-color: #fff;
  color: black;
  border: 2px solid #fff;
   box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}


</style>

      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
         <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Manage Pharmacy</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter table-hover" id="">
                    <thead class=" text-primary">
                      <tr><th>Pharmacy ID</th>
                      <th>Pharmacy Name</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Documents</th>
                       

                    </tr></thead>
                    <tbody>
                      <?php 
                        $result=mysqli_query($con,"select seller_id, bus_name, seller_name, seller_email, documents from seller_info")or die ("query 2 incorrect.......");

                        while(list($seller_id, $bus_name, $seller_name,$seller_email, $documents)=
                        mysqli_fetch_array($result))
                        {
                        echo "<tr>
                        <td>$seller_id</td>
                        <td>$bus_name</td>
                        <td>$seller_name</td>
                        <td><a href='mailto:$seller_email'>$seller_email</a></td>
                        <td>$documents</td>
                        
                         ";
                        echo"<td>
                        
                      
                        <a class='btn btn-danger' onclick='javascript:confirmationDelete($(this));return false;' href='manageseller.php?brand_id=$seller_id&action=delete2'>Delete Pharmacy<div class='ripple-container'></div></a>
                        <a class='btn btn-danger' onclick='javascript:confirmationDelete($(this));return false;' href='manageseller.php?seller_id=$seller_id&action=delete'>Delete Seller<div class='ripple-container'></div></a>
                        </td></tr>";
                        }
                        
                        mysqli_close($con);
                        ?>
                    </tbody>
                    
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                      </div>
            </div>

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Documents</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter table-hover" id="">
                    <thead class=" text-primary">
                      <tr>
                      <th>Pharmacy</th>
                     <th>File Requirements</th>
                     <th>File Download</th>
                    </tr></thead>
                    <tbody>
                    <?php foreach ($files as $file): ?>
    <tr>
      
     
      <td><?php echo $file['bus_name']; ?></td>
    
      <td><?php echo $file['documents']; ?></td>
      <td><a class="button button1" href="manageseller.php?file_id=<?php echo $file['seller_id']; ?>">Download</a></td>
    </tr>
  <?php endforeach;?>
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