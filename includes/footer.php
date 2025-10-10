   <style>
       #enquiryForm input,
       #enquiryForm textarea {
           border-radius: 0.4rem;
           border: 1px solid #ced4da;
           transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
       }

       #enquiryForm input:focus,
       #enquiryForm textarea:focus {
           border-color: #28a745;
           box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
       }
   </style>

   <!-- Enquery Form modal -->
   <div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Centered and wider -->
           <div class="modal-content">
               <form id="enquiryForm">
                   <div class="modal-header">
                       <h5 class="modal-title" id="enquiryModalLabel">Enquiry Form</h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>

                   <div class="modal-body">
                       <div class="container">
                           <div class="row g-3"> <!-- Gap between inputs -->

                               <div class="col-md-6">
                                   <label for="name" class="form-label">Name</label>
                                   <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                               </div>

                               <div class="col-md-6">
                                   <label for="email" class="form-label">Email</label>
                                   <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                               </div>

                               <div class="col-md-6">
                                   <label for="number" class="form-label">Phone Number</label>
                                   <input type="tel" class="form-control" id="number" placeholder="Enter your phone number" required>
                               </div>

                               <div class="col-md-6">
                                   <label for="subject" class="form-label">Subject</label>
                                   <input type="text" class="form-control" id="subject" placeholder="Subject of your enquiry" required>
                               </div>

                               <div class="col-12">
                                   <label for="message" class="form-label">Message</label>
                                   <textarea class="form-control" id="message" rows="3" placeholder="Type your message here..." required></textarea>
                               </div>

                           </div>
                       </div>
                   </div>

                   <div class="modal-footer">
                       <button type="submit" class="btn btn-success w-100">Send via WhatsApp</button>
                   </div>
               </form>
           </div>
       </div>
   </div>


   <!-- Footer -->
   <footer class="pt-5 pb-4" data-aos="fade-up" data-aos-delay="100">
       <div class="container text-center text-md-start">
           <div class="row text-center text-md-start">

               <!-- Company Info -->
               <div class="col-md-3 col-lg-4 col-xl-4 mx-auto mb-4">
                   <h5 class="text-uppercase fw-bold mb-4">PEP TECHNOLOGY</h5>
                   <p>PEP Technology is a leading provider of innovative engineering solutions, specializing in precision, efficiency, and performance across industries.</p>
               </div>

               <!-- Products -->
               <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                   <h6 class="text-uppercase fw-bold mb-4">Products</h6>
                   <ul class="list-unstyled">
                       <li><a href="#">MRO Products </a></li>
                   </ul>
               </div>

               <!-- Quick Links -->
               <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                   <h6 class="text-uppercase fw-bold mb-4">Quick Links</h6>
                   <ul class="list-unstyled">
                       <li><a href="#about">About Us</a></li>
                       <li><a href="#products">Products</a></li>
                       <li><a href="#services">Services</a></li>
                       <li><a href="#faq">FAQ</a></li>
                       <li><a href="#contact">Contact</a></li>
                   </ul>
               </div>

               <!-- Contact Info -->
               <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                   <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                   <p><i class="bi bi-house-door-fill me-2"></i>Door number 16, Plot no 50, SouthKamachi Nagar, pattu koot road, Mangadu, Chennai, Tamil Nadu 600122</p>
                   <p><i class="bi bi-envelope-fill me-2"></i>krishnakumar@peptechnology.in || peptechindia@yahoo.com</p>
                   <p><i class="bi bi-telephone-fill me-2"></i> +91 6381280180 || 8124091333</p>
               </div>
           </div>

           <!-- Divider -->
           <hr class="my-4">

           <!-- Social Media + Copyright -->
           <div class="row align-items-center text-center">
               <div class="col-md-6">
                   <p class="mb-0 text-center">© 2025 PEP TECHNOLOGY. All Rights Reserved.</p>
                   <span>Design By <a href="https://trade4export.com/">Trade4Export</a></span>
               </div>
               <div class="col-md-6">
                   <div class="d-flex justify-content-center justify-content-md-end gap-3">
                       <a href="#"><i class="bi bi-facebook fs-5"></i></a>
                       <a href="#"><i class="bi bi-instagram fs-5"></i></a>
                       <a href="#"><i class="bi bi-whatsapp fs-5"></i></a>
                       <a href="#"><i class="bi bi-linkedin fs-5"></i></a>
                   </div>
               </div>
           </div>
       </div>
   </footer>

   <!-- AOS JS -->
   <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
   <script src="assets/js/script.js"></script>
   <!-- bootstrap js  -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
       crossorigin="anonymous"></script>
   </body>

   </html>