<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoltSeal :: Contact Us</title>
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
        Contact Us </h1>
    </div>
  </section>

  <section style="background: #f4efd8; padding: 60px 20px; overflow: hidden;">

    <div class="contact-grid">

      <div class="form-container animate-up">
        <h2 style="font-size: 38px; color: #0a0c10; margin-bottom: 10px; font-weight: 800;">Get in <span
            style="color: #f0531c;">Touch</span></h2>
        <p style="color: #666; margin-bottom: 20px; font-size: 16px;">Ready to optimize your energy assets? Send us a
          message.</p>

        <form action="#">
          <div class="field-wrapper">
            <label>Full Name</label>
            <input type="text" class="custom-input" placeholder="Enter your name" required>
          </div>

          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div class="field-wrapper">
              <label>Company</label>
              <input type="text" class="custom-input" placeholder="Enter company" required>
            </div>
            <div class="field-wrapper">
              <label>Designation</label>
              <input type="text" class="custom-input" placeholder="Enter designation">
            </div>
          </div>

          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div class="field-wrapper">
              <label>Email Address</label>
              <input type="email" class="custom-input" placeholder="Enter email" required>
            </div>
            <div class="field-wrapper">
              <label>Phone</label>
              <input type="tel" class="custom-input" placeholder="+91">
            </div>
          </div>

          <div class="field-wrapper">
            <label>Message</label>
            <textarea class="custom-input" rows="4" placeholder="Message"></textarea>
          </div>

          <button type="submit" class="btn-submit">SEND INQUIRY</button>
        </form>
      </div>

      <div class="info-container animate-left">

        <div class="address-box delay-1 animate-left">
          <span class="tag-green">Contact Details</span>
          <h4 style="margin: 5px 0; font-size: 18px;">sales@voltseal.in</h4>
          <p style="color: #8b949e; margin-top: 5px;"> +91-9999281068 | +91-9999987980</p>
        </div>

        <div class="address-box delay-2 animate-left">
          <span class="tag-green">Noida Office</span>
          <p style="color: #e6edf3; font-size: 1rem; line-height: 1.6; margin: 0;">
            Awfis 8 Square Zen, First Floor<br>
            Sector – 142, Noida, Uttar Pradesh - 201304

          </p>
        </div>

        <div class="address-box delay-3 animate-left">
          <span class="tag-green">Registered Office</span>
          <p style="color: #e6edf3; font-size: 1rem; line-height: 1.6; margin: 0;">
            Plot No – 587, Kh No – 128/129 <br>
            Chatterpur Pahadhi, Gadaipur <br>
            New Delhi, Southwest Delhi – 110030

          </p>
        </div>

      </div>
    </div>
  </section>

  <?php include('inc/footer.php') ?>
  <script src="assets/js/nav.js"></script>
</body>

</html>