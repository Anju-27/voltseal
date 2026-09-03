<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoltSeal :: Warehouse Industry</title>
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
      --transition-core: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
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

    .warehouse-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
      width: 100%;
    }

    .section-padding {
      padding: 60px 0;
      opacity: 0;
      transform: translateY(30px);
      animation: coreFadeUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    @keyframes coreFadeUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    p {
      text-align: justify;
    }

    /* HERO BANNER SLATE DESIGN */
    .hero-slate-card {
      background: linear-gradient(135deg, var(--brand-dark-green) 0%, #051a17 100%);
      color: #FFFFFF;
      padding: 30px 50px;
      border-radius: 24px;
      margin-top: -50px;
      position: relative;
      overflow: hidden;
      box-shadow: 0 30px 60px rgba(10, 51, 45, 0.2);
      border-left: 8px solid var(--brand-orange);
    }

    .hero-slate-card::after {
      content: '';
      position: absolute;
      width: 350px;
      height: 350px;
      background: radial-gradient(circle, rgba(23, 198, 79, 0.08) 0%, transparent 70%);
      bottom: -100px;
      right: -50px;
    }

    .hero-slate-card h2 {
      font-family: 'Plus Jakarta Sans', sans-serif;
      font-size: 30px;
      font-weight: 800;
      line-height: 1.3;
      max-width: 1000px;
      letter-spacing: -0.02em;
      margin-bottom: 15px;
      text-align: left;
    }

    .hero-slate-card p {
      font-size: 18px;
      color: #E2E8F0;
      max-width: 900px;
      text-align: left;
      font-style: italic;
      font-weight: 600;
    }

    /* PROFILE MESH RESPONSIVE GRID */
    .split-profile-mesh {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 30px;
      margin-top: 40px;
    }

    .audience-lead-text {
      font-size: 18px;
      font-weight: 600;
      color: var(--brand-orange);
      line-height: 1.6;
      margin-bottom: 40px;
      border-left: 4px solid var(--brand-orange);
      padding-left: 20px;
      text-align: justify;
      font-style: italic;
    }

    .profile-node {
      background: var(--card-bg);
      padding: 30px;
      border-radius: 20px;
      border: 1px solid rgba(10, 51, 45, 0.06);
      box-shadow: 0 10px 35px rgba(10, 51, 45, 0.02);
      transition: var(--transition-core);
    }

    .profile-node:hover {
      transform: translateY(-6px);
      box-shadow: 0 25px 50px rgba(10, 51, 45, 0.08);
    }

    .profile-node h3 {
      font-family: 'Inter', sans-serif;
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 10px;
      display: flex;
      align-items: center;
      gap: 12px;
      text-align: left;
    }

    .profile-node.orange h3 {
      color: var(--brand-orange);
    }

    .profile-node.green h3 {
      color: var(--brand-green);
    }

    /* CHALLENGE PANEL LAYOUT */
    .challenge-panel-layout {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
      margin-top: 20px;
    }

    .panel-block {
      background: var(--card-bg);
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
      border-bottom: 4px solid var(--brand-dark-green);
      transition: var(--transition-core);
    }

    .panel-block:hover {
      background: linear-gradient(135deg, var(--brand-dark-green) 0%, #051a17 100%);
      border-bottom-color: var(--brand-orange);
      transform: translateY(-5px);
      box-shadow: 0 20px 40px rgba(10, 51, 45, 0.15);
    }

    .panel-block:hover * {
      color: #FFFFFF !important;
    }

    .panel-header {
      font-family: 'Inter', sans-serif;
      font-size: 1.4rem;
      font-weight: 700;
      color: var(--brand-dark-green);
      margin-bottom: 10px;
      display: flex;
      align-items: center;
      gap: 12px;
      text-align: left;
    }

    .panel-header i {
      color: var(--brand-orange);
    }

    .panel-block p {
      color: var(--text-muted);
      font-size: 1rem;
      line-height: 1.7;
      margin-bottom: 0px;
    }

    .panel-block p:last-child {
      margin-bottom: 0;
    }

    /* DIGITAL METRIC NODE ARCHITECTURE */
    .matrix-node-container {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 30px;
      margin-top: 40px;
    }

    .node-asset-block {
      background: var(--card-bg);
      border-radius: 20px;
      padding: 40px;
      border: 1px solid rgba(10, 51, 45, 0.08);
      box-shadow: 0 15px 40px rgba(10, 51, 45, 0.04);
    }

    .node-asset-header {
      font-family: 'Inter', sans-serif;
      font-size: 1.35rem;
      font-weight: 700;
      color: var(--brand-dark-green);
      margin-bottom: 25px;
      display: flex;
      align-items: center;
      gap: 12px;
      text-align: left;
    }

    .node-asset-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }

    .node-stat-pill {
      background: var(--bg-cream);
      padding: 20px;
      border-radius: 12px;
      border-bottom: 3px solid var(--brand-green);
      transition: var(--transition-core);
    }

    .node-stat-pill.orange-line {
      border-bottom-color: var(--brand-orange);
    }

    .node-stat-pill span {
      font-size: 0.8rem;
      text-transform: uppercase;
      letter-spacing: 0.04em;
      color: var(--text-muted);
      display: block;
      margin-bottom: 6px;
      text-align: left;
      font-weight: 600;
    }

    .node-stat-pill strong {
      font-family: 'Inter', sans-serif;
      font-size: 1.35rem;
      font-weight: 800;
      color: var(--brand-dark-green);
      display: block;
      text-align: left;
    }

    .node-foot-meta {
      font-size: 0.95rem;
      color: var(--text-muted);
      padding: 16px 20px;
      background: #F8FAFC;
      border-radius: 12px;
      margin-top: 20px;
      font-weight: 500;
      border: 1px solid #EDF2F7;
      text-align: left;
    }

    /* FLOW PRIORITY MATRIX */
    .flow-priority-matrix {
      margin-top: 40px;
      background: linear-gradient(135deg, var(--brand-dark-green) 0%, #051a17 100%);
      padding: 40px;
      border-radius: 24px;
    }

    .flow-priority-row {
      display: flex;
      align-items: center;
      gap: 24px;
      padding: 14px 0;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      color: #FFFFFF;
    }

    .flow-priority-row:last-child {
      border-bottom: none;
    }

    .flow-priority-index {
      width: 44px;
      height: 44px;
      background: rgba(23, 198, 79, 0.15);
      border: 1px solid var(--brand-green);
      color: var(--brand-green);
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      font-weight: 700;
      flex-shrink: 0;
    }

    .flow-priority-row div {
      text-align: left;
      font-weight: 600;
    }

    /* ACTION PANEL CARD */
    .action-panel-slate {
      background: linear-gradient(135deg, var(--brand-dark-green) 0%, #051a17 100%);
      padding: 60px 45px;
      border-radius: 24px;
      text-align: center;
      color: #FFFFFF;
      margin-top: 60px;
      position: relative;
      overflow: hidden;
    }

    .action-panel-slate h3 {
      font-family: 'Inter', sans-serif;
      font-size: 1.8rem;
      font-weight: 700;
      margin-bottom: 30px;
    }

    /* PREMIUM INTERACTIVE BUTTONS */
    .prime-fluid-btn {
      background: var(--brand-orange);
      color: #FFFFFF;
      padding: 16px 40px;
      border-radius: 12px;
      font-weight: 700;
      font-size: 1.1rem;
      border: none;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 12px;
      text-decoration: none;
      box-shadow: 0 12px 24px rgba(240, 83, 28, 0.3);
      transition: var(--transition-core);
    }

    .prime-fluid-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 18px 35px rgba(240, 83, 28, 0.45);
    }

    .prime-fluid-btn i {
      transition: transform 0.3s ease;
    }

    .prime-fluid-btn:hover i {
      transform: translateX(6px);
    }

    .prime-fluid-btn.neon-theme {
      background: var(--brand-green);
      box-shadow: 0 12px 24px rgba(23, 198, 79, 0.3);
    }

    .prime-fluid-btn.neon-theme:hover {
      box-shadow: 0 18px 35px rgba(23, 198, 79, 0.45);
    }

    .flex-center-wrapper {
      display: flex;
      justify-content: center;
      width: 100%;
    }

    /* COMPLIANCE & ESG SEGMENTS */
    .esg-split-row {
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      padding-bottom: 15px;
      margin-bottom: 15px;
      transition: var(--transition-core);
    }

    .esg-split-row:last-child {
      border-bottom: none;
      padding-bottom: 0;
      margin-bottom: 0;
    }

    .esg-split-row h3 {
      text-align: left;
    }

    .esg-split-row:hover {
      padding-left: 15px;
    }

    /* FLUID MODAL BOX */
    .calc-modal {
      display: none;
      position: fixed;
      z-index: 99999;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(10, 51, 45, 0.82);
      backdrop-filter: blur(12px);
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: var(--transition-core);
      padding: 24px;
    }

    .calc-modal-content {
      background: var(--card-bg);
      padding: 45px;
      border-radius: 24px;
      max-width: 540px;
      width: 100%;
      position: relative;
      transform: scale(0.9);
      transition: var(--transition-core);
      border-top: 8px solid var(--brand-dark-green);
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
      font-size: 30px;
      color: var(--text-muted);
      cursor: pointer;
    }

    .modal-link-card {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px;
      background: var(--bg-cream);
      border-radius: 12px;
      text-decoration: none;
      color: var(--brand-dark-green);
      font-weight: 700;
      margin-bottom: 16px;
      border: 1px solid rgba(10, 51, 45, 0.05);
      transition: var(--transition-core);
    }

    .modal-link-card .icon-panel-wrap {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .modal-link-card .icon-panel-wrap i {
      color: var(--brand-orange);
      background: #FFFFFF;
      padding: 10px;
      border-radius: 8px;
    }

    .modal-link-card:hover {
      background: var(--brand-dark-green);
      color: #FFFFFF;
      padding-left: 25px;
    }

    .modal-link-card:hover i {
      background: var(--brand-orange);
      color: #FFFFFF;
    }

    /* RESPONSIVE BREAKPOINTS ENGINE */
    @media (max-width: 1024px) {
      .hero-slate-card h2 {
        font-size: 2.2rem;
      }

      .challenge-panel-layout {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 768px) {
      .section-padding {
        padding: 60px 0;
      }

      .hero-slate-card {
        padding: 40px 25px;
        border-radius: 16px;
      }

      .hero-slate-card h2 {
        font-size: 1.8rem;
      }

      .hero-slate-card p {
        font-size: 1.1rem;
      }

      .split-profile-mesh {
        grid-template-columns: 1fr;
        gap: 20px;
      }

      .challenge-panel-layout {
        grid-template-columns: 1fr;
        gap: 20px;
      }

      .matrix-node-container {
        grid-template-columns: 1fr;
        gap: 25px;
      }

      .profile-node {
        padding: 30px 20px;
        border-radius: 16px;
      }

      .panel-block {
        padding: 30px 20px;
        border-radius: 16px;
      }

      .node-asset-block {
        padding: 30px 20px;
        border-radius: 16px;
      }

      .calc-modal-content {
        padding: 35px 20px;
      }
    }

    @media (max-width: 480px) {
      .hero-slate-card h2 {
        font-size: 1.5rem;
      }

      .audience-lead-text {
        font-size: 1.1rem;
        padding-left: 15px;
      }

      .node-asset-grid {
        grid-template-columns: 1fr;
        gap: 15px;
      }

      .action-panel-slate {
        padding: 40px 20px;
        border-radius: 16px;
      }

      .action-panel-slate h3 {
        font-size: 1.5rem;
      }

      .prime-fluid-btn {
        width: 100%;
        justify-content: center;
      }

      .flow-priority-row {
        gap: 15px;
      }
    }

    /* ==========================================================================
     RESPONSIVE BREAKPOINTS ENGINE - UPDATED FOR PERFECT MOBILE HEADINGS
     ========================================================================== */
    @media (max-width: 1024px) {
      .hero-slate-card h2 {
        font-size: 2rem !important;
      }

      .challenge-panel-layout {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 768px) {
      .section-padding {
        padding: 40px 0 !important;
      }

      .hero-small h1 {
        font-size: 28px !important;
        line-height: 1.3 !important;
      }

      .hero-slate-card h2 {
        font-size: 1.4rem !important;
        text-align: center !important;
      }

      .warehouse-container h2,
      .warehouse-container h3.subheading {
        font-size: 1.5rem !important;
        text-align: center !important;
        line-height: 1.3 !important;
      }

      .profile-node h3,
      .panel-header,
      .node-asset-header,
      .esg-split-row h3 {
        font-size: 1.2rem !important;
      }

      .calc-modal-content h3 {
        font-size: 1.3rem !important;
        text-align: center !important;
      }

      /* -------------------------------- */

      p,
      .profile-node p,
      .panel-block p,
      .esg-split-row p {
        text-align: justify !important;
        text-justify: inter-word !important;
      }

      .hero-slate-card {
        padding: 30px 20px;
        border-radius: 16px;
      }

      .hero-slate-card p {
        font-size: 1rem;
        text-align: center !important;
      }

      .split-profile-mesh,
      .challenge-panel-layout,
      .matrix-node-container {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
      }

      .profile-node,
      .panel-block,
      .node-asset-block {
        padding: 25px 20px !important;
        border-radius: 16px;
      }

      .calc-modal-content {
        padding: 35px 20px;
      }

      .audience-lead-text {
        font-size: 1rem !important;
        margin-bottom: 25px !important;
        padding-left: 15px !important;
      }

      .warehouse-container p[style*="margin-top: 15px"] {
        font-size: 1rem !important;
        text-align: center !important;
      }
    }

    @media (max-width: 480px) {

      .hero-slate-card h2 {
        font-size: 1.25rem !important;
      }

      .warehouse-container h2,
      .warehouse-container h3.subheading {
        font-size: 1.35rem !important;
      }

      .profile-node h3,
      .panel-header,
      .node-asset-header,
      .esg-split-row h3 {
        font-size: 1.1rem !important;
      }

      .node-asset-grid {
        grid-template-columns: 1fr !important;
        gap: 15px !important;
      }

      .action-panel-slate {
        padding: 40px 20px;
        border-radius: 16px;
      }

      .prime-fluid-btn {
        width: 100% !important;
        justify-content: center !important;
        font-size: 1rem !important;
        padding: 14px 20px !important;
      }

      .flow-priority-row {
        gap: 15px !important;
        flex-direction: row !important;
        align-items: center !important;
      }

      .flow-priority-matrix {
        padding: 25px 20px !important;
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
        Warehouse Industry </h1>
    </div>
  </section>


  <!-- SECTION 1: Slate Banner -->
  <section class="section-padding" style="padding-bottom: 0; margin-top: 50px;">
    <div class="warehouse-container">
      <div class="hero-slate-card">
        <h2>Warehouses run on dispatch. VoltSeal makes sure that's all it costs.</h2>
        <p>Reduce your warehouse energy costs while keeping every dispatch on time and every SLA intact.</p>
      </div>
    </div>
  </section>

  <!-- SECTION 2: Split Profiles Grid -->
  <section class="section-padding">
    <div class="warehouse-container">
      <h3 class="subheading"
        style="font-size: 36px; color: #0a332d; font-weight: 800; margin: 5px 0 0 0; text-align: center;">Who This is
        for</h3>
      <p class="audience-lead-text">
        Every warehouse runs on one commitment the right product, to the right place, at the right time. Power
        continuity and energy costs sit at the heart of that commitment. How they show up depends on who you are.
      </p>

      <div class="split-profile-mesh">
        <div class="profile-node orange">
          <h3><i class="fas fa-boxes"></i> 3PL Warehouse Operators</h3>
          <p style="color: var(--text-muted); line-height: 1.6;">If you operate a <strong>3PL warehouse</strong>, your
            commitment extends across every client you serve. A power disruption doesn't just affect your operations it
            affects theirs. Missed dispatch windows and delayed shipments ripple across multiple accounts
            simultaneously. The financial impact is immediate. The trust takes longer to rebuild.</p>
        </div>

        <div class="profile-node green">
          <h3><i class="fas fa-warehouse"></i> In-House Warehouse Managers</h3>
          <p style="color: var(--text-muted); line-height: 1.6;">If you manage an <strong>in-house warehouse</strong>,
            the stakes are
            closer to home. Your inventory. Your dispatch schedule. Your energy bill one that keeps rising year on year
            with no natural ceiling. And every GRAP season, the DG you rely on as backup becomes harder to justify
            financially and legally.</p>
        </div>
      </div>

      <p
        style="margin-top: 15px; font-size: 18px; text-align: center; font-weight: 700; color: var(--brand-dark-green);">
        In both cases, the underlying challenge is the same energy that costs too much and a power supply that isn't as
        reliable as the operations that depend on it.<span style="border-bottom: 3px solid var(--brand-orange)">That's
          exactly what VoltSeal is built to address.</span>
      </p>
    </div>
  </section>

  <hr style="border: 0; border-top: 1px solid rgba(10, 51, 45, 0.06); max-width: 1200px; margin: 0 auto;">

  <!-- SECTION 3: Warehouse Challenges Panels -->
  <section class="section-padding"
    style="background: rgba(10, 51, 45, 0.015); border-top: 1px solid rgba(10, 51, 45, 0.04);">
    <div class="warehouse-container">
      <h2
        style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: 30px; font-weight: 800; text-align: center; color: var(--brand-dark-green); margin-bottom: 20px;">
        The Warehouse Power Challenge</h2>

      <div class="challenge-panel-layout">
        <div class="panel-block">
          <div class="panel-header"><i class="fas fa-chart-line"></i> Rising Energy Costs</div>
          <p>A warehouse runs continuously lighting, material handling systems, loading docks, security systems all
            drawing power around the clock. Whether your facility runs on a diesel generator as backup,
            draws from the grid at peak rates, or has solar installed without storage your energy bill compounds every
            year with no natural ceiling.</p>
          <p>Diesel costs ₹32–35/kWh. Grid peak tariffs sit at ₹8–10/kWh. If you have solar but no storage, excess
            generation during the day gets exported at throwaway rates while your facility draws from the grid at full
            price during peak hours. VoltSeal's <strong> BESS </strong>stores energy when it's cheapest and supplies it
            when your facility
            needs it most reducing your blended energy cost significantly. Unlike diesel or grid tariffs, that cost
            stays flat. Your current energy bill does not.</p>
        </div>

        <div class="panel-block">
          <div class="panel-header"><i class="fas fa-bolt"></i> Power Continuity</div>
          <p>A warehouse power cut isn't just an inconvenience it's a dispatch event. Operations halt. Dispatch windows
            close. In an environment where SLAs are measured in hours, every minute of downtime has a direct and
            immediate cost.
          <p>
          <p>For a 3PL operator, that cost multiplies across every client affected simultaneously SLA failures,
            chargebacks, and an exponential volume of complaints cascading through multiple accounts at once. For an
            in-house warehouse, it hits your own dispatch schedule and your own customer relationships directly.
            Research shows 84% of warehouse organisations have experienced at least one significant operational
            disruption in the past 24 months.</p>
        </div>

        <div class="panel-block">
          <div class="panel-header"><i class="fas fa-smog"></i> GRAP Compliance</div>
          <p>Every winter, Delhi NCR's Graded Response Action Plan introduces progressively stricter restrictions on
            diesel generator usage. At Stage 3, DG sets are regulated across all industrial and commercial facilities.
            At Stage 4, DG usage is banned outright. GRAP was invoked multiple times during both the 2023 and 2024
            winters and again in November 2025 making it a recurring and predictable operational challenge for every
            warehouse in Delhi NCR.</p>
          <p>For facilities that rely on DG as their only backup power source, GRAP season creates a recurring conflict
            run the DG and risk regulatory action, or don't run it and lose all backup power. VoltSeal operates entirely
            without diesel. GRAP restrictions simply do not apply.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Financial Case Blocks -->
  <section class="section-padding" style="background: #FFFFFF;">
    <div class="warehouse-container">
      <h2 style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: 30px; font-weight: 800; color: var(--brand-dark-green); 
        margin-bottom: 0px;">
        The Financial Case</h2>
      <p class="financial-lead"
        style="color: var(--text-muted); font-weight: 600; font-style: italic; font-size: 16px; margin-bottom: 20px;">
        What does switching to BESS mean for your warehouse's bottom line? The answer depends on your current energy
        setup. Find your scenario below.
      </p>

      <!-- Scenario A -->
      <div class="panel-header" style="margin-top: 30px;"><i class="fas fa-sun"></i> If your facility has rooftop solar
      </div>
      <p style="color: var(--text-muted); line-height: 1.6; margin-bottom: 12px;">Your solar panels generate electricity
        through the day but without storage, excess energy gets exported at throwaway rates while your warehouse draws
        from the grid at full price during peak operational hours. Every unit of solar energy your facility generates
        but doesn't store is money left on the table.</p>
      <p style="color: var(--text-muted); line-height: 1.6; margin-bottom: 25px;">VoltSeal's <strong> battery energy
          storage system (BESS)</strong> stores that excess solar energy and supplies it to your facility for up to 4
        hours at ₹6–8/kWh against ₹32–35/kWh on diesel. For a 500kW warehouse running 2 hours a day across 250 days, the
        financial case looks like this:</p>

      <div class="matrix-node-container">
        <div class="node-asset-block">
          <div class="node-asset-header"><i class="fas fa-chart-bar" style="color:var(--brand-green)"></i> Scenario A
            Projections Matrix</div>
          <div class="node-asset-grid">
            <div class="node-stat-pill">
              <span>Annual Savings</span>
              <strong>₹77,16,049</strong>
            </div>
            <div class="node-stat-pill">
              <span>Payback Period</span>
              <strong>3.04 Years</strong>
            </div>
            <div class="node-stat-pill">
              <span>Net Profit (10 Yrs)</span>
              <strong>₹5,37,03,704</strong>
            </div>
            <div class="node-stat-pill">
              <span>Asset CAPEX</span>
              <strong>₹2,34,56,790</strong>
            </div>
          </div>
          <div class="node-foot-meta"><em>Based on 500kW, 2 hours/day, 250 days/year. DG cost at ₹32/kWh.</em></div>
        </div>
      </div>

      <div class="panel-header" style="margin-top: 50px;"><i class="fas fa-plug"></i>If your facility does not have
        rooftop solar</div>
      <p style="color: var(--text-muted); line-height: 1.6; margin-bottom: 40px;">No solar infrastructure required.
        VoltSeal's <strong> BESS solution</strong> charges from the grid during off-peak hours and supplies power to
        your facility for up
        to 4 hours reducing your dependence on diesel significantly. Stored grid energy at ₹8–10/kWh against diesel at
        ₹32–35/kWh delivers an immediate and compelling return..</p>

      <!-- Scenario C -->

      <div class="matrix-node-container">

        <!-- Scenario B -->
        <div class="node-asset-block">
          <div class="node-asset-header"><i class="fas fa-bolt" style="color:var(--brand-orange)"></i> Scenario B
            Projections Matrix</div>
          <div class="node-asset-grid">
            <div class="node-stat-pill orange-line">
              <span>Annual Savings</span>
              <strong>₹61,72,840</strong>
            </div>
            <div class="node-stat-pill orange-line">
              <span>Payback Period</span>
              <strong>3.80 Years</strong>
            </div>
            <div class="node-stat-pill orange-line">
              <span>Net Profit (10 Yrs)</span>
              <strong>₹3,82,71,605</strong>
            </div>
            <div class="node-stat-pill orange-line">
              <span>Asset CAPEX</span>
              <strong>₹2,34,56,790</strong>
            </div>
          </div>
          <div class="node-foot-meta"><em>Based on 500kW, 2 hours/day, 250 days/year. DG cost at ₹32/kWh.</em></div>
        </div>
      </div>

      <div class="flow-priority-matrix">
        <div class="panel-header" style="color: #EDF2F7;"><i class="fas fa-layer-group"></i>
          The layered use case: Solar, Battery and Grid working together </div>
        <p style="color: #fff; line-height: 1.6; margin-bottom: 12px;">For many warehouses, the most effective energy
          setup is a layered one. VoltSeal's <strong>GRAP compliant lithium ion battery </strong> sits at the centre
          storing the cheapest
          available energy and deploying it first.</p>
        <p style="color: #fff; line-height: 1.6; margin-top: 10px;">Your solar panels generate electricity through the
          day. The BESS stores excess solar energy and discharges it for up to 4 hours during peak cost periods, grid
          outages, or GRAP restrictions. For the remaining hours, your facility draws from the grid or continues on
          direct solar. Diesel becomes the last resort rather than the default.</p>
        <p style="color: #fff; line-height: 1.6; margin-top: 10px;">The result is a <strong>warehouse energy cost
            reduction India</strong> setup where:</p>
        <div class="flow-priority-row">
          <div class="flow-priority-index">01</div>
          <div>Stored solar at ₹6–8/kWh is used first</div>
        </div>
        <div class="flow-priority-row">
          <div class="flow-priority-index">02</div>
          <div>Grid at ₹8–10/kWh fills the gap</div>
        </div>
        <div class="flow-priority-row">
          <div class="flow-priority-index">03</div>
          <div>DG at ₹32–35/kWh is reserved for genuine emergencies only</div>
        </div>
      </div>
      <p style="font-size: 0.95rem; color: var(--text-muted); font-style: italic; margin-top: 20px;">Your facility's
        actual savings will vary based on power requirement, runtime, and energy setup.</p>

      <!-- Action Panel Trigger -->

      <div class="flex-center-wrapper" style="margin: 30px 0 10px;">
        <button type="button" class="prime-fluid-btn" onclick="openCalcModal()">
          <i class="fas fa-calculator"></i> Calculate Your Savings &rarr;
        </button>

      </div>
    </div>
  </section>

  <!-- SECTION 5: How It Works Grid -->
  <section class="section-padding">
    <div class="warehouse-container">
      <h2 style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: 30px; font-weight: 800; text-align: center; 
        color: var(--brand-dark-green); margin-bottom: 5px;">
        How VoltSeal Works For Your Warehouse</h2>
      <p
        style="text-align: center; font-size: 16px; font-style: italic; font-weight: 600; margin-bottom: 50px; color: var(--text-muted);">
        Intelligent battery energy storage system that fits into your existing setup. Not a replacement. An upgrade.
      </p>

      <div class="split-profile-mesh">
        <div class="profile-node">
          <h3 style="color:var(--brand-dark-green)"><i class="fas fa-history" style="color:var(--brand-orange)"></i>
            Your operations never notice the switch</h3>
          <p style="color: var(--text-muted); line-height: 1.6;">When grid power fluctuates or fails, most facilities
            experience a gap — however brief — before backup power kicks in. For a warehouse, even a momentary
            interruption halts dispatch operations, freezes sortation systems, and closes dispatch windows that can't be
            reopened until the next cycle.</p>
          <p style="color: var(--text-muted); line-height: 1.6;">VoltSeal'slithium ion battery switches over in under
            200ms faster than any diesel generator can start and faster than your operations can register a disruption.
            Your material handling systems, loading docks, security systems, and WMS continue running without
            interruption. No halted dispatches. No missed SLAs. No client calls.</p>
        </div>

        <div class="profile-node">
          <h3 style="color:var(--brand-dark-green)"><i class="fas fa-truck-loading"
              style="color:var(--brand-orange)"></i> Powers your entire facility including automation and EV forklifts
          </h3>
          <p style="color: var(--text-muted); line-height: 1.6;">A warehouse doesn't run on one system it runs on many
            simultaneously. Lighting, conveyors, sortation systems, security, WMS, and increasingly EV forklifts that
            need continuous power to stay operational through every shift.</p>
          <p style="color: var(--text-muted); line-height: 1.6;">VoltSeal's <strong>lithium ion </strong>battery powers
            your entire facility simultaneously not selectively. Every system stays operational regardless of what's
            happening with the grid outside. EV forklifts continue charging. Automation systems stay live. Dispatch
            operations continue without interruption. No prioritisation. No partial coverage. Complete operational
            continuity across your entire warehouse.</p>
        </div>

        <div class="profile-node">
          <h3 style="color:var(--brand-dark-green)"><i class="fas fa-network-wired"
              style="color:var(--brand-orange)"></i> Works with whatever setup you already have</h3>
          <p style="color: var(--text-muted); line-height: 1.6;">VoltSeal's <strong>warehouse energy cost reduction
              India</strong> system
            integrates with your existing energy infrastructure not replacing it. Whether your facility runs on grid
            power, has rooftop solar already installed, or relies on a diesel generator as backup, the BESS fits in
            without requiring significant civil or electrical modifications.</p>
          <p>It charges from the cheapest available source stored solar at ₹6–8/kWh or grid at off-peak rates at
            ₹8-10/kWh and discharges automatically when your facility needs it. Solar, grid, and BESS work together as
            one layered system, always prioritising the lowest cost energy source first.</p>
        </div>

        <div class="profile-node">
          <h3 style="color:var(--brand-dark-green)"><i class="fas fa-tools" style="color:var(--brand-orange)"></i>
            Installation that doesn't stop your operations</h3>
          <p style="color: var(--text-muted); line-height: 1.6;">A warehouse cannot afford downtime not for maintenance,
            not for upgrades, and certainly not for new equipment installation. Every hour of downtime is a dispatch
            window missed and an SLA at risk. From assessment to commissioning, our team works around your facility's
            schedule not the other way around.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: High Contrast Sustainability Box -->
  <section class="section-padding" style="background: var(--brand-dark-green); color: #FFFFFF;">
    <div class="warehouse-container">
      <h2 style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: 30px; font-weight: 800; text-align:
           center; margin-bottom: 20px;">
        Compliance, ESG and Sustainability</h2>

      <div class="esg-split-row">
        <h3 style="color: var(--brand-orange); font-size: 1.4rem; font-weight: 700; margin-bottom: 5px;">GRAP season
          comes every winter. With VoltSeal, your warehouse never has to choose.</h3>
        <p style="color: #cbd5e1; line-height: 1.7; font-size: 1.05rem;">When Delhi NCR air quality hits Stage 3, DG
          sets are regulated across all industrial and commercial facilities. At Stage 4, they are banned outright. GRAP
          was invoked multiple times during the 2023, 2024 and 2025 winters making it not a seasonal risk but a
          predictable annual operational reality for every warehouse in Delhi NCR.</p>
        <p style="color: #cbd5e1; line-height: 1.7; font-size: 1.05rem;">For a warehouse dependent on DG backup, GRAP
          season forces an impossible choice run the DG and risk regulatory action, or don't run it and lose all backup
          power during your most critical dispatch
          periods. VoltSeal runs on zero diesel. GRAP restrictions don't apply. Your operations continue. Your
          dispatches go out. Your SLAs stay intact regardless of the air quality stage outside.</p>
      </div>

      <div class="esg-split-row">
        <h3 style="color: var(--brand-green); font-size: 1.4rem; font-weight: 700; margin-bottom: 5px;">180 tonnes of
          CO2. Gone. Every year.</h3>
        <p style="color: #cbd5e1; line-height: 1.7; font-size: 1.05rem;">A 500kW VoltSeal system running 2 hours a day
          eliminates approximately 180 tonnes of CO2 annually direct Scope 1 emissions, permanently removed. For
          facilities with solar, stored solar energy replaces grid electricity, reducing Scope 2 emissions meaningfully.
          Both are quantifiable, reportable under BRSR, and real not targets, not projections. Every tonne eliminated
          strengthens your <strong>ESG</strong> credentials and moves your warehouse meaningfully closer to a
          <strong>sustainable</strong> energy operation.
        </p>
      </div>

      <div class="esg-split-row">
        <h3 style="color: var(--brand-green); font-size: 1.4rem; font-weight: 700; margin-bottom: 15px;">
          Your sustainability commitment can generate income too.</h3>
        <p style="color: #cbd5e1; line-height: 1.7; font-size: 1.05rem;">Under India's CCTS Voluntary Offset Mechanism,
          verified emission reductions earn tradeable Carbon Credit Certificates open to any warehouse facility,
          regardless of size. Your CO2 reduction creates a second revenue stream on top of your energy savings. Your ESG
          action pays literally.</p>
      </div>
    </div>
  </section>

  <!-- SECTION 7: Call To Action Footer -->
  <section class="section-padding" style="text-align: center;">
    <div class="warehouse-container">
      <h2 style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: 30px; font-weight: 800;
         color: var(--brand-dark-green); margin-bottom: 10px;">
        Ready to Secure Your Facility?</h2>
      <p
        style="font-size: 18px; max-width: 700px; margin: 0 auto 30px auto; color: var(--text-muted); text-align: center;">
        Our team will assess your facility, run the numbers and give you a clear picture of your savings and payback
        period.</p>
      <div class="flex-center-wrapper">
        <a href="contact.php" class="prime-fluid-btn neon-theme">
          <i class="fas fa-envelope"></i> Get in Touch
        </a>
      </div>
    </div>
  </section>

  <!-- CALCULATOR MODAL POPUP -->
  <div id="calcModal" class="calc-modal">
    <div class="calc-modal-content">
      <span class="calc-modal-close" onclick="closeCalcModal()">&times;</span>
      <h3
        style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: 1.8rem; font-weight: 800; color: var(--brand-dark-green); margin-bottom: 10px;">
        Choose Energy Setup</h3>

      <div class="modal-btn-vertical-group">
        <a href="grid+batt-vs-diesel.php" class="modal-link-card">
          <span class="icon-panel-wrap"><i class="fas fa-plug"></i> Grid + BESS vs Diesel</span>
          <i class="fas fa-arrow-right"></i>
        </a>

        <a href="solar+batt-vs-diesel.php " class="modal-link-card">
          <span class="icon-panel-wrap"><i class="fas fa-sun"></i> Solar + BESS vs Diesel</span>
          <i class="fas fa-arrow-right"></i>
        </a>

        <a href="solar+batt-vs-grid.php" class="modal-link-card">
          <span class="icon-panel-wrap"><i class="fas fa-layer-group"></i> Solar + BESS vs Grid</span>
          <i class="fas fa-arrow-right"></i>
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
      }, 15);
    }

    function closeCalcModal() {
      const modal = document.getElementById('calcModal');
      modal.classList.remove('show');
      setTimeout(() => {
        modal.style.display = 'none';
      }, 400);
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