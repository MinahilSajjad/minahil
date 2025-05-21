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

  {{-- Page Content --}}
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
    <h1>Consumer Finances</h1>
    <div class="breadcrumb">
      <a href="#">Bank of Azad Jammu & Kashmir</a>
      <span>&gt;</span>
      <span>Consumer Finances</span>
    </div>
  </div>
 <style>
  .term-tab-wrapper {
    min-height: 300px; /* ensure space */
    margin-bottom: 40px; /* spacing for footer */
  }

  .term-tab-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin: 40px 0 20px;
  }

  .term-tab-buttons button {
    padding: 12px 20px;
    background-color: #f4f4f4;
    border: 2px solid #ffa500;
    color: #333;
    cursor: pointer;
    border-radius: 30px;
    transition: all 0.3s ease;
    font-weight: bold;
    font-size: 14px;
  }

  .term-tab-buttons button.active {
    background: linear-gradient(to right, #ffa500, #28a745);
    color: white;
    border-color: #28a745;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  }

  .term-tab-content {
    display: none;
    padding: 25px;
    border-radius: 12px;
    background: #ffffff;
    border-left: 5px solid #28a745;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
    animation: fadeIn 0.4s ease;
    font-size: 15px;
    line-height: 1.6;
    color: #333;
  }

  .term-tab-content.active {
    display: block;
  }

  .term-tab-content h1 {
    color: #ffa500;
    margin-top: 0;
  }

  .term-tab-content ul {
    padding-left: 20px;
    margin: 10px 0 0;
  }

  .term-tab-content ul li {
    margin-bottom: 8px;
  }

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
<div class="term-tab-wrapper">

  <div class="term-tab-buttons">
    <button class="active" data-tab="1">Advance Salary Scheme</button>
    <button data-tab="2">Car Finance</button>
    <button data-tab="3">Motorcycle Finance</button>
    <button data-tab="4">House Loan</button>
    <button data-tab="5">Personal Loan</button>
    <button data-tab="6">Student Loan</button>
    <button data-tab="7">Gold Loan</button>
    <button data-tab="8">Home Appliances Finance</button>
  </div>

  <div id="term-tab-content-1" class="term-tab-content active">

    <table
      style="width: 100%; border-collapse: collapse; margin-top: 20px; font-family: Arial, sans-serif; font-size: 15px; box-shadow: 0 0 15px rgba(0,0,0,0.05);">
      <tbody>
        <tr style="background-color: #f9f9f9;">
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Purpose</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">
            Don’t worry about your urgent Domestic/personal/family needs like education of kids, marriage of children
            and medical requirements. BAJK provides you a hassle-free finance against your salary.
          </td>
        </tr>
        <tr>
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Eligibility</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">
            Permanent employees of Government/semi Government Departments and Autonomous Corporations with at least 01
            year of service.
          </td>
        </tr>
        <tr style="background-color: #f9f9f9;">
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Age limit</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">18-60 years</td>
        </tr>
        <tr>
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Loan Limit</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">Maximum up to Rs.
            3,000,000</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Tenure</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">
            Maximum 48 months (The loan should end six months prior to date of retirement).
          </td>
        </tr>
        <tr>
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Repayment</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">Monthly
            Installments</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            DSR</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">40%</td>
        </tr>
        <tr>
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Primary Security</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">
            Hypothecation of House Hold Items up to loan amount.
          </td>
        </tr>
        <tr style="background-color: #f9f9f9;">
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Secondary Security</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">
            • 01 Personal Guarantee of Government Officer of BPS-11 or above. Guarantor should be in equivalent or above
            grade of the borrower but not less than Grade 11.<br>
            <br>
            • 06 Postdated Cheques.
          </td>
        </tr>
        <tr>
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Insurance</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">Life Insurance of
            the borrower</td>
        </tr>
      </tbody>
    </table>



  </div>
  <div id="term-tab-content-2" class="term-tab-content">
    <table
      style="width: 100%; border-collapse: collapse; margin-top: 20px; font-family: Arial, sans-serif; font-size: 15px; box-shadow: 0 0 15px rgba(0,0,0,0.05);">
      <tbody>
        <tr style="background-color: #f9f9f9;">
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Purpose</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">
            Don’t worry about your urgent Domestic/personal/family needs like education of kids, marriage of children
            and medical requirements. BAJK provides you a hassle-free finance against your salary.
          </td>
        </tr>
        <tr>
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Eligibility</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">
            Permanent employees of Government/semi Government Departments and Autonomous Corporations with at least 01
            year of service.
          </td>
        </tr>
        <tr style="background-color: #f9f9f9;">
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Age limit</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">18-60 years</td>
        </tr>
        <tr>
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Loan Limit</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">Maximum up to Rs.
            3,000,000</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Tenure</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">
            Maximum 48 months (The loan should end six months prior to date of retirement).
          </td>
        </tr>
        <tr>
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Repayment</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">Monthly
            Installments</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            DSR</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">40%</td>
        </tr>
        <tr>
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Primary Security</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">
            Hypothecation of House Hold Items up to loan amount.
          </td>
        </tr>
        <tr style="background-color: #f9f9f9;">
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Secondary Security</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">
            • 01 Personal Guarantee of Government Officer of BPS-11 or above. Guarantor should be in equivalent or above
            grade of the borrower but not less than Grade 11.<br>
            <br>
            • 06 Postdated Cheques.
          </td>
        </tr>
        <tr>
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Insurance</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">Life Insurance of
            the borrower</td>
        </tr>
      </tbody>
    </table>



  </div>
  <div id="term-tab-content-3" class="term-tab-content">
    <table
      style="width: 100%; border-collapse: collapse; margin-top: 20px; font-family: Arial, sans-serif; font-size: 15px; box-shadow: 0 0 15px rgba(0,0,0,0.05);">
      <tbody>
        <tr style="background-color: #f9f9f9;">
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Purpose</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">
            For quick fulfillment of family needs with economical mode of traveling. Easy and quick approach to your
            destination. Purchase of Motorcycle for domestic and personal use on affordable monthly installments.
          </td>
        </tr>
        <tr>
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Eligibility</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">
            • AJK/Pakistani National residing in AJK.<br>
            • Permanent Employees of Government/Semi Government and Autonomous Corporations with at least 03 years of
            service.<br>
            • Account Holder of BAJK.<br>
            • Professionals/Self-employed/Businessmen having 03 months statement of A/c with BAJK or any other bank.
          </td>
        </tr>
        <tr style="background-color: #f9f9f9;">
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Age limit</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">18-60 Years</td>
        </tr>
        <tr>
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Loan Limit</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">As per actual
            cost of Motor Cycle</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Tenure</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">Maximum up to 36
            months</td>
        </tr>
        <tr>
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Repayment</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">Monthly
            Installments</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            DSR</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">30%</td>
        </tr>
        <tr>
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Down Payment/Equity</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">Minimum 20%</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Primary Security</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">
            Joint Registration of vehicle in the name of BAJK & borrower under HPA.
          </td>
        </tr>
        <tr>
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Secondary Security</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">
            • Postdated Cheques<br>
            • 01 Personal Guarantee of Government Officer of BPS-11 or above<br>
            OR<br>
            • 01 Personal Guarantee of a well worth businessman
          </td>
        </tr>
        <tr style="background-color: #f9f9f9;">
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Insurance</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">
            Comprehensive Insurance of Motorcycle
          </td>
        </tr>
      </tbody>
    </table>


  </div>
  <div id="term-tab-content-4" class="term-tab-content">
    <table
      style="width: 100%; border-collapse: collapse; margin-top: 20px; font-family: Arial, sans-serif; font-size: 15px; box-shadow: 0 0 15px rgba(0,0,0,0.05);">
      <tbody>
        <tr style="background-color: #f9f9f9;">
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Purpose</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">
            BAJK offers loan facility for Construction/Renovation/Purchase of residential house/apartments in AJK at
            reasonable/affordable easy terms
          </td>
        </tr>
        <tr>
          <td style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000;">Eligibility</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000;">
            • All Kashmiris / Pakistani having valid CNIC<br>
            • All salaried employee of AJK Government, semi Government, Autonomous bodies, National/Multinational
            Companies (Blue Chip)<br>
            • Business and self-employed professionals of AJK domicile<br>
            • Co-applicant allowed for blood relation (husband/wife, father/son)
          </td>
        </tr>
        <tr style="background-color: #f9f9f9;">
          <td style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000;">Length of Service
          </td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000;">
            • Salaried: Minimum 03 years in Permanent Cadre<br>
            • Business/Self-Employed: At least 03 years in current Business/Profession
          </td>
        </tr>
        <tr>
          <td style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000;">Minimum Income /
            Debt Burden</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000;">
            • Salaried Person: Minimum Rs. 30,000/- monthly take home salary (At least double of monthly
            installment)<br>
            • Business/Self-Employed: Average monthly income should be 03 times of monthly installment.
          </td>
        </tr>
        <tr style="background-color: #f9f9f9;">
          <td style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000;">Age Limit</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000;">
            • Salaried Person: 18–60 Years (Loan should mature 6 months before retirement)<br>
            • Businessmen: 18–60 Years
          </td>
        </tr>
        <tr>
          <td style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000;">Loan Limit</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000;">Up to Rs. 10 Million</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
          <td style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000;">Tenure</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000;">Up to 20 years</td>
        </tr>
        <tr>
          <td style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000;">DSR</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000;">Debt Equity Ratio 60:40</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
          <td style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000;">Repayment</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000;">Monthly Installments</td>
        </tr>
        <tr>
          <td style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000;">Insurance</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000;">Life and Mortgaged Property as per
            Bank’s policy</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
          <td style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000;">Security</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000;">Mortgage of land and building thereon
          </td>
        </tr>
        <tr>
          <td style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000;">Premature Payment
          </td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000;">Premature adjustment allowed</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
          <td style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000;">Partial Adjustment
          </td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000;">Allowed after 01 year of disbursement
          </td>
        </tr>
      </tbody>
    </table>

  </div>
  <div id="term-tab-content-5" class="term-tab-content">
    <table
      style="width: 100%; border-collapse: collapse; margin-top: 20px; font-family: Arial, sans-serif; font-size: 15px; box-shadow: 0 0 15px rgba(0,0,0,0.05);">
      <tbody>
        <tr style="background-color: #f9f9f9;">
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Purpose</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">
            To facilitate your urgent domestic and personal needs, BAJK makes it possible by providing financial
            facility in shape of Personal Loan so that you could easily take care of your children’s education,
            marriages, house renovation etc. Just avail this facility and enjoy tension-free life.
          </td>
        </tr>
        <tr>
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Eligibility</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">AJK /Pakistani
            National</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Loan Limit</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">
            • 95% against Government Securities<br>
            • 95% (First party) and 90% (Third party) against bank’s own deposits<br>
            • 90% against deposits of others banks
          </td>
        </tr>
        <tr>
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Tenure</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">Maximum 36 months
          </td>
        </tr>
        <tr style="background-color: #f9f9f9;">
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Repayment</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">Lump Sum /
            Installments</td>
        </tr>
        <tr>
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Primary Security</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">Hypothecation of
            Household Items (in case of 3<sup>rd</sup> party security)</td>
        </tr>
        <tr style="background-color: #f9f9f9;">
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Secondary Security</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">Lien on Deposits
          </td>
        </tr>
        <tr>
          <td
            style="padding: 12px 15px; border: 1px solid #ddd; font-weight: bold; color: #000000; width: 25%; vertical-align: top;">
            Insurance</td>
          <td style="padding: 12px 15px; border: 1px solid #ddd; color: #000000; vertical-align: top;">Life insurance of
            Borrower (Optional)</td>
        </tr>
      </tbody>
    </table>

    <div id="term-tab-content-6" class="term-tab-content">
      <table
        style="width: 100%; border-collapse: collapse; margin-top: 20px; font-family: Arial, sans-serif; font-size: 15px; box-shadow: 0 0 15px rgba(0,0,0,0.05);">
        <tbody>
          <tr style="background-color: #f9f9f9;">
            <td style="padding: 12px 15px; border: 1px solid #ccc; font-weight: bold; color: #000000; width: 25%;">
              Purpose</td>
            <td style="padding: 12px 15px; border: 1px solid #ccc; color: #000000;">
              Can you send your child for study abroad? Yes, BAJK is there to offer study loan for Higher Studies abroad
              on very fast mode
            </td>
          </tr>
          <tr>
            <td style="padding: 12px 15px; border: 1px solid #ccc; font-weight: bold; color: #000000;">Eligibility</td>
            <td style="padding: 12px 15px; border: 1px solid #ccc; color: #000000;">AJK / Pakistani National</td>
          </tr>
          <tr style="background-color: #f9f9f9;">
            <td style="padding: 12px 15px; border: 1px solid #ccc; font-weight: bold; color: #000000;">Loan Limit</td>
            <td style="padding: 12px 15px; border: 1px solid #ccc; color: #000000;">
              Maximum Rs. 10,000,000 or 95% (1st party) and 90% (3rd party) against Bank’s own deposits, whichever is
              lower<br>
              Maximum Rs. 10,000,000 or 90% against Govt. Securities / Deposits of other Banks (1st/3rd parties),
              whichever is lower
            </td>
          </tr>
          <tr>
            <td style="padding: 12px 15px; border: 1px solid #ccc; font-weight: bold; color: #000000;">Tenure</td>
            <td style="padding: 12px 15px; border: 1px solid #ccc; color: #000000;">Maximum 24 months</td>
          </tr>
          <tr style="background-color: #f9f9f9;">
            <td style="padding: 12px 15px; border: 1px solid #ccc; font-weight: bold; color: #000000;">Repayment</td>
            <td style="padding: 12px 15px; border: 1px solid #ccc; color: #000000;">Lump Sum / Installments</td>
          </tr>
          <tr>
            <td style="padding: 12px 15px; border: 1px solid #ccc; font-weight: bold; color: #000000;">Primary Security
            </td>
            <td style="padding: 12px 15px; border: 1px solid #ccc; color: #000000;">Lien of Deposits</td>
          </tr>
          <tr style="background-color: #f9f9f9;">
            <td style="padding: 12px 15px; border: 1px solid #ccc; font-weight: bold; color: #000000;">Insurance</td>
            <td style="padding: 12px 15px; border: 1px solid #ccc; color: #000000;">Life Insurance of Borrower</td>
          </tr>
          <tr>
            <td style="padding: 12px 15px; border: 1px solid #ccc; font-weight: bold; color: #000000;">Margin</td>
            <td style="padding: 12px 15px; border: 1px solid #ccc; color: #000000;">As per above loan limit</td>
          </tr>
        </tbody>
      </table>


    </div>
    <div id="term-tab-content-7" class="term-tab-content">
      <table
        style="width: 100%; border-collapse: collapse; margin-top: 20px; font-family: Arial, sans-serif; font-size: 15px; box-shadow: 0 0 15px rgba(0,0,0,0.05);">
        <tbody>
          <tr style="background-color: #f9f9f9;">
            <td style="padding: 12px 15px; border: 1px solid #ccc; font-weight: bold; color: #000000; width: 25%;">
              Purpose</td>
            <td style="padding: 12px 15px; border: 1px solid #ccc; color: #000000;">Save Gold – spend money. Keep your
              gold in safe hands and enjoy consumption of money there against for your urgent needs on lowest rates.
            </td>
          </tr>
          <tr>
            <td style="padding: 12px 15px; border: 1px solid #ccc; font-weight: bold; color: #000000;">Eligibility</td>
            <td style="padding: 12px 15px; border: 1px solid #ccc; color: #000000;">All account holders of BAJK</td>
          </tr>
          <tr style="background-color: #f9f9f9;">
            <td style="padding: 12px 15px; border: 1px solid #ccc; font-weight: bold; color: #000000;">Age Limit</td>
            <td style="padding: 12px 15px; border: 1px solid #ccc; color: #000000;">N/A</td>
          </tr>
          <tr>
            <td style="padding: 12px 15px; border: 1px solid #ccc; font-weight: bold; color: #000000;">Loan Limit</td>
            <td style="padding: 12px 15px; border: 1px solid #ccc; color: #000000;">Rs. 2.0 Million</td>
          </tr>
          <tr style="background-color: #f9f9f9;">
            <td style="padding: 12px 15px; border: 1px solid #ccc; font-weight: bold; color: #000000;">Tenure</td>
            <td style="padding: 12px 15px; border: 1px solid #ccc; color: #000000;">Maximum 24 months (Renewable)</td>
          </tr>
          <tr>
            <td style="padding: 12px 15px; border: 1px solid #ccc; font-weight: bold; color: #000000;">Repayment</td>
            <td style="padding: 12px 15px; border: 1px solid #ccc; color: #000000;">Principal lump sum at maturity,
              markup quarterly</td>
          </tr>
          <tr style="background-color: #f9f9f9;">
            <td style="padding: 12px 15px; border: 1px solid #ccc; font-weight: bold; color: #000000;">Insurance</td>
            <td style="padding: 12px 15px; border: 1px solid #ccc; color: #000000;">For full market value of Gold
              Ornaments</td>
          </tr>
          <tr>
            <td style="padding: 12px 15px; border: 1px solid #ccc; font-weight: bold; color: #000000;">Margin</td>
            <td style="padding: 12px 15px; border: 1px solid #ccc; color: #000000;">15%</td>
          </tr>
        </tbody>
      </table>


    </div>
    <div id="term-tab-content-8" class="term-tab-content">
      <p>Home Appliances Finance details here...</p>
    </div>
  </div>
    <script>
      const buttons = document.querySelectorAll('.term-tab-buttons button');
  const contents = document.querySelectorAll('.term-tab-content');

  buttons.forEach(button => {
    button.addEventListener('click', () => {
      buttons.forEach(btn => btn.classList.remove('active'));
      contents.forEach(content => content.classList.remove('active'));

      button.classList.add('active');
      document.getElementById('term-tab-content-' + button.dataset.tab).classList.add('active');
    });
  });
    </script>



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
