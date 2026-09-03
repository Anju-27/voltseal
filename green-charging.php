<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoltSeal :: Green Charging</title>
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
    padding: 80px 20px;
    background-color: #f4efd8;
    font-family: 'Inter', 'Plus Jakarta Sans', sans-serif;
    position: relative;
    z-index: 1;
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
    grid-template-columns: minmax(0, 920px);
    justify-content: center;
    gap: 0;
    align-items: stretch;
    max-width: 1040px;
    margin: 0 auto;
    padding: 0;
  }

  .solution-card {
    background: rgba(251, 245, 235, 0.96);
    border: 1px solid rgba(10, 51, 45, 0.10);
    border-radius: 8px;
    padding: 46px;
    display: grid;
    grid-template-columns: 86px minmax(0, 1fr);
    gap: 28px;
    box-sizing: border-box;
    transition: all 0.3s ease;
    box-shadow: 0 22px 55px rgba(10, 51, 45, 0.10);
    position: relative;
    overflow: hidden;
    z-index: 102;
  }

  .solution-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: linear-gradient(90deg, #17c64f, rgba(23, 198, 79, 0.12));
  }

  .solution-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 26px 60px rgba(10, 51, 45, 0.14);
    border-color: rgba(23, 198, 79, 0.28);
    background: rgba(251, 245, 235, 0.98);
  }

  .solution-card .icon-box {
    width: 76px;
    height: 76px;
    background: rgba(23, 198, 79, 0.1);
    border: 1px solid rgba(23, 198, 79, 0.18);
    border-radius: 8px;
    box-shadow: 0 12px 24px rgba(23, 198, 79, 0.12);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 0;
    flex-shrink: 0;
  }

  .solution-card .icon-box i {
    color: #17c64f;
    font-size: 32px;
  }

  .solution-card .content {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
  }

  .solution-card h3 {
    font-size: 28px;
    font-weight: 800;
    color: #323232;
    margin: 0 0 14px 0;
  }

  .solution-card p {
    font-size: 16px;
    line-height: 1.7;
    text-align: justify;
    color: #4a5568;
    margin: 0 0 16px 0;
  }

  .solution-example-box {
    background: rgba(244, 239, 216, 0.72);
    border-left: 4px solid #17c64f;
    padding: 20px 22px;
    border-radius: 8px;
    margin-bottom: 26px;
    box-shadow: inset 0 0 0 1px rgba(10, 51, 45, 0.05);
    position: relative;
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
    font-size: 16px;
    line-height: 1.6;
    color: #4a5568;
    margin: 0;
  }

  .value-created-box {
    margin-top: 0;
    background: rgba(244, 239, 216, 0.55);
    border: 1px solid rgba(23, 198, 79, 0.18);
    border-radius: 8px;
    padding: 22px;
    box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.28);
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
    font-size: 16px;
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

    .solution-card {
      grid-template-columns: 1fr;
      padding: 30px;
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
        Green Charging </h1>
    </div>
  </section>

  <section class="solutions-section">
    <div class="container">

      <div class="solutions-grid">

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