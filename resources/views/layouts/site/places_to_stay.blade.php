@extends('site')
@section('title')
    <title>Camaya - Places To Stay </title>
@endsection
@section('content')
<div class="mainwrap page-places">
	<div class="reg-banner">
		<img src="{{url('/uploads/banners/'.$banner)}}" alt="">
	</div>
	<div class="our-hotels">
		<div class="highlight">
			<h2>Our Hotels</h2>
		</div>
		<div class="places_container">
			<div class="box-nav_container">
				<div class="box-nav">
					@foreach($hotels as $k => $v)
					<div class="nav-opt {{$k == 0 ? 'nav-active' : ''}}" data-opt="places-{{$k+1}}">
						<h2>{{$v->title}}</h2>
						<div class="img-holder_box">
							<img src="{{url('/uploads/hotels/'.$v->logo)}}" alt="">
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<div class="opt-content_container ">
				@foreach($hotels as $k1 => $v1)
				<div class="opt-content {{$k1 == 0 ? 'opt-active' : ''}}" id="places-{{$k1+1}}">
					<div class="article-side">
						<div class="section-article" style="background-image:url('{{url('uploads/hotels/'.$v1->background_img)}}');">
							<div class="description">
								<h2>{{$v1->title}}</h2>
								{!!$v1->description!!}
								<a href="javascript:void(0);" class="btn-main mini-poprooms hotel-num"  data-room="room-places-{{$k+1}}">VIEW ROOMS</a>
							</div>
						</div>	
					</div>	
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<div class="our-rooms">
		<div class="highlight">
			<h2>Our Rooms</h2>
		</div>
		@foreach($hotels as $k2 => $v2)
		<div class="rooms_container {{$k2 == 0 ? 'active' : ''}}" id="room-places-{{$k2+1}}">
			<div class="container box-nav_container">
				<div class="box-nav">
					@foreach($rooms as $z1 => $x1)
					@if($v2->id == $x1->hotel_id)
					<div class="nav-opt {{$z1 == 0 ? 'nav-active' : '' }}"  data-opt="hroom-{{$z1+1}}">
						<h2>{{$x1->title}}</h2>
						<div class="img-holder_noborder">
							<img src="dist/images/junior-bed.png" alt="">
						</div>
					</div>
					@endif
					@endforeach
<!-- 					<div class="nav-opt"  data-opt="seaside">
						<h2>SAND SEASIDE DELUXE</h2>
						<div class="img-holder_noborder">
							<img src="dist/images/seaside-bed.png" alt="">
							<?php /*include('dist/images/seaside-bed.svg');*/ ?>
						</div>
					</div>
					<div class="nav-opt"  data-opt="double">
						<h2>SAND DOUBLE DELUXE</h2>
						<div class="img-holder_noborder">
							<img src="dist/images/double-bed.png" alt="">
							<?php /*include('dist/images/double-bed.svg');*/ ?>
						</div>
					</div> -->
				</div>
			</div>
			<div class="opt-content_container">
				<div class="room-details">

					@foreach($rooms as $a => $b)
					@if($v2->id == $b->hotel_id)
					<div class="opt-content {{$a == 0 ? 'opt-active' : ''}}" id="hroom-{{$b->id}}">
							<div class="article-side junior active-desc">
								<div class="section-article full-article" style="background:url('{{url('uploads/hotels/'.$v->background_img)}}') no-repeat">
									<div class="description">
										<div class="ad-type">
											<h5>{{$b->price}}</h5>
										</div>
										<h2>{{$b->title}}</h2>
										<div class="guest-number">
											2 - 4 Guests
										</div>
										{!!$b->description!!}
										<a href="javascript:void(0);" class="btn-main place-btn">PLACES TO STAY</a>
										<a href="booking.php" class="btn-main">BOOK NOW</a>
										<a href="javascript:void(0);" class="btn-main btn-tominipop">VIEW DETAILS</a>
									</div>
								</div>
								<div class="other-hotels">
									<h2>See More Hotels</h2>

									<div class="list">
									@foreach($hotels as $k => $v)
										<div class="img-holder hotel-{{$k+1}}" data-opt="places-{{$k+1}}">
											<a href="javascript:void(0);">
												<img src="{{url('uploads/hotels/'.$v->logo)}}" alt="">
											</a>
										</div>
									@endforeach
									</div>
								</div>
								<!-- minipopup -->
								<div class="mini-pop page-placesdetails">
									<div class="section-article_slide add_activeJunior ">

										<div class="slide-container">
											<div class="image-output"></div>
										</div>

										<div class="side">
											<div class="close">
										      <?php echo file_get_contents('dist/images/close.svg'); ?>
										    </div>

											<div class="description">
												<h2>{{$b->title}}</h2>
												{!!$b->description!!}
												<div class="slide-pagination">
													<?php 
														$images = json_decode($b->images,TRUE);
														$dir = str_replace(' ', '-', $b->title);
													?>
													@for($i = 0; $i < count($images); $i++) 
													<div class="opt">
														<div class="img-holder">
															<img src="{{url('uploads/rooms/'.$dir.'/'.$images[$i])}}" alt="" class="{{$i == 0 ? 'active-pic' : ''}}">
														</div>
													</div>
													@endfor
												</div>
												<div class="button-holder">
													<a href="javascript:void(0);" class="btn-main book-btn">
														BOOK NOW
													</a>
													<a href="javascript:void(0);" class="btn-main place-btn">PLACES TO STAY</a>
												</div>	
											</div>
										</div>
									</div>		
								</div>
							</div>
					</div>
					@endif
					@endforeach
				</div>
			</div>	
		</div>
		@endforeach
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