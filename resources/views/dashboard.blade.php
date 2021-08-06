@extends("layouts.dashboard")
@section("content")
    <div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2">
    <div class="dashborad-box stat">
        <h4 class="title">Manage Dashboard</h4>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-xs-12 dar pro mr-3">
                    <div class="item">
                        <div class="icon">
                            <i class="fa fa-list" aria-hidden="true"></i>
                        </div>
                        <div class="info">
                            <h6 class="number">345</h6>
                            <p class="type ml-1">Published Property</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 dar rev mr-3">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="info">
                            <h6 class="number">116</h6>
                            <p class="type ml-1">Total Reviews</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 dar com mr-3">
                    <div class="item mb-0">
                        <div class="icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div class="info">
                            <h6 class="number">223</h6>
                            <p class="type ml-1">Messages</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 dar booked">
                    <div class="item mb-0">
                        <div class="icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="info">
                            <h6 class="number">432</h6>
                            <p class="type ml-1">Times Bookmarked</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
