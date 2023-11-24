
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'JTL Amenities')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'JTL Amenities')
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
    <h1 class="mad-page-title">JTL Amenities</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>Accommodation</span> /
        <span>JTL Amenities</span>
    </nav>
    </div>
    </div>
    <!--================ End of Breadcrumb ================-->

    <div class="mad-content no-pd">
        <div class="container">
            <div class="mad-section">
                <div class="mad-entities mad-entities-reverse type-4">
                <!--================ Entity ================-->
                <article class="mad-entity">
                    <div style="max-width:100rem;font-size: 1.125rem;line-height:1.5rem;" >
                        <div class="mad-entity-pre-title">JTL Amenities</div>
                        <p style="text-align:justify;">
                            Enjoy the sounds of nature when you stay in this unique place.<br>
                            <span style="font-weight:700">Note: This is NOT a dome villa but a real camping tent.</span>
                        </p>
                        <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;font-weight: 700;">
                            Inclusive:
                        </h4>
                        <div class="mad-list-content">
                            <ul class="mad-list--icon-2" style="padding-top:0rem;">
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;Complimentary Filipino breakfast (<span style="font-weight:700">for 4 pax booking ONLY</span>)</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;Complimentary water</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;Private Bonfire</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;Private BBQ area</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;Private outdoor garden seating area</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;All amenities in the resort included</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;Free access to the wellness village</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;24/7 security</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;Standby backup generator</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;Complimentary wifi</li>
                            </ul>
                        </div>
                        <br>
                        <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;font-weight: 700;">
                            Tent Features:
                        </h4>
                        <div class="mad-list-content">
                            <ul class="mad-list--icon-2" style="padding-top:0rem;">
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;Can divide into two rooms</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;Rain protected</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;With windows</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;Anti-mosquito breathable mesh behind door and windows</li>
                            </ul>
                        </div>
                        <br>
                        <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;font-weight: 700;">
                            Other Info:
                        </h4>
                        <div class="mad-list-content">
                            <ul class="mad-list--icon-2" style="padding-top:0rem;">
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;Breakfast choices<span style="font-weight:700"> for 4 pax booking ONLY:</span> Tapsilog, Bangsilog, Chicksilog, Cornsilog (may accept other silog breakfast, two days advance notification is required) served with instant coffee. (Only the actual number of occupied guests will be provided breakfast)</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;Children counted as adults. </li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;If occupying more than 2 pax, an additional mattress will be provided.</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;No pool.</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;No kitchen. You can make your own bbq. A BBQ grill is provided. Please bring charcoal. You can order food from our MENU in advance.</li>
                            </ul>
                        </div>
                        <p style="text-align: center;">
                            <a href="{{ route('dining.private-dining.food-menu') }}" target="_new" class="btn btn-huge btn-style-3 mt-3"> SEE FOOD MENU </a>
                        </p>
                        <div class="mad-list-content">
                            <ul class="mad-list--icon-2" style="padding-top:0rem;">
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;There’s utensils cleaning area.</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;Toilet and bath are not attached. Common toilet and bathroom are just a few steps away from the tent with a hot shower.</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;Complimentary toilet paper and bathroom soap & shampoo. Towels are provided.</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;Not air-conditioned. Naturally cool, an electric fan is provided. </li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;Strictly no karaoke or loud music or noise, please.</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;During heavy windy evenings, resort management may not allow bonfires due to fire safety requirements.</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;You may order food from our MENU but one-day advance ordering is required. 4 hours advance notification is accepted with limited food choices. No on-site restaurant yet. </li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;Expect real camping-style living. Outdoor insects and some inconveniences are normal in forest camping tents.</li>
                            </ul>
                        </div>
                        <br>
                        <p style="text-align: justify;font-weight:700;">
                            Check In: 2pm <br>
                            Check Out: 12nn
                        </p>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
