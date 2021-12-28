<?php
use App\Http\Controllers\ProductController;
try {
    $total_count = ProductController::getCartItems();
} catch (\Throwable $th) {
    $total_count = 0;
}
?>

<section class="ftco-section">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <form action="#" class="searchform order-lg-last">
                <div class="row">
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" class="form-control pl-3" placeholder="Search Products">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" placeholder="" class="btn btn-primary">Search</button>
                        </div>

                    </div>

                    <div class="row-md-12">
                        <div class="col-md-12">
                            <a href="/cart-items">
                                <button type="button" class="btn btn-info">
                                    Cart <span class="badge badge-light">{{ $total_count }}</span>
                                </button>
                            </a>

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
                    <li class="nav-item active"><a href="/" class="nav-link">E-Commerce | </a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Orders</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
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
