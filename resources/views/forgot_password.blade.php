@extends('master')
@section('content')

    <div class="container">
        <div class="row mt-4 justify-content-center">
            <div class="col-md-6 p-0">
                <form action="/resetpassword" method="POST">
                    <div class="login-wrap p-5 text-center">
                        @csrf
                        <h2 class="text-left">Reset Password</h2>
                        <p class="mb-5 text-left">Please enter your new password</p>

                        <div class="form-outline form-white mb-4">
                            <input type="email" id="email" class="form-control form-control-lg"
                                placeholder="Enter your Email" name="email" style="border-radius: 30px;" required />
                        </div>

                        <div class="form-outline form-white mb-4">
                            <input type="password" id="login_password" class="form-control form-control-lg"
                                placeholder="New Password!" name="password" style="border-radius: 30px;" required />
                        </div>
                        <div class="form-outline form-white mb-4">
                            <input type="password" id="login_password" class="form-control form-control-lg"
                                placeholder="Repeat Password!" name="forget_pass" style="border-radius: 30px;" required />
                        </div>
                        <button class="btn btn-success mt-3" type="submit">Change Password</button>
                        <hr>
                    </div>
                </form>
            </div>
            <div class="col-md-6 p-0">
                <div class="text-wrap p-5 text-center">
                    <div class="container">
                        <h1 class="text-center mt-5">New here?</h1>
                        <h3 class="text-center"><em>
                                Lets shop!</em> </h3>
                        <p class="mt-5 mb-5">Click below to Register!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
