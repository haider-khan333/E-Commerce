@extends("master")

@section('content')

    <div class="cart_products">
        <div class="col-sm-11">
            <div class="products">
                <div class="row">
                    <div class="row col-sm-10">
                        <h3>Purchased Products</h3>
                    </div>
                </div>


                @foreach ($list as $products_item)
                    <div class="row item mt-5 divider">
                        <div class="col-sm-2">
                            <a href="details/{{ $products_item->id }}">
                                <img class="trending-images" src="{{ $products_item->products_gallery }}"
                                    alt="{{ $products_item->products_name }}">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <h4>Name : {{ $products_item->products_name }}</h4>
                            <h6>Delivery Status : {{ $products_item->status }}</h6>
                            <h6>Address : {{ $products_item->address }}</h6>
                            <h6>Payment Status : {{ $products_item->payment_status }}</h6>
                            <h6>Payment Method : {{ $products_item->payment_method }}</h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



@endsection
