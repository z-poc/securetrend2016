<section id="newsletter" class="section newsletter contact-1">
    <div class="cta-newsletter">
        <div class="bg-overlay">
            <div class="cta-wrapper">

                <h3 class="cta-lead h-alt wow fadeIn" data-wow-delay=".1s" data-wow-duration="1s">{{__('contactus.joinus')}}</h3>

                <form class="mc-form subscribe-form"  method="post" action="/subscribe">
                {{ csrf_field() }}
                <!-- Email -->
                    <input type="email" name="mc-mail" placeholder="{{__('contactus.yourmail')}}" id="mc-email" class="wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s" required>

                    <!-- Send Button -->
                    <input type="submit" name="subscribe" value="{{__('contactus.join_btn')}}" class="btn btn-light btn-large wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s">
                </form>

            </div><!-- / .cta-wrapper -->
        </div><!-- / .bg-overlay -->
    </div><!-- / .cta-newsletter -->
</section>
<section id="contactus" class="section contact-1">
    <header class="sec-heading">
        <h2>{{__('contactus.contactus')}}</h2>
        <span class="subheading">{{__('contactus.subheading')}}</span>
    </header>

    <div class="contact-wrapper">
        <!-- Map -->
        <div id="map-canvas" class="gmap map-boxed"></div>

        <!-- Show Info Button -->
        <div class="show-info-link">
            <a href="#" class="show-info"><i class="fa fa-info"></i><h6>{{__('contactus.showinfo')}}</h6></a>
        </div>

        <div class="container">
            <div class="row">

                <!-- Address Info -->
                <div class="col-xs-offset-1 col-xs-11 col-md-offset-2 col-md-6 contact-info-wrapper">
                    <address>
                        <div class="row">

                            <!-- Phone -->
                            <div class="col-sm-6 address-group">
                                <span>{{__('contactus.callme')}}</span>
                                <p>{{__('contactus.mobil')}}</p>
                                <p>{{__('contactus.vezetekes')}}</p>
                            </div>

                            <!-- Address -->
                            <div class="col-sm-5 address-group">
                                <span>{{__('contactus.place')}}</span>
                                <p>{{__('contactus.address')}}</p>
                            </div>

                        </div><!-- / .row -->

                        <div class="row">
                            <!-- Email -->
                            <div class="col-sm-6 address-group">
                                <span>{{__('contactus.email')}}</span>
                                <a href="mailto:info@wic-way.com">{{__('contactus.mail')}}</a>
                            </div>
                        </div><!-- / .row -->

                        <!-- Show Map Button -->
                        <div class="row show-map-link">
                            <a href="#" class="show-map"><span class="icon-map-pin"></span>{{__('contactus.showmap')}}</a>
                        </div><!-- / .row -->
                    </address>
                </div><!-- / .contact-info-wrapper -->
            </div><!-- / .row -->
        </div><!-- / .container -->
    </div><!-- / .contact-wrapper -->

    <header class="msg-heading">
        <h2>{{__('contactus.messageus')}}</h2>
    </header>

    <!-- Contact Form -->
    <div class="row message-form">
        <form class="mc-form subscribe-form"  method="post" action="/message_us">
            {{ csrf_field() }}
            <div class="col-md-offset-2 col-md-4 wow fadeInUp" data-wow-duration="1s">

                <!-- Name -->
                <div class="form-group">
                    <input type="text" name="mc-name" id="name-contact-1" class="form-control validate-locally" placeholder="{{__('contactus.entername')}}">
                    <label for="name-contact-1">{{__('contactus.name')}}</label>
                    <span class="pull-right alert-error"></span>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <input type="email" name="mc-email" id="email-contact-1" class="form-control validate-locally" placeholder="{{__('contactus.entermail')}}">
                    <label for="email-contact-1">{{__('contactus.email')}}</label>
                    <span class="pull-right alert-error"></span>
                </div>

            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-duration="1s">

                <!-- Message -->
                <div class="form-group">
                    <textarea name="mc-message" id="message-contact-1" class="form-control" rows="5" placeholder="{{__('contactus.entermsg')}}"></textarea>
                    <label for="message-contact-1">{{__('contactus.msg')}}</label>
                </div>
                <div>
                    <input type="submit" class="btn pull-right" value="{{__('contactus.sendmsg')}}">
                </div>

            </div><!-- / .col-md-4 -->

        </form>
    </div><!-- / .row -->

</section><!-- / .contact-1 -->