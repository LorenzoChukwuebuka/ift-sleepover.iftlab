@extends("layouts.dashboard")
@section("content")
    <div class="col-lg-6 col-md-6 col-xs-6 widget-boxed mt-33 mt-0 offset-lg-2 offset-md-3">
        <div class="widget-boxed-header">
            <h4>Profile Details</h4>
        </div>
        <div class="sidebar-widget author-widget2">
            <div class="author-box clearfix">
                <img src="{{asset("images/testimonials/ts-1.jpg")}}" alt="author-image" class="author__img">
                <h4 class="author__title">{{$user->first_name}} {{$user->last_name}}</h4>
                @if(Auth::guard("vendor")->check())
                <p class="author__meta">Url: <a href="{{route("index")}}/vendor/{{$user->franchise}}/home">{{route("index")}}/vendor/{{$user->franchise}}/home</a></p>
                @endif
            </div>
            <ul class="author__contact">
                <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">{{$user->email}}</a></li>
            </ul>
            <div class="agent-contact-form-sidebar">
                <h4>Update profile</h4>
                <form method="post" action="">
                    @csrf
                    <input type="text" id="fname" name="fname" placeholder="First Name" required="" class="@error('fname') is-invalid @enderror" value="{{$user->first_name}}">
                    @error('fname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" id="lname" name="lname" placeholder="Last Name" required="" class="@error('lname') is-invalid @enderror" value="{{$user->last_name}}">
                    @error('lname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="email" id="emailid" name="email" placeholder="Email Address" required="" class="@error('email') is-invalid @enderror" value="{{$user->email}}">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="submit" name="sendmessage" class="multiple-send-message" value="Submit">
                </form>
            </div>
        </div>
    </div>
@endsection
