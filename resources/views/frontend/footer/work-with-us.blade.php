
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Work With Us')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Work With Us')
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
    <h1 class="mad-page-title">WORK WITH US</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>WORK WITH US</span>
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
                        <div class="mad-entity-pre-title">WORK WITH US</div>
                        <section class="mad-widget">
                            <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;font-weight: 700;">
                                Why Join Us?
                            </h4>
                            <p style="text-align:justify;">
                                It takes a dream to create a successful business idea. It takes people to make dreams a reality. Could you be one of those people? The founder of BIGFISH HOSPITALITY GROUP had a very powerful vision… to improve everyday life for the majority of people. Since the establishment of the BIGFISH HOSPITALITY GROUP almost 20 years ago, we have gone a very long way towards realizing this dream. A key success factor has been the recruitment of committed individuals who have shared the BIGFISH HOSPITALITY GROUP vision and pulled together to turn it into a reality. Today, BIGFISH HOSPITALITY GROUP has indeed become a very tangible reality! Literally every day BIGFISH HOSPITALITY GROUP reaches that bit further afield, which is why we need to continue finding and recruiting more committed individuals to join our organization.
                            </p>

                            <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;font-weight: 700;">
                                A simple HR idea
                            </h4>
                            <p style="text-align:justify;">
                                We have a very clear and simple idea when it comes to Human Resources: To give down-to-earth, straight forward people the opportunity to grow, both as individuals and in their professional roles, so that together we are strongly committed to creating a better everyday life for ourselves and our customers. If you think you might be one of those people, read on…
                            </p>

                            <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;font-weight: 700;">
                                BIGFISH HOSPITALITY GROUP values
                            </h4>
                            <p style="text-align:justify;">
                                At BIGFISH HOSPITALITY GROUP, we don’t just want to fill jobs; we want to partner with people. We want to recruit unique individuals who share our values. Co-workers are not restricted at BIGFISH HOSPITALITY GROUP; we listen and support each individual to identify his or her needs, ambitions and capabilities.
                                <br>
                                <br>Work hard, be yourself.
                                <br>
                                <br>What do we look for in a job candidate?
                                <br>
                                <br>An ability to do the job is obviously the starting point. But beyond that we look for many other personal qualities such as a strong desire to learn, the motivation to continually do things better, simplicity and common sense, the ability to lead by example, efficiency and cost-consciousness. These values are important to us because our way of working is less structured than that of many other organizations.
                                <br><br>Here are a few examples of our shared values:
                                 <br>
                                <br>TOGETHERNESS
                                 <br>
                                <br>COST-CONSCIOUSNESS
                                 <br>
                                <br>RESPECT SIMPLICITY
                                 <br>
                                <br><span style="font-weight:700;">If you… then we</span>
                                 <br>
                                <br><span style="font-weight:700;">A question of give and take</span>
                                
                                <br><br>BIGFISH HOSPITALITY GROUP co-workers enjoy many advantages and opportunities from working in such a free and open environment – but all freedoms are counter-balanced with expectations. For example, the expectation that each co-worker is able to assume responsibility for his or her own actions. Although on the surface it is evident that we have a lot of fun together working at BIGFISH HOSPITALITY GROUP, at the same time all are expected to be very hardworking and conscientious. Here are some more examples to illustrate give and take, BIGFISH MANILA style:
                            </p>

                            <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;font-weight: 700;">
                                What do we expect from you?
                            </h4>
                            <ul style="padding-left: 15px;list-style: auto;text-align: justify;list-style-type: disc;">
                                <li>You have the ambition to do a good job and a desire to take on responsibility and to take the consequences that this entails</li>
                                <li>You do your best on the basis of your abilities and experience</li>
                                <li>You are service-oriented and have the customers’ best interests at heart</li>
                                <li>You are open to improvements, with a will to develop continually</li>
                                <li>You challenge established patterns when you have a better suggestion of your own</li>
                                <li>You are not status minded, but rather open and straightforward in your approach to others</li>
                                <li>You are cost conscious and know that everything has a price tag</li>
                                <li>You are open and willing to move for a new challenging job</li>
                            </ul>

                            <h4 class="mad-title text-center" style="margin-top:15px;margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;font-weight: 700;">
                                What do we offer you?
                            </h4>
                            <ul style="padding-left: 15px;list-style: auto;text-align: justify;list-style-type: disc;">
                                <li>The chance to work in a growing company with a viable business idea</li>
                                <li>We give you the opportunity to further develop your professional skills in your daily work</li>
                                <li>We make it possible to choose between many different jobs within the company</li>
                                <li>We enable you to work in an environment where people and team spirit are central values</li>
                                <li>We offer you a job with fair and reasonable conditions</li>
                                <li>We give you the chance to take a great responsibility following recognized good results, regardless of age.</li>
                            </ul>

                            <h4 class="mad-title text-center" style="margin-top:15px;margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;font-weight: 700;">
                                What would you actually do if you worked at BIGFISH HOSPITALITY GROUP?
                            </h4>
                            <p style="text-align:justify;">
                                Now it’s time to get down to the nitty-gritty. If you wanted to work at BIGFISH HOSPITALITY GROUP– which we sincerely hope you do by now – what kind of job might we be able offer you?
                            </p>
                            <p style="text-align:justify;">
                                The variety of roles may surprise and interest you. Potential positions involve everything imaginable from working in a retail environment, hotel to less obvious jobs behind the scenes in IT and communications. Click around and find out more.
                            </p>

                            <h4 class="mad-title text-center" style="margin-bottom:0px;font-size:1.2rem!important;line-height:1.5rem;font-weight: 700;">
                                Apply now to join BIGFISH HOSPITALITY GROUP!
                            </h4>
                            <p style="text-align:justify;">
                                As you will have noticed, those who work at BIGFISH HOSPITALITY GROUP are referred to as “co-workers” and not “employees”. This may seem a little odd to begin with, but as most people quickly come to understand, our terminology is symbolic of a special mindset – one which says we all have a contribution to make to the success of the company, and that every single role is important in its own way.
                            </p>
                            <p style="text-align:justify;">
                                There are many jobs to be done, and our organization has a knack of bringing out the best in people. Or… to put it more precisely, providing an arena in which people can discover and reveal the best in themselves.
                            </p>
                            For interested applicants, please send resume to this email address:
                            <a href="mailto:hr@bigfish.ph" class="mad-link">hr@bigfish.ph</a>
                        </section>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
