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
            <div class="mad-pre-title-custom" style="color:#b5bdbf;">Reconnect with nature</div>
          </div>
          <!--================ End of Layer ================-->
          <!--================ Layer ================-->
          <div data-start="0" data-x="center" data-y="center" data-voffset="['20', '0', '0', '0']"
            data-width="['98%', '98%', '98%', '98%']" data-height="['auto']" data-textAlign="['center']"
            data-color="['#ffffff']" data-fontsize="['72']" data-lineheight="['88']"
            class="tp-caption tp-resizeme tp-layer-section-title custom-slider-title"> Go outdoors, <br> practice mindfulness, <br> feel the energy around you. </div>
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
          <div class="mad-pre-title-custom">WELCOME TO</div>
          <h2 class="mad-section-title">Shanti Wellness Sanctuary</h2>
          <h4 class="mad-section-title">Lemery, Batangas</h4>
        </div>
        <div class="content-element-6">
          <p class="mad-text-medium content-element-3">
            <b>15 mins away from Twin Lakes Tagaytay</b>
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
              <h6 class="mad-icon-box-title">Accommodation </h6>
              <p> Featuring our 4 Single Dome Pool Villas, 1 Twin Dome Pool Villa and 2 Junior Tent Lodges.
              </p>
            </div>
          </a>
          <!--================ End of Icon Box ================-->
          <!--================ Icon Box ================-->
          <a href="#" class="mad-icon-box" data-bg-image-src="{{ asset('assets/img/home_section_2/01.jpg') }}">
            <div class="back-side" style="background-image: url({{ asset('assets/img/home_section_2/hover/01.jpg') }});background-position: center!important;height: 488px!important;background-size: cover!important;">
              <i class="mad-icon-box-icon">
                <img src="#" alt="">
              </i>
            </div>
          </a>
          <!--================ End of Icon Box ================-->
          <!--================ Icon Box ================-->
          <a href="#" class="mad-icon-box">
            <div class="mad-icon-box-content">
              <h6 class="mad-icon-box-title">Spa & Wellness </h6>
              <p> Need a hump day reset? Try our Spa and Wellness services. </p>
            </div>
          </a>
          <!--================ End of Icon Box ================-->
          <!--================ Icon Box ================-->
          <a href="#" class="mad-icon-box" data-bg-image-src="{{ asset('assets/img/home_section_2/02.jpg') }}">
            <div class="back-side" style="background-image: url({{ asset('assets/img/home_section_2/hover/02.jpg') }});background-position: center!important;height: 488px!important;background-size: cover!important;">
              <i class="mad-icon-box-icon">
                <img src="#" alt="">
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
              <h6 class="mad-icon-box-title">Promo Packages </h6>
              <p> Get 15% less on combined selected services.
              </p>
            </div>
          </a>
          <!--================ End of Icon Box ================-->
          <!--================ Icon Box ================-->
          <a href="#" class="mad-icon-box" data-bg-image-src="{{ asset('assets/img/home_section_2/04.jpg') }}">
            <div class="back-side" style="background-image: url({{ asset('assets/img/home_section_2/hover/04.jpg') }});background-position: center!important;height: 488px!important;background-size: cover!important;">
              <i class="mad-icon-box-icon">
                <img src="#" alt="">
              </i>
            </div>
          </a>
          <!--================ End of Icon Box ================-->
          <!--================ Icon Box ================-->
          <a href="#" class="mad-icon-box">
            <div class="mad-icon-box-content">
              <h6 class="mad-icon-box-title">Private Dining Experience </h6>
              <p> Pre-order your food with us or book our bohemian dinner package, glam picnic or romantic dinner table setup. </p>
            </div>
          </a>
          <!--================ End of Icon Box ================-->
          <!--================ Icon Box ================-->
          <a href="#" class="mad-icon-box" data-bg-image-src="{{ asset('assets/img/home_section_2/03.jpg') }}">
            <div class="back-side" style="background-image: url({{ asset('assets/img/home_section_2/hover/03.jpg') }});background-position: center!important;height: 488px!important;background-size: cover!important;">
              <i class="mad-icon-box-icon">
                <img src="#" alt="">
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
                <h6 class="mad-icon-box-title">Paid Services </h6>
                <p> Check out our paid activities to enjoy more of your stay. </p>
              </div>
            </a>
            <!--================ End of Icon Box ================-->
            <!--================ Icon Box ================-->
            <a href="#" class="mad-icon-box empty-item" data-bg-image-src="{{ asset('assets/img/home_section_2/05.jpg') }}">
              <div class="back-side" style="background-image: url({{ asset('assets/img/home_section_2/hover/05.jpg') }});background-position: center!important;height: 488px!important;background-size: cover!important;">
                <i class="mad-icon-box-icon">
                    <img src="" alt="">
                </i>
              </div>
            </a>
            <!--================ End of Icon Box ================-->
            <!--================ Icon Box ================-->
            <a href="#" class="mad-icon-box">
              <div class="mad-icon-box-content">
                <h6 class="mad-icon-box-title">Things To Do </h6>
                <p> Experience or things you may love to do at Shanti (complimentary and self-experienced). </p>
              </div>
            </a>
            <!--================ End of Icon Box ================-->
            <!--================ Icon Box ================-->
            <a href="#" class="mad-icon-box" data-bg-image-src="{{ asset('assets/img/home_section_2/06.jpg') }}">
                <div class="back-side" style="background-image: url({{ asset('assets/img/home_section_2/hover/06.jpg') }});background-position: center!important;height: 488px!important;background-size: cover!important;">
                <i class="mad-icon-box-icon">
                    <img src="#" alt="">
                </i>
              </div>
            </a>
            <!--================ End of Icon Box ================-->
          </div>
          <!--================ End of Icon Boxes ================-->
        </div>


      </div>


    </div>
  </div>
@endsection
