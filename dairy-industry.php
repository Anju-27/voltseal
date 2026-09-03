<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoltSeal :: Dairy Industry</title>
  <link rel="icon" type="image/png" href="assets/image/logo/VoltSeal-Logo_Icon.png">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght=400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <style>
    /* Premium Hover & Interactive Animations */
    .interactive-card {
      background: #ffffff;
      padding: 30px;
      border-radius: 12px;
      border: 1px solid #dbf5e7;
      transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .interactive-card:hover {
      transform: translateY(-8px);
      border-color: #17c64f;
      box-shadow: 0 12px 30px rgba(10, 51, 45, 0.08);
    }

    .btn-primary {
      display: inline-block;
      background: #0a332d;
      color: #f4efd8;
      padding: 16px 36px;
      border-radius: 8px;
      font-weight: 700;
      text-decoration: none;
      font-size: 16px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(10, 51, 45, 0.15);
      cursor: pointer;
      border: none;
    }

    .btn-primary:hover {
      background: #f0531c;
      color: #f4efd8;
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(240, 83, 28, 0.3);
    }

    .btn-outline-dark {
      display: inline-block;
      background: #0a332d;
      color: #f4efd8;
      border: 2px solid #0a332d;
      padding: 14px 40px;
      border-radius: 8px;
      font-weight: 700;
      text-decoration: none;
      font-size: 16px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(10, 51, 45, 0.1);
    }

    .btn-outline-dark:hover {
      background: #f0531c;
      border-color: #f0531c;
      color: #ffffff;
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(240, 83, 28, 0.25);
    }

    .metric-box {
      background: #dbf5e7;
      padding: 15px;
      border-radius: 8px;
      transition: background 0.3s ease;
    }

    .interactive-card:hover .metric-box {
      background: #f4efd8;
    }


    .modal-overlay {
      position: fixed !important;
      top: 0 !important;
      left: 0 !important;
      width: 100vw !important;
      height: 100vh !important;
      background: rgba(10, 51, 45, 0.75);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      z-index: 9999999 !important;
      transform: translateZ(0);
      opacity: 0;
      visibility: hidden;
      pointer-events: none;
      padding: 20px;
      box-sizing: border-box;
      transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    .modal-overlay.active {
      opacity: 1;
      visibility: visible;
      pointer-events: auto;
    }

    .modal-container {
      background: #f4efd8;
      border: 2px solid #0a332d;
      padding: 40px 30px;
      border-radius: 20px;
      max-width: 480px;
      width: 100%;
      position: relative !important;
      box-shadow: 0 25px 50px -12px rgba(10, 51, 45, 0.4);
      transform: translateY(30px) scale(0.95);
      transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
      max-height: calc(100vh - 40px) !important;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }

    .modal-body-scroll {
      overflow-y: auto;
      flex-grow: 1;
      padding-right: 5px;
    }

    .modal-overlay.active .modal-container {
      transform: translateY(0) scale(1);
    }

    .modal-close {
      position: absolute;
      top: 15px;
      right: 20px;
      font-size: 28px;
      font-weight: 300;
      color: #0a332d;
      cursor: pointer;
      line-height: 1;
      z-index: 99;
      transition: color 0.2s ease, transform 0.2s ease;
    }

    .modal-close:hover {
      color: #f0531c;
      transform: scale(1.15);
    }

    /* 4. MODAL HEADERS */
    .modal-title {
      color: #0a332d;
      font-size: 26px;
      font-weight: 800;
      margin: 0 0 10px 0;
      letter-spacing: -0.5px;
    }

    .modal-subtitle {
      color: #0a332d;
      opacity: 0.75;
      font-size: 14px;
      line-height: 1.5;
      margin: 0 0 25px 0;
    }

    /* 5. INDIVIDUAL ACTION BUTTONS */
    .modal-btn {
      display: flex !important;
      align-items: center !important;
      width: 100%;
      background: #ffffff;
      color: #0a332d;
      border: 1px solid rgba(10, 51, 45, 0.15);
      padding: 16px 20px;
      margin-bottom: 14px;
      border-radius: 12px;
      font-size: 16px;
      font-weight: 700;
      text-decoration: none;
      box-sizing: border-box;
      text-align: left;
      transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .modal-btn:last-of-type {
      margin-bottom: 0;
    }

    .modal-btn:hover {
      background: #ffffff;
      border-color: #0a332d;
      box-shadow: 0 8px 20px rgba(10, 51, 45, 0.06);
      transform: translateY(-2px);
    }

    .btn-icon-wrapper {
      background: #dbf5e7;
      width: 38px;
      height: 38px;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 15px;
      flex-shrink: 0;
      transition: background 0.25s ease;
    }

    .btn-icon-wrapper i {
      color: #17c64f;
      font-size: 16px;
    }

    .modal-btn:hover .btn-icon-wrapper {
      background: #0a332d;
    }

    .modal-btn:hover .btn-icon-wrapper i {
      color: #f4efd8;
    }

    .btn-text-wrapper {
      flex-grow: 1;
    }

    .arrow-icon {
      font-size: 14px;
      opacity: 0.3;
      transform: translateX(0);
      transition: all 0.25s ease;
    }

    .modal-btn:hover .arrow-icon {
      opacity: 1;
      color: #f0531c;
      transform: translateX(4px);
    }

    .modal-body-scroll::-webkit-scrollbar {
      width: 6px;
    }

    .modal-body-scroll::-webkit-scrollbar-track {
      background: transparent;
    }

    .modal-body-scroll::-webkit-scrollbar-thumb {
      background: rgba(10, 51, 45, 0.2);
      border-radius: 10px;
    }

    /* MOBILE RESPONSIVE HEADINGS */
    @media (max-width: 768px) {
      .hero-small h1 {
        font-size: 28px !important;
      }

      section h2 {
        font-size: 22px !important;
      }

      section h3 {
        font-size: 26px !important;
      }

      section h4,
      .interactive-card h4 {
        font-size: 18px !important;
      }

      .modal-title {
        font-size: 22px !important;
      }
    }
  </style>
</head>

<body style="font-family: 'Inter', sans-serif; background-color: #f4efd8; color: #0a332d; margin: 0;">

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
        Dairy Industry </h1>
    </div>
  </section>


  <!-- SECTION 1: INTRODUCTION HEADLINE -->
  <section style="padding: 60px 0 20px 0; background: #f4efd8; text-align: center;">
    <div style="max-width: 1000px; margin: auto; padding: 0 20px;">
      <h2 style="color: #f0531c; font-size: 30px; font-weight: 800; line-height: 1.3; margin-bottom: 5px;">
        Dairy runs on cold. VoltSeal makes sure that's all it costs.
      </h2>
      <p style="color: #0a332d; font-size: 18px; font-weight: 700; font-style: italic; margin: 0;">
        Keep your cold chain running, your compliance intact, and your energy costs down.
      </p>
    </div>
  </section>

  <!-- SECTION 2: THE DAIRY POWER CHALLENGE -->
  <section style="padding: 60px 0 80px 0; background: #f4efd8;">
    <div style="max-width: 1200px; margin: auto; padding: 0 20px;">
      <div style="text-align: center; margin-bottom: 30px;">
        <h2
          style="font-size: 16px; text-transform: uppercase; color: #17c64f; letter-spacing: 1px; font-weight: 700; margin-bottom: 0px; display: inline-block; padding: 0px 16px; border-radius: 4px;">
          The Core Issue</h2>
        <h3 style="font-size: 36px; color: #0a332d; font-weight: 800; margin: 5px 0 0 0;">The Dairy Power Challenge
        </h3>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 30px;">
        <!-- Card 1 -->
        <div class="interactive-card">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 10px;">
            <div style="color: #f0531c; font-size: 28px;"><i class="fas fa-chart-line"></i></div>
            <h4 style="font-size: 22px; color: #0a332d; font-weight: 700; margin: 0;">Rising Energy Costs</h4>
          </div>
          <p style="color: #0a332d; line-height: 1.6; font-size: 15px; margin-bottom: 5px; text-align: justify;">
            Energy is one of the largest controllable costs in a dairy facility and regardless of your current setup,
            you are likely paying more than you need to.
          </p>
          <p style="color: #0a332d; line-height: 1.6; font-size: 15px; text-align: justify;">If your facility runs on a
            diesel generator as backup, every unit of power costs ₹32–35/kWh. If you draw primarily from the grid, peak
            tariffs put your cost at ₹8–10/kWh. If you have solar installed but no storage, you face both problems
            simultaneously excess solar gets exported at throwaway rates during the day, while your refrigeration draws
            from the grid at full price during evenings and overnight.
          </p>
          <div style="color: #0a332d; line-height: 1.6; font-size: 15px; text-align: justify;">
            VoltSeal's <strong> lithium ion battery energy storage system</strong> stores energy and supplies it to your
            facility for up to 4 hours reducing your dependence on diesel, grid peak tariffs, or both. It is most
            valuable during peak cost periods, unplanned grid outages, or GRAP restrictions when your DG cannot legally
            operate. For a 500kW dairy facility running across 250 days a year, this translates to an annual saving of
            ₹60–72L. Over 10 years, the cumulative <strong>electricity bill reduction for your dairy warehouse</strong>
            crosses ₹5-6 Cr.
          </div>
        </div>

        <!-- Card 2 -->
        <div class="interactive-card">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 10px;">
            <div style="color: #f0531c; font-size: 28px;"><i class="fas fa-snowflake"></i></div>
            <h4 style="font-size: 22px; color: #0a332d; font-weight: 700; margin: 0;">Power Continuity</h4>
          </div>
          <p style="color: #0a332d; line-height: 1.6; font-size: 15px; margin-bottom: 5px; text-align: justify;">
            Running a dairy processing plant means managing products that cannot tolerate a single temperature breach.
            Milk, curd, paneer and buttermilk must stay between 2–8°C at all times. Ice cream and frozen desserts must
            stay below -18°C. Cooling alone accounts for 25–30% of your facility's total energy consumption making
            <strong>continuous refrigeration</strong> your most electricity-dependent operation.
          </p>
          <p style="color: #0a332d; line-height: 1.6; font-size: 15px; text-align: justify;">
            Without reliable <strong>power backup</strong>, a single outage puts your entire inventory at risk
            simultaneously. A power cut affects every product category at once milk, curd, paneer, ice cream with no
            recovery possible once a temperature breach occurs. Erratic electricity supply alone accounts for at least
            3% milk loss annually across Indian dairy facilities.
          </p>
          <p style="color: #0a332d; line-height: 1.6; font-size: 15px; text-align: justify;">
            Unlike diesel or grid tariffs, your <strong>lithium ion battery dairy plant</strong> energy cost stays flat
            every year. Your current energy bill does not.
          </p>
        </div>

        <!-- Card 3 -->
        <div class="interactive-card">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 10px;">
            <div style="color: #f0531c; font-size: 28px;"><i class="fas fa-shield-alt"></i></div>
            <h4 style="font-size: 22px; color: #0a332d; font-weight: 700; margin: 0;">Compliance Pressure</h4>
          </div>
          <p style="color: #0a332d; line-height: 1.6; font-size: 15px; margin-bottom: 5px; text-align: justify;">
            Dairy distribution and processing is classified as high-risk under FSSAI meaning your facility can face
            inspections up to twice a year. Every temperature excursion must be documented with the duration, maximum
            temperature reached, and corrective action taken. <strong>Temperature non-compliance is the single most
              common FSSAI violation</strong> across dairy businesses in India. During GRAP Stage 3 and Stage 4, diesel
            generator usage is regulated or banned outright across all commercial and industrial facilities in Delhi NCR
            leaving <strong> dairy logistics</strong> operations dependent on DG with no compliant backup power option.
          </p>
          <p style="color: #0a332d; line-height: 1.6; font-size: 15px; text-align: justify;">
            A temperature log gap is not just an operational problem. It is a compliance event carrying fines of ₹1–5
            lakh, product seizure, and license suspension. During GRAP season, running your DG risks regulatory action.
            Not running it means no backup at all. <strong>FSSAI compliance for cold chain power backup</strong> is no
            longer optional it is an operational and legal necessity.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: THE FINANCIAL CASE -->
  <section
    style="padding: 50px 0; background: #dbf5e7; border-top: 1px solid #dbf5e7; border-bottom: 1px solid #dbf5e7;">
    <div style="max-width: 1200px; margin: auto; padding: 0 20px;">
      <div style="text-align: center; margin-bottom: 30px;">
        <h2 style="font-size: 36px; color: #0a332d; font-weight: 800; margin-bottom: 10px;">The Financial Case</h2>
        <p style="color: #f0531c; font-size: 18px; font-weight: 600; font-style: italic;">
          "What does switching to BESS actually mean for your dairy facility's bottom line? The answer depends on your
          current energy setup."
        </p>
      </div>

      <div
        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-bottom: 20px;">
        <!-- Setup 1 -->
        <div class="interactive-card"
          style="padding: 24px; box-sizing: border-box; background: #ffffff; border-radius: 12px;">
          <span
            style="background: #dbf5e7; color: #0a332d; padding: 6px 16px; border-radius: 20px; font-size: 13px; font-weight: 700; text-transform: uppercase; display: inline-block;">
            Option A
          </span>
          <h3 style="font-size: 22px; color: #0a332d; margin: 15px 0 12px 0; font-weight: 700;">If your facility has
            rooftop solar</h3>
          <p style="color: #0a332d; opacity: 0.8; line-height: 1.6; text-align: justify; font-size: 14px;">
            Your solar panels are already generating electricity through the day but without storage, that energy is
            only available in real time. Every unit of excess solar exported to the grid is energy your facility
            generated but never fully valued. Every unit drawn from the grid during peak hours or overnight is energy
            you paid full price for when you already had the means to generate it cheaper.
          </p>
          <p
            style="color: #0a332d; opacity: 0.8; line-height: 1.6; text-align: justify; margin-bottom: 20px; font-size: 14px;">
            VoltSeal's <strong>BESS for dairy processing plants</strong> stores that excess solar energy and supplies it
            to your facility for up to 4 hours at ₹6–8/kWh against ₹32–35/kWh on diesel. For a 500kW dairy facility
            running 2 hours a day across 250 days, the financial case looks like this:
          </p>

          <!-- Metrics Grid (Responsive) -->
          <div
            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); gap: 15px; text-align: center;">
            <div class="metric-box" style="padding: 10px; background: #f8fbf9; border-radius: 8px;">
              <div
                style="color: #0a332d; opacity: 0.6; font-size: 11px; text-transform: uppercase; margin-bottom: 5px; font-weight: 600;">
                Annual Savings</div>
              <div style="color: #f0531c; font-size: 18px; font-weight: 700;">₹77,16,049</div>
            </div>
            <div class="metric-box" style="padding: 10px; background: #f8fbf9; border-radius: 8px;">
              <div
                style="color: #0a332d; opacity: 0.6; font-size: 11px; text-transform: uppercase; margin-bottom: 5px; font-weight: 600;">
                Payback Period</div>
              <div style="color: #0a332d; font-size: 18px; font-weight: 700;">3.04 years</div>
            </div>
            <div class="metric-box" style="padding: 10px; background: #f8fbf9; border-radius: 8px;">
              <div
                style="color: #0a332d; opacity: 0.6; font-size: 11px; text-transform: uppercase; margin-bottom: 5px; font-weight: 600;">
                Net Profit After 10 Yrs</div>
              <div style="color: #0a332d; font-size: 18px; font-weight: 700;">₹3,82,71,605</div>
            </div>
          </div>
        </div>

        <!-- Setup 2 -->
        <div class="interactive-card"
          style="padding: 24px; box-sizing: border-box; background: #ffffff; border-radius: 12px;">
          <span
            style="background: #dbf5e7; color: #0a332d; padding: 6px 16px; border-radius: 20px; font-size: 13px; font-weight: 700; text-transform: uppercase; display: inline-block;">
            Option B
          </span>
          <h3 style="font-size: 22px; color: #0a332d; margin: 15px 0 12px 0; font-weight: 700;">If your facility does
            not have rooftop solar</h3>
          <p
            style="color: #0a332d; opacity: 0.8; line-height: 1.6; text-align: justify; margin-bottom: 20px; font-size: 14px;">
            No solar infrastructure required. VoltSeal's <strong>lithium ion battery</strong> charges from the grid
            during off-peak hours and supplies power to your facility for up to 4 hours reducing your dependence on
            diesel significantly. Stored grid energy at ₹8–10/kWh against diesel at ₹32–35/kWh still delivers a
            compelling and immediate return.
          </p>

          <!-- Metrics Grid (Responsive) -->
          <div
            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); gap: 15px; text-align: center;">
            <div class="metric-box" style="padding: 10px; background: #f8fbf9; border-radius: 8px;">
              <div
                style="color: #0a332d; opacity: 0.6; font-size: 11px; text-transform: uppercase; margin-bottom: 5px; font-weight: 600;">
                Annual Savings</div>
              <div style="color: #f0531c; font-size: 18px; font-weight: 700;">₹61,72,840</div>
            </div>
            <div class="metric-box" style="padding: 10px; background: #f8fbf9; border-radius: 8px;">
              <div
                style="color: #0a332d; opacity: 0.6; font-size: 11px; text-transform: uppercase; margin-bottom: 5px; font-weight: 600;">
                Payback Period</div>
              <div style="color: #0a332d; font-size: 18px; font-weight: 700;">3.80 years</div>
            </div>
            <div class="metric-box" style="padding: 10px; background: #f8fbf9; border-radius: 8px;">
              <div
                style="color: #0a332d; opacity: 0.6; font-size: 11px; text-transform: uppercase; margin-bottom: 5px; font-weight: 600;">
                Net Profit After 10 Yrs</div>
              <div style="color: #0a332d; font-size: 18px; font-weight: 700;">₹3,82,71,605</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Layered Strategy Banner -->
      <div
        style="background: #ffffff; border-left: 4px solid #17c64f; padding: 40px; border-radius: 0 12px 12px 0; margin-bottom: 50px;">
        <h4 style="font-size: 22px; color: #0a332d; margin-bottom: 10px; font-weight: 700;">The layered use case: Solar,
          Battery and Grid working together</h4>
        <p style="color: #0a332d; opacity: 0.9; line-height: 1.6; text-align: justify;">
          For many dairy facilities, the most effective energy setup is not a single source but a layered one.
          VoltSeal's <strong> dairy cold chain BESS</strong> sits at the centre of that setup storing the cheapest
          available energy and deploying it first.
        </p>
        <p style="color: #0a332d; opacity: 0.9; line-height: 1.6; margin-bottom: 10px; text-align: justify;">Here is how
          it works in practice. Your solar panels generate electricity through the day. The BESS stores excess solar
          energy and discharges it for up to 4 hours when your facility needs it most during peak cost periods, grid
          outages, or GRAP restrictions. For the hours beyond that, your facility draws from the grid or continues on
          direct solar. Diesel becomes the last resort rather than the default.</p>
        <p style="color: #0a332d; opacity: 0.9; line-height: 1.6; margin-bottom: 15px; text-align: justify;"><strong>The
            result is a continuous refrigeration BESS dairy setup where:</strong></p>
        <ul
          style="list-style: none; padding: 0; margin: 0 0 20px 0; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px;">
          <li style="color: #0a332d; font-size: 15px;"><i class="fas fa-check-circle"
              style="color: #17c64f; margin-right: 10px;"></i> Stored solar at <strong> ₹6–8/kWh</strong> is used first
          </li>
          <li style="color: #0a332d; font-size: 15px;"><i class="fas fa-check-circle"
              style="color: #17c64f; margin-right: 10px;"></i> Grid at <strong> ₹8–10/kWh</strong> fills the gap</li>
          <li style="color: #0a332d; font-size: 15px;"><i class="fas fa-check-circle"
              style="color: #f0531c; margin-right: 10px;"></i> DG at <strong>₹32–35/kWh</strong> is reserved for genuine
            emergencies only</li>
        </ul>
        <p style="color: #0a332d; opacity: 0.9; line-height: 1.6; margin-bottom: 10px; text-align: justify;">This is not
          a replacement of your existing energy infrastructure. It is an optimisation of it reducing your blended energy
          cost, protecting your cold chain, and giving your facility the flexibility to operate on its own terms
          regardless of what is happening with the grid or GRAP restrictions outside.</p>
        <p style="color: #0a332d; opacity: 0.6; font-size: 14px; margin: 0; font-style: italic;">*Your facility's actual
          savings will vary based on power requirement, runtime, and energy setup.</p>
      </div>

      <div style="text-align: center;">
        <button type="button" class="btn-primary" onclick="toggleModal(true)">
          Calculate Your Savings <i class="fas fa-arrow-right" style="margin-left: 8px;"></i>
        </button>
      </div>

      <!-- INTERACTIVE CALCULATOR POPUP MODAL -->
      <div id="calculatorModal" class="modal-overlay" onclick="handleOverlayClick(event)">
        <div class="modal-container">
          <span class="modal-close" onclick="toggleModal(false)">&times;</span>

          <div class="modal-body-scroll">
            <h3 class="modal-title">Choose Energy Setup</h3>


            <!-- Dynamic Option Buttons -->
            <a href="solar+batt-vs-diesel.php" class="modal-btn">
              <span class="btn-icon-wrapper"><i class="fas fa-bolt"></i></span>
              <span class="btn-text-wrapper">Grid + BESS vs Diesel</span>
              <i class="fas fa-chevron-right arrow-icon"></i>
            </a>

            <a href="grid+batt-vs-diesel.php" class="modal-btn">
              <span class="btn-icon-wrapper"><i class="fas fa-sun"></i></span>
              <span class="btn-text-wrapper">Solar + BESS vs Diesel</span>
              <i class="fas fa-chevron-right arrow-icon"></i>
            </a>

            <a href="solar+batt-vs-grid.php" class="modal-btn">
              <span class="btn-icon-wrapper"><i class="fas fa-network-wired"></i></span>
              <span class="btn-text-wrapper">Solar + BESS vs Grid</span>
              <i class="fas fa-chevron-right arrow-icon"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    function toggleModal(show) {
      const modal = document.getElementById('calculatorModal');
      if (show) {
        document.body.appendChild(modal);

        setTimeout(() => {
          modal.classList.add('active');
        }, 20);
        document.body.style.overflow = 'hidden';
      } else {
        modal.classList.remove('active');
        document.body.style.overflow = '';
      }
    }

    function handleOverlayClick(event) {
      if (event.target.id === 'calculatorModal') {
        toggleModal(false);
      }
    }
  </script>

  <!-- SECTION 4: HOW IT WORKS -->
  <section style="padding: 50px 0; background: #f4efd8;">
    <div style="max-width: 1200px; margin: auto; padding: 0 20px;">
      <div style="text-align: center; margin-bottom: 30px;">
        <h2
          style="font-size: 16px; text-transform: uppercase; color: #17c64f; letter-spacing: 1px; font-weight: 700; margin-bottom: 10px;">
          Integration </h2>
        <h3 style="font-size: 36px; color: #0a332d; font-weight: 800; margin: 0 0 10px 0;">How VoltSeal Works for Your
          Dairy Facility</h3>
        <p style="color: #0a332d; opacity: 0.8; font-size: 18px; font-weight: 600; font-style: italic;">
          "Intelligent energy storage that fits into your existing setup. Not a replacement. An upgrade."
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        <div class="interactive-card">
          <h4 style="font-size: 20px; color: #0a332d; margin-bottom: 10px; font-weight: 700;">
            Your refrigeration never notices the switch </h4>
          <p style="color: #0a332d; opacity: 0.8; line-height: 1.6; font-size: 15px; margin: 0; text-align: justify;">
            When grid power
            fluctuates or fails, most facilities experience a gap however brief before backup power kicks in. For a
            dairy facility, even a momentary interruption can trigger temperature alarms, break FSSAI temperature logs,
            and put product at risk.</p>
          <p style="color: #0a332d; opacity: 0.8; line-height: 1.6; font-size: 15px; margin: 0; text-align: justify;">
            VoltSeal's
            <strong>lithium ion battery</strong> switches over in under 200ms faster than any diesel generator can start
            and
            faster than your refrigeration systems can register a disruption. Your compressors, cooling units, and
            temperature monitoring systems continue running without interruption. No alarms. No log gaps. No product at
            risk.
          </p>
        </div>

        <div class="interactive-card">
          <h4 style="font-size: 20px; color: #0a332d; margin-bottom: 10px; font-weight: 700;">Works with whatever setup
            you already have</h4>
          <p style="color: #0a332d; opacity: 0.8; line-height: 1.6; font-size: 15px; margin: 0; text-align: justify;">
            VoltSeal's <strong> BESS</strong> is designed to integrate with your existing energy infrastructure not
            replace it. Whether
            your facility runs on grid power, has rooftop solar already installed, or relies on a diesel generator as
            backup, the BESS fits in without requiring significant civil or electrical modifications.
          </p>
          <p style="color: #0a332d; opacity: 0.8; line-height: 1.6; font-size: 15px; margin: 0; text-align: justify;">
            It charges from the cheapest available source stored solar at ₹6–8/kWh or grid at off-peak rates and
            discharges automatically when your facility needs it. Solar, grid, and BESS work together as one layered
            system, always prioritising the lowest cost energy source first. Your existing setup stays in place.
            VoltSeal makes it work smarter.</p>
        </div>

        <div class="interactive-card">
          <h4 style="font-size: 20px; color: #0a332d; margin-bottom: 15px; font-weight: 700;">Installation that doesn't
            stop your operations
          </h4>
          <p style="color: #0a332d; opacity: 0.8; line-height: 1.6; font-size: 15px; margin: 0; text-align: justify;">A
            A dairy facility cannot afford downtime not for maintenance, not for upgrades, and not for new equipment
            installation. VoltSeal's system is designed with that reality in mind.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: COMPLIANCE & SUSTAINABILITY -->
  <section
    style="padding: 50px 0; background: #dbf5e7; border-top: 1px solid #dbf5e7; border-bottom: 1px solid #dbf5e7;">
    <div style="max-width: 1200px; margin: auto; padding: 0 20px;">
      <div style="text-align: center; margin-bottom: 60px;">

        <h3 style="font-size: 36px; color: #0a332d; font-weight: 800; margin: 0;">
          Compliance, ESG and Sustainability
        </h3>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 30px;">
        <div class="interactive-card" style="border-top: 4px solid #f0531c;">
          <h4 style="font-size: 18px; color: #0a332d; margin-bottom: 10px; font-weight: 700;">GRAP season comes every
            winter. With VoltSeal, it's no longer your problem</h4>
          <p style="color: #0a332d; opacity: 0.8; line-height: 1.6; font-size: 15px; margin: 0; text-align: justify;">
            When Delhi NCR air quality hits Stage 3 or Stage 4, DG usage is banned. No exceptions dairy plants and
            depots included. VoltSeal runs on zero diesel. GRAP restrictions don't apply to your facility. Your
            cold chain keeps running. Your temperature logs stay unbroken. Every winter, while others scramble, your
            operations don't skip a beat.</p>
        </div>

        <div class="interactive-card" style="border-top: 4px solid #f0531c;">
          <h4 style="font-size: 18px; color: #0a332d; margin-bottom: 10px; font-weight: 700;">180 tonnes of CO2. Gone.
            Every year.</h4>
          <p style="color: #0a332d; opacity: 0.8; line-height: 1.6; font-size: 15px; margin: 0; text-align: justify;">
            A 500kW VoltSeal system running 2 hours a day eliminates approximately 180 tonnes of CO2 annually direct
            Scope 1 emissions, permanently removed. For facilities with solar, stored solar energy replaces grid
            electricity, reducing Scope 2 emissions meaningfully. Both are quantifiable, reportable under BRSR, and real
            not targets, not projections. Every tonne eliminated strengthens your <strong> ESG </strong>credentials and
            moves your dairy facility meaningfully closer to a <strong>sustainable</strong> energy operation.</p>
        </div>

        <div class="interactive-card" style="border-top: 4px solid #f0531c;">
          <h4 style="font-size: 18px; color: #0a332d; margin-bottom: 10px; font-weight: 700;">
            Your sustainability commitment can generate income too.</h4>
          <p style="color: #0a332d; opacity: 0.8; line-height: 1.6; font-size: 15px; margin: 0; text-align: justify;">
            Verified emission reductions earn tradeable Carbon Credit Certificates open to any dairy facility,
            regardless of size. The 180 tonnes of annual CO2 reduction creates a second revenue stream on top of your
            energy savings. Your <strong>ESG</strong> action pays literally. VoltSeal works through the exact quantum
            with you during the
            facility assessment.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: CONTACT CALLOUT -->
  <section style="padding: 60px 0; background: #dbf5e7; text-align: center;">
    <div style="max-width: 800px; margin: auto; padding: 0 20px;">
      <h3 style="font-size: 32px; color: #0a332d; font-weight: 800; margin-bottom: 10px; line-height: 1.3;">
        Ready to Optimize Your Blended Energy Cost?
      </h3>
      <p style="color: #0a332d; font-size: 18px; line-height: 1.6; margin-bottom: 20px; opacity: 0.85;">
        Our team will assess your facility, run the numbers and give you a clear picture of your savings and payback
        period.
      </p>
      <a href="contact.php" class="btn-outline-dark">
        Get in Touch <i class="fas fa-envelope" style="margin-left: 8px;"></i>
      </a>
    </div>
  </section>

  <?php include('inc/footer.php') ?>
  <script src="assets/js/nav.js"></script>
</body>

</html>