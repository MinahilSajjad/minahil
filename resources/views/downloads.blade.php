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
  <h1> Downloads</h1>
  <div class="breadcrumb">
    <a href="#">Bank of Azad Jammu & Kashmir</a>
    <span>&gt;</span>
    <span> Downloads</span>
  </div>
</div>
  <style>
  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: #f4f4f4;
    color: #333;
  }

  .main-container {
    width: 100%;
    max-width: 1200px; /* Adjust based on your design */
    margin: 40px auto;
    padding: 20px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
    border-left: 5px solid #28a745;
    box-sizing: border-box;
  }

  .notice-wrapper {
    max-height: 500px;
    overflow-y: auto;
    padding-right: 10px;
    width: 100%;
    box-sizing: border-box;
  }

  .notice-wrapper ul {
    padding-left: 20px;
    margin: 0;
  }

  .notice-wrapper li {
    margin-bottom: 10px;
    font-size: 15px;
    line-height: 1.6;
    word-wrap: break-word;
  }

  /* Scrollbar for better UX */
  .notice-wrapper::-webkit-scrollbar {
    width: 6px;
  }

  .notice-wrapper::-webkit-scrollbar-thumb {
    background: #ccc;
    border-radius: 4px;
  }

  @media (max-width: 768px) {
    .main-container {
      margin: 20px;
      padding: 15px;
    }

    .notice-wrapper {
      max-height: 400px;
    }
  }
</style>

</head>
<body>

  <div class="main-container">
    <h1>Latest Notices & Tenders</h1>
    <div class="notice-wrapper" >
    <ul>
  <li><a href="#">Online Apply Here – Internship Opportunities 2024 (Date Extended)</a></li>
  <li><a href="#">Corrigendum – 11-06-2024</a></li>
  <li><a href="#">TENDER FOR SERVICES-HARING OF TESTING SERVICE FIRM – 05-06-2024</a></li>
  <li><a href="#">Renovation of Chichian Branch Mirpur AJ&K (Single Stage Two Envelope)</a></li>
  <li><a href="#">Renovation of Main Branch Rawalakot & Main Branch Farword Kahota</a></li>
  <li><a href="#">Tender for Services – 20-03-2024</a></li>
  <li><a href="#">CORRIGENDUM – Hiring of Consultants for Architectural Planning</a></li>
  <li><a href="#">CORRIGENDUM – Hiring of Consultants for Architectural Planning –</a></li>
  <li><a href="#">Hiring of Consultants for Architectural Planning/Design, Detailed</a></li>
  <li><a href="#">Internship Opportunities 2024 – 15-02-2024</a></li>
  <li><a href="#">CAREER OPPORTUNITIES – 15-02-2024</a></li>
  <li><a href="#">CORRIGENDUM – CAREER OPPORTUNITIES – 12-02-2024</a></li>
  <li><a href="#">Corrigendum – Hiring of security services – 22-01-2024</a></li>
  <li><a href="#">IPAD – Tender AJK BANK BAJK – 29-12-2023</a></li>
  <li><a href="#">SECURITY SERVICES – Tender AJK BANK BAJK – 29-12-2023</a></li>
  <li><a href="#">JANITORIAL SERVICES – Tender AJK BANK BAJK – 29-12-2023</a></li>
  <li><a href="#">INVITATION TO BIDS – 06-12-2023</a></li>
  <li><a href="#">Tender For Services Hiring Of Services Of 3rd Party Headhunting Officers</a></li>
  <li><a href="#">Tender Notice for Renovation of Islamic Banking Branch at Goira Bypass</a></li>
  <li><a href="#">Printing and Supply of Security Stationery – August 3rd 2023</a></li>
  <li><a href="#">Text Messages Broadcasting Services (SMS alerts for transactions)</a></li>
  <li><a href="#">Corrigendum – June 8th, 2023</a></li>
  <li><a href="#">Invitation to Bids – June 2nd, 2023</a></li>
  <li><a href="#">Invitation to Bids – May 22nd, 2023</a></li>
  <li><a href="#">Tender for Services – May 18th, 2023</a></li>
  <li><a href="#">Tender for Services – May 04th, 2023</a></li>
  <li><a href="#">Invitation to Bid – April 27th, 2023</a></li>
  <li><a href="#">Invitation to Bid – April 04th, 2023</a></li>
  <li><a href="#">Invitation to Bid – February 06th, 2023</a></li>
  <li><a href="#">Invitation to Bid – January 23rd, 2023</a></li>
  <li><a href="#">HISTORICAL BUSINESS RESULTS & BUSINESS STRATEGY – 2023 – January</a></li>
  <li><a href="#">Tender for Group Health Insurance – December 23rd, 2022</a></li>
  <li><a href="#">Re-Tender – December 16th, 2022</a></li>
  <li><a href="#">Tender for Services – December 9th, 2022</a></li>
  <li><a href="#">Re-Tender – November 16th, 2022</a></li>
  <li><a href="#">Purchase of 30 Desktop Computers – October 06th, 2022</a></li>
  <li><a href="#">Re-Tender Purchase of 25 Generators (5KVA Petrol) – October 06th</a></li>
  <li><a href="#">Tender Notice for Renovation – September 30th, 2022</a></li>
  <li><a href="#">Financial Highlights – September 16th, 2022</a></li>
  <li><a href="#">Invitation To Bid For Purchase of Software – September 14th, 2022</a></li>
  <li><a href="#">Career Opportunities – September 13th, 2022</a></li>
  <li><a href="#">Corrigendum – August 19th, 2022</a></li>
  <li><a href="#">Re-Tender – August 11th, 2022</a></li>
  <li><a href="#">Invitation to Bid For Purchase of Software – August 11th, 2022</a></li>
  <li><a href="#">Re-Tender Tender for Services – August 05th, 2022</a></li>
  <li><a href="#">Invitation to Bid For Purchase of Software – July 29th, 2022</a></li>
  <li><a href="#">Tender for Services – July 21st, 2022</a></li>
  <li><a href="#">Hiring of Services of Third Party Recruitment Firm – July 15th, 2022</a></li>
  <li><a href="#">Tender for Services – June 28th, 2022</a></li>
  <li><a href="#">Request For Expression Of Interest – June 27th, 2022</a></li>
  <li><a href="#">Renovation Of Two Halls At Dam Plaza Bank Road Muzaffarabad – June 27th</a></li>
  <li><a href="#">Request for Expression of Interest – June 15th, 2022</a></li>
  <li><a href="#">Invitation to Bids – June 10th, 2022</a></li>
  <li><a href="#">Evaluation Report -4, Bank of AJK</a></li>
  <li><a href="#">Evaluation Report -3, Bank of AJK</a></li>
  <li><a href="#">Evaluation Report -2, Bank of AJK</a></li>
  <li><a href="#">Evaluation Report -1, Bank of AJK</a></li>
  <li><a href="#">Addendum to Request for Proposal – Invitation to Bid for Core Banking Solution</a></li>
  <li><a href="#">Invitation to Bid for Core Banking Solution, Bank of AJK – 19-05-2022</a></li>
  <li><a href="#">Invitation to Bids, Bank of AJK – 13-04-2022</a></li>
  <li><a href="#">Invitation to Bids, Bank of AJK – 31-03-2022</a></li>
  <li><a href="#">Invitation to Bids, Bank of AJK – 04-03-2022</a></li>
  <li><a href="#">CORRIGENDUM, Bank of AJK, 24-02-2022</a></li>
  <li><a href="#">Cancelation of Bids, Bank of AJK – 14-02-2022</a></li>
  <li><a href="#">Tender for Services, Bank of AJK – 09-02-2022</a></li>
  <li><a href="#">Invitation to Bids, Bank of AJK – 10-01-2022</a></li>
  <li><a href="#">Evaluation Report – 04-01-2022</a></li>
  <li><a href="#">Invitation to Bids, Bank of AJK – 29-12-2021</a></li>
  <li><a href="#">Invitation to Bids, Bank of AJK – 21-12-2021</a></li>
  <li><a href="#">Invitation to Bids, Bank of AJK – 16-12-2021</a></li>
  <li><a href="#">Invitation to Bid for Core Banking Solution, Bank of AJK – 12-11-2021</a></li>
  <li><a href="#">Invitation to Bids Bank of AJK – 07-10-2021</a></li>
  <li><a href="#">Invitation to BIDS Bank of AJK – 20-05-2021</a></li>
  <li><a href="#">Evaluation Report – 25-02-2021</a></li>
  <li><a href="#">Corrigendum – 31-01-2021 | Bank of AJK</a></li>
  <li><a href="#">PRE-QUALIFICATION NOTICE FOR LIFE AND GENERAL INSURANCE COMPANIES</a></li>
  <li><a href="#">Invitation to BIDS Bank of AJK – 02-09-2020</a></li>
  <li><a href="#">Publication of Advertisement of Bank of AJK – 11-10-2019</a></li>
  <li><a href="#">Schedule of Charges</a></li>
  <li><a href="#">Account Opening Form</a></li>
</ul>

    </div>
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
