@extends('master')
@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="details-img-style" src="{{ $products['products_gallery'] }}" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/">Return</a>
                <h2>{{ $products['products_name'] }}</h2>
                <h3>Price: ${{ $products['products_price'] }}</h3>
                <h5>Category: {{ $products['products_category'] }}</h5>
                <h5>Description: {{ $products['products_description'] }}</h5>
                <br><br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" id="product_id" value="{{ $products['id'] }}">
                    <button class="btn btn-primary">Add to Cart</button>
                </form>
                {{-- <br><br>
                <button class="btn btn-success">Buy</button> --}}
            </div>
        </div>
    </div>
@endsection
