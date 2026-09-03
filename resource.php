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
  <!-- HERO SECTION -->
  <section class="hero-small"
    style="position: relative; height: 60vh; min-height: 400px; background: #0a0c10; display: flex; align-items: center; overflow: hidden; font-family: 'Plus Jakarta Sans', sans-serif;">
    <div
      style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(10, 12, 16, 0.8), rgba(10, 12, 16, 0.6)), url('assets/image/about/a3.png'); background-size: cover; background-position: center;">
    </div>
    <div class="container"
      style="max-width: 1200px; margin: auto; padding: 0 20px; position: relative; z-index: 2; text-align: center;">
      <h1 class="reveal" style="color: #fff; font-size: 45px; font-weight: 800; line-height: 1.2; margin: 0;">
        Resources</h1>
    </div>
  </section>



  <section class="resources-section">
    <div class="resources-container">

      <!-- SECTION 1 -->
      <div class="section-heading-wrap">
        <h2>Policy Guidelines</h2>
      </div>
      <div class="resources-grid">

        <a href="https://file.notion.so/f/f/ef12c73e-cbf7-4839-b3e7-761583bb9c88/8ce096a3-7
107-417a-9bd5-2b8035765d3c/1775286501137.pdf?table=block&id=38379b8
1-cdb7-80db-a2dd-f835210c4ffe&spaceId=ef12c73e-cbf7-4839-b3e7-761583
bb9c88&expirationTimestamp=1782914400000&signature=o3dPpLo4SY7nf6
A4lk1DMrYu3RZ8uKY0PxPH6iPevkM&downloadName=1775286501137.pdf
" target="_blank" class="resource-card">
          <div class="resource-img-box">
            <!-- Updated dynamic reference label for your replacement image -->
            <img src="assets/image/resource/new/n1.png" alt="Electricity Amendment Policy Document">
          </div>
          <div class="resource-body">
            <span class="resource-source">BESS Safety Regulation-</span>
            <h3 class="resource-title">BESS Safety Regulation</h3>
            <span class="resource-action-link">Download PDF <i class="fas fa-file-download"></i></span>
          </div>
        </a>

        <a href="https://file.notion.so/f/f/ef12c73e-cbf7-4839-b3e7-761583bb9c88/59baa240-3
d44-4759-9063-c67b525e562a/Electricity_Amendment_Rules_2025_0.pdf?ta
ble=block&id=2d279b81-cdb7-801b-a983-d6c7e3d4e9a2&spaceId=ef12c73ecbf7-4839-b3e7-761583bb9c88&expirationTimestamp=1782914400000&sign
ature=gauc7IT7S4wuQXNT9WdaqY_kCc_9VPH49mu0shPN3qw&download
Name=Electricity_Amendment_Rules_2025_0.pdf
" target="_blank" class="resource-card">
          <div class="resource-img-box">
            <!-- Updated dynamic reference label for your replacement image -->
            <img src="assets/image/resource/new/n2.png" alt="Electricity Amendment Policy Document">
          </div>
          <div class="resource-body">
            <span class="resource-source">Official Gazette</span>
            <h3 class="resource-title">Electricity Amendment Rules 2025 Notification -</h3>
            <span class="resource-action-link">Download PDF <i class="fas fa-file-download"></i></span>
          </div>
        </a>

        <a href="https://www.cercind.gov.in/2025/draft_reg/Draft%20Guidelines%20for%20VPPAs.pdf" target="_blank"
          class="resource-card">
          <div class="resource-img-box">
            <img src="assets/image/resource/new/n3.png" alt="VPPA Guidelines" onerror="this.remove();">
          </div>
          <div class="resource-body">
            <span class="resource-source">Draft Regulatory Framework</span>
            <h3 class="resource-title">Draft Guidelines for Virtual Power Purchase Agreements (VPPAs)</h3>
            <span class="resource-action-link">Download PDF <i class="fas fa-file-download"></i></span>
          </div>
        </a>


        <a href="
https://file.notion.so/f/f/ef12c73e-cbf7-4839-b3e7-761583bb9c88/4b5be112-5
0ba-41f9-aff5-eb3e938598c0/Advisory_on_colocating_Energy_Storage_Syst
em_with_Solar_Power_Projects_to_enhance_grid_stability_and_cost_efficien
cy.pdf?table=block&id=2d279b81-cdb7-8081-8b38-c8ecd21c121e&spaceId=e
f12c73e-cbf7-4839-b3e7-761583bb9c88&expirationTimestamp=17829144000
00&signature=41KyXlecQHKleRLgEw5QnohFlJ4Dgv7e2Y9IDljDvOk&downlo
adName=Advisory_on_colocating_Energy_Storage_System_with_Solar_Pow
er_Projects_to_enhance_grid_stability_and_cost_efficiency.pdf" target="_blank" class="resource-card">
          <div class="resource-img-box">
            <img src="assets/image/resource/new/n4.png" alt="VPPA Guidelines" onerror="this.remove();">
          </div>
          <div class="resource-body">
            <span class="resource-source">CEA guidance</span>
            <h3 class="resource-title">CEA guidance for BESS in solar installations -</h3>
            <span class="resource-action-link">Download PDF <i class="fas fa-file-download"></i></span>
          </div>
        </a>

        <a href="
https://file.notion.so/f/f/ef12c73e-cbf7-4839-b3e7-761583bb9c88/00d2fcc3-95
ad-44db-83cd-9c6019836174/CERC_draft_notification_on_BESS_1Dec2025.
pdf?table=block&id=2d279b81-cdb7-802d-9f15-f5123d444b73&spaceId=ef12
c73e-cbf7-4839-b3e7-761583bb9c88&expirationTimestamp=1782914400000
&signature=cWf4TOY1-KT4Nb4aLE7TNQjVjjOmlcL08btpuyEsIx0&download
Name=CERC+draft+notification+on+BESS+1Dec2025.pdf
" target="_blank" class="resource-card">
          <div class="resource-img-box">
            <img src="assets/image/resource/new/n5.png" alt="VPPA Guidelines" onerror="this.remove();">
          </div>
          <div class="resource-body">
            <span class="resource-source">(CERC) Draft notification</span>
            <h3 class="resource-title">Central Electricity Regulatory Commission (CERC) Draft notification on BESS-</h3>
            <span class="resource-action-link">Download PDF <i class="fas fa-file-download"></i></span>
          </div>
        </a>

        <a href="https://share.google/QyAVN4CHwLS4am0MH" target="_blank" class="resource-card">
          <div class="resource-img-box">
            <img src="assets/image/resource/new/n6.png" alt="VPPA Guidelines" onerror="this.remove();">
          </div>
          <div class="resource-body">
            <span class="resource-source">Act Rules</span>
            <h3 class="resource-title">Draft Electricity Act Rules (March 2026) -</h3>
            <span class="resource-action-link">Download PDF <i class="fas fa-file-download"></i></span>
          </div>
        </a>

      </div>

      <!-- SECTION 2 -->
      <div class="section-heading-wrap">
        <h2>In The News</h2>
      </div>
      <div class="resources-grid">

        <a href="https://www.livemint.com/industry/india-preps-to-meet-6x-surge-battery-storage-demand-by-2047-ev-bess-renewable-energy-11764159527385.html"
          target="_blank" class="resource-card">
          <div class="resource-img-box">
            <img src="assets/image/resource/new/n7.png" alt="Battery Demands" onerror="this.remove();">
          </div>
          <div class="resource-body">
            <span class="resource-source">LiveMint</span>
            <h3 class="resource-title">India preps to meet 6x surge in battery storage demand by 2047</h3>
            <span class="resource-action-link">Read Article <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>

        <a href="https://swarajyamag.com/infrastructure/india-moves-toward-major-power-sector-reforms-with-proposed-electricity-amendment-bill-2025-what-you-need-to-know"
          target="_blank" class="resource-card">
          <div class="resource-img-box">
            <img src="assets/image/resource/new/n8.png" alt="Power Sector Reforms" onerror="this.remove();">
          </div>
          <div class="resource-body">
            <span class="resource-source">Swarajya</span>
            <h3 class="resource-title">India Moves Toward Major Power Sector Reforms with Proposed Electricity
              (Amendment) Bill 2025</h3>
            <span class="resource-action-link">Read Article <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>


        <a href="https://www.livemint.com/industry/energy/india-power-sector-big-bet-batteries-grid-scale-energy-storage-reliance-adani-jsw-waaree-bess-investments-11766410320860.html"
          target="_blank" class="resource-card">
          <div class="resource-img-box">
            <img src="assets/image/resource/new/n9.png" alt="Batteries Investment" onerror="this.remove();">
          </div>
          <div class="resource-body">
            <span class="resource-source">LiveMint Feature</span>
            <h3 class="resource-title">India’s power sector finds its next big bet in batteries</h3>
            <span class="resource-action-link">Read Article <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>

        <a href="https://indianexpress.com/article/opinion/columns/indias-cheapest-power-needs-new-buyers-10504337/"
          target="_blank" class="resource-card">
          <div class="resource-img-box">
            <img src="assets/image/resource/new/n10.png" alt="Cheapest Power" onerror="this.remove();">
          </div>
          <div class="resource-body">
            <span class="resource-source">Indian Express</span>
            <h3 class="resource-title">India’s Cheapest Power Needs New Buyers</h3>
            <span class="resource-action-link">Read Column <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>

        <a href="https://www.mayin.org/ajayshah/MEDIA/2026/reducing_energy_vulnerability.html" target="_blank"
          class="resource-card">
          <div class="resource-img-box">
            <img src="assets/image/resource/new/n11.png" alt="Energy Vulnerability" onerror="this.remove();">
          </div>
          <div class="resource-body">
            <span class="resource-source">Research Publication</span>
            <h3 class="resource-title">Reducing Energy Vulnerability & Enhancing Grid Reliability</h3>
            <span class="resource-action-link">Read Publication <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>

        <a href="https://www.investindia.gov.in/team-india-blogs/green-open-access-rules-2022-explainer" target="_blank"
          class="resource-card">
          <div class="resource-img-box">
            <img src="assets/image/resource/new/n12.png" alt="Open Access Rules" onerror="this.remove();">
          </div>
          <div class="resource-body">
            <span class="resource-source">Invest India Blog</span>
            <h3 class="resource-title">Green Open Access Rules 2022 – An Explainer</h3>
            <span class="resource-action-link">Read Explainer <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>
      </div>



      <!-- SECTION 3 -->
      <div class="section-heading-wrap">
        <h2>Publications from External Sources</h2>
      </div>
      <div class="resources-grid">

        <a href="https://file.notion.so/f/f/ef12c73e-cbf7-4839-b3e7-761583bb9c88/ea1a1058-6d32-4f35-9e10-c5576489c091/USAID_report_on_Rooftop_solar_with_storage_potential.pdf?table=block&id=2d279b81-cdb7-8074-9497-f292060dd4d3&spaceId=ef12c73e-cbf7-4839-b3e7-761583bb9c88&expirationTimestamp=1779206400000&signature=9ljBy9gNEuTneFnuaMxepRVaR_Fv-GwmuuBAx4_d06g&downloadName=USAID+report+on+Rooftop_solar+with_storage+potential.pdf"
          target="_blank" class="resource-card">
          <div class="resource-img-box">
            <img src="assets/image/resource/new/n13.png" alt="USAID Solar Report" onerror="this.remove();">
          </div>
          <div class="resource-body">
            <span class="resource-source">Development Study</span>
            <h3 class="resource-title">USAID Report on Rooftop Solar with Storage Integration Potential</h3>
            <span class="resource-action-link">Download Report <i class="fas fa-file-download"></i></span>
          </div>
        </a>

        <a href="https://medium.com/picus-capital/indias-energy-leapfrog-moment-e455ac998c2d" target="_blank"
          class="resource-card">
          <div class="resource-img-box">
            <img src="assets/image/resource/new/n14.png" alt="Picus Thesis" onerror="this.remove();">
          </div>
          <div class="resource-body">
            <span class="resource-source">Market Investment Thesis</span>
            <h3 class="resource-title">Picus Capital’s Strategic Thesis on Indian Energy Storage</h3>
            <span class="resource-action-link">Read Thesis Overview <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>

        <a href="https://theiaventures.substack.com/p/why-we-invested-in-voltseal?r=o
e3dv&utm_campaign=post&utm_medium=web&triedRedirect=true" target="_blank" class="resource-card">
          <div class="resource-img-box">
            <img src="assets/image/resource/new/n15.png" alt="Picus Thesis" onerror="this.remove();">
          </div>
          <div class="resource-body">
            <span class="resource-source">VoltSeal</span>
            <h3 class="resource-title">Why we invested in VoltSeal-</h3>
            <span class="resource-action-link">Read Thesis Overview <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>

        <a href="https://docsend.com/view/sgumijdxbr446mzj" target="_blank" class="resource-card">
          <div class="resource-img-box">
            <img src="assets/image/resource/new/n16.png" alt="Picus Thesis" onerror="this.remove();">
          </div>
          <div class="resource-body">
            <span class="resource-source">Energy Transition</span>
            <h3 class="resource-title">India's Industrial Energy Transition Opportunity -</h3>
            <span class="resource-action-link">Read Thesis Overview <i class="fas fa-arrow-right"></i></span>
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