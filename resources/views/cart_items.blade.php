@extends("master")

@section('content')

    <div class="cart_products">
        <div class="col-sm-11">
            <div class="products">
                <h3>Cart Items</h3>
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
                            <h4>Total products 0</h4>
                        </div>
                        <div class="col-sm-3">
                            <button class="btn btn-warning">
                                Delete Product
                            </button>
                        </div>
                    </div>



                @endforeach


            </div>
        </div>
    </div>


@endsection
