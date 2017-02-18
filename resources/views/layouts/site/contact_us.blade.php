@extends('site')
@section('title')
<title>Camaya - Things To Do</title>
@endsection
@section('content')
<div class="mainwrap page-contactus">
	<div class="reg-banner">
		<img src="{{url('/uploads/banners/'.$banner)}}" alt="">
	</div>
	<div class="contact_container">
		<div class="left">
			<div class="frame">
				<h2>Contact</h2>
				<div class="content">
					<h3>Head Office</h3>
					<div class="details">
						<p>G/F Prudential Life Bldg. No. 31 EDSA Manadaluyong City</p>
						<span class="num">(632) 535 1960</span>
						<span class="email">info@camayacoast.com</span>
					</div>
				</div>
				<div class="content">
					<h3>Property Sales Office</h3>
					<div class="details">
						Manila
						<span class="num">(02)535 1960</span>
					</div>
					<div class="details">
						Subic
						<span class="num">(043)223 9094 to 95</span>
					</div>
					<div class="details">
						Bataan
						<span class="num">(047) 791 4897</span>
					</div>
				</div>
				<div class="content">
					<h3>Corporate Events</h3>
					<div class="details">
						<span class="email">event@camayacoast.com</span>
					</div>
				</div>
			</div>
		</div>
		<div class="right">
			<h2>Drop A Message</h2>
			<form action="" method="POST" id="contact-frm">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="text" name="name" id="name" placeholder="Name">
				<input type="text" name="email" id="email" placeholder="Email">
				<textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
				<button id="btn-contact">Send</button>
			</form>
		</div>
	</div>
<footer>
	    <div class="footer-holder">
	        <div class="footer-top">
	            <div class="link-page">
	                <ul>
	                    <li>
	                        <a href="{{url('/')}}/about-us">
	                            ABOUT US
	                        </a>
	                    </li>
	                    <li>
	                        <a href="{{url('/')}}/contact-us">
	                            CONTACT US
	                        </a>
	                    </li>
	                    <li>
	                        <a href="{{url('/')}}/virtual-tour">
	                            VIRTUAL TOUR
	                        </a>
	                    </li>
	                    <li>
	                        <a href="{{url('/')}}/faqs">
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
</div>
@endsection