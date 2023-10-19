
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Payments')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Payments')
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
    <h1 class="mad-page-title">PAYMENTS</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>PAYMENTS</span>
    </nav>
    </div>
    </div>
    <!--================ End of Breadcrumb ================-->

    <div class="mad-content no-pd">
        <div class="container">
            <div class="mad-section">
                <div class="mad-entities mad-entities-reverse type-4">
                <!--================ Entity ================-->
                <article class="mad-entity" style="justify-content: flex-start;">
                    <div style="max-width:100rem;font-size: 1.125rem;line-height:1.5rem;" >
                        <div class="mad-entity-pre-title">PAYMENTS</div>
                        <section class="mad-widget">
                            <p class="content-element-4" style=" margin-bottom: 10px; ">
                                We accept credit/debit cards, PayPal, bank transfer, GCASH to bank transfer.
                            </p>
                            <h6 class="mad-widget-title" style="margin-bottom: -1.75rem;">
                                For bank payments:
                            </h6>
                            <p class="content-element-4">
                                <div>
                                    <b>Account Name:</b> Shanti Wellness Sanctuary Inc <br>
                                </div>
                                <div>
                                    <b>BDO:</b> 000058028924
                                </div>

                                <div style="margin-top:20px!important;">
                                    <b>Account Name:</b> BIGFISH MANILA INC <br>
                                </div>
                                <div>
                                    <b>Metro Bank:</b> 2153215195601 <br>
                                </div>
                                <div>
                                    <b>BPI:</b> 4403037619
                                </div>
                            </p>

                            <p>
                                <i>Please send us the payment copy for the confirmation of your booking. Thank you.</i>
                            </p>

                        </section>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
