<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PEP TECHNOLOGY - Contact Page</title>
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
            <h1 class="h3 mb-2 text-center">Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item text-center"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active text-center" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- end page-header -->

    <!-- contact us page -->
    <section class="contact-section py-5 bg-light" id="contact">
        <div class="container">
            <!-- Section Title -->
            <div class="text-center mb-5">
                <h2 class="mb-3" data-aos="fade-up">Contact Us</h2>
                <p class="text-muted" data-aos="fade-up" data-aos-delay="100">
                    Have a question or business inquiry? Get in touch — we’re here to help!
                </p>
            </div>

            <div class="row g-4 align-items-center justify-content-center">
                <!-- Map Column -->
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="rounded-3 overflow-hidden shadow-sm">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3887.147622080863!2d80.10847807412121!3d13.026269763679279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sDoor%20number%2016%2C%20Plot%20no%2050%2C%20SouthKamachi%20Nagar%2C%20pattu%20koot%20road%2C%20Mangadu%2C%20Chennai%2C%20Tamil%20Nadu%20600122!5e0!3m2!1sen!2sin!4v1759145690954!5m2!1sen!2sin"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="p-4 p-md-5 bg-white shadow-lg rounded-4">
                        <h4 class="mb-4 text-center">We’d love to hear from you</h4>
                        <form id="contactForm" onsubmit="return sendToWhatsApp();">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" id="phone" placeholder="Your Phone" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" id="message" rows="4" placeholder="Your Message"
                                    required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success px-4">
                                    Send via WhatsApp
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact us page -->

    <!-- footer -->
    <?php include('./includes/footer.php') ?>