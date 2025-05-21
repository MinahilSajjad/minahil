<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'AJK Bank')</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
    <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    <!-- In <head> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    
{{-- optional --}}
</head>
<body>
    @include('admin.partials.navbar')


    <!-- Before </body> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


 {{-- optional: if you have a navbar --}}
    <main>
        @yield('content')
    </main>
  <footer class="pt-5 pb-3" style="background-color: #114401; color: white;">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
  <img src="https://demo.bankajk.com/wp-content/uploads/2023/10/logomain.png"alt="Bank of AJK Logo" style="max-width: 250px; height: auto%; margin-bottom: 10px;" />
  <h5 class="fw-bold">About Bank of AJK</h5>
  <p>
    A growing Bank in Azad Jammu & Kashmir with 87 branches, mobilizing savings,
    promoting economic development, and offering tailored banking solutions for equal access to resources.
  </p>
</div>


        <div class="col-md-2 mb-4">
          <h5 class="fw-bold">Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="{{ route('aboutus') }}"class="text-white text-decoration-none">About Us</a></li>
            <li><a href="{{ route('admin.manage') }}" class="text-white text-decoration-none">Branch Network</a></li>
            <li><a href="{{ route('news') }}" class="text-white text-decoration-none">News & Update</a></li>
            <li><a href="{{ route('gallery') }}" class="text-white text-decoration-none">Gallery</a></li>
            <li><a href="{{ route('downloads') }}" class="text-white text-decoration-none">Downloads</a></li>
            <li><a href="{{ route('contact') }}" class="text-white text-decoration-none">Contact</a></li>
          </ul>
        </div>

        <div class="col-md-3 mb-4">
          <h5 class="fw-bold">Popular Posts</h5>
          <ul class="list-unstyled">
            <li><strong>Proudly Honoring Pakistan’s</strong><br><small>May 12, 2025</small></li>
            <li class="mt-2"><strong>57th Board of directors meeting of Azad Kashmir</strong><br><small>July 04, 2022</small></li>
            <li class="mt-2"><strong>Finance Minister Khan</strong><br><small>September 04, 2022</small></li>
            <li class="mt-2"><strong>Khan Abdul Majid</strong><br><small>September 22, 2022</small></li>
          </ul>
        </div>

        <div class="col-md-3 mb-4">
          <h5 class="fw-bold">Contact Us</h5>
          <p>
            Head Office, Bank Square,<br>
            Chattar Domel,<br>
            Muzaffarabad, 13100<br>
            Azad Jammu & Kashmir, Pakistan<br>
            <strong>Phone:</strong> +92 (5822)-924244<br>
            <strong>Email:</strong> info@bankajk.com
          </p>
        </div>
      </div>

      <div class="border-top border-white pt-3 d-flex flex-column flex-md-row justify-content-between align-items-center">
        <p class="mb-0">&copy; 2023 Bank of Azad Jammu & Kashmir. All Rights Reserves</p>
        <div>
          <a href="{{ route('careers') }}" class="text-white me-3 text-decoration-none">Careers</a>
          <a href="{{ route('downloads') }}" class="text-white me-3 text-decoration-none">Downloads</a>
          <a href="{{ route('organogram') }}" class="text-white text-decoration-none">Organogram</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
