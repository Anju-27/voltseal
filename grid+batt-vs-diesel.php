<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoltSeal :: Grid + BESS vs Diesel</title>
  <link rel="icon" type="image/png" href="assets/image/logo/VoltSeal-Logo_Icon.png">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
  body {
    background-color: #f4efd8;
  }

  .grid-hero {
    min-height: 590px;
    padding: clamp(130px, 12vw, 160px) 6% clamp(64px, 8vw, 96px);
    background:
      linear-gradient(115deg, rgba(10, 51, 45, 0.97), rgba(10, 51, 45, 0.74)),
      url('assets/image/banner/b4.png') center/cover no-repeat;
    color: #fff;
    display: flex;
    align-items: center;
    position: relative;
    z-index: 101;
  }

  .grid-hero-inner {
    width: 100%;
    max-width: 1180px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: minmax(0, 1fr) minmax(280px, 360px);
    gap: clamp(28px, 5vw, 48px);
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

  .grid-hero h1 {
    font-size: clamp(38px, 5.4vw, 66px);
    line-height: 1.04;
    margin: 0 0 22px;
    max-width: 790px;
  }

  .grid-hero p {
    color: #e7efe9;
    font-size: 21px;
    line-height: 1.6;
    max-width: 760px;
    margin: 0;
  }

  @media (max-width: 768px) {

    .grid-section .subheading-line,
    .grid-section .subheading-line * {
      font-size: 14px !important;
      line-height: 1.5 !important;
      text-align: left !important;
      margin: 0 0 8px !important;
    }
  }

  .hero-proof {
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.18);
    border-radius: 8px;
    padding: 24px;
    backdrop-filter: blur(8px);
  }

  .hero-proof i {
    width: 54px;
    height: 54px;
    border-radius: 8px;
    display: grid;
    place-items: center;
    color: #0a332d;
    background: #17C64F;
    font-size: 24px;
    margin-bottom: 18px;
  }

  .hero-proof strong {
    display: block;
    color: #fff;
    font-size: 26px;
    margin-bottom: 10px;
  }

  .hero-proof span {
    color: #dbe9e3;
    display: block;
    line-height: 1.55;
  }

  .grid-page {
    background: #f4efd8;
    padding: clamp(48px, 7vw, 76px) 6%;
    position: relative;
    z-index: 1;
  }

  .grid-wrap {
    max-width: 1180px;
    margin: 0 auto;
    display: grid;
    gap: clamp(22px, 3vw, 30px);
  }

  .grid-section {
    background: rgba(251, 245, 235, 0.96);
    border: 1px solid rgba(10, 51, 45, 0.11);
    border-radius: 8px;
    padding: clamp(28px, 4vw, 42px);
    box-shadow: 0 22px 55px rgba(10, 51, 45, 0.09);
    position: relative;
    overflow: hidden;
    z-index: 102;
  }

  .grid-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: linear-gradient(90deg, #17C64F, rgba(23, 198, 79, 0.12));
  }

  .section-grid {
    display: grid;
    grid-template-columns: 88px minmax(0, 1fr);
    gap: clamp(20px, 3vw, 30px);
    align-items: start;
  }

  .section-icon {
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

  .grid-section h2 {
    color: #323232;
    font-size: clamp(25px, 3vw, 30px);
    line-height: 1.18;
    margin: 0 0 8px;
    font-weight: 800;
  }

  .lead {
    color: #0a332d !important;
    font-size: 20px !important;
    font-weight: 800;
    line-height: 1.45 !important;
    margin: 0 0 10px !important;
  }

  .subheading-line {
    font-style: italic;
    line-height: 1.45 !important;
    margin: 0 0 16px !important;
    color: #4a5568;
    font-size: 16px;
    text-align: justify;
    line-height: 1.72;
  }

  .grid-section p {
    color: #4a5568;
    font-size: 16px;
    text-align: justify;
    line-height: 1.72;
    margin: 0 0 8px;
  }

  .callout {
    background: rgba(244, 239, 216, 0.72);
    border-left: 4px solid #17C64F;
    border-radius: 8px;
    padding: 19px 22px;
    margin: 22px 0 0;
    box-shadow: inset 0 0 0 1px rgba(10, 51, 45, 0.05);
  }

  .callout strong {
    color: #323232;
    display: block;
    font-size: 16px;
    font-weight: 800;
    letter-spacing: 0.5px;
    margin-bottom: 6px;
    text-transform: uppercase;
  }

  .stats-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 16px;
    margin: 26px 0;
  }

  .stat-card {
    background: rgba(244, 239, 216, 0.58);
    border: 1px solid rgba(23, 198, 79, 0.18);
    border-radius: 8px;
    padding: 22px;
    min-height: 142px;
  }

  .stat-card strong {
    color: #0a332d;
    display: block;
    font-size: 28px;
    line-height: 1.05;
    margin-bottom: 10px;
  }

  .stat-card span {
    color: #4a5568;
    display: block;
    font-size: 15px;
    line-height: 1.5;
  }

  .calculator-box {
    background: #0a332d;
    border-radius: 8px;
    color: #fff;
    display: grid;
    grid-template-columns: minmax(0, 1fr) minmax(260px, 360px);
    gap: 22px;
    align-items: start;
    margin-top: 26px;
    padding: 24px;
  }

  .calculator-box h3,
  .calculator-box p {
    color: #fff;
    margin: 0;
  }

  .calculator-box h3 {
    font-size: 23px;
    margin-bottom: 10px;
  }

  .calculator-box p {
    color: #dbe9e3;
    line-height: 1.6;
  }

  .calc-results {
    display: grid;
    gap: 12px;
  }

  .calc-result {
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.14);
    border-radius: 8px;
    padding: 14px;
  }

  .calc-result strong {
    color: #17C64F;
    display: block;
    font-size: 22px;
    margin-bottom: 4px;
  }

  .calc-result span {
    color: #dbe9e3;
    display: block;
    font-size: 13px;
    line-height: 1.4;
  }

  .cta-section {
    background:
      linear-gradient(120deg, rgba(10, 51, 45, 0.98), rgba(10, 51, 45, 0.94)),
      url('assets/image/logo/VoltSeal-Logo_Icon.png') center center/320px no-repeat;
    color: #fff;
    display: grid;
    grid-template-columns: 1fr;
    gap: clamp(28px, 5vw, 50px);
    align-items: center;
    justify-items: center;
    min-height: 330px;
    text-align: center;
  }

  .cta-section h2,
  .cta-section p {
    color: #fff;
  }

  .cta-section h2 {
    font-size: clamp(25px, 3vw, 30px);
    line-height: 1.12;
    margin-bottom: 12px;
  }


  .cta-section p {
    color: #dbe9e3;
    font-size: 16px;
    text-align: center;
    line-height: 1.65;
    max-width: 680px;
    margin-left: auto;
    margin-right: auto;
  }

  .cta-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    width: max-content;
    max-width: 100%;
    margin: 10px auto 0;
    padding: 12px 22px;
    border-radius: 6px;
    background: #f0531c;
    color: #fff;
    font-size: 14px;
    font-weight: 800;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: .02em;
    box-shadow: 0 12px 26px rgba(240, 83, 28, .28);
    transition: transform .22s ease, box-shadow .22s ease, background .22s ease;
  }

  .cta-button:hover {
    background: #d94714;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 16px 30px rgba(240, 83, 28, .34);
  }

  .cta-form {
    background: rgba(251, 245, 235, 0.96);
    border: 1px solid rgba(255, 255, 255, 0.24);
    border-radius: 8px;
    display: grid;
    gap: 18px;
    padding: 30px;
    box-shadow: 0 22px 55px rgba(0, 0, 0, 0.22);
  }

  .cta-form input,
  .cta-form textarea {
    width: 100%;
    border: 1px solid rgba(10, 51, 45, 0.12);
    border-radius: 8px;
    background: #fff;
    color: #0a332d;
    font: inherit;
    font-size: 20px;
    min-height: 62px;
    padding: 17px 20px;
    outline: none;
    transition: 0.25s;
  }

  .cta-form input:focus,
  .cta-form textarea:focus {
    border-color: #17C64F;
    box-shadow: 0 0 0 3px rgba(23, 198, 79, 0.12);
  }

  .cta-form textarea {
    min-height: 130px;
    resize: vertical;
  }

  .cta-form button {
    background: #17C64F;
    border: 0;
    border-radius: 8px;
    color: #fff;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    font-size: 18px;
    font-weight: 800;
    min-height: 68px;
    padding: 13px 18px;
    transition: 0.28s ease;
    width: 100%;
  }

  .cta-form button:hover {
    background: #0fb743;
    box-shadow: 0 12px 28px rgba(23, 198, 79, 0.28);
    transform: translateY(-2px);
  }

  .cta-form button i {
    transition: 0.28s ease;
  }

  .cta-form button:hover i {
    transform: translateX(4px);
  }

  @media (max-width: 980px) {

    .grid-hero-inner,
    .section-grid,
    .calculator-box,
    .cta-section {
      grid-template-columns: 1fr;
    }

    .hero-proof {
      max-width: 520px;
    }

    .cta-section {
      background:
        linear-gradient(120deg, rgba(10, 51, 45, 0.98), rgba(10, 51, 45, 0.94)),
        url('assets/image/logo/VoltSeal-Logo_Icon.png') center center/280px no-repeat;
    }
  }

  @media (max-width: 760px) {
    .section-icon {
      width: 64px;
      height: 64px;
      font-size: 25px;
    }

    .stats-grid {
      grid-template-columns: 1fr;
    }

    .stat-card {
      min-height: auto;
    }
  }

  @media (max-width: 600px) {
    .grid-hero {
      padding: 118px 5% 54px;
      min-height: auto;
    }

    .grid-hero h1 {
      font-size: 36px;
      line-height: 1.1;
    }

    .grid-hero p,
    .lead {
      font-size: 17px !important;
    }

    .grid-page {
      padding: 42px 5%;
    }

    .grid-section {
      padding: 26px 20px;
    }

    .grid-section h2 {
      font-size: 24px;
    }

    .cta-section {
      min-height: auto;
      background:
        linear-gradient(120deg, rgba(10, 51, 45, 0.98), rgba(10, 51, 45, 0.94)),
        url('assets/image/logo/VoltSeal-Logo_Icon.png') center 42px/220px no-repeat;
    }

    .cta-section p {
      font-size: 17px;
    }

    .cta-form {
      padding: 18px;
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
        Grid + BESS vs Diesel</h1>
    </div>
  </section>
  <main class="grid-page">
    <div class="grid-wrap">
      <section class="grid-section">
        <div class="section-grid">
          <div class="section-icon"><i class="fas fa-plug"></i></div>
          <div>
            <h2>How Grid + BESS Powers Your Facility</h2>
            <p class="subheading-line"><strong><em>The grid charges it. VoltSeal stores it. Your facility uses it no
                  diesel required.</em></strong></p>
            <p>The VoltSeal lithium ion BESS charges from the grid during off-peak hours when electricity rates are at
              their lowest. That stored energy is then discharged to power your facility when you need it most during
              peak hours, grid outages, or when your DG would normally kick in.</p>
            <p>When the grid goes down, this BESS for warehouses and industrial facilities automatically supplies power
              in under 200ms. No startup lag. No fuel. No noise.</p>
            <div class="callout">
              <strong>Result</strong>
              <p>The result is a reliable backup power system that replaces your DG entirely, reduces your energy costs
                significantly, and keeps your facility running continuously — with no solar infrastructure required.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="grid-section">
        <div class="section-grid">
          <div class="section-icon"><i class="fas fa-indian-rupee-sign"></i></div>
          <div>
            <h2>What Grid + BESS Actually Costs vs Your DG</h2>
            <p class="subheading-line"><strong><em>Grid power at off-peak rates costs a fraction of diesel. VoltSeal
                  stores it so you can use
                  it anytime.</em></strong></p>
            <p>Running a diesel generator costs ₹32–35 per unit of electricity. With a Grid + BESS for
              warehouses and industrial facilities, you charge the VoltSeal lithium ion battery system from the grid at
              off-peak rates and discharge it when you need it most. The result is stored energy at ₹6-8 per unit on
              average less than a third of what your DG costs per unit.</p>
            <p>For a 500kW operation running 4 hours a day, 250 days a year, that translates to an annual saving of up
              to ₹52L, with a payback period of 3-4 years. Replacing your DG with a lithium ion battery backup power
              system means your warehouse energy cost reduction compounds every year. Over 10 years, the cumulative
              advantage crosses ₹12–14 Cr.</p>
            <p>And the gap is only growing. Diesel prices have risen significantly over the last three years and CPCB
              IV+ compliance norms have added another 15–20% to DG operating costs. Every year you continue running a
              DG, the cost compounds.</p>
            <p>Grid + BESS costs stay flat. Your DG costs do not.</p>
          </div>
        </div>
      </section>

      <div class="btn-center-wrapper" style="margin-top: 20px;">
        <a href="grid+bess-vs-diesel.php" class="btn-redirect" target="_blank">
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


      <section class="grid-section">
        <div class="section-grid">
          <div class="section-icon"><i class="fas fa-shield-alt"></i></div>
          <div>
            <h2>GRAP Season Arrives Every Year. Your DG gets banned.</h2>
            <p class="subheading-line"><strong><em>Grid + BESS keeps your facility running even when your DG legally
                  cannot.</em></strong></p>
            <p>The Graded Response Action Plan (GRAP) comes into effect across Delhi NCR every year, typically between
              October and February. As air quality deteriorates through the stages, restrictions on diesel generator
              usage become progressively stricter. At Stage 3 and Stage 4, the GRAP generator ban makes DG usage illegal
              outright.</p>
            <p>For facilities that rely on DG as their backup power source, this creates a period of genuine operational
              uncertainty every winter.</p>
            <div class="callout">
              <strong>GRAP-ready backup</strong>
              <p>A Grid + BESS removes that uncertainty entirely. The VoltSeal lithium ion battery system
                charges from the grid and discharges when needed, with no diesel involved at any point. GRAP
                restrictions simply do not apply. Your facility continues to operate normally regardless of the air
                quality stage in effect.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="grid-section cta-section">
        <div>
          <!-- <div class="eyebrow">Get in touch</div> -->
          <h2>See What Grid + BESS Can Do For Your Facility</h2>
          <p>Our team will assess your facility, run the numbers and give you a clear picture of your savings and
            payback period.</p>
          <a class="cta-button" href="contact.php">Get in Touch <i class="fas fa-arrow-right"></i></a>
        </div>
      </section>
    </div>
  </main>

  <?php include('inc/footer.php') ?>
  <script src="assets/js/nav.js"></script>
  <script>
  function formatMoneyLakhs(value) {
    var lakhs = value / 100000;
    if (lakhs >= 100) {
      return 'Rs. ' + (lakhs / 100).toFixed(1) + ' Cr';
    }
    return 'Rs. ' + lakhs.toFixed(1) + 'L';
  }

  function updateGridSavings() {
    var annualUnits = 500 * 4 * 250;
    var annualSaving = annualUnits * (34 - 7);
    document.getElementById('savingResult').textContent = formatMoneyLakhs(annualSaving);
    document.getElementById('tenYearResult').textContent = formatMoneyLakhs(annualSaving * 10);
  }

  updateGridSavings();
  </script>
</body>

</html>