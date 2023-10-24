
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
                            Enjoy the sounds of nature when you stay in this unique place. <br>
                            <span style="font-weight:700">Note:</span> this is not a dome villa but a real camping tent.
                        </p>
                        <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;font-weight: 700;">
                            Inclusive:
                        </h4>
                        <div class="mad-list-content">
                            <ul class="mad-list--icon-2" style="padding-top:0rem;">
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;Complimentary filipino breakfast (<span style="font-weight:700">for 4 pax booking only</span>)</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;complimentary water</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;private bonfire</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;private bbq area</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;private outdoor garden seating area</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;all amenities in the resort included</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;free access to the wellness village</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;24/7 security</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;standby backup generator</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;complimentary wifi</li>
                            </ul>
                        </div>
                        <br>
                        <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;font-weight: 700;">
                            Tent features:
                        </h4>
                        <div class="mad-list-content">
                            <ul class="mad-list--icon-2" style="padding-top:0rem;">
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;can divide into two rooms</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;rain protected</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;with windows</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;anti-mosquito breathable mesh behind door and windows</li>
                            </ul>
                        </div>
                        <br>
                        <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;font-weight: 700;">
                            Other info:
                        </h4>
                        <div class="mad-list-content">
                            <ul class="mad-list--icon-2" style="padding-top:0rem;">
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;breakfast choices f<span style="font-weight:700">or 4 pax booking only</span> tapsilog, bangsilog, chicksilog, cornsilog (may accept other silog breakfast, two days advance notification is required) served with instant coffee. (only the actual number of occupied guests will be provided breakfast)</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;children counted as adults.</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;no pool.</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;no kitchen. You can make your own bbq. A bbq grill is provided. Please bring charcoal. You can order food from our menu in advance.</li>
                            </ul>
                        </div>
                        <p style="text-align: center;">
                            <a href="http://127.0.0.1:8000/dining/private-dining/food-menu" target="_new" class="btn btn-huge btn-style-3 mt-3"> SEE FOOD MENU </a>
                        </p>
                        <div class="mad-list-content">
                            <ul class="mad-list--icon-2" style="padding-top:0rem;">
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;theres utensils cleaning area.</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;toilet and bath are not attached. Common toilet and bathroom are just a few steps away from the tent with a hot shower.</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;complimentary toilet paper and bathroom soap & shampoo. Towels are provided.</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;not air-conditioned. Naturally cool, an electric fan is provided.</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;strictly no karaoke or loud music or noise, please.</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;during heavy windy evenings, resort management may not allow bonfires due to fire safety requirements.</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;you may order food from our menu but one-day advance ordering is required. 4 hours advance notification is accepted with limited food choices. No on-site restaurant yet.</li>
                                <li style=" margin-bottom: 3px;"><i class="icon material-icons">check</i>&nbsp;expect real camping-style living. Outdoor insects and some inconveniences are normal in forest camping tents.</li>
                            </ul>
                        </div>
                        <br>
                        <p style="text-align: justify;font-weight:700;">
                            Check in: 2pm <br>
                            check out: 12nn
                        </p>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
