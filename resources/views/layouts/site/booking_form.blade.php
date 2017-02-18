@extends('site')
@section('title')
    <title>Camaya - Places To Stay </title>
@endsection
@section('content')
		<div class="mainwrap page-booking">
			<div class="reg-banner">
				<img src="http://carbondigital.com.ph/proto/camaya/dist/images/new_header.jpg" alt="">
			</div>
			<div class="booking_container">
				<div class="right">
					<div class="progress">
						<div class="step current">
							<h3>Step 1</h3>
						</div>
						<div class="step">
							<h3>Step 2</h3>
						</div>
						<div class="step">
							<h3>Step 3</h3>
						</div>
						<div class="bar"></div>
					</div>
					<div class="booking-form">
						<form action="" class="">
							<div class="form-step01  active_form ">
								
								<div class="book_class">
									<h4>Book A*</h4>
									<div id="bkroom" class="class_sel class_active" data-book="room">
										Room
									</div>
									<div id="bkday" class="class_sel" data-book="trip">
										Day Trip
									</div>
								</div>
								<div id="room" class="room_form-step01 active_type">
									<div class="book_date">
										<h4>Date of Visit</h4>
										<div class="frame">
											<input type="date" placeholder="mm/dd/yy" data-field="date" class="datepick-launch from-no" readonly>	
											<span>to</span>
											<?php echo file_get_contents('dist/images/right-arrow.svg'); ?>
											<input type="date" placeholder="mm/dd/yy" data-field="date" class="datepick-launch" readonly>
										</div>
									</div>
									<div class="book_guests">
										<h4>Guests*</h4>
										<div class="frame">
											<select name="" id="">
												<option value="">1 Adult</option>
												<option value="">2 Adults</option>
												<option value="">3 Adults</option>
												<option value="">4 Adults</option>
											</select>
											<select name="" id="">
												<option value="">1 Kid</option>
												<option value="">2 Kids</option>
												<option value="">3 Kids</option>
												<option value="">4 Kids</option>
											</select>
										</div>
									</div>
									<div class="rooms_container">
										<h4>Choose A Room</h4>
										<div class="room">
											<div class="check_div">
												<input class="take" id="" type="checkbox">
												<label for="takeroom" class="take label">Take this Room</label>
											</div>
											<div class="info_div img-desc">
												<div class="img-holder">
													<img src="http://lorempixel.com/output/nature-q-c-640-480-7.jpg" alt="">
												</div>
												<div class="desc">
													<h5>Deluxe King</h5>
													<div class="room_cap">Capacity <span>2</span> people</div>
												</div>
											</div>
											<div class="info_div numroom">
												No. of Rooms
												<select name="" id="">
													<option value="">1</option>
													<option value="">2</option>
													<option value="">3</option>
												</select>
											</div>
											<div class="info_div price-butt">
												<div class="price">Php 8000</div>
												<a href="javascript:void(0);" class="btn-main pop" rel="pop-roomdetail">
													View Details
												</a>
											</div>
										</div>
										<div class="room">
											<div class="check_div">
												<input class="take" id="" type="checkbox">
												<label for="takeroom" class="take label">Take this Room</label>
											</div>
											<div class="info_div img-desc">
												<div class="img-holder">
													<img src="http://lorempixel.com/output/nature-q-c-640-480-7.jpg" alt="">
												</div>
												<div class="desc">
													<h5>Deluxe King</h5>
													<div class="room_cap">Capacity <span>2</span> people</div>
												</div>
											</div>
											<div class="info_div numroom">
												No. of Rooms
												<select name="" id="">
													<option value="">1</option>
													<option value="">2</option>
													<option value="">3</option>
												</select>
											</div>
											<div class="info_div price-butt">
												<div class="price">Php 8000</div>
												<a href="javascript:void(0);" class="btn-main pop" rel="pop-roomdetail">
													View Details
												</a>
											</div>
										</div>
										
									</div>
								</div>
								<div id="trip" class="day_form-step01">
									<div class="book_date">
										<h4>Date of Visit*</h4>
										<input type="date" placeholder="mm/dd/yyyy">
									</div>
									<div class="book_guests">
										<h4>Guests*</h4>
										<div class="frame">
											<select name="" id="">
												<option value="">1 Adult</option>
												<option value="">2 Adults</option>
												<option value="">3 Adults</option>
												<option value="">4 Adults</option>
											</select>
											<select name="" id="">
												<option value="">1 Kid</option>
												<option value="">2 Kids</option>
												<option value="">3 Kids</option>
												<option value="">4 Kids</option>
											</select>
										</div>
									</div>
									<div class="requests">
										<h4>Additional Requests</h4>
										<div class="class_sel class_active">
											Meal
											<?php echo file_get_contents('dist/images/tray.svg'); ?>
											<div class="mprice-container">Php 199</div>
										</div>
										<div class="class_sel">
											Locker
											<?php echo file_get_contents('dist/images/locker.svg'); ?>
											<div class="lprice-container">Php 49</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-step02">
								<h4>Guest Information</h4>
								<div class="row">
									<div class="holder title">
										<h5>Title*</h5>
										<select name="" id="">
											<option value="">Mr.</option>
											<option value="">Ms.</option>
										</select>
									</div>
									<div class="holder fname">
										<h5>First Name*</h5>
										<input type="text" placeholder="What is your name?">
									</div>
									<div class="holder lname">
										<h5>Last Name*</h5>
										<input type="text" placeholder="What is your last name?">
									</div>
								</div>
								<div class="row">
									<div class="holder age">
										<h5>Age*</h5>
										<input type="text" placeholder="e.g. 24">
									</div>
									<div class="holder nat">
										<h5>Nationality*</h5>
										<input type="text" placeholder="e.g. Filipino">
									</div>
								</div>
								<div class="holder">
									<h5>E-mail address*</h5>
									<input type="text" placeholder="email@camayacoast.com">
								</div>
								<div class="row">
									<div class="holder ccode">
										<h5>Country Code</h5>
										<select name="" id="">
											<option value="">Philippines (+63)</option>
										</select>
									</div>
									<div class="holder acode">
										<h5>Area Code*</h5>
										<input type="text" placeholder="927">
									</div>
									<div class="holder cont_num">
										<h5>Contact Number*</h5>
										<input type="text" placeholder="00000000">
									</div>
								</div>
								
								<div class="holder">
									<h5>Address Line*</h5>
									<input type="text" placeholder="House #/unit/floor, street, barangay">
								</div>
								<div class="row">
									<div class="holder city">
										<h5>City*</h5>
										<input type="text" placeholder="City">
									</div>
									<div class="holder country">
										<h5>Country*</h5>
										<input type="text" placeholder="Country">
									</div>
								</div>
								<div class="holder eta">
									<h5>Estimated time of arrival*</h5>
									<select name="" id="" >
										<option value="">5:00 am</option>
										<option value="">6:00 am</option>
									</select>
								</div>
								<div class="holder nveh">
									<h5># of vehicles</h5>
									<input type="text" placeholder="N/A">
								</div>
								<div class="add_guests">
									<div class="line"></div>
									<div class="guests_container">
										<div class="guest_form" id="guest0">
											<div class="holder">
												<h5>First Name*</h5>
												<input type="text" placeholder="What is your name?">	
											</div>
											<div class="holder">
												<h5>Last Name*</h5>
												<input type="text" placeholder="What is your last name?">	
											</div>
											<div class="remove" id="0">
												
											</div>
										</div>
									</div>
									<div class="line"></div>
									<a href="javascript:void(0)">Add More Guests</a>
								</div>
							</div>
							<div class="form-step03">
								<div class="block-info">
									<div class="book_no">
										<h5>Your Booking No. is</h5>
										<span class="data-bookno">54321</span>
									</div>
									<div class="book_info">
										<h4>Booking Information</h4>
										<div class="info">
											Full name <span class="data-name">Mr. Firstname Lastname</span>
										</div>
										<div class="info">
											Address<span class="data-address">House No./ unit/ floor, street, House No./ unit/ floor, street, House No./ unit/ floor, street,</span>
										</div>
										<div class="info">
											City<span class="data-city">Makati</span>
										</div>
										<div class="info">
											Country <span class="data-country">Philippines</span>
										</div>
									</div>
									
								</div>
								<div class="block-info">
									<div class="book_info">
										<h4>Summary</h4>
										<div class="info">
											Arrival Date <span class="data-eta">November 29,2016</span>
										</div>
										<div class="info">
											Adult Pax <span class="data-pax">1</span>
										</div>
									</div>
								</div>
								<div class="block-info">
									<div class="book_info">
										<div class="">
											<div class="info">
												Day Trip 
												<span class="data-trip_price">Php 499</span>
											</div>
											<div class="info">
												<span class="label">Add on</span> 
												<span class="data-addon_type">Meal and Locker</span>
												<span class="data-addon_price">Php 248</span>
											</div>
											<div class="info">
												Total
												<span class="data-total">Php 747</span>
											</div>
										</div>
									</div>
								</div>
								<div class="block-info">
									<h4>Payment Information</h4>
									<div class="payment">
										<div class="">
											<h5>Payment Type*</h5>
											<select name="" id="">
												<option value="">Credit card</option>
											</select>
											<button>Pay Via PAYPAL</button>
											<span>Via Paypal feature (Online Payment, Instant confirmation)</span>
										</div>
										<div class="">
											<h5>Promotional Code</h5>
											<input type="text">
										</div>	
									</div>
								</div>
								<div class="block-info">
									<p>Payment for other incidentals incurred in the hotel can be settled through cash or credit card. (Mastercard, Visa, American Express, JCB, China Union Pay)</p>
									<p>Note: Kindly send a copy of the Voucher or Gift Certificate upon confirmation of booking.</p>

									<p>For further assistance, please do not hesitate to contact us. We look forward to welcoming you soon at Camaya Coast.</p>
								</div>
							</div>
							<div class="prog_buttons st01">								
								<button type="button" data-prog="back">Change Booking</button>
								<button type="button" data-prog="next">Next</button>
								<button type="button" data-prog="submit">Check Out</button>
							</div>
						</form>
					</div>
				</div>
				<div class="left">
					<div id="trip" class="summary trip">
						<h2>Booking Summary</h2>
						<div class="lefty date">
							Date of Visit
						</div>
						<div class="righty date">
							<div class="container-date">
								11/29/2016
							</div>
						</div>
						<div class="lefty">
							Day Trip:
						</div>
						<div class="righty">
							<div class="container-trip_price">
								Php 499
							</div>
						</div>
						<div class="lefty">
							Adult Pax:
						</div>
						<div class="righty">
							<div class="container-pax">
								1
							</div>
						</div>
						<div class="line"></div>
						<div class="lefty">
							Add on:
						</div>
						<div class="righty">
							
						</div>
						<div class="lefty addon">
							Meal
						</div>
						<div class="righty addon">
							<div class="container-meal_price">
								Php 199
							</div>
						</div>
						<div class="lefty addon">
							Locker
						</div>
						<div class="righty addon">
							<div class="container-locker_price">
								Php 49
							</div>
						</div>
						<div class="line"></div>
						<div class="lefty">
							Addon total:
						</div>
						<div class="righty">
							<div class="container-addon_total">
								Php 248
							</div>
						</div>
						<div class="lefty">
							Sub-total:
						</div>
						<div class="righty">
							<div class="container-subtotal">
								Php 499
							</div>
						</div>
						<div class="line"></div>
						<div class="lefty total-label">
							Total:
						</div>
						<div class="righty">
							<div class="container-total">
								Php 747.00
							</div>
						</div>

					</div>

					<div id="room" class="summary room active">
						<h2>Booking Summary</h2>
						<div class="lefty date">
							<span>Arrival Date</span>
							<span>Departure Date</span>
						</div>
						<div class="righty date">
							<span class="container-arrival_date">
								11/29/2016
							</span>
							<span class="container-departure_date">
								12/03/2016
							</span>
						</div>
						<div class="lefty">
							Overnight:
							<span class="container-numnights">4 nights</span>
						</div>
						<div class="righty">
							<div class="container">
								<span class="container-pernight_price">Php 6,400</span>
								<span class="container-totalpn_price">Php 25,600</span>
							</div>
						</div>
						<div class="lefty">
							Adult Pax:
						</div>
						<div class="righty">
							<div class="container-pax">
								1
							</div>
						</div>
						<div class="line"></div>
						<div class="lefty">
							Chosen Room:
						</div>
						<div class="righty">
							
						</div>
						<div class="lefty chosen_room">
							Deluxe King	<span class="container-num_room">1 room</span>	
						</div>
						<div class="righty">
							<div class="container-room_price">
								Php 8000
							</div>
						</div>
						<div class="line"></div>
						<div class="lefty">
							Room total:
						</div>
						<div class="righty">
							<div class="container-room_total">
								Php 8000
							</div>
						</div>
						<div class="lefty">
							Sub-total:
						</div>
						<div class="righty">
							<div class="container-subtotal">
								Php 33,600
							</div>
						</div>
						<div class="line"></div>
						<div class="lefty total-label">
							Total:
						</div>
						<div class="righty">
							<div class="container-total">
								Php 33,600
							</div>
						</div>

					</div>

					<div class="reminders">
						<h2>Reminders</h2>
						<h4>Inclusions</h4>
						<ul>
							<li>
								Access to infinity pool and beach
							</li>
						</ul>
						<div class="accordion_container">
							<button class="accord_button active_button">Other Information</button>
							<div class="accord_content active_accord">
								<ul>
									<li>
										Three (3) years old and above are charged the same as adult rate.
									</li>
									<li>
										Two (2) years old and below are free of charge.
									</li>
									<li>
										Pets are not allowed inside the hotel and resort premises.
									</li>
									<li>
										Cooking and bringing of food/drinks/liquor are not allowed.
									</li>
								</ul>
							</div>
							<button class="accord_button">Payment & Cancellation Policies</button>
							<div class="accord_content">
								<ul>
									<li>
										Three (3) years old and above are charged the same as adult rate.
									</li>
									<li>
										Two (2) years old and below are free of charge.
									</li>
									<li>
										Pets are not allowed inside the hotel and resort premises.
									</li>
									<li>
										Cooking and bringing of food/drinks/liquor are not allowed.
									</li>
								</ul>
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