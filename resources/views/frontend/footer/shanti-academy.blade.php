
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Shanti Academy')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Shanti Academy')
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
    <h1 class="mad-page-title">SHANTI ACADEMY</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>SHANTI ACADEMY</span>
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
                        <div class="mad-entity-pre-title">SHANTI ACADEMY</div>

                        <p style="text-align:center;">
                            <img src="{{ asset('assets/img/footer/shanti-academy.png') }}" alt="" />
                        </p>
                        <p style="text-align:justify;">
                            Welcome to the Shanti Nature Academy at Shanti Wellness Sanctuary—a haven of knowledge, exploration, and holistic learning. Our academy, established in 2023, is dedicated to deepening the understanding and application of our unique wellness programs, while fostering a profound connection with nature.
                        </p>
                        <p style="text-align:justify;">
                            At Shanti Wellness Sanctuary, we pride ourselves on offering a serene and rejuvenating environment where guests can experience a range of wellness programs. Our carefully crafted offerings include transformative practices like yoga, sound baths, shinrin-yoku (forest bathing), aqua yoga, meditation, massage, eco-therapy. Now, with the introduction of the Shanti Nature Academy, we take your wellness journey to new heights.
                        </p>
                        <p style="text-align:justify;">
                            The Shanti Nature Academy serves as a hub for learning and growth, not only for our guests but also for our dedicated team members. It is here that we delve into the holistic approaches that underpin our wellness programs. By nurturing an environment of continuous research and development, we strive to enhance our understanding of well-being and create innovative wellness experiences.
                        </p>
                        <p style="text-align:justify;">
                            One of our primary focuses at the academy is to foster a deep appreciation for nature's power and its profound impact on our well-being. We explore the wonders of our sanctuary, home to century-old plants whose wisdom and healing properties are unparalleled. Through botanical research, we unlock the secrets held within leaves, fruits, and herbs, harnessing their potential to promote wellness. We also delve into the empirical evidence of forest bathing and its remarkable influence on human immune function. By understanding nature's role in nurturing health, we empower ourselves and our guests to achieve optimal well-being.
                        </p>
                        <p style="text-align:justify;">
                            The Shanti Nature Academy goes beyond theoretical knowledge; we actively engage in practical aspects of nature conservation and propagation. We dive into the art of asexual propagation, exploring techniques such as cuttings, layering, division, budding, and grafting. Our team nurtures plants and seedlings, honing their care and overseeing the development of our very own nursery. In our quest for sustainability, we embrace organic practices, including the creation of organic fertilizers and the cultivation of a vibrant vegetable garden.
                        </p>
                        <p style="text-align:justify;">
                            We believe in giving back to the community, and the Shanti Nature Academy is an integral part of our livelihood program. By harnessing the abundant resources within our sanctuary, we empower locals through skill development and income generation. Together, we create opportunities for community members to craft exceptional products using natural ingredients. From the production of extra virgin coconut oil (VCO) to the creation of chemical-free soaps, shampoos, and other organic goods, we foster sustainable livelihoods that honor and protect nature.
                        </p>
                        <p style="text-align:justify;">
                            Join us at the Shanti Nature Academy, where knowledge blossoms, and the wonders of nature unfold. Expand your understanding, deepen your connection to the world around you, and embark on a transformative journey toward holistic well-being. Together, let's embrace the power of nature and embark on a path of wellness, growth, and community enrichment.
                        </p>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
