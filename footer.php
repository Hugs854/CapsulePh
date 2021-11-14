<style>
footer{
 
  border-top: 3px solid #D10024;
  margin-top: 30px;
}
	</style>
<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Customer Service</h3>
								<p></p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Las Piñas City, Metro Manila, Philippines</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+63 956 5104 005</a></li>
									<li><p><b>Need assistance?</b></p> <a href="mailto:capsuleph582care@gmail.com" target="_blank"><i class="fa fa-envelope-o"></i>capsuleph582care@gmail.com</a></li>
								</ul>
								
							</div>
						</div>
						<div class="col-md-6 text-center" style="margin-top:80px;">
							<ul class="footer-payments">
								<li><a href="https://www.paypal.com/us/signin" target="_blank"><i class="fa fa-cc-paypal"></i></a></li>
								<li><img src="gcashicon1.png" width="150px" height="150px" border-radius= "25px"></li>
							</ul>
							
						</div>
						
						<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Contact Us</h3>
								<p></p>
								<ul class="footer-links">
								    <li><a href="#"><i class="fa fa-map-marker"></i>Calamba City, Laguna, Philippines</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+63 956 5104 005</a></li>
									<li><p><b>Send us a Feedback:</b></p> <a href="mailto:capsuleph582@gmail.com" target="_blank"><i class="fa fa-envelope-o"></i>capsuleph582@gmail.com</a></li>
								</ul>
								
							</div>
						</div>
						

						<div class="clearfix visible-xs"></div>

						
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->
                

			<!-- bottom footer -->
			
			<!-- /bottom footer -->
		</footer>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/actions.js"></script>
		<script src="js/sweetalert.min"></script>
		<script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
		<script>var c = 0;
        function menu(){
          if(c % 2 == 0) {
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";    
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";    
            c++; 
              }else{
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";        
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";        
            c++;
              }
        }
           
		
</script>
    <script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>
	
