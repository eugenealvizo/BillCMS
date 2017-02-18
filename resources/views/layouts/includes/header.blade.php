	<div class="logo">
		<a href="{{url('/')}}">
		</a>
	</div>

	<nav>		
		<ul>
			<li id="nav-places"><a href="{{url('/')}}/places-to-stay">Places To Stay</a></li>
			<li id="nav-things"><a href="{{url('/')}}/things-to-do">Things To Do</a></li>
			<li id="nav-resid"><a href="{{url('/')}}/our-residences">Our Residences</a></li>  
			<li id="nav-where"><a href="{{url('/')}}/where-to-eat">Where To Eat</a></li>  
			<li id="nav-get"><a href="javascript:void(0);">Getting To Us</a>
				<ul>
					<li><a href="{{url('/')}}/getting-to-us#land" >Land</a></li>
					<li><a href="{{url('/')}}/getting-to-us#ferry" class=" ferry-go">Ferry</a></li>
					<li><a href="{{url('/')}}/getting-to-us#air" >Air</a></li>
				</ul>
			</li>  
			<li id="nav-new"><a href="{{url('/')}}/whats-new">What's New</a></li>  
			<li id="nav-prom"><a href="javascript:void(0);">Promos & Events</a>
				<ul>
					<li><a href="{{url('/')}}/promos" class="go">Promos</a></li>
					<li><a href="{{url('/')}}/events" class="go">Events</a></li>
				</ul>
			</li>                         
		</ul>

		<div class="booking">
			<a href="{{url('/')}}/book-now">Book Now!</a>
		</div>
	</nav>
	
	<a href="javascript:void(0);" class="search pop" rel="popsearch">
		{!! file_get_contents(url('dist/images/search.svg')) !!}
	</a>
	<button  class="mob-menu">
		{!! file_get_contents(url('dist/images/waves.svg')) !!}
		Menu
	</button>

