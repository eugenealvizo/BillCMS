@extends('site')
@section('title')
    <title>Camaya - Search Result</title>
@endsection
@section('content')

<div class="mainwrap page-whatsnew">
	<div class="reg-banner">
		<img src="http://media-cache-ak0.pinimg.com/originals/13/af/4c/13af4c5e4ddc02fc6ecf14c6efe66c79.jpg" alt="">
	</div>
	<div class="com-bgline">
	@foreach($search as $s)
		<?php
			switch($s->module) {
			    case 'promo':
			    	$page = 'promos';
			        $slug = $s->slug;
			        break;
			    case 'event':
			    	$page = 'events';
			        $slug = $s->slug;
			        break;
			    case 'article':
			    	$page = 'whats-new';
			        $slug = $s->slug;
			        break;
			    case 'residence':
			    	$page = 'our-residence';
			        $slug = '';
			        break;
			    case 'todo':
			    	$page = 'things-to-do';
			        $slug = '';
			        break;
			    case 'hotel':
			    	$page = 'places-to-stay';
			        $slug = '';
			        break;
			}
		?>
		<div class="article-post">
			<div class="article-landing">
				@if($slug != '') 
				<a href="{{url('/')}}/{{$page}}/{{$slug}}">
				@else
				<a href="{{url('/')}}/{{$page}}">
				@endif
					<div class="article-banner">
						<div class="img-holder">
							<img src="http://media-cache-ec0.pinimg.com/originals/78/08/5f/78085fef2e02658b45d88b8481836e38.jpg" alt="">
						</div>
					</div>
					<article>
						<h3>{{$s->title}}</h3>
						{!!$s->desc!!}
					</article>
				</a>
			</div>
		</div>
	@endforeach
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