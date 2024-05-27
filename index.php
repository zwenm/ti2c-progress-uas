<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>E-Commerce | Sou Store</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <strong>Sou Store</strong>
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                    <form class="d-flex">
                        <input class="form-control me-2 search" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </ul>
                <ul class="navbar-nav ms-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-cart"></i>
                            <span class="badge bg-danger">4</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="container">
            <div id="carouselExampleRide" class="carousel slide mt-5" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./image/sample1.png" class="img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./image/sample2.png" class="img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./image/sample3.png" class="img-fluid" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Outfit Categories</h2>
                    <div class="category-container d-flex flex-wrap justify-content-around">
                        <a href="#" class="category-item text-center p-3 rounded">
                            <i class="fas fa-laptop"></i>
                            <p>Man</p>
                        </a>
                        <a href="#" class="category-item text-center p-3 rounded">
                            <i class="fas fa-mobile"></i>
                            <p>Woman</p>
                        </a>
                        <a href="#" class="category-item text-center p-3 rounded">
                            <i class="fas fa-headphones"></i>
                            <p>Sportwear</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="product-card card shadow-sm">
                        <img src="your-image1.jpg" class="card-img-top" alt="Product Image 1">
                        <div class="card-body">
                            <h5 class="card-title">Product Name 1</h5>
                            <p class="card-text">A short description of product 1.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">$19.99</span>
                                <a href="#" class="btn btn-primary">Buy Now</a>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="product-card card shadow-sm">
                        <img src="your-image2.jpg" class="card-img-top" alt="Product Image 2">
                        <div class="card-body">
                            <h5 class="card-title">Product Name 2</h5>
                            <p class="card-text">A short description of product 2.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">$29.99</span>
                                <a href="#" class="btn btn-primary">Buy Now</a>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script src="./vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>