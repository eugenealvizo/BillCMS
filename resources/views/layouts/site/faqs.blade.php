@extends('site')
@section('title')
    <title>Camaya - FAQS </title>
@endsection
@section('content')
<div class="mainwrap page-faq">
    <div class="reg-banner">
        <img src="{{url('/uploads/banners/'.$banner)}}" alt="">
    </div>
    <div class="faq_container cont_pad">
        <h2>Questions?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus quos quis excepturi placeat inventore possimus nihil sed similique! Alias, quos. Perferendis optio assumenda iusto ratione at, deleniti consequatur fugiat voluptas! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus quos quis excepturi placeat inventore possimus nihil sed similique! Alias, quos. Perferendis optio assumenda iusto ratione at, deleniti consequatur fugiat voluptas!</p>
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
                <div class="container">
                    <div class="accordion_container">
                        <button class="accord_button">Accordion 01</button>
                        <div class="accord_content">
                            <article>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi soluta dolorem ipsam voluptate cupiditate porro similique quas vero eos quo ducimus neque accusamus perspiciatis blanditiis, aperiam possimus aliquid quod inventore.</p>
                            </article>
                        </div>
                        <button class="accord_button">Accordion 02</button>
                        <div class="accord_content">
                            <article>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi soluta dolorem ipsam voluptate cupiditate porro similique quas vero eos quo ducimus neque accusamus perspiciatis blanditiis, aperiam possimus aliquid quod inventore.</p>
                            </article>
                        </div>
                        <button class="accord_button">Accordion 03</button>
                        <div class="accord_content">
                            <article>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi soluta dolorem ipsam voluptate cupiditate porro similique quas vero eos quo ducimus neque accusamus perspiciatis blanditiis, aperiam possimus aliquid quod inventore.</p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div class="opt-content" id="hotel">
                <div class="container">
                    <div class="accordion_container">
                        <button class="accord_button">Accordion 01</button>
                        <div class="accord_content">
                            <article>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi soluta dolorem ipsam voluptate cupiditate porro similique quas vero eos quo ducimus neque accusamus perspiciatis blanditiis, aperiam possimus aliquid quod inventore.</p>
                            </article>
                        </div>
                        <button class="accord_button">Accordion 02</button>
                        <div class="accord_content">
                            <article>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi soluta dolorem ipsam voluptate cupiditate porro similique quas vero eos quo ducimus neque accusamus perspiciatis blanditiis, aperiam possimus aliquid quod inventore.</p>
                            </article>
                        </div>
                        <button class="accord_button">Accordion 03</button>
                        <div class="accord_content">
                            <article>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi soluta dolorem ipsam voluptate cupiditate porro similique quas vero eos quo ducimus neque accusamus perspiciatis blanditiis, aperiam possimus aliquid quod inventore.</p>
                            </article>
                        </div>
                        <button class="accord_button">Accordion 04</button>
                        <div class="accord_content">
                            <article>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi soluta dolorem ipsam voluptate cupiditate porro similique quas vero eos quo ducimus neque accusamus perspiciatis blanditiis, aperiam possimus aliquid quod inventore.</p>
                            </article>
                        </div>
                        <button class="accord_button">Accordion 05</button>
                        <div class="accord_content">
                            <article>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi soluta dolorem ipsam voluptate cupiditate porro similique quas vero eos quo ducimus neque accusamus perspiciatis blanditiis, aperiam possimus aliquid quod inventore.</p>
                            </article>
                        </div>
                        <button class="accord_button">Accordion 06</button>
                        <div class="accord_content">
                            <article>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi soluta dolorem ipsam voluptate cupiditate porro similique quas vero eos quo ducimus neque accusamus perspiciatis blanditiis, aperiam possimus aliquid quod inventore.</p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div class="opt-content" id="residences">
                <div class="accordion_container">
                    <button class="accord_button">Accordion 01</button>
                    <div class="accord_content">
                        <article>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi soluta dolorem ipsam voluptate cupiditate porro similique quas vero eos quo ducimus neque accusamus perspiciatis blanditiis, aperiam possimus aliquid quod inventore.</p>
                        </article>
                    </div>
                    <button class="accord_button">Accordion 02</button>
                    <div class="accord_content">
                        <article>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi soluta dolorem ipsam voluptate cupiditate porro similique quas vero eos quo ducimus neque accusamus perspiciatis blanditiis, aperiam possimus aliquid quod inventore.</p>
                        </article>
                    </div>
                    <button class="accord_button">Accordion 03</button>
                    <div class="accord_content">
                        <article>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi soluta dolorem ipsam voluptate cupiditate porro similique quas vero eos quo ducimus neque accusamus perspiciatis blanditiis, aperiam possimus aliquid quod inventore.</p>
                        </article>
                    </div>
                    <button class="accord_button">Accordion 04</button>
                    <div class="accord_content">
                        <article>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi soluta dolorem ipsam voluptate cupiditate porro similique quas vero eos quo ducimus neque accusamus perspiciatis blanditiis, aperiam possimus aliquid quod inventore.</p>
                        </article>
                    </div>
                </div>      
                
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