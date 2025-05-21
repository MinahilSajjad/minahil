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
      <img src="https://i.pinimg.com/736x/f2/83/8d/f2838d7d84891e39ecb0e3f0c47faa20.jpg" alt="Logo" class="me-2"
        style="height: 30px;">
      Head Office, Bank Square, Chattar Domel, Muzaffarabad, AJ&K — Mon - Fri: 9 am - 8 pm
    </a>
  </div>


  {{-- Header --}}
  <nav class="navbar navbar-expand-lg navbar-light custom-header px-3">
    <a class="navbar-brand fw-bold text-white" href="#">
      <img src="https://demo.bankajk.com/wp-content/uploads/2023/10/logomain.png" alt="Logo" class="me-2"
        style="height: 50px;">
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
            <a class="nav-link dropdown-toggle text-white px-2" href="#" id="aboutUsDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false"></a>
          </div>
          <ul class="dropdown-menu" aria-labelledby="aboutUsDropdown">
            <li><a class="dropdown-item" href="{{ route('board') }}"><i class="bi bi-people-fill me-1"></i> Board of
                Director</a></li>
            <li><a class="dropdown-item" href="{{ route('management') }}"><i class="bi bi-person-gear me-1"></i>
                Management</a></li>
          </ul>
        </li>

        <!-- Products -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown"><i
              class="bi bi-box-seam me-1"></i> Products</a>
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
          <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown"><i
              class="bi bi-wrench-adjustable-circle me-1"></i> Services</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('serv') }}">Services</a></li>
            <li><a class="dropdown-item" href="{{ route('home_remittance') }}">Home Remittance</a></li>
          </ul>
        </li>

        <!-- Financial -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown"><i
              class="bi bi-bar-chart-fill me-1"></i> Financial</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('statement') }}">Statement</a></li>
            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#">Annual Report</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item"
                    href="https://bankajk.com/downloads/financials/BAJK%20Annual%20Report%202023%20final.pdf">Annual
                    Report 2023</a></li>
                <li><a class="dropdown-item" href="https://bankajk.com/downloads/annual%20report%202022.pdf">Annual
                    Report 2022</a></li>
                <li><a class="dropdown-item" href="https://bankajk.com/downloads/Annual%20Report%202021.pdf">Annual
                    Report 2021</a></li>
                <li><a class="dropdown-item" href="https://bankajk.com/downloads/annual_report_2020.pdf">Annual Report
                    2020</a></li>
                <li><a class="dropdown-item" href="https://bankajk.com/downloads/annual_report_2019.pdf">Annual Report
                    2019</a></li>
                <li><a class="dropdown-item"
                    href="https://bankajk.com/downloads/Annual%20Report%202018-26.6.2019-final.pdf">Annual Report
                    2018</a></li>
                <li><a class="dropdown-item" href="https://bankajk.com/downloads/annual_report_2017.pdf">Annual Report
                    2017</a></li>
                <li><a class="dropdown-item" href="https://bankajk.com/downloads/annual_report_2016.pdf">Annual Report
                    2016</a></li>
              </ul>
            </li>
            <li><a class="dropdown-item"
                href="https://view.officeapps.live.com/op/view.aspx?src=https%3A%2F%2Fwww.bankajk.com%2Fdownloads%2FFinancial%2520HL%252030.6.22.pptx&wdOrigin=BROWSELINK">Financial
                Highlights</a></li>
          </ul>
        </li>

        <!-- Rates -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown"><i
              class="bi bi-percent me-1"></i> Rates & Charges</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://bankajk.com/downloads/soc/SOC%20Jul-Dec%2024.pdf">Schedule of
                Charges</a></li>
            <li><a class="dropdown-item" href="{{ route('Profit_rates') }}">Profit Rates</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('contact') }}"><i class="bi bi-telephone-fill me-1"></i>
            Contact</a>
        </li>
      </ul>

      <span class="navbar-text text-white fw-bold">
        <i class="bi bi-telephone-inbound-fill me-1"></i> Call: +92-5822-924244
      </span>
    </div>
  </nav>


  {{-- //pagecontent --}}
  <style>
    .breadcrumb-section {
      background-color: #044112;
      /* Green background */
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
    <h1> Agriculture Finances </h1>
    <div class="breadcrumb">
      <a href="#">Bank of Azad Jammu & Kashmir</a>
      <span>&gt;</span>
      <span> Agriculture Finances</span>
    </div>
  </div>
  <style>
    /* Layout */
    .elementor-tabs {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .elementor-tabs-wrapper {
      width: 240px;
      display: flex;
      flex-direction: column;
      background-color: #f8f9fa;
      border-right: 2px solid #e0e0e0;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.05);
    }

    .elementor-tab-title {
      padding: 14px 18px;
      cursor: pointer;
      background-color: #ffffff;
      border-bottom: 1px solid #e6e6e6;
      font-size: 15px;
      font-weight: 500;
      color: #444;
      transition: all 0.3s ease;
    }

    .elementor-tab-title:hover {
      background-color: #e6f4ea;
      color: #2e7d32;
    }

    .elementor-tab-title.active {
      background: linear-gradient(to right, #43a047, #ff9800);
      color: white;
      font-weight: 600;
    }

    /* Content */
    .elementor-tabs-content-wrapper {
      flex: 1;
      background-color: #fff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.04);
    }

    .elementor-tab-content {
      display: none;
      animation: fadeIn 0.4s ease-in-out;
    }

    .elementor-tab-content.active {
      display: block;
    }

    /* Table */
    table.responsive.table,
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
      font-size: 14px;
    }

    table th,
    table td {
      border: 1px solid #ddd;
      padding: 10px 12px;
      text-align: left;
    }

    table th {
      background-color: #f4f4f4;
      color: #2e7d32;
      font-weight: 600;
    }

    /* Responsive */
    @media screen and (max-width: 768px) {
      .elementor-tabs {
        flex-direction: column;
      }

      .elementor-tabs-wrapper {
        width: 100%;
        flex-direction: row;
        overflow-x: auto;
        border-right: none;
        border-bottom: 2px solid #e0e0e0;
      }

      .elementor-tab-title {
        flex: 1;
        text-align: center;
        border-right: 1px solid #e0e0e0;
        border-bottom: none;
        white-space: nowrap;
      }

      .elementor-tabs-content-wrapper {
        padding: 16px;
      }
    }

    /* Fade animation */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>

  <div class="elementor-tabs">
    <div class="elementor-tabs-wrapper" role="tablist">
      <div class="elementor-tab-title active" data-tab="1" role="tab">Running Finance</div>
      <div class="elementor-tab-title" data-tab="2" role="tab">Auto Finance</div>
      <div class="elementor-tab-title" data-tab="3" role="tab">Demand Finance</div>
      <div class="elementor-tab-title" data-tab="4" role="tab">Construction Finance</div>
      <div class="elementor-tab-title" data-tab="5" role="tab">Tourism Promotion Finance</div>
      <div class="elementor-tab-title" data-tab="6" role="tab">Small Business Trade Finance</div>
      <div class="elementor-tab-title" data-tab="7" role="tab">Health Care Services Finance</div>
    </div>

    <div class="elementor-tabs-content-wrapper">
      <div class="elementor-tab-content active" data-tab="1">
        <table>
          <tr>
            <td>Purpose</td>
            <td>Purchase of stock and fulfilling of operational expenses of your business.</td>
          </tr>
          <tr>
            <td>Eligibility</td>
            <td>Account holder, Reasonable turnover, Existing/planned business.</td>
          </tr>
          <tr>
            <td>Loan Limit</td>
            <td>Subject to business worth & SBP regulations.</td>
          </tr>
          <tr>
            <td>Tenure</td>
            <td>Max 12 months (renewable).</td>
          </tr>
          <tr>
            <td>Repayment</td>
            <td>Lump sum principal, markup monthly/quarterly.</td>
          </tr>
          <tr>
            <td>Primary Security</td>
            <td>Hypothecation of stock.</td>
          </tr>
          <tr>
            <td>Secondary Security</td>
            <td>Mortgage, lien on deposits or gold pledge.</td>
          </tr>
          <tr>
            <td>Insurance</td>
            <td>As per Bank’s policy.</td>
          </tr>
        </table>
      </div>

      <div class="elementor-tab-content" data-tab="2">
        <table>
          <tr>
            <td>Purpose</td>
            <td>Commercial vehicle/transportation needs.</td>
          </tr>
          <tr>
            <td>Eligibility</td>
            <td>Businesses, companies, govt institutions, AJK organizations.</td>
          </tr>
          <tr>
            <td>Tenure</td>
            <td>Max 5 years</td>
          </tr>
          <tr>
            <td>Repayment</td>
            <td>Monthly Installments</td>
          </tr>
          <tr>
            <td>Primary Security</td>
            <td>Joint registration under HPA.</td>
          </tr>
          <tr>
            <td>Secondary Security</td>
            <td>As per bank policy.</td>
          </tr>
          <tr>
            <td>Insurance</td>
            <td>Comprehensive insurance.</td>
          </tr>
        </table>
      </div>

      <div class="elementor-tab-content" data-tab="3">
        <table>
          <tr>
            <td>Purpose</td>
            <td>Purchase of machinery/assets for business/expansion.</td>
          </tr>
          <tr>
            <td>Eligibility</td>
            <td>Account holder, turnover, business/expansion.</td>
          </tr>
          <tr>
            <td>Loan Limit</td>
            <td>As per business worth and equity ratio.</td>
          </tr>
          <tr>
            <td>Tenure</td>
            <td>Max 5 years</td>
          </tr>
          <tr>
            <td>Repayment</td>
            <td>Monthly Installments</td>
          </tr>
          <tr>
            <td>DSR</td>
            <td>60:40</td>
          </tr>
          <tr>
            <td>Primary Security</td>
            <td>Hypothecation of stock/machinery.</td>
          </tr>
          <tr>
            <td>Secondary Security</td>
            <td>Mortgage, lien, or gold pledge.</td>
          </tr>
          <tr>
            <td>Insurance</td>
            <td>Stock & property insured.</td>
          </tr>
        </table>
      </div>

      <div class="elementor-tab-content" data-tab="4">
        <table>
          <tr>
            <td>Purpose</td>
            <td>Loan for construction/renovation/purchase of commercial property.</td>
          </tr>
          <tr>
            <td>Eligibility</td>
            <td>Account holder, equity proof, approved building plan.</td>
          </tr>
          <tr>
            <td>Loan Limit</td>
            <td>Based on total project cost.</td>
          </tr>
          <tr>
            <td>Tenure</td>
            <td>Up to 5 years.</td>
          </tr>
          <tr>
            <td>Repayment</td>
            <td>Monthly Installments</td>
          </tr>
          <tr>
            <td>Debt Security Ratio</td>
            <td>60:40</td>
          </tr>
          <tr>
            <td>Security</td>
            <td>Mortgage or lien or gold pledge.</td>
          </tr>
          <tr>
            <td>Insurance</td>
            <td>Property insurance per policy.</td>
          </tr>
        </table>
      </div>

      <div class="elementor-tab-content" data-tab="5">
        <table>
          <tr>
            <td>Purpose</td>
            <td>Tourism infrastructure: huts, guest houses, rooms.</td>
          </tr>
          <tr>
            <td>Eligibility</td>
            <td>Proper location, government permission, owner management preferred.</td>
          </tr>
          <tr>
            <td>Loan Limit</td>
            <td>Up to Rs. 5 million</td>
          </tr>
          <tr>
            <td>Tenure</td>
            <td>Up to 5 years</td>
          </tr>
          <tr>
            <td>Repayment</td>
            <td>Monthly with 3 months grace period</td>
          </tr>
          <tr>
            <td>Equity Contribution</td>
            <td>20%</td>
          </tr>
          <tr>
            <td>Primary Security</td>
            <td>Hypothecation of assets</td>
          </tr>
          <tr>
            <td>Secondary Security</td>
            <td>Mortgage/lien/gold</td>
          </tr>
          <tr>
            <td>Insurance</td>
            <td>As per Bank Policy</td>
          </tr>
        </table>
      </div>

      <div class="elementor-tab-content" data-tab="6">
        <table>
          <tr>
            <td>Purpose</td>
            <td>Working capital for businessmen/traders.</td>
          </tr>
          <tr>
            <td>Eligibility</td>
            <td>Min 2 yrs business, BAJK account holder, AJK resident, no defaults.</td>
          </tr>
          <tr>
            <td>Loan Limit</td>
            <td>Up to Rs. 500,000</td>
          </tr>
          <tr>
            <td>Tenure</td>
            <td>12 months renewable</td>
          </tr>
          <tr>
            <td>Repayment</td>
            <td>Principal lump sum, markup monthly/quarterly</td>
          </tr>
          <tr>
            <td>Primary Security</td>
            <td>Hypothecation of stock</td>
          </tr>
          <tr>
            <td>Secondary Security</td>
            <td>Two guarantees or other acceptable security</td>
          </tr>
          <tr>
            <td>Insurance</td>
            <td>Per bank policy</td>
          </tr>
        </table>
      </div>

      <div class="elementor-tab-content" data-tab="7">
        <table>
          <tr>
            <td>Purpose</td>
            <td>Setup/expansion/renovation of health facilities.</td>
          </tr>
          <tr>
            <td>Eligibility</td>
            <td>Registered PMDC medical practitioners with 3+ years experience.</td>
          </tr>
          <tr>
            <td>Loan Limit</td>
            <td>Rural: Rs. 5M (DF), Rs. 1M (RF) | Urban: Rs. 10M (DF), Rs. 2M (RF)</td>
          </tr>
          <tr>
            <td>Tenure</td>
            <td>1 year for RF, 5 years for DF</td>
          </tr>
          <tr>
            <td>Borrower’s Equity</td>
            <td>25% for DF</td>
          </tr>
          <tr>
            <td>DSR</td>
            <td>50%</td>
          </tr>
          <tr>
            <td>Primary Security</td>
            <td>Hypothecation of stock (25% margin)</td>
          </tr>
          <tr>
            <td>Secondary Security</td>
            <td>Mortgage/lien/gold</td>
          </tr>
          <tr>
            <td>Insurance</td>
            <td>Insurance of assets as per bank policy</td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  <script>
    document.querySelectorAll('.elementor-tab-title').forEach(tab => {
  tab.addEventListener('click', function () {
    const selectedTab = this.getAttribute('data-tab');

    document.querySelectorAll('.elementor-tab-title').forEach(t => t.classList.remove('active'));
    document.querySelectorAll('.elementor-tab-content').forEach(c => c.classList.remove('active'));

    this.classList.add('active');
    document.querySelector(`.elementor-tab-content[data-tab="${selectedTab}"]`).classList.add('active');
  });
});
  </script>




  {{-- Footer --}}
  <footer class="pt-5 pb-3" style="background-color: #114401; color: white;">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <img src="https://demo.bankajk.com/wp-content/uploads/2023/10/logomain.png" alt="Bank of AJK Logo"
            style="max-width: 250px; height: auto%; margin-bottom: 10px;" />
          <h5 class="fw-bold">About Bank of AJK</h5>
          <p>
            A growing Bank in Azad Jammu & Kashmir with 87 branches, mobilizing savings,
            promoting economic development, and offering tailored banking solutions for equal access to resources.
          </p>
        </div>


        <div class="col-md-2 mb-4">
          <h5 class="fw-bold">Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="{{ route('aboutus') }}" class="text-white text-decoration-none">About Us</a></li>
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
            <li class="mt-2"><strong>57th Board of directors meeting of Azad Kashmir</strong><br><small>July 04,
                2022</small></li>
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

      <div
        class="border-top border-white pt-3 d-flex flex-column flex-md-row justify-content-between align-items-center">
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