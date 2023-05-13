
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
                            <a href="#" class="mad-link">life@shanti.ph</a>
                          </li>
                        </ul>
                      </div>
                      <div class="mad-social-icons">
                        <ul>
                          <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fab fa-tripadvisor"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-7">
                      <form class="mad-contact-form mad-form type-2 item-col-2">
                        <div class="mad-col">
                          <div class="mad-form-item">
                            <label>First name *</label>
                            <input type="text" id="cf_name" name="cf_name" required="" placeholder="First Name">
                          </div>
                          <div class="mad-form-item">
                            <label>Last name *</label>
                            <input type="text" id="cf_lname" name="cf_lname" required="" placeholder="Last Name">
                          </div>
                          <div class="mad-form-item">
                            <label>Email *</label>
                            <input type="email" id="cf_email" name="cf_email" required="" placeholder="Email Address">
                          </div>
                          <div class="mad-form-item">
                            <label>Phone number</label>
                            <input type="tel" id="cf_phone" name="cf_phone" placeholder="Phone Number">
                          </div>
                        </div>
                        <div class="mad-col">
                          <div class="mad-form-item full-height">
                            <label>Message *</label>
                            <textarea rows="5" id="message" name="cf_message" required="" placeholder="Message"></textarea>
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