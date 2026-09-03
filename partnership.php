<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoltSeal :: Partnership</title>
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
        Partnership </h1>
    </div>
  </section>

  <section style="background: #f4efd8; padding: 60px 20px; font-family: 'Segoe UI', Roboto, sans-serif;">
    <div class="pure-form-container">
      <form action="#">

        <span class="field-label">Full Name</span>
        <input type="text" class="form-field" placeholder="Enter Name" required>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
          <div>
            <span class="field-label">Phone Number</span>
            <input type="tel" class="form-field" placeholder="+91" required>
          </div>
          <div>
            <span class="field-label">Email</span>
            <input type="email" class="form-field" placeholder="Enter Email" required>
          </div>
        </div>

        <span class="field-label">Message</span>
        <textarea class="form-field" rows="3" placeholder="Massage.." required></textarea>

        <div class="submit-wrap">
          <button type="submit" class="partnership-submit">Submit Inquiry</button>
        </div>

      </form>
    </div>
  </section>

  <?php include('inc/footer.php') ?>
  <script src="assets/js/nav.js"></script>
</body>

</html>