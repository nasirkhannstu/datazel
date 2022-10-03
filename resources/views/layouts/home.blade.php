<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>DataZel: Software Company & Technology Provider</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/fav.png" />
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{url('css/flaticon.css')}}" />

    <link rel="stylesheet" href="{{url('style.css')}}" />

    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="b9cb8574-22ff-4de2-a9b1-ab9a161ce12c";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>

<body class="royal_preloader i10">
    <div id="page" class="site">
        <header id="site-header" class="site-header site-header-10 header-overlay sticky-header">
            <div class="octf-main-header">
                <div class="octf-area-wrap">
                    <div class="container octf-mainbar-container">
                        <div class="octf-mainbar">
                            <div class="octf-mainbar-row octf-row">
                                <div class="octf-col logo-col i8">
                                    <div id="site-logo" class="site-logo">
                                        <a href="/">
                                            <img src="images/logo.png" alt="DataZel" class="">
                                        </a>
                                    </div>
                                </div>
                                <div class="octf-col menu-col">
                                    <nav id="site-navigation" class="main-navigation text-upp">
                                        <ul class="menu">
                                            <li class="menu-item"><a href="{{url('/')}}#serviceBloak">Services</a></li>
                                            <li class="menu-item"><a href="{{url('/')}}#partnersBlock">Partner</a></li>
                                            <li class="menu-item"><a href="{{url('/')}}#processBlock">Process</a></li>
                                            <li class="menu-item"><a href="{{route('contact')}}">Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="octf-col cta-col text-right">
                                <!-- Call To Action -->
                                    <div class="octf-btn-cta">

                                        <div class="octf-header-module">
                                            <div class="btn-cta-group btn-cta-header">
                                                <a class="octf-btn btn-header-i10" href="{{route('contact')}}">Get a Free Quote</a>
                                            </div>
                                        </div>
                                        
                                    </div>                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_mobile">
                <div class="container">
                    <div class="mlogo_wrapper clearfix">
                        <div class="mobile_logo">
                            <a href="/">
                                <img src="images/logo.png" alt="DataZel">
                            </a>
                        </div>
                        <div id="mmenu_toggle">
                            <button></button>
                        </div>
                    </div>
                    <div class="mmenu_wrapper">
                        <div class="mobile_nav collapse">
                            {{-- <ul id="menu-main-menu" class="mobile_mainmenu">

                                <li class="menu-item-has-children"><a href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Website & App Design</a></li>
                                        <li><a href="#">Website Development</a></li>
                                        <li><a href="#">iOS & Android Development</a></li>
                                        <li><a href="#">Ecommerce Development</a></li>
                                        <li><a href="#">SaaS Development</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Subscription</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Website & App Support</a></li>
                                        <li><a href="#">Wordpress Support</a></li>
                                        <li class="menu-item-has-children"><a href="#">Shopify Support</a></li>
                                        <li class="menu-item-has-children"><a href="#">SaaS, Ecommerce, Online Business Management</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="blog.html">Blog</a></li>

                            </ul> --}}
                            <ul class="menu mobile_mainmenu" id="menu-main-menu">
                                <li class="menu-item"><a href="{{url('/')}}#serviceBloak">Services</a></li>
                                <li class="menu-item"><a href="{{url('/')}}#partnersBlock">Partner</a></li>
                                <li class="menu-item"><a href="{{url('/')}}#processBlock">Process</a></li>
                                <li class="menu-item"><a href="{{route('contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

    <footer id="site-footer" class="site-footer footer-i10">
        <div class="container">
            <div class="space-140"></div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="widget-footer">
                        <div class="flogo-i10">
                            <a href="/">
                                <img src="images/logo.png" alt="">
                            </a>
                        </div>
                        <div class="space-20"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="widget-footer i10">
                        <h4>Company</h4>
                        <div class="space-5"></div>
                        <ul class="list-items">
                            <li class="list-item"><a href="#">About Us</a></li>
                            <li class="list-item"><a href="{{route('contact')}}">Contact Us</a></li>
                            <li class="list-item"><a href="#">Pricing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="widget-footer i10">
                        <h4>Services</h4>
                        <div class="space-5"></div>
                        <ul class="list-items">
                            <li><a href="#">Website & App Design</a></li>
                            <li><a href="#">Website Development</a></li>
                            <li><a href="#">iOS & Android Development</a></li>
                            <li><a href="#">Ecommerce Development</a></li>
                            <li><a href="#">SaaS Development</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="widget-footer i10">
                        <h4>Industries</h4>
                        <div class="space-5"></div>
                        <ul class="list-items">
                            <li><a href="#">Home & Local Services</a></li>
                            <li><a href="#">Restaurant & Hospitality</a></li>
                            <li><a href="#">Healthcare</a></li>
                            <li><a href="#">Financial Services</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Internet & Media</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="space-115"></div>
            <div class="row">
                <div class="col-md-6">
                    <p class="copyright-text-i10">© 2022 DataZel. All Rights Reserved</p>
                </div>
                <div class="col-md-6 text-md-right">
                    <ul class="ft-menu-i10">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="space-25"></div>
            </div>
        </div>
    </footer><!-- #site-footer -->
</div><!-- #page -->
<a id="back-to-top" href="#" class="show i10"><i class="flaticon-up-arrow"></i></a>
        <!-- jQuery -->
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/scripts.js')}}"></script>
    <script src="{{url('js/header-mobile.js')}}"></script>
    <script>
        window.jQuery = window.$ = jQuery;  
        (function($) { "use strict";
            //Preloader
            Royal_Preloader.config({
                mode           : 'logo',
                logo           : 'images/DataZel.svg',
                logo_size      : [160, 75],
                showProgress   : true,
                showPercentage : true,
                text_colour: '#000000',
                background:  '#ffffff'
            });
        })(jQuery);
    </script> 
</body>
</html>