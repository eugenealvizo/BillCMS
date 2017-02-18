@extends('site')
@section('title')
<title>Camaya - Things To Do</title>
@endsection
@section('content')
<div class="mainwrap page-thingstodo">
	<div class="reg-banner">
		<img src="{{url('/uploads/banners/'.$banner)}}" alt="">
	</div>
	<div class="things_container">
		<div class="highlight">
			<h2>Join the Fun!</h2>
		</div>
		<div class="opt-content_container">
			<div class="opt-content opt-active family-section" id="family">
				<div class="section-article" style="background-image:url('http://portraitphotographyhd.com/wp-content/uploads/2015/07/video-check-out-these-beautiful.jpg')" >
					<div class="description">
						<h2>Family Section</h2>
						<p>
							A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.
						</p>
						<a href="javascript:void(0);" class="btn-main">DISCOVER MORE</a>
					</div>
				</div>
				<div class="activities">
					<div class="act-close">
						<?php echo file_get_contents('dist/images/close.svg'); ?>
					</div>
					<div class="container">
						<div class="section-article_slide add_slickFam">

							<div class="slide-container">
								<div class="image-output"></div>
							</div>

							<div class="side">
								<div class="description">
										
									<h2><!-- Kayaking --></h2>
									<p>
										<!-- A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose. -->
									</p>
									<h3>Other Featured Activities</h3>

									<div class="slide-pagination">
										@foreach($things as $k => $v)
										<div class="opt">
											<div class="img-holder">
												<img src="{{url('uploads/things-to-do/'.$v->background_img)}}" alt="" class="{{$k == 0 ? 'active-pic' : ''}}">
											</div>
											<div class="title">
												<span>{{$v->title}}</span>
											</div>
											<div class="sub-description">
												<h2>{{$v->title}}</h2>
												{!!$v->content!!}
											</div>
										</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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