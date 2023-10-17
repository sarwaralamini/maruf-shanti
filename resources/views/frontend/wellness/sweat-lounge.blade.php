
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Sweat Lounge')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Sweat Lounge')
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
    <h1 class="mad-page-title">SWEAT LOUNGE</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>Wellness</span> /
        <span>SWEAT LOUNGE</span>
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
                        <div class="mad-entity-pre-title">SWEAT LOUNGE</div>

                        <p style="text-align:justify;">
                            Welcome to the Shanti Sweat Lounge, nestled within the serene sanctuary of Shanti Spa
Village. Our carefully chosen location, nestled close to nature and the tranquil hill creek, offers
a haven of relaxation surrounded by lush greenery. Here, you can immerse yourself in the
beauty of a forest setting, where the melodies of birdsong, the gentle caress of the wind, and
the soothing rustle of swaying leaves create a harmonious symphony for your senses.
                        </p>

                        <p style="text-align:justify;">
                            At the Shanti Sweat Lounge, we invite you to experience a range of exceptional amenities
                            designed to enhance your well-being and rejuvenate your mind, body, and soul. Let us take
                            you on a journey of serenity, where the benefits of our sweat lounge await.
                        </p>

                        <h4 class="mad-title text-center" style="margin-bottom:0px!important;">
                            Halotherapy Himalayan Salt Room:
                        </h4>
                        <p style="text-align:justify;">
                            Step into the Halotherapy Himalayan Salt Room and immerse yourself in a world of natural
                            healing and serenity. This exceptional space not only features the therapeutic benefits of pure,
                            mineral-rich salt, but it also boasts additional elements that enhance your well-being and
                            create a truly enchanting atmosphere.
                        </p>
                        <p style="text-align:justify;">
                            As you enter, you'll notice the gentle glow of Himalayan pink salt lamps, casting a warm and
                            soothing light. These lamps not only add to the serene ambiance but also emit negative ions,
                            promoting a sense of tranquility and reducing the impact of electronic devices on your wellbeing
                        </p>
                        <p style="text-align:justify;">
                            Within the Halotherapy Himalayan Salt Room, you'll find an abundance of pure Himalayan pink
                            salt, directly imported from the foot of the majestic Himalayas. This high-quality, coarse salt is
                            renowned for its purity and mineral content, adding to the therapeutic benefits of the space.
                            The air is delicately infused with the essence of these salt particles, creating an environment
                            that is both rejuvenating and relaxing.
                        </p>
                        <p style="text-align:justify;">
                            To complete the sensory experience, the walls of the salt room are adorned with natural
                            Himalayan pink salt bricks. These bricks not only contribute to the aesthetic beauty of the
                            room but also release trace minerals into the air, promoting a sense of tranquility and balance.
                        </p>
                        <p style="text-align:justify;">
                            Surrounded by this enchanting ambiance, you can surrender to the healing power of the
                            Halotherapy Himalayan Salt Room. Allow the pure salt-infused air to cleanse your respiratory
                            system, promoting easier breathing and improved overall respiratory health. Bask in the
                            soothing glow of the pink salt lamps and immerse yourself in the comforting presence of the
                            natural salt bricks. Experience the harmonizing effects of the Himalayan pink salt as it nurtures
                            your body, uplifts your spirit, and creates a truly enchanting and therapeutic sanctuary.
                        </p>
                        <p style="text-align:justify;">
                            Indulge in the transformative benefits of the Halotherapy Himalayan Salt Room, where every
                            element has been carefully curated to enhance your well-being. This extraordinary space
                            invites you to relax, rejuvenate, and find solace in the natural healing properties of Himalayan
                            pink salt.
                        </p>

                        <h4 class="mad-title text-center" style="margin-bottom:0px!important;">
                            Negative Ion Energy Room:
                        </h4>
                        <p style="text-align:justify;">
                            Indulge in the remarkable Negative Ion Energy Room, where a symphony of therapeutic
                            elements awaits.
                        </p>
                        <p style="text-align:justify;">
                            Indulge in the unique benefits offered by each heated bed in the Shanti Sweat Lounge.
                            Whether it's the comforting warmth of the Basalt Salt Natural Stone Bed, the soothing effects
                            of the Tourmaline Germanium Pad, or the purifying properties of the Himalayan Salt Chunk
                            Bed, each experience is designed to promote relaxation, rejuvenation, and a renewed sense of
                            well-being. Let the warmth envelop you and embrace the transformative power of these
                            therapeutic offerings.
                        </p>

                        <p style="text-align:justify;">
                            Here are the benefits of each heated bed in the Shanti Sweat Lounge:
                        </p>

                        <h4 class="mad-title text-center" style="margin-bottom:0px!important;">
                            Basalt Salt Natural Stone Bed:
                        </h4>
                        <p style="text-align:justify;">
                            Sink into the warmth of the Basalt Salt Natural Stone Bed and experience the soothing
                            benefits it offers. The heated stones release gentle heat, helping to relax tired muscles and
                            alleviate tension. This therapeutic experience promotes deep relaxation, improves circulation,
                            and enhances overall well-being.
                        </p>

                        <h4 class="mad-title text-center" style="margin-bottom:0px!important;">
                            Tourmaline Germanium Pad:
                        </h4>
                        <p style="text-align:justify;">
                            Indulge in the comforting warmth of the Tourmaline Germanium Pad and let its radiant heat
                            envelop you. The combination of tourmaline and germanium minerals provides a soothing and
                            calming effect, promoting relaxation and relieving muscle soreness. Immerse yourself in this
                            cocoon of warmth and let stress melt away.
                        </p>

                        <h4 class="mad-title text-center" style="margin-bottom:0px!important;">
                            Himalayan Salt Chunk Bed:
                        </h4>
                        <p style="text-align:justify;">
                            Experience the unique healing properties of the Himalayan Salt Chunk Bed as you rest upon it.
The bed is made up of natural Himalayan salt chunks, known for their detoxifying effects and
ability to balance the body's energy. As the bed is heated, the salt releases negative ions,
purifying the air and promoting a sense of calm and well-being.
                        </p>

                        <h4 class="mad-title text-center" style="margin-bottom:0px!important;">
                            Natural Jade Stone Bed:
                        </h4>
                        <p style="text-align:justify;">
                            Feel the serene warmth of the Natural Jade Stone Bed as it promotes deep relaxation and
rejuvenation. Jade has been revered for centuries for its healing properties, and as the bed
gently warms, it transfers its soothing energy to your body. This experience helps to release
tension, improve blood circulation, and restore balance to your energy flow.
                        </p>

                        <h4 class="mad-title text-center" style="margin-bottom:0px!important;">
                            Negative Ion Bed:
                        </h4>
                        <p style="text-align:justify;">
                            Immerse yourself in the comforting embrace of the Negative Ion Bed and experience the
                            transformative power of negative ions. Negative ions are known to enhance mood, reduce
                            stress, and promote overall well-being. As the bed warms, it emits these beneficial ions,
                            creating a serene environment that leaves you feeling refreshed and revitalized.
                        </p>

                        <h4 class="mad-title text-center" style="margin-bottom:0px!important;">
                            Far-Infrared Thermal Therapy:
                        </h4>
                        <p style="text-align:justify;">
                            Allow the Far-Infrared Thermal Therapy to penetrate deep into your tissues, offering a
                            multitude of benefits. The gentle heat stimulates blood circulation, promoting detoxification
                            and increased oxygen supply to your cells. This therapy can aid in relieving muscle pain,
                            reducing inflammation, and improving joint flexibility, leaving you feeling rejuvenated and
                            revitalized.
                        </p>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
