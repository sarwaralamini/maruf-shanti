
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Wellness Village')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Wellness Village')
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
    <h1 class="mad-page-title">Wellness Village</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>Wellness</span> /
        <span>Wellness Village</span>
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
                        <div class="mad-entity-pre-title">Wellness Village</div>
                        <p style="text-align:justify;margin-bottom:5px;">
                            Shanti wellness sanctuary, amidst untouched wilderness. Completely secluded with tranquil views.
                        </p>
                        <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;font-weight: 700;">
                            <i>Welcome to our wellness village.</i>
                        </h4>
                        <p style="text-align:justify;">
                            Designed to free the mind, to encourage you to rest, relax and meditate while inhaling the purest, freshest air and living within this pristine, truly inspiring scenery that surrounds us. <br>
                            Here, you can do these free activities, self-experienced: <br>
                            balance walk (hyperlink to their respective descriptions below then photo of each activity) <br>
                            mandala arrangement <br>
                            rock balancing <br>
                            stone walk (foot reflexology) <br>
                            labyrinth walk (will supply description and photo soon) <br>
                            use the wellness platform for yoga, sound bath or guided forest meditation <br>
                            grounding or earthing <br>
                            enjoy our pumice garden <br>
                        </p>

                        <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;font-weight: 700;">
                            Balance walk.
                        </h4>
                        <p style="text-align:justify;">
                            Balance is an asset at any age and level of physical fitness. By adding extra balance challenges as you walk, you will train yourself to be better able to maintain your balance and agility when you have to make a sudden move, such as in sports. You can also be better able to respond to tripping and slipping hazards, whether hiking a rough trail or in daily life.
                        </p>
                        <ul style="padding-left: 15px;list-style: auto;text-align: justify;">
                            <li>Start with your arms stretched out from your sides, at about shoulder height.</li>
                            <li>Focus on a spot several feet ahead of you, with your chin up and not looking at the ground.</li>
                            <li>Begin to walk. As you lift your rear leg and bring it forward, pause with your knee up for one second before placing your foot on the ground, stepping forward.</li>
                            <li>Now do the same with the other leg. As you bring it forward, pause for one second with your knee up before placing that foot ahead of you.</li>
                            <li>Repeat steps.</li>
                        </ul>

                        <br>
                        <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;font-weight: 700;">
                            Mandala arrangement.
                        </h4>
                        <p style="text-align:justify;">
                            A mandala flower arrangement shows balance in visual forms which symbolizes unity and harmony.
                        </p>
                        <p style="text-align:justify;">
                            Mandalas help to focus your attention. Therefore theyre an excellent exercise to calm any feelings of stress and clear your mind.
                        </p>
                        <p style="text-align:justify;">
                            These are some of the benefits of mandalas:
                        </p>
                        <ul style="padding-left: 15px;list-style: auto;text-align: justify;margin-top:-10px;">
                            <li>Facilitate balance.</li>
                            <li>Bring peace and serenity.</li>
                            <li>Promote a sense of tranquility.</li>
                            <li>Help your concentration.</li>
                            <li>Encourage you to give your full attention.</li>
                            <li>Allow you to put your thoughts aside and your creativity to flow.</li>
                            <li>Convey a sense of equilibrium as you arrange them.</li>
                        </ul>

                        <br>
                        <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;font-weight: 700;">
                            Rock balancing.
                        </h4>
                        <p style="text-align:justify;">
                            Also stone balancing, or stacking is a form of recreation or artistic expression in which rocks are piled in balanced stacks, often in a precarious manner.
                        </p>
                        <p style="text-align:justify;">
                            Balancing rocks is seen by those who perform it as a meditative and creative activity as the process of physically handling and balancing the stones provides them with mental health benefits.
                        </p>

                        <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;font-weight: 700;">
                            Stone walk (<span style="font-weight:100;">reflexology</span>).
                        </h4>
                        <p style="text-align:justify;">
                            By walking on stones of different sizes, the feet reflexes are activated and the energy of the whole body is stimulated.
                        </p>
                        <p style="text-align:justify;">
                            Walking barefoot on stones can be an important step to better health, including less tension and lower blood pressure.
                        </p>
                        <div data-isotope-layout="masonry" class="mad-gallery item-col-3 mad-grid--isotope g4">
                            <div class="mad-grid-sizer"></div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/wellness/wellness-village/1.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/wellness/wellness-village/1.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/wellness/wellness-village/2.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/wellness/wellness-village/2.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/wellness/wellness-village/3.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/wellness/wellness-village/3.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                            <div class="mad-grid-item">
                                <!--================ Gallery Item ================-->
                                <div class="mad-gallery-item">
                                    <a href="{{ asset('assets/img/wellness/wellness-village/4.jpg')}}" data-fancybox="gallery"
                                    ><img src="{{ asset('assets/img/wellness/wellness-village/4.jpg')}}" alt=""
                                    /></a>
                                </div>
                                <!--================ End Of Gallery Item ================-->
                            </div>
                        </div>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
