@extends('site')
@section('title')
    <title>Camaya - What's New </title>
@endsection
@section('content')

<div class="mainwrap page-whats-newinner">
	<div class="reg-banner">
		<img src="{{url('/uploads/banners/'.$banner)}}" alt="">
	</div>
	<div class="content-article">
		<div class="full-article">
			<div class="article-inner">
				<div class="article-banner">
					<div class="img-holder">
						<img src="{{url('uploads/articles/'.$articles->image)}}" alt="">
					</div>
				</div>
				<article>
					<h3>{{$articles->title}}</h3>
					{!!$articles->content!!}
				</article>

				<div class="paginate-button">
					@if($prev != '')
					<a href="{{url('whats-new/'.$prev->slug)}}" class="btn-prev">
						PREV ARTICLE
					</a>
					@endif
					@if($next != '')
					<a href="{{url('whats-new/'.$next->slug)}}" class="btn-next">
						NEXT ARTICLE
					</a>
					@endif
				</div>
			</div>
		</div>
		@if(! empty($related))
		<div class="sidebar">
			<aside>
				<div class="other-topics">
					<h3>Related Topics</h3>
					@foreach($related as $r)
					<div class="mini-article">
						<a href="{{url('whats-new/'.$r->slug)}}">
							<div class="article-image">
								<div class="img-holder">
									<img src="{{url('uploads/articles/'.$r->image)}}" alt="">
								</div>	
							</div>
							<div class="details">
								<span class="title">
									{{$r->title}}
								</span>
								{!!$r->content!!}
							</div>
						</a>
					</div>
					@endforeach
				</div>		
			</aside>
		</div>
		@endif
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