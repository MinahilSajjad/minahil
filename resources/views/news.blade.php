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
  <h1>News & Update</h1>
  <div class="breadcrumb">
    <a href="#">Bank of Azad Jammu & Kashmir</a>
    <span>&gt;</span>
    <span>News & Update</span>
  </div>
</div>
<style>
  .news-section {
    padding: 60px 0;
    background-color: #f9f9f9;
  }

  .news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
  }

  .news-card {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    transition: transform 0.2s ease;
  }

  .news-card:hover {
    transform: translateY(-5px);
  }

  .news-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }

  .news-content {
    padding: 20px;
  }

  .news-meta {
    font-size: 13px;
    color: #888;
    margin-bottom: 10px;
  }

  .news-title {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 12px;
    color: #2e2e2e;
  }

  .news-title a {
    color: #ff6600;
    text-decoration: none;
  }

  .news-summary {
    font-size: 14px;
    color: #444;
    margin-bottom: 15px;
  }

  .read-more-btn {
    display: inline-block;
    background-color: #00a859;
    color: #fff;
    padding: 8px 16px;
    border-radius: 6px;
    font-size: 13px;
    text-decoration: none;
    transition: background 0.3s ease;
  }

  .read-more-btn:hover {
    background-color: #00894c;
  }

  @media screen and (max-width: 480px) {
    .news-card img {
      height: 180px;
    }
  }
</style>

<section class="news-section">
  <div class="container">
    <div class="news-grid">

      <!-- News Card 1 -->
      <div class="news-card">
        <img src="https://demo.bankajk.com/wp-content/uploads/2024/11/ceremony.jpg" alt="Pulmanda Ceremony">
        <div class="news-content">
          <div class="news-meta">November 9, 2024 — By BAJK</div>
          <h3 class="news-title">
            <a href="https://demo.bankajk.com/2024/11/09/bajk-celebrates-18th-anniversary-at-pulmanda-branch-khari-sharif/">
              BAJK Celebrates 18th Anniversary – Pulmanda, Khari Sharif
            </a>
          </h3>
          <p class="news-summary">
            کھڑی شریف پلمنڈا برانچ میں 18ویں سالگرہ کی تقریب، مقامی افسران اور عوامی نمائندوں کی شرکت۔
          </p>
          <a class="read-more-btn" href="https://demo.bankajk.com/2024/11/09/bajk-celebrates-18th-anniversary-at-pulmanda-branch-khari-sharif/">Read More</a>
        </div>
      </div>

      <!-- News Card 2 -->
      <div class="news-card">
        <img src="https://demo.bankajk.com/wp-content/uploads/2024/11/features.jpg" alt="Rawalakot Cake Cutting">
        <div class="news-content">
          <div class="news-meta">November 9, 2024 — By BAJK</div>
          <h3 class="news-title">
            <a href="https://demo.bankajk.com/2024/11/09/bajk-celebrates-18th-anniversary-with-cake-cutting-ceremony-in-rawalakot/">
              Rawalakot Branch Hosts Cake-Cutting Ceremony
            </a>
          </h3>
          <p class="news-summary">
            راولا کوٹ میں بینک کی سالگرہ کی تقریب، کمشنر اور اعلیٰ افسران کی شرکت، ماحول خوشگوار رہا۔
          </p>
          <a class="read-more-btn" href="https://demo.bankajk.com/2024/11/09/bajk-celebrates-18th-anniversary-with-cake-cutting-ceremony-in-rawalakot/">Read More</a>
        </div>
      </div>

      <!-- News Card 3 -->
      <div class="news-card">
        <img src="https://demo.bankajk.com/wp-content/uploads/2023/10/23082023-1-copy.jpg" alt="PSC Application Service">
        <div class="news-content">
          <div class="news-meta">November 4, 2024 — By BAJK</div>
          <h3 class="news-title">
            <a href="https://demo.bankajk.com/2024/11/04/bank-of-ajk-authorized-service-for-ajk-public-service-commission-psc-applications/">
              BAJK Now Accepting AJKPSC Applications
            </a>
          </h3>
          <p class="news-summary">
            عوام کی سہولت کے لیے پبلک سروس کمیشن کی درخواستوں کی فیس بینک آف AJK کے ذریعے وصول کی جائے گی۔
          </p>
          <a class="read-more-btn" href="https://demo.bankajk.com/2024/11/04/bank-of-ajk-authorized-service-for-ajk-public-service-commission-psc-applications/">Read More</a>
        </div>
      </div>

      <!-- Add more .news-card blocks below as needed -->
      <div class="news-card">
    <img src="https://demo.bankajk.com/wp-content/uploads/2024/11/ceremony.jpg" alt="Pulmanda Ceremony">
    <div class="news-content">
      <div class="news-meta">November 9, 2024 — By BAJK</div>
      <h3 class="news-title">
        <a href="#">BAJK Celebrates 18th Anniversary – Pulmanda</a>
      </h3>
      <p class="news-summary">
        کھڑی شریف پلمنڈا برانچ میں 18ویں سالگرہ کی تقریب، مقامی افسران اور عوامی نمائندوں کی شرکت۔
      </p>
      <a class="read-more-btn" href="#">Read More</a>
    </div>
  </div>


  <div class="news-card">
      <a href="https://demo.bankajk.com/2025/04/10/recognizing-excellence-bajk-awards-outstanding-employees-for-exceptional-performance/">
        <div class="news-thumb">
          <img src="https://demo.bankajk.com/wp-content/uploads/2025/05/feature-1-768x511.jpg" alt="BAJK Awards Outstanding Employees" />
        </div>
      </a>
      <div class="news-content">
        <div class="news-meta">
          <span><i class="fa-regular fa-user"></i> BAJK</span>
          <span><i class="fa-sharp fa-regular fa-calendar-days"></i> April 10, 2025</span>
          <span>
            <a href="https://demo.bankajk.com/2025/04/10/recognizing-excellence-bajk-awards-outstanding-employees-for-exceptional-performance/#respond"
              ><i class="fa-regular fa-comments"></i> No Comments</a
            >
          </span>
        </div>
        <h3 class="news-title">
          <a href="https://demo.bankajk.com/2025/04/10/recognizing-excellence-bajk-awards-outstanding-employees-for-exceptional-performance/">
            Recognizing Excellence: BAJK Awards Outstanding Employees for Exceptional Performance
          </a>
        </h3>
        <p class="news-summary">
          Muzaffarabad Bank of Azad Jammu and Kashmir Honors Top Performers in Prestigious Ceremony** In a ceremony marked by celebration and recognition, the Bank of Azad Jammu and Kashmir (BAJK) honored its outstanding employees for their exceptional contributions to the institution’s success...
        </p>
        <a
          class="read-more-btn"
          href="https://demo.bankajk.com/2025/04/10/recognizing-excellence-bajk-awards-outstanding-employees-for-exceptional-performance/"
          ><i class="fa-solid fa-arrow-right"></i> Read More</a
        >
      </div>
    </div>

    <!-- Card 2 -->
    <div class="news-card">
      <a href="https://demo.bankajk.com/2025/04/08/barrister-sultan-mehmood-assures-maximum-facilitation-for-bank-of-ajks-institutional-growth/">
        <div class="news-thumb">
          <img src="https://demo.bankajk.com/wp-content/uploads/2025/05/feature-300x244.jpg" alt="Barrister Sultan Mehmood" />
        </div>
      </a>
      <div class="news-content">
        <div class="news-meta">
          <span><i class="fa-regular fa-user"></i> BAJK</span>
          <span><i class="fa-sharp fa-regular fa-calendar-days"></i> April 8, 2025</span>
          <span>
            <a href="https://demo.bankajk.com/2025/04/08/barrister-sultan-mehmood-assures-maximum-facilitation-for-bank-of-ajks-institutional-growth/#respond"
              ><i class="fa-regular fa-comments"></i> No Comments</a
            >
          </span>
        </div>
        <h3 class="news-title">
          <a href="https://demo.bankajk.com/2025/04/08/barrister-sultan-mehmood-assures-maximum-facilitation-for-bank-of-ajks-institutional-growth/">
            Barrister Sultan Mehmood Assures Maximum Facilitation for Bank of AJK’s Institutional Growth
          </a>
        </h3>
        <p class="news-summary">
          آزاد حکومت ریاست جموں وکشمیر کے وزیر خزانہ و امداد باہمی اوربینک آف آزاد جموں وکشمیر کے چیئرمین جناب خان عبدالماجد خان کی زیرصدارت بینک کے بورڈ آف ڈائریکٹرز کا88واں اجلاس منعقد ہوا۔پیر کے روزبینک کے ہیڈ آفس میں منعقدہ اجلاس میں صدر و چیف ایگزیکٹو آفیسر جناب شاہد شہزاد میر، ڈائریکٹرز صاحبان، سیکریٹری فنانس حکومت...
        </p>
        <a
          class="read-more-btn"
          href="https://demo.bankajk.com/2025/04/08/barrister-sultan-mehmood-assures-maximum-facilitation-for-bank-of-ajks-institutional-growth/"
          ><i class="fa-solid fa-arrow-right"></i> Read More</a
        >
      </div>
    </div>

    





    </div>
  </div>
</section>




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
