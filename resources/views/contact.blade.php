<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bank of AJK</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <style>
    footer a:hover {
      color: #fd7e14 !important;
    }
  </style>
</head>
<body>
 <div class="top-bar text-center py-2 small">
  <a class="fw-bold text-white text-decoration-none">
    <img src="https://i.pinimg.com/736x/f2/83/8d/f2838d7d84891e39ecb0e3f0c47faa20.jpg" alt="Logo" class="me-2" style="height: 30px;">
    Head Office, Bank Square, Chattar Domel, Muzaffarabad, AJ&K — Mon - Fri: 9 am - 8 pm
  </a>
</div>


  {{-- Header --}}
  <nav class="navbar navbar-expand-lg navbar-light custom-header px-3">
  <a class="navbar-brand fw-bold text-white" href="#">
    <img src="https://demo.bankajk.com/wp-content/uploads/2023/10/logomain.png" alt="Logo" class="me-2" style="height: 50px;">
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav me-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="/"><i class="bi bi-house-door-fill me-1"></i> Home</a>
      </li>

      <!-- About Us -->
      <li class="nav-item dropdown">
        <div class="d-flex align-items-center">
          <a class="nav-link text-white" href="{{ route('aboutus') }}">
            <i class="bi bi-info-circle-fill me-1"></i> About Us
          </a>
          <a class="nav-link dropdown-toggle text-white px-2" href="#" id="aboutUsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
        </div>
        <ul class="dropdown-menu" aria-labelledby="aboutUsDropdown">
          <li><a class="dropdown-item" href="{{ route('board') }}"><i class="bi bi-people-fill me-1"></i> Board of Director</a></li>
          <li><a class="dropdown-item" href="{{ route('management') }}"><i class="bi bi-person-gear me-1"></i> Management</a></li>
        </ul>
      </li>

      <!-- Products -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown"><i class="bi bi-box-seam me-1"></i> Products</a>
        <ul class="dropdown-menu">
          <li class="dropdown-submenu">
            <a class="dropdown-item dropdown-toggle" href="#"><i class="bi bi-piggy-bank-fill me-1"></i> Liability</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('services') }}">Deposite account</a></li>
              <li><a class="dropdown-item" href="{{ route('termdeposite') }}">Term Deposit</a></li>
            </ul>
          </li>
          <li class="dropdown-submenu">
            <a class="dropdown-item dropdown-toggle" href="#"><i class="bi bi-cash-stack me-1"></i> Asset</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('micro') }}">Micro Finance</a></li>
              <li><a class="dropdown-item" href="{{ route('ConsumerFinances') }}">Consumer Finance</a></li>
              <li><a class="dropdown-item" href="{{ route('agrfin') }}">Agricultural Finance</a></li>
              <li><a class="dropdown-item" href="{{ route('sme') }}">Commercial / SME Finances</a></li>
            </ul>
          </li>
        </ul>
      </li>

      <!-- Services -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown"><i class="bi bi-wrench-adjustable-circle me-1"></i> Services</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ route('serv') }}">Services</a></li>
          <li><a class="dropdown-item" href="{{ route('home_remittance') }}">Home Remittance</a></li>
        </ul>
      </li>

      <!-- Financial -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown"><i class="bi bi-bar-chart-fill me-1"></i> Financial</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ route('statement') }}">Statement</a></li>
          <li class="dropdown-submenu">
            <a class="dropdown-item dropdown-toggle" href="#">Annual Report</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="https://bankajk.com/downloads/financials/BAJK%20Annual%20Report%202023%20final.pdf">Annual Report 2023</a></li>
              <li><a class="dropdown-item" href="https://bankajk.com/downloads/annual%20report%202022.pdf">Annual Report 2022</a></li>
              <li><a class="dropdown-item" href="https://bankajk.com/downloads/Annual%20Report%202021.pdf">Annual Report 2021</a></li>
              <li><a class="dropdown-item" href="https://bankajk.com/downloads/annual_report_2020.pdf">Annual Report 2020</a></li>
              <li><a class="dropdown-item" href="https://bankajk.com/downloads/annual_report_2019.pdf">Annual Report 2019</a></li>
              <li><a class="dropdown-item" href="https://bankajk.com/downloads/Annual%20Report%202018-26.6.2019-final.pdf">Annual Report 2018</a></li>
              <li><a class="dropdown-item" href="https://bankajk.com/downloads/annual_report_2017.pdf">Annual Report 2017</a></li>
              <li><a class="dropdown-item" href="https://bankajk.com/downloads/annual_report_2016.pdf">Annual Report 2016</a></li>
            </ul>
          </li>
          <li><a class="dropdown-item" href="https://view.officeapps.live.com/op/view.aspx?src=https%3A%2F%2Fwww.bankajk.com%2Fdownloads%2FFinancial%2520HL%252030.6.22.pptx&wdOrigin=BROWSELINK">Financial Highlights</a></li>
        </ul>
      </li>

      <!-- Rates -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown"><i class="bi bi-percent me-1"></i> Rates & Charges</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="https://bankajk.com/downloads/soc/SOC%20Jul-Dec%2024.pdf">Schedule of Charges</a></li>
          <li><a class="dropdown-item" href="{{ route('Profit_rates') }}">Profit Rates</a></li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link text-white" href="{{ route('contact') }}"><i class="bi bi-telephone-fill me-1"></i> Contact</a>
      </li>
    </ul>

    <span class="navbar-text text-white fw-bold">
      <i class="bi bi-telephone-inbound-fill me-1"></i> Call: +92-5822-924244
    </span>
  </div>
</nav>


 {{-- Page Content --}}
<style>
  .breadcrumb-section {
    background-color: #044112; /* Green background */
    padding: 30px 20px;
    color: white;
    font-family: 'Segoe UI', sans-serif;
  }

  .breadcrumb-section h1 {
    margin: 0;
    font-size: 28px;
    font-weight: bold;
  }

  .breadcrumb {
    margin-top: 5px;
    font-size: 16px;
    color: #f0f0f0;
  }

  .breadcrumb a {
    color: #fff;
    text-decoration: underline;
    font-weight: 500;
  }

  .breadcrumb span {
    margin: 0 8px;
    color: #e0e0e0;
  }
</style>

<div class="breadcrumb-section">
  <h1>Contacts</h1>
  <div class="breadcrumb">
    <a href="#">Bank of Azad Jammu & Kashmir</a>
    <span>&gt;</span>
    <span>Contacts</span>
  </div>
</div>
<style>
  .contact-section {
    width: 100%;
    max-width: 480px;         /* Moderate max width for neat form */
    margin: 40px auto;        /* Top & bottom margin for breathing space */
    padding: 25px 30px;       /* Comfortable padding */
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f9f9f9; /* Light subtle background */
    box-shadow: 0 2px 8px rgba(0,0,0,0.1); /* Soft shadow for depth */
    border-radius: 8px;       /* Rounded corners */
    box-sizing: border-box;
    color: #333;
  }

  .contact-section h2 {
    margin-bottom: 12px;
    font-weight: 600;
    color: #2e4b27; /* Dark greenish */
    font-size: 24px;
  }

  .contact-section p {
    margin-bottom: 25px;
    color: #555;
    font-size: 16px;
  }

  form {
    display: flex;
    flex-direction: column;
    gap: 18px;
    width: 100%;
  }

  form input,
  form textarea {
    width: 100%;
    padding: 12px 15px;
    font-size: 15px;
    border: 1.8px solid #ccd7c8; /* subtle greenish border */
    border-radius: 5px;
    transition: border-color 0.3s ease;
    font-family: inherit;
    color: #222;
  }

  form input:focus,
  form textarea:focus {
    outline: none;
    border-color: #335f3a; /* accent green on focus */
    box-shadow: 0 0 6px rgba(51, 95, 58, 0.3);
  }

  form button {
    width: 100%;
    background-color: #335f3a;
    color: white;
    border: none;
    padding: 14px 0;
    font-size: 17px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  form button:hover {
    background-color: #2a4a2c;
  }

  .contact-info {
    margin-top: 35px;
    font-size: 15px;
    line-height: 1.5;
    color: #444;
  }

  .contact-info h3 {
    margin-bottom: 8px;
    font-weight: 600;
    color: #335f3a;
  }

  .contact-info a {
    color: #335f3a;
    text-decoration: none;
    transition: text-decoration 0.3s ease;
  }

  .contact-info a:hover {
    text-decoration: underline;
  }

  /* Success message style */
  .success-message {
    margin-top: 10px;
    color: #2a7f2a;
    font-weight: 600;
  }
</style>

<section class="contact-section">
  <h2>Get in Touch</h2>
  <p>We’re here for you! How can we help?</p>

  <form action="{{ route('save') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Email Here" required>
    <textarea name="message" placeholder="Message Here" rows="5" required></textarea>
    <button type="submit">SUBMIT</button>
    @if(session('success'))
      <div class="success-message">{{ session('success') }}</div>
    @endif
  </form>

  <div class="contact-info">
    <h3>Address</h3>
    <p>Head Office, Bank Square, Chattar Domel, Muzaffarabad, Azad Jammu & Kashmir</p>

    <h3>Mail Us</h3>
    <p><a href="mailto:info@bankajk.com">info@bankajk.com</a></p>

    <h3>Telephone</h3>
    <p>Call: +92-5822-924244<br>Fax: +92-5822-921983</p>
  </div>
</section>


<div style="width: 100%; height: 400px; margin: 0 auto;">
  <iframe
      loading="lazy"
      width="100%"
      height="100%"
      frameborder="0"
      style="border:0;"
      src="https://maps.google.com/maps?q=BAJK,%20Chatter,%20Muzaffarabad,%20Pakistan&t=m&z=14&output=embed&iwloc=near"
      title="BAJK, Chatter, Muzaffarabad, Pakistan"
      aria-label="BAJK, Chatter, Muzaffarabad, Pakistan"
      allowfullscreen
  ></iframe>
</div>




  {{-- Footer --}}
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
        <p class="mb-0">&copy; 2023 Bank of Azad Jammu & Kashmir. All Rights Reserved</p>
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
