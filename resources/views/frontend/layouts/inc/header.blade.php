<header id="mad-header" class="mad-header">
<div class="mad-header-section--sticky-xl">
    <div class="container-fluid">
        <div class="mad-header-items">
            <div class="mad-header-item">
            <a href="{{ route('homepage') }}" class="mad-logo"><img src="{{ asset('assets/images/logo.png') }}" alt="" /></a>
            </div>
            <div class="mad-header-item">
            <!--================ Navigation ================-->
            <nav class="mad-navigation-container">
                <ul class="mad-navigation mad-navigation--vertical-sm">
                    <li class="menu-item current-menu-item">
                        <a href="{{ route('homepage') }}">Home</a>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="#">About</a>
                        <!--================ Sub Menu ================-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="{{ route('holistic-escapes') }}">Holistic Escapes</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('shanti-concept') }}">Shanti Concept</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('serenity-and-discovery') }}">Serenity and Discovery</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('history') }}">History</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('sustainability') }}">Sustainability</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('our-vision') }}">Our Vision</a>
                            </li>
                        </ul>
                        <!--================ End of Sub Menu ================-->
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="#">Accommodation</a>
                        <!--================ Sub Menu ================-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="{{ route('villas') }}">Villas</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('villa-amenities') }}">Villa Amenities</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('resort-services-or-amenities') }}">Resort Services / Amenities </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('make-it-romantic') }}">Make it Romantic</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('birthday-setup') }}">Birthday Setup</a>
                            </li>

                        </ul>
                        <!--================ End of Sub Menu ================-->
                    </li>

                    <li class="menu-item menu-item-has-children">
                        <a href="#">WELLNESS</a>
                        <!--================ Sub Menu ================-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="{{ route('wellness-village') }}">Wellness Village</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('activities') }}">Activities</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('spa-village') }}">Spa Village</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('spa-and-bath-menu') }}">Spa & Bath Menu</a>
                            </li>
                        </ul>
                        <!--================ End of Sub Menu ================-->
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('healthy-living') }}">Healthy Living</a>
                    </li>

                    <li class="menu-item menu-item-has-children">
                        <a href="#">EVENTS / MEETINGS</a>
                        <!--================ Sub Menu ================-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="{{ route('celebrate') }}">Celebrate</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('meeting-wellness-team-building-for-company') }}">Meeting, Wellness Team Building For Company</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('wedding-in-shanti') }}">Wedding in Shanti</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('prenup-packages') }}">Prenup Packages</a>
                            </li>
                        </ul>
                        <!--================ End of Sub Menu ================-->
                    </li>

                    <li class="menu-item menu-item-has-children">
                        <a href="#">DINING</a>
                        <!--================ Sub Menu ================-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="{{ route('dining.private-dining') }}">Private Dining</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('dining.romantic-dining') }}">Romantic Dining</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('dining.bohemian-dining') }}">Bohemian Dining</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('dining.glam-picnic') }}">Glam Picnic</a>
                            </li>
                        </ul>
                        <!--================ End of Sub Menu ================-->
                    </li>

                    <li class="menu-item menu-item-has-children">
                        <a href="#">CONTACT</a>
                        <!--================ Sub Menu ================-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="{{ route('contact.location') }}">Location</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('contact.contact-us') }}">Contact Us</a>
                            </li>
                        </ul>
                        <!--================ End of Sub Menu ================-->
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('nearby-attractions') }}">NEARBY ATTRACTIONS</a>
                    </li>
                </ul>
            </nav>
            <!--================ End of Navigation ================-->
            <div class="mad-actions">
                <div class="mad-col">
                <a href="https://bit.ly/32Ymmwo" class="btn">Book Now</a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</header>
