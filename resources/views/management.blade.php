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
  <h1> Management</h1>
  <div class="breadcrumb">
    <a href="#">Bank of Azad Jammu & Kashmir</a>
    <span>&gt;</span>
    <span> management </span>
  </div>
</div>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Management Team</title>
 <style>
  .team-section {
    font-family: Arial, sans-serif;
    background: #f9f9f9;
    margin: 20px 0 60px; /* leave space for footer */
  }

  .team-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    gap: 24px;
    justify-content: center;
  }

  .team-card {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(46, 125, 50, 0.3); /* green shadow */
    overflow: hidden;
    flex: 1 1 calc(33.333% - 24px);
    max-width: calc(33.333% - 24px);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
  }

  .team-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 20px rgba(255, 152, 0, 0.5); /* orange shadow */
  }

  .team-card img {
    width: 100%;
    max-height: 220px;
    object-fit: contain;
    background: #f0f0f0;
    border-bottom: 5px solid #2e7d32;
    padding: 10px;
    box-sizing: border-box;
  }

  .card-content {
    padding: 16px 20px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: center;
  }

  .card-title {
    font-size: 20px;
    font-weight: 700;
    color: #2e7d32;
    margin: 14px 0 8px;
  }

  .card-subtitle {
    font-size: 15px;
    color: #ef6c00;
    margin-bottom: 18px;
    min-height: 44px;
  }

  .social-icons {
    display: flex;
    justify-content: center;
    gap: 18px;
  }

  .social-icons a {
    font-size: 22px;
    color: #2e7d32;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .social-icons a:hover {
    color: #ef6c00;
  }

  /* Responsive */
  @media (max-width: 900px) {
    .team-card {
      flex: 1 1 calc(50% - 24px);
      max-width: calc(50% - 24px);
    }
  }

  @media (max-width: 600px) {
    .team-card {
      flex: 1 1 100%;
      max-width: 100%;
    }
  }
</style>

<div class="team-section">
  <div class="team-container">

    <div class="team-card">
      <img src="https://demo.bankajk.com/wp-content/uploads/2024/01/sahidmir.jpg" alt="Person 1" />
      <div class="card-content">
        <h2 class="card-title">Mr. Shahid Shahzad Mir</h2>
        <p class="card-subtitle">President/CEO and CFO</p>
        <div class="social-icons">
          <a href="#">🌐</a><a href="#">🐦</a><a href="#">🔗</a>
        </div>
      </div>
    </div>

    <div class="team-card">
      <img src="https://demo.bankajk.com/wp-content/uploads/2024/01/atm.jpg" alt="Person 2" />
      <div class="card-content">
        <h2 class="card-title">Mr. Ahtasham Malik</h2>
        <p class="card-subtitle">Divisional Head Operations</p>
        <div class="social-icons">
          <a href="#">🌐</a><a href="#">🐦</a><a href="#">🔗</a>
        </div>
      </div>
    </div>

    <div class="team-card">
      <img src="https://demo.bankajk.com/wp-content/uploads/2024/01/tg.jpg" alt="Person 3" />
      <div class="card-content">
        <h2 class="card-title">Syed Tashfeen Gilani</h2>
        <p class="card-subtitle">Divisional Head Treasury Division &amp; Chief Compliance Officer</p>
        <div class="social-icons">
          <a href="#">🌐</a><a href="#">🐦</a><a href="#">🔗</a>
        </div>
      </div>
    </div>

    <div class="team-card">
      <img src="https://demo.bankajk.com/wp-content/uploads/2024/01/raheela.jpg" alt="Person 4" />
      <div class="card-content">
        <h2 class="card-title">Ms. Rahila Javed</h2>
        <p class="card-subtitle">Divisional Head Human Resource Management Division</p>
        <div class="social-icons">
          <a href="#">🌐</a><a href="#">🐦</a><a href="#">🔗</a>
        </div>
      </div>
    </div>

    <div class="team-card">
      <img src="https://demo.bankajk.com/wp-content/uploads/2024/01/raja-mustafa.png" alt="Person 5" />
      <div class="card-content">
        <h2 class="card-title">Mr. Raja Ghulam Mustafa</h2>
        <p class="card-subtitle">Divisional Head Commercial &amp;</p>
        <div class="social-icons">
          <a href="#">🌐</a><a href="#">🐦</a><a href="#">🔗</a>
        </div>
      </div>
    </div>

    <div class="team-card">
      <img src="https://demo.bankajk.com/wp-content/uploads/2024/01/akt.jpg" alt="Person 6" />
      <div class="card-content">
        <h2 class="card-title">Mr. Akhter Hussain</h2>
        <p class="card-subtitle">Divisional Head Credit</p>
        <div class="social-icons">
          <a href="#">🌐</a><a href="#">🐦</a><a href="#">🔗</a>
        </div>
      </div>
    </div>

    <div class="team-card">
      <img src="https://pinnacle.works/wp-content/uploads/2022/06/dummy-image.jpg" alt="Person 7" />
      <div class="card-content">
        <h2 class="card-title">Mr. Amjad Mahmood Gilani</h2>
        <p class="card-subtitle">Divisional Head Risk Management Division</p>
        <div class="social-icons">
          <a href="#">🌐</a><a href="#">🐦</a><a href="#">🔗</a>
        </div>
      </div>
    </div>

    <div class="team-card">
      <img src="https://pinnacle.works/wp-content/uploads/2022/06/dummy-image.jpg" alt="Person 8" />
      <div class="card-content">
        <h2 class="card-title">Mr. Imtiaz Shaheen</h2>
        <p class="card-subtitle">Divisional Head Credit Management Division</p>
        <div class="social-icons">
          <a href="#">🌐</a><a href="#">🐦</a><a href="#">🔗</a>
        </div>
      </div>
    </div>

    <div class="team-card">
      <img src="https://demo.bankajk.com/wp-content/uploads/2024/01/gulzar-a-rao.jpg" alt="Person 9" />
      <div class="card-content">
        <h2 class="card-title">Mr. Gulzar A. Rao</h2>
        <p class="card-subtitle">Divisional Head, IT Division (CIO)</p>
        <div class="social-icons">
          <a href="#">🌐</a><a href="#">🐦</a><a href="#">🔗</a>
        </div>
      </div>
    </div>

  </div>
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
