<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoltSeal :: Solar + BESS vs Diesel</title>
  <link rel="icon" type="image/png" href="assets/image/logo/VoltSeal-Logo_Icon.png">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
  body {
    background-color: #f4efd8;
  }

  .compare-hero {
    min-height: 560px;
    padding: clamp(130px, 12vw, 160px) 6% clamp(64px, 8vw, 96px);
    background:
      linear-gradient(115deg, rgba(10, 51, 45, 0.96), rgba(10, 51, 45, 0.72)),
      url('assets/image/banner/b2.png') center/cover no-repeat;
    color: #fff;
    display: flex;
    align-items: center;
    position: relative;
    z-index: 101;
  }

  .compare-hero-inner {
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

  .compare-hero h1 {
    font-size: clamp(38px, 5.4vw, 66px);
    line-height: 1.04;
    margin: 0 0 22px;
    max-width: 780px;
  }

  .compare-hero p {
    color: #e7efe9;
    font-size: 21px;
    line-height: 1.6;
    max-width: 760px;
    margin: 0;
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

  .compare-page {
    background: #f4efd8;
    padding: clamp(48px, 7vw, 76px) 5%;
    position: relative;
    z-index: 1;
    overflow: hidden;
  }

  .compare-wrap {
    width: min(100%, 1280px);
    margin: 0 auto;
    display: grid;
    gap: clamp(22px, 3vw, 30px);
    justify-items: center;
  }

  .compare-section {
    width: 100%;
    background: rgba(251, 245, 235, 0.96);
    border: 1px solid rgba(10, 51, 45, 0.11);
    border-radius: 8px;
    padding: clamp(28px, 4vw, 42px);
    box-shadow: 0 22px 55px rgba(10, 51, 45, 0.09);
    position: relative;
    overflow: hidden;
    z-index: 102;
  }

  .compare-section::before {
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

  .compare-section h2 {
    color: #323232;
    font-size: clamp(25px, 3vw, 30px);
    line-height: 1.18;
    margin: 0 0 10px;
  }

  .lead {
    color: #4a5568;
    font-size: 19px;
    line-height: 1.75;
    margin: 0 0 18px;
  }

  .compare-section p {
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
    font-size: 18px;
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

  .quote-line {
    color: #0a332d;
    font-size: 22px;
    font-weight: 800;
    font-style: italic;
    line-height: 1.45;
    margin: 0 0 20px;
  }

  .subheading-line {
    color: #0a332d;
    font-size: 22px;
    font-weight: 800;
    font-style: italic;
    line-height: 1.45;
    margin: 0 0 20px;
  }

  .calculator-box {
    background: #0a332d;
    border-radius: 8px;
    color: #fff;
    display: grid;
    grid-template-columns: minmax(0, 1fr) auto;
    gap: 22px;
    align-items: center;
    margin-top: 24px;
    padding: 24px;
  }

  .calculator-box h3 {
    font-size: 22px;
    margin: 0 0 8px;
  }

  .calculator-box p {
    color: #dbe9e3;
    margin: 0;
  }

  .calculator-box a,
  .cta-form button {
    background: #17C64F;
    border: 0;
    border-radius: 8px;
    color: #ffffff;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 15px;
    font-weight: 800;
    padding: 13px 18px;
    text-decoration: none;
    white-space: nowrap;
    transition: 0.28s ease;
  }

  .calculator-box a:hover,
  .cta-form button:hover {
    background: #0fb743;
    color: #ffffff;
    box-shadow: 0 12px 28px rgba(23, 198, 79, 0.28);
    transform: translateY(-2px);
  }

  .calculator-box a:hover i,
  .cta-form button:hover i {
    transform: translateX(4px);
  }

  .calculator-box a i,
  .cta-form button i {
    transition: 0.28s ease;
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

  .cta-copy {
    max-width: 720px;
    margin: 0 auto;
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

  .cta-points {
    display: grid;
    gap: 10px;
    margin-top: 26px;
  }

  .cta-points span {
    color: #e7efe9;
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 16px;
    font-weight: 700;
  }

  .cta-points i {
    color: #17C64F;
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
    justify-content: center;
    font-size: 18px;
    min-height: 68px;
    width: 100%;
  }

  @media (max-width: 980px) {

    .compare-hero-inner,
    .section-grid,
    .cta-section {
      grid-template-columns: 1fr;
    }

    .stats-grid {
      grid-template-columns: 1fr;
    }

    .calculator-box {
      grid-template-columns: 1fr;
    }

    .hero-proof {
      max-width: 520px;
    }

    .calculator-box a {
      justify-content: center;
      width: max-content;
      max-width: 100%;
    }

    .cta-section {
      background:
        linear-gradient(120deg, rgba(10, 51, 45, 0.98), rgba(10, 51, 45, 0.94)),
        url('assets/image/logo/VoltSeal-Logo_Icon.png') center center/280px no-repeat;
    }
  }

  @media (max-width: 760px) {
    .section-grid {
      grid-template-columns: 1fr;
    }

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
    .compare-hero {
      padding: 118px 5% 54px;
      min-height: auto;
    }

    .compare-hero h1 {
      font-size: 36px;
      line-height: 1.1;
    }

    .compare-hero p,
    .lead {
      font-size: 17px;
    }

    .compare-page {
      padding: 42px 5%;
    }

    .compare-section {
      padding: 26px 20px;
    }

    .compare-section h2 {
      font-size: 25px;
    }

    .cta-section {
      min-height: auto;
      background:
        linear-gradient(120deg, rgba(10, 51, 45, 0.98), rgba(10, 51, 45, 0.94)),
        url('assets/image/logo/VoltSeal-Logo_Icon.png') center 42px/220px no-repeat;
    }

    .cta-section h2 {
      font-size: 30px;
    }

    .cta-section p {
      font-size: 17px;
    }

    .cta-form {
      padding: 18px;
    }

    .calculator-box a {
      width: 100%;
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
        Solar + BESS vs Diesel </h1>
    </div>
  </section>

  <main class="compare-page">
    <div class="compare-wrap">
      <section class="compare-section">
        <div class="section-grid">
          <div class="section-icon"><i class="fas fa-battery-full"></i></div>
          <div>
            <h2>How Solar + BESS Powers Your Facility</h2>
            <p class="subheading-line"><strong><em>More solar captured. Less diesel burned. Same power, lower
                  cost.</em></strong></p>
            <p>Solar panels on your facility capture sunlight and generate electricity through the day. Instead of this
              energy going to waste or being exported at throwaway rates, it gets stored directly in VoltSeal's lithium
              ion BESS system</p>
            <p>When the grid goes down, or when your DG would normally kick in, the BESS automatically supplies power to
              your facility in under 200ms. No startup lag. No fuel. No noise.</p>
            <div class="callout">
              <strong>Result</strong>
              <p>The result is a facility that runs continuously on energy you already generate at a fraction of what
                diesel costs you today.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="compare-section">
        <div class="section-grid">
          <div class="section-icon"><i class="fas fa-indian-rupee-sign"></i></div>
          <div>
            <h2>What Solar + BESS Actually Costs vs Your DG</h2>
            <p class="subheading-line"><strong><em>And with diesel prices rising every year, the gap only gets
                  wider.</em></strong></p>
            <p>Running a diesel generator costs ₹32–35 per unit of electricity. With Solar + BESS, your per unit
              energy cost drops to ₹6-8/kWh less than a third of what your DG costs today. Solar + BESS delivers the
              same power at a fraction of the cost, and that gap widens every year.</p>
            <p>For a 500kW operation running 2 hours a day, 250 days a year, that translates to an annual saving of
              Rs.60-72L. Replacing your DG with a lithium ion battery backup power system means your warehouse energy
              cost reduction compounds every year. Over 10 years, the cumulative advantage crosses Rs.6-7 Cr (depending
              on the facility's specific case).</p>
            <p>And the imperative is only growing. Diesel prices have risen significantly over the last three years, so
              every year you continue running a DG, the cost compounds.</p>
            <p>Solar + BESS costs stay flat. Your DG costs do not.</p>
          </div>
        </div>
      </section>

      <section class="compare-section">
        <div class="section-grid">
          <div class="section-icon"><i class="fas fa-leaf"></i></div>
          <div>
            <h2>Cut Your Carbon. Not Your Operations.</h2>
            <p class="subheading-line"><strong><em>Every unit of diesel you stop burning is a measurable step towards
                  your
                  sustainability targets.</em></strong></p>
            <p>Diesel generators are one of the largest sources of direct carbon emissions at a facility level. Every
              litre of diesel burned releases CO₂ directly into the atmosphere, classified as Scope 1 emissions under
              global and Indian ESG reporting frameworks.</p>
            <p>Replacing your DG with a Solar + BESS eliminates that emission source entirely. A 500kW system
              running 2 hours a day for 250 days a year eliminates approximately 180 tonnes of CO₂ annually. That is a
              concrete, measurable, reportable number.</p>
            <div class="callout">
              <strong>ESG impact</strong>
              <p>Switching to Solar + BESS is a direct and measurable step towards stronger ESG performance and long
                term sustainability. It eliminates your facility's single largest source of direct Scope 1 emissions,
                gives you a quantifiable reduction reportable under BRSR, and moves your operations meaningfully closer
                to net-zero. The same facility. The same output. Zero direct emissions.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="compare-section">
        <div class="section-grid">
          <div class="section-icon"><i class="fas fa-coins"></i></div>
          <div>
            <h2>Your BESS Does More Than Saving Costs. It Can Generate Income.</h2>
            <p class="subheading-line"><strong><em>Switching to Solar + BESS doesn't just cut your costs. It can create
                  an entirely new
                  revenue stream.</em></strong></p>
            <p>When you replace your DG with a Solar + BESS, you are eliminating a measurable quantity of CO₂
              emissions. Under India's Carbon Credit Trading Scheme (CCTS), those verified emission reductions can be
              converted into tradeable carbon credits with real market value making DG replacement with a lithium ion
              battery system one of the most financially compelling sustainability decisions available today.</p>
            <p>This means your VoltSeal investment generates two independent streams simultaneously. Cost savings on one
              side. Carbon credit income on the other.</p>
            <p>The exact credits your facility can generate depends on your emissions baseline, operational profile and
              verification process. This is something VoltSeal works through with you as part of the site assessment.
            </p>
          </div>
        </div>
      </section>

      <div class="btn-center-wrapper" style="margin-top: 20px;">
        <a href="solar+bess-vs-diesel.php" class="btn-redirect" target="_blank">
          <i class="fas fa-calculator"></i> Explore Calculator
        </a>
      </div>

      <style>
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

      <section class="compare-section">
        <div class="section-grid">
          <div class="section-icon"><i class="fas fa-shield-alt"></i></div>
          <div>
            <h2>GRAP Is Coming. Is Your Facility Ready?</h2>
            <p class="subheading-line"><strong><em>Solar + BESS keeps your facility running even when your DG is barred
                  from use</em></strong></p>
            <p>The Graded Response Action Plan (GRAP) is a set of emergency air quality measures that come into effect
              across Delhi NCR every year, typically between October and February. As air quality deteriorates through
              the stages, restrictions on diesel generator usage become progressively stricter. At Stage 3 and Stage 4,
              the GRAP generator ban makes DG usage illegal.</p>
            <p>For facilities that rely on DG as their backup power source, this creates a period of genuine operational
              uncertainty every winter. Running a DG during a GRAP ban carries the risk of fines and compliance notices.
              Not running it means no backup power.</p>
            <p>A BESS for warehouses and industrial facilities removes that uncertainty entirely. Since the Solar +
              BESS system runs on stored solar energy with no diesel involved, GRAP restrictions simply do not apply.
              Your facility continues to operate normally regardless of the air quality stage in effect. Replacing your
              DG with a lithium ion battery backup power system is the most reliable way to stay compliant and
              operational through every GRAP season.</p>
          </div>
        </div>
      </section>

      <section class="compare-section cta-section">
        <div class="cta-copy">
          <div class="eyebrow">Get in touch</div>
          <h2>See What Solar + BESS Can Do For Your Facility</h2>
          <p>Our team will assess your facility, run the numbers and give you a clear picture of your savings and
            payback period.</p>
          <a class="cta-button" href="contact.php">Get in Touch <i class="fas fa-arrow-right"></i></a>
        </div>
      </section>
    </div>
  </main>

  <?php include('inc/footer.php') ?>
  <script src="assets/js/nav.js"></script>
</body>

</html>