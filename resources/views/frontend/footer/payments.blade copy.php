
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'NEARBY ATTRACTIONS')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'NEARBY ATTRACTIONS')
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
    <h1 class="mad-page-title">NEARBY ATTRACTIONS</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>NEARBY ATTRACTIONS</span>
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
                        <div class="mad-entity-pre-title">NEARBY ATTRACTIONS</div>
                        <p>
                            <b>NEARBY ATTRACTIONS:</b>
                        </p>
                        <div class="mad-list-content">
                            <ul class="mad-list--icon">
                                <li><i class="icon material-icons">check</i>Village Tour  (Walking)</li>
                                <li><i class="icon material-icons">check</i>Tagaytay tour (By car distance 25 mins)</li>
                                <li><i class="icon material-icons">check</i>Fantasy world (By car distance 8 mins)</li>
                                <li><i class="icon material-icons">check</i>Twin lakes (By car distance 15 mins)</li>
                                <li><i class="icon material-icons">check</i>Mount Batulao (By car distance 30 mins)</li>
                                <li><i class="icon material-icons">check</i>Sky Ranch Tagaytay (By car distance 34 mins)</li>
                                <li><i class="icon material-icons">check</i>Puzzle Mansion (By car distance 32 mins)</li>
                                <li><i class="icon material-icons">check</i>The heritage town of Taal (By car distance 8 mins)</li>
                                <li><i class="icon material-icons">check</i>Tagaytay Picnic Grove (By car distance 49 mins)</li>
                                <li><i class="icon material-icons">check</i>Museo Orlina (By car distance 45 mins)</li>
                                <li><i class="icon material-icons">check</i>Residence Inn Mini Zoo (By car distance 32 mins)</li>
                                <li><i class="icon material-icons">check</i>Mt. Talamitam (By car distance 38 mins)</li>
                                <li><i class="icon material-icons">check</i>SM Lemery (By car distance 28 mins)</li>
                                <li><i class="icon material-icons">check</i>Robinsons Supermarket Twin lakes (By car distance 16 mins)</li>
                                <li><i class="icon material-icons">check</i>Ayala Malls Serin Tagaytay (By car distance 35 mins)</li>
                                <li><i class="icon material-icons">check</i>Fora Malls Tagaytay (By car distance 40 mins)</li>
                                <li><i class="icon material-icons">check</i>Mt. Maculot (By car distance 60 mins)</li>
                                <li><i class="icon material-icons">check</i>Lemery Beach (By car distance 32 mins)</li>
                                <li><i class="icon material-icons">check</i>Nasugbu / Anilao / Lian / Mabini / Calatagan beach (By car distance 60 mins)</li>
                            </ul>
                        </div>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
