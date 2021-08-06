@extends("layouts.main")

@section("heading")
    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>Login</h1>
                <h2><a href="index.html">Home </a> &nbsp;/&nbsp; login</h2>
            </div>
        </div>
    </section>
@endsection
@section("content")
    <div id="login">
        <div class="login">
            <form method="post" action="">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email">
                    <i class="icon_mail_alt"></i>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="">
                    <i class="icon_lock_alt"></i>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="fl-wrap filter-tags clearfix add_bottom_30">
                    <div class="checkboxes float-left">
                        <div class="filter-tags-wrap">
                            <input id="check-b" type="checkbox" name="check">
                            <label for="check-b">Remember me</label>
                        </div>
                    </div>
                    <div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
                </div>
                <button type="submit" class="btn_1 rounded full-width">Login</button>
                <div class="text-center add_top_10">New to Find Houses? <strong><a href="{{route($register)}}">Sign up!</a></strong></div>
            </form>
        </div>
    </div>
@endsection
