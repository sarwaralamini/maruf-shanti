
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
                            Welcome to the Shanti Sweat Lounge, nestled within the serene sanctuary of Shanti Spa Village. Our carefully chosen location, nestled close to nature and the tranquil hill creek, offers a haven of relaxation surrounded by lush greenery. Here, you can immerse yourself in the beauty of a forest setting, where the melodies of birdsong, the gentle caress of the wind, and the soothing rustle of swaying leaves create a harmonious symphony for your senses.
                        </p>

                        <p style="text-align:justify;">
                            At the Shanti Sweat Lounge, we invite you to experience a range of exceptional amenities designed to enhance your well-being and rejuvenate your mind, body, and soul. Let us take you on a journey of serenity, where the benefits of our sweat lounge await.
                        </p>

                        <p style="text-align: center;">
                            <img src="{{ asset('assets/img/wellness/sweat-lounge/1.jpg') }}" alt="">
                        </p>

                        <p>
                            With:
                            <br>-𝟮 𝗼𝘂𝘁𝗱𝗼𝗼𝗿 𝘀𝗵𝗼𝘄𝗲𝗿𝘀
                            <br>-𝟮 𝗶𝗻𝗱𝗼𝗼𝗿 𝘀𝗵𝗼𝘄𝗲𝗿𝘀
                            <br>-𝗮𝗻 𝗼𝘂𝘁𝗱𝗼𝗼𝗿 𝗰𝗼𝗼𝗹𝗶𝗻𝗴 𝗮𝗿𝗲𝗮
                            <br>-𝗺𝗮𝗹𝗲/ 𝗳𝗲𝗺𝗮𝗹𝗲 𝘀𝗲𝗽𝗮𝗿𝗮𝘁𝗲 𝗰𝗵𝗮𝗻𝗴𝗶𝗻𝗴 𝗿𝗼𝗼𝗺𝘀 𝘄𝗶𝘁𝗵 𝗹𝗼𝗰𝗸𝗲𝗿𝘀, 𝘁𝗼𝗶𝗹𝗲𝘁𝘀 𝗮𝗻𝗱 𝘀𝗵𝗼𝘄𝗲𝗿𝘀
                            <br>-𝘀𝘄𝗲𝗮𝘁 𝗹𝗼𝘂𝗻𝗴𝗲 𝘁𝗼𝘄𝗲𝗹𝘀, 𝘀𝗵𝗶𝗿𝘁𝘀 𝗮𝗻𝗱 𝘀𝗵𝗼𝗿𝘁𝘀 𝗮𝗿𝗲 𝗽𝗿𝗼𝘃𝗶𝗱𝗲𝗱
                        </p>

                        <h4 class="mad-title text-center" style="margin-bottom:0px!important;" id="tm1">
                            Shanti Sweat Lounge has 2 rooms:
                        </h4>
                        <p style="text-align:justify;">
                            First Room. 𝑵𝒆𝒈𝒂𝒕𝒊𝒗𝒆 𝑰𝒐𝒏 𝑬𝒏𝒆𝒓𝒈𝒚 𝑹𝒐𝒐𝒎 with 5 heated beds (guests need to lie down on the bed pads, recommended for 20 mins total)
                        </p>
                        <p style="text-align: center;">
                            <img src="{{ asset('assets/img/wellness/sweat-lounge/2.jpg') }}" alt="">
                        </p>
                        <p style="text-align:justify;">
                            Indulge in the remarkable Negative Ion Energy Room, where a symphony of therapeutic elements awaits.
                        </p>
                        <p style="text-align:justify;">
                            Luxuriate in the unique benefits offered by each heated bed in the Shanti Sweat Lounge where each experience is designed to promote relaxation, rejuvenation, and a renewed sense of well-being. Let the warmth envelop you and embrace the transformative power of these therapeutic offerings.
                        </p>
                        <p style="text-align:justify;">
                            Here are the benefits of each heated bed in this room:
                        </p>

                        <h4 class="mad-title text-center" style="margin-bottom:0px!important;" id="tm2">
                            Bed 1 & Bed 2. 𝗡𝗮𝘁𝘂𝗿𝗮𝗹 𝗛𝗶𝗺𝗮𝗹𝗮𝘆𝗮𝗻 𝗦𝗮𝗹𝘁 𝗖𝗵𝘂𝗻𝗸 𝗕𝗲𝗱𝘀
                        </h4>
                        <p style="text-align:justify;">
                            Experience the unique healing properties of the Natural Himalayan Salt Chunk Beds as you rest upon it. The beds are made up of natural Himalayan salt chunks, known for their detoxifying effects and ability to balance the body's energy. As the bed is heated, the salt releases negative ions, purifying the air and promoting a sense of calm and well-being.
                        </p>
                        <p style="text-align: center;">
                            <img src="{{ asset('assets/img/wellness/sweat-lounge/3.jpg') }}" alt="">
                        </p>
                        <p style="text-align: center;">
                            <img src="{{ asset('assets/img/wellness/sweat-lounge/4.jpg') }}" alt="">
                        </p>

                        <h4 class="mad-title text-center" style="margin-bottom:0px!important;" id="tm2">
                            Bed 3. 𝗕𝗮𝘀𝗮𝗹𝘁 𝗩𝗼𝗹𝗰𝗮𝗻𝗶𝗰 𝗦𝘁𝗼𝗻𝗲 𝗼𝗻 𝗧𝗼𝘂𝗿𝗺𝗮𝗹𝗶𝗻𝗲 𝗚𝗲𝗿𝗺𝗮𝗻𝗶𝘂𝗺 𝗦𝘁𝗼𝗻𝗲 𝗕𝗲𝗱
                        </h4>
                        <p style="text-align:justify;">
                            Sink into the warmth of the Basalt Volcanic Stone Bed and experience the soothing benefits it offers. The heated stones release gentle heat, helping to relax tired muscles and alleviate tension. This therapeutic experience promotes deep relaxation, improves circulation, and enhances overall well-being.
                        </p>
                        <p style="text-align:justify;">
                            Indulge in the comforting warmth of the Tourmaline Germanium Pad and let its radiant heat envelop you. The combination of tourmaline and germanium minerals provides a soothing and calming effect, promoting relaxation and relieving muscle soreness. Immerse yourself in this cocoon of warmth and let stress melt away.
                        </p>
                        <p style="text-align: center;">
                            <img src="{{ asset('assets/img/wellness/sweat-lounge/5.jpg') }}" alt="">
                        </p>

                        <h4 class="mad-title text-center" style="margin-bottom:0px!important;" id="tm2">
                            Bed 4. 𝗙𝗮𝗿-𝗜𝗻𝗳𝗿𝗮𝗿𝗲𝗱 𝗡𝗲𝗴𝗮𝘁𝗶𝘃𝗲 𝗜𝗼𝗻 𝗕𝗲𝗱
                        </h4>
                        <p style="text-align:justify;">
                            Allow the Far-Infrared Negative Ion Bed to penetrate deep into your tissues, offering a multitude of benefits. The gentle heat stimulates blood circulation, promoting detoxification and increased oxygen supply to your cells. This therapy can aid in relieving muscle pain, reducing inflammation, and improving joint flexibility, leaving you feeling rejuvenated and revitalized.
                        </p>
                        <p style="text-align: center;">
                            <img src="{{ asset('assets/img/wellness/sweat-lounge/6.jpg') }}" alt="">
                        </p>

                        <h4 class="mad-title text-center" style="margin-bottom:0px!important;" id="tm2">
                            Bed 5. 𝗝𝗮𝗱𝗲 𝗦𝘁𝗼𝗻𝗲 𝗡𝗲𝗴𝗮𝘁𝗶𝘃𝗲 𝗜𝗼𝗻 𝗕𝗲𝗱
                        </h4>
                        <p style="text-align:justify;">
                            Feel the serene warmth of the Jade Stone Negative Ion Bed as it promotes deep relaxation and rejuvenation. Jade has been revered for centuries for its healing properties, and as the bed gently warms, it transfers its soothing energy to your body. This experience helps to release tension, improve blood circulation, and restore balance to your energy flow.
                        </p>
                        <p style="text-align:justify;">
                            Immerse yourself in the comforting embrace of the Negative Ion Bed and experience the transformative power of negative ions. Negative ions are known to enhance mood, reduce stress, and promote overall well-being. As the bed warms, it emits these beneficial ions, creating a serene environment that leaves you feeling refreshed and revitalized.
                        </p>
                        <p style="text-align:justify;">
                            Second Room. 𝗛𝗮𝗹𝗼𝘁𝗵𝗲𝗿𝗮𝗽𝘆 𝗛𝗶𝗺𝗮𝗹𝗮𝘆𝗮𝗻 𝗦𝗮𝗹𝘁 𝗥𝗼𝗼𝗺 (either seated or lying down on the salt floor, recommended for 15 mins)
                        </p>
                        <p style="text-align: center;">
                            <img src="{{ asset('assets/img/wellness/sweat-lounge/7.jpg') }}" alt="">
                        </p>
                        <p style="text-align:justify;">
                            Step into the 𝗛𝗮𝗹𝗼𝘁𝗵𝗲𝗿𝗮𝗽𝘆 𝗛𝗶𝗺𝗮𝗹𝗮𝘆𝗮𝗻 𝗦𝗮𝗹𝘁 𝗥𝗼𝗼𝗺 and immerse yourself in a world of natural healing and serenity.
                        </p>
                        <p style="text-align:justify;">
                            This exceptional space not only features the therapeutic benefits of pure, mineral-rich salt, but it also boasts additional elements that enhance your well-being and create a truly enchanting atmosphere.
                        </p>
                        <p style="text-align:justify;">
                            As you enter, you'll notice the gentle glow of Himalayan pink salt lamps, casting a warm and soothing light. These lamps not only add to the serene ambiance but also emit negative ions, promoting a sense of tranquility and reducing the impact of electronic devices on your well being.
                        </p>
                        <p style="text-align: center;">
                            <img src="{{ asset('assets/img/wellness/sweat-lounge/8.jpg') }}" alt="">
                        </p>
                        <p style="text-align:justify;">
                            Within the 𝗛𝗮𝗹𝗼𝘁𝗵𝗲𝗿𝗮𝗽𝘆 𝗛𝗶𝗺𝗮𝗹𝗮𝘆𝗮𝗻 𝗦𝗮𝗹𝘁 𝗥𝗼𝗼𝗺, you'll find an abundance of pure Himalayan pink salt, directly imported from the foot of the majestic Himalayas. This high-quality, coarse salt is renowned for its purity and mineral content, adding to the therapeutic benefits of the space. The air is delicately infused with the essence of these salt particles, creating an environment that is both rejuvenating and relaxing.
                        </p>
                        <p style="text-align:center;">
                            <img src="{{ asset('assets/img/wellness/sweat-lounge/9.jpg') }}" alt="">
                        </p>
                        <p style="text-align:justify;">
                            To complete the sensory experience, the walls of the salt room are adorned with natural Himalayan pink salt bricks. These bricks not only contribute to the aesthetic beauty of the room but also release trace minerals into the air, promoting a sense of tranquility and balance.
                        </p>
                        <p style="text-align:justify;">
                            Surrounded by this enchanting ambiance, you can surrender to the healing power of the 𝗛𝗮𝗹𝗼𝘁𝗵𝗲𝗿𝗮𝗽𝘆 𝗛𝗶𝗺𝗮𝗹𝗮𝘆𝗮𝗻 𝗦𝗮𝗹𝘁 𝗥𝗼𝗼𝗺. Allow the pure salt-infused air to cleanse your respiratory system, promoting easier breathing and improved overall respiratory health. Bask in the soothing glow of the pink salt lamps and immerse yourself in the comforting presence of the natural salt bricks. Experience the harmonizing effects of the Himalayan pink salt as it nurtures your body, uplifts your spirit, and creates a truly enchanting and therapeutic sanctuary.
                        </p>
                        <p style="text-align:center;">
                            <img src="{{ asset('assets/img/wellness/sweat-lounge/10.jpg') }}" alt="">
                        </p>
                        <p style="text-align:justify;">
                            Indulge in the transformative benefits of the 𝗛𝗮𝗹𝗼𝘁𝗵𝗲𝗿𝗮𝗽𝘆 𝗛𝗶𝗺𝗮𝗹𝗮𝘆𝗮𝗻 𝗦𝗮𝗹𝘁 𝗥𝗼𝗼𝗺, where every element has been carefully curated to enhance your well-being. This extraordinary space invites you to relax, rejuvenate, and find solace in the natural healing properties of Himalayan pink salt.
                        </p>
                        <p style="text-align:justify;">
                            The 𝗥𝗶𝘃𝗲𝗿 𝗥𝗼𝗰𝗸 𝗦𝗮𝘂𝗻𝗮 & 𝗛𝗲𝗿𝗯𝘀 𝗜𝗻𝗳𝘂𝘀𝗲𝗱 𝗦𝘁𝗲𝗮𝗺 𝗕𝗮𝘁𝗵 can house up to ten guests and features glass doors that connect individuals to the surrounding lush environment. Complimentary herbal foot baths are provided.
                        </p>
                        <h4 class="mad-title text-center" style="margin-bottom:0px!important;" id="tm1">
                            𝗥𝗶𝘃𝗲𝗿 𝗥𝗼𝗰𝗸 𝗦𝗮𝘂𝗻𝗮
                        </h4>
                        <p style="text-align:justify;">
                            Step into our River Rock Sauna Room, where the dry heat from heated river rocks creates a tranquil environment for detoxification and relaxation. Feel the therapeutic warmth enveloping your body, releasing tension and promoting a sense of well-being. Let the sauna experience invigorate your senses and leave you feeling refreshed and revitalized while offering a breathtaking glimpse of the forest scenery beyond. Let your eyes wander through the glass window that showcases the natural splendor of the forest. Immerse yourself in this serene environment, where the fusion of therapeutic warmth and the picturesque views creates an extraordinary sensory experience. Relax, rejuvenate, and feel a profound connection with nature, as the forest becomes an integral part of your sauna journey.
                        </p>
                        <p style="text-align:center;">
                            <img src="{{ asset('assets/img/wellness/sweat-lounge/11.jpg') }}" alt="">
                        </p>
                        <p style="text-align:justify;">
                            To enhance your journey of relaxation, our Sweat Lounge offers the choice of indulging in an outdoor forest setting bath or an indoor bath. Immerse yourself in the beauty of nature as you unwind, connecting with the elements that surround you. Complete with well-appointed facilities, including toilets and a spa lobby, we ensure your visit to the Shanti Sweat Lounge is seamless and comfortable.
                        </p>
                        <p style="text-align:center;">
                            <img src="{{ asset('assets/img/wellness/sweat-lounge/12.jpg') }}" alt="">
                        </p>
                        <p style="text-align:justify;">
                            Indulge in the transformative power of relaxation and rejuvenation at the Shanti Sweat Lounge. Immerse yourself in an oasis of tranquility, where the gentle sounds of nature and our therapeutic offerings harmonize to create an unforgettable experience. Embrace the serenity of Shanti Spa Village, where every visit to the Sweat Lounge nurtures your well-being and ignites your inner bliss.
                        </p>
                        <h4 class="mad-title text-center" style="margin-bottom:0px!important;" id="tm1">
                            𝗛𝗲𝗿𝗯𝘀 𝗜𝗻𝗳𝘂𝘀𝗲𝗱 𝗦𝘁𝗲𝗮𝗺 𝗕𝗮𝘁𝗵
                        </h4>
                        <p style="text-align:justify;">
                            Immerse yourself in the soothing embrace of our Herbs Infused Steam Room. Enveloped in aromatic clouds of steam infused with carefully selected herbs, this experience promotes relaxation, rejuvenation, and skin health. Allow the warmth to seep into your pores, opening them up for a deep cleanse, while the healing properties of the herbs provide a delightful sensory journey.
                        </p>
                        <p style="text-align:center;">
                            <img src="{{ asset('assets/img/wellness/sweat-lounge/13.jpg') }}" alt="">
                        </p>
                        <p style="text-align:justify;">
                            Enjoy while being captivated by the enchanting forest views just outside. As you unwind in the steam, allow your gaze to wander through the glass window, where the beauty of the surrounding forest unfolds before your eyes. The combination of the aromatic steam and the green views creates a truly unique and immersive experience, connecting you with nature and enhancing your sense of well-being.
                        </p>
                        <p style="text-align:center;">
                            <img src="{{ asset('assets/img/wellness/sweat-lounge/14.jpg') }}" alt="">
                        </p>

                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
