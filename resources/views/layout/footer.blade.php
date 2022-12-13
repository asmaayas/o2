
            <!-- footer-area -->
            <footer>
                <div class="footer-top-wrap">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-9">
                                <div class="footer-widget">
                                    <div class="footer-logo mb-25">
                                        <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" height="90" alt=""></a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus veritatis sequi doloribus fuga.</p>
                                    <ul class="footer-social">
                                        <li><a href="{{ url('') }}"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{ url('') }}"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="{{ url('') }}"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="{{ url('') }}"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Useful Links</h4>
                                    <ul class="fw-links">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('/sites') }}">All Sites</a></li>
                                        <li><a href="{{ url('/centers') }}">All Centers</a></li>
                                        <li><a href="{{ url('') }}">Fliter Photo</a></li>
                                        <li><a href="{{ url('') }}">Book</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Community</h4>
                                    <ul class="fw-links">
                                        <li><a href="{{ url('login-register.html') }}">Help Center</a></li>
                                        <li><a href="{{ url('login-register.html') }}">Partners</a></li>
                                        <li><a href="{{ url('login-register.html') }}">Suggestions</a></li>
                                        <li><a href="{{ url('blog.html') }}">Blog</a></li>
                                        <li><a href="{{ url('login-register.html') }}">Newsletter</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Subscribe Us</h4>
                                    <form action="#" class="newsletter-form">
                                        <input type="email" placeholder="info@youmail.com">
                                        <button type="submit"><i class="flaticon-small-rocket-ship-silhouette"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-wrap">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="copyright-text">
                                    <p>All rights reserved © 2022 by <a href="https://a360p.com/" target="_blank">Actual360</a></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="copyright-link-list">
                                    <li><a href="{{ url('') }}">Privacy Policy</a></li>
                                    <li><a href="{{ url('') }}">Terms And Condition</a></li>
                                    <li><a href="{{ url('') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer-area-end -->

        </div>
        <!-- main-content-end -->



		<!-- JS here -->
        <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>