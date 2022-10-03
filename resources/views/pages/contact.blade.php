@extends('layouts.home')

@section('content')
<div id="content" class="site-content">

    <section class="contact-page">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-left">
                        <div class="ot-heading">
                            {{-- <span>// contact details</span> --}}
                            <h2 class="text-white main-heading">Contact us</h2>
                        </div>
                        <div class="space-5"></div>
                        <p>Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. We will be happy to answer your questions.</p>
                        <div class="contact-info box-style1">
                            <i class="flaticon-world-globe"></i>                    
                            <div class="info-text">
                                <h6 class="text-white">Our Address:</h6>
                                <p>411 University St, Seattle, USA</p>
                            </div>
                        </div>
                        <div class="contact-info box-style1">
                            <i class="flaticon-envelope"></i>
                            <div class="info-text">
                                <h6 class="text-white">Our Mailbox:</h6>
                                <p>dev.nasir.khan@gmail.com</p>
                            </div>
                        </div>
                        <div class="contact-info box-style1">
                            <i class="flaticon-phone-1"></i>
                            <div class="info-text">
                                <h6 class="text-white">Skype:</h6>
                                <a href="https://join.skype.com/invite/xjWb8Q8tBkyp" target="__blank">Profile Link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="{{route('submitContactForm')}}" method="post" class="wpcf7">
                        @csrf
                        <div class="main-form">
                            <h2>Ready to Get Started?</h2>
                            <p class="font14">Your email address will not be published. Required fields are marked *</p>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('success')}}
                                </div>
                            @endif
                            <p>
                                <input type="text" name="name" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Name *" required>
                            </p>
                            <p>
                                <input type="email" name="email" size="40" class="" value="{{$email}}" aria-required="true" aria-invalid="false" placeholder="Your Email *" required>
                            </p>
                            <p>
                                <textarea name="message" cols="40" rows="10" class="" minlength="10" maxlength="2000" aria-invalid="false" placeholder="Message..." required></textarea>
                            </p>
                            <p><button type="submit" class="octf-btn octf-btn-light">Send Message</button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="no-padding">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d86077.66255184308!2d-122.40402224079803!3d47.60810999586645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906ab3f905c4b1%3A0x96bf575ff75ab1aa!2s411%20University%20St%2C%20Seattle%2C%20WA%2098101%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1584084043716!5m2!1svi!2s" height="500" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>
@endsection