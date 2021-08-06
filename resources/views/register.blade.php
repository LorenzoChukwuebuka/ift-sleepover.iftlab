@extends("layouts.main")
@section("heading")
    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>Register</h1>
                <h2><a href="index.html">Home </a> &nbsp;/&nbsp; Register</h2>
            </div>
        </div>
    </section>
@endsection
@section("content")
    <div id="login">
        <div class="login">
            <form autocomplete="off" method="post">
                @csrf
                <div class="form-group">
                    <label>Your Name</label>
                    <input class="form-control @error('fname') is-invalid @enderror" name="fname" type="text">
                    <i class="ti-user"></i>
                    @error('fname')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Your Last Name</label>
                    <input class="form-control @error('lname') is-invalid @enderror" type="text" name="lname">
                    <i class="ti-user"></i>
                    @error('lname')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Your Email</label>
                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email">
                    <i class="icon_mail_alt"></i>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Your password</label>
                    <input class="form-control @error('password') is-invalid @enderror" type="password" id="password1" name="password">
                    <i class="icon_lock_alt"></i>
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Confirm password</label>
                    <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation">
                    <i class="icon_lock_alt"></i>
                    @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <hr>
                <div class="form-group">
                    <label>Franchise name</label>
                    <input class="form-control @error('franchise') is-invalid @enderror" type="text" id="password2" name="franchise">
                    <i class="ui-icon-link"></i>
                    @error('franchise')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="alert alert-warning">
                        <strong>Note!</strong> url will be automatically generated.
                    </div>
                </div>
                <div id="pass-info" class="clearfix"></div>
                <button type="submit" class="btn_1 rounded full-width">Register</button>
                <div class="text-center add_top_10">Already have an acccount? <strong><a href="{{route($login)}}">Sign In</a></strong></div>
            </form>
        </div>
    </div>
@endsection
