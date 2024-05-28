<?php 

?>






<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Shipping Information</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='main.css'>
    <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <script src='main.js'></script>
    <style>
        body {
            background-color: #f8f9fa;
        }

        h2 {
            margin-bottom: 20px;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <strong>Sou Store</strong>
            </a>
        </div>
    </nav>
    <!-- Informasi Pengiriman -->
    <div class="container mt-5">
        <h2>Shipping Information</h2>
        <form id="shipping-form">

            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <img src="product-image.jpg" class="img-fluid" alt="Product Image">
                    </div>
                    <div class="col-md-6">
                        <form id="shipping-form" novalidate>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" rows="3"
                                    placeholder="Street address, city, state, ZIP code" required></textarea>
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="youremail@example.com"
                                    required>
                                <div class="invalid-feedback">
                                    Please enter a valid email address.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number (Optional)</label>
                                <input type="tel" class="form-control" id="phone" placeholder="123-456-7890">
                            </div>
                            <button type="submit" class="btn btn-primary">Continue to Payment</button>
                        </form>
                    </div>
                </div>
            </div>
            <script src="./vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>