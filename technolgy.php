<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoltSeal :: Technology</title>
  <link rel="icon" type="image/png" href="assets/image/logo/VoltSeal-Logo_Icon.png">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <style>
  :root {
    --vs-bg: #f1f8ed;
    --vs-deep: #062B22;
    --vs-bright: #2ECC71;
    --vs-orange: #F0531C;
    --vs-text: #475569;
  }

  .vs-bess-section {
    background-color: var(--vs-bg) !important;
    padding: 80px 0 !important;
    display: block !important;
    width: 100% !important;
  }

  .vs-container {
    max-width: 1240px !important;
    margin: 0 auto !important;
    padding: 0 20px !important;
  }

  .vs-intro-box {
    max-width: 900px;
    margin-bottom: 45px;
  }

  .vs-intro-box h2 {
    font-size: clamp(28px, 4vw, 36px);
    font-weight: 800;
    color: var(--vs-deep);
    margin-bottom: 15px;
    line-height: 1.2;
  }

  .vs-intro-box p {
    font-size: 17px;
    color: var(--vs-text);
    border-left: 5px solid var(--vs-orange);
    padding-left: 18px;
    line-height: 1.6;
    margin: 0;
  }

  .vs-features-grid {
    display: grid !important;
    grid-template-columns: repeat(3, 1fr) !important;
    gap: 25px !important;
    width: 100% !important;
    grid-auto-rows: 1fr;
  }

  /* Cards initial invisible state */
  .vs-card-item {
    background: var(--vs-deep) !important;
    padding: 30px 25px !important;
    border-radius: 16px !important;
    display: flex !important;
    flex-direction: column !important;
    height: auto !important;
    border: 1px solid rgba(255, 255, 255, 0.05) !important;
    box-sizing: border-box !important;

    opacity: 0;
    transform: translateY(30px);
    /* Smooth cubic-bezier for a premium, snappy entrance */
    transition: opacity 0.8s cubic-bezier(0.25, 1, 0.5, 1),
      transform 0.8s cubic-bezier(0.25, 1, 0.5, 1),
      border-color 0.4s ease,
      box-shadow 0.4s ease;
  }

  /* Animation class triggered by JavaScript with dynamic delay */
  .vs-card-item.vs-revealed {
    opacity: 1 !important;
    transform: translateY(0) !important;
    transition-delay: var(--anim-delay, 0ms) !important;
  }

  /* Hover State Transition Override (clears delay for instant mouse response) */
  .vs-card-item:hover {
    transition-delay: 0ms !important;
    transform: translateY(-8px) !important;
    border-color: var(--vs-orange) !important;
    box-shadow: 0 15px 35px rgba(6, 43, 34, 0.3) !important;
  }

  .vs-card-item .vs-icon {
    width: 50px;
    height: 50px;
    background: rgba(240, 83, 28, 0.12);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin-bottom: 20px;
    color: var(--vs-orange);
    flex-shrink: 0;
    transition: transform 0.4s ease;
  }

  .vs-card-item:hover .vs-icon {
    transform: scale(1.1) rotate(5deg);
  }

  .vs-card-item h3 {
    font-size: 19px;
    font-weight: 700;
    color: #ffffff !important;
    margin: 0 0 10px 0;
    line-height: 1.3;
  }

  .vs-card-item p {
    font-size: 15px;
    color: rgba(255, 255, 255, 0.75) !important;
    line-height: 1.5;
    margin: 0;
  }

  @media (max-width: 1024px) {
    .vs-features-grid {
      grid-template-columns: repeat(2, 1fr) !important;
    }
  }

  @media (max-width: 768px) {
    .vs-features-grid {
      grid-template-columns: 1fr !important;
    }

    .vs-bess-section {
      padding: 50px 0 !important;
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
        Technology </h1>
    </div>
  </section>

  <section class="vs-bess-section">
    <div class="vs-container">
      <div class="vs-intro-box">
        <span
          style="color: var(--vs-bright); font-weight:700; text-transform:uppercase; font-size:12px; letter-spacing:1px; display:block; margin-bottom:8px;">Optimising
          Energy</span>
        <h2>Battery Energy Storage Solution (BESS)</h2>
        <p>We are building
          intelligent, LFP BESS system with industrial grade safety.</p>
        <p>Some of the core product features are</p>
      </div>

      <div class="vs-features-grid">

        <div class="vs-card-item">
          <div class="vs-icon"><i class="fas fa-battery-full"></i></div>
          <h3>5000+ Battery Cycles</h3>
          <p>LFP chemistry ensuring a long operational life.</p>
        </div>

        <div class="vs-card-item">
          <div class="vs-icon"><i class="fas fa-bolt"></i></div>
          <h3>80-100% DOD</h3>
          <p>Optimized Depth of Discharge parameters.</p>
        </div>

        <div class="vs-card-item">
          <div class="vs-icon"><i class="fas fa-arrows-alt-h"></i></div>
          <h3>>85-90% Efficiency</h3>
          <p>High Round trip efficiency evaluating energy in vs out.</p>
        </div>

        <div class="vs-card-item">
          <div class="vs-icon"><i class="fas fa-tachometer-alt"></i></div>
          <h3>&lt;0.5 second</h3>
          <p>Near instant switchover capabilities.</p>
        </div>

        <div class="vs-card-item">
          <div class="vs-icon"><i class="fas fa-shield-alt"></i></div>
          <h3>Extended Protection</h3>
          <p>2 years product warranty</p>
        </div>

        <div class="vs-card-item">
          <div class="vs-icon"><i class="fas fa-cubes"></i></div>
          <h3>Modular Scalable Design</h3>
          <p>Configured directly to your scalable load profile.</p>
        </div>

        <div class="vs-card-item">
          <div class="vs-icon"><i class="fas fa-microchip"></i></div>
          <h3>Intelligent BMS</h3>
          <p>Engineered for smart, predictive analytics.</p>
        </div>

        <div class="vs-card-item">
          <div class="vs-icon"><i class="fas fa-tools"></i></div>
          <h3>Responsive Service</h3>
          <p>Highly responsive service maintenance support infrastructure.</p>
        </div>

        <div class="vs-card-item">
          <div class="vs-icon"><i class="fas fa-certificate"></i></div>
          <h3>Certified Standards</h3>
          <p>Compliant to National and Global standards as per required regulations.</p>
        </div>

        <div class="vs-card-item">
          <div class="vs-icon"><i class="fas fa-chart-line"></i></div>
          <h3>Proven ROI</h3>
          <p>Return on Investment in 3-4 years depending on usage and demand patterns.</p>
        </div>

      </div>
    </div>
  </section>

  <script>
  // Intersection Observer built with dynamic inline-stagger delays
  const vsObserver = new IntersectionObserver((entries) => {
    let activeIndex = 0;

    entries.forEach((entry) => {
      if (entry.isIntersecting && !entry.target.classList.contains('vs-revealed')) {
        // Calculate delay based on items visible on screen simultaneously (100ms intervals)
        entry.target.style.setProperty('--anim-delay', `${activeIndex * 100}ms`);
        entry.target.classList.add('vs-revealed');
        activeIndex++;
      }
    });
  }, {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px" // Triggers slightly before coming fully into viewport
  });

  document.querySelectorAll('.vs-card-item').forEach(el => vsObserver.observe(el));
  </script>

  <?php include('inc/footer.php') ?>
  <script src="assets/js/nav.js"></script>
</body>

</html>