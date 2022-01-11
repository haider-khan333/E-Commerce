@extends('master')
@section('content')
    <div class="container">
        <div class="col-md-12 text-center about_us_header">
            <div class="about_us_style_1">
                <h2 class="p-5">About Us</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mt-4 p-3 border-right border-secondary about_us_style_2">
                <h1 class="text-center">Who are we?</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, enim et a fugiat laboriosam non fuga
                    ratione repudiandae dolor praesentium fugit corrupti perferendis consequatur sint quisquam adipisci esse
                    nobis quibusdam repellat eum maiores ex cupiditate illum in! Facere nam tempore iusto, delectus
                    similique ab laudantium eius libero nihil ea explicabo labore pariatur molestiae sed tempora molestias
                    corrupti dolorum deleniti, magnam aperiam facilis beatae. Accusamus adipisci magnam praesentium
                    doloremque nam, iusto quos.</p>

            </div>

            <div class="col-md-6 mt-4 p-3">
                <form action="/form_submitted" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-outline form-white mb-4">
                            <label for="Name">Enter your Name</label>
                            <input class="form-control form-control-lg" type="text" name="Name" id="Name"
                                placeholder="Full Name" style="border-radius: 30px;" required>
                        </div>
                        <div class="col-md-6 form-outline form-white mb-4">
                            <label for="Email">Enter your Email</label>
                            <input class="form-control form-control-lg" type="email" name="Email" id="Email"
                                placeholder="Email" style="border-radius: 30px;" required>
                        </div>
                    </div>

                    <div class="text-area">
                        <label for="description">Enter your review here</label><textarea
                            class="form-control form-control-lg mt-1" id="description" name="description" rows="3"
                            placeholder="Enter your reviews here"></textarea>
                    </div>

                    <div class="button mt-3">

                        <button class="btn btn-success">Submit</button>

                    </div>


                </form>
            </div>

        </div>


    </div>



@endsection
