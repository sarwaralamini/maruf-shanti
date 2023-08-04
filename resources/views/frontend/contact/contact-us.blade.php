
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Contact Us')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Contact Us')
@section('og_description', '')
@section('og_type', '')
@section('og_url', '')
@section('og_image', '')
@section('og_image_width', '')
@section('og_image_height', '')
@section('og_app_id', '')

{{-- Twitter SEO --}}
@section('twitter_card', '')
@section('twitter_site', '')
@section('twitter_creator', '')
@section('twitter_url', '')
@section('twitter_title', '')
@section('twitter_description', '')
@section('twitter_image', '')

@section('content')
    <!--================ Breadcrumb ================-->
    <div
    class="mad-breadcrumb with-bg-img with-overlay"
    data-bg-image-src="{{ asset('assets/img/bc.jpg') }}"
    >
    <div class="container wide">
    <h1 class="mad-page-title">Contact Us</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>Contact</span> /
        <span>Contact Us</span>
    </nav>
    </div>
    </div>
    <!--================ End of Breadcrumb ================-->

    <div class="mad-content no-pd">
        <div class="container">
            <div class="mad-section">
                <div class="row vr-size-2">
                    <p>
                        Another day in paradise begins.
                        <br>
                        The serene Shanti Wellness Sanctuary is built in an enchanting setting overlooking spectacular hills along the Balayan Bay.
                        <br>
                        Only a short drive from Tagaytay City, you will find yourself stranded on a piece of paradise. Surely a secret hideaway.
                    </p>
                    <div class="col-lg-5">
                      <div class="mad-title-wrap">
                        <div class="mad-pre-title">Contact Details</div>
                        <h2 class="mad-section-title">Get In Touch</h2>
                      </div>
                      <div class="mad-vr-list mad-text-medium content-element-3">
                        <ul>
                          <li>Manila Sales and Reservations: 9am to 4pm</li>
                          <li><b>Phone:</b> (0920) 972 3346</li>
                          <li>
                            <b>Email:</b>
                            <a href="mailto:life@shanti.ph" class="mad-link">life@shanti.ph</a>
                          </li>
                        </ul>
                      </div>
                      <div class="mad-social-icons">
                        <ul>
                          <li>
                            <a href="https://www.facebook.com/shantiphils" target="_blank"><i class="fab fa-facebook-f" style="vertical-align: middle!important;"></i></a>
                          </li>
                          <li>
                            <a href="https://www.instagram.com/shantiphils" target="_blank"><i class="fab fa-instagram" style="vertical-align: middle!important;"></i></a>
                          </li>
                          <li>
                            <a href="https://www.tiktok.com/@shantiphils" target="_blank"><i class="fa-brands fa-tiktok" style="vertical-align: middle!important;"></i></a>
                          </li>
                          <li>
                            <a href="https://www.youtube.com/@shantiphils" target="_blank"><i class="fa-brands fa-youtube" style="vertical-align: middle!important;"></i></a>
                          </li>
                          {{-- <li>
                            <a href="#"><i class="fab fa-tiktok"></i></a>
                          </li> --}}
                        </ul>
                      </div>
                    </div>
                        <div class="col-lg-7">
                        @if(session('successContactMessage'))
                            <div class="alert alert-success text-center" role="alert" style="color:#009dc4;text-align: center;font-size: 22px;">
                                {{ session('successContactMessage') }}
                            </div>
                        @endif

                        @if(session('errorContactMessage'))
                            <div class="alert alert-danger text-center" role="alert" style="color:#ff0000">
                                {{ session('errorContactMessage') }}
                            </div>
                        @endif
                      <form class="mad-contact-form mad-form type-2 item-col-2" action="{{ route('contact-send') }}" method="POST" style="@if(session('successContactMessage')) display:none!important; @endif">
                        @csrf
                        <div class="mad-col">
                          <div class="mad-form-item">
                            <label>Full Name <span style="color:#ff0000">*</span></label>
                            <input type="text" id="cf_name" name="name" required="" placeholder="Enter your full name" value="{{ old('name') }}">
                            @error('name')
                                <div class="help-block with-errors" style="color:#ff0000">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="mad-form-item">
                            <label>Subject <span style="color:#ff0000">*</span></label>
                            <input type="text" id="cf_subject" name="subject" required="" placeholder="Enter subject" value="{{ old('subject') }}">
                            @error('subject')
                                <div class="help-block with-errors" style="color:#ff0000">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="mad-form-item">
                            <label>Phone Number <span style="color:#ff0000">*</span></label>
                            <input type="number" id="cf_phone" name="phone" placeholder="Enter your phone number" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="help-block with-errors" style="color:#ff0000">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="mad-form-item">
                            <label>Email Address <span style="color:#ff0000">*</span></label>
                            <input type="email" id="cf_email" name="email" placeholder="Enter your email address" value="{{ old('email') }}">
                            @error('email')
                                <div class="help-block with-errors" style="color:#ff0000">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                        <div class="mad-col">
                          <div class="mad-form-item full-height">
                            <label>Message <span style="color:#ff0000">*</span>
                            <textarea rows="5" id="message" name="message" required="" placeholder="Write your message here...">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="help-block with-errors" style="color:#ff0000;margin-top:10px;">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="mad-form-item">
                            <label>reCAPTCHA <span style="color:#ff0000">*</span></label>
                            {!! htmlFormSnippet() !!}
                            @error('g-recaptcha-response')
                                <div class="help-block with-errors text-warning" style="color:#ff0000">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="mad-form-item">
                            <button type="submit" class="btn btn-big">
                              <span>Submit</span>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
