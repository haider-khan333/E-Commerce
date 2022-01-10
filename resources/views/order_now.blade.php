@extends("master")

@section('content')

    <div class="cart_products">
        <div class="col-sm-11">
            <h3>Amount Details:</h3>
            <table class="table table-hover table-bordered mt-5 table-dark">
                <tbody>
                    <tr>
                        <th>Amount</th>
                        <td>$ {{ $total_amount }}</td>
                    </tr>
                    <tr>
                        <th>Tax</th>
                        <td>$ 0</td>
                    </tr>
                    <tr>
                        <th>Delivery Charges</th>
                        <td>$ 20</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <td>$ {{ $total_amount + 20 }}</td>
                    </tr>
                </tbody>
            </table>

            <form action="/payment_details" method="post">
                @csrf
                <div class="form-group">
                    <h4>Address:</h4>
                    <Address>
                        <textarea class="form-control mt-3" id="address" name="address" rows="3"
                            placeholder="Enter your address here"></textarea>
                    </Address>
                </div>

                <div class="class">
                    <h4>Payment Options:</h4>
                    <div class="mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="options" value="card" id="card">
                            <label class="form-check-label" for="card">
                                Card
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="options" value="cash on delivery"
                                id="cash_on_delivery" checked>
                            <label class="form-check-label" for="cash_on_delivery">
                                Cash on Delivery
                            </label>
                        </div>
                    </div>


                    <div class="mt-5">
                        <button class="btn btn-success">
                            Order Now
                        </button>
                    </div>


                </div>
            </form>
        </div>
    </div>


@endsection
