@extends('site')
@section('title')
    <title>Camaya - Promos & Events</title>
@endsection
@section('content')

<div class="mainwrap page-promos promo-page">
	<div class="reg-banner">
		<img src="{{url('/uploads/banners/'.$banner)}}" alt="">
	</div>

	<div class="promo-highlights">
		<div class="section-article">
			<div class="description">
				<h2>Description Header</h2>
				<p>
					A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.
				</p>
				<a href="promos_article_inner.php" class="btn-main">VIEW THIS DEAL</a>
			</div>
		</div>	
	</div>
	<div class="event-highlights">
		<div class="section-article">
			<div class="description">
				<h2>Description Header</h2>
				<p>
					A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.
				</p>
				<a href="promos_article_inner.php" class="btn-main">VIEW THIS DEAL</a>
			</div>
		</div>
	</div>
	
	<div class="highlight">
		<h2>Discover Exciting Promos and Discounts</h2>
	</div>
	<div class="promos_container">
		<div class="box-nav_container">
			<div class="box-nav">
				<div class="nav-opt {{Request::segment(1) == 'promos' ? 'nav-active' : '' }}" data-opt="promos">
					<h2>Promos</h2>
					<div class="img-holder_extend">
						<div class="white">
							{!! file_get_contents(url('dist/images/promo-tag.svg')) !!}
						</div>
						<div class="original">
							{!! file_get_contents(url('dist/images/promo-tag-act.svg')) !!}
						</div>
					</div>
				</div>
				<div class="nav-opt {{Request::segment(1) == 'events' ? 'nav-active' : '' }}" data-opt="events">
					<h2>Events</h2>
					<div class="img-holder_extend">
						<div class="white">
							{!! file_get_contents(url('dist/images/promo-drink.svg')) !!}
						</div>
						<div class="original">
							{!! file_get_contents(url('dist/images/promo-drink-act.svg')) !!}
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="opt-content_container">
			<div class="opt-content  {{Request::segment(1) == 'promos' ? 'opt-active' : '' }}" id="promos">
				<div class="com-bgline">
					@foreach($promos as $promo)
					<div class="article-post">
						<div class="article-landing">
							<a href="{{url('/promos/'.$promo->slug)}}">
								<div class="article-banner">
									<div class="img-holder">
										<img src="{{url('uploads/promos/'.$promo->file)}}" alt="">
									</div>
								</div>
								<article>
									<h3>{{$promo->title}}</h3>
									{!!$promo->content!!}
								</article>
							</a>
						</div>
					</div>
					@endforeach
					<button>Load More</button>
				</div>
			</div>
			<div class="opt-content {{Request::segment(1) == 'events' ? 'opt-active' : '' }}" id="events">
				<div class="com-bgline">
					@foreach($events as $event)
					<div class="article-post">
						<div class="article-landing">
							<a href="{{url('/events/'.$event->slug)}}">
								<div class="article-banner">
									<div class="img-holder">
										<img src="{{url('/uploads/events/'.$event->file)}}" alt="">
									</div>
								</div>
								<article>
									<h3>{{$event->title}}</h3>
									{!!$event->content!!}	
								</article>
							</a>
						</div>
					</div>
					@endforeach
					<button>Load More</button>
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