<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoltSeal :: Cold Chain Industry</title>
  <link rel="icon" type="image/png" href="assets/image/logo/VoltSeal-Logo_Icon.png">
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght=400;500;600;700;800&family=Plus+Jakarta+Sans:wght=400;600;700;800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <style>
    * {
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    .content-section {
      padding: 60px 20px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .grid-2 {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 35px;
    }

    .grid-3 {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
    }

    /* --- Bolder Typography --- */
    .subheading {
      font-size: 26px;
      color: #0a332d;
      font-weight: 700;
      margin-top: 0;
      margin-bottom: 12px;
      font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .para {
      color: #0a332d;
      opacity: 0.9;
      line-height: 1.8;
      font-size: 16px;
      text-align: justify;
      margin-bottom: 20px;
    }

    /* --- Hover Effects & Responsive Styling --- */
    .highlight-card {
      background: #ffffff;
      border-radius: 12px;
      padding: 35px;
      border-top: 5px solid #17c64f;
      box-shadow: 0 4px 15px rgba(10, 51, 45, 0.05);
      transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .highlight-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 25px rgba(10, 51, 45, 0.12);
    }

    .hover-box {
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      transition: all 0.3s ease;
    }

    .hover-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
    }

    .btn-custom {
      display: inline-block;
      background: #f0531c;
      color: #fff;
      padding: 16px 36px;
      font-weight: 700;
      text-decoration: none;
      border-radius: 8px;
      font-size: 16px;
      transition: 0.3s ease;
      border: none;
      cursor: pointer;
      box-shadow: 0 4px 10px rgba(240, 83, 28, 0.2);
    }

    .btn-custom:hover {
      background: #0a332d;
      transform: translateY(-3px);
      box-shadow: 0 6px 15px rgba(10, 51, 45, 0.3);
    }

    /* --- Scroll Animation --- */
    .reveal-element {
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.8s ease-out;
    }

    .reveal-element.active {
      opacity: 1;
      transform: translateY(0);
    }

    /* --- Popup Modal --- */
    .modal-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(10, 12, 16, 0.85);
      z-index: 9999;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.3s ease;
      padding: 15px;
    }

    .modal-overlay.open {
      opacity: 1;
      pointer-events: auto;
    }

    .modal-content {
      background: #f4efd8;
      width: 100%;
      max-width: 550px;
      border-radius: 16px;
      padding: 35px;
      position: relative;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.35);
      transform: scale(0.8);
      transition: transform 0.3s ease;
      border: 3px solid #17c64f;
    }

    .modal-overlay.open .modal-content {
      transform: scale(1);
    }

    .modal-close {
      position: absolute;
      top: 15px;
      right: 15px;
      background: none;
      border: none;
      font-size: 24px;
      color: #0a332d;
      cursor: pointer;
      transition: 0.2s;
    }

    .modal-close:hover {
      color: #f0531c;
    }

    .calc-option-card {
      background: #ffffff;
      padding: 20px;
      margin: 14px 0;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      text-decoration: none;
      color: #0a332d;
      font-weight: 700;
      font-size: 16px;
      border-left: 6px solid #f0531c;
      transition: all 0.2s ease;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.04);
    }

    .calc-option-card:hover {
      border-left-color: #17c64f;
      background: #dbf5e7;
      transform: translateX(8px);
    }

    .calc-option-card i.arrow-icon {
      color: #f0531c;
      transition: 0.2s;
    }

    .calc-option-card:hover i.arrow-icon {
      color: #17c64f;
    }

    @media (max-width: 768px) {
      .content-section {
        padding: 20px 15px;
      }

      .subheading {
        font-size: 22px;
      }

      .para {
        font-size: 15px;
      }

      .modal-content {
        padding: 20px 20px;
      }
    }

    @media (max-width: 768px) {
      .content-section {
        padding: 20px 15px;
      }

      .hero-small h1 {
        font-size: 28px !important;
      }

      .subheading {
        font-size: 22px !important;
      }

      section style*="background-color: #17c64f" h3,
      section:has(.btn-custom) h3,
      .content-section h3 {
        font-size: 22px !important;
      }

      .highlight-card .subheading,
      .hover-box .subheading {
        font-size: 18px !important;
      }

      .para {
        font-size: 15px;
      }

      .modal-content {
        padding: 20px 20px;
      }
    }
  </style>
</head>

<body style="font-family: 'Inter', sans-serif; background-color: #f4efd8; color: #0a332d; margin: 0;">

  <?php include('inc/header.php') ?>

  <!-- HERO SECTION -->
  <section class="hero-small"
    style="position: relative; height: 60vh; min-height: 400px; background: #0a0c10; display: flex; align-items: center; overflow: hidden; font-family: 'Plus Jakarta Sans', sans-serif;">
    <div
      style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(10, 12, 16, 0.8), rgba(10, 12, 16, 0.6)), url('assets/image/about/a3.png'); background-size: cover; background-position: center;">
    </div>
    <div class="container"
      style="max-width: 1200px; margin: auto; padding: 0 20px; position: relative; z-index: 2; text-align: center;">
      <h1 class="reveal" style="color: #fff; font-size: 45px; font-weight: 800; line-height: 1.2; margin: 0;">
        Cold Chain Industry</h1>
    </div>
  </section>

  <!-- SECTION 1: INTRO -->
  <section style="background-color: #f4efd8;" class="reveal-element">
    <div class="content-section" style="text-align: center;">
      <h2 class="subheading"
        style="font-size: clamp(25px, 4.5vw, 30px); color: #f0531c; margin-bottom: 5px; line-height: 1.3;">
        Cold chain runs on unbroken cold. VoltSeal makes sure that's all it costs.
      </h2>
      <p
        style="font-size: 19px; font-weight: 600; font-style: italic; color: #0a332d; max-width: 950px; margin: 0 auto; line-height: 1.6;">
        <strong><em>Intelligent battery storage that reduces your energy costs and keeps your refrigeration running
            without interruption.</em></strong>
      </p>
    </div>
  </section>

  <!-- SECTION 2: WHO THIS IS FOR -->
  <section style="background-color: #f4efd8;" class="reveal-element">
    <div class="content-section">
      <div style="text-align: center; max-width: 850px; margin: 0 auto 30px auto;">
        <span style="color: #17c64f; padding: 6px 18px; border-radius: 20px; font-size: 15px; font-weight: 700; text-transform: uppercase;
           letter-spacing: 0.5px;">Target
          Segment</span>
        <h3 class="subheading" style="font-size: 36px; color: #0a332d; font-weight: 800; margin: 5px 0 0 0;">Who This Is
          For</h3>
        <p class="para" style="text-align: center; font-size: 17px;">Cold chain facilities run on one thing,
          uninterrupted cold. The moment power fails, everything inside is at risk. The question is how much that risk
          is costing you.</p>
      </div>

      <div class="grid-2">
        <div class="highlight-card">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <!-- Icon Section -->
            <div style="font-size: 28px; color: #f0531c; display: flex; align-items: center;">
              <i class="fa-solid fa-warehouse"></i>
            </div>

            <!-- Heading Section -->
            <h4 class="subheading" style="font-size: 20px; color: #17c64f; margin: 0;">
              Third Party Cold Storage (3PL)
            </h4>
          </div>
          <p class="para" style="font-size: 15px; margin-bottom: 0;">
            If you run a third party cold storage facility, a single outage puts multiple clients' inventory at risk
            simultaneously. The financial loss is immediate. The client relationship damage is not always recoverable.
          </p>
        </div>
        <div class="highlight-card">
          <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
            <!-- Icon Section -->
            <div style="font-size: 28px; color: #f0531c; display: flex; align-items: center;">
              <i class="fa-solid fa-box"></i>
            </div>

            <!-- Heading Section -->
            <h4 class="subheading" style="font-size: 20px; color: #17c64f; margin: 0;">
              In-House Cold Chain
            </h4>
          </div>
          <p class="para" style="font-size: 15px; margin-bottom: 0;">If you manage an in-house cold chain, the exposure
            is direct. Your product. Your write-off. Your FSSAI temperature log showing a gap that turns an operational
            problem into a compliance event.</p>
        </div>
      </div>

      <div style="text-align: center; margin-top: 35px;">
        <p style="font-weight: 700; color: #f0531c; font-size: 18px;">
          Either way your energy costs are too high and your power supply too unreliable. VoltSeal fixes both.</p>
      </div>
    </div>
  </section>

  <!-- SECTION 3: THE COLD CHAIN POWER CHALLENGE -->
  <section style="background-color: #f4efd8;" class="reveal-element">
    <div class="content-section" style="border-top: 1px solid rgba(10,51,45,0.15);">
      <div style="text-align: center; max-width: 850px; margin: 0 auto 20px auto;">
        <span style="color: #17c64f; padding: 6px 18px; border-radius: 20px; font-size: 15px; font-weight: 700; 
          text-transform: uppercase;">Critical
          Risks</span>
        <h3 class="subheading" style="font-size: 36px; color: #0a332d; font-weight: 800; margin: 5px 0 0 0;">The Cold
          Chain Power Challenge</h3>
      </div>

      <div class="grid-3">
        <div class="hover-box" style="border-left: 5px solid #f0531c;">
          <h4 class="subheading" style="font-size: 20px; color: #f0531c;"><i class="fas fa-chart-line"
              style="margin-right: 10px;"></i>
            Rising Energy Costs </h4>
          <p class="para" style="font-size: 15px; margin-bottom: 0;">Cold chain facilities run refrigeration
            continuously 24 hours a day, 365 days a year. Whether your facility runs on a diesel generator as backup,
            draws from the grid at peak rates, or has solar installed without storage your energy bill compounds every
            year with no natural ceiling.</p>
          <p class="para" style="font-size: 15px; margin-bottom: 0;">Diesel costs ₹32–35/kWh. Grid peak tariffs sit at
            ₹8–10/kWh. If you have solar but no storage, excess
            generation during the day gets exported at throwaway rates while your facility draws from the grid at full
            price overnight when refrigeration demand is highest. VoltSeal's <strong> lithium battery cold storage
              India</strong> system
            stores energy when it's cheapest and supplies it when your facility needs it most reducing your blended
            energy cost significantly across every scenario. Unlike diesel or grid tariffs, that cost stays flat. Your
            current energy bill does not.</p>
        </div>

        <div class="hover-box" style="border-left: 5px solid #17c64f;">
          <h4 class="subheading" style="font-size: 20px; color: #17c64f;"><i class="fas fa-bolt"
              style="margin-right: 10px;"></i> Power Continuity
          </h4>
          <p class="para" style="font-size: 15px; margin-bottom: 0;">A cold chain facility runs on one non-negotiable
            requirement unbroken refrigeration. FSSAI mandates refrigerated storage between 1–5°C and frozen storage at
            -18°C or below. These are not operational targets they are legal requirements. Every product in your
            facility, across every temperature zone, depends entirely on continuous, reliable power.</p>
          <p class="para" style="font-size: 15px; margin-bottom: 0;">A power cut doesn't give you time to respond.
            Temperature zones begin rising immediately. For a 3PL operator, every client's inventory is simultaneously
            at risk. For an in-house facility, it's your own product on the line. Either way, the loss is immediate,
            unrecoverable, and entirely preventable with the right <strong>cold chain power backup solution
              India</strong>.</p>
        </div>

        <div class="hover-box" style="border-left: 5px solid #0a332d;">
          <h4 class="subheading" style="font-size: 20px; color: #0a332d;">
            <i class="fas fa-shield-alt" style="margin-right: 10px;"></i>
            Compliance Pressure
          </h4>
          <p class="para" style="font-size: 15px; margin-bottom: 0;">Every cold storage food business in India must hold
            an active FSSAI license State or Central depending on scale and geography. Your facility is subject to
            periodic inspections under Schedule 4, and every temperature excursion must be documented the duration, the
            maximum temperature reached, and the corrective action taken. HACCP critical control points across your cold
            chain require the same level of documented, verified monitoring at every stage.</p>
          <p class="para" style="font-size: 15px; margin-bottom: 0;">A power cut that causes a temperature breach isn't
            just an operational event. It is an FSSAI compliance event. A documented excursion showing your facility
            lost temperature control puts your license at risk. For a 3PL operator, it simultaneously puts every client
            relationship on the line. <strong>FSSAI compliance cold chain power backup India</strong> is not optional it
            is the minimum
            standard your facility must meet every single day.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4 — THE FINANCIAL CASE -->
  <section style="background-color: #f4efd8;" class="reveal-element">
    <div class="content-section" style="border-top: 1px solid rgba(10,51,45,0.15);">
      <div style="text-align: center; max-width: 850px; margin: 0 auto 45px auto;">
        <h3 class="subheading" style="font-size: 36px; color: #0a332d; font-weight: 800; margin: 5px 0 0 0;">
          The Financial Case</h3>
        <p style="font-size: 16px; color: #0a332d; font-weight: 600; font-style: italic;">
          <strong><em>What does switching to BESS mean for your cold chain facility's bottom line? The answer depends on
              your current energy setup. Find your scenario below.</em></strong>
        </p>
      </div>

      <div class="grid-2" style="margin-bottom: 35px;">
        <!-- Option A -->
        <div class="highlight-card" style="display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <span
              style="background: #dbf5e7; color: #0a332d; padding: 4px 14px; border-radius: 20px; font-size: 12px; font-weight: 700; text-transform: uppercase;">Option
              A</span>
            <h4 class="subheading" style="font-size: 21px; margin: 10px 0;">If your facility has rooftop solar</h4>
            <p class="para" style="font-size: 15px; margin-bottom: 0px;">Your solar panels generate electricity through
              the day but without
              storage, excess energy gets exported at throwaway rates while your refrigeration draws from the grid at
              full price overnight. Every hour your cold chain runs on grid or diesel power instead of stored solar is
              money your facility is leaving on the table.</p>
            <p class="para" style="font-size: 15px; margin-bottom: 10px;">VoltSeal's <strong>BESS cold chain</strong>
              system stores that
              excess solar energy
              and supplies it to your facility for up to 4 hours at ₹6–8/kWh against ₹32–35/kWh on diesel. For a 500kW
              cold chain facility running 2 hours a day across 250 days, the financial case looks like this:</p>
          </div>
          <div
            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 12px; text-align: center; margin-top: 15px; width: 100%;">
            <div style="background: #f4efd8; padding: 12px 6px; border-radius: 6px;">
              <div style="font-size: 10px; opacity: 0.7; font-weight: 700; margin-bottom: 4px;">ANNUAL SAVINGS</div>
              <div style="color: #f0531c; font-size: 18px; font-weight: 700;">₹77,16,049</div>
            </div>
            <div style="background: #f4efd8; padding: 12px 6px; border-radius: 6px;">
              <div style="font-size: 10px; opacity: 0.7; font-weight: 700; margin-bottom: 4px;">Payback Period</div>
              <div style="color: #0a332d; font-size: 18px; font-weight: 700;">3.04 years</div>
            </div>
            <div style="background: #f4efd8; padding: 12px 6px; border-radius: 6px;">
              <div style="font-size: 10px; opacity: 0.7; font-weight: 700; margin-bottom: 4px;">Net Profit After 10
                Years</div>
              <div style="color: #17c64f; font-size: 18px; font-weight: 700;">₹5,37,03,704</div>
            </div>
          </div>
        </div>

        <!-- Option B -->
        <div class="highlight-card" style="display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <span
              style="background: #dbf5e7; color: #0a332d; padding: 4px 14px; border-radius: 20px; font-size: 12px; font-weight: 700; text-transform: uppercase;">Option
              A</span>
            <h4 class="subheading" style="font-size: 21px; margin: 10px 0;">If your facility does not have rooftop solar
            </h4>
            <p class="para" style="font-size: 15px; margin-bottom: 0px;">No solar infrastructure required. VoltSeal's
              <strong> lithium ion battery</strong> charges from the grid during off-peak hours and supplies power to
              your facility for up to 4 hours reducing your dependence on diesel significantly. Stored grid energy at
              ₹8–10/kWh against diesel at ₹32–35/kWh delivers an immediate and compelling return.
            </p>
          </div>
          <div
            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 12px; text-align: center; margin-top: 15px; width: 100%;">
            <div style="background: #f4efd8; padding: 12px 6px; border-radius: 6px;">
              <div style="font-size: 10px; opacity: 0.7; font-weight: 700; margin-bottom: 4px;">ANNUAL SAVINGS</div>
              <div style="color: #f0531c; font-size: 18px; font-weight: 700;">₹61,72,840</div>
            </div>
            <div style="background: #f4efd8; padding: 12px 6px; border-radius: 6px;">
              <div style="font-size: 10px; opacity: 0.7; font-weight: 700; margin-bottom: 4px;">Payback Period</div>
              <div style="color: #0a332d; font-size: 18px; font-weight: 700;">3.80 years</div>
            </div>
            <div style="background: #f4efd8; padding: 12px 6px; border-radius: 6px;">
              <div style="font-size: 10px; opacity: 0.7; font-weight: 700; margin-bottom: 4px;">Net Profit After 10
                Years</div>
              <div style="color: #17c64f; font-size: 18px; font-weight: 700;">₹3,82,71,605</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Layered Setup Box -->
      <div class="hover-box"
        style="padding: 35px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.02); margin-top: 20px;">
        <h4 class="subheading" style="color: #17c64f; font-size: 20px;">
          The layered use case: Solar, Battery and Grid working together.</h4>
        <p class="para" style="font-size: 15px; margin-bottom: 0px;">For many cold chain facilities, the most effective
          energy setup is a
          layered one. VoltSeal sits at the centre
          storing the cheapest available energy and deploying it first.</p>
        <p class="para" style="font-size: 15px; margin-bottom: 0px;">Your solar panels generate electricity through the
          day. The BESS stores
          excess solar energy and discharges it for up to 4 hours during peak cost periods, grid outages, or GRAP
          restrictions. For the remaining hours, your facility draws from the grid or continues on direct solar. Diesel
          becomes the last resort rather than the default.</p>
        <p class="para" style="font-size: 15px;">The result is a cold chain power backup solution India where:</p>
        <ul
          style="list-style: none; padding: 0; margin: 0 0 20px 0; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px;">
          <li style="color: #0a332d; font-size: 15px;"><i class="fas fa-check-circle"
              style="color: #17c64f; margin-right: 10px;"></i> Stored solar at <strong>₹6–8/kWh</strong> is used first
          </li>
          <li style="color: #0a332d; font-size: 15px;"><i class="fas fa-check-circle"
              style="color: #17c64f; margin-right: 10px;"></i> Grid at <strong>₹8–10/kWh</strong> fills the gap</li>
          <li style="color: #0a332d; font-size: 15px;"><i class="fas fa-check-circle"
              style="color: #f0531c; margin-right: 10px;"></i>DG at <strong>₹32–35/kWh</strong> is reserved for genuine
            emergencies only</li>
        </ul>
        <p class="para" style="font-size: 15px;"><i>Your facility's actual savings will vary based on power requirement,
            runtime, and energy setup.</i></p>
        <div style="text-align: center; margin-top: 20px;">
          <button class="btn-custom" onclick="openCalcModal()"><i class="fas fa-calculator"
              style="margin-right: 8px;"></i> Calculate Your Savings →</button>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: HOW VOLTSEAL WORKS -->
  <section style="background-color: #f4efd8;" class="reveal-element">
    <div class="content-section" style="border-top: 1px solid rgba(10,51,45,0.15);">
      <div style="text-align: center; max-width: 850px; margin: 0 auto 30px auto;">
        <h3 class="subheading" style="font-size: 30px; color: #0a332d; font-weight: 800; margin: 5px 0 0 0;">
          How VoltSeal Works For Your Cold Chain Facility</h3>
        <p style="font-size: 16px; color: #0a332d; font-weight: 600; font-style: italic;">
          <strong><em>Smart battery energy storage systems that fits into your existing setup. Not a replacement. An
              upgrade.</em></strong>
        </p>
      </div>

      <div class="grid-2">
        <div class="hover-box">
          <h4 class="subheading" style="font-size: 18px; color: #f0531c;"><i class="fas fa-bolt"
              style="margin-right: 10px;"></i>
            Your refrigeration never notices the switch</h4>
          <p class="para" style="font-size: 15px; margin-bottom: 0;">When grid power fluctuates or fails, most
            facilities experience a gap however brief before backup power kicks in. For a cold chain facility, even a
            momentary interruption triggers temperature alarms, breaks FSSAI temperature logs, and puts product at risk
            across every zone simultaneously.</p>
          <p class="para" style="font-size: 15px; margin-bottom: 0;">VoltSeal's cold chain power backup solution India
            switches over in under 200ms faster than any diesel generator can start and faster than your refrigeration
            systems can register a disruption. Your compressors, cooling units, and temperature monitoring systems
            continue running without interruption. No alarms. No log gaps. No product at risk.</p>

        </div>
        <div class="hover-box">
          <h4 class="subheading" style="font-size: 18px; color: #17c64f;"><i class="fas fa-snowflake"
              style="margin-right: 10px;"></i>Powers every temperature zone simultaneously</h4>
          <p class="para" style="font-size: 15px; margin-bottom: 0;">A cold chain facility doesn't run on one
            temperature it runs on several. Chilled zones at 1–5°C. Frozen zones at -18°C or below. Deep freeze at -25°C
            or lower. Each zone has its own refrigeration load, its own FSSAI mandate, and its own consequence if power
            fails.</p>
          <p class="para" style="font-size: 15px; margin-bottom: 0;">VoltSeal's battery energy storage system powers
            your entire facility simultaneously not selectively. Every zone stays within its required temperature range
            regardless of what's happening with the grid outside. No prioritisation. No partial coverage. Complete
            protection across your entire cold chain operation.</p>
        </div>
        <div class="hover-box">
          <h4 class="subheading" style="font-size: 18px; color: #17c64f;"><i class="fas fa-gears"
              style="margin-right: 10px;"></i>
            Works with whatever setup you already have</h4>
          <p class="para" style="font-size: 15px; margin-bottom: 0;">
            VoltSeal's lithium ion battery system integrates with your existing energy infrastructure not replace it.
            Whether your facility runs on grid power, has rooftop solar already installed, or relies on a diesel
            generator as backup, the BESS fits in without requiring significant civil or electrical modifications.
          </p>
          <p class="para" style="font-size: 15px; margin-bottom: 0;">It charges from the cheapest available source
            stored solar at ₹6–8/kWh or grid at off-peak rates and discharges automatically when your facility needs it.
            Solar, grid, and BESS work together as one layered system, always prioritising the lowest cost energy source
            first.</p>
        </div>
        <div class="hover-box">
          <h4 class="subheading" style="font-size: 18px; color: #f0531c;"><i class="fas fa-business-time"
              style="margin-right: 10px;"></i>
            Installation that doesn't stop your operations .</h4>
          <p class="para" style="font-size: 15px; margin-bottom: 0;">
            A cold chain facility cannot afford downtime not for maintenance, not for upgrades, and certainly not for
            new equipment installation. VoltSeal's system is designed with that reality in mind.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: COMPLIANCE, ESG AND SUSTAINABILITY -->
  <section style="background-color: #f4efd8;" class="reveal-element">
    <div class="content-section" style="border-top: 1px solid rgba(10,51,45,0.15);">
      <div style="text-align: center; max-width: 850px; margin: 0 auto 30px auto;">
        <h3 class="subheading" style="font-size: 30px;">Compliance, ESG & Sustainability</h3>
      </div>

      <div class="grid-3">
        <div class="hover-box" style="text-align: center; border-bottom: 4px solid #f0531c;">
          <div style="font-size: 30px; color: #f0531c; margin-bottom: 10px;"><i class="fas fa-smog"></i></div>
          <h4 class="subheading" style="font-size: 18px;">GRAP season comes every winter. With VoltSeal, your cold chain
            doesn't notice.</h4>
          <p class="para" style="font-size: 14px; text-align: justify; margin-bottom: 0;">When Delhi NCR air quality
            hits
            Stage 3 or Stage 4, DG usage is banned no exceptions, cold chain facilities included. For a 3PL operator,
            that means every client's inventory is simultaneously exposed with no compliant backup. For an in-house
            facility, it means your entire cold chain is unprotected at the moment your DG is legally prohibited from
            running.</p>
          <p class="para" style="font-size: 14px; text-align: justify; margin-bottom: 0;">VoltSeal runs on zero diesel.
            GRAP restrictions don't apply. Every temperature zone stays within its FSSAI mandated range. Every client's
            inventory stays protected. Every winter, while others scramble for compliance, your operations don't skip a
            beat.</p>
        </div>
        <div class="hover-box" style="text-align: center; border-bottom: 4px solid #17c64f;">
          <div style="font-size: 30px; color: #17c64f; margin-bottom: 10px;"><i class="fas fa-leaf"></i></div>
          <h4 class="subheading" style="font-size: 18px;">180 tonnes of CO2. Gone. Every year.</h4>
          <p class="para" style="font-size: 14px; text-align: justify; margin-bottom: 0;">A 500kW VoltSeal system
            running
            2 hours a day eliminates approximately 180 tonnes of CO2 annually direct Scope 1 emissions, permanently
            removed. For facilities with solar, stored solar energy replaces grid electricity, reducing Scope 2
            emissions meaningfully. Both are quantifiable, reportable under BRSR, and real not targets, not projections.
            Every tonne eliminated strengthens your ESG credentials and moves your cold chain facility meaningfully
            closer to a sustainable energy operation.</p>
        </div>
        <div class="hover-box" style="text-align: center; border-bottom: 4px solid #0a332d;">
          <div style="font-size: 30px; color: #0a332d; margin-bottom: 10px;"><i class="fas fa-wallet"></i></div>
          <h4 class="subheading" style="font-size: 18px;">Your sustainability commitment can generate income too. .</h4>
          <p class="para" style="font-size: 14px; text-align: justify; margin-bottom: 0;">Under India's CCTS Voluntary
            Offset Mechanism, verified emission reductions earn tradeable Carbon Credit Certificates open to any cold
            chain facility, regardless of size. The 180 tonnes of annual CO2 reduction creates a second revenue stream
            on top of your energy savings. Your ESG action pays literally. VoltSeal works through the exact quantum with
            you during the facility assessment.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: CALL TO ACTION (Updated Dynamic Bg Color) -->
  <section style="background-color: #17c64f; color: #ffffff; text-align: center;" class="reveal-element">
    <div class="content-section" style="padding: 60px 20px;">
      <h3 style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: 30px; color: #ffffff; font-weight: 800; margin-top: 0;
         margin-bottom: 10px;">
        Ready to Upgrade Your Power Strategy?</h3>
      <p
        style="color: #ffffff; max-width: 850px; margin: 0 auto 30px auto; font-size: 16px; line-height: 1.7; opacity: 0.95;">
        Our team will assess your facility, run the numbers and give you a clear picture of your operational savings and
        payback period.
      </p>
      <a href="contact.php" class="btn-custom"
        style="background: #0a332d; color: #ffffff; box-shadow: 0 4px 15px rgba(10,51,45,0.25);">Get in Touch <i
          class="fas fa-arrow-right" style="margin-left: 8px;"></i></a>
    </div>
  </section>


  <!-- --- POPUP MODAL COMPONENT (3 OPTIONS CALCULATOR) --- -->
  <div class="modal-overlay" id="calculatorModal" onclick="closeCalcModalOutside(event)">
    <div class="modal-content">
      <button class="modal-close" onclick="closeCalcModal()"><i class="fas fa-times"></i></button>

      <h3
        style="font-family: 'Plus Jakarta Sans', sans-serif; color: #0a332d; font-size: 24px; margin-top: 0; margin-bottom: 12px; font-weight: 700; text-align: center;">
        Choose Energy Setup
      </h3>

      <!-- Option 1 -->
      <a href="solar+batt-vs-diesel.php" class="calc-option-card">
        <span style="display: flex; align-items: center; gap: 12px;">
          <i class="fas fa-car-battery" style="color: #0a332d; font-size: 20px;"></i>
          Grid + BESS vs Diesel
        </span>
        <i class="fas fa-arrow-right arrow-icon"></i>
      </a>

      <!-- Option 2 -->
      <a href="grid+batt-vs-diesel.php" class="calc-option-card">
        <span style="display: flex; align-items: center; gap: 12px;">
          <i class="fas fa-solar-panel" style="color: #0a332d; font-size: 20px;"></i>
          Solar + BESS vs Diesel
        </span>
        <i class="fas fa-arrow-right arrow-icon"></i>
      </a>

      <!-- Option 3 -->
      <a href="solar+batt-vs-grid.php" class="calc-option-card">
        <span style="display: flex; align-items: center; gap: 12px;">
          <i class="fas fa-charging-station" style="color: #0a332d; font-size: 20px;"></i>
          Solar + BESS vs Grid
        </span>
        <i class="fas fa-arrow-right arrow-icon"></i>
      </a>
    </div>
  </div>


  <?php include('inc/footer.php') ?>
  <script src="assets/js/nav.js"></script>

  <!-- --- JAVASCRIPT FOR MODAL & SCROLL ANIMATIONS --- -->
  <script>
    function openCalcModal() {
      document.getElementById('calculatorModal').classList.add('open');
      document.body.style.overflow = 'hidden';
    }

    function closeCalcModal() {
      document.getElementById('calculatorModal').classList.remove('open');
      document.body.style.overflow = 'auto';
    }

    function closeCalcModalOutside(event) {
      if (event.target.id === 'calculatorModal') {
        closeCalcModal();
      }
    }

    function revealOnScroll() {
      const elements = document.querySelectorAll('.reveal-element');
      const windowHeight = window.innerHeight;

      elements.forEach(element => {
        const elementTop = element.getBoundingClientRect().top;
        const revealPoint = 100;

        if (elementTop < windowHeight - revealPoint) {
          element.classList.add('active');
        }
      });
    }

    window.addEventListener('scroll', revealOnScroll);
    window.addEventListener('load', revealOnScroll);
  </script>
</body>

</html>