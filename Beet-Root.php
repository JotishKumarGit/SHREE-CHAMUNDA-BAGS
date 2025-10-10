<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>11 Icons Enterprises</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet" />

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

    <style>
        .service-item-top .overflow-hidden {
            height: 300px;
        }

        .service-item-top img {
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Header -->
    <?php include('header.php') ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Beet Root</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Beet Root</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Single page  -->
    <div class="container-fluid py-5" style="background-color: #f9f9f9;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image -->
                <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
                    <img src="img/BEETROOT.jpg" class="img-fluid rounded shadow-sm" alt="Fresh Beetroot">
                </div>

                <!-- Text -->
                <div class="col-md-6" data-aos="fade-left">
                    <h2 class="mb-3" style="color: #8e44ad;">Fresh Beetroot</h2>
                    <p class="text-muted">
                        Enjoy the natural goodness of our fresh, farm-picked beetroot — a superfood packed with
                        vitamins,
                        minerals, and antioxidants. Known for its earthy flavor and vibrant red color, beetroot supports
                        heart health, boosts stamina, and adds a nutritious touch to your daily meals. Perfect for
                        juices,
                        salads, curries, and even baked dishes.
                    </p>

                    <ul class="list-unstyled">
                        <li>✅ Rich in iron, folate, and dietary fiber</li>
                        <li>✅ Supports healthy blood circulation</li>
                        <li>✅ 100% natural and chemical-free</li>
                        <li>✅ Great for juices, salads & cooking</li>
                        <li>✅ Freshly sourced and hygienically packed</li>
                    </ul>

                    <button class="btn btn-danger mt-3 shadow" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                     Enquiry Now
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End single page -->

    <?php include('footer.php') ?>