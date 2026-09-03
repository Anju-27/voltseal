<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoltSeal :: Solution</title>
  <link rel="icon" type="image/png" href="assets/image/logo/VoltSeal-Logo_Icon.png">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <style>
    body {
      background-color: var(--body-bg);
      margin: 0;
      padding: 0;
    }

    .solutions-section {
      padding: 60px 0;
      background-color: #f4efd8;
      font-family: 'Inter', 'Plus Jakarta Sans', sans-serif;
    }

    .heading-wrapper {
      text-align: center;
      margin-bottom: 50px;
    }

    .heading-wrapper h2 {
      font-size: 36px;
      font-weight: 800;
      color: #323232;
      margin: 0;
    }

    /* Mobile responsive override */
    @media (max-width: 768px) {
      .solutions-section {
        padding: 40px 0;
      }

      .heading-wrapper h2 {
        font-size: 30px;
      }
    }

    .solutions-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 30px;
      align-items: stretch;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    .solution-card {
      background: #FBF5EB;
      border: 1px solid rgba(0, 0, 0, 0.05);
      border-radius: 20px;
      padding: 35px 30px;
      display: flex;
      flex-direction: column;
      box-sizing: border-box;
      transition: all 0.3s ease;
    }

    .solution-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 35px rgba(23, 198, 79, 0.12);
      border-color: rgba(23, 198, 79, 0.3);
      background: #ffffff;
    }

    .solution-card .icon-box {
      width: 60px;
      height: 60px;
      background: rgba(23, 198, 79, 0.1);
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 25px;
      flex-shrink: 0;
    }

    .solution-card .icon-box i {
      color: #17c64f;
      font-size: 28px;
    }

    .solution-card .content {
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }

    .solution-card h3 {
      font-size: 22px;
      font-weight: 700;
      color: #323232;
      margin: 0 0 12px 0;
    }

    .solution-card p {
      font-size: 15px;
      line-height: 1.6;
      color: #4a5568;
      margin: 0 0 20px 0;
    }

    .solution-example-box {
      background: rgba(0, 0, 0, 0.03);
      border-left: 4px solid #17c64f;
      padding: 15px;
      border-radius: 4px 12px 12px 4px;
      margin-bottom: 20px;
    }

    .solution-example-box strong {
      display: block;
      color: #323232;
      font-size: 13px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      margin-bottom: 4px;
    }

    .solution-example-box p {
      font-size: 14px;
      line-height: 1.5;
      color: #4a5568;
      margin: 0;
    }

    .value-created-box {
      margin-top: 20px;
      /* Replaced 'auto' with a fixed margin to kill the awkward gap */
    }

    .value-created-box h4 {
      font-size: 14px;
      font-weight: 700;
      color: #323232;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      margin: 0 0 10px 0;
    }

    .value-created-box ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .value-created-box ul li {
      position: relative;
      padding-left: 20px;
      font-size: 14.5px;
      color: #4a5568;
      margin-bottom: 8px;
      line-height: 1.4;
    }

    /* Extra breathing room at the very bottom of the lists */
    .value-created-box ul li:last-child {
      margin-bottom: 10px;
    }

    .value-created-box ul li::before {
      content: "•";
      color: #17c64f;
      font-weight: bold;
      font-size: 18px;
      position: absolute;
      left: 2px;
      top: -2px;
    }

    @media (max-width: 992px) {
      .solutions-grid {
        grid-template-columns: 1fr;
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
        Solutions </h1>
    </div>
  </section>


  <section class="solutions-section">
    <div class="container">
      <div class="heading-wrapper">
        <h2>The Solutions VoltSeal Provides</h2>
        <div style="width: 50px; height: 4px; background: var(--volt-orange, #F0531C); margin: 10px auto;"></div>
      </div>

      <div class="solutions-grid">

        <div class="solution-card">
          <div class="icon-box">
            <i class="fas fa-stopwatch"></i>
          </div>
          <div class="content">
            <h3>Time-Shifting (Energy Arbitrage)</h3>
            <p>The battery stores electricity when power is cheap or abundant (e.g., solar generation during midday or
              off-peak hours) and discharges when electricity prices are high (peak demand periods).</p>

            <div class="solution-example-box">
              <strong>Example:</strong>
              <p>A utility charges the battery at ₹2–4/kWh during solar-heavy daytime hours and discharges at ₹8–12/kWh
                during evening peak demand.</p>
            </div>

            <div class="value-created-box">
              <h4>Value Created:</h4>
              <ul>
                <li>Lower electricity procurement cost</li>
                <li>Peak price arbitrage</li>
                <li>Better renewable energy utilization</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="solution-card">
          <div class="icon-box">
            <i class="fas fa-compress-arrows-alt"></i>
          </div>
          <div class="content">
            <h3>Peak Shaving (Demand Charge Reduction)</h3>
            <p>The battery reduces short-duration power peaks, lowering demand charges or peak procurement costs. The
              battery discharges only during the highest consumption periods to flatten the demand profile.</p>

            <div class="solution-example-box">
              <strong>Example:</strong>
              <p>A factory spikes to 500 MW for 30 minutes every evening. A battery discharges 125 MW during that
                period, reducing billed peak demand to 375 MW.</p>
            </div>

            <div class="value-created-box">
              <h4>Value Created:</h4>
              <ul>
                <li>Lower demand charges (especially for C&I customers)</li>
                <li>Reduced maximum contracted demand penalties</li>
                <li>Better load profile management</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="solution-card">
          <div class="icon-box">
            <i class="fas fa-battery-full"></i>
          </div>
          <div class="content">
            <h3>DG (Diesel Genset) Avoidance</h3>
            <p>Batteries can reduce or completely eliminate the need to run diesel generators (DG sets) during power
              outages, leading to fuel cost savings of multiple order.</p>

            <div class="solution-example-box">
              <strong>Example:</strong>
              <p>A facility running on DG cost of INR 30-35 per kWh can be reduced to less than 1/3rd by utilising BESS
                with a run time of upto 4 hours.</p>
            </div>

            <div class="value-created-box">
              <h4>Value Created:</h4>
              <ul>
                <li>Fuel cost savings (diesel is expensive and volatile)</li>
                <li>Lower O&M costs vs DG maintenance</li>
                <li>Reduced carbon emissions and air pollution</li>
                <li>Instant backup power (milliseconds vs DG startup delay)</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="solution-card">
          <div class="icon-box">
            <i class="fas fa-charging-station"></i>
          </div>
          <div class="content">
            <h3>Green Charging Solutioning</h3>
            <p>A BESS can store electricity from solar, wind, or low-carbon grid power and then use it to charge
              electric vehicles when needed, reducing dependence on fossil-fuel-heavy and expensive grid electricity,
              minimizing peak demand stress and carbon footprint.</p>

            <div class="solution-example-box">
              <strong>Example (EV Charging Hub):</strong>
              <p>An EV fast-charging station requiring 1 MW power may only have a 400 kW grid connection. A battery
                charges gradually from the grid/solar and discharges during peak EV charging sessions, enabling
                ultra-fast charging without major grid upgrades.</p>
            </div>

            <div class="value-created-box">
              <h4>Value Created:</h4>
              <ul>
                <li>Higher renewable energy utilization</li>
                <li>Reduced grid demand charges and lower electricity costs</li>
                <li>Faster EV charging without upgrading grid connection</li>
                <li>Lower carbon footprint for fleets and charging operators</li>
                <li>Improved charging reliability during grid instability</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <?php include('inc/footer.php') ?>
  <script src="assets/js/nav.js"></script>
</body>

</html>