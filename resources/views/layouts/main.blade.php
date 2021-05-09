<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Martine</title>
    <script type="text/javascript" src="{{asset('http://www.expertphp.in/js/jquery.form.js')}}"></script>
    <link rel="icon" href="{{asset('img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- animate CSS -->
   
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- owl carousel CSS -->
   
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
   
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <!-- flaticon CSS -->

    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <!-- fontawesome CSS -->
 
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <!-- magnific CSS -->
    
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/gijgo.min.css')}}">
    <!-- niceselect CSS -->
    
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">

    <!-- slick CSS -->
    
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <!-- style CSS -->
   
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/mimage.css')}}">
</head>

<body>
   <!--::header part start::-->
   <header class="main_menu">
            <div class="main_menu_iner">
                <div class="container">
                    <div class="row align-items-center ">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                             @include('layouts.navlink')
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    <!-- Header part end-->

    
    <!-- banner part start-->
    @yield('banner')
    <!-- banner part end-->

    <!-- booking part start-->
     @yield('booking')
    <!-- booking part end-->
   

    <!--top place start-->
    @yield('top_place')
    <!--top place end-->

    <!--event section start-->
    @yield('event')
    <!-- event section end-->

    @yield('content')

    

    <!--::industries start::-->
   @yield('industries')
    <!--::industries end::-->

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-5">
                    <div class="single-footer-widget">
                        <h4>Discover Destination</h4>
                        <ul>
                            <li><a href="#">Miami, USA</a></li>
                            <li><a href="#">California, USA</a></li>
                            <li><a href="#">London, UK</a></li>
                            <li><a href="#">Saintmartine, Bangladesh</a></li>
                            <li><a href="#">Mount Everast, India</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="single-footer-widget">
                        <h4>Subscribe Newsletter</h4>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                    required="" type="email">
                                <button class="click-btn btn btn-default text-uppercase"> <i class="far fa-paper-plane"></i>
                                </button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                        type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                        <p>Subscribe our newsletter to get update news and offers</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="single-footer-widget footer_icon">
                        <h4>Contact Us</h4>
                        <p>3114, Sylhet,Bangladesh
                                +8801521434581</p>
                        <span>contact@travelbd.com</span>
                        <div class="social-icons">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <script src="{{asset('js/mimage.js')}}"></script>
    <script src="{{asset('js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- magnific js -->
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- masonry js -->
    <script src="{{asset('js/masonry.pkgd.js')}}"></script>
    <!-- masonry js -->
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/gijgo.min.js')}}"></script>
    <!-- contact js -->
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>
    <script src="{{asset('js/contact.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>