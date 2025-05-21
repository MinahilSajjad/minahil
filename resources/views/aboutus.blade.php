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
    background-color:  #044112; /* Green background */
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
  <h1> About Us </h1>
  <div class="breadcrumb">
    <a href="#">Bank of Azad Jammu & Kashmir</a>
    <span>&gt;</span>
    <span> About Us</span>
  </div>
</div>

 <style>
  .content-wrapper {
       width: 100%;
    background-color: #f0f2f5;
    padding: 40px 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #000;
    line-height: 1.8;
  }

  .content-wrapper h2,
  .content-wrapper h4 {
    color: #000;
    font-weight: bold;
    margin-bottom: 12px;
  }

  .content-wrapper p,
  .content-wrapper li {
    color: #222;
    font-size: 16px;
    font-weight: 500;
  }

  .content-wrapper .section {
    max-width: 1000px;
    margin: 30px auto;
    padding: 40px 30px;
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.05);
    transition: box-shadow 0.3s ease-in-out;
  }

  .content-wrapper .section:hover {
    box-shadow: 0 10px 24px rgba(0, 0, 0, 0.08);
  }

  .content-wrapper ul {
    padding-left: 20px;
    margin-top: 12px;
  }

  .content-wrapper li {
    margin-bottom: 12px;
  }

  .content-wrapper .split {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
  }

  .content-wrapper .split > div {
    flex: 1 1 45%;
  }

  @media (max-width: 768px) {
    .content-wrapper .split {
      flex-direction: column;
    }

    .content-wrapper .split > div {
      flex: 1 1 100%;
    }
  }
</style>

<div class="content-wrapper">
  <section class="section">
  
    <h4>AJK’s Leading Bank</h4>
    <p>The Bank of Azad Jammu & Kashmir (BAJK) was established in 1971 under a special ordinance passed by the Azad Jammu & Kashmir (AJK) Government. It started operations with the primary objective of fostering economic development and providing banking services to the people of Azad Jammu & Kashmir.</p>
    <p>Over the years, BAJK has grown to become the largest bank in AJK, playing a pivotal role in the region’s financial landscape. With a widespread network of branches, the bank reaches even the remotest areas, ensuring financial inclusion for all.</p>
  </section>

  <section class="section">
    <div class="split">
      <div>
        <h4>Our Vision</h4>
        <p>To be the leading financial institution in Azad Jammu & Kashmir, recognized for our customer-centric approach, innovation, and contribution to the region’s prosperity.</p>
      </div>
      <div>
        <h4>Our Mission</h4>
        <p>To provide a comprehensive range of high-quality banking and financial services, delivered with professionalism and integrity, while promoting sustainable economic growth in Azad Jammu & Kashmir.</p>
      </div>
    </div>
  </section>

  <section class="section">
    <h4>Core Values</h4>
    <ul>
      <li><strong>Customer Focus:</strong> We are committed to understanding and meeting the needs of our customers.</li>
      <li><strong>Integrity:</strong> We uphold the highest ethical standards in all our dealings.</li>
      <li><strong>Innovation:</strong> We embrace new ideas and technologies to enhance our services.</li>
      <li><strong>Teamwork:</strong> We work collaboratively to achieve our goals.</li>
      <li><strong>Social Responsibility:</strong> We are dedicated to contributing positively to the communities we serve.</li>
    </ul>
  </section>

  <section class="section">
    <h4>Our History</h4>
    <ul>
      <li><strong>1971:</strong> Bank of Azad Jammu & Kashmir is established.</li>
      <li><strong>1980s–1990s:</strong> Expansion of branch network across AJK.</li>
      <li><strong>2000s:</strong> Introduction of modern banking technologies and services.</li>
      <li><strong>Present:</strong> Continued growth, focus on digital transformation and customer satisfaction.</li>
    </ul>
  </section>

  <section class="section">
    <h4>Our Commitment</h4>
    <p>At Bank of Azad Jammu & Kashmir, we are more than just a bank; we are a partner in the progress of Azad Jammu & Kashmir. We are committed to:</p>
    <ul>
      <li>Providing accessible and affordable banking services to all segments of society.</li>
      <li>Supporting local businesses and entrepreneurs through tailored financial solutions.</li>
      <li>Contributing to the socio-economic development of the region through various initiatives.</li>
      <li>Maintaining the trust and confidence of our customers through transparent and ethical practices.</li>
    </ul>
  </section>

  <section class="section">
    <h4>Meet Our Team</h4>
    <p>[Team section content to be added here based on available team info]</p>
  </section>

  <section class="section">
    <h4>Why Choose Us?</h4>
    <ul>
      <li><strong>Extensive Branch Network:</strong> Our widespread presence ensures convenience and accessibility.</li>
      <li><strong>Customer-Centric Approach:</strong> We prioritize your needs and strive to exceed your expectations.</li>
      <li><strong>Comprehensive Product Range:</strong> We offer a diverse suite of banking products and services.</li>
      <li><strong>Commitment to the Region:</strong> We are deeply invested in the prosperity of Azad Jammu & Kashmir.</li>
      <li><strong>Experienced and Dedicated Team:</strong> Our professionals are committed to providing excellent service.</li>
    </ul>
  </section>
</div>

  

  {{-- Footer --}}
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
