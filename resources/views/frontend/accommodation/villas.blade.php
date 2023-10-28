
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Villas and JTL')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Villas and JTL')
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
    <h1 class="mad-page-title">Villas and JTL</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>Accommodation</span> /
        <span>Villas and JTL</span>
    </nav>
    </div>
    </div>
    <!--================ End of Breadcrumb ================-->

    <div class="mad-content no-pd">
        <div class="container">
            <div class="mad-section">
                <div class="mad-entities mad-entities-reverse type-4">
                    <article class="mad-entity">
                        <div style="max-width:100rem;font-size: 1.125rem;line-height:1.5rem;" >
                            <div class="mad-entity-pre-title">Villas and JTL</div>
                            <h6 class="mad-entity-title" style="text-align:center;">
                                The jungle-bound resort is the kind of place that offers unique accommodation with both relaxation and wellness.
                            </h6>
                            <div role="alert" class="mad-alert-box mad-alert-box--info">
                                <div class="mad-alert-box-inner">
                                    Welcome to Shanti
                                </div>
                            </div>

                            <p style="text-align:justify;">
                                You drive from Tagaytay.<br>
                                Minutes later, you turn up the quiet road leading to Diokno Highway and will lead to a narrow road to Shanti Wellness Sanctuary.
                            </p>
                            <div class="mad-testimonial-bg content-element-4">
                                <div class="mad-testimonial">
                                    <div class="mad-testimonial-info" style="text-align:center;">
                                    <blockquote>
                                        <p>
                                            Everyone is all ready to say welcome.<br>
                                            Big smiles, warm hearts, hospitality plus.
                                        </p>
                                    </blockquote>
                                    </div>
                                </div>
                            </div>
                            <p style="text-align:justify;">
                                Our villas are built on natural ground without any tiles to look, feel and go along with nature, dome style with 30% transparency for nature view and feeling of living in real nature. White dome villas with bathtub and private pool. Overlooking forest, under shady palms. Private dining. Marshmallow and own bbq area. A stay at the Shanti is always too short!
                            </p>

                        </div>
                    </article>
                    <div class="villa-item">
                        <h4 class="mad-title text-center">
                            Drishti Twin Dome Pool Villa
                        </h4>
                        <div class="mad-section no-pd content-element-main mad-section--stretched-content-no-px mad-colorizer--scheme-" style="margin-bottom: 3rem!important; margin-top: -1rem!important;">
                            <div class=" mad-gallery-slider mad-grid owl-carousel mad-grid--cols-1 mad-owl-moving nav-size-2">
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/1.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/4.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/8.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/9.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/10.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/11.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/6.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/12.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/3.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/2.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/7.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>
                        {{-- <div data-isotope-layout="masonry" data-isotope-filter="#portfolio-filter" class="mad-gallery item-col-3 mad-grid--isotope">
                            <div class="mad-grid-sizer"></div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/1.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/1.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/2.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/2.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/3.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/3.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/4.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/4.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/5.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/5.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/6.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/accommodation/villa/Drishti-Single-Dome-Pool-Villa/6.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                        </div> --}}
                        <div class="mad-table-wrap mt-5">
                            <table class="mad-table mad-table--vertical">
                                <tbody>
                                    <tr>
                                        <th>View</th>
                                        <td>Forest and Pool</td>
                                    </tr>
                                    <tr>
                                        <th>Bedding</th>
                                        <td>Four double beds 54 X 75 each where 8 persons can sleep comfortably. One extra floor mattress per dome (double size) is provided if more than 8 persons are staying. Maximum of 12 pax.</td>
                                    </tr>
                                    <tr>
                                        <th>Floor area</th>
                                        <td>110 sqm</td>
                                    </tr>
                                    <tr>
                                        <th>Dome interior floor area</th>
                                        <td>29 sqm (excluding dining, kitchen, and bathroom areas).Including pool, bbq area, dining area, this family villa measures more than 250 sqm. </td>
                                    </tr>
                                    <tr>
                                        <th>Non-Heated Intex Pool size</th>
                                        <td> 6 meters X 3 meters. Depth is 1 meter.</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="text-align:center;">
                                            <a target="_blank" href="https://bit.ly/3qwHp13" class="btn btn-style-3 btn-big w-100">More of Drishti Villa</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="villa-item mt-5">
                        <h4 class="mad-title text-center">
                            Shakti Single Dome Pool Villa
                        </h4>
                        <div class="mad-section no-pd content-element-main mad-section--stretched-content-no-px mad-colorizer--scheme-" style="margin-bottom: 3rem!important; margin-top: -1rem!important;">
                            <div class=" mad-gallery-slider mad-grid owl-carousel mad-grid--cols-1 mad-owl-moving nav-size-2">
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Shakti-Single-Dome-Pool-Villa/9.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Shakti-Single-Dome-Pool-Villa/3.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Shakti-Single-Dome-Pool-Villa/4.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Shakti-Single-Dome-Pool-Villa/5.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Shakti-Single-Dome-Pool-Villa/6.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Shakti-Single-Dome-Pool-Villa/7.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Shakti-Single-Dome-Pool-Villa/8.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="mad-table-wrap mt-5">
                            <table class="mad-table mad-table--vertical">
                                <tbody>
                                    <tr>
                                        <th>View</th>
                                        <td>Forest and Pool</td>
                                    </tr>
                                    <tr>
                                        <th>Bedding</th>
                                        <td>Two double beds 54 X 75 each where 4 persons can sleep comfortably. One extra floor mattress (double size) is provided if more than 4 persons are staying. Maximum of 6 pax.</td>
                                    </tr>
                                    <tr>
                                        <th>Floor area</th>
                                        <td>55 sqm</td>
                                    </tr>
                                    <tr>
                                        <th>Dome interior floor area</th>
                                        <td>29 sqm (excluding dining, kitchen, and bathroom areas).Including pool, bbq area, dining area, this villa has over 150 sqm.</td>
                                    </tr>
                                    <tr>
                                        <th>Non-Heated Intex Pool size</th>
                                        <td>  6 meters X 3 meters. Depth is 1 meter.</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="text-align:center;">
                                            <a target="_blank" href="https://bit.ly/3B5nxHu" class="btn btn-style-3 btn-big w-100">More of Shakti Villa</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="villa-item mt-5">
                        <h4 class="mad-title text-center">
                            Ananda Single Dome Pool Villa
                        </h4>
                        <div class="mad-section no-pd content-element-main mad-section--stretched-content-no-px mad-colorizer--scheme-" style="margin-bottom: 3rem!important; margin-top: -1rem!important;">
                            <div class=" mad-gallery-slider mad-grid owl-carousel mad-grid--cols-1 mad-owl-moving nav-size-2">
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Ananda-Single-Dome-Pool-Villa/1.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Ananda-Single-Dome-Pool-Villa/3.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Ananda-Single-Dome-Pool-Villa/4.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Ananda-Single-Dome-Pool-Villa/5.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Ananda-Single-Dome-Pool-Villa/6.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Ananda-Single-Dome-Pool-Villa/7.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Ananda-Single-Dome-Pool-Villa/8.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Ananda-Single-Dome-Pool-Villa/9.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Ananda-Single-Dome-Pool-Villa/10.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Ananda-Single-Dome-Pool-Villa/11.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Ananda-Single-Dome-Pool-Villa/12.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Ananda-Single-Dome-Pool-Villa/13.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="mad-table-wrap mt-5">
                            <table class="mad-table mad-table--vertical">
                                <tbody>
                                    <tr>
                                        <th>View</th>
                                        <td>Forest and Pool</td>
                                    </tr>
                                    <tr>
                                        <th>Bedding</th>
                                        <td>Two double beds 54 X 75 each where 4 persons can sleep comfortably. One extra floor mattress (double size) is provided if more than 4 persons are staying. Maximum of 6 pax.</td>
                                    </tr>
                                    <tr>
                                        <th>Floor area</th>
                                        <td>55 sqm</td>
                                    </tr>
                                    <tr>
                                        <th>Dome interior floor area</th>
                                        <td>29 sqm (excluding dining, kitchen, and bathroom areas).Including pool, bbq area, dining area, this villa has over 150 sqm.</td>
                                    </tr>
                                    <tr>
                                        <th>Non-Heated Intex Pool size</th>
                                        <td>  6 meters X 3 meters. Depth is 1 meter.</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="text-align:center;">
                                            <a target="_blank" href="https://bit.ly/3RRa2Sp" class="btn btn-style-3 btn-big w-100">More of Ananda Villa</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="villa-item mt-5">
                        <h4 class="mad-title text-center">
                            Prana Single Dome Pool Villa
                        </h4>
                        <div class="mad-section no-pd content-element-main mad-section--stretched-content-no-px mad-colorizer--scheme-" style="margin-bottom: 3rem!important; margin-top: -1rem!important;">
                            <div class=" mad-gallery-slider mad-grid owl-carousel mad-grid--cols-1 mad-owl-moving nav-size-2">
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Prana-Single-Dome-Pool-Villa/2.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Prana-Single-Dome-Pool-Villa/3.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Prana-Single-Dome-Pool-Villa/4.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Prana-Single-Dome-Pool-Villa/5.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Prana-Single-Dome-Pool-Villa/6.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Prana-Single-Dome-Pool-Villa/7.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Prana-Single-Dome-Pool-Villa/8.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Prana-Single-Dome-Pool-Villa/9.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="mad-table-wrap mt-5">
                            <table class="mad-table mad-table--vertical">
                                <tbody>
                                    <tr>
                                        <th>View</th>
                                        <td>Forest and Pool</td>
                                    </tr>
                                    <tr>
                                        <th>Bedding</th>
                                        <td>Two double beds 54 X 75 each where 4 persons can sleep comfortably. One extra floor mattress (double size) is provided if more than 4 persons are staying. Maximum of 6 pax.</td>
                                    </tr>
                                    <tr>
                                        <th>Floor area</th>
                                        <td>55 sqm</td>
                                    </tr>
                                    <tr>
                                        <th>Dome interior floor area</th>
                                        <td>29 sqm (excluding dining, kitchen, and bathroom areas).Including pool, bbq area, dining area, this villa has over 150 sqm.</td>
                                    </tr>
                                    <tr>
                                        <th>Non-Heated Intex Pool size</th>
                                        <td>  6 meters X 3 meters. Depth is 1 meter.</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="text-align:center;">
                                            <a target="_blank" href="https://bit.ly/3L3Fxq0" class="btn btn-style-3 btn-big w-100">More of Prana Villa</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="villa-item mt-5">
                        <h4 class="mad-title text-center">
                            Mandala Single Dome Pool Villa
                        </h4>
                        <div class="mad-section no-pd content-element-main mad-section--stretched-content-no-px mad-colorizer--scheme-" style="margin-bottom: 3rem!important; margin-top: -1rem!important;">
                            <div class=" mad-gallery-slider mad-grid owl-carousel mad-grid--cols-1 mad-owl-moving nav-size-2">
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Mandala-Single-Dome-Pool-Villa/6.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Mandala-Single-Dome-Pool-Villa/1.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Mandala-Single-Dome-Pool-Villa/2.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Mandala-Single-Dome-Pool-Villa/3.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Mandala-Single-Dome-Pool-Villa/4.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Mandala-Single-Dome-Pool-Villa/5.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="mad-table-wrap mt-5">
                            <table class="mad-table mad-table--vertical">
                                <tbody>
                                    <tr>
                                        <th>View</th>
                                        <td>Forest</td>
                                    </tr>
                                    <tr>
                                        <th>Bedding</th>
                                        <td>Two double beds 54 X 75 each where 4 persons can sleep comfortably. One extra floor mattress (double size) is provided if more than 4 persons are staying. Maximum of 6 pax.</td>
                                    </tr>
                                    <tr>
                                        <th>Floor area</th>
                                        <td>55 sqm</td>
                                    </tr>
                                    <tr>
                                        <th>Dome interior floor area</th>
                                        <td>29 sqm (excluding dining, kitchen, and bathroom areas).Including pool, bbq area, dining area, this villa has over 150 sqm.</td>
                                    </tr>
                                    <tr>
                                        <th>Non-Heated Intex Pool size</th>
                                        <td>  6 meters X 3 meters. Depth is 1 meter.</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="text-align:center;">
                                            <a target="_blank" href="https://bit.ly/3AY2VAO" class="btn btn-style-3 btn-big w-100">More of Mandala Villa</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="villa-item mt-5">
                        <h4 class="mad-title text-center">
                            Junior Tent Lodges 1 & 2
                        </h4>
                        <div class="mad-section no-pd content-element-main mad-section--stretched-content-no-px mad-colorizer--scheme-" style="margin-bottom: 3rem!important; margin-top: -1rem!important;">
                            <div class=" mad-gallery-slider mad-grid owl-carousel mad-grid--cols-1 mad-owl-moving nav-size-2">
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Junior-Tent-Lodges-1-and-2/1.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Junior-Tent-Lodges-1-and-2/2.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Junior-Tent-Lodges-1-and-2/3.jpg')}}" alt="" />
                                </div>
                                <div class="mad-col">
                                    <img src="{{ asset('assets/img/accommodation/villa/Junior-Tent-Lodges-1-and-2/4.jpg')}}" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="mad-table-wrap mt-5">
                            <table class="mad-table mad-table--vertical">
                                <tbody>
                                    <tr>
                                        <th>View</th>
                                        <td>Forest & Spa Village</td>
                                    </tr>
                                    <tr>
                                        <th>Bedding</th>
                                        <td>One double size floor mattress 54 X 75 if 1-2 pax staying. For 3-4 pax, one extra floor mattress will be provided.</td>
                                    </tr>
                                    <tr>
                                        <th>Floor area</th>
                                        <td>15.75 sqm</td>
                                    </tr>
                                    <tr>
                                        <th>Height</th>
                                        <td>2 meters. Can stand inside the tent.</td>
                                    </tr>
                                    <tr>
                                        <th>Entire floor area</th>
                                        <td>182.6 sqm with bbq, dining tent lounge, tent lodge and bonfire</td>
                                    </tr>
                                    <tr>
                                        <th>Others</th>
                                        <td>
                                            No pool access.<br>
                                            No kitchen.<br>
                                            Shared bathroom.<br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="text-align:center;">
                                            <a target="_blank" href="https://www.facebook.com/media/set/?set=a.5789291941093466&type=3" class="btn btn-style-3 btn-big w-100">More of Junior Tent Lodges 1 & 2</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
