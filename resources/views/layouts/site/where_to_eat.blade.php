@extends('site')
@section('title')
<title>Camaya - FAQS </title>
@endsection
@section('content')
<div class="mainwrap page-wheretoeat">
<div class="reg-banner">
	<img src="{{url('/uploads/banners/'.$banner)}}" alt="">
</div>
<div class="wheretoeat_container">
	<div class="highlight">
		<h2>You Always have the Choice!</h2>
	</div>

	<div class="container box-nav_container">
		<div class="box-nav">
			@foreach($eat as $k => $v)
			<div class="nav-opt {{$k == 0 ? 'nav-active' : '' }}" data-opt="eat-{{$k+1}}">
			{!!$k == 0 ? '<div class="flagin"></div>' : ''!!}
				<div class="img-holder">
					<img src="{{url('uploads/where-to-eat/'.$v->logo)}}" alt="">
				</div>
			</div>
			@endforeach
		</div>
	</div>

	<div class="opt-content_container">
		@foreach($eat as $k => $v)
		<div class="opt-content {{$k == 0 ? 'opt-active' : ''}}" id="eat-{{$k+1}}">
			{!!$k == 0 ? '<div class="flagin"></div>' : ''!!}
			<div class="section-article_slide eat-spec add_eat-{{$k+1}}">
				<div class="slide-container">
					<div class="image-output">
						<img src="dist/images/home-bottomstyle.jpg" alt="">
					</div>
				</div>

				<div class="side">
					<div class="description">
						<div class="img-holder brand-logo">
							<img src="{{url('uploads/where-to-eat/'.$v->logo)}}" alt="">
						</div>
						<!-- <p> -->
							{!!$v->content!!}
						<!-- </p> -->
						<div class="slide-pagination">
							<?php 
								$images = json_decode($v->images, TRUE);
								$title = str_replace(' ', '-', preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $v->title)).'/';
							?>
							@foreach($images as $a => $b)
							<div class="opt">
								<div class="img-holder">
									<img src="{{url('uploads/where-to-eat/'.$title.'/'.$b)}}" alt="" class="active-pic">
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
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
@endsection