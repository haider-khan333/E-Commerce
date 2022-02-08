<?php
use App\Http\Controllers\ProductController;

try {
    $total_count = ProductController::getCartItems();
} catch (\Throwable $th) {
    $total_count = 0;
}

function getTotal(int $id)
{
    return ProductController::getTotalProducts($id);
}

?>
@extends("master")

@section('content')

    <div class="cart_products">
        <div class="col-sm-11">
            <div class="products">
                <div class="row">
                    <div class="row col-sm-10">
                        <h3>Cart Items</h3>
                    </div>
                    <div class="row col-sm-2">
                        @if ($total_count != 0)
                            <a href="order_now">
                                <button class="btn btn-success">Order now</button>
                            </a>
                        @endif
                    </div>
                </div>

                @if ($total_count != 0)
                    @foreach ($products_object as $products_item)
                        <div class="row item mt-5 divider">
                            <div class="col-sm-2">
                                <a href="details/{{ $products_item->id }}">
                                    <img class="trending-images" src="{{ $products_item->products_gallery }}"
                                        alt="{{ $products_item->products_name }}">
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <h4>{{ $products_item->products_name }}</h4>
                                <h5>${{ $products_item->products_price }}</h5>
                                <h6>{{ $products_item->products_description }}</h6>
                            </div>
                            <div class="col-sm-3">
                                <h4>Total products : {{ getTotal($products_item->id) }}</h4>
                            </div>
                            <div class="col-sm-3">
                                <a href="/remove-cart/{{ $products_item->cart_id }}">
                                    <button class="btn btn-warning">
                                        Delete Product
                                    </button></a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="row item mt-5 divider">
                        <h4>No items added in cart</h4>
                    </div>

                @endif
            </div>
        </div>
    </div>


@endsection
