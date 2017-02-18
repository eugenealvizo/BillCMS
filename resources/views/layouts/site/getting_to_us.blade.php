@extends('site')
@section('title')
    <title>Camaya - Our Residences</title>
@endsection
@section('content')
<div class="mainwrap page-gettingtous" id="1">
	<div class="reg-banner">
		<img src="{{url('/uploads/banners/'.$banner)}}" alt="">
	</div>
	<div class="getting_container">
		<div class="box-nav_container">
			<div class="box-nav">
				<div class="nav-opt nav-active" data-opt="land">
					<h2>Land</h2>
					<div class="img-holder_extend">
						<div class="white">
							<?php include('dist/images/car.svg'); ?>
						</div>
						<div class="original">
							<?php include('dist/images/car-orig.svg'); ?>
						</div>
					</div>
				</div>
				<div class="nav-opt" data-opt="ferry">
					<h2>Ferry</h2>
					<div class="img-holder_extend">
						<div class="white">
							<?php include('dist/images/boat.svg'); ?>
						</div>
						<div class="original">
							<?php include('dist/images/boat-orig.svg'); ?>
						</div>
					</div>
				</div>
				<div class="nav-opt" data-opt="air">
					<h2>Air</h2>
					<div class="img-holder_extend">
						<div class="white">
							<?php include('dist/images/airplane.svg'); ?>
						</div>
						<div class="original">
							<?php include('dist/images/airplane-orig.svg'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="opt-content_container ">
			<div class="opt-content opt-active" id="land">
					<div class="getting-content">
						<div class="route">
							<h2>Travel By Land</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt veniam corrupti voluptas. Ratione, necessitatibus. Sit facilis consequuntur provident optio tenetur, dolorum, nam odio harum magni, dolores sed. Sunt, dolorum, quibusdam.</p>
							
							<div class="route-highlight">
								Travel Route
							</div>

							<div class="direction-table">
								<table>
									<tbody>
										<thead>
											<tr>
												<th>
													From - To
												</th>
												<th>
													Travel Time
												</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													Ferry Terminal from Seaside Esplanade to Camaya Coast Dock
												</td>
												<td>
													1.45 hrs
												</td>
											</tr>
										</tbody>
									</tbody>
								</table>		
							</div>
						</div>
						<div class="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.5411857632153!2d120.42059131444287!3d14.45358498989626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c84515446799%3A0x96f77f6f97049cbe!2sCamaya+Coast+(Selling+Prime+Beach+Lots+at+Php.2M)!5e0!3m2!1sen!2sph!4v1481091670947" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>	
					</div>
						
			</div>
			<div class="opt-content" id="ferry">
				<div class="getting-content">
					<div class="route">
						<h2>Travel By Ferry</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt veniam corrupti voluptas. Ratione, necessitatibus. Sit facilis consequuntur provident optio tenetur, dolorum, nam odio harum magni, dolores sed. Sunt, dolorum, quibusdam.</p>
						
						<div class="route-highlight">
							Travel Route
						</div>

						<div class="direction-table">
							<table>
								<tbody>
									<thead>
										<tr>
											<th>
												From - To
											</th>
											<th>
												Travel Time
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												Ferry Terminal from Esplanade Seaside Terminal to Camaya Coast
											</td>
											<td>
												1.45 hrs
											</td>
										</tr>
									</tbody>
								</tbody>
							</table>		
						</div>
					</div>
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.5411857632153!2d120.42059131444287!3d14.45358498989626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c84515446799%3A0x96f77f6f97049cbe!2sCamaya+Coast+(Selling+Prime+Beach+Lots+at+Php.2M)!5e0!3m2!1sen!2sph!4v1481091670947" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>		
				</div>
				
			</div>
			<div class="opt-content" id="air">
				<div class="getting-content">
					<div class="route">
						<h2>Travel By Air</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt veniam corrupti voluptas. Ratione, necessitatibus. Sit facilis consequuntur provident optio tenetur, dolorum, nam odio harum magni, dolores sed. Sunt, dolorum, quibusdam.</p>
						
						<div class="route-highlight">
							Travel Route
						</div>

						<div class="direction-table">
							<table>
								<tbody>
									<thead>
										<tr>
											<th>
												From - To
											</th>
											<th>
												Travel Time
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												NAIA(follow travel route from Manila to Mariveles)
											</td>
											<td>
												-----
											</td>
										</tr>
										<tr>
											<td>
												Clark Airport (follow travel route from Manila to Mariveles)
											</td>
											<td>
												-----
											</td>
										</tr>
										<tr>
											<td>
												Subic Bay Airport (follow travel route from Manila to Mariveles)
											</td>
											<td>
												-----
											</td>
										</tr>
										<tr>
											<td>
												Chopper or Seaplane to Camaya Coast, Mariveles, Bulacan
											</td>
											<td>
												20 mins
											</td>
										</tr>
									</tbody>
								</tbody>
							</table>		
						</div>
					</div>
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.5411857632153!2d120.42059131444287!3d14.45358498989626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c84515446799%3A0x96f77f6f97049cbe!2sCamaya+Coast+(Selling+Prime+Beach+Lots+at+Php.2M)!5e0!3m2!1sen!2sph!4v1481091670947" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>	
				</div>
					
			</div>
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