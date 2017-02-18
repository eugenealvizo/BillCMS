@extends('site')
@section('title')
    <title>Camaya - About Us </title>
@endsection
@section('content')
		<div class="mainwrap page-aboutus">
			<div class="reg-banner">
				<img src="{{url('/uploads/banners/'.$banner)}}" alt="">
			</div>
			<div class="aboutus_container cont_pad">
				<h2>About camaya</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus quos quis excepturi placeat inventore possimus nihil sed similique! Alias, quos. Perferendis optio assumenda iusto ratione at, deleniti consequatur fugiat voluptas! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus quos quis excepturi placeat inventore possimus nihil sed similique! Alias, quos. Perferendis optio assumenda iusto ratione at, deleniti consequatur fugiat voluptas!</p><div class="img-holder abt-img">
					<img src="http://lorempixel.com/output/nature-q-c-640-480-5.jpg" alt="">
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt consectetur rerum modi, expedita enim odit incidunt, mollitia, dolorem animi accusantium perspiciatis, repudiandae quia neque ipsa ex tenetur? Quia, deleniti, iure.</p>
				<div class="box-nav_container">
					<div class="box-nav">
						<div class="nav-opt nav-active" data-opt="resort">
							<h2>Resort</h2>
							<div class="img-holder">
							</div>
						</div>
						<div class="nav-opt" data-opt="hotel">
							<h2>Hotel</h2>
							<div class="img-holder">
							</div>
						</div>
						<div class="nav-opt" data-opt="residences">
							<h2>Residences</h2>
							<div class="img-holder">
							</div>
						</div>
					</div>
				</div>
				<div class="opt-content_container">
					<div class="opt-content  opt-active" id="resort">
						<p>Resort - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga fugit quos obcaecati dolorem cumque dignissimos amet in quis ea maiores voluptatum assumenda error dolorum modi blanditiis, odio eius minus vel.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat iusto nemo blanditiis, molestias fugit. Unde quam, non eaque expedita laborum ea nam asperiores vero qui nihil quaerat at illum deserunt?</p>
					</div>
					<div class="opt-content" id="hotel">
						<p>Hotel - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga fugit quos obcaecati dolorem cumque dignissimos amet in quis ea maiores voluptatum assumenda error dolorum modi blanditiis, odio eius minus vel.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eligendi recusandae, esse sit voluptatum tempora nulla! Temporibus, laborum, porro? Possimus facere molestiae officia nam ipsum totam eveniet doloremque ipsa illo.</p>
						<p>Sequi quisquam laudantium, porro sed libero odio. Odio totam atque natus velit earum tempora magnam autem iusto vitae. Nesciunt odit hic quae velit? Ad, adipisci placeat dicta. Quisquam ad, consectetur.</p>
					</div>
					<div class="opt-content" id="residences">
						<p>Residences - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga fugit quos obcaecati dolorem cumque dignissimos amet in quis ea maiores voluptatum assumenda error dolorum modi blanditiis, odio eius minus vel.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla repellat quo debitis delectus ratione, quidem eligendi iusto incidunt iste mollitia nostrum veniam. Aliquam ipsum molestiae pariatur repudiandae, quaerat quia! Debitis.</p>
					</div>
				</div>
			</div>
			<!-- FOOTER -->
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
			<!-- FOOTER -->
		</div>
@endsection