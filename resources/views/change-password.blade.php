@extends("layouts.dashboard")
@section("content")
    <div class="col-lg-7 col-md-6 col-xs-6 pl-3 offset-lg-1 offset-md-3">
        <div class="my-address">
            <h3 class="heading pt-0">Change Password</h3>
            <form method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="form-group name">
                            <label>Current Password</label>
                            <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" placeholder="Current Password">
                            @error('current_password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group email">
                            <label>New Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="New Password">
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12 ">
                        <div class="form-group subject">
                            <label>Confirm New Password</label>
                            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm New Password">
                            @error('password_confirmation')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="send-btn mt-2">
                            <button type="submit" class="btn btn-common">Send Changes</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
