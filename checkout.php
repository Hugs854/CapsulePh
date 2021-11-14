<link rel="icon" href="logo.png" sizes="16x16" type="image/png">
<?php
include "db.php";

include "header.php";


                         
?>

<style>

.row-checkout {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container-checkout {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;

}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.checkout-btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
  font-weight: bold;
}

.checkout-btn:hover {
  background-color: #45a049;
}



hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row-checkout {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}


.prompt{
    background-color:rgba(0, 0, 0, 0.85);
    width: 100%;
    height: 100%;
    position: fixed;
    transition: 0.5s ease;
    top: 0;
    left: 0;
    display: flex;
    justify-content: center;
    justify-items: center;
    align-items: center;
    vertical-align: center;
    text-align: center;
    z-index: 103;
  }

  .prompt-text{
    font-size: 50px;
    color: white;
    width: 30%;
    pointer-events: none;
    display: none;
  }

  .lds-spinner {
  color: official;
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-spinner div {
  transform-origin: 40px 40px;
  animation: lds-spinner 1.2s linear infinite;
}
.lds-spinner div:after {
  content: " ";
  display: block;
  position: absolute;
  top: 3px;
  left: 37px;
  width: 6px;
  height: 18px;
  border-radius: 20%;
  background: #fff;
}
.lds-spinner div:nth-child(1) {
  transform: rotate(0deg);
  animation-delay: -1.1s;
}
.lds-spinner div:nth-child(2) {
  transform: rotate(30deg);
  animation-delay: -1s;
}
.lds-spinner div:nth-child(3) {
  transform: rotate(60deg);
  animation-delay: -0.9s;
}
.lds-spinner div:nth-child(4) {
  transform: rotate(90deg);
  animation-delay: -0.8s;
}
.lds-spinner div:nth-child(5) {
  transform: rotate(120deg);
  animation-delay: -0.7s;
}
.lds-spinner div:nth-child(6) {
  transform: rotate(150deg);
  animation-delay: -0.6s;
}
.lds-spinner div:nth-child(7) {
  transform: rotate(180deg);
  animation-delay: -0.5s;
}
.lds-spinner div:nth-child(8) {
  transform: rotate(210deg);
  animation-delay: -0.4s;
}
.lds-spinner div:nth-child(9) {
  transform: rotate(240deg);
  animation-delay: -0.3s;
}
.lds-spinner div:nth-child(10) {
  transform: rotate(270deg);
  animation-delay: -0.2s;
}
.lds-spinner div:nth-child(11) {
  transform: rotate(300deg);
  animation-delay: -0.1s;
}
.lds-spinner div:nth-child(12) {
  transform: rotate(330deg);
  animation-delay: 0s;
}
@keyframes lds-spinner {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

input[type="submit"]:disabled {
  background: #FF7F7F;
  color:black;
}




/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 999; /* Sit on top */
  padding-top: 50px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #0071ba;
  color: white;
}

.modal-body {
  padding: 2px 16px;
  display: block;
  margin-left: auto;
  margin-right: auto;
}
#images{
    text-align:center;
}
.modal-footer {
  padding: 2px 16px;
  background-color: #fff;
  text-align:center;
}


.myBtn{
  background: url("gcash.jpg");
  color: white;
  height: 60px;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 55px;
  cursor: pointer;
  font-size: 17px;
  font-weight: bold;
  background-size:     cover;                      /* <------ */
  background-repeat:   no-repeat;
  background-position: center center;   
}

.imgHeader{
  border-radius: 17px;
  display: block;
  margin-left: auto;
  margin-right: auto;
 
  height: 50px;
}

input[type='number']{
    width: 90px;
    text-align: center; 
} 
</style>

<div id="prompt" class="prompt">

<p id="promptxt" class="prompt-text">PRESS ANY KEY TO CONTINUE</p>
</div>
					
<section class="section">       
	<div class="container-fluid">
		<div class="row-checkout">
      
		<?php
		if(isset($_SESSION["uid"])){
			$sql = "SELECT * FROM user_info WHERE user_id='$_SESSION[uid]'";
			$query = mysqli_query($con,$sql);
			$row=mysqli_fetch_array($query);
		
		echo'
			<div class="col-75">
				<div class="container-checkout">
				<form id="checkout_form" action="checkout_process.php" method="POST" class="was-validated">
					<div class="row-checkout">
					<div class="col-50">
						<h3>Billing Address</h3>
						<label for="fname"><i class="fa fa-user" ></i> Full Name</label>
						<input type="text" id="fname" class="form-control" name="firstname" pattern="^[a-zA-Z ]+$"  value="'.$row["first_name"].' '.$row["last_name"].'">
						<label for="email"><i class="fa fa-envelope"></i> Email</label>
						<input type="text" id="email" name="email" class="form-control" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$" value="'.$row["email"].'" required>
						<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
						<input type="text" id="adr" name="address" class="form-control" value="'.$row["address1"].'" required>
						<label for="city"><i class="fa fa-institution"></i> City</label>
						<input type="text" id="city" name="city" class="form-control" value="'.$row["address2"].'" pattern="^[a-zA-Z ]+$" required>
					</div>
					
					
					
					</div>
					';
					$i=1;
					$total=0;
					$total_count=$_POST['total_count'];
					while($i<=$total_count){
						$item_name_ = $_POST['item_name_'.$i];
						$amount_ = $_POST['amount_'.$i];
						$quantity_ = $_POST['quantity_'.$i];
						$total=$total+$amount_ ;
						$sql = "SELECT product_id FROM products WHERE product_title='$item_name_'";
						$query = mysqli_query($con,$sql);
						$row=mysqli_fetch_array($query);
						$product_id=$row["product_id"];
						echo "	
						<input type='hidden' name='prod_id_$i' value='$product_id'>
						<input type='hidden' name='prod_price_$i' value='$amount_'>
						<input type='hidden' name='prod_qty_$i' value='$quantity_'>
					
		
						";
						$i++;
					}
					
				echo'	
				<input type="hidden" name="total_count" value="'.$total_count.'">
					<input type="hidden" name="total_price" value="'.$total.'">
					<input type="submit" id="submit" value="FINISH PROCESS" class="checkout-btn">
				</form>
				</div>
			</div>
			';
		}else{
			echo"<script>window.location.href = 'cart.php'</script>";
		}
		?>

			<div class="col-25">
				<div class="container-checkout">
				
				<?php
				if (isset($_POST["cmd"])) {
				
					$user_id = $_POST['custom'];
					
					
					$i=1;
					echo
					"
					<h4>Cart 
					<span class='price' style='color:black'>
					<i class='fa fa-shopping-cart'></i> 
					<b>$total_count</b>
					</span>
				</h4>

					<table class='table table-condensed'>
					<thead><tr>
					<th >No.</th>
					<th >Product Title</th>
					<th >	QTY	</th>
					<th >	PRICE</th></tr>
					</thead>
					<tbody>
					";
					$total=0;
          $total2=0;
					while($i<=$total_count){

						$item_name_ = $_POST['item_name_'.$i];
						
						$item_number_ = $_POST['item_number_'.$i];
						
						$amount_ = $_POST['amount_'.$i];
						
						$quantity_ = $_POST['quantity_'.$i];
						$total2= ($total2+$amount_) * $quantity_ ;
            $total+=$total2;
            $total2= 0;
						$sql = "SELECT product_id FROM products WHERE product_title='$item_name_'";
						$query = mysqli_query($con,$sql);
						$row=mysqli_fetch_array($query);
						$product_id=$row["product_id"];
					
						echo "	

						<tr><td><p>$item_number_</p></td><td><p>$item_name_</p></td><td ><p>$quantity_</p></td><td ><p>$amount_</p></td></tr>";
						
						$i++;
					}

				echo '

				</tbody>
				</table>
				<hr>
				
				<h3>Total = <span class="price" style="color:black"><b>PHP '.number_format($total, 2).'</b></span></h3>';
					
				}
				?>
				</div>
				<div class="col-25">
					<br>
				<div class="container-checkout">
				<div id="smart-button-container">
  
  <div style="text-align: center"><label for="amount">Amount </label><span> PHP </span><input name="amountInput" type="number" id="amount" value="<?php echo $total; ?>" onblur="myFocusFunction()" readonly autofocus onkeypress="myFunction3()">  </div>
	<p id="priceLabelError" style="visibility: hidden; color:red; text-align: center;">Please enter a price</p>
  <div id="invoiceidDiv" style="text-align: center; display: none;"><label for="invoiceid"> </label><input name="invoiceid" maxlength="127" type="text" id="invoiceid" value="" ></div>
	<p id="invoiceidError" style="visibility: hidden; color:red; text-align: center;">Please enter an Invoice ID</p>
  <div style="text-align: center; margin-top: 0.625rem;" id="paypal-button-container"></div>
</div>
			</div>
			</div>
      <div class="col-25">
					<br>
				<div class="container-checkout" >
				<div id="smart-button-container" style="text-align: center">
        <a data-amount="<?php echo $total; ?>" data-fee="0" data-expiry="6" data-description="Payment for services rendered" data-href="https://getpaid.gcash.com/paynow" data-public-key="pk_test_d27b82d012ba859d536105484ed012b0" onclick="this.href = this.getAttribute('data-href')+'?public_key='+this.getAttribute('data-public-key')+'&amp;amount='+this.getAttribute('data-amount')+'&amp;fee='+this.getAttribute('data-fee')+'&amp;expiry='+this.getAttribute('data-expiry')+'&amp;description='+this.getAttribute('data-description');" href="https://getpaid.gcash.com/paynow?public_key=pk_5ee4e9c2421f332eb3058a0b51a8d08e&amp;amount=100&amp;fee=0&amp;expiry=6&amp;description=Payment for services rendered" target="_blank" class="x-getpaid-button"><img src="https://getpaid.gcash.com/assets/img/paynow.png"></a>	
            

          <!-- <button id="myBtn" class="myBtn"></button>

       
          <div id="myModal" class="modal">
        
            <div class="modal-content">
         <div class="modal-header">
          <img src="gcash2.png" class="imgHeader">
           </div>
         <br><br>
         <div class="modal-body">
          <div id="images">
        <img src="agcash.png" height="400px" width="400px">
                 <img src="tgcash.jpg" height="400px" width="400px">
             </div>
           </div>
          <br><br>
             <div class="modal-footer"> 
            <br>
         <h4 color="white">IMPORTANT: Kindly send us the receipt on our customer service email address: <a href="mailto:capsuleph582care@gmail.com" target="_blank"><i class="fa fa-envelope-o"></i> capsuleph582care@gmail.com</a></h4>
         <br>
           </div>
           </div>
          </div> -->
         
			</div>
			</div>
			</div>

		</div>
	</div>
</section>
		
		<script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=PHP" data-sdk-integration-source="button-factory"></script>
  <script>
  function initPayPalButton() {
  
    var amount = document.querySelector('#smart-button-container #amount');
    
    var priceError = document.querySelector('#smart-button-container #priceLabelError');
    var invoiceid = document.querySelector('#smart-button-container #invoiceid');
    var invoiceidError = document.querySelector('#smart-button-container #invoiceidError');
    var invoiceidDiv = document.querySelector('#smart-button-container #invoiceidDiv');

    var elArr = [amount];

    if (invoiceidDiv.firstChild.innerHTML.length > 1) {
      invoiceidDiv.style.display = "block";
    }

    var purchase_units = [];
    purchase_units[0] = {};
    purchase_units[0].amount = {};

    function validate(event) {
      return event.value.length > 0;
    }

    paypal.Buttons({
      style: {
        color: 'gold',
        shape: 'pill',
        label: 'checkout',
        layout: 'horizontal',
        
      },

      onInit: function (data, actions) {
        actions.disable();

        if(invoiceidDiv.style.display === "block") {
          elArr.push(invoiceid);
        }

        elArr.forEach(function (item) {
          item.addEventListener('keyup', function (event) {
            var result = elArr.every(validate);
            if (result) {
              actions.enable();
            } else {
              actions.disable();
            }
          });
        });
      },

      onClick: function () {
        

        if (amount.value.length < 1) {
          priceError.style.visibility = "visible";
        } else {
          priceError.style.visibility = "hidden";
        }

        if (invoiceid.value.length < 1 && invoiceidDiv.style.display === "block") {
          invoiceidError.style.visibility = "visible";
        } else {
          invoiceidError.style.visibility = "hidden";
        }

       
        purchase_units[0].amount.value = amount.value;

        if(invoiceid.value !== '') {
          purchase_units[0].invoice_id = invoiceid.value;
        }
      },

      createOrder: function (data, actions) {
        return actions.order.create({
          purchase_units: purchase_units,
        });
      },

      onApprove: function (data, actions) {
        return actions.order.capture().then(function (orderData) {

          // Full available details
          console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

          // Show a success message within this page, e.g.
          const element = document.getElementById('paypal-button-container');
          element.innerHTML = '';
          element.innerHTML = '<h3>Thank you for your payment!</h3>';

          // Or go to another URL:  actions.redirect('thank_you.html');
          
        });
      },

      onError: function (err) {
        console.log(err);
      }
    }).render('#paypal-button-container');
  }
  initPayPalButton();

  
// window.onload() = function() {
//     // document.getElementById('amount').value = '123';

//     // document.dispatchEvent(new KeyboardEvent("keydown", { key: "c" }));

// //     let element = document.querySelector('input');
// //     element.onkeydown = e => alert(e.key);
// //     element.dispatchEvent(new KeyboardEvent('keydown', {
// //     'key': 'a'
// // }));

// //     var prompt =  document.getElementById("prompt");
// //     prompt.style.display = "block";
// // }

    
// }
function myFunction3(){
    document.querySelector('.prompt').style.display = "none";
}

document.querySelector('.prompt').onclick = function () {
    
}

function myFocusFunction(){
    let myInput = document.getElementById('amount');
    setTimeout(function() { 
         myInput .focus(); 
    }, 100);
}


// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


  </script>
<script src='loading.js'></script>
<script>$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://g.payx.ph/payment_request',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array(
	'x-public-key' => 'pk_5ee4e9c2421f332eb3058a0b51a8d08e',
	'amount' => '100',
	'description' => 'Payment for services rendered'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;</script>

<?php
include "footer.php";
?>