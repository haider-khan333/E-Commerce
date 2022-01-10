@extends('master')
@section('content')

    <form action="login" method="POST">
        <div class="container">
            <div class="row mt-4 justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="login-wrap p-3 p-lg-5 text-center">
                            @csrf
                            <h2 class="text-left">Login</h2>
                            <p class="mb-5">Please enter your login and password!</p>

                            <div class="form-outline form-white mb-4">
                                <input type="email" id="login_email" class="form-control form-control-lg" placeholder="Email"
                                    name="email" />
                            </div>
                            <div class="form-outline form-white mb-4">
                                <input type="password" id="login_password" class="form-control form-control-lg"
                                    placeholder="Password" name="password" />
                            </div>
                            <button class=" btn btn-success" type="submit">Login</button>

                        </div>
                        <div class="text-wrap p-3 p-lg-5 text-center">
                            <div class="container">
                                <h1 class="text-center mt-5">New here?</h1>
                                <p class="mb-5">Click here to Register!</p>
                            </div>


                        </div>
                    </div>



                </div>


                {{-- <div class="col-md-5">
                    <div class="card bg-dark text-white">
                        <div class="card-body p-5 text-center">
                            @csrf
                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>

                            <div class="form-outline form-white mb-4">
                                <input type="email" id="login_email" class="form-control form-control-lg" placeholder="Email"
                                    name="email" />
                            </div>
                            <div class="form-outline form-white mb-4">
                                <input type="password" id="login_password" class="form-control form-control-lg"
                                    placeholder="Password" name="password" />
                            </div>
                            <button class=" btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                        </div>
                    </div>
                </div> --}}


            </div>


        </div>
    </form>

@endsection
