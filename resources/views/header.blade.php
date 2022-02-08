<?php
use App\Http\Controllers\ProductController;
try {
    $total_count = ProductController::getCartItems();
} catch (\Throwable $th) {
    $total_count = 0;
}
?>

<section class="section">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="navbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <form action="#" class="searchform order-lg-last">
                <div class="row">
                    <div class="row-md-12">
                        <div class="col-md-12">
                            @if (Session::has('user'))
                                <a href="/cart-items">
                                    <button type="button" class="btn btn-info">
                                        Cart <span class="badge badge-light">{{ $total_count }}</span>
                                    </button>
                                </a>

                            @else
                                <button type="button" class="btn btn-info" disabled>
                                    Cart <span class="badge badge-light">{{ $total_count }}</span>
                                </button>

                            @endif


                        </div>
                    </div>

                    <div class="row-md-12 text-lg-right">
                        <div class="col-md-12 navbar-nav mr-auto">
                            @if (Session::has('user'))
                                <li class="nav-item active"><a href="/" class="nav-link">|
                                        {{ Session::get('user')['name'] }}</a></li>

                            @endif
                        </div>
                    </div>
                </div>
            </form>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a href="/" class="nav-link">E-Gardezi | </a></li>
                    @if (Session::has('user'))
                        <li class="nav-item"><a href="/my-orders" class="nav-link">Orders</a></li>
                    @else
                        <li class="nav-item"><a href="/login" class="nav-link">Orders</a></li>
                    @endif

                    @if (Session::has('user'))
                        <li class="nav-item"><a href="/about_us" class="nav-link">About</a></li>
                    @else
                        <li class="nav-item"><a href="/login" class="nav-link">About</a></li>
                    @endif


                    @if (Session::has('user'))
                        <li class="nav-item"><a href="/logout" class="nav-link">Logout</a></li>

                    @else 
                        <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>

</section>
