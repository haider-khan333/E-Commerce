@extends('master')
@section('content')
    <div class="container">
        <br>
        <div class="row ">
            <div class="col-md-5 offset-md-4">
                <div class="card bg-dark text-white">
                    <div class="card-body p-5 text-center">


                        <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                        <p class="text-white-50 mb-5">Please enter your login and password!</p>

                        <div class="form-outline form-white mb-4">
                            <input type="email" id="login_email" class="form-control form-control-lg" placeholder="Email" />

                        </div>

                        <div class="form-outline form-white mb-4">
                            <input type="password" id="login_password" class="form-control form-control-lg"
                                placeholder="Password" />
                        </div>
                        <button class="btn btn-outline-light btn-lg px-5" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
