    <!-- Footer -->
    <footer class="text-center text-lg-start text-muted" style="background-color: #1F2532;">
   
      <section class="pt-3 text-white">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-6 col-lg-4 col-xl-3 mx-5 mb-4">
              <h2 class="mb-5">Trying to reach out</h2>
            
              <p><i class="fa-brands fa-google me-3"></i> <a href="https://google.com/">{{ $contact->google }}</a></p>
              <p><i class="fa-brands fa-facebook me-3"></i> <a href="https://facebook.com/">{{ $contact->facebook }}</a></p>
              <p><i class="fa-brands fa-twitter me-3"></i> <a href="https://twitter.com/">{{ $contact->twitter }}</a></p>
              <p><i class="fa-brands fa-youtube me-3"></i> <a href="https://youtube.com/">{{ $contact->youtube }}</a></p>
            </div>
  
            <div class="col-md-6 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 float-end">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
              <p><i class="fas fa-home me-3"></i> {{ $contact->address }}</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                {{ $contact->email }}
              </p>
              <p><i class="fas fa-phone me-3"></i>{{ $contact->mobile }}</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->
    
      <!-- Copyright -->
      {{-- <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">All rights reserved. Powered by SocialSeller</a>
      </div> --}}
      <!-- Copyright -->
          </footer>
          <!-- Footer -->
          </div>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>