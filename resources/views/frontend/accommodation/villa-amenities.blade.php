
@extends('frontend.layouts.app')
{{-- Website SEO --}}
@section('title', 'Villa Amenities')
@section('meta_description', '')
@section('meta_author', '')
@section('meta_copyright', '')
@section('meta_keyword', '')
@section('meta_robot', '')

{{-- Facebook SEO --}}
@section('og_title', 'Villa Amenities')
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
    <h1 class="mad-page-title">Villa Amenities</h1>
    <nav class="mad-breadcrumb-path">
        <span><a href="{{ route('homepage') }}" class="mad-link">Home</a></span> /
        <span>Accommodation</span> /
        <span>Villa Amenities</span>
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
                        <div class="mad-entity-pre-title">Villa Amenities</div>
                        <h6 class="mad-entity-title" style="text-align:center;">
                            Our earth-favoring dome villa each extending to a bbq/bonfire area and approximately 150 sqm for single domes and 250 sqm for twin dome. Single domes can accommodate up to six people with an extra floor mattress and the twin dome can accommodate maximum of 12 pax. Each stylish villa faces into the surrounding jungle valley and the pristine nature.
                        </h6>
                        <p style="text-align:justify;">Each villa features an air-conditioning, coffee table & chairs, throw pillows, 350-count sheets, personal safe, TV and more providing a cozy, secluded feel. Each villa offers a spacious walk-around area and is perched on the valley affording spectacular views of lush nature all around.</p>
                        <div class="mad-list-content">
                            <ul class="mad-list--icon">
                                <li><i class="icon material-icons">check</i>Every villa bathroom is a delight to every sense and features a secluded outdoor shower in a private garden.</li>
                                <li><i class="icon material-icons">check</i>Each pool is set amidst the forest green.</li>
                                <li><i class="icon material-icons">check</i>While digital detox is a key component of the Shanti experience, we do offer TV and free wifi. Phone signals are reasonable in the forested area.</li>
                                <li><i class="icon material-icons">check</i>The walking distance from the villas to the main lounge or reception lobby is about 5-15 minutes, but complimentary shuttle is available upon request.</li>
                                <li><i class="icon material-icons">check</i>Lush living. Poolside sun-lazing and starlight dining.</li>
                                <li><i class="icon material-icons">check</i>Outdoor waterfall decor. Yoga or meditation at sunrise and sunset overlooking Balayan Bay.</li>
                            </ul>
                        </div>

                        <p style="text-align:center;">
                            <div role="alert" class="mad-alert-box mad-alert-box--info">
                                <div class="mad-alert-box-inner">
                                    Shanti Wellness Sanctuary is one of sensual indulgence.
                                </div>
                              </div>
                        </p>

                        <h3 class="mad-title" style="margin-bottom:0px!important;text-align:center;margin-top:-28px;">
                            Villa Amenities
                        </h3>
                        <table class="mad-table">
                            <tbody>
                                <tr>
                                    <td>Fully airconditioned forest view tent-dome with private pool</td>
                                    <td>350 TC Imported beds with duvet</td>
                                </tr>
                                <tr>
                                    <td>Outdoor villa waterfalls decor</td>
                                    <td>Full-sized cotton towels</td>
                                </tr>
                                <tr>
                                    <td>Bathroom with hot & cold shower with bathtub (Semi-outdoor)</td>
                                    <td>Yoga mats</td>
                                </tr>
                                <tr>
                                    <td>Throw pillows</td>
                                    <td>Books</td>
                                </tr>
                                <tr>
                                    <td>Safety deposit box</td>
                                    <td>First aid kit</td>
                                </tr>
                                <tr>
                                    <td>43" Smart TV</td>
                                    <td>Umbrellas</td>
                                </tr>
                                <tr>
                                    <td>WIFI</td>
                                    <td>Netflix</td>
                                </tr>
                                <tr>
                                    <td>Fully equipped Kitchen with stove, kitchen appliances and dining utensils</td>
                                    <td>BBQ area with table and chairs</td>
                                </tr>
                                <tr>
                                    <td>Dining table and chairs</td>
                                    <td>Sponge & dishwashing liquids</td>
                                </tr>
                                <tr>
                                    <td>Coffee table set</td>
                                    <td>Non-allergenic pillows</td>
                                </tr>
                                <tr>
                                    <td>BBQ griller (guests need to provide the charcoal)</td>
                                    <td>Electric fan</td>
                                </tr>
                                <tr>
                                    <td>Full-sized refrigerator with freezer</td>
                                    <td>Soap & shampoo</td>
                                </tr>
                                <tr>
                                    <td>Electric kettle</td>
                                    <td>Microwave</td>
                                </tr>
                                <tr>
                                    <td>5 gallons of mineral water in a jug</td>
                                    <td>Hair dryer</td>
                                </tr>
                                <tr>
                                    <td>Rice cooker</td>
                                    <td>Fire extinguisher & smoke detector</td>
                                </tr>
                                <tr>
                                    <td>Bread toaster</td>
                                    <td>Outdoor CCTV for your peace of mind</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </article>
                <!--================ End of Entity ================-->
                </div>
            </div>
        </div>
    </div>
@endsection
