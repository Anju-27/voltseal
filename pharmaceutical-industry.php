<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoltSeal :: Pharmaceutical Industry</title>
  <link rel="icon" type="image/png" href="assets/image/logo/VoltSeal-Logo_Icon.png">
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@700;800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <style>
    :root {
      --bg-cream: #FBF5EB;
      --brand-dark-green: #0a332d;
      --brand-green: #17C64F;
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
    }

    .pharma-section {
      padding: 60px 20px 30px;
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

    /* Section 1: Intro Banner */
    .intro-banner {
      background: linear-gradient(135deg, var(--brand-dark-green) 0%, #051a17 100%);
      color: #FFFFFF;
      padding: 60px 40px;
      border-radius: 16px;
      margin-bottom: 40px;
      border-left: 6px solid var(--brand-orange);
      box-shadow: 0 10px 30px rgba(10, 51, 45, 0.1);
      transition: var(--transition-smooth);
    }

    .intro-banner:hover {
      transform: translateY(-4px);
      box-shadow: 0 20px 40px rgba(10, 51, 45, 0.2);
    }

    .intro-banner h2 {
      font-size: 30px;
      font-weight: 800;
      margin-bottom: 10px;
      line-height: 1.3;
      letter-spacing: -0.02em;
    }

    .intro-banner p {
      font-size: 16px;
      font-style: italic;
      font-weight: 600;
      color: #E2E8F0;
      max-width: 900px;
    }

    /* Section 2: Who This Is For Grid */
    .grid-2 {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
      gap: 30px;
      margin-top: 40px;
    }

    .audience-lead-text {
      font-size: 16px;
      font-style: italic;
      font-weight: 600;
      color: var(--brand-orange);
      line-height: 1.6;
      margin-bottom: 20px;
    }

    .card {
      background: var(--card-bg);
      padding: 30px;
      border-radius: 12px;
      border: 1px solid rgba(10, 51, 45, 0.06);
      box-shadow: 0 4px 20px rgba(10, 51, 45, 0.02);
      transition: var(--transition-smooth);
      position: relative;
    }

    /* Hover Effects on Content Cards */
    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 15px 35px rgba(10, 51, 45, 0.08);
      border-color: rgba(10, 51, 45, 0.15);
    }

    .card h3 {
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 10px;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .card h3 i {
      transition: transform 0.3s ease;
    }

    .card:hover h3 i {
      transform: scale(1.15);
    }

    .card-orange h3 {
      color: var(--brand-orange);
    }

    .card-green h3 {
      color: var(--brand-green);
    }

    /* Section 3: The Challenges List */
    .subheading-title {
      font-size: 20px;
      font-weight: 700;
      margin-bottom: 10px;
      margin: 40px 0 1cqi0px 0;
      color: var(--brand-dark-green);
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .subheading-title i {
      color: var(--brand-orange);
    }

    .challenge-content {
      background: var(--card-bg);
      padding: 35px;
      border-radius: 12px;
      margin-bottom: 30px;
      border-top: 3px solid var(--brand-dark-green);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
      transition: var(--transition-smooth);
    }

    .challenge-content:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.05);
      border-top-color: var(--brand-orange);
    }

    .challenge-content p {
      line-height: 1.7;
      color: var(--text-muted);
      margin-bottom: 5px;
      text-align: justify;
    }

    /* Section 4: The Financial Case & Tables */
    .financial-lead {
      font-size: 16px;
      font-style: italic;
      font-weight: 600;
      color: #1a1c1ed1;
      margin-bottom: 20px;
    }

    .metric-table-wrapper {
      background: #FFFFFF;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(10, 51, 45, 0.04);
      margin: 25px 0 40px 0;
      border: 1px solid rgba(10, 51, 45, 0.08);
      transition: var(--transition-smooth);
    }

    .metric-table-wrapper:hover {
      box-shadow: 0 15px 35px rgba(10, 51, 45, 0.09);
    }

    .metric-table {
      width: 100%;
      border-collapse: collapse;
      text-align: left;
    }

    .metric-table th,
    .metric-table td {
      padding: 18px 24px;
    }

    .metric-table th {
      background: var(--brand-dark-green);
      color: #FFFFFF;
      font-weight: 600;
      font-size: 1.1rem;
    }

    .metric-table tr {
      border-bottom: 1px solid #EDF2F7;
      transition: background 0.2s ease;
    }

    /* Interactive Table Rows */
    .metric-table tr:hover {
      background: rgba(251, 245, 235, 0.6);
    }

    .metric-table tr:last-child {
      border-bottom: none;
    }

    .metric-table td strong {
      color: var(--brand-green);
      font-size: 1.2rem;
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
      margin: 20px 0;
    }

    .layered-list li {
      padding: 14px 20px;
      background: #FFFFFF;
      margin-bottom: 10px;
      border-radius: 8px;
      border-left: 4px solid var(--brand-green);
      font-weight: 600;
      color: var(--brand-dark-green);
      transition: var(--transition-smooth);
    }

    .layered-list li:hover {
      transform: translateX(6px);
      border-left-color: var(--brand-orange);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
    }

    /* CTA Section Layout */
    .cta-box {
      text-align: center;
      background: linear-gradient(135deg, var(--brand-dark-green) 0%, #051a17 100%);
      padding: 50px 30px;
      border-radius: 16px;
      color: #FFFFFF;
      margin-top: 50px;
      box-shadow: 0 15px 35px rgba(10, 51, 45, 0.2);
    }

    .cta-box h3 {
      font-size: 1.8rem;
      margin-bottom: 25px;
      font-weight: 700;
    }

    /* Master Buttons Integration */
    .btn-submit {
      color: #FFFFFF;
      padding: 15px 40px;
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
      min-width: 280px;
      max-width: 100%;
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
      margin: 0 auto;
    }

    /* Specific Interactive Blocks inside Section 6 */
    .esg-block {
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      padding-bottom: 15px;
      margin-bottom: 15px;
      transition: var(--transition-smooth);
    }

    .esg-block:last-child {
      border-bottom: none;
      padding-bottom: 0;
      margin-bottom: 0;
    }

    .esg-block:hover {
      padding-left: 10px;
    }

    /* Modal Architecture Overlay */
    .calc-modal {
      display: none;
      position: fixed;
      z-index: 9999;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(10, 51, 45, 0.6);
      backdrop-filter: blur(5px);
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .calc-modal-content {
      background-color: #FFFFFF;
      padding: 40px;
      border-radius: 16px;
      max-width: 500px;
      width: 90%;
      box-shadow: 0 25px 60px rgba(0, 0, 0, 0.25);
      position: relative;
      transform: scale(0.85);
      transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
      border-top: 6px solid var(--brand-dark-green);
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
      right: 25px;
      top: 20px;
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
      font-size: 1.8rem;
      font-weight: 800;
      color: var(--brand-dark-green);
      margin-bottom: 8px;
    }

    .modal-subtitle {
      font-size: 0.95rem;
      color: var(--text-muted);
      margin-bottom: 30px;
      line-height: 1.4;
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
      padding: 12px 18px;
      border-radius: 10px;
      text-decoration: none;
      font-weight: 700;
      font-size: 1.1rem;
      border: 1px solid rgba(10, 51, 45, 0.08);
      transition: all 0.25s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .modal-btn-calc .icon-wrap {
      width: 40px;
      height: 40px;
      background: #FFFFFF;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 15px;
      color: var(--brand-orange);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
      transition: all 0.25s ease;
    }

    .modal-btn-calc .text-wrap {
      flex-grow: 1;
    }

    .modal-btn-calc .arrow-icon {
      opacity: 0;
      transform: translateX(-10px);
      transition: all 0.25s ease;
      color: #FFFFFF;
    }

    /* Modal Buttons Active States */
    .modal-btn-calc:hover {
      background: var(--brand-dark-green);
      color: #FFFFFF;
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(10, 51, 45, 0.15);
    }

    .modal-btn-calc:hover .icon-wrap {
      background: var(--brand-orange);
      color: #FFFFFF;
    }

    .modal-btn-calc:hover .arrow-icon {
      opacity: 1;
      transform: translateX(0);
    }

    /* RESPONSIVE CSS ENGINE (Breakpoints optimization) */
    @media (max-width: 1024px) {
      .intro-banner h2 {
        font-size: 2.2rem;
      }

      .pharma-section {
        padding: 60px 25px;
      }
    }

    @media (max-width: 768px) {
      .pharma-section {
        padding: 50px 20px;
      }

      .intro-banner {
        padding: 40px 25px;
        margin-bottom: 40px;
      }

      .intro-banner h2 {
        font-size: 1.8rem;
      }

      .intro-banner p {
        font-size: 1.1rem;
      }

      .grid-2 {
        grid-template-columns: 1fr;
        gap: 20px;
      }

      .card {
        padding: 30px 20px;
      }

      .subheading-title {
        font-size: 1.4rem;
        margin: 30px 0 15px 0;
      }

      .challenge-content {
        padding: 25px 20px;
      }

      /* Table Horizontal Scroll Engine for small devices */
      .metric-table-wrapper {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }

      .metric-table {
        min-width: 500px;
      }

      .metric-table th,
      .metric-table td {
        padding: 14px 16px;
        font-size: 0.95rem;
      }

      .btn-submit {
        width: 100%;
        min-width: 100%;
      }

      .calc-modal-content {
        padding: 30px 20px;
        width: 95%;
      }

      .modal-title {
        font-size: 1.5rem;
      }
    }

    @media (max-width: 480px) {
      .intro-banner h2 {
        font-size: 1.5rem;
      }

      .audience-lead-text {
        font-size: 1.1rem;
      }

      .cta-box {
        padding: 40px 20px;
      }

      .cta-box h3 {
        font-size: 1.4rem;
      }
    }



    @media (max-width: 768px) {

      p,
      .card p,
      .challenge-content p,
      .esg-block p,
      .audience-lead-text,
      .financial-lead {
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

      .pharma-section {
        padding: 40px 15px 0px;
        !important;
      }

      .card,
      .challenge-content {
        padding: 25px 20px !important;
      }

      .subheading-title {
        font-size: 1.25rem !important;
        margin: 25px 0 12px 0 !important;
        display: flex !important;
        align-items: center !important;
      }

      .subheading,
      .section-main-title,
      h2,
      h3 {
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
      }

      .metric-table {
        min-width: 500px !important;
      }

      / .btn-submit {
        width: 100% !important;
        min-width: 100% !important;
        padding: 15px 20px !important;
      }

      .btn-center-wrapper {
        width: 100% !important;
        display: flex !important;
        justify-content: center !important;
      }
    }

    /* MOBILE HEADINGS OPTIMIZATION PATCH */
    @media (max-width: 768px) {

      /* Main Hero / Section Titles */
      .hero-small h1,
      .pharma-section h2,
      h2 {
        font-size: 1.8rem !important;
        line-height: 1.3 !important;
        letter-spacing: -0.01em !important;
      }

      /* Subheadings & Section Targets */
      .subheading,
      .section-container h3,
      h3 {
        font-size: 1.4rem !important;
        line-height: 1.3 !important;
      }

      /* Card and Inner Block Headings */
      .card h3,
      .esg-block h3,
      .subheading-title {
        font-size: 1.2rem !important;
        line-height: 1.4 !important;
        text-align: left !important;
        /* Icons ke sath alignment sahi rakhne ke liye */
      }

      /* Modal Title Specifics */
      .modal-title {
        font-size: 1.35rem !important;
        text-align: center !important;
      }
    }

    @media (max-width: 480px) {

      .hero-small h1,
      .pharma-section h2,
      h2 {
        font-size: 1.5rem !important;
      }

      .subheading,
      h3 {
        font-size: 1.25rem !important;
      }

      .card h3,
      .esg-block h3,
      .subheading-title {
        font-size: 1.1rem !important;
      }
    }
  </style>
</head>

<body>

  <?php include('inc/header.php') ?>

  <section class="hero-small"
    style="position: relative; height: 60vh; min-height: 400px; background: #0a0c10; display: flex; align-items: center; overflow: hidden; font-family: 'Plus Jakarta Sans', sans-serif;">
    <div
      style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(10, 12, 16, 0.8), rgba(10, 12, 16, 0.6)), url('assets/image/about/a3.png'); background-size: cover; background-position: center;">
    </div>

    <div class="container"
      style="max-width: 1200px; margin: auto; padding: 0 20px; position: relative; z-index: 2; text-align: center;">
      <h1 class="reveal" style="color: #fff; font-size: 40px; font-weight: 800; line-height: 1.2; margin: 0;">
        Pharmaceutical Industry
      </h1>
    </div>
  </section>

  <!-- SECTION 1: Introduction -->
  <section class="pharma-section">
    <div class="section-container">
      <div class="intro-banner">
        <h2>Pharma runs on batch integrity. VoltSeal makes sure that's all it costs.</h2>
        <p>Reduce your pharma facility's energy costs while keeping every batch GDP-compliant and temperature-secure.
        </p>
      </div>
    </div>
  </section>

  <!-- SECTION 2: Who This Is For -->
  <section class="pharma-section" style="padding-top: 0;">
    <div class="section-container">
      <h3 class="subheading"
        style="font-size: 36px; color: #0a332d; font-weight: 800; margin: 5px 0 0 0; text-align: center;">Who This is
        for</h3>

      <p class="audience-lead-text">
        Pharma facilities run on one non-negotiable every batch must stay within its specified temperature range from
        storage to dispatch. The moment power fails, that guarantee is at risk. The question is how much that risk is
        costing you.
      </p>

      <div class="grid-2">
        <div class="card card-orange">
          <h3><i class="fas fa-industry"></i> In-House Manufacturing</h3>
          <p style="line-height: 1.6; color: var(--text-muted); text-align: justify;">
            If you manage an <strong>in-house pharma manufacturing or storage facility</strong>, the exposure is direct.
            Your batch. Your
            write-off. Your CDSCO audit. One temperature excursion doesn't just cost you financially it puts your export
            market approvals and your facility's regulatory standing on the line.
          </p>
        </div>

        <div class="card card-green">
          <h3><i class="fas fa-shipping-fast"></i> 3PL Pharma Cold Chain</h3>
          <p style="line-height: 1.6; color: var(--text-muted); text-align: justify;">
            If you operate a <strong>3PL pharma cold chain</strong>, the stakes are compounded. A single power event
            puts multiple
            clients' batches at risk simultaneously. GDP compliance is not just a regulatory requirement for you it is
            your core service promise. Losing it means losing the client.
          </p>
        </div>
      </div>

      <p
        style="margin-top: 20px; font-size: 1.15rem; text-align: center; font-weight: 600; color: var(--brand-dark-green);">
        Either way your energy costs are too high and your power supply too unreliable.<span
          style="border-bottom: 2px solid var(--brand-orange)">VoltSeal fixes both.</span>
      </p>
    </div>
  </section>

  <hr style="border: 0; border-top: 1px solid rgba(10,51,45,0.08); max-width: 1200px; margin: 0 auto;">

  <!-- SECTION 3: Challenges -->
  <section class="pharma-section">
    <div class="section-container">
      <h2
        style="font-size: 2.2rem; font-weight: 800; text-align: center; margin-bottom: 20px; color: var(--brand-dark-green);">
        The Pharma Power Challenge</h2>

      <div class="challenge-content">
        <div class="subheading-title" style="margin-top: 0;"><i class="fas fa-chart-line"></i> Rising Energy Costs</div>
        <p>Pharma cold storage runs continuously refrigeration never stops. Whether your facility runs on a diesel
          generator as backup, draws from the grid at peak rates, or has solar installed without storage your energy
          bill compounds every year with no natural ceiling.</p>
        <p>Diesel costs ₹32–35/kWh. Grid peak tariffs sit at ₹8–10/kWh. If you have solar but no storage, excess
          generation during the day gets exported at throwaway rates while your facility draws from the grid at full
          price overnight when refrigeration demand is highest. VoltSeal's BESS stores energy when it's cheapest and
          supplies it when your facility needs it most reducing your blended energy cost significantly. Unlike diesel or
          grid tariffs, that cost stays flat. Your current energy bill does not.</p>

      </div>

      <div class="challenge-content">
        <div class="subheading-title" style="margin-top: 0;"><i class="fas fa-bolt"></i> Power Continuity</div>
        <p>Pharma cold storage operates across multiple temperature zones simultaneously refrigerated products at
          2°C–8°C, controlled ambient at 15°C–25°C, and frozen biologics or vaccines at -18°C or below. These are not
          operational preferences they are CDSCO mandates under WHO GDP guidelines. Every product in your facility
          depends entirely on continuous, reliable power.</p>
        <p>A power cut doesn't give you time to respond. Temperature zones begin rising or falling immediately. A single
          excursion puts every batch in that zone at risk simultaneously whether it's your own product or a client's.
          The loss is immediate, the batch investigation is mandatory, and the regulatory consequence is unavoidable.
          <strong> WHO GDP compliance battery backup India is</strong> not a precaution it is the only way to guarantee
          your facility
          never faces that moment.
        </p>
      </div>

      <div class="challenge-content">
        <div class="subheading-title" style="margin-top: 0;"><i class="fas fa-file-contract"></i> Compliance Pressure
        </div>
        <p>India's revised Schedule M now mandatory for all pharma manufacturers — requires validated temperature
          control, real-time monitoring, and complete audit trails at every stage of storage and distribution. CDSCO
          demands that every temperature deviation is logged, investigated, and reported. A power cut that causes a
          temperature excursion is not just an operational event it is a GDP compliance event with consequences that
          extend well beyond the facility.</p>
        <p>For facilities supplying regulated export markets, the stakes are higher still. US FDA and EU EMA compliance
          requires the same rigorous temperature documentation standards as CDSCO — and a single excursion can
          jeopardise export market approvals that took years to obtain. Temperature excursion prevention BESS pharma
          India is the most reliable way to ensure your facility never has to write that excursion report.</p>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Financial Case -->
  <section class="pharma-section" style="background-color: #FFFFFF;">
    <div class="section-container">
      <h2 style="font-size: 30px; font-weight: 800; color: var(--brand-dark-green);">The
        Financial Case</h2>
      <p class="financial-lead">What does switching to BESS mean for your pharma facility's bottom line? The answer
        depends on your current energy setup. Find your scenario below.</p>

      <!-- Scenario A -->
      <div class="subheading-title"><i class="fas fa-sun"></i> If your facility has rooftop solar</div>
      <p style="color: var(--text-muted); line-height: 1.6; text-align: justify;">Your solar panels generate electricity
        through the day —
        but without storage, excess energy gets exported at throwaway rates while your pharma cold storage draws from
        the grid at full price overnight. Every hour your facility runs on grid or diesel instead of stored solar is
        money your facility is leaving on the table.</p>
      <p style="color: var(--text-muted); line-height: 1.6; margin-top: 10px; text-align: justify;">VoltSeal's
        <strong>BESS for
          pharma cold chain
          India</strong> stores that excess solar energy and supplies it to your facility for up to 4 hours — at
        ₹6–8/kWh against
        ₹32–35/kWh on diesel. For a 500kW pharma facility running 2 hours a day across 250 days, the financial case
        looks like this:
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
            <tr>
              <td>CAPEX</td>
              <td><strong>₹2,34,56,790</strong></td>
            </tr>
          </tbody>
        </table>
        <div class="table-note">Based on 500kW, 2 hours/day, 250 days/year. DG cost at ₹32/kWh.</div>
      </div>

      <!-- Scenario B -->
      <div class="subheading-title"><i class="fas fa-plug"></i> If your facility does not have rooftop solar </div>
      <p style="color: var(--text-muted); line-height: 1.6; text-align: justify;">No solar infrastructure required.
        VoltSeal's <strong>pharma cold storage power backup India</strong> system charges from the grid during off-peak
        hours and
        supplies power to your facility for up to 4 hours — reducing your dependence on diesel significantly. Stored
        grid energy at ₹8–10/kWh against diesel at ₹32–35/kWh delivers an immediate and compelling return.</p>

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
            <tr>
              <td>CAPEX</td>
              <td><strong>₹2,34,56,790</strong></td>
            </tr>
          </tbody>
        </table>
        <div class="table-note">Based on 500kW, 2 hours/day, 250 days/year. DG cost at ₹32/kWh.</div>
      </div>

      <!-- Scenario C -->
      <div class="subheading-title"><i class="fas fa-layer-group"></i> The layered use case — Solar, Battery and Grid
        working together</div>
      <p style="color: var(--text-muted); line-height: 1.6; text-align: justify;">For many pharma facilities, the most
        effective energy setup
        is a layered one. VoltSeal's <strong>lithium battery pharma cold chain India</strong> system sits at the centre
        — storing the
        cheapest available energy and deploying it first.</p>
      <p style="color: var(--text-muted); line-height: 1.6; margin-top: 5px; text-align: justify;">Your solar panels
        generate electricity through the day. The BESS stores excess solar energy and discharges it for up to 4 hours
        during peak cost periods, grid outages, or GRAP restrictions. For the remaining hours, your facility draws from
        the grid or continues on direct solar. Diesel becomes the last resort rather than the default.</p>
      <p style="color: var(--text-muted); line-height: 1.6; margin-top: 5px; text-align: justify;">The result is a
        <strong>battery backup pharma warehouse India</strong> setup where:
      </p>

      <ul class="layered-list">
        <li><i class="fas fa-check-circle" style="color:var(--brand-green); margin-right:8px;"></i>
          Stored solar at ₹6–8/kWh is used first </li>
        <li><i class="fas fa-check-circle" style="color:var(--brand-green); margin-right:8px;"></i>
          Grid at ₹8–10/kWh fills the gap </li>
        <li><i class="fas fa-check-circle" style="color:var(--brand-orange); margin-right:8px;"></i>
          DG at ₹32–35/kWh is reserved for genuine emergencies only </li>
      </ul>
      <p style="font-size: 0.95rem; color: var(--text-muted); font-style: italic;">Your facility's actual savings will
        vary based on power requirement, runtime, and energy setup.</p>


      <div class="btn-center-wrapper" style="margin-top: 30px;">
        <button type="button" class="btn-submit" onclick="openCalcModal()"
          style="background: var(--brand-orange); box-shadow: 0 4px 14px rgba(240, 83, 28, 0.4);">
          <i class="fas fa-calculator"></i> Calculate Your Savings &rarr;
        </button>

      </div>
    </div>
  </section>

  <!-- SECTION 5: How It Works -->
  <section class="pharma-section">
    <div class="section-container">
      <h2
        style="font-size: 30px; font-weight: 800; text-align: center; margin-bottom: 5px; color: var(--brand-dark-green);">
        How VoltSeal Works For Your Pharma Facility</h2>
      <p
        style="text-align: center; font-size: 16px; font-style: italic; font-weight: 600; margin-bottom: 20px; color: var(--text-muted);">
        Intelligent energy storage that fits into your existing setup. Not a replacement. An upgrade.</p>

      <div class="grid-2">
        <div class="card">
          <div class="subheading-title" style="margin-top:0;"><i class="fas fa-history"></i> Your
            temperature
            zones never notice the switch</div>

          <p style="color: var(--text-muted); line-height: 1.6; text-align: justify; font-size: 16px;">
            When grid power fluctuates or fails, most facilities experience a gap however brief before backup power
            kicks in. For a pharma facility, even a momentary interruption triggers temperature alarms, breaks GDP audit
            trails, and puts batches at risk across every zone simultaneously.
          </p>
          <p style="color: var(--text-muted); line-height: 1.6; text-align: justify; font-size: 16px;">
            VoltSeal's<strong>pharma cold storage power backup India </strong> switches over in under 200ms faster than
            any diesel generator can start and faster than your refrigeration systems can register a disruption. Your
            refrigerated zones at 2°C–8°C, controlled ambient at 15°C–25°C, and frozen zones at -18°C to -25°C continue
            running without interruption. No alarms. No excursion reports. No batch investigations.</p>
        </div>

        <div class="card">
          <div class="subheading-title" style="margin-top:0;"><i class="fas fa-snowflake"></i> Powers every temperature
            zone simultaneously </div>
          <p style="color: var(--text-muted); line-height: 1.6; text-align: justify; font-size: 16px;">A pharma facility
            doesn't run on one temperature it runs on several. Refrigerated products at 2°C–8°C. Controlled ambient at
            15°C–25°C. Frozen biologics at -18°C to -25°C. Each zone has its own refrigeration load, its own CDSCO
            mandate, and its own GDP documentation requirement if power fails.</p>
          <p style="color: var(--text-muted); line-height: 1.6; text-align: justify; font-size: 16px;">VoltSeal's
            <strong>BESS
              for pharma cold chain India</strong> powers your entire facility simultaneously not selectively. Every
            zone stays
            within its required temperature range regardless of what's happening
            with the grid outside. No prioritisation. No partial coverage. Complete protection across your entire pharma
            operation.
          </p>
        </div>

        <div class="card">
          <div class="subheading-title" style="margin-top:0;"><i class="fas fa-network-wired"></i> Works with whatever
            setup you already have
          </div>
          <p style="color: var(--text-muted); line-height: 1.6; text-align: justify; font-size: 16px;">VoltSeal's
            <strong> lithium battery pharma cold chain India</strong> system integrates with your existing energy
            infrastructure not
            replacing it. Whether your facility runs on grid power, has rooftop solar already installed, or relies on a
            diesel generator as backup, the BESS fits in without requiring significant civil or electrical
            modifications.
          </p>
          <p style="color: var(--text-muted); line-height: 1.6; text-align: justify; font-size: 16px;">It charges from
            the cheapest available source stored solar at ₹6–8/kWh or grid at off-peak rates and discharges
            automatically when your facility needs it. Solar, grid, and BESS work together as one layered system, always
            prioritising the lowest cost energy source first.</p>
        </div>

        <div class="card">
          <div class="subheading-title" style="margin-top:0;"><i class="fas fa-tools"></i> Installation that doesn't
            stop your operations
          </div>
          <p style="color: var(--text-muted); line-height: 1.6; text-align: justify; font-size: 16px;">A pharma facility
            cannot afford downtime not for maintenance, not for upgrades, and certainly not for new equipment
            installation. Revised Schedule M requires validated, uninterrupted temperature control at all times
            including during any infrastructure changes.</p>
          <p style="color: var(--text-muted); line-height: 1.6; text-align: justify; font-size: 16px;">VoltSeal's system
            has a footprint of just 5.5m x 2.4m equivalent to two parking spaces. It is modular, pre-commissioned before
            arrival, and installed with minimal disruption to your ongoing operations. From assessment to commissioning,
            our team works around your facility's schedule not the other way around.</p>
          <p style="color: var(--text-muted); line-height: 1.6; text-align: justify; font-size: 16px;">Perfect. 180
            tonnes locked for Pharma — consistent with Dairy and Cold Chain.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: Compliance & ESG -->
  <section class="pharma-section" style="background: var(--brand-dark-green); color: #FFFFFF; padding-bottom: 60px;">
    <div class="section-container">
      <h2 style="font-size: 2.2rem; font-weight: 800; text-align: center; margin-bottom: 20px; color: #FFFFFF;">
        Compliance, ESG and Sustainability</h2>

      <div class="esg-block">
        <h3 style="color: var(--brand-orange); font-size: 1.5rem; font-weight: 700; margin-bottom: 5px;">
          GRAP season comes every winter. With VoltSeal, your pharma facility never has to choose.</h3>
        <p style="color: #cbd5e1; line-height: 1.7; text-align: justify;">When Delhi NCR air quality hits Stage 3 or
          Stage 4, DG usage is
          banned across all commercial and industrial facilities pharma included. For a pharma facility dependent on DG
          backup, this creates the worst possible scenario running the DG risks regulatory action, not running it means
          no backup power and a GDP excursion event waiting to happen.</p>
        <p style="color: #cbd5e1; line-height: 1.7; margin-top: 0px; text-align: justify;">VoltSeal runs on zero diesel.
          GRAP restrictions
          don't apply. Every temperature zone stays within its CDSCO mandated range. Every batch stays protected. Every
          GDP audit trail stays unbroken. Every winter, while others face that impossible choice, your facility doesn't.
        </p>
      </div>

      <div class="esg-block">
        <h3 style="color: var(--brand-green); font-size: 1.5rem; font-weight: 700; margin-bottom: 5px;">
          180 tonnes of CO2. Gone. Every year.</h3>
        <p style="color: #cbd5e1; line-height: 1.7; text-align: justify;">A 500kW VoltSeal system running 2 hours a day
          eliminates
          approximately 180 tonnes of CO2 annually direct Scope 1 emissions, permanently removed. For facilities with
          solar, stored solar energy replaces grid electricity, reducing Scope 2 emissions meaningfully. Both are
          quantifiable, reportable under BRSR, and real not targets, not projections. Every tonne eliminated strengthens
          your <strong>ESG </strong> credentials and moves your pharma facility meaningfully closer to a
          <strong>sustainable</strong> energy operation.
        </p>
      </div>

      <div class="esg-block">
        <h3 style="color: var(--brand-green); font-size: 1.5rem; font-weight: 700; margin-bottom: 5px;">
          Your sustainability commitment can generate income too.</h3>
        <p style="color: #cbd5e1; line-height: 1.7; text-align: justify;">
          Under India's CCTS Voluntary Offset Mechanism, verified emission reductions earn tradeable Carbon Credit
          Certificates open to any pharma facility, regardless of size. At ₹600–900 per tonne, 180 tonnes of annual CO2
          reduction creates a second revenue stream on top of your energy savings. Your <strong>ESG</strong>
          action pays literally. VoltSeal works through the exact quantum with you during the facility assessment.
        </p>
      </div>
    </div>
  </section>

  <!-- SECTION 7: Call To Action (Compact, Centered & Lift-on-Hover) -->
  <section class="pharma-section" style="text-align: center; padding: 50px 20px !important;">
    <div class="section-container">
      <h2 style="font-size: 36px; font-weight: 800; margin-bottom: 10px; color: var(--brand-dark-green);">Ready to
        Secure Your Facility?</h2>
      <p
        style="font-size: 18px; max-width: 700px; margin: 0 auto 30px auto; color: var(--text-muted); line-height: 1.6;">
        Our team will assess your facility, run the numbers and give you a clear picture of your savings and payback
        period.</p>
      <div class="btn-center-wrapper">
        <a href="contact.php" class="btn-submit"
          style="background: var(--brand-green); box-shadow: 0 4px 14px rgba(23, 198, 79, 0.4);">
          <i class="fas fa-envelope"></i> Get in Touch
        </a>
      </div>
    </div>
  </section>

  <!-- CALCULATOR MODAL POPUP -->
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