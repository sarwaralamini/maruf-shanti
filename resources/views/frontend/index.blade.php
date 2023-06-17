@extends('frontend.layouts.app')

{{-- Website SEO --}}
@section('title', 'Home')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Activities')
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
<!--================ Slider Revolution ================-->
<div dir="ltr" class="rev_slider_wrapper fullscreenbanner-container">
    <div id="rev-slider-1" data-version="5.4.5" class="mad-d-none rev-slider with-overlay fullscreenabanner">
      <ul>
        <!--================ Slide 1 ================-->
        <li data-transition="fade">
          <!-- MAIN IMAGE -->
          <img src="{{ asset('assets/img/slider/home_slider.jpg') }}" alt="" data-bgposition="center" data-bgfit="cover"
            data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina />
          <!--================ Layer ================-->
          <div data-start="0" data-x="center" data-y="center" data-voffset="['-44', '-44', '-44', '-44']"
            data-width="['98%', '98%', '98%', '98%']" data-height="['auto']" data-textAlign="['center']"
            class="tp-caption tp-resizeme rev-sub-title">
            <div class="mad-pre-title">Reconnect with nature</div>
          </div>
          <!--================ End of Layer ================-->
          <!--================ Layer ================-->
          <div data-start="0" data-x="center" data-y="center" data-voffset="['20', '0', '0', '0']"
            data-width="['98%', '98%', '98%', '98%']" data-height="['auto']" data-textAlign="['center']"
            data-color="['#ffffff']" data-fontsize="['72']" data-lineheight="['88']"
            class="tp-caption tp-resizeme tp-layer-section-title custom-slider-title"> Go outdoors, practice mindfulness, <br> feel the energy around you. </div>
          <!--================ End of Layer ================-->
          <!--================ Layer ================-->
          <div data-start="0" data-x="center" data-y="center" data-voffset="['120', '120', '120', '120']"
            data-width="['98%', '98%', '98%', '98%']" data-textAlign="['center']" class="tp-caption tp-resizeme">
            {{-- <a href="#" class="btn btn-huge">Discover More</a> --}}
          </div>
          <!--================ End of Layer ================-->
        </li>
        <!--================ End of Slide 1 ================-->
      </ul>
    </div>
  </div>
  <!--================ End of Slider Revolution ================-->
  <div class="mad-content no-pd">
    <div class="container">
      <div class="
            mad-section
            align-center
            mad-section--stretched
            mad-colorizer--scheme-
          " style="padding-top:5rem!important;padding-bottom:5rem!important;">
        <div class="mad-colorizer-bg-color">
          <div class="mad-section-svg to-right">
            <img src="royal_beach_resort_svg/leaves_bg4.svg" alt="" />
          </div>
        </div>
        <div class="mad-title-wrap">
          <div class="mad-pre-title">—WELCOME</div>
          <h2 class="mad-section-title">Shanti Wellness Sanctuary</h2>
          <h4 class="mad-section-title">in Lemery, Batangas</h4>
        </div>
        <div class="content-element-6">
          <p class="mad-text-medium content-element-3">
            <b>15 mins away from Twin Lakes Tagaytay.</b>
          </p>
          <p class="mad-text-medium"> A resort in a haven of tranquility. Nestled deep in the heart of Tagaytay-Batangas valleys. Offering unique accommodation and wellness.</p>
        </div>
      </div>
      <div class="
            mad-section
            no-pd
            mad-section--stretched-content
            mad-colorizer--scheme-
          ">
        <!--================ Icon Boxes ================-->
        <div class="mad-icon-boxes grid-type hr-type item-col-4 no-gutters">
          <!--================ Icon Box ================-->
          <a href="#" class="mad-icon-box">
            <div class="mad-icon-box-content">
              <h6 class="mad-icon-box-title"> 01. <br /> Accommodation </h6>
              <p> Featuring our 4 Single Dome Pool Villas, 1 Twin Dome Pool Villa and 2 Junior Tent Lodges.
              </p>
            </div>
          </a>
          <!--================ End of Icon Box ================-->
          <!--================ Icon Box ================-->
          <a href="#" class="mad-icon-box" data-bg-image-src="{{ asset('assets/img/home_section_2/01.jpg') }}">
            <div class="back-side">
              <i class="mad-icon-box-icon">
                <img src="{{ asset('assets/img/home_section_2/section_2_icon.jpg') }}" alt="">
              </i>
            </div>
          </a>
          <!--================ End of Icon Box ================-->
          <!--================ Icon Box ================-->
          <a href="#" class="mad-icon-box">
            <div class="mad-icon-box-content">
              <h6 class="mad-icon-box-title"> 02. <br /> Spa & Wellness </h6>
              <p> Spa & Wellness Need a hump day reset? Try our Spa and Wellness services. </p>
            </div>
          </a>
          <!--================ End of Icon Box ================-->
          <!--================ Icon Box ================-->
          <a href="#" class="mad-icon-box" data-bg-image-src="{{ asset('assets/img/home_section_2/02.jpg') }}">
            <div class="back-side">
              <i class="mad-icon-box-icon">
                <img src="{{ asset('assets/img/home_section_2/section_2_icon.jpg') }}" alt="">
              </i>
            </div>
          </a>
          <!--================ End of Icon Box ================-->
        </div>
        <!--================ End of Icon Boxes ================-->
        <!--================ Icon Boxes ================-->
        <div class="
              mad-icon-boxes
              grid-type
              hr-type
              item-col-4
              no-gutters
              grid-reverse
            ">
          <!--================ Icon Box ================-->
          <a href="#" class="mad-icon-box">
            <div class="mad-icon-box-content">
              <h6 class="mad-icon-box-title"> 04. <br /> Promo Packages </h6>
              <p> romo Packages Get 15% less on combined selected services.
              </p>
            </div>
          </a>
          <!--================ End of Icon Box ================-->
          <!--================ Icon Box ================-->
          <a href="#" class="mad-icon-box" data-bg-image-src="{{ asset('assets/img/home_section_2/04.jpg') }}">
            <div class="back-side">
              <i class="mad-icon-box-icon">
                <img src="{{ asset('assets/img/home_section_2/section_2_icon.jpg') }}" alt="">
              </i>
            </div>
          </a>
          <!--================ End of Icon Box ================-->
          <!--================ Icon Box ================-->
          <a href="#" class="mad-icon-box">
            <div class="mad-icon-box-content">
              <h6 class="mad-icon-box-title"> 03. <br /> Private Dining Experience </h6>
              <p> Private Dining Experience Pre-order your food with us or book our bohemian dinner package, glam picnic or romantic dinner table setup. </p>
            </div>
          </a>
          <!--================ End of Icon Box ================-->
          <!--================ Icon Box ================-->
          <a href="#" class="mad-icon-box" data-bg-image-src="{{ asset('assets/img/home_section_2/03.jpg') }}">
            <div class="back-side">
              <i class="mad-icon-box-icon">
                <img src="{{ asset('assets/img/home_section_2/section_2_icon.jpg') }}" alt="">
              </i>
            </div>
          </a>
          <!--================ End of Icon Box ================-->
        </div>
        <!--================ End of Icon Boxes ================-->
      </div>
      <div class="
            mad-section
            content-element-main
            no-pd
            mad-section--stretched-content
            mad-colorizer--scheme-color-3
          ">
        <div class="mad-colorizer-bg-color">
          <div class="mad-section-svg to-left-2">
            <img src="{{ asset('assets/img/leaves_bg5.svg') }}" alt="" />
          </div>
        </div>
        <div class="content-element-main">
          <!--================ Icon Boxes ================-->
          <div class="mad-icon-boxes grid-type hr-type item-col-4 no-gutters">
            <!--================ Icon Box ================-->
            <a href="#" class="mad-icon-box">
              <div class="mad-icon-box-content">
                <h6 class="mad-icon-box-title"> 05. <br /> Paid Services </h6>
                <p> Paid Services Check out our paid activities to enjoy more of your stay. </p>
              </div>
            </a>
            <!--================ End of Icon Box ================-->
            <!--================ Icon Box ================-->
            <a href="#" class="mad-icon-box empty-item" data-bg-image-src="{{ asset('assets/img/home_section_2/05.jpg') }}">
              <div class="back-side">
                <i class="mad-icon-box-icon">
                    <img src="{{ asset('assets/img/home_section_2/section_2_icon.jpg') }}" alt="">
                </i>
              </div>
            </a>
            <!--================ End of Icon Box ================-->
            <!--================ Icon Box ================-->
            <a href="#" class="mad-icon-box">
              <div class="mad-icon-box-content">
                <h6 class="mad-icon-box-title"> 06. <br /> Things To Do </h6>
                <p> Things To Do Experience or things you may love to do at Shanti (complimentary and self-experienced). </p>
              </div>
            </a>
            <!--================ End of Icon Box ================-->
            <!--================ Icon Box ================-->
            <a href="#" class="mad-icon-box" data-bg-image-src="{{ asset('assets/img/home_section_2/06.jpg') }}">
              <div class="back-side">
                <i class="mad-icon-box-icon">
                    <img src="{{ asset('assets/img/home_section_2/section_2_icon.jpg') }}" alt="">
                </i>
              </div>
            </a>
            <!--================ End of Icon Box ================-->
          </div>
          <!--================ End of Icon Boxes ================-->
        </div>


      </div>
      <div class="content-element-5">
        <div class="row align-items-end">
          <div class="col-6">
            <div class="mad-pre-title">Explore Activities</div>
            <h2 class="mad-page-title">At The Hotel</h2>
          </div>
          <div class="col-6">
            <div class="align-right">
              <a href="#" class="mad-text-link">
                <div class="link-container">
                  <span class="link-title1 title">View All</span>
                  <span class="link-title2 title">View All</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="
            mad-section
            no-pt
            mad-section--stretched-content
            mad-colorizer--scheme-color-2
            with-texture
          ">
        <div class="content-element-main">
          <div class="
                mad-entities
                with-bg-backplate
                owl-carousel
                mad-grid mad-grid--cols-3
                nav-size-2
                no-dots
              ">
            <div class="mad-col">
              <!--================ Entity ================-->
              <article class="mad-entity">
                <div class="mad-entity-media">
                  <a href="#"><img src="{{ asset('assets/img/slider_3/576x728_img1.jpg') }}" alt="" /></a>
                </div>
                <div class="mad-entity-content">
                  <h4 class="mad-entity-title">Romantic Getaway</h4>
                  <p> Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.
                    Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.
                  </p>
                  <a href="##" class="mad-text-link">
                    <div class="link-container">
                      <span class="link-title1 title">Discover More</span>
                      <span class="link-title2 title">Discover More</span>
                    </div>
                  </a>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
            <div class="mad-col">
              <!--================ Entity ================-->
              <article class="mad-entity">
                <div class="mad-entity-media">
                  <a href="#"><img src="{{ asset('assets/img/slider_3/576x728_img2.jpg') }}" alt="" /></a>
                </div>
                <div class="mad-entity-content">
                  <h4 class="mad-entity-title">Diving & Snorkeling</h4>
                  <p> Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.
                    Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.
                  </p>
                  <a href="##" class="mad-text-link">
                    <div class="link-container">
                      <span class="link-title1 title">Discover More</span>
                      <span class="link-title2 title">Discover More</span>
                    </div>
                  </a>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
            <div class="mad-col">
              <!--================ Entity ================-->
              <article class="mad-entity">
                <div class="mad-entity-media">
                  <a href="#"><img src="{{ asset('assets/img/slider_3/576x728_img3.jpg') }}" alt="" /></a>
                </div>
                <div class="mad-entity-content">
                  <h4 class="mad-entity-title">For Body and Soul</h4>
                  <p> Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.
                    Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.
                  </p>
                  <a href="##" class="mad-text-link">
                    <div class="link-container">
                      <span class="link-title1 title">Discover More</span>
                      <span class="link-title2 title">Discover More</span>
                    </div>
                  </a>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
          </div>
        </div>
        <!--================ Testimonials ================-->
        <div class="mad-testimonials">
          <div class="mad-grid mad-grid--cols-1 owl-carousel no-dots no-nav">
            <!-- owl item -->
            <div class="mad-grid-item">
              <div class="mad-testimonial">
                <div class="mad-testimonial-info">
                  <blockquote>
                    <p> “Really enjoyed our stay at Hotel Prive. The room was beautiful with an amazing view of the
                      lovely gardens and sea. The restaurant food was delicious and the staff were very helpful. The
                      perfect place, we couldn't choose better.” </p>
                  </blockquote>
                </div>
                <div class="mad-author">
                  <div class="mad-author-info">
                    <span class="mad-author-name">Mark & Rebecca Johnson, CA, USA</span>
                    <a href="#"><img src="images/visor.png" alt="" /></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- / owl item -->
            <!-- owl item -->
            <div class="mad-grid-item">
              <div class="mad-testimonial">
                <div class="mad-testimonial-info">
                  <blockquote>
                    <p> “An amazing location with a wonderful view and first-class accommodation and service. A
                      beautiful landscape to explore and plenty of excellent advice by a very friendly family. Fine
                      local wines and draft beer, which was a true delicacy.” </p>
                  </blockquote>
                </div>
                <div class="mad-author">
                  <div class="mad-author-info">
                    <span class="mad-author-name">Amanda & Piter Smith, NY, USA</span>
                    <a href="#"><img src="images/visor.png" alt="" /></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- / owl item -->
          </div>
        </div>
        <!--================ End of Testimonials ================-->
      </div>
    </div>
  </div>
@endsection
