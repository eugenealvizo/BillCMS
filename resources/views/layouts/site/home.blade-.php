@extends('site')
@section('title')
    <title>Camaya - Home </title>
@endsection
@section('content')

        <div class="mainwrap page-index">
            <div class="banner-booking_shortcut {{ $data->is_video == 1 ? 'for-video' : 'for-slide' }}">
                <div class="hero">
                    <div class="video-banner player" id="videobanner" data-property="{videoURL:'https://youtu.be/mcixldqDIEQ',containment:'self',autoPlay:true, mute:true, startAt:12, showControls:false, loop:true, ratio: 'auto', opacity:1}"></div>
                </div>
                <div class="slanted-banner">
                    <div class="slider-banner">
                    @foreach($banners as $banner)
                        <div class="slider">
                            <img src="{{url('uploads/home/banners/'.$banner)}}" alt="">
                        </div>  
                    @endforeach
                    </div>
                    <div class="home-arrow">
                        <button class="next">
                            
                        </button>
                        <button class="prev">
                            
                        </button>
                    </div>
                </div>  
                <div class="booking-shortcut">
                    <div class="booking-cta">
                    <form action="">
                        <div class="book_class">
                            <h4>Book A</h4>
                            <div class="class_sel class_active" data-class="bkroom">
                                Room
                            </div>
                            <div class="class_sel" data-class="bkday">
                                Day Trip
                            </div>
                        </div>
                        <div class="book_date">
                            <h4>Date of Visit</h4>
                                <input type="date" placeholder="mm/dd/yy" data-field="date" class="datepick-launch from-no" readonly>   

                            <span>to</span>
                            {!! file_get_contents(url('dist/images/right-arrow.svg')) !!}

                            <input type="date" placeholder="mm/dd/yy" data-field="date" class="datepick-launch" readonly>
                        </div>
                        <div class="book_guests">
                            <h4>Guests</h4>
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
                        <button>
                            <a href="booking.php">Book Now</a>
                        </button>
                    </form>
                </div>  
                </div>
                
            </div>
            
            <div class="v-slide">
                <div class="content">
                    <div class="img-vslider">
                        @foreach($images as $image) 
                        <div class="img-border">
                            <img src="{{url('uploads/home/images/'.$image)}}" alt="">
                        </div>
                        @endforeach
                    </div>

                    <div class="caption">
                        <div class="img-holder">
                            <img src="{{url('dist/images/home-thingstodotitle.png')}}" alt="">
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, vis ad aeque aliquam. Eam in diam soleat perpetua, nam dico explicari id. Facer recteque ea nec, ex cum eruditi expetenda rationibus. Sit sint autem movet ex, odio impetus facilisi ut has. Habeo phaedrum honestatis est ex, per eu saperet invenire, audiam legendos scriptorem te sit.

                        </p>
                        <a href="things.php" class="btn-main join-btn">JOIN THE FUN</a>
                    </div>
                </div>
            </div>
            <div class="promos-section">
                <div class="content">
                    <div class="title">
                        <div class="img-wrap background">
                            <img src="{{url('dist/images/home-promobg.png')}}" alt="">
                        </div>
                        <div class="img-wrap event-title">
                            <img src="{{url('dist/images/home-promotitle.png')}}" alt="">
                        </div>
                    </div>
                    <div class="container">
                        <div class="column">
                        @if(! empty($promo->file))
                            <div class="ad-box" style="background: url('{{url('uploads/promos/'.$promo->file)}}') no-repeat; background-size: cover;">
                        @else
                            <div class="ad-box">
                        @endif
                                <div class="ad-type">
                                    <h5>Promos</h5>
                                </div>
                                <div class="description">
                                    <h2>{{$promo->title}}</h2>
                                    {!!$promo->content!!}
                                    <a href="{{url('/')}}/promo/{{$promo->slug}}" class="btn-main">READ MORE</a>
                                </div>
                            </div>
                            <div class="button-holder">
                                <a href="{{url('/')}}/promos" class="btn-main">SEE ALL</a>
                            </div>
                                
                        </div>
                        <div class="column">
                        @if(! empty($events->file))
                            <div class="ad-box" style="background: url('{{url('uploads/events/'.$events->file)}}') no-repeat; background-size: cover;">
                        @else
                        <div class="ad-box">
                        @endif
                                <div class="ad-type">
                                    <h5>Events</h5>
                                </div>
                                <div class="description">
                                    <h2>{{$events->title}}</h2>
                                    {!!$events->content!!}
                                    <a href="{{url('/')}}/events/{{$events->slug}}" class="btn-main">READ MORE</a>
                                </div>
                            </div>
                            <div class="button-holder">
                                <a href="{{url('/')}}/events" class="btn-main">SEE ALL</a>
                            </div>  
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="home-bottomstyle">
                <div class="whatsnew-section">
                    <div class="content">
                        <div class="title">
                            <div class="img-wrap event-title">
                                <img src="{{url('dist/images/home-whatsnew.png')}}" alt="">
                            </div>
                        </div>
                        
                        <div class="container">
                            @foreach($articles as $article)
                            <div class="rounded-ad">
                                <div class="img-holder">
                                    <img src="{{url('/uploads/articles/'.$article->image)}}" alt="">
                                </div>
                                <div class="description">
                                    <h2>{{$article->title}}</h2>
                                    {!!$article->content!!}
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="button-holder">
                            <a href="{{url('/')}}/whats-new" class="btn-main">SEE ALL</a>
                        </div>
                    </div>
                </div>
                <!-- content -->

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
            
        </div>
@endsection
