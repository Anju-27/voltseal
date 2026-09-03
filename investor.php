<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoltSeal :: Resources</title>
  <link rel="icon" type="image/png" href="assets/image/logo/VoltSeal-Logo_Icon.png">
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&family=Inter:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <style>
    :root {
      --primary-dark: #062B22;
      --primary-light: #124035;
      --accent-green: #17c64f;
      --bg-cream: #fbf5eb;
      --text-slate: #2d3748;
      --text-muted: #718096;
      --card-shadow: 0 10px 30px rgba(6, 43, 34, 0.03);
      --card-hover-shadow: 0 20px 40px rgba(6, 43, 34, 0.08);
    }

    body {
      background-color: var(--bg-cream);
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    html {
      scroll-behavior: smooth;
    }

    /* Desktop padding set to exactly 60px top/bottom */
    .resources-section {
      padding: 60px 20px;
    }

    .resources-container {
      max-width: 1200px;
      margin: 0 auto;
    }

    /* Animated Section Headings */
    .section-heading-wrap {
      margin: 0 0 35px 0;
      /* Top margin removed to maintain exact 60px padding from hero */
      position: relative;
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1), transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }

    /* Adding margin between consecutive sections */
    .section-heading-wrap:not(:first-child) {
      margin-top: 60px;
    }

    .section-heading-wrap.animate-in {
      opacity: 1;
      transform: translateY(0);
    }

    .section-heading-wrap h2 {
      font-family: 'Plus Jakarta Sans', sans-serif;
      color: var(--primary-dark);
      font-size: 28px;
      font-weight: 800;
      margin: 0;
      letter-spacing: -0.5px;
    }

    .section-heading-wrap::after {
      content: '';
      display: block;
      width: 0;
      height: 3px;
      background: var(--accent-green);
      margin-top: 10px;
      border-radius: 2px;
      transition: width 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.2s;
    }

    .section-heading-wrap.animate-in::after {
      width: 50px;
    }

    /* Grid Layout */
    .resources-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(360px, 1fr));
      gap: 35px;
      align-items: stretch;
      margin-bottom: 20px;
    }

    /* Card Animation States */
    .resource-card {
      background: rgba(255, 255, 255, 0.75);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-radius: 20px;
      border: 1px solid rgba(255, 255, 255, 0.7);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      text-decoration: none;
      opacity: 0;
      transform: translateY(40px);
      transition:
        transform 0.5s cubic-bezier(0.16, 1, 0.3, 1),
        box-shadow 0.5s cubic-bezier(0.16, 1, 0.3, 1),
        background-color 0.3s ease,
        border-color 0.3s ease,
        opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1);
      box-shadow: var(--card-shadow);
    }

    .resource-card.animate-in {
      opacity: 1;
      transform: translateY(0);
    }

    .resource-card:hover {
      transform: translateY(-8px);
      background: #ffffff;
      box-shadow: var(--card-hover-shadow);
      border-color: rgba(23, 198, 79, 0.35);
    }

    /* Premium Dynamic Image Box */
    .resource-img-box {
      width: 100%;
      height: 220px;
      background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-light) 100%);
      position: relative;
      overflow: hidden;
    }

    /* Clean Shimmer sheen overlay on hover */
    .resource-img-box::before {
      content: '';
      position: absolute;
      top: 0;
      left: -75%;
      z-index: 3;
      display: block;
      width: 50%;
      height: 100%;
      background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.15) 100%);
      transform: skewX(-25deg);
      transition: none;
    }

    .resource-card:hover .resource-img-box::before {
      animation: shine 0.75s forwards;
    }

    @keyframes shine {
      100% {
        left: 125%;
      }
    }

    .resource-img-box img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0.85;
      position: relative;
      z-index: 2;
      transform: scale(1.001);
      transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.4s ease;
    }

    .resource-card:hover .resource-img-box img {
      transform: scale(1.06);
      opacity: 1;
    }

    /* UI Details Elements */
    .resource-body {
      padding: 28px;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }

    .resource-source {
      color: var(--accent-green);
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1.8px;
      margin-bottom: 12px;
    }

    .resource-title {
      font-family: 'Plus Jakarta Sans', sans-serif;
      font-size: 18px;
      font-weight: 700;
      color: var(--text-slate);
      line-height: 1.45;
      margin: 0 0 25px 0;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
      height: 52px;
      transition: color 0.3s ease;
    }

    .resource-card:hover .resource-title {
      color: var(--primary-dark);
    }

    .resource-action-link {
      margin-top: auto;
      color: var(--primary-dark);
      font-weight: 700;
      font-size: 12px;
      text-transform: uppercase;
      letter-spacing: 1.2px;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: gap 0.3s cubic-bezier(0.16, 1, 0.3, 1), color 0.3s ease;
    }

    .resource-action-link i {
      font-size: 13px;
      transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .resource-card:hover .resource-action-link {
      color: var(--accent-green);
      gap: 14px;
    }

    .resource-card:hover .resource-action-link i {
      transform: translateX(2px);
    }

    @media (max-width: 768px) {

      /* Mobile padding updated to exactly 40px top/bottom */
      .resources-section {
        padding: 40px 15px;
      }

      .resources-grid {
        grid-template-columns: 1fr;
        gap: 25px;
      }

      .section-heading-wrap h2 {
        font-size: 24px;
      }

      .section-heading-wrap:not(:first-child) {
        margin-top: 40px;
      }
    }
  </style>
</head>

<body>

  <?php include('inc/header.php') ?>

  <section class="hero-small"
    style="position: relative; height: 50vh; min-height: 350px; background: #0a0c10; display: flex; align-items: center; overflow: hidden; font-family: 'Plus Jakarta Sans', sans-serif;">
    <div
      style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(10, 12, 16, 0.85), rgba(10, 12, 16, 0.65)), url('assets/image/about/a3.png'); background-size: cover; background-position: center;">
    </div>
    <div class="container"
      style="max-width: 1200px; margin: auto; padding: 0 20px; position: relative; z-index: 2; text-align: center;">
      <h1 class="reveal"
        style="color: #fff; font-size: 46px; font-weight: 800; line-height: 1.2; margin: 0; letter-spacing: -1px;">
        Investor</h1>
    </div>
  </section>

  <section class="resources-section">
    <div class="resources-container">

      <!-- SECTION 1 -->
      <div class="section-heading-wrap">
        <h2>Investors and Partners</h2>
      </div>
      <div class="resources-grid .boxinnn">
          
        <a href="https://www.mvcapital.vc/"
          target="_blank" class="boxinn">
          <div class="boxin">
            <img src="assets/image/investor/new/1.jpg">
          </div>
        </a>
         <a href="https://rainmatter.com/"
          target="_blank" class="boxinn">
          <div class="boxin">
            <img src="assets/image/investor/new/2.svg">
          </div>
        </a>
         <a href="#" class="boxinn">
          <div class="boxin">
            <img src="assets/image/investor/new/3.png">
          </div>
        </a>
         <a href="https://www.theia-ventures.com/"
          target="_blank" class="boxinn">
          <div class="boxin">
            <img src="assets/image/investor/new/4.jpeg">
          </div>
        </a>

      </div>

    </div>
  </section>

  <?php include('inc/footer.php') ?>
  <script src="assets/js/nav.js"></script>

  <!-- Modern On-Scroll Animation Script -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const observerOptions = {
        root: null,
        rootMargin: "0px",
        threshold: 0.15
      };

      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add("animate-in");
            observer.unobserve(entry.target);
          }
        });
      }, observerOptions);

      const itemsToAnimate = document.querySelectorAll('.section-heading-wrap, .resource-card');
      itemsToAnimate.forEach((item, index) => {
        if (item.classList.contains('resource-card')) {
          const cardGridIndex = index % 3;
          item.style.transitionDelay = `${cardGridIndex * 0.1}s`;
        }
        observer.observe(item);
      });
    });
  </script>
</body>

</html>