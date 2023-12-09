
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Unique Wellness Services')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Unique Wellness Services')
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
    <h1 class="mad-page-title">Unique Wellness Services</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>Wellness</span> /
        <span>Unique Wellness Services</span>
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
                            <div class="mad-entity-pre-title">Unique Wellness Services</div>
                            <h6 class="mad-entity-title text-center-on-medium-device">
                                …far from the everyday world.
                                <br>  …perched majestically between hills and valleys.
                                <br> Shanti Wellness Sanctuary is a unique concept, amidst the lushness of nature. A place where the mind can escape. An oasis for body, mind and spirit. Minutes away from Tagaytay.
                            </h6>
                            <div role="alert" class="mad-alert-box mad-alert-box--info">
                                <div class="mad-alert-box-inner">
                                   Try our unique wellness services:
                                    <br><a href="#one" style="color:#4f585a">Shinrin Yoku (Forest Bathing)</a>
                                    <br><a href="#one1" style="color:#4f585a">Sound Bath (Sound Wellness)</a>
                                    <br><a href="#one3" style="color:#4f585a">Kawa Bath</a>
                                    <br><a href="#one4" style="color:#4f585a">Aqua Yoga</a>
                                    <br><a href="#one5" style="color:#4f585a">Pre-recorded Voice Guided Forest Meditation</a>
                                    <br><a href="#one6" style="color:#4f585a">Botanical Tour</a>
                                    <br><a href="#one7" style="color:#4f585a">Yoga Class With A Yoga Instructor</a>
                                    <br><a href="{{ route('spa-and-bath-menu') }}" target="_blank" style="color:#4f585a">SPA and Signature Bath</a>
                                    <br><a href="{{route('sweat-lounge') }}" target="_blank" style="color:#4f585a">Sweat Lounge</a>
                                    <br><a href="#one8" style="color:#4f585a">Sauna and Steam Bath</a>
                                    <br><a href="#one9" style="color:#4f585a">Shirodhara with Head Massage</a>
                                    <br><a href="#one10" style="color:#4f585a">Banana Leaf Bath</a>
                                    <br><a href="{{ route('birthday-setup') }}" target="_blank" style="color:#4f585a">Birthday Dome or Tent Setup</a>
                                    <br><a href="{{ route('make-it-romantic') }}" target="_blank" style="color:#4f585a">Romantic Dome or Tent Setup</a>
                                    <br><a href="{{ route('dining.bohemian-dining') }}" target="_blank" style="color:#4f585a">Bohemian Dinner</a>
                                    <br><a href="{{ route('dining.glam-picnic') }}" target="_blank" style="color:#4f585a">Glam Picnic</a>
                                    <br><a href="{{ route('dining.romantic-dining') }}" target="_blank" style="color:#4f585a">Romantic Dinner Table Setup</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <div class="villa-item" id="one">
                        <h4 class="mad-title text-center">
                            Shinrin Yoku (Forest Bathing)
                        </h4>
                        <p>
                            <img src="{{ asset('assets/img/wellness/activities/1.jpg') }}" alt="" />
                        </p>
                        <div class="mad-table-wrap mt-5">
                            <table class="mad-table mad-table--vertical">
                                <tbody>
                                    <tr>
                                        <td style="text-align:justify;">Forest bathing, or Shinrin-yoku, is a Japanese practice that involves immersing oneself in a forest environment to experience the healing and therapeutic benefits of nature. It's a mindful and intentional way of connecting with the natural world, promoting relaxation, stress reduction, and overall well-being.</td>
                                    </tr>
                                    <tr>
                                        <td>P499/person</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum of 2 pax</td>
                                    </tr>
                                    <tr>
                                        <td>30-45 minutes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="villa-item" id="one1">
                        <h4 class="mad-title text-center">
                            Sound Bath (Sound Wellness)
                        </h4>
                        <p>
                            <img src="{{ asset('assets/img/wellness/activities/2.jpg') }}" alt="" />
                        </p>
                        <h4 class="mad-title text-center" style="margin-top: 25px;" id="one2">
                            In-room Sound Bath
                        </h4>
                        <p>
                            <img src="{{ asset('assets/img/wellness/activities/6.jpg') }}" alt="" />
                        </p>
                        <div class="mad-table-wrap mt-5">
                            <table class="mad-table mad-table--vertical">
                                <tbody>
                                    <tr>
                                        <td style="text-align:justify;">A sound bath is a therapeutic and meditative experience where participants are immersed in sound vibrations, often produced by instruments such as singing bowls, gongs, chimes, drums, and other resonant tools. The aim is to promote relaxation, reduce stress, and enhance overall well-being through the healing power of sound.</td>
                                    </tr>
                                    <tr>
                                        <td>P499/person</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum of 2 pax</td>
                                    </tr>
                                    <tr>
                                        <td>30 minutes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="villa-item" id="one3">
                        <h4 class="mad-title text-center">
                            Kawa Bath
                        </h4>
                        <p>
                            <img src="{{ asset('assets/img/wellness/activities/3.jpg') }}" alt="" />
                        </p>
                        <div class="mad-table-wrap mt-5">
                            <table class="mad-table mad-table--vertical">
                                <tbody>
                                    <tr>
                                        <td style="text-align:justify;">Indulging in a kawa bath is the SPA experience you didn’t know you needed. If you haven’t tried it yet, come to 𝑺𝒉𝒂𝒏𝒕𝒊 𝑾𝒆𝒍𝒍𝒏𝒆𝒔𝒔 𝑺𝒂𝒏𝒄𝒕𝒖𝒂𝒓𝒚, take a warm dip in our kawas, just relax and enjoy the view. Kawa bath's benefit is to lower your body's stress and strain level. This hot bath soothes the stressed-out muscles in the body and calms the mind.</td>
                                    </tr>
                                    <tr>
                                        <td>Bath in an oversized wok. 2 persons at a time.</td>
                                    </tr>
                                    <tr>
                                        <td>P499/person</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum of 2 pax</td>
                                    </tr>
                                    <tr>
                                        <td>30 minutes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="alert" class="mad-alert-box mad-alert-box--info">
                        <div class="mad-alert-box-inner">
                            BESTSELLER: Get a package deal for all three (Forest Bath, Sound Bath, and Kawa Bath) at P1290/person, minimum of 2 pax.
                        </div>
                    </div>
                    <div class="villa-item" id="one4">
                        <h4 class="mad-title text-center">
                            Aqua Yoga
                        </h4>
                        <p>
                            <img src="{{ asset('assets/img/wellness/activities/4.jpg') }}" alt="" />
                        </p>
                        <div class="mad-table-wrap mt-5">
                            <table class="mad-table mad-table--vertical">
                                <tbody>
                                    <tr>
                                        <td style="text-align:justify;">A guided therapeutic yoga done in the checked-in villa pool. Aqua yoga increases strength, decreases pressure on joints, and relaxes the entire body.</td>
                                    </tr>
                                    <tr>
                                        <td>P499/person</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum of 2 pax</td>
                                    </tr>
                                    <tr>
                                        <td>30 minutes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="villa-item" id="one5">
                        <h4 class="mad-title text-center">
                            Pre-recorded Voice Guided Forest Meditation
                        </h4>
                        <p>
                            <img src="{{ asset('assets/img/wellness/activities/5.jpg') }}" alt="" />
                        </p>
                        <div class="mad-table-wrap mt-5">
                            <table class="mad-table mad-table--vertical">
                                <tbody>
                                    <tr>
                                        <td style="text-align:justify;">A voice-recorded guided meditation with a series of breathing exercises and mantras. This slows down racing thoughts, lets go of negativity, and calms your mind and body.</td>
                                    </tr>
                                    <tr>
                                        <td>P199/person</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum of 2 pax</td>
                                    </tr>
                                    <tr>
                                        <td>10 minutes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="villa-item" id="one6">
                        <h4 class="mad-title text-center">
                            Botanical Tour
                        </h4>
                        <p>
                            <img src="{{ asset('assets/img/wellness/activities/7.png') }}" alt="" />
                        </p>
                        <div class="mad-table-wrap mt-5">
                            <table class="mad-table mad-table--vertical">
                                <tbody>
                                    <tr>
                                        <td style="text-align:justify;">A guided nature therapy that focuses on boosting growth and healing, especially of the mental health in the presence of nature. Walks in the forest and learning about the different plants and trees and their characteristics.</td>
                                    </tr>
                                    <tr>
                                        <td>P499/person</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum of 2 pax</td>
                                    </tr>
                                    <tr>
                                        <td>30 minutes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="villa-item" id="one7">
                        <h4 class="mad-title text-center">
                            Yoga Class With A Yoga Instructor
                        </h4>
                        <p>
                            <img src="{{ asset('assets/img/wellness/activities/12.jpg') }}" alt="" />
                        </p>
                        <div class="mad-table-wrap mt-5">
                            <table class="mad-table mad-table--vertical">
                                <tbody>
                                    <tr>
                                        <td style="text-align:justify;">A wonderful way to enhance flexibility, strength, and overall well-being. If you're new to yoga or looking to deepen your practice, book this service today.</td>
                                    </tr>
                                    <tr>
                                        <td>Ask for rate</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum of 4 pax</td>
                                    </tr>
                                    <tr>
                                        <td>1 hr</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="villa-item" id="one8">
                        <h4 class="mad-title text-center">
                            Sauna and Steam Bath
                        </h4>
                        <p>
                            <img src="{{ asset('assets/img/wellness/activities/15.jpg') }}" alt="" />
                        </p>
                        <div class="mad-table-wrap mt-5">
                            <table class="mad-table mad-table--vertical">
                                <tbody>
                                    <tr>
                                        <td style="text-align:justify;">The River Rock Sauna and Herbs Infused Steam Bath can house up to ten guests and features glass doors that connect individuals to the surrounding lush environment. Complimentary herbal foot baths are provided.</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:justify;">P499 per guest (if availing guest booked a massage)</td>
                                    </tr>

                                    <tr>
                                         <td style="text-align:justify;">P990 per guest (includes usage of 𝐒𝐰𝐞𝐚𝐭 𝐋𝐨𝐮𝐧𝐠𝐞 for 1 hr with sauna & steam)</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="villa-item" id="one9">
                        <h4 class="mad-title text-center">
                            Shirodhara with Head Massage
                        </h4>
                        <p>
                            <img src="{{ asset('assets/img/wellness/activities/13.jpg') }}" alt="" />
                        </p>
                        <div class="mad-table-wrap mt-5">
                            <table class="mad-table mad-table--vertical">
                                <tbody>
                                    <tr>
                                        <td style="text-align:justify;">Shirodhara is a traditional Ayurvedic therapy that involves a continuous, gentle pouring of warm, medicated oil or liquid over the forehead, specifically the "third eye" region. It's a deeply relaxing and rejuvenating treatment designed to calm the mind, balance the nervous system, and promote overall well-being. The steady stream of oil induces a state of blissful relaxation, helping to alleviate stress, anxiety, insomnia, and related ailments. Shirodhara is known for its ability to enhance mental clarity, improve focus, and restore equilibrium to the body and mind.</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:justify;">Shirodhara with head massage (using herbal medicated oil)</td>
                                    </tr>
                                    <tr>
                                        <td>P2490/person</td>
                                    </tr>
                                    <tr>
                                        <td>1 hr session</td>
                                    </tr>
                                    <tr>
                                         <td style="text-align:justify;">Shirodhara with head massage (using herbs infused water)</td>
                                    </tr>
                                    <tr>
                                        <td>P1690/person</td>
                                    </tr>
                                    <tr>
                                        <td>1 hr session</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="villa-item" id="one10">
                        <h4 class="mad-title text-center">
                            Banana Leaf Bath
                        </h4>
                        <p>
                            <img src="{{ asset('assets/img/wellness/activities/14.jpg') }}" alt="" />
                        </p>
                        <div class="mad-table-wrap mt-5">
                            <table class="mad-table mad-table--vertical">
                                <tbody>
                                    <tr>
                                        <td style="text-align:justify;">
                                            An ancient way of detox. Banana leaf detox bath also called natural banana leaf sauna.The banana leaf treatment helps greatly in detoxifying the body. This therapy flushes the toxins from the body. The green color of banana leaves has great healing properties which deters the harmful rays and toxins from entering the body and allows the energy to flow into various parts into the body.
                                            <br>
                                            <b>Benefits:</b>
                                            <br>-Helps in removal of toxins.
                                            <br>--Detoxifies the body and aids in weight loss.
                                            <br>--Curative for all sorts of skin diseases.
                                            <br>--Maintains the skin's glow and clears the acne and black heads from the skin.
                                            <br>--Induces to open the pores and clears the dirt away.
                                            <br>--Possesses excellent anti-inflammatory properties.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>P499/person</td>
                                    </tr>
                                    <tr>
                                        <td>15-20 minutes under the sun</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mad-testimonial-bg content-element-4">
                        <div class="mad-testimonial">
                            <div class="mad-testimonial-info">
                            <blockquote>
                                <p style="text-align:justify;">
                                    In the case of rain, we will find an alternative time to perform the Forest Bath, Sound Bath, and Meditative Botanical Tour. Other activities may be performed in the villa or in the SPA Village. This is non-refundable.
                                </p>
                            </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
