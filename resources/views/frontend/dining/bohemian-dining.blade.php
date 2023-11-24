
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Bohemian Dining')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Bohemian Dining')
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
    <h1 class="mad-page-title">Bohemian Dining</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>Dining</span> /
        <span>Bohemian Dining</span>
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
                        <div class="mad-entity-pre-title">Bohemian Dining</div>
                        <p style="text-align:justify;">
                            Bohemian dinner is an alfresco dinner setup, weather permitting, from 5PM to 9PM. The setup includes a low table, a fancy dining setup, pillows, candles, and lights. Food inclusive, select from our menu.
                        </p>
                        <p style="text-align: center;    margin-top: -30px;">
                            <a href="{{ route('dining.private-dining.food-menu') }}" target="_new" class="btn btn-huge btn-style-3 mt-3"> SEE FOOD MENU </a>
                        </p>
                        <p style="text-align:justify;">
                            Advance ordering is required. Please note that each dish is good for 1-2 pax only (depending on appetite) as stated on our Menu. You may add more food at an additional rate.
                        </p>
                        <p style="text-align:justify;">
                            In case of a bad weather condition, setup will be done either at the villa dining area or at the SPA Village (there will be a slight modification with the setup). This service is strictly non-refundable. Rates below are service charge and VAT-inclusive.
                        </p>
                        <p style="font-weight:700;">
                            RATES:
                        </p>
                        <div class="mad-list-content">
                            <span style="display:block;font-weight:700;">Bohemian Dinner for 2 PERSONS (PHP 3298.90)</span>
                            <ul class="mad-list--icon" style="margin-top:-15px;">
                                <li style="margin-bottom:0rem;"><i class="icon material-icons">check</i>2 rice</li>
                                <li style="margin-bottom:0rem;"><i class="icon material-icons">check</i>1 choice of appetizer</li>
                                <li style="margin-bottom:0rem;"><i class="icon material-icons">check</i>1 choice of soup</li>
                                <li style="margin-bottom:0rem;"><i class="icon material-icons">check</i>1 choice of vegetable or chicken or seafood dish</li>
                                <li style="margin-bottom:0rem;"><i class="icon material-icons">check</i>1 choice of dessert</li>
                            </ul>
                        </div>
                        <br>
                        <div class="mad-list-content">
                            <span style="display:block;;font-weight:700;">Bohemian Dinner for 4 PERSONS (PHP 4398.90)</span>
                            <ul class="mad-list--icon" style="margin-top:-15px;">
                                <li style="margin-bottom:0rem;"><i class="icon material-icons">check</i>4 rice</li>
                                <li style="margin-bottom:0rem;"><i class="icon material-icons">check</i>1 choice of appetizer</li>
                                <li style="margin-bottom:0rem;"><i class="icon material-icons">check</i>1 choice of soup</li>
                                <li style="margin-bottom:0rem;"><i class="icon material-icons">check</i>1 choice of vegetable dish</li>
                                <li style="margin-bottom:0rem;"><i class="icon material-icons">check</i>1 choice of chicken or seafood dish</li>
                                <li style="margin-bottom:0rem;"><i class="icon material-icons">check</i>2 choices of dessert</li>
                            </ul>
                        </div>

                        <br>
                        <div class="mad-list-content">
                            <span style="display:block;;font-weight:700;">Bohemian Dinner for 6 PERSONS (PHP 5828.90)</span>
                            <ul class="mad-list--icon" style="margin-top:-15px;">
                                <li style="margin-bottom:0rem;"><i class="icon material-icons">check</i>6 rice</li>
                                <li style="margin-bottom:0rem;"><i class="icon material-icons">check</i>2 choice of appetizer</li>
                                <li style="margin-bottom:0rem;"><i class="icon material-icons">check</i>1 choice of soup</li>
                                <li style="margin-bottom:0rem;"><i class="icon material-icons">check</i>1 choice of vegetable dish</li>
                                <li style="margin-bottom:0rem;"><i class="icon material-icons">check</i>2 choices of chicken or seafood dish</li>
                                <li style="margin-bottom:0rem;"><i class="icon material-icons">check</i>2 choices of dessert</li>
                            </ul>
                        </div>

                        <p style="text-align:center!important;margin-bottom:0px">
                            <a href="{{ route('contact.contact-us') }}" target="_new" class="btn btn-huge btn-style-3 mt-3"> Message us to book this service </a>
                        </p>
                        
                        <p style="text-align:center!important;">
                            <a href="https://www.facebook.com/media/set/?set=a.5789105154445478&type=3" target="_new" class="btn btn-huge btn-style-3 mt-3">VIEW MORE PHOTOS OF BOHEMIAN DINING</a>
                        </p>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
