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

    <style>
        .section-title {
            font-size: 2.5rem;
            font-weight: 600;
            position: relative;
        }

        .section-title::after {
            content: '';
            width: 60px;
            height: 4px;
            background-color: #007bff;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -10px;
        }

        .icon-img {
            width: 80px;
            margin-bottom: 20px;
        }

        .card {
            border: none;
            background: white;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .bg-light-blue {
            background-color: #eaf2fb;
        }
    </style>

</head>

<body>

    <!-- header -->
    <?php include('./includes/header.php') ?>

    <!-- Page Header -->
    <section class="page-header position-relative">
        <div class="container">
            <h1 class="h3 mb-2 text-center">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item text-center"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active text-center" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- end page-header -->

    <!-- about -->
    <section class="company-section">
        <div class="container">
            <h2 class="text-center">About Us</h2>
            <p class="text-center">PEP Technology is a leading provider of innovative engineering solutions, specializing in precision, efficiency, and performance across industries.</p>
            <div class="row align-items-center">
                <!-- Image Column -->
                <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
                    <img src="assets/images/mro_baner_1.png" alt="Pep Technology Image" class="company-img">
                </div>

                <!-- Content Column -->
                <div class="col-md-6" data-aos="fade-left">
                    <h2>Pep Technology and Products</h2>
                    <p>We are a leading manufacturer and exporter of high-quality MRO (Maintenance, Repair, and Operations) products, delivering value across industries with cutting-edge solutions and professional-grade reliability.</p>

                    <ul>
                        <li>Industrial-Grade MRO Products</li>
                        <li>Custom Solutions & OEM Supply</li>
                        <li>Global Export Services</li>
                        <li>ISO Certified Manufacturing</li>
                    </ul>

                    <button class="read-more-btn mt-3"><a href="about.php" class="text-dark text-decoration-none">Read More</a></button>
                </div>
            </div>
        </div>
    </section>
    <!-- end about -->

    <section class="py-5 bg-light-blue text-center">
        <div class="container">

            <!-- Vision -->
            <div class="row justify-content-center mb-5" data-aos="fade-up">
                <div class="col-md-8">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Vision Icon" class="icon-img" />
                    <h2 class="section-title mb-3">Our Vision</h2>
                    <p class="lead">
                        To lead the future of MRO technology by providing digital-first, intelligent solutions that optimize operations,
                        reduce downtime, and empower industries to perform at peak efficiency.
                    </p>
                </div>
            </div>

            <!-- Mission -->
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="col-md-8">
                    <img src="https://cdn-icons-png.flaticon.com/512/2983/2983805.png" alt="Mission Icon" class="icon-img" />
                    <h2 class="section-title mb-3">Our Mission</h2>
                    <p class="lead">
                        At PEP Technology, our mission is to innovate MRO systems through digital transformation—delivering smart
                        inventory management, predictive maintenance, and scalable platforms that redefine operational excellence for
                        manufacturers and facilities worldwide.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- footer -->
    <?php include('./includes/footer.php') ?>