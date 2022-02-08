<?php
use App\Http\Controllers\ProductController;

function getId(string $category)
{
    return ProductController::getId($category);
}

?>


@extends('master')
@section('content')
    <div class="product_style mt-3">
        <div class="trending-style">
            <h3>Trending Products</h3>
            <div class="container">
                <div class="col-sm-9 text-left divider">
                    <div class="mobile_design p-1 text-center">
                        <h3>
                            <em>Mobiles</em>
                        </h3>
                    </div>


                    <div id="mobiles" class="carousel slide p-3" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($products as $item)
                                @if ($item['products_category'] == 'Mobiles')
                                    <div class="carousel-item {{ $item['id'] == '1' ? 'active' : '' }}">
                                        <a href="details/{{ $item['id'] }}">
                                            <img class="d-block mx-auto slider_img" src="{{ $item['products_gallery'] }}"
                                                alt="{{ $item['products_name'] }}">
                                        </a>
                                    </div>

                                @endif
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#mobiles" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#mobiles" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>

                <div class="col-sm-9 text-left divider">
                    <div class="mobile_design p-1 text-center">
                        <h3>
                            <em>TV</em>
                        </h3>
                    </div>

                    <div id="tv" class="carousel slide p-3" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($products as $item)
                                @if ($item['products_category'] == 'Television')
                                    <div
                                        class="carousel-item {{ $item['id'] == getId($item['products_category']) ? 'active' : '' }}">
                                        <a href="details/{{ $item['id'] }}">
                                            <img class="d-block mx-auto slider_img" src="{{ $item['products_gallery'] }}"
                                                alt="{{ $item['products_name'] }}">
                                        </a>
                                    </div>

                                @endif
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#tv" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#tv" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>

                <div class="col-sm-9 text-left divider">
                    <div class="mobile_design p-1 text-center">
                        <h3>
                            <em>Laptops</em>
                        </h3>
                    </div>


                    <div id="laptop" class="carousel slide p-3" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($products as $item)
                                @if ($item['products_category'] == 'Laptop')
                                    <div
                                        class="carousel-item {{ $item['id'] == getId($item['products_category']) ? 'active' : '' }}">
                                        <a href="details/{{ $item['id'] }}">
                                            <img class="d-block mx-auto slider_img" src="{{ $item['products_gallery'] }}"
                                                alt="{{ $item['products_name'] }}">
                                        </a>
                                    </div>

                                @endif
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#laptop" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#laptop" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
