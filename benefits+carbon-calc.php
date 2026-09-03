<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoltSeal :: Benefits</title>
  <link rel="icon" type="image/png" href="assets/image/logo/VoltSeal-Logo_Icon.png">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
  body {
    background-color: #f4efd8;
  }

  .benefits-hero {
    min-height: 620px;
    padding: clamp(130px, 12vw, 165px) 6% clamp(70px, 8vw, 100px);
    background:
      linear-gradient(115deg, rgba(10, 51, 45, 0.97), rgba(10, 51, 45, 0.76)),
      url('assets/image/banner/b3.png') center/cover no-repeat;
    color: #fff;
    display: flex;
    align-items: center;
    position: relative;
    z-index: 101;
  }

  .benefits-hero-inner {
    width: 100%;
    max-width: 1180px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: minmax(0, 1fr) minmax(290px, 380px);
    gap: clamp(30px, 5vw, 54px);
    align-items: center;
  }

  .eyebrow {
    color: #17C64F;
    font-size: 14px;
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-bottom: 16px;
  }

  .benefits-hero h1 {
    font-size: clamp(40px, 5.4vw, 68px);
    line-height: 1.04;
    margin: 0 0 22px;
    max-width: 860px;
  }

  .benefits-hero p {
    color: #e7efe9;
    font-size: 21px;
    line-height: 1.62;
    max-width: 780px;
    margin: 0;
  }

  .hero-stack {
    display: grid;
    gap: 14px;
  }

  .hero-mini-card {
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.18);
    border-radius: 8px;
    padding: 18px;
    backdrop-filter: blur(8px);
    display: grid;
    grid-template-columns: 46px 1fr;
    gap: 14px;
    align-items: center;
  }

  .hero-mini-card i {
    width: 46px;
    height: 46px;
    border-radius: 8px;
    background: #17C64F;
    color: #0a332d;
    display: grid;
    place-items: center;
    font-size: 20px;
  }

  .hero-mini-card strong {
    color: #fff;
    display: block;
    font-size: 18px;
    margin-bottom: 3px;
  }

  .hero-mini-card span {
    color: #dbe9e3;
    display: block;
    font-size: 14px;
    line-height: 1.45;
  }

  .benefits-page {
    background: #f4efd8;
    padding: clamp(50px, 7vw, 78px) 6%;
    position: relative;
    z-index: 1;
  }

  .benefits-wrap {
    max-width: 1180px;
    margin: 0 auto;
    display: grid;
    gap: clamp(24px, 3vw, 32px);
  }

  .intro-card,
  .dimension-card,
  .calculator-section {
    background: rgba(251, 245, 235, 0.96);
    border: 1px solid rgba(10, 51, 45, 0.11);
    border-radius: 8px;
    box-shadow: 0 22px 55px rgba(10, 51, 45, 0.09);
    overflow: hidden;
    position: relative;
    z-index: 102;
  }

  .intro-card::before,
  .dimension-card::before,
  .calculator-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: linear-gradient(90deg, #17C64F, rgba(23, 198, 79, 0.12));
  }

  .intro-card {
    padding: clamp(30px, 4vw, 44px);
    display: grid;
    grid-template-columns: minmax(0, 1fr) 520px;
    gap: 34px;
    align-items: start;
  }

  .intro-card h2,
  .dimension-card h2,
  .calculator-section h2 {
    color: #323232;
    font-size: clamp(25px, 3vw, 30px);
    line-height: 1.16;
    margin: -6px 0 10px;
  }

  .intro-card p,
  .dimension-card p,
  .calculator-section p {
    color: #4a5568;
    font-size: 16px;
    text-align: justify;
    line-height: 1.72;
    margin: 0 0 16px;
  }

  .dimension-list {
    display: grid;
    gap: 12px;
  }

  .dimension-pill {
    background: rgba(244, 239, 216, 0.62);
    border: 1px solid rgba(23, 198, 79, 0.18);
    border-radius: 8px;
    display: grid;
    grid-template-columns: 42px 1fr;
    gap: 12px;
    padding: 14px;
    align-items: start;
  }

  .dimension-pill span {
    width: 42px;
    height: 42px;
    border-radius: 8px;
    background: rgba(23, 198, 79, 0.12);
    color: #17C64F;
    display: grid;
    place-items: center;
    font-weight: 800;
  }

  .dimension-pill strong {
    color: #0a332d;
    display: block;
    margin-bottom: 4px;
  }

  .dimension-pill p {
    font-size: 15px;
    text-align: justify;
    line-height: 1.5;
    margin: 0;
  }

  .dimension-card {
    padding: clamp(30px, 4vw, 42px);
    display: grid;
    grid-template-columns: 86px minmax(0, 1fr);
    gap: clamp(20px, 3vw, 30px);
  }

  .dimension-icon {
    width: 76px;
    height: 76px;
    border: 1px solid rgba(23, 198, 79, 0.18);
    border-radius: 8px;
    background: rgba(23, 198, 79, 0.1);
    color: #17C64F;
    display: grid;
    place-items: center;
    font-size: 30px;
    box-shadow: 0 12px 24px rgba(23, 198, 79, 0.12);
  }

  .section-lead {

    color: #4a5568;
    font-size: 16px;
    text-align: justify;
    line-height: 1.72;
    margin: 0 0 8px;

  }

  .benefit-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 16px;
    margin-top: 24px;
  }

  .benefit-box {
    background: rgba(244, 239, 216, 0.64);
    border: 1px solid rgba(23, 198, 79, 0.18);
    border-radius: 8px;
    padding: 20px;
  }

  .benefit-box strong {
    color: #0a332d;
    display: block;
    font-size: 18px;
    margin-bottom: 10px;
  }

  .benefit-box p {
    font-size: 15.5px;
    line-height: 1.62;
    text-align: justify;
    margin: 0;
  }

  .metric-row {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 14px;
    margin: 24px 0;
  }

  .metric-card {
    background: #0a332d;
    border-radius: 8px;
    color: #fff;
    padding: 20px;
    min-height: 132px;
  }

  .metric-card strong {
    color: #17C64F;
    display: block;
    font-size: 26px;
    line-height: 1.05;
    margin-bottom: 10px;
  }

  .metric-card span {
    color: #dbe9e3;
    display: block;
    font-size: 14.5px;
    line-height: 1.45;
  }

  .calculator-section {
    background:
      linear-gradient(120deg, rgba(10, 51, 45, 0.98), rgba(10, 51, 45, 0.94)),
      url('assets/image/logo/VoltSeal-Logo_Icon.png') 48% center/340px no-repeat;
    color: #fff;
    padding: clamp(30px, 4vw, 42px);
    display: grid;
    grid-template-columns: minmax(0, 1fr) minmax(320px, 420px);
    gap: clamp(28px, 5vw, 48px);
    align-items: start;
  }

  .calculator-section h2,
  .calculator-section p {
    color: #fff;
  }

  .calculator-section p {
    color: #dbe9e3;
    max-width: 660px;
  }

  .calc-form,
  .calc-results {
    background: rgba(251, 245, 235, 0.96);
    border-radius: 8px;
    padding: 22px;
    display: grid;
    gap: 14px;
    box-shadow: 0 22px 55px rgba(0, 0, 0, 0.2);
  }

  .calc-field label {
    color: #0a332d;
    display: block;
    font-size: 13px;
    font-weight: 800;
    margin-bottom: 7px;
    text-transform: uppercase;
  }

  .calc-field input,
  .calc-field select {
    width: 100%;
    border: 1px solid rgba(10, 51, 45, 0.14);
    border-radius: 8px;
    color: #0a332d;
    font: inherit;
    padding: 13px 14px;
    outline: none;
  }

  .calc-field input:focus,
  .calc-field select:focus {
    border-color: #17C64F;
    box-shadow: 0 0 0 3px rgba(23, 198, 79, 0.12);
  }

  .calc-results {
    margin-top: 18px;
    gap: 12px;
  }

  .calc-result {
    background: rgba(244, 239, 216, 0.72);
    border: 1px solid rgba(23, 198, 79, 0.18);
    border-radius: 8px;
    padding: 15px;
  }

  .calc-result strong {
    color: #0a332d;
    display: block;
    font-size: 24px;
    margin-bottom: 5px;
  }

  .calc-result span {
    color: #4a5568;
    display: block;
    font-size: 13px;
    line-height: 1.4;
  }

  @media (max-width: 980px) {

    .benefits-hero-inner,
    .intro-card,
    .calculator-section {
      grid-template-columns: 1fr;
    }

    .hero-stack {
      max-width: 560px;
    }
  }

  @media (max-width: 760px) {
    .dimension-card {
      grid-template-columns: 1fr;
    }

    .benefit-grid,
    .metric-row {
      grid-template-columns: 1fr;
    }

    .dimension-icon {
      width: 64px;
      height: 64px;
      font-size: 25px;
    }
  }

  @media (max-width: 600px) {
    .benefits-hero {
      min-height: auto;
      padding: 118px 5% 56px;
    }

    .benefits-hero h1 {
      font-size: 36px;
      line-height: 1.1;
    }

    .benefits-hero p,
    .section-lead {
      font-size: 17px !important;
    }

    .benefits-page {
      padding: 42px 5%;
    }

    .calculator-section {
      background:
        linear-gradient(120deg, rgba(10, 51, 45, 0.98), rgba(10, 51, 45, 0.94)),
        url('assets/image/logo/VoltSeal-Logo_Icon.png') center 44px/220px no-repeat;
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
        Benefits </h1>
    </div>
  </section>


  <main class="benefits-page">
    <div class="benefits-wrap">
      <section class="intro-card">
        <div>
          <h2>Why BESS Makes Sense. The Complete Picture.</h2>
          <p><strong><i>The numbers, the compliance case and the sustainability story all in one place.</i></strong></p>
          <p>A Battery Energy Storage System (BESS) is not just a backup power solution. It is a facility-level decision
            that reduces your energy costs, your carbon footprint, your regulatory compliance and improves your
            long-term operational resilience.</p>
          <p>The case for BESS for warehouses and industrial facilities is compelling across three dimensions:</p>
        </div>
        <div class="dimension-list">
          <div class="dimension-pill">
            <span>1</span>
            <div>
              <strong>The Cost</strong>
              <p>The cost dimension, where replacing DG or reducing grid dependency with a lithium ion battery system
                delivers significant and compounding warehouse energy cost reduction year on year.</p>
            </div>
          </div>
          <div class="dimension-pill">
            <span>2</span>
            <div>
              <strong>ESG sustainability</strong>
              <p>The ESG sustainability dimension, where verified emission reductions strengthen your credentials and
                open up new revenue streams through carbon credits under India's CCTS.</p>
            </div>
          </div>
          <div class="dimension-pill">
            <span>3</span>
            <div>
              <strong>The Compliance</strong>
              <p>The compliance dimension, where the GRAP generator ban makes DG dependency a growing operational and
                legal risk every winter in Delhi NCR.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="dimension-card">
        <div class="dimension-icon"><i class="fas fa-chart-line"></i></div>
        <div>
          <h2>The Cost of Switching to BESS</h2>
          <p class="section-lead"><strong><em>Lower energy costs today. Carbon credit income tomorrow. A payback period
                that keeps
                getting shorter.</em></strong></p>
          <p><strong>The financial case for a Battery Energy Storage System:</strong></p>
          <div class="metric-row">
            <div class="metric-card">
              <strong>Rs. 32-35</strong>
              <span>DG power cost per unit.</span>
            </div>
            <div class="metric-card">
              <strong>Rs. 8-10</strong>
              <span>Grid electricity cost per unit.</span>
            </div>
            <div class="metric-card">
              <strong>Rs. 6-8</strong>
              <span>Solar energy cost per unit.</span>
            </div>
          </div>
          <div class="benefit-grid">
            <div class="benefit-box">
              <strong>Energy Cost Reduction</strong>
              <p>Whether you are replacing a diesel generator or reducing your grid dependency, a BESS for warehouses
                and industrial facilities delivers an immediate and measurable reduction in your per unit energy cost.
                DG power costs ₹32–35 per unit. Grid electricity costs ₹8-10 per unit. Solar energy costs ₹6-8 per unit.
                A lithium ion battery system stores the cheaper source and makes it available when you need it most,
                eliminating the need for the expensive one.</p>
              <p>For a 500kW operation, the annual saving ranges from ₹42L to ₹52L depending on your current setup. Over
                10 years, the cumulative energy savings can be ₹12–14 Cr. With a BESS payback period of 3–4 years and a
                BESS ROI that compounds every year as diesel prices rise, the financial case only strengthens over time.
              </p>
            </div>
            <div class="benefit-box">
              <strong>Carbon Credit Income</strong>
              <p>Under India's Carbon Credit Trading Scheme (CCTS), verified emission reductions generated by replacing
                DG or reducing grid dependency can be converted into tradeable carbon credits. This creates a second
                independent revenue stream on top of your energy cost saving. Carbon credit eligibility under CCTS is
                open to any facility with verified emission reductions, regardless of size or sector. The quantum of
                credits depends on your operational profile and verification process.</p>
              <p>Together these two financial benefits make a lithium ion battery backup power system one of the most
                compelling infrastructure investments available to commercial and industrial facilities in India today.
              </p>
            </div>
          </div>

        </div>
      </section>

      <section class="dimension-card">
        <div class="dimension-icon"><i class="fas fa-seedling"></i></div>
        <div>
          <h2>The ESG and Sustainability of Switching to BESS</h2>
          <p class="section-lead"><strong><em>Lower emissions today. Stronger credentials tomorrow. A net zero
                trajectory that keeps
                getting clearer.</em></strong></p>
          <div class="benefit-grid">
            <div class="benefit-box">
              <strong>Fewer Emissions</strong>
              <p>Diesel generators are one of the largest sources of direct carbon emissions at a facility level. Every
                litre of diesel burned releases CO₂ directly into the atmosphere, classified as Scope 1 emissions under
                global and Indian ESG reporting frameworks. Switching to a lithium ion battery system for DG replacement
                eliminates that emission source entirely. A 500kW system running 2 hours a day for 250 days a year
                eliminates approximately 180 tonnes of CO₂ annually. A concrete, measurable and reportable number.</p>
            </div>
            <div class="benefit-box">
              <strong>Cleaner Energy Profile</strong>
              <p>For facilities charging their BESS from their own solar installation, every unit of solar energy stored
                and used is a unit of grid electricity not consumed. By maximising solar energy utilisation through
                lithium ion battery solar storage, facilities reduce their Scope 2 emissions meaningfully and move
                closer to a genuinely green warehouse energy setup.</p>
            </div>
            <div class="benefit-box">
              <strong>Sustainability You Can Report</strong>
              <p>Switching to BESS delivers a quantifiable ESG sustainability carbon footprint reduction that
                strengthens your BRSR disclosure. It moves your operations closer to Net Zero, strengthens your supplier
                ESG scorecard and demonstrates a credible fossil fuel to renewable transition that goes beyond targets
                into verified action.</p>
            </div>

          </div>
        </div>
      </section>

      <section class="dimension-card">
        <div class="dimension-icon"><i class="fas fa-shield-alt"></i></div>
        <div>
          <h2>The GRAP Compliance Case for Switching to BESS</h2>
          <p class="section-lead"><strong><em>Full compliance today. Zero operational disruption tomorrow. A facility
                that runs
                regardless of the air quality stage outside.</em></strong></p>
          <p>The Graded Response Action Plan (GRAP) comes into effect across Delhi NCR every year, typically between
            October and February. As air quality deteriorates through the stages, restrictions on diesel generator usage
            become progressively stricter. At Stage 3 and Stage 4, use of DG is banned.</p>
          <div class="benefit-grid">
            <div class="benefit-box">
              <strong>No More Compliance Risk</strong>
              <p>For facilities that rely on DG as their backup power source, GRAP season creates a recurring period of
                operational and legal uncertainty. Running a DG during a GRAP ban carries the risk of fines and
                compliance notices. Not running it means no backup power. A BESS for warehouses and industrial
                facilities removes that choice entirely. Since the lithium ion battery backup power system operates with
                no diesel involved at any point, GRAP restrictions simply do not apply. DG replacement with BESS is the
                only permanent solution to GRAP compliance risk.</p>
            </div>
            <div class="benefit-box">
              <strong>No More Operational Disruption</strong>
              <p>Beyond the compliance risk, a forced DG shutdown during GRAP season has direct operational
                consequences. Temperature sensitive operations face interrupted cooling and broken temperature logs.
                Ecommerce and logistics facilities face SLA breaches and dispatch delays. Automated operations lose
                power continuity. A lithium ion battery backup power system for warehouses ensures your facility
                continues operating normally regardless of the air quality stage in effect outside.</p>
            </div>
            <div class="benefit-box">
              <strong>A Problem That Gets Bigger Every Year</strong>
              <p>GRAP restrictions have tightened progressively over the last several years and are expected to continue
                doing so. Facilities that remain DG dependent are carrying a compliance and operational risk that
                compounds every winter. Switching to a BESS warehouse energy solution eliminates that risk permanently.
              </p>
            </div>
          </div>
        </div>
      </section>

      <div class="btn-center-wrapper" style="margin-top: 20px;">
        <a href="benefits.php" class="btn-redirect" target="_blank">
          <i class="fas fa-calculator"></i> Explore Calculator
        </a>
      </div>

      <style>
      .btn-center-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
      }

      .btn-redirect {
        background: var(--brand-green);
        color: #FFFFFF;
        padding: 14px 35px;
        border-radius: 10px;
        font-weight: 700;
        font-size: 1.1rem;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        box-shadow: 0 6px 20px rgba(23, 198, 79, 0.3);
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        min-width: 250px;
        max-width: 100%;
      }

      .btn-redirect:hover {
        transform: translateY(-3px) scale(1.02);
        box-shadow: 0 10px 25px rgba(23, 198, 79, 0.45);
        background: #139e3f;
      }

      .btn-redirect i {
        transition: transform 0.3s ease;
      }

      .btn-redirect:hover i {
        transform: translateX(4px);
      }

      @media (max-width: 768px) {
        .btn-redirect {
          width: 100%;
          min-width: 100%;
        }
      }
      </style>
    </div>
  </main>

  <?php include('inc/footer.php') ?>
  <script src="assets/js/nav.js"></script>

</body>

</html>