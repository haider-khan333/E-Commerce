<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>\

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>



    <link rel="stylesheet" href="resources/css/styles.css">

    <title>Gardezi Products</title>
    <style>
        div.text-wrap {
            background: linear-gradient(to left, #A43931, #1D4350);
            height: 450px;
        }

        .btn {
            border-radius: 30px;
        }

        div.about_us_style_2 {
            width: 100px;
            height: 300px;
        }

        .footer-basic {
            /* margin-top: auto; */
            background-color: white;
            color: #4b4c4d;
            /* position: relative; */
            /* clear: both; */
        }

        div.footer_fix {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
            line-height: 60px;
            background-color: #f5f5f5;
            display: block;

        }

        a.carousel-control-prev,
        a.carousel-control-next {
            filter: invert(100%);
        }

        .footer-basic ul {
            padding: 0;
            list-style: none;
            text-align: center;
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 0;
        }

        img.slider_img {
            height: 400px !important
        }

        img.trending-images {
            height: 100px;

        }

        div.product_design {
            background-color: #D6CFF2;
            border-radius: 20px;
            height: 50px;
        }

        div.mobile_design {
            background-color: #D6CFF2;
            border-radius: 5px;
            width: 150px;
        }

        div.divider {
            border-bottom: 1px solid #aaa;
            margin: 20px;
            padding-bottom: 20px;
        }

        div.cart_products {
            padding: 20px;
        }

        div.trending-all-images {
            float: left;
            width: 25%;

        }

        div.trending-style {
            padding: 10px;
        }

        img.details-img-style {
            height: 200px;

        }

        div.product_style {
            height: 100%;
        }

        div.details_style {
            display: flex;
        }

        .footer-basic li {
            padding: 0 10px;
        }

        div.about_us_header {
            height: 150px;
            background-color: #1D4350;
            border-radius: 0px 0px 20px 20px;
        }

        div.about_us_style_1 {
            color: #aaa;
        }

        .footer-basic ul a {
            color: inherit;
            text-decoration: none;
            opacity: 0.8;
        }

        .footer-basic .copyright {
            margin-top: 15px;
            text-align: center;
            font-size: 13px;
            color: #aaa;
            margin-bottom: 0;
        }

    </style>
</head>

<body>

    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}


</body>

</html>
