<footer class="footer-widgets">
    <div class="container">
        <div class="row section">

            <!-- About Us -->
            <div class="col-md-3 col-sm-6 mb-sm-100">
                <div class="widget about-widget">
                    <h5 class="header-widget">{{__('footer.aboutus')}}</h5>
                    <p>{{__('footer.p_aboutus')}}</p>
                </div><!-- / .widget -->
            </div><!-- / .col-md-3 -->

            <!-- Teammember Feed -->
            <div class="col-md-3 col-sm-6 mb-sm-100">
                <div class="widget gallery-widget">
                    <h5 class="header-widget">{{__('footer.team')}}</h5>
                    <ul>

                        <li><a href="{{ asset('storage/images/1.jpg') }}" class="gallery-widget-lightbox"><img src="{{ asset('storage/images/1.jpg') }}" class="teammember" alt="Teammember Image"><div class="hover-link"><span class="linea-arrows-plus"></span></div></a></li>

                        <li><a href="{{ asset('storage/images/2.jpg') }}" class="gallery-widget-lightbox"><img src="{{ asset('storage/images/2.jpg') }}" class="teammember" alt="Teammember Image"><div class="hover-link"><span class="linea-arrows-plus"></span></div></a></li>

                        <li><a href="{{ asset('storage/images/3.jpg') }}" class="gallery-widget-lightbox"><img src="{{ asset('storage/images/3.jpg') }}" class="teammember" alt="Teammember Image"><div class="hover-link"><span class="linea-arrows-plus"></span></div></a></li>

                        <li><a href="{{ asset('storage/images/5.jpg') }}" class="gallery-widget-lightbox"><img src="{{ asset('storage/images/5.jpg') }}" class="teammember" alt="Teammember Image"><div class="hover-link"><span class="linea-arrows-plus"></span></div></a></li>

                        <li><a href="{{__('footer.pic')}}" class="gallery-widget-lightbox"><img src="{{__('footer.pic')}}" class="teammember" alt="Teammember Image"><div class="hover-link"><span class="linea-arrows-plus"></span></div></a></li>

                        <li><a href="{{ asset('storage/images/6.jpg') }}" class="gallery-widget-lightbox"><img src="{{ asset('storage/images/6.jpg') }}" class="teammember" alt="Teammember Image"><div class="hover-link"><span class="linea-arrows-plus"></span></div></a></li>

                    </ul>
                </div><!-- / .widget -->
            </div><!-- / .col-md-3 -->

            <div class="col-md-3 col-sm-6 mb-sm-100">
                <div class="widget twitter-widget">
                    <h5 class="header-widget">{{__('footer.say')}}</h5>
                    <ul>

                        <li>
                            <a href="#"><i class="fa fa-quote-left"></i></a>
                            <p>{{__('footer.o_1')}}</p>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-quote-left"></i></a>
                            <p>{{__('footer.o_2')}}</p>
                        </li>

                    </ul>
                </div><!-- / .widget -->
            </div><!-- / .col-md-3 -->

            <!-- Newsletter -->
            <div class="col-md-3 col-sm-6">
                <div class="widget newsletter-widget">
                    <h5 class="header-widget">{{__('footer.placeholder')}}</h5>

                    <form class="mc-form subscribe-form" method="post" action="/subscribe">
                        <div class="form-group">
                            {{ csrf_field() }}

                            <!-- Email -->
                            <input id="mc-mail" type="email" name="mc-mail" placeholder="{{__('footer.newsletter')}}" required>

                            <!-- Send Button -->
                            <button type="submit" name="subscribe" class="mc-send-btn"><i class="fa fa-send-o"></i></button>
                        </div>
                    </form>

                </div><!-- / .widget -->
            </div><!-- / .col-md-3 -->

        </div><!-- / .row -->
    </div><!-- / .container -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <small>&copy; 2017 Wic-Way. Made by <a class="no-style-link" href="http://z-poc.hu" target="_blank">Z-Poc</a></small>
                </div>

                <div class="col-sm-6">
                    <small><a href="#page-top" class="pull-right to-the-top">{{__('footer.atop')}}<i class="fa fa-angle-up"></i></a></small>
                </div>

            </div><!-- / .row -->
        </div><!-- / .container -->
    </div><!-- / .copyright -->

</footer><!-- / .footer-widgets -->