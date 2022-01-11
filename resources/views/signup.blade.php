@extends('master')
@section('content')
    <div class="container">
        <div class="row mt-4 justify-content-center">

            <div class="col-md-6 p-0">
                <form action="user_signed_up" method="POST">
                    <div class="login-wrap p-5 text-center">
                        @csrf
                        <h2 class="text-left">Sign-Up</h2>
                        <p class="mb-5 text-left">Please fill all the below details</p>

                        <div class="row mt-3">
                            <div class="col-md-6 form-outline form-white mb-4">
                                <input class="form-control form-control-lg" type="text" name="First Name" id="First Name"
                                    placeholder="First Name" style="border-radius: 30px;" required>
                            </div>
                            <div class="col-md-6 form-outline form-white mb-4">
                                <input class="form-control form-control-lg" type="text" name="Last Name" id="Last Name"
                                    placeholder="Last Name" style="border-radius: 30px;" required>
                            </div>
                        </div>
                        <div class="form-outline form-white mb-4">
                            <input type="email" id="login_email" class="form-control form-control-lg" placeholder="Email"
                                name="email" style="border-radius: 30px;" required>
                        </div>
                        <div class="form-outline form-white mb-4">
                            <input type="password" id="login_password" class="form-control form-control-lg"
                                placeholder="Password" name="password" style="border-radius: 30px;" required>
                        </div>
                        <button class=" btn btn-success" type="submit">Register</button>
                        <hr>

                    </div>
                </form>
            </div>
            <div class="col-md-6 p-0">
                <div class="text-wrap p-5 text-center">
                    <h2><em>E-World</em></h2>
                    <h4>Lets Shop!</h4>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident aspernatur, sit porro, illo ullam hic
                    fugit odit quod aperiam magnam sapiente eveniet harum ad inventore consequatur dolorem quia enim rem
                    voluptate. Ipsum provident, aliquid laboriosam cupiditate nobis quidem officiis et animi perspiciatis.
                    Assumenda quo quisquam enim, dolorem consequuntur temporibus, molestiae quae maxime dicta eos nam sequi
                    tempora cumque iure ad delectus amet illo voluptas in debitis fugiat id dolore? Numquam, fugit earum
                    quisquam doloribus reprehenderit est sint voluptatum. Inventore eligendi quaerat perspiciatis esse
                    mollitia, excepturi magni deserunt enim quidem cum expedita beatae doloremque dolore exercitationem! Sit
                    tempore voluptatem expedita tempora!
                </div>
            </div>
        </div>
    </div>




@endsection
