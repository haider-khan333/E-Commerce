@extends('master')
@section('content')
    <br>
    <div class="product_style">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($products as $item)
                    <div class="carousel-item {{ $item['id'] == 1 ? 'active' : '' }}">
                        <a href="details/{{ $item['id'] }}">
                            <img class="d-block mx-auto slider_img" src="{{ $item['products_gallery'] }}"
                                alt="{{ $item['products_name'] }}">
                        </a>
                    </div>



                @endforeach


            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
        <div class="trending-style">
            <h3>Trending Products</h3>
            @foreach ($products as $item)
                <a href="details/{{ $item['id'] }}">
                    <div class="trending-all-images">
                        <img class="trending-images" src="{{ $item['products_gallery'] }}"
                            alt="{{ $item['products_name'] }}">
                        <div class="carousel description">
                            <label for="">{{ $item['products_name'] }}</label>
                        </div>
                    </div>
                </a>


            @endforeach

        </div>

    </div>


@endsection
