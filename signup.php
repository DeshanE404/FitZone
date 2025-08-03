<?php
session_start();
include('config.php');
    $pageTitle = 'Sign up Form';
    include('header.php');
?>
<section class="join">
  <div class="container">
    <h2>Join Now</h2>
    <div class="contact-form">
      <form action="join.php" method="POST">
        <div class="form-group">
          <input type="text" name="name" placeholder="Your Name" required>
        </div>
        <div class="form-group">
          <input type="email" name="email" placeholder="Your Email" required>
        </div>
        <div class="form-group">
          <input type="tel" name="phone" placeholder="Your Phone">
        </div>
        <div class="form-group">
          <textarea name="message" rows="5" placeholder="Your Message"></textarea>
        </div>
        <button type="submit" class="btn-primary" style="width:100%;">Sign Up</button>
      </form>
    </div>
  </div>
</section>
<?php include('footer.php'); ?>
