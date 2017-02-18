@extends('site')
@section('title')
    <title>Camaya - Our Residences</title>
@endsection
@section('content')
<div class="mainwrap page-residences">
	<div class="reg-banner">
		<img src="{{url('/uploads/banners/'.$banner)}}" alt="">
	</div>
	<div class="highlight">
		<h2>Residences</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam inventore numquam eius odio deserunt.</p>
	</div>
	<div class="discover-column">
		<div class="box-hover">
				<div class="box-image">
					<div class="img-holder">
						<img src="{{url('uploads/our-residence/'.$residence[0]->background_img)}}" alt="">
					</div>
				</div>
				<div class="box-description">
					<div class="box-details">
						<div class="name">
						{{$residence[0]->title}}
						</div>
						{!!$residence[0]->description!!}
						<a href="javascript:void(0);" class="btn-main pop" rel="popdiscover01">DISCOVER MORE</a>
					</div>
				</div>
		</div>
		<div class="box-hover">
				<div class="box-image">
					<div class="img-holder">
						<img src="{{url('uploads/our-residence/'.$residence[1]->background_img)}}" alt="">
					</div>
				</div>
				<div class="box-description">
					<div class="box-details">
						<div class="name">
							{{$residence[1]->title}}
						</div>
						{!!$residence[1]->description!!}
						<a href="javascript:void(0);" class="btn-main pop" rel="popdiscover02">DISCOVER MORE</a>
					</div>
				</div>	
		</div>
	</div>
	<div class="com-bgline">
		<div class="highlight">
			<h2>Communities</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam inventore numquam eius odio deserunt.</p>
		</div>
		<div class="community-slide">
			@foreach($communities as $community)
			<div class="box-hover">
				<a href="javascript:void(0);">
					<div class="box-image">
						<div class="img-holder">
							<img src="{{url('uploads/community/'.$community->background_img)}}" alt="">
						</div>
					</div>
					<div class="box-description">
						<div class="box-details">
							<div class="name">
								{{$community->title}}
							</div>
							<!-- <p> -->
							{!!$community->description!!}
							<!-- </p> -->
						</div>
					</div>	
				</a>
			</div>
			@endforeach
		</div>
	</div>
	<!-- <footer> -->
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
	<!-- </footer> -->
</div>
@endsection