<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoltSeal :: Home</title>
  <link rel="icon" type="image/png" href="assets/image/logo/VoltSeal-Logo_Icon.png">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="fixed-bg-logo"></div>

  <?php include('inc/header.php') ?>

  <section class="hero">
    <div class="bg-slider">
      <div class="slide slide1"></div>
      <div class="slide slide2"></div>
      <div class="slide slide3"></div>
      <div class="slide slide4"></div>
    </div>

    <div class="hero-content">
      <h1 class="hero-title t1 active">The Smart Battery Energy Storage partner for Commercial and industrial businesses
      </h1>
      <h2 class="hero-title t2">Offering value-stacking solutions to meet diverse energy optimisation needs</h2>
      <h2 class="hero-title t3">Reduces energy costs, improves the payback period of solar assets, and lowers carbon
        footprints
      </h2>
      <h1 class="hero-title t4">Enables Commercial and industrial players to reduce their carbon footprint</h1>
    </div>

    <div class="hero-dots" aria-label="Hero carousel progress">
      <button class="hero-dot dot1 active" type="button" aria-label="Show banner 1" aria-current="true"></button>
      <button class="hero-dot dot2" type="button" aria-label="Show banner 2"></button>
      <button class="hero-dot dot3" type="button" aria-label="Show banner 3"></button>
      <button class="hero-dot dot4" type="button" aria-label="Show banner 4"></button>
    </div>
  </section>

  <script>
    (() => {
      const hero = document.querySelector('.hero');
      if (!hero) return;
      const slider = hero.querySelector('.bg-slider');
      const titles = Array.from(hero.querySelectorAll('.hero-title'));
      const dots = Array.from(hero.querySelectorAll('.hero-dot'));
      if (!slider || !titles.length || !dots.length) return;

      const slides = Array.from(slider.querySelectorAll('.slide'));
      const slideCount = slides.length;

      // Clone pehli slide ka
      const firstSlideClone = slides[0].cloneNode(true);
      firstSlideClone.setAttribute('aria-hidden', 'true');
      slider.appendChild(firstSlideClone);
      slider.style.setProperty('--slide-count', slideCount + 1);

      let activeIndex = 0;
      let timerId;

      function showSlide(index) {
        activeIndex = index;
        const realIndex = activeIndex % slideCount;

        // Transition apply karein
        slider.style.transition = 'transform 0.6s ease-in-out';
        slider.style.transform = `translateX(-${activeIndex * (100 / (slideCount + 1))}%)`;

        // Titles aur Dots update karein
        titles.forEach((title, titleIndex) => {
          title.classList.toggle('active', titleIndex === realIndex);
        });

        dots.forEach((dot, dotIndex) => {
          const isActive = dotIndex === realIndex;
          dot.classList.toggle('active', isActive);
          if (isActive) {
            dot.setAttribute('aria-current', 'true');
          } else {
            dot.removeAttribute('aria-current');
          }
        });
      }

      // Fix: Transition end hone par reset logic
      slider.addEventListener('transitionend', () => {
        if (activeIndex === slideCount) {
          slider.style.transition = 'none'; // Transition hatao
          activeIndex = 0;
          slider.style.transform = 'translateX(0)'; // Wapas 0 par jao

          // Browser ko blink khatam karne ke liye thoda time do
          setTimeout(() => {
            slider.style.transition = 'transform 0.6s ease-in-out';
          }, 50);
        }
      });

      function restartAutoSlide() {
        window.clearInterval(timerId);
        timerId = window.setInterval(() => {
          showSlide(activeIndex + 1);
        }, 6500);
      }

      dots.forEach((dot, dotIndex) => {
        dot.addEventListener('click', () => {
          showSlide(dotIndex);
          restartAutoSlide();
        });
      });

      showSlide(0);
      restartAutoSlide();
    })();
  </script>

  <section class="about-section">
    <div class="container">
      <div class="about-grid">
        <div class="image-area reveal-left">
          <div class="main-img-box">
            <img src="assets/image/banner/b1.png" alt="Green Space">
          </div>
        </div>

        <div class="content-area reveal-right">
          <span class="tagline">The Necessity</span>
          <h2 class="about-title">Batteries: The Fulcrum<br><span class="highlight"> of The Energy Transition </span>
          </h2>
          <p>India's solar energy buildout has been unexpectedly rapid, with total installed capacity nearing 130GW in
            2025, representing more than half of the total generation capacity, in utility-scale power plants as well as
            rooftop arrays.</p>
          <p>However, for substantial periods in the daytime, this capacity is not being utilized fully, and a large
            share of the renewable energy output is frequently curtailed. The ToD pricing now charges commercial
            consumers 20% more between 6–10 PM, creating an unexpected challenge and an economic loss. </p>
          <p>The same evening window when that curtailed midday solar could have been dispatched from distributed
            storage at near-zero marginal cost.</p>
        </div>
      </div>
    </div>
  </section>

  <script>
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("active");

          // Progress bar animation trigger
          if (entry.target.classList.contains('content-area')) {
            const bars = entry.target.querySelectorAll('.progress-line span');
            bars.forEach(bar => {
              const width = bar.parentElement.getAttribute('data-width');
              bar.style.width = width;
            });
          }
        }
      });
    }, {
      threshold: 0.3
    });

    document.querySelectorAll('.reveal-left, .reveal-right, .content-area').forEach(el => {
      observer.observe(el);
    });
  </script>


  <section class="strategic-vision"
    style="background:#f4efd8; padding:60px 0; font-family: 'Plus Jakarta Sans', sans-serif;">
    <div class="container" style="max-width: 1200px; margin: auto; padding: 0 20px;">

      <!-- Vertically centered columns -->
      <div class="need-about-layout"
        style="display: grid; grid-template-columns: minmax(0, 1fr) minmax(360px, 460px); gap: 60px; align-items: center;">

        <div class="strategy-content">
          <span class="reveal" style="color: #17c64f; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; display: block;
             margin-bottom: 10px;">
            The Need
          </span>
          <h2 class="reveal" style="color: #323232; font-size: 28px; font-weight: 800;  margin-bottom: 15px;">
            India's renewable revolution needs
            <span style="color: #17c64f;">energy storage to:</span>
          </h2>

          <div class="points-grid">
            <div class="reveal point-card">
              <i class="fas fa-bolt"></i>
              <strong>Cheaper electricity (upto 4 hours a day)</strong>
            </div>

            <div class="reveal point-card">
              <i class="fas fa-gas-pump"></i>
              <strong>3x reduction in DG usage cost</strong>
            </div>

            <div class="reveal point-card">
              <i class="fas fa-chart-line"></i>
              <strong>Reduce peak charges</strong>
            </div>

            <div class="reveal point-card">
              <i class="fas fa-clock"></i>
              <strong>Overcomes ~20% increase in Time of Day tariff during peak hours (expected nation wide by April
                2027)</strong>
            </div>

            <div class="reveal point-card">
              <i class="fas fa-solar-panel"></i>
              <strong>Improve payback period of existing on premise solar asset</strong>
            </div>

            <div class="reveal point-card">
              <i class="fas fa-leaf"></i>
              <strong>Lowers your facilities carbon footprint</strong>
            </div>
          </div>

        </div>

        <div class="vision-box reveal"
          style="background: #0A332D; padding: 30px; border-radius: 30px; position: relative; overflow: hidden; color: #fff; width: 100%;">

          <!-- Glow Effect -->
          <div style="position: absolute; top: -20px; right: -20px; width: 100px; height: 100px;
             background: #17c64f; border-radius: 50%; filter: blur(60px); opacity: 0.3;">
          </div>

          <!-- Heading -->
          <h3 style="color: #f0531c; font-size: 22px; font-weight: 700; margin-bottom: 10px;">
            About VoltSeal
          </h3>

          <!-- Paragraph 1 -->
          <p
            style="color: #e6edf3; margin-top: 10px; line-height: 1.8; font-size: 16px; margin-bottom: 10px; text-align: justify;">
            We are building BESS systems to harness the renewable energy to
            reduce electricity cost for commercial and industrial customers.
          </p>

          <!-- Heading -->
          <h3 style="color: #f0531c; font-size: 22px; font-weight: 700; margin-bottom: 10px;">
            Our Vision
          </h3>

          <!-- Paragraph 1 -->
          <p
            style="color: #e6edf3; margin-top: 10px; line-height: 1.8; font-size: 16px; margin-bottom: 10px; text-align: justify;">
            <strong>Vision For the Grid of the Future:</strong> Battery Energy Storage Systems (BESS) will become
            integral parts of the power supply system, providing energy storage at various nodes of decentralized
            renewable-powered microgrids and virtual power plants for greater system-wide reliability and efficiency.
          </p>


          <!-- Heading -->
          <h3 style="color: #f0531c; font-size: 22px; font-weight: 700; margin-bottom: 10px;">
            Our Mission
          </h3>

          <!-- Paragraph 1 -->
          <p
            style="color: #e6edf3; margin-top: 10px; line-height: 1.8; font-size: 16px; margin-bottom: 10px; text-align: justify;">
            Unlocking India's potential of renewable energy through reliable battery energy storage systems

        </div>
      </div>
    </div>
  </section>


  <section class="solutions-section">
    <div class="container">
      <div class="heading-wrapper">
        <h2> VoltSeal Solutions</h2>
        <div style="width: 50px; height: 4px; background: var(--volt-orange); margin: 10px auto;"></div>
      </div>
      <div class="solutions-grid">
        <!-- Card 1: Time-Shifting -->
        <a href="time-shifting.php" class="solution-card" style="text-decoration: none; color: inherit;">
          <div class="icon-box">
            <i class="fas fa-clock"></i>
          </div>
          <div class="content">
            <h3>Time-Shifting (Energy Arbitrage)</h3>
            <p>The battery stores electricity when power is cheap or abundant (e.g., solar generation during midday or
              off-peak hours) and discharges when electricity prices are high (peak demand periods).</p>
            <span class="solution-read-more">Read More <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>

        <!-- Card 2: Peak Shaving -->
        <a href="peak-shaving.php" class="solution-card" style="text-decoration: none; color: inherit;">
          <div class="icon-box">
            <i class="fas fa-chart-area"></i>
          </div>
          <div class="content">
            <h3>Peak Shaving (Demand Charge Reduction)</h3>
            <p>The battery reduces short-duration power peaks, lowering demand charges or peak procurement costs. The
              battery discharges only during the highest consumption periods to flatten the demand profile.</p>
            <span class="solution-read-more">Read More <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>

        <!-- Card 3: DG Avoidance -->
        <a href="dg-avoidance.php" class="solution-card" style="text-decoration: none; color: inherit;">
          <div class="icon-box">
            <i class="fas fa-gas-pump"></i>
          </div>
          <div class="content">
            <h3>DG (Diesel Genset) Avoidance</h3>
            <p>Batteries can reduce or completely eliminate the need to run diesel generators (DG sets) during power
              outages, leading to fuel cost savings of multiple order.</p>
            <span class="solution-read-more">Read More <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>

        <!-- Card 4: Green Charging -->
        <a href="green-charging.php" class="solution-card" style="text-decoration: none; color: inherit;">
          <div class="icon-box">
            <i class="fas fa-charging-station"></i>
          </div>
          <div class="content">
            <h3>Green Charging Solutioning</h3>
            <p>A BESS can store electricity from solar, wind, or low-carbon grid power and then use it to charge
              electric vehicles when needed, reducing dependence on fossil-fuel-heavy grid electricity, minimizing peak
              demand stress and carbon footprint.</p>
            <span class="solution-read-more">Read More <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>
      </div>

    </div>
  </section>


  <section
    style="background: #0A332D; padding: 60px 20px; overflow: hidden; position: relative; font-family: system-ui, -apple-system, sans-serif;">
    <div style="max-width: 1200px; margin: 0 auto; position: relative; z-index: 1;">

      <!-- Section Header -->
      <div style="text-align: center; margin-bottom: 40px;">
        <span
          style="color: #17c64f; font-weight: 700; letter-spacing: 2px; font-size: 13px; text-transform: uppercase;">Leadership</span>
        <h2
          style="color: #ffffff; font-size: 36px; font-weight: 800; margin-top: 5px; margin-bottom: 0; line-height: 1.2;">
          Founding <span style="color: #17c64f;">Team</span>
        </h2>
        <div style="width: 50px; height: 3px; background: #17c64f; margin: 12px auto 0 auto; border-radius: 2px;"></div>
      </div>

      <!-- Cards Side-by-Side Flex Grid Container -->
      <div style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center; width: 100%;">

        <!-- Founder 1: Mudit -->
        <div style="flex: 1; min-width: 300px; max-width: 560px;">
          <div
            style="background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 16px; padding: 30px; height: 100%; box-sizing: border-box; display: flex; flex-direction: column; transition: transform 0.3s ease;">
            <div>
              <!-- Image & Header Centered -->
              <div style="text-align: center; margin-bottom: 20px;">
                <img src="assets/image/founder/Mudit-Narain.jpg" alt="Mudit Narain"
                  style="width: 110px; height: 110px; object-fit: cover; border-radius: 50%; border: 3px solid #17c64f; margin: 0 auto 15px auto; box-shadow: 0 8px 25px rgba(23, 198, 79, 0.25); display: block;">

                <h3 style="color: #ffffff; font-size: 24px; font-weight: 700; margin: 0 0 10px 0;">Mudit Narain</h3>

                <!-- Pill Badge for Role -->
                <span
                  style="color: #17c64f; background: rgba(23, 198, 79, 0.1); padding: 6px 14px; border-radius: 30px; font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px; display: inline-block; line-height: 1.4; max-width: 90%;">
                  18+ Years of experience at the Intersection of Energy, Policy & Capital
                </span>

                <br>
                <!-- LinkedIn Profile Button -->
                <a href="https://www.linkedin.com/in/mudit-narain-6842b650/" target="_blank"
                  style="color: #17c64f; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 6px; margin-top: 15px; font-weight: 500; opacity: 0.9; transition: opacity 0.2s;">
                  <i class="fab fa-linkedin" style="font-size: 16px;"></i> LinkedIn Profile
                </a>
              </div>

              <!-- Paragraph Description -->
              <p style="color: #a1aab3; font-size: 15px; line-height: 1.6; margin: 0 0 25px 0; text-align: justify;">
                Mudit brings over 18 years of lending, operating, and investing experience in the energy sector, with
                a strong focus on renewable energy and policy. His background includes formal training at MIT’s
                Technology and Policy Program in energy and climate change (2005-2007), seven years in the World
                Bank’s Energy practice, and six years working with the Government of India - at Atal Innovation
                Mission, NITI Aayog and the Office of the Principal Scientific Advisor. He has also been associated
                with two venture capital funds—INFUSE and Blume—and led a science and technology think tank, FAST
                India, for short stints.
              </p>
            </div>

            <!-- Custom Clean Bullet Points (Pushed to bottom perfectly) -->
            <ul
              style="list-style: none; padding: 0; margin: auto 0 0 0; border-top: 1px solid rgba(255,255,255,0.08); padding-top: 20px;">
              <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 12px;">
                <i class="fas fa-check-circle"
                  style="color: #17c64f; font-size: 14px; margin-top: 4px; flex-shrink: 0;"></i>
                <span style="color: #a1aab3; font-size: 15px; line-height: 1.5;">World Bank Energy Practice – 7
                  years</span>
              </li>
              <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 0;">
                <i class="fas fa-check-circle"
                  style="color: #17c64f; font-size: 14px; margin-top: 4px; flex-shrink: 0;"></i>
                <span style="color: #a1aab3; font-size: 15px; line-height: 1.5;">Govt. of India – 6 years</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Founder 2: Abhijeet -->
        <div style="flex: 1; min-width: 300px; max-width: 560px;">
          <div
            style="background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 16px; padding: 30px; height: 100%; box-sizing: border-box; display: flex; flex-direction: column; transition: transform 0.3s ease;">
            <div>
              <!-- Image & Header Centered -->
              <div style="text-align: center; margin-bottom: 20px;">
                <img src="assets/image/founder/Abhijeet-Pandey.jpeg" alt="Abhijeet Pandey"
                  style="width: 110px; height: 110px !important; object-fit: cover; border-radius: 50%; border: 3px solid #17c64f; margin: 0 auto 15px auto; box-shadow: 0 8px 25px rgba(23, 198, 79, 0.25); display: block;">

                <h3 style="color: #ffffff; font-size: 24px; font-weight: 700; margin: 0 0 10px 0;">Abhijeet Pandey</h3>

                <!-- Pill Badge for Role -->
                <span
                  style="color: #17c64f; background: rgba(23, 198, 79, 0.1); padding: 6px 14px; border-radius: 30px; font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px; display: inline-block; line-height: 1.4; max-width: 90%;">
                  11+ years of experience in strategy and sustainability
                </span>

                <br>
                <!-- LinkedIn Profile Button -->
                <a href="https://www.linkedin.com/in/abhijeetpandey1/" target="_blank"
                  style="color: #17c64f; text-decoration: none; font-size: 14px; display: inline-flex; align-items: center; gap: 6px; margin-top: 15px; font-weight: 500; opacity: 0.9; transition: opacity 0.2s;">
                  <i class="fab fa-linkedin" style="font-size: 16px;"></i> LinkedIn Profile
                </a>
              </div>

              <!-- Paragraph Description -->
              <p style="color: #a1aab3; font-size: 15px; line-height: 1.6; margin: 0 0 25px 0; text-align: justify;">
                Abhijeet has deep experience in driving strategy, investments and large-scale transformations across
                energy, transactions, infrastructure, social impact and sustainability. He has worked directly with
                Fortune 500 companies, global private equity funds in UK, US, Europe and India, multi-laterals
                institutions, governments, and climate-tech innovators across some of the transformative projects.
              </p>
            </div>

            <!-- Custom Clean Bullet Points (Pushed to bottom perfectly) -->
            <ul
              style="list-style: none; padding: 0; margin: auto 0 0 0; border-top: 1px solid rgba(255,255,255,0.08); padding-top: 20px;">
              <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 12px;">
                <i class="fas fa-check-circle"
                  style="color: #17c64f; font-size: 14px; margin-top: 4px; flex-shrink: 0;"></i>
                <span style="color: #a1aab3; font-size: 15px; line-height: 1.5;">PwC India - 6 years</span>
              </li>
              <li style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 0;">
                <i class="fas fa-check-circle"
                  style="color: #17c64f; font-size: 14px; margin-top: 4px; flex-shrink: 0;"></i>
                <span style="color: #a1aab3; font-size: 15px; line-height: 1.5;">Xynteo India - 5 years</span>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section style="background: #fbf5eb; padding: 60px 20px 30px;">
    <div class="w-full max-w-7xl mx-auto px-4">
      <div class="heading-wrapper">
        <h2> Investors and Partners</h2>
        <div style="width: 50px; height: 4px; background: var(--volt-orange); margin: 10px auto;"></div>
      </div>

      <div class="slider-container rounded-xl shadow-inner">
        <div class="slider-track">
          <div class="slider-set">
            <a href="https://www.mvcapital.vc/" target="_blank" rel="noopener noreferrer"
              class="investor-card-animated">
              <img src="assets/image/investor/new/1.jpg" alt="Momentum Capital" class="investor-logo">
            </a>
            <a href="https://rainmatter.com/" target="_blank" rel="noopener noreferrer" class="investor-card-animated">
              <img src="assets/image/investor/new/2.svg" alt="Rainmatter" class="investor-logo">
            </a>
            <a href="https://www.socialalpha.org/" target="_blank" rel="noopener noreferrer"
              class="investor-card-animated">
              <img src="assets/image/investor/new/3.png" alt="Social Alpha" class="investor-logo">
              <span class="partner-label">Incubation Partner</span>
            </a>
            <a href="https://www.theia-ventures.com/" target="_blank" rel="noopener noreferrer"
              class="investor-card-animated">
              <img src="assets/image/investor/new/4.jpeg" alt="Theia Ventures" class="investor-logo">
            </a>
          </div>

          <div class="slider-set" aria-hidden="true">
            <a href="https://www.mvcapital.vc/" tabindex="-1" target="_blank" rel="noopener noreferrer"
              class="investor-card-animated">
              <img src="assets/image/investor/new/1.jpg" alt="" class="investor-logo">
            </a>
            <a href="https://rainmatter.com/" tabindex="-1" target="_blank" rel="noopener noreferrer"
              class="investor-card-animated">
              <img src="assets/image/investor/new/2.svg" alt="" class="investor-logo">
            </a>
            <a href="https://www.socialalpha.org/" tabindex="-1" target="_blank" rel="noopener noreferrer"
              class="investor-card-animated">
              <img src="assets/image/investor/new/3.png" alt="" class="investor-logo">
              <span class="partner-label">Incubation Partner</span>
            </a>
            <a href="https://www.theia-ventures.com/" tabindex="-1" target="_blank" rel="noopener noreferrer"
              class="investor-card-animated">
              <img src="assets/image/investor/new/4.jpeg" alt="" class="investor-logo">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="advisor-section" style="background: #0A332D; font-family: system-ui, -apple-system, sans-serif;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">

      <div style="text-align: center; margin-bottom: 25px;">
        <h2
          style="color: #ffffff; font-size: 32px; font-weight: 800; margin-top: 5px; margin-bottom: 0; line-height: 1.2;">
          Advisors
        </h2>
        <div style="width: 50px; height: 3px; background: #17c64f; margin: 8px auto 0 auto; border-radius: 2px;"></div>
      </div>

      <!-- Cards Grid -->
      <div class="advisor-grid">

        <!-- Advisor 1: Kunal Upadhyay -->
        <div class="advisor-card reveal">
          <div class="card-inner">
            <img src="assets/image/advisor/Kunal-Upadhyay.png" alt="Kunal Upadhyay" class="advisor-img">
            <div class="advisor-info">
              <h3>Kunal Upadhyay</h3>
              <span class="designation">Climate Tech Investor Pioneer</span>
              <div class="divider"></div>
              <p>
                Co-founder, IIM A Ventures, Bharat Innovations Fund, INFUSE and multiple initiatives and ADB Ventures
                2020-2025
              </p>
            </div>
          </div>
        </div>

        <!-- Advisor 2: Ashish Goel -->
        <div class="advisor-card reveal" style="transition-delay: 0.2s;">
          <div class="card-inner">
            <img src="assets/image/advisor/Ashish-Goel.png" alt="Ashish Goel" class="advisor-img">
            <div class="advisor-info">
              <h3>Ashish Goel</h3>
              <span class="designation">Climate tech builder and evangelist.</span>
              <div class="divider"></div>
              <p>Founder, OctoLife. Ex-Founder & CEO at Urban Ladder. Climate tech builder and evangelist.</p>
            </div>
          </div>
        </div>

        <!-- Advisor 3: Manoj Kumar -->
        <div class="advisor-card reveal" style="transition-delay: 0.4s;">
          <div class="card-inner">
            <img src="assets/image/advisor/Manoj-Kumar.png" alt="Manoj Kumar" class="advisor-img">
            <div class="advisor-info">
              <h3>Manoj Kumar</h3>
              <span class="designation">Founder, Social Alpha</span>
              <div class="divider"></div>
              <p>
                Founder, Social Alpha Accomplished investor with CEO-level experience
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <style>
    /* Wrapper to handle the floating effect */
    .investor-wrapper {
      animation: float 6s ease-in-out infinite;
    }

    .investor-wrapper:nth-child(1) {
      animation-delay: 0s;
    }

    /* Card Styling (Glass effect adjusted for light beige background) */
    .investor-card-animated {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background: rgb(10 51 45);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.8);
      border-radius: 24px;
      padding: 25px 30px;
      width: 260px;
      height: 170px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
      text-decoration: none;
      box-sizing: border-box;
      position: relative;
      overflow: hidden;
      transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);

      /* Apply entrance animation */
      animation: fadeUp 0.8s ease backwards;
    }

    .investor-wrapper:nth-child(1) .investor-card-animated {
      animation-delay: 0.1s;
    }

    /* Hover Effects */
    .investor-card-animated:hover {
      background: #ffffff;
      transform: scale(1.03);
      box-shadow: 0 20px 40px rgba(23, 198, 79, 0.12);
      border-color: rgba(23, 198, 79, 0.4);
    }

    /* Logo Image Styling */
    .investor-logo {
      max-width: 100%;
      max-height: 65px;
      object-fit: contain;
      transition: transform 0.5s ease;
      position: relative;
      z-index: 2;
    }

    .investor-card-animated:hover .investor-logo {
      transform: scale(1.05);
    }

    /* Partner Badge Label Styling */
    .partner-label {
      margin-top: 12px;
      color: #fbf5eb;
      font-size: 13px;
      font-weight: 600;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      position: relative;
      z-index: 2;
      transition: color 0.3s ease;
    }

    .investor-card-animated:hover .partner-label {
      color: #17c64f;
    }


    .investor-card-animated:hover .partner-label {
      color: #17c64f;
    }

    /* Glowing background effect on hover */
    .investor-card-animated::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 0;
      height: 0;
      background: radial-gradient(circle, rgba(23, 198, 79, 0.08) 0%, rgba(255, 255, 255, 0) 70%);
      transform: translate(-50%, -50%);
      transition: width 0.5s ease, height 0.5s ease;
      z-index: 1;
      border-radius: 50%;
    }

    .investor-card-animated:hover::before {
      width: 250px;
      height: 250px;
    }


    @keyframes slide {
      0% {
        transform: translateX(0);
      }

      100% {
        /* Translate by half the width to create an infinite loop effect since we duplicate the content */
        transform: translateX(-50%);
      }
    }

    .slider-container {
      overflow: hidden;
      white-space: nowrap;
      position: relative;
      width: 100%;
      padding: 20px 0;

      /* Gradient masks for smooth fade in/out at the edges */
      -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
      mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    }

    .slider-track {
      display: flex;
      width: max-content;
      animation: slide 22s linear infinite;
    }

    .slider-track:hover {
      animation-play-state: paused;
    }

    .slider-set {
      display: flex;
      gap: 2rem;
      padding-right: 2rem;
      flex-shrink: 0;
    }

    .investor-card-animated {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 1.5rem;
      background: white;
      border-radius: 0.75rem;
      box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
      text-decoration: none;
      color: inherit;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      min-width: 250px;
      /* Ensure cards have a consistent width */
    }

    .investor-card-animated:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
    }

    .investor-logo {
      max-height: 90px;
      width: auto;
      object-fit: contain;
      margin-bottom: 1rem;
      /* Placeholder styling in case images are missing */

      border-radius: 4px;
    }

    .partner-label {
      font-size: 0.875rem;
      font-weight: 500;
      color: #475569;
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }
  </style>




  <section class="gallery-section-light">
    <div class="container">
      <div class="heading-wrapper">
        <h2>News</h2>
        <div style="width: 50px; height: 4px; background: var(--volt-orange); margin: 10px auto;"></div>
        <div class="gallery-grid-4">
          <div class="gallery-item-light reveal" onclick="openLightbox(0)">
            <img src="assets/image/about/a1.png" alt="Gallery 1">
            <div class="zoom-icon">+</div>
          </div>
          <div class="gallery-item-light reveal" onclick="openLightbox(1)" style="transition-delay: 0.1s;">
            <img src="assets/image/about/a2.png" alt="Gallery 2">
            <div class="zoom-icon">+</div>
          </div>
          <div class="gallery-item-light reveal" onclick="openLightbox(2)" style="transition-delay: 0.2s;">
            <img src="assets/image/about/a3.png" alt="Gallery 3">
            <div class="zoom-icon">+</div>
          </div>
          <div class="gallery-item-light reveal" onclick="openLightbox(3)" style="transition-delay: 0.3s;">
            <img src="assets/image/about/a4.png" alt="Gallery 4">
            <div class="zoom-icon">+</div>
          </div>
        </div>
      </div>
  </section>

  <div id="lightbox" class="lightbox">
    <span class="close-btn" onclick="closeLightbox()">&times;</span>
    <button class="prev-btn" onclick="changeImage(-1)">&#10094;</button>
    <div class="lightbox-content">
      <img id="lightbox-img" src="" alt="">
    </div>
    <button class="next-btn" onclick="changeImage(1)">&#10095;</button>
  </div>


  <section class="contact-section">
    <div class="container">
      <h2 class="section-title">Get in <span class="accent">Touch</span></h2>
      <p class="section-subtitle">Have questions? Reach out to us at our registered or regional offices.</p>

      <div class="contact-grid">
        <!-- Registered Address Card -->
        <div class="contact-card">
          <div class="icon-box">
            <i class="fas fa-building"></i>
          </div>
          <div class="card-content">
            <h3>Registered Office</h3>
            <p>Plot No – 587, Kh No – 128/129
              Chatterpur Pahadhi,<br> Gadaipur
              New Delhi, Southwest Delhi – 110030</p>
          </div>
        </div>

        <!-- Regional Office Address Card -->
        <div class="contact-card highlight">
          <div class="icon-box">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <div class="card-content">
            <!-- Changed 'Office Office' to 'Regional Office' -->
            <h3>Business Office (Noida)</h3>
            <p>Awfis 8 Square Zen, First Floor <br>
              Sector – 142, Noida, Uttar Pradesh - 201304</p>
          </div>
        </div>
        <!-- ... existing cards above ... -->
      </div> <!-- .contact-grid ends -->

      <!-- New CTA Button Section -->
      <div class="contact-cta" style="margin-top: 30px;">
        <a href="contact.php" class="btn-primary">
          Contact Us <i class="fas fa-phone"></i>
        </a>
      </div>

    </div> <!-- .container ends -->
  </section>



  <script>
    const images = [
      "assets/image/about/a1.png",
      "assets/image/about/a2.png",
      "assets/image/about/a3.png",
      "assets/image/about/a4.png"
    ];

    let currentIndex = 0;

    function openLightbox(index) {
      currentIndex = index;
      document.getElementById("lightbox-img").src = images[currentIndex];
      document.getElementById("lightbox").style.display = "flex";
      document.body.style.overflow = "hidden"; // Scroll stop
    }

    function closeLightbox() {
      document.getElementById("lightbox").style.display = "none";
      document.body.style.overflow = "auto";
    }

    function changeImage(dir) {
      currentIndex += dir;
      if (currentIndex < 0) currentIndex = images.length - 1;
      if (currentIndex >= images.length) currentIndex = 0;
      document.getElementById("lightbox-img").src = images[currentIndex];
    }

    // Close on click outside
    window.onclick = function (event) {
      const lb = document.getElementById("lightbox");
      if (event.target == lb) closeLightbox();
    }
  </script>

  <script>
    const advisorObs = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
        }
      });
    }, {
      threshold: 0.1
    });

    document.querySelectorAll('.reveal').forEach(el => advisorObs.observe(el));
  </script>

  <?php include('inc/footer.php') ?>
  <script src="assets/js/nav.js"></script>
</body>

</html>