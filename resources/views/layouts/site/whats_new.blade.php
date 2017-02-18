@extends('site')
@section('title')
    <title>Camaya - What's New </title>
@endsection
@section('content')
<div class="mainwrap page-whatsnew">
	<div class="reg-banner">
		<img src="{{url('/uploads/banners/'.$banner)}}" alt="">
	</div>
	<div class="com-bgline">
		@foreach($articles as $article)
		<div class="article-post">
			<div class="article-landing">
				<a href="{{url('whats-new/'.$article->slug)}}">
					<div class="article-banner">
						<div class="img-holder">
							<img src="{{url('uploads/articles/'.$article->image)}}" alt="">
						</div>
					</div>
					<article>
						<h3>{{$article->title}}</h3>
						{!!$article->content!!}
					</article>
				</a>
			</div>
		</div>
		@endforeach
		<button>Load More</button>
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