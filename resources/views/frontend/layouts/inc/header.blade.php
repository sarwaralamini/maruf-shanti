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
                </ul>
            </nav>
            <!--================ End of Navigation ================-->
            <div class="mad-actions">
                <div class="mad-col">
                <a href="rooms_top_3_col_gallery_v2.html" class="btn">Book Now</a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</header>
