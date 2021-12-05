@extends('main.include.main')
@section('title','Contact ')
@section('content')

<div id="map">
    <div id="google-map">
        <button class="button  openmap-btn" id="openStreetView">Toggle Street View</button>
    </div>
    <div id="map-canvas"></div>
</div>

<!-- ========== MAIN ========== -->
<main id="contact_page">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div class="main_title a_left">
                    <h2>CONTACT US</h2>
                </div>
                <form id="contact-form-page">
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-6">
                            <label class="control-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Your Name">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label class="control-label">Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Phone">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label class="control-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Your Email">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label class="control-label">Subject</label>
                            <input type="text" class="form-control" name="subject" placeholder="Subject">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Message</label>
                            <textarea class="form-control" name="message" placeholder="Your Message..."></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" class="button  btn_blue mt40 upper pull-right">
                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Send Your Message
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <div class="main_title a_left">
                    <h2>GET IN TOUCH</h2>
                </div>
                <ul class="contact-info upper">
                    <li>
                        <span>ADDRESS:</span> Navagio Zakynthos, Greece
                    </li>
                    <li>
                        <span>EMAIL:</span> example@site.com, contact@site.com
                    </li>
                    <li>
                        <span>WEB:</span> www.site.com
                    </li>
                    <li>
                        <span>PHONE:</span> +1 (330) <strong>993-443</strong> , +1 (330) <strong>995-445</strong>
                    </li>
                    <li>
                        <span>FAX:</span>
                        <strong>+1 123456780</strong>
                    </li>
                </ul>
                <div class="social_media">
                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="googleplus" href="#"><i class="fa fa-google-plus"></i></a>
                    <a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                    <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                    <a class="youtube" href="#"><i class="fa fa-youtube"></i></a>
                    <a class="instagram" href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
