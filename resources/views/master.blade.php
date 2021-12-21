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
    <title>E-Commerce Project</title>
    <style>
        .footer-basic {
            padding: 50px;
            background-color: white;
            color: #4b4c4d;
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

        div.trending-all-images {
            float: left;
            width: 20%;
        }

        div.trending-style {
            padding: 10px;
        }

        img.details-img-style {
            height: 200px;
            
        }

        div.product_style {
            height: 500px;
        }

        .footer-basic li {
            padding: 0 10px;
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
