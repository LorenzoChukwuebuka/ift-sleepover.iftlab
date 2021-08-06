@extends("layouts.index")
@section("heading")
    <section id="hero-area" class="parallax-searchs home15 overlay thome-6 thome-1" style="height: 90vh" data-stellar-background-ratio="0.5">
        <div class="hero-main">
            <div class="container aos-init aos-animate" data-aos="zoom-in">
                <div class="row">
                    <div class="col">
                        <div class="hero-inner">
                            <!-- Welcome Text -->
                            <div class="welcome-text">
                                <h1 class="h1">Find Your Dream
                                    <br class="d-md-none">
                                    <span class="typed border-bottom">place to sleepover </span><span class="typed-cursor typed-cursor--blink">|</span>
                                </h1>
                                <p class="mt-4">We Have Over Million Properties For You.</p>
                            </div>
                            <!--/ End Welcome Text -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section("content")
    <section class="properties-right featured portfolio blog pt-5">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 col-md-12 blog-pots">
                    @php
                    $x = 0;
                    @endphp
                    @forelse($spaces as $space)
                        @if($x % 2 == 0)
                            <div class="row">
                                <div class="item col-lg-6 col-md-6 col-xs-12 landscapes sale">
                                    <div class="project-single aos-init aos-animate" data-aos="fade-up">
                                        <div class="project-inner project-head">
                                            <div class="project-bottom">
                                                <h4><a href="{{route("index")}}/space/{{$space->id}}">View Property</a><span class="category">Space</span></h4>
                                            </div>
                                            <div class="homes">
                                                <!-- homes img -->
                                                <a href="{{route("index")}}/space/{{$space->id}}" class="homes-img">
                                                    <img src="{{$space->image??asset("images/feature-properties/fp-1.jpg")}}" alt="home-1" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="button-effect">
                                                <a href="{{route("index")}}/space/{{$space->id}}" class="btn"><i class="fa fa-link"></i></a>
                                                {{--<a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>--}}
                                                <a href="{{route("index")}}/space/{{$space->id}}" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                            </div>
                                        </div>
                                        <!-- homes content -->
                                        <div class="homes-content">
                                            <!-- homes address -->
                                            <h3><a href="{{route("index")}}/space/{{$space->id}}">{{$space->name}}</a></h3>
                                            <!-- homes List -->
                                            <ul class="homes-list clearfix">
                                                <li>
                                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                                    <span>{{$space->bed_space}} Beds</span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                                    <span>{{$space->bathroom}} Baths</span>
                                                </li>
                                            </ul>
                                            <!-- Price -->
                                            <div class="price-properties">
                                                <h3 class="title mt-3">
                                                    <a href="{{route("index")}}/space/{{$space->id}}">N{{$space->price}}</a>
                                                </h3>
                                            </div>
                                            <div class="footer">
                                                <a href="#">
                                                    <i class="fa fa-user"></i> {{$space->franchise}}
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="item col-lg-6 col-md-6 col-xs-12 landscapes sale">
                                <div class="project-single aos-init aos-animate" data-aos="fade-up">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4><a href="{{route("index")}}/space/{{$space->id}}">View Property</a><span class="category">Space</span></h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="{{route("index")}}/space/{{$space->id}}" class="homes-img">
                                                <img src="{{$space->image??asset("images/feature-properties/fp-1.jpg")}}" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="{{route("index")}}/space/{{$space->id}}" class="btn"><i class="fa fa-link"></i></a>
                                            {{--<a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>--}}
                                            <a href="{{route("index")}}/space/{{$space->id}}" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="{{route("index")}}/space/{{$space->id}}">{{$space->name}}</a></h3>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span>{{$space->bed_space}} Beds</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span>{{$space->bathroom}} Baths</span>
                                            </li>
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                                <a href="{{route("index")}}/space/{{$space->id}}">N{{$space->price}}</a>
                                            </h3>
                                        </div>
                                        <div class="footer">
                                            <a href="#">
                                                <i class="fa fa-user"></i> {{$space->franchise}}
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @php
                          $x++;
                        @endphp
                    @empty
                        "no space"
                    @endforelse
                </div>
                <aside class="col-lg-4 col-md-12 car">
                    <div class="widget">
                        <!-- Search Fields -->
                        <div class="widget-boxed main-search-field">
                            <div class="widget-boxed-header">
                                <h4>Find a space in {{$franchise}}</h4>
                            </div>
                            <!-- Search Form -->
                            <div class="trip-search">
                                <form class="formi">
                                    <!-- Form Lookin for -->
                                    <div class="form-group looking">
                                        <div class="first-select wide">
                                            <div class="main-search-input-item">
                                                <input type="text" placeholder="Enter Keyword..." value="" name="q">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <!-- Form Categories -->
                                    <div class="form-group">
                                        <select class="form-control wide" name="category" id="">
                                            <option value="">
                                                Property Type
                                            </option>
                                        </select>
                                    </div>
                                    <!--/ End Form Categories -->
                                    <br>
                                    <br>
                                    <!-- Form Bedrooms -->
                                    <div class="form-group">
                                        <select class="form-control wide" name="bedroom" id="">
                                            <option value="">
                                                Bedrooms
                                            </option>
                                        </select>
                                    </div>
                                    <!--/ End Form Bedrooms -->
                                    <br>
                                    <br>
                                    <!-- Form Bathrooms -->
                                    <div class="form-group">
                                        <select class="form-control wide" name="bathroom" id="">
                                            <option value="">
                                                Bathrooms
                                            </option>
                                        </select>
                                    </div>
                                    <!--/ End Form Bathrooms -->
                                    <input type="hidden" name="min" id="range-min">
                                    <input type="hidden" name="max" id="range-max">
                                </form>
                            </div>
                            <!--/ End Search Form -->
                            <!-- Price Fields -->
                            <div class="main-search-field-2">
                                <div class="range-slider">
                                    <label>Price Range</label>
                                    <div id="price-range" data-min="0" data-max="600000" data-unit="N" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                        <input type="text" class="first-slider-value" disabled="">
                                        <input type="text" class="second-slider-value" disabled="">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 15.4655%; width: 81.0257%;"></div>
                                        <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 15.4655%;"></a>
                                        <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 96.4912%;"></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 no-pds">
                                <div class="at-col-default-mar">
                                    <button class="btn btn-default hvr-bounce-to-right form-submit" type="submit">Search</button>
                                </div>
                            </div>
                        </div>
                        {{--<div class="widget-boxed mt-5">
                            <div class="widget-boxed-header mb-5">
                                <h4>Feature Properties</h4>
                            </div>
                            <div class="widget-boxed-body">
                                <div class="slick-lancers slick-initialized slick-slider"><button class="slick-prev slick-arrow slick-disabled" aria-label="Previous" type="button" aria-disabled="true" style="">Previous</button>






                                    <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1932px; transform: translate3d(0px, 0px, 0px);"><div class="agents-grid mr-0 slick-slide slick-current slick-active" style="width: 322px;" tabindex="0" data-slick-index="0" aria-hidden="false">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container" tabindex="0">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 230,000</span>
                                                            <span>For Sale</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury <i>New York</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="images/feature-properties/fp-1.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div><div class="agents-grid mr-0 slick-slide slick-active" style="width: 322px;" tabindex="0" data-slick-index="1" aria-hidden="false">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container" tabindex="0">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 6,500</span>
                                                            <span class="rent">For Rent</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury <i>Los Angles</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="images/feature-properties/fp-2.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div><div class="agents-grid mr-0 slick-slide" style="width: 322px;" tabindex="-1" data-slick-index="2" aria-hidden="true">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container" tabindex="-1">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 230,000</span>
                                                            <span>For Sale</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury <i>San Francisco</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>2</span></li>
                                                                <li>Baths <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="images/feature-properties/fp-3.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div><div class="agents-grid mr-0 slick-slide" style="width: 322px;" tabindex="-1" data-slick-index="3" aria-hidden="true">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container" tabindex="-1">
                                                        <div class="listing-badges">
                                                            <span class="featured">$ 6,500</span>
                                                            <span class="rent">For Rent</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury <i>Adanne place</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>6</span></li>
                                                                <li>Baths <span>6</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="images/feature-properties/fp-4.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div><div class="agents-grid mr-0 slick-slide" style="width: 322px;" tabindex="-1" data-slick-index="4" aria-hidden="true">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container" tabindex="-1">
                                                        <div class="listing-badges">
                                                            <span class="featured">#230,000</span>
                                                            <span>For Sale</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury <i>Adamma place</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>6</span></li>
                                                                <li>Baths <span>6</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="images/feature-properties/fp-5.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div><div class="agents-grid mr-0 slick-slide" style="width: 322px;" tabindex="-1" data-slick-index="5" aria-hidden="true">
                                                <div class="listing-item compact">
                                                    <a href="properties-details.html" class="listing-img-container" tabindex="-1">
                                                        <div class="listing-badges">
                                                            <span class="featured"># 6,500</span>
                                                            <span class="rent">For Rent</span>
                                                        </div>
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">House Luxury <i>Toronto CA</i></span>
                                                            <ul class="listing-hidden-content">
                                                                <li>Area <span>720 sq ft</span></li>
                                                                <li>Rooms <span>6</span></li>
                                                                <li>Beds <span>6</span></li>
                                                                <li>Baths <span>6</span></li>
                                                            </ul>
                                                        </div>
                                                        <img src="images/feature-properties/fp-6.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="" aria-disabled="false">Next</button></div>
                            </div>
                        </div>
                        <div class="widget-boxed mt-5">
                            <div class="widget-boxed-header">
                                <h4>Recent Properties</h4>
                            </div>
                            <div class="widget-boxed-body">
                                <div class="recent-post">
                                    <div class="recent-main">
                                        <div class="recent-img">
                                            <a href="blog-details.html"><img src="images/feature-properties/fp-1.jpg" alt=""></a>
                                        </div>
                                        <div class="info-img">
                                            <a href="blog-details.html"><h6> Modern Home</h6></a>
                                            <p>#230,0</p>
                                        </div>
                                    </div>
                                    <div class="recent-main my-4">
                                        <div class="recent-img">
                                            <a href="blog-details.html"><img src="images/feature-properties/fp-2.jpg" alt=""></a>
                                        </div>
                                        <div class="info-img">
                                            <a href="blog-details.html"><h6>Luxury Villa House</h6></a>
                                            <p>#120,0</p>
                                        </div>
                                    </div>
                                    <div class="recent-main">
                                        <div class="recent-img">
                                            <a href="blog-details.html"><img src="images/feature-properties/fp-3.jpg" alt=""></a>
                                        </div>
                                        <div class="info-img">
                                            <a href="blog-details.html"><h6>Luxury Home</h6></a>
                                            <p>#1500</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-boxed popular mt-5 mb-0">
                            <div class="widget-boxed-header">
                                <h4>Popular Tags</h4>
                            </div>
                            <div class="widget-boxed-body">
                                <div class="recent-post">
                                    <div class="tags">
                                        <span><a href="#" class="btn btn-outline-primary">Houses</a></span>
                                        <span><a href="#" class="btn btn-outline-primary">Real Home</a></span>
                                    </div>
                                    <div class="tags">
                                        <span><a href="#" class="btn btn-outline-primary">Baths</a></span>
                                        <span><a href="#" class="btn btn-outline-primary">Beds</a></span>
                                    </div>
                                    <div class="tags">
                                        <span><a href="#" class="btn btn-outline-primary">Garages</a></span>
                                        <span><a href="#" class="btn btn-outline-primary">Family</a></span>
                                    </div>
                                    <div class="tags">
                                        <span><a href="#" class="btn btn-outline-primary">Real Estates</a></span>
                                        <span><a href="#" class="btn btn-outline-primary">Properties</a></span>
                                    </div>
                                    <div class="tags no-mb">
                                        <span><a href="#" class="btn btn-outline-primary">Location</a></span>
                                        <span><a href="#" class="btn btn-outline-primary">Price</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection

@section("custom-script")
    <script>
        $(function () {
            $(".form-submit").click( function() {
                $('.formi').submit();
            });
        })
    </script>
@endsection
