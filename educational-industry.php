<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoltSeal :: Educational Industry</title>
  <link rel="icon" type="image/png" href="assets/image/logo/VoltSeal-Logo_Icon.png">
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@700;800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <style>
    :root {
      --bg-cream: #f4efd8;
      --brand-dark-green: #0a332d;
      --brand-green: #17c64f;
      --brand-orange: #F0531C;
      --text-dark: #1A1C1E;
      --text-muted: #4A5157;
      --card-bg: #FFFFFF;
      --transition-smooth: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background-color: var(--bg-cream);
      color: var(--text-dark);
      font-family: 'Inter', sans-serif;
      overflow-x: hidden;
      line-height: 1.6;
      font-size: 16px;
    }

    .edu-section {
      padding: 60px 20px;
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .section-container {
      max-width: 1200px;
      margin: 0 auto;
    }

    /* -------------------------------------------------------------
     GLOBAL TYPOGRAPHY & ALIGNMENT RULES
     ------------------------------------------------------------- */
    p,
    .card p,
    .challenge-content p,
    .esg-block p,
    .audience-lead-text,
    .financial-lead {
      text-align: justify !important;
      text-justify: inter-word !important;
      word-break: break-word;
      hyphens: auto;
    }

    .section-main-title {
      font-size: 30px;
      color: var(--brand-dark-green);
      font-weight: 800;
      text-align: center;
      margin-bottom: 10px;
    }

    .audience-lead-text {
      font-size: 18px;
      font-style: italic;
      font-weight: 600;
      color: var(--brand-orange);
      line-height: 1.6;
      margin-bottom: 35px;
      text-align: justify !important;
      margin-left: auto;
      margin-right: auto;
    }

    /* Section 1: Intro Banner (Refined to Light Theme) */
    .intro-banner {
      background: #FFFFFF;
      color: var(--brand-dark-green);
      padding: 50px 40px;
      border-radius: 16px;
      border-left: 6px solid var(--brand-green);
      box-shadow: 0 10px 30px rgba(10, 51, 45, 0.05);
      border: 1px solid rgba(10, 51, 45, 0.08);
    }

    .intro-banner h2 {
      font-size: 28px;
      font-weight: 800;
      margin-bottom: 10px;
      line-height: 1.3;
      letter-spacing: -0.02em;
      color: var(--brand-dark-green);
    }

    .intro-banner p {
      font-size: 18px;
      color: var(--text-muted);
    }

    /* Section 2: Grid & Cards Architecture */
    .grid-2 {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
      gap: 30px;
      margin-top: 2dvb0px;
    }

    .card {
      background: var(--card-bg);
      padding: 30px;
      border-radius: 12px;
      border: 1px solid rgba(10, 51, 45, 0.06);
      box-shadow: 0 4px 20px rgba(10, 51, 45, 0.02);
      transition: var(--transition-smooth);
    }

    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 15px 35px rgba(10, 51, 45, 0.06);
      border-color: var(--brand-green);
    }

    .card h3 {
      font-size: 1.4rem;
      font-weight: 700;
      margin-bottom: 15px;
      display: flex;
      align-items: center;
      gap: 12px;
      color: var(--brand-dark-green);
    }

    .card-orange h3 i {
      color: var(--brand-orange);
    }

    .card-green h3 i {
      color: var(--brand-green);
    }

    .card p {
      color: var(--text-muted);
      font-size: 1rem;
    }

    /* Section 3: Challenges Structure */
    .subheading-title {
      font-size: 1.35rem;
      font-weight: 700;
      margin: 35px 0 15px 0;
      color: var(--brand-dark-green);
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .subheading-title i {
      color: var(--brand-green);
    }

    .challenge-content {
      background: var(--card-bg);
      padding: 35px;
      border-radius: 12px;
      margin-bottom: 30px;
      border-top: 4px solid var(--brand-dark-green);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.01);
      border: 1px solid rgba(10, 51, 45, 0.05);
      transition: var(--transition-smooth);
    }

    .challenge-content:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 25px rgba(10, 51, 45, 0.05);
      border-top-color: var(--brand-green);
    }

    .challenge-content p {
      font-size: 1rem;
      line-height: 1.7;
      color: var(--text-muted);
      margin-bottom: 15px;
    }

    .challenge-content p:last-child {
      margin-bottom: 0;
    }

    /* Section 4: Tables, Lists & Financials */
    .financial-lead {
      font-size: 16px;
      color: var(--text-dark);
      margin-bottom: 10px;
      font-weight: 500;
    }

    .metric-table-wrapper {
      background: #FFFFFF;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(10, 51, 45, 0.02);
      margin: 25px 0 40px 0;
      border: 1px solid rgba(10, 51, 45, 0.08);
    }

    .metric-table {
      width: 100%;
      border-collapse: collapse;
      text-align: left;
    }

    .metric-table th,
    .metric-table td {
      padding: 18px 24px;
      font-size: 1rem;
    }

    .metric-table th {
      background: var(--brand-dark-green);
      color: #FFFFFF;
      font-weight: 600;
    }

    .metric-table tr {
      border-bottom: 1px solid #EDF2F7;
      transition: background 0.2s ease;
    }

    .metric-table tr:hover {
      background: var(--bg-cream);
    }

    .metric-table tr:last-child {
      border-bottom: none;
    }

    .metric-table td strong {
      color: var(--brand-dark-green);
      font-size: 1.15rem;
    }

    .table-note {
      font-size: 0.9rem;
      color: var(--text-muted);
      padding: 15px 24px;
      background: #F8FAFC;
      border-top: 1px solid #EDF2F7;
    }

    .layered-list {
      list-style: none;
      padding: 0;
      margin: 25px 0;
    }

    .layered-list li {
      padding: 16px 20px;
      background: #FFFFFF;
      margin-bottom: 12px;
      border-radius: 8px;
      border-left: 4px solid var(--brand-green);
      font-weight: 600;
      color: var(--brand-dark-green);
      font-size: 1rem;
      transition: var(--transition-smooth);
      display: flex;
      align-items: center;
      border: 1px solid rgba(10, 51, 45, 0.04);
    }

    .layered-list li:hover {
      transform: translateX(6px);
      border-left-color: var(--brand-orange);
    }

    /* CTAs & Unified Action Buttons */
    .btn-submit {
      color: #FFFFFF;
      padding: 16px 40px;
      border-radius: 8px;
      font-weight: 700;
      text-decoration: none;
      font-size: 1.1rem;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      transition: var(--transition-smooth);
      cursor: pointer;
      border: none;
      width: auto;
      min-width: 320px;
    }

    .btn-submit i {
      transition: transform 0.3s ease;
    }

    .btn-submit:hover i {
      transform: translateX(4px);
    }

    .btn-submit:active {
      transform: scale(0.98);
    }

    .btn-center-wrapper {
      display: flex;
      justify-content: center;
      width: 100%;
    }

    /* Section 6: ESG Light Architecture */
    .esg-wrapper-card {
      background: #FFFFFF;
      padding: 40px;
      border-radius: 16px;
      border: 1px solid rgba(10, 51, 45, 0.06);
      box-shadow: 0 10px 30px rgba(10, 51, 45, 0.02);
    }

    .esg-block {
      border-bottom: 1px solid rgba(10, 51, 45, 0.08);
      padding-bottom: 25px;
      margin-bottom: 25px;
    }

    .esg-block:last-child {
      border-bottom: none;
      padding-bottom: 0;
      margin-bottom: 0;
    }

    .esg-block h3 {
      font-size: 1.4rem;
      font-weight: 700;
      margin-bottom: 12px;
      line-height: 1.4;
      color: var(--brand-dark-green);
    }

    .esg-block p {
      color: var(--text-muted);
      line-height: 1.7;
      font-size: 1rem;
    }

    /* Calculator Modal Popup Light Design */
    .calc-modal {
      display: none;
      position: fixed;
      z-index: 9999;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(10, 51, 45, 0.4);
      backdrop-filter: blur(5px);
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: opacity 0.3s ease;
      padding: 20px;
    }

    .calc-modal-content {
      background-color: #FFFFFF;
      padding: 40px;
      border-radius: 16px;
      max-width: 520px;
      width: 100%;
      box-shadow: 0 25px 60px rgba(10, 51, 45, 0.15);
      position: relative;
      transform: scale(0.85);
      transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
      border-top: 6px solid var(--brand-green);
    }

    .calc-modal.show {
      display: flex;
      opacity: 1;
    }

    .calc-modal.show .calc-modal-content {
      transform: scale(1);
    }

    .calc-modal-close {
      position: absolute;
      right: 20px;
      top: 15px;
      font-size: 28px;
      font-weight: bold;
      color: var(--text-muted);
      cursor: pointer;
      transition: color 0.2s;
    }

    .calc-modal-close:hover {
      color: var(--brand-orange);
    }

    .modal-title {
      font-size: 1.6rem;
      font-weight: 800;
      color: var(--brand-dark-green);
      margin-bottom: 10px;
      text-align: center;
    }

    .modal-subtitle {
      font-size: 0.95rem;
      color: var(--text-muted);
      text-align: center;
      margin-bottom: 25px;
    }

    .modal-btn-vertical-group {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .modal-btn-calc {
      display: flex;
      align-items: center;
      background: var(--bg-cream);
      color: var(--brand-dark-green);
      padding: 14px 18px;
      border-radius: 10px;
      text-decoration: none;
      font-weight: 700;
      font-size: 1rem;
      border: 1px solid rgba(10, 51, 45, 0.06);
      transition: all 0.25s ease;
    }

    .modal-btn-calc .icon-wrap {
      width: 38px;
      height: 38px;
      background: #FFFFFF;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 15px;
      color: var(--brand-green);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.02);
      flex-shrink: 0;
    }

    .modal-btn-calc .text-wrap {
      flex-grow: 1;
      text-align: left;
    }

    .modal-btn-calc .arrow-icon {
      opacity: 0;
      transform: translateX(-10px);
      transition: all 0.25s ease;
      color: var(--brand-dark-green);
    }

    .modal-btn-calc:hover {
      background: var(--brand-dark-green);
      color: #FFFFFF;
      transform: translateY(-2px);
    }

    .modal-btn-calc:hover .icon-wrap {
      background: var(--brand-green);
      color: #FFFFFF;
    }

    /* ==========================================================================
     STRICT MOBILE ENGINE (768px & BELOW) - ABSOLUTE JUSTIFY & PERFECT ALIGN
     ========================================================================== */
    @media (max-width: 768px) {

      p,
      .card p,
      .challenge-content p,
      .esg-block p,
      .audience-lead-text,
      .financial-lead,
      .intro-banner p {
        text-align: justify !important;
        text-justify: inter-word !important;
        word-break: break-word !important;
        hyphens: auto !important;
      }

      .grid-2 {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
        display: grid !important;
      }

      .edu-section {
        padding: 40px 15px !important;
      }

      .card,
      .challenge-content,
      .esg-wrapper-card {
        padding: 25px 20px !important;
      }

      .subheading-title {
        font-size: 1.25rem !important;
        margin: 25px 0 12px 0 !important;
        display: flex !important;
        align-items: center !important;
      }

      .section-main-title,
      h2,
      h3,
      .intro-banner h2 {
        text-align: center !important;
        line-height: 1.3 !important;
      }

      .section-main-title {
        font-size: 1.75rem !important;
      }

      .intro-banner h2 {
        font-size: 1.5rem !important;
      }

      .layered-list li {
        font-size: 0.95rem !important;
        padding: 12px 15px !important;
        display: flex !important;
        align-items: flex-start !important;
      }

      .metric-table-wrapper {
        overflow-x: auto !important;
        width: 100% !important;
        display: block !important;
        -webkit-overflow-scrolling: touch;
      }

      .metric-table {
        min-width: 500px !important;
      }

      .btn-submit {
        width: 100% !important;
        min-width: 100% !important;
        padding: 15px 20px !important;
      }
    }

    /* ==========================================================================
      STRICT MOBILE ENGINE (768px & BELOW) - ABSOLUTE JUSTIFY & PERFECT ALIGN
     ========================================================================== */
    @media (max-width: 768px) {

      p,
      .card p,
      .challenge-content p,
      .esg-block p,
      .audience-lead-text,
      .financial-lead,
      .intro-banner p {
        text-align: justify !important;
        text-justify: inter-word !important;
        word-break: break-word !important;
        hyphens: auto !important;
      }

      /* --- HEADINGS MOBILE REDUCTION RULES --- */

      .section-main-title {
        font-size: 1.4rem !important;
        margin-bottom: 8px !important;
      }

      .intro-banner h2 {
        font-size: 1.25rem !important;
      }

      .card h3,
      .subheading-title,
      .esg-block h3 {
        font-size: 1.15rem !important;
      }

      .modal-title {
        font-size: 1.3rem !important;
      }

      /* -------------------------------------- */

      .grid-2 {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
        display: grid !important;
      }

      .edu-section {
        padding: 40px 15px !important;
      }

      .card,
      .challenge-content,
      .esg-wrapper-card {
        padding: 25px 20px !important;
      }

      .subheading-title {
        margin: 25px 0 12px 0 !important;
        display: flex !important;
        align-items: center !important;
      }

      .section-main-title,
      h2,
      h3,
      .intro-banner h2 {
        text-align: center !important;
        line-height: 1.3 !important;
      }

      .layered-list li {
        font-size: 0.95rem !important;
        padding: 12px 15px !important;
        display: flex !important;
        align-items: flex-start !important;
      }

      .metric-table-wrapper {
        overflow-x: auto !important;
        width: 100% !important;
        display: block !important;
        -webkit-overflow-scrolling: touch;
      }

      .metric-table {
        min-width: 500px !important;
      }

      .btn-submit {
        width: 100% !important;
        min-width: 100% !important;
        padding: 15px 20px !important;
      }
    }
  </style>
</head>

<body>

  <?php include('inc/header.php') ?>

  <section class="hero-small" style="position: relative; height: 60vh; min-height: 400px; background: #0a0c10; display: flex; align-items: center;
       overflow: hidden; font-family: 'Plus Jakarta Sans', sans-serif;">
    <div
      style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(10, 12, 16, 0.8),
        rgba(10, 12, 16, 0.6)), url('assets/image/about/a3.png'); background-size: cover; background-position: center;">
    </div>

    <div class="container"
      style="max-width: 1200px; margin: auto; padding: 0 20px; position: relative; z-index: 2; text-align: center;">
      <h1 class="reveal" style="color: #fff; font-size: 40px; font-weight: 800; line-height: 1.2; margin: 0;">
        Educational Industry
      </h1>
    </div>
  </section>

  <!-- SECTION 1: Introduction Banner -->
  <section class="edu-section">
    <div class="section-container">
      <div class="intro-banner">
        <h2>Education runs on uninterrupted learning. VoltSeal makes sure that's all it costs.</h2>
        <p><em>Reduce your campus energy bill while keeping every learning environment, lab, and hostel running without
            interruption.</em></p>
      </div>
    </div>
  </section>

  <!-- SECTION 2: Who This Is For -->
  <section class="edu-section" style="padding-top: 0;">
    <div class="section-container">
      <h3 class="section-main-title">Who This Is For</h3>
      <p class="audience-lead-text">
        Every educational institution runs on one commitment an environment where learning never stops. Power continuity
        and energy costs sit at the heart of that commitment. How they show up depends on who you are.
      </p>

      <div class="grid-2">
        <div class="card card-orange">
          <h3><i class="fas fa-school"></i> School</h3>
          <p>
            If you manage a <strong>school</strong>, the stakes are immediate and visible. A power cut during exams, in
            computer labs, or
            across classrooms doesn't just disrupt operations it disrupts the learning experience your students,
            parents, and staff depend on every single day. And your DG bill compounds every month on a budget that has
            no room for rising energy costs.
          </p>
        </div>

        <div class="card card-green">
          <h3><i class="fas fa-university"></i>college or university</h3>
          <p>
            If you run a <strong> college or university</strong>, the scale is larger and the exposure broader.
            Laboratories, hostels, administrative systems, and digital infrastructure all draw power continuously. A
            single outage affects every function simultaneously from research labs to residential facilities. Energy is
            one of your largest operational costs, and it keeps rising.
          </p>
        </div>
      </div>

      <p
        style="margin-top: 30px; font-size: 1.1rem; text-align: center; font-weight: 600; color: var(--brand-dark-green);">
        Either way your campus energy costs are too high and your power supply too unreliable.<span
          style="border-bottom: 2px solid var(--brand-green); padding-bottom: 2px;">VoltSeal fixes both.</span>
      </p>
    </div>
  </section>

  <hr style="border: 0; border-top: 1px solid rgba(10,51,45,0.08); max-width: 1200px; margin: 0 auto;">

  <!-- SECTION 3: The Education Power Challenge -->
  <section class="edu-section">
    <div class="section-container">
      <h2 class="section-main-title">The Education Power Challenge</h2>

      <div class="challenge-content">
        <div class="subheading-title" style="margin-top: 0;"><i class="fas fa-chart-line"></i>Rising Energy Costs</div>
        <p>An educational campus runs continuously classrooms, computer labs, science laboratories, administrative
          systems, and residential hostels all drawing power through the day and night. Whether your institution runs on
          a diesel generator as backup, draws from the grid at peak rates, or has solar installed without storage your
          energy bill compounds every year against a budget that has no room for rising costs.</p>
        <p>Diesel costs ₹32–35/kWh. Grid peak tariffs sit at ₹8–10/kWh. If you have solar but no storage, excess
          generation during the day gets exported at throwaway rates while your campus draws from the grid at full price
          during peak hours. VoltSeal's <strong>lithium ion battery</strong> stores energy when it's cheapest and
          supplies it when your
          campus needs it most reducing your energy bill significantly across every scenario. Unlike diesel or grid
          tariffs, that cost stays flat. Your current energy bill does not.</p>

      </div>

      <div class="challenge-content">
        <div class="subheading-title" style="margin-top: 0;"><i class="fas fa-bolt"></i> Power Continuity</div>
        <p>A power cut on a campus doesn't affect one function it affects all of them simultaneously. Classrooms lose
          power mid-lesson. Computer labs go dark. Science equipment loses calibration. Hostel residents lose lighting,
          fans, and charging points. Administrative systems go offline. For a school, the disruption is immediate and
          visible to students, parents, and staff alike. For a college or university, the scale of disruption is larger
          research labs, server rooms, and residential facilities all affected at once.</p>
        <p>Voltage fluctuations even without a full outage can damage sensitive laboratory and computer equipment.
          VoltSeal's <strong>battery energy storage system</strong> switches over in under 200ms protecting every system
          on campus from
          disruption, damage, and data loss simultaneously.</p>
      </div>

      <div class="challenge-content">
        <div class="subheading-title" style="margin-top: 0;"><i class="fas fa-smog"></i> GRAP Compliance</div>
        <p>Every winter, Delhi NCR's Graded Response Action Plan introduces progressively stricter restrictions on
          diesel generator usage. At Stage 3, DG sets are regulated across all commercial and institutional facilities.
          At Stage 4, DG usage is banned outright. GRAP was invoked multiple times during the 2023,
          2024 and 2025 winters making it a recurring and predictable challenge for every educational institution in
          Delhi NCR.</p>
        <p>For campuses that rely on DG as their only backup power source, GRAP season creates a recurring conflict run
          the DG and risk regulatory action, or don't run it and lose all backup power during active academic
          operations. A <strong>GRAP compliant campus power backup </strong> is not a seasonal consideration it is a
          permanent operational
          requirement. VoltSeal operates entirely without diesel. GRAP restrictions simply do not apply.</p>
      </div>
    </div>
  </section>

  <!-- SECTION 4: The Financial Case -->
  <section class="edu-section" style="background-color: #FFFFFF; border-radius: 24px 24px 0 0;">
    <div class="section-container">
      <h2 class="section-main-title" style="text-align: left;">The Financial Case</h2>
      <p class="financial-lead"><em>What does switching to BESS mean for your institution's energy bill? The answer
          depends on your current setup. Find your scenario below.</em></p>

      <!-- Scenario A -->
      <div class="subheading-title"><i class="fas fa-sun"></i>If your campus has rooftop solar</div>
      <p style="color: var(--text-muted); line-height: 1.6;">Your solar panels generate electricity through the day but
        without storage, excess energy gets exported at throwaway rates while your campus draws from the grid at full
        price during peak hours and through the night. Every unit of solar energy your institution generates but doesn't
        store is money leaving a budget that's already under pressure.</p>
      <p style="color: var(--text-muted); line-height: 1.6; margin-top: 10px;">VoltSeal's BESS for textile
        VoltSeal's <strong>lithium ion battery</strong> stores that excess solar energy and supplies it to your campus
        for up to 4 hours at ₹6–8/kWh against ₹32–35/kWh on diesel. For a 500kW campus running 2 hours a day across
        250 days, the financial case looks like this:</p>

      <div class="metric-table-wrapper">
        <table class="metric-table">
          <thead>
            <tr>
              <th>Financial Metric</th>
              <th>Value / Return</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Annual Savings</td>
              <td><strong>₹77,16,049</strong></td>
            </tr>
            <tr>
              <td>Payback Period</td>
              <td><strong>3.04 years</strong></td>
            </tr>
            <tr>
              <td>Net Profit After 10 Years</td>
              <td><strong>₹5,37,03,704</strong></td>
            </tr>
          </tbody>
        </table>
        <div class="table-note"><em>Based on 500kW, 2 hours/day, 250 days/year. DG cost at ₹32/kWh.</em></div>
      </div>

      <!-- Scenario B -->
      <div class="subheading-title"><i class="fas fa-plug"></i> If your campus does not have rooftop solar</div>
      <p style="color: var(--text-muted); line-height: 1.6;">No solar infrastructure required. VoltSeal's
        <strong>lithium ion battery</strong> charges from the grid during off-peak hours and supplies power to your
        campus for up to 4 hours reducing your dependence on diesel significantly. Stored grid energy at ₹8–10/kWh
        against diesel at ₹32–35/kWh delivers an immediate
      </p>

      <div class="metric-table-wrapper">
        <table class="metric-table">
          <thead>
            <tr>
              <th>Financial Metric</th>
              <th>Value / Return</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Annual Savings</td>
              <td><strong>₹61,72,840</strong></td>
            </tr>
            <tr>
              <td>Payback Period</td>
              <td><strong>3.80 years</strong></td>
            </tr>
            <tr>
              <td>Net Profit After 10 Years</td>
              <td><strong>₹3,82,71,605</strong></td>
            </tr>
          </tbody>
        </table>
        <div class="table-note"><em>Based on 500kW, 2 hours/day, 250 days/year. DG cost at ₹32/kWh.</em></div>
      </div>

      <!-- Scenario C -->
      <!-- Scenario C -->
      <div class="subheading-title"><i class="fas fa-layer-group"></i> The layered use case — Solar, Battery and Grid
        working together</div>
      <p style="color: var(--text-muted); line-height: 1.6;">For many campuses, the most effective energy setup is a
        layered one. VoltSeal's <strong>GRAP compliant power backup</strong> sits at the centre storing the cheapest
        available energy and deploying it first.</p>
      <p style="color: var(--text-muted); line-height: 1.6; margin-top: 10px;">Your solar panels generate electricity
        through the day. The BESS stores excess solar energy and discharges it for up to 4 hours during peak cost
        periods, grid outages, or GRAP restrictions. For the remaining hours, your campus draws from the grid or
        continues on direct solar. Diesel becomes the last resort rather than the default.</p>
      <p style="color: var(--text-muted); line-height: 1.6; margin-top: 10px;">The result is a <strong>campus energy
          cost
          reduction</strong> setup where:</p>

      <ul class="layered-list">
        <li><i class="fas fa-check-circle" style="color:var(--brand-green); margin-right:12px;"></i> Stored solar at
          ₹6–8/kWh is used first</li>
        <li><i class="fas fa-check-circle" style="color:var(--brand-green); margin-right:12px;"></i>Grid at ₹8–10/kWh
          fills the gap</li>
        <li><i class="fas fa-check-circle" style="color:var(--brand-orange); margin-right:12px;"></i>DG at ₹32–35/kWh is
          reserved for genuine emergencies only</li>
      </ul>
      <p style="font-size: 0.95rem; color: var(--text-muted); font-style: italic; margin-bottom: 30px;"><em>Your
          institution's actual savings will vary based on power requirement, runtime, and energy setup.</em></p>

      <!-- UNIFIED INTERACTIVE CALL OUT BUTTON -->
      <div class="btn-center-wrapper">
        <button type="button" class="btn-submit" onclick="openCalcModal()"
          style="background: var(--brand-dark-green); box-shadow: 0 4px 14px rgba(10, 51, 45, 0.2);">
          <i class="fas fa-calculator"></i> Want to see how much your facility can save? Calculate Here &rarr;
        </button>
      </div>
    </div>
  </section>

  <!-- SECTION 5: How VoltSeal Works For Your Campus -->
  <section class="edu-section">
    <div class="section-container">
      <h2 class="section-main-title">
        How VoltSeal Works For Your Campus
      </h2>
      <p style="display: block; width: 100%; text-align: center !important; font-size: 16px; font-style: italic; 
         margin-bottom: 20px; color: var(--text-muted);">
        <em>Intelligent energy storage that fits into your existing setup. Not a replacement. An upgrade.</em>
      </p>
      <div class="grid-2">
        <div class="card">
          <div class="subheading-title" style="margin-top:0;"><i class="fas fa-history"></i>
            Your campus never notices the switch</div>
          <p>
            When grid power fluctuates or fails, most facilities experience a gap however brief before backup power
            kicks in. For an educational institution, even a momentary interruption disrupts ongoing lessons, shuts down
            computer labs, affects sensitive laboratory equipment, and leaves residential facilities without power.
          </p>
          <p style="margin-top: 10px;">
            VoltSeal's <strong>lithium ion battery</strong> switches over in under 200ms faster than any diesel
            generator can start and faster than any system on your campus can register a disruption. Classrooms, labs,
            hostels, and administrative systems continue running without interruption. No disrupted lessons. No damaged
            equipment. No darkened hostels.
          </p>
        </div>

        <div class="card">
          <div class="subheading-title" style="margin-top:0;"><i class="fas fa-bolt"></i>
            Powers your entire campus simultaneously</div>
          <p>
            An educational campus doesn't run on one system it runs on many simultaneously. Classrooms and lecture halls
            drawing power through the day. Computer labs and science laboratories running sensitive equipment that
            cannot tolerate voltage fluctuations. Hostel facilities powering lighting, fans, and charging points through
            the night. Administrative and server systems running continuously.
          </p>
          <p style="margin-top: 10px;">
            VoltSeal's <strong>battery energy storage system </strong> powers your entire campus simultaneously not
            selectively. Every facility stays operational regardless of what's happening with the grid outside. No
            prioritisation. No partial coverage. Complete power continuity across every learning environment on your
            campus.
        </div>

        <div class="card">
          <div class="subheading-title" style="margin-top:0;"><i class="fas fa-network-wired"></i>
            Works with whatever setup you already have</div>
          <p>
            VoltSeal's <strong>battery energy storage </strong> system integrates with your existing energy
            infrastructure not replacing it. Whether your campus runs on grid power, has rooftop solar already
            installed, or relies on a diesel generator as backup, the BESS fits in without requiring significant civil
            or electrical modifications.
          </p>
          <p style="margin-top: 10px;">
            It charges from the cheapest available source stored solar at ₹6–8/kWh or grid at off-peak rates and
            discharges automatically when your campus needs it. Solar, grid, and BESS work together as one layered
            system, always prioritising the lowest cost energy source first.
          </p>
        </div>

        <div class="card">
          <div class="subheading-title" style="margin-top:0;"><i class="fas fa-tools"></i>
            Installation that doesn't disrupt academic operations</div>
          <p>
            An educational institution cannot afford operational disruption not during term time, not during exams, and
            certainly not during regular academic hours. VoltSeal's system is designed with that reality in mind.
          </p>
          <p style="margin-top: 10px;">
            From assessment to commissioning, our team works around your institution's academic calendar not the other
            way around.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: Compliance, ESG and Sustainability (Light Clean UI) -->
  <section class="edu-section">
    <div class="section-container">
      <h2 class="section-main-title">Compliance, ESG and Sustainability</h2>

      <div class="esg-wrapper-card">
        <div class="esg-block">
          <h3>GRAP season comes every winter. With VoltSeal, your campus never has to choose.</h3>
          <p>When Delhi NCR air quality hits Stage 3, DG sets are regulated across all commercial and institutional
            facilities educational campuses included. At Stage 4, DG usage is banned outright. GRAP was invoked multiple
            times during the 2023, 2024 and 2025 winters making it a recurring and predictable challenge for every
            institution in Delhi NCR.</p>
          <p style="margin-top: 10px;">For campuses dependent on DG backup, GRAP season forces an impossible choice run
            the DG and risk regulatory action, or don't run it and lose all backup power during active academic
            operations. VoltSeal runs on zero diesel. GRAP restrictions don't apply. Every classroom, lab, and hostel
            stays powered. Every winter, while others scramble, your campus doesn't skip a beat.</p>
        </div>

        <div class="esg-block">
          <h3>180 tonnes of CO2. Gone. Every year.</h3>
          <p>A 500kW VoltSeal system running 2 hours a day eliminates approximately 180 tonnes of CO2 annually direct
            Scope 1 emissions, permanently removed. For campuses with solar, stored solar energy replaces grid
            electricity, reducing Scope 2 emissions meaningfully. Both are quantifiable, reportable under BRSR, and real
            not targets, not projections.</p>
          <p style="margin-top: 10px;">Educational institutions occupy a unique position they shape how the next
            generation thinks about sustainability. Every tonne of CO2 eliminated strengthens your <strong>ESG</strong>
            credentials,
            moves your campus closer to a genuinely <strong>sustainable</strong> energy operation, and demonstrates to
            your students,
            parents, and community that your commitment to a cleaner future goes beyond the classroom.</p>
        </div>

        <div class="esg-block">
          <h3>Your sustainability commitment can generate income too.</h3>
          <p>Under India's CCTS Voluntary Offset Mechanism, verified emission reductions earn tradeable Carbon Credit
            Certificates open to any educational institution, regardless of size. Your CO2 reduction creates a second
            revenue stream on top of your energy savings. Your <strong>ESG </strong> action pays literally. VoltSeal
            works through the exact quantum with you during the facility assessment.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: Call To Action -->
  <section class="edu-section" style="text-align: center;">
    <div class="section-container">
      <h2 class="section-main-title">Ready to Secure Your Facility?</h2>
      <p
        style="font-size: 1.1rem; text-align: center !important; max-width: 700px; margin: 0 auto 30px auto; color: var(--text-muted);">
        Our team will assess your facility, run the numbers and give you a clear picture of your savings and payback
        period.
      </p>
      <div class="btn-center-wrapper">
        <a href="contact.php" class="btn-submit"
          style="background: var(--brand-green); box-shadow: 0 4px 14px rgba(23, 198, 79, 0.4);">
          <i class="fas fa-envelope"></i> Get in Touch
        </a>
      </div>
    </div>
  </section>

  <!-- CALCULATOR MODAL POPUP (3 Options Linked inside Popup) -->
  <div id="calcModal" class="calc-modal">
    <div class="calc-modal-content">
      <span class="calc-modal-close" onclick="closeCalcModal()">&times;</span>
      <h3 class="modal-title">Choose Energy Setup</h3>

      <div class="modal-btn-vertical-group">
        <a href="grid+batt-vs-diesel.php" class="modal-btn-calc">
          <span class="icon-wrap"><i class="fas fa-plug"></i></span>
          <span class="text-wrap">Grid + BESS vs Diesel</span>
          <i class="fas fa-arrow-right arrow-icon"></i>
        </a>

        <a href="solar+batt-vs-diesel.php" class="modal-btn-calc">
          <span class="icon-wrap"><i class="fas fa-sun"></i></span>
          <span class="text-wrap">Solar + BESS vs Diesel</span>
          <i class="fas fa-arrow-right arrow-icon"></i>
        </a>

        <a href="solar+batt-vs-grid.php" class="modal-btn-calc">
          <span class="icon-wrap"><i class="fas fa-layer-group"></i></span>
          <span class="text-wrap">Solar + BESS vs Grid</span>
          <i class="fas fa-arrow-right arrow-icon"></i>
        </a>
      </div>
    </div>
  </div>

  <?php include('inc/footer.php') ?>
  <script src="assets/js/nav.js"></script>

  <script>
    function openCalcModal() {
      const modal = document.getElementById('calcModal');
      modal.style.display = 'flex';
      setTimeout(() => {
        modal.classList.add('show');
      }, 10);
    }

    function closeCalcModal() {
      const modal = document.getElementById('calcModal');
      modal.classList.remove('show');
      setTimeout(() => {
        modal.style.display = 'none';
      }, 300);
    }

    window.onclick = function (event) {
      const modal = document.getElementById('calcModal');
      if (event.target == modal) {
        closeCalcModal();
      }
    }
  </script>
</body>

</html>