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
  <h1> Gallery </h1>
  <div class="breadcrumb">
    <a href="#">Bank of Azad Jammu & Kashmir</a>
    <span>&gt;</span>
    <span> Gallery</span>
  </div>
</div>



{{-- buttons --}}

 <style>
  .category-wrapper {
    padding: 40px 20px;
    max-width: 1200px;
    margin: 0 auto;
    font-family: 'Segoe UI', sans-serif;
    background-color: #f9f9f9;
  }

  .category-section h2 {
    text-align: center;
    margin-bottom: 24px;
    font-size: 28px;
  }

  .category-buttons {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 16px;
    margin-bottom: 32px;
  }

  .category-button {
    padding: 12px 24px;
    font-size: 16px;
    font-weight: 500;
    color: #fff;
    background-color: #28a745;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
  }

  .category-button:hover {
    background-color: #ff7f0e;
    transform: translateY(-2px);
  }

  .category-content {
    display: none;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  }

  .category-content.active {
    display: block;
  }

  .image-gallery {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
    gap: 20px;
    margin-top: 40px;
  }

  .image-gallery img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
  }

  .image-gallery img:hover {
    transform: scale(1.05);
  }
</style>

<div class="category-wrapper">
  <section class="category-section">
    <h2>Browse by Category</h2>

    <div class="category-buttons">
      <button class="category-button" onclick="showContent('all')">All</button>
      <button class="category-button" onclick="showContent('highups')">HIGH-UP’S Initiatives</button>
      <button class="category-button" onclick="showContent('bod')">BOD Meetings</button>
      <button class="category-button" onclick="showContent('events')">Special Events</button>
      <button class="category-button" onclick="showContent('training')">Training and Workshops</button>
      <button class="category-button" onclick="showContent('kashmir')">Kashmir Solidarity Day</button>
      <button class="category-button" onclick="showContent('misc')">Miscellaneous</button>
    </div>

    <!-- Content Sections -->
    <div id="all" class="category-content active">
      <h3>All Content</h3>
      <p>This section shows all available data from all categories.</p>
      <div class="image-gallery">
        <img src="https://demo.bankajk.com/wp-content/uploads/2024/06/president-ajk-with-president-bajk-2-2.jpg" alt="">
        <img src="https://demo.bankajk.com/wp-content/uploads/2024/06/president-ajk-with-president-bajk-1-2.jpg" alt="">
        <img src="https://demo.bankajk.com/wp-content/uploads/2024/06/President-bajk-with-amkhan-1-2.jpg" alt="">
        <img src="https://demo.bankajk.com/wp-content/uploads/2024/06/President-bajk-with-amkhan-2-2.jpg" alt="">
        <img src="https://demo.bankajk.com/wp-content/uploads/2024/01/profile-pic-2-150x150.png" alt="">
        <img src="https://demo.bankajk.com/wp-content/uploads/2024/06/IMG-20220803-WA0153-2.jpg" alt="">
        <img src="https://demo.bankajk.com/wp-content/uploads/2024/06/1-3.jpg" alt="">
        <img src="https://demo.bankajk.com/wp-content/uploads/2024/06/2-2.jpg" alt="">
        <img src="https://demo.bankajk.com/wp-content/uploads/2024/06/3-2.jpg" alt="">
        <img src="https://demo.bankajk.com/wp-content/uploads/2024/06/4-2.jpg" alt="">
        <img src="https://demo.bankajk.com/wp-content/uploads/2024/06/6-2.jpg" alt="">
        <img src="https://demo.bankajk.com/wp-content/uploads/2024/06/7-2.jpg" alt="">
        <img src="https://demo.bankajk.com/wp-content/uploads/2024/06/President-bajk-with-amkhan-3-2.jpg" alt="">
      </div>
    </div>

    <div id="highups" class="category-content">
      <h3>HIGH-UP’S Initiatives</h3>
      <p>Details about senior management's initiatives and updates.</p>
    </div>

    <div id="bod" class="category-content">
      <h3>BOD Meetings</h3>
      <p>Minutes and summaries from Board of Directors meetings.</p>
    </div>

    <div id="events" class="category-content">
      <h3>Special Events</h3>
      <p>Gallery, highlights and outcomes from special events.</p>
    </div>

    <div id="training" class="category-content">
      <h3>Training and Workshops</h3>
      <p>Schedules, topics, and feedback from recent trainings.</p>
    </div>

    <div id="kashmir" class="category-content">
      <h3>Kashmir Solidarity Day</h3>
      <p>Activities, messages and coverage related to Kashmir Solidarity Day.</p>
    </div>

    <div id="misc" class="category-content">
      <h3>Miscellaneous</h3>
      <p>Other updates, messages, and announcements.</p>
    </div>
  </section>
</div>

<script>
  function showContent(id) {
    const allSections = document.querySelectorAll('.category-content');
    allSections.forEach(section => section.classList.remove('active'));
    document.getElementById(id).classList.add('active');
  }
</script>






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
