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
  <h1> Board of Directors (BOD)</h1>
  <div class="breadcrumb">
    <a href="#">Bank of Azad Jammu & Kashmir</a>
    <span>&gt;</span>
    <span> Board of Directors(BOD)</span>
  </div>
</div>
<!-- Board Section -->

  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Board of Directors</title>
  <style>
    .team-section {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      max-width: 900px;
      margin: 40px auto;
      padding: 20px;
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
    }

    .team-section h2 {
      text-align: center;
      font-size: 28px;
      margin-bottom: 30px;
      color: #2e7d32;
      border-bottom: 2px solid #ff9800;
      display: inline-block;
      padding-bottom: 6px;
    }

    .tab-container {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      justify-content: center;
      margin-bottom: 20px;
    }

    .tab-button {
      background: linear-gradient(135deg, #43a047, #ff9800);
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 30px;
      font-size: 14px;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    .tab-button:hover {
      background: linear-gradient(135deg, #2e7d32, #ef6c00);
      transform: scale(1.05);
    }

    .tab-details {
      display: none;
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.04);
      transition: all 0.3s ease-in-out;
      animation: fadeIn 0.4s ease-in-out;
    }

    .tab-details.active {
      display: block;
    }

    .tab-details img {
      float: left;
      margin-right: 20px;
      border-radius: 8px;
      width: 120px;
      height: auto;
    }

    .tab-details h3 {
      margin-top: 0;
      color: #2e7d32;
      font-size: 18px;
    }

    .tab-details p {
      color: #444;
      font-size: 14px;
      line-height: 1.6;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(15px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media screen and (max-width: 768px) {
      .tab-button {
        width: 100%;
        text-align: center;
      }

      .tab-details img {
        float: none;
        display: block;
        margin: 0 auto 15px;
      }

      .tab-details {
        text-align: center;
      }
    }
  </style>
</head>
<body>

<section class="team-section">
  <h2>Board of Directors</h2>

  <!-- Tab Buttons -->
  <div class="tab-container">
    <button class="tab-button" onclick="toggleDetails('abdulMajid')">Mr. Abdul Majid Khan</button>
    <button class="tab-button" onclick="toggleDetails('shahidMir')">Mr. Shahid Shahzad Mir</button>
    <button class="tab-button" onclick="toggleDetails('islamZaib')">Mr. Islam Zaib</button>
    <button class="tab-button" onclick="toggleDetails('muhammadSajjad')">Mr. Muhammad Sajjad</button>
  </div>

  <!-- Abdul Majid -->
  <div id="abdulMajid" class="tab-details active">
    <img src="https://bankajk.com/bod/images/chairman.jpg" alt="Chairman">
    <h3>Mr. Abdul Majid Khan<br>Minister Finance & Cooperatives / Chairman BAJK</h3>
    <p>Khan Abdul Majid Khan is currently Minister for Finance & Cooperatives of the State of AJ&K and is also Chairman Board of Directors of Bank of Azad Jammu and Kashmir. Mr. Khan belongs to a respectable and reputable family having deep political links to Pakistan/Kashmir politics since time tracing back to independence days...</p>
  </div>

  <!-- Shahid Shahzad Mir -->
  <div id="shahidMir" class="tab-details">
    <img src="https://demo.bankajk.com/wp-content/uploads/2024/01/profile-pic-2-150x150.png" alt="President/CEO">
    <h3>Mr. Shahid Shahzad Mir<br>President/CEO</h3>
    <p>Mr. Shahid Shehzad Mir is a seasoned banking professional with an illustrious career spanning several key leadership roles within the financial sector. Currently serving as the Executive Vice President and Chief Financial Officer (CFO) of The Bank of Azad Jammu & Kashmir...</p>
  </div>

  <!-- Islam Zaib -->
  <div id="islamZaib" class="tab-details">
    <img src="https://bankajk.com/bod/images/mr%20islam%20zaib.png" alt="Secretary Finance">
    <h3>Mr. Islam Zaib<br>Secretary Finance Government of AJK, Director</h3>
    <p>Mr. Islam Zaib, currently posted as Secretary Finance Government of AJK, is a Federal Civil Servant from Pakistan Administrative Service (PAS). He has over twenty-two years of work experience at different key positions in the Federal Government, the Provincial Government of Khyber Pakhtunkhwa (KP)...</p>
  </div>

  <!-- Muhammad Sajjad -->
  <div id="muhammadSajjad" class="tab-details">
    <img src="https://bankajk.com/bod/images/Picture%201.jpg" alt="Secretary Law">
    <h3>Mr. Muhammad Sajjad<br>Secretary Law Justice, Parliamentary Affairs & Human Rights Dept</h3>
    <p>Mr. Muhammad Sajjad started his Career as Civil Judge in 2006 with a passion for fair and efficient dispute resolution, proficient for applying the law to uphold justice. In 2021, promoted to the esteemed position of District & Sessions Judge, unveil his experience and expertise in the Legal Domain...</p>
  </div>
</section>

<!-- Toggle JS -->
<script>
  function toggleDetails(id) {
    document.querySelectorAll('.tab-details').forEach(div => {
      div.classList.remove('active');
    });
    document.getElementById(id).classList.add('active');
  }
</script>

</body>
</html>



<!-- Footer -->
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
