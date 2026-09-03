<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoltSeal :: Current Milestones</title>
  <link rel="icon" type="image/png" href="assets/image/logo/VoltSeal-Logo_Icon.png">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <?php include('inc/header.php') ?>

  <section class="hero-small" style="position: relative; height: 60vh; min-height: 400px; background: #0a0c10; display: flex; align-items: center;
     overflow: hidden; font-family: 'Plus Jakarta Sans', sans-serif;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
       background: linear-gradient(rgba(10, 12, 16, 0.8), rgba(10, 12, 16, 0.6)),
        url('assets/image/about/a3.png'); background-size: cover; background-position: center;">
    </div>

    <div class="container"
      style="max-width: 1200px; margin: auto; padding: 0 20px; position: relative; z-index: 2; text-align: center;">
      <h1 class="reveal" style="color: #fff; font-size: 40px; font-weight: 800; line-height: 1.2; margin: 0;">
        Current Milestones</h1>
    </div>
  </section>

  <section
    style="background: #f4efd8; min-height: 40vh; display: flex; align-items: center; justify-content: center; font-family: 'Segoe UI', Roboto, sans-serif; overflow: hidden;">

    <style>
      @keyframes trackOut {
        0% {
          opacity: 0;
          letter-spacing: -0.5em;
          filter: blur(10px);
        }

        100% {
          opacity: 1;
          letter-spacing: 0.15em;
          filter: blur(0);
        }
      }

      /* Subtle glow for the green dot */
      @keyframes pulseEnergy {

        0%,
        100% {
          transform: scale(1);
          opacity: 1;
        }

        50% {
          transform: scale(1.3);
          opacity: 0.7;
        }
      }

      .coming-soon-line {
        font-size: clamp(2rem, 8vw, 6rem);
        /* Responsive sizing */
        font-weight: 900;
        color: #0a0c10;
        text-transform: uppercase;
        white-space: nowrap;
        /* Forces single line */
        display: flex;
        align-items: center;
        animation: trackOut 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
      }

      .dot {
        color: #89c540;
        margin-left: 5px;
        display: inline-block;
        animation: pulseEnergy 2s infinite ease-in-out;
      }

      /* Minimalist industrial borders */
      .line-accent {
        width: 50px;
        height: 2px;
        background: rgba(10, 12, 16, 0.1);
        margin: 0 30px;
      }

      @media (max-width: 600px) {
        .line-accent {
          display: none;
        }
      }
    </style>

    <div style="display: flex; align-items: center;">
      <div class="line-accent"></div>

      <h1 class="coming-soon-line">
        Coming Soon<span class="dot">.</span>
      </h1>

      <div class="line-accent"></div>
    </div>

  </section>

  <?php include('inc/footer.php') ?>
  <script src="assets/js/nav.js"></script>
</body>

</html>