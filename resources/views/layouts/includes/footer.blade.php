@section('footer')
<footer>
	<div class="footer-holder">
		<div class="footer-top">
			<div class="link-page">
				<ul>
					<li>
						<a href="about_us.php">
							ABOUT US
						</a>
					</li>
					<li>
						<a href="contact_us.php">
							CONTACT US
						</a>
					</li>
					<li>
						<a href="virtual_tour.php">
							VIRTUAL TOUR
						</a>
					</li>
					<li>
						<a href="faq.php">
							FAQS
						</a>
					</li>
				</ul>
			</div>
			<div class="soc-media">
				<span>CONNECT WITH US:</span>
				<ul>
					<li>
						<a href="javascript:void(0);">
							<div class="img-wrap">
								<img src="dist/images/fb-logo.png" alt="">
							</div>		
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<div class="img-wrap">
								<img src="dist/images/twitter-logo.png" alt="">
							</div>
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<div class="img-wrap">
								<img src="dist/images/insta-logo.png" alt="">
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="credits">
				<span>CASHLESS CURRENCY</span>
				<ul>
					<li>
						<a href="javascript:void(0);">
							<div class="img-wrap">
								<!-- <img src="dist/images/mastercard-logo.png" alt=""> -->
								<?php echo file_get_contents('dist/images/mastercard.svg'); ?>
							</div>		
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<div class="img-wrap">
								<!-- <img src="dist/images/visa-logo.png" alt=""> -->
								<?php echo file_get_contents('dist/images/visa.svg'); ?>
							</div>		
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<div class="img-wrap">
								<!-- <img src="dist/images/paypal-logo.png" alt=""> -->
								<?php echo file_get_contents('dist/images/paypal.svg'); ?>
							</div>		
						</a>
					</li>
				</ul>
			</div>
			<div class="address">
				<p>
					<strong>Camaya Coast</strong> G/F Prudential Life Bldg. No. 31 EDSA, Mandaluyong City 
					<span>Phone: (632) 535 1960</span> 
					<span>Email: info@camayacoast.com</span> 
					<strong>
					© 2016 Camaya Coast. All rights reserved.</strong>
				</p>
			</div>
		</div>	
	</div>
	
</footer>
@endsection