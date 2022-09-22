   <!-- Footer -->
   <footer class="bg-light text-center mt-4 bg-dark text-white">
    <!-- Grid container -->
    <div class="container p-4">
  
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="{{ $contact->facebook }}" role="button"><i class="fab fa-facebook-f"></i></a>
  
        <!-- Twitter -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="{{ $contact->twitter }}" role="button"><i class="fab fa-twitter"></i></a>
  
        <!-- Youtube -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="{{ $contact->youtube }}" role="button"><i class="fab fa-youtube"></i></a>
  
        <!-- Google -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="{{ $contact->google }}" role="button"><i class="fab fa-google"></i></a>
      </section>
      <!-- Section: Social media -->
  

  
  
      <!-- Section: Text -->
      <section class="mb-4">
        <p>
          {{ $contact->address }} {{ $contact->mobile }} {{ $contact->email }}
        </p>
      </section>
      <!-- Section: Text -->
  
  
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      Design from:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
</div>
</div>
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
    ></script>
</body>
</html>