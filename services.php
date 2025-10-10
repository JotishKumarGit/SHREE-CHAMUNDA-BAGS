<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PEP TECHNOLOGY - Service Page</title>
    <!-- bootstrap icnos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .product-img {
            height: 250px;
            object-fit: cover;
        }

        .card:hover {
            transform: translateY(-5px);
            transition: 0.3s ease;
        }

        footer a:hover {
            color: #0dcaf0 !important;
            /* Bootstrap info color */
            transition: 0.3s ease;
        }
    </style>

</head>

<body>

    <!-- header -->
    <?php include('./includes/header.php') ?>


    <!-- Page Header -->
    <section class="page-header position-relative">
        <div class="container">
            <h1 class="h3 mb-2 text-center">Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item text-center"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active text-center" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- end page-header -->

    <!-- service -->
    <section class="services-section">
        <div class="container">
            <h2 class="section-title">Our Services</h2>

            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="service-card text-center">
                        <i class="fas fa-oil-can"></i>
                        <h5>Industrial Lubricants</h5>
                        <p>High-performance oils and greases to ensure machinery runs smoothly and efficiently.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="service-card text-center">
                        <i class="fas fa-plug-circle-bolt"></i>
                        <h5>Electrical Components</h5>
                        <p>We supply switches, cables, connectors, and more for industrial electrical systems.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="service-card text-center">
                        <i class="fas fa-screwdriver-wrench"></i>
                        <h5>Fasteners & Fittings</h5>
                        <p>Bolts, nuts, washers, pipe fittings, and more – available in all industrial sizes.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-4">
                    <div class="service-card text-center">
                        <i class="fas fa-hard-hat"></i>
                        <h5>Safety Equipment</h5>
                        <p>Protective wear, helmets, gloves, goggles, and other PPE for your workforce.</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-md-4">
                    <div class="service-card text-center">
                        <i class="fas fa-broom"></i>
                        <h5>Cleaning Supplies</h5>
                        <p>Industrial cleaning chemicals, mops, wipes, and janitorial products.</p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-md-4">
                    <div class="service-card text-center">
                        <i class="fas fa-toolbox"></i>
                        <h5>Tools & Hardware</h5>
                        <p>Hand tools, power tools, toolkits, and maintenance gear for every need.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end service -->

    <!-- footer -->
    <?php include('./includes/footer.php') ?>