@extends('master')
@section('content')
    <br>
    <div class="product_style">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($products as $item)
                    <div class="carousel-item {{ $item['id'] == 1 ? 'active' : '' }}">
                        <img class="d-block mx-auto slider_img" src="{{ $item['products_gallery'] }}"
                            alt="{{ $item['products_name'] }}">
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

    </div>


@endsection
