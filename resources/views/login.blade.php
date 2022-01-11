@extends('master')
@section('content')

    <div class="container">
        <div class="row mt-4 justify-content-center">

            <div class="col-md-6 p-0">
                <form action="login" method="POST">
                    <div class="login-wrap p-5 text-center">
                        @csrf
                        <h2 class="text-left">Login</h2>
                        <p class="mb-5 text-left">Please enter your login and password!</p>

                        <div class="form-outline form-white mb-4">
                            <input type="email" id="login_email" class="form-control form-control-lg" placeholder="Email"
                                name="email" style="border-radius: 30px;" required />
                        </div>
                        <div class="form-outline form-white mb-4">
                            <input type="password" id="login_password" class="form-control form-control-lg"
                                placeholder="Password" name="password" style="border-radius: 30px;" required />
                        </div>
                        <button class=" btn btn-success" type="submit">Login</button>
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
                    <form action="signup" method="post">
                        @csrf
                        <button class="
                            btn btn-success mb-1">
                            Register
                        </button>

                    </form>

                    <hr>
                </div>
            </div>
        </div>
    </div>


@endsection
